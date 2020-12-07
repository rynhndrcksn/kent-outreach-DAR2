<?php
    //Initialize the form control alert box, get the state from the database and updating the color/message
    $sql1 = "SELECT * FROM formOn";
    $result1 = mysqli_query($cnxn, $sql1);
    $formState = 0;
    foreach ($result1 as $row){
        $formState = $row['state'];
    }
    $alertColor = "";
    $alertMessage = "";
//Set color and message according to the state
    switch($formState){
        case 0: // form off
            $alertColor = "alert alert-danger";
            $alertMessage = "Request Form is Currently <br><strong>Disabled</strong>";
            break;
        case 1: // form on
            $alertColor = "alert alert-success";
            $alertMessage = "Request Form is Currently<br><strong>ENABLED</strong>";
            break;
        case 2: // form timer
            $alertColor = "alert alert-secondary";
            $alertMessage = "Request Form is Currently Set To<br><strong>TIMER</strong>";
            break;
    }
