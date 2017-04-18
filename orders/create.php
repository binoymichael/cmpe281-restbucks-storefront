<?php

    $store = array_shift($_POST);
    $payload = json_encode($_POST);

    $url = $KONG_URL . "/" . $store . "/order";

    // Setup cURL
    $ch = curl_init($url);
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => $payload
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
