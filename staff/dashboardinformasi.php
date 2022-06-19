<!--koneksi ke database-->
<?php

    $koneksi = mysqli_connect("localhost", "root", "", "db_kependudukan");

    if(isset($_POST['bsimpan'])){
        if($_GET['hal'] == "edit"){
            $edit = mysqli_query($koneksi, "UPDATE informasi_persyaratan SET
                                        dokumen = '$_POST[dokumen]',
                                        persyaratan = '$_POST[persyaratan]'
                                        WHERE nomor = '$_GET[id]'
                                        ");

                                        if($edit){
                                            echo "<script>window.alert('data berhasil diedit!')
                                            window.location='dashboardinformasi.php';</script>";
                                        }else{
                                            echo "<script>window.alert('data gagal diedit!')
                                            window.location='dashboardinformasi.php';</script>";
                                        }
                                        

                                        

        }else{
            $simpan = mysqli_query($koneksi, "INSERT INTO informasi_persyaratan set
                                        nomor =  '$_POST[nomor]',
                                        dokumen = '$_POST[dokumen]',
                                        persyaratan = '$_POST[persyaratan]'");

                                        echo "<script>window.alert('data berhasil disimpan!')
                                        window.location='dashboardinformasi.php';</script>";
        }
        
    }

    if(isset($_GET['hal'])){
        if($_GET['hal'] == "edit"){
            $tampil = mysqli_query($koneksi, "SELECT * FROM informasi_persyaratan WHERE nomor = '$_GET[id]' ");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vnomor = $data['nomor'];
                $vdokumen = $data['dokumen'];
                $vpersyaratan = $data['persyaratan'];   
            }
        }else if ($_GET['hal'] == "hapus"){
			$hapus = mysqli_query($koneksi, "DELETE FROM informasi_persyaratan WHERE nomor = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert(Data berhasil dihapus!');
						document.location='dashboardinformasi.php';
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
    <title>Dashboard Informasi dan Perysaratan</title>
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script><a> Dwi Kurniawan & Nur Setiowati</a>
                        <i class="icon-heart" aria-hidden="true"></i>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </nav>
        

        

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            
            <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Form Input Data Informasi dan Persyaratan
            </div>
                <div class="card-body bg-light">
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Nomor</label>
                            <input type="text" name="nomor" value="<?=@$vnomor?>" class="form-control" placeholder="Masukkan nomornya..." required>
                        </div>
                        <div class="form-group">
                            <label>Dokumen</label>
                            <input type="text" name="dokumen" value="<?=@$vdokumen?>" class="form-control" placeholder="Masukkan jenis dokumennya..." required>
                        </div>
                        <div class="form-group">
                            <label>Persyaratan</label>
                            <textarea class="form-control" name="persyaratan"  placeholder="Masukkan persyaratannya..."><?=@$vpersyaratan?></textarea>
                        </div>

                        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                        <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

                    </form>
                </div>
            </div>


            <div class="card-header bg-success text-white mt-5">
                Data Informasi dan Persyaratan
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <tr>
                        <th>No.</th>
                        <th>Dokumen</th>
                        <th>Persyaratan</th>
                        <th>Aksi</th>
                    </tr>
                    
                    <?php

                        $tampil = mysqli_query($koneksi, "SELECT *  FROM informasi_persyaratan");
                        while($data = mysqli_fetch_array($tampil)) :

                    ?>

                    <tr>
                        <td><?=$data['nomor']?></td>
                        <td><?=$data['dokumen']?></td>
                        <td><?=$data['persyaratan']?></td>
                        <td>
                            <a href="dashboardinformasi.php?hal=edit&id=<?=$data['nomor']?>" class="btn btn-warning">Edit</a>
                            <br>
                            <br>
                            <a href="dashboardinformasi.php?hal=hapus&id=<?=$data['nomor']?>"onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </table>
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