<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Main</title>
<?php include("../CSS/includeBack2.php");?>

    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        
        .row.content {
            height: 800px;
        }
        /* Set gray background color and 100% height */
        
        .sidenav {
            background-color: #3399ff;
            color: #fff;
            height: 1275px;
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
        
        .dayReport {
            height: 300px;
        }
        
        .email {
            height: 300px;
        }
        
        .quote {
            height: 300px;
        }
        
        * {
            box-sizing: border-box;
        }
        
        ul {
            list-style-type: none;
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
                    <li><a href="timeClock.php">Timeclock</a></li>
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
                    <li><a href="timeClock.php">Timeclock</a></li>
                </ul><br>
            </div>
            <br>

            <!--Start Code Here-->
            <?php
                include('../controller/contactUsController.php');
                echo $contactUs;
            ?>

            
                </body>

</html>