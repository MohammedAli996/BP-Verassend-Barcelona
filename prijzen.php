<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!----css link viewport----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----css link nav-footer homepage----->
    <link rel="stylesheet" href="./css/nav-footer.css" />
    <!----css link homepage----->
    <link rel="stylesheet" href="./css/prijzen.css" />
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
    <!-- fiets prizen  start  -->
    <div class="centerform">
        <div class="mytabs">
            <input type="radio" id="tabfree" name="mytabs" checked="checked" />
            <label for="tabfree">Fietsstour</label>
            <div class="tab">
                <h2>Barcelona Fietsstour</h2>
                <p>
                    * Duur: 2.5 uur(Andere tijdstippen en duur mogelijk in overleg).<br />
                    * Fietstour start elke dag om 10:00 en 15:00.<br />
                    * Startlocatie nabij het historische centrum<br />
                    * (Benodigde details sturen wij altijd binnen 24 uur na de reservering toe)<br />
                    * Gesproken talen: Nederlands<br />
                    * Altijd gratis annuleren 24 uur voor de tour (100% restitutie)<br />
                    * (Prijs is per persoon, Inclusief fiets)<br />
                <p> € 10,- per persoon</p>
                </p>
            </div>
            <input type="radio" id="tabsilver" name="mytabs" />
            <label for="tabsilver">fietshuren</label>
            <div class="tab">
                <h2>Barcelona fietshuren</h2>
                <p1>
                    <ul>*Naast de fietsen voor de tour bieden wij ook losse fietsen aan.<br> Momenteel hebben wij maar 1
                        type fiets.</ul>
                    <ul></ul>
                    <ul>* € 15,- per persoon</ul>
                    <br />
                    <p>Alle prijzen zijn inclusief btw</p>
                </p1>
            </div>
        </div>
    </div>
    <!-- fiets prizen  end  -->
    <!-- Footer Contact start -->
    <?php
            $layout->getNavbarFoot("");
        ?>
    <!-- Footer Contact end -->
</body>

</html>