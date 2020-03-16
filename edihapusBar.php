<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css";>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css//bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="jumbotron text-center bg-info">
<h1 class="judul" style="color:white">Badan Pusat Statistik Moklet City</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="afterlogin.php">BERANDA</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="tambah.php">Tambah Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="edihapusBar.php">Edit/Hapus Data</a>
    </li>    
  </ul>
</div>  
</nav>

<div class="container" style="margin-top:30px">
<center><h1>Data Statistika Penduduk</h1>
<table bgcolor=#a7dbd8 border="1" width=50%></center>
    <tr>
        <th bgcolor=#69d2e7>NIK</th>
        <th bgcolor=#69d2e7>Nama</th>
        <th bgcolor=#69d2e7>Tempat Lahir</th>
        <th bgcolor=#69d2e7>Tanggal Lahir</th>
        <th bgcolor=#69d2e7>Pendidikan</th>
        <th bgcolor=#69d2e7>Pekerjaan</th>
        <th colspan="2" bgcolor=#69d2e7>OPTION</th>
    </tr>
    <?php
        include "koneksi.php";
        $query = "SELECT*FROM data_pd";
        $sql= mysqli_query($connect,$query);
        while($data = mysqli_fetch_array($sql)){
            echo "<tr>";
            echo "<td>".$data['no_kk']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['tempat']."</td>";
            echo "<td>".$data['tgl']."</td>";
            echo "<td>".$data['pendidikan']."</td>";
            echo "<td>".$data['pekerjaan']."</td>";
            echo "<td><a href='form_update.php?ID_User=".$data['no_kk']."'>Edit</a></td>";
            echo "<td><a href='delete.php?ID_User=".$data['no_kk']."' onlick='return confirm(\"apakah anda yakin ingin menghapus data?\")'>Hapus</a></td>";
            echo "</tr>";
        }
    ?>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>