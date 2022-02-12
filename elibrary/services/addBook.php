<?php
include '../auth/connection.php';
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
mysqli_query($conn, "INSERT INTO `e_library`.`tb_buku` (`id_buku`, `judul_buku`, `kategori`, `pengarang`, `penerbit`) VALUES ('$id_buku', '$judul_buku', '$kategori', '$pengarang', '$penerbit');");
header("location:../book/");
