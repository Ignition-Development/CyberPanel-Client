<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://staging.cyberpanel.net:8090/cloudAPI/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"serverUserName": "admin",
	"controller": "submitUserCreation",
    "firstName": "Usman",
    "lastName": "Nasir",
    "email": "usman@cyberpersons.com",
    "userName": "usmannasir",
    "password": "cyberpanel",
    "websitesLimit":5,
    "selectedACL": "user"
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YWRtaW46cHp0eW5oZHVFa0kqNndzIw=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;