<?php
// ob_start();
// session_start(); 
// require 'functions.inc.php';
// require 'db.inc.php';

?>
<?php 
// if (isset($_POST['submit'])) {
//     $err = false;
//     if (!empty($_POST['email'])) {
//         $email = sanitize($_POST['email']);
//     } else {
//         $msg1 = 1;
//         $err = true;
//     }

//     if (!empty($_POST['password'])) {
//         $password = sanitize($_POST['password']);
//         $password = sha1($password);
//     } else {
//         $msg2 = 1;
//         $err = true;
//     }
    
//     if ($err == false) {
//         $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
//         $query = mysqli_query($link, $sql);
//         $row = mysqli_fetch_array($query);
//         if (mysqli_num_rows($query) > 0) {
//             $_SESSION['email'] = $email;
//             $_SESSION['password'] = $password;
//             $_SESSION['admin_id'] = $row['admin_id'];
//             header("Location: account.php");
//         } else {
//             $msg3 = 1;
//         }
//     }

// }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <style>
		body
			{
				background-image: url(asset/img/backgrounds/1.jpg);
			}
		</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Admin Login </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="asset/css/form-elements.css">
        <link rel="stylesheet" href="asset/css/style.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="asset/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="asset/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="asset/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="asset/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="asset/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
							<center> <h1><strong> Onyeka Nwelue TV </strong> </h1> </center>
                           <center> <h2 style="color: white">ADMINSTRATOR</h2> </center>
                            <div class="description">
                            	 <a href="../index.php">CLICK HERE TO EXIT <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to your Admin Panel</h3>
                            		<p>Enter email and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username"> Email </label>
			                        	<input type="text" name="email" placeholder="Email..." class="form-username form-control" id="form-username" <?php if (isset($msg1) && ($msg1 == 1)) {
                        echo 'style = "border:2px solid red;"';
                    } ?> value="<?php if(isset($email)): echo $email; ?>
                        
                    <?php endif ?>">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password"> Password </label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password" <?php if (isset($msg1)) {
                        echo 'style = border:2px solid red';
                    } ?>>
			                        </div>
			                        <button type="submit" name="submit" value="submit" class="btn">Sign in!</button>
                    <?php if (isset($msg3)) {
                        echo '<div style="color:red; font-size:17px;">Incorrect login details</div>';
                         } 
                    ?>
			                    </form>
		                    </div>
                        </div>
                    </div>  
                </div>
            </div> 
            <p> Copyright © 2018 - All Rights Reserved - <a href="#"> Onyeka Nwelue TV </a> </p>
        </div>
        <!-- Javascript -->
        <script src="asset/js/jquery-1.11.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/js/jquery.backstretch.min.js"></script>
        <script src="asset/js/scripts.js"></script>
        <!--[if lt IE 10]>
            <script src="asset/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
