<?php include ('connection.php') ?>

<?php
// Prepare the SQL query to select products with IDs between 10 and 18
$sql = "SELECT * FROM `producten` WHERE id BETWEEN 11 AND 18";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $product) {
    echo '<div class="menu-knop">'.'<h2>' . $product['productnaam'] . '</h2>' ;
    echo '<h3>' . $product['omschrijving'] . '</h3>' ;
    echo '<h3>' . $product['prijs']. '</h3>';
    echo '<h3>' . '+'. '</h3>'.'</div>';

}
?>