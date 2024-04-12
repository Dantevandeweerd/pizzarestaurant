<?php
include('../../connection.php');

$name = $_POST['productnaam'];
$newName = $_POST['newname'];
$omschrijving = $_POST['omschrijving'];
$prijs = $_POST['prijs'];

$sql = "UPDATE producten SET 
        productnaam = '$newName',
        omschrijving = '$omschrijving',
        prijs = '$prijs'
        WHERE productnaam = '$name'";

$stmt = $conn->prepare($sql);
$stmt->execute();
header("Location: ../../admin.php");




?>