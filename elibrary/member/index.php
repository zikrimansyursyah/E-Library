<?php
include '../auth/connection.php';
$tgl = date('Y-m-d');
session_start();

if (!isset($_SESSION['sesi'])) {
  header("location:../loginfirst.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="library perpustakaan zikri">
  <link rel="shortcut icon" href="../assets/favicon/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>E-Library by Zikri | Member</title>
</head>

<body>
  <header class="">
    <nav class="fixed-top d-flex align-items-center justify-content-between px-5">
      <a href=".././" class="logo fs-4 d-inline-flex gap-3">êLibrary. <span class="logo-title d-inline-flex">Designed
          by <br> Zikri Mansyursyah</span> </a>
      <div class="menu fs-5 fw-light d-flex gap-3">
        <a href=".././" class="menu-list px-3 py-1">Home</a>
        <a href="../book/" class="menu-list px-3 py-1">Book</a>
        <a href="./" class="menu-list px-3 py-1 active">Member</a>
        <a href="../transaction/" class="menu-list px-3 py-1">Transaction</a>
      </div>
    </nav>
  </header>

  <main class="book container-xl mb-5">
    <div class="table-content card h-auto">
      <div class="table-head px-4 pt-3 pb-1 border-bottom">
        <h1>Book List</h1>
      </div>
      <div class="table-data p-4">
        <button class="btn btn-primary float-end mb-3" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Buku</button>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id Buku</th>
              <th scope="col">Judul Buku</th>
              <th scope="col">Kategori</th>
              <th scope="col">Pengarang</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td class="datalist">BK013</td>
              <td class="datalist">Dermaga Biru</td>
              <td class="datalist">Karya Sastra</td>
              <td class="datalist">Sutejo</td>
              <td class="datalist">Media Cipta</td>
              <td class="d-flex gap-1">
                <button class="btn btn-edit w-50" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                <button class="btn btn-hapus w-50" data-bs-toggle="modal" data-bs-target="#hapus">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
        <nav class="pagination-head h-auto">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </main>

  <footer>
    <div class="container-xl py-4">
      <div class="footer-body d-flex align-items-center gap-5 text-white">
        <div class="ft-content">
          <h3 class="logo"><a href="/">êLibrary.</a></h3>
          <div class="ft-desc">eLibrary merupakan aplikasi untuk mereka yang senang membaca buku atau hanya
            sekedar mencari refrensi, disini anda dapat membaca bahkan melakukan peminjaman buku secara
            online. ayo baca buku, buku adalah jendela dunia</div>
          <div class="media-sosial">
            <a href="https://github.com/zikrimansyursyah" target="_blank" title="My Github"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/zikrimansyursyah/" target="_blank" title="My LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://zikrimansyursyah.com" target="_blank" title="My Portfolio"><i class="bi bi-globe"></i></a>
            <a href="https://www.facebook.com/zikrimansyursyah" target="_blank" title="My Facebook"><i class="bi bi-facebook"></i></a>
          </div>
        </div>
        <div class="ft-content">
          <h2 class="sub-footer">Popular</h2>
          <a href="#" class="ft-desc link">Satanic for Kids 3rd Edition</a>
          <a href="#" class="ft-desc link">Heavy React Js Programming Lesson</a>
          <a href="#" class="ft-desc link">Tell Me No Lies</a>
          <a href="#" class="ft-desc link">Dunia Lain Gunung Rinjani</a>
        </div>
      </div>
    </div>
    <div class="footnote">
      <div class="container-xl h-100 d-flex align-items-center justify-content-between">
        <div>All Rights Reserved &copy; Crafty by Zikri </div>
        <div>Design and Created with &nbsp;<i class="bi bi-heart-fill" style="font-size: 12px;"></i>&nbsp; and
          Passion -
          Zikri Mansyursyah - 2021</div>
      </div>
    </div>
  </footer>

  <!-- modal tambah -->
  <div class="modal" id="tambah" tabindex="-1">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-4 py-4">
          <form action="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="id_buku">
              <label for="id_buku">ID Buku</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="judul_buku">
              <label for="judul_buku">Judul Buku</label>
            </div>
            <div class="kategori input-group mb-3">
              <select class="form-select" id="kategori">
                <option selected class="title">Kategori</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="pengarang">
              <label for="pengarang">Pengarang</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="penerbit">
              <label for="penerbit">Penerbit</label>
            </div>
            <button type="submit" class="btn btn-primary float-end">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- modal edit -->
  <div class="modal" id="edit" tabindex="-1">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-4 py-4">
          <form action="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="id_buku">
              <label for="id_buku">ID Buku</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="judul_buku">
              <label for="judul_buku">Judul Buku</label>
            </div>
            <div class="kategori input-group mb-3">
              <select class="form-select" id="kategori">
                <option selected class="title">Kategori</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="pengarang">
              <label for="pengarang">Pengarang</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="penerbit">
              <label for="penerbit">Penerbit</label>
            </div>
            <button type="submit" class="btn btn-primary float-end">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- modal hapus -->
  <div class="modal" id="hapus" tabindex="-1">
    <div class="action-hapus modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Buku?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-4 py-4 text-center">
          <button class="btn btn-hapus">Hapus</button>
          <button class="btn btn-cancel">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>