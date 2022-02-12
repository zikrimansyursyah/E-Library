<?php
include '../auth/connection.php';
$id_transaksi = $_POST['id_transaksi'];
$id_anggota = $_POST['id_anggota'];
$id_buku = $_POST['id_buku'];
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
mysqli_query($conn, "INSERT INTO `e_library`.`transaksi` (`id_transaksi`, `id_anggota`, `id_buku`, `tgl_peminjaman`, `tgl_pengembalian`) VALUES ('$id_transaksi', '$id_anggota', '$id_buku', '$tgl_peminjaman', '$tgl_pengembalian');");
header("location:../transaction/");
