<!doctype html>
<?php
session_start();
$_SESSION['message']='';

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Sign Up</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    
    
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signup.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/logo.png" alt="" width="96" height="96">
    <h2>Join Stobie's Pizza</h2>
    <p class="lead">The best way to enjoy pizza.</p>
  </div>


<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$error_msg = validate_fields();
	if (count($error_msg) > 0){
		display_error($error_msg);
		form_1($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_POST['address']);
	} else {
		save_data();
	}
} else {
	form_1("", "", "", "","");
} ?>

<?php function form_1($firstName, $lastName, $email, $password, $address){ ?>
<div class ="container">
<div class="alert alert-error"><? $_SESSION['message'] ?></div>
    <form method="POST" action=" " id="form1">

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Create your personal account!</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" name= 'firstName' id="firstName" placeholder="" value="<?php echo $firstName; ?>" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name='lastName' id="lastName" placeholder="" value="<?php echo $lastName; ?>" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control"  name='email' id="email" placeholder="you@example.com" value="<?php echo $email; ?>" required>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="password">Password</label>
          <input type="password" id="password" class="form-control" name='password' placeholder="Password" value="<?php echo $password; ?>" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-4">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name='address' placeholder="1234 Main St" value="<?php echo $address; ?>"required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
       </div>


<?php } ?> 
     <!--   <hr class="mb-4">
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
-->
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Create an Account</button>
        <br>
       <li><a href="login.php"><button class="btn btn-primary btn-lg btn-block">Already a Member? Click to Sign In!</button>




       <div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 Application Project Group 3</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<!-- The Modal -->

  



<?php function validate_fields(){
	$error_msg = array();
	if (!isset($_POST['firstName'])){
		$error_msg[] = "First Name field not defined";
	} else if (isset($_POST['first_name'])){
		$firstName = trim($_POST['firstName']);
		if (empty($firstName)){
			$error_msg[] = "The First Name is empty";
		} else {
			if (strlen($firstName) >  100){
              $error_msg[] = "The First Name field contains too many characters";
			}
		}
    }
		
	
	if (!isset($_POST['lastName'])){
		$error_msg[] = "last Name field not defined";
	} else if (isset($_POST['lastName'])){
		$lastName = trim($_POST['lastName']);
		if (empty($lastName)){
			$error_msg[] = "The Last Name is empty";
		} else {
			if (strlen($lastName) >  100){
              $error_msg[] = "The Last Name field contains too many characters";
		}
    }
}

    if (!isset($_POST['email'])){
		$error_msg[] = "email field is not defined";
	} else if (isset($_POST['email'])){
		$email = trim($_POST['email']);
		if (empty($email)){
			$error_msg[] = "The E-Mail is empty";
		} else {
			if (strlen($email) >  30){
				$error_msg[] = "The E-Mail field contains too many characters";
			}
		}
	}
	
	 if (!isset($_POST['password'])){
		$error_msg[] = "password field is not defined";
	} else if (isset($_POST['password'])){
		$password = trim($_POST['password']);
		if (empty($password)){
			$error_msg[] = "The password is empty!";
		} else {
			if (strlen($password) >  30){
				$error_msg[] = "The Password field contains too many characters";
			}
		}
	}
	
	 if (!isset($_POST['address'])){
		$error_msg[] = "address field is not defined";
	} else if (isset($_POST['address'])){
		$address = trim($_POST['address']);
		if (empty($address)){
			$error_msg[] = "Address is empty";
		} else {
			if (strlen($address) >  30){
				$error_msg[] = "Address contains too many characters";
			}
		}
	}
	return $error_msg;
} ?>


<?php 
function display_error(){

}
?>
<?php
function save_data(){
$db_conn = new mysqli('localhost', 'group3user', 'Test123!', 'pizzadb');
if ($db_conn->connect_errno) {
    printf ("Could not connect to database server".$db_host."\n Error: ".$db_conn->connect_errno ."\n Report: ".$db_conn->connect_error."\n");
}
$firstName = $db_conn->real_escape_string($_POST['firstName']);
$lastName = $db_conn->real_escape_string($_POST['lastName']);
$email = $db_conn->real_escape_string($_POST['email']);
$password = $db_conn->real_escape_string($_POST['password']);
$address = $db_conn->real_escape_string($_POST['address']);


$_SESSION['id'] = $id;
$_SESSION['firstName'] = $firstName ;
$_SESSION['lastName'] = $lastName ;
$_SESSION['email'] = $email ;
$_SESSION['address'] = $address ;

 $qry = mysqli_query ($db_conn, "SELECT * FROM users WHERE firstName='".$firstName."' AND lastName='".$lastName."' AND email='".$email."'");
        if(mysqli_num_rows($qry) > 0){

           echo  "Account already exists! <br/>";
        }else{


$qry = "INSERT INTO users (firstName, lastName, email, password, address) VALUES ('".$firstName."','".$lastName."','".$email."', MD5('".$password."'), '".$address."');";
}
$db_conn->query($qry);

$db_conn->close();
header('Location: profile.php');

}

?>
</body>
</html>
