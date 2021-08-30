<?php

$con = mysqli_connect('localhost', 'root', '','myproject');

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$upload = $_POST['upload'];

$sql = "INSERT INTO `users` (`Id`, `name`, `surname`, `email`, `pwd`,`upload`) VALUES ('0', '$name', '$surname', '$email', '$pwd','$upload')";

$conn = mysqli_query($con, $sql);

if($conn)
{
	echo "record inserted successfully";
}

?>