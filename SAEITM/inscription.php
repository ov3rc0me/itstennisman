<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$pseudo = $_POST['pseudo'];
$id = 0;
$mail = $_POST['mail'];
$password = $_POST['password'];
$level = $_POST['level'];

$servername = "localhost";
$username = "root";
$password2 = "";
$db = "itstennisman";

$conn = new mysqli($servername, $username, $password2, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into inscriptions(nom,prenom,pseudo,id,mail,password,level) values('$nom','$prenom','$pseudo','$id','$mail','$password','$level')";

if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$nom.", ".$prenom.",".$pseudo.",".$id.",".$mail.",".$password.", ".$mail;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>
