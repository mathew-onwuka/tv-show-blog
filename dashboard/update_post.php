<?php 
// ob_start();
// session_start();

$page_title = 'Post Update | Onyeka Nwelue TV';
require("includes/header.php");
require 'functions.inc.php';
require 'db.inc.php';

// if (isset($_SESSION['user_id'])) {
//     $user_id = $_SESSION['user_id'];
//     $email =  $_SESSION['email'];
// } else {
//     header("Location:index.php");
// }


if (isset($_POST['submit'])) {
  $post_id = intval($_POST['post_id']);
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


// If error is false insert post into the database
  if ($error === false) {
    // $image_path = '../img-uploads/' . basename($img_name);
    $sql_stmt = "UPDATE posts SET post_title = '$post_title', post_body_1 = '$post_body_1', post_body_2 = '$post_body_2', post_body_3 = '$post_body_3', post_link = '$post_link',  cat_id = '$cat_id', posted_by = '$posted_by' WHERE post_id = '$post_id'";
    $query = mysqli_query($link, $sql_stmt);
    if ($query) {
        echo "<script>alert('Content Updated Successfully')</script>";
      } else {
        echo "<script>alert('Unsuccessfull, Try again')</script>";
      }
  }
}

 ?>	
  <div class="row">
            <div class="col-md-12">
              <!-- RECENT PURCHASES -->
              <div class="panel">
                <div class="panel-heading">
                  <center><p style="color: red;">Click on 'Proceed Button' below to continue.</p></center>
                  <h4 style="text-align: center; font-weight: bold; padding: 10px; border: 2px solid skyblue;"><a href="all_contents.php">PROCEED</a></h4>
                </div>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
<?php require 'includes/footer.php'; ?>