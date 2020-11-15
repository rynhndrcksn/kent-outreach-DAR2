<?php
$about_link = 'http://dar2.greenriverdev.com/index.php#about';
$services_link = 'http://dar2.greenriverdev.com/index.php#services';
$contact_link = 'http://dar2.greenriverdev.com/index.php#contact';
$navbar_link = 'http://dar2.greenriverdev.com/index.php';
$page_title = 'Admin Portal';
//Add Navbar
include("includes/header.html");
//Add Database info
require("includes/dbcreds.php");
?>
    <div class="container">
        <div class="content-wrap pt-5">
            <div class="content-wrap  border text-center">
                <h1 class="font-weight-bold text-center pt-4">Admin Portal</h1><br>
            </div>
        </div>

        <!--  DASHBOARD NAVBARD  -->
        <ul class="nav nav-pills mb-3 bg-secondary" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Requests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Form Control</a>
            </li>
        </ul>
        <!--  REQUEST TAB CONTENTS  -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active text-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <!--    SERVICE REQUEST TABLE    -->
							<table id="requests-table" class="display">
								<thead>
								<tr>
									<th>Request ID:</th>
									<th>First Name:</th>
									<th>Last Name:</th>
									<th>Address 1:</th>
									<th>Address 2:</th>
									<th>City:</th>
									<th>State:</th>
									<th>Zip:</th>
									<th>Email:</th>
									<th>Phone:</th>
									<th>Services:</th>
									<th>Other:</th>
									<th>Comments:</th>
									<th>Date:</th>
								</tr>
								</thead>
								<tbody>
		            <?php
		            $sql = 'SELECT * FROM requests';
		            $result = mysqli_query($cnxn, $sql);

		            foreach ($result as $row) {
			            echo '<tr>';
			            foreach ($row as $value) {
				            echo "<td>$value</td>";
			            }
			            echo '</tr>';
		            }
		            ?>
								</tbody>
							</table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <!--  TOGGLE REQUEST FORM  -->
                <form method="post">
                    <div class="form-group text-center">
                        <?php
                        //Check $_POST['toggle'] to see if toggle was clicked, if so flip the formOn state
                        if(isset($_POST['toggle'])){
                            //Create select query to get table contents
                            $sqltoggleformstate = "UPDATE formOn SET state = !state";
                            //Send query to the server
                            mysqli_query($cnxn, $sqltoggleformstate);
                        }

                        //Get the formOn state by sending query,
                        //Create select query to get table contents
                        $sqlgetformstate = "SELECT * FROM formOn";
                        //Send query to the server and store data array into variable
                        $result = mysqli_query($cnxn, $sqlgetformstate);

                        //Get the state value
                        foreach ($result as $row) {
                            $formState = $row['state'];
                        }

                        //If formOn state is display green/enabled status and red disable button
                        if ($formState){
                            echo "<div class=\"alert alert-success\" role=\"alert\">";
                            echo "  <h4 class=\"alert-heading\">Request Form is currently</h4>";
                            echo "    <h4 class=\"alert-heading\">ENABLED</h4>";
                            echo "</div>";
                            echo "<button type=\"submit\" class=\"btn btn-outline-danger\" name=\"toggle\"\">Disable Form</button>";
                        }
                        //Else display red/disabled status and green enable button
                        else{
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                            echo "  <h4 class=\"alert-heading\">Request Form is currently</h4>";
                            echo "    <h4 class=\"alert-heading\">DISABLED</h4>";
                            echo "</div>";
                            echo "<button type=\"submit\" class=\"btn btn-outline-success\" name=\"toggle\">Enable Form</button>";
                        }?>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
//Add Footer
include("includes/footer.html")?>
<!-- add datatables.net js -->
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
	$('#requests-table').DataTable({
		'scrollX': true
	});
</script>

