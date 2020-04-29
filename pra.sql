-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2020 pada 07.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ytube` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `slug`, `konten`, `url`, `ytube`, `foto`, `id_user`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 'TXT (투모로우바이투게더)', 'txt', '<p><strong>Tomorrow X Together</strong>, adalah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Grup_vokal_pria\" title=\"Grup vokal pria\">grup vokal pria</a>&nbsp;Korea Selatan yang dibentuk oleh&nbsp;<a href=\"https://id.wikipedia.org/wiki/Big_Hit_Entertainment\" title=\"Big Hit Entertainment\">Big Hit Entertainment</a>. Grup ini terdiri dari lima anggota: Yeonjun, Soobin, Beomgyu, Taehyun, dan Huening Kai. Mengikuti serial dari&nbsp;<em>teaser</em>&nbsp;promosi yang dirilis pada Januari 2019, mereka debut pada 4 Maret 2019 dengan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Album_mini\" title=\"Album mini\">album mini</a>&nbsp;<em><a href=\"https://id.wikipedia.org/wiki/The_Dream_Chapter:_Star\" title=\"The Dream Chapter: Star\">The Dream Chapter: Star</a></em>.</p>\r\n\r\n<h3><strong>Pre-debut</strong></h3>\r\n\r\n<p>Rencana&nbsp;<em>boy group</em>&nbsp;kedua dari Big Hit Entertainment diumumkan oleh pendiri Bang Si-hyuk pada awal 2017 dan tanggal untuk awal 2019 ditetapkan pada November 2018. TXT secara resmi terungkap pada 10 Januari 2019. Selama sepuluh hari berikutnya, YouTube video yang menggambarkan setiap anggota, dijuluki&nbsp;<em>&quot;Introduction Film&quot;</em>, dirilis.</p>\r\n\r\n<h3><strong>2019: Debut dan&nbsp;The Dream Chapter: Magic</strong></h3>\r\n\r\n<p>Siaran debut untuk grup itu ditayangkan di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Mnet\" title=\"Mnet\">Mnet</a>&nbsp;dan halaman YouTube-nya, dan diumumkan bersama dengan EP debut band,&nbsp;<a href=\"https://id.wikipedia.org/wiki/The_Dream_Chapter:_Star\" title=\"The Dream Chapter: Star\">The Dream Chapter: Star</a>. Sebuah showcase debut diadakan di Yes24 Live Hall pada 5 Maret. Setelah rilis EP, video musik dari single debut mereka, &quot;Crown&quot; memecahkan rekor untuk video musik debut K-Pop yang paling banyak dilihat dalam waktu 24 jam untuk sebuah boy group.</p>\r\n\r\n<p>Seminggu setelah rilis album mereka, grup ini debut di No. 1 di&nbsp;<em>Billboard Emerging Artists</em>,&nbsp;<em>World Albums</em>, dan&nbsp;<em>World Digital Song Sales</em>&nbsp;chart dan debut di No. 140 di chart&nbsp;<em><a href=\"https://id.wikipedia.org/wiki/Billboard\" title=\"Billboard\">Billboard</a></em>&nbsp;200 untuk pertama kalinya, menjadikan mereka sebagai Grup K-Pop tercepat yang muncul di tangga lagu dan album debut charting tertinggi oleh grup K-pop pria.</p>\r\n\r\n<p>Pada tanggal 8 Agustus 2019, diumumkan oleh&nbsp;<strong><a href=\"https://id.wikipedia.org/wiki/Big_Hit_Entertainment\" title=\"Big Hit Entertainment\">Big Hit Entertainment</a></strong>&nbsp;bahwa mereka awalnya telah merencanakan untuk merilis album baru pada bulan Agustus tetapi karena anggota&nbsp;<strong>Soobin</strong>&nbsp;didiagnosis dengan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Konjungtivitis\" title=\"Konjungtivitis\">konjungtivitis</a>&nbsp;infeksi dan&nbsp;<strong>Yeonjun</strong>&nbsp;terkena sakit punggung, kemudian ditunda hingga September. Pada 20 Agustus,&nbsp;<strong><a href=\"https://id.wikipedia.org/wiki/Big_Hit_Entertainment\" title=\"Big Hit Entertainment\">Big Hit Entertainment</a></strong>&nbsp;mengungkapkan bahwa anggota&nbsp;<strong>Taehyun</strong>&nbsp;dan&nbsp;<strong>Huening Kai</strong>&nbsp;juga telah didiagnosis menderita&nbsp;<a href=\"https://id.wikipedia.org/wiki/Konjungtivitis\" title=\"Konjungtivitis\">konjungtivitis</a>, sehingga penjadwalan ulang album &quot;menjadi tidak dapat dihindari&quot;, dengan alasan perubahan tanggal rilis dari September hingga Oktober.</p>\r\n\r\n<p>Pada 21 Oktober 2019, TXT merilis album studio pertama mereka, berjudul,&nbsp;<a href=\"https://id.wikipedia.org/w/index.php?title=The_Dream_Chapter:_Magic&amp;action=edit&amp;redlink=1\" title=\"The Dream Chapter: Magic (halaman belum tersedia)\">The Dream Chapter: Magic</a>.</p>\r\n\r\n<p>Pada 15 Januari 2020, TXT akan membuat debut Jepang mereka dengan single &quot;Magic Hour&quot;.</p>', 'https://www.youtube.com/embed/8VWOf6c-DgE', 'https://www.youtube.com/channel/UCtiObj3CsEAdNU6ZPWDsddQ', 'x7GHUn_TXT.png', 1, 1, '2020-02-26 21:12:36', '2020-02-26 21:13:48'),
(2, 'CIX (씨아이엑스)', 'cix', '<p><strong>CIX (Complete In X) (</strong><em>hangeul</em><strong>:씨아이엑스)</strong>&nbsp;atau sebelumnya dikenal dengan nama&nbsp;<strong>C9BOYZ (씨구보이즈)</strong>&nbsp;adalah sebuah&nbsp;<em>boy group</em>&nbsp;asal&nbsp;<a href=\"https://id.wikipedia.org/wiki/Korea_Selatan\" title=\"Korea Selatan\">Korea Selatan</a>&nbsp;yang berada di bawah naungan agensi&nbsp;<a href=\"https://id.wikipedia.org/w/index.php?title=C9_Entertainment&amp;action=edit&amp;redlink=1\" title=\"C9 Entertainment (halaman belum tersedia)\">C9 Entertainment</a>. Grup tersebut debut pada tanggal 23 Juli 2019 dengan membawakan lagu berjudul &#39;Movie Star&#39; yang merupakan&nbsp;<em>title track</em>&nbsp;pada&nbsp;<em>mini-album</em>&nbsp;pertama mereka yaitu &#39;Hello Stranger&#39;.</p>', 'https://www.youtube.com/embed/xHx-kNjEYZM', 'https://www.youtube.com/channel/UCuaslC77K-NmCy8Xwk7x0hA', 'GYqYoV_CIX.jpg', 1, 1, '2020-02-26 21:48:58', '2020-02-26 21:48:58'),
(3, 'AB6IX', 'ab6ix', '<p><strong>AB6IX</strong>&nbsp;(에이비식스; dikenal pada masa pra-debut sebagai&nbsp;<strong>BRANDNEWBOYS</strong>&nbsp;(브랜뉴보이즈)) adalah sebuah grup vokal Korea Selatan lima anggota yang berada di bawah naungan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Brand_New_Music\" title=\"Brand New Music\">Brand New Music</a>. Grup tersebut resmi debut pada 22 Mei 2019 dengan album mini perdana&nbsp;<em>B:Complete</em>.</p>', 'https://www.youtube.com/embed/jltvDpmfdyI', 'https://www.youtube.com/channel/UCwytna6i1rFCt13a3Qvuk-A', 'A7u0rY_AB6IX.jpg', 1, 1, '2020-02-26 21:52:59', '2020-02-26 21:52:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_tag`
--

