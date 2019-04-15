<html>
<head>
<?php
  include 'update.php';
//Authors Brandon Box And Adrian Joseph
 ?>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <style>

body {
  height: 100%;
  width: 80%;
  color: white;
  padding-left: 15%;
}

.table{
width:50%;

}

h2{
  font-family: 'Merriweather', serif;
}

h3{
  font-family: 'Poppins', sans-serif;
}

li{
text-decoration:none;
list-style-type:none;
display:inline;
margin:10px;
font-size:25px;
padding:10px;
font-family: 'Poppins', sans-serif;
}

a{
text-decoration: none;
}

ul{
float:right;
}

h1{
font-family: 'Merriweather', serif;
}

.logo{
  height: 120px;
  width: 120px;
}

body {
      background-image: linear-gradient(rgba(0, 0, 0,0.7),rgba(0, 0, 0,0.7)),url(img/two.jpg);
      background-size:cover;
      background-position:center;
      height: 100vh;
      background-attachment: fixed;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

#edit{
  font-size:14px;
  height:35px;
}
</style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

</head>
<body>


<?php session_start();
include 'connection.php';
?>




<h1 style="color:white;"><img src="./img/logo.png" alt="Stobie’s Pizza logo" class="logo">
  Stobies Pizza
</h1>


<ul>
 <li style="color:white;"><a href="index.php">Home</a></li>
 <li><a href="cart.php">Cart</a></li>
 <li><a href="custompizza.php">Custom Pizza</a></li>
 <li><a href="ourpizzas.php">Our Pizza</a></li>
 <li><a href="login.php">Log Out</a></li>
</ul>
<br><br><br><br>

<div class="container">
<table class="table" style="color:#fff;">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Click To Update!</th>
      </tr>
    </thead>
    <tbody>

	<div class="alert alert-success"><? $_SESSION['message']?></div>
<h2  style="text-align:center;color:#fff;">	Welcome To Stobies Pizza!</h2>
<br><br>
<h3 style="color:#fff;">Update Your Information</h3>

<tr id=<?php $_SESSION['id']; ?>>

   <td data-target="firstName"><span class="user"> <?=$_SESSION['firstName'] ?> </span></td>


	<td data-target="lastName"><span class="user"> <?= $_SESSION['lastName'] ?>    </span></td>

    <td data-target="email"> <span class="user"> <?= $_SESSION['email'] ?>   </span> </td>
    <td data-target="address"><span class="user"> <?= $_SESSION['address'] ?>    </span></td>
    <td><a href="#" data-role="update" data-toggle="modal" data-target="#myModal" data-id="<?php echo $_SESSION['id'] ;?>">Update</a></td>
     </tbody>
  </table>
</div>
<br><br><br>





<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

         <form method="POST" id="form">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" id="firstName" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" id="lastName" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" id="email" class="form-control" required="true">
                    </div>
                     <div class="form-group">
                      <label>Address</label>
                      <input type="text" id="address" class="form-control" required="true">
                    </div>
                      <input type="hidden" id="userId" class="form-control">

                </div>
      </form>
                <div class="modal-footer">
                  <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                </div>


            </div>
        </div>
    </div>


<script>


  $(document).ready(function(){




 $('#save').click(function(){

    var id  = $('#userId').val();
    var firstName =  $('#firstName').val();
    var lastName =  $('#lastName').val();
    var email =   $('#email').val();
    var address =   $('#address').val();

    $.ajax({
        url      : 'update.php',
        method   : 'post',
        data     : {firstName : firstName , lastName: lastName , email : email , address: address,  id: id},
        success  : function(response){

                             $(id).children('td[data-target=firstName]').text(firstName);
                             $(id).children('td[data-target=lastName]').text(lastName);
                             $('#myModal').modal('toggle');

                   }

    });
 });
});
</script>

<h3 style="color:#fff;"> Add Payment Method to your Account</h3>
      <hr class="mb-4">
        <h4 class="mb-3" style="color:#fff;">Payment</h4>

        <div class="d-block my-3" style="color:#fff;">
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
        <br><br>
        <div class="row" style="color:#fff;">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
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
        <br><br>
        <div class="row" style="color:#fff;">
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
        <br><br>
 <hr class="mb-4">
 <br><br>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add Payment Method To Your Account</button><br><br><br><br>




</body>
</html>
