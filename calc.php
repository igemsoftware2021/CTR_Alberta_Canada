<html>
<head>
  <link rel="stylesheet" href="menu2.css">

  <ul>
    <img src='https://cdn.discordapp.com/attachments/806311765947449377/844349440101711882/tryyyyy.png' style='position:absolute; top:0; left:0;' width='80px' height='80px'>
    <li><a href="homeattendee.html">Home</a></li>
    <li><a href="inputlink.html"> Carbon Calculator</a></li>
    <li><a href="trees.html">Tree Planting Calculator</a></li>
    <li><a href="offsetting.html">Offsetting Guide</a></li>
    <li><a href="facilities.html">Sustainable Facility Options</a></li>
    <li style="float:right"><a class="active" href="choose.html">Change Mode</a></li>
  </ul>

  <br>


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





  echo "Your form has been successfully submitted! Feel free to check out some of the other features of our app:";

} 



else 

{
  echo "Sorry! Something went wrong with your submission. Please go back and try again."; 
}

$conn->close();




?>
 
 <br>

 <body style = "text-align:center;">

<div1>

 <br>

  <form action = "trees.html">
    <button type="download_button" class="btnop" style="text-align: center">Tree Planting Calculator</button>
  </form>



<br> 

  

  <form action = "offsetting.html">
    <button type="download-button" class="btnop" style="text-align: center">Offsetting Guide</button>
  </form>


<br> 





  <form action = "facilities.html">
    <button type="download-button" class="btnop" style="text-align: center">Sustainable Facility Options</button>
  </form>

</div1>
    
</body>

<style>
  .div1 {

  background-color: white;
  width: 500px;
  height: 100px;
  padding: 50px;
  margin-top: 300px;

 
  
  
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

  div {

background-color: white;
width: 500px;
height: 100px;
padding: 50px;
margin: auto;
margin-top: 60px;
text-align: center;

  }
  
  </style>
