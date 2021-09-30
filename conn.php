<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "facebook";
// Create connection
$conn=mysqli_connect($servername, $username, $password,$db);

// Check connection

if (!$conn)
	
{
echo '<span style=color:red>unable to connect !</span>';	
}

?>