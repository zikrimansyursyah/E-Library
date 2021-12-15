<?php
include 'connection.php';
$tgl = date('Y-m-d');
session_start();

if (isset($_SESSION['sesi'])) {
  include 'admin.php';
} else {
  echo "<script>
    alert('Login First');
  </script>";
  header('location:admin.php');
}
