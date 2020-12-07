<?php
//Set Navbar links
$about_link = 'http://dar2.greenriverdev.com/index.php#about';
$services_link = 'http://dar2.greenriverdev.com/index.php#services';
$contact_link = 'http://dar2.greenriverdev.com/index.php#contact';
$navbar_link = 'http://dar2.greenriverdev.com/index.php';
$page_title = 'Kent Outreach Program';
$page_specific_script = '';

//Include files
include('includes/header.php');
require('includes/dbcreds.php');
require ('includes/validation.php');

/*
 * Create a isValid flag and then gather all of the user's input. Start with REQUIRED items then
 * move on to the non required things. As we gather the information we will run it through prep_input
 * which trims it, strips the slashes, and converts html special characters. We also run that result
 * through the mysqli_real_escape_string() function to make it SQL friendly.
 */

// setup isValid to track the validity of user inputs
$isValid = true;

// gather info from user + validate it for REQUIRED elements using functions from validation.php
// validate first name
if (validNames($_POST['fname'])) {
	$fname = mysqli_real_escape_string($cnxn, prep_input($_POST['fname']));
} else {
	echo '<p>Please enter a valid first name</p>';
	$isValid = false;
}

// validate last name
if (validNames($_POST['lname'])) {
	$lname = mysqli_real_escape_string($cnxn, prep_input($_POST['lname']));
} else {
	echo '<p>Please enter a valid last name</p>';
	$isValid = false;
}

// validate email
if (validEmail($_POST['email'])) {
	$email = mysqli_real_escape_string($cnxn, prep_input($_POST['email']));
} else {
	echo '<p>Please enter a valid email</p>';
	$isValid = false;
}

// validate phone
if (validPhone($_POST['phone'])) {
	$phone = mysqli_real_escape_string($cnxn, $_POST['phone']);
} else {
	echo '<p>Please enter a valid phone number like: 0123456789 or 012-345-6789</p>';
	$isValid = false;
}

// validate services
if (validServices($_POST['services'])) {
	$services = mysqli_real_escape_string($cnxn, implode(", ",$_POST['services']));
} else {
	echo '<p>Please enter valid services...</p>';
	$isValid = false;
}

// gather info from user + validate it for NON-REQUIRED elements
$permRes = mysqli_real_escape_string($cnxn, prep_input($_POST['permRes']));

// validate address line 1
if (isset($_POST['address1'])) {
	if (validText($_POST['address1'])) {
		$address1 = mysqli_real_escape_string($cnxn, prep_input($_POST['address1']));
	} else {
		echo '<p>Please enter a valid address line 1</p>';
		$isValid = false;
	}
}

// validate address line 2
if (isset($_POST['address2'])) {
	if (validText($_POST['address2'])) {
		$address2 = mysqli_real_escape_string($cnxn, prep_input($_POST['address2']));
	} else {
		echo '<p>Please enter a valid address line 2</p>';
		$isValid = false;
	}
}

// validate city
if (isset($_POST['city'])) {
	if (validText($_POST['city'])) {
		$city = mysqli_real_escape_string($cnxn, prep_input($_POST['city']));
	} else {
		echo '<p>Please enter a valid city</p>';
		$isValid = false;
	}
}

// validate state
if (isset($_POST['state'])) {
	if (validText($_POST['state'])) {
		$state = mysqli_real_escape_string($cnxn, prep_input($_POST['state']));
	} else {
		echo '<p>Please enter a valid state</p>';
		$isValid = false;
	}
}

// validate zip
if (isset($_POST['zip'])) {
	if (validZip($_POST['zip'])) {
		$zip = mysqli_real_escape_string($cnxn, prep_input($_POST['zip']));
	} else {
		echo '<p>Please enter a valid zip code</p>';
		$isValid = false;
	}
}

// validate other services they may have requested
$other = mysqli_real_escape_string($cnxn, prep_input($_POST['otherServices']));

// validate comments they may have submitted
$comments = mysqli_real_escape_string($cnxn, prep_input($_POST['comments']));

/*
 * Now that we've gathered everything, if isValid is true, we can compose the email,
 * display a summary of what the user entered, submit that information
 * to the database, then send the email's necessary
 */

if ($isValid) {

	//Setup the email
	$to = "";// TODO: replace with email
	$subject = "Outreach Service Request";
	$headers = "Name: $fname <myemail@somewhere.com>"; // TODO: replace with email
	date_default_timezone_set("America/Los_Angeles");
	$timestamp = date("Y/m/d h:i:s");
	$body = "Submitted: $timestamp\n";
	$body .= "First: $fname\n";
	$body .= "Last: $lname\n";
	$body .= "No Permanent Residence: $permRes\n";
	$body .= "Addr1: $address1\n";
	$body .= "Addr2: $address2\n";
	$body .= "City: $city\n";
	$body .= "State: $state\n";
	$body .= "Zip: $zip\n";
	$body .= "Email: $email\n";
	$body .= "Phone: $phone\n";
	$body .= "Requested Services: $services\n";
	$body .= "Other Service: $other\n";
	$body .= "Comments: $comments\n";

	//Build the SQL query
	$sql = "INSERT INTO requests VALUES
	(null,'$fname', '$lname', '$address1', '$address2', '$city', '$state', '$zip',
	'$email', '$phone', '$services', '$other', '$comments', '$timestamp')";

	//Send the query to the server, store result
	$success = mysqli_query($cnxn, $sql);

	//If database query returns false (failed), display error message
	if(!$success){
		echo "<p>Sorry . . . something went wrong</p>";
		return;
	}
	//If database query returns true (succeeded), send submission email
	else{
		mail($to, $subject, $body, $headers);
	}
	?>

<!--##################    FORM SUBMISSION PAGE    ##################-->

<div class="acknowledge-div pb-5">
	<!--  Header  -->
	<div class="content-wrap pt-5">
		<div class="content-wrap  border text-center">
			<h1 class="font-weight-bold text-center pt-4">Submitted Accepted</h1><br>
			<h3 class="pb-4 pr-4 pl-4">Thank you <em><? echo $fname." ".$lname ?></em>, for your submission.
				A member of our team will reach out to you as soon as possible!</h3>
		</div>
	</div>

	<!--  Form Information table  -->
	<table class="schedule">
		<colgroup>
			<col class="w-25" span="2" />
			<col class="w-75" span="3" />
		</colgroup>
		<thead>
		<tr>
			<th class="bg-secondary text-white text-center p-2" colspan="4">Service Request Submission</th>
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
	<!--    <form class="pt-5" action="http://dar2.greenriverdev.com/index.php">-->
	<!--        <button type="submit" class="btn btn-secondary">Return to main page</button>-->
	<!--    </form>-->
</div>

<!-- add a php tag to hold the closing bracket for the if (isValid) block-->
<?php } ?>

<!--##################    FOOTER SECTION    ##################-->
<?php include('includes/footer.php'); ?>