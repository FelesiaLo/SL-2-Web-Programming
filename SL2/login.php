<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <style>
        <?php include 'login.css'; ?>
    </style>

    <?php session_start(); ?>

    <form action="loginProcess.php" method="post">
        <ul>Login</ul>
        <div class="tabel">
            <div class="username">
                <p id="users">Username</p>
                <input type="text" name="username" id="" required>
            </div>
            <div class="pass">
                <p id="passid">Password</p>
                <input type="password" name="password" id="" required>
            </div>
            
            <div class="buttons">
            <input type="submit" name="Login" value="Login">
            <input type="button" onclick="location.href='index.php'" name="Kembali" value="Kembali">
        </div>

        </div>
    </form>
</body>
</html>