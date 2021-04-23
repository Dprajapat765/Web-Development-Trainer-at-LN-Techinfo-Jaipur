<?php  
include("connection.php");


/*sending data into database table*/
$query2 = mysqli_query($conn,"INSERT INTO web_table 
	(id,name,address,subject) VALUES
	('','Govind2','Bhilwara2','Web Devlopment2')");

if (!$query2) {
	echo "error in sending data ".mysqli_error($conn);
}
else{
	echo "ok";
}
echo "<br>";

// how to fetch data from database tables
$query3 = mysqli_query($conn, "SELECT name,address FROM web_table");
if (mysqli_num_rows($query3)>0) {// if number of rows greater than 0
	// object {},[],()
	while ($row = mysqli_fetch_assoc($query3)) {// $row == 10
		// array conversion
		print_r($row);
	}
}

?>