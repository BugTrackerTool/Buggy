<!DOCTYPE html>
<html>
<head>
   <title>BUGGY!!</title>
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
    
	<script>
		 $(function(){
    		$(".dropdown").hover(            
            	function() {
                	$('.dropdown-menu ', this).stop( true, true ).slideDown(200);
                	$(this).toggleClass('open');         
            				},
            	function() {
                	$('.dropdown-menu', this).stop( true, true ).slideUp(500);
                	$(this).toggleClass('open');
            	});
    	});
		
		</script>
        
        
        

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
    <ul>
				<!-- inser more links here -->
					</ul>
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
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="dropdown">
                        <a class="dropdown-toggle"   data-toggle="dropdown" href="#"><div class="glyphicon glyphicon-asterisk"></div></a>
                        <ul class="dropdown-menu" >
						<li>
						<a href="#">Project Settings</a>
						</li>
                        <li>
						<a href="#">Profile</a>
						</li>

                        </ul>

                    </li>
                    <li class="dropdown">
                <a id="noti" class="dropdown-toggle" data-toggle="dropdown" href="#"><div class="glyphicon glyphicon-bell"><div class="data-notifications">3</div></div></a>
                
                <ul class="dropdown-menu" id="mylist">
						<li>
						<a href="#" >New bug for you!</a>
						</li>
                        <li>
						<a href="#">X has commented on #10002</a>
						</li>
                        </ul>
                </li>
				<li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><div class="glyphicon glyphicon-user"></div></a>
                
                <ul class="dropdown-menu">
						<li>
						<a href="#" >Edit Profile</a>
						</li>
                        <li>
						<a href="#">Logout!</a>
						</li>
                        </ul>
                </li>
		
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>




<div class="wrapper">
<div class="container2">
<div class="profile">
<span class="profile-name">VASANTH RAVISANKAR <span class="user-details">Software Engineer</span><a href="#"  data-toggle="modal" data-target="#Change_User_Name" class="profile-name-edit"><div class="glyphicon glyphicon-edit"></div></a></span>
<div class="modal fade" id="Change_User_Name" tabindex="-1" role="dialog" aria-labelledby="ChangePasswordLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="ChangePasswordLabel">Change User Name</h4>
      </div>
      <div class="modal-body">
       <form class="cd-form" action="" method="post">
		<p class="fieldset">
		<input class="full-width has-padding has-border"  type="text"  placeholder="Enter your new user name" name='newname'>
		<span class="cd-error-message">Error message here!</span>
		</p>

		<p class="fieldset">
		<input class="full-width" type="submit" value="Change User Name">
		</p>
	</form>	
      </div>
      
    </div>
  </div>
  
</div>    

<br><br>

<div class="profile-details-pane">
<div class="profile-pic" align="center">
<div class="profile-pic-box" >
<div class="profile-pic-edit"><a href="#" data-toggle="modal" data-target="#Change_Profile_Pic" ><div class="glyphicon glyphicon-edit"></div></a></div>
<img src="images/placeholder.png">
 </div>

<p style="margin-top:15px; font-weight:bold;">User ID : #10001</p>
 
<button class="btn btn-danger" data-toggle="modal" data-target="#Change_Password" style="margin-top:15px; margin-bottom:10px;">Change Password</button>

 
<div class="modal fade" id="Change_Password" tabindex="-1" role="dialog" aria-labelledby="ChangePasswordLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="ChangePasswordLabel">Change Password</h4>
      </div>
      <div class="modal-body">
       <form class="cd-form" action="" method="post">
		<p class="fieldset">
		<input class="full-width has-padding has-border"  type="password"  placeholder="Old Password" name='oldpass'>
		<span class="cd-error-message">Error message here!</span>
		</p>


		<p class="fieldset">
		<input class="full-width has-padding has-border" type="password"  placeholder="New Password" name='newpass'>
		<span class="cd-error-message">Error message here!</span>
		</p>
        <p class="fieldset">
		<input class="full-width has-padding has-border"  type="password"  placeholder="Confirm Password" name='newpass'>
		<span class="cd-error-message">Error message here!</span>
		</p>

		<p class="fieldset">
		<input class="full-width" type="submit" value="Change Password">
		</p>
	</form>	
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="Change_Profile_Pic" tabindex="-1" role="dialog" aria-labelledby="ChangePasswordLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="ChangePasswordLabel">Change Profile Picture</h4>
      </div>
      <div class="modal-body">
       <form class="cd-form" action="" method="post">
		<p class="fieldset">
		<input class="full-width has-padding has-border"  type="file"   name='new_profile_pic'>
		<span class="cd-error-message">Error message here!</span>
		</p>

		<p class="fieldset">
		<input class="full-width" type="submit" value="Change Profile Picture">
		</p>
	</form>	
      </div>
      
    </div>
  </div>
</div>    

</div>
<div class="profile-details-table" >
<div class="projects-pane mCustomScrollbar" data-mcs-theme="light" style="width:auto; padding:10px;">
<h3>Active Projects</h3>
					<div class="project-bar">
						<a href="#">Vembu BDR
						<br>
						<span class="project-details">Total Issues : 100, Solved : 47, Critical : 11 </span></a>

					</div>
					<div class="project-bar" id="style-3">
						<a href="#">Vembu Online Backup
						<br>
						<span class="project-details">Total Issues : 100, Solved : 47, Critical : 11 </span></a>
					</div>
					<div class="project-bar">
						<a href="#">Vembu FileShare
						<br>
						<span class="project-details">Total Issues : 100, Solved : 47, Critical : 11 </span></a>
					</div>
					<br>
				</div>
                
</br>
<canvas id="canvas" width="400" height="300" style="margin-top:15px;">
This text is displayed if your browser does not support HTML5 Canvas.
</canvas>

        
 
</div>

</div>

</div>

</div>
<script type="text/javascript">

var myColor = ["#ECD078","#D95B43","#C02942","#542437","#53777A","#000"];
var myData = [10,30,20,60,40,80];

function getTotal(){
var myTotal = 0;
for (var j = 0; j < myData.length; j++) {
myTotal += (typeof myData[j] == 'number') ? myData[j] : 0;
}
return myTotal;
}

function plotData() {
var canvas;
var ctx;
var lastend = 0;
var myTotal = getTotal();

canvas = document.getElementById("canvas");
ctx = canvas.getContext("2d");
ctx.clearRect(0, 0, canvas.width, canvas.height);

for (var i = 0; i < myData.length; i++) {
ctx.fillStyle = myColor[i];
ctx.beginPath();
ctx.moveTo(200,150);
ctx.arc(200,150,150,lastend,lastend+
  (Math.PI*2*(myData[i]/myTotal)),false);
ctx.lineTo(200,150);
ctx.fill();
lastend += Math.PI*2*(myData[i]/myTotal);
}
}

plotData();

</script>

</body>
</html>