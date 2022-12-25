-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-07-18 04:41:50
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `web_donasi`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `infaq`
--

CREATE TABLE `infaq` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notel` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `metode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `infaq`
--

INSERT INTO `infaq` (`id`, `jenis`, `nama`, `notel`, `pesan`, `nominal`, `metode`) VALUES
(1, '', 'bob', '081234217865', 'Halal', 1000000, ''),
(2, '', 'Roy', '083278906543', 'Semoga membantu', 10000000, 'Mandiri'),
(3, '', 'Mimi', '081267851234', 'insaallah membantu', 5000000, 'OVO'),
(4, '', 'rumi', '087656789078', 'Mohon doa untuk kluarga', 2000000, 'Mandiri'),
(5, 'Infaq', 'Milis', '082367459078', 'bermanfaat bagi yg membutuhkan', 2500000, 'Gopay');

--
-- トリガ `infaq`
--
DELIMITER $$
CREATE TRIGGER `transaksiinfaq` AFTER INSERT ON `infaq` FOR EACH ROW BEGIN
INSERT INTO transaksi
SET nama = NEW.nama,
jenis = NEW.jenis,
notel = NEW.notel,
nominal = NEW.nominal,
metode = NEW.metode;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- テーブルの構造 `sodaqoh`
--

CREATE TABLE `sodaqoh` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notel` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `metode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `sodaqoh`
--

INSERT INTO `sodaqoh` (`id`, `jenis`, `nama`, `notel`, `pesan`, `nominal`, `metode`) VALUES
(1, '', 'marina', '086756453423', 'semoga berkah', 20000000, 'Alfamart'),
(2, 'Sodaqoh', 'Romi', '084567238912', 'Semoga bisa membantu', 2000000, 'Alfamart');

--
-- トリガ `sodaqoh`
--
DELIMITER $$
CREATE TRIGGER `transaksisodaqoh` AFTER INSERT ON `sodaqoh` FOR EACH ROW BEGIN
INSERT INTO transaksi
SET nama = NEW.nama,
jenis = NEW.jenis,
notel = NEW.notel,
nominal = NEW.nominal,
metode = NEW.metode;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- テーブルの構造 `transaksi`
--

CREATE TABLE `transaksi` (
  `kode` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notel` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `metode` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `transaksi`
--

INSERT INTO `transaksi` (`kode`, `jenis`, `nama`, `notel`, `nominal`, `metode`, `status`) VALUES
(1, '', 'robin', '081234567890', 10000000, 'BCA', ''),
(2, '', 'mike', '088290987678', 5000000, 'BNI', ''),
(3, 'Infaq', 'rubia', '082290781234', 1500000, 'OVO', ''),
(4, 'Sodaqoh', 'momo', '082356745678', 7000000, 'BCA', 'pending'),
(5, 'Zakat', 'Yuko', '088289786090', 20000000, 'Mandiri', ''),
(6, 'Infaq', 'Milis', '082367459078', 2500000, 'Gopay', ''),
(7, 'Sodaqoh', 'Romi', '084567238912', 2000000, 'Alfamart', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notel` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `notel`, `alamat`, `password`, `admin`) VALUES
(1, 'fachry hanif nizhan', 'fachry@gmail.com', '081279512345', 'Bandar Lampung', '$2y$10$Q9ZdW7nmsaoScS.uPdAJ1O0/WalXBaz5/XNrp2zbGLQHnwmt6G8Xa', 1),
(3, 'bob', 'bob123@gmail.com', '08217895666', 'jakarta barat', '$2y$10$Dsns5vEAOV/7yyJFMfekKuLeExW8rgtMaTT3aspN2VZA0GsFV.k3G', 0),
(4, 'mira', 'mira@gmail.com', '081234567890', 'palembang', '$2y$10$uoGWBENY0s8vGQ9GD3Z27.IS63E9dLBuTtHLRLost.L5gZr1rBHBC', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `zakat`
--

CREATE TABLE `zakat` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notel` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  `metode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `zakat`
--

INSERT INTO `zakat` (`id`, `jenis`, `nama`, `notel`, `pesan`, `nominal`, `metode`) VALUES
(1, '', 'bobi', '082219109090', 'Semoga bisa berguna', 1000000, 'BNI'),
(2, '', 'huns', '0812356890987', 'Halal amin', 2000000, 'BCA'),
(3, '', 'robin', '081234567890', 'Aminnnnnn', 10000000, 'BCA'),
(4, 'Infaq', 'mike', '088290987678', 'berbagi rezeki ammin', 5000000, 'BNI'),
(5, 'Infaq', 'rubia', '082290781234', 'semoga berkah Berkah', 1500000, 'OVO'),
(6, 'Sodaqoh', 'momo', '082356745678', 'bismillah semoga berkah', 7000000, 'BCA'),
(7, 'Zakat', 'Yuko', '088289786090', 'barakallah', 20000000, 'Mandiri');

--
-- トリガ `zakat`
--
DELIMITER $$
CREATE TRIGGER `transaksizakat` AFTER INSERT ON `zakat` FOR EACH ROW BEGIN
INSERT INTO transaksi
SET nama = NEW.nama,
jenis = NEW.jenis,
notel = NEW.notel,
nominal = NEW.nominal,
metode = NEW.metode;
END
$$
DELIMITER ;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `infaq`
--
ALTER TABLE `infaq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `notel` (`notel`),
  ADD KEY `nominal` (`nominal`),
  ADD KEY `metode` (`metode`);

--
-- テーブルのインデックス `sodaqoh`
--
ALTER TABLE `sodaqoh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `metode` (`metode`),
  ADD KEY `nominal` (`nominal`),
  ADD KEY `nama` (`nama`),
  ADD KEY `notel` (`notel`);

--
-- テーブルのインデックス `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `nama` (`nama`),
  ADD KEY `notel` (`notel`),
  ADD KEY `nominal` (`nominal`),
  ADD KEY `metode` (`metode`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `zakat`
--
ALTER TABLE `zakat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `notel` (`notel`),
  ADD KEY `nominal` (`nominal`),
  ADD KEY `metode` (`metode`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `infaq`
--
ALTER TABLE `infaq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルの AUTO_INCREMENT `sodaqoh`
--
ALTER TABLE `sodaqoh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- テーブルの AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `zakat`
--
ALTER TABLE `zakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
