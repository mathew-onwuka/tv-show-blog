<?php 
// ob_start();
// session_start();
require 'dashboard/functions.inc.php';
require 'dashboard/db.inc.php';

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
            <center><h3>Discussions</h3></center>
            <!-- ARTICLES -->
               <?php 
         $sql = "SELECT * FROM posts WHERE cat_id = 2 ORDER BY post_date DESC LIMIT 100";
         $result = mysqli_query($link, $sql);
          ?>
          <?php while ($rows = mysqli_fetch_array($result)) {
         $post_title = $rows['post_title'];
         $post_id = intval($rows['post_id']);
         $image_path = $rows['image_path'];
       ?>
       <a href="view_page.php?post_id=<?php echo urldecode($post_id) . '&post_title=' . urldecode($post_title); ?>">             
            <div class="s-12 l-3">          
               <img src="dashboard/<?php echo $image_path; ?>" style="box-shadow: 2px 2px 2px #000; margin-left: 8px;">          
                  <div class="aside-block margin-bottom">
                     <h4><?php echo $post_title; ?></h4>
                  </div>
            </div>
            </a>
         <?php } ?>
            
         </div>
      </section>
      <!-- FOOTER -->       
      <div class="line">
          <footer style="font-weight: bold; font-family: 'Raleway'; margin-top: 100px; background: #222222; box-shadow: 4px 2px 2px #000;">
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