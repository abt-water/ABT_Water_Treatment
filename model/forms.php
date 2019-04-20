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
<?php
    class estimate
    {
    public function displayEstimate()
    {
    ?>
    
    <!-- Container (Form Section Meters) -->
    <div id="form" class="container-fluid text-center bg-grey">
            

            <div class="container">
                
                <div id="step2" class="step2">
                <form name="myForm" action="abtquote.php" method="POST" enctype="multipart/form-data">
                    <h1><u>Please Select Meter And Enter Number Of Sites Below</u></h1><br><br>

                    <div class="form-group row">
                        <div class="col-sm-6" class="meters">
                            <label for="lname">Meters Available</label>

                            <select class="form-control" id="metersAll" name="Meter" required>
                            <option value="" selected="selected">Select a Meter</option>

<option id="metron" name="Metron" value="../images/ABTImages/Metron1.png">Metron</option>

<option id="neptunePSIP" name="NeptuneSI" value="../images/ABTImages/NepProT10.jpg">Neptune Pro-Coder T-10 Visual Read</option>
<option id="neptuneP" name="Neptune" value="../images/ABTImages/NepProT10.jpg">Neptune Pro-Coder T-10 With Touchpad</option>
<option id="neptunePA" name="NeptunePA" value="../images/ABTImages/NepProT10.jpg">Neptune Pro-Coder T-10 With Aclara</option>
<option id="neptunePS3" name="NeptuneS3" value="../images/ABTImages/NepProT10.jpg">Neptune Pro-Coder T-10 With Cereniti Cellular</option>
<option id="neptunePSIE" name="NeptuneSI" value="../images/ABTImages/NepProT10.jpg">Neptune Pro-Coder T-10 With Cereniti Encoder</option>

<option id="neptunePAqSP" name="NeptuneASI" value="../images/ABTImages/NepProAquity.jpg">Neptune Pro-Coder Aquity Visual Read</option>
<option id="neptunePAq" name="NeptuneAT" value="../images/ABTImages/NepProAquity.jpg">Neptune Pro-Coder Aquity With Touchpad</option>
<option id="neptunePAqA" name="NeptuneAA" value="../images/ABTImages/NepProAquity.jpg">Neptune Pro-Coder Aquity With Aclara</option>
<option id="neptunePAqS3" name="NeptuneAS3" value="../images/ABTImages/NepProAquity.jpg">Neptune Pro-Coder Aquity With Cereniti Cellular</option>
<option id="neptunePAqSE" name="NeptuneSI" value="../images/ABTImages/NepProAquity.jpg">Neptune Pro-Coder Aquity With Cereniti Encoder</option>

<option id="neptuneLTSP" name="NeptuneSI" value="../images/ABTImages/NepT10.jpg">Neptune Legacy T-10 Visual Read</option>
<option id="neptuneLT" name="Neptune" value="../images/ABTImages/NepT10.jpg">Neptune Legacy T-10 With Touchpad</option>
<option id="neptuneLTA" name="NeptuneA" value="../images/ABTImages/NepT10.jpg">Neptune Legacy T-10 With Aclara</option>
<option id="neptuneLTS3" name="NeptuneS3" value="../images/ABTImages/NepT10.jpg">Neptune Legacy T-10 With Cereniti Cellular</option>
<option id="neptuneLTSE" name="NeptuneSI" value="../images/ABTImages/NepT10.jpg">Neptune Legacy T-10 With Cereniti Encoder</option>

<option id="neptuneLAqSP" name="NeptuneASI" value="../images/ABTImages/NepAquity1.png">Neptune Legacy Aquity Visual Read</option>
<option id="neptuneLAq" name="NeptuneAT" value="../images/ABTImages/NepAquity1.png">Neptune Legacy Aquity With Touchpad</option>
<option id="neptuneLAqA" name="NeptuneAA" value="../images/ABTImages/NepAquity1.png">Neptune Legacy Aquity With Aclara</option>
<option id="neptuneLAqS3" name="NeptuneAS3" value="../images/ABTImages/NepAquity1.png">Neptune Legacy Aquity With Cereniti Cellular</option>
<option id="neptuneLAqSE" name="NeptuneSI" value="../images/ABTImages/NepAquity1.png">Neptune Legacy Aquity With Cereniti Encoder</option>

<option id="sensusSP" name="SensusSP" value="../images/ABTImages/SensusAccu.jpg">Sensus Accustream Visual Read</option>
<option id="sensus" name="Sensus" value="../images/ABTImages/SensusAccu.jpg">Sensus Accustream With Touchpad</option>
<option id="sensusA" name="SensusA" value="../images/ABTImages/SensusAccu.jpg">Sensus Accustream With Aclara</option>
<option id="sensusS3" name="SensusS3" value="../images/ABTImages/SensusAccu.jpg">Sensus Accustream With Cereniti Cellular</option>
<option id="sensusSE" name="SensusSE" value="../images/ABTImages/SensusAccu.jpg">Sensus Accustream With Cereniti Encoder</option>



</select>

                        </div>
                        <div class="col-sm-6" class="sites">
                            <label for="lname">Number Of Sites</label>
                            <input required type="text" class="form-control" id="siteC" name="Number_of_Sites" placeholder="How many sites..">
                            <p style="color:red" id="demo4"></p>
                        </div>
                    </div>
                    <div id="meterG" class="meterG">


                        <img class="img-thumbnail" id="pic1" src="../images/ABTImages/Water.jpg" />
                        <img class="img-thumbnail" id="pic2" src="../images/ABTImages/water.jpg" />


                    </div>





                </div>
                
                <div class="buttons">
                        <input class="buttonC" type="button" id="calculate" value="Calculate">
                        
                    </div>

                <div id="step3" class="step3" class="container-fluid text-center bg-grey">
                    <h2>These Totals Are All Estimates Prices Can Vary Depending On Parts Needed</h2>

                    <div class="form-group row">
                        <div class="col-sm-4" class="totalE">
                            <label for="lname">Estimated Main Receiver Price</label>
                            <input class="form-control" type="text" class="totalMEC" id="totalMEC" name="Receive_Equip_Price" readonly>
                        </div>
                        <div class="col-sm-4" class="totalR">
                            <label for="lname">Estimated Repeaters Needed</label>
                            <input class="form-control" type="text" id="totalMER" name="Repeaters_Needed" readonly>
                        </div>
                        <div class="col-sm-4" class="totalRC">
                            <label for="lname">Estimated Repeaters Cost</label>
                            <input class="form-control" type="text" id="totalMERC" name="Repeaters_Cost" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4" class="total2">
                            <label for="lname">Estimated Labor Price</label>
                            <input class="form-control" type="text" id="total2C" name="Labor_Price" readonly>
                        </div>
                        <div class="col-sm-4" class="total2">
                            <label for="lname">Estimated Parts Price</label>
                            <input class="form-control" type="text" id="totalC" name="Parts_Price" readonly>
                        </div>
                        <div class="col-sm-4" class="total2">
                            <label for="lname">Estimated Meter Price</label>
                            <input class="form-control" type="text" id="totalMC" name="Meter_Price" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4" class="total">
                            <label for="lname">Total Estimated Price</label>
                            <input class="form-control" type="text" id="totalALL" name="Total_Price" readonly>
                        </div>
                        <div class="col-sm-4" class="time">
                            <label for="lname">Estimated Working Days</label>
                            <input class="form-control" type="text" id="daysC" name="Estimated_Days" readonly>
                        </div>
             
                    <div class="col-sm-4">
                    <label for="lname">Do you wish to be contacted?</label>
                    <select class="form-control" value="" name="Respond" required>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                    </select>    
                    </div>
                    </div>

                    
                </div><br><br><br>


    </form>
<?php

}

}
?>
<?php
    class infoSection
    {
    public function displayInfoSection()
    {
    ?>
 <form name="myForm" action="" method="POST" enctype="multipart/form-data">    
                <h1><u>Please Fill Out The Form Below To Submit Your Estimate</u></h1><br><br>

<div id="step1" class="step1">
    
        <!--<input type="hidden" name="action" value="submit">-->




        <div class="form-group row">
            <div class="col-sm-6" class="lname">
                <label for="lname">First Name</label>
                <input required type="text" class="form-control" id="fname" name="First_Name" placeholder="Your first name..">

            </div>

            <div class="col-sm-6" class="lname">
                <label for="lname">Last Name</label>
                <input required type="text" class="form-control" id="lname" name="Last_Name" placeholder="Your last name..">

            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6" class="address">
                <label for="lname">Address of Community</label>
                <input required type="text" class="form-control" id="address" name="Baddress" placeholder="Address of Community..">
            </div>

            <div class="col-sm-6" class="cname">
                <label for="lname">Community Name</label>
                <input required type="text" class="form-control" id="Cname" name="Community" placeholder="Name of community..">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6" class="city">
                <label for="lname">City</label><br>
                <input required type="text" class="form-control" id="cityC" name="City" placeholder="City that community is located..">
            </div>

            <div class="col-sm-6" class="phone">
                <label for="lname">Phone Number</label>
                <input class="form-control" required title="555-555-1234...5555551234...(555)555-1234" type="text" id="phoneC" pattern="^\(?[\d]{3}\)?[\s-]?[\d]{3}[\s-]?[\d]{4}$" name="Phone" placeholder="(555)555-1234..">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6" class="zip">
                <label for="lname">Zip Code</label>
                <input required type="text" class="form-control " id="zipC" name="Zip" placeholder="Zip code that community is located..">
            </div>



            <div class="col-sm-6" class="email">
                <label for="lname">Email</label>
                <input type="text" class="form-control " id="emailC" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="Email" placeholder="johndoe@example.com.." required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12" class="state">
                <label for="lname">State</label>
                <select name="Bstate" class="form-control" id="state" required>
<option value="" selected="selected">Select a State</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select>
            </div>

        </div>
</div>

                <div class="buttons">
                       
                        <input class="buttonSu" id="submit" name="submit" type="submit" value="Submit">
                    </div>
                </div>
                </form>
    <?php

}

}
?>