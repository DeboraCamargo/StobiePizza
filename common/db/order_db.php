<?php

$db_conn = new mysqli('localhost', 'group3user', 'Test123!', 'pizzadb');

function saveOrder($order)
{
   // var_dump($order);
    
    # VALIDATE STUFF
    // database
       global $db_conn;
        if ($db_conn->connect_errno) {
            die("Could not connect to database server \n Error: " . $db_conn->connect_errno . "\n Report: " . $db_conn->connect_error . "\n");
        }
        $db_conn->begin_transaction();

        foreach( $order->items  as $item){
            if(!$item->isPredefined) {
                $item->id=savePizza($item,$db_conn);   
            }
        }

        saveOrderDetails($order, $db_conn);


        $db_conn->commit();
        return true;
}


    function saveOrderDetails($order, $db_conn){

        $query = sprintf( 
            "INSERT INTO order_info(profile_id, paymentId, is_delivery, total) values (%s, %s, %s, %s)",
            $order->profileId,
            $order->payment,
            $order->delivery,
            $order->total
        );

        echo $query;

        $db_conn->query($query);
        $newOrderId=$db_conn->insert_id;

        foreach( $order->items  as $item){
           saveOrderPizza($newOrderId, $item, $db_conn);
        }
        
    }

    function saveOrderPizza($orderId, $pizza, $db_conn){

        if(isset($pizza->isPreDefined) && !($pizza->isPreDefined)){
            $query = sprintf(
                "INSERT INTO order_pizza(customPizzaId, price, orderId, specialInstructions) values (%s, %s, %s, %s)",
                $pizza->id,
                $pizza->price,
                $orderId,
                isset($pizza->specialInstructions)? "'".$pizza->specialInstructions."'" : 'null'
            );
    
        }else{
            $query = sprintf(
                "INSERT INTO order_pizza(ourpizzaid, price, orderId, specialInstructions) values (%s, %s, %s, %s)",
                $pizza->id,
                $pizza->price,
                $orderId,
                isset($pizza->specialInstructions)? "'".$pizza->specialInstructions."'" : 'null'
            );

            echo $query;
        }
        $db_conn->query($query);
    }

    function savePizza($pizza, $db_conn)
    {
        $query = sprintf(
            "INSERT INTO customPizza(sauceId, sizeId, crustId, cheeseId) values (%s, %s, %s, %s)",
            $pizza->sauce->id,
            $pizza->size->id,
            $pizza->crust->id,
            $pizza->cheese->id
        );

        $db_conn->query($query);

        $newPizzaId=$db_conn->insert_id;

        foreach ($pizza->toppings as $curr_pizza_topping) {
            savePizzaTopping($curr_pizza_topping, $newPizzaId, $db_conn);
        }
        return $newPizzaId;

    }

    function savePizzaTopping($pizzaTopping, $pizzaId, $db_conn ){

        $query = sprintf(
            "INSERT INTO topping_pizza(toppingId, customPizzaId, side) values (%s, %s, %s)",
            $pizzaTopping->topping->id,
            $pizzaId,
            $pizzaTopping->side
        );

        $db_conn->query($query);

    }
        