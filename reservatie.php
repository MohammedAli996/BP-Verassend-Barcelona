<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!----css link viewport----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----css link homepage----->
    <link rel="stylesheet" href="./css/nav-footer.css" />
    <!----css link skin color----->
    <link rel="stylesheet" href="./skin/color-1.css">
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Verassend Barcelona</title>
    <?php
            require_once 'layout.php';
            $layout = new PageLayout();
        ?>
</head>

<body>
    <!-- navigation menu start  -->
    <?php
            $layout->getNavbarHead("");
        ?>
    <!-- navigation menu end  -->

    </head>

    <body>
        <div class="rent">
            <br><br>
        </div>
        <div class="box1">
            <h1>
                Reserveer hier uw Fiets (tour)
            </h1>
            <label for="lname">Naam </label>
            <input type="text" id="lname" name="lname" value=" " size="45"><br><br>

            <label for="lname">Adres </label>
            <input type="text" id="lname" name="lname" value=" " size="45"><br><br>

            <label for="lname">E-mail </label>
            <input type="text" id="lname" name="lname" value=" " size="45"><br><br>

            <label for="lname">IBAN </label>
            <input type="text" id="lname" name="lname" value=" " size="45"><br><br>


            <h2> Maak hier uw keuze! </h2>
            <label class="container">Fiets tour (T.w.v.€85,- )
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="container">Fiets huren (T.w.v.€45,-)
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>


        </div>
        <br>
        <div class="box2">
            <h2>Prijzen </h2>
            <p>In verband met stijgende prijzen hanteren wij een minimum van max. 8 mensen per bestelling* </p><br><br>
            <h3>Fiets tour </h3><br>
            <h3>€ 85,- </h3><br><br>

            <h3> Fiets huren per stuk </h3><br><br>
            <h3>€ 45,- <h3><br>

        </div>
        <div class="img">
            <img src="bikeride.jpg" alt="bikeride" height="600" width="370">
        </div>
        <div class="img2">
            <img src="bikerack.jpeg" alt="bikerack" height="600" width="370">
        </div>
        <!-- Footer Contact start -->
        <?php
            $layout->getNavbarFoot("");
        ?>
        <!-- Footer Contact end -->
    </body>

</html>