<?php
class timeClockForm{
	public function displayTimeClock(){
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
	}
	
}



?>