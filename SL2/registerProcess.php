<?php
    session_start();
    include("config.php");

        if(isset($_POST['Register'])){
            $imageName = $_FILES['fotoProfil']['name'];
            $tempName =$_FILES['fotoProfil']['tmp_name'];
            $folder = "upload/".$imageName;
            if(move_uploaded_file($tempName, $folder)){
                echo "sukses";
            }else{
                echo "failed";
            }
            $str_query = "insert into accountprofile values('".$_POST['namaDepan']."', '".$_POST['namaTengah']."',
            '".$_POST['namaBelakang']."', '".$_POST['tempatLahir']."', '".$_POST['tglLahir']."', 
            '".$_POST['nik']."', '".$_POST['wargaNegara']."', '".$_POST['email']."', '".$_POST['noHp']."',
            '".$_POST['alamat']."', '".$_POST['kodePos']."', '".$imageName."', 
            '".$_POST['username']."', '".$_POST['pass1']."', '".$_POST['pass2']."')";
    
            $query = mysqli_query($connection, $str_query);

            $result = mysqli_query($connection, "SELECT * FROM accountprofile");

            if($query){
                echo "<script>";
                    echo "alert('Register Berhasil')";
                echo "</script>";
    
                echo "<script>";
                    echo "window.location = 'index.php'";
                echo "</script>";
            }else{
                echo "<script>";
                    echo "alert('Register Gagal')";
                echo "</script>";
    
                echo "<script>";
                    echo "window.location = 'index.php'";
                echo "</script>";
            }
        }

?>