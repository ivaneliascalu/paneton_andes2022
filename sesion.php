<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://181.176.156.77:8085/AppiRestFulSFI/api/WebService/getPersona/getAllDatos/N/1630000036299',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: askjdLKJASLK65fd6asa4562ASDasdJJdd152'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
