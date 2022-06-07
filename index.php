<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!----css link viewport----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----css link nav-footer homepage----->
    <link rel="stylesheet" href="./css/nav-footer.css" />
    <!----css link homepage----->
    <link rel="stylesheet" href="./css/homepage.css" />
    <!----css link skin color----->
    <link rel="stylesheet" href="./skin/color-1.css">
    <!--font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <!--artical start-->
    <div class="startcontainer">
        <div class="container">
            <!--Fiets-tours start-->
            <h1 class="containertitle">Fiets-tours</h1>
            <img src="./photo/fiets1.jpg" />
        </div>
        <!--Fiets-tours end-->
        <!--Fiets-verhuur start-->
        <div class="containerA">
            <h1 class="containertitle">Fiets-verhuur</h1>
            <img src="./photo/fiets2.jpg" />
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