<?php
include_once('../partials/header.php');
require_once('../utils/database.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $sql = "SELECT * FROM song WHERE id =" . $_GET['id'];

    $requestSong = $db->query($sql);
    $song = $requestSong->fetch();
}
?>


<section class="container-md text-center d-flex justify-content-evenly " style="background-color: #121212">

    <!-- <div class="d-flex justify-content-around"> -->
    <div class="audio-player g-col-6 ms-5 w-50 p-2 d-flex flex-column align-items-center" style="background-color: #252229;">
        <div class="image pt-3" style="width: 250px; height: 250px; object-fit: cover;">
            <img src="../img/<?php echo $song['image'] ?>" style="width: 200px; height: 200px;" alt="">
        </div>
        <div class="song-control-bar d-flex flex-column align-items-center">

            <div class="mb-2">
                <audio controls src="../audio/<?php echo $song['sound'] ?>" type="audio/mp3" a class="text-white">
                    <!-- <source src=> -->
                </audio>
            </div>

            <div>
                <button class="me-2" style="background: none; border:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-shuffle text-light" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.6 9.6 0 0 0 7.556 8a9.6 9.6 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.6 10.6 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.6 9.6 0 0 0 6.444 8a9.6 9.6 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5" />
                        <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192" />
                    </svg>
                </button>

                <button style="border: none; background:none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left-circle-fill text-light" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
                <button style="border: none; background:none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right-circle-fill text-light" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg>
                </button>

                <button class="add-button text-light ms-2" style="border: 2px solid #fff;border-radius: 50%; background:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg>
                </button>
            </div>

        </div>
        <!-- comments   -->

    </div>
    <div class="d-flex">
        <div class="container g-col-4 border border-primary-subtle">
            <p class="text-white">Commentaires</p>

        </div>
    </div>
</section>
<script src="../js/song.js"></script>