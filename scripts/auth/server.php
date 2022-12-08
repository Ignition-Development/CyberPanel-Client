<?php
include('../require/config.php');
session_start();
$username = "";
$email    = "";
$errors = array(); 
//IP,username,password,databasename
$db = mysqli_connect($_CONFIG["db_host"]. ':'. $_CONFIG["db_port"], $_CONFIG["db_username"], $_CONFIG["db_password"], $_CONFIG["db_name"]);
$getsettings = $db->query("SELECT * FROM settings")->fetch_array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
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

  if (count($errors) == 0) {
  	$password = $password_1;

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $getsettings['panelurl']. "submitUserCreation");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);

    curl_setopt($ch, CURLOPT_POST, TRUE);

    curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"adminUser\": \"". $getsettings['paneladmusr_usr'] ."\",
        \"adminPass\": \"".$getsettings['paneladmusr_pass']."\",
        \"firstName\": \"".$_POST['name_first']."\",
        \"lastName\": \"".$_POST['name_last']."\",
        \"email\": \"".$_POST['email']."\",
        \"userName\": \"".$_POST['username']."\",
        \"password\": \"".$_POST['password']."\",
        \"websitesLimit\": 0,
        \"selectedACL\": \"user\",
        \"securityLevel\": \"HIGH\"
    }");

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json"
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    if ($response == 'string(57) "{"status": 1, "createStatus": 1, "error_message": "None"}"')
    {
      header('location: ../dashboard/index.php');
    }
    else
    {
      array_push($errors, "Faild to fetch the CyberPanel API");
    }
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
  	  header('location: ../dashboard/index.html');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

?>