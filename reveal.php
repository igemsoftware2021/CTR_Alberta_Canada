<?php
require_once('dbconnect.php');


// 1. Extract the form variables
$fName= isset($_POST['fname']) ? $_POST['fname'] : '';
$lName= isset($_POST['lname']) ? $_POST['lname'] : '';


// 2. Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

try {
  // 3. Prepared statement
  $stmt = $mysqli->prepare("SELECT distance1 from Calc where fname = ? and lname = ?"););
  $stmt->bind_param( 'ss', ...[$fName, $lName] );
  $stmt->execute();
  $stmt->store_result();

  if(  $stmt->num_rows()  == 1 ) {
    // 3.1 Authentication succeeded
    $stmt->bind_result($distance);
    $stmt->fetch();


    echo '<h1>Welcome ' . $distance . '!</h1>' ;

    echo '<h1> Click on the home page to get started </h1>';
  }
  else {
      // 3.2 Authentication failed - send the user to the login page with some kind of error
  
  }
}
finally {
  // 4. Perform cleanup
  $stmt->close();
  $conn->close();
  
}

exit ;



?>


