<?php
$about_link = 'http://rrivera.greenriverdev.com/305/kent/index.php#about';
$services_link = 'http://rrivera.greenriverdev.com/305/kent/index.php#services';
$contact_link = 'http://rrivera.greenriverdev.com/305/kent/index.php#contact';
$navbar_link = 'http://rrivera.greenriverdev.com/305/kent/index.php';
$page_title = 'Admin Portal';
//Add Navbar
include("includes/header.html");
//Add Database info
require("includes/dbcreds.php");
?>
<div class="container">
    <div class="content-wrap pt-5">
        <div class="content-wrap  border text-center">
            <h1 class="font-weight-bold text-center pt-4">Admin Portal</h1><br>
        </div>
    </div>
    <!--  DASHBOARD NAVBARD  -->
    <ul class="nav nav-pills mb-3 bg-secondary" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Requests</a>
        </li>
    </ul>
    <!--  REQUEST TAB CONTENTS  -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active text-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <!--    SERVICE REQUEST TABLE    -->
            <table id="request-table" class="display bg-dark">
                <thead>
                <tr class="text-white">
                    <td>Req_ID</td>
                    <td>Request_Date</td>
                    <td>Full_Name</td>
                    <td>Address1</td>
                    <td>Address2</td>
                    <td>City</td>
                    <td>State</td>
                    <td>Zip</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Services_Requested</td>
                    <td>Other_Services</td>
                    <td>Additional_Comments</td>
                </tr>
                </thead>
                <tbody>
                <?php
                //Create select query to get table contents
                $sqlrequests = "SELECT * FROM requests";
                //Send query to the server and store data array into variable
                $result = mysqli_query($cnxn, $sqlrequests);

                //loop over arrays within the array as rows, set info to variables, print results
                foreach($result as $row){
                    $requestId = $row['request_id'];
                    $fullname = $row['first_name']." ".$row['last_name'];
                    $address1 = $row['address_line1'];
                    $address2 = $row['address_line2'];
                    $city = $row['city'];
                    $state = $row['state'];
                    $zip = $row['zip'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $services = $row['services'];
                    $otherText = $row['other'];
                    $commentText = $row['comments'];
                    $timestamp = date( "M d, Y g:i a", strtotime($row['request_date']));

                    echo "<tr>";
                    echo "<td>$requestId</td>";
                    echo "<td>$timestamp</td>";
                    echo "<td>$fullname</td>";
                    echo "<td>$address1</td>";
                    echo "<td>$address2</td>";
                    echo "<td>$city</td>";
                    echo "<td>$state</td>";
                    echo "<td>$zip</td>";
                    echo "<td>$email</td>";
                    echo "<td>$phone</td>";
                    echo "<td>$services</td>";
                    echo "<td>$otherText</td>";
                    echo "<td>$commentText</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("includes/footer.html")?>