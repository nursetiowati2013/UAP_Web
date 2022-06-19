<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Keluarga</title>
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
                <h2 class="text-center mb-4">Kartu Keluarga</h2>
                <div class="offset-lg-2 col-lg-8">
                    <form action="" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">No. Kartu Keluarga</label>
                                    <input type="text" name="no_kk" class="form-control" autocomplete="off">
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
                                    <label for="nama" class="form-label">Nama Kepala Keluarga</label>
                                    <input type="text" name="nama_kepala_keluarga" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Pendidikan</label>
                                    <input type="text" name="pendidikan" class="form-control" autocomplete="off">
                                </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" autocomplete="off">
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
                                    <label for="nama" class="form-label">Nama Anggota Keluarga</label>
                                    <input type="text" name="nama_anggota_keluarga" class="form-control" autocomplete="off">
                                    
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Status Hubungan</label>
                                    <input type="text" name="status_hubungan" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">NIK Anggota Keluarga</label>
                                    <input type="text" name="nik_anggota_keluarga" class="form-control" autocomplete="off">
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
                                    <label for="nama" class="form-label">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" autocomplete="off">
                                    <label class="form-text">*Laki-Laki/Perempuan</label>
                                </div>

                                <div class="col-lg-6">
                                    <label for="nama" class="form-label">Nama Orang Tua</label>
                                    <input type="text" name="nama_orang_tua" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="col-lg-6">
                                <label for="nama" class="form-label">Tempat Tanggal Lahir</label>
                                <input type="text" name="tempat_tanggal_lahir" class="form-control" autocomplete="off">
                            </div>
                        </div>
    
                        <div class="mb-3">
                            <button class="btn btn-primary w-100" name="kirim">Kirim</button>
                        </div>
                    </form>

                    <?php
                        include "koneksi.php";

                        if(isset($_POST['kirim'])){
                            mysqli_query($koneksi, "insert into kartu_keluarga set
                                no_kk =  '$_POST[no_kk]',
                                nama_kepala_keluarga = '$_POST[nama_kepala_keluarga]',
                                alamat = '$_POST[alamat]',
                                nama_anggota_keluarga = '$_POST[nama_anggota_keluarga]',
                                nik_anggota_keluarga = '$_POST[nik_anggota_keluarga]',
                                jenis_kelamin = '$_POST[jenis_kelamin]',
                                tempat_tanggal_lahir = '$_POST[tempat_tanggal_lahir]',
                                agama = '$_POST[agama]',
                                pendidikan = '$_POST[pendidikan]',
                                pekerjaan = '$_POST[pekerjaan]',
                                status_hubungan = '$_POST[status_hubungan]',
                                kewarganegaraan = '$_POST[kewarganegaraan]',
                                nama_orang_tua = '$_POST[nama_orang_tua]'");

                                echo "<script>window.alert('data berhasil disimpan!')
                                window.location='kartukeluarga.php';</script>";
                        }

                    ?> 

                </div>
                
            </div>
        </div>
        
        
        <!-- FOOTER -->
        <footer class="text-center text-white fixed-bottom " style="background-color: #b16c63;">
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