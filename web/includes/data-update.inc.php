<?php
session_start();

if (isset($_SESSION['username'])) $role = $_SESSION['userrole'];
else $role = 'guest';
if (!(($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib'))) {
  header("Location: ../index.php?error=noaccess&role=".$_SESSION['userrole']);
  exit;
}
require "dbh.inc.php";

// 1. Update team china ranking
if (isset($_POST['team_china_rankings'])) {
  echo "Updating Team China rankings..." ;
  $has_error = False;
  $team_china_rankings_update = $_POST['team_china_rankings_update'];
  $team_china_rankings_update = explode("\n", $team_china_rankings_update);
  $team_china_rankings_update = array_filter(array_map('trim', $team_china_rankings_update));

  $ext = pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION);
  $ext = strtolower($ext);

  foreach ($team_china_rankings_update as $line) {
    $team_china_rankings_info = explode(",", $line);
    if (count($team_china_rankings_info)!=5) {
      echo "Entry '".$line."' does not have 5 fields! Nothing is updated.";
      $has_error = True;
    }
  }

  if ($has_error) {
    echo "Error encounted. Nothing has been updated.";
    exit;
  }

  foreach ($team_china_rankings_update as $line) {
    $team_china_rankings_info = explode (",", $line);
    $team_china_rankings_info = array_map('trim', $team_china_rankings_info);
    $team_china_rankings_info[2] = strtolower($team_china_rankings_info[2]);

    // write to sql table, without file name.
    echo "writing to sql table...";
    echo "uploader_userid: ".$_SESSION['userid']."<br>";
    echo "uploader_username: ".$_SESSION['username']."<br>";
    echo "update_date: ".$team_china_rankings_info[0]."<br>";
    echo "scope: ".$team_china_rankings_info[1]."<br>";
    echo "team_name: ".$team_china_rankings_info[2]."<br>";
    echo "ranking: ".$team_china_rankings_info[3]."<br>";
    echo "trophies: ".$team_china_rankings_info[4]."<br>";

    $sql = "INSERT INTO team_china_leaderboard (uploader_userid, uploader_username, update_date, scope, team_name, ranking, trophies) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "issssii", $_SESSION['userid'], $_SESSION['username'], ...$team_china_rankings_info);
    mysqli_stmt_execute($stmt);

    // Append last entry id to the end of uploaded file to avoid duplication
    $last_entry_id = mysqli_insert_id($conn);
    echo "Last entry id: ".$last_entry_id."<br><br>";
    $ext = pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION);
    $ext = strtolower($ext);
    $filename = "../../img/team-china/rank-".$team_china_rankings_info[2]."-".$team_china_rankings_info[1]."-".$team_china_rankings_info[0]."-".$last_entry_id.".".$ext;
    echo "filename: ".$filename."<br><br>";
    echo "tmp_name: ".$_FILES["uploadfile"]["tmp_name"]."<br><br>";

    // check file type and compress image files
    $valid_ext = array('jpg', 'jpeg', 'png');
    if(!in_array($ext,$valid_ext)){
      echo "Invalid file type. Only .jpg, .jpeg and .png are accepted.";
      exit;
    }

    // Compress Image
    compressImage($_FILES["uploadfile"]["tmp_name"],$filename,60);
    // move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $filename)
    echo $filename." was uploaded successfully.<br><br>";

    // update sql table with file name
    $sql = "UPDATE team_china_leaderboard SET filename = ? WHERE entry_id = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "si", $filename, $last_entry_id);
    mysqli_stmt_execute($stmt);
  }
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 2. Update team china roster
if (isset($_POST['tc_roster_update'])) {
  echo "Updating TEAM CHINA roster..." ;
  $has_error = False;
  $player_updates = $_POST['player_updates'];
  $player_updates_array = explode("\n", $player_updates);
  $player_updates_array = array_filter(array_map('trim', $player_updates_array));

  foreach ($player_updates_array as $line) {
    $player_info = explode (",", $line);
    if (count($player_info)!=7) {
      echo "Entry '".$line."' does not have 7 fields! Nothing is updated";
      $has_error = True;
    }
  }

  if ($has_error) {
    echo "Error encounted. Nothing has been updated.";
    exit;
  }

  $n_updated = 0;
  $n_added = 0;
  foreach ($player_updates_array as $line) {
    echo $line."<br>";
    $update_this_record = false;
    $player_info = explode (",", $line);
    $player_info = array_map('trim', $player_info);
    $sql = "SELECT * FROM team_china_roster WHERE player_id=? AND update_date=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../team-china.php?lang=zh&error=sql_error");
      exit;
    }

    mysqli_stmt_bind_param($stmt, "is", $player_info[0], $player_info[6]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $matchingUsername = mysqli_stmt_num_rows($stmt);
    if ($matchingUsername>0) {
      $sql = "DELETE FROM team_china_roster WHERE player_id=? AND update_date=?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_bind_param($stmt, "is", $player_info[0], $player_info[6]);
      mysqli_stmt_execute($stmt);
      $update_this_record = true;
      $n_updated += 1;
      echo "updated. <br><br>";
    }

    $sql = "INSERT INTO team_china_roster VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "isiiiis", $player_info[0], $player_info[1], $player_info[3], $player_info[2], $player_info[4], $player_info[5], $player_info[6]);
    mysqli_stmt_execute($stmt);
    if (!$update_this_record) {
      $n_added += 1;
      echo "added. <br><br>";
    }
  }
  echo $n_added." records are added. <br>";
  echo $n_updated." records are updated. <br>";
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 3. Update Team China scores
if (isset($_POST['tc_scores_update'])) {
  echo "Updating TEAM CHINA match scores..." ;
  $has_error = False;
  $scores_updates = $_POST['scores_updates'];
  $scores_updates_array = explode("\n", $scores_updates);
  $scores_updates_array = array_filter(array_map('trim', $scores_updates_array));

  foreach ($scores_updates_array as $line) {
    $match_info = explode (",", $line);
    if (count($match_info)!=14) {
      echo "Entry '".$line."' does not have 19 fields! Nothing is updated.";
      $has_error = True;
    }
  }

  if ($has_error) {
    echo "Error encounted. Nothing has been updated.";
    exit;
  }

  $n_updated = 0;
  $n_added = 0;
  foreach ($scores_updates_array as $line) {
    echo $line."<br>";
    $update_this_record = false;
    $match_info = explode (",", $line);
    for ($i=0; $i<14; $i++) {
      $match_info[$i] = $match_info[$i]=='' ? NULL : $match_info[$i];
    }
    $sql = "SELECT * FROM team_china_scores WHERE matching_date=? AND our_name=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../team-china.php?lang=zh&error=sql_error");
      exit;
    }

    mysqli_stmt_bind_param($stmt, "ss", $match_info[0], $match_info[2]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $existing_record = mysqli_stmt_num_rows($stmt);
    if ($existing_record>0) {
      $sql = "DELETE FROM team_china_scores WHERE matching_date=? AND our_name=?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_bind_param($stmt, "ss", $match_info[0], $match_info[2]);
      mysqli_stmt_execute($stmt);
      $update_this_record = true;
      $n_updated += 1;
      echo "updated. <br><br>";
    }

    $sql = "INSERT INTO team_china_scores VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sssssiisisisis", ...$match_info);
    mysqli_stmt_execute($stmt);
    if (!$update_this_record) {
      $n_added += 1;
      echo "added. <br><br>";
    }
  }
  echo $n_added." records are added. <br>";
  echo $n_updated." records are updated. <br>";
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 4. Update friend links
if (isset($_POST['friend_link_update'])) {
  echo "Updating friend links...<br><br>" ;
  $has_error = False;
  $player_updates = $_POST['player_updates'];
  $player_updates_array = explode("\n", $player_updates);
  $player_updates_array = array_filter(array_map('trim', $player_updates_array));

  foreach ($player_updates_array as $line) {
    $player_info = explode (",", $line);
    if (count($player_info)!=5) {
      echo "Entry '".$line."' does not have 5 fields! Nothing is updated";
      $has_error = True;
    }
  }

  if ($has_error) {
    echo "Error encounted. Nothing has been updated.";
    exit;
  }

  $n_updated = 0;
  $n_added = 0;
  foreach ($player_updates_array as $line) {
    echo "Updating ".$line."<br>";
    $update_this_record = false;
    $player_info = explode (",", $line);
    $player_info = array_map('trim', $player_info);
    $sql = "SELECT * FROM friend_link WHERE in_game_nick=? AND update_date=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../team-china.php?lang=zh&error=sql_error");
      exit;
    }

    mysqli_stmt_bind_param($stmt, "ss", $player_info[0], $player_info[4]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $matchingUsername = mysqli_stmt_num_rows($stmt);
    if ($matchingUsername>0) {
      echo "  found matching record. In-game-nick: ".$player_info[0].", update_date: ".$player_info[4]."<br>";
      $sql = "DELETE FROM friend_link WHERE in_game_nick=? AND update_date=?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_bind_param($stmt, "ss", $player_info[0], $player_info[4]);
      mysqli_stmt_execute($stmt);
      $update_this_record = true;
      $n_updated += 1;
      echo "updated. <br><br>";
    }

    $sql = "INSERT INTO friend_link (in_game_nick, team_name, garage_power, friend_link, update_date) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssiss", ...$player_info);
    mysqli_stmt_execute($stmt);
    if (!$update_this_record) {
      $n_added += 1;
      echo "added. <br><br>";
    }
  }
  echo $n_added." records are added. <br>";
  echo $n_updated." records are updated. <br>";
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 5. Update various leaderboards
if (isset($_POST['all_leaderboard_update_submit'])) {
  echo "Updating leaderboards..." ;
  $has_error = False;
  $all_leaderboard_update = $_POST['all_leaderboard_update'];
  $all_leaderboard_update_array = explode("\n", $all_leaderboard_update);
  $all_leaderboard_update_array = array_filter($all_leaderboard_update_array, 'trim');
  $ext = pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION);
  $ext = strtolower($ext);

  foreach ($all_leaderboard_update_array as $line) {
    $leaderboard_info = explode (",", $line);
    if (count($leaderboard_info)!=6) {
      echo "Entry '".$line."' does not have 6 fields! Nothing is updated.";
      $has_error = True;
    }
  }

  if ($has_error) {
    echo "Error encounted. Nothing has been updated.";
    exit;
  }

  foreach ($all_leaderboard_update_array as $line) {
    $leaderboard_info = explode (",", $line);

    // write to sql table, without file name.
    echo "writing to sql table...";
    echo "uploader_userid: ".$_SESSION['userid']."<br>";
    echo "uploader_username: ".$_SESSION['username']."<br>";
    echo "update_date: ".$leaderboard_info[0]."<br>";
    echo "mode: ".$leaderboard_info[1]."<br>";
    echo "scope: ".$leaderboard_info[2]."<br>";
    echo "player_nickname: ".$leaderboard_info[3]."<br>";
    echo "ranking: ".$leaderboard_info[4]."<br>";
    echo "points: ".$leaderboard_info[5]."<br>";

    $sql = "INSERT INTO leaderboard (uploader_userid, uploader_username, update_date, mode, scope, player_nickname, ranking, points) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "isssssii", $_SESSION['userid'], $_SESSION['username'], ...$leaderboard_info);
    mysqli_stmt_execute($stmt);

    // Append last entry id to the end of uploaded file to avoid duplication
    $last_entry_id = mysqli_insert_id($conn);
    echo "Last entry id: ".$last_entry_id."<br><br>";
    $ext = pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION);
    $ext = strtolower($ext);
    $filename = "../../img/leaderboard/".$leaderboard_info[1]."-".$leaderboard_info[2]."-".$leaderboard_info[0]."-".$last_entry_id.".".$ext;
    echo "filename: ".$filename."<br><br>";
    echo "tmp_name: ".$_FILES["uploadfile"]["tmp_name"]."<br><br>";

    // check file type and compress image files
    $valid_ext = array('jpg', 'jpeg', 'png');
    if(!in_array($ext,$valid_ext)){
      echo "Invalid file type. Only .jpg, .jpeg and .png are accepted.";
      exit;
    }

    // Compress Image
    compressImage($_FILES["uploadfile"]["tmp_name"],$filename,60);
    // move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $filename)
    echo $filename." was uploaded successfully.<br><br>";

    // update sql table with file name
    $sql = "UPDATE leaderboard SET filename = ? WHERE entry_id = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "si", $filename, $last_entry_id);
    mysqli_stmt_execute($stmt);
  }
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 6. Update cups leaderboard each map
if (isset($_POST['cups_leaderboard_update_submit'])) {
  echo "Updating cups leaderboard..." ;
  $has_error = False;
  $leaderboard_update = $_POST['cups_leaderboard_update'];
  $leaderboard_update_array = explode("\n", $leaderboard_update);
  $leaderboard_update_array = array_filter(array_map('trim', $leaderboard_update_array));

  foreach ($leaderboard_update_array as $line) {
    $record_info = explode (",", $line);
    if (count($record_info)!=13) {
      echo "Entry '".$line. " does not have 13 fields! Nothing is updated";
      $has_error = True;
    }
  }

  if ($has_error) {
    echo "Error encounted. Nothing has been updated.";
    exit;
  }

  $n_updated = 0;
  $n_added = 0;
  foreach ($leaderboard_update_array as $line) {
    echo $line."<br>";
    $update_this_record = false;
    $record_info = explode (",", $line);
    $record_info = array_map('trim', $record_info);
    for ($i=0; $i<13; $i++) {
      $record_info[$i] = $record_info[$i]=='' ? NULL : $record_info[$i];
    }

    $sql = "DELETE FROM cups_leaderboard
            WHERE cup=? AND track=? AND scope=? AND board_rank=? AND update_date=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    // echo "record_info 0,1,2,3,12 are: ".$record_info[0].", ".$record_info[1].", ".$record_info[2].", ".$record_info[3].", ".$record_info[12]."<br><br>";
    mysqli_stmt_bind_param($stmt, "sssis", $record_info[0], $record_info[1], $record_info[2], $record_info[3], $record_info[12]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_affected_rows($conn)>0) {
      echo mysqli_affected_rows($conn)." records were deleted.";
      $update_this_record = true;
      $n_updated += 1;
      echo "updated. <br><br>";
    }

    $sql = "INSERT INTO cups_leaderboard VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sssidssssssss", ...$record_info);
    mysqli_stmt_execute($stmt);
    if (!$update_this_record) {
      $n_added += 1;
      echo "added. <br><br>";
    }
  }
  echo $n_added." records were added. <br>";
  echo $n_updated." records were updated. <br>";
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 7. Update adventure leaderboard each map
if (isset($_POST['adventure_leaderboard_update_submit'])) {
  echo "Updating adventure leaderboard..." ;
  $has_error = False;
  $leaderboard_update = $_POST['adventure_leaderboard_update'];
  $leaderboard_update_array = explode("\n", $leaderboard_update);
  $leaderboard_update_array = array_filter(array_map('trim', $leaderboard_update_array)); // filter out empty line

  foreach ($leaderboard_update_array as $line) {
    $record_info = explode (",", $line);
    if (count($record_info)!=17) {
      echo "Entry '".$line. " does not have 17 fields! Nothing is updated";
      $has_error = True;
    }
  }

  if ($has_error) {
    echo "Error encounted. Nothing has been updated.";
    exit;
  }

  $n_updated = 0;
  $n_added = 0;
  foreach ($leaderboard_update_array as $line) {
    echo $line."<br>";
    $update_this_record = false;
    $record_info = explode (",", $line);
    $record_info = array_map('trim', $record_info);
    for ($i=0; $i<17; $i++) {
      $record_info[$i] = $record_info[$i]=='' ? NULL : $record_info[$i];
    }

    $sql = "DELETE FROM adventure_leaderboard
            WHERE map=? AND vehicle_number=? AND update_date=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    echo "record_info 0,1,15(map,vehicle,update_date) are: ".$record_info[0].", ".$record_info[1].", ".$record_info[15]."<br><br>";
    mysqli_stmt_bind_param($stmt, "sis", $record_info[0], $record_info[1], $record_info[15]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_affected_rows($conn)>0) {
      echo mysqli_affected_rows($conn)." records were deleted.";
      $update_this_record = true;
      $n_updated += 1;
      echo "updated. <br><br>";
    }

    $sql = "INSERT INTO adventure_leaderboard
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sisisssisssisssss", ...$record_info);
    mysqli_stmt_execute($stmt);
    if (!$update_this_record) {
      $n_added += 1;
      echo "added. <br><br>";
    }
  }
  echo $n_added." records were added. <br>";
  echo $n_updated." records were updated. <br>";
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 8. update team names
if (isset($_POST['team_name_update_submit'])) {
  echo "Updating team names..." ;
  $has_error = False;
  $team_name_update = $_POST['team_name_update'];
  $team_name_update_array = explode("\n", $team_name_update);
  $team_name_update_array = array_filter(array_map('trim', $team_name_update_array));

  $team_names = array();

  $sql = "SELECT
            team_id, team_name
          FROM team_name";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $sql);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  while ($row = mysqli_fetch_assoc($result)) {
    $team_names[$row['team_name']] = $row['team_id'];
  }

  foreach ($team_name_update_array as $line) {
    $record_info = explode(",", $line);
    $record_info = array_map('trim', $record_info);
    if (count($record_info)!=2) {
      echo "Entry '".$line. "' does not have 2 fields! Nothing is updated.";
      $has_error = True;
    } elseif ($record_info[1]=='') {
      echo "Entry '".$line."' has empty new team name. Error. Nothing is updated.";
      $has_error = True;
    }
    if (strlen($record_info[0])>0 && (!array_key_exists($record_info[0], $team_names))) {
      echo "Old team name ".$record_info[0]." is not in the team name table. Please check.";
      $has_error = True;
    }
    if (strlen($record_info[0])==0 && (array_key_exists($record_info[1], $team_names))) {
      echo "New team name ".$record_info[1]." is already in the team name table. Please check.";
      $has_error = True;
    }

  }

  if ($has_error) {
    echo "Error encounted. Nothing has been updated.";
    exit;
  }

  $n_updated = 0;
  $n_added = 0;
  foreach ($team_name_update_array as $line) {
    echo $line." is being processed. <br>";
    $update_this_record = false;
    $record_info = explode (",", $line);
    $record_info = array_map('trim', $record_info);

    if (strlen($record_info[0])==0) {
      echo "record_info[1]: ".$record_info[1];
      $sql = "INSERT INTO team_name (team_name, previous_names)
              VALUES(?,'')";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_bind_param($stmt, "s", $record_info[1]);
      mysqli_stmt_execute($stmt);
      $n_added += 1;
      echo "added. <br><br>";
    } else {
      $sql = "UPDATE team_name
              SET previous_names = CONCAT(previous_names, ', ', team_name),
                  team_name = ?
              WHERE team_name = ?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, $sql);
      mysqli_stmt_bind_param($stmt, "ss", $record_info[1], $record_info[0]);
      mysqli_stmt_execute($stmt);
      $n_updated += 1;
      echo "updated. <br><br>";
    }
  }
  echo $n_added." records were added. <br>";
  echo $n_updated." records were updated. <br>";
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 9. Update trophies
if (isset($_POST['trophy_update_submit'])) {
  echo "Updating team trophies..." ;
  $has_error = False;
  $trophy_update = $_POST['trophy_update'];
  $trophy_update_array = explode("\n", $trophy_update);
  $trophy_update_array = array_filter(array_map('trim', $trophy_update_array));
  $team_names = array();

  $sql = "SELECT
            team_id, team_name
          FROM team_name";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $sql);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  while ($row = mysqli_fetch_assoc($result)) {
    $team_names[$row['team_name']] = $row['team_id'];
  }

  foreach ($trophy_update_array as $line) {
    $record_info = explode (",", $line);
    $record_info = array_map('trim', $record_info);
    if (count($record_info)!=3) {
      echo "Entry '".$line."' does not have 3 fields! Nothing is updated.";
      $has_error = True;
    } elseif (($record_info[0]=='') || ($record_info[1]=='') || ($record_info[2]=='')) {
      echo "Entry '".$line."' has empty field. Error. Nothing is updated.";
      $has_error = True;
    }
    if (!array_key_exists($record_info[0], $team_names)) {
      echo "Warning: ".$record_info[0]." is not in team name table. Please double check.<br>";
      $has_error = True;
    }
  }
  echo "<br>";

  if ($has_error) {
    echo "Error encounted. Nothing has been updated.";
    exit;
  }

  $n_updated = 0;
  $n_added = 0;
  foreach ($trophy_update_array as $line) {
    echo $line." is being processed. <br>";
    $update_this_record = false;
    $record_info = explode (",", $line);
    $record_info = array_map('trim', $record_info);

    $sql = "DELETE FROM team_leaderboard
            WHERE team_id=? AND update_date=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "is", $team_names[$record_info[0]], $record_info[2]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_affected_rows($conn)>0) {
      echo mysqli_affected_rows($conn)." records were deleted.";
      $update_this_record = true;
      $n_updated += 1;
      echo "updated. <br><br>";
    }

    $sql = "INSERT INTO team_leaderboard VALUES (?, ?, ?, ?, 0)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "isis", $team_names[$record_info[0]], ...$record_info);
    mysqli_stmt_execute($stmt);
    if (!$update_this_record) {
      $n_added += 1;
      echo "added. <br><br>";
    }
  }
  echo $n_added." records were added. <br>";
  echo $n_updated." records were updated. <br>";
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 10. Event score update
if (isset($_POST['event_scores_upload'])) {
  echo "Updating event scores..." ;
  $category = $_POST['category'];
  $event_date = $_POST['event_date'];
  $map = $_POST['maps'];
  $score = $_POST['score'];
  $player_nickname = $_POST['player_nickname'];
  $ext = pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION);
  $ext = strtolower($ext);

  // find out how many images were uploaded for this event, in order to
  // prepare file name.
  $sql = "SELECT SUBSTRING_INDEX(filename, '-', -1) as cnt FROM event_scores WHERE category = ? AND event_date = ?";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $sql);
  mysqli_stmt_bind_param($stmt, "ss", $category, $event_date);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $next_count = 0;

  while ($row = mysqli_fetch_assoc($result)) {
    if ($next_count < (int)$row['cnt']) {
      $next_count = (int)$row['cnt'];
    }
  }
  $next_count += 1;
  echo "next_count: ".$next_count."<br><br>";
  $filename = "../../img/event/event-".$event_date."-".$map."-".$next_count.".".$ext;
  echo "filename: ".$filename."<br><br>";
  echo "tmp_name: ".$_FILES["uploadfile"]["tmp_name"]."<br><br>";

  // check file type and compress image files
  $valid_ext = array('jpg', 'jpeg', 'png');
  if(!in_array($ext,$valid_ext)){
    echo "Invalid file type. Only .jpg, .jpeg and .png are accepted.";
    exit;
  }

  // Compress Image
  compressImage($_FILES["uploadfile"]["tmp_name"],$filename,60);
  // move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $filename)
  echo $filename." was uploaded successfully.<br><br>";

  // write to sql table.
  echo "writing to sql table...";
  echo "uploader_userid: ".$_SESSION['userid']."<br>";
  echo "category: ".$category."<br>";
  echo "event_date: ".$event_date."<br>";
  echo "map: ".$map."<br>";
  echo "score: ".$score."<br>";
  echo "player_nickname: ".$player_nickname."<br>";
  echo "filename: ".$filename."<br>";

  if (isset($_POST['lang_en'])) {
    $sql = "INSERT INTO event_scores (uploader_userid, category, event_date, map, score, player_nickname, display_lang, filename) VALUES (?, ?, ?, ?, ?, ?, 'en', ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "isssdss", $_SESSION['userid'], $category, $event_date, $map, $score, $player_nickname, $filename);
    mysqli_stmt_execute($stmt);
    echo "display language 'en' has been inserted to the table.<br>";
  }

  if (isset($_POST['lang_zh'])) {
    $sql = "INSERT INTO event_scores (uploader_userid, category, event_date, map, score, player_nickname, display_lang, filename) VALUES (?, ?, ?, ?, ?, ?, 'zh', ?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "isssdss", $_SESSION['userid'], $category, $event_date, $map, $score, $player_nickname, $filename);
    mysqli_stmt_execute($stmt);
    echo "display language 'zh' has been inserted to the table.<br>";
  }
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}

