<?php 


include("../model/TimeClockFunctions.php");
?>

<!DOCTYPE html>
<html lang="en">


<head>
<title>Time Clock</title>
	<?php include("../CSS/includeBack2.php");?>
    
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) Push things up*/
        
        .row.content {
            /*height: auto;*/
        }
        /* Set gray background color and 100% height */
        
        .sidenav {
            background-color: #3399ff;
            color: #fff;
            height: 200%;
        }
        
        .sidenav li a {
            color: #fff;
        }
        
        .sidenav li.active a {
            border-radius: 25px 35px 25px 35px;
            color: #fff !important;
            background-color: rgb(45, 3, 230) !important;
        }
        
        .sidenav li a:hover {
            border-radius: 25px 35px 25px 35px;
            background-color: rgb(45, 3, 230);
        }
        /* On small screens, set height to 'auto' for the grid */
        
        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }
        
        .top {
            border-radius: 25px 35px 25px 35px;
            background-color: #3399ff;
            height: 50px;
            text-align: center;
            color: #fff;
        }
        
        h1 {
            text-align: center;
            font-style: italic;
        }
        
        .quoteList {
            text-align: center;
        }
        #timeDate{
            background-color: #3399ff;
        }
        body{
            background-color: #3399ff;
        }
        #timeClock{
            border: 3px solid black;
            
            border-style: outset;
            background-color: #ffffff;
            padding: 50px 50px 50px 50px;
        }
    </style>
    
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
                </ul>
            </div>
            
                
<div class="row">
 <!--Start Code Here-->
 
<!--Clock-->
<div id="timeDate" class="col-sm-8 text-center">

<!--Put Clock Here-->

<br><br><br>
<iframe src="http://free.timeanddate.com/clock/i6qytavu/n4927/fn15/fs48/ftbi/bas3/bat8/pa14/tt0/tw0/tm1/ts1/tb4" frameborder="0" width="302" height="144"></iframe>

<br><br><br>


    </div>    

<!--Timeclock form and function-->
    <?php
			//session_start(); 
				$form = new timeClockForm();
				$form ->displayTimeClock();
            
    ?>
          
                 

</div>
</div>            
</body>
</html>