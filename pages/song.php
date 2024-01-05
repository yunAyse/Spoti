


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
    <img>
    <body style="background-color: #121212;">
	<div class="audio-player">
        <audio id="audio" controls>
            <source src="your-audio-file.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <div class="controls">
            <button id="play-pause-button">Play</button>
            <input type="range" id="volume-control" min="0" max="1" step="0.01" value="1">
        </div>
        <div class="progress">
            <div class="progress-bar" id="progress-bar"></div>
        </div>
        <div id="current-time">0:00</div>
        <div id="total-time">0:00</div>
    </div>
    <script src="../js/song.js"></script>
</body>
</html>