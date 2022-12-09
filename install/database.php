<?php
$filename = '../FIRST_INSTALL';

if (file_exists($filename)) {
    
} else {
    header('location: ../index.php');
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);
function shutDownFunction()
{
    $error = error_get_last();

    if ($error['type'] === E_ERROR) {
        //do your stuff     
        echo "<font color='red'>FAILD TO CONNECT TO THE DATABASE PLEASE TRY AGAIN";
        $errorRefreshSecs = "3";
?>
<meta http-equiv="refresh" content="<?php echo $errorRefreshSecs; ?>; URL=database.php">
<?php
    }
}
register_shutdown_function('shutDownFunction');

if (isset($_GET['submit'])) {
    if ($_GET["host"] == "" || $_GET["port"] == "" || $_GET["database"] == "" || $_GET["user"] == "") {
        echo "FAIL_EMPTY_STRINGS";
    } else {

        $servername = $_GET["host"] . ":" . $_GET["port"];
        $username = $_GET["user"];
        $password = $_GET['password'];
        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
//$_CONFIG["db_host"] = "localhost";
//$_CONFIG["db_username"] = "root";
//$_CONFIG["db_password"] = "";
//$_CONFIG["db_name"] = "cypanel";
//$_CONFIG["db_port"] = "3306";

        $stauts = "true";
        if ($stauts == "true") {
            $myfile = fopen("../config.php", "w") or die("UNABLE_TO_OPEN_FILE");
            $txt = "<?php\n";
            fwrite($myfile, $txt);
            $txt = "/**\n";
            fwrite($myfile, $txt);
            $txt = " * @var array $_CONFIG\n";
            fwrite($myfile, $txt);
            $txt = " */\n";
            fwrite($myfile, $txt);
            $txt = '$_CONFIG["db_host"] = "' . $_GET['host'] . '";' . "\n";
            fwrite($myfile, $txt);
            $txt = '$_CONFIG["db_port"] = "' . $_GET['port'] . '";' . "\n";
            fwrite($myfile, $txt);
            $txt = '$_CONFIG["db_name"] = "' . $_GET['database'] . '";' . "\n";
            fwrite($myfile, $txt);
            $txt = '$_CONFIG["db_username"] = "' . $_GET['user'] . '";' . "\n";
            fwrite($myfile, $txt);
            $txt = '$_CONFIG["db_password"] = "' . $_GET['password'] . '";' . "\n";
            fwrite($myfile, $txt);
            $txt = "?>";
            fwrite($myfile, $txt);
            fclose($myfile);
            header('location:setup.php');
        } else {

        }
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#3490DC">
    <meta name="author" content="Ignition-Development">
    <title>IgnitionClient | Database</title>
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
                    <h1 class="text-center">Installation | Database</h1>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <form method="GET">
                        <div id="databaseForm" data-database="mysql" class="">
                            <div class="row g-3">
                                <div class="mb-3 col-md-9">
                                    <label class="form-label" for="host">Host</label>
                                    <input name="host" type="text" class="form-control " id="host"
                                        placeholder="127.0.0.1" required value="">

                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="port">Port</label>
                                    <input name="port" type="number" class="form-control " id="port" placeholder="3306"
                                        value="3306" required>

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="database">Database</label>
                                <input name="database" type="text" class="form-control " id="database" placeholder="mythicaldata" required value="">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="user">Username</label>
                                <input name="user" type="text" required class="form-control " id="user" placeholder="root" value="">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="123456">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" value="Submit" class="btn btn-primary rounded-pill"> Start <i class="bi bi-arrow-right"></i> </button>
                        </div>
                    </form>
                    <hr>
                    </form>
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
<?php
}
?>
