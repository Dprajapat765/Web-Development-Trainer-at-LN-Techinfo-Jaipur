<?php  
include("connection.php");

/*creating database*/
$query = mysqli_query($conn,"CREATE DATABASE web_dev2");

if (!$query) {
	echo "erro with database creation!!!! ".mysqli_error($conn);
}
else{
	echo "ok";
}
echo "<br><br>";
?>