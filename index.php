<?php
$about_link = '#about';
$services_link = '#services';
$contact_link = '#contact';
$getInvolved_link = 'http://dar2.greenriverdev.com/getInvolved.php';
$navbar_link = '#';
$page_title = 'Kent Outreach Program';
$page_specific_script = '<script src="scripts/form.js"></script>';

//Login info
include('includes/loginPath.php');

include('includes/header.php');
require('/home2/dargreen/includes/dbcreds.php');
?>

<!--   Beginning of page specific content   -->

<!--##################    HEADER/TITLE SECTION    ##################-->

<!--header with background pic -->
<h1 class="text-block font-weight-bold align-top">Kent Outreach Program</h1>


<!-- Contact Intake Form-->
<div class="container">

    <!--##################    ABOUT US SECTION   ##################-->

    <fieldset class="about-us form-group border p-2">
        <legend class="font-weight-bold text-center" id="about">About Us</legend>
        <p class="about-info">The Outreach provides low-income Kent residents and the homeless with food, water,
            clothing, utility
            shut-off assistance, drivers licenses and IDs, and referral information. We also provide school supplies
            and
            household furnishings, when they are available. Those seeking help must live within the Kent school
            district, be disabled, have children living with them, or are senior citizens. We always help the
            homeless.</p>
        <p class="about-info">The Outreach began almost 30 years ago when St. James saw the need arise. During these
            desperate times our office is a lifeline for those in need. It has evolved into a place that gives hope
            to those in need.</p>
    </fieldset>

    <!--##################    LOCATION SECTION    ##################-->

    <fieldset class="form-group border p-2">
        <legend class="font-weight-bold text-center" id="location">Location</legend>
        <div class="row">
            <div class="col">
                <iframe class="googleMap"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5403.049144964607!2d-122.21985509925234!3d47.38219692206668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54905eaea2de8c4d%3A0x7ccb983935a7c111!2sSt.%20James%20Episcopal%20Church!5e0!3m2!1sen!2sus!4v1602814596592!5m2!1sen!2sus"
                        allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-4">
                <h5 class="text-uppercase font-weight-bold">Hours</h5>
                <p>Monday: 1:00pm to 4:00pm<br>
                    Tuesday: 9am to 12:00noon<br>
                    Wednesday: 1:00pm to 4:00pm<br></p><br><br><br>
                <h5 class="text-uppercase font-weight-bold">St. James Episcopal Church</h5>
                <p>24447 94th Ave. S Kent, WA 98030</p>
            </div>
        </div>
    </fieldset>

    <!--##################    SERVICES SECTION    ##################-->

    <fieldset class="form-group border p-3">
        <legend class="font-weight-bold text-center" id="services">How We Can Help</legend>
        <!--  Services Cards Row 1 -->
        <div class="card-deck mx-auto">
            <!--  Card 1 -->
            <div class="card service-card mx-auto">
                <img src="images/icon-house.svg" class="card-img-top align-self-center service-icon pt-5"
                     alt="A picture of a small model house sitting upon a pile of coins">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Rent or Utilities</h4>
                    <p class="card-text font">We can help pay an amount towards your rent or utilities</p>
                    <ul>
                        <li>Once per calendar year</li>
                        <li>Name of requester must appear on bill</li>
                        <li>Must have urgent or shut-off notice</li>
                    </ul>
                </div>
            </div>
            <!--  Card 2 -->
            <div class="card service-card mx-auto">
                <img src="images/icon-pantry.svg" class="card-img-top align-self-center service-icon pt-5"
                     alt="many fruits and vegetables">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Food Pantry</h4>
                    <p class="card-text">We can help with emergency groceries or toiletries.</p>
                    <ul>
                        <li>Once per month</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--  Services Cards Row 2 -->
        <div class="card-deck mx-auto">
            <!--  Card 3 -->
            <div class="card service-card mx-auto">
                <img src="images/icon-thrift.svg" class="card-img-top align-self-center service-icon pt-5"
                     alt="clothing hanging on hangars">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Thrift Store Voucher</h4>
                    <p class="card-text">We can provide a voucher redeemable at local thrift stores (hours coming soon)
                        The voucher is good for clothing and small household items.</p>
                    <ul>
                        <li>Once every six months</li>
                    </ul>
                </div>
            </div>
            <!--  Cards 4 -->
            <div class="card service-card mx-auto">
                <img src="images/icon-gas2.svg" class="card-img-top align-self-center service-icon pt-5"
                     alt="a car being filled up at the gas pump">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Gas Card</h4>
                    <p class="card-text">We can provide you with a gas card</p>
                    <ul>
                        <li>Can only be requested once every six months</li>
                        <li>Must have a valid/current drivers license (not an ID card)</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--  Services Cards Row 3 -->
        <div class="card-deck mx-auto">
            <!--  Card 5 -->
            <div class="card service-card mx-auto">
                <img src="images/icon-id.svg" class="card-img-top align-self-center service-icon pt-5"
                     alt="a person holding car keys">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Drivers License/ID card</h4>
                    <p class="card-text">If you are seeking an ID card, check with DSHS to see if you qualify for a
                        voucher, we will cover the difference. An appointment will be scheduled to meet with you
                        at the <a
                                href="https://www.google.com/maps/place/Kent+Licensing+Agency+Inc/@47.378623,-122.24835,14z/data=!4m5!3m4!1s0x0:0x47235f811a68cb8b!8m2!3d47.3786226!4d-122.2483503?hl=en-US">Department
                            of Licensing in Kent.</a></p>
                </div>
            </div>
        </div>
    </fieldset>
    <!--##################    FORM SECTION    ##################-->

    <!-- Toggle button to see form -->
    <!--<div class="custom-control custom-switch">-->
    <!--    <input type="checkbox" class="custom-control-input" id="formOn">-->
    <!--    <label class="custom-control-label" for="formOn">Form: Off/On</label>-->
    <!--</div>-->

    <!-- Notice -->
    <h2 class="text-danger" id="contact">Notice</h2>
    <p>Appointments are made first come first served. Online form is only accessible during business hours.
        If you cannot access form it is either outside of business hours or we have filled our appointments
        for the week. Please try again next Monday beginning at 1pm.</p>
    <br>

    <!-- beginning of form -->
    <?php
    
    
    
    //Query Database table formOn to get current state of the form, either 0(off), 1(on), 2(timer)
    $sqlrequests = "SELECT * FROM formOn";
    $result = mysqli_query($cnxn, $sqlrequests);
    $formState = 0;
    foreach ($result as $row){
        $formState = $row['state'];
    }

    //Load request form based on current state of $formState
    //If the formOn control is set to override "on"
    if($formState == 1){
        include("includes/form.php");
    }
    //If the formOn control is set to timed form, run timedForm function
    elseif($formState == 2){
        //Function to check day/hours to determine if form should be loaded
        timedForm();
    }

    //Checks the time and will load the form if it is during business hours
    function timedForm(){
        //Set timezone and day/hour variables
        date_default_timezone_set("America/Los_Angeles");
        $day = date("D");
        $hour = date("H");

        //If it is a business day
        if($day == "Mon" || $day == "Tue" || $day == "Wed"){
            //If it is Tuesday and during business hours
            if($day == "Tue" && ($hour >= 9 && $hour < 12)){
                include("includes/form.php");
            }
            //If it is Monday or Wednesday and during business hours
            elseif($hour >= 13 && $hour < 16){
                include("includes/form.php");
            }
        }
    }
    
    
    
    // //Create select query to get table contents
    // $sqlrequests = "SELECT * FROM formOn";
    // //Send query to the server and store data array into variable
    // $result = mysqli_query($cnxn, $sqlrequests);
    // foreach ($result as $row){
    //     $formState = $row['state'];
    // }

    // //Load form if state is true, otherwise form is not loaded
    // if($formState){
    //     include("includes/form.php");
    // }
    // // else{
    // //     echo "<div class='text-center border'>";
    // //     echo "  <h3 class='p-3'>The request form is unavailable at this time.<br></h3>";
    // //     echo "</div>";
    // // }
    ?>

    <!--##################    OTHER RESOURCES SECTION    ##################-->
    <br>
    <fieldset class="other-resources border p-2">
        <legend class="text-center font-weight-bold" id="resources">Other Resources
        </legend>
        <h5 class="text-center pb-3">(if Form is Unavailable or Unqualified to Receive Services)</h5>
        <div class="card-deck mx-auto">
            <div class="card service-card mx-auto">
                <div class="card-body">
                    <a class="link" href="https://www.211.org/">
                        <img class="logo img-fluid" src="images/211-logo.svg"
                             alt="211-Logo"></a>
                </div>
            </div>
            <div class="card service-card mx-auto">
                <div class="card-body">
                    <a class="link" href="http://Kentmethodist.com/assistance"><img
                                class="logo img-fluid" id="UMCLogoIndexPg" src="images/KentUMC+Logo.png"
                                alt="UMC-Logo"></a>

                </div>
            </div>
        </div>
    </fieldset>
    <br>
</div> <!-- end container -->

<!--   End of page specific content   -->

<!--##################    FOOTER SECTION    ##################-->
<?php include('includes/footer.php');?>

