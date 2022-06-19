<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akta Perceraian</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link href="gambar/kependudukan.png" rel="shortcut icon">
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

        <!-- MAIN BODY(FORM PENGISIAN) -->
        <div class="container-fluid py-5 bg-white text-black ">
            <div class="container">
                <h2 class="text-center mb-4">Akta Perceraian</h2>
                <div class="offset-lg-2 col-lg-8">
                    <form action="" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">No. Akta Perceraian</label>
                                    <input type="text" name="no_akta_perceraian" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Nama Pasangan</label>
                                    <input type="text" name="nama_pasangan" class="form-control" autocomplete="off">
                                    <label class="form-text">*nama pasangan laki-laki, perempuan. contoh : rizky,ajeng</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Tempat Perceraian</label>
                                    <input type="text" name="tempat_perceraian" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Tempat Perkawinan</label>
                                    <input type="text" name="tempat_perkawinan" class="form-control" autocomplete="off">
                                </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Tanggal Perceraian</label>
                                    <input type="text" name="tanggal_perceraian" class="form-control" autocomplete="off">
                                    <label class="form-text">*contoh : 25/03 -> (25 Maret)</label>
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">No. Akta Perkawinan</label>
                                <input type="text" name="no_akta_perkawinan" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Tahun Perceraian</label>
                                    <input type="text" name="tahun_perceraian" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Tanggal Perkawinan</label>
                                    <input type="text" name="tanggal_perkawinan" class="form-control" autocomplete="off">
                                    <label class="form-text">*contoh : 25/03 -> (25 Maret)</label>
                                </div>
                            </div>
                            
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Nama Pengadilan</label>
                                    <input type="text" name="nama_pengadilan" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Tahun Perkawinan</label>
                                    <input type="text" name="tahun_perkawinan" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="col-lg-6">
                                <label for="nama" class="form-label">No. Surat Pengadilan</label>
                                <input type="text" name="no_surat_pengadilan" class="form-control" autocomplete="off">
                            </div>
                        </div>
    
                        <div class="mb-3">
                            <button class="btn btn-primary w-100" name="kirim">Kirim</button>
                        </div>
                    </form>

                    <?php
                        include "koneksi.php";

                        if(isset($_POST['kirim'])){
                            mysqli_query($koneksi, "insert into akta_perceraian set
                                no_akta_perceraian =  '$_POST[no_akta_perceraian]',
                                tempat_perceraian = '$_POST[tempat_pezrceraian]',
                                tanggal_perceraian = '$_POST[tanggal_perceraian]',
                                tahun_perceraian = '$_POST[tahun_perceraian]',
                                nama_pengadilan = '$_POST[nama_pengadilan]',
                                no_surat_pengadilan = '$_POST[no_surat_pengadilan]',
                                nama_pasangan = '$_POST[nama_pasangan]',
                                tempat_perkawinan = '$_POST[tempat_perkawinan]',
                                no_akta_perkawinan = '$_POST[no_akta_perkawinan]',
                                tanggal_perkawinan = '$_POST[tanggal_perkawinan]',
                                tahun_perkawinan = '$_POST[tahun_perkawinan]'");

                                echo "<script>window.alert('data berhasil disimpan!')
                                window.location='perceraian.php';</script>";
                        }

                    ?> 

                </div>
                
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
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