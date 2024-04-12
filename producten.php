<?php
include('connection.php');

$sql = "SELECT productnaam, omschrijving, prijs FROM producten";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetch all rows into $result
$result = $stmt->fetchAll();

// Count the number of rows fetched
$row_count = count($result);

if ($row_count > 0) {
    foreach($result as $row) {
        echo '<div class="productrij">'."Productnaam: " . $row["productnaam"]. " - Omschrijving: " . $row["omschrijving"]. " - Prijs: " . $row["prijs"]. "<br>" . "</div>";
    }
}
