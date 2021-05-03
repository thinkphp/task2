<?php
ini_set("display_errors",1);
require_once("config.php");


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tasks (id, task) VALUES (1, 'mysql');";
$sql .= "INSERT INTO tasks (id, task) VALUES (2, 'redis');";
$sql .= "INSERT INTO tasks (id, task) VALUES (3, 'mongodb');";

if ($conn->multi_query($sql) === TRUE) {

  echo "New records created successfully";
  
} else {

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
?>
