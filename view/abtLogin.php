<?php
include('../model/openUser_db.php');
include('../model/loginFunctions.php');

?>
<!DOCTYPE html>
    <html lang="en">
<!--All css and links are set just code body for login page-->
    <head>
        
        <title>ABT Login</title>
        <!--<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../CSS/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>-->
		<?php include("../CSS/includeFront.php");?>
        <!--
            New Javascript file if needed can go here
            Just change it below
            
            <script src="../JS/abtquote.js"></script>
        -->
        <style>

        </style>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        
        <div class="navbar-header">
           
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">           
            </button>
            
            <a class="navbar-brand" href="https://www.abtwater.com">ABT</a>
        </div>
    </div>    
</nav>

    <div class="jumbotron text-center">
    
        <div class="imgcontainer">
         <img src="../images/ABTImages/abtwater.png" alt="ABT" class="avatar">
        </div>

    </div>

<!--Enter code for body and everything below this line-->
<!--Login Form-->

<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 1/21/2019
 * Time: 10:31 AM
 */

session_start();

//include "forms.php";


/*Creates a new form*/
$form = new loginForm();

/*Displays the login form*/
$form ->displayLogin2('login', 'logInEmployee.php', 'post');

/*Retrieves the username and password information from the database and checks to see if it matches
Also displays an error message if the data doesn't match*/
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $employeeID = mysqli_real_escape_string($db, $_POST['employeeID']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "SELECT * FROM customers WHERE employeeID = '$employeeID' AND 
    username = '$username' AND password = '$password'";

    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count == 1)
    {
        $SESSION['login'] = 'employeeID';

        header("location: dashboard.php");
    }
    else {
        echo "Your login information is incorrect.";
    }
}

?>



</body>
</html>