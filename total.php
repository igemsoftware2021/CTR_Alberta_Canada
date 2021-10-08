<?php


require_once('dbconnect.php');

echo '<br>';

$email_address = $_POST['email_address'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO Users(total_em)
VALUES ('total_em')";



if ($conn->query($sql) === TRUE) {
  echo "Congrats! Your results have been submitted!";
} 

else 

{
  echo "Sorry! This email already exists. Please choose a different email"; 
}

$conn->close();

?>

