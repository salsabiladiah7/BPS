<?php
    include 'koneksi.php';
    $nik = $_GET['no_kk'];
    $nama = $_GET['nama'];
    $tempat = $_GET['tempat'];
    $tanggal = $_GET['tgl'];
    $pendidikan = $_GET['pendidikan'];
    $pekerjaan = $_GET['pekerjaan'];

    $query = "INSERT INTO data_pd (no_kk,nama,tempat,tgl,pendidikan,pekerjaan) VALUES ('$nik','$nama','$tempat'.'$tanggal','$pendidikan','$pekerjaan')";
    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil Tambah Data";
        echo "<a href='afterlogin.php'>Lihat Data</a>";
    }
    else{
        echo "Gagal Tambah Data".mysqli_error($connect);
    }
?>