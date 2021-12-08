<?php
require_once "connection.php";

$sql = "CREATE TABLE IF NOT EXISTS newsletter (
    id INT(6) UNSIGNED AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
)";

$connection = newConnection();
$result = $connection->query($sql);

if($result) {
    echo "Connection successfuly created";
} else {
    echo "Failed to create a connection" . $connection->error;
}

$connection->close();