<?php
$about_link = 'http://dar2.greenriverdev.com/index.php#about';
$services_link = 'http://dar2.greenriverdev.com/index.php#services';
$contact_link = 'http://dar2.greenriverdev.com/index.php#contact';
$navbar_link = 'http://dar2.greenriverdev.com/index.php';
$getInvolved_link = 'http://dar2.greenriverdev.com/getInvolved.php';
$page_title = 'Admin Portal';
$page_specific_script = '<script src="scripts/formcontrol.js"></script>';

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['loggedin'])) {

    //Store the page that I'm currently on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //Redirect to login
    header("location: adminLogin.php");
}

//Add Navbar
include("includes/header.php");
//Add Database info
require('/home2/dargreen/includes/dbcreds.php');
//Add functions
include("includes/functions.php");

?>
    <div class="container pb-3">
        <div class="content-wrap pt-5">
            <div class="content-wrap  border text-center">
                <h1 class="font-weight-bold text-center pt-4">Admin Portal</h1><br>
            </div>
        </div>

        <!--  DASHBOARD NAVBAR  -->
        <ul class="nav nav-pills mb-3 mt-3 bg-secondary" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Requests</a>
            </li>
            <!--        <li class="nav-item">-->
            <!--            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Form Control</a>-->
            <!--        </li>-->
        </ul>
        <!--  REQUEST TAB CONTENTS  -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active text-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                <div class="form-group text-center">
                    <div class="<?echo $alertColor?>" role="alert" id="alert">
                        <?echo $alertMessage?>
                    </div>
                    <button class="form-toggle btn btn-outline-success" name="toggle" id="enable" value="1">Form On</button>
                    <button class="form-toggle btn btn-outline-secondary" name="toggle" id="timer" value="2">Timer</button>
                    <button class="form-toggle btn btn-outline-danger" name="toggle" id="disable" value="0">Form Off</button>
                    <div id="result">
                    </div>
                </div>
                <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

                <!--    SERVICE REQUEST TABLE    -->
                <table id="requests-table" class="display" data-order='[[1, "ASC"]]'>
                    <thead>
                    <tr>
                        <th>Contacted:</th>
                        <th>Date:</th>
                        <th>Name:</th>
                        <th>Zip:</th>
                        <th>Email:</th>
                        <th>Phone:</th>
                        <th>Services:</th>
                        <th>Other:</th>
                        <th>Comments:</th>
											<!-- TODO: add request ID, add d-none, and sort by that one. -->
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = 'SELECT * FROM requests';
                    $result = mysqli_query($cnxn, $sql);

                    foreach ($result as $row) {

                        $timestamp = $order_date = date("M d, Y g:i a" , strtotime($row['request_date'] . "-3 hours"));
                        $fullname = $row['first_name']. " " . $row['last_name'];
                        $zipcode = $row['zip'];
                        $email = $row['email'];
                        $phonenumber = $row['phone'];
                        $services = $row['services'];
                        $other = $row['other'];
                        $comments = $row['comments'];
                        $id = $row['request_id'];

                        //set checkbox "checked" attribute and color
                        $checked = $row['contacted'] ? "checked" : "";
                        $color = $row['contacted'] ? "style='background-color: #D4EDDA;'" : "";
                        $contacted = "<input type='checkbox' class='contacted-checkbox' id='$id' $checked>";

                        echo "<tr $color>";

                        echo "<td>$contacted</td>";
                        echo "<td>$timestamp</td>";
                        echo "<td>$fullname</td>";
                        echo "<td>$zipcode</td>";
                        echo "<td>$email</td>";
                        echo "<td>$phonenumber</td>";
                        echo "<td>$services</td>";
                        echo "<td>$other</td>";
                        echo "<td>$comments</td>";

                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
//Add Footer
include("includes/footer.php")?>
