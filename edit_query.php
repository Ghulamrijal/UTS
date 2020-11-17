<?php 

include 'koneksi.php';
 

$id = $_POST['id'];
$NIP = $_POST['NIP'];
$NAMA= $_POST['NAMA'];
$umur = $_POST['umur'];
$JABATAN = $_POST['JABATAN'];
$ALAMAT = $_POST['ALAMAT'];

 

mysqli_query($koneksi,"update smartcity set NIP='$NIP', NAMA='$NAMA', umur='$umur', JABATAN='$JABATAN', ALAMAT='$ALAMAT' where id='$id'");
 

header("location:DTBSkaryawan.php");
 
?>