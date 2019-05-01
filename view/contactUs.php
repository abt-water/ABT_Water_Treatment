<?php include('../Controller/contactUsLookupController.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
	<?php include("../CSS/includeBack2.php");?>
    <script language="javascript">
        function submitForm(){
            var val = document.myform.nameList.value;
            if(val!=-1){
                document.myform.submit();
            }
        }
    </script>

    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) Push things up*/
        
        .row.content {
            height: 800px;
        }
        /* Set gray background color and 100% height */
        
        .sidenav {
            background-color: #3399ff;
            color: #fff;
            height: 100%;
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
        
            <div class="col-sm-9">
                <div class="top">
                    <div class="topText">
                        <h4>Trent Kjell</h4>
                        <?php
                            global $db;
                            $count = $db->querySingle("SELECT COUNT(*) as count FROM Contacts");
                            echo "<p> $count contact requests </p>";
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div>
                            <h1><u>
                                Contact Us List
                            </u></h1>
                        </div>
                           <!--Start Form For Dropdown Section-->
                     <form name="myform" action="" method="POST" enctype="multipart/form-data">
                        
                        <div class="col-lg-12">
                            <div class="contactUsList">
                                <select value= "nameList1" id="dropdown" name="nameList" class="form-control"  >  
                                <option>Select Contact</option> 
                                 <?php 
                                     foreach($rows as $row)
                                 {
                                   $var1 = $row['First_Name'];  
                                   $var2 = $row['Last_Name'];
                                   $var3 = $row['ID'];
                                  
                                   echo "<option id=nameList1 value=$var3 name=nameList1 > $var1 $var2 </option>";
                                   echo "<br>"; 
                                 }
                                 ?>                    
                                 </select><br><br><br>
                                 
                                <!--Get Info Button-->
                                     <input class="buttonSu" id="contactSubmit" name="contactSubmit" type="submit"  value="Get Info">
                             </div>
                        </div>
                    </div>  
                    <div class="col-sm-4">
                        <div>
                            <h1><u>
                                Contact Us Info
                            </u></h1>
                        </div>
                            <!--Start Form Section For Contact Us Info-->
                    <div class="col-lg-12">
                        <div class="contactUs">            
                            <label for="fname">ID:</label>
                            <input  type="text" class="form-control" id="IDname" name="ID1" placeholder="ID"value="<?php if (isset($_POST['contactSubmit'])) {  echo $ID1;} ?>">
                            <label for="fname">First Name</label>
                            <input  type="text" class="form-control" id="fname" name="First_Name" placeholder="First Name"value="<?php if (isset($_POST['contactSubmit'])) { echo $First_Name;} ?>">
                            <label for="lname">Last Name</label>
                            <input  type="text" class="form-control" id="lname" name="Last_Name" placeholder="Last Name"value="<?php if (isset($_POST['contactSubmit'])) { echo $Last_Name;} ?>">
                            <label for="email">Email</label>
                            <input  type="text" class="form-control" id="email" name="Email" placeholder="Email"value="<?php if (isset($_POST['contactSubmit'])) { echo $Email;} ?>">
                            <label for="comment">Comment</label>
                            <textarea  type="text" class="form-control" id="comment" name="Comment" placeholder="Comment"value="<?php if (isset($_POST['contactSubmit'])) { echo $Comment;} ?>"></textarea>
                        </div>
                    </div>
                </div>
            </form>
         </div>
     </div>
</body>
</html>