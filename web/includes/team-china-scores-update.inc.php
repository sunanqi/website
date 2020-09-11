<?php
session_start();

if (isset($_SESSION['username'])) $role = $_SESSION['userrole'];
else $role = 'guest';

if (!isset($_POST['tc_scores_update'])) {
  header("Location: ../team-china.php?lang=zh&error=1");
}

if (!(($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib'))) {
  header("Location: ../team-china.php?lang=zh&error=noaccess&role=".$_SESSION['userrole']);
  exit;
}

require "dbh.inc.php";
$scores_updates = $_POST['scores_updates'];
$scores_updates_array = explode("\n", $scores_updates);
$scores_updates_array = array_filter($scores_updates_array, 'trim');

foreach ($scores_updates_array as $line) {
  $match_info = explode (",", $line);
  if (count($match_info)!=19) {
    echo "<script>alert('".$line. " does not have 19 fields! Nothing is updated');</script>";
    header("../team-china.php?lang=zh");
    exit;
  }
}

$n_updated = 0;
$n_added = 0;
foreach ($scores_updates_array as $line) {
  echo $line."<br>";
  $update_this_record = false;
  $match_info = explode (",", $line);
  for ($i=0; $i<19; $i++) {
    $match_info[$i] = $match_info[$i]=='' ? NULL : $match_info[$i];
  }
  $sql = "SELECT * FROM team_china_scores WHERE matching_date=? AND our_name=?";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../team-china.php?lang=zh&error=sql_error");
    exit;
  }

  mysqli_stmt_bind_param($stmt, "ss", $match_info[0], $match_info[3]);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);
  $existing_record = mysqli_stmt_num_rows($stmt);
  if ($existing_record>0) {
    $sql = "DELETE FROM team_china_scores WHERE matching_date=? AND our_name=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $match_info[0], $match_info[3]);
    mysqli_stmt_execute($stmt);
    $update_this_record = true;
    $n_updated += 1;
    echo "updated. <br><br>";
  }

  $sql = "INSERT INTO team_china_scores VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt, $sql);
  mysqli_stmt_bind_param($stmt, "ssisississiiisisisi",
  $match_info[0], $match_info[1], $match_info[2], $match_info[3], $match_info[4],
  $match_info[5], $match_info[6], $match_info[7], $match_info[8], $match_info[9],
  $match_info[10], $match_info[11], $match_info[12], $match_info[13], $match_info[14],
  $match_info[15], $match_info[16], $match_info[17], $match_info[18]);
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
