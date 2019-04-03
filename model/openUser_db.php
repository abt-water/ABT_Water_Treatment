<?php
//Still need to comment and clean code some more last updated 12/15/2018
   class MyDB3 extends SQLite3
   {
     function __construct()
      {
         $this->open('../model/user.db');
      }
   }
   $dbU = new MyDB3();

   
   if(!$dbU){
     echo $dbU->lastErrorMsg();
   } else {
     //echo "Opened database successfully\n";
   }



   
   ?>