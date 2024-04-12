<?php global $data;
include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    <script src="assets/js/script.js" defer></script>
  </head>

  <body>
    <main>
      <?php include('navbar.php') ?>

      <section class="welkom-bestellen">
        <div class="hoofd-welkom">
          <div class="welkom-bericht">
            <h1>Welkom bij Giovanni's</h1>
            <h2>Bestel simpel en snel</h2>
          </div>
          <div class="optiebezorgen">
            <div class="tab">
              <button
                class="tablinks"
                onclick="openCity(event, 'bezorgen')"
                id="defaultOpen">
                Bezorgen
              </button>
              <button class="tablinks" onclick="openCity(event, 'afhalen')">
                Afhalen
              </button>
            </div>

            <div id="bezorgen" class="tabcontent">
              <div class="postcode-invullen">
                <h3>Vul je postcode:</h3>
                <div>
                  <form action="" class="postcode-input bezorgen-form">
                    <input type="text" placeholder="Postcode..." />
                  </form>

                  <div class="bestel-online">
                    <button>Bestel online</button>
                    <a href="bestel-online.php"><p>Direct menu bekijken</p></a>
                  </div>
                </div>
              </div>
            </div>

            <div id="afhalen" class="tabcontent">
              <div class="afhaal-locatie">
                <h3>Je vindt ons aan het</h3>
                <p class="afhaal-text">Zijloever 165</p>
                <p class="afhaal-text">in Arnhem</p>
                <div class="bestel-online">
                  <button>Bestel online</button>
                  <a href="bestel-online.php"><p>Direct menu bekijken</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sub-welkom">
          <img
            id="pizza_welkom"
            src="assets/img/pizza_welkom.png"
            alt="pizza" />
        </div>
      </section>

      <?php include('footer.php') ?>
    </main>
  </body>
</html>
