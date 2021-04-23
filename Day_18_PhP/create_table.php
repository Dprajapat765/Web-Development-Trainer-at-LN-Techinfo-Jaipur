<?php  
include("connection.php");
/*creating database table*/
/*
Most Common Data Types in SQL
int
varchar
date
text

*/
$query1 = mysqli_query($conn,"CREATE TABLE web_table(

id INT NOT NULL,
name VARCHAR(255),
address VARCHAR(255),
subject VARCHAR(255),
PRIMARY KEY(id)

)");

if (!$query1) {
	echo "error with database table!!!! ".mysqli_error($conn);
}
else{
	echo "ok";
}
echo "<br><br>";


?>