<?php 
require 'dashboard/functions.inc.php';
require 'dashboard/db.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Onyeka Nwelue TV</title>
    <meta name="description" content="Onyeka Nwelue Television is owned by popular Nigerian author/writer/film maker/lecturer Onyeka Nwelue.">
    <meta name="keywords" content="Onyeka Nwelue, Onyeka, Nwelue, film maker, writer, author">
    <meta name="author" content="Mathew.Onwuka@gmail.com">
    
    <!-- Favicons
    ================================================== -->
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
 -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="tf-home">
        <div class="overlay">
            <div id="sticky-anchor"></div>
            <nav id="tf-menu" class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo" href="index.html"><!-- Awesomeness --></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#tf-home">Home</a></li>
                        <li><a href="#tf-portfolio">View Content</a></li>
                        <li><a href="#tf-about">About</a></li>
                        <li><a href="#tf-contact">Contact</a></li>
                        <li id="sub-menu"><a href="archive.html">Search Archives</a>
                            <ul id="menu" style="display: none; list-style: none; font-size: 12px; font-family: arial; background-color: rgba(000, 000, 000, 0.5); padding-top: -10px; margin-top: -10px; font-weight: bold; border-radius: 5px; box-shadow: 4px 4px 2px #000; text-shadow: 4px 2px 2px #000;"> 
                                <li><a href="archive_interview.php">INTERVIEWS</a></li>
                                <li><a href="archive_discuss.php">DISCUSSIONS</a></li>
                                <li><a href="archive_art.php">ARTICLES & RESEARCHES</a></li>
                            </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="container">
                <div class="content">
                    <center><p>Welcome</p></center>
                    <center><p>To</p></center>
                    <h1>ONYEKA NWELUE TV</h1>
                    <h3>Celebrity Interviews, Discussions, Researches & Articles</h3>
                    <br>
                    <a href="#tf-contact" class="btn btn-primary my-btn2">Contact</a>
                    <a href="#tf-portfolio" class="btn btn-primary my-btn">View Content</a>
                </div>
            </div>
        </div> 
    </div>

    <div id="tf-service">
        <div class="container">

            <div class="col-md-4">

                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-video-camera"></i>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Interviews</h4>
                    <p>Interviews with top elites in politics, education, entertainment and African history/heritage.</p>
                  </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-info"></i>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Discussions</h4>
                    <p>Discussions/debates on the different opportunities and challenges being faced in Africa.</p>
                  </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-file-text-o"></i>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Articles & Researches</h4>
                    <p>Articles, researches, observations and studies on different issues.</p>
                  </div>
                </div>

            </div>
            
        </div>
    </div>

    <div id="tf-portfolio">
        <div class="container">
            <div class="section-title">
                <h3>Contents</h3>
                <hr>
            </div>

    <div class="space"></div>
            <div class="row"> 
                <center><h3 style="margin-bottom: 20px;">Interviews</h3></center>
            <?php 
            $sql = "SELECT * FROM posts WHERE cat_id = 1 ORDER BY post_date DESC LIMIT 3";
            $result = mysqli_query($link, $sql);
             ?>
             <?php while ($rows = mysqli_fetch_array($result)) {
            $post_title = $rows['post_title'];
            $post_id = intval($rows['post_id']);
            $image_path = $rows['image_path'];
             ?>
             <a href="view_page.php?post_id=<?php echo urldecode($post_id) . '&post_title=' . urldecode($post_title); ?>">

                <div class="col-md-4">
                    <img src="dashboard/<?php echo $image_path; ?>" class="img-responsive" style="width: 330px; height: 250px; box-shadow: 2px 2px 2px #000;">
                    <h4><?php echo $post_title; ?></h4>
                </div>
                </a>
             <?php } ?>
             
            </div>

            <div class="row"> 
                <center><h3 style="margin-bottom: 20px;">Discussions</h3></center>
            <?php 
            $sql = "SELECT * FROM posts WHERE cat_id = 2 ORDER BY post_date DESC LIMIT 3";
            $result = mysqli_query($link, $sql);
             ?>
             <?php while ($rows = mysqli_fetch_array($result)) {
            $post_title = $rows['post_title'];
            $post_id = $rows['post_id'];
            $post_id = intval($rows['post_id']);
            $image_path = $rows['image_path'];
             ?>
             <a href="view_page.php?post_id=<?php echo urldecode($post_id) . '&post_title=' . urldecode($post_title); ?>">

                <div class="col-md-4">
                    <img src="dashboard/<?php echo $image_path; ?>" class="img-responsive" style="width: 330px; height: 250px; box-shadow: 2px 2px 2px #000;">
                    <h4><?php echo $post_title; ?></h4>
                </div>
                </a>
             <?php } ?>
             
            </div>

            <div class="row"> 
                <center><h3 style="margin-bottom: 20px;">Articles & Researches</h3></center>
            <?php 
            $sql = "SELECT * FROM posts WHERE cat_id = 3 ORDER BY post_date DESC LIMIT 3";
            $result = mysqli_query($link, $sql);
             ?>
             <?php while ($rows = mysqli_fetch_array($result)) {
            $post_title = $rows['post_title'];
            $post_id = $rows['post_id'];
            $post_id = intval($rows['post_id']);
            $image_path = $rows['image_path'];
             ?>
             <a href="view_page.php?post_id=<?php echo urldecode($post_id) . '&post_title=' . urldecode($post_title); ?>">

                <div class="col-md-4">
                    <img src="dashboard/<?php echo $image_path; ?>" class="img-responsive" style="width: 330px; height: 250px; box-shadow: 2px 2px 2px #000;">
                    <h4><?php echo $post_title; ?></h4>
                </div>
                </a>
             <?php } ?>
             
            </div>
        </div>
    </div>

    <div id="tf-about">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <h3>About Onyeka Nwelue</h3>
                        <br>
                        <p>Cras sit amet nibh libero, in gravida nulla. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Cras sit amet nibh libero, in gravida nulla. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <br>
                        <!-- <a href="#tf-why-me" class="btn btn-primary my-btn dark">View Program Schedule </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tf-why-me">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Shows & Schedules</h3>
                        <br>
                        <ul class="list-inline why-me">
                            <li>
                                <h4>Onyeka Nwelue Show on Linda Ikeji Tv</h4>
                                <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            </li>
                            <li>
                                <h4>Onyeka Nwelue Travel Documentaries</h4>
                                <p>Donec lacinia congue felis in faucibus. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            </li>
                            <li>
                                <h4>Onyeka Nwelue Tutorship</h4>
                                <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            </li>
                        </ul>
                        <a href="#tf-contact" class="btn btn-primary my-btn dark">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h3>Contact Me</h3>
                <p>For Enquiries, Sponsorship, Partnership, Feedbacks etc.</p>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    
                    <form id="contact" method="POST" action="send_message.php">
                      <div class="form-group">
                        <input type="text" name="fullname"  class="form-control" placeholder="Enter your name">
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="msg_body" rows="4" placeholder="Enter Message"></textarea>
                      </div>
                      <input type="hidden" value="<?php echo time(); ?>" name="msg_date">
                      <button type="submit"  name="submit" class="btn btn-primary my-btn dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <nav id="tf-footer">
        <div class="container">
             <div class="pull-left">
                <p>2018 © Onyeka Nwelue Tv. All Rights Reserved. Designed by Mathew.Onwuka@Gmail.com</a></p>
            </div>
            <div class="pull-right"> 
                <ul class="social-media list-inline">
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
    <script>
var sub_menu = document.getElementById('sub-menu');
var menu = document.getElementById('menu');
sub_menu.onmouseover=function() {
    menu.style.display= "block";
    menu.style.position = "absolute";
}
menu.onmouseleave=function () {
    this.style.display= "none";
}	
    	
    </script>

  </body>
</html>