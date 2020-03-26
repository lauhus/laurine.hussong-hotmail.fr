<?php
$pseudo=$_POST['pseudo'];
$motdepasse=$_POST['mot_de_passe'];
$description=$_POST['description'];

$mysqli=new mysqli('localhost','lauhu','stagiaire ','crud');
$mysqli->set_charset("utf8");

if($mysqli->connect_error){
echo 'connexion impossible...:'.$mysqli->connect_error;
}
else { 
echo 'connexion réussie :'.$mysqli->host_info;
}

$query = "INSERT INTO user(pseudo,mot_de_passe,description) VALUES('$pseudo','$motdepasse','$description')";

if (mysqli_query($mysqli, $query)) {
echo 'Merci !'.header("location:http://localhost/CRUD/index.html");
} else {
echo 'Error: ' . $query . '<br>' . mysqli_error($mysqli);
}


$mysqli->close;

?>