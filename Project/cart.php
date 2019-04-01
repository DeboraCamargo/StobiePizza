<?php

require_once("../common/template/header.php");

session_start();

if(isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
} else {
    $cart = array();
}

function getSideText($side_code) {
    if($side_code== 1) return "Left";
    if($side_code == 2) return "Right";
    return "Both";
}
?>
<?php 

if(count($cart) == 0 ) {
    echo "Your cart is empty";
} else {
?>

<?php 
    foreach($cart as $pizza) {
?>
    <div style="width:500px">
        <h2> Pizza </h2>
        <div> Size: <?php echo $pizza->size->name ?> </div>
        <div> Crust: <?php echo $pizza->crust->name ?> </div>
        <div> Cheese: <?php echo $pizza->cheese->name ?> </div>
        <div> Sauce: <?php echo $pizza->sauce->name ?> </div>

        <?php if (count($pizza->toppings)>0) {?>
            <h5>Toppings</h5>
            <ul class="list-group list-group-flush">
                <?php
                    foreach($pizza->toppings as $topping) {
                        echo '<li class="list-group-item">'.$topping->topping->name. ' - '. getSideText($topping->side) .' side(s)</li>';
                    }
                ?>
            </ul>
        <?php } ?>
        <div> Special instruction: <?php echo $pizza->specialInstructions ?> </div>
    </div>


<?php  
    } 
}


?>
<button type="button" class="btn btn-secondary" name="clean">Remove All</button>
