<?php 
$filename = '../FIRST_INSTALL';

if (file_exists($filename)) {
    
} else {
    header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html lang="en" data-lt-installed="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#3490DC">
    <meta name="author" content="Ignition-Development">
    <title>IgnitionClient | Welcome</title>
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

<body style="display: block; opacity: 1;">
    <div id="app">
        <div class="container">
            <div class="row justify-content-center align-items-center py-3 py-md-5">
                <div class="content col-xl-8 col-lg-10 col-12 p-3 px-md-5 py-md-4 rounded">

                    <h1 class="text-center">Installation</h1>
                    <p class="text-center">IgnitionClient is the best free <strong>CyberPanel</strong> client for your host if you need any help with the installation please join our <a href="https://discord.gg/WMV7ACMg7p"><strong>Discord</strong></a> server!</p>

                    <div class="text-center">
                        <p class="text-success">
                            <i class="bi bi-check2-circle"></i> IgnitionClient is ready to be installed!
                        </p>

                        <a href="database.php" class="btn btn-primary rounded-pill mx-1"> Continue <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <hr>
                    <footer class="text-center">
                    <p class="mb-0">
                        Copyright ?? 2022 <strong><a href="https://ignition-development.xyz/">Ignition Development</a></strong> - All Rights Reserved.
                    </p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
