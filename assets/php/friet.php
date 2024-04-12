<?php include ('connection.php') ?>
        <?php
        $sql = "SELECT * FROM `producten`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach ($result as $product) {
            // Controleren of de productnaam het woord "friet" bevat
            if (strpos(strtolower($product['productnaam']), 'friet') !== false) {
                echo '<div class="menu-knop">'.'<h2>' . $product['productnaam'] . '</h2>' ;
                echo '<h3>' . $product['omschrijving'] . '</h3>' ;
                echo '<h3>' . $product['prijs']. '</h3>';
                echo '<h3>' . '+'. '</h3>'.'</div>';

            }
        }
        ?>