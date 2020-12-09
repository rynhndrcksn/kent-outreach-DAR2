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
    require('/home2/dargreen/includes/logincredsoutreach.php');

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

<div class="content-wrap" id="adminlogin">
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="scripts/navbar.js"></script>
<script src="scripts/outreach.js"></script>
<? echo $page_specific_script ?>
<!--<script src="scripts/form.js"></script>-->
<!--<script src="scripts/formcontrol.js"></script>-->
</body>
</html>







