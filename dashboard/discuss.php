<?php 
// ob_start();
// session_start();
$page_title = "Discussions | Onyeka Nwelue TV";
require("includes/header.php");
require 'functions.inc.php';
require 'db.inc.php';

// // var_dump($_SESSION);

// if (isset($_SESSION['user_id'])) {
//     $user_id = $_SESSION['user_id'];
//     $email =  $_SESSION['email'];
// } else {
//     header("Location:index.php");
// }
 ?>					
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
							<!-- 	<div class="panel-heading">
								<h4 style="text-align: center; font-weight: bold;">ALL CONTENTS</h4>
								</div> -->
		<div class="panel-body no-padding">
		<center><h3>Discussions</h3></center>
		<?php 
			$sql = "SELECT * FROM posts WHERE cat_id = 2 ORDER BY post_date DESC LIMIT 100";
			$result = mysqli_query($link, $sql);
			 ?>
			 <?php while ($rows = mysqli_fetch_array($result)) {
			$post_title = $rows['post_title'];
			$post_id = $rows['post_id'];
			$post_id = intval($rows['post_id']);
			$posted_by = $rows['posted_by'];
			$post_date = date('F jS Y', $rows['post_date']);
		 ?>
		 <a href="view_contents.php?post_id=<?php echo urldecode($post_id) . '&post_title=' . urldecode($post_title); ?>">
			<div class="form-group col-md-12">			
				<table class='table table-striped col-md-12'>
										<thead>
											<tr>
												<th>Title</th>
												<th>Posted By</th>
												<th>Date</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $post_title; ?></td>
												<td><?php echo $posted_by; ?></td>
												<td><?php echo $post_date; ?></td>
											</tr>
										</tbody>
				</table>
				</a>
			<?php } ?>
     </div>
		</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php require 'includes/footer.php'; ?>

