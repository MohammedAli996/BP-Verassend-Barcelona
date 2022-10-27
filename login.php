<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/login.css">
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
    <?php
  require('db.php');
  session_start();
  // When form submitted, check and create user session.
  if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);    // removes backslashes
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    // Check user is exist in the database
    $query    = "SELECT * FROM `users` WHERE username='$username'
                    AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
      $_SESSION['username'] = $username;
      // Redirect to user dashboard page
      header("Location: dashboard.php");
    } else {
      echo "<div class='form'>
                <h3>Incorrect Username/password.</h3><br/>
                <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                </div>";
    }
  } else {
  ?>

    <div class="center">
        <h1>Login</h1>
        <form class="form" method="post" name="login">
            <div class="txt_field">
                <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
            </div>
            <div class="txt_field">
                <input type="password" class="login-input" name="password" placeholder="Password" />
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login" name="submit" class="login-button" />
            <div class="signup_link">
                Not a member? <a href="registration.php">Signup</a>
            </div>
        </form>
    </div>
    <!-- Footer Contact start -->
    <?php
    $layout->getNavbarFoot("");
  }
  ?>
    <!-- Footer Contact end -->
</body>

</html>