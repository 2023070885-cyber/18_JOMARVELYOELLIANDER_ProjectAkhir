<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page</title>
    <link rel="stylesheet" href="webpage.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class='body'>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <a class="navbar-brand ms-3">Traveling with Marvel</a>

    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daftar.php">Daftar User</a>
            </li>
        </ul>
    </div>
</nav>


<h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
<p>Ini adalah halaman utama Traveling with Marvel.</p>

<br><br>


<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="AFRICA.PNG" class="d-block mx-auto w-50" alt="Africa">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:black; font-size:40px;">Africa</h1>
      </div>
    </div>

    <div class="carousel-item">
      <img src="ANTARTICA.PNG" class="d-block mx-auto w-50" alt="Antarctica">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:black; font-size:40px;">Antarctica</h1>
      </div>
    </div>

    <div class="carousel-item">
      <img src="ASIA.PNG" class="d-block mx-auto w-50" alt="Asia">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:black; font-size:40px;">Asia</h1>
      </div>
    </div>

    <div class="carousel-item">
      <img src="EUROPE.PNG" class="d-block mx-auto w-50" alt="Europe">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:black; font-size:40px;">Europe</h1>
      </div>
    </div>

    <div class="carousel-item">
      <img src="NORTHAMERICA.PNG" class="d-block mx-auto w-50" alt="North America">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:black; font-size:40px;">North America</h1>
      </div>
    </div>

    <div class="carousel-item">
      <img src="SOUTHAMERICA.PNG" class="d-block mx-auto w-50" alt="South America">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:black; font-size:40px;">South America</h1>
      </div>
    </div>

    <div class="carousel-item">
      <img src="AUSTRALIA.PNG" class="d-block mx-auto w-50" alt="Australia">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:black; font-size:40px;">Australia</h1>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<h1>PESAN SEKARANG</h1>
<div id="pesan-now">
    <a href='pesan.php'>untuk pesan klik disini</a>
</div>

</body>
</html>