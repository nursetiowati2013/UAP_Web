<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi dan Persyaratan</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link href="gambar/kependudukan.png" rel="shortcut icon">
    <style>
        th{
            text-align : center;
        }
    </style>
</head>
<body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #b16c63;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="gambar/kependudukan.png" width="50">
                SI Kependudukan
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pendaftaran Penduduk
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"  style="background-color: #b16c63;">
                        <a class="dropdown-item" href="kartukeluarga.php">Kartu Keluarga</a>
                        <a class="dropdown-item" href="kartupenduduk.php">KTP-Elektronik</a>
                        <a class="dropdown-item" href="kartuanak.php">Kartu Identitas Anak</a>
                        <a class="dropdown-item" href="perpindahanpenduduk.php">Penduduk Pindah/Datang</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pencatatan Sipil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"  style="background-color: #b16c63;">
                        <a class="dropdown-item" href="kelahiran.php">Akta Kelahiran</a>
                        <a class="dropdown-item" href="perkawinan.php">Akta Perkawinan</a>
                        <a class="dropdown-item" href="kematian.php">Akta Kematian</a>
                        <a class="dropdown-item" href="perceraian.php">Akta Perceraian</a>
                    </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informasi & Pengaduan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"  style="background-color: #b16c63;">
                        <a class="dropdown-item" href="informasi.php">Informasi Umum</a>
                        <a class="dropdown-item" href="pengaduan.php">Form Pengaduan</a>
                    </div>
                </li>

                <li class="nav-item active">
                     <a class="nav-link" href="loginpage.php">Login<span class="sr-only"></span></a>
                </li>

                </ul>
            </div>
        </div>
        </nav>


        <!-- MAIN BODY -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="text-black text-center">
                <h2>Informasi dan Persyaratan</h2>
                
            </div>
            <div class="card-body mb-5">
                <table class="table table-bordered table-hover table-stripped">
                    <tr>
                        <th>Dokumen</th>
                        <th>Persyaratan</th>
                    </tr>
                    
                    <?php
                        include "koneksi.php";

                        $tampil = mysqli_query($koneksi, "SELECT *  FROM informasi_persyaratan");
                        while($data = mysqli_fetch_array($tampil)) :

                    ?>

                    <tr>
                        <td><?=$data['dokumen']?></td>
                        <td><?=$data['persyaratan']?></td>
                    </tr>
                <?php endwhile; ?>
                </table>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="text-center text-white" style="background-color: #21081a;">
            <!-- Grid container -->
            <!--<div class="container p-4"></div>-->
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #b16c63;">
                © 2022 Copyright:
                <a>Dwi Kurniawan & Nur Setiowati</a>
                <br>
                <a>Pemrograman Web</a>
            </div>
            <!-- Copyright -->
        </footer>

    <script src="bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>