-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2024 pada 09.17
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krs_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `nim_mahasiswa` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id_krs`, `nim_mahasiswa`, `id_matkul`) VALUES
(1, 17230031, 44),
(2, 17230032, 69),
(3, 17230033, 101),
(4, 17230034, 102),
(5, 17230035, 103),
(6, 17230031, 101),
(7, 17230031, 102);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `jurusan`, `kelas`,`semester`) VALUES
(17230031, 'Akbar Wibowo Laksono Putra', 'Teknik Informatika', '17.3A.05', 3),
(17230032, 'Muhamad Rifki Saputra', 'Teknik Informatika', '17.3A.05', 3),
(17230033, 'Zaky Daffa Fiddien', 'Teknik Informatika', '17.3A.05', 3),
(17230034, 'Ridho Adhitama Ramadhan', 'Teknik Informatika', '17.3A.05', 3),
(17230035, 'Anjar Nur Afif', 'Teknik Informatika', '17.3A.05', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_matkul`, `nama_matkul`, `sks`) VALUES
(44, 'cyber scurity', 4),
(69, 'Logika Algoritma', 4),
(101, 'Basis Data', 3),
(102, 'Grafika Komputer', 6),
(103, 'Web Programming', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`),
  ADD KEY `fk_nim` (`nim_mahasiswa`),
  ADD KEY `fk_id_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `fk_nim_mahasiswa` FOREIGN KEY (`nim_mahasiswa`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `fk_id_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id_matkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
