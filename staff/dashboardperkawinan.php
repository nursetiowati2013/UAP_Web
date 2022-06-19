<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link rel="stylesheet" href="/siakweb/bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link href="/siakweb/gambar/kependudukan.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="index.html" class="logo">SIAK</a></h1>
	        <ul class="list-unstyled components mb-5">
	          
                <li>
                    <a href="staffdashboard.php">Home</a>
                </li>


                <li>
                <a href="#pendaftaranpenduduk" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pendaftaran Penduduk</a>
                <ul class="collapse list-unstyled" id="pendaftaranpenduduk">
                    <li>
                        <a href="dashboardkartukeluarga.php">Kartu Keluarga</a>
                    </li>
                    <li>
                        <a href="dashboardkartupenduduk.php">KTP-Elektronik</a>
                    </li>
                    <li>
                        <a href="dashboardkartuanak.php">Kartu Identitas Anak</a>
                    </li>
                    <li>
                        <a href="dashboardperpindahanpenduduk.php">Penduduk Pindah/Datang</a>
                    </li>
                </ul>
                </li>

                <li>
                <a href="#pencatatansipil" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pencatatan Sipil</a>
                <ul class="collapse list-unstyled" id="pencatatansipil">
                    <li>
                        <a href="dashboardkelahiran.php">Akta Kelahiran</a>
                    </li>
                    <li>
                        <a href="dashboardperkawinan.php">Akta Perkawinan</a>
                    </li>
                    <li>
                        <a href="dashboardkematian.php">Akta Kematian</a>
                    </li>
                    <li>
                        <a href="dashboardperceraian.php">Akta Perceraian</a>
                    </li>
                </ul>
	            </li>

                <li>
                <a href="dashboardinformasi.php">Informasi dan Persyaratan</a>
                </li>

                <li>
                <a href="dashboardpengaduan.php">Pengaduan</a>
                </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <h2 class="mb-4">Sidebar #02</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="/siakweb/bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>