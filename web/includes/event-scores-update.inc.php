<?php
session_start();

// 1. check user role
if (isset($_SESSION['username'])) $role = $_SESSION['userrole'];
else $role = 'guest';
if (!(($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib'))) {
  header("Location: ../event-past-events.php?lang=zh&error=noaccess&role=".$_SESSION['userrole']);
  exit;
}

// 2. check if page request is from valid upload form
if (!isset($_POST['event_scores_upload'])) {
  header("Location: ../event-past-events.php?lang=zh&error=1");
}

// 3. connect to database and read information from upload form
require "dbh.inc.php";
$category = $_POST['category'];
$event_date = $_POST['event_date'];
$map = $_POST['maps'];
$score = $_POST['score'];
$player_nickname = $_POST['player_nickname'];
$ext = pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION);
$ext = strtolower($ext);

// 4. find out how many images were uploaded for this event, in order to
// prepare file name.
$sql = "SELECT SUBSTRING_INDEX(filename, '-', -1) as cnt FROM event_scores WHERE category = ? AND event_date = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo "sql error.";
  // header("Location: ../event-past-events.php?lang=".$lang."&error=sql_error");
  exit;
}

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

// 5. check file type and compress image files
$valid_ext = array('jpg', 'jpeg', 'png');
if(!in_array($ext,$valid_ext)){
  echo "Invalid file type. Only .jpg, .jpeg and .png are accepted.";
  exit;
}

// Compress Image
compressImage($_FILES["uploadfile"]["tmp_name"],$filename,60);
// move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $filename)
echo $filename." was uploaded successfully.<br><br>";

// 6. write to sql table.
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
?>

<p>
	<a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Return to previous page</a>
</p>
