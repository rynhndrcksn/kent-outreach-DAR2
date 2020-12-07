<div class="resCheck text-center border p-2 d-none" id="resCheckDiv">
    <h3>Please List Residence Status</h3>
    <h5>(Zip Code or Without Residence)</h5>
    <br>
    <!-- check for permanent residence  -->
    <div class="checkbox">
        <label><input type="checkbox" id="permRes" name="permRes"> No Permanent Residence</label>
    </div>
    <!-- zip code selection -->
    <form id="form-zipCheck" method="get">
        <fieldset class="form-group col zipCheck">
            <div class="form-group col zip" id="zipDiv">
                <label for="zipCheck">Check if Zip Code is Within Our Service Range</label>
                <input type="text" class="form-control col-md-2" id="zipCheck" placeholder="98031">
                <span class="text-danger d-none error"
                      id="empty-zipCheck">*Please enter a zip code</span>
                <span class="text-danger d-none error" id="err-zipCheck">*We are sorry to inform you that your zip code is outside the service range</span>
                <span class="text-success d-none error"
                      id="success-zipCheck">Your zip code is within our service range!</span>

                <!-- zip check button -->
                <input type="button" value="Check Zip" class="btn btn-dark btn-lg submit zipCheckBtn" id="submit-btn">
            </div>
        </fieldset>
    </form>
</div>

<!-- beginning of form -->
<form class="d-none" id="form-main" method="post" action="confirmation.php">
    <fieldset class="form-group border p-2">
        <legend class="text-center font-weight-bold">Request assistance</legend>

        <!-- start of contact information -->
        <div id="contactInfoDiv">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                    <span class="text-danger d-none error" id="err-fname">*Please enter a first name</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                    <span class="text-danger d-none error" id="err-lname">*Please enter a last name</span>
                </div>
            </div>

            <!-- address  -->
            <div class="address-field" id="address-section">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2"
                               placeholder="Apartment, studio, or floor">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Kent">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected disabled>Choose...</option>
                            <option selected>WA</option>
                        </select>
                    </div>
                    <!-- zip code selection -->
                    <div class="form-group col-md-2">
                        <label for="zip">Zip Code</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="98031">
                        <span class="text-danger d-none error" id="err-zip">*We are sorry to inform you that your zip code is outside the service range</span>
                    </div>
                </div>
            </div>

            <br>
            <h5 class="font-weight-bold">Please add either an email(preferred) or a phone number:</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email (optional)</label>
                    <input type="email" class="form-control" id="email" name="email"
                           pattern='(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}
                               \.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))'
                           placeholder="you@example.com">
                    <span class="text-danger d-none error" id="err-email">*Please enter a valid email</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone Number (optional)</label>
                    <input type="tel" class="form-control" id="phone" name="phone" maxlength="10"
                           pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$"
                           placeholder="1234567890">
                </div>
                <span class="text-danger d-none error" id="err-email-phone">*Please provide either an email address or phone number so that we can get in touch with you. Email is preferred!</span>
            </div>
        </div>
        <br>

        <!-- start of service selections -->
        <div id="servicesDiv">
            <h5 class="font-weight-bold">Services You Need:</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="utilities" value="utilities"
                       name="services[]">
                <label class="form-check-label" for="utilities">
                    Utilities (electricity or water)
                </label>
            </div>
            <div class="input-group mb-3 d-none" id="utilDocs">
                <span class="text-danger">*Please bring in your current bill/final notice.</span>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rent" value="rent" name="services[]">
                <label class="form-check-label" for="rent">
                    Rent
                </label>
            </div>
            <div class="input-group mb-3 d-none" id="rentDocs">
                <span class="text-danger">*Please bring in your eviction notice.</span>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gas" value="gas" name="services[]">
                <label class="form-check-label" for="gas">
                    Gas
                </label>
            </div>
            <div class="input-group mb-3 d-none" id="gasDocs">
                <span class="text-danger">*Please bring in your current Washington State Driver's License.</span>
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
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="other" value="other" name="services[]">
                <label class="form-check-label" for="other">
                    Other:
                </label>
            </div>
            <div class="form-group d-none" id="showOther">
                <label for="otherService">Please list the other services you are interested in:</label>
                <textarea class="form-control" id="otherService" name="otherServices" rows="2"></textarea>
                <span class="text-danger d-none error" id="err-other">*Please fill out what other services you
										are interested in.</span>
            </div>
            <span class="text-danger d-none error" id="err-services">*Please select at least 1 service.</span>
            <br>
            <div class="form-group">
                <label for="comments">Any additional Comments:</label>
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
