<?php
//Database information
$database = '';
$username = '';
$password = '';
$hostname = '';

$cnxn = mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem"); //stops the script and displays error msg