// 11. update player info
if (isset($_POST['update_player_info'])) {
  echo "Updating players info..." ;
  $players = $_SESSION['players'];
  $modify_type = $_POST['modify_type'];
  $player_cnt = $_POST['player_cnt'];
  if ($modify_type == "delete") {
    echo "delete ".$player_cnt.": ".$players[$player_cnt-1]["in_game_nick"];
    array_splice($players,$player_cnt-1,1);
  }
  else {
    $in_game_nick = $_POST['in_game_nick'];
    if ($modify_type == "add") {
      $dup = false;
      if ($dup) {
        echo $in_game_nick." exists. Please modify instead of adding. Nothing has been updated.";
      } else {
        $players = array_merge(array_slice($players, 0, $player_cnt), array(array()), array_slice($players, $player_cnt));
        $player_cnt += 1;
        # array_push($players, array());
        # $player_cnt = count($players);
      }
    }
    $player_cnt -= 1;
    $players[$player_cnt]['no'] = 0;
    $players[$player_cnt]['in_game_nick'] = $in_game_nick;
    $players[$player_cnt]['used_name'] = $_POST['used_name'];
    $players[$player_cnt]['team'] = $_POST['team'];
    $players[$player_cnt]['gp'] = $_POST['gp'];
    $players[$player_cnt]['cup_pt'] = $_POST['cup_pt'];
    $players[$player_cnt]['adv_pt'] = $_POST['adv_pt'];
    $players[$player_cnt]['best_season'] = $_POST['best_season'];
    $players[$player_cnt]['link'] = $_POST['link'];
    $players[$player_cnt]['last_update'] = $_POST['last_update'];
    echo "<br>Updated position: ".($player_cnt+1)."<br>";
    echo "Updated player: ".$_POST['in_game_nick']."<br>Updated player info:";
    print_r($players[$player_cnt]);
  }

  for ($i=0; $i<count($players); $i++) {
    $players[$i]['no'] = $i+1;
  }

  $json = json_encode($players, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
  file_put_contents('../../data/players.json', $json);
  echo "Done.";
  echo "<a href='javascript:history.go(-1)' title='Return to previous page'>&laquo; Return to previous page</a>";
}


// Compress image
function compressImage($source, $destination, $quality) {
  $info = getimagesize($source);
  if ($info['mime'] == 'image/jpeg')
    $image = imagecreatefromjpeg($source);
  // elseif ($info['mime'] == 'image/gif')
  //  $image = imagecreatefromgif($source);
  elseif ($info['mime'] == 'image/png')
    $image = imagecreatefrompng($source);
  imagejpeg($image, $destination, $quality);
}
