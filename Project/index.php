<?php
session_start();
$_SESSION['currentPage'] = 'start';
// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/normalize.css">
    <link rel="stylesheet" type="text/css" href="./css/grid.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/queries.css">

    <!--<link rel="stylesheet" type="text/css" href="./css/ionicons.min.css">-->

    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">


    <link rel="apple-touch-icon" sizes="180x180" href="./favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">


    <link rel="manifest" href="./favicons/site.webmanifest">
    <link rel="mask-icon" href="./favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./favicons/favicon.ico">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="sources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./js/jquery.waypoints.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <script>
// Initialize and add the map
function initMap() {
  // The location of ottawa
  var  ottawa = {lat: 45.41117, lng:-75.69812};
  var toronto = {lat:43.653908,lng:-79.384293};
  var vancouver = {lat:49.246292,lng:-123.116226};
  var montreal = {lat:45.516136,lng:-73.656830}

  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4.6, center: toronto});

  var marker0 = new google.maps.Marker({position: ottawa, map: map});
  var marker1 = new google.maps.Marker({position: toronto, map: map});
  var marker2 = new google.maps.Marker({position: vancouver, map: map});
  var marker3 = new google.maps.Marker({position: montreal, map: map});

}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIwcKb9GpuoAN3Nvj6OGkKJOqnxrLCLbI&callback=initMap">
    </script>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 100vh;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    <title>Stobie’s Pizza</title>

</head>

<body>
    <header>
        <nav>
            <div class="row">
                <img src="./img/logo.png" alt="Stobie’s Pizza logo" class="logo">
                <ul class="main-nav">
                    <!-- <li><a href="logout.php">Log Out</a></li> -->
                    <li><a href="cart.php">
                            <ion-icon name="cart"></ion-icon> (<?php if (isset($_SESSION["cart"])) {
                                                                    echo (count($_SESSION["cart"]));
                                                                } else {
                                                                    echo '0';
                                                                } ?>)
                        </a></li>
                    <li><a href="signup.php">Sign up</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="custompizza.php">Pizza Builder</a></li>
                    <li><a href="ourpizzas.php">Classic Pizza's</a></li>

                </ul>
            </div>
        </nav>

        <div class="text-box">
            <h1>Welcome to Stobie's Pizza <br><span class="user"> <?if (isset($_SESSION["firstName"])){ echo $_SESSION['firstName'];}else{echo 'User';} ?> </span>
                <span class="user"> <?if (isset($_SESSION["lastName"])){ echo $_SESSION['lastName'];}else{echo 'User';} ?> </span> Our meals are super healthy</h1>
            <a class="btn btn-full" href="#">View Menu </a>
            <a class="btn btn-ghost" href="#">Show me more </a>
        </div>

    </header>
    <section class="section js--section">
        <div class="row">

            <h2>Get food fast &mdash; not fast food</h2>
            <p class="text">
                Hello,Stobie’s Pizza is a family owned and operated pizza restaurant in London, Ontario. Proudly owned and operated by owners, Bernie, John & Carol Stobie since 1997! We have been committed to quality food, friendly service and exceptional pricing! </p>
        </div>

        <div class="row">
            <div class="col-1  box">
                <ion-icon size="large" name="ios-infinite"></ion-icon>
                <h3>24/7 Whenever you need</h3>
                <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                </p>

            </div>
            <div class="col-2 box">
                <ion-icon size="large" name="ios-stopwatch"></ion-icon>
                <h3>Ready in 20 minutes</h3>
                <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                </p>
            </div>

        <div class="col-4 box box-final">
            <ion-icon size="large" name="ios-cart"></ion-icon>
            <h3>Order anything!</h3>
            <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals.
                </p>
            </div>
        </div>
    </section>

    <section class="meals">
        <ul class="meals-showcase">
            <li>
                <figure class="meal-photo">

                    <img src="./img/one.jpg" alt="korean bibimap with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">

                    <img src="./img/two.jpg" alt="Simple italian pizza with cherry tomatoe">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">

                    <img src="./img/three.jpg" alt="Chicken breast steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">

                    <img src="./img/four.jpg" alt="Autumn pumpkin soup">
                </figure>
            </li>
        </ul>
        <ul class="meals-showcase">
            <li>
                <figure class="meal-photo">
                    <img src="./img/five.jpg" alt="Paleo beef steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="./img/six.jpg" alt="Healthy baguette with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="./img/seven.jpg" alt="Burger with cheddar and bacon">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="./img/eight.jpg" alt="	Granola with cherries and strawberries">
                </figure>
            </li>
        </ul>
    </section>

    <section class="steps">
    <div class="row"></div>

      <h2 class="how">How it works &mdash; Simple as Four Steps</h2>
        <div class="row">
            <div class="col span-1-of-2">
                <img src="./img/app-iPhone.png" alt="Stobie’s Pizza app on iPhone" class="app-screen">
            </div>
            <div class="col span-1-of-2">
                <div class="works-step">
                    <div>1</div>
                <h3>Click 'Sign Up'<br>to create an account</h3>
                </div>
                <div class="works-step">
                    <div>2</div>
                <h3>Use 'Pizza Builder'<br>to build your own pizza</h3>
                </div>
                <div class="works-step">
                    <div>3</div>
                <h3>Use 'Classic Pizza'<br> to enjoy our original pizza</h3>
            </div>
            <div class="works-step">
                <div>4</div>
                <h3>Order it,<br> Your pizza is ready in 20 minutes!</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="cities">
        <div class="row">
            <h2> We're currently in these cities</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-4 box">
            <img src="./img/Ottawa.jpg" alt="Ottawa">
                <h3>Ottawa</h3>
            </div>

            <div class="col span-1-of-4 box">
                <img src="./img/Toronto.jpg" alt="Toronto">
                <h3>Toronto</h3>
            </div>

            <div class="col span-1-of-4 box">
                <img src="./img/Vancouver.jpg" alt="Vancouver">
                <h3>Vancouver</h3>
            </div>

            <div class="col span-1-of-4 box">
                <img src="./img/Montreal.jpg" alt="Montreal">
                <h3>Montreal</h3>
            </div>
        </div>
    </section>
    <section  class="cities">
    <div id="map"></div>
    </section>

    <section class="section-form">
        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>
        <div class="row">
            <form method="post" action="#" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Newsletter?</label>
                    </div>
                    <div class="col span-2-f-3">
                        <input type="checkbox" name="news" id="news" checked> Yes,Please
                    </div>
                </div>
                <div class="row">
                    <div class="col span-3-of-3">
                        <label>Drop us a line</label>
                    </div>
                <div class="col span-3-of-3">
                        <textarea name="message" placeholder="Your message"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-5-of-3">
                        <label>&nbsp;</label>
                    </div>
                <div class="col span-5-of-3">
                        <input type="submit" value="send it!">
                    </div>
                </div>

            </form>
        </div>
    </section>

    <footer>
        <div class="row">
            <p>
                Copyright &copy; 2019 by Stobie’s Pizza.All rights reserved.
            </p>
        </div>
    </footer>

</body>

</html>
