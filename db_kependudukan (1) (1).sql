-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 02:19 PM
-- Server version: 10.4.22-MariaDB-log
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kependudukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akta_kelahiran`
--

CREATE TABLE `akta_kelahiran` (
  `no_akta_kelahiran` varchar(20) NOT NULL,
  `tempat_kelahiran` varchar(50) NOT NULL,
  `tanggal_kelahiran` varchar(30) NOT NULL,
  `tahun_kelahiran` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `anak_ke` int(5) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta_kelahiran`
--

INSERT INTO `akta_kelahiran` (`no_akta_kelahiran`, `tempat_kelahiran`, `tanggal_kelahiran`, `tahun_kelahiran`, `nama`, `anak_ke`, `nama_ayah`, `nama_ibu`) VALUES
('001', 'Bandung', '25/03', 2007, 'Dwi', 2, 'Kurniawan', 'Ajeng'),
('002', 'jogjakarta', '25/04', 2002, 'thalia', 3, 'rizki', 'gemi'),
('112222', 'bandung', '25/03', 2002, 'putu', 2, 'eka', 'persada');

-- --------------------------------------------------------

--
-- Table structure for table `akta_kematian`
--

CREATE TABLE `akta_kematian` (
  `no_akta_kematian` varchar(20) NOT NULL,
  `tempat_wafat` varchar(50) NOT NULL,
  `tanggal_wafat` varchar(30) NOT NULL,
  `tahun_wafat` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_kelahiran` varchar(50) NOT NULL,
  `tanggal_kelahiran` varchar(30) NOT NULL,
  `tahun_kelahiran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta_kematian`
--

INSERT INTO `akta_kematian` (`no_akta_kematian`, `tempat_wafat`, `tanggal_wafat`, `tahun_wafat`, `nama`, `tempat_kelahiran`, `tanggal_kelahiran`, `tahun_kelahiran`) VALUES
('0004', 'venezuela', '32/13', 1986, 'Dewan Perwakilan Rakyat', 'venezuela', '25/12', 1945),
('0005', 'costa rica', '32/13', 2205, 'DPR ke 3', 'costa rica', '33/13', 2187);

-- --------------------------------------------------------

--
-- Table structure for table `akta_perceraian`
--

CREATE TABLE `akta_perceraian` (
  `no_akta_perceraian` varchar(20) NOT NULL,
  `tempat_perceraian` varchar(50) NOT NULL,
  `tanggal_perceraian` varchar(30) NOT NULL,
  `tahun_perceraian` int(10) NOT NULL,
  `nama_pengadilan` varchar(50) NOT NULL,
  `no_surat_pengadilan` varchar(20) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_perkawinan` varchar(50) NOT NULL,
  `no_akta_perkawinan` varchar(20) NOT NULL,
  `tanggal_perkawinan` varchar(30) NOT NULL,
  `tahun_perkawinan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta_perceraian`
--

INSERT INTO `akta_perceraian` (`no_akta_perceraian`, `tempat_perceraian`, `tanggal_perceraian`, `tahun_perceraian`, `nama_pengadilan`, `no_surat_pengadilan`, `nama_pasangan`, `tempat_perkawinan`, `no_akta_perkawinan`, `tanggal_perkawinan`, `tahun_perkawinan`) VALUES
('001', 'venezuela', '32/02', 1976, 'Bhayangkara', 'PNGB001PRC01', 'rizky,ajeng', '', 'KWN001', '32/12', 1984),
('002', 'Tomsk', '32/12', 1987, 'Bhayangkara', 'PNGB001PRC02', 'asep,siti', '', 'KWN002', '32/01', 1943),
('003', '', '32/12', 1987, 'bhayangkara', 'PNGB001PRC03', 'sugeng,beti', 'Kaliningrat', 'KWN003', '32/02', 1930);

-- --------------------------------------------------------

--
-- Table structure for table `akta_perkawinan`
--

CREATE TABLE `akta_perkawinan` (
  `no_akta_perkawinan` varchar(20) NOT NULL,
  `tempat_perkawinan` varchar(50) NOT NULL,
  `tanggal_perkawinan` varchar(30) NOT NULL,
  `tahun_perkawinan` int(10) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `tempat_kelahiran` varchar(50) NOT NULL,
  `tanggal_kelahiran` varchar(30) NOT NULL,
  `tahun_kelahiran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta_perkawinan`
--

INSERT INTO `akta_perkawinan` (`no_akta_perkawinan`, `tempat_perkawinan`, `tanggal_perkawinan`, `tahun_perkawinan`, `nama_pasangan`, `tempat_kelahiran`, `tanggal_kelahiran`, `tahun_kelahiran`) VALUES
('1', 'bandung', '25/03', 2020, 'rizky, ajeng', 'bandung, bali', '25/03, 24/03', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `form_pengaduan`
--

CREATE TABLE `form_pengaduan` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_tinggal` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_pengaduan`
--

INSERT INTO `form_pengaduan` (`nik`, `nama`, `tempat_tinggal`, `deskripsi`) VALUES
('1871000000067779', 'thalia gemi', 'bandung', 'saya ingin mencoba mendaftar kartu keluarga namun saya masih bingung bagaimana format data yang akan diinput'),
('18710616000008', 'Dwi Kurniawan', 'tamin', 'form kartu keluarga masih sulit untuk diakses, mohon diperbaiki lagi'),
('1871061600064', 'dwi', 'tamin', 'saya hanya ingin mencoba database, dan tampilan nya sudah cukup baiksaya hanya ingin mencoba database, dan tampilan nya sudah cukup baiksaya hanya ingin mencoba database, dan tampilan nya sudah cukup baiksaya hanya ingin mencoba database, dan tampilan nya sudah cukup baiksaya hanya ingin mencoba dat'),
('1871061608000006', 'Dwi Kurniawan', 'tamin', 'saya hanya ingin mencoba database, dan tampilan nya sudah cukup baik');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_persyaratan`
--

CREATE TABLE `informasi_persyaratan` (
  `nomor` int(5) NOT NULL,
  `dokumen` varchar(30) NOT NULL,
  `persyaratan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi_persyaratan`
--

INSERT INTO `informasi_persyaratan` (`nomor`, `dokumen`, `persyaratan`) VALUES
(1, 'Kartu Keluarga', 'KK adalah kartu identitas keluarga yang memuat data tentang susunan, hubungan dan jumlah anggota keluarga. KK wajib dimiliki oleh setiap keluarga. \r\nData-data yang ada di dalam kartu keluarga diantaranya adalah : Nama Kepala Keluarga, Alamat, Agama, Nama Anggota Keluarga, NIK Anggota Keluarga, Jenis Kelamin, ,Tempat Tanggal Lahir, Agama\r\n, Pendidikan, Pekerjaan, Status Hubungan, Kewarganegaraan, Nama Orang Tua.'),
(2, 'KTP-Elektronik', 'Kartu Tanda Penduduk elektronik, e-KTP atau KTP-el adalah Kartu Tanda Penduduk (KTP) yang dibuat secara elektronik, dalam artian baik dari segi fisik maupun penggunaannya berfungsi secara komputerisasi. Program KTP-el diluncurkan oleh Kementerian Dalam Negeri Republik Indonesia Program KTP-el di Indonesia telah dimulai sejak tahun 2009 dengan ditunjuknya empat kota sebagai proyek percontohan nasional. Data-data yang ada di dalam kartu keluarga diantaranya adalah : Nama, Tempat/Tanggal Lahir,  Jenis Kelamin, Golongan Darah,  Alamat, Agama, Status Perkawinan, Pekerjaan, Kewarganegaraan.'),
(3, 'Kartu Identitas Anak', 'Kartu Identitas anak yang selanjutnya disingkat KIA adalah resmi anak sebagai bukti diri anak yang berusia kurang dari 17 (tujuh belas) tahun dan belum menikah yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil Kabupaten/Kota atau Unit Pelaksana Teknis Dinas Kependudukan dan Pencatatan Sipil. Data-data yang ada di dalam kartu keluarga diantaranya adalah : Nama, Tempat/Tanggal Lahir, Jenis Kelamin, Golongan Darah, No. Kartu Keluarga, Nama Kepala Keluarga, Nomor Akta Kelahiran, Alamat, Agama, Kewarganegaraan. '),
(4, 'Penduduk Pindah/Datang', 'Surat Keterangan Pindah digunakan sebagai dasar perekaman dalam data base kependudukan dan proses perubahan KK bagi Kepala/Anggota Keluarga yang tidak pindah. Surat Keterangan Pindah Datang digunakan sebagai dasar perekaman dalam data base kependudukan dan proses penerbitan KK / KTP di alamat yang baru.  Data-data yang ada di dalam kartu keluarga diantaranya adalah : Nama Kepala Keluarga, Alamat,  Alasan Pindah, Alamat Tujuan Pindah, Klasifikasi Pindah, Jenis Perpindahan, Status No. Kartu Keluarga, Tanggal Rencana Perpindahan, Keluarga Yang Pindah, Tanggal Kedatangan, Keluarga Yang Datang.'),
(5, 'Akta Kelahiran', 'Akta kelahiran adalah suatu dokumen identitas autentik yang wajib dimiliki setiap warga negara Indonesia. Dokumen ini sebagai bukti sah terkait status dan peristiwa kelahiran seseorang dan termasuk hak setiap anak Indonesia. Akta kelahiran dikeluarkan oleh Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil).  Data-data yang ada di dalam kartu keluarga diantaranya adalah : Tempat Kelahiran, Tanggal Kelahiran, Tahun Kelahiran,  Anak-ke, Nama, Nama Ayah, Nama Ibu.'),
(6, 'Akta Perkawinan', 'Akta perkawinan merupakan dokumen penting sebagai bukti peristiwa nikah yang sah yang mendokumentasikan pernikahan dengan pasangan. Bagi pasangan suami istri, mempunyai akta perkawinan adalah bukti sah bahwa telah terjadi perkawinan dan hubungan perkawinan tersebut sah secara hukum.  Data-data yang ada di dalam kartu keluarga diantaranya adalah : Tempat Perkawinan, Tahun Perkawinan,  Nama Pasangan,  Tempat Kelahiran, Tanggal Kelahiran, Tahun Kelahiran.'),
(7, 'Akta Kematian', 'Akta kematian adalah suatu akta yang dibuat dan diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil yang membuktikan secara pasti tentang kematian seseorang. Kematian merupakan salah satu peristiwa penting yang dialami oleh setiap orang, yang harus dicatat dan dikukuhkan oleh Negara dalam bentuk Akta Kematian.  Data-data yang ada di dalam kartu keluarga diantaranya adalah : Tempat Wafat, Tanggal Wafat, Tahun Wafat, Nama, Tempat Kelahiran, Tahun Kelahiran.');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_anak`
--

CREATE TABLE `kartu_anak` (
  `nomor` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `no_kartu_keluarga` varchar(20) NOT NULL,
  `nama_kepala_keluarga` varchar(50) NOT NULL,
  `no_akta_kelahiran` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `berlaku_hingga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartu_anak`
--

INSERT INTO `kartu_anak` (`nomor`, `nik`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `golongan_darah`, `no_kartu_keluarga`, `nama_kepala_keluarga`, `no_akta_kelahiran`, `alamat`, `agama`, `kewarganegaraan`, `berlaku_hingga`) VALUES
(1, '1900899777654321', 'Kabilake', 'Bandar Lampung/19-10-1996', 'Laki-Laki', 'B', '1900899777654321', 'Ryzen', '1900899223', 'Jalan Kartini', 'Islam', 'Malaysia', '27 Juli 2027');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `nomor` int(11) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama_kepala_keluarga` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_anggota_keluarga` varchar(300) NOT NULL,
  `nik_anggota_keluarga` varchar(300) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tempat_tanggal_lahir` varchar(300) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status_hubungan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `nama_orang_tua` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`nomor`, `no_kk`, `nama_kepala_keluarga`, `alamat`, `nama_anggota_keluarga`, `nik_anggota_keluarga`, `jenis_kelamin`, `tempat_tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_hubungan`, `kewarganegaraan`, `nama_orang_tua`) VALUES
(1, '18710908074790889995', 'Dwi Kurniawan', 'Jalan Tamin', 'Nur Setiowati, Saddam Surya, Satria Sapta', '18710908074790889991, 18710908074790889992, 18710908074790889993', 'P/L/L', 'Bandar Lampung, Bandar Lampung, Bandar Lampung', 'Islam, Islam, Islam', 'SMA,/SLTA Sederajat,SMA,/SLTA Sederajat, SMA,/SLTA Sederajat', 'Mahasiswa/i, Mahasiswa/i, Mahasiswa/i', 'Istri, Anak, Anak', 'Indonesia, Indonesia, Indonesia,', 'Dwi Kurniawan, Dwi Kurniawan, Dwi Kurniawan'),
(2, '1871020303571813225	', 'Saddam Surya', 'Jalan Kartini', 'Ade Putra, Rendy Luthfi', '1871020303571813225. 1871020303571813225	', 'Laki-Laki, Laki-Laki', 'Bandar Lampung, Bandar Lampung,', 'Islam, Islam', 'SMP/SLTP Sederajat, SMP/SLTP Sederajat.', 'Belum Bekerja, Belum Bekerja', 'Anak,Anak', 'Indonesia, Indonesia', 'Saddam Surya, Saddam Surya');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_penduduk`
--

CREATE TABLE `kartu_penduduk` (
  `nomor` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `status_perkawinan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `berlaku_hingga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartu_penduduk`
--

INSERT INTO `kartu_penduduk` (`nomor`, `nik`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `golongan_darah`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `berlaku_hingga`) VALUES
(4, '1908009809667775', 'Dwi Kurniawan', 'Bandar Lampung/19-10-1996', 'Laki-Laki', 'B', 'Jalan Tamin', 'Islam', 'Belum Kawin', 'Mahasiswa', 'Indonesia', '27 Juli 2027'),
(5, '2018078909777775', 'Nur Setiowati', 'Bandar Lampung/16-08-2002', 'Perempuan', 'B', 'Tanggamus', 'Islam', 'Belum Menikah', 'Mahasiswa', 'Indonesia', '11 Juni 2028');

-- --------------------------------------------------------

--
-- Table structure for table `perpindahan_penduduk`
--

CREATE TABLE `perpindahan_penduduk` (
  `nomor` int(11) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama_kepala_keluarga` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alasan_pindah` varchar(100) NOT NULL,
  `alamat_tujuan_pindah` varchar(50) NOT NULL,
  `klasifikasi_pindah` varchar(50) NOT NULL,
  `jenis_perpindahan` varchar(50) NOT NULL,
  `status_no_kk` varchar(50) NOT NULL,
  `tanggal_perpindahan` varchar(30) NOT NULL,
  `keluarga_yang_pindah` varchar(100) NOT NULL,
  `tanggal_kedatangan` varchar(30) NOT NULL,
  `keluarga_yang_datang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perpindahan_penduduk`
--

INSERT INTO `perpindahan_penduduk` (`nomor`, `no_kk`, `nama_kepala_keluarga`, `alamat`, `alasan_pindah`, `alamat_tujuan_pindah`, `klasifikasi_pindah`, `jenis_perpindahan`, `status_no_kk`, `tanggal_perpindahan`, `keluarga_yang_pindah`, `tanggal_kedatangan`, `keluarga_yang_datang`) VALUES
(1, '18710908074790889995', 'Dwi Kurniawan', 'Jalan Tamin', 'Membeli Rumah Baru', 'Jalan Kartini', 'Klasifikasi 1', 'Permanen', 'Sudah Terdaftar', '18/10/2020', 'Keluarga Ryzen', '18/10/2020', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akta_kelahiran`
--
ALTER TABLE `akta_kelahiran`
  ADD PRIMARY KEY (`no_akta_kelahiran`);

--
-- Indexes for table `akta_kematian`
--
ALTER TABLE `akta_kematian`
  ADD PRIMARY KEY (`no_akta_kematian`);

--
-- Indexes for table `akta_perceraian`
--
ALTER TABLE `akta_perceraian`
  ADD PRIMARY KEY (`no_akta_perceraian`);

--
-- Indexes for table `akta_perkawinan`
--
ALTER TABLE `akta_perkawinan`
  ADD PRIMARY KEY (`no_akta_perkawinan`);

--
-- Indexes for table `form_pengaduan`
--
ALTER TABLE `form_pengaduan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `informasi_persyaratan`
--
ALTER TABLE `informasi_persyaratan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `kartu_anak`
--
ALTER TABLE `kartu_anak`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `kartu_penduduk`
--
ALTER TABLE `kartu_penduduk`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `perpindahan_penduduk`
--
ALTER TABLE `perpindahan_penduduk`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi_persyaratan`
--
ALTER TABLE `informasi_persyaratan`
  MODIFY `nomor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kartu_anak`
--
ALTER TABLE `kartu_anak`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kartu_penduduk`
--
ALTER TABLE `kartu_penduduk`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `perpindahan_penduduk`
--
ALTER TABLE `perpindahan_penduduk`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
