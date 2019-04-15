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
      background-image: linear-gradient(rgba(0, 0, 0,0.7),rgba(0, 0, 0,0.7)),url(img/three.jpg);
      background-size:cover;
      background-position:center;
      height: 100vh;
      background-attachment: fixed;
}

div{
    border-radius: 25px;
}
li{
  border-bottom-left-radius: 25px;
  border-bottom-right-radius: 25px;
  text-align: center;
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
            <label for="firstName"><i class="fas fa-user"></i></label>
            <input type="text" name="firstName" placeholder="First Name" id="firstName" required>

            <label for="lastName"><i class="fas fa-user"></i></label>
            <input type="text" name="lastName" placeholder="Last Name" id="lastName" required>

				    <label for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" placeholder="Email" id="email" required>

				    <label for="password"><i class="fas fa-lock"></i></label>
				    <input type="password" name="password" placeholder="Password" id="password" required>

            <input type="submit" value="login" name="login_user">
            </form>

            <li><a href="signup.php"> Don't have an Account? <br>Sign Up For Free! <span>&#10003;</span></a></li>
		</div>
	</body>
</html>
