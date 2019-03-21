<?php
//Still need to comment and clean code some more last updated 12/15/2018
include('open_db.php');



function get_categories() {
    global $db;
   
    
    
    $query = "SELECT First_Name, Last_Name, ID FROM Contacts ORDER BY ID";
    $result = $db->query($query);
    
    if ($result == false) {
        display_db_error($db->error);
    
    }
    $row = array(); 

    $i = 0; 

     while($res = $result->fetchArray(SQLITE3_ASSOC)){ 
        $row[$i]['First_Name'] = $res['First_Name']; 
        $row[$i]['Last_Name'] = $res['Last_Name']; 
        $row[$i]['ID'] = $res['ID'];
       // $row[$i]['opt_status'] = $res['opt_status']; 

        $i++; 
       // print_r($row);
    } 
return $row;
}

if (isset($_POST['submit'])) {
    global $db;
    //function get_quote_info() {

    $ID7= $_POST['nameList'];
   // $selected = $_POST['First_Name'] == $row['ID'] ? 'selected' : '';
   // echo $ID;
    $sql2 = "SELECT * FROM Contacts WHERE ID=". $ID7 ;
   $sql3 = "SELECT * FROM Meter_Info WHERE ID=". $ID7 ;
    $result1 = $db->query($sql2);
   $result2 = $db->query($sql3);

    if($result1){
        while($row = $result1->fetchArray()) {
           
        $ID1=$row["ID"];
        $Bstate=$row["Bstate"];
        $Community=$row["Community"];
        $Zip=$row["Zip"];
        $City=$row["City"];
        $Phone=$row["Phone"];
        $Email=$row["Email"];
        $First_Name=$row["First_Name"];
        $Last_Name=$row["Last_Name"];
        $Baddress=$row["Baddress"];
        $Respond=$row["Respond"];
        
    }
}
if($result2){
    while($row = $result2->fetchArray()) {
        $TotalCost=$row["Total_Price"];
        $Meter=$row["Meter"];
        $Sites=$row["Number_of_Sites"];
        $Repeaters=$row["Repeaters_Needed"];
        $RepCost=$row["Repeaters_Cost"];
        $RecCost=$row["Receive_Equip_Price"];
        $Parts=$row["Parts_Price"];
        $MeterCost=$row["Meter_Price"];
        $Labor=$row["Labor_Price"];
        $WorkingDays=$row["Estimated_Days"];
    }
}
  } 
    

?>