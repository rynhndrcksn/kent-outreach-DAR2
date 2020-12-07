<?php
require("includes/dbcreds.php");

ini_set('display_errors', 1);
error_reporting(E_ALL);

//If Post data contains a num field with value
if(isset($_POST['num'])){
    $num = $_POST['num'];

    //Verify value is 0, 1 or 2, query database
    if($num == 1 || $num == 2 || $num == 0){
        //Update formOn state to the new state value
        $sql = "UPDATE formOn SET state = $num";
        $result = mysqli_query($cnxn, $sql);

        //Update the alert message
        if($num == 1){
            echo "Request Form is Currently<br><strong>ENABLED</strong><br>";
        }
        else if($num == 2){
            echo "Request Form is Currently Set To<br><strong>TIMER</strong>";
        }
        else if($num == 0){
            echo "Request Form is Currently <br><strong>Disabled</strong>";
        }
    }
}

//If checked and id fields are set, query database with update
if(isset($_POST['id']) && isset($_POST['checked'])){
    $id = $_POST['id'];
    $checked = $_POST['checked'];
    //update the 'contacted' value for the entry == request_id
    $sql = "UPDATE requests SET contacted = $checked WHERE request_id = $id";
    $result = mysqli_query($cnxn, $sql);
}
