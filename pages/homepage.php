<?php

include_once('../process/process_add_user.php');

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

    <section class="container albums">
      <div id="album">
        <div class="card" style="width: 18rem;">
          <img src="<?php  ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="song-title"><?php  ?></h5>
            <p class="artist-name">Rafael</p>
            <a href="./song.php" class="btn btn-primary">Listen Song</a>
          </div>
        </div>
      </div>
    </section>
  </div>















</body>

</html>