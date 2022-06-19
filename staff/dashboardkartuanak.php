<!--koneksi ke database-->
<?php

    $koneksi = mysqli_connect("localhost", "root", "", "db_kependudukan");

    if(isset($_POST['bsimpan'])){
        if($_GET['hal'] == "edit"){
            $edit = mysqli_query($koneksi, "UPDATE kartu_anak SET
                                        nik = '$_POST[nik]',
                                        nama = '$_POST[nama]',
                                        tempat_tanggal_lahir = '$_POST[tempat_tanggal_lahir]',
                                        jenis_kelamin = '$_POST[jenis_kelamin]',
                                        golongan_darah = '$_POST[golongan_darah]',
                                        no_kartu_keluarga = '$_POST[no_kartu_keluarga]',
                                        nama_kepala_keluarga = '$_POST[nama_kepala_keluarga]',
                                        no_akta_kelahiran = '$_POST[no_akta_kelahiran]',
                                        alamat = '$_POST[alamat]',
                                        agama = '$_POST[agama]',
                                        kewarganegaraan = '$_POST[kewarganegaraan]',
                                        berlaku_hingga = '$_POST[berlaku_hingga]'
                                        WHERE nomor = '$_GET[id]'
                                        ");

                                        if($edit){
                                            echo "<script>window.alert('data berhasil diedit!')
                                            window.location='dashboardkartuanak.php';</script>";
                                        }else{
                                            echo "<script>window.alert('data gagal diedit!')
                                            window.location='dashboardkartuanak.php';</script>";
                                        }
                                        

                                        

        }else{
            $simpan = mysqli_query($koneksi, "INSERT INTO kartu_anak set
                                        nik = '$_POST[nik]',
                                        nama = '$_POST[nama]',
                                        tempat_tanggal_lahir = '$_POST[tempat_tanggal_lahir]',
                                        jenis_kelamin = '$_POST[jenis_kelamin]',
                                        golongan_darah = '$_POST[golongan_darah]',
                                        no_kartu_keluarga = '$_POST[no_kartu_keluarga]',
                                        nama_kepala_keluarga = '$_POST[nama_kepala_keluarga]',
                                        no_akta_kelahiran = '$_POST[no_akta_kelahiran]',
                                        alamat = '$_POST[alamat]',
                                        agama = '$_POST[agama]',
                                        kewarganegaraan = '$_POST[kewarganegaraan]',
                                        berlaku_hingga = '$_POST[berlaku_hingga]'
                                        ");

                                        echo "<script>window.alert('data berhasil disimpan!')
                                        window.location='dashboardkartuanak.php';</script>";
        }
        
    }

    if(isset($_GET['hal'])){
        if($_GET['hal'] == "edit"){
            $tampil = mysqli_query($koneksi, "SELECT * FROM kartu_anak WHERE nomor = '$_GET[id]' ");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vnomor = $data['nomor'];
                $vnik = $data['nik'];
                $vnama = $data['nama'];
                $vtempat_tanggal_lahir = $data['tempat_tanggal_lahir'];
                $vjenis_kelamin = $data['jenis_kelamin'];
                $vgolongan_darah = $data['golongan_darah'];
                $vno_kartu_keluarga = $data['no_kartu_keluarga'];
                $vnama_kepala_keluarga = $data['nama_kepala_keluarga'];
                $vno_akta_kelahiran = $data['no_akta_kelahiran'];
                $valamat = $data['alamat'];
                $vagama = $data['agama'];
                $vkewarganegaraan = $data['kewarganegaraan']; 
                $vberlaku_hingga = $data['berlaku_hingga']; 
            }
        }else if ($_GET['hal'] == "hapus"){
			$hapus = mysqli_query($koneksi, "DELETE FROM kartu_anak WHERE nomor = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert(Data berhasil dihapus!');
						document.location='dashboardkartuanak.php';
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
                Form Input Data Kartu Anak
            </div>
                <div class="card-body bg-light">
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Nomor Induk Kependudukan</label>
                            <input type="text" name="nik" value="<?=@$vnik?>" class="form-control" placeholder="Masukkan Nomor Induk Kependudukan" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="<?=@$vnama?>" class="form-control" placeholder="Masukkan nama" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Tanggal Lahir</label>
                            <input type="text" name="tempat_tanggal_lahir" value="<?=@$vtempat_tanggal_lahir?>" class="form-control" placeholder="Masukkan Tempat Tanggal Lahir" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" value="<?=@$vjenis_kelamin?>" class="form-control" placeholder="Masukkan Jenis Kelamin" required>
                        </div>
                        <div class="form-group">
                            <label>Golongan Darah</label>
                            <input type="text" name="golongan_darah" value="<?=@$vgolongan_darah?>" class="form-control" placeholder="Masukkan Golongan Darah" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Kartu Keluarga</label>
                            <input type="text" name="no_kartu_keluarga" value="<?=@$vno_kartu_keluarga?>" class="form-control" placeholder="Masukkan tempat_tanggal_lahir" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Kepala Keluarga</label>
                            <input type="text" name="nama_kepala_keluarga" value="<?=@$vnama_kepala_keluarga?>" class="form-control" placeholder="Masukkan Agama" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Akta Kelahiran</label>
                            <input type="text" name="no_akta_kelahiran" value="<?=@$vno_akta_kelahiran?>" class="form-control" placeholder="Masukkan Status Perkawinan" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" value="<?=@$valamat?>" class="form-control" placeholder="Masukkan pekerjaan" required>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" name="agama" value="<?=@$vagama?>" class="form-control" placeholder="Masukkan kewarganegaraan" required>
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan" value="<?=@$vkewarganegaraan?>" class="form-control" placeholder="Input Tanggal 5 Tahun Dari Tanggal Pembuatan" required>
                        </div>
                        <div class="form-group">
                            <label>Berlaku Hingga</label>
                            <input type="text" name="berlaku_hingga" value="<?=@$vberlaku_hingga?>" class="form-control" placeholder="Input Tanggal 5 Tahun Dari Tanggal Pembuatan" required>
                        </div>

                        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>

                    </form>
                </div>
            </div>


            <div class="card-header bg-success text-white mt-5">
                Data Kartu Anak
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <tr>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Golongan Darah</th>
                        <th>Nomor Kartu Keluarga</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Nomor Akta Kelahiran</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Kewarganegaraan</th>
                        <th>Berlaku Hingga</th>
                    </tr>
                    
                    <?php

                        $tampil = mysqli_query($koneksi, "SELECT *  FROM kartu_anak");
                        while($data = mysqli_fetch_array($tampil)) :

                    ?>

                    <tr>
                        <td><?=$data['nomor']?></td>
                        <td><?=$data['nik']?></td>
                        <td><?=$data['nama']?></td>
                        <td><?=$data['tempat_tanggal_lahir']?></td>
                        <td><?=$data['jenis_kelamin']?></td>
                        <td><?=$data['golongan_darah']?></td>
                        <td><?=$data['no_kartu_keluarga']?></td>
                        <td><?=$data['nama_kepala_keluarga']?></td>
                        <td><?=$data['no_akta_kelahiran']?></td>
                        <td><?=$data['alamat']?></td>
                        <td><?=$data['agama']?></td>
                        <td><?=$data['kewarganegaraan']?></td>
                        <td><?=$data['berlaku_hingga']?></td>
                        <td>
                            <a href="dashboardkartuanak.php?hal=edit&id=<?=$data['nomor']?>" class="btn btn-warning">Edit</a>
                            <br>
                            <br>
                            <a href="dashboardkartuanak.php?hal=hapus&id=<?=$data['nomor']?>"onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="/siakweb/bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>