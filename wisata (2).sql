-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 08:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskr` text NOT NULL,
  `deskr2` text NOT NULL,
  `foto_artikel` text NOT NULL,
  `foto_artikel2` text NOT NULL,
  `foto_cover` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `judul`, `deskr`, `deskr2`, `foto_artikel`, `foto_artikel2`, `foto_cover`) VALUES
(12, 'Pantai Kuta', 'Pantai Kuta sebagai salah satu destinasi wisata favorit menjadi jantungnya pariwisata di Pulau Bali. Pantai Kuta menjadi lokasi yang pas untuk menikmati panorama matahari terbenam yang begitu indah di Pulau Bali.\r\n\r\nGaris pantainya yang mencapai 5 kilometer merupakan bentangan garis pantai terbaik di Pulau Bali. Ombaknya yang landai dengan bibir pantai yang sangat luas menjadikan Pantai Kuta sebagai tempat yang aman dan nyaman bagi keluarga yang ingin menikmati liburan di Bali.\r\n\r\nSelain itu, kebersihan Pantai Kuta juga sangat terjaga, sehingga banyak wisatawan yang merasa betah dan selalu ingin berlama-lama saat berada di pantai ini.\r\n\r\nAda banyak aktivitas wisata di Pantai Kuta yang bisa Anda lakukan, mulai dari berjemur di tepi pantai, berenang, hingga belajar berselancar.', 'Sebagian besar obyek wisata di Bali memang menerapkan harga tiket masuk bagi para wisatawan yang datang berkunjung. Namun tidak demikian di Pantai Kuta karena di tempat ini tidak ada biaya tiket masuk bagi pengunjung, alias gratis untuk dimasuki.\r\n\r\nTetapi bagi pengunjung yang membawa kendaraan akan dikenai biaya parkir dengan tarif Rp 2000 untuk sepeda motor, dan Rp 5000 untuk mobil.\r\n\r\nFasilitas area parkir kendaraan di Pantai Kuta sangat terbatas, terlebih lagi saat musim liburan di mana kondisi tempat wisata ini sangat ramai. Biasanya tempat parkir akan penuh, dan Anda harus memarkirkan kendaraan di tempat yang agak jauh dari lokasi.\r\nBeragam fasilitas dan sarana telah tersedia lengkap untuk para wisatawan mulai dari hotel, restoran, pusat perbelanjaan, pasar seni, hingga berbagai fasilitas penunjang obyek wisata lainnya.\r\n\r\nBagi wisatawan yang ingin berbelanja oleh-oleh dapat mengunjungi Beachwalk Shoping Center atau Centro Discovery Shoping Mall yang lokasinya berdekatan dengan Pantai Kuta.', 'headerPantai Kuta.jpg', 'artikelPantai Kuta.jpg', 'coverPantai Kuta.jpg'),
(15, 'Gili Trawangan', 'Dengan semakin banyaknya pengunjung yang berwisata di Gili Trawangan dengan itu pula Masyarakat dan Para Pelaku Wisata setempat berbenah diri untuk memperbaiki pelayanan untuk para wisatawan yang berlibur di Gili Trawangan dan perjuangan mereka berbuah hasil dengan mendapatkan beberapa penghargaan bergengsi dari salah satu situs perjalan terbesar di dunia yaitu Tripadvisor memberikan penghargaan Travellers Choice Island untuk Gili Trawangan dan Penghargaan ini diberikan juga kepada 100 pulau terbaik di dunia. Dan untuk Kawasan Asia, Gili Trawangan masuk jajaran 10 pulau terbaik. \r\n\r\nSelain mendapat penghargaan di atas Gili Trawangan juga pernah mendapatkan atau meraih Rekor Muri terhadap pemasangan payung merah putih saat moment hari kemerdekaan Indonesia di sepanjang jalan utama Gili Trawangan. Ketua TIM Penggerak PKK Pusat dr. Erni Guntari Tjahjo Kumolo memberikan apresiasi dan berpesan agar para pelaku wisata di Gili Trawangan untuk selalu menjaga kebersihan lingkungan demi kenyamanan dan keamanan para wisatawan yang berkunjung dan berlibur di Gili Trawangan. ', 'Gili Terawangan yang luasnya sekitar 338 hektare baru dikembangkan menjadi destinasi wisata pada Tahun 1980-an dan Gili Trawangan mengandalkan wisata bahari dengan keindahan pantai dan taman bawah lautnya.  Pulau Kecil ini menawarkan keindahan biota laut, berbagai jenis karang, ikan hias yang beraneka ragam, ikan napoleon, selain itu terdpat pula  kura-kura dan manta (pari). Semua keindahan Bawah Laut ini dengan mudah di dapati hanya dengan keberanian beranang sedikit saja untuk snorkling semua akan terlihat jelas bak Akuarium Raksasa. Biaya Sewa Alat Snorkling Rp. 75.000 dan Bisa Gabung di Snorkling Trip harian Gili Trawangan.\r\n\r\nGili Trawangan sampai saat ini banyak diminati oleh wisatawan mancanegara yang hobi akan Diving. Di mancanegara Gili Trawangan lebih terkenal dengan aktivitas divingnya karna banyak wisatawan mancanegara mengklaim bahwa di Gili Trawangan terdapat Karang Biru ( Blue Coral ) yang sangat indah dan langka dan Karang Biru ini hanya terdapat di 2 tempat saja di belahan dunia ini yaitu di Gili Trawangan dan  Lautan Karibia. Di Gili Trawangan terdapat banyak Dive Center, penyewaan alat diving dan pelatihan dive serifikat internasional.', 'headerGili Trawangan.jpg', 'artikelGili Trawangan.jpg', 'coverGili Trawangan.jpg'),
(16, 'Pulau Kumala', 'Jika kota Jakarta memiliki Ancol sebagai andalan pariwisata, maka Tenggarong ada Pulau Kumala. Bedanya Ancol berada di pinggir pantai, sedangkan Pulau Kumala berada di tengah-tengah Sungai Mahakam. Taman rekreasi utama keluarga ini berada dalam pengelolaan, khususnya Pemerintah Kabupaten Kutai Kartanegara. Pihak pengelola menata wisata sedemikian rupa, sehingga terlihat sangat apik dan membuat pengunjung terkagum-kagum.\r\n\r\nPulau unik ini awalnya merupakan hutan rimbun, yang ditumbuhi aneka pohon khas Kalimantan. Terutama pohon Ulin dan Meranti yang identik dengan besar dan kokoh. Juga merupakan habitas asli hewan Bekantan, si monyet berhidung panjang. Pada tahun 2000 pemerintahan setempat merencanakan pembangunan, untuk dijadikan objek wisata. Kemudian di tahun 2002 bersamaan dengan adanya Festival Erau, tempat wisata diresmikan dan dibuka untuk umum.\r\n\r\nPulau Kumala sendiri terletak memanjang, di sebelah Barat Kota Tenggarong. Untuk menuju pulau ini harus terlebih dulu ke kota Tenggarong. Sedangkan kota Tenggarong sendiri jauhnya sekitar 27 kilometer, dari ibukota Samarinda. Anda bisa menaiki kendaraan umum ataupun pribadi, untuk mencapai kawasan dermaga di tepi Sungai Mahakam. Dari dermaga bisa langsung menyebrang, dengan menyewa perahu motor atau naik kereta gantung.\r\n\r\nKetika sudah memasuki kawasan wisata, pengunjung akan disuguhi gapura yang mirip dengan jembatan. Bila anda sudah mendapatkan view ini berarti sudah tiba di Pulau Kumala. Untuk bisa menikmati keindahan alamnya anda dikenakan tarif, seharga 7 ribu untuk dewasa dan 5 ribu untuk anak-anak. Sementara jika ingin menaiki wahana, ditarik biaya sekitar 20 ribu hingga 25 ribu.', 'Pulau Kumala menyediakan beragam fasilitas untuk menunjang wisata. Sehingga liburan anda dijamin tidak akan membosankan. Pulau berbentuk perahu terbalik ini memiliki daya tarik tersendiri. Hal yang paling menonjol ialah Jembatan Repo-repo dan Patung Lembuswana. Kedua aset wisata ini bahkan menjadi ikon kota Samarinda, dan membuat penasaran banyak pengunjung.\r\n\r\nJembatan Repo-Repo merupakan jembatan yang membentang, diatas Sungai Mahakan. Jembatan khusus pejalan kaki ini menghubungkan daratan kota Tangarong, dengan Pualu Kumala. Alasan keberadaan jembatan ialah untuk memudahkan akses warga, sehingga tidak perlu menggunakan perahu ces. Pembangunannya dimulai tahun 2014 dan diresmikan pada bulan Maret 2016. Dan ditandai oleh upacara tempong tawar, oleh Sultan Kutai Aji Muhammad Salehuddin.\r\n\r\n\r\n\r\nDinamakan Repo-Repo yang artinya gembok, sebab terdapat tempat khusus untuk memasang gembok cinta. Sepanjang perjalanan menuju Pulau Kumala anda akan melihat, deretan gembok warna-warni. Konon desain jembatan memadukan 3 unsur jembatan terkenal yaitu Golden Gate di San Fransisco, Jembatan Banpao di Korea Selatan, serta Jembatan Sungai Seine di Perancis.', 'headerPulau Kumala.jpg', 'artikelPulau Kumala.jpg', 'coverPulau Kumala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komen`
--

