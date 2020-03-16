<?php
    include './koneksi.php';

    $nik = $_GET['no_kk'];

    $query="DELETE FROM data_pd WHERE no_kk='$nik'";
    $result= mysqli_query($connect,$query);
    $num= mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil Hapus Data<br>";
    }
    else{
        echo "Gagal Hapus Data<br>";
    }
    echo "<a href='input_tampil.php'>Lihat Data</a>";
?>