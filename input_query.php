<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$NIP = $_POST['NIP'];
$NAMA= $_POST['NAMA'];
$umur = $_POST['umur'];
$JABATAN = $_POST['JABATAN'];
$ALAMAT = $_POST['ALAMAT'];

// menginput data ke database
mysqli_query($koneksi,"insert into smartcity values('','$NIP','$NAMA','$umur','$JABATAN','$ALAMAT')");

// mengalihkan halaman kembali ke utama
header("location:DTBSkaryawan.php");

?>