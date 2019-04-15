<?php
session_start();

$db_conn = new mysqli('localhost', 'group3user', 'Test123!', 'pizzadb');
if ($db_conn->connect_errno) {
    die("Could not connect to database server \n Error: " . $db_conn->connect_errno . "\n Report: " . $db_conn->connect_error . "\n");
}

function findById($arr, $id) {
  foreach($arr as $item) {
      if($item->id == $id) {
          return $item;
      }
  }
  return null;
}

$arr_pizzas = array();

$qry = "select id, pizza_name, pizza_description, pizza_cals, price, img from ourpizza;";
$rs = $db_conn->query($qry);
if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->name = $row['pizza_name'];
        $obj->description = $row['pizza_description'];
        $obj->cals = $row['pizza_cals'];
        $obj->price = $row['price'];
        $obj->img = $row['img'];

        array_push($arr_pizzas, $obj);
    }
}

if(isset($_POST["order"])) {
  $pizzaId = $_POST["pizzaId"];
  $pizza = findById($arr_pizzas, $pizzaId);
  $pizza->isPredefined = true;

  if (isset($_SESSION["cart"])) {
      $cart_pizzas = $_SESSION["cart"];
  } else {
      $cart_pizzas = array();
  }

  array_push($cart_pizzas, $pizza);
  $_SESSION["cart"] = $cart_pizzas;
  header("Location: cart.php");
  die();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Pizza Example</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    body{
        background-image: linear-gradient(rgba(0, 0, 0,0.7),rgba(0, 0, 0,0.7)),url(img/four.jpg);
        background-size:cover;
        background-position:center;
        height: 100vh;
        background-attachment: fixed;
    }

    heading-p{
      color: #fff;
    }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/pizza.css" rel="stylesheet">
  </head>
  <body>

<main role="main">
    <div class="container text-center">
      <br><br>
      <img src="img/logo.png" alt="" width="130" height="130">
      <a href="index.php"><h1 class="jumbotron-heading">Stobie's Pizza</h1></a>
      <p class="lead text-muted heading-p">Select the pizza of your choice, it's all yours!</p>
    </div>
    <br><br>

    <div class="container">
      <div class="row">
        <?php
          foreach($arr_pizzas as $pizza) {
        ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <form method="POST">
              <input type="hidden" name="pizzaId" value="<?= $pizza->id?>" />
              <img class="card-img-top" width="100%" height="225" src="img/<?= $pizza->img?>">
              <div class="card-body">
                <h5 class="card-title"><?= $pizza->name ?></h5>
                <p class="card-text"><?= $pizza->description ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-sm btn-primary" name="order">Order</button>
                  <small class="text-muted">Cals <?= $pizza->cals?> per slice</small>
                </div>
              </div>
            </form>
          </div>
        </div>

        <?php 
          }
        ?>
      </div>
    </div>


</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>&copy; 2019 Application Project Group 3</p>
  </div>
</footer>
</body>
</html>
