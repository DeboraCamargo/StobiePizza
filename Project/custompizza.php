<?php 
require_once("../common/template/header.php");

$db_conn = new mysqli('localhost', 'group3user', 'Test123!', 'pizzadb');
if ($db_conn->connect_errno) {
	die("Could not connect to database server \n Error: " . $db_conn->connect_errno . "\n Report: " . $db_conn->connect_error . "\n");
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
                <div class="form-group form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                        Extra Large
                    </label>
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Large
                    </label>
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                        Medium
                    </label>
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                        Small
                    </label>
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                        2 pieces
                    </label>
                </div>
            </section>

            <section class="col-6" id="pizza-crust">
                <h2>Choose your crust</h2>
                <div class="form-group form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                        Original Hand Tossed
                    </label>
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Thin crust
                    </label>
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                        Gluten free
                    </label>
                </div>
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