<?php
  $id = $_GET['id'];
  // do some validation here to ensure id is safe


// Create connection
$conn = new mysqli('localhost', 'root', '123456', 'dvs');									//code for database connectivity
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT PARTY_SYMBOL FROM candidate_table WHERE CAND_ID='$id'";					    //query to retrieve party symbol
$result = $conn->query($sql);


   $row = $result->fetch_assoc();															//to fetch records into a 'row' variable
       // echo "bid: " . $row["bid"]. " - Name: " . $row["bname"]. "Color: " . $row["color"]. "<br>";
      
    $conn->close();   
  
  header("Content-type: image/jpg");
  echo $row['PARTY_SYMBOL'];
?>