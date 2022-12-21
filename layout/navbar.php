<?php
    
include 'head.php'

?>

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
                        <a class="nav-link" href="home.php">HOME</a>
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
                        <a class="nav-link" href="pendaftaran.php">PENDAFTARAN</a>
                    </li> 
                    
                </ul>
                </div>
                        <span class="material-symbols-outlined ms-auto" style="color: white">
                            account_circle
                            <span class="tooltiptext">
                                <a class="nav-link" href=""><p>Login</p></a>
                                <a class="nav-link" href=""><p>Logout</p></a>
                            </span>
                        </span>
            </div>
        </nav> 
    </div>