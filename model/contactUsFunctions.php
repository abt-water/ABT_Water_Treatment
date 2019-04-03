<?php
function contactUs() {
//session_start();
include('forms.php');

/*Creates a new contact us form*/
$form = new contactUsForm();

/*Displays the contact us form*/
$form ->displayContactUs('contactUs', 'contactUsPage.php', 'post');

if (isset($_GET["add"])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO ContactUs (firstName,lastName,email,comment) 
            VALUES ('$firstName',  '$lastName',  '$email', '$comment' )";

    $result = $dbU->exec($sql);

    if (!$result) {
        echo $dbU->lastErrorMsg();
    } else {
        header('Location: abtLogin.php');
    }

    $dbU->close();
}
}
?>
