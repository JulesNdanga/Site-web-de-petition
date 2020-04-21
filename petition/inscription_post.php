<?php


// Connexion à la base de données
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=petition', 'root', '',
$pdo_options);
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO inscription (pseudo,email, password)
VALUES(?, ?, ?)');
//$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
//$req->execute(array($_POST['pseudo'], $_POST['email'], $password));
$req->execute(array($_POST['pseudo'], $_POST['email'], $_POST['password']));
// Redirection du visiteur vers la page du minichat
header('Location: connexion.php');
}catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>