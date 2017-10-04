

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

		<title>Bookings</title>
		<script type="text/javascript">
			function checkDate()
		    {
			    var dateString = document.bookingform.date.value;
			    var myDate = new Date(dateString);
			    var today = new Date();
			    today.setDate(today.getDate()-1);
		         if (document.bookingform.date.value == "")
		          { 
		          //something is wrong
		          alert('Please enter date in field!')
		          return false;
		          }
		          else if (myDate<today)
		          { 
		          //something else is wrong
		            alert('You cannot enter a date in the past!')
		            return false;
		          }
		          // if script gets this far through all of your fields
		          // without problems, it's ok and you can submit the form
		          return true;
		    }

		    function checkTime()
		    {
			    var start_time = document.bookingform.start_time.value;
			    var end_time = document.bookingform.end_time.value;
			    var currentTime = new Date();

			    var d = new Date();
				var m = d.getMinutes();
				var h = d.getHours();
				if(h == '0') {h = 24}
				  
				var currentTime = h+"."+m;
				console.log(currentTime);
				 
				  // get input time
				var time = start_time.split(":");
				var hour = time[0];
				if(hour == '00') {hour = 24}
				var min = time[1];
				  
				var inputTime = hour+"."+min;
				console.log(inputTime);
				  
				var totalTime = inputTime - currentTime;
				console.log(totalTime);
			    
			    //alert(totalTime);
			    //alert(currentTime.getTime());
		         if (document.bookingform.start_time.value == "" || document.bookingform.end_time.value == "")
		          { 
			          //something is wrong
			          alert('Please enter Start Time/End Time in field!')
			          return false;
		          }
		          else if (start_time >= end_time)
		          { 
		          //something else is wrong
		            alert('Please enter valid Start Time and End Time, Start Time should be smaller than End Time')
		            return false;
		          }
		          else if (totalTime < 1)
		          {
		          	alert('Booking can only be done 1 hour prior to Start Time!')
		          	return false;
		          }
		          // if script gets this far through all of your fields
		          // without problems, it's ok and you can submit the form
		          return true;
		    }
		</script>
	</head>
	<body>
	<div class="container"	>
		<div class="col-md-12">
		<div class="row" style="height:120px;background-color: #212F3C;padding-top: 18px;">
			<div class="col-md-4 col-sm-5"	> <img src="1.png" alt="Responsive image" style="margin-top:10px;" >
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
		    			<a href="#" class="navbar-brand"><?php echo $uname;?></a>
		    					   			</div>
					<div class="collapse navbar-collapse" id="mainNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="list_of_halls.php" style="color:#85C1E9">Home</a></li>
						<li><a href="#" style="color:#85C1E9;">Gallery</a></li>
						<li><a href="#" style="color:#85C1E9">About us</a></li>
						<li><a href="change_password.php" style="color:#85C1E9">Change Password</a></li>
						<li><a href="logout.php" style="color:#85C1E9">Log Out</a></li>
						<!--<span class="glyphicon glyphicon-off"></span>-->
					</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
  				<div class="col-lg-5 col-lg-offset-0 col-md-2 col-sm-2 col-xs-2">
				<iframe src="https://calendar.google.com/calendar/embed?src=<?php echo $calendar_id; ?>%40group.calendar.google.com&ctz=Asia/Calcutta" style="border: 0;padding-top: 30px" width="500" height="550" frameborder="0" scrolling="no"></iframe>
				</div>
				<div id="loginbox" style="margin-top:50px;" class="mainbox col-lg-6	 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">        	<div class="panel panel-info" >
                    	<div class="panel-heading" style="background-color: #212F3C;color: #85C1E9;text-align: center;height: 50px;font-size: 100px">
                        	<div class="panel-title" style="font-size: 21px;">Booking Form
                        	</div>
                    	</div>     
                    <div style="padding-top:30px" class="panel-body">
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="send_booking_request.php" name="bookingform">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="first_name" value="" placeholder="Enter your First Name" required>
                                </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="last_name" value="" placeholder="Enter your Last Name" required>
                                </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="login-password" type="Email" class="form-control" name="email" placeholder="Enter your Email" required>
                                </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input type="Date" class="form-control" name="date" placeholder="Enter Date" required>
                            </div>
                            <div class="row">
								<div class="col-lg-6 col-sm-6" >
	  							<label>Start time</label>
	                                <div style="margin-bottom: 25px; width:10px;" class="input-group">
	                                    <span class="input-group-addon"><i class="  glyphicon glyphicon-time"></i></span>
	                                    <input type="time" class="form-control" name="start_time" placeholder="" required>
	                                </div>
	                                </div>
	  							<div class="col-lg-6 col-sm-6">
	                        		<label>End time</label>
	                            	<div style="margin-bottom: 25px; width:10px;" class="input-group">
	                                <span class="input-group-addon"><i class="  glyphicon glyphicon-time"></i></span>
	                                <input type="time" class="form-control" name="end_time" placeholder="" required>   
	                           	 	</div>
	                        	</div>
                    		</div>
                    		<div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input id="login-password" type="comment" class="form-control" name="reason" placeholder="Reason for Booking" required>
                                </div>
                                   
                                    
                                    <!--CAPTCHA-->
                          	<div class="row">
                                <div class="col-sm-12 col-lg-1 col-lg-offset-2">
                                	<div style="margin-top:10px" class="form-group">
                                    	<!-- Button -->
                                    	<input type="submit" name="submit" class="btn btn-success" value="Send Request" style="background-color: #212F3C;color: #85C1E9;width: 150px;" onclick="return checkDate() && checkTime()">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-lg-4 col-lg-offset-3">
                                	<div style="margin-top:10px" class="form-group">
                                    	<!-- Button -->
                                    	
                                    	<input type="reset" class="btn btn-success" name="submit" value="Reset" style="background-color: #212F3C;color: #85C1E9;width: 150px;">
                                    	
                                    </div>
                                </div>
                                </div>
                            </form>     
                        </div>                     
                    </div>  
				</div>
		    </div>
   		</div>		  
   		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>