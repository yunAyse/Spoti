<?php

require_once("../utils/database.php");
session_start();


if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
    $pseudoCheck = $db->prepare('SELECT * FROM `user` WHERE pseudo = :pseudo');
    $pseudoCheck->execute([
        ':pseudo' => $_POST['pseudo'],
    ]);
    $existingUser = $pseudoCheck->fetch();

    if ($existingUser === $_SESSION['admin']) {
        header('Location: ../admin/admin.php');
        exit(); // Stop further execution
    } else if ($existingUser === $_SESSION['pseudo']) {
        header('Location: ../pages/homepage.php');
        exit();
    } 

        $request = $db->prepare('INSERT INTO `user`(pseudo) VALUES (:pseudo)');
        $request->execute([
            ':pseudo' => $_POST['pseudo'],
        ]);
    
        $userId = $db -> lastInsertId();
    
    
        $sql = "SELECT * FROM user WHERE id = :userId ";
        $user = $db->prepare($sql);
        $user->execute([
            ':userId' => $userId
        ]);
        $pseudoUser = $user->fetch();
    
        // var_dump($pseudoUser[1]);
        $_SESSION['pseudo'] = $pseudoUser[1];
    
        $adminUser = 'admin';
        if ($pseudoUser[1] === $adminUser) {
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