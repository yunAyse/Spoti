<?php 
require_once('../utils/database.php');
session_start();

if (isset($_GET['add']) && isset($_GET['playlist_id']) && isset($_GET['song_id']) && isset($_GET['user_id'])){

  // $AddPlaylist = $_GET['add'];
  $playlist_id = $_GET['playlist_id'];
  $song_id = $_GET['song_id'];
  $user_id = $_GET['user_id'];
  
  // the songSelects variable is selecting the song's id from the playlist table 
  $isSong = "SELECT * FROM playlist WHERE song_id = :song_id";
  $requestSong = $db->prepare($isSong);
  $requestSong->bindValue(':song_id', $song_id);
  $requestSong->execute();
  $songSelects = $requestSong-> fetch();

  var_dump($songSelects);

  // if yes
  if ($songSelects) {
    // stock the songSelect's id into the songId.
    $songId = $songSelects['id'];
  } else {

    // if no, insert the song into the playlist,
  $sql = "INSERT INTO playlist (song_id, user_id) VALUES (:song_id, :user_id)";
  $request = $db -> prepare($sql);
  $request -> execute([
    'song_id' => $song_id,
    'user_id' => $user_id
  ]);
  
  // we select the playlist id that is created after the insert.


$playlistLast = $db-> lastInsertId();

$sqlPlaylistSong = "SELECT * FROM playlist
                  JOIN song ON playlist.song_id = song.id
                  WHERE playlist.id = :playlistId";
$playlistUser = $db ->prepare($sqlPlaylistSong);
$playlistUser->bindValue(':playlistId', $playlistLast);
$playlistUser->execute();
$playlistSongs = $playlistUser->fetch();

var_dump($playlistSongs);

}
$sqlPlaylistSong = "SELECT * FROM playlist";
$requestId = $db->query($sqlPlaylistSong);
$playlistId = $requestId->fetch();


var_dump($playlistId);
$playlistId = $playlistId[0];
var_dump($playlistId);

  
  // after inserting into the playlist.
  // join the playlist and join 




  // header('Location: ../pages/playlist.php');
}
?>