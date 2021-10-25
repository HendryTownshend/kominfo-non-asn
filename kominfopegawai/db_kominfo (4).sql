-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2021 pada 09.37
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `kegiatan_harian` varchar(128) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `tanggal_pengerjaan` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `pengguna_id`, `kegiatan_harian`, `kuantitas`, `tanggal_pengerjaan`, `jam_mulai`, `jam_selesai`, `keterangan`) VALUES
(25, 13, 'Membuat Permohonan Swab', 1, '2021-06-07', '13:45:00', '13:45:00', 'Data Pegawai yang akan di swab'),
(29, 0, 'Membuat Surat Permohonan Rekomendasi (Magang Udinus)', 4, '2021-06-07', '10:45:00', '11:45:00', 'Surat permohonan rekomendasi magang'),
(33, 0, 'Mempersiapkan dan Menjaga Tes Psikotesdan Wawancara', 1, '2021-08-10', '10:00:00', '12:00:00', 'Kegiatan Tes Psikotes dan Wawancara'),
(34, 0, 'Membuat surat cuti', 1, '2021-07-08', '10:45:00', '12:45:00', 'Cuti Alasan Kepentingan Elsa'),
(37, 0, 'Mewawancarai petugas satpol pp', 2, '2021-08-04', '09:00:00', '10:00:00', 'Done'),
(41, 0, 'Data cek3', 2, '2021-08-04', '13:45:00', '15:45:00', 'Done'),
(42, 9, 'Edit foto', 3, '2021-08-05', '13:45:00', '13:45:00', 'adamasad phoshop sad'),
(44, 0, 'Data cek4', 2, '2021-08-01', '13:45:00', '13:45:00', 'dd'),
(45, 0, 'Data cek56', 8, '2021-08-04', '13:45:00', '13:45:00', 'Done'),
(46, 0, 'Adamas TMB4', 1, '2021-08-08', '13:45:00', '13:45:00', 'Done'),
(54, 0, 'Input Biasa', 1, '2021-08-09', '13:45:00', '13:45:00', 'Biasa'),
(55, 0, 'InputLuar Biasa', 1, '2021-08-10', '13:45:00', '13:45:00', 'Luar Biasa 2'),
(56, 0, 'InputLuar Biasa', 1, '2021-08-10', '13:45:00', '13:45:00', 'Luar Biasa 2'),
(57, 0, 'Adamas TMBko', 1, '2021-08-09', '13:45:00', '13:45:00', 'lo'),
(58, 0, 'Adamas TMBko', 1, '2021-08-09', '13:45:00', '13:45:00', 'lo'),
(59, 0, 'Adamas TMBko', 1, '2021-08-09', '13:45:00', '13:45:00', 'lo'),
(60, 0, 'Adamas TMBko', 1, '2021-08-09', '13:45:00', '13:45:00', 'lo'),
(61, 0, 'Adamas TMBko', 1, '2021-08-09', '13:45:00', '13:45:00', 'lo'),
(63, 13, 'Suyuti Data', 1, '2021-08-09', '13:45:00', '15:45:00', 'Done Suyuti'),
(64, 13, 'Mewawancarai pemenang asia games 2021', 3, '2021-08-10', '10:20:00', '12:45:00', 'Selesai'),
(66, 9, 'Kegiatan Adamas Photoshop', 5, '2021-08-10', '08:00:00', '10:00:00', 'Adamas Siap membantu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 1, 3),
(7, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `email`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'alvin81@gmail.com', 'alpin setiawan', 'default.jpg', '$2y$10$yBA4/eKGOu2AjOVMYJc.qeC0VO.sVgLRLFkN8NfjmHRmF2uD1LyFi', 1, 1, 1626155257),
(2, 'hendryadmin@gmail.com', 'hendryscoot', 'default.jpg', '$2y$10$jrrn4fWV9O8DEAa9TYl1COxd68gPUZJKzgXToJaVH1IPONfvE5c9a', 1, 1, 1626155399),
(3, 'hendryadmin2@gmail.com', 'hendryscoot2', 'default.jpg', '$2y$10$Y.8fX3r6kDf/IeHGeCPEoOiiyxj3B1lNlzZEpyQSkKArawEMe/xqm', 1, 1, 1626156162),
(4, 'hendryadmin3@gmail.com', 'hendryscoot3', 'default.jpg', '$2y$10$t85rw69/ov0hKYJ9reze1.UqSp.DwPkbG9M.xhsBczOOPX7FhHUXS', 1, 1, 1626156548);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'VALIDASI'),
(5, 'Atasan Langsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pengguna`
--

CREATE TABLE `user_pengguna` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `nip` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_pengguna`
--

INSERT INTO `user_pengguna` (`id`, `name`, `email`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`, `nip`) VALUES
(7, 'Hendry Agus Setiawan', 'hendryuser4@gmail.com', 'hendryscootkennedy4', 'william1.png', '$2y$10$/zBkN4m.PtXiHPYlGTy11ukYEzxu.Z8vDJ9pAYmz.yn0iXNpWXOZ6', 1, 1, 1626162432, 196504091986067853),
(9, 'Adamas Ardiyansyah', 'hendryuser5@gmail.com', 'hendryscootkennedy5', 'william.png', '$2y$10$Pt0MpV4BQbnqbA3vPeAImua0hZv5o/MnX2kit6dAC0bADkLPqaK3K', 2, 1, 1626266883, 196504091986032329),
(10, 'Rafka Azkira', 'rafka@gmail.com', 'rafka', 'default.png', '$2y$10$MJQk4.yBWQTeqz9YuyEO5OXdEJV97nZBDzwbMmh2oRLPsjvCZPP5W', 2, 0, 1627778939, 0),
(11, 'Wawan Asep', 'wawan@gmail.com', 'wawan', 'default.png', '$2y$10$AtMMoqQvCBTvOqXJ/TyHBurNHcghBK3P8oZ1L5aNglriGJDFl.7xS', 2, 0, 1627779203, 0),
(12, 'hendry townshend', 'hendryas321@gmail.com', 'hendrytownshend', 'default.png', '$2y$10$8FlxCYqs9dzlfx3jUOQRseyzKnXLvvNcG9l0wM.G6tip5fN52S2mW', 2, 1, 1627796456, 0),
(13, 'Suyuti Amad ', 'suyutiamad54@gmail.com', 'suyutiamad', 'default.png', '$2y$10$GIDXKlO4zN8rZOrtGOhcYe8ToPv8an6XhZt4JualasfIrl.v0ZXiS', 2, 1, 1628215514, 196504091986032328),
(14, 'Naufal Izzan ', 'izzann4@gmail.com', 'izzan123', 'william2.png', '$2y$10$QzxRsd1h/wD/SgVBU7RKg.UzvrVR5TPZcJyG7oHTD3z3yoVtrsW/a', 2, 1, 1628739322, 196504091986032333);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'WelcomeAdmin', 'icon-accelerator', 1),
(2, 2, 'JABATAN', 'WelcomeUser', 'fas fa-user-tie', 1),
(3, 2, 'KEGIATAN PEGAWAI', 'WelcomeUser/harian', 'fas fa-calendar-times', 1),
(4, 2, 'LAPORAN', 'WelcomeUser/bulanan', 'fas fa-tasks', 1),
(5, 2, 'SETTING', 'WelcomeUser/setting', 'fas fa-user-edit', 1),
(6, 3, 'Menu Management', 'Menu', 'fas fa-folder', 1),
(7, 3, 'Submenu Management', 'Menu/submenu', 'far fa-folder-open', 1),
(8, 1, 'Map', 'map/map', 'fas fa-map-marked-alt', 1),
(9, 1, 'Role', 'WelcomeAdmin/role', 'fas fa-user-tie', 1),
(10, 2, 'GANTI PASSWORD', 'WelcomeUser/changepassword', 'fas fa-key', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_pengguna`
--
ALTER TABLE `user_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_pengguna`
--
ALTER TABLE `user_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
