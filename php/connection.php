<?php
$host="localhost";
$username="root";
$password="";
$db="housing_society";

$conn = mysqli_connect($host,$username,$password,$db) or die (mysql_error());
if (!$conn)
{    
	die("Connection failed: " . mysqli_connect_error());
}
// echo "Successfully connected db <br>" ;
?>
