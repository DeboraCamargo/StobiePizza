<?php

require_once("../common/template/header.php");

session_start();


if (isset($_POST["homePage"])) {
    header("Location: index.php");
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
?>
<link rel="stylesheet" href="custompizza.css">
<div class="cmodal">
    <div class="cmodal-content2">
        <form method="POST" id="forminho">
            <?php 

            if (count($cart) == 0) {
                echo "Your cart is empty"; ?>

                <button type="submit" name="homePage" class="btn btn-secondary">Home Page</button>
                <?php
            } else {
                ?>

            <?php 
            foreach ($cart as $i => $pizza) {
                ?>
            <div style="width:500px">
                <h2>Pizza #<?php echo $i + 1; ?> <a href="#" onclick="removeFromCart(this, <?php echo $i ?>);"><i class="fas fa-trash-alt"></i></a></h2>
                <div>
                    <b>Size:</b> <?php echo $pizza->size->name ?> -
                    <b>Crust:</b> <?php echo $pizza->crust->name ?> -
                    <b>Cheese:</b> <?php echo $pizza->cheese->name ?> -
                    <b> Sauce:</b> <?php echo $pizza->sauce->name ?>
                </div>

                <?php if (count($pizza->toppings) > 0) { ?>
                <b>Toppings: </b>

                <?php
                foreach ($pizza->toppings as $topping) {
                    echo " " . $topping->topping->name . ' - ' . getSideText($topping->side) . ' side(s)';
                }
                ?>
                <?php 
            } ?>
                <div> <b>Special instructions:</b> <?php echo $pizza->specialInstructions ?> </div>
                <br>
            </div>
            <?php 
        }
        ?>
            <button type="submit" class="btn btn-primary">Checkout</button>
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