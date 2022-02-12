<?php
include '../auth/connection.php';
$idanggota    = $_GET['id'];
mysqli_query($conn, "DELETE FROM `e_library`.`tbanggota` WHERE  `idanggota`='$idanggota';");
header("location:../member/");
