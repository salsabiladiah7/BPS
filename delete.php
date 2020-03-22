<?php
    include 'koneksi.php';
    $nik= $_GET['no_kk'];

    $query = "DELETE FROM data_pd WHERE no_kk='$nik'";
    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil Hapus Data";
    }
    else{
        echo "Gagal Hapus Data";
    }
    echo "<a href='afterlogin.php'>Lihat Data</a>";
?>