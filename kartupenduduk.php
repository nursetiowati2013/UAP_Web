<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTP-el</title>
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
                <h2 class="text-center mb-4">Kartu Tanda Penduduk</h2>
                <div class="offset-lg-2 col-lg-8">
                    <form action="kartupenduduk.php" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">NIK</label>
                                    <input type="text" name="nik" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Agama</label>
                                    <input type="text" name="agama" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Status Perkawinan</label>
                                    <input type="text" name="status_perkawinan" class="form-control" autocomplete="off">
                                    <label class="form-text">*Belum Kawin/Sudah Kawin</label>
                                </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Tempat/Tanggal Lahir</label>
                                    <input type="text" name="tempat_tanggal_lahir" class="form-control" autocomplete="off">
                                    <label class="form-text">*contoh : Bandar Lampung/19-10-1996</label>
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" autocomplete="off">
                                    <label class="form-text">*isi : Belum/Tidak Bekerja, Jika belum memiliki pekerjaan</label>
                                </div>
                            </div>
                            
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" autocomplete="off">
                                    <label class="form-text">*Laki-Laki/Perempuan</label>
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Golongan Darah</label>
                                    <input type="text" name="golongan_darah" class="form-control" autocomplete="off">
                                    <label class="form-text">*Contoh : A/B/O/B+/dsb.</label>
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Berlaku Hingga</label>
                                    <input type="text" name="berlaku_hingga" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="col-lg-6">
                                <label for="nama" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" autocomplete="off">
                            </div>
                        </div>
    
                        <div class="mb-3">
                            <button class="btn btn-primary w-100" name="kirim">Kirim</button>
                        </div>
                    </form>

                    <?php
                        include "koneksi.php";

                        if(isset($_POST['kirim'])){
                            $simpan = mysqli_query($koneksi, "INSERT INTO kartu_penduduk set
                            nik = '$_POST[nik]',
                            nama = '$_POST[nama]',
                            tempat_tanggal_lahir = '$_POST[tempat_tanggal_lahir]',
                            jenis_kelamin = '$_POST[jenis_kelamin]',
                            golongan_darah = '$_POST[golongan_darah]',
                            alamat = '$_POST[alamat]',
                            agama = '$_POST[agama]',
                            status_perkawinan = '$_POST[status_perkawinan]',
                            pekerjaan = '$_POST[pekerjaan]',
                            kewarganegaraan = '$_POST[kewarganegaraan]',
                            berlaku_hingga = '$_POST[berlaku_hingga]'
                            ");

                            echo "<script>window.alert('data berhasil disimpan!')
                            window.location='kartupenduduk.php';</script>";
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