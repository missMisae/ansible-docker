<h1>Update</h1>
<link rel="stylesheet" href="css/style.css">
<?php
$host = "172.20.240.1";
$username = "csci459";
$password = "csci459";
$dbname = "testdb";

// Create connection
$conn = new mysqli($host, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->close();
?>
