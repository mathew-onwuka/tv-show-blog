<?php 
// ob_start();
// session_start();


if (isset($_GET['post_title']) && isset($_GET['post_id'])) {
  $post_id = htmlentities($_GET['post_id']);
  $post_title = htmlentities($_GET['post_title']);
}else{
  header("Location: index.php");
}

require 'dashboard/functions.inc.php';
require 'dashboard/db.inc.php';
$post_id = intval($post_id);


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
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>View Content | Onyeka Nwelue TV</title>
      <meta name="description" content="Onyeka Nwelue television is a site owned by popular Nigerian author/writer/film maker/lecturer Onyeka Nwelue.">
    <meta name="keywords" content="Onyeka Nwelue, Onyeka, Nwelue, film maker, writer, author">
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <!-- CUSTOM STYLE -->       
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/template-style.css">
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>          
      <!--[if lt IE 9]> 
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
      <![endif]-->     
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->          
      <header class="margin-bottom">
         <div class="line">
            <nav>
               <div class="top-nav">
                  <p class="nav-text"></p>
                  <a class="logo" href="index.php">            
                 ONYEKA NWELUE <span>TV</span>
                  </a>            
                  <h1 style="font-style: italic;">Celebrity Interviews, Discussions, Researches & Articles</h1>
                  <ul class="top-ul right">
                     <li>            
                        <a href="index.php">Back To Home</a>            
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
      <!-- MAIN SECTION -->                  
      <section id="article-section" class="line">
         <div class="margin">
            <!-- ARTICLES -->             
            <div class="s-12 l-9">
               <!-- ARTICLE 1 -->               
               <article class="margin-bottom">
                  <!-- text -->                 
                  <div class="post-text">
                     <h2><?php echo $post_title; ?></h2>
                     <p>Date: <?php echo $post_date; ?> | Posted by <?php echo $posted_by; ?></p>
                     <img src="dashboard/<?php echo $image_path; ?>" style="width: 800px; height: 520px; box-shadow: 2px 2px 2px #000;  margin: 0 auto;" alt="Fashion">
                     <p style="padding-top: 20px; text-align: justify-all;">
                        <?php echo $post_body_1; ?>
                     </p>
                     <p style="padding-top: 20px; text-align: justify-all;">
                        <?php echo $post_body_2; ?>
                     </p>
                     <p style="padding-top: 20px; text-align: justify-all; margin-bottom: 20px;">
                        <?php echo $post_body_3; ?>
                     </p>
                     <br>
                     <center><span style="color: #000; font-weight: bold;">Click Here: </span><a href="<?php echo $post_link; ?>" target="_blank"><span style="border: 2px solid #000;  padding: 14px; font-weight: bold; border-radius: 2px; box-shadow: 2px 2px 2px #000;">External Link</span></a></center>
                  </div>
                   <hr>
               </article>
            </div>

            <!-- SIDEBAR -->             
            <div class="s-12 l-3">
               <aside>
                  <!-- LATEST POSTS -->
                  <div class="aside-block margin-bottom">
                     <h3 style="text-align: center;">Latest posts</h3>
                     <?php 
         $sql = "SELECT * FROM posts ORDER BY post_date DESC LIMIT 10";
         $result = mysqli_query($link, $sql);
          ?>
          <?php while ($rows = mysqli_fetch_array($result)) {
         $post_title = $rows['post_title'];
         $post_id = $rows['post_id'];
         $post_id = intval($rows['post_id']);
       ?>
       <a href="view_page.php?post_id=<?php echo urldecode($post_id) . '&post_title=' . urldecode($post_title); ?>"> 
                     <p class="latest-posts">
                        <h5 style="text-transform: uppercase; text-align: center; border-radius: 5px; margin-bottom:5px; padding-bottom: 5px; box-shadow: 2px 1px 1px #000; border-bottom: 1px solid #000;"><?php echo $post_title; ?></h5>
                     </p>
                    </a>
                    <?php } ?>
                  </div>
                  <!-- AD REGION --> 
                 <!--  <div class="advertising margin-bottom">
                     <img src="img/banner.jpg" alt="ad banner">         
                  </div> -->
               </aside>
            </div>
         </div>
  <div class="s-12 l-10">
    <center><div class="comment">
      <form action="add_comment.php" method="post">
         <h4 style="color: #000; font-size: 20px; text-align: center;">Leave a comment:</h4>
          <input type="text" placeholder="Enter your fullname..." name="fullname" required>
          <input type="email" placeholder="Enter your email address..." name="email" required>
          <textarea name="comment" required placeholder="Enter your comment here..."></textarea>
          <input type="hidden" name="comm_date" value=" <?php echo time(); ?>">
          <input type="hidden" name="post_id" value=" <?php echo $post_id; ?>">
          <input type="hidden" name="post_title" value=" <?php echo $post_title; ?>">
          <input type="submit" value="SUBMIT" name="submit" style="width: 100px;">
      
        </form>
    </div></center>
        <h4 style="text-align: center;">View comments below:</h4>

        <?php 
  $sql_stmt = "SELECT * FROM comments WHERE post_id = '$post_id'";
  $query2 = mysqli_query($link, $sql_stmt);
  if (mysqli_num_rows($query2) > 0) {
    while ($row = mysqli_fetch_array($query2)) {
      $fullname = $row['fullname'];
      $comm_date = date("F jS Y", $row['comm_date']);
      $comment = nl2br($row['comment']);
    
   ?>
    <div class="view-comm">
      
          <p class="c-details" style="border-radius: 5px; color: #000;">Fullname: <?php echo $fullname; ?></p>
          <p class="c-details" style="border-radius: 5px; color: #000;">Date: <?php echo $comm_date; ?></p>
          <p class="comm" style="border-radius: 5px; color: #000;"><?php echo $comment; ?></p>
    </div>
    <?php } } ?>
   </div>
      </section>


      <!-- FOOTER -->       
      <div class="line">
         <footer style="font-weight: bold; font-family: 'Raleway';  background: #222222; box-shadow: 4px 2px 2px #000;">
            <div class="s-12 l-8">
               <p>
                  Copyright 2018 &copy; Onyeka Nwelue Tv<br>
               </p>
            </div>
            <div class="s-12 l-4"><p>                              
               Designed by Mathew.Onwuka@Gmail.com</p>                         
            </div>
         </footer>
      </div>
   </body>
</html>