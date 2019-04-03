<?php

class MyDB extends SQLite3
{
   function __construct()
   {
      $this->open('test.db');
   }
}
$db = new MyDB();
if(!$db){
   echo $db->lastErrorMsg();
} else {
   echo "Opened database successfully\n";
}

 

?>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<html>
<body>
<form name="myForm" action="" method="POST" enctype="multipart/form-data">
    Input Meter:<br>
   <input required type="text" class="form-control" name="Meter1">
   <br><br>
   Input Transmitter:<br>
   <input required type="text" class="form-control" name ="Transmitter1">
<br>
   <br>
   <input type ="submit" name="submit" value="save">
</form>
</body>
</html>
<?php 

if(isset($_POST['submit'])){

   $Meter1=$_POST['Meter1']; 
   $Transmitter1=$_POST['Transmitter1']; 

   $sql = 
   "INSERT INTO Meters (Meter1,Transmitter1)
   VALUES ('$Meter1', '$Transmitter1')";
    
     
    $ret = $db->exec($sql);
    if(!$ret){
     echo $db->lastErrorMsg();
    } else {
      echo "Records created successfully\n";
    }
    
  
   }

  ?>
  <?php
class MyDB1 extends SQLite3
{
   function __construct()
   {
      $this->open('test.db');
   }
}
$conn = new MyDB1();
if(!$conn){
   echo $conn->lastErrorMsg();
} else {
   echo "Opened database successfully\n";
}

$sql1 = "SELECT Meter1, Transmitter1 FROM Meters";
$result = $conn->query($sql1);

if ($result) {
    //echo "<table><tr><th>Meter & Transmitter</th></tr>";
    // output data of each row
    while($row = $result->fetchArray()) {
        echo "<option>" . $row["Meter1"]. " " . $row["Transmitter1"]. "</option>";
    }
   // echo "</table>";
   
}  else {
    echo "0 results";
}

$conn->close();
  ?>
  