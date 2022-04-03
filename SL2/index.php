<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <style>
        <?php include 'index.css'; ?>
    </style>

    <?php
        include("config.php");
    ?>

    <div class="header1">
        Aplikasi Pengelolaan Keuangan
        <br>
        <br>
        <br>
        <br>
    <div>

    <div class="header2">
        Selamat Datang di Aplikasi Pengelolaan Keuangan
        <br>
    </div>

    <div class="button">
        <form action="" method="post">
            <input type="button" onclick="location.href='login.php'" value="Login">
            <input type="button" onclick="location.href='register.php'" value="Register">
        </form>
    </div>
    
    
</body>
</html>