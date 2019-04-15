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
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" width="100%" height="225" src="img/hawaiian.jpg">
            <div class="card-body">
              <h5 class="card-title">Hawaiian</h5>
              <p class="card-text">Succulent pineapple and slices of ham topped with an extra layer of cheese.</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-primary">Order</button>
                <small class="text-muted">Cals 210-310 per slice</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" width="100%" height="225" src="img/pepperoni.jpg">
            <div class="card-body">
              <h5 class="card-title">Pepperoni</h5>
              <p class="card-text">Lots and lots of pepperoni topped with an extra layer of cheese.</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-primary">Order</button>
                <small class="text-muted">Cals 210-310 per slice</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" width="100%" height="225" src="img/bbqchicken.jpg">
            <div class="card-body">
              <h5 class="card-title">BBQ Chicken</h5>
              <p class="card-text">BBQ sauce and loaded with chicken, bacon, onions, green peppers and cheddar cheese.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-primary">Order</button>
                <small class="text-muted">Cals 210-310 per slice</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" width="100%" height="225" src="img/canadian.jpg">
          <div class="card-body">
            <h5 class="card-title">Canadian</h5>
              <p class="card-text">Loads of pepperoni, fresh mushrooms, and smoked bacon, topped with an extra layer of premium mozzarella cheese.</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-primary">Order</button>
                <small class="text-muted">Cals 210-310 per slice</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" width="100%" height="225" src="img/smokeymaplebacon.jpg">
          <div class="card-body">
              <h5 class="card-title">Smokey Maple Bacon</h5>
              <p class="card-text">A Ranch Sauce base with a Mozzarella Cheese, fresh tomatoes, green peppers, all white-meat chicken and bacon.</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-primary">Order</button>
                <small class="text-muted">Cals 210-310 per slice</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" width="100%" height="225" src="img/meatlovers.jpg">
            <div class="card-body">
              <h5 class="card-title">Meat Lovers</h5>
              <p class="card-text">Slice after slice of pepperoni, ham, savory Italian sausage and ground beef topped with an extra layer of cheese.</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-primary">Order</button>
                <small class="text-muted">Cals 210-310 per slice</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" width="100%" height="225" src="img/supreme.jpg">
            <div class="card-body">
              <h5 class="card-title">Supreme</h5>
              <p class="card-text">Pepperoni, Italian sausage, fresh green peppers, fresh mushrooms and cheese.
</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-primary">Order</button>
                <small class="text-muted">Cals 210-310 per slice</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" width="100%" height="225" src="img/vegeterian.jpg">
              <div class="card-body">
                <h5 class="card-title">Vegeterian</h5>
              <p class="card-text">A medley of fresh green peppers, onion, tomatoes, mushrooms, and olives.</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-primary">Order</button>
                <small class="text-muted">Cals 210-310 per slice</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
<img class="card-img-top" width="100%" height="225" src="img/4cheese.jpg">
            <div class="card-body">
              <h5 class="card-title">4 Cheese</h5>
              <p class="card-text">Covered with Feta, provolone, cheddar, and mozzarella cheese finished with oregano.</p>
              <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-primary">Order</button>
                <small class="text-muted">Cals 210-310 per slice</small>
              </div>
            </div>
          </div>
        </div>
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
