<?php

require_once("../common/template/header.php");

session_start();

if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
} else {
    $cart = array();
}

function getSideText($side_code)
{
    if ($side_code == 1) return "Left";
    if ($side_code == 2) return "Right";
    return "Both";
}
?>
<?php 

if (count($cart) == 0) {
    echo "Your cart is empty";
} else {
    ?>
<link rel="stylesheet" href="custompizza.css">
<div class="cmodal">
    <div class="cmodal-content2">
        <form method="POST">
            <?php 
            foreach ($cart as $i=>$pizza) {
                ?>
            <div style="width:500px">
                <h2>Pizza #<?php echo $i+1; ?> <a href="#" name="remove"><i class="fas fa-trash-alt"></i></a></h2>

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
                        echo " ".$topping->topping->name . ' - ' . getSideText($topping->side) . ' side(s)';
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
        </form>
    </div>
</div>
<?php 
}


?> 