<?php 
// ob_start();
// session_start();

$page_title = ' Post Delete | Onyeka Nwelue TV';
require("includes/header.php");
require 'functions.inc.php';
require 'db.inc.php';


// if (isset($_SESSION['user_id'])) {
//     $user_id = $_SESSION['user_id'];
//     $email =  $_SESSION['email'];
// } else {
//     header("Location:index.php");
// }


if (isset($_POST['submit2'])) {
  $post_id = intval($_POST['post_id']);
  $err_flag = false;
if ($err_flag == false) {
  $sql_delete = "DELETE FROM posts WHERE post_id = '$post_id'";
   $query1 = mysqli_query($link, $sql_delete);
   if ($query1) {
     echo "<script>alert('Content Deleted Successfully')</script>"; 
   } else{
 echo "<script>alert('Unsuccessfull, Try again')</script>";
 mysql_error();
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
