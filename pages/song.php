<?php
// include_once('../partials/header.php');
require_once('../utils/database.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $sql = "SELECT * FROM song WHERE id =" . $_GET['id'];

    $requestSong = $db->query($sql);
    $song = $requestSong->fetch();
}


    


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/song.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <section class="container d-flex text-center">

        <body style="background-color: #121212;">
            <div class="audio-player ms-5 w-50 p-2 d-flex flex-column align-items-center" style="background-color: #252229;">
           <div class="image pt-3" style="width: 250px; height: 250px; object-fit: cover;">
                   <img src="../img/<?php echo $song['image'] ?>" style="width: 200px; height: 200px;" alt="">
               </div>
                <audio controls src="../audio/<?php echo $song['sound'] ?>" type="audio/mp3"a class="text-white">
                    <!-- <source src=> -->
                </audio>
                

                <div class="controls w-100">
                    <div class="bp d-flex align-items-center justify-content-around">

                        <button id="play-button" class="border-0 rounded-circle" style="background-color: #252229;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#1ED760" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z" />
                            </svg></button>

                        <button id="pause-button"  class="border-0 rounded-circle" style="background-color: #252229"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#1ED760" class="bi bi-pause-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.25 5C5.56 5 5 5.56 5 6.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C7.5 5.56 6.94 5 6.25 5m3.5 0c-.69 0-1.25.56-1.25 1.25v3.5a1.25 1.25 0 1 0 2.5 0v-3.5C11 5.56 10.44 5 9.75 5" />
                            </svg>
                        </button>

                        <button type="button" onclick="shuffle()" class="shuffle border-0 rounded-circle " style="background-color: #252229"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#1ED760" class="bi bi-shuffle" viewBox="0 0 16 16" value="">
                                <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.6 9.6 0 0 0 7.556 8a9.6 9.6 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.6 10.6 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.6 9.6 0 0 0 6.444 8a9.6 9.6 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5" />
                                <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192" />
                            </svg>
                        </button>
                        
                    </div>

                    <input class="color" type="range" id="volume-control" min="0" max="1" step="0.01" value="1">
                </div>

                <div class="progress">
                    <div class="progress-bar" id="progress-bar"></div>
                </div>
                <!-- <div id="current-time" class="text-light">0:00</div>
                <div class="d-flex text-light" id="total-time">0:00</div> -->
            </div>
            <div class="grid gap-3">
                <div class="container p-2 g-col-4 h-75 border border-primary-subtle">
                    <p class="text-white">Commentaires</p>

                </div>
            </div>
    </section>
    <script src="../js/song.js"></script>
</body>

</html>