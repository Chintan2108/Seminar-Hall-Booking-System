<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="reg.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<style type="text/css">
		a:link {
    color:#85C1E9 ;
}
		a:hover { 
    	color:#E67E22  ;
}</style>
		<title>Password Recovery</title>
	</head>
	<body>
	<div class="container"	>
		<div class="col-md-12">
		<div class="row" style="height:120px;background-color: #212F3C;padding-top: 18px;">
			<div class="col-md-4 col-sm-5"	> <a href="login_user.php">
                    <img src="1.png" alt="Responsive image" style="margin-top:15px;">
                    </a>
  				<h5 style="color: #979A9A">Accredited with Grade A by NAAC and KCG</h5>
  			</div>
			<div class="col-md-8 hidden-sm hidden-xs"><h2 style="color:#99A3A4;padding-left: 30px;"><b>Seminar Hall Booking System</b></h2>
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
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #212F3C;color: #85C1E9;text-align: center;height: 50px;font-size: 100px">
                        <div class="panel-title" style="font-size: 21px;">Password Recovery</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="forget_password_mail_send.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="login-username" type="Email" class="form-control" name="email" value="" placeholder="Enter Your Registered Email">
                                    </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                      <center>
                                      <input type="submit" name="login" value="Submit" min="1" class="btn btn-success" style="background-color: #212F3C;color: #85C1E9;width: 160px">
                                      </center>
                                    </div>
                                </div>
                            </form>     
                        </div>                     
                    </div>  
        </div>
		</div>
	</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
			</body>
			</html>

	

