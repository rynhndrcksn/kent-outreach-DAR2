<?php
//Set navbar links
$about_link = 'http://dar2.greenriverdev.com/index.php#about';
$services_link = 'http://dar2.greenriverdev.com/index.php#services';
$contact_link = 'http://dar2.greenriverdev.com/index.php#contact';
$navbar_link = 'http://dar2.greenriverdev.com/index.php';
$getInvolved_link = 'http://dar2.greenriverdev.com/getInvolved.php';
$page_title = 'Kent Outreach Program';
$page_specific_script = '';

//Login info
include('includes/loginPath.php');

//Include files
include('includes/header.php');
require('includes/dbcreds.php');

//Get the form information and assign to variables
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
$services = $_POST['services'];
$other = $_POST['otherServices'];
$comments = $_POST['comments'];

//Setup the email information
$to = "rrivera@mail.greenriver.edu";
$subject = "Outreach Service Request";
$headers = "Name: $fname <myemail@somewhere.com>"; //replace with email variable
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

//Build the SQL query and send to server
$sql = "INSERT INTO requests VALUES(null,'$fname', '$lname', '$address1', '$address2', '$city', '$state', '$zip',
                                    '$email', '$phone', '$services', '$other', '$comments', '$timestamp', '0')";

$success = mysqli_query($cnxn, $sql);

//If submission is not successful, show error message
if(!$success){
    echo "<p>Sorry . . . something went wrong</p>";
    return;
}
//If submission not successful, submit email of form data
else{
    mail($to, $subject, $body, $headers);
}
?>

<!--##################    FORM SUBMISSION PAGE    ##################-->

<div class="container acknowledge-div pb-5">

    <!--  Header  -->
    <div class="content-wrap pt-5">
        <div class="content-wrap  border text-center">
            <h1 class="font-weight-bold text-center pt-4">Submission Accepted</h1><br>
            <h3 class="pb-4 pr-4 pl-4">Thank you <em><? echo $fname." ".$lname ?></em>, for your submission.
                A member of our team will reach out to you as soon as possible!</h3>
        </div>
    </div>

</div>

<!--##################    FOOTER SECTION    ##################-->

<?php include('includes/footer.php'); ?>


