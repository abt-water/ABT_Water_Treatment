<?php
include("openUser_db.php");

class timeClockForm{
	public function displayTimeClock(){
		global $dbU;
		?>
		<form class="form-control " action = 'dashboardTimeClock.php' method="POST">
            
        
        <div class="Clock">
            
                <h2>Clock In / Out</h2>
                <br>
    
                <div class="col-lg-12">
               
                <label for="employeeID"><b>Employee ID</b></label>
                <input class="form-control text-center" type="text" name="employeeID" required>
                <br>
                
                

                
                
                <label for="password"><b>Password</b></label>
                <input class="form-control text-center " type="text" name="password" required>
                <br>
                
                

                
				
					<input type = "radio" name = "clockType" value= "in" id="clockInRadio" required>
					<label class="control-label" for="clockInRadio" >Clock In</label>
					
					<input type = "radio" name = "clockType" value= "out" id="clockOutRadio" required>
                    <label class="control-label" for="clockOutRadio" >Clock Out</label>
                    <br><br>
                
                
                
                    <button for="submit" name = "clockSubmit">Submit</button>
				
				

                    </div>
            </div>
            
        </form>
		
		
		<?php		
		if(isset($_POST["clockSubmit"])){
			
			$employee = $_POST["employeeID"];
			$time = time();
			$clockType = $_POST["clockType"];
			
			if ($clockType == "in"){
				$clockType = true;
			}else{
				$clockType = false;
			}
			
			$sql = "INSERT INTO TimeClock (EmployeeID, Time, ClockIn)
					VALUES ('$employee', '$time', '$clockType')";
			
			$result = $dbU->query($sql);
			if (!$result) {
				echo $dbU->lastErrorMsg();
			} else {
				//header('Location: dashboardTimeClock.php');
			}

			$dbU->close();
			
			
		}
	
	}
	
}



?>