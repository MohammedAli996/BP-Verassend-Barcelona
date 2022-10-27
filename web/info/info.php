<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!----css link viewport----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----css link nav-footer homepage----->
    <link rel="stylesheet" href="../head-footer/nav-footer.css" />
    <!----css link homepage----->
    <link rel="stylesheet" href="info.css" />
    <!----css link skin color----->
    <link rel="stylesheet" href="../skin/color-1.css">
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Verassend Barcelona</title>
    <?php
    require_once '../class/layoutpage.php';
    $layout = new PageLayout();
    ?>
</head>

<body>
    <!-- navigation menu start  -->
    <?php
    $layout->getNavbarHead("../homepage/", "../inlogpage/", "", "../../backend/");
    ?>
    <br>
    <!-- navigation menu end  -->
    <!-- info start-->
    <div class="fietsverhuur">
        <a href=".../reservatie.php">
            <div class="reserveren">
                <h2>Reserveer een fiets online of in de winkel!</h2>
                <p1>
                    Informatie fietsverhuur:<br>
                    De fietsen kunnen gereserveerd worden in tijdslots van 4 uur, van 08:00 tot 18:00<br>
                    Er zijn maximaal 20 fietsen beschikbaar, zorg dus dat je online een tijdslot reserveerd om verzekerd
                    te
                    zijn van een fiets! (Fietsen voor de tours staan apart en zitten niet in de fietsverhuur.) De kosten
                    voor het huren van een fiets bedraagt 15 euro per persoon per fiets.<br>
                    Verkent hot-spots in de stad zoals; Sagrada Familia, Las Ramblas, de Gothic Quarter en La
                    Barceloneta!
                    Alle populaire locaties zijn gemakkelijk met de fiets toegankelijk vanaf ons filiaal in Barcelona.
                    <br>
                    Barcelona is dankzij de uitstekende infrasttructuur (o.a. honderden kilometers fietspad) naast leuk,
                    informatief en ontspannen ook erg veilig! <br>
                    Word verrast door vriendelijk en behulpzaam personeel die allemaal over de Nederlandse taal
                    beschikken
                    en geniet van de comfort van onze Cortina City Bikes, aanbevolenn door de ANWB! <br>
                </p1>
            </div>
        </a>
        <!-- info end-->
    </div>
    <!-- Footer Contact start -->
    <?php
    $layout->getNavbarFoot("");
    ?>
    <!-- Footer Contact end -->
</body>

</html>