<?php
$about_link = 'http://dar2.greenriverdev.com/index.php#about';
$services_link = 'http://dar2.greenriverdev.com/index.php#services';
$contact_link = 'http://dar2.greenriverdev.com/index.php#contact';
$navbar_link = 'http://dar2.greenriverdev.com/index.php';
$getInvolved_link = '#';
$page_title = 'Get Involved';
$page_specific_script = '';

//Login info
include('includes/loginPath.php');

include('includes/header.php'); ?>


    <!--   Beginning of page specific content   -->

    <!--##################    HEADER/TITLE SECTION    ##################-->

    <!--header with background pic -->
    <h1 class="text-block font-weight-bold align-top">Get Involved!</h1>


    <div class="container">

        <!--##################    MAKE A DONATION SECTION   ##################-->
        <fieldset class="form-group border p-3">
            <legend class="font-weight-bold text-center">Make a Donation</legend>
            <img src="images/make-donation-logo.svg" class="icon pb-3" alt="donation icon">
            <h4 class="font text-center">We accept and appreciate financial donations. Please make
                those donations
                <i><a href="http://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H9ERUZQAKHFUA">through
                        our paypal</a></i>
            </h4>
        </fieldset>

        <!--##################    VOLUNTEER SECTION   ##################-->
        <fieldset class="form-group border p-3">
            <legend class="font-weight-bold text-center">Volunteer</legend>
            <img src="images/heart-care.svg" class="icon pb-3"
                 alt="volunteer icon">
            <h4 class="text-center">We appreciate anyone who can volunteer in the following
                areas:</h4>
            <div class="text-body">
                <div class="card-deck mx-auto">
                    <div class="card service-card mx-auto">
                        <div class="card-body">
                            <h5 class="font-weight-bold">Thrift Shop Volunteers:</h5>
                            <p>Email <a href="mailto:jacinta@stjameskent.org">jacinta@stjameskent.org</a>
                                for more
                                information
                            </p>
                        </div>
                    </div>
                    <div class="card service-card mx-auto">
                        <div class="card-body">
                            <h5 class="font-weight-bold">Outreach office phone volunteers:</h5>
                            <p>Email <a
                                        href="mailto:postrander@stjameskent.org">postrander@stjameskent.org</a>
                                for
                                more
                                information
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <!--##################    SEASONAL OPPORTUNITIES SECTION   ##################-->
        <fieldset class="form-group border p-3">
            <legend class="font-weight-bold text-center">Seasonal Opportunities</legend>
            <h4 class="text-center">Below are a list of volunteer opportunities that are available during specific times
                of the year:</h4>

            <!-- Row 1 -->
            <div class="card-group">
                <!--  Card 1 -->
                <div class="card">
                    <img src="images/winter-donations.svg" class="card-img-top align-self-center pt-4"
                         id="winter-icon"
                         alt="winter clothes icon">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold">Winter Drive</h4>
                        <div class="card-text seasonal-opp-donations">
                            <p>Donations Include:</p>
                            <ul>
                                <li>Gloves</li>
                                <li>Socks</li>
                                <li>Hand-warmers</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  Card 2 -->
                <div class="card">
                    <img src="images/gift.svg" class="card-img-top align-self-center service-icon pt-5"
                         id="gift-icon"
                         alt="a gift">
                    <div class="card-body pt-5">
                        <h4 class="card-title text-center font-weight-bold">Angel Tree</h4>
                        <div class="card-text seasonal-opp-donations">
                            <p>Donations Include:</p>
                            <ul>
                                <li>Christmas Gifts</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  Card 3 -->
                <div class="card">
                    <img src="images/school-supplies.svg" class="card-img-top align-self-center pt-4" id="supplies-icon"
                         alt="school supplies">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold">Back to School Drive</h4>
                        <div class="card-text seasonal-opp-donations">
                            <p>Donations Include:</p>
                            <ul>
                                <li>Backpacks</li>
                                <li>School Supplies</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </fieldset>
        <!--##################    DONATIONS SECTION   ##################-->
        <fieldset class="form-group border p-3">
            <legend class="font-weight-bold text-center">General Donations</legend>
            <h4 class="text-center">Donations are happily accepted year around!</h4>
            <div class="gen-donations">
                <div class="form-row">
                    <div class="form-group col-md-6 pt-4">
                        <img src="images/donations.svg" class="card-img-top align-self-center" id="donations-icon"
                             alt="general donations">
                    </div>
                    <div class="form-group col-md-6">
                        <div class="card-deck mx-auto" id="donation-body-box">
                            <div class="card service-card mx-auto" id="donation-body">
                                <p>Donations Include:</p>
                                <ul>
                                    <li>Canned Goods</li>
                                    <li>Non-perishable items</li>
                                    <li>Diapers</li>
                                    <li>Personal/feminine hygiene items</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div> <!-- end container -->

    <!--   End of page specific content   -->

    <!--##################    FOOTER SECTION    ##################-->
<?php include('includes/footer.php'); ?>