<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        <?php include 'register.css'; ?>
    </style>

    <?php session_start(); ?>

    <form action="registerProcess.php" method="POST" enctype="multipart/form-data">
        <table>
            <caption>Register</caption>
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="namaDepan" id="" required></td>

                <td>Nama Tengah</td>
                <td><input type="text" name="namaTengah" id="" required></td>

                <td>Nama Belakang</td>
                <td><input type="text" name="namaBelakang" id="" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatLahir" id="" required></td>

                <td>Tgl Lahir</td>
                <td><input type="date" name="tglLahir" placeholder="dd-mm-yyyy" max="2022-03-27" id="" required></td>

                <td>NIK</td>
                <td><input type="number" name="nik" id="" required></td>
            </tr>

            <tr>
                <td>Warga Negara</td>
                <td><input type="text" name="wargaNegara" id="" required></td>

                <td>Email</td>
                <td><input type="text" name="email" id="" required></td>

                <td>No HP</td>
                <td><input type="number" name="noHp" id="" required></td>
            </tr>

            <tr>
                <td style="height: 80px">Alamat</td>
                <td><textarea name="alamat" id="" required></textarea></td>

                <td>Kode Pos</td>
                <td><input type="number" name="kodePos" id="" required></td>

                <td>Foto Profil</td>
                <td>Silahkan Pilih Foto <br> <input type="file" name="fotoProfil" id="" required></td>
            </tr>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="" required></td>

                <td>Password 1</td>
                <td><input type="password" name="pass1" id="" required></td>

                <td>Password 2</td>
                <td><input type="password" name="pass2" id="" required></td>
            </tr>
        </table>
        <div class="buttons">
            <input type="button" onclick="location.href='index.php'" name="Kembali" value="Kembali">
            <input type="submit" value="Register" name="Register">
        </div>
    </form>
</body>
</html>