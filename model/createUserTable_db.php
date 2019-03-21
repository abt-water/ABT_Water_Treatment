<?php
//Still need to comment and clean code some more last updated 12/15/2018
  require_once('openUser_db.php');

   $sql =<<<EOF
      CREATE TABLE Contacts
      (
      ID INTEGER PRIMARY KEY AUTOINCREMENT,
      firstName           TEXT,
      lastName            TEXT,
      employeeID        INT,
      birthDate        CHAR(50),
      username       CHAR(50),
      password        CHAR(50),
      confirmPassword        CHAR(50)
      
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
