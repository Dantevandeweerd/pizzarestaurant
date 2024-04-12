<?php
include('../../connection.php');


$productnaam = $_POST['productnaam'];


$sql = "DELETE FROM producten WHERE productnaam = '$productnaam'";
$stmt = $conn->prepare($sql);
$stmt->execute();
header("Location: ../../admin.php");

