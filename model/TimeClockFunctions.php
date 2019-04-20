<?php
class timeClockForm{
	public function displayTimeClock(){
		?>
		<form class="form-control" action = 'ClockEmployee.php' method="POST">
            <div class="Clock">
            
                <h2>Clock In / Out</h2>
                <br>

                <div class="col-sm-9 text-center" class="form-group row">
                <label for="employeeID"><b>Employee ID</b></label>
                <input class="form-control text-center" type="text" name="employeeID" required>
                <br>
                </div>

                <div class="col-sm-9 text-center" class="form-group row">
                <label for="password"><b>Password</b></label>
                <input class="form-control text-center " type="text" name="password" required>
                <br>
                </div>

				<div class="col-sm-9 text-center" class="form-group row">
					<input type = "radio" name = "clockType" value= "in" id="clockInRadio" required>
					<label class="control-label" for="clockInRadio" >Clock In</label>
					
					<input type = "radio" name = "clockType" value= "out" id="clockOutRadio" required>
                    <label class="control-label" for="clockOutRadio" >Clock In</label>
                    <br><br>
                </div>

                <div class="col-sm-9 text-center" class="form-group row">
                    <button for="submit">Submit</button>
				</div>
				

                
            </div>
        </form>
		
		
		<?php		
	}
	
}



?>