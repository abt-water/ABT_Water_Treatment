<?php
class timeClockForm{
	public function displayTimeClock(){
		?>
		<form action = 'dashboardTimeClock.php' method="POST" ID = "clockForm">
            <div class="Clock container">
                <h2>Clock In / Out</h2>
                <label for="employeeID" class = "ClockLabel"><b>Employee ID</b></label>
                <input type="text" name="employeeID" required class = "ClockInput">
          
				

				<label for="password" class = "ClockLabel"><b>Password</b></label>
				<input type="text" name="password" required class = "ClockInput">
			
			
				
				<br/>

                <label for="clockType" class = "ClockLabel"><b>Clock Type</b></label>
                <input type="text" name="clockType" value = "Driving / Installing" class = "ClockInput">
				<br/>
				<div class = "ClockLabel">
					<input type = "radio" name = "clockType" value= "in" id="clockInRadio" required>
					<label for="clockInRadio" >Clock In</label>
					
					<input type = "radio" name = "clockType" value= "out" id="clockOutRadio" required>
					<label for="clockOutRadio" >Clock In</label>
				</div>
                <button for="submit" name = "submit" id = "submit" type = "submit" class = "btn primary ClockBtn">Submit</button>
            </div>
        </form>
		
		
		<?php		
	}
	
	if (isset($_POST["submit"])){
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$employeeID =$_POST['employeeID'];
			$password = $_POST['password'];
			$clockIn = $_POST['clocktype'];
			
			$sqlTxt = "using User;
			Insert into TimeClock VALUES";
			
			
		}		
	}
	
	
	
	
}

?>