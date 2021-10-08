<!DOCTYPE html>
<html>
<head>
   
  <link rel="stylesheet" href="menu.css">
  <ul>
    <img src='https://cdn.discordapp.com/attachments/806311765947449377/844349440101711882/tryyyyy.png' style='position:absolute; top:0; left:0;' width='80px' height='80px'>
    <li><a href="homehost.html">Home</a></li>
    <li><a href="createlink.html">Create Event</a></li>
    <li><a href="lookevents.html">My Events</a></li>
    <li style ="float:right"><img src="https://lh3.googleusercontent.com/ogw/ADea4I6qDzNhFKNdT0UdCb-Ep_4C_Jzt3GfCxuwwZnwMTQ=s64-c-mo" alt="Avatar" class="avatar"></li>
    <li style="float:right"><a class="active" href="choose.html">Change Mode</a></li>
</ul>


</head>
<body>


<?php
require_once('dbconnect.php');


// 1. Extract the form variables
$emailAddress = $_POST['email_address'];
$password = $_POST['password'];

// 2. Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

try {
  // 3. Prepared statement
  $stmt = $mysqli->prepare("SELECT first_name from Users where email_address = ? and password = ?");
  $stmt->bind_param( 'ss', ...[$emailAddress, $password] );
  $stmt->execute();
  $stmt->store_result();

  if(  $stmt->num_rows()  == 1 ) {
    // 3.1 Authentication succeeded
    $stmt->bind_result($firstName) ;
    $stmt->fetch();

    echo '<h1>Welcome back ' . $firstName . '!</h1>' ;

    echo '<h3> Click on the home page to get started </h3>';
  }
  else {
      // 3.2 Authentication failed - send the user to the login page with some kind of error
      echo '<h1>Login failed</h1>';
  }
}
finally {
  // 4. Perform cleanup
  $stmt->close() ;
  $conn->close();
  $mysqli->close() ;
  
}

exit ;
?>

<style>

h1 {
  color: #04AA6D;
  margin-top: 120px;
  text-align: center;
  font-size: 1.2em;
}


</style>

