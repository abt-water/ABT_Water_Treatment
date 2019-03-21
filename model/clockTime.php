<?php
require_once('openUser_db.php');



function manualEmployeeClock(int $employeeID,  $clockTime = new DateTime(), boolean $clockIn, [string $costCode], [string $job]){
	$sqlite = $dbU->prepare("INSERT into TimeClock ")
}
try{
	
}catch(PDOException $e){
		echo("Ran into an error.");
		echo $e->getMessage();
}

function autoClock(int $employeeID, [string $costCode], [string $job]){
	$sqlite = $dbU->query("Select MAX(Time), ClockIn From TimeClock WHERE ")
	
}


?>