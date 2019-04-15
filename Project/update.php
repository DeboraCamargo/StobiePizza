<?php

//Authors Brandon Box and Adrian Joseph
$connection =	mysqli_connect('localhost' , 'group3user' ,'Test123!' ,'pizzadb');


if(isset($_POST['save'])){
$error_msg = array();
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
	$id = $_POST['id'];

	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$address = trim($_POST['address']);

    $firstName = mysqli_real_escape_string($connection, $firstName);
    $lastName = mysqli_real_escape_string($connection, $lastName);
    $email = mysqli_real_escape_string($connection, $email);
    $address = mysqli_real_escape_string($connection, $address);


	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE users SET firstName='$firstName' , lastName='$lastName' , email = '$email',  address = '$address' WHERE id=$id");
	if($result){
		echo 'data updated';
	}

}


?>
