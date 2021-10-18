
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

$sql = "INSERT INTO Users(first_name, last_name, email_address, password)
VALUES ('$first_name', '$last_name', '$email_address', '$password')";



if ($conn->query($sql) === TRUE) {
  echo '<h1>Welcome!</h1>' ;
  echo '<h3>Login to begin!</h3>' ;



} 

else 

{
  echo "Sorry! This email already exists. Please choose a different email"; 
}

$conn->close();

?>


<div class ="how">
        <button onclick="window.location.href='index2.php';" class="check" style="text-align: center;" >Register/Login</button>
      </div> 
    <title>Offsetting Guide</title></title>

<style>


div {

background-color: white;
width: 500px;
height: 100px;
padding: 50px;
margin: auto;
margin-top: 60px;
text-align: center;

  }

.btnop {

  background: #04AA6D;
      color: white;
      border-radius: 5px;
      border-width: 0px;
      height: 150px;
      width: 450px;
      font-size: 1.2em;

}

.btnop:hover {
  background-color: green;
}

h1 {
    color:#04AA6D;
    margin-top: 100px;
    text-align: center;
    font-size: 3em;
}


h3 {
    color:black;
    margin-top: 120px;
    text-align: center;
    font-size: 1.2em;
}


</style>
  

