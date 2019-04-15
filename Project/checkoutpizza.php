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

$total = 0;
foreach ($cart as $item) {
    $total += $item->price;
}

if (isset($_POST["confirm"])) {
    $order = new stdClass();
    $order->items = $cart;
    $order->payment = isset($_POST["paymentMethod"]) ? $_POST["paymentMethod"] : 1;
    $order->delivery = $_POST["delivery"];
    $order->profileId = 1; //TODO get from session
    $order->total = $total;

    if (saveOrder($order)) {

        $message = "SUCCESS";
        header("Location: checkoutFinalized.php");
        $_SESSION["cart"] =  array();
        die();

    } else {

        $message = "ERROR";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

$delivery = 0;

function asMoney($number) {
    return 'C$ ' . number_format($number, 2);
}

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
                    <h2 class="text-center mb-4">CHECK-OUT</h2>
                    <h3 class="mb-4">Your order: </h3>
                    <div class="row">
                        <table class="table">
                            <?php
                                $i=0;
                                foreach($cart as $item) {   
                                    $name = isset($item->isPreDefined) && !$item->isPreDefined ? "Custom Pizza #". ++$i : $item->name;
                            ?>
                            <tr>
                                <td><?= $name ?></td>
                                <td class="text-right"><?= asMoney($item->price) ?></td>
                            </tr>
                            <?php
                                } 
                            ?>
                            <tfoot>
                                <tr class="font-weight-bolder">
                                    <td>TOTAL</td>
                                    <td class="text-right"><?= asMoney($total) ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="paymentMethod">Payment Method</label>
                        <div class="col-sm-8">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="Cash" name="paymentMethod" value='0' <?php echo $delivery == 0 ? "checked" : "" ?>>
                                <label for="Cash"> <i class="far fa-money-bill-alt" style="color:green"></i> Cash</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="CreditCard" name="paymentMethod" value='1' <?php echo $delivery == 1 ? "checked" : "" ?>>
                                <label for="CreditCard"> <i class="fab fa-cc-visa" style="color:blue"></i> <i class="fab fa-cc-mastercard" style="color:orange"></i> Credit Card</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="Debit" name="paymentMethod" value='2' <?php echo $delivery == 2 ? "checked" : "" ?>>
                                <label for="Debit"><i class="fas fa-credit-card" style="color:blue"></i> Debit</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="Gift" name="paymentMethod" value='3' <?php echo $delivery == 3 ? "checked" : "" ?>>
                                <label for="Gift"><ion-icon name="gift" style="color:red"></ion-icon> Gift Card</label>
                            </div>

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="delivery">Delivery Method</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="delivery_address" name="delivery" value='1' <?php echo $delivery == 1 ? "checked" : "" ?>>
                                <label for="delivery_address"> <i class="fas fa-truck" style="color:purple"></i> Delivery</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="pickup" name="delivery" value='0' <?php echo $delivery == 0 ? "checked" : "" ?>>
                                <label for="pickup"><i class="fas fa-hand-holding" style="color:brown"></i> Pick-up</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" name="cart" class="btn btn-secondary">Back to Cart</button>
                            <button type="submit" name="confirm" class="btn btn-primary">Confirm checkout</button>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
        </form>
    </div>
</div>