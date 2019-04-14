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

    <title>Stobie’s Pizza</title>
    
</head>
<body>
<header>
    <nav>
        <div class="row">
            <img src="./img/logo.png" alt="Stobie’s Pizza logo" class="logo">
            <img src="./img/logo.png" alt="Stobie’s Pizza logo" class="logo-black">
            <ul class="main-nav"> 
            <li><a href="cart.php"><ion-icon name="cart"></ion-icon> (<?php if (isset($_SESSION["cart"])){ echo (count($_SESSION["cart"]));}else{echo '0';}?>)</a></li>
                <li><a href="login.php">Log In</a></li>
                <li><a href="signup.php">Sign up</a></li>
		         <li><a href="profile.php">Profile</a></li>
                <li><a href="custompizza.php">Pizza Builder</a></li>
   		        <li><a href="ourpizzas.php">Classic Pizza's</a></li>
                <!-- <li><a href="#">Specialties</a></li>
                <li><a href="#">Deals</a></li> -->
            </ul>
        </div>
    </nav>
    <div class="text-box">
<br><br>
        <h1>Welcome to Stobie's Pizza <br><span class="user"><?if (isset($_SESSION["firstName"])){ echo $_SESSION['firstName'];}else{echo 'User';} ?> </span>
      
	<span class="user"> <?if (isset($_SESSION["lastName"])){ echo $_SESSION['lastName'];}else{echo 'User';} ?></span><br><br/> Our meals are super healthy</h1>
        <a class="btn btn-full"  href="#">View Menu </a>
        <a class="btn btn-ghost" href="#" >Show me more </a>
    </div>

</header>
<section class="section js--section">
    <div class="row">

        <h2>Get food fast &mdash; not fast food</h2>
        <p class ="text">
            Hello,Stobie’s Pizza is a family owned and operated pizza restaurant in London, Ontario. Proudly owned and operated by owners, Bernie, John & Carol Stobie since 1997! We have been committed to quality food, friendly service and exceptional pricing! </p>
    </div>

    <div class="row">
        <div class="col-1  box">
            <ion-icon name="ios-infinite"></ion-icon>
            <h3>24/7 Whenever you need</h3>
            <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
            </p>

        </div>
        <div class="col-2 box">
            <ion-icon name="ios-stopwatch"></ion-icon>

            <h3>Ready in 20 minutes</h3>
            <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
            </p>
        </div>

        <div class="col-3 box">
            <ion-icon name="ios-nutrition"></ion-icon>
            <h3>100% original</h3>
            <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.

            </p>
        </div>
        <div class="col-4 box">
            <ion-icon name="ios-cart"></ion-icon>
            <h3>Order anything</h3>
            <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
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

<section class="steps">>
    <div class="row">
        <h2>How it works &mdash; Simple as 1, 2, 3</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-2">
            <img src="./img/app-iPhone.png" alt="Stobie’s Pizza app on iPhone" class="app-screen">
        </div>
        <div class="col span-1-of-2">
            <div class="works-step">
                <div>1</div>
                <p>Create an account</p>
            </div>
            <div class="works-step">
                <div>2</div>
                <p>	Choose your pizza</p>
            </div>
            <div class="works-step">
                <div>3</div>
                <p>Order it</p>
            </div>
            <a href="#" class="btn-app"><img src="./img/download-app.png" alt="App store Button"></a>
            <a href="#" class="btn-app"><img src="./img/download-app-android.png" alt="Play store Button"></a>
        </div>
    </div>
</section>

