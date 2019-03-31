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
                <h2 style="text-align: center;">Choose your toppings</h2>
                <div class="container">
                    <div class="row">
                        <section class="col-6" id="meat-toppings">


                            <h3>Choose Meat</h3>
                    <div class="topping">
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    chicken
                                </label>
                            </div>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                Right
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                               Left
                            </label>
                        </div>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                All
                            </label>
                        </div>
                    </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Sausage
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ground beef
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Peperoni
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Bacon
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ham
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                        </section>

                        <section class="col-6" id="non-meat-toppings">
                            <h3>Choose Non meats</h3>
                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Green Pepper
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Green Olives
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tomato
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Parsley
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Champignon
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                            <div class="topping">
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Pinapple
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Right
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Left
                                    </label>
                                </div>

                                <div class="form-group form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        All
                                    </label>
                                </div>
                            </div>

                        </section>


                        <section class="col-12" id="pizza-especialInstructions">
                            <h2>Especial Requests</h2>
                            <div class="form-group form-check">
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>

                        </section>
                    </div>
                </div>
                <div class="controls">
                    <button type="button" class="btn btn-secondary">Back</button>
                    <button type="button" class="btn btn-secondary btn-success">Add to cart</button>

                </div>
            </form>
        </div>
    </div>
<?php
//require_once("../common/template/footer.php");
?>