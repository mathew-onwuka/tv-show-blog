<?php 
// ob_start();
// session_start();

if (isset($_GET['post_title']) && isset($_GET['post_id'])) {
  $post_id = htmlentities($_GET['post_id']);
  $post_title = htmlentities($_GET['post_title']);
}else{
  header("Location: index.php");
}

$page_title = "View Content | Onyeka Nwelue TV";
require("includes/header.php");
require 'functions.inc.php';
require 'db.inc.php';
$post_id = intval($post_id);


// if (isset($_SESSION['user_id'])) {
//     $user_id = $_SESSION['user_id'];
//     $email =  $_SESSION['email'];
// } else {
//     header("Location:index.php");
// }

$sql = "SELECT * FROM posts WHERE post_id = '$post_id'";
$query = mysqli_query($link, $sql);
if (mysqli_num_rows($query) > 0) {
  $row = mysqli_fetch_array($query);
  $image_path = $row['image_path'];
  $post_date = date('F jS Y', $row['post_date']);
  $post_title = $row['post_title'];
  $post_body_1 = nl2br($row['post_body_1']);
  $post_body_2 = nl2br($row['post_body_2']);
  $post_body_3 = nl2br($row['post_body_3']);
  $post_link = $row['post_link'];
  $posted_by = $row['posted_by'];

}
 ?>					
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
								<h4 style="text-align: center; font-weight: bold;">VIEW CONTENT.</h4>
                <center><p style="color: red;">You can also modify this content or choose to delete it.</p></center>
								</div>

			
	
		<div class="panel-body no-padding">
      <form method="POST" action="update_post.php" enctype="multipart/form-data">

      <div class="form-group col-md-7">
              <center><label>Title</label></center>
              <input type="text" class="form-control" placeholder="Enter title of content..." value="<?php echo $post_title; ?>" name="post_title"><br>

              <center><label>Introductory Paragraph(Brief Review)</label></center>
              <textarea class="form-control" rows="2" name="post_body_1"><?php echo $post_body_1; ?></textarea><br>

              <center><label>Last Paragraph(Brief Review)</label></center>
              <textarea class="form-control" rows="2" name="post_body_3"><?php echo $post_body_3; ?></textarea><br>

              <!-- <center><label><span style="color: red; font-weight: bold;">Change Image (Max 2MB)</span>Re-select existing picture if you do not wish to change image</label>
              <input type="file" required="true" id="image" name="image"><img src="" id="preview" style="border: 1px solid #ddd; box-shadow: 2px 1px 1px #000; border-radius: 2px;" alt="No File Chosen" width="120" height="120"></center><br> -->

                <center><label>Posted By</label></center>
              <input value="<?php echo $posted_by; ?>" type="text" class="form-control" name="posted_by"><br>
            </div>

            <div class="form-group col-md-5">
<!-- Fetch Image from DB -->
              <div><img src="<?php echo $image_path; ?>" style="border: 1px solid #000; height: 200px; width: 400px; display: block;"></div><br>

              <center><label>Main-Body Paragraph(Brief Review)</label></center>
              <textarea class="form-control" rows="12" name="post_body_2"><?php echo $post_body_2; ?></textarea><br>

               <center><label>Re-select Category</label></center>
               <select class="form-control" name="cat_id" required>
                <option value="0">Re-select Category</option>
                <?php 
    // Fetch all categries for HTML Select options
               $sql = "SELECT * FROM categories";
               $result = mysqli_query($link, $sql);
               while ($row = mysqli_fetch_array($result)) { 
                $cat_id = $row['cat_id'];
                $cat_name = $row['cat_name'];
                ?>
                <option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
                <?php } ?>
                </select><br>

              <center><label>External Link eg; Youtube etc.</label></center>
              <input type="text" value="<?php echo $post_link; ?>" placeholder="Paste link here..." class="form-control" name="post_link"><br>
               <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
              <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </div>
        </form>
      </div>
       <form method="POST" action="delete_post.php">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        <button type="submit" class="btn btn-primary" name="submit2">Delete This Content!</button>
    </form>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
<?php require 'includes/footer.php'; ?>


