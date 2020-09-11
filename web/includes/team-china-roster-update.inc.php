<?php
session_start();

if (isset($_SESSION['username'])) $role = $_SESSION['userrole'];
else $role = 'guest';

if (!isset($_POST['tc_roster_update'])) {
  header("Location: ../team-china.php?lang=zh&error=1");
}

if (!(($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib'))) {
  header("Location: ../team-china.php?lang=zh&error=noaccess&role=".$_SESSION['userrole']);
  exit;
}

require "dbh.inc.php";
$player_updates = $_POST['player_updates'];
$player_updates_array = explode("\n", $player_updates);
$player_updates_array = array_filter($player_updates_array, 'trim');

foreach ($player_updates_array as $line) {
  $player_info = explode (",", $line);
  if (count($player_info)!=7) {
    echo "<script>alert('".$line. " does not have 7 fields! Nothing is updated');</script>";
    header("../team-china.php?lang=zh");
    exit;
  }
}

$n_updated = 0;
$n_added = 0;
foreach ($player_updates_array as $line) {
  echo $line."<br>";
  $update_this_record = false;
  $player_info = explode (",", $line);
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
?>

<a href="../team-china.php?lang=zh">返回上页</a>
