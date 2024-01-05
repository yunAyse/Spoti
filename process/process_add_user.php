<?php

require_once("../utils/database.php");
 


if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){

  


$request = $db->prepare('INSERT INTO `user`(pseudo) VALUES (:pseudo)');
$request->execute([
    
    
    ':pseudo' =>$_POST['pseudo'],

]);
}

// $request = $db->query("SELECT * FROM user");
// $pseudo =$request->fetch();

session_start();

$admin_pseudo = 'admin'; 

if(($_POST['pseudo'] === $admin_pseudo)) {
  
    $_SESSION['admin'] = true;
    header('Location: ../admin/admin.php');

} else {
      
    header('Location: ../pages/homepage.php');
}








// header('Location:../homepage.php');