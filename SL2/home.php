<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <style>
        <?php include 'home.css'; ?>
    </style>

    <div class="header">
        <div class="theme">
            <p>Aplikasi Pengelolaan Keuangan</p>
        </div>
        <div class="menu">
            <p><u>Home</u></p>
            <a href="profile.php" id="profile">Profile</a>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="body">

    <?php
        session_start();
        include("config.php");

        $str_query = "select * from  accountprofile";
        $query = mysqli_query($connection, $str_query);
        

        if($query->num_rows > 0){

            while($data = mysqli_fetch_array($query)){
                $usernameDb = $data['username'];
                $passDb = $data['password1'];
                if($usernameDb == $_SESSION['usernameLogin']){
                    echo "Halo "."<b>".$data['namaDepan']." ".$data['namaTengah']." ".$data['namaBelakang']."</b>".", 
                    Selamat datang di Aplikasi Pengelolaan Keuangan";
                }
            }
        }

    ?>

</body>
</html>