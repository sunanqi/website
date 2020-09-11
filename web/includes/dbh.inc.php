<?php
  $servername = "localhost";
  $dBUsername = "root";
  $dBPassword = "NH0G1q7vAeEw"; //"kE4cvDePxC2a"; "NH0G1q7vAeEw";
  $dBName = "hcr2_database";

  $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
  $conn->set_charset('utf8mb4');

  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }
?>
