<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>

	<h2>DATA KARYAWAN SMARTCITY</h2>
	<br/>
	<a href="DTBSkaryawan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA KARYAWAN</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from smartcity where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_query.php">
			<table>
				<tr>			
					<td>NIP</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="number" name="NIP" value="<?php echo $d['NIP']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="NAMA" value="<?php echo $d['NAMA']; ?>"></td>
				</tr>
				<tr>
					<td>Umur</td>
					<td><input type="number" name="umur" value="<?php echo $d['umur']; ?>"></td>
				</tr>
                <tr>
					<td>Jabatan</td>
					<td><input type="text" name="JABATAN" value="<?php echo $d['JABATAN']; ?>"></td>
				</tr>
                <tr>
					<td>Alamat</td>
					<td><input type="text" name="ALAMAT" value="<?php echo $d['ALAMAT']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>