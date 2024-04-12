<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <?php include ('navbar.php') ?>
    <section class="login-container">
        <div class="login-blok">
            <div class="login-input">
                <?php
                // Check if the user is logged in
                if (isset($_SESSION['admin']) === true) {
                    // If logged in, display a logout button
                    echo '<form class="login-invoer" action="assets/php/logout.php" method="post">';
                    echo '<input type="submit" value="Uitloggen">';
                    echo '</form>';
                } else {
                    // If not logged in, display the login form
                    echo '<form class="login-invoer" action="assets/php/login.php" method="post">';
                    echo '<input type="text" name="user" placeholder="Naam">';
                    echo '<input type="password" name="password" placeholder="Wachtwoord">';
                    echo '<input type="submit" value="Inloggen">';
                    echo '</form>';
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>