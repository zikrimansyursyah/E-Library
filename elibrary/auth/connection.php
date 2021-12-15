<?php
$servername = "localhost";
$username = "root";
$password = "";
$ready = false;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected successfully";
}

if (!$ready) {
  // Create DB 
  mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS `e_library`;");

  // Use DB
  mysqli_query($conn, "USE `e_library`;");

  // Create Table Anggota
  mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `tbanggota` (
	`idanggota` VARCHAR(5) NOT NULL,
	`nama` VARCHAR(30) NOT NULL,
	`jeniskelamin` VARCHAR(10) NOT NULL,
	`alamat` VARCHAR(40) NOT NULL,
	`status` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`idanggota`)
);");

  // Create Table Buku
  mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `tb_buku` (
	`id_buku` VARCHAR(10) NOT NULL,
	`judul_buku` VARCHAR(64) NOT NULL,
	`kategori` VARCHAR(64) NOT NULL,
	`pengarang` VARCHAR(64) NOT NULL,
	`penerbit` VARCHAR(64) NULL,
	PRIMARY KEY (`id_buku`)
);");

  // Create Table User
  mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `tb_user` (
	`id_user` VARCHAR(5) NOT NULL,
	`nama` VARCHAR(30) NOT NULL,
	`alamat` VARCHAR(40) NOT NULL,
	`password` VARCHAR(10) NULL DEFAULT NULL,
	`user_role` VARCHAR(10) NOT NULL,
	PRIMARY KEY (`id_user`)
);");

  // Create Table Transaksi
  mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `transaksi` (
	`id_transaksi` VARCHAR(20) NOT NULL,
	`id_anggota` VARCHAR(5) NOT NULL,
	`id_buku` VARCHAR(10) NOT NULL,
	`tgl_peminjaman` DATE NULL DEFAULT NULL,
	`tgl_pengembalian` DATE NULL DEFAULT NULL,
	PRIMARY KEY (`id_transaksi`)
);");

  //Create default User Admin
  mysqli_query($conn, "INSERT INTO `e_library`.`tb_user` (`id_user`, `nama`, `alamat`, `password`, `user_role`) VALUES ('ADM01', 'admin', 'Tangerang', 'admin', 'admin');");

  $ready = true;
}
