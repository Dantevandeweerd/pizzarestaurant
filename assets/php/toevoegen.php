<?php

include('../../connection.php');

$sql = "INSERT INTO producten(productnaam, omschrijving, prijs) VALUES (:productnaam, :omschrijving, :prijs)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':productnaam', $_POST['productnaam']);
$stmt->bindParam(':omschrijving', $_POST['omschrijving']);
$stmt->bindParam(':prijs', $_POST['prijs']);
$stmt->execute();
header("Location: ../../admin.php");
