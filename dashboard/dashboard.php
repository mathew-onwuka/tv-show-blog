<?php 
// ob_start();
// session_start();
$page_title = "Dashboard | Onyeka Nwelue TV";
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
								<div class="panel-heading">
								<h4 style="text-align: center; text-transform: uppercase;">Click on any of the links below to proceed.</h4>
								</div>
			
	
		<div class="panel-body no-padding">
			<table class='table table-striped'>
										<thead>
											<tr>
												<th style="border: 3px solid skyblue; background-color: #ddd; box-shadow: 2px 2px 1px #000; font-family: tahoma; text-align: center;"><a href="add_content.php"><span>Add New Content</span></a></th>
												
												<th style="border: 3px solid skyblue; box-shadow: 2px 2px 1px #000; font-family: tahoma;text-align: center;"><a href="message.php"><span>Messages</span></a></th>
											</tr>
											<tr>
												<th style="border: 3px solid skyblue; background-color: #ddd; box-shadow: 2px 2px 1px #000; font-family: tahoma; text-align: center;"><a href="all_contents.php"><span>View All Contents</span></a></th>

												<th style="border: 3px solid skyblue; box-shadow: 2px 2px 1px #000; font-family: tahoma; text-align: center;"><a href="logout.php"><span>Logout</span></a></th>
											</tr>
										</thead>									
									</table>
								</div>						
							</div>							
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php require 'includes/footer.php'; ?>

