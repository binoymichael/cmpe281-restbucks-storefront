<?php
    function debug($d) {
        echo '<pre>' . var_export($d, true) . '</pre>';
    }
    $store = array_shift($_POST);
    $payload = json_encode($_POST);

    // TODO extract ip, port to config file
    $url = "http://54.215.145.110:8000/" . $store . "/order";

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
    }

    // Decode the response
    $responseData = json_decode($response, TRUE);

    // Print the date from the response
    debug($responseData);
?>
