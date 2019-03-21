<?php
include('../model/openUser_db.php');
include('../model/loginFunctions.php');

?>
<!DOCTYPE html>
<html lang="en">
<!--All css and links are set just code body for login page-->
<head>

    <title>ABT Sign Up</title>
    <!--<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
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

<!--Sign Up Form-->

<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 1/21/2019
 * Time: 10:31 AM
 */

session_start();

//include ".../model/forms.php";


/*Creates a new form*/
$form = new signUpForm();

/*Displays the login form*/
$form ->displaySignUp('signUp', 'signUp.php', 'post');

/*Retrieves the username and password information from the database and checks to see if it matches
Also displays an error message if the data doesn't match*/
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $employeeID = mysqli_real_escape_string($db, $_POST['employeeID']);
    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
    $birthDate = mysqli_real_escape_string($db, $_POST['birthDate']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);

    $query = "SELECT * FROM customers WHERE employeeID = '$employeeID' AND firstName = '$firstName' AND lastName = '$lastName' birthDate = '$birthDate' AND 
    username = '$username' AND password = '$password' AND confirmPassword ='$confirmPassword'";

    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count == 1)
    {
        $SESSION['signUp'] = 'employeeID';

        header("location: dashboard.php");
    }
    else {
        echo "There is something missing.";
    }
}

?>



</body>
</html>