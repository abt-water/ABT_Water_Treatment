<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Main</title>
    <!--<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <?php include("../CSS/includeBack.php");?>


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
                <a class="navbar-brand" href="#">Logo</a>
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

            <div class="col-sm-9">
                <div class="top">
                    <div class="topText">
                        <h4>Trent Kjell</h4>
                        
                        <?php
           
                        include('../model/open_db.php');

                        //function get_num_rows() {
                            global $db;
                        $count = $db->querySingle("SELECT COUNT(*) as count FROM Contacts");
                        echo "<p>You have $count quotes </p>";
   
    
                            //}

            ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div>
                            <h1>
                                <a class="navbar-brand" href="http://69.128.42.202//Usage%20Reports/FURS.html">Daily Reports</a>
                            </h1><br><br>
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h1>
                                <a class="navbar-brand" href="https://webmail1.networksolutionsemail.com/interfaces/sso/login.php?redirected=yes&user_domain=mail.abtwater.com">Email</a>
                            </h1><br><br>
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h1>
                                <a class="navbar-brand" href="http://localhost/ABT_Water/ABT_Main/View/dashboard_quote.php">Quotes</a>
                            </h1><br><br>
            
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="dayReport">
                            <object type="text/html" data="http://www.abtwater.com/daily-radio-reads/" width="100%" height="290px" style="overflow:auto;border:2px ridge #3399ff; border-radius: 10px 10px 10px 10px;">
                            </object>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="email">
                            <object type="text/html" data="https://webmail1.networksolutionsemail.com/interfaces/sso/login.php?redirected=yes&user_domain=mail.abtwater.com" width="100%" height="290px" style="overflow:auto;border:2px ridge #3399ff; border-radius: 10px 10px 10px 10px;">
                            </object>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote">
                            <object type="text/html" data="http://localhost/ABT_Water/view/dashboard_quote.php" width="100%" height="290px" style="overflow:auto;border:2px ridge #3399ff; border-radius: 10px 10px 10px 10px;">
                            </object>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <iframe src="https://calendar.google.com/calendar/embed?src=richjordan30%40gmail.com&ctz=America%2FChicago" style="border: 0" width="100%" height="800" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>