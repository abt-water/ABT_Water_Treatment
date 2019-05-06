<?php
//include('open_db.php');
//include('../view/abtquote.php');


function get_contact_info() {
  //include('frontEndForms.php');
  global $db;

  $contactQuery = "SELECT First_Name, Last_Name, ID FROM Contact_Us ORDER BY ID";
  $contactResult = $db->query($contactQuery);
  
  if ($contactResult == false) {
      display_db_error($db->error);
  }

  $row = array(); 

  $i = 0; 

   while($res = $contactResult->fetchArray(SQLITE3_ASSOC)){ 
      $row[$i]['First_Name'] = $res['First_Name']; 
      $row[$i]['Last_Name'] = $res['Last_Name']; 
      $row[$i]['ID'] = $res['ID'];

      $i++; 
  } 
return $row;
}

if (isset($_POST['contactSubmit'])) {
  global $db;

  $ID7= $_POST['nameList'];

  $sql2 = "SELECT * FROM Contact_Us WHERE ID=". $ID7 ;

  $result1 = $db->query($sql2);

  if($result1){
  while($row = $result1->fetchArray()) {
      
      $ID1=$row["ID"];
      $Email=$row["Email"];
      $First_Name=$row["First_Name"];
      $Last_Name=$row["Last_Name"];
      $Comment=$row["Comment"];
  }
}
} 



function submitQuote() {
 // include('frontEndForms.php');
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
<?php


//function that submits quote to database
   // include('../controller/frontEndController.php');
    //include('../controller/contactUsController.php');
   // echo $submitQuote;
    //$contactUs = contactUs();
    function contactUs() {
        //include('frontEndForms.php');
        global $db;
      
        /*Creates a new contact us form*/
       // $form = new contactUsForm();
      
        /*Displays the contact us form*/
       // $form ->displayContactUs();
      
        if (isset($_POST["submit1"])) {
        
            $First_Name = $_POST['firstName1'];
            $Last_Name = $_POST['lastName1'];
            $Email = $_POST['Email1'];
            $Comment = $_POST['comment1'];
      
            $sql =
             "INSERT INTO ContactUs (First_Name, Last_Name, Email, Comment) 
                    VALUES ('$First_Name', '$Last_Name', '$Email', '$Comment' )";
      
           // $result1 = $db->query($sql1);
      
            //if (!$result1) {
             //   echo $db->lastErrorMsg();
           // } else {
            //    header('Location: abtLogin.php');
            //}
      
           // $db->close();
        }
      }
      ?>