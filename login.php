<!DOCTYPE html>
<html>

<head>

    <title>Login</title>
</head>

<body>
    <div id="main">
        <h1>Login</h1>
        <form method="POST">
            Username <input type="text" name="username" class="text" autocomplete="off" required>
            Password <input type="password" name="password" class="text" required>
            <input type="submit" name="submit" id="sub">
        </form>
    </div>
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