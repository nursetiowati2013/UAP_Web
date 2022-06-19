<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAK Homepage</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link href="gambar/kependudukan.png" rel="shortcut icon">
</head>
<body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #b16c63;">
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

    
    <!-- HEADER -->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">SIAK</h1>
                <p class="lead fw-normal text-white-50 mb-0">Sistem Informasi Administrasi Kependudukan</p>
            </div>
        </div>
    </header>


    <!-- MAIN BODY (CARD VIEW CONTENT) -->
    <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5 mb-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="gambar/gambarkeluarga.png" alt="..." width="300" height="200"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Kartu Keluarga</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="kartukeluarga.php">Daftar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="gambar/gambarpenduduk.png" alt="..."  width="300" height="200"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">KTP-el</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="kartupenduduk.php">Daftar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="gambar/gambaranak.png" alt="..." width="300" height="200" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Kartu Identitas Anak</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="kartuanak.php">Daftar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="gambar/gambarperpindahan.png" alt="..." width="300" height="200" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Penduduk Pindah/Datang</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="perpindahanpenduduk.php">Daftar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="gambar/gambarkelahiran.png" alt="..." width="300" height="200"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Akta Kelahiran</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="kelahiran.php">Daftar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="gambar/gambarperkawinan.png" alt="..." width="300" height="200"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Akta Perkawinan</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="perkawinan.php">Daftar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="gambar/gambarkematian.png" alt="..." width="300" height="200"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Akta Kematian</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="kematian.php">Daftar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="gambar/gambarperceraian.png" alt="..." width="300" height="200" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Akta Perceraian</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="perceraian.php">Daftar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- FOOTER -->
        <footer class="text-center text-white" style="background-color: #b16c63;">
            <!-- Grid container -->
            <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">SI Administrasi Kependudukan (SIAK)</h5>

                    <p>
                        Sistem Informasi Administrasi Kependudukan adalah sistem informasi yang memanfaatkan
                        teknologi informasi dan komunikasi untuk memfasilitasi pengelolaan informasi administrasi
                        kependudukan ditingkat penyelenggara dan instansi pelaksana sebagai satu kesatuan dalam hal
                        ini meliputi pendaftaran penduduk dan pencatatan sipil. Berbagai program sistem informasi 
                        administrasi kependudukan telah mulai diterapkan di Dinas Pencatatan Sipil dan Administrasi 
                        Kependudukan mulai tahun 2010
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Pendaftaran Penduduk</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                    <a href="kartukeluarga.php" class="text-white">Kartu Keluarga</a>
                    </li>
                    <li>
                    <a href="kartupenduduk.php" class="text-white">KTP-Elektronik</a>
                    </li>
                    <li>
                    <a href="kartuanak.php" class="text-white">Kartu Identitas Anak</a>
                    </li>
                    <li>
                    <a href="perpindahanpenduduk.php" class="text-white">Penduduk Pindah/Datang</a>
                    </li>
                </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Pencatatan Sipil</h5>

                <ul class="list-unstyled">
                    <li>
                    <a href="kelahiran.php" class="text-white">Akta kelahiran</a>
                    </li>
                    <li>
                    <a href="perkawinan.php" class="text-white">Akta Perkawinan</a>
                    </li>
                    <li>
                    <a href="kematian.php" class="text-white">Akta Kematian</a>
                    </li>
                    <li>
                    <a href="perceraian.php" class="text-white">Akta Perceraian</a>
                    </li>
                </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
            </div>
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