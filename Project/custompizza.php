<?php 
require_once("../common/template/header.php");
$_SESSION['currentPage'] = 
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
?>

<link rel="stylesheet" href="custompizza.css">

<div class="cmodal">
    <div class="cmodal-content">
        <form>
            <div class="container">
                <div class="row">
                    <section class="col-6" id="pizza-size">
                        <h2>Choose your size</h2>

                        <?php
                        for ($x = 0; $x < count($arr_size); $x++) {
                            $size = $arr_size[$x];
                            ?>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="size" value='<?php echo $size->id ?>'>
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
                            <input class="form-check-input" type="radio" name="crust" value='<?php echo $crust->id ?>'>
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
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="button" class="btn btn-secondary btn-success">Toppings</button>

            </div>
        </form>
    </div>
</div>
<?php 
require_once("../common/template/footer.php");
?> 