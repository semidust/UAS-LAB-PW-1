<?php

?>

<!doctype html>
<html>
  <head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <script src="https://kit.fontawesome.com/2d17ba45f4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body>
    <div class="header">  
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
        
                <ul class="navbar-nav">
                
                    <li class="nav-item">
                        <a class="nav-link" href="">HOME</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PROFIL
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="">Ekstrakurikuler</a></li>
                            <li><a class="dropdown-item" href="">Jadwal Kegiatan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">PENDAFTARAN</a>
                    </li> 
                    
                </ul>
                </div>
                <span class="ms-auto">
                    <a class="nav-link" href="">
                        <i class="fa-solid fa-user" style="color: white"></i>
                    </a>
                </span>
            </div>
        </nav> 
    </div>