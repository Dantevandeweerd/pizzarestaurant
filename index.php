<?php global $data;
include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
    <script src="assets/js/script.js" defer></script>

</head>

<body>
    <main>
        <?php include('navbar.php') ?>

        <section class="welkom-bestellen">
            <div class="welkom-bericht">
                <h1>Welkom bij Giovanni's</h1>
                <h2>Bestel simpel en snel</h2>
            </div>
            <div class="afhaal-bezorgen">
                <div class="bezorgen" id="bezorgen1" onclick="switchKleur()">
                    <p>Bezorgen</p>
                </div>
                <div class="afhalen" id="afhalen1" onclick="switchKleur()">
                    <p>Afhalen</p>
                </div>
            </div>
            <div class="welkom-postcode">
                <div class="postcode-invullen">
                    <h3>
                        Vul je postcode:
                    </h3>
                    <div>
                        <form action="" class="postcode-input bezorgen-form">
                            <input type="text" placeholder="Postcode...">
                        </form>
                        <form action="" class="postcode-input afhalen-form hidden">
                            <input type="text" placeholder="hoi...">
                        </form>
                    </div>
                </div>
                <div class="bestel-online">
                    <button>Bestel online</button>
                    <p>Direct menu bekijken</p>
                </div>
            </div>
        </section>

        <?php include('footer.php') ?>
    </main>

</body>

</html>