<?php
include_once('../partials/header.php');
include_once('../process/process_add_user.php');
// session_start();

$sqlSongs = "SELECT *, song.id FROM song 
                      JOIN artist 
                      ON song.artist_id = artist.id";

$songSelect = $db->query($sqlSongs);
$songs = $songSelect->fetchAll();

?>

<div class="container-md d-flex flex-column">
   <div class="container d-flex justify-content-end align-items-center my-5">
    <h1 style="color: #FFFFFF;margin-right: 10px;">Hello <?php echo $_SESSION['pseudo'] ?> !</h1>
    <img src="../img/pngwing.com.png" width="70px" height="70px" class="d-flex justify-content-end">
  </div>



    <!-- album cards -->
    <section class="container g-col-8">
      <div class=" albums d-flex justify-content-end" style="flex-wrap: wrap;">
        <?php
        foreach ($songs as $song) {

        ?>
          <div id="album" class="d-flex flex-column m-3">
            <div class="card" style="width: 14rem; background-color: #d9d9d9;">
              <img src="../img/<?php echo $song['image'] ?>" class="card-img-top" style="width: 220px; height: 220px; object-fit: cover;" alt="...">
              <div class="card-body">
                <h5 class="song-title"><?php echo $song['title'] ?></h5>
                <p class="artist-name"> <?php echo $song['name'] ?> </p>

                <form action="./song.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $song['id'] ?>">
                  <!-- <a href="./song.php" class="btn btn-primary">Listen Song</a> -->
                  <button type="submit" style="border: none; background-color: #1ED760; width: 48px; height: 48px; border-radius: 50%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                      <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                    </svg>
                  </button>
                  </a>
                </form>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>

  </div>
</div>
 

<?php
include_once('../partials/footer.php');
?>