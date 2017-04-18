<!doctype html>
<html lang="en">
<head>
  <title>A+ Restbucks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home"><i class="fa fa-coffee"></i> A+ Restbucks</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/home">HOME</a></li>
        <li><a href="/stores">STORES</a></li>
        <li><a href="/about">ABOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center headspace">
  <div class="row content">
    <div class="col-sm-3 col-sm-offset-1">
        <img src="assets/coffee-cup.jpg"/>
    </div>
    <div class="col-sm-3 col-sm-offset-1 text-left">
      <h3>Get your favourite coffee!</h3>
      <hr>
      <form action="orders/views.php" method="GET">
          <div class="form-group">
            <label for="store">Store</label>
            <select name="storeName" class="form-control">
              <option value="mountainview">Mountain View</option>
              <option value="paloalto">Palo Alto</option>
              <option value="sunnyvale">Sunnyvale</option>
            </select>
          </div>
          <div class="form-group">
            <label for="orderNo">Order Number</label>
            <textarea name="orderNumber" class="form-control">

            </textarea>
          </div>

          <button type="cancel" class="btn btn-default">Cancel Order</button>
      </form>


    </div>
    <div class="col-sm-2 col-sm-offset-1 sidenav">
      <div>
      <h4>Stores</h4>
      </div>
      </br>
      <div class="well">
        <a href="http://54.215.145.110:8000/mountainview target="_blank">Mountain View</a>
      </div>
      <div class="well">
        <a href="http://54.215.145.110:8000/paloalto" target="_blank">Palo Alto</a>
      </div>
      <div class="well">
        <a href="http://54.215.145.110:8000/sunnyvale" target="_blank">Sunnyvale</a>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Website create for SJSU CMPE-281 course.</p>
</footer>

</body>
</html>
