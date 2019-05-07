<?php
//Still need to comment and clean code some more last updated 12/15/2018
  require_once('openUser_db.php');

   $sql =<<<EOF
      CREATE TABLE User
      (
      ID INTEGER PRIMARY KEY AUTOINCREMENT,
      firstName           TEXT,
      
      employeeID        INT,
      
      username       CHAR(50),
      bpassword        CHAR(50),
      confirmPassword        CHAR(50)
      
   );
       
   CREATE TABLE TimeClock
   (
   ID INTEGER PRIMARY KEY AUTOINCREMENT,
   EmployeeID           INT,
   
   Time       TEXT,
   
   
   ClockIn        CHAR(50),
   Job        CHAR(50)
   
);
    

      

EOF;

   $ret = $dbU->exec($sql);
   if(!$ret){
      echo $dbU->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $dbU->close();
?>
