<?php
  $servername = "localhost";
  $dBUsername = "root";
  // test password
  $dBPassword = "test";
  $dBName = "hcr2_database";

  $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
  $conn->set_charset('utf8mb4');

  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }
?>
