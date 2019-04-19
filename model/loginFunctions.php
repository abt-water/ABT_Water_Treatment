<?php
function register() {
session_start();
include('forms.php');


/*Creates a new form*/
$form = new signUpForm();

/*Displays the login form*/
$form ->displaySignUp('signUp', 'signUpPage.php', 'post');


if (isset($_GET["add"])) {


    $firstName = $_POST['firstName'];
    //$lastName = $_POST['lastName'];
    $ID = $_POST['employeeID'];
    //$birthDate = $_POST['birthDate'];
    $User = $_POST['username'];
    $Pass = $_POST['bpassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $Pass = password_hash($Pass, PASSWORD_ARGON2_DEFAULT_TIME_COST);

    $sql = "INSERT INTO User (firstName,employeeID,username,bpassword,confirmPassword) 
            VALUES ('$firstName',  '$ID',  '$User', '$Pass', '$confirmPassword' )";

    $result = $dbU->exec($sql);


    if (!$result) {
        echo $dbU->lastErrorMsg();
    } else {

        //$message = "Thank You For Registering";
        //echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: abtLogin.php');
        //echo "Successful Registration!";
    }

    $dbU->close();
}
//return $firstName;
}

?>

<?php
function login() {
session_start();
include('forms.php');




/*Creates a new form*/
$form = new loginForm();

/*Displays the login form*/
$form ->displayLogin('login', 'abtLogin.php', 'post');

/*Retrieves the username and password information from the database and checks to see if it matches
Also displays an error message if the data doesn't match*/
if (isset($_POST["submit"])){
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $ID = $_POST["employeeID"];
    $User = $_POST["username"];
    $Pass = $_POST["bpassword"];

    $sql1 = "SELECT * FROM User WHERE employeeID = '$ID' AND 
    username = '$User' AND bpassword = '$Pass'";

    $result1 = $dbU->query($sql1);

    if ($result1 == false) {
        display_db_error($dbU->error);
    }
    while ($row = $result1->fetchArray() && $Pass == $_POST["bpassword"]) {
        $ID = $row["employeeID"];
        $User = $row["username"];
        $Pass = $row["bpassword"];

        $SESSION['login'] = $User;

        header('Location: dashboard.php');
    }

    if ($User !== $row["username"] || $Pass !== $row["bpassword"]) {
        echo "</br></br> ";
        echo "<b><p style='color:red;'>Wrong Username or Password</p></b>";
    }


}
$dbU->close();
}
//return $login;
}

?>