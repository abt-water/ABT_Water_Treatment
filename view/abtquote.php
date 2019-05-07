<?php

//include('../model/frontEndForms.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        
        <title>ABT Quote</title>
        <?php include("../CSS/includeFront.php");?>
        <script src ="../JS/abtquote.js"></script>        
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                    <a class="navbar-brand" href="https://www.abtwater.com">ABT</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#cutin">WHATS A CUT-IN?</a></li>
                        <li><a href="#chart">SAVINGS CALCULATOR</a></li>
                        <li><a href="#info">METER INFO</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">GET AN ESTIMATE <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <li><a href="#step2">METER SELECTION</a></li>
                                <li><a href="#step3">ESTIMATE</a></li>
                                <li><a href="#step1">YOUR INFO</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">CONTACT US</a></li>

                       
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron text-center">
            <div class="imgcontainer">
                <img src="../images/ABTImages/abtwater.png" alt="ABT" class="avatar">
            </div>

        </div>

        <!-- Container (Cut-In Section) -->
        <div id="cutin" class="container-fluid">
            <h1><u>Whats A Cut-In?</u></h1><br><br>

            <p>Our cut-in process is the quickest and most affordable way to install water meters. We cut out an 18 inch section on the existing service line to install the parts and meter. No heat tape is cut in this process, and it generally takes 30-45
                mins per home, depending on conditions. We document all aspects of the install including pics, part list, and conditions of existing heat tapes. We also will notify you of ANY potential freeze ups, such as missing belly insulation, missing
                skirting, and old poor heat tape. Our crew is the best in the buisness, and we've been in this buisness for over 20 years.
            </p>
            <h2>These Are The Parts That Are Used In The Cut-In Process</h2><br>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img id="pic3" class="img-thumbnail" src="../images/ABTImages/Insulation.png" />
                        <h4><span>Foam Insulation</span><br>"We use high quality foam insulation"</h4>
                    </div>
                    <div class="item">
                        <img id="pic4" class="img-thumbnail" src="../images/ABTImages/MeterJacket.png" />
                        <h4><span>Meter Jacket</span><br>"Our meter jackets are made with a thick styrofoam to protect your meter"</h4>
                    </div>
                    <div class="item">
                        <img id="pic5" class="img-thumbnail" src="../images/ABTImages/Couplings.png" />
                        <h4><span>Meter Couplings</span><br>"Our meter couplings are made of a durable polymer plastic"</h4>
                    </div>
                    <div class="item">
                        <img id="pic6" class="img-thumbnail" src="../images/ABTImages/BallValves.jpg" />
                        <h4><span>Ball Valves</span><br>"Our ball valves are solid lead-free brass"</h4>
                    </div>
                    <div class="item">
                        <img id="pic7" class="img-thumbnail" src="../images/ABTImages/Parts.jpg" />
                        <h4><span>Push-Fit Fittings</span><br>"We use high quality push-fit fittings"</h4>
                    </div>
                    <div class="item">
                        <img id="pic8" class="img-thumbnail" src="../images/ABTImages/Finished.jpg" />
                        <h4><span>Assembled Product</span><br>"How its put together"</h4>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
        </div>

        <!-- Container (Chart Section) -->
        <div id="chart" class="container-fluid bg-grey">

            <h1><u>How much can you save?</u></h1><br><br>
            
            <h2>Need To Convert Cubic Feet To Gallons</h2>

            <div class="form-group row">
                <div class="col-sm-6" class="lname">
                    <label for="lname">Cubic Feet</label>
                    <input  type="text" class="form-control" id="cubicFT" name="CubicFeet" placeholder="Enter Cubic Feet">

                </div>
                <div class="col-sm-6" class="lname">
                    <label for="lname">Gallons</label>
                    <input  type="text" class="form-control" id="CtoG" name="CtoG" placeholder="Gallons">

                </div>
            </div><br><br>

             <div class="form-group row">
            <div class="col-sm-12 text-center">
                <input class="btn btn-primary btn-md "  class="buttonCub" type="button" id="calculateUseCubic" value="Convert">
            </div>
            </div><br><br><br>

            <h2>Enter in your monthly usage in gallons and number of sites to see how much you can save post-meter installation.</h2>
            <div class="form-group row">
                <div class="col-sm-6" class="lname">
                    <label for="lname">Gallons</label>
                    <input required type="text" class="form-control" id="gallonUse" name="Gallons" placeholder="Monthly Gallon Usage..">

                </div>

                <div class="col-sm-6" class="lname">
                    <label for="lname">Sites</label>
                    <input required type="text" class="form-control" id="siteUse" name="Last_Name" placeholder="How Many Sites..">

                </div>
            </div>



            <div class="col-sm-6" id="chart1">
                <canvas id="myChart"></canvas>
            </div>

            <div class="col-sm-6" id="chart2">
                <canvas class="col-sm-6" id="myChart2"></canvas>
            </div>

            <div class="col-sm-12 text-center">
                <input class="btn btn-primary btn-md" class="buttonC" type="button" id="calculateUse" value="Calculate Usage">
            </div>

            <div class="col-sm-12">
                <p id="savings"><strong>What can I save?</strong></p>
            </div>
        </div><br><br><br>

        <!-- Container (Meter Info Section) -->