CREATE TABLE `artikel_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_artikel` bigint(20) UNSIGNED NOT NULL,
  `id_tag` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikel_tag`
--

INSERT INTO `artikel_tag` (`id`, `id_artikel`, `id_tag`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 2, 9, NULL, NULL),
(5, 2, 10, NULL, NULL),
(6, 2, 11, NULL, NULL),
(7, 3, 12, NULL, NULL),
(8, 3, 13, NULL, NULL),
(9, 3, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `budayas`
--

CREATE TABLE `budayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `budayas`
--

INSERT INTO `budayas` (`id`, `judul`, `slug`, `konten`, `foto`, `url`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Seungmu', 'seungmu', '<p>Tarian Seungmu ini awalnya dilakukan oleh para biksu. Sejak tahun 1969,Tarian Seungmu masuk dalam Warisan Budaya Non-bendawi Korea Selatan. Ada 8 buah repertoar dalam tarian ini, yaitu&nbsp;<em>yeombul, dodeuri, jajin taryeong, dwit gutgeori, gutgeori, gujeong nori</em>&nbsp;serta&nbsp;<em>saesanjo</em>.</p>\r\n\r\n<p>Seungmu adalah salah satu tarian paling terkenal di Korea dengan gerakan yang rumit dan indah dengan selendang putih dan kerudung putri sang penari, ditambah gemulainya gerakan tangan. Uniknya, tarian tersebut punya ekspresi berbeda di setiap gerakan.</p>', 'IA5LkV_Seungmu.jpg', 'https://www.youtube.com/embed/uafH896RgE8', 2, '2020-03-10 03:51:41', '2020-03-10 03:51:41'),
(2, 'Seung Jeonmu', 'seung-jeonmu', '<p>Seung Jeonmu adalah salah satu dari indahnya macam-macam tarian Korea Selatan, yang mana penarinya bermain pedang&nbsp; ala prajurit. Tarian Seung Jeonmu ditujukan untuk memberi penghormatan pada dewa bumi dan telah ada sejak 2000 tahun lalu. Jaman dulu, tarian tersebut dilakukan bangsa Korea sebelum berperang dengan harapan mereka bisa memenangkannya</p>\r\n\r\n<p>Tarian Seung Jeonmu terdiri dari tabuhan drum dan juga tari pedang. Nah, kenapa tarian ini jadi terkenal? Ini karena jenderal Admiral Yi Shun Shin di saat masa Joseon meminta agar prajurit melakukan tarian ini ketika berperang.</p>', 'zr8ADS_SeungJeonmu.jpg', 'https://www.youtube.com/embed/PV29oGt_Gko', 2, '2020-03-10 03:53:03', '2020-03-10 03:53:48'),
(3, 'Cheoyongmu', 'cheoyongmu', '<p>Tarian Cheoyongmu dipentaskan di istana. Tarian ini menggunakan topeng, jubah warna-warni khas Korea dan selendang putih. Tarian tersebut dilakukan sebagai upaya menolak kesialan dan meminta berkah kepada dewa. Menurut sejarah yang ditulis, Tarian Cheoyongmu merupakan tarian yang berasal dari kerajaan Silla.</p>', 'wxjcaO_Cheoyongmu.jpg', 'https://www.youtube.com/embed/hz38uVwbuZc', 2, '2020-03-10 03:55:09', '2020-03-10 03:55:09'),
(4, 'Hallyangmu', 'hallyangmu', '<p>Selanjutnya adalah tarian Hallyangmu. Serius kalau lihat tarian ini selalu inget drama kolosal. Jadi inget opa-opa.</p>\r\n\r\n<p>Tarian ini menceritakan kehidupan kerajaan Joseon. Dalam tarian tersebut diceritakan sekumpulan pemuda yang kerjanya hanya malas-malasan. Mereka hanya menghabiskan waktu dengan foya-foya dan bersenang-senang. Hallyangmu ini menurut sejarah berasal dari wilayah Dongrae yang terletak di propinsi Busan. Penarinya memakai&nbsp;<em>hanbok yangban</em>&nbsp;lengkap dengan aksesorisnya dari topi sampai kipas.</p>', 'ueQAO0_Hallyangmu.jpg', 'https://www.youtube.com/embed/a7gel_r7tQk', 2, '2020-03-10 04:10:12', '2020-03-10 04:10:12'),
(5, 'Buchaechum', 'buchaechum', '<p>Mirip dengan Hallyangmu, tarian Buchaaechum juga menggunakan kipas. Hanya saja tarian ini dimainkan oleh perempuan. Tarian kipas ini dimainkan sekelompok wanita yang memakai hanbok berwarna kontras dengan membawa kipas cantik.</p>\r\n\r\n<p>Sama seperti tarian yang lain, tarian Buchaaechum digunakan sebagai sarana pemujaan dewa. Kalau sekarang, tarian Buchaaechum sering dipentaskan diberbagai acara, mulai dari festival, acara kenegaraan sampai dengan acara tahunan.</p>\r\n\r\n<p>Keunikan tari Buchaaechum yaitu formasi melingkar yang menggunakan kipas dan melakukan gerakan gelombang. Gerakannya lembut dan anggun.</p>', 'okyOqd_Buchaechum.jpg', 'https://www.youtube.com/embed/GNH9Exx05JI', 2, '2020-03-10 04:11:28', '2020-03-10 04:11:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double NOT NULL,
  `pemain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `films`
--

INSERT INTO `films` (`id`, `judul`, `slug`, `rating`, `pemain`, `url`, `konten`, `foto`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Welcome (2020)', 'welcome-2020', 7.8, 'Kim Myung-so, Shin Ye-eun, dan Seo Ji-hoon.', 'https://www.youtube.com/embed/lTEc23uzqeQ', '<p>Drama Korea terbaru &#39;Welcome&#39; dijadwalkan tayang pada 25 Maret 2020 yang dibintangi oleh Kim Myung-so, Shin Ye-eun, dan Seo Ji-hoon.</p>\r\n\r\n<p>Serial drama ini diangkat dari webtoon berjudul sama karya &#39;Ko Ah-ra&#39;.</p>\r\n\r\n<p>Welcome bercerita tentang seorang wanita di usia pertengahan 20-an bernama Kim Sol-ah (diperankan Kim Myung-so).</p>\r\n\r\n<p>Ia bekerja di sebuah perusahaan kreatif di bidang desain grafis. Kim Sol-ah bermimpi menjadi seorang penulis komik web.</p>\r\n\r\n<p>Suatu hari, Sol-ah membawa pulang seekor kucing bernama Hong-jo (Shin Ye-eun). Tanpa disadarinya, Hong-jo bukanlah kucing biasa.</p>\r\n\r\n<p>Hong-jo memiliki kemampuan untuk berubah bentuk menjadi manusia.&nbsp;</p>\r\n\r\n<p>Semenjak tinggal bersama kucing Hong-jo, membuat Sol-ah terlibat dengan kejadian-kejadian tidak terprediksi.</p>', 'PV0njh_welcome1.jpg', 2, '2020-03-04 06:55:10', '2020-03-04 06:55:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Boy Band', 'boy-band', '2020-02-26 21:07:40', '2020-02-26 21:07:40'),
(2, 'Band', 'band', '2020-02-26 21:07:48', '2020-02-26 21:07:48'),
(3, 'Girl Band', 'girl-band', '2020-02-26 21:07:56', '2020-02-26 21:07:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_25_022139_create_kategoris_table', 1),
(4, '2019_06_25_034337_create_artikels_table', 1),
(5, '2019_06_25_034338_create_tags_table', 1),
(6, '2020_01_21_072354_create_restorans_table', 1),
(7, '2020_01_23_064037_create_budayas_table', 1),
(8, '2020_02_25_071329_create_films_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `restorans`
--

CREATE TABLE `restorans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `restorans`
--

INSERT INTO `restorans` (`id`, `nama`, `slug`, `konten`, `alamat`, `url`, `foto`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Mujigae', 'mujigae', '<p><strong>Mujigae </strong>merupakan restaurant yang menyuguhkan makanan Korea. Mujigae artinya pelangi, Resto ini asli dari Indonesia, dengan pendirinya yaitu Bapak Yunus bersama isterinya, dan sekarang dipegang oleh anaknya; Bapak Alvin. Mujigae berdiri sejak Maret 2013, pertama berdiri di Ciwalk Bandung. Konsep resto yang diusung sebenar berbau K-POP dan diperutukan untuk remaja remaja. Namun... seiring berjalannya waktu ternyata Mujigae menjadi resto keluarga, banyak segerombolan keluarga yang makan di Mujigae.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><sup><strong>Mujigae </strong>sudah memiliki 17 cabang lho dalam kurun waktu 4 tahun ini. Cabangnya berada di Bandung, Jakarta, Tangerang, Bogor, Bekasi dan Depok.</sup></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><sup>Akhir tahun ini kemugkinan Mujigae pun akan membuka sayapnya ke daerah Cibinong! Yeheeee..</sup></span></p>', 'Festival Citylink, Bandung City, Indonesia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15882.715108064802!2d107.57604566119477!3d-6.931510987079121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9071c51440f%3A0xffeaacf549a38d1f!2sMujigae%20Festival%20Citylink!5e0!3m2!1sid!2sid!4v1582773564379!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '6H43Od_rG5Bhh_Mujigae.JPG', 2, '2020-02-26 21:22:19', '2020-04-28 22:43:25'),
(2, 'Bornga', 'bornga', '<p>Seiring dengan masuknya demam Korea ke Indonesia, kini sudah banyak restoran Korea yang menyajikan makanan khasnya. Restoran Korea ini selalu ramai dikunjungi oleh pengunjung yang kebanyakan adalah penggemar Korean Pop (K-Pop). Di Serpong, ada sekitar puluhan restoran Korea yang tersebar di beberapa wilayah Serpong. Mulai dari restoran yang menyajikan makanan berat hingga restoran yang hanya menyajikan dessert khas Korea.</p>\r\n\r\n<p>Salah satu restoran Korea yang ada di Serpong ini adalah Bornga Korean Restaurant. Restoran Korea ini sudah ada sejak tahun 2015 lalu, banyak orang yang datang ke sini untuk menyantap makanan khas Korea. Restoran Korea ini menyajikan menu halal dan non-halal yang bisa kalian pilih, yaitu ada daging sapi dan daging babi. Jadi, kalian tidak perlu khawatir jika makan di restoran ini. Bornga juga menyajikan pilihan sayur segar dan daging yang sangat berkualitas.</p>\r\n\r\n<p>Harga yang ditawarkan juga sebanding dengan rasanya yang nikmat dan lezat banget. Menu makanan yang paling recommended di Bornga adalah Woo Samgyeop dan Masinchang Samgyeopsal. Hal yang paling menarik adalah kalian menyantap daging tersebut dengan dibungkus di dalam selada, lalu ditambah dengan kimchi, japchae, dan lainnya sesuai dengan keinginan kalian. Daging-daging tersebut disajikan dengan bawang bombay dan beberapa saus yang pastinya menambah kenikmatan dan kelezatan di dalam rasanya.</p>\r\n\r\n<p>Kalian pasti bakal suka banget dengan makanan Korea yang ada di sini. Selain itu, kalian juga bisa mencoba menu lain, seperti Chadol Doenjang-jjigae. Sup dengan isian daging ini juga bakal menambah selera makan kalian. Nah, untuk minumannya sendiri, kalian bisa memilih Soju atau Makgeolli. Makgeolli adalah salah satu minuman favorit di Born Ga, karena mereka meracik sendiri minuman ini. Kalian juga bisa memilih Diet Coke, Lemon Tea, dan Lemon Squash menjadi pendamping pas untuk makanan yang disantap.</p>\r\n\r\n<p>Bornga berada di Jalan Gading Serpong Boulevard, Ruko 1B Blok BA3 No. 24-26, Pakulonan Barat, Kelapa Dua, Tangerang, Banten. Kalian jangan lupa ya mencicipi makanan khas Korea yang satu ini!</p>', 'Jl. Dr. Rajiman No.5, Pasir Kaliki, Kec. Cicendo, Bandung, Jawa Barat 40171', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.890118150107!2d107.59649835031273!3d-6.9037418949870855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e641e9792bb7%3A0xb19cf52702a4fffe!2sBornga!5e0!3m2!1sid!2sid!4v1582788545882!5m2!1sid!2sid', 'Hk0toZ_Bornga.jpg', 1, '2020-02-27 00:30:53', '2020-02-27 00:30:53'),
(3, 'Chingu Cafe', 'chingu-cafe', '<p>Belakangan ini Korea memiliki banyak sekali penggemar di Indonesia. Mulai dari musik, film, sampai makanan Korea pun laris menjadi buruan food hunter. Makanya sekarang nggak susah&nbsp;untuk mencari tempat yang menjual makanan Korea, termasuk di Bandung. Ada yang franchise langsung dari Korea, ada juga merk lokal yang menjual makanan Korea.</p>\r\n\r\n<p>Nah, Kalau di Bandung salah satu Korean Food cafe yang lagi ramai didatangi anak muda adalah Chingu Cafe. Targetnya memang mahasiswa, jadi harganya juga ramah banget di kantong mahasiswa. Menu paling mahalnya 29,9ribuan. Nggak hanya murah, konsepnya juga menarik. Begitu masuk kita seperti nggak lagi&nbsp;di Bandung. Korea banget desainnya. Dari tempat menunggunya yang disusun seperti halte, musik dan video klip yang diputar lagu-lagu Korea yang lagi hits, sampai bentuk lesehan ala Korea juga ada disini.</p>\r\n\r\n<p>Makanan&nbsp;Korean yg dijual disini halal semua sehingga kaum muslim tidak perlu was-was ketika makan.&nbsp;Katanya, owner dari Chingu Cafe memang pernah tinggal di Korea dan resep makanan di Chingu didapat selama owner tinggal disana. Menunya cukup lengkap, dari Tteobokki, Ramyun, Hotteok, sampai Jap Chaenge juga ada.</p>', 'Jl. Buah Batu No.2187', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5744839491163!2d107.624419750313!3d-6.941348794960328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8639a8a185f%3A0xba476f9c4e290c43!2sChingu%20Cafe!5e0!3m2!1sid!2sid!4v1582788837693!5m2!1sid!2sid', 'G9VFxC_3wGeBe_chingu.jpg', 1, '2020-02-27 00:37:00', '2020-02-27 00:37:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `nama_tag`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'TXT', 'txt', '2020-02-26 21:04:33', '2020-02-26 21:04:33'),
(2, 'MOA', 'moa', '2020-02-26 21:04:38', '2020-02-26 21:04:38'),
(3, 'Big Hit', 'big-hit', '2020-02-26 21:04:45', '2020-02-26 21:04:45'),
(4, 'SM', 'sm', '2020-02-26 21:04:49', '2020-02-26 21:04:49'),
(5, 'YG', 'yg', '2020-02-26 21:04:55', '2020-02-26 21:04:55'),
(6, 'JYP', 'jyp', '2020-02-26 21:05:00', '2020-02-26 21:05:00'),
(7, 'Star Ship', 'star-ship', '2020-02-26 21:05:08', '2020-02-26 21:05:08'),
(8, 'S+ONE', 'sone', '2020-02-26 21:05:16', '2020-02-26 21:05:16'),
(9, 'CIX', 'cix', '2020-02-26 21:46:00', '2020-02-26 21:46:00'),
(10, 'C9', 'c9', '2020-02-26 21:46:08', '2020-02-26 21:46:08'),
(11, 'FIX', 'fix', '2020-02-26 21:46:14', '2020-02-26 21:46:14'),
(12, 'Abnew', 'abnew', '2020-02-26 21:50:22', '2020-02-26 21:50:22'),
(13, 'AB6IX', 'ab6ix', '2020-02-26 21:50:31', '2020-02-26 21:50:31'),
(14, 'BRANDNEWBOYS', 'brandnewboys', '2020-02-26 21:50:36', '2020-02-26 21:50:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Albi', 'Albi@gmail.com', NULL, '$2y$10$Iviqjc1mBIgnHqhrqEkZI.PuNfe4sZiHeoBhVudkl0WSg/50l5AlC', NULL, '2020-02-26 21:02:49', '2020-02-26 21:02:49'),
(2, 'Nur Yachya', 'Nuryachya@gmail.com', NULL, '$2y$10$CVkyJsBoOk0ISFHAXZjXqusFa88/TKe4LXlgCZ1XYOmcUPGrU5yEK', NULL, '2020-02-26 21:03:06', '2020-02-26 21:03:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_id_user_foreign` (`id_user`),
  ADD KEY `artikels_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `artikel_tag`
--
ALTER TABLE `artikel_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_tag_id_artikel_foreign` (`id_artikel`),
  ADD KEY `artikel_tag_id_tag_foreign` (`id_tag`);

--
-- Indeks untuk tabel `budayas`
--
ALTER TABLE `budayas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `budayas_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `films_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `restorans`
--
ALTER TABLE `restorans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restorans_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artikel_tag`
--
ALTER TABLE `artikel_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `budayas`
--
ALTER TABLE `budayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `restorans`
--
ALTER TABLE `restorans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `artikels_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `artikel_tag`
--
ALTER TABLE `artikel_tag`
  ADD CONSTRAINT `artikel_tag_id_artikel_foreign` FOREIGN KEY (`id_artikel`) REFERENCES `artikels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `artikel_tag_id_tag_foreign` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `budayas`
--
ALTER TABLE `budayas`
  ADD CONSTRAINT `budayas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `restorans`
--
ALTER TABLE `restorans`
  ADD CONSTRAINT `restorans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
