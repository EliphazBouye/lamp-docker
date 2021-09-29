<?php

// echo "Hello From php in docker compose";
$host = 'db';
$user = 'archiitect';
$password = 's3cret';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    echo "Connection fail";
} else {
    echo "Connection successfull";
}