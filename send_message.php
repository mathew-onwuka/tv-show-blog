<?php 
require 'dashboard/functions.inc.php';
require 'dashboard/db.inc.php';


if (isset($_POST['submit'])) {
  $error = false;
// Check if text field is not empty, if yes then sanitize the Post Title and assign to a variable
  if (!empty($_POST['fullname'])) {
    $fullname = sanitize($_POST['fullname']);
  } else {
    $error = true;
    $fullname_err = 1;
  }

// Check if text field is not empty, if yes then Sanitize Post Body and assign to a variable
  if (!empty($_POST['msg_body'])) {
    $msg_body = trim(sanitize($_POST['msg_body']));
  } else {
    $error = true;
    $msg_body_err = 1;
  }

  // Check if text field is not empty, if yes then Sanitize Post Body and assign to a variable
  if (!empty($_POST['email'])) {
    $email = sanitize($_POST['email']);
  } else {
    $error = true;
    $email_err = 1;
  }


// If error is false insert post into the database
  if ($error === false) {
    $msg_date = $_POST['msg_date'];
    $sql_stmt = "INSERT INTO messages (fullname, email, msg_body, msg_date) VALUES ('$fullname', '$email', '$msg_body', '$msg_date')";
    $query = mysqli_query($link, $sql_stmt);
    if ($query) {
     echo "<script>alert('Message Sent Successfully')</script>"; 
   } else{
      echo "<script>alert('Unsuccessfull, Try again')</script>";
      mysql_error();
   }
      
  }
}
 ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Onyeka Nwelue TV</title>
      </title>
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
            <div class="s-12 l-12">
               <!-- ARTICLE 1 -->               
               <article class="margin-bottom">
                  <!-- text -->                 
                  <div class="post-text" style="text-align: center;">
                     <h2>FEEDBACKS & ENQUIRIES</h2>
                     <center><p style="color: red;">Click on 'Proceed' below to continue.</p></center>
                  <h3 style="text-align: center; font-weight: bold; padding: 50px; border: 3px solid skyblue;"><a href="index.php">PROCEED</a></h3>

                  </div>
               </article>
            </div>
            <!-- SIDEBAR -->             
            
         </div>
   </div>
      </section>


      <!-- FOOTER -->       
      <div class="line">
         <footer style="font-weight: bold; font-family: 'Raleway'; margin-top: 100px;  background: #222222; box-shadow: 4px 2px 2px #000;">
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