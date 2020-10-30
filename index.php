<?php
$about_link = '#about';
$services_link = '#services';
$contact_link = '#contact';
$navbar_link = '#';
$page_title = 'Kent Outreach Program';
include('includes/header.html');?>

<!--   Beginning of page specific content   -->

<!--##################    HEADER/TITLE SECTION    ##################-->

<!--header with background pic -->
<h1 class="text-block font-weight-bold align-top">Kent Outreach Program</h1>


<!-- Contact Intake Form-->
<div class="container">

    <!--##################    ABOUT US SECTION   ##################-->

    <!-- Dana's About Us Section -->
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
                    <h5 class="card-title text-center">Rent or Utilities</h5>
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
                <img src="images/icon-pantry.svg" class="card-img-top align-self-center service-icon pt-5" alt="many fruits and vegetables">
                <div class="card-body">
                    <h5 class="card-title text-center">Food Pantry</h5>
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
                <img src="images/icon-thrift.svg" class="card-img-top align-self-center service-icon pt-5" alt="clothing hanging on hangars">
                <div class="card-body">
                    <h5 class="card-title text-center">Thrift Store Voucher</h5>
                    <p class="card-text">We can provide a voucher redeemable at local thrift stores (hours coming soon)
                        The voucher is good for clothing and small household items.</p>
                    <ul>
                        <li>Once every six months</li>
                    </ul>
                </div>
            </div>
            <!--  Cards 4 -->
            <div class="card service-card mx-auto">
                <img src="images/icon-gas2.svg" class="card-img-top align-self-center service-icon pt-5" alt="a car being filled up at the gas pump">
                <div class="card-body">
                    <h5 class="card-title text-center">Gas Card</h5>
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
                <img src="images/icon-id.svg" class="card-img-top align-self-center service-icon pt-5" alt="a person holding car keys">
                <div class="card-body">
                    <h5 class="card-title text-center">Drivers License/ID card</h5>
                    <p class="card-text">If you are seeking an ID card, check with DSHS to see if you qualify for a
                        voucher, we will cover the difference. An appointment will be scheduled to meet with you
                        at the  <a href="https://www.google.com/maps/place/Kent+Licensing+Agency+Inc/@47.378623,-122.24835,14z/data=!4m5!3m4!1s0x0:0x47235f811a68cb8b!8m2!3d47.3786226!4d-122.2483503?hl=en-US">Department of Licensing in Kent.</a></p>
                </div>
            </div>
        </div>
    </fieldset>
    <!--##################    FORM SECTION    ##################-->

    <!-- Notice -->
    <h2 class="text-danger" id="contact">Notice</h2>
    <p>Appointments are made first come first served. Online form is only accessible during business hours.
        If you cannot access form it is either outside of business hours or we have filled our appointments
        for the week. Please try again next Monday beginning at 1pm.</p>

    <!-- beginning of form -->
    <form id="form-main" method="post" action="email.php">
        <fieldset class="form-group border p-2">
            <legend class="text-center font-weight-bold">Request assistance</legend>

            <!-- start of contact information -->

            <!-- check for permanent residence  -->
            <div class="checkbox">
                <label><input type="checkbox" id="permRes" name="permRes"> No permanent residence</label>
            </div>


            <div id="contactInfoDiv">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                    <span class="text-danger d-none error" id="err-fname">*Please enter a first name</span>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                    <span class="text-danger d-none error" id="err-lname">*Please enter a last name</span>
                </div>

                <!-- address  -->
                <div class="address-field" id="address-section">
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address1" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" name="address2"
                               placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity" name="city" placeholder="Kent">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control" name="state">
                                <option selected>Choose...</option>
                                <option selected>WA</option>
                            </select>
                        </div>
                        <!-- zip code selection -->
                        <div class="form-group col-md-2">
                            <label>Zip Code</label>
                            <input type="text" class="form-control" id="zip" placeholder="98031" name="zip">
                            <span class="text-danger d-none error" id="err-zip">*We are sorry to inform you that your zip code is outside the service range</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email (optional)</label>
                    <input type="email" class="form-control" id="email" name="email"
                           pattern='(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}
                               \.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))'>
                    <span class="text-danger d-none error" id="err-email">*Please enter a valid email</span>
                    <span class="text-danger d-none error" id="err-email-phone">*Please provide either an email address or phone number so that we can get in touch with you. Email is preferred!</span>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number (optional)</label>
                    <input type="tel" class="form-control" id="phone" name="phone" maxlength="10"
                           pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$">
                    <span class="text-danger d-none error" id="err-phone">*Please enter a last name.</span>
                </div>
            </div>

            <!-- start of service selections -->
            <div id="servicesDiv">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="utilities" value="utilities" name="services[]">
                    <label class="form-check-label" for="utilities">
                        Utilities (electricity or water)
                    </label>
                </div>
                <div class="input-group mb-3 d-none">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="utilitiesFile">
                        <label class="custom-file-label" for="utilitiesFile">Optional: attach a picture of your current
                            bill/final notice.</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rent" value="rent" name="services[]">
                    <label class="form-check-label" for="rent">
                        Rent
                    </label>
                </div>
                <div class="input-group mb-3 d-none">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="rentFile">
                        <label class="custom-file-label" for="rentFile">Optional: attach a picture of your eviction
                            notice
                            notice.</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gas" value="gas" name="services[]">
                    <label class="form-check-label" for="gas">
                        Gas
                    </label>
                </div>
                <div class="input-group mb-3 d-none">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gasFile">
                        <label class="custom-file-label" for="gasFile">Optional: attach a
                            picture of your Washington State Drivers License</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="household" value="household" name="services[]">
                    <label class="form-check-label" for="household">
                        Household items and clothing
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="wadl" value="wadl" name="services[]">
                    <label class="form-check-label" for="wadl">
                        ID card or drivers license
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="food" value="food" name="services[]">
                    <label class="form-check-label" for="food">
                        Food
                    </label>
                </div>
                <br>
                <div class="form-group">
                    <label for="comments">Comments:</label>
                    <textarea class="form-control" placeholder="Comments..." id="comments" name="comments" rows="3"></textarea>
                </div>
            </div>
        </fieldset>

        <!-- agreement -->
        <div class="checkbox">
            <label class="d-block"><input type="checkbox" id="agreement" name="agreement"> I agree to the terms and conditions</label>
            <span class="text-danger d-none error" id="err-agreement">*Please agree to the terms and conditions</span>
        </div>

        <!-- order button -->
        <input type="submit" value="Request Assistance" class="btn btn-dark btn-lg submit">
    </form>


    <!--##################    OTHER RESOURCES SECTION    ##################-->
    <br>
    <fieldset class="other-resources border p-2">
        <legend class="text-center" id="resources">If the form is unavailable at this time, try these other
            resources
        </legend>
        <ul class="resources-list">
            <li class="list-item"><a class="link" href="https://www.211.org/">211<img class="logo img-fluid"
                                                                                      src="images/211-logo.svg"
                                                                                      alt="211-Logo"></a></li>
            <li class="list-item"><a class="link" href="http://Kentmethodist.com/assistance">Kent Methodist<img
                            class="logo img-fluid" id="UMCLogo" src="images/KentUMC+Logo.png"
                            alt="UMC-Logo"></a></li>
        </ul>
    </fieldset>
    <br>
</div> <!-- end container -->

<!--   End of page specific content   -->

<!--##################    FOOTER SECTION    ##################-->
<?php include('includes/footer.html');?>