CREATE TABLE `tb_komen` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `rate` int(1) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_komen`
--

INSERT INTO `tb_komen` (`id`, `id_user`, `id_artikel`, `tanggal`, `rate`, `komen`) VALUES
(29, 10, 12, '13/11/2022', 3, 'kenapa diapus woy'),
(30, 13, 12, '12/11/2022', 4, 'aaaaaaaaaa\r\n'),
(31, 12, 12, '14/11/2022', 5, 'aku mau vote'),
(35, 14, 12, '14/11/2022', 5, 'tempatnya bagus');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto_user` text NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `password`, `email`, `foto_user`, `role`) VALUES
(10, 'usman', '$2y$10$mZ9ycDNCRf6ZzY8fMEgiIuNFRXTqRYhlaOyjodH.hL3DZTz0p07Tq', '2yahyanur4@gmail.com', 'usman.jpg', 'user'),
(11, 'admin', '$2y$10$6J/aT6aZ6bp4u2MOxrDSeOHk5EiOC5feFUCkY9RMF4tdNxy6Eh8DO', 'admin', 'admin.png', 'admin'),
(12, 'test', '$2y$10$UYMMyC2qW7/6A/9/rVGI4u2rBGovtMr9Hmefs09q1..bf4wkZxgo.', 'nhekel46@gmail.com', 'test.jpg', 'user'),
(13, 'asnawi', '$2y$10$N4Sar17USDZSMymD3QY5IOAriccGwIDYAYMe7YWISPnP5CJEkwC9.', 'www', 'asnawi.jpg', 'user'),
(14, 'ambatukam', '$2y$10$..b6v3RQ93zXyDSFWBr0Uu6uu.btpwsR.Y0BAZ8DT7FVxD1BoR3KO', 'dummy', 'ambatukam.jpg', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_webrate`
--

CREATE TABLE `tb_webrate` (
  `id_user` int(11) NOT NULL,
  `vote` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_webrate`
--

INSERT INTO `tb_webrate` (`id_user`, `vote`) VALUES
(13, 'n'),
(10, 'y'),
(12, 'y'),
(14, 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_komen`
--
ALTER TABLE `tb_komen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_webrate`
--
ALTER TABLE `tb_webrate`
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_komen`
--
ALTER TABLE `tb_komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_komen`
--
ALTER TABLE `tb_komen`
  ADD CONSTRAINT `tb_komen_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id`),
  ADD CONSTRAINT `tb_komen_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_webrate`
--
ALTER TABLE `tb_webrate`
  ADD CONSTRAINT `tb_webrate_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
