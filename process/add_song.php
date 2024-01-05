<?php 

require_once('/laragon/www/PHP-PDO/CLONE-Spotify/utils/database.php');
session_start();

if (isset($_POST['name']) && !empty($_POST['name']) &&
isset($_POST['title']) && !empty($_POST['title']) &&
isset($_FILES['sound']) && !empty($_FILES['sound']) &&
isset($_FILES['image']) && !empty($_FILES['image'])
) {

  // var_dump($_POST);

  // store the inputs
  $name = $_POST['name'];
  $title = $_POST['title'];
  $sound = $_FILES['sound'];
  $image = $_FILES['image'];

  // store the variables in an array 
  $song = [
    'name' => $name,
    'title' => $title,
    'sound' => $sound
  ];

  // store the song array into a session
  // $_SESSION['song'] = $song;

  // var_dump($_SESSION['song']);

  // }

  $sqlJoint = "SELECT ";

  if (isset($song['name'])) {
    $sqlArtist = "INSERT INTO artist (name) VALUES (:name)";
  $artistName = $db-> prepare($sqlArtist);
  $artistName->execute([
    'name' => $name
  ]);
  }

  if (isset($song['title'], $song['sound'])) {
    $sqlSong = "INSERT INTO song (title, sound) VALUES (:title,:sound)";
  $soundTitleAudio = $db->prepare($sqlArtist);
  $soundTitleAudio->execute([
    'title' => $title,
    'sound' => $sound
  ]);
  } 

  header('Location: ../pages/homepage.php');

} else {
  header('Location: ../admin/admin.php');
}

?>