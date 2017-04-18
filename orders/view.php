<?php
extract($_GET);
$store = $_GET["storeName"];
$orderId = $_GET["orderNumber"];

echo $orderId."<br>";


//$url = "http://127.0.0.1:9090/" . $store . "/order";
$url = "http://localhost:9090" . "/order"."/".$orderId;
echo $url."<br>";

$json='';

$ch = curl_init();
$url = trim($url);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER , array(
    'Content-Type: application/json'
));



// Send the request
$response = curl_exec($ch);

// Check for errors
if($response === FALSE){
    echo" error ";
    die(curl_error($ch));
    curl_close($ch);
}

// Decode the response
$responseData = json_decode($response, TRUE);
curl_close($ch);

echo '<pre>' . var_export($responseData, true) . '</pre>';


?>
