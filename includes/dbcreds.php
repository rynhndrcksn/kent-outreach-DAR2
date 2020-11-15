<?php
//Database information
$database = 'dargreen_kent_db';
$username = 'dargreen_kent_user';
$password = '#ug)lol9iN.1CD-B';
$hostname = 'localhost';

$cnxn = mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem"); //stops the script and displays error msg
