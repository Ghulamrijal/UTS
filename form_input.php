<!DOCTYPE html>
<html>
<head>
	<title>FORM input KARYAWAN</title>
</head>
<body>
	<h2>DATA KARYAWAN SMARTCITY KOTA BATU</h2>
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