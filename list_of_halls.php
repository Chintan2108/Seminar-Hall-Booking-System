<?php
  session_start();
  if(!isset($_SESSION["login"]))
    header("location: login_user.php");
  $uname = $_SESSION['email'];
?>

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
		<title>Home Page</title>
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
          </div>
		   			
					<div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#" style="color:#85C1E9;"><?php echo $uname;?></a></li>
          </ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="fhome.php" style="color:#979A9A">Home</a></li>
						<li><a href="#" style="color:#85C1E9;">Gallery</a></li>
						<li><a href="#" style="color:#85C1E9">About us</a></li>
						<li><a href="change_password.php" style="color:#85C1E9">Change Password</a></li>
						<li><a href="logout.php" style="color:#85C1E9">Log Out
					</a></li>
					</ul>
          
          </div>
				</div>
			</nav>
		</div>
		<div class="row">
        <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color: #212F3C;color: #85C1E9;text-align: center;height: 50px;font-size: 100px">
                        <div class="panel-title" style="font-size: 21px;">List of Seminar Halls</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
		<table class="table table-striped" border="2px" style="color:grey;">
        <thead>
    <tr>
      <th><center>
      No.</center></th>
      <th><center>Seminar Hall</center></th>
      <th><center>Booking 
      Capacity</center></th>
      <th><center>Book</center></th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">1</th>
        <td>CE</td>
        <td>150</td>
        <td>
            <div style="margin-top:10px" class="form-group">
                <center><a id="" href="bookings.php?calendar_id=rns6b1051jp6fhmh0ank9ootj4" class="btn btn-success" style="background-color:#212F3C;color: #85C1E9;width: 70px;">
                    Book</a>
                </center>
            </div>
        </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>EC</td>
      <td>70</td>
      <td><div style="margin-top:10px" class="form-group">
                <center><a id="" href="bookings.php?calendar_id=kmhv5ab6lrefl43bjodli4lg30" class="btn btn-success" style="background-color:#212F3C;color: #85C1E9;width: 70px;">
                    Book</a>
                </center>
            </div></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>MCA</td>
      <td>350</td>
      <td><div style="margin-top:10px" class="form-group">
                <center><a id="btn-login" href="bookings.php" class="btn btn-success" style="background-color:#212F3C;color: #85C1E9;width: 70px;">
                    Book</a>
                </center>
            </div></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>EC</td>
      <td>70</td>
      <td><div style="margin-top:10px" class="form-group">
                <center><a id="btn-login" href="bookings.php" class="btn btn-success" style="background-color:#212F3C;color: #85C1E9;width: 70px;">
                    Book</a>
                </center>
            </div></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>EC</td>
      <td>70</td>
      <td><div style="margin-top:10px" class="form-group">
                <center><a id="btn-login" href="bookings.php" class="btn btn-success" style="background-color:#212F3C;color: #85C1E9;width: 70px;">
                    Book</a>
                </center>
            </div></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>EC</td>
      <td>70</td>
      <td><div style="margin-top:10px" class="form-group">
                <center><a id="btn-login" href="bookings.php" class="btn btn-success" style="background-color:#212F3C;color: #85C1E9;width: 70px;">
                    Book</a>
                </center>
            </div></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>EC</td>
      <td>70</td>
      <td><div style="margin-top:10px" class="form-group">
                <center><a id="btn-login" href="bookings.php" class="btn btn-success" style="background-color:#212F3C;color: #85C1E9;width: 70px;">
                    Book</a>
                </center>
            </div></td>
    </tr>
  </tbody>
</table>
        </div>
        </div>
		</div>
	</div>
    </div>
    </div>


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
			</body>
			</html>

	

