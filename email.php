<?php
//Set Navbar links
$about_link = 'http://rrivera.greenriverdev.com/305/kent/index.php#about';
$services_link = 'http://rrivera.greenriverdev.com/305/kent/index.php#services';
$contact_link = 'http://rrivera.greenriverdev.com/305/kent/index.php#contact';
$navbar_link = 'http://rrivera.greenriverdev.com/305/kent/index.php';
$page_title = 'Kent Outreach Program';
$page_specific_script = '';

//Include files
include('includes/header.html');
require('includes/dbcreds.php');

//Get the form information, set to variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$permRes = $_POST['permRes'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = implode(", ",$_POST['services']);
$other = $_POST['otherServices'];
$comments = $_POST['comments'];

//Setup the email
$to = "";
$subject = "Outreach Service Request"; //replace with email
$headers = "Name: $fname <myemail@somewhere.com>"; //replace with email
date_default_timezone_set("America/Los_Angeles");
$timestamp = date("Y/m/d h:i:s");
$body = "Submitted : $timestamp\n";
$body .= "First:  $fname\n";
$body .= "Last:  $lname\n";
$body .= "No Permanent Residence:  $permRes\n";
$body .= "Addr1:  $address1\n";
$body .= "Addr2:  $address2\n";
$body .= "City:  $city\n";
$body .= "State:  $state\n";
$body .= "Zip:  $zip\n";
$body .= "Email:  $email\n";
$body .= "Phone:  $phone\n";
$body .= "Requested Services:  $services\n";
$body .= "Other Service:   $other\n";
$body .= "Comments:  $comments\n";

//Build the SQL query
$sql = "INSERT INTO requests VALUES
(null,'$fname', '$lname', '$address1', '$address2', '$city', '$state', '$zip',
'$email', '$phone', '$services', '$other', '$comments', '$timestamp')";

//Send the query to the server, store result
$success = mysqli_query($cnxn, $sql);

//If database query returns false(fail), display error message
if(!$success){
    echo "<p>Sorry . . . something went wrong</p>";
    return;
}
//If database query returns true(success), send submission email
else{
    mail($to, $subject, $body, $headers);
}
?>

<!--##################    FORM SUBMISSION PAGE    ##################-->

<div class="acknowledge-div pb-5">
    <div class="jumbotron text-center bg-white">
        <h1 class="display-4">Submission Accepted</h1>
        <h3>Thank you <em><? echo $fname." ".$lname ?></em>, for your submission.
            A member of our team will review your information and reach out to
            you as soon as possible!</h3>
    </div>
    <!--  Form Information table  -->
    <table class="schedule">
        <colgroup>
            <col class="w-25" span="1" />
            <col span="3" />
        </colgroup>

        <thead>
            <tr><th class="bg-secondary text-white text-center p-2" colspan="4">Service Request Submission</th></tr>
        </thead>

        <tbody>
            <tr><th class="pb-1 pl-3">Name:</th><td><? echo $fname." ".$lname?></td></tr>
            <?
            if($permRes === "on") {
                echo " <tr><th class=\"pb-1 pl-3\">Address:</th><td>No Permanent Residence</td></tr>";
            }
            else{
                echo " <tr><th class=\"pb-1 pl-3\">Address 1:</th><td>$address1</td></tr>";
                echo " <tr><th class=\"pb-1 pl-3\">Address 2:</th><td>$address2</td></tr>";
                echo " <tr><th class=\"pb-1 pl-3\">City:</th><td>$city</td>";
                echo " <tr><th class=\"pb-1 pl-3\">State:</th><td>$state</td></tr>";
                echo " <tr><th class=\"pb-1 pl-3\">Zip:</th><td>$zip</td></tr>";
            }
            ?>
            <tr><th class="pb-1 pl-3">Email:</th><td><? echo $email ?></td></tr>
            <tr><th class="pb-1 pl-3">Phone:</th><td><? echo $phone ?></td></tr>
            <tr><th class="pb-1 pl-3">Services Requested:</th><td><? echo $services ?></td></tr>
            <tr><th class="pb-1 pl-3">Other Service:</th><td><? echo $other ?></td></tr>
            <tr><th class="text-center bg-secondary text-white p-2" colspan="2">Comments:</th></tr>
            <tr><th class="p-1" colspan="2"><? echo $comments ?></th></tr>
        </tbody>
    </table>

    <!--  Return to main page button  -->
    <form class="pt-5" action="http://dar2.greenriverdev.com/index.php">
        <button type="submit" class="btn btn-secondary">Return to main page</button>
    </form>
</div>

<!--##################    FOOTER SECTION    ##################-->

<?php include('includes/footer.html'); ?>


