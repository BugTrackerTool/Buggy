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
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
   <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="shortcut icon" href="images/logo 1.jpg" type="image/x-icon" />
  
   <script type='text/javascript' src='js/resizable-tables.js'></script>
   <script src="js/jquery-1.9.1.min.js"></script>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
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
        <script>
    		(function($){
        		$(window).load(function(){
            	$(".content").mCustomScrollbar();
        		});
    		})(jQuery);
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

<script>
for(var i = 0; i <=8; i++)
{
$("#mylist").append($('<li>').append($('<a>').attr('href','#').append("New Bug ").append(i+1)));
}
x=$("#mylist li").length;
$('.data-notifications').text(x);
 
</script>



<div class="wrapper">
<div class="container2" align="center">

<div class="projects-pane mCustomScrollbar" data-mcs-theme="minimal-dark">
<h2 align="left">Projects</h2>
<div class="project-bar">
<a href="#">Vembu BDR<br><span class="project-details">Total Issues : 100, Solved : 47, Critical : 11 </span></a>

</div>
<div class="project-bar" id="style-3">
<a href="#">Vembu Online Backup<br><span class="project-details">Total Issues : 100, Solved : 47, Critical : 11 </span></a>
</div>
<div class="project-bar">
<a href="#">Vembu FileShare<br><span class="project-details">Total Issues : 100, Solved : 47, Critical : 11 </span></a>
</div>
<div class="project-bar">
<a href="#">Vembu CRM<br><span class="project-details">Total Issues : 100, Solved : 47, Critical : 11 </span></a>
</div>
<div class="project-bar">
<a href="#">Vembu CRM<br><span class="project-details">Total Issues : 100, Solved : 47, Critical : 11 </span></a>
</div>
<div class="project-bar">
<a href="#">Vembu Note</a>
</div><br>
</div>
</div>
</div>
</body>
</html>