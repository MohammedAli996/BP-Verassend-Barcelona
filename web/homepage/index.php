<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!----css link viewport----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----css link nav-footer homepage----->
    <link rel="stylesheet" href="../head-footer/nav-footer.css" />
    <!----css link homepage----->
    <link rel="stylesheet" href="homepage.css" />
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
    $layout->getNavbarHead("", "../../backend/", "../info/", "../inlogpage/");
    ?>
    <!-- navigation menu end  -->
    <!--artical start-->
    <div class="startcontainer">
        <div class="container">
            <!--Fiets-tours start-->
            <h1 class=" containertitle">Fiets-tours</h1>
            <a href="../../backend/formTour.php"><img src="../img/fiets1.jpg"></a>
        </div>
        <!--Fiets-tours end-->
        <!--Fiets-verhuur start-->
        <div class="containerA">
            <h1 class="containertitle">Fiets-verhuur</h1>
            <a href="../../backend/form.php"><img src="../img/fiets2.jpg"></a>
        </div>
        <!--Fiets-verhuur end-->
    </div>
    <!--artical end-->
    <!-- Footer Contact start -->
    <?php
    $layout->getNavbarFoot("");
    ?>
    <!-- Footer Contact end -->
</body>

</html>