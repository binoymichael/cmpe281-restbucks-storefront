<div class="container-fluid text-center headspace">    
  <div class="row content">
    <div class="col-sm-3 col-sm-offset-1"> 
        <img src="assets/coffee-cup.jpg"/>
    </div>
    <div class="col-sm-3 col-sm-offset-1 text-left"> 
      <h3>Get your favourite coffee!</h3>
      <hr>
      <form action="/order" method="post">
          <div class="form-group">
            <label for="store">Store</label>
            <select name="store" class="form-control">
              <option value="mountainview">Mountain View</option>
              <option value="paloalto">Palo Alto</option>
              <option value="sunnyvale">Sunnyvale</option>
            </select>
          </div>
          <div class="form-group">
            <label for="location">Location</label>
            <select name="location" class="form-control">
              <option value="take-out">Take Out</option>
              <option value="dine-in">Dine In</option>
              <option value="delivery">Delivery</option>
            </select>
          </div>
          <div class="form-group">
              <div class="form-group">
                <label for="qty">Quantity</label>
                <select name="items[0][qty]" class="form-control">
                  <option value=1>1</option>
                  <option value=2>2</option>
                  <option value=3>3</option>
                  <option value=4>4</option>
                  <option value=5>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="type">Type</label>
                <select name="items[0][name]" class="form-control">
                  <option value="latte">Latte</option>
                  <option value="cappuccino">Cappuccino</option>
                  <option value="mocha">Mocha</option>
                  <option value="expresso">Expresso</option>
                </select>
              </div>
              <div class="form-group">
                <label for="milk">Milk</label>
                <select name="items[0][milk]" class="form-control">
                  <option value="whole">Whole</option>
                  <option value="skim">Skim</option>
                  <option value="reducedfat">Reduced Fat</option>
                  <option value="cream">Cream</option>
                </select>
              </div>
              <div class="form-group">
                <label for="size">Size</label>
                <select name="items[0][size]" class="form-control">
                  <option value="small">Small</option>
                  <option value="regular">Regular</option>
                  <option value="large">Large</option>
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
      <a href="/mountainview/orders" target="_blank">Mountain View</a>
      </div>
      <div class="well">
        <a href="/paloalto/orders" target="_blank">Palo Alto</a>
      </div>
      <div class="well">
        <a href="/sunnyvale/orders" target="_blank">Sunnyvale</a>
      </div>
    </div>
  </div>
</div>

