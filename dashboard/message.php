<?php 
// ob_start();
// session_start();
$page_title = "Messages | Onyeka Nwelue TV";
require("includes/header.php");
require 'functions.inc.php';
require 'db.inc.php';

// if (isset($_SESSION['admin_id'])) {
//     $admin_id = $_SESSION['admin_id'];
//     $email =  $_SESSION['email'];
// } else {
//     header("Location:index.php");
// }

 ?>					
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
								<h4 style="text-align: center; font-weight: bold;">MESSAGES</h4>
								</div>
			<?php 
			$sql = "SELECT * FROM messages ORDER BY msg_date DESC LIMIT 50";
		$result = mysqli_query($link, $sql);
		while ($rows = mysqli_fetch_array($result)) {
			$fullname = $rows['fullname'];
			$email = $rows['email'];
			$msg_body = $rows['msg_body'];
			$msg_date = date('F jS Y', $rows['msg_date']);
			 ?>
		<div class="panel-body no-padding">

			<div class="form-group col-md-12">
				<table class='table table-striped'>
										<thead>
											<tr>
												<th>Name</th>
												<th>Email</th>
												<th>Date</th>
												<th>Message</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $fullname; ?></td>
												<td><?php echo $email; ?></td>
												<td><?php echo $msg_date; ?></td>
												<td><?php echo $msg_body; ?></td>
											</tr>
										</tbody>
								</table>
     </div>
     	<?php } ?>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php require 'includes/footer.php'; ?>

