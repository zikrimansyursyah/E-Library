<?php
session_start();
$_SESSION['sesi'] = NULL;

include "./connection.php";
if (isset($_POST['submit'])) {
  $user  = isset($_POST['user']) ? $_POST['user'] : "";
  $pass  = isset($_POST['password']) ? $_POST['password'] : "";
  $qry  = mysqli_query($conn, "SELECT * FROM tb_user 
	WHERE nama = '$user' AND password = '$pass'");
  $sesi  = mysqli_num_rows($qry);

  if ($sesi == 1) {
    $data_admin  = mysqli_fetch_array($qry);
    $_SESSION['id_user'] = $data_admin['id_user'];
    $_SESSION['sesi'] = $data_admin['nama'];
    echo "<meta http-equiv='refresh' content='0; 
				url=../index.php?user=$sesi'>";
  } else {
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
    echo "<script>alert('Anda Gagal Log In');</script>";
    echo "<script>alert('" . $user . $pass . "');</script>";
  }
} else {
  include "index.php";
}
