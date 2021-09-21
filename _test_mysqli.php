<?php
$servername = "104.130.46.73:3306";

// SUPERUSER
//$username = "nikkenla_mkrt";
//$password = "NNikken2011$$";

// NORMAL USER
$username = "geek_user";
$password = "NNikken2021$$";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>