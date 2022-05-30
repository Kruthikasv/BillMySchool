<?php
include "inc/header_fee.php";
include "classes/Student.php";
$stu = new Student();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$con = mysqli_connect("localhost", "root", "", "db_sams");
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$fee = $_POST['fee'];

		$sql = "INSERT INTO fee(name,roll,fee) values('$name', '$roll', '$fee')";
		if (!mysqli_query($con, $sql)) {
			die('Error: ' . mysqli_error($con));
		}
		header("Location:fee.php");
	}
	mysqli_close($con);
}
?>
<!-- Add meta tags for mobile and IE -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title> PayPal Checkout Integration | Responsive Buttons </title>

<style>
	/* Media query for mobile viewport */
	@media screen and (max-width: 400px) {
		#paypal-button-container {
			width: 100%;
		}
	}

	/* Media query for desktop viewport */
	@media screen and (min-width: 400px) {
		#paypal-button-container {
			width: 250px;
		}
	}

	body {
		background-color: bisque;
	}
</style>

<div class="container"><?php
						if (isset($insertdata)) {
							echo $insertdata;
						}
						?><div class="card" style="background-color:#6b3b0b;">
		<div class=" card-header">
			<h2><a class="btn btn-info float-right" href="fee.php">Back</a></h2>
		</div>
		<div class="card-body">
			<form action="" method="post">
				<div class="form-group"><label for="name" style="color:white;">Student Name</label><input type="text" class="form-control" name="name" id="name" value=<?= $_REQUEST['name']; ?> required=""></div>
				<div class="form-group"><label for="roll" style="color:white;">Student Roll</label><input type="text" class="form-control" name="roll" id="roll" value=<?= $_REQUEST['roll']; ?> required=""></div>
				<div class="form-group"><label for="fee" style="color:white;">Pay Fee</label><input type="text" class="form-control" name="fee" id="fee" value="50000" required=""></div>
				<!-- <div class="form-group text-center"><input type="submit" name="submit" class="btn btn-primary px-5" id="roll" value="Pay"></div> -->
			</form>
			<!-- Set up a container element for the button -->
			<div id="paypal-button-container"></div>

			<!-- Include the PayPal JavaScript SDK -->
			<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

			<script>
				// Render the PayPal button into #paypal-button-container
				paypal.Buttons().render('#paypal-button-container');
			</script>
		</div>
	</div>