<?php

function newConnection($db = 'magiccake') {
    $server = '127.0.0.1:3306';
    $user = 'root';
    $password = '';

    $connection = new mysqli($server, $user, $password, $db);

    if($connection->connect_error) {
        die('Error: ' . $connection->connect_error);
    }
    return $connection;
}
?>