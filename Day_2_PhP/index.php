<!DOCTYPE html>
<html>
<head>
	<title>PhP</title>
</head>
<body>

<?php  

/*connetion with server*/
$server = "localhost";
$user = "root";
$pw = "";
$db = "web_dev";

$conn = mysqli_connect($server,$user,$pw,$db);

if (!$conn) {
	echo "Error in Connecting".mysqli_error($conn);
}
else{
	echo "Connection Established";
}
echo "<br><br>";



/*creating database table*/
/*

int
varchar
date
text

*/
/*$query1 = mysqli_query($conn,"CREATE TABLE web_table(

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
}*/
echo "<br><br>";

/*sending data into database table*/
/*$query2 = mysqli_query($conn,"INSERT INTO web_table 
	(id,name,address,subject) VALUES
	('','Govind2','Bhilwara2','Web Devlopment2')");

if (!$query2) {
	echo "error in sending data ".mysqli_error($conn);
}
else{
	echo "ok";
}*/
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

<pre>
	SQL Queries
		CREATE DATABASE db_name;
		CREATE TABLE db_table;
		INSERT INTO table_name VALUES(val1,val2);
		SELECT * FROM web_table
		SELECT name,address FROM web_table
</pre>



</body>
</html>
------------------------- Our Hosting Plans --------------------------
-						  Time  -  1 year							 -
-						  Price -  2500 RS 						 	 -		
----------------------------------------------------------------------
01.  Linux Shared Hosting											 -
02.  Storage        2GB (Can be increased upto 10GB)				 -
03.  Databases      Unlimited										 -
04.  Email          Free (1 year),(support/contact/info@domain.com)  -
05.  SSL  			Free (1 year)									 -
06.  Visitors 		10K												 -
07.  Bandwidth  	Unlimited										 -
08.  Admin Panel  	Plesk Admin										 -
09.  Free Domain  	No 												 -
10.  WordPress		Yes( One click installation ) 					 -
----------------------------------------------------------------------




