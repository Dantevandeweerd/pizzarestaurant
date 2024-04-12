<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="assets/style/style.css" />
</head>

<body>
  <?php include ('navbar.php') ?>
  <main>
    <section class="admin-panel">
      <div class="crud">
        <div class="create">
          <h1>Product toevoegen</h1>
          <form action="assets/php/toevoegen.php" class="form-invoer" method="post">
            <input type="text" name="productnaam" placeholder="Naam" />
            <input type="text" name="omschrijving" placeholder="Omschrijving" />
            <input type="text" name="prijs" placeholder="Product prijs" />
            <button type="submit">Toevoegen</button>
          </form>
        </div>
        <div class="destroy">
          <h1>Product verwijderen</h1>
          <form action="assets/php/destroy.php" class="form-invoer" method="post">
            <input type="text" placeholder="Productnaam" name="productnaam" />
            <button type="submit">Verwijderen</button>
          </form>
        </div>
        <div class="update">
          <h1>Product updaten</h1>
          <form action="assets/php/update.php" class="form-invoer" method="post">
            <input type="text" placeholder="Productnaam" name="productnaam" />
            <input type="text" placeholder="Nieuwe naam" name="newname" />
            <input type="text" placeholder="Omschrijving" name="omschrijving" />
            <input type="text" placeholder="Prijs" name="prijs" />
            <button type="submit">Aanpassen</button>
          </form>
        </div>
      </div>
      <div>
        <?php include ('producten.php') ?>
      </div>
    </section>
  </main>
</body>

</html>