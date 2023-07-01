-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 03:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akomodasi`
--

CREATE TABLE `tb_akomodasi` (
  `id_akomodasi` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga_sewa` int(11) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akomodasi`
--

INSERT INTO `tb_akomodasi` (`id_akomodasi`, `nama`, `harga_sewa`, `jenis`, `gambar`) VALUES
(1, 'Mobil', 500000, 'kendaraan', 'mobil.png'),
(2, 'Motor', 250000, 'kendaraan', 'motor.jpg'),
(3, 'bus', 1500000, 'kendaraan', 'bus.png'),
(4, 'TI AMO BALI', 700000, 'hotel', 'htiamobali.jpg'),
(5, 'UMASARI RICE TERRACE VILLA', 650000, 'hotel', 'humasari.jpg'),
(6, 'CEMPAKA BELIMBING VILLA', 850000, 'hotel', 'hcempaka.jpg'),
(7, 'AMARTA BEACH', 90000, 'hotel', 'hamarta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id_booking` int(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id_booking`, `harga`, `qty`, `total`, `tgl`) VALUES
(1, 0, 0, 0, '2023-07-01'),
(2, 850000, 2, 1700, '2023-07-01'),
(3, 650000, 3, 1950000, '2023-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `keterangan`, `foto`) VALUES
(1, 'THE BLOOMS GARDEN', 'The Blooms Garden adalah taman rekreasi seluas 4,5 hektar yang disebut sebagai taman bunga terbesar di Bali. Lokasinya ada di Desa Batusea, Kecamatan Baturiti, Tabanan. Taman-taman tersebut di antaranya Taman Belanda, Taman Cinta, Taman Dewi Danu, Taman Oval, dan lainnya.Di Taman Belanda, misalnya, penunjung bisa menemukan ornamen dua kincir yang merupakan ikon negara Belanda. Selain mengeksplorasi taman bunga, ada pula aktivitas lain seperti naik ATV, main di playground anak, kulineran di restoran, dan lainnya.', 'w1.jpg'),
(2, 'TASTA ZOO', 'Tasta Zoo adalah kebun binatang dan area konservasi yang berlokasi di Br Tegeh, Angseri, Kecamatan Baturiti, Tabanan. Bagi pengunjung yang datang bersama keluarga, destinasi ini bisa sekaligus menjadi wisata edukasi seputar satwa. Selain berkeliling melihat koleksi satwanya, pengunjung juga bisa berinteraksi dengan sejumlah satwa atua berfoto ria dengan latar patung-patung satwa dan Instagramable spot lainnya.', 'w2.jpg'),
(3, 'RUMAH GEMUK BALI', 'Rumah Gemuk Bali adalah tempat wisata Tabanan lainnya yang dapat dikunjungi. Lokasi destinasiini ada di Jalan Drupadi No.2, Candikuning, Kecamatan Baturiti, Tabanan. pengunjung Rumah Gemuk Bali bisa berburu foto sambil menikmati panorama Danau Beratan, serta kulineran. Beberapa aktivitas kuliner menariknya adalah menyantap Wagyu Arrabbiata dan piknik di dalam rumah kaca. Tidak dikenakan tiket masuk untuk pengunjung, tapi terdapat minimum spend atau biaya minimal pembelanjaan, yakni Rp 100.000 per orang. Setelah membayarnya saat kedatangan, kita akan mendaapatkan voucher. Sementara jika ingin piknik di area kebun dalam rumah kaca, ada beberapa paket piknik yang bisa dicoba dengan harga mulai dari sekitar Rp 250.000.', 'w3.jpg'),
(4, 'VIHARA DHARMA GIRI', 'Vihara Dharma Giri juga bisa dimasukkan ke dalam daftar tempat wisata Tabanan, tepatnya wisata religi. Lokasinya ada di Jalan Raya Pupuan, Kecamatan Pupuan, Tabanan. Daya tarik utama vihara ini adalah patung Buddha tidur raksasa yang dicat putih. Ketika diabadikan menggunakan kamera, warna putih itu pun terlihat begitu indah dan berpadu dengan latar biru langit yang cerah. Itulah mengapa, banyak orang berpose di depan patung tersebut saat mampir ke Vihara Dharma Giri.', 'w4.jpg'),
(5, 'PURA TANAH LOT', 'Pura Tanah Lot mungkin menjadi salah satu destinasi wisata utama ketika seseorang berlibur ke Bali. Pesonanya sudah terkenal di mata dunia. \"Tanah Lot\" sendiri diartikan sebagai tempat melihat sunset atau matahari terbenam. Di sana, terdapat kuil utama untuk menyembah Dewa Baruna atau Bhatara Segara, yakni kekuatan laut. Di sekitar pura terdapat ular jinak yang diyakini sebagai makhluk suci dan dianggap sebagai properti dewa atau penjaga pura dari pengaruh buruk.', 'w5.jpg'),
(6, 'PANTAI PASUT', 'Pantai Pasut memiliki ombak yang tidak terlalu tinggi, sehingga cukup aman untuk dijadikan tempat berenang atau snorkeling. Lokasinya ada di Jalan Raya Pasut, Desa Tibubiu, Kecamatan Kerambitan, Kabupaten Tabanan. pantai ini punya pasir berwarna hitam lembut. Tak hanya dimanfaatkan untuk berenang atau snorkeling, pengunjung juga kerap berjemur, bermain pasir, berolahraga, atau berburu foto di pantai ini.', 'w6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akomodasi`
--
ALTER TABLE `tb_akomodasi`
  ADD PRIMARY KEY (`id_akomodasi`);

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akomodasi`
--
ALTER TABLE `tb_akomodasi`
  MODIFY `id_akomodasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
