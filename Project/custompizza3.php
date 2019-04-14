<?php
require_once("../common/template/header.php");

// database
$db_conn = new mysqli('localhost', 'group3user', 'Test123!', 'pizzadb');
if ($db_conn->connect_errno) {
    die("Could not connect to database server \n Error: " . $db_conn->connect_errno . "\n Report: " . $db_conn->connect_error . "\n");
}

$arr_topping = array();


$qry = "select toppingId, price, name from topping;";
$rs = $db_conn->query($qry);
if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
        $obj = new stdClass();
        $obj->id = $row['toppingId'];
        $obj->name = $row['name'];
        $obj->price = $row['price'];
        array_push($arr_topping, $obj);
    }
}

// The session starts here
session_start();

function findById($arr, $id)
{
    foreach ($arr as $item) {
        if ($item->id == $id) {
            return $item;
        }
    }
    return null;
}

if (isset($_SESSION["currentPage"]) && $_SESSION['currentPage'] == 'customPizza3') {
    if (isset($_POST["back"]) || isset($_POST["cart"])) {
        $pizza = $_SESSION["makingPizza"];
        $selected_toppings = array();
        if (isset($_POST["toppings"])) {
            foreach ($_POST["toppings"] as $curr_pizza_topping_id) {
                if (!isset($_POST["topping_" . $curr_pizza_topping_id])) {
                    echo "Side must be selected";
                } else {
                    $one_topping = new stdClass();
                    $one_topping->topping = findById($arr_topping, $curr_pizza_topping_id);
                    $one_topping->side = $_POST["topping_" . $curr_pizza_topping_id];
                    array_push($selected_toppings, $one_topping);
                }
            }
        }
        $pizza->toppings = $selected_toppings;
        if (isset($_POST["specialInstructions"])) {
            $pizza->specialInstructions = $_POST["specialInstructions"];
        }
    }

    if (isset($_POST["back"])) {
        header("Location: custompizza2.php");
        die();
    }

    if (isset($_POST["cart"])) {
        if (isset($_SESSION["cart"])) {
            $cart_pizzas = $_SESSION["cart"];
        } else {
            $cart_pizzas = array();
        }
        $pizza->price = calculatePizzaPrice($pizza);

        array_push($cart_pizzas, $pizza);
        unset($_SESSION["makingPizza"]);

        $_SESSION["cart"] = $cart_pizzas;
        header("Location: cart.php");
        die();
        //create function put in the cart
    } else {
        // if it stays on the same page - like f5
        $pizza = $_SESSION["makingPizza"];
    }
} else {
    // the obj was already created in the previous page, so I commented it out so it will not overwrite
    $pizza = $_SESSION["makingPizza"];
    if (!isset($pizza->toppings)) {
        $pizza->toppings = array();
        $pizza->specialInstructions = "";
    }
}

foreach ($arr_topping as $topping) {
    $topping->selected = false;
    $topping->side = 0;
    foreach ($pizza->toppings as $topping_in_pizza) {
        if ($topping_in_pizza->topping->id == $topping->id) {
            $topping->selected = true;
            $topping->side = $topping_in_pizza->side;
        }
    }
}

function calculatePizzaPrice($pizza)
{
    $price = $pizza->size->price;
    $price += $pizza->crust->price;
    $price += $pizza->cheese->price;
    $price += $pizza->sauce->price;

    foreach ($pizza->toppings as $topping_in_pizza) {
        // echo $topping_in_pizza->topping->name .': ' . $topping_in_pizza->topping->price;
        if ($topping_in_pizza->side == 3) {
            $price += $topping_in_pizza->topping->price;
        } else {
            $price += $topping_in_pizza->topping->price / 2;
        }
    }
    return  $price;
}

$_SESSION['currentPage'] = 'customPizza3';
?>

<link rel="stylesheet" href="custompizza.css">

<div class="cmodal">
    <div class="cmodal-content2">
        <form method="POST">
            <h2 style="text-align: center;">Choose your toppings</h2>
            <div class="container">
                <div class="row">
                    <section class="col-12">
                        <div class="row">
                            <?php
                            for ($x = 0; $x < count($arr_topping); $x++) {
                                $topping = $arr_topping[$x];
                                $var =  $topping->name;
                                ?>

                            <div class="topping col-4">
                                <div class="row">
                                    <div class="form-group form-check">
                                        <input class="form-check-input" id="topping" onclick="chooseTopping(this);"
                                            type="checkbox" name="toppings[]" value='<?php echo $topping->id ?>'
                                            <?php echo $topping->selected ? "checked" : "" ?>>
                                        <label class="form-check-label" for="toppings">
                                            <?php echo $topping->name ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group form-check col-4">
                                        <input class="form-check-input" id="side-all" type="radio"
                                            name='topping_<?php echo $topping->id ?>' value="3"
                                            <?php echo $topping->side == 3 ? "checked" : "" ?> disabled>
                                        <label class="form-check-label" for="side">
                                            All <i class="fas fa-pizza-slice"></i>
                                        </label>
                                    </div>


                                    <div class="form-group form-check col-4">
                                        <input class="form-check-input" id="side-l" type="radio"
                                            name='topping_<?php echo $topping->id ?>' value="2"
                                            <?php echo $topping->side == 2 ? "checked" : "" ?> disabled>
                                        <label class="form-check-label" for="side">
                                            Left <i class="fas fa-arrow-circle-left"></i>
                                        </label>
                                    </div>

                                    <div class="form-group form-check col-4">
                                        <input class="form-check-input" id="side-r" type="radio"
                                            name='topping_<?php echo $topping->id ?>' value="1"
                                            <?php echo $topping->side == 1 ? "checked" : "" ?> disabled>
                                        <label class="form-check-label" for="side">
                                            Right <i class="fas fa-arrow-circle-right"></i>
                                        </label>
                                    </div>




                                </div>
                            </div>

                            <?php

                        }
                        ?>

                        </div>
                    </section>

                    <section class="col-12" id="pizza-especialInstructions">
                        <h2>Especial Requests</h2>
                        <div class="form-group form-check">
                            <textarea class="form-control" aria-label="With textarea"
                                name="specialInstructions"><?php echo $pizza->specialInstructions ?></textarea>
                        </div>

                    </section>
                </div>
            </div>
            <div class="controls">
                <button type="submit" class="btn btn-secondary" name="back">Back</button>
                <button type="submit" class="btn btn-secondary btn-success" name="cart">Add to cart</button>

            </div>
        </form>
    </div>
</div>
<?php
require_once("../common/template/footer.php");
?>

<script>
function chooseTopping(el) {
    console.log("input[type=radio name=" + 'topping_' + el.value + "]");
    if (el.checked) {
        $("input[name=" + 'topping_' + el.value + "]").attr('disabled', false);
        $("input[name=" + 'topping_' + el.value + "][value=3]").prop('checked', true);


    } else {
        $("input[name=" + 'topping_' + el.value + "]").attr('disabled', true);
        $("input[name=" + 'topping_' + el.value + "]").prop('checked', false);
    }
}
</script>