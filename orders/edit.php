<?php

    $tmp = explode('/', $path);
    array_pop($tmp);
    $orderId = array_pop($tmp);

    $url = $KONG_URL . "/" . $store . "/order/" . $orderId;

    // Setup cURL
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
    $orderData = json_decode($response, TRUE);
    curl_close($ch);
    //echo '<pre>' . var_export($responseData, true) . '</pre>';
    //debug($orderData)
    require 'edit.view.php';
  ?>
