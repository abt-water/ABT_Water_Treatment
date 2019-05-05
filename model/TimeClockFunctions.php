<?php
include("openUser_db.php");

class timeClockForm{
	public function displayTimeClock(){
		global $dbU;
		?>
		<br><br><br>
		<br><br><br>
		<div id="timeClock" class="col-sm-8 text-center">
            
            <form  action = 'ClockEmployee.php' method="POST" enctype="multipart/form-data">
                
        
                        <h1>Clock In / Out</h1>
                                <br><br><br>
                               
                        <label for="employeeID">Employee ID</label>
                        <input class="form-control text-center" type="text" name="employeeID" required>
						<br><br>
                                                         
                        <label for="password">Password</label>
                        <input class="form-control text-center " type="text" name="password" required>
						<br><br>  

						<label for="jobType">Job Type</label>
                        <input class="form-control text-center " type="text" name="jobType" required>
						<br><br>    
                            
                        <input type = "radio" name = "clockType" value= "in" id="clockInRadio" required>
                        <label class="control-label" for="clockInRadio" >Clock In</label>
                
                        <input type = "radio" name = "clockType" value= "out" id="clockOutRadio" required>
                        <label class="control-label" for="clockOutRadio" >Clock Out</label>
                                <br><br><br><br>
            
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