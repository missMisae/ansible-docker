<h1>Delete</h1>
<link rel="stylesheet" href="css/style.css">
<?php
$id = $_GET['id'];
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
// sql to delete a record
$sql = "DELETE id, name FROM testdb.testtab WHERE id=$id";
$result = $conn->query($sql);
$conn->close();
?>
