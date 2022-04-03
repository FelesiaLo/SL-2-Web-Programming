<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <style>
        <?php include 'profile.css'; ?>
    </style>

    <div class="header">
        <div class="theme">
            <p>Aplikasi Pengelolaan Keuangan</p>
        </div>
        <div class="menu">
            <a href="home.php" id="profile">Home</a>
            <p><u>Profile</u></p>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

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
                    $depan = $data['namaDepan'];
                    $tengah = $data['namaTengah'];
                    $belakang = $data['namaBelakang'];
                    $tempat = $data['tempatLahir'];
                    $tanggal = $data['tglLahir'];
                    $nikUser = $data['NIK'];
                    $negara = $data['wargaNegara'];
                    $email = $data['email'];
                    $hp = $data['noHP'];
                    $alamat = $data['alamat'];
                    $kode = $data['kodePos'];
                    $foto = $data['fotoProfil'];
                }
            }
        }
    ?>

    <div class="body">
    <form action="edit.php" method="POST">
        <p id="capt"><b>Profil Pribadi</b></p>
        <table>
            <tr>
                <td>Nama Depan</td>
                <td><b><?php echo $depan?></b></td>

                <td>Nama Tengah</td>
                <td><b><?php echo $tengah?></b></td>

                <td>Nama Belakang</td>
                <td><b><?php echo $belakang?></b></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><b><?php echo $tempat?></b></td>

                <td>Tgl Lahir</td>
                <td><b><?php echo $tanggal?></b></td>

                <td>NIK</td>
                <td><b><?php echo $nikUser?></b></td>
            </tr>

            <tr>
                <td>Warga Negara</td>
                <td><b><?php echo $negara?></b></td>

                <td>Email</td>
                <td><b><?php echo $email?></b></td>

                <td>No HP</td>
                <td><b><?php echo $hp?></b></td>
            </tr>

            <tr>
                <td style="height: 80px">Alamat</td>
                <td><b><?php echo $alamat?></b></td>

                <td>Kode Pos</td>
                <td><b><?php echo $kode?></b></td>

                <td>Foto Profil</td>
                <td> <?php echo "<img src='./upload/".$_SESSION['foto']."'>";?></td>
                
               
            </tr>
        </table>
        <input type="submit" value="Edit" name="Edit">
    </div>
</body>
</html>