<?php

if($_SERVER['PHP_AUTH_USER'] !=='admin' && $_SERVER['PHP_AUTH_PW']!=='admin'){

    header("WWW-Authenticate: Basic realm=\"thetutlage\"");
    header("HTTP\ 1.0 401 Unauthorized");
    echo 'Unauthorized to view this page';
    exit;


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Orders</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 style=''>Orders</h2>
<?php
     
    //echo $path;
    $url = $KONG_URL . "/" . $store . "/orders";
   // $url = "http://localhost:9090" . "/orders";
    //echo $url."<br>";
  
    //echo "<h3>" . $store . "</h3>";

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

   //echo '<pre>' . var_export($orderData, true) . '</pre>';
   // echo "length :". sizeof($orderData);

       echo "<table class =\"table\" >"; 
       echo "<thead >";
       echo "<tr>" ;
       echo "<th>Order ID</th>". "<th>Location</th>" ."<th>Quantity</th>". "<th>Name</th>".
            "<th>Milk</th>" ."<th>Size</th>" ."<th>Status</th>" . "<th>Actions</th>";
       echo "</thead>" . "<tbody>";
 foreach ($orderData as $order){


 
  if($order!="Orders not found"){
 
   retrieveValues($order, $store);
  }
   else{
       echo "<h3>" .$order."</h3>";
   }  

 }

 
    function retrieveValues($orderData, $store){
   
       
        foreach ($orderData as $key => $value){
               
                $orderID = $orderData['id'];
                $qty = $orderData['items'][0]['qty'];
                $name = $orderData['items'][0]['name'];
                $milk = $orderData['items'][0]['milk'];
                $size = $orderData['items'][0]['size'];
                $orderLocation = $orderData['location'];
                $orderStatus = $orderData['status'];
                $orderUrl = $store . '/order/' . $orderID;
                               
            }
              echo "<tr>"; 
              echo "<td >"  .$orderID . "</td>"; 
              echo "<td >"  . ucwords($orderLocation) . "</td>"; 
              echo "<td >"  .$qty . "</td>"; 
              echo "<td >"  . ucwords($name) . "</td>"; 
              echo "<td '>"  . ucwords($milk) . "</td>"; 
              echo "<td >"  . ucwords($size) . "</td>"; 
              echo "<td >"  . ucwords($orderStatus) . "</td>"; 
              echo "<td ><a href='" . $orderUrl . "'>View</a></tr>"; 
        }

   echo "</tbody>"."</table>";

?>
</div>
</body>
</html>
