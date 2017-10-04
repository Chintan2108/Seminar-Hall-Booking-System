<?php
  session_start();
  if(!isset($_SESSION["login"]))
    header("location: login_admin.php");
  $uname = $_SESSION['email'];
?>

<?php

  $conn = mysqli_connect("localhost","root","","shbs");

  $query1 = "SELECT * FROM bookings WHERE confirmation_status = 'pending'";
  $result = $conn->query($query1);

  $n = $result->num_rows;

  while($row = $result->fetch_assoc())
  {
    

    //echo "ihbjuhg";

    $person_name[] = $row['first_name'] . " " . $row['last_name'];
    //$ = $row['last_name'];
    $date[] = $row['date'];
    $from_time[] = $row['time_from'];
    $to_time[] = $row['time_to'];
    $reason[] = $row['reason'];
    $booking_id[] = $row['event_id'];


  }
  
?>


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
    <script type="text/javascript">
      function GenerateTable() {

        var rows = <?php echo json_encode($n); ?>;
        var gotable = document.getElementById("gotable");

        if(rows == 0)
        {
          var h2 = document.createElement('h2');
          h2.setAttribute('align',"center");
          var text = document.createTextNode("No Pending Requests");
          h2.appendChild(text);
          gotable.appendChild(h2);
        }
        else
        {
          var h2 = document.createElement('h2');
          h2.setAttribute('align',"center");
          var text = document.createTextNode("Pending Requests");
          h2.appendChild(text);
          gotable.appendChild(h2);

          var booking_id = <?php echo json_encode($booking_id); ?>;
          var person_name = <?php echo json_encode($person_name); ?>;
          var date = <?php echo json_encode($date); ?>;
          var from_time = <?php echo json_encode($from_time); ?>;
          var to_time = <?php echo json_encode($to_time); ?>;
          var reason = <?php echo json_encode($reason); ?>;
          //document.write("svsdfs");
          var table = document.createElement('table');
          table.border = 3;

          for (var i = 0; i <rows; i++){
              var tr = document.createElement('tr');   
              //document.write(person_name[i]+"<br>");
              
              var td1 = document.createElement('td');
              td1.setAttribute('style',"width: 160px;margin-top:5px;margin-right:5px;padding-left:5px;margin-bottom:5px;")
              var td2 = document.createElement('td');
              var td3 = document.createElement('td');
              var td4 = document.createElement('td');
              var td5 = document.createElement('td');
              var td6 = document.createElement('td');
              var td7 = document.createElement('td');
              td2.setAttribute('style',"width: 160px;margin-top:5px;margin-right:5px;padding-left:5px;margin-bottom:5px;")
              td3.setAttribute('style',"width: 160px;margin-top:5px;margin-right:5px;padding-left:5px;margin-bottom:5px;")
              td4.setAttribute('style',"width: 160px;margin-top:5px;margin-right:5px;padding-left:5px;margin-bottom:5px;")
              td5.setAttribute('style',"width: 160px;margin-top:5px;margin-right:5px;padding-left:5px;margin-bottom:5px;")
              //var td8 = document.createElement('td');
              //var td9 = document.createElement('td');

              var person_name_text = document.createTextNode(person_name[i]);
              var date_text = document.createTextNode(date[i]);
              var from_time_text = document.createTextNode(from_time[i]);
              var to_time_text = document.createTextNode(to_time[i]);
              var reason_text = document.createTextNode(reason[i]);

              //text 1
              var f = document.createElement("form");
              f.setAttribute('method', "post");
              f.setAttribute('action',"sss.php?id="+booking_id[i]+"&status=1");
              var confirm = document.createElement("input");
              confirm.setAttribute('value',"CONFIRM");
              confirm.setAttribute('id',"book_id");
              confirm.setAttribute('type',"submit");
              confirm.setAttribute('class',"btn");
              confirm.setAttribute('style',"background-color: #212F3C;color: #85C1E9;width: 100px;margin-top:5px;margin-right:5px;margin-left:5px;margin-bottom:5px;");
              f.appendChild(confirm);


              //text 2
              var f0 = document.createElement("form");
              f0.setAttribute('method', "post");
              f0.setAttribute('action',"sss.php?id="+booking_id[i]+"&status=0");
              var deny = document.createElement("input");
              deny.setAttribute('value',"DENY");
              deny.setAttribute('id',"book_id");
              deny.setAttribute('type',"submit");
              deny.setAttribute('class',"btn");
              deny.setAttribute('style',"background-color: #212F3C;color: #85C1E9;width: 100px;margin-top:5px;margin-right:5px;margin-left:5px;margin-bottom:5px;");
              f0.appendChild(deny);

              td1.appendChild(person_name_text);
              td2.appendChild(date_text);
              td3.appendChild(from_time_text);
              td4.appendChild(to_time_text);
              td5.appendChild(reason_text);
              td6.appendChild(f);
              td7.appendChild(f0);
              
              tr.appendChild(td1);
              tr.appendChild(td2);
              tr.appendChild(td3);
              tr.appendChild(td4);
              tr.appendChild(td5);
              tr.appendChild(td6);
              tr.appendChild(td7);

              table.appendChild(tr);
            }
          gotable.appendChild(table);
        }
        
        //document.body.appendChild(table);
    }
    </script>
  </head>
  <body onload="GenerateTable()">
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
              <a class="navbar-brand">Admin: <?php echo $uname; ?></a>
            </div>
          <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="nav navbar-nav navbar-right">
            <!--<li class="active"><a href="#" style="color:#76D7C4  ">Home</a></li>-->
            <li><a href="#" style="color:#85C1E9;">Gallery</a></li>
            <li><a href="#" style="color:#85C1E9">About us</a></li>
            <li><a href="#" style="color:#85C1E9">Contact us</a></li>
            <li><a href="logout_admin.php" style="color:#85C1E9">Log Out</a>
          </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="row"  id="gotable" align="center"> 
        <br>
     </div>
    
  
    <div class="row">
                   <footer class="footerright">
                       <div class="col-md-4 col-sm-6 col-lg-4" style="color:#85C1E9;">
                           <div class="logofooter"><img src="ft-logo (1).png"></div>
                           <p><i class="fa fa-map-pin"></i>&nbsp;&nbsp;&nbsp;TopCoders , Silicon Valley</p>
                           <p><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp; Phone (India) : +919925200129</p>
                           <p><i class= "fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;E-mail : seminarhallbs@gmail.com</p>
                       </div>
                       <div class="col-md-4 hidden-sm col-lg-3" style="margin-right:0px;margin-right
            :0px;margin-top:70px;color:#85C1E9;" >
                           <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="2014_alfa_romeo_4c_by_pogea_racing-1366x768.jpg" alt="Seminar Hall" >
    </div>

    <div class="item">
      <img src="volcano-1366x768.jpg" alt="Seninar Hall">
    </div>
    <!--<div class="item">
      <img src="emma_watson_275-wide.jpg">
    </div>-->
  </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                     <!--  <form id="loginform" class="form-horizontal" role="form" method="POST" action="feedback.php">
                                    
                      
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
                           </form>-->
                           
                       <div class="col-md-4 col-sm-2 col-lg-2 col-lg-offset-2" style="padding-top:50px;color:#85C1E9;">
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