<?php
$servername = "localhost"; 
$username   = "root";      // default in XAMPP
$password   = "rishan7104@";          // default is empty
$dbname     = "feedback_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name   = $_POST['name'];
$rating = $_POST['rating'];

// Insert into DB
$sql = "INSERT INTO feedback (name, rating) VALUES ('$name', '$rating')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>✅ Thank you for your feedback!</h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
