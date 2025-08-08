<?php 
// ob_start();
// session_start();
$page_title = "Add New Content | Onyeka Nwelue TV";
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
// echo time();


if (isset($_POST['submit'])) {
  $error = false;
// Check if text field is not empty, if yes then sanitize the Post Title and assign to a variable
  if (!empty($_POST['post_title'])) {
    $post_title = sanitize($_POST['post_title']);
  } else {
    $error = true;
    $post_title_err = 1;
  }
// Check if text field is not empty, if yes then Sanitize Post Category and assign to a variable
  if (!empty($_POST['cat_id'])) {
    $cat_id = sanitize($_POST['cat_id']);
    $cat_id = intval($cat_id);
    if ($cat_id == 0) {
      $error = true;
      $noCatErr = 1;
    } 
  } else {
    $error = true;
    $cat_err = 1;
  }
// Check if text field is not empty, if yes then Sanitize Post Body and assign to a variable
  if (!empty($_POST['post_body_1'])) {
    $post_body_1 = trim(sanitize($_POST['post_body_1']));
  } else {
    $error = true;
    $post_body_1_err = 1;
  }

 // Check if text field is not empty, if yes then Sanitize Post Body and assign to a variable
  if (!empty($_POST['post_body_2'])) {
    $post_body_2 = trim(sanitize($_POST['post_body_2']));
  } else {
    $error = true;
    $post_body_2_err = 1;
  }

  // Check if text field is not empty, if yes then Sanitize Post Body and assign to a variable
  if (!empty($_POST['post_body_3'])) {
    $post_body_3 = trim(sanitize($_POST['post_body_3']));
  } else {
    $error = true;
    $post_body_3_err = 1;
  }

  // Check if text field is not empty, if yes then Sanitize Post Body and assign to a variable
  if (!empty($_POST['post_link'])) {
    $post_link = trim(sanitize($_POST['post_link']));
  } else {
    $error = true;
    $post_link_err = 1;
  }

  // Check if text field is not empty, if yes then Sanitize Post Body and assign to a variable
  if (!empty($_POST['posted_by'])) {
    $posted_by = sanitize($_POST['posted_by']);
  } else {
    $error = true;
    $posted_by_err = 1;
  }

// Get image and carry out all neccessary validations
  if ($_FILES['image']['error'] == 0) {
    $img_size = $_FILES['image']['size'];
    $img_name = $_FILES['image']['name'];
    $tmp_path = $_FILES['image']['tmp_name'];
    $img_type = $_FILES['image']['type'];
// Restrict file size upload to less than 3MB
    if ($img_size > 4048576) {
      $error = true;
      $img_size_err = 1;
    }
// Restrict user from uploading any file other than an image
    $extensions = array('jpg', 'jpeg', 'gif', 'png');
    $img_ext = explode('/', $img_type);
    $img_ext = end($img_ext);
    $img_ext = strtolower($img_ext);

    if (in_array($img_ext, $extensions) != true) {
      $error = true;
      $img_type_err = 1;
    }

  }

// If error is false insert post into the database
  if ($error === false) {
    $post_date = $_POST['post_date'];
    $image_path = 'img-uploads/' . basename($img_name);
    $sql_stmt = "INSERT INTO posts (post_title, post_body_1, post_body_2, post_body_3, post_link, post_date, image_path, num_comm, cat_id, posted_by) VALUES ('$post_title', '$post_body_1', '$post_body_2', '$post_body_3', '$post_link', '$post_date', '$image_path', 0, '$cat_id', '$posted_by')";
    $query = mysqli_query($link, $sql_stmt);
    if ($query) {
      $move_img_to_dir = move_uploaded_file($tmp_path, $image_path);
      if ($move_img_to_dir) {
        echo "<script>alert('New content inserted successfully')</script>";
      } else {
        echo "<script>alert('Unsuccessfull, Try again')</script>";
      }
      

    }
  }
}
 ?>					
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
								<h4 style="text-align: center; font-weight: bold;">ADD NEW CONTENT</h4>
								</div>
			
	
		<div class="panel-body no-padding">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

			<div class="form-group col-md-7">
              <center><label>Title</label></center>
              <input type="text" class="form-control" placeholder="Enter title of content..." name="post_title"><br>

              <center><label>Introductory Paragraph(Brief Review)</label></center>
              <textarea class="form-control" rows="2" name="post_body_1"></textarea><br>

              <center><label>Last Paragraph(Brief Review)</label></center>
              <textarea class="form-control" rows="2" name="post_body_3"></textarea><br>

              <center><label><span style="color: red; font-weight: bold;">Upload Content Image (Max 2MB)</span></label>
              <input type="file" required="true" id="image" name="image"><img src="" id="preview" style="border: 1px solid #ddd; box-shadow: 2px 1px 1px #000; border-radius: 2px;" alt="No File Chosen" width="120" height="120"></center><br>

                <center><label>Posted By</label></center>
              <input type="text" class="form-control" name="posted_by"><br>
            </div>

            <div class="form-group col-md-5">

              <center><label>Main-Body Paragraph(Brief Review)</label></center>
              <textarea class="form-control" rows="12" name="post_body_2"></textarea><br>

               <center><label>Select Category</label></center>

              <select class="form-control" name="cat_id">
                <option value="0">Select Category</option>
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
              <input type="text" placeholder="Paste link here..." class="form-control" name="post_link"><br>
              <input type="hidden" value="<?php echo time(); ?>" name="post_date">

              <button type="submit" class="btn btn-primary" name="submit">Upload</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>

             

		</form>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php require 'includes/footer.php'; ?>

