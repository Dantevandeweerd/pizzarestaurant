<?php
    session_start();
    include('../../connection.php');

    try {
        $keyword = '%' . $_POST['keyword'] . '%';
        $stmt = $conn->prepare("SELECT * FROM producten WHERE productnaam LIKE :keyword OR omschrijving LIKE :keyword");
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Toon de zoekresultaten in HTML
        foreach ($result as $row) {
            echo '<div class="menu-knop">'.'<h2>' . $row['productnaam'] . '</h2>' ;
            echo '<h3>' . $row['omschrijving'] . '</h3>' ;
            echo '<h3>' . $row['prijs']. '</h3>';
            echo '<h3>' . '+'. '</h3>'.'</div>';

        }
    } catch (PDOException $e) {
        echo "Geen product gevonden: " . $e->getMessage();
    }