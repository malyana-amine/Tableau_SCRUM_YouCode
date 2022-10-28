<?php
// Create connection
global $conn ;
$conn = new mysqli('localhost', 'root', '', 'scrumboard');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";

?>