<?php

session_start();
session_destroy();

if ($_SESSION['page'] != 'dashboard.php') {
    //stay on same page
    header("location: " . $_SESSION['page']);
} else if($_SESSION['page'] == 'dashboard.php') {
    //Redirect to login
    header("location: adminLogin.php");
}

