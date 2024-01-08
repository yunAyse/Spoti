<?php
require_once('../Spotify/utils/database.php');


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
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/1024px-Spotify_App_Logo.svg.png" width="150px" height="150px">
</div>

<p>Log In</p>

<form class="form" action="./process/process_add_user.php" method="post">
   <div class="inscris">
<input type="text" placeholder="pseudo" name="pseudo" class="login" style="width: 300px; height: 50px;"></input>
</div> 
<div class="enter">
<button class="color" type="submit" style="width: 200px; height: 50pxpx;">ENTER</button>
</div> 
</div>
   
</form>


