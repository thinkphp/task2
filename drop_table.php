<?php
ini_set("display_errors",1);
require_once("config.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
}

$sql = "DROP table tasks;";
if ($conn->query($sql) === TRUE) {

  echo "Deleted table successfully";
  
} else {

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
?>
