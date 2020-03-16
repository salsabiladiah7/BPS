<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include 'koneksi.php';
	$nik = $_GET['no_kk'];
	
    $query = "SELECT * FROM data_pd WHERE no_kk='$nik'";
    $result = $connect->query($query);
	$row = $result -> fetch_assoc();
?>
	<form action="update.php" method="POST">		
		<table>
            <tr>
				<td><label for="no_kk">NIK</label></td>
                <td>:</td>
				<td>
					<input type="text" name="no_kk" id="no_kk" value="<?php echo $row['no_kk'] ?>">
				</td>					
			</tr>
			<tr>
				<td><label for="nama">Nama</label></td>
                <td>:</td>
				<td>
					<input type="text" name="nama" id="nama" value="<?php echo $row['nama'] ?>">
				</td>					
			</tr>	
			<tr>
                <td><label for="tempat">Tempat Lahir</label></td>
                <td>:</td>
				<td><input type="text" name="tempat" id="tempat" value="<?php echo $row['tempat'] ?>"></td>					
			</tr>	
			<tr>
                <td><label for="tgl">Tanggal Lahir</label></td>
                <td>:</td>
				<td><input type="text" name="tgl" id="tgl" value="<?php echo $row['tgl'] ?>"></td>					
			</tr>
            <tr>
                <td><label for="pendidikan">Pendidikan</label></td>
                <td>:</td>
				<td><input type="text" name="pendidikan" id="pendidikan" value="<?php echo $row['pendidikan'] ?>"></td>					
			</tr>
            <tr>
                <td><label for="pekerjaan">Pekerjaan</label></td>
                <td>:</td>
				<td><input type="text" name="pekerjaan" id="pekerjaan" value="<?php echo $row['pekerjaan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>