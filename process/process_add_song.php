<?php 

require_once('../utils/database.php');
session_start();

if (isset($_POST['name']) && !empty($_POST['name']) &&
isset($_POST['title']) && !empty($_POST['title']) &&
isset($_FILES['sound']) && !empty($_FILES['sound']) &&
isset($_FILES['image']) && !empty($_FILES['image'])


){

  if((!isset($_POST['albumTitle']) && empty($_POST['albumTitle'])) || (isset($_POST['albumTitle']) && !empty($_POST['albumTitle'])) ){
   $albumTitle = $_POST['albumTitle'] ;
  }
  
  // store the inputs
  $name = $_POST['name'];
  $title = $_POST['title'];
  $sound = $_FILES['sound'];
  $image = $_FILES['image'];

  // var_dump($name, $title);
  // die();

  // file details to take the name of the files.
  $soundName = $sound['name'];
  $imageName = $image['name'];

  // temporary file paths, for storing in a temporary location in the server. the $_files array contains information about the file in this temparary location.
  // until move it to a permanent location

  $soundTmpName = $sound['tmp_name'];
  $imageTmpName = $image['tmp_name'];

  // handling the uploaded files

  $soundUploadPath = '../audio/' . basename($soundName);
  $imageUploadPath = '../img/' . basename($imageName);

  if (move_uploaded_file($soundTmpName, $soundUploadPath) && move_uploaded_file($imageTmpName, $imageUploadPath)) {
    
  if ($name) {
    $artistNames = $db -> prepare("INSERT INTO artist (name) VALUES (:name)");
    $artistNames->execute([
      ':name' => $name
    ]);
  };

  $artistId = $db->lastInsertId();

  

  if ($title) {
    $songTitles = $db -> prepare("INSERT INTO song (title, sound, image, album_id, artist_id) VALUES (:title, :sound ,:image, :album_id ,:artist_id)");
    $songTitles->execute([
      ':title' => $title,
      ':sound' => $soundName,
      ':image' => $imageName,
      ':album_id' => isset($albumTitle) ? $albumTitle : null,
      ':artist_id' => isset($artistId) ? $artistId : null
    ]);
  }

  header('Location: ../pages/homepage.php');
  exit();

  }
} 
  else {
  header('Location: ../admin/admin.php');
}

?>