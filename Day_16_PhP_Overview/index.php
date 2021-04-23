<!DOCTYPE html>
<html>
<head>
	<title>PhP</title>
</head>
<body>
<pre>
	Database
	PhP
	SQL 
	Query
	Statements
	Connet with DB
	Create DB
	Create Table
	Insert data
	Update
	Delete
</pre>

<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "demo1";


$conn = mysqli_connect($hostname,$username,$password,$dbname);  // true

if (!$conn) {
	echo "Failed to connet with database ".mysqli_error($conn);
}
else{
	echo "Connection Established Successfully!";
}






?>

</body>
</html>