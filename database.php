<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "blog";

// Bog'lanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Bog'lanihsni tekshirish
if ($conn->connect_error) {
    die("Bog'lanishda xato: " . $conn->connect_error);
}


?>