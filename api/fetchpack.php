<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://webpanel.mythicalnodes.xyz:8090/cloudAPI/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"serverUserName": "admin",
	"controller": "fetchPackages"
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YWRtaW46TDcjRTdCZzloKzFyeHhmaw=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;