<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Website CSS style -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="reg.css">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
	
        <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
        <link href="footer.css" rel="stylesheet">
        <style type="text/css">
		a:link {
    color:#85C1E9 ;
}
		a:hover { 
    	color:#E67E22  ;
}
  .navbar {
    margin-bottom: 0;
    background-color:black;
    border: 0;
    font-size: 14px !important;
    letter-spacing: 3px;
    opacity:0.9;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #85C1E9 !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
    background-color: red !important;
}</style>
		<title>Login Page</title>
	</head>
	<body>
	<div class="container-fluid">
		<div class="col-md-14">
            <div class="row" style="height:140px;background-color:#212F3C ;padding-top: 18px;">
                <!--#212F3C-->
                <div class="col-md-4 col-sm-5">
                <a href="login_user.php">
                    <img src="1.png" alt="Responsive image" style="margin-top:15px;">
                </a>
                    <h5 style="color: #979A9A">Accredited with Grade A by NAAC and KCG</h5>
                </div>
                <div class="col-md-8 hidden-sm hidden-xs">
                    <h2 style="color:#99A3A4;padding-left: 30px;padding-top:18px;"><b>Seminar Hall Booking System</b></h2>
                </div>
            </div>
	
		<div class="row">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container-fluid">
					<div class="navbar-header">
	      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      	</button>
		    			<!--<a href="#" class="navbar-brand">Topcoders</a>-->
		   			</div>
					<div class="collapse navbar-collapse" id="mainNavbar">
					<ul class="nav navbar-nav navbar-right">
						<!--<li class="active"><a href="#" style="color:#76D7C4  ">Home</a></li>-->
						<li><a href="#" style="color:#85C1E9;">Gallery</a></li>
						<li><a href="#" style="color:#85C1E9">About us</a></li>
						<li><a href="#" style="color:#85C1E9">Contact us</a></li>
						<!--<li><a href="#" style="color:#85C1E9">Log Out
						<span class="glyphicon glyphicon-off"></span></a></li>-->
					</ul>
					</div>
				</div>
			</nav>
		</div>
		
	
    <div class="row">
                   <footer class="footerright">
                       <div class="col-md-2 col-sm-6 col-lg-4" style="color:#85C1E9;">
                           <div class="logofooter"><img src="ft-logo (1).png"></div>
                           <p><i class="fa fa-map-pin"></i>&nbsp;&nbsp;&nbsp;TopCoders , Silicon Valley</p>
                           <p><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Phone (India) : +919925200129</p>
                           <p><i class= "fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;E-mail : seminarhallbs@gmail.com</p>
                       </div>
                       <form id="loginform" class="form-horizontal" role="form" method="POST" action="feedback.php">
                                    
                      
                               <div class="col-sm-6 col-lg-3  form-group" style="padding-left:10px;margin-left:0px;padding-top:50px;">
                                   <label style="color:#85C1E9">Feedback Form</label>
                                
                                   <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                   <br />
                              
                                   
                                   <textarea class="form-control" id="comments" name="comments" placeholder="Feedback" rows="5"></textarea>

                                  <br />
                                   <center>
                                       <input type="button" name="submit" class="btn" value="Send Feedbaxk" style="background-color: #212F3C;color: #85C1E9;width:250px;">
                                   </center>
                                   

                              
                           </div>
                           </form>
                           
                       <div class="col-md-4 col-sm-6 col-lg-2" style="margin-left:250px;padding-top:50px;color:#85C1E9 ">
                           <h6 class="heading7">GENERAL LINKS</h6>
                           <ul class="footer-ul" >
                               <li><a href="#"> Contact Us</a></li>
                               <li><a href="#"> Privacy Policy</a></li>
                               <li><a href="#"> Terms & Conditions</a></li>
                               <li><a href="#"> Client Gateway</a></li>
                               <li><a href="#"> Ranking</a></li>
                               <li><a href="#"> Case Studies</a></li>
                               <li><a href="#"> Frequently Ask Questions</a></li>
                           </ul>
                       </div>
                   </footer>
                </div>
                </div>

          </body>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

    <?php
    if(isset($_COOKIE["email"]) and isset($_COOKIE["pass"]))
    {
        $email = $_COOKIE["email"];
        $pass = $_COOKIE["pass"];
        //header("location: validate.php");
        /*document.getElementById('email').value = '$email';
        document.getElementById('pass').value = '$pass';*/

        echo "<script>
            document.getElementById('email').value = '$email';
            document.getElementById('password').value = '$pass'
        </script>";

    }
//document.getElementById('email').value = '$email';
//document.getElementById('pass').value = '$pass';
    
?>
	</body>
	</html>