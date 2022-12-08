<?php
include('require/config.php');
include_once("require/sql.php");
$getsettings = $dbconn->query("SELECT * FROM settings")->fetch_array();

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