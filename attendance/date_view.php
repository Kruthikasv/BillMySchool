<?php
include "inc/header.php";
include "classes/Student.php";
$stu = new Student();
?>

<div class="container">
	<?php
	if (isset($insertattend)) {
		echo $insertattend;
	}
	?>
	<style>
		body {
			background-color: bisque;
		}
	</style>
	<div class="card" style="background-color:#6b3b0b;">
		<div class="card-header">
			<h2>
				<a class="btn btn-success" href="add.php">Add Student</a>
				<a class="btn btn-info float-right" href="index.php">Take Addendance</a>
			</h2>
		</div>

		<div class="card-body" style="background-color:#6b3b0b">
			<form action="" method="post">
				<table class="table table-striped" style="background-color:bisque;">
					<tr>
						<th width=" 30%">S/L</th>
						<th width="50%">Attendance Date</th>
						<th width="20%">Action</th>
					</tr>
					<?php
					$getdate = $stu->getDateList();
					if ($getdate) {
						$i = 0;
						while ($value = $getdate->fetch_assoc()) {
							$i++;
					?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $value['att_time']; ?></td>
								<td>
									<a class="btn btn-primary" href="student_view.php?dt=<?php echo $value['att_time']; ?>">View</a>
								</td>
							</tr>
					<?php }
					} ?>
				</table>
			</form>
		</div>
	</div>
</div>
?>