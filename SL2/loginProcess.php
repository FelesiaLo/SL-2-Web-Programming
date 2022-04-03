<?php
    session_start();
    include("config.php");

    if(isset($_POST['Login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        $str_query = "select * from  accountprofile";
        $query = mysqli_query($connection, $str_query);
        

        if($query->num_rows > 0){

            while($data = mysqli_fetch_array($query)){
                $usernameDb = $data['username'];
                $passDb = $data['password1'];
                $imageName = $data['fotoProfil'];
                if($usernameDb == $username){
                    if($passDb == $password){
                        $_SESSION['usernameLogin'] = $usernameDb;
                        $_SESSION['foto'] = $imageName;

                        echo "<script>";
                            echo "alert('Login Sukses')";
                        echo "</script>";

                        echo "<script>";
                            echo "window.location = 'home.php'";
                        echo "</script>";
                    }else{
                        $usernameDb = "";
                        $passDb = "";
                        $imageName = "";
                    }
                }else{
                    $usernameDb = "";
                    $passDb = "";
                    $imageName = "";
                }
            }
            echo "<script>";
                echo "alert('Username atau password yang diinput tidak sesuai')";
            echo "</script>";

            echo "<script>";
                echo "window.location = 'login.php'";
            echo "</script>";
        }
    }
?>