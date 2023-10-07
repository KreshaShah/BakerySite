<?php
$servername = "localhost";
$username = "root"; // username
$password = ""; // password
$database="bakery";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error)  //if (!$conn) {}
{
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
/*$conn->close();
// OR mysqli_close($conn);*/
?>