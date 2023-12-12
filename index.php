<?php
session_start();
include "database.php";
if (!isset($_SESSION["user"])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="image/logoo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/876d6616bd.js" crossorigin="anonymous"></script>
    <title>Mythical Longue Hotel</title>
</head>
<body class="bodyindex">
<section>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <img class="logoo" src="img/logoo.png" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="btn nav-link text-white" href="#">Home</a>
        <a class="btn nav-link text-white" href="#">Features</a>
        <a class="btn nav-link text-white" href="#">Pricing</a>
        <a class="nav-link"><a href="logout.php" class="btn btn-dark text-white">Logout</a></a>
      </div>
    </div>
  </div>
</nav>
</section>
<hr class="text-light mx-100">
<section>
    <div>
        <h1 class="text-light mb-5 text-center">Welcome to Mythical Logue Hotel</h1>
    </div>
</section>
<section>
  <div class="mb-5">
  <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/1.jpg" class="d-block w-50 m-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/2.png" class="d-block w-50 m-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/3.jpg" class="d-block w-50 m-auto" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
  </div>
</section>
<section>
  <div class="text-center">
    <button type="button" class="btn btn-outline-light bg-dark">BOOK NOW!</button>
    <button type="button" class="btn btn-outline-light bg-dark">RESERVE NOW!</button>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<footer id="footer">
  <div>
    <p style="color: black;"> © Copyright Mythical Longue Hotel -2023-<i class="fa-solid fa-heart" style="color: #ff0000;"></i></p>
  </div>
</footer>
  </body>
</html>