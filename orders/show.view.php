<?php
    $orderId = $orderData['id'];
    $getOrderUrl = '/' . $store . '/order/' . $orderId;
    $deleteOrderUrl = '/' . $store . '/order/' . $orderId;
    $payOrderUrl = '/' . $store . '/order/' . $orderId . '/pay';
?>
<div class="container-fluid text-center headspace">    
  <div class="row content">
    <div class="col-sm-6 col-sm-offset-1 text-left"> 
    <h3><?= $orderData['message'] ?></h3>
      <hr>
      <a href=<?= $getOrderUrl ?>  class="btn btn-primary">Order Status<a> 
      <a href=<?= $deleteOrderUrl ?> class="btn btn-danger">Cancel Order<a> 
      <form action=<?=$payOrderUrl?> class="form-inline" method="post">
          <button type="submit" class="btn btn-success">Pay</button>
      </form>
    </div>
  </div>
</div>
