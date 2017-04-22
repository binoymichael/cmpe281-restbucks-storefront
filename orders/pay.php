<?php

    $tmp = explode('/', $path);
    array_pop($tmp);
    $orderId = array_pop($tmp);

    $url = $KONG_URL . "/" . $store . "/order/" . $orderId . '/pay';

    // Setup cURL
    $ch = curl_init($url);
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    // Send the request
    $response = curl_exec($ch);

    // Check for errors
    if($response === FALSE){
        die(curl_error($ch));
        curl_close($ch);
    }

    // Decode the response
    $orderData = json_decode($response, TRUE);
    curl_close($ch);

    require 'show.view.php';

?>

