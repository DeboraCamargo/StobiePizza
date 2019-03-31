<?php
require_once("../common/template/header.php");
session_start();

$_SESSION['currentPage'] = 'customPizza2'; 
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
                        <section class="col-6" id="pizza-cheese">
                            <h2>Choose your cheese</h2>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    None
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Light
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Normal
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Extra
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                   Double
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Triple
                                </label>
                            </div>
                        </section>

                        <section class="col-6" id="pizza-sauce">
                            <h2>Choose your crust</h2>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    None
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                   Pizza Sauce
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    BBQ Sauce
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Alfredo Sauce
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Hearty Marinada Sauce
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Ranch Dressing
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                   Garlic Parmesan Sauce
                                </label>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="controls">
                    <button type="button" class="btn btn-secondary">Back</button>
                    <button type="button" class="btn btn-secondary btn-success">Toppings</button>

                </div>
            </form>
        </div>
    </div>
<?php
require_once("../common/template/footer.php");
?>