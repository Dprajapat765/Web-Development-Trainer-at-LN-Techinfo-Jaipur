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

?>