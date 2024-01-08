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



  <title>Spotifi</title>
</head>


<header class="d-flex justify-content-center P">
  <h1 style="color: #FFFFFF;">Hello <?php echo $_SESSION['pseudo'] ?> !</h1>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/1024px-Spotify_App_Logo.svg.png" width="100px" height="100px" class="d-flex justify-content-end">

</header>

<body style="background-color: #121212;">


  <div class="container-md d-flex">
    <section class="navigation col-2 mt-5 pb-3">

      <div class="container w-75 ">
        <div class="row">
          <nav class="navbar rounded-3" style="background-color: #292929">
            <div class="container-fluid d-flex flex-column justify-content-center align-items-center">

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
      <div class="container g-col-6">
        <div class="container rounded-3 py-4 mt-4" style="background-color: #292929; height:700px; width:240px;">
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

    <section class="container albums d-flex justify-content-around">
      <?php
    foreach($songs as $song) {

 ?>
      <div id="album" class="d-flex flex-column">
        <div class="card" style="width: 14rem; background-color: #d9d9d9;">
          <img src="../img/<?php echo $song['image'] ?>" class="card-img-top" style="width: 200px; height: 200px; object-fit: cover;" alt="...">
          <div class="card-body">
            <h5 class="song-title"><?php echo $song['title'] ?></h5>
            <p class="artist-name"> <?php echo $song['name'] ?> </p>

            <form action="./song.php" method="GET">
              <input type="hidden" name="id" value="<?php echo $song['id'] ?>">
              <!-- <a href="./song.php" class="btn btn-primary">Listen Song</a> -->
              <button type="submit" style="border: none; background-color: #1ED760; width: 48px; height: 48px; border-radius: 50%;" >
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
  <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
</svg>
            </button>
              </a>
            </form>
          </div>
        </div>
      </div>
      <?php } ?>
    </section>
  </div>















</body>

</html>