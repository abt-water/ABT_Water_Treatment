<?php
class timeClockForm{
	public function displayTimeClock(){
		?>
		<form action = 'ClockEmployee.php' method="POST">
            <div class="Clock">
                <h2>Clock In / Out</h2>
                <br>
                <label for="employeeID"><b>Employee ID</b></label>
                <input type="text" name="employeeID" required>
                <br/>

                <label for="password"><b>Password</b></label>
                <input type="text" name="password" required>
                <br/>
				<div>
					<input type = "radio" name = "clockType" value= "in" id="clockInRadio" required>
					<label for="clockInRadio" >Clock In</label>
					
					<input type = "radio" name = "clockType" value= "out" id="clockOutRadio" required>
					<label for="clockOutRadio" >Clock In</label>
				</div>
				

                <button for="submit">Submit</button>
            </div>
        </form>
		
		
		<?php		
	}
	
}



?>