<?php 
$filename = '../FIRST_INSTALL';

if (file_exists($filename)) {
    
} else {
    header('location: ../index.php');
}
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
{
    $url2 = "https://";   
}   
else
{
    $url2 = "http://";   
    $url2.= $_SERVER['HTTP_HOST'];   
}

require("../require/config.php");
require("../require/sql.php");

if (isset($_GET['submit'])) {
    $cydbconn = new mysqli($_GET['cybermhost'] . ":" . $_GET['cybermport'] , $_GET['cybermuser'] , $_GET['cybermpass'] ,"cyberpanel");
    $getcydata = $cydbconn->query("SELECT * FROM loginSystem_administrator WHERE userName='admin'")->fetch_array();
    $db = mysqli_connect($_CONFIG['db_host'] . ":" . $_CONFIG['db_port'] , $_CONFIG['db_username'] , $_CONFIG['db_password'] , $_CONFIG['db_name'] );
    $query = "CREATE TABLE `settings` (`id` int(11) NOT NULL,`appname` text NOT NULL DEFAULT 'CyberPanel-Client',`appurl` text NOT NULL,`applogo` text NOT NULL DEFAULT 'https://avatars.githubusercontent.com/u/119068402',`websitelink` text NOT NULL,`discordinvite` text NOT NULL DEFAULT 'https://discord.gg/WMV7ACMg7p',`statuspage` text NOT NULL,`webpanel` text NOT NULL,`keywords` text NOT NULL,`description` text NOT NULL,`backround` text NOT NULL,`panelurl` text NOT NULL,`paneladmusr_usr` text NOT NULL,`paneladmusr_token` text NOT NULL,`cydb_host` text NOT NULL,`cydb_port` text NOT NULL DEFAULT '3306',`cydb_user` text NOT NULL,`cydb_pass` text NOT NULL,`cydb_name` text NOT NULL DEFAULT 'loginSystem_administrator',`currencyname` text NOT NULL DEFAULT 'coins',`version` text NOT NULL DEFAULT '1.0.0') ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    mysqli_query($db, $query);  
    $query = "CREATE TABLE `users` (`id` int(11) NOT NULL,`username` varchar(100) NOT NULL,`avatar` text NOT NULL DEFAULT 'data:image/png;base64,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',`email` varchar(100) NOT NULL,`coins` text NOT NULL DEFAULT '0',`password` varchar(100) NOT NULL,`role` text NOT NULL DEFAULT 'Client',`isadmin` text NOT NULL DEFAULT '0',`isbanned` text NOT NULL DEFAULT '0') ENGINE=InnoDB DEFAULT CHARSET=latin1;";
    mysqli_query($db, $query);  
    $query = "ALTER TABLE `settings` ADD PRIMARY KEY (`id`);";
    mysqli_query($db, $query);
    $query = "ALTER TABLE `users` ADD PRIMARY KEY (`id`);";
    mysqli_query($db, $query);
    $query = "ALTER TABLE `settings` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
    mysqli_query($db, $query);
    $query = "ALTER TABLE `users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
    mysqli_query($db, $query);  
    $cydb = mysqli_connect($_GET['cybermhost'] . ":" . $_GET['cybermport'] , $_GET['cybermuser'] , $_GET['cybermpass'] ,"cyberpanel");
    $query = "UPDATE `loginSystem_administrator` SET `api` = '1' WHERE `loginSystem_administrator`.`userName` = 'admin';";
    mysqli_query($cydb, $query);
    $query = "INSERT INTO `settings` (`appname`, `appurl`, `applogo`, `websitelink`, `discordinvite`, `statuspage`, `webpanel`, `keywords`, `description`, `backround`, `panelurl`, `paneladmusr_usr`, `paneladmusr_token`, `cydb_host`, `cydb_port`, `cydb_user`, `cydb_pass`, `cydb_name`) VALUES ('".$_GET['appname']."', '".$_GET['appurl']."', '".$_GET['applogo']."', '".$_GET['wurl']."', '".$_GET['dscinv']."', '".$_GET['stpage']."', '".$_GET['admpurl']."', '".$_GET['appkeywords']."', '".$_GET['appdesc']."', '".$_GET['appbcg']."', '".$_GET['admpurl']."/cloudAPI/', 'admin', '".$getcydata['token']."', '".$_GET['cybermhost']."', '".$_GET['cybermport']."', '".$_GET['cybermuser']."', '".$_GET['cybermpass']."', 'cyberpanel');";
    mysqli_query($db, $query);
    header('location: done.php');
}
?>

<!DOCTYPE html>

