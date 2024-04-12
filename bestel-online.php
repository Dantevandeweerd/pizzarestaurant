<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="assets/style/style.css" />
</head>

<body>
  <main>
    <?php include ('navbar.php') ?>
    <section class="menu-compleet" id="winkelMandHeader">
      <div class="selectie-bar">
        <button class="selectie-knop" data-target="#friet-container">Friet</button>
        <button class="selectie-knop" data-target="#snacks-container">Snacks</button>
        <button class="selectie-knop">Soepen</button>
        <button class="selectie-knop">Salade's</button>
        <button class="selectie-knop">Pasta's</button>
        <button class="selectie-knop">Pizza's</button>
      </div>
      <div class="winkelmand">
        <h3>Winkelmandje</h3>
      </div>
    </section>
    <section>
      <div>
        <form action="assets/php/zoeken.php" id="zoek-form" method="post">
          <input type="text" id="zoekInvoer" name="keyword" placeholder="Zoeken...">
          <input type="submit" value="Zoeken">
        </form>
        <div id="search-results">
          <!-- Search results will be displayed here -->
        </div>
      </div>

      <div class="friet-container">
        <div class="frietbanner">
          <img id="banner" src="assets/img/frietbanner.png" alt="frietbanner" />
        </div>
        <?php include ('assets/php/friet.php') ?>
      </div>

      <div class="snacks-container" id="snacks-container">
        <div class="snackbanner">
          <img id="snackbanner" src="assets/img/snackbanner.jpg" alt="snackbarbanner" />
        </div>
        <?php include ('assets/php/snack.php') ?>
      </div>

      <div class="soep-container">
        <div class="soepbanner">
          <img src="assets/img/soep.png" id="soepbanner" alt="soepbanner">
        </div>
        <?php include ('assets/php/soep.php') ?>
      </div>
    </section>

    <?php include ('footer.php') ?>
  </main>
  <script src="assets/js/script.js"></script>
</body>

</html>