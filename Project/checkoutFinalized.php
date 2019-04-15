<?php
session_start();

require_once("../common/template/header.php");

if (isset($_POST["homePage"])) {
    header("Location: index.php");
    die();
}

?>
<link rel="stylesheet" href="custompizza.css">
<div class="cmodal">
    <div class="cmodal-content2">
        <form method="POST" id="checkout">
          
                <div class="container">
                   <h1>Thanks for ordering with us</h1>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" name="homePage" class="btn btn-primary">Go to Home Page</button>
                        </div>
                    </div>
                </div>

        </form>
    </div>
</div>