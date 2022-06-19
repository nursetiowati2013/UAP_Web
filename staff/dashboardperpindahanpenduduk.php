<!--koneksi ke database-->
<?php

    $koneksi = mysqli_connect("localhost", "root", "", "db_kependudukan");

    if(isset($_POST['bsimpan'])){
        if($_GET['hal'] == "edit"){
            $edit = mysqli_query($koneksi, "UPDATE perpindahan_penduduk SET
                                        no_kk = '$_POST[no_kk]',
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
                                        keluarga_yang_datang = '$_POST[keluarga_yang_datang]'
                                        WHERE nomor = '$_GET[id]'
                                        ");

                                        if($edit){
                                            echo "<script>window.alert('data berhasil diedit!')
                                            window.location='dashboardperpindahanpenduduk.php';</script>";
                                        }else{
                                            echo "<script>window.alert('data gagal diedit!')
                                            window.location='dashboardperpindahanpenduduk.php';</script>";
                                        }
                                        

                                        

        }else{
            $simpan = mysqli_query($koneksi, "INSERT INTO perpindahan_penduduk set
                                        no_kk = '$_POST[no_kk]',
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
                                        keluarga_yang_datang = '$_POST[keluarga_yang_datang]'
                                        ");

                                        echo "<script>window.alert('data berhasil disimpan!')
                                        window.location='dashboardperpindahanpenduduk.php';</script>";
        }
        
    }

    if(isset($_GET['hal'])){
        if($_GET['hal'] == "edit"){
            $tampil = mysqli_query($koneksi, "SELECT * FROM perpindahan_penduduk WHERE nomor = '$_GET[id]' ");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vnomor = $data['nomor'];
                $vno_kk = $data['no_kk'];
                $vnama_kepala_keluarga = $data['nama_kepala_keluarga'];
                $valamat = $data['alamat'];
                $valasan_pindah = $data['alasan_pindah'];
                $valamat_tujuan_pindah = $data['alamat_tujuan_pindah'];
                $vklasifikasi_pindah = $data['klasifikasi_pindah'];
                $vjenis_perpindahan = $data['jenis_perpindahan'];
                $vstatus_no_kk = $data['status_no_kk'];
                $vtanggal_perpindahan = $data['tanggal_perpindahan'];
                $vkeluarga_yang_pindah = $data['keluarga_yang_pindah'];
                $vtanggal_kedatangan = $data['tanggal_kedatangan']; 
                $vkeluarga_yang_datang = $data['keluarga_yang_datang']; 
            }
        }else if ($_GET['hal'] == "hapus"){
			$hapus = mysqli_query($koneksi, "DELETE FROM perpindahan_penduduk WHERE nomor = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert(Data berhasil dihapus!');
						document.location='dashboardperpindahanpenduduk.php';
				     </script>";
			}
		}
        
    }

?>

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
            
            <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Form Input Data Perpindahan Penduduk
            </div>
                <div class="card-body bg-light">
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Nomor Kartu Keluarga</label>
                            <input type="text" name="no_kk" value="<?=@$vno_kk?>" class="form-control" placeholder="Masukkan Nomor Kartu Keluarga" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Kepala Keluarga</label>
                            <input type="text" name="nama_kepala_keluarga" value="<?=@$vnama_kepala_keluarga?>" class="form-control" placeholder="Masukkan Nama Kepala Keluarga" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="<?=@$valamat?>" class="form-control" placeholder="Masukkan Alamat" required>
                        </div>
                        <div class="form-group">
                            <label>Alasan Pindah</label>
                            <input type="text" name="alasan_pindah" value="<?=@$valasan_pindah?>" class="form-control" placeholder="Masukkan Alasan Pindah" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat Tujuan Pindah</label>
                            <input type="text" name="alamat_tujuan_pindah" value="<?=@$valamat_tujuan_pindah?>" class="form-control" placeholder="Masukkan Alamat Tujuan Pindah" required>
                        </div>
                        <div class="form-group">
                            <label>Klasifikasi Pindah</label>
                            <input type="text" name="klasifikasi_pindah" value="<?=@$vklasifikasi_pindah?>" class="form-control" placeholder="Masukkan Klasifikasi Pindah" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Jenis Perpindahan</label>
                            <input type="text" name="jenis_perpindahan" value="<?=@$vjenis_perpindahan?>" class="form-control" placeholder="Masukkan Jenis Perpindahan" required>
                        </div>
                        <div class="form-group">
                            <label>Status Nomor Kartu Keluarga</label>
                            <input type="text" name="status_no_kk" value="<?=@$vstatus_no_kk?>" class="form-control" placeholder="Masukkan Status Nomor Kartu Keluarga" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Perpindahan</label>
                            <input type="text" name="tanggal_perpindahan" value="<?=@$vtanggal_perpindahan?>" class="form-control" placeholder="Tanggal Perpindahan " required>
                        </div>
                        <div class="form-group">
                            <label>Keluarga Yang Pindah</label>
                            <input type="text" name="keluarga_yang_pindah" value="<?=@$vkeluarga_yang_pindah?>" class="form-control" placeholder="Masukkan Nama Keluarga Yang Pindah" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kedatangan</label>
                            <input type="text" name="tanggal_kedatangan" value="<?=@$vtanggal_kedatangan?>" class="form-control" placeholder="Masukkan Tanggal Datang (contoh : 10/10/2020)" required>
                        </div>
                        <div class="form-group">
                            <label>Keluarga Yang Datang</label>
                            <input type="text" name="keluarga_yang_datang" value="<?=@$vkeluarga_yang_datang	?>" class="form-control" placeholder="Masukkan Nama Keluarga Yang Datang" required>
                        </div>

                        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>

                    </form>
                </div>
            </div>


            <div class="card-header bg-success text-white mt-5">
                Data Perpindahan Penduduk
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <tr>
                        <th>No.</th>
                        <th>Nomor Kepala Keluarga</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Alasan Pindah</th>
                        <th>Alamat Tujuan Pindah</th>
                        <th>Klasifikasi Pindah</th>
                        <th>Jenis Perpindahan</th>
                        <th>Status Nomor Kartu Keluarga</th>
                        <th>Tanggal Perpindahan</th>
                        <th>Keluarga Yang Pindah</th>
                        <th>Tanggal Kedatangan</th>
                        <th>Keluarga Yang Datang</th>
                    </tr>
                    
                    <?php

                        $tampil = mysqli_query($koneksi, "SELECT *  FROM perpindahan_penduduk");
                        while($data = mysqli_fetch_array($tampil)) :

                    ?>

                    <tr>
                        <td><?=$data['nomor']?></td>
                        <td><?=$data['no_kk']?></td>
                        <td><?=$data['nama_kepala_keluarga']?></td>
                        <td><?=$data['alamat']?></td>
                        <td><?=$data['alasan_pindah']?></td>
                        <td><?=$data['alamat_tujuan_pindah']?></td>
                        <td><?=$data['klasifikasi_pindah']?></td>
                        <td><?=$data['jenis_perpindahan']?></td>
                        <td><?=$data['status_no_kk']?></td>
                        <td><?=$data['tanggal_perpindahan']?></td>
                        <td><?=$data['keluarga_yang_pindah']?></td>
                        <td><?=$data['tanggal_kedatangan']?></td>
                        <td><?=$data['keluarga_yang_datang']?></td>
                        <td>
                            <a href="dashboardperpindahanpenduduk.php?hal=edit&id=<?=$data['nomor']?>" class="btn btn-warning">Edit</a>
                            <br>
                            <br>
                            <a href="dashboardperpindahanpenduduk.php?hal=hapus&id=<?=$data['nomor']?>"onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </table>
            </div>
        </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="/siakweb/bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>