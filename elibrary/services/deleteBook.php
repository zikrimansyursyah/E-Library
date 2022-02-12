<?php
include '../auth/connection.php';
$id_buku    = $_GET['id'];
mysqli_query($conn, "DELETE FROM `e_library`.`tb_buku` WHERE  `id_buku`='$id_buku';");
header("location:../book/");
