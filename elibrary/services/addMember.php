<?php
include '../auth/connection.php';
$idanggota = $_POST['idanggota'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
mysqli_query($conn, "INSERT INTO `e_library`.`tbanggota` (`idanggota`, `nama`, `jeniskelamin`, `alamat`, `status`) VALUES ('$idanggota', '$nama', '$jeniskelamin', '$alamat', '$status');");
header("location:../member/");