<html lang="en" data-lt-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#3490DC">
    <meta name="author" content="Ignition-Development">
    <title>MythicalWeb | Installation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    font-family: "Poppins", sans-serif;
    background-color: rgba(24, 26, 27, 0.999);
    color: whitesmoke;
    min-height: 100%;
    font-size: 1em;
    cursor: pointer;
  }
  body::before {
    content: "";
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(#2d2dff, #ff2f2f);
    -webkit-clip-path: circle(25% at right);
    clip-path: circle(25% at right);
    z-index: -5;
  }
  
  body::after {
    content: "";
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    min-height: 100vh;
    height: 100%;
    background: linear-gradient(#870aec, #6e0b81);
    clip-path: circle(30% at 10% 10%);
    -webkit-clip-path: circle(30% at 10% 10%);
    z-index: -5;
  }
  
    </style>
    <link rel="icon" type="image/x-icon" href="https://avatars.githubusercontent.com/u/119068402">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row justify-content-center align-items-center py-3 py-md-5">
                <div class="content col-xl-8 col-lg-10 col-12 p-3 px-md-5 py-md-4 rounded">
                    <h1 class="text-center">Installation | Setup</h1>
                    &nbsp;

                    <form method="GET">
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="appname">APP Name:</label>
                            <input type="text" class="form-control" value="" required id="appname" name="appname" placeholder="MythicalNodes">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="appurl">APP Url:</label>
                            <input type="text" value= "<?php echo $url2; ?>" required class="form-control" id="appurl" name="appurl" placeholder="<?php echo $url2; ?>">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="applogo">APP Logo:</label>
                            <input type="text" class="form-control" value="<?php echo $url2 . "/assets/img/logo.png "; ?>" required id="applogo" name="applogo" placeholder="<?php echo $url2 . "/assets/img/logo.png "; ?>">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="wurl">Main website url:</label>
                            <input type="text" class="form-control" value="" required id="wurl" name="wurl" placeholder="https://mythicalnodes.xyz">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="dscinv">Discord invite url:</label>
                            <input type="text" class="form-control" value="" required id="dscinv" name="dscinv" placeholder="https://discord.gg/WMV7ACMg7p">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="stpage">Status page url:</label>
                            <input type="text" class="form-control" value="" required id="stpage" name="stpage" placeholder="https://status.mythicalnodes.xyz">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="admpurl">Admin panel url:</label>
                            <input type="text" class="form-control" value="" required id="admpurl" name="admpurl" placeholder="https://webpanel.mythicalnodes.xyz:8090">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="appkeywords">APP keywords:</label>
                            <input type="text" class="form-control" value="free,hosting,mythicalnodes,freewebhosting,wehosting,ilikewebhosting,igh" required id="appkeywords" name="appkeywords" placeholder="free,hosting,mythicalnodes,freewebhosting,wehosting,ilikewebhosting,igh">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="appdesc">APP description :</label>
                            <input type="text" class="form-control" value="" required id="appdesc" name="appdesc" placeholder="Welcome to MythicalNodes Free WebHosting panel here you can start uploading your website for free!">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="appbcg">Background Picture:</label>
                            <input type="text" class="form-control" value="<?php echo $url2 . '/assets/img/background.jpeg' ?>" required id="appbcg" name="appbcg" placeholder="<?php echo $url2 . '/assets/img/background.jpeg' ?>">
                        </div>
                        <div class="row g-3">
                            <div class="mb-3 col-md-9">
                                <label class="form-label" for="cybermhost">CyberPanel MySQL Host:</label>
                                <input name="cybermhost" type="text" class="form-control " id="cybermhost" placeholder="127.0.0.1" required value="">
                            </div>
                            
                            <div class="mb-3 col-md-3">
                                <label class="form-label" for="cybermport">CyberPanel MySQL Port:</label>
                                <input name="cybermport" type="number" class="form-control " id="cybermport" placeholder="3306" value="3306" required>
                            </div>
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="cybermuser">CyberPanel MySQL Username:</label>
                            <input type="text" class="form-control" value="cyclient" required id="cybermuser" name="cybermuser" placeholder="cyclient">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="cybermpass">CyberPanel MySQL Password:</label>
                            <input type="password" class="form-control" value="" id="cybermpass" name="cybermpass" placeholder="********">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" value="Submit" class="btn btn-primary rounded-pill"> Next <i class="bi bi-arrow-right"></i> </button>
                        </div>
                    </form>

                    <hr>

                    <footer class="text-center">
                    <p class="mb-0">
                        Copyright © 2022 <strong><a href="https://ignition-development.xyz/">Ignition Development</a></strong> - All Rights Reserved.
                    </p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>

</html>