<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=web-app-01", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully" . PHP_EOL;
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage(). PHP_EOL;
}


$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users");
$results = $stmt->execute();
$data = $stmt->fetchAll();



