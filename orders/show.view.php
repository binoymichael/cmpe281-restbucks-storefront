<?php

    $orderId = $orderData['id'];
    $qty = $orderData['items'][0]['qty'];
    $name = $orderData['items'][0]['name'];
    $milk = $orderData['items'][0]['milk'];
    $size = $orderData['items'][0]['size'];
    $orderLocation = $orderData['location'];
    $orderStatus = $orderData['status'];
    $getOrderUrl = '/' . $store . '/order/' . $orderId;
    $deleteOrderUrl = '/' . $store . '/order/' . $orderId;
    $payOrderUrl = '/' . $store . '/order/' . $orderId . '/pay';
    $editOrderUrl = '/' . $store . '/order/' . $orderId . '/edit';
    $getOrdersUrl = '/' . $store . '/orders';
    echo "order ID :".$orderId;
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
        <dt>Name : </dt>
        <dd><?= ucwords($name) ?></dd>
        <dt>Quantity : </dt>
        <dd><?= $qty ?></dd>
        <dt>Milk : </dt>
        <dd><?= ucwords($milk) ?></dd>
        <dt>Size : </dt>
        <dd><?= ucwords($size) ?></dd>
        <dt>Location : </dt>
        <dd><?= ucwords($orderLocation) ?></dd>
        <dt>Status : </dt>
        <dd><?= ucwords($orderStatus) ?></dd>
      </dl>
    </div>
    <div class="col-sm-5 col-sm-offset-1 text-left"> 
      <a href=<?= $getOrderUrl ?>  class="btn btn-primary" style='margin-bottom:20px;'>Order Status<a> 
      <form action=<?=$deleteOrderUrl?>  method="post">
          <button type="submit" class="btn btn-danger" style='margin-bottom:20px;'>Cancel Order</button>
      </form>
      <form action=<?=$payOrderUrl?> class="form-inline" method="post">
          <button type="submit" class="btn btn-success" style='margin-bottom:20px;'>Pay</button>
      </form>
      <!--<form action=<?=$getOrdersUrl?> class="form-inline" method="get">
          <button type="submit" class="btn btn-success" style='margin-bottom:20px;'>Get Orders</button>
      </form> -->
    </div>
  </div>
</div>
