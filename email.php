<?php

include('includes/header.html');
?>

    <div class="container">
        <h1>Thank you for your submission, <?php echo $_POST['fname']?>.  We will be in contact
            soon.</h1>
    </div>



<?php
//Send email
//function to prevent injection

//get the data from the form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email']; //<- may be optional
$phone = $_POST['phone'];
$zip = $_POST['zip'];
$city = $_POST['city'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$comments = $_POST['comments'];




//format the email
$to = "rrivera@mail.greenriver.edu";
$email_subject = "Form Submission";
//$email_body = "<h1>$fname $lname at $email \n\r or Phone:$phone</h1>";


$email_body = "
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
</style>
</head>
<body>
<table class=\"schedule\" style=\"width: 100%;\">
            <caption>Kent Outreach Program</caption>
            <colgroup>
            	<col span=\"1\" style=\"width: 25%;\"/>
                <col span=\"3\" style=\";\"/>
  			</colgroup>

            <thead><tr><th colspan=\"4\" style=\"background-color: lightgray;\">Service Request Submission</th></tr></thead>
            <tbody>
               <tr><th>Name:</th><td>$fname $lname</td></tr>
               <tr><th>Address 1:</th><td>$address1</td></tr>
               <tr><th>Address 2:</th><td>$address2</td></tr>
               <tr><th>City:</th><td>$city</td>
               <tr><th>State:</th><td>$ state</td></tr>
               <tr><th>Zip:</th><td>$zip</td></tr>
               <tr><th>Email:</th><td>$email</td></tr>
               <tr><th>Phone:</th><td>$phone</td></tr>
               <tr><th colspan=\"2\" style=\"background-color: lightgray;\">Comments:</th></tr>
               <tr><th colspan=\"2\">$comments</th></tr>
            </tbody>
            <tfoot><tr><td colspan=\"4\">Submitted: _______ at ________</td></tr></tfoot>
         </table>

</body>
</html>";



$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=8\r\n";

mail($to, $email_subject, $email_body, $headers);



?>

<?php
include('includes/footer.html');
?>