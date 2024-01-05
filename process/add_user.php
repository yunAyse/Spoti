<?php

require_once("connexion.php");

if(isset($_POST['pseudo']) && !empty($_POST['pseudo']));

$pseudo = $_POST['pseudo'];

$request = $bdd->prepare('INSERT INTO `user`( `pseudo`) VALUES ( `:pseudo`');
$request->execute([
    
    ':pseudo' => $pseudo,
]);

$request = $bdd->query("SELECT * FROM user");
$pseudo =$request->fetchAll();

var_dump($_POST);
// header('Location:../homepage.php');