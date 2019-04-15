<?php
  
session_start();
include("session.php");?>
<!DOCTYPE html>
<html>
	<head>
        <style>

html{

    height:100%;
}
body {
    background-image:url("img/pizza-background.jpg");
    height: 100%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    
}
 </style>
		<meta charset="utf-8">
		<title>Login</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="css/login.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	</head>
	<body>
		<div class="login">
            <h1>Welcome To Stobies Pizza!</h1>
			<h2>Please Login!</h2>
			<form action="login.php" method="post">
            <label for="firstName">
					<i class="fas fa-user"></i>
				</label>
                <input type="text" name="firstName" placeholder="First Name" id="firstName" required>
                <label for="lastName">
					<i class="fas fa-user"></i>
				</label>
                <input type="text" name="lastName" placeholder="Last Name" id="lastName" required>
				<label for="email">
					<i class="fas fa-user"></i>
				</label>
                <input type="text" name="email" placeholder="Email" id="email" required>
                
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="login" name="login_user">
            </form>
            <li><a href="signup.php"> Don't have an Account? <br>Sign Up For Free!              <span>&#10003;</span></a>
		</div>
	</body>
</html>