<div id="info" class="container-fluid text-center">
            <h1><u>Below Are The Meters And Transmitters Available</u></h1><br><br>
        <h2>Meters Available</h2><br>
        <div id="myCarousel1" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                    <li data-target="#myCarousel1" data-slide-to="3"></li>
                    <li data-target="#myCarousel1" data-slide-to="4"></li>
                    <li data-target="#myCarousel1" data-slide-to="5"></li>

                </ol>
                <div class="carousel-inner" role="listbox">
                <div class="item active">
                        <img id="pic3" class="img-thumbnail" src="../images/ABTImages/Metron1.png" />
                        <h4><span><strong>Metron Meter</strong></span><br><span id="span1">"*Our featured meter. Digital read out, built in transmitter, polymer plastic body." <br>Need more info  <a href= "../images/Metron_Data_Sheet.pdf"> click here</a></span></h4>
                    </div>
                    <div class="item">
                    <img id="pic4"  class="img-thumbnail" src="../images/ABTImages/NepProAquity.jpg" />
                        <h4><span><strong>Neptune Pro Aquity</strong></span><br><span id="span2">"Updated Neptune Meter with shorter brass body. Can hook up any transmitter available or touchpad or just have as a visual read."<br> Need more info <a href= "../images/Neptune_Data_Sheet.pdf"> click here</a></span></h4>
                    </div>
                    

                    <div class="item">
                    <img id="pic5" class="img-thumbnail"  src="../images/ABTImages/NepAquity1.png" />
                        <h4><span><strong>Neptune Aquity</strong></span><br><span id="span3">"Classic Neptune Meter with shorter brass body. Can hook up any transmitter available or touchpad or just have as a visual read."<br> Need more info <a href= "../images/Neptune_Data_Sheet.pdf"> click here</a></span></h4>
                    </div>
                    <div class="item">
                    <img id="pic6" class="img-thumbnail"  src="../images/ABTImages/NepProT10.jpg" />
                        <h4><span><strong>Neptune Pro T10</strong></span><br><span id="span4">"Updated Neptune T10 Meter with longer brass body. Can hook up any transmitter available or touchpad or just have as a visual read."<br> Need more info <a href= "../images/Neptune_Data_Sheet.pdf"> click here</a></span></h4>
                    </div>
                    

                    <div class="item">
                    <img id="pic7" class="img-thumbnail"  src="../images/ABTImages/NeptuneLegT10.png" />
                        <h4><span><strong>Neptune T10</strong></span><br><span id="span5">"Classic Neptune Meter with longer brass body. Can hook up any transmitter available or touchpad or just have as a visual read."<br> Need more info <a href= "../images/Neptune_Data_Sheet.pdf"> click here</a></span></h4>
                    </div>
                    <div class="item">
                    <img id="pic8" class="img-thumbnail" src="../images/ABTImages/SensusAccu.jpg" />
                        <h4><span><strong>Sensus Accustream</strong></span><br><span id="span6">"Sensus Accustream Meters are made out of a plastic body, digital read out. Can hook up any transmitter available or touchpad or just have as a visual read."<br> Need more info <a href= "../images/Sensus_Accustream_Data_Sheet.pdf"> click here</a></span></h4>
                    </div>
                    </div>
             <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div><br><br>
            <div class="table1">
                <figure>
                    <figcaption>Meter Warranty And Info</figcaption>
                    <div >
                        <table class="table table-bordered">
                            <thead id="thead1">
                                <tr>
                                    <th class="left">Meter</th>
                                    <th>Model</th>
                                    <th>Internal/Chamber Warranty</th>
                                    <th>Register Warranty</th>
                                    <th>Body Type</th>
                                    <th>Body Warranty</th>
                                    <th>Transmitter Needed</th>
                                    <th>Transmitter Warranty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="left" >Metron</td>
                                    <td>Spectrum 30 w/Innov8</td>
                                    <td>N/A</td>
                                    <td>20 years *10 year conditional/10 year prorated</td>
                                    <td>Polymer Plastic</td>
                                    <td>N/A</td>
                                    <td>Built In</td>
                                    <td>20 years *10 year conditional/10 year prorated</td>

                                </tr>
                                <tr>
                                    <td class="left">Neptune</td>
                                    <td>All</td>
                                    <td>1 year</td>
                                    <td>10 years</td>
                                    <td>Brass</td>
                                    <td>Lifetime - *Does not include breaks from freeze-ups</td>
                                    <td>Visual Read - Touchpad - Cereniti - Aclara</td>
                                    <td>No warranty on touchpads/visual read equipment - 4 years for Cereniti - 20 years for Aclara * 10 year conditional/10 year prorated</td>

                                </tr>
                                <tr>
                                    <td class="left">Sensus Accustream</td>
                                    <td>SR II Accustream</td>
                                    <td>1 year</td>
                                    <td>15 years</td>
                                    <td>Plastic</td>
                                    <td>20 years - *Does not include breaks from freeze-ups</td>
                                    <td>Visual Read - Touchpad - Cereniti - Aclara</td>
                                    <td>No warranty on touchpads/visual read equipment - 4 years for Cereniti - 20 years for Aclara * 10 year conditional/10 year prorated</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </figure>
            </div><br><br>
                   <h2>Transmitters And Touchpads Available</h2>
                    
                   <div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel2" data-slide-to="1"></li>
                    <li data-target="#myCarousel2" data-slide-to="2"></li>
                    <li data-target="#myCarousel2" data-slide-to="3"></li>
                    

                </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                   <img id="pic4" class="img-thumbnail"  src="../images/ABTImages/NepTouch.png" />
                        <h4><span><strong>Neptune Touchpad</strong></span><br><span id="span7">"These touchpads hook up to any Neptune Meter and can make reading meters easier. *Must purchase reading wand/gun to use."</span></h4>
                </div>
                <div class="item">
                    <img id="pic4" class="img-thumbnail"  src="../images/ABTImages/SensusTouch.png" />
                        <h4><span><strong>Sensus Touchpad</strong></span><br><span id="span8">"These touchpads hook up to any Sensus Meter and can make reading meters easier. *Must purchase reading wand/gun to use."</span></h4>
                </div>
                   

                <div class="item">
                    <img id="pic4" class="img-thumbnail"  src="../images/ABTImages/Aclara.png" />
                        <h4><span><strong>Aclara Transmitter</strong></span><br><span id="span9">"These transmitters have a 3 mile range and can be hooked up to any Sensus or Neptune meter. *Must purchase receiving equipment, all reads are taken automatically."<br> Need more info <a href= "../images/Aclara_Data_Sheet.pdf"> click here</a> </span></h4>
                </div>
                  <div class="item">
                    <img id="pic4" class="img-thumbnail" src="../images/ABTImages/Cereniti.png" />
                        <h4><span><strong>Cereniti Transmitter</strong></span><br><span id="span10">"These transmitters come in Celluar or Pulse format and can be hooked up to any Sensus or Neptune meter. *Must purchase receiving equipment, all reads are taken automatically. Range depends on cellular or pulse option."<br> Need more info <a href= "../images/Cereniti_Data_Sheet.pdf"> click here</a></span></h4>
                  </div>
            

                     <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>

            </div>
            </div>
            
            </div><br><br><br>
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
            include('../model/open_db.php');
            global $db;

            if(isset($_POST['submit'])){
                   
                $First_Name=$_POST['First_Name']; 
                $Last_Name=$_POST['Last_Name']; 
                $Baddress=$_POST['Baddress']; 
                $Community=$_POST['Community']; 
                $City=$_POST['City']; 
                $Zip=$_POST['Zip']; 
                $Phone=$_POST['Phone']; 
                $Email=$_POST['Email']; 
                $Bstate=$_POST['Bstate']; 
            
                $Meter=$_POST['Meter']; 
                $Number_of_Sites=$_POST['Number_of_Sites']; 
                $Receive_Equip_Price=$_POST['Receive_Equip_Price']; 
                $Repeaters_Needed=$_POST['Repeaters_Needed']; 
                $Repeaters_Cost=$_POST['Repeaters_Cost']; 
                $Labor_Price=$_POST['Labor_Price']; 
                $Parts_Price=$_POST['Parts_Price']; 
                $Meter_Price=$_POST['Meter_Price']; 
                $Total_Price=$_POST['Total_Price'];
                $Estimated_Days=$_POST['Estimated_Days'];
            
                $Respond=$_POST['Respond'];
               
               
                $sql =
                "INSERT INTO Contacts (First_Name,Last_Name,Baddress,Community,City,Phone,Zip,Email,Bstate,Respond)
                VALUES ('$First_Name','$Last_Name','$Baddress', '$Community','$City', '$Phone', '$Zip', '$Email', '$Bstate','$Respond' );
            
                INSERT INTO Meter_Info (Meter,Number_of_Sites,Receive_Equip_Price,Repeaters_Needed,Repeaters_Cost,Labor_Price,Parts_Price,Meter_Price,Total_Price,Estimated_Days)
                VALUES ('$Meter',  '$Number_of_Sites','$Receive_Equip_Price', '$Repeaters_Needed','$Repeaters_Cost', '$Labor_Price', '$Parts_Price', '$Meter_Price', '$Total_Price', '$Estimated_Days' )";
                
                
            
            
            
               $ret = $db->exec($sql);
               if(!$ret){
                echo $db->lastErrorMsg();
               } else {
                 echo "Records created successfully\n";
               }
               $db->close();
            }
            
            
            
     ?>  

        
           
                <!-- Contact Us: address, phone, email, google map, spot for user to leave comments, name, and email
        google ABT Water in Beloit for info on this section need to get this section into form page -->
        <div id="contact" class="container-fluid bg-grey">
        <form name="myForm" action="" method="POST" enctype="multipart/form-data">
                <h1><u>Contact Us</u></h1>
                <div class="row">
                    <div class="col-sm-4">
                        <br><br>
                        <iframe class="wrap-box-element" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=42.549844,-89.021571&amp;ll=42.549844,-89.021571&amp;z=16&amp;output=embed"></iframe>
                
                           
                    </div>

                    <div id="contactUsText" class="col-sm-3">
                        <br><br><br><br><br>
                    <p id="contactUsText"><strong>ABT Water<br>
                            2836 S. Bartells Dr<br>
                            Beloit, WI 53511<br>
                            (608) 313-8791</strong></p>

                    </div>

                    <div class = "col-sm-5">
                        <div class="row">
                            <h2>Give us a call or use the contact form below and your message will be delivered to the appropriate department.</h2>
                        </div>
                        <div class="col-sm-6 lName">
                            <label for="lname">First Name</label>
                            <input required type="text" class="form-control" id="contactFirstName" name="contactFirstName" placeholder="Your first name.."/>
                            <label for="lname">Last Name</label>
                            <input required type="text" class="form-control" id="contactLastName" name="contactLastName" placeholder="Your last name.."/>
                            <label for="lname">Email</label>
                            <input type="text" class="form-control " id="contactEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="contactEmail" placeholder="johndoe@example.com.." required>
                        </div>
                        <div class="col-sm-6">    
                            <label for="lname">Comments</label>
                            <textarea rows="10" id="comment1" name="comment1" class="form-control" rows="5"></textarea>
                        </div>
                        <input class="buttonSu" id="submit1" name="submit1" type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>



        

            <?php
            include('../model/openContactUs_db.php');
            global $db2;
            
              
                if (isset($_POST["submit1"])) {
                   

                    $First_Name = $_POST['contactFirstName'];
                    $Last_Name = $_POST['contactLastName'];
                    $Email = $_POST['contactEmail'];
                    $Comment = $_POST['comment1'];
              
                    $sql2 =
                     "INSERT INTO ContactUs (First_Name, Last_Name, Email, Comment) 
                            VALUES ('$First_Name', '$Last_Name', '$Email', '$Comment' )";
              
              $ret2 = $db2->exec($sql2);
               if(!$ret2){
                echo $db2->lastErrorMsg();
               } else {
                 echo "Records created successfully\n";
               }
               $db2->close();
                  
                }
             
        ?>

            </div>
        </div>
        <footer class="container-fluid text-center">
                <a href="#myPage" title="To Top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>

                <a href="#myPage">
                    <p>Top Of Page</p>
                </a>

            </footer>
        <?php 
        //footer code
          //   include('../model/frontFooter.php');
        ?> 

    <script >         
        <?php
        //javascript that had to be listed seperate from main script
            include("../JS/abtquote2.js");
        ?>
    </script>

</body>
 </html>