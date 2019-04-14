<html>
<head>
    <style>
html,
body {
  height: 100%;
}

body {
 	
  background-color: #f5f5f5;

}

.user{
font-size:15px;


}

li{
text-decoration:none;
list-style-type:none;
display:inline;
margin:10px;
font-size:25px;

}

a{
text-decoration: none;

}
ul{
float:right;
}

h1{
color:#007bff;
margin:10px;

}

</style>
<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


<?php session_start(); ?>

<h1>
Stobies Pizza!
</h1>


<ul>
 <li><a href="index.php">Home</a></li>
 <li><a href="cart.php">Cart</a></li>
 <li><a href="custompizza.php">Custom Pizza</a></li>
 <li><a href="ourpizzas.php">Our Pizza</a></li>
</ul>
<br></br>


	<div class="alert alert-success"><? $_SESSION['message']?></div>
	Welcome To Stobies Pizza! <br><span class="user"> <?= $_SESSION['firstName'] ?>   </span>
	<span class="user"> <?= $_SESSION['lastName'] ?>    </span><br>
	<br>
	Email: <br> <span class="user"> <?= $_SESSION['email'] ?>   </span> <br><br>
	Address: <br><span class="user"> <?= $_SESSION['address'] ?>    </span>

<br><br>

<h3> Add Payment Method to your Account!</h3>
      <hr class="mb-4">
        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
 <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add Payment Method To Your Account</button>

</body>
</html>
