<?php
include("openUser_db.php");

class timeClockForm{
	public function displayTimeClock(){
		global $dbU;
		?>
		<div class="col-sm-4 text-center">
            
            <form  action = 'ClockEmployee.php' method="POST" enctype="multipart/form-data">
                
        
                        <h1>Clock In / Out</h1>
                                <br>
                               
                        <label for="employeeID">Employee ID</label>
                        <input class="form-control text-center" type="text" name="employeeID" required>
                                
                                                         
                        <label for="password">Password</label>
                        <input class="form-control text-center " type="text" name="password" required>
                                
                            
                        <input type = "radio" name = "clockType" value= "in" id="clockInRadio" required>
                        <label class="control-label" for="clockInRadio" >Clock In</label>
                
                        <input type = "radio" name = "clockType" value= "out" id="clockOutRadio" required>
                        <label class="control-label" for="clockOutRadio" >Clock In</label>
                                <br><br>
            
                            <button for="submit">Submit</button>
            
            
                    
            </form>
        

            
    
</div>
</div>
		
		
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