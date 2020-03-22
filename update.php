<?php
    include 'koneksi.php';
    $nik = $_GET['no_kk'];
    $nama = $_GET['nama'];
    $tempat = $_GET['tempat'];
    $tgl = $_GET['tgl'];
    $pendidikan = $_GET['pendidikan'];
    $pekerjaan = $_GET['pekerjaan'];

    $query = "UPDATE data_pd SET nama='$nama', tempat='$tempat', tgl='$tgl', pendidikan='$pendidikan', pekerjaan='$pekerjaan' WHERE no_kk='$nik'";
    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil Edit Data";
    }
    else{
        echo "Gagal Edit Data";
    }
    echo "<a href='afterlogin.php'>Lihat Data</a>";
?>