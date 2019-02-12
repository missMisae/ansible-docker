<h1>Database with Simple CRUD Operations</h1>
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
}?>

<ul>

	<li><a href="create.php"><strong>Create</strong></a> - add a user</li>
	<li><a href="read.php"><strong>Read</strong></a> - find a user</li>
	<li><a href="update.php"><strong>Update</strong></a> - edit a user</li>
	<li><a href="deleteRecord.php"><strong>Delete</strong></a> - delete a user</li>

</ul>
<?php
$conn->close();
?>
