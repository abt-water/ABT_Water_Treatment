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
            <p><span class="error" style="color:red">* required field</span></p>
            <br>
            <div class="signUpBody">
                <span class = "error" style="color: red">*</span>
                <label for="employeeID"><b>Last 4 of Social</b></label>
                <input type="number"  minlength="4" maxlength="4" title="Must be 4 numbers" name="employeeID" required>
                <br/>
                <br/>

                <span class = "error" style="color: red">*</span>
                <label for="firstName"><b>Name</b></label>
                <input type="text" title="First and Last Name" name="firstName" required>
                <br/>
                <br/>

                <span class = "error" style="color: red">*</span>
                <label for="username"><b>Username</b></label>
                <input type="text" name="username" required>
                <br/>
                <br/>

                <span class = "error" style="color: red">*</span>
                <label for="password"><b>Password</b></label>
                <input type="password" name="bpassword"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
                <br/>
                <br/>

                <span class = "error" style="color: red">*</span>
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
            <p><span class="error" style="color:red">* required field</span></p>
            <br>
            <div class="loginBody">
                <span class = "error" style="color: red">*</span>
                <label for="employeeID"><b>Last 4 of Social</b></label>
                <input type="number"  minlength="4" maxlength="4" title="Must be 4 numbers" name="employeeID" required>
                <br/>
                <br/>

                <span class = "error" style="color: red">*</span>
                <label for="username"><b>Username</b></label>
                <input type="text" name="username" required>
                <br/>
                <br/>

                <span class = "error" style="color: red">*</span>
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

