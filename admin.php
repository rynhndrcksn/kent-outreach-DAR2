<?php
$about_link = 'http://rrivera.greenriverdev.com/305/kent/index.php#about';
$services_link = 'http://rrivera.greenriverdev.com/305/kent/index.php#services';
$contact_link = 'http://rrivera.greenriverdev.com/305/kent/index.php#contact';
$navbar_link = 'http://rrivera.greenriverdev.com/305/kent/index.php';
$page_title = 'Admin Portal';
include('includes/header.html'); ?>

<!--##################    ADMIN LOGIN SECTION    ##################-->

<div class="content-wrap pt-5 pb-5">
    <div class="container border p-10">

        <form class="login" action="confirmation.php">
            <h1 class="font-weight-bold text-center">Admin Login</h1><br>
            <div class="form-group">
                <label class="font-weight-bold" for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="password">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="password">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" class="submit-login text-white font-weight-bold rounded">Login</button>
        </form>
    </div>
</div>

<!--##################    FOOTER SECTION    ##################-->

<?php include('includes/footer.html'); ?>

