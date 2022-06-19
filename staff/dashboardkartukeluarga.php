<!--koneksi ke database-->
<?php

    $koneksi = mysqli_connect("localhost", "root", "", "db_kependudukan");

    if(isset($_POST['bsimpan'])){
        if($_GET['hal'] == "edit"){
            $edit = mysqli_query($koneksi, "UPDATE kartu_keluarga SET
                                        no_kk = '$_POST[no_kk]',
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
                                        nama_orang_tua = '$_POST[nama_orang_tua]'
                                        WHERE nomor = '$_GET[id]'
                                        ");

                                        if($edit){
                                            echo "<script>window.alert('data berhasil diedit!')
                                            window.location='dashboardkartukeluarga.php';</script>";
                                        }else{
                                            echo "<script>window.alert('data gagal diedit!')
                                            window.location='dashboardkartukeluarga.php';</script>";
                                        }
                                        

                                        

        }else{
            $simpan = mysqli_query($koneksi, "INSERT INTO kartu_keluarga set
                                        no_kk = '$_POST[no_kk]',
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
                                        window.location='dashboardkartukeluarga.php';</script>";
        }
        
    }

    if(isset($_GET['hal'])){
        if($_GET['hal'] == "edit"){
            $tampil = mysqli_query($koneksi, "SELECT * FROM kartu_keluarga WHERE nomor = '$_GET[id]' ");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vnomor = $data['nomor'];
                $vno_kk = $data['no_kk'];
                $vnama_kepala_keluarga = $data['nama_kepala_keluarga'];
                $valamat = $data['alamat'];
                $vnama_anggota_keluarga = $data['nama_anggota_keluarga'];
                $vnik_anggota_keluarga = $data['nik_anggota_keluarga'];
                $vjenis_kelamin = $data['jenis_kelamin'];
                $vtempat_tanggal_lahir = $data['tempat_tanggal_lahir'];
                $vagama = $data['agama'];
                $vpendidikan = $data['pendidikan'];
                $vpekerjaan = $data['pekerjaan'];
                $vstatus_hubungan = $data['status_hubungan'];
                $vkewarganegaraan = $data['kewarganegaraan']; 
                $vnama_orang_tua = $data['nama_orang_tua'];    
            }
        }else if ($_GET['hal'] == "hapus"){
			$hapus = mysqli_query($koneksi, "DELETE FROM kartu_keluarga WHERE nomor = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert(Data berhasil dihapus!');
						document.location='dashboardkartukeluarga.php';
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
    <title>Dashboard Kartu Keluarga</title>
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
                Form Input Data Kartu Keluarga
            </div>
                <div class="card-body bg-light">
                    <form method="post" action="dashboardkartukeluarga.php">
                        <div class="form-group">
                            <label>Nomor Kartu Keluarga</label>
                            <input type="text" name="no_kk" value="<?=@$vno_kk?>" class="form-control" placeholder="Masukkan nomor kartu keluarga" required>
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
                            <label>Nama Anggota Keluarga</label>
                            <input type="text" name="nama_anggota_keluarga" value="<?=@$vnama_anggota_keluarga?>" class="form-control" placeholder="Masukkan Nama Anggota Keluarga" required>
                        </div>
                        <div class="form-group">
                            <label>NIK Anggota Keluarga</label>
                            <input type="text" name="nik_anggota_keluarga" value="<?=@$vnik_anggota_keluarga?>" class="form-control" placeholder="Masukkan NIK Anggota Keluarga" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" value="<?=@$vjenis_kelamin?>" class="form-control" placeholder="Masukkan jenis kelamin" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Tanggal Lahir</label>
                            <input type="text" name="tempat_tanggal_lahir" value="<?=@$vtempat_tanggal_lahir?>" class="form-control" placeholder="Masukkan tempat tanggal lahir" required>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" name="agama" value="<?=@$vagama?>" class="form-control" placeholder="Masukkan Agama" required>
                        </div>
                        <div class="form-group">
                            <label>Pendidikan</label>
                            <input type="text" name="pendidikan" value="<?=@$vpendidikan?>" class="form-control" placeholder="Masukkan Pendidikan" required>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" name="pekerjaan" value="<?=@$vpekerjaan?>" class="form-control" placeholder="Masukkan pekerjaan" required>
                        </div>
                        <div class="form-group">
                            <label>Status Hubungan Keluarga</label>
                            <input type="text" name="status_hubungan" value="<?=@$vstatus_hubungan?>" class="form-control" placeholder="Masukkan status_hubungan" required>
                        </div>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan" value="<?=@$vkewarganegaraan?>" class="form-control" placeholder="Masukkan kewarganegaraan" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Orang Tua</label>
                            <input type="text" name="nama_orang_tua" value="<?=@$vnama_orang_tua?>" class="form-control" placeholder="Masukkan nama orang tua" required>
                        </div>

                        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>

                    </form>
                </div>
            </div>


            <div class="card-header bg-success text-white mt-5">
                Data Kartu Keluarga
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <tr>
                        <th>No.</th>
                        <th>No. KK</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Alamat</th>
                        <th>Nama Anggota Keluarga</th>
                        <th>NIK Anggota Keluarga</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Pendidikan</th>
                        <th>Pekerjaan</th>
                        <th>Status Hubungan Keluarga</th>
                        <th>Kewarganegaraan</th>
                        <th>Nama Orang Tua</th>
                    </tr>
                    
                    <?php

                        $tampil = mysqli_query($koneksi, "SELECT *  FROM kartu_keluarga");
                        while($data = mysqli_fetch_array($tampil)) :

                    ?>

                    <tr>
                        <td><?=$data['nomor']?></td>
                        <td><?=$data['no_kk']?></td>
                        <td><?=$data['nama_kepala_keluarga']?></td>
                        <td><?=$data['alamat']?></td>
                        <td><?=$data['nama_anggota_keluarga']?></td>
                        <td><?=$data['nik_anggota_keluarga']?></td>
                        <td><?=$data['jenis_kelamin']?></td>
                        <td><?=$data['tempat_tanggal_lahir']?></td>
                        <td><?=$data['agama']?></td>
                        <td><?=$data['pendidikan']?></td>
                        <td><?=$data['pekerjaan']?></td>
                        <td><?=$data['status_hubungan']?></td>
                        <td><?=$data['kewarganegaraan']?></td>
                        <td><?=$data['nama_orang_tua']?></td>
                        <td>
                            <a href="dashboardkartukeluarga.php?hal=edit&id=<?=$data['nomor']?>" class="btn btn-warning">Edit</a>
                            <br>
                            <br>
                            <a href="dashboardkartukeluarga.php?hal=hapus&id=<?=$data['nomor']?>"onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
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