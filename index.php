<?php


$filename = 'FIRST_INSTALL';

if (file_exists($filename)) {
    header('location: install/start.php');
    die;
} else {
    
}

include('require/config.php');
include_once("require/sql.php");
$getsettings = $dbconn->query("SELECT * FROM settings")->fetch_array();
session_start(); 
if (!isset($_SESSION['email'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../auth/login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header("location:../auth/login.php");
}
header('location: dashboard/home.php')

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $getsettings["appname"] ?> | Home</title>
    <link rel="icon" href="<?= $getsettings["applogo"] ?>" type="image/png">
    
</head>
<body>
    
</body>
</html>