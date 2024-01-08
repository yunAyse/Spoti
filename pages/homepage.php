<?php

include_once('../process/process_add_user.php');
// session_start();

$sqlSongs = "SELECT *, song.id FROM song 
                      JOIN artist 
                      ON song.artist_id = artist.id";

$songSelect = $db->query($sqlSongs);
$songs = $songSelect->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../style/homepage.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



  <title>Spotify</title>
</head>

<body style="background-color: #121212;">
  <div class="container d-flex justify-content-end align-items-center my-5">
    <h1 style="color: #FFFFFF;margin-right: 10px;">Hello <?php echo $_SESSION['pseudo'] ?> !</h1>
    <img src="../img/pngwing.com.png" width="70px" height="70px" class="d-flex justify-content-end">
  </div>




  <div class="container-md g-col-4 d-flex">
    <section class="navigation col-2 mt-5 pb-3 justify-content-center" style="position: fixed; left: 0;top: 0; z-index: 1;">

      <div class="container ">
        <div class="row">
          <div class="log-out d-flex mb-3">
            <a href="../index.php" style="text-decoration: none; color: #fff;">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-box-arrow-left text-light me-3" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
              </svg>
              Log out
            </a>
          </div>
          <nav class="navbar rounded-3" style="background-color: #292929">
            <div class="container-fluid d-flex flex-column align-items-center">

              <a href="" class="mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill text-light" viewBox="0 0 16 16">
                  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                </svg>

              </a>
              <a href="#" class="mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search text-light" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
              </a>

            </div>

        </div>
      </div>
      <div class="container-md g-col-4">
        <div class="container rounded-3 py-4 mt-2" style="background-color: #292929; height:700px; width:240px;">
          <div class="d-flex flex-column align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-collection-fill text-light" viewBox="0 0 16 16">
              <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
            </svg>

          </div>
        </div>
      </div>
      </nav>
    </section>

    <!-- album cards -->
    <section class="container g-col-8">
      <div class="container albums d-flex justify-content-end" style="flex-wrap: wrap;">
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















</body>

</html>