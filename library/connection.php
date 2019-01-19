<?php
	$db = mysqli_connect("localhost","root","","library"); /*syntax server name,username,password,databasename*/
	if(!$db){

		die("Connection Failed: ".mysqli_connect_error());
	}
	echo "connected Successfully!";
?>