<?php
//Still need to comment and clean code some more last updated 12/15/2018
   class MyDB2 extends SQLite3
   {
     function __construct()
      {
         $this->open('../model/test.db');
      }
   }
   $db2 = new MyDB2();

   
   if(!$db2){
     echo $db2->lastErrorMsg();
   } else {
    // echo "Opened database successfully\n";
   }



   
   ?>