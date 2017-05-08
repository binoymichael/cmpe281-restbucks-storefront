<?php
$updateUrl = "/" . $store . "/order/" . $orderData['id'] . "/update";
 ?>?>
<div class="container-fluid text-center headspace">
  <div class="row content">
    <div class="col-sm-3 col-sm-offset-1">
        <img src="/assets/coffee-cup.jpg"/>
    </div>
    <div class="col-sm-3 col-sm-offset-1 text-left">
      <h3>Update your Order</h3>
      <hr>
      <form action="<?= $updateUrl ?>" method="post">
          <div class="form-group">
            <label for="location">Update Location</label>
            <select name="location" class="form-control">
              <option <?= $orderData['location'] == 'take-out' ? 'selected' : '' ?> value="take-out">Take Out</option>
              <option <?= $orderData['location'] == 'dine-in' ? 'selected' : '' ?> value="dine-in">Dine In</option>
              <option <?= $orderData['location'] == 'delivery' ? 'selected' : '' ?> value="delivery">Delivery</option>
            </select>
          </div>
          <div class="form-group">
              <div class="form-group">
                <label for="qty">Update Quantity</label>
                <select name="items[0][qty]" class="form-control">
                  <option <?= $orderData[items][0]['qty'] == 1 ? 'selected' : '' ?> value=1>1</option>
                  <option <?= $orderData[items][0]['qty'] == 2 ? 'selected' : '' ?> value=2>2</option>
                  <option <?= $orderData[items][0]['qty'] == 3 ? 'selected' : '' ?> value=3>3</option>
                  <option <?= $orderData[items][0]['qty'] == 4 ? 'selected' : '' ?> value=4>4</option>
                  <option <?= $orderData[items][0]['qty'] == 5 ? 'selected' : '' ?> value=5>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="type">Update Type</label>
                <select name="items[0][name]" class="form-control">
                  <option <?= $orderData[items][0]['name'] == 'latte' ? 'selected' : '' ?> value="latte">Latte</option>
                  <option <?= $orderData[items][0]['name'] == 'cappuccino' ? 'selected' : '' ?> value="cappuccino">Cappuccino</option>
                  <option <?= $orderData[items][0]['name'] == 'mocha' ? 'selected' : '' ?> value="mocha">Mocha</option>
                  <option <?= $orderData[items][0]['name'] == 'expresso' ? 'selected' : '' ?> value="expresso">Expresso</option>
                </select>
              </div>
              <div class="form-group">
                <label for="milk">Update Milk</label>
                <select name="items[0][milk]" class="form-control">
                  <option <?= $orderData[items][0]['milk'] == 'whole' ? 'selected' : '' ?> value="whole">Whole</option>
                  <option <?= $orderData[items][0]['milk'] == 'skim' ? 'selected' : '' ?> value="skim">Skim</option>
                  <option <?= $orderData[items][0]['milk'] == 'reducedfat' ? 'selected' : '' ?> value="reducedfat">Reduced Fat</option>
                  <option <?= $orderData[items][0]['milk'] == 'cream' ? 'selected' : '' ?> value="cream">Cream</option>
                </select>
              </div>
              <div class="form-group">
                <label for="size">Update Size</label>
                <select name="items[0][size]" class="form-control">
                  <option <?= $orderData[items][0]['size'] == 'small' ? 'selected' : '' ?> value="small">Small</option>
                  <option <?= $orderData[items][0]['size'] == 'regular' ? 'selected' : '' ?> value="regular">Regular</option>
                  <option <?= $orderData[items][0]['size'] == 'large' ? 'selected' : '' ?> value="large">Large</option>
                </select>
              </div>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    <div class="col-sm-2 col-sm-offset-1 sidenav">
      <div>
      <h4>Stores</h4>
      </div>
      </br>
      <div class="well">
      <a href="<?= $KONG_URL ?>/mountainview" target="_blank">Mountain View</a>
      </div>
      <div class="well">
        <a href="<?= $KONG_URL ?>/paloalto" target="_blank">Palo Alto</a>
      </div>
      <div class="well">
        <a href="<?= $KONG_URL ?>/sunnyvale" target="_blank">Sunnyvale</a>
      </div>
    </div>
  </div>
</div>
