ini_set("display_errors",1);
require_once("config.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE tasks (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
task VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table 'tasks' created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
