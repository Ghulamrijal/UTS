<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

	<h2>DATA KARYAWAN SMARTCITY</h2>
	<br/>
    <br/>
	<a href="DTBSkaryawan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA KARYAWAN</h3>
	<form method="post" action="input_query.php">
		<table>
			<tr>			
				<td>NIP</td>
				<td><input type="number" name="NIP"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="NAMA"></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="number" name="umur"></td>
			</tr>
            <tr>
				<td>Jabatan</td>
				<td><input type="text" name="JABATAN"></td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td><input type="text" name="ALAMAT"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>