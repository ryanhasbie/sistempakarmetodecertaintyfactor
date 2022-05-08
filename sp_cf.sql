/*
SQLyog Ultimate v9.50 
MySQL - 5.5.5-10.1.13-MariaDB : Database - sp_cf
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `level` varchar(16) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`user`,`pass`,`level`) values ('admin','admin','admin'),('user','user','user');

/*Table structure for table `tb_diagnosa` */

DROP TABLE IF EXISTS `tb_diagnosa`;

CREATE TABLE `tb_diagnosa` (
  `kode_diagnosa` varchar(16) NOT NULL,
  `nama_diagnosa` varchar(256) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`kode_diagnosa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_diagnosa` */

insert  into `tb_diagnosa`(`kode_diagnosa`,`nama_diagnosa`,`keterangan`) values ('D01','Hangus Batang (Dumping Off)','Perbaikan selokan drainase untuk mencegah genangan air pada musim hujan. Menanam dengan jarak tanam yang sesuai untuk mencegah kelembapan yang tinggi. Pengolahan tanah yang intensif. Penggunaan mulsa untuk meningkatkan suhu tanah. Mencabut tanaman yang sakit dan membakarnya. Penggunaan fungisida seperti (Benlate, Manzate, Agrossid, Antracol, Orthocide, Altan). Mendesinfektan benih dan bibit, tanah pesemaian, dan kebun pertanaman jambu mete. Penyemaian tiak terlalu rapat.'),('D02','Layu Fusarium','Perbaikan selokan drainase untuk mencegah genangan air pada musim hujan. Menanam dengan jarak tanam yang sesuai untuk mencegah kelembapan yang tinggi. Pengolahan tanah yang intensif. Penggunaan mulsa untuk meningkatkan suhu tanah. Mencabut tanaman yang sakit dan membakarnya. Penggunaan fungisida seperti (Benlate, Manzate, Agrossid, Antracol, Orthocide, Altan). Mendesinfektan benih dan bibit, tanah pesemaian, dan kebun pertanaman jambu mete. Penyemaian tiak terlalu rapat.'),('D03','Busuk Akar','Perbaikan selokan drainase untuk mencegah genangan air pada musim hujan. Menanam dengan jarak tanam yang sesuai untuk mencegah kelembapan yang tinggi. Pengolahan tanah yang intensif. Penggunaan mulsa untuk meningkatkan suhu tanah. Mencabut tanaman yang sakit dan membakarnya. Penggunaan fungisida seperti (Benlate, Manzate, Agrossid, Antracol, Orthocide, Altan). Mendesinfektan benih dan bibit, tanah pesemaian, dan kebun pertanaman jambu mete. Penyemaian tiak terlalu rapat.'),('D04','Mati Pucuk (Die Back)','Memangkas cabang dibawah tempat infeksi kemudian membakarnya. Memolesi bekas potongan cabang dengan bubur Bordo dan diulang dua kali, yakni sebelum musim hujan dan pada pertengahan musim hujan. Pemangkasan cabang atau ranting-ranting yang telah tumbuh penuh agar tidak lembap. Mengatur kerapatan tanaman yang sesuai agar lingkungan sekitar tanaman tidak lembap. Penyemprotan dengan fungisida.'),('D05','Anthracnosis Pada Bunga, Tunas, dan Buah','Desinfektan benih jambu mete dengan fungisida. Membersihkan sisa-sisa tanaman sakit, gulma, dan rumput kemudian membakarnya. Perbaikan drainase agar pembuangan air dapat berjalan lancer sehingga dapat mencegah kelembapan yang tinggi. Mengambil segera bagian tanaman yang terinfeksi dan membakarnya. Menaman jambu mete dengan jarak tanam yang sesuai. Penyemprotan dengan fungisida, misalnya (Benlate, Antracol, dan Dithane M-45).'),('D06','Anthracnosis Pada Daun','Membersihkan sisa-sisa tanaman sakit dan mebakarnya. Perbaikan saluran drainase agar pembuangan air dapat berjalan lancer sehingga dapat mencegah kelembapan yang tinggi. Menaman dengan jarak tanam yang sesuai agar kondisi lingkungan tempat penanaman tidak lembap. Penyemprotan dengan fungisida.'),('D07','Busuk Kering Pada Buah dan Biji','Mengambil buah dan gelondong mete yang sakit dan memusnahkannya. Sanitasi kebun dan perbaikan saluran irigasi agar pembuangan air dapat bercajalan lancer sehingga dapat mencegah kelembapan yang tinggi. Mengatur kerapatan tanaman yang sesuai. Penyemprotan dengan fungisida.'),('D08','Penyakit Tepung','Memangkas ranting yang terserang cendawan dan membakarnya. Sanitasi kebun dengan membersihkan semua jenis tanaman pengganggu (gulma). Mengatur jarak tanam yang sesuai untuk mengurangi kelembapan area perkebunan. Penyemprotan dengan fungisida, misalnya (Benlate, Manzate, dan Dithane).');

/*Table structure for table `tb_gejala` */

DROP TABLE IF EXISTS `tb_gejala`;

CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(8) NOT NULL,
  `nama_gejala` varchar(256) NOT NULL DEFAULT '',
  `keterangan` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`kode_gejala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_gejala` */

insert  into `tb_gejala`(`kode_gejala`,`nama_gejala`,`keterangan`) values ('G001','Pada batang terdapat keratan-keratan dengan jaringan berwarna gelap (batang terlihat seperti hangus)','Batang'),('G002','Tanaman tampak pucat, rebah dan ahirnya busuk','Tanaman'),('G003','Serangan pada daun menunjukan gejala seperti basah terendam air, membengkak dan layu','Daun'),('G004','Tulang-tulang daun tampak pucat, terutama bagian daun bagian atas','Daun'),('G005','Tangkai-tangkai daun tampak merunduk (terkulai)','Daun'),('G006','Tanaman tampak layu dan mati','Tanaman'),('G007','Daun bagian bawah menguning dan tanaman tumbuh kerdil','Daun'),('G008','Apabila dicabut perakaran tampak membusuk','Akar'),('G009','Infeksi dimulai dari ujung akar','Akar'),('G010','Adanya bercak-bercak berwarna putih pada kulit berlapis-lapis menyerupai anyaman benang sutra','Kulit Batang'),('G011','Kulit ranting pecah dan pucuk ranting mengering yang dimulai dari ujung cabang','Ranting'),('G012','Buah yang terserang kulitnya terbelah dan terkelupas','Buah'),('G013','Kematian jaringan dengan menunjukan warna kemerah-merahan pada jaringan yang mati','Daun'),('G014','Kematian bunga-bunga dan tunas yang terserang','Bunga dan Tunas'),('G015','Daun-daun yang terserang tampak mengumpal','Daun'),('G016','Biji dan buah yang terserang menjadi lapuk dan keriput','Biji dan Bunga'),('G017','Bunga yang terserang menjadi hitam dan gugur','Bunga'),('G018','Pada daun yang terserang terdapat bercak-bercak  berwarna merah kecoklatan sampai hitam kecoklatan disepanjang ibu daun','Daun'),('G019','Bercak menyebar ketulang-tulang daun utama hingga kehelaian daun','Daun'),('G020','Daun yang terinfeksi akan rusak dan berguguran','Daun'),('G021','Buah dan biji (gelondong mete) yang terserang mengeluarkan cairan manis yang tidak normal sehingga buah jadi busuk lunak','Buah dan Biji'),('G022','Buah dan biji (gelondong mete) yang terinfeksi akan mengering atau keriput sehingga busuk kering','Buah dan Biji'),('G023','Buah dan gelondong mete yang terinfeksi akan lebih cepat gugur','Buah dan Biji'),('G024','Tanaman yang terserang (ranting, bunga, dan biji) tertutup oleh cendawan yang berwarna putih menyerupai tepung','Ranting, Bunga, dan Biji');

/*Table structure for table `tb_relasi` */

DROP TABLE IF EXISTS `tb_relasi`;

CREATE TABLE `tb_relasi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `kode_diagnosa` varchar(16) NOT NULL,
  `kode_gejala` varchar(16) NOT NULL,
  `mb` double NOT NULL,
  `md` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `tb_relasi` */

insert  into `tb_relasi`(`ID`,`kode_diagnosa`,`kode_gejala`,`mb`,`md`) values (1,'D01','G001',0.75,0.25),(2,'D01','G002',0.8,0.2),(3,'D01','G003',0.95,0.05),(4,'D02','G004',0.75,0.25),(5,'D02','G005',0.8,0.2),(6,'D02','G006',0.9,0.1),(7,'D03','G007',0.8,0.2),(8,'D03','G008',0.75,0.25),(9,'D03','G009',0.8,0.2),(10,'D04','G010',0.75,0.25),(11,'D04','G011',0.8,0.2),(12,'D04','G012',0.9,0.1),(13,'D05','G013',0.85,0.15),(14,'D05','G015',0.85,0.15),(15,'D05','G016',0.75,0.25),(16,'D05','G017',0.8,0.2),(17,'D05','G018',0.9,0.1),(18,'D06','G019',0.75,0.25),(19,'D06','G020',0.75,0.25),(20,'D06','G021',0.95,0.05),(21,'D07','G022',0.85,0.15),(22,'D07','G023',0.85,0.15),(23,'D07','G023',0.9,0.1),(24,'D08','G024',0.75,0.25);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
