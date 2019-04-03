<?php
//Still need to comment and clean code some more last updated 12/15/2018
   class MyDB extends SQLite3
   {
     function __construct()
      {
         $this->open('../model/test.db');
      }
   }
   $db = new MyDB();

   
   if(!$db){
     echo $db->lastErrorMsg();
   } else {
    // echo "Opened database successfully\n";
   }



   
   ?>