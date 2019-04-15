<?php
$db_conn = new mysqli('localhost', 'group3user', 'Test123!', 'pizzadb');
if (!$db_conn){
    die("Database Connection Failed" . mysqli_error($db_conn));
}
$select_db = mysqli_select_db($db_conn, 'pizzadb');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($db_conn));
}


// LOGIN USER
if (isset($_POST['login_user'])) {
    $firstName = mysqli_real_escape_string($db_conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db_conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($db_conn, $_POST['email']);
    $password = mysqli_real_escape_string($db_conn, $_POST['password']);
  

    if (empty($firstName)) {
        array_push($errors, "First Name is required");
    }
    if (empty($lastName)) {
        array_push($errors, "Last Name is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE  firstName='$firstName' AND lastName='$lastName' AND email='$email' AND password='$password'";
        $results = mysqli_query($db_conn, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['firstName'] = $firstName;
          $_SESSION['lastName'] = $lastName;
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
          header('location: profile.php');
        }else {
            array_push($errors, "Wrong email/password combination");
        }
    }
  }
  
  ?>