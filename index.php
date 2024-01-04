<?php

require_once('./process/connexion.php');

var_dump($_POST);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style/login.css" rel="stylesheet">
    


  

   <title>Log In</title>
</head>
<body>
    <main>

    <section class="logo">
<div clas="container">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/1024px-Spotify_App_Logo.svg.png">
</div>

<p>Log In</p>

<form class="form" action="../Spotify/process/add_user.php" method="post">
   <div class="inscris">
<input type="text" class="login" style="width: 300px; height: 50pxpx;"></input>
</div> 
<div class="enter">
<button class="color" type="submit" style="width: 200px; height: 50pxpx;">ENTER</button>
</div> 
</div>
   
</form>





</section>
    </main>
    
</body>
</html>