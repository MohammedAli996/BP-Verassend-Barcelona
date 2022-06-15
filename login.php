<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/login.css">;
    <meta charset="UTF-8">
    <!----css link viewport----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----css link nav-footer homepage----->
    <link rel="stylesheet" href="./css/nav-footer.css" />
    <!----css link skin color----->
    <link rel="stylesheet" href="./skin/color-1.css">
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Login</title>
    <?php
            require_once 'layout.php';
            $layout = new PageLayout();
        ?>
</head>

<body>
    <!-- navigation menu start -->
    <?php
            $layout->getNavbarHead("");
        ?>
    <!-- navigation menu end  -->


    <div class="input-home">
        <h1>Login</h1>
        
        <div class="input-group">
    <input type="text" id="name" required class="input">
    <label for="name" class="input-label">Username</label>
  </div>
    <div class="input-group2">
        <input type="text" id="Password" required class="input">
        <label for="name" class="input-label">Password</label>
    </div>
    </div>  
    
    <!-- Footer Contact start -->
    <?php
            $layout->getNavbarFoot("");
        ?>
    <!-- Footer Contact end -->
</body>

</html>
<?php
    if (isset($_POST['submit']))  {
            $username=$_POST['username'];
            $password=$_POST['password'];

        if ($username=='username' && $password=='password') {
                header("location:home.html");
                exit();
        }
        else
        echo "Invalid Username/Password";  {

    }
}
?>