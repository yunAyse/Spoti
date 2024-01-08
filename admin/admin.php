<?php 
include_once('../partials/header.php');
require_once('../utils/database.php');

session_start();

?>

<section >
    <div class="container-md d-flex justify-content-center align-items-center" style="background-color: #D9D9D9;">
    <form action="../process/process_add_song.php" method="post" enctype='multipart/form-data'>
      <h2>Add Song</h2>
      <div>
        <label for="artist-name">Artist</label>
        <input type="text" name="name" class="border-0 rounded-pill mb-2 ms-2">
      </div>

      <div>
        <label for="song-title">Song Title</label>
        <input type="text" name="title" class="border-0 rounded-pill mb-2 ms-2">
      </div>

      <!-- the song might not have an album, it should be connected in the process -->
      <div>
        <label for="album">Album Title</label>
        <input type="text" name="albumTitle" class="border-0 rounded-pill mb-2 ms-2">
      </div> 

      <div>
        <label for="sound" >Sound File</label>
        <input type="file" name="sound" accept="audio/mp3" enctype="multipart/form-data">
      </div>

      <div>
        <label for="image"> Image</label>
        <input type="file" name="image" accept="image/png, image/jpg, image/jpeg,">
      </div>

      <input type="submit" value="Add Song">
    </form>
  </div>
  

</section>

<?php
include_once('../partials/footer.php');
?>