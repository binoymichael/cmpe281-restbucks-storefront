<?php

    $orderId = $orderData['id'];
    $getOrderUrl = '/' . $store . '/order/' . $orderId;
    $deleteOrderUrl = '/' . $store . '/order/' . $orderId;
    $payOrderUrl = '/' . $store . '/order/' . $orderId . '/pay';
    $getOrdersUrl = '/' . $store . '/orders';
    //echo "order ID :".$orderId;
?>
<div class="container-fluid text-center headspace">    
  <div class="row content">
    <div class="col-sm-6 col-sm-offset-1 text-left"> 
    <h3><?= $orderData['message'] ?></h3>
      <hr>
      <a href=<?= $getOrderUrl ?>  class="btn btn-primary">Order Status<a> 
      <form action=<?=$deleteOrderUrl?>  method="post">
          <button type="submit" class="btn btn-danger">Cancel Order</button>
      </form>
      <form action=<?=$payOrderUrl?> class="form-inline" method="post">
          <button type="submit" class="btn btn-success">Pay</button>
      </form>
      <form action=<?=$getOrdersUrl?> class="form-inline" method="get">
          <button type="submit" class="btn btn-success">Get Orders</button>
      </form>
    </div>
  </div>
</div>
