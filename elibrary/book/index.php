<?php
include '../auth/connection.php';
$tgl = date('Y-m-d');
session_start();

if (!isset($_SESSION['sesi'])) {
  header("location:../loginfirst.php");
}
$id_buku    = $_GET['id'];
$qry = mysqli_query($conn, "SELECT * FROM tb_buku WHERE id_buku = '$id_buku';");
$dt = mysqli_fetch_array($qry);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="library perpustakaan zikri" />
  <link rel="shortcut icon" href="../assets/favicon/favicon.png">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>E-Library by Zikri | Book</title>
</head>

<body>
  <header class="">
    <nav class="fixed-top d-flex align-items-center justify-content-between px-5">
      <a href=".././" class="logo fs-4 d-inline-flex gap-3">êLibrary.
        <span class="logo-title d-inline-flex">Designed by <br />
          Zikri Mansyursyah</span>
      </a>
      <div class="menu fs-5 fw-light d-flex gap-3">
        <a href=".././" class="menu-list px-3 py-1">Home</a>
        <a href="./" class="menu-list px-3 py-1 active">Book</a>
        <a href="../member/" class="menu-list px-3 py-1">Member</a>
        <a href="../transaction/" class="menu-list px-3 py-1">Transaction</a>
      </div>
    </nav>
  </header>

  <main id="book" class="book container-xl mb-5">
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
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM tb_buku;");
            while ($data = mysqli_fetch_array($query)) {
            ?>
              <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td class="datalist"><?php echo $data['id_buku'] ?></td>
                <td class="datalist"><?php echo $data['judul_buku'] ?></td>
                <td class="datalist"><?php echo $data['kategori'] ?></td>
                <td class="datalist"><?php echo $data['pengarang'] ?></td>
                <td class="datalist"><?php echo $data['penerbit'] ?></td>
                <td class="d-flex gap-1">
                  <a href="index.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-edit w-50">Edit</a>
                  <a onclick="setParams('<?php echo $data['id_buku'] ?>')" class="btn btn-hapus w-50" data-bs-toggle="modal" data-bs-target="#hapus">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <nav class="pagination-head h-auto">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page">
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
          <div class="ft-desc">
            eLibrary merupakan aplikasi untuk mereka yang senang membaca buku atau hanya sekedar mencari refrensi,
            disini anda dapat membaca bahkan melakukan peminjaman buku secara online. ayo baca buku, buku adalah
            jendela dunia
          </div>
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
        <div>All Rights Reserved &copy; Crafty by Zikri</div>
        <div>
          Design and Created with &nbsp;<i class="bi bi-heart-fill" style="font-size: 12px"></i>&nbsp; and Passion -
          Zikri Mansyursyah - 2021
        </div>
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
          <form method="POST" action="../services/addBook.php">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="id_buku" name="id_buku">
              <label for="id_buku">ID Buku</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="judul_buku" name="judul_buku">
              <label for="judul_buku">Judul Buku</label>
            </div>
            <div class="kategori input-group mb-3">
              <select class="form-select" id="kategori" name="kategori">
                <option selected class="title">Kategori</option>
                <option value="Kids">Kids</option>
                <option value="Novel">Novel</option>
                <option value="Cerpen">Cerpen</option>
              </select>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="pengarang" name="pengarang">
              <label for="pengarang">Pengarang</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="penerbit" name="penerbit">
              <label for="penerbit">Penerbit</label>
            </div>
            <button type="submit" class="btn btn-primary float-end" name="submit">Simpan</button>
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
          <form method="POST" action="../services/editBook.php">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo (isset($dt)) ? $dt['id_buku'] : ''; ?>">
              <label for="id_buku">Id Buku</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo (isset($dt)) ? $dt['judul_buku'] : ''; ?>">
              <label for=" judul_buku">Judul Buku</label>
            </div>
            <div class="kategori input-group mb-3">
              <select class="form-select" id="kategori" name="kategori">
                <option selected class="title"><?php echo (isset($dt)) ? $dt['kategori'] : ''; ?></option>
                <option value="Kids">Kids</option>
                <option value="Novel">Novel</option>
                <option value="Cerpen">Cerpen</option>
              </select>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo (isset($dt)) ? $dt['pengarang'] : ''; ?>">
              <label for=" pengarang">Pengarang</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo (isset($dt)) ? $dt['penerbit'] : ''; ?>">
              <label for=" penerbit">Penerbit</label>
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
          <a id="btn-hapus" class="btn btn-hapus" href="">Hapus</a>
          <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    function setParams(id) {
      document.getElementById("btn-hapus").setAttribute("href", `../services/deleteBook.php?id=${id}`)
    }

    $(document).ready(function() {
      const loadModal = findGetParameter('id')
      if (loadModal.length > 0) {
        $("#edit").modal('show');
      }

      function findGetParameter(parameterName) {
        var result = null,
          tmp = [];
        var items = location.search.substr(1).split("&");
        for (var index = 0; index < items.length; index++) {
          tmp = items[index].split("=");
          if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
        }
        return result;
      }

      console.log(findGetParameter('id'));
    });
  </script>
</body>

</html>