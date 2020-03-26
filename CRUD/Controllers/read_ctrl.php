<?php

$pseudo=$_POST['pseudo'];


$dsn = 'mysql:host=localhost;dbname=crud;charset=utf8'; 
$user = 'lauhu';   
$mdp = 'stagiaire ';  

try {
    $bdd = new PDO($dsn,$user,$mdp);
    
} catch ( PDOException $E) {
        
        die( header('Location: ../Views/read.html?message="ça ne marche pas"'));
}


$pseudobdd= $bdd->prepare('SELECT * FROM user WHERE pseudo=?');

$pseudobdd->bindParam(1, $pseudo);
$pseudobdd->execute();

$reponse=$pseudobdd->fetch();

echo '<br>' ;
echo 'Votre commentaire dans la base de données est : '.$reponse[3];

?>






