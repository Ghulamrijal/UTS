<?php 

include 'koneksi.php';


$id = $_GET['id'];



mysqli_query($koneksi,"delete from smartcity where id='$id'");


header("location:DTBSkaryawan.php");

?>