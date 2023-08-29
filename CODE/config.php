<?php


$conn=mysqli_connect( '127.0.0.1:8111','root','','user_db');


if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
	echo 'failed';
}

?>
