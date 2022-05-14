<?php
include "inc/header_fee.php";
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
				<a class="btn btn-info float-right" href="../index.php" style="margin-right:10px">Back</a>
			</h2>
		</div>

		<div class="card-body" style="background-color:#6b3b0b">
			<div class="card bg-light text-center mb-3">
				<h4 class="m-0 py-3" style="background-color:bisque;"><strong>Date</strong>: <?php echo $cur_date; ?></h4>
			</div>
			<form action="" method="post">
				<table class="table table-striped" style="background-color:bisque; font-weight:800">
					<tr>
						<th width="25%">S/L</th>
						<th width="25%">Student Name</th>
						<th width="25%">Student Roll</th>
						<th width="25%">Pay</th>
					</tr>
					<?php
					$getstudent = $stu->getStudents();
					if ($getstudent) {
						$i = 0;
						while ($value = $getstudent->fetch_assoc()) {
							$i++;
					?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $value['name']; ?></td>
								<td><?php echo $value['roll']; ?></td>
								<td>
									<input type="button" name="pay_fee" value="Pay" class="btn btn-primary btn-small" onclick="window.open('./pay_fee');">
								</td>
							</tr>
					<?php }
					} ?>

					<tr>
						<td colspan="4" class="text-center">
							<input type="submit" name="submit" class="btn btn-primary px-5" value="Submit">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>