<?php

$tmp = explode('/', $path);
$orderId = array_pop($tmp);
//extract($_POST);
//$store = $_POST["storeName"];
//$orderId = $_POST["orderNumber"];
//echo "---delete.php--store--" . $store;
//echo "---delete.php---id-" . $orderId;



$url = $KONG_URL . "/" . $store . "/order/" . $orderId;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// Send the request
$response = curl_exec($ch);

// Check for errors
if($response === FALSE){
    echo" error ";
    die(curl_error($ch));
    curl_close($ch);
}

  // Decode the response
    $orderData = json_decode($response, TRUE);
    $orderData['id']=$orderId;
    curl_close($ch);

    require 'show.view.php';

?>
