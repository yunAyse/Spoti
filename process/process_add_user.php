<?php

require_once("../utils/database.php");
session_start();


if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {

    $pseudo_name = $_POST['pseudo'];

    $request = $db->prepare('SELECT * FROM `user` WHERE pseudo = :pseudo');
    $request->bindValue(':pseudo', $pseudo_name);
    $request->execute();
    $pseudoSelects = $request->fetch();

    if ($pseudoSelects) {
        $userId = $pseudoSelects['id'];
    } else {
        $requestUser = $db->prepare('INSERT INTO `user`(pseudo) VALUES (:pseudo)');
        $requestUser->execute([
            ':pseudo' => $_POST['pseudo'],
        ]);
       
        $userId = $db -> lastInsertId();
    }

    $_SESSION['pseudoname'] = $pseudoSelects[1];
    $_SESSION['pseudoid'] = $pseudoSelects[0];

    // var_dump($_SESSION['pseudoname']);


        // $sql = "SELECT * FROM user WHERE id = :userId ";
        // $user = $db->prepare($sql);
        // $user->execute([
        //     ':userId' => $userId
        // ]);
        // $pseudoUser = $user->fetch();
    
        // var_dump($pseudoUser[1]);
      
        $adminUser = 'admin';
        if ($pseudoSelects[1] === $adminUser) {
            $sqlAdmin = "SELECT * FROM user WHERE pseudo = :adminUser";
    
            $admin = $db->prepare($sqlAdmin);
            $admin->execute([
                ':adminUser' => $adminUser
            ]);
            $adminPseudo = $admin->fetch();
            $_SESSION['admin'] = $adminPseudo[1];
    
            header('Location: ../admin/admin.php');
        } else {
            header('Location: ../pages/homepage.php');
        } 


} 

   
// $request = $db->query("SELECT * FROM user");
// $pseudo =$request->fetch();


// header('Location:../homepage.php');
