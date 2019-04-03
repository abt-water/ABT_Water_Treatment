<?php
include('open_db.php');
//include('../view/abtquote.php');


function submitQuote() {
    global $db;
    

if(isset($_POST['submit'])){
                   
    $First_Name=$_POST['First_Name']; 
    $Last_Name=$_POST['Last_Name']; 
    $Baddress=$_POST['Baddress']; 
    $Community=$_POST['Community']; 
    $City=$_POST['City']; 
    $Zip=$_POST['Zip']; 
    $Phone=$_POST['Phone']; 
    $Email=$_POST['Email']; 
    $Bstate=$_POST['Bstate']; 

    $Meter=$_POST['Meter']; 
    $Number_of_Sites=$_POST['Number_of_Sites']; 
    $Receive_Equip_Price=$_POST['Receive_Equip_Price']; 
    $Repeaters_Needed=$_POST['Repeaters_Needed']; 
    $Repeaters_Cost=$_POST['Repeaters_Cost']; 
    $Labor_Price=$_POST['Labor_Price']; 
    $Parts_Price=$_POST['Parts_Price']; 
    $Meter_Price=$_POST['Meter_Price']; 
    $Total_Price=$_POST['Total_Price'];
    $Estimated_Days=$_POST['Estimated_Days'];

    $Respond=$_POST['Respond'];
   
   
    $sql =<<<EOF
    INSERT INTO Contacts (First_Name,Last_Name,Baddress,Community,City,Phone,Zip,Email,Bstate,Respond)
    VALUES ('$First_Name','$Last_Name','$Baddress', '$Community','$City', '$Phone', '$Zip', '$Email', '$Bstate','$Respond' );

    INSERT INTO Meter_Info (Meter,Number_of_Sites,Receive_Equip_Price,Repeaters_Needed,Repeaters_Cost,Labor_Price,Parts_Price,Meter_Price,Total_Price,Estimated_Days)
    VALUES ('$Meter',  '$Number_of_Sites','$Receive_Equip_Price', '$Repeaters_Needed','$Repeaters_Cost', '$Labor_Price', '$Parts_Price', '$Meter_Price', '$Total_Price', '$Estimated_Days' );
    
    
EOF;


   $ret = $db->exec($sql);
   if(!$ret){
    echo $db->lastErrorMsg();
   } else {
     echo "Records created successfully\n";
   }
   $db->close();
}

}

?>