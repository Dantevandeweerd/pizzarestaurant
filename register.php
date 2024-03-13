<?php

include 'connection.php';


$user = $_POST['gebruikersnaam'];
$pass = $_POST['wachtwoord'];

$sql = " INSERT INTO users (gebruikersnaam, wachtwoord) VALUES ('$user','$pass')";

$conn -> exec($sql);
