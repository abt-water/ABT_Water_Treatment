<?php
include('open_db.php');
function contactUs() {
    include('forms.php');
    global $db;

    /*Creates a new contact us form*/
    $form = new contactUsForm();

    /*Displays the contact us form*/
    $form ->displayContactUs('contactUs', 'contactUsPage.php', 'post');

    if (isset($_POST["submit1"])) {
    
        $First_Name = $_POST['firstName1'];
        $Last_Name = $_POST['lastName1'];
        $Email = $_POST['Email1'];
        $Comment = $_POST['comment1'];

        $sql = "INSERT INTO Contact_Us (First_Name, Last_Name, Email, Comment) 
                VALUES ('$First_Name', '$Last_Name', '$Email', '$Comment' )";

        $result = $db->query($sql);

        if (!$result) {
            echo $db->lastErrorMsg();
        } else {
            header('Location: abtLogin.php');
        }

        $db->close();
    }
}

function get_contact_info() {
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
?>
