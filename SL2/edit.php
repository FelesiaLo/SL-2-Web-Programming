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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<style>
    <?php include 'edit.css'; ?>
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

    <div class="body">
    <form action="editProcess.php" method="POST" enctype="multipart/form-data">
        <p id="capt"><b>Profil Pribadi</b></p>
        <table>
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="namaDepan" value="<?php echo $depan?>"></td>

                <td>Nama Tengah</td>
                <td><input type="text" name="namaTengah" value="<?php echo $tengah?>"></td>

                <td>Nama Belakang</td>
                <td><input type="text" name="namaBelakang" value="<?php echo $belakang?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatLahir" value="<?php echo $tempat?>"></td>

                <td>Tgl Lahir</td>
                <td><input type="date" name="tglLahir" value="<?php echo $tanggal?>"></td>

                <td>NIK</td>
                <td><input type="number" name="nik" value="<?php echo $nikUser?>" readonly></td>
            </tr>

            <tr>
                <td>Warga Negara</td>
                <td><input type="text" name="wargaNegara" value="<?php echo $negara?>"></td>

                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email?>"></td>

                <td>No HP</td>
                <td><input type="number" name="noHP" value="<?php echo $hp?>"></td>
            </tr>

            <tr>
                <td style="height: 80px">Alamat</td>
                <td><textarea name="alamat" id="" cols="30" rows="10" ><?php echo $alamat?></textarea></td>

                <td>Kode Pos</td>
                <td><input type="number" name="kodePos" value="<?php echo $kode?>"></td>

                <td>Foto Profil</td>
                <td><input type="file" name="fotoProfil" value="<?php echo $foto?>">
                <br> Current Profile Picture
                <br> <?php echo "<img src='./upload/".$_SESSION['foto']."'>";?>
                </td>
                
               
            </tr>
        </table>
        <div class="buttons">
            <input type="button" onclick="location.href='profile.php'" name="Kembali" value="Kembali">
            <input type="submit" value="Update" name="Update">
        </div>
    </div>
    
</body>
</html>