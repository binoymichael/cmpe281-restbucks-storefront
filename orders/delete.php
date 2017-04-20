<?php
extract($_GET);
$store = $_GET["storeName"];
$orderId = $_GET["orderNumber"];

$url = $KONG_URL . "/" . $store . "/order"."/".$orderId;

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
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if($httpcode == 204)
    {
      echo "<html><body><h2> Your order has been deleted </h2></body></html>"
    }
// put a button to go back to homepage

?>
