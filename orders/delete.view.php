<?php

    $orderId = $orderData['id'];
   // $qty = $orderData['items'][0]['qty'];
   // $name = $orderData['items'][0]['name'];
   // $milk = $orderData['items'][0]['milk'];
   // $size = $orderData['items'][0]['size'];
   // $orderLocation = $orderData['location'];
   // $orderStatus = $orderData['status'];
   // $getOrderUrl = '/' . $store . '/order/' . $orderId;
   // $deleteOrderUrl = '/' . $store . '/order/' . $orderId;
    //$payOrderUrl = '/' . $store . '/order/' . $orderId . '/pay';
    //$editOrderUrl = '/' . $store . '/order/' . $orderId . '/edit';
   // $getOrdersUrl = '/' . $store . '/orders';
    //echo "order ID :".$orderId;
?>
<div class="container-fluid headspace">    
    <div class="col-sm-6 col-sm-offset-1 text-left"> 
      <div class="page-header">
        <h3><?= $orderData['message'] ?></h3>
      </div>
    </div>
  <div class="row content">
    <div class="col-sm-5 col-sm-offset-1 text-left"> 
      <dl>
        <dt>ID : </dt>
        <dd><?= $orderId ?></dd>
        <dt>Store : </dt>
        <dd><?= ucwords($store) ?></dd>
       
      </dl>
    </div>
    
  </div>
</div>
