<?php
$db_conn = new mysqli('localhost', 'group3user', 'Test123!', 'pizzadb');
if (!$db_conn){
    die("Database Connection Failed" . mysqli_error($db_conn));
}
$select_db = mysqli_select_db($db_conn, 'pizzadb');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($db_conn));
}