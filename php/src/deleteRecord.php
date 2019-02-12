<h1>Delete</h1>
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
// sql to delete a record
$sql = "SELECT id, name FROM testdb.testtab";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>NAME</th>
<th>ID</th>
</tr>";
if(mysqli_num_rows($result) > 0 ){
	while($row = mysqli_fetch_array($result)){

echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td> "<a href='"".$delete.php."'id=.$row['id'].></a></td>;
echo "</tr>";
}
}
echo "</table>";
$conn->close();
?>
