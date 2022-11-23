<?php
// Datos
//$token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';

// Iniciar llamada a API
$dni=$_REQUEST['dni'];
$curl = curl_init();

// Buscar dni
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://181.176.156.77:8085/AppiRestFulSFI/api/empleados/'.$dni,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS =>2,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    // 'Referer: https://apis.net.pe/consulta-dni-api',
    // 'Authorization: Bearer ' . $token
    'Authorization: askjdLKJASLK65fd6asa4562ASDasdJJdd152'
  ),
));

$response = curl_exec($curl);
echo $response;


// curl_close($curl);
// // Datos listos para usar
// $persona = json_decode($response);
// var_dump($persona);
?>

