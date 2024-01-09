<?php 
require_once('../utils/database.php');
session_start();

if (isset($_GET['add']) && isset($_GET['playlist_id']) && isset($_GET['song_id']) && isset($_GET['user_id'])){

  // $AddPlaylist = $_GET['add'];
  $playlist_id = $_GET['playlist_id'];
  $song_id = $_GET['song_id'];
  $user_id = $_GET['user_id'];
  
  $isSong = "SELECT * FROM playlist WHERE song_id = :song_id";
  $requestSong = $db->prepare($isSong);
  $requestSong->bindValue(':song_id', $song_id);
  $requestSong->execute();
  $songSelects = $requestSong-> fetch();

  // var_dump($songSelects);

  if ($songSelects) {
    $songId = $songSelects['id'];
  } else {
  $sql = "INSERT INTO playlist (song_id, user_id) VALUES (:song_id, :user_id)";
  $request = $db -> prepare($sql);
  $request -> execute([
    'song_id' => $_SESSION['song']['id'],
    'user_id' => $_SESSION['pseudoid']
  ]);
  }
  
  // var_dump($songId);
  
  $sqlPlaylistSong = "SELECT * FROM playlist
                    JOIN song ON playlist.song_id = song.id
                    WHERE playlist.id = $user_id";
  $playlistUser = $db ->query($sqlPlaylistSong);
  $playlistSongs = $playlistUser->fetchAll();

  var_dump($playlistSongs);
  header('Location: ../pages/playlist.php');
}
?>