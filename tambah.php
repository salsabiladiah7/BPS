<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css//bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top:30px">
    <div class="log">
        <form action="tambah2.php" method="GET">
            <label for="nik">NIK:</label>
            <input type="text" name="no_kk" placeholder="ENTER NIK"><br>
            <label for="nama">NAMA:</label>
            <input type="text" name="nama" placeholder="ENTER YOUR NAME"><br>
            <label for="tempat">TEMPAT LAHIR:</label>
            <input type="text" name="tempat" placeholder="ENTER TEMPAT LAHIR"><br>
            <label for="tanggal">TANGGAL LAHIR:</label>
            <input type="text" name="tgl" placeholder="DD-MM-YYYY"><br>
            <label for="pendidikan">PENDIDIKAN:</label>
            <input type="text" name="pendidikan" placeholder="ENTER YOUR PENDIDIKAN"><br>
            <label for="pekerjaan">PEKERJAAN:</label>
            <input type="text" name="pekerjaan" placeholder="ENTER YOUR PEKERJAAN"><br><br>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>