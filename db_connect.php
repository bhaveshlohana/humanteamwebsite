<?php 
	$conn=mysqli_connect("localhost", "bhavesh", "test123", "humanteam");
	if(!$conn) {
		echo "Connection Error: " . mysqli_connect_error();
	}
?>