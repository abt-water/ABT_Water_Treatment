<?php 
include("../model/TimeClockFunctions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Time Clock</title>
	<?php include("../CSS/includeBack2.php");?>
    <link href="css/style.css" rel="stylesheet" />
    <!-- JavaScript Includes -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
		<script src="js/script.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="www.abtwater.com">ABT</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="dashboard_quote.php">Quote List</a></li>
                    <li><a href="contactUs.php">Contact Us</a></li>
                    <li><a href="dashboardTimeClock.php">Timeclock</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" id="Dash">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs" id="myNavbar">
                <h2><img src="../images/ABTImages/abtwater.png" alt="ABT" class="img-responsive" class="avatar"></h2>
                
            
                <ul class="nav nav-pills nav-stacked">
                <div  id="clock"  class="light">
			<div class="container-fluid" class="display">
				<div class="weekdays"></div>
				<div class="ampm"></div>
				
				<div class="digits"></div>
			</div>
		</div>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="dashboard_quote.php">Quotes List</a></li>
                    <li><a href="contactUs.php">Contact Us</a></li>
                    <li><a href="dashboardTimeClock.php">Timeclock</a></li>

                </ul><br>
                </div>
                </div>
                </div>
                </div>
            

 <!--Start Code Here-->


 
 

 



		
        
		
            
           
            

 
                   
                <div class="row">
                    <div class="col-sm-4">>
			<?php
			//session_start(); gave error so commented out...seems ok without it
				$form = new timeClockForm();
				$form ->displayTimeClock();
			?>
            </div>
            </div>
            
            
           



            
            
                </body>

</html>