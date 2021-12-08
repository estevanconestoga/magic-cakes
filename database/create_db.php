<?php
require_once "connection.php";

$connection = newConnection(null);
$sql = 'CREATE DATABASE IF NOT EXISTS magiccake';

$result = $connection->query($sql);

if($result) {
    echo "Connection successfuly created";
} else {
    echo "Failed to create a connection" . $connection->error;
}

$connection->close();