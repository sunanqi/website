<?php
if (isset($_GET['lang'])) $lang = $_GET['lang'];
else $lang = 'en';
if ($lang!='zh') $lang='en';

if (!isset($_POST['login-submit'])) {
  header("Location: ../login.php?lang=".$lang);
  exit;
}

require "dbh.inc.php";
$emailuid = $_POST['usernameemail'];
$password = $_POST['psw'];

if (empty($emailuid) || empty($password)) {
  header("Location: ../login.php?lang=".$lang."error=empty_fields");
  exit();
}

$sql = "SELECT * FROM users WHERE username=? OR user_email=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: ../login.php?lang=".$lang."&error=sql_error");
  exit;
}

mysqli_stmt_bind_param($stmt, "ss", $emailuid, $emailuid);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
  $pwdCheck = password_verify($password, $row['user_password']);
  if ($pwdCheck==false) {
    header("Location: ../login.php?lang=".$lang."&error=wrong_password");
    exit;
  } elseif ($pwdCheck==true) {
    session_start();
    $_SESSION['userid'] = $row['userid'];
    $_SESSION['username'] = $row['username'];

// retrieve user role
    $sql = "SELECT * FROM user_roles WHERE userid=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../login.php?lang=".$lang."&error=sql_error");
      exit;
    }
    mysqli_stmt_bind_param($stmt, "s", $_SESSION['userid']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
      $_SESSION['userrole'] = $row['user_role'];
    } else {
      $_SESSION['userrole'] = 'user';
    }

    header("Location: ../index.php?lang=".$lang."&login=success");
    exit();
  }
} else {
  header("Location: ../index.php?lang=".$lang."&error=user_not_exist");
  exit;
}

?>
