<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stobie's Pizza Cart Page</title>
<?php

require_once("../common/template/header.php");

session_start();


if (isset($_POST["homePage"])) {
    header("Location: index.php");
    die();
}

if (isset($_POST["checkout"])) {
    header("Location: checkoutpizza.php");
    die();
}

if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
} else {
    $cart = array();
}

if (isset($_POST["remove"])) {
    $getItemToRemove = $_POST["remove"];
    unset($cart[$getItemToRemove]);
    $_SESSION["cart"] = $cart;
}


function getSideText($side_code)
{
    if ($side_code == 1) return "Left";
    if ($side_code == 2) return "Right";
    return "Both";
}

function asMoney($number) {
    return 'C$ ' . number_format($number, 2);
}

?>
<link rel="stylesheet" href="custompizza.css">
</head>

<body>
<div class="cmodal">
    <div class="cmodal-content2">
        <form method="POST" id="forminho">
            <?php

            if (count($cart) == 0) {
                echo "Your cart is empty"; ?>

                <br><br>
                <button type="submit" name="homePage" class="btn btn-secondary">Home Page</button>
            <?php
        } else {
            ?>
                <h2 class="text-center mb-4"><ion-icon name="cart"></ion-icon> YOUR CART</h2>
                <table class="table">
                <?php
                    $custom_index=0;
                    foreach ($cart as $i => $pizza) {
                    $name = isset($pizza->isPreDefined) && !$pizza->isPreDefined ? "Custom Pizza #". ++$custom_index : $pizza->name;
                    ?>
                        <tr>
                            <td>
                                <div class="row mb-2">
                                    <div class="col-11">
                                        <h4><?= $name ?> - <?= asMoney($pizza->price) ?></h4>
                                        <!-- <h4><?= asMoney($pizza->price) ?></h4> -->
                                    </div>
                                    <div class="col-1">
                                        <a href="#" onclick="removeFromCart(this, <?php echo $i ?>);"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                    <div class="col-sm-12">
                                        <b>Size:</b> <?php echo $pizza->size->name ?> -
                                        <b>Crust:</b> <?php echo $pizza->crust->name ?> -
                                        <b>Cheese:</b> <?php echo $pizza->cheese->name ?> -
                                        <b> Sauce:</b> <?php echo $pizza->sauce->name ?>
                                    </div>

                                    <div class="col-sm-12">
                                    <?php if (count($pizza->toppings) > 0) { ?>
                                        <b>Toppings: </b>

                                        <?php
                                        foreach ($pizza->toppings as $topping) {
                                            echo " " . $topping->topping->name . ' - ' . getSideText($topping->side) . ' side(s)';
                                        }
                                        ?>
                                    <?php
                                    } ?>
                                    </div>
                                    <div class="col-sm-12"> <b>Special instructions:</b> <?php echo $pizza->specialInstructions ?> </div>
                                </div>
                            </td>
                        </tr>

                        <?php
                    }
                ?>
                </table>
                <button type="submit" name="checkout" class="btn btn-primary">Checkout</button>
                <button type="submit" name="homePage" class="btn btn-secondary">Home Page</button>
            </form>
        </div>
    </div>
<?php
}

?>

<script>
    //post reques like a form submit
    function removeFromCart(event, id) {
        var form = document.getElementById("forminho");
        var fieldRmv = document.createElement("input");
        fieldRmv.setAttribute("type", "hidden");
        fieldRmv.setAttribute("name", "remove");
        fieldRmv.setAttribute("value", id);
        form.appendChild(fieldRmv);
        form.submit();
    }
</script>
</body>
</html>
