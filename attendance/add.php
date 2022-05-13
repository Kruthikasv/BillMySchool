<?php
include "inc/header.php";
include "classes/Student.php";
$stu = new Student();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$insertdata = $stu->insertStudent($name, $roll);
}
?>
<style>
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
			<h2><a class="btn btn-success" href="add.php">Add Student</a><a class="btn btn-info float-right" href="index.php">Back</a></h2>
		</div>
		<div class="card-body">
			<form action="" method="post">
				<div class="form-group"><label for="name" style="color:white;">Student Name</label><input type="text" class="form-control" name="name" id="name" required=""></div>
				<div class="form-group"><label for="roll" style="color:white;">Student Roll</label><input type="text" class="form-control" name="roll" id="roll" required=""></div>
				<div class="form-group text-center"><input type="submit" name="submit" class="btn btn-primary px-5" id="roll" value="Add"></div>
			</form>
		</div>
	</div>