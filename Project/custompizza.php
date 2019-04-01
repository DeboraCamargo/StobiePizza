<?php 
require_once("../common/template/header.php");

// database
$db_conn = new mysqli('localhost', 'group3user', 'Test123!', 'pizzadb');
if ($db_conn->connect_errno) {
    die("Could not connect to database server \n Error: " . $db_conn->connect_errno . "\n Report: " . $db_conn->connect_error . "\n");
}

$arr_size = array();
$arr_crust = array();

$qry = "select sizeId, price, name from size;";
$rs = $db_conn->query($qry);
if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
        $obj = new stdClass();
        $obj->id = $row['sizeId'];
        $obj->name = $row['name'];
        $obj->price = $row['price'];
        array_push($arr_size, $obj);
    }
}

$qry = "select crustId, price, name from crust;";
$rs = $db_conn->query($qry);
if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
        $obj = new stdClass();
        $obj->id = $row['crustId'];
        $obj->name = $row['name'];
        $obj->price = $row['price'];
        array_push($arr_crust, $obj);
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

if (isset($_SESSION["currentPage"]) && $_SESSION['currentPage'] == 'customPizza1') {
    //Cancelling
    if (isset($_POST["back"])) {
        header("Location: index.php");
        die();
    }

    if (isset($_POST["next"])) {
        $pizza = $_SESSION["makingPizza"];
        $pizza->size = findById($arr_size, $_POST["size"]);
        $pizza->crust = findById($arr_crust, $_POST["crust"]);
        header("Location: custompizza2.php");
        die();
    } else {
        // if it stays on the same page - like f5
        $pizza = $_SESSION["makingPizza"];
    }
} else if (isset($_SESSION["currentPage"]) && $_SESSION['currentPage'] == 'customPizza2') {
    $pizza = $_SESSION["makingPizza"];
} else {
    $pizza = new stdClass();
    $_SESSION["makingPizza"] = $pizza;
    $pizza->size = $arr_size[0];
    $pizza->crust = $arr_crust[0];
}

$_SESSION['currentPage'] = 'customPizza1';
?>

<link rel="stylesheet" href="custompizza.css">

<div class="cmodal">
    <div class="cmodal-content">
        <form method="POST">
            <div class="container">
                <div class="row">
                    <section class="col-6" id="pizza-size">
                        <h2>Choose your size</h2>

                        <?php
                        for ($x = 0; $x < count($arr_size); $x++) {
                            $size = $arr_size[$x];
                            ?>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="size" value='<?php echo $size->id ?>' <?php echo $size->id == $pizza->size->id ? "checked" : "" ?>>
                            <label class="form-check-label" for="size">
                                <?php echo $size->name ?>
                            </label>
                        </div>
                        <?php

                    }
                    ?>

                    </section>

                    <section class="col-6" id="pizza-crust">
                        <h2>Choose your crust</h2>
                        <?php
                        for ($x = 0; $x < count($arr_crust); $x++) {
                            $crust = $arr_crust[$x];
                            ?>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="crust" value='<?php echo $crust->id ?>' <?php echo $crust->id == $pizza->crust->id ? "checked" : "" ?>>
                            <label class="form-check-label" for="crust">
                                <?php echo $crust->name ?>
                            </label>
                        </div>
                        <?php

                    }
                    ?>

                    </section>
                </div>
            </div>
            <div class="controls">
                <button type="submit" name="back" class="btn btn-secondary">Cancel</button>
                <button type="submit" name="next" class="btn btn-secondary btn-success">Toppings</button>
            </div>
        </form>
    </div>
</div>
<?php 
require_once("../common/template/footer.php");
?> 