<?php
    $orderId = $orderData['id'];
?>
<div class="container-fluid headspace">    
    <div class="col-sm-6 col-sm-offset-1 text-left"> 
      <div class="page-header">
        <h3>Order successfully cancelled</h3>
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