<section class="cities">
    <div class="row">
        <h2> We're currently in these cities</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-4 box">
            <img src="./img/Ottawa.jpg" alt="Lisbon">
            <h3>Ottawa</h3>
            <div class="city-features">
                <ion-icon name="ios-person" size="small"></ion-icon>
                1600+ happy eaters
            </div>
            <div class="city-features">
                <ion-icon name="ios-star" size="small"></ion-icon>
                60+ top chefs
            </div>
            <div class="city-features">
                <ion-icon name="social-twitter" size="small"></ion-icon>
                <a href="#">@Stobie’s Pizza_O</a>
            </div>
        </div>

        <div class="col span-1-of-4 box">
            <img src="./img/Toronto.jpg" alt="Toronto">
            <h3>Toronto</h3>
            <div class="city-features">
                <ion-icon name="ios-person" size="small"></ion-icon>
                7600+ happy eaters
            </div>
            <div class="city-features">
                <ion-icon name="ios-star"></ion-icon>
                180+ top chefs
            </div>
            <div class="city-features">
                <ion-icon name="social-twitter" size="small"></ion-icon>
                <a href="#">@Stobie’s Pizza_T</a>
            </div>
        </div>

        <div class="col span-1-of-4 box">
            <img src="./img/Vancouver.jpg" alt="Vancouver">
            <h3>Vancouver</h3>
            <div class="city-features">
                <ion-icon name="ios-person" size="small"></ion-icon>
                2600+ happy eaters
            </div>
            <div class="city-features">
                <ion-icon name="ios-star" size="small"></ion-icon>

                120+ top chefs
            </div>
            <div class="city-features">
                <ion-icon name="social-twitter" size="small"></ion-icon>

                <a href="#"> @Stobie’s Pizza_V</a>
            </div>
        </div>

        <div class="col span-1-of-4 box">
            <img src="./img/Montreal.jpg" alt="Montreal">
            <h3>Montreal</h3>
            <div class="city-features">
                <ion-icon name="ios-person"></ion-icon>
                1600+ happy eaters
            </div>
            <div class="city-features">
                <ion-icon name="ios-star"></ion-icon>
                40+ top chefs
            </div>
            <div class="city-features">
                <ion-icon name="social-twitter"></ion-icon>
                <a href="#"> @Stobie’s Pizza_M</a>
            </div>
        </div>
    </div>
</section>
<!-- <section class="section-testimonials">
    <div class="row">
        <h2>Our customers can't live without us</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-3">
            <blockquote>
                Stobie’s Pizza is just great! I just launched a startup which leaves me with no time for cooking, so Stobie’s is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                <cite><img src="./img/customer-1.jpg">Mozhgan Goudarzi</cite>
            </blockquote>
        </div>
        <div class="col span-1-of-3">
            <blockquote>
                Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to  Stobie’s Pizza. Me and my family are so in love!
                <cite><img src="./img/customer-2.jpg">Debra smith</cite>
            </blockquote>
        </div>
        <div class="col span-1-of-3">
            <blockquote>
                I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with  Stobie’s Pizza. Best food delivery service in the Bay Area. Keep up the great work!
                <cite><img src="./img/customer-3.jpg">Milton Hong</cite>
            </blockquote>
        </div>
    </div>
</section> -->

<!-- <section class="section-plans">
    <div class="row">
        <h2>Start eating yummy Pizza today</h2>
    </div>
    <div class="row">

        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Primum</h3>
                    <p class="plan-price">$300  <span>/month</span></p>
                    <p class="plan-price-meal">That’s only 14.30$ per meal</p>
                </div>
                <div>
                    <ul>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>1 meal every day</li>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>Order 24/7</li>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>Access to newest creations</li>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>Free delivery</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Pro</h3>
                    <p class="plan-price">$149/<span>month</span></p>
                    <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                </div>
                <div>
                    <ul>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>1 meal 10 days/month</li>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>Order 24/7</li>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>Access to newest creations</li>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>Free delivery</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Starter</h3>
                    <p class="plan-price">19$/<span>meal</span></p>
                    <p class="plan-price-meal">&nbsp;</p>
                </div>
                <div>
                    <ul>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>1 meal</li>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>Order from 8 am to 12 pm</li>
                        <li><ion-icon name="ios-close-empty" size="small"></ion-icon>Special deals for christmas</li>
                        <li><ion-icon name="ios-checkmark-empty" size="small"></ion-icon>Free delivery</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">Sign up now</a>
                </div>
            </div>
        </div>

    </div>
</section> -->

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
                <div class="col span-of-3">
                    <label for="find-us">How did you find us</label>
                </div>
                <div class="col span-2-of-3">
                    <select name="find-us" id="find-us">
                        <option value="friends" selected>Friends</option>
                        <option value="search" >Search engine</option>
                        <option value="ad">Advertisement</option>
                        <option value="other">Other</option>
                    </select>
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
                <div class="col span-4-f-3">
                    <textarea name="message" placeholder="Your message"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col span-5-of-3">
                    <label>&nbsp;</label>
                </div>
                <div class="col span-6-f-3">
                    <input type="submit" value="send it!">
                </div>
            </div>

        </form>
    </div>
</section>

<footer>
    <div class="row">
        <div class="col span-1-0f-2">
            <ul class="footer-nav">
                <li><a href="#">About us</a></li>
                <li><a href="#">Blog </a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">ios App</a></li>
                <li><a href="#">Android App</a></li>
            </ul>
        </div>
        <div class="col span-1-of-2">
            <ul class="social-Media">
                <li><a href="#"><ion-icon name="social-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="social-twitter"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="social-googleplus"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="social-instagram"></ion-icon></a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <p>
            Copyright &copy; 2019 by Stobie’s Pizza.All rights reserved.
        </p>
    </div>
</footer>

</body>

</html>


