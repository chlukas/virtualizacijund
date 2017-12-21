<?php

    include_once ('connection.php');
    $query = "SELECT username FROM users ORDER BY id DESC";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Telenordi virtualizacijos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand text-dark" href="index.html">Telenordi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Paslaugos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="aptarnavimas.html">Klientų aptarnavimas</a>
                <a class="dropdown-item" href="marketingas.html">Pardavimai telefonu</a>
                <a class="dropdown-item" href="apklausos.html">Klientų apklausos ir lojalumas</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sprendimai
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="telefonija.html">Telefonijos sistema</a>
                <a class="dropdown-item" href="skype.html">Skype sistema</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="live.html">
                Išbandykite gyvai
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 slideshow-image" src="assets/images/skype.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block slideshow-caption">
            <h3>Skype sistema</h3>
            <p>Nemokamas ir greitas būdas valdyti savo klientus</p>
          </div>       
        </div>
      </div>
    </div>

    <div class="container-fluid teikiamos-paslaugos">
      <div class="container">
        <a href="add.php" class="btn btn-dark col-12">Pridėti naują skype kontaktą</a>
        <div class="row">
          <?php 
            if ($result = mysqli_query($link, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <div class="col-3 offset-1">
              <div class="card" style="width: 20rem;">
                <div class="card-body text-white">
                  <h4 class="card-title">
                    <img class="card-image-resize-smallest" src="assets/images/skype.png"> 
                    <?php printf($row['username']); ?>
                  </h4>
                    <?php $user = $row['username']; ?>
                    <p><a href="skype:<?= $user ?>?call" class="btn btn-primary">SKAMBINTI</a></p>
                </div>
              </div>
            </div>
          <?php
                }
                mysqli_free_result($result);
            }
          ?>
      </div>
    </div>
  </div>

    <footer class="footer virtualizacijos-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <p>
              <b>Paslaugos</b>
            </p>
            <p>
              <a href="aptarnavimas.html" class="text-dark" style="text-decoration: none"> Klientų aptarnavimas </a><br/>
              <a href="marketingas.html" class="text-dark" style="text-decoration: none"> Pardavimai telefonu </a><br/>
              <a href="apklausos.html" class="text-dark" style="text-decoration: none"> Klientų apklausos ir lojalumas </a><br/>
            </p>
          </div>
          <div class="col-3">
           <p>
              <b>Sprendimai</b>
            </p>
            <p>
              <a href="skype.html" class="text-dark" style="text-decoration: none"> Skype sistema </a><br/>
            </p>
          </div>
          <div class="col-3">
           <p>
              <b>Išbandykite gyvai</b>
            </p>
            <p>
              <a href="skypedemo.php" class="text-dark" style="text-decoration: none"> Skype sistema demo </a><br/>
            </p>
          </div>
          <div class="col-3">
           <p>
              <b>Mus rasite</b>
            </p>
            <p>
              Didlaukio gatvė 47, Vilnius<br/>
              Matematikos ir informatikos fakultetas
            </p>
          </div>
          <div class="col-12 text-center">
            <p>Visos teisės saugomos</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
