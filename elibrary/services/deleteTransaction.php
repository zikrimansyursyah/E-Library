<?php
include '../auth/connection.php';
$id_transaksi    = $_GET['id'];
mysqli_query($conn, "DELETE FROM `e_library`.`transaksi` WHERE  `id_transaksi`='$id_transaksi';");
header("location:../transaction/");
