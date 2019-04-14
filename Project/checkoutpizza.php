<?php
session_start();

require_once("../common/template/header.php");
require_once("../common/db/order_db.php");

if (isset($_POST["homePage"])) {
    header("Location: index.php");
    die();
}

if (isset($_POST["cart"])) {
    header("Location: cart.php");
    die();
}

$_SESSION['currentPage'] = 'checkout';

if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
} else {
    $cart = array();
}

if (isset($_POST["confirm"])) {
    $order = new stdClass();
    $order->items = $cart;
    $order->payment = isset($_POST["paymentMethod"]) ? $_POST["paymentMethod"] : 1;
    $order->delivery = $_POST["delivery"];
    $order->profileId = 1; //TODO get from session
    $order->total = 1000; // TODO calculate it

    if (saveOrder($order)) {

        $message = "SUCCESS";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {

        $message = "ERROR";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

$total = 1000;
$delivery = 0;

?>
<link rel="stylesheet" href="custompizza.css">
<div class="cmodal">
    <div class="cmodal-content2">
        <form method="POST" id="checkout">
            <?php
            if (count($cart) == 0) {
                echo "Your cart is empty"; ?>

                <button type="submit" name="homePage" class="btn btn-secondary">Home Page</button>
            <?php
        } else {
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Total: <?php echo $total; ?> </h2>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="paymentMethod">Payment Method</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="text" name="paymentMethod">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="delivery">Delivery Method</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="delivery_address" name="delivery" value='1' <?php echo $delivery == 1 ? "checked" : "" ?>>
                                <label for="delivery_address">Delivery</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="pickup" name="delivery" value='0' <?php echo $delivery == 0 ? "checked" : "" ?>></input>
                                <label for="pickup">Pick-up</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" name="confirm" class="btn btn-primary">Confirm checkout</button>
                            <button type="submit" name="cart" class="btn btn-secondary">Back to Cart</button>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
        </form>
    </div>
</div>