<?php
//Still need to comment and clean code some more last updated 12/15/2018
  require_once('open_db.php');

   $sql =<<<EOF
      CREATE TABLE Contacts
      (
         ID INTEGER PRIMARY KEY AUTOINCREMENT,
      First_Name           TEXT,
      Last_Name            TEXT,
      Baddress        CHAR(50),
      City        CHAR(50),
      Community       CHAR(50),
      Phone        INT,
      Zip        INT,
      Email       CHAR(50),
      Bstate        CHAR(50),
      Respond       TEXT
   );
       


      CREATE TABLE Meter_Info
      (
         ID INTEGER PRIMARY KEY AUTOINCREMENT,
      Meter           CHAR(50),
      Number_of_Sites            CHAR(50),
      Receive_Equip_Price        CHAR(50),
      Repeaters_Needed        CHAR(50),
      Repeaters_Cost       CHAR(50),
      Labor_Price        CHAR(50),
      Parts_Price        CHAR(50),
      Meter_Price       CHAR(50),
      Total_Price        CHAR(50),
      Estimated_Days       CHAR(50));

      CREATE TABLE Meters
      (
      
      Meter1       CHAR(50),
      Transmitter1            CHAR(50)
      );

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>

