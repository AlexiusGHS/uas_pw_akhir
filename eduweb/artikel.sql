-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2024 pada 19.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_eduweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `jenis_kelas` varchar(50) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `komentar` varchar(300) NOT NULL,
  `isi_teks` varchar(300) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `gambar_artikel` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`jenis_kelas`, `judul`, `tanggal`, `komentar`, `isi_teks`, `id_artikel`, `gambar_artikel`) VALUES
('Online Course', 'Menguasai Dasar-Dasar Pemrograman: Panduan Pemula', '2024-08-07', 'Artikel ini memberikan pengantar mendalam untuk pemrograman, termasuk konsep dasar seperti variabel, tipe data, dan struktur kontrol. Sangat cocok untuk pemula yang ingin memulai perjalanan mereka dalam dunia pemrograman.', '18 Komentar', 67, '943-pexels-divinetechygirl-1181298.jpg'),
('Onsite Course', 'Menjelajahi Dunia Python: Bahasa Pemrograman yang Fleksibel', '2024-11-08', 'Python dikenal karena sintaksnya yang sederhana dan kemampuan serbagunanya. Artikel ini membahas fitur utama Python dan mengapa bahasa ini sangat populer di kalangan pengembang.', '25 Komentar', 68, '794-pexels-divinetechygirl-1181298.jpg'),
('Webinar', 'Mengenal Konsep Dasar Basis Data: Dari Relasional hingga NoSQL', '2024-08-15', 'Pelajari perbedaan antara basis data relasional dan NoSQL, serta kapan dan mengapa menggunakan masing-masing. Artikel ini menyediakan pemahaman dasar yang kuat tentang pengelolaan data.', '22 Komentar', 69, '88-pexels-divinetechygirl-1181354.jpg'),
('Online Course', 'Memulai dengan Pengembangan Web: HTML, CSS, dan JavaScript', '2024-08-22', 'Artikel ini memperkenalkan tiga pilar utama pengembangan web: HTML untuk struktur, CSS untuk desain, dan JavaScript untuk interaktivitas. Cocok untuk pemula yang ingin membangun situs web mereka sendiri.', '19 Komentar', 70, '52-pexels-pixabay-38519.jpg'),
('Onsite Course', 'Pemrograman Berorientasi Objek: Konsep dan Penerapan', '2024-08-23', 'Pelajari tentang pemrograman berorientasi objek (OOP) dan bagaimana konsep seperti enkapsulasi, pewarisan, dan polimorfisme dapat meningkatkan efisiensi kode Anda.', '34 Komentar', 71, '510-pexels-cottonbro-6804595.jpg'),
('Webinar', 'Dasar-Dasar Jaringan Komputer: Menghubungkan Dunia Digital', '2024-09-30', ' Artikel ini menjelaskan konsep-konsep dasar jaringan komputer, termasuk model OSI, protokol jaringan, dan topologi. Ideal untuk mereka yang ingin memahami bagaimana data berpindah melalui jaringan.', '17 Komentar', 72, '397-pexels-field-engineer-147254-442152.jpg'),
('Webinar', 'Pengantar Algoritma dan Struktur Data: Kunci Efisiensi Kode', '2024-10-15', 'Pelajari tentang berbagai algoritma dan struktur data yang dapat membantu Anda menulis kode yang lebih efisien dan efektif. Artikel ini membahas struktur data seperti array, linked list, dan tree.', '16 Komentar', 73, '107-pexels-divinetechygirl-1181263.jpg'),
('Online Course', 'Memahami Keamanan Cyber: Melindungi Data dan Sistem', '2024-10-15', 'Artikel ini memberikan wawasan tentang pentingnya keamanan cyber dan langkah-langkah dasar untuk melindungi sistem dan data Anda dari ancaman.', '26 Komentar', 74, '621-pexels-mikhail-nilov-6963944.jpg'),
('Onsite Course', 'Pengenalan ke Pengembangan Aplikasi Mobile: iOS dan Android', '2024-10-23', ' Pelajari perbedaan antara pengembangan aplikasi untuk iOS dan Android serta alat dan bahasa pemrograman yang digunakan. Artikel ini cocok untuk mereka yang tertarik dalam pengembangan aplikasi mobile.', '33 Komentar', 75, '497-pexels-walls-io-440716388-19387204.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
