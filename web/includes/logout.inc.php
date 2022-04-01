<?php
if (isset($_GET['lang'])) $lang = $_GET['lang'];
else $lang = 'en';
if ($lang!='zh') $lang='en';

session_start();
session_unset();
session_destroy();
header("Location: ../index.php?lang=".$lang)
?>
