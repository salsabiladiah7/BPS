<?php
    include 'koneksi.php';
    $nik = $_GET['no_kk'];
    $nama = $_GET['nama'];
    $tempat = $_GET['tempat'];
    $tgl = $_GET['tgl'];
    $pendidikan = $_GET['pendidikan'];
    $pekerjaan = $_GET['pekerjaan'];

    $query = "INSERT INTO data_pd (no_kk,nama,tempat,tgl,pendidikan,pekerjaan) VALUES ('$nik','$nama','$tempat','$tgl','$pendidikan','$pekerjaan')";
    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);
    if($num>0){
        header("location:afterlogin.php");
    }
    else{
        echo"gagal tambah data".mysqli_error($connect);
    }
?>