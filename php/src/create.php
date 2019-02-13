<html>
   <head>
      <h1>Create</h1>
			<link rel="stylesheet" href="css/style.css">
   </head>

<body>
		 <div id = "main">
				<form action = "" method = "post">
					 <label>Name :</label>
					 <input type = "text" name = "name" id = "name" />
					 <br />
					 <br />
				 <input type = "submit" value ="Submit" name = "submit"/>
				 <br />
				 </form>
			 </div>

<?php
if(isset($_POST["submit"])){
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

	$sql = "INSERT INTO testdb.testtab(name)VALUES ('".$_POST["name"]."')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
		$conn->close();
}

?>
</body>
</html>
