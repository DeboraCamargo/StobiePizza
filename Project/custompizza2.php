<?php
require_once("../common/template/header.php");

// database
$db_conn = new mysqli('localhost', 'group3user', 'Test123!', 'pizzadb');
if ($db_conn->connect_errno) {
    die("Could not connect to database server \n Error: " . $db_conn->connect_errno . "\n Report: " . $db_conn->connect_error . "\n");
}

$arr_cheese = array();
$arr_sauce = array();

$qry = "select sauceId, price, name from sauce;";
$rs = $db_conn->query($qry);
if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
        $obj = new stdClass();
        $obj->id = $row['sauceId'];
        $obj->name = $row['name'];
        $obj->price = $row['price'];
        array_push($arr_sauce, $obj);
    }
}

$qry = "select cheeseId, price, name from cheese;";
$rs = $db_conn->query($qry);
if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
        $obj = new stdClass();
        $obj->id = $row['cheeseId'];
        $obj->name = $row['name'];
        $obj->price = $row['price'];
        array_push($arr_cheese, $obj);
    }
}
// The session starts here
session_start();

function findById($arr, $id) {
    foreach($arr as $item) {
        if($item->id == $id) {
            return $item;
        }
    }
    return null;
}


if (isset($_SESSION["currentPage"]) && $_SESSION['currentPage'] == 'customPizza2') {
    //Cancelling
    if (isset($_POST["back"]) || isset($_POST["next"])) {
        $pizza = $_SESSION["makingPizza"];
        $pizza->cheese = findById($arr_cheese, $_POST["cheese"]);
        $pizza->sauce = findById($arr_sauce, $_POST["sauce"]);
    }

    if (isset($_POST["back"])) {
        header("Location: custompizza.php");
        die();
    }

    if (isset($_POST["next"])) {
        header("Location: custompizza3.php");
        die();
    } else {
        // if it stays on the same page - like f5
        $pizza = $_SESSION["makingPizza"];
    }
} else if (isset($_SESSION["currentPage"]) && $_SESSION['currentPage'] == 'customPizza3') {
    $pizza = $_SESSION["makingPizza"];
} else {
    // the obj was already created in the previous page, so I commented it out so it will not overwrite
    $pizza = $_SESSION["makingPizza"];
    //$pizza = new stdClass();
    // $_SESSION["makingPizza"] = $pizza;
    if (!isset($pizza->cheese)) {
       $pizza->cheese = $arr_cheese[0];
    }
    if (!isset($pizza->sauce)) {
        $pizza->sauce = $arr_sauce[0];
    }
}
$_SESSION['currentPage'] = 'customPizza2';
?>
<link rel="stylesheet" href="custompizza.css">

<div class="cmodal">
    <div class="cmodal-content">
        <form method="POST">
            <div class="container">
                <div class="row">
                    <section class="col-6" id="pizza-cheese">
                        <h2>Choose your cheese</h2>
                        <?php
                        for ($x = 0; $x < count($arr_cheese); $x++) {
                            $cheese = $arr_cheese[$x];
                            ?>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="cheese" value='<?php echo $cheese->id ?>' <?php echo $cheese->id == $pizza->cheese->id ? "checked" : "" ?>>
                            <label class="form-check-label" for="cheese">
                                <?php echo $cheese->name ?>
                            </label>
                        </div>
                        <?php
                    }
                    ?>
                    </section>

                    <section class="col-6" id="pizza-sauce">
                        <h2>Choose your sauce</h2>
                        <?php
                        for ($x = 0; $x < count($arr_sauce); $x++) {
                            $sauce = $arr_sauce[$x];
                            ?>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="sauce" value='<?php echo $sauce->id ?>'  <?php echo $sauce->id == $pizza->sauce->id ? "checked" : "" ?>>
                            <label class="form-check-label" for="sauce">
                                <?php echo $sauce->name ?>
                            </label>
                        </div>
                        <?php

                    }
                    ?>
                    </section>
                </div>
            </div>
            <div class="controls">
                <button type="submit" class="btn btn-secondary" name="back">Back</button>
                <button type="submit" class="btn btn-secondary btn-success" name="next">Toppings</button>

            </div>
        </form>
    </div>
</div>
<?php
require_once("../common/template/footer.php");
?> 