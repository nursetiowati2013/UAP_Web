<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penduduk Pindah/Datang</title>
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
                <h2 class="text-center mb-4">Perpindahan Penduduk</h2>
                <div class="offset-lg-2 col-lg-8">
                    <form action="" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">No. Kartu Keluarga</label>
                                    <input type="text" name="no_kk" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Jenis Perpindahan</label>
                                    <input type="text" name="jenis_perpindahan" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Nama Kepala Keluarga</label>
                                    <input type="text" name="nama_kepala_keluarga" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Status No.Kartu Keluarga</label>
                                    <input type="text" name="status_no_kk" class="form-control" autocomplete="off">
                                </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Tanggal Rencana Perpindahan</label>
                                    <input type="text" name="tanggal_perpindahan" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Alasan Pindah</label>
                                    <input type="text" name="alasan_pindah" class="form-control" autocomplete="off">
                                    
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Keluarga Yang Pindah</label>
                                    <input type="text" name="keluarga_yang_pindah" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Alamat Tujuan Pindah</label>
                                    <input type="text" name="alamat_tujuan_pindah" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Tanggal Kedatangan</label>
                                    <input type="text" name="tanggal_kedatangan" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Klasifikasi Pindah</label>
                                    <input type="text" name="klasifikasi_pindah" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Keluarga Yang Datang</label>
                                    <input type="text" name="keluarga_yang_datang" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
    
                        <div class="mb-3">
                            <button class="btn btn-primary w-100" name="kirim">Kirim</button>
                        </div>
                    </form>

                    <?php
                        include "koneksi.php";

                        if(isset($_POST['kirim'])){
                            mysqli_query($koneksi, "insert into perpindahan_penduduk set
                                no_kk =  '$_POST[no_kk]',
                                nama_kepala_keluarga = '$_POST[nama_kepala_keluarga]',
                                alamat = '$_POST[alamat]',
                                alasan_pindah = '$_POST[alasan_pindah]',
                                alamat_tujuan_pindah = '$_POST[alamat_tujuan_pindah]',
                                klasifikasi_pindah = '$_POST[klasifikasi_pindah]',
                                jenis_perpindahan = '$_POST[jenis_perpindahan]',
                                status_no_kk = '$_POST[status_no_kk]',
                                tanggal_perpindahan = '$_POST[tanggal_perpindahan]',
                                keluarga_yang_pindah = '$_POST[keluarga_yang_pindah]',
                                tanggal_kedatangan = '$_POST[tanggal_kedatangan]',
                                keluarga_yang_datang	 = '$_POST[keluarga_yang_datang]'");

                                echo "<script>window.alert('data berhasil disimpan!')
                                window.location='perpindahanpenduduk.php';</script>";
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