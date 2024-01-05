<?php

try {
    $dsn = 'mysql:host=localhost;dbname=tp_spotify';
    $user = 'root';
    $password = '';
    $db = new PDO($dsn, $user, $password);

} catch (Exception $message) {
    echo 'error' . $message;
}
