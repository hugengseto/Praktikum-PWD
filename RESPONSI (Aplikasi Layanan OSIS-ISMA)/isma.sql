-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2022 pada 07.14
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `email`) VALUES
(1, 'seksi KOMINFO', 'isma_admin', 'admin', 'isma@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `gambar_berita`, `deskripsi_berita`, `tanggal_berita`) VALUES
(1, 'Musabaqoh Akhirussanah', 'akhirusanah.jpeg', 'Kegiatan musabaqoh akhirussanah yaitu kegitan yang dilaksanakan setelah selesai mengikuti ujian akhir sekolah, kegiatan yang memiliki banyak perlombaan yang dapat diikuti oleh semua kelas di pondok', '2021-06-20'),
(2, 'Upacara Pramuka', 'pembukaanpramuka1.jpg', 'kegiatan upacara pembukaan ekstrakulikuler pramuka yang diikuti seluruh santri LPI PON PES AS-SALAM RIMBO BUJANG', '2021-02-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_kegiatan`, `foto`) VALUES
(2, 'pramuka penegak', 'ahmadkurniawan.kurniawan-20190217-0001.jpg'),
(3, 'pramuka penegak', '6282230734566_status_d97560c76abb4c6cb4de4b58593d7c02.jpg'),
(4, 'Futsal', 'IMG-20181211-WA0008.jpg'),
(5, 'GCAA', 'IMG-20181213-WA0036.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_ktp`
--

CREATE TABLE `kode_ktp` (
  `kode_KTP` varchar(10) NOT NULL,
  `barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_pembayaran`
--

CREATE TABLE `kode_pembayaran` (
  `kode_bayar` varchar(10) NOT NULL,
  `bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginuser`
--

CREATE TABLE `loginuser` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIS` int(25) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `NoWA` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loginuser`
--

INSERT INTO `loginuser` (`id`, `username`, `password`, `email`, `nama`, `NIS`, `kelas`, `alamat`, `NoWA`) VALUES
(1, 'hugengseto', '1234', 'hugengseto@gmail.com', 'hugeng seto pranowo', 1900018073, 'XII IPA', 'jl. k.h ahmad dahlan, wirotho agung, rimbo bujang', '822990493'),
(2, 'maskur', '12345', 'masykur@gmail.com', 'masykur bafadal', 1900018011, 'XII IPS', 'jl. k.h ahmad dahlan, wirotho agung, rimbo bujang', '08112345039'),
(3, 'rianto', '123123', 'rianto@gmail.com', 'Muhammad Rianto', 1900018099, 'XII IPS', 'jl. k.h ahmad dahlan, wirotho agung, rimbo bujang', '0822930203'),
(4, 'ahmad', '12341234', 'ahmad@gmail.com', 'Ahmad Kurniawan', 1900018099, 'XII IPS', 'jalan perkembangan unit 12', '08593242333'),
(7, 'ryan', '5555', 'ryan@gmail.com', 'ryan zulkarnaen', 1900018000, 'XII IPS', 'jl. k.h ahmad dahlan, wirotho agung, rimbo bujang', '08223322332'),
(8, 'rizki', '1234', 'rizki@gamil.com', 'Alfi Rizki Khamami', 1900018023, 'XII IPA', 'jl. k.h ahmad dahlan, wirotho agung, rimbo bujang', '082217468');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum Bayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id`, `tanggal_pembelian`, `total_pembelian`, `status`) VALUES
(17, 0, '0000-00-00', 0, 'Lunas'),
(18, 1, '2021-07-06', 330000, 'Belum Bayar'),
(19, 0, '0000-00-00', 0, 'Lunas'),
(20, 7, '2021-07-06', 18000, 'Belum Bayar'),
(21, 2, '2021-07-06', 30000, 'Belum Bayar'),
(22, 8, '2021-07-10', 270000, 'Belum Bayar'),
(23, 1, '2021-07-10', 70000, 'Belum Bayar'),
(25, 1, '2021-07-10', 20000, 'Belum Bayar'),
(26, 1, '2021-07-10', 50000, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(3, 18, 2, 2),
(4, 18, 1, 1),
(5, 18, 7, 1),
(7, 20, 4, 1),
(8, 21, 6, 1),
(9, 22, 7, 1),
(10, 22, 5, 1),
(11, 23, 2, 1),
(13, 25, 3, 1),
(14, 26, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `namaBRG` varchar(100) NOT NULL,
  `hargaBRG` int(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `namaBRG`, `hargaBRG`, `stok`, `gambar`, `deskripsi`) VALUES
(1, 'peci', 50000, 200, 'peci.jpg', 'peci kain kece banget'),
(2, 'sarung', 70000, 300, 'sarung1.jpg', 'sarung hitam list putih, lembut, dingin dipakai'),
(3, 'buku SIDU', 20000, 200, 'barang1.jpg', 'buku tulis sinar dunia'),
(4, 'kacu', 18000, 200, 'kacu.jpg', 'kacu pramuka untuk penggalang dan penegak'),
(5, 'celana lapangan pramuka', 130000, 200, 'lapanganpramuka.jpeg', 'celana lapangan pramuka, cocok untuk kegiatan outdoor'),
(6, 'spidol', 30000, 100, 'spidol.jpg', 'spidol papan tulis putih, bisa dihapus (tidak permanen)'),
(7, 'jaket', 140000, 100, 'a43c9e70f5145adbac5d931b75269cfe.jpg', 'Jaket hitam maco');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kode_ktp`
--
ALTER TABLE `kode_ktp`
  ADD PRIMARY KEY (`kode_KTP`);

--
-- Indeks untuk tabel `kode_pembayaran`
--
ALTER TABLE `kode_pembayaran`
  ADD PRIMARY KEY (`kode_bayar`);

--
-- Indeks untuk tabel `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
