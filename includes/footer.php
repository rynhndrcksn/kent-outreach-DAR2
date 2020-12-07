<footer class="bg-dark text-white p-3">
    <!--  Top Row  -->
    <div class="top-container row row-cols-1 row-cols-md-3 row-cols-lg-3 justify-content-center text-center mx-auto  pt-3">
        <!--  Left Column  -->
        <div class="col">
            <a class="taber text-uppercase" data-toggle="collapse" data-parent="#accordion"
               href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Address
            </a>
            <div id="collapseOne" class="panel-collapse collapse in pt-2" role="tabpanel">
                <ul class="content">
                    <li> 24447 94th Ave. S Kent, WA 98030</li>
                    <li>
                        <div class="footer-map">
                            <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21612.300265181882!2d-122.21637999999999!3d47.381944!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ccb983935a7c111!2sSt.%20James%20Episcopal%20Church!5e0!3m2!1sen!2sus!4v1602951782510!5m2!1sen!2sus"
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0" class="gmap-footer"></iframe>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">

            <a class="taber text-uppercase" data-toggle="collapse" data-parent="#accordion"
               href="#collapsetwo" aria-expanded="false" aria-controls="collapseOne">
                Hours
            </a>
            <div id="collapsetwo" class="panel-collapse collapse in pt-2" role="tabpanel">
                <ul class="content">
                    <li>Monday: 1:00pm to 4:00pm</li>
                    <li>Tuesday: 9am to 12:00noon</li>
                    <li>Wednesday: 1:00pm to 4:00pm</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <a class="taber text-uppercase" data-toggle="collapse" data-parent="#accordion"
               href="#collapsethree" aria-expanded="false" aria-controls="collapseOne">
                Contact Us
            </a>

            <div id="collapsethree" class="panel-collapse collapse in pt-2" role="tabpanel">
                <ul class="content">
                    <li>Call (253)852-4100</li>
                    <li>or</li>
                    <li><a class="link" id="complete-form" href="<? echo $contact_link ?>">Complete this form</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--  Bottom Row  -->
    <div class="row row-cols-2 text-center mx-auto">
        <!--  Left Column  -->
        <div class="col text-left font-weight-bold adminlink">
            <a class="link" id="adminlink" href="dashboard.php"><span class="fa fa-lock"></span> Admin</a>
        </div>
        <!--  Right Column  -->
        <div class="col text-right font-weight-bold copyright-text">Created by DAR&#178; &#xa9;</div>
    </div>
    <div class="text-center copyright-text font-weight-bold pt-2">
        <p>© 2020 Copyright: Saint James Episcopal Church Outreach Ministry</p>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="scripts/navbar.js"></script>
<script src="scripts/outreach.js"></script>
<? echo $page_specific_script ?>
<!--<script src="scripts/form.js"></script>-->
<!--<script src="scripts/formcontrol.js"></script>-->
</body>
</html>