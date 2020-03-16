<?php
    include 'koneksi.php';
    $nik = $_POST['no_kk'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $pendidikan = $_POST['pendidikan'];
    $pekerjaan = $_POST['pekerjaan'];

    $query = "UPDATE data_pd SET no_kk='$nik', nama='$nama', tgl='$tgl', pendidikan='$pendidikan' pekerjaan='$pekerjaan' WHERE no_kk='$nik'";
    $result = $connect->query($query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil Edit Data<br>";
    }
    else{
        echo "Gagal Edit Data<br>";
    }
    echo "<a href='input_tampil.php'>Lihat Data</a>";
?>