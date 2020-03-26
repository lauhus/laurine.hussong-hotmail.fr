<?php

$pseudo=$_POST['pseudo'];
$motdepasse=$_POST['mot_de_passe'];
$description=$_POST['description'];


$dsn = 'mysql:host=localhost;dbname=crud;charset=utf8'; 
$user = 'lauhu';   
$mdp = 'stagiaire ';  

try {
    $bdd = new PDO($dsn,$user,$mdp);
    
} catch ( PDOException $E) {
        
        die( header('Location: ../Views/delete.html?message="ça ne marche pas"'));
}

        // $efface= $bdd->prepare('DELETE * FROM user WHERE ? AND ? AND ?');

        // $efface->bindParam(1, $pseudo);
        // $efface->bindParam(2 , $motdepasse);
        // $efface->bindParam(3, $description);

        // $executeisok=$efface->execute();
        // if ($executeisok){
        //     echo 'supprimé'
        // } 
        // else 
        // {
        //     echo 'erreur'
        // }
        
        


        
        // // $efface=$bdd->prepare('DELETE * FROM user WHERE pseudo=?');
        // // $efface->bindParam(1 ,$pseudo);
        // // $efface->execute();

        // // echo 'ok ok';
        


