// $store and $orderData should be populated before rendering this page
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
      <a href=<?= $payOrderUrl ?> class="btn btn-success">Pay<a> 
    </div>
  </div>
</div>
