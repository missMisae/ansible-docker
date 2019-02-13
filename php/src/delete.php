<h1>Delete</h1>
<link rel="stylesheet" href="css/style.css">
<?php

$idToDelete = $_GET['id'];
$host = "172.20.240.1";
$username = "csci459";
$password = "csci459";


// Create connection
$conn = new mysqli($host, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM testdb.testtab WHERE id = $idToDelete";

if(mysqli_query($conn, $sql)){
	echo "Record deleted successfully";
} else {
	 echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();
?>
