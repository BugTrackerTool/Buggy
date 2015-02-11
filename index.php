<!DOCTYPE html>
<html>
<head>
   <title>Buggy</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width">
   <link href="css/scrolling-nav.css" rel="stylesheet">
   <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="shortcut icon" href="images/logo 1.jpg" type="image/x-icon" />
  
   <script type='text/javascript' src='js/resizable-tables.js'></script>
   <script src="js/jquery-1.9.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.easing.min.js"></script>
   <script src="js/scrolling-nav.js"></script>
   <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
        <div class="container">
            <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand page-scroll" href="#page-top" id="s"><img style="margin-top:-10px;" class="logo" src="images/logo 1.jpg"></a>
                <a class="navbar-brand page-scroll" href="#page-top">BUGGY</a>
            </div><br><br>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="wrapper">
 <div class="container2" align="center">
<div class="formbox">
<?php
session_start();

include("dbconnect.php");
$db_found = mysql_select_db('bug');
?>
	<form class="cd-form" action="logme.php" method="post">
		<p class="fieldset">
		<label class="image-replace cd-email" for="signin-email" >E-mail</label>
		<input class="full-width has-padding has-border" id="signin-email" type="text" placeholder="User Name" name='uname'>
		<span class="cd-error-message">Error message here!</span>
		</p>

		<p class="fieldset">
		<label class="image-replace cd-password" for="signin-password">Password</label>
		<input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="Password" name='upass'>
		<span class="cd-error-message">Error message here!</span>
		</p>

		<p class="fieldset">
		<input type="checkbox" id="remember-me">
		<label for="remember-me">Remember me</label>
		</p>

		<p class="fieldset">
		<input class="full-width" type="submit" value="Login">
		</p>
	</form>	
    <p><a href="#0">Forgot your password?</a></p>
	</div>
  
  </div>
</div>
</body>
</html>