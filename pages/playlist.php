<?php 
require_once('../utils/database.php');
include_once('../partials/header.php');
// include_once('../process/process_add_playlist.php');
?>


<section>
  <div style="background-color: #252229;">
  <?php 
   foreach($playlistSongs as $playlistSong) {
  
  ?>
  <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $song['name'] ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php } ?>
  </div>
</section>