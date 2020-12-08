<?php
/*##################    LOGIN   ##################*/

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

//Initialize variables
$username = "";
$password = "";
$err = false;

//If the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Get the username and password
    $username = strtolower(trim($_POST['username']));
    $password = strtolower(trim($_POST['password']));

    //If they are correct
	require ('includes/logincredsoutreach.php');

    if($username == $adminUser && $password == $adminPassword) {

        $_SESSION['loggedin'] = true;

        header("location: dashboard.php");
    }
    else {
        //Set an error flag
        $err = true;
    }

}

$about_link = 'http://dar2.greenriverdev.com/index.php#about';
$services_link = 'http://dar2.greenriverdev.com/index.php#services';
$contact_link = 'http://dar2.greenriverdev.com/index.php#contact';
$navbar_link = 'http://dar2.greenriverdev.com/index.php';
$getInvolved_link = 'http://dar2.greenriverdev.com/getInvolved.php';
$page_title = 'Admin Portal';
$page_specific_script = '';
include('includes/header.php'); 

?>


<!--##################    ADMIN LOGIN SECTION    ##################-->

<div class="content-wrap">
    <div class="container border p-10">

        <form class="login" action="#" method="post">
            <h1 class="font-weight-bold text-center">Admin Login</h1><br>
            <div class="form-group">
                <label class="font-weight-bold" for="username">Username:</label>
                <input type="text" class="form-control" placeholder="Enter username" id="username" name="username"
                    <?php echo "value='$username' " ?>
                >
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="password">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
            </div>
            <?php
            if($err) {
                echo '<span class="err">*Incorrect login</span><br>';
            }
            ?>
            <br>
            <button type="submit" class="submit-login text-white font-weight-bold rounded">Login</button>
        </form>
    </div>
</div>

<!--##################    FOOTER SECTION    ##################-->

<?php include('includes/footer.php'); ?>



