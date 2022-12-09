<?php 
$url1 = $_SERVER['HTTP_HOST'];  
$filename = '../FIRST_INSTALL';

if (file_exists($filename)) {
    
} else {
    header('location: ../index.php');
}

if(isset($_GET['submit']))
{
    if($_GET["ausername"] == "" || $_GET["aemail"] == "" || $_GET["apassword"] == ""){
        echo "FAIL_EMPTY_STRINGS";
    }
    else
    {
        include("../../config.php");
        $auser = $_GET["ausername"];   
        $aemail = $_GET["aemail"];   
        $apass = $_GET["apassword"];    
        $db = mysqli_connect($mysqlhost . ":" . $mysqlport, $mysqluser, $mysqlpassword, $mysqldatabase);
        $query = "INSERT INTO `users` (`username`, `email`, `password`, `role`, `isadmin`, `isbanned`) VALUES ('$auser', '$aemail', '$apass', 'Founder', 'true', 'false');";
        mysqli_query($db, $query);  
        header('location:done.php');
    }
}

?>
<!DOCTYPE html>

<html lang="en" data-lt-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#3490DC">
    <meta name="author" content="Ignition-Development">
    <title>IgnitionClient | New user</title>
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
                    <h1 class="text-center">Setup</h1>
                    <h4 class="text-center">Let's start with the configuration for the server</h4>
                    &nbsp;
                    <form method="GET">
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="ausername">Username</label>
                            <input type="text" class="form-control" name="ausername" id="ausername" placeholder="admin">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="aemail">Email</label>
                            <input type="text" class="form-control" id="aemail" name="aemail" placeholder="<?php echo "admin@" . $url1;?>">
                        </div>
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="apassword">Password</label>
                            <input type="password" class="form-control" id="apassword" name="apassword" placeholder="••••••••••••••••••••••••">
                        </div>
                        <h6 class="text-center text-danger">WARNING YOU CANT GET BACK OVER HERE AFTER YOU MADE THIS USER</h6>
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