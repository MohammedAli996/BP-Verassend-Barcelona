<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!----css link viewport----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----css link nav-footer homepage----->
    <link rel="stylesheet" href="./css/nav-footer.css" />
    <!----css link info----->
    <link rel="stylesheet" href="./css/info.css" />
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
    <div class=fietshuur>
        <h1>over ons</h1>
        <p>
            De stad Barcelona wordt ieder jaar populairder.
            Het toerisme groeit en de AirBnB's poppen uit de grond.
            Fantastisch voor de stad! Maar voor de dagjesmensen en toeristen wordt het steeds lastiger om het échte
            Barcelona te ontdekken.
            Met Verassend Barcelona willen wij iedereen de mogelijkheid geven om Barcelona op een authentieke manier te
            ontdekken, op de fiets.
            Wij laten je allerlei onontdekte plekken in en om Barcelona zien.
            Fiets door de kleine steegjes, bezoek de unieke boetiekjes en ontdek het échte Barcelona.
            Wacht dacht je van een geweldige tour langs het strand of de duinen?<br><br>

            Ons team van enthousiaste bikers neemt je mee naar de leukste plekken. Geen tour zal hetzelfde zijn.
            Er is namelijk altijd ruimte voor spontane (foto)momenten of alles wat je onderweg tegenkomt.
            Onze bikers zorgen voor een fantastische ervaring om nooit te vergeten!
            <br><br><br><br>
        <h1>Fiets-Tours</h1>
        <p>
            In deze tour van ongeveer 2 uur laat onze gids je kennis maken met het échte Barcalona.
            Fiets mee en ontdek de verborgen steegjes, oude kerken en de vele mooie verhalen.
            De fietstour start op zaterdag op vaste tijden vanaf onze locatie midden in het centrum.
            De kosten voor deze fietstour zijn 25 euro per persoon, inclusief degelijke fietsen en stadsgids.
            Bekijk hier onder direct onze live beschikbaarheid.
            Voor vragen neem contact met ons op: +346555254 of mail naar: info@VerassendBarcelona.Com.
            </h2><br><br><br><br>
        <h1>Fiets-Huur</h1>
        <p>
            Ben je op zoek naar een fietsverhuur bedrijf in Barcalona?
            Kom dan bij ons langs voor het huren van een fiets en ontdek het mooie Barcalona en de omgeving op een
            gehuurde fiets Verassend Barcelona.
            Een fiets huren kan al vanaf €15,-. Wij verhuren fietsen vanaf onze vaste locatie in het centrum Barcalona.
        </p>
        </p>
    </div>




    <!-- Footer Contact start -->
    <?php
            $layout->getNavbarFoot("");
        ?>
    <!-- Footer Contact end -->
</body>

</html>