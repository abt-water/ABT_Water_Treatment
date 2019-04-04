<?php 
include("../model/TimeClockFunctions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Time Clock</title>
	<?php include("../CSS/includeBack2.php");?>

    
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
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="dashboard_quote.php">Quotes List</a></li>
                    <li><a href="contactUs.php">Contact Us</a></li>
                    <li><a href="dashboardTimeClock.php">Timeclock</a></li>
                </ul><br>
            </div>
            <br>

 <!--Start Code Here-->
            <div class="container-fluid text-center" id="timeClock">
			<?php
			//session_start(); gave error so commented out...seems ok without it
				$form = new timeClockForm();
				$form ->displayTimeClock();
			?>
            ?</div>
           

            
                </body>

</html>