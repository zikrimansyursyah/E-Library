<?php
include './auth/connection.php';
session_start();

$btn_login = '';
$user_toggle = '';
if (isset($_SESSION['sesi'])) {
  $user_toggle = 'd-flex';
} else {
  $btn_login = '<button id="btn-login" class="btn btn-login px-5" data-bs-toggle="modal" data-bs-target="#login">Login</button>';
  $user_toggle = 'd-none';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="library perpustakaan zikri">
  <link rel="shortcut icon" href="./assets/favicon/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>E-Library by Zikri | Home</title>
</head>

<body>
  <header class="">
    <nav class="fixed-top d-flex align-items-center justify-content-between px-5">
      <a href="./" class="logo fs-4 d-inline-flex gap-3">êLibrary. <span class="logo-title d-inline-flex">Designed
          by <br> Zikri Mansyursyah</span> </a>
      <div class="menu fs-5 fw-light d-flex gap-3">
        <a href="./" class="menu-list px-3 py-1 active">Home</a>
        <a href="./book/" class="menu-list px-3 py-1">Book</a>
        <a href="./member/" class="menu-list px-3 py-1">Member</a>
        <a href="./transaction/" class="menu-list px-3 py-1">Transaction</a>
      </div>
      <?php echo $btn_login; ?>
      <div class='<?php echo $user_toggle; ?>'>
        <div class='user-info px-4 py-2'>Hai! <?php echo $_SESSION['sesi']; ?> </div>
        <button class='user-logo btn dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'><i class='bi bi-person-fill'></i></button>
        <ul class='dropdown-menu dropdown-menu-end'>
          <li><a class='dropdown-item' href='#'>Settings</a></li>
          <li>
            <hr class='dropdown-divider'>
          </li>
          <li><a class='dropdown-item' href='#'>Logout</a></li>
        </ul>
      </div>
    </nav>
    <div class="hero">
      <div class="container-xl d-flex h-100">
        <div class="headline d-flex flex-column justify-content-center">
          <h1 class="headline-title lh-base fw-bold">Read your Favourite</h1>
          <h1 class="headline-title lh-base fw-bold">Book { <span><img src="./assets/img/book.png" alt="" width="50px"></span> } Here. <span><img src="./assets/img/arrow.png" alt="" width="40px"></span></h1>
          <div class="headline-subtitle">Buku adalah jendela dunia di mana kita bisa melihat isi dunia tanpa
            melakukan perjalanan, hanya cukup membaca sebuah halaman</div>
          <div class="card search-card w-100 mt-4 p-3">
            <div class="search-input w-100 h-100 p-1 d-flex">
              <input type="text" class="input-search flex-grow-1" placeholder="Search anything you want">
              <button type="button" class="btn btn-primary btn-search"><i class="bi bi-search me-2"></i>Search</button>
            </div>
          </div>
        </div>
        <div class="card-headline d-flex align-items-center justify-content-center px-5">
          <a href="/" class="card card-book w-100 h-auto d-flex flex-row gap-4 px-3 py-4">
            <img class="img-book-example md" src="./assets/img/book_example.jpeg" alt="book-example">
            <div class="book-detail d-flex flex-column justify-content-center">
              <h2>Autopilot Baby</h2>
              <div class="details">
                <div class="detail-title">Ditulis oleh :</div>
                <p class="fw-lighter">Revel Rebel</p>
              </div>
              <div class="details">
                <div class="detail-title">Kategori :</div>
                <p class="fw-lighter">Novel</p>
              </div>
              <div class="details">
                <div class="detail-title">Deskripsi :</div>
                <p class="fw-lighter">Life after marriage is not easy. Alan and Nana still try to
                  understand each other. So, what's next for them? A baby?</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </header>

  <main class="container-xl mt-4">

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

  <!-- modal Login -->
  <div class="modal" id="login" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-4 py-4 text-center">
          <h3 class="">Welcome Back!</h3>
          <p class="fw-light mb-4">buku adalah jendela dunia</p>
          <form method="POST" action="./auth/login.php">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="user" name="user">
              <label for="user">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="password" name="password">
              <label for="password">Password</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="./assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>