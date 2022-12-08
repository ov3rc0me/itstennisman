<?php

$testmail = $_POST['mail'];

$servername = "localhost";
$username = "root";
$password2 = "";
$db = "itstennisman";

$conn = new mysqli($servername, $username, $password2, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into newsletter(mail) values('$testmail')";

if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$testmail;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>
