<?php
  if (isset($_GET['lang'])) $lang = $_GET['lang'];
  else $lang = 'en';
  if ($lang!='zh') $lang='en';

  if (isset($_POST['signup-submit'])) {
    require "dbh.inc.php";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $passwordRepeat = $_POST['psw-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
      header("Location: ../signup.php?lang=".$lang."&error=empty_field&username=".$username."&email=".$email);
      exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      header("Location: ../signup.php?lang=".$lang."&error=invalid_username_and_email");
      exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../signup.php?lang=".$lang."&error=invalid_email&username=".$username);
      exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      header("Location: ../signup.php?lang=".$lang."&error=invalid_username&email=".$email);
      exit();
    } elseif ($password != $passwordRepeat) {
      header("Location: ../signup.php?lang=".$lang."&error=password_not_matching&username=".$username."&email=".$email);
      exit();
    }

    $sql = "SELECT username FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?lang=".$lang."&error=sql_error");
      exit;
    } else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $matchingUsername = mysqli_stmt_num_rows($stmt);
      if ($matchingUsername>0) {
        header("Location: ../signup.php?lang=".$lang."&error=username_already_taken&email=".$email);
        exit();
      } else {
        $sql = "INSERT INTO users (username, user_email, user_password, signup_date) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?lang=".$lang."&error=sql_error");
          exit;
        } else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          $signup_date = date("Y-m-d");
          mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPwd, $signup_date);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          header("Location: ../login.php?lang=".$lang."&signup=success");
          exit();
        }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
  else {
    header("Location: ../signup.php?lang=".$lang);
    exit;
  }
?>
