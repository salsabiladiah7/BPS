<?php
    include 'koneksi.php';

    $user = $_POST['uname'];
    $pasw = $_POST['pswd'];

    $query = mysqli_query($connect,"SELECT*FROM admin WHERE nama_adm='$user' AND pass_adm='$pasw'");
    $cek = mysqli_num_rows($query);

    if($cek>0){
        session_start();
        $_SESSION['uname']=$user;
        $_SESSION['pswd']=$pasw;
        $_SESSION['status']='login';
        header("location:afterlogin.php");
    }
    else{
        echo "Gagal LOGIN".mysqli_error($connect);
    }
?>