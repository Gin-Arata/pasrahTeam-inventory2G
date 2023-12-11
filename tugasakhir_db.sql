-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2023 pada 07.11
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal_barang`
--

CREATE TABLE `asal_barang` (
  `id_asal` int(11) NOT NULL,
  `asal_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `asal_barang`
--

INSERT INTO `asal_barang` (`id_asal`, `asal_barang`) VALUES
(1, 'Hibah'),
(2, 'Pembelian'),
(3, 'Pemberian Ortu'),
(4, 'Pemberian Menteri Pendidikan'),
(5, 'Test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `maintainer_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `keterangan_barang` longtext NOT NULL,
  `gambar_barang` longtext NOT NULL,
  `id_asal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `kode_barang`, `maintainer_barang`, `jumlah_barang`, `keterangan_barang`, `gambar_barang`, `id_asal`) VALUES
(21, 'Keyboard', 'M3421', 'Edooo', 3, 'Keyboard dalam kondisi bagus', 'OIP.jpg', 1),
(23, 'Kursi', 'K23122', 'Agus Radit', 5, 'Semua kondisi kursi dalam keadaan bagus', 'OIG.jfif', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `waktu_pinjam` date NOT NULL,
  `waktu_pengembalian` date NOT NULL,
  `jumlah_dipinjam` int(11) NOT NULL,
  `keterangan_pinjam` text NOT NULL,
  `status_pinjam` enum('Disetujui','Ditolak','Proses','Dikembalikan') NOT NULL DEFAULT 'Proses',
  `pesan_penolakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_barang`, `waktu_pinjam`, `waktu_pengembalian`, `jumlah_dipinjam`, `keterangan_pinjam`, `status_pinjam`, `pesan_penolakan`) VALUES
(11, 13, 21, '2023-12-11', '2023-12-13', 2, 'Testing', 'Ditolak', 'Apalo'),
(12, 13, 23, '2023-12-11', '2023-12-13', 2, 'Testing', 'Ditolak', 'Kenapa ditolak?\r\n'),
(13, 13, 21, '2023-12-11', '2023-12-13', 1, 'Untuk keperluan kelas', 'Dikembalikan', ''),
(14, 13, 23, '2023-12-11', '2023-12-13', 1, 'Untuk keperluan kelas', 'Dikembalikan', ''),
(15, 13, 21, '2023-12-11', '2023-12-13', 3, 'Keperluan kampus', 'Dikembalikan', ''),
(16, 13, 23, '2023-12-11', '2023-12-13', 3, 'Keperluan kampus', 'Ditolak', 'Alasan kurang lengkap'),
(17, 13, 21, '2023-12-11', '2023-12-13', 1, 'test', 'Dikembalikan', ''),
(18, 13, 23, '2023-12-11', '2023-12-13', 1, 'test', 'Dikembalikan', ''),
(19, 13, 23, '0000-00-00', '0000-00-00', 1, 'te', 'Dikembalikan', ''),
(20, 13, 23, '0000-00-00', '0000-00-00', 1, 'test', 'Dikembalikan', ''),
(21, 13, 23, '0000-00-00', '0000-00-00', 1, 'test', 'Dikembalikan', ''),
(22, 13, 21, '0000-00-00', '0000-00-00', 2, 'Test', 'Dikembalikan', ''),
(23, 13, 21, '2023-12-11', '2023-12-12', 0, 'Test', 'Disetujui', ''),
(24, 13, 23, '0000-00-00', '0000-00-00', 1, 'test', 'Disetujui', ''),
(25, 13, 21, '0000-00-00', '0000-00-00', 1, 'test', 'Disetujui', ''),
(26, 13, 21, '2023-12-11', '2023-12-14', 1, 'test', 'Disetujui', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `nomor_induk` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `profil_user` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `nomor_induk`, `email_user`, `password_user`, `level`, `profil_user`) VALUES
(8, 'Gaco Razan Kamil', '2241720091', 'gacorazan3@outlook.com', '25d55ad283aa400af464c76d713c07ad', 'user', ''),
(10, 'Muzzarino Khaira Akbarr', '2241720001', 'akbar@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'user', ''),
(11, 'Hana', '2241720192', 'hana@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user', ''),
(13, 'user', 'user', 'testing@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', ''),
(14, 'admin', 'admin', 'testing@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', ''),
(15, 'Test', '2241720056', 'testing@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asal_barang`
--
ALTER TABLE `asal_barang`
  ADD PRIMARY KEY (`id_asal`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `FK_ASAL_BARANG` (`id_asal`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `FK_PEMINJAM_MELAKUKAN_PEMINJAMAN` (`id_user`),
  ADD KEY `FK_PEMINJAMAN_BARANG` (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `asal_barang`
--
ALTER TABLE `asal_barang`
  MODIFY `id_asal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `FK_ASAL_BARANG` FOREIGN KEY (`id_asal`) REFERENCES `asal_barang` (`id_asal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `FK_PEMINJAMAN_BARANG` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PEMINJAM_MELAKUKAN_PEMINJAMAN` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`ID_BARANG`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
