<?php


require_once('dbconnect.php');

echo '<br>';

$distance1= isset($_POST['distance1']) ? $_POST['distance1'] : '';
$distance2= isset($_POST['distance2']) ? $_POST['distance2'] : '';
$hotel= isset($_POST['hotel']) ? $_POST['hotel'] : '';
$fName= isset($_POST['fname']) ? $_POST['fname'] : '';
$lName= isset($_POST['lname']) ? $_POST['lname'] : '';


// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO Calc(distance1, distance2, hotel, fname, lname)
VALUES('$distance1', '$distance2', '$hotel', '$fName', '$lName')";



if ($conn->query($sql) === TRUE) {
  echo "Your emissions have been Calculated! Click this button to view the results!";

} 



else 

{
  echo "Sorry! Something went wrong"; 
}

$conn->close();




?>
 
 <form action = "reveal.php">
        <button type="download-button" class="btnop" style="text-align: center">View Results!</button>
      </form>
    

