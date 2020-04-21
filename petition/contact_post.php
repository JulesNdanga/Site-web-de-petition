<?php
//La page contact_post.php reçoit les données du formulaire, enregistre le message

// Connexion à la base de données
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=petition', 'root', '',
$pdo_options);
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO contact (pseudo,mail, message)
VALUES(?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['mail'], $_POST['message']));
// Redirection du visiteur vers la page du minichat
header('Location: contact.php');
}catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>
travelreserve