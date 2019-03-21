<?php
/**
 * Created by PhpStorm.
 * User: Emily
 * Date: 1/21/2019
 * Time: 10:32 AM
 */
class signInForm
{
    public function displayLogin()
    {
        ?>
        <!--Login Form-->
        <form action = 'logInEmployee.php' method="POST">
            <div class="login">
                <h2>Login</h2>
                <br>
                <label for="employeeID"><b>Employee ID</b></label>
                <input type="text" name="employeeID" required>
                <br/>

                <label for="firstName"><b>First Name</b></label>
                <input type="text" name="firstName" required>
                <br/>

                <label for="lastName"><b>Last Name</b></label>
                <input type="text" name="lastName" required>
                <br/>

                <label for="birthDate"><b>Birth date</b></label>
                <input type="date" name="birthDate" required>
                <br/>

                <label for="username"><b>Username</b></label>
                <input type="text" name="username" required>
                <br/>

                <label for="password"><b>Password</b></label>
                <input type="text" name="password" required>
                <br/>

                <label for="confirmPassword"><b>Confirm Password</b></label>
                <input type="text" name="confirmPassword" required>
                <br/>
                    <button for="submit">Login</button>
            </div>
        </form>
<?php
    }
}
?>
<?php
class signUpForm
{
    public function displaySignUp()
    {
        ?>


        <!--SignUp Form-->
        <form action = 'signUpPage.php' method="POST">
            <div class="signUp">
                <h1>SignUp</h1>
                <br>
                <div class="signUpBody">
                <label for="employeeID"><b>Employee ID</b></label>
                <input type="text" name="employeeID" required>
                <br/>

                <label for="firstName"><b>First Name</b></label>
                <input type="text" name="firstName" required>
                <br/>

                <label for="lastName"><b>Last Name</b></label>
                <input type="text" name="lastName" required>
                <br/>

                <label for="birthDate"><b>Birth date</b></label>
                <input type="date" name="birthDate" required>
                <br/>

                <label for="username"><b>Username</b></label>
                <input type="text" name="username" required>
                <br/>

                <label for="password"><b>Password</b></label>
                <input type="text" name="password" required>
                <br/>

                <label for="confirmPassword"><b>Confirm Password</b></label>
                <input type="text" name="confirmPassword" required>
                <br/>
                    <button for="submit">Sign Up</button>
                    <button for="clear">Clear</button>
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
    public function displayLogin2()
    {
    ?>


    <!--Login Form-->
    <form action = 'abtLogin.php' method="POST">
        <div class="login">
            <h1>Login</h1>
            <br>
            <div class="loginBody">
                <label for="employeeID"><b>Employee ID</b></label>
                <input type="text" name="employeeID" required>
                <br/>

                <label for="username"><b>Username</b></label>
                <input type="text" name="username" required>
                <br/>

                <label for="password"><b>Password</b></label>
                <input type="text" name="password" required>
                <br/>

                <button for="submit">Login</button>
                <button for="clear">Clear</button>
            </div>
        </div>
    </form>
<?php

}

}

?>
