<?php

    session_start();
    include("config.php");
    if(isset($_POST['Update'])){

        //print_r($_FILES['fotoProfil']['name']);

        $imageName = $_FILES['fotoProfil']['name'];
        $tempName =$_FILES['fotoProfil']['tmp_name'];
        $folder = "upload/".$imageName;
        if(move_uploaded_file($tempName, $folder)){
            echo "sukses";
        }else{
            echo "failed";
        }
        $str_query = "update accountprofile set namaDepan = '".$_POST['namaDepan']."',
            namaTengah = '".$_POST['namaTengah']."', namaBelakang = '".$_POST['namaBelakang']."',
            tempatLahir = '".$_POST['tempatLahir']."', tglLahir = '".$_POST['tglLahir']."', 
            NIK = '".$_POST['nik']."', wargaNegara = '".$_POST['wargaNegara']."', 
            email = '".$_POST['email']."', noHP = '".$_POST['noHP']."',
            alamat = '".$_POST['alamat']."', kodePos = '".$_POST['kodePos']."', 
            fotoProfil = '".$imageName."' where NIK='".$_POST['nik']."'";
    
            $query = mysqli_query($connection, $str_query);

            $_SESSION['foto'] = $imageName;

            if($query){
                echo "<script>";
                    echo "alert('Update Berhasil')";
                echo "</script>";
    
                echo "<script>";
                    echo "window.location = 'home.php'";
                echo "</script>";
            }else{
                echo "<script>";
                    echo "alert('Update Gagal')";
                echo "</script>";
    
                echo "<script>";
                    echo "window.location = 'edit.php'";
                echo "</script>";
            }
    }

?>