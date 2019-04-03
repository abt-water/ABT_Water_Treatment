<?php
 include("openUser_db.php");
?>
<?php
class signUpForm
{
    public function displaySignUp()
    {
        ?>

        <!--SignUp Form-->
        <!--<form action = 'signUpPage.php' method="POST">-->
        <form role="form" method="post" action="registration.php?add=<?php echo uniqid()?>">
        <div class="signUp">
            <h1>Sign Up</h1>
            <br>
            <div class="signUpBody">
                <label for="employeeID"><b>Last 4 of Social</b></label>
                <input type="text" name="employeeID" required>
                <br/>

                <label for="firstName"><b>Name</b></label>
                <input type="text" name="firstName" required>
                <br/>

                

                

                <label for="username"><b>Username</b></label>
                <input type="text" name="username" required>
                <br/>

                <label for="password"><b>Password</b></label>
                <input type="password" name="bpassword" required>
                <br/>

                <label for="confirmPassword"><b>Confirm Password</b></label>
                <input type="password" name="confirmPassword" required>
                <br/>
                <button type ="submit" id="submit" for="submit">Sign Up</button>
                <button type="reset">Clear</button>
            </div>
        </div>
    </form>
<?php

    }

}

?>
<?php
    class loginForm
    {
    public function displayLogin()
    {
    ?>


    <!--Login Form-->
    <form action = 'abtLogin.php' method="POST">
        <div class="login">
            <h1>Login</h1>
            <br>
            <div class="loginBody">
                <label for="employeeID"><b>Last 4 of Social</b></label>
                <input type="text" name="employeeID" required>
                <br/>

                <label for="username"><b>Username</b></label>
                <input type="text" name="username" required>
                <br/>

                <label for="password"><b>Password</b></label>
                <input type="password" name="bpassword" required>
                <br/>

                <button name="submit" id="submit" for="submit">Login</button>
                <button type="reset">Clear</button>
            </div>
        </div>
    </form>
<?php

}

}

?>

<?php
    class contactUsForm
    {
    public function displayContactUs()
    {
    ?>
    <!--Contact Us Form-->
    <form action = 'contact_us.php' method="POST">
        <div class="contactUs">
            <h1>Contact Us</h1>
            <br>
            <div class="contactUsBody">
                <label for="firstName"><b>First Name</b></label>
                <input type="text" name="firstName" required>
                <br/>

                <label for="lastName"><b>Last Name</b></label>
                <input type="text" name="lastName" required>
                <br/>

                <label for="email"><b>Email</b></label>
                <input type="email" name="email" required>
                <br/>

                <label for="comment"><b>Comment</b></label>
                <input type="text" name="text" required>
                <br/>

                <button name="submit" id="submit" for="submit">Submit</button>
                <button type="reset">Clear</button>
            </div>
        </div>
    </form>
<?php

}

}

?>
