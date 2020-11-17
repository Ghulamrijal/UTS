<!DOCTYPE html>
<html>
<head>
	<title>Tabel Karyawan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
	<h2>DATA KARYAWAN SMARTCITY KOTA BATU</h2>
	<br/>
	<br/>
	<br/>
	<table border="2" class="table1">
		<tr>
			<th>NO</th>
			<th>NIP</th>
			<th>NAMA</th>
			<th>UMUR</th>
			<th>JABATAN</th>
			<th>ALAMAT</th>
            <th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from smartcity");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NIP']; ?></td>
				<td><?php echo $d['NAMA']; ?></td>
				<td><?php echo $d['umur']; ?></td>
                <td><?php echo $d['JABATAN']; ?></td>
                <td><?php echo $d['ALAMAT']; ?></td>
				<td>
					<a href="form_edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_query.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br/>
	<br/>
	<br/>
	<br/>
	<a href="form_input.php" class="button">TAMBAH KARYAWAN</a>
</body>
</html>