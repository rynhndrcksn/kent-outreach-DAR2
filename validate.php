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

//Get the form information and assign to variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$permRes = isset($_POST['permRes']) ? $_POST['permRes']: "";
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



?>

<!--##################    FORM SUBMISSION PAGE    ##################-->

<div class="container acknowledge-div pb-5">

    <!--  Header  -->
    <div class="content-wrap pt-5">
        <div class="content-wrap  border text-center">
            <h1 class="font-weight-bold text-center pt-4 pb-4">Please verify your information</h1>
        </div>
    </div>

    <!--  Form Information table  -->
    <table class="schedule">
        <colgroup>
            <col class="w-25" span="1" />
            <col class="w-75" span="1" />
        </colgroup>
        <thead>
        <tr>
            <th class="bg-secondary text-white text-center" colspan="2">Service Request Submission</th>
        </tr>
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
    <form class="pt-5" method="post" action="submitted.php">
        <fieldset>
            <input type="checkbox" class="d-none" id="permRes" name="permRes">
            <input type="text" value="<? echo $fname ?>" class="d-none" name="fname">
            <input type="text" value="<? echo $lname ?>" class="d-none" name="lname">
            <input type="text" value="<? echo $permRes ?>" class="d-none" name="permRes">
            <input type="text" value="<? echo $address1 ?>" class="d-none" name="address1" >
            <input type="text" value="<? echo $address2 ?>" class="d-none" name="address2" >
            <input type="text" value="<? echo $city?>" class="d-none" name="city">
            <input type="text" value="<? echo $state?>" class="d-none" name="state">
            <input type="text" value="<? echo $zip ?>" class="d-none" name="zip" >
            <input type="email" value="<? echo $email ?>" class="d-none" name="email" >
            <input type="tel" value="<? echo $phone ?>" class="d-none" name="phone" >
            <input type="text" value="<? echo $services ?>" class="d-none" name="services" >
            <input type="text" class="d-none" value="<? echo $other ?>" name="otherServices">
            <input type="text" class="d-none" value="<? echo $comments ?>" name="comments">
            <div class="text-center">
                <button type="submit" class="btn btn-success">Submit Request</button>
            </div>
        </fieldset>

    </form>
</div>

<!--##################    FOOTER SECTION    ##################-->

<?php include('includes/footer.php'); ?>


