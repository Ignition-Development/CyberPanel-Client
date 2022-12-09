<?php
include('../require/config.php');
session_start();
$username = "";
$email    = "";
$errors = array(); 
//IP,username,password,databasename
$db = mysqli_connect($_CONFIG["db_host"]. ':'. $_CONFIG["db_port"], $_CONFIG["db_username"], $_CONFIG["db_password"], $_CONFIG["db_name"]);
$getsettings = $db->query("SELECT * FROM settings")->fetch_array();
$cydb = mysqli_connect($getsettings["cydb_host"]. ':'. $getsettings["cydb_port"], $getsettings["cydb_user"], $getsettings["cydb_pass"], $getsettings["cydb_name"]);
$cydb_f = $cydb->query("SELECT * FROM `loginSystem_administrator`")->fetch_array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $cyuser_check_query = "SELECT * FROM `loginSystem_administrator`";
  $cyresult = mysqli_query($cydb, $cyuser_check_query);
  $cyuser = mysqli_fetch_assoc($cyresult);
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
  if ($cyuser){
    if ($cyuser['userName'] === $username) {
      array_push($errors, "Username already exists in CyberPanel database");
    }
    if ($cyuser['email'] === $email) {
      array_push($errors, "Email already exists in CyberPanel database");
    }
  }

  if (count($errors) == 0) {
  	$password = $password_1;

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $getsettings['panelurl'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>'{
    	"serverUserName": "'.$getsettings['paneladmusr_usr'].'",
    	"controller": "submitUserCreation",
        "firstName": "'.$_POST['name_first'].'",
        "lastName": "'.$_POST['name_last'].'",
        "email": "'.$_POST['email'].'",
        "userName": "'.$_POST['username'].'",
        "password": "'.$_POST['password'].'",
        "websitesLimit":1,
        "selectedACL": "user"
    }',
      CURLOPT_HTTPHEADER => array(
        'Authorization: '.$getsettings['paneladmusr_token'].''
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    header('location: ../dashboard/home.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../dashboard/home.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

?>