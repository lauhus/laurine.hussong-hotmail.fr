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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier vos informations : </title>
</head>
<body>
<form action="" method="POST">
<label for"pseudo"> Pseudo : </label>
        <input type="text" id="pseudo" name="psd" value="<?php echo $reponse[1] ?>">
        <br>
        <br>
        <label for"password">Nouveau mot de passe: </label>
        <input type="password" id="motdepasse" name="mdpss">
        <br>
        <br>
        <label for"description"> Description : </label>
        <br>
        <textarea id="description" name="dscrp" rows="5" cols="33"> </textarea>
        <br>
        <br>
        <button type="submit"> Envoyé modification  </button>
        <br>
</form>
</body>
</html>

<?php

$psd=$_POST['psd'];
$mdpss=$_POST['mdpss'];
$dscrp=$_POST['dscrp'];

$changement= $bdd->prepare('UPDATE pseudo,mot_de_passe,description FROM user WHERE pseudo=? AND mot_de_passe=? AND decription=?');
$changement->bindParam(1 , $dsn);
$changement->bindParam(2 ,$mdpss);
$changement->bindParam(3 , $dscrp);
$changement->execute();

?>




