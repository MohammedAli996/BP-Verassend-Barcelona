<!DOCTYPE html>
<html>

<head>
    <title>Reservering</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!----css link nav-footer homepage----->
    <link rel="stylesheet" href="../web/head-footer/nav-footer.css" />
    <!----css link skin color----->
    <link rel="stylesheet" href="../web/skin/color-1.css">
    <!----css link Formpage----->
    <link rel="stylesheet" href="form.css" />
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <?php
  require_once '../web/class/layoutpage.php';
  $layout = new PageLayout();
  ?>
</head>

<body>
    <?php
  $layout->getNavbarHead("../web/homepage/", "", "../web/info/infopage/", "../web/inlogpage/");
  $layout->form("Reserveer uw fiets hier!");
  $layout->getNavbarFoot("../web/img/logo.ico");
  if (isset($_POST['Voornaam'])) {
    require "saveTour.php";
  }
  ?>
</body>

</html>