-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2024 pada 15.38
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amsiakadpt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi_mahasiswas`
--

CREATE TABLE `absensi_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jadkul_code` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `absen_type` varchar(255) NOT NULL DEFAULT 'A',
  `absen_proof` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `absen_date` date NOT NULL,
  `absen_time` time NOT NULL,
  `absen_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `balances`
--

CREATE TABLE `balances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0,
  `value` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dsn_stat` int(11) NOT NULL DEFAULT 0,
  `dsn_nidn` varchar(255) NOT NULL,
  `dsn_name` varchar(255) NOT NULL,
  `dsn_code` varchar(255) NOT NULL,
  `dsn_image` varchar(255) NOT NULL DEFAULT 'default/default-profile.jpg',
  `dsn_birthplace` varchar(255) DEFAULT NULL,
  `dsn_birthdate` date DEFAULT NULL,
  `dsn_gend` varchar(255) DEFAULT NULL,
  `dsn_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dsn_mail` varchar(255) NOT NULL,
  `dsn_phone` varchar(255) NOT NULL,
  `verify_token` varchar(255) DEFAULT NULL,
  `token_created_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosens`
--

INSERT INTO `dosens` (`id`, `dsn_stat`, `dsn_nidn`, `dsn_name`, `dsn_code`, `dsn_image`, `dsn_birthplace`, `dsn_birthdate`, `dsn_gend`, `dsn_user`, `password`, `dsn_mail`, `dsn_phone`, `verify_token`, `token_created_at`, `created_at`, `updated_at`) VALUES
(1, 1, '8404880449', 'Dosen A', '2zbp47', 'default/default-profile.jpg', NULL, NULL, 'L', 'dosen.a', '$2y$12$wr/HTZx.GB48UvGN8LJWeuO4Vtm9iatheyj6hZxUBUlxCKEaILj0e', 'dosen.a@example.com', '080012345671', NULL, NULL, '2024-07-02 07:13:48', '2024-07-02 07:13:48'),
(2, 1, '4015077164', 'Dosen B', 'yCWxm1', 'default/default-profile.jpg', NULL, NULL, 'P', 'dosen.b', '$2y$12$5lN2UZuK8vBKHtNuUYCeCOEOakisujjvaklAd1Y8OlG8abcXP0IUm', 'dosen.b@example.com', '080012345672', NULL, NULL, '2024-07-02 07:13:49', '2024-07-02 07:13:49'),
(3, 1, '9552972412', 'Dosen C', 'tTwge8', 'default/default-profile.jpg', NULL, NULL, 'P', 'dosen.c', '$2y$12$cUvzjcZCKBZPSIvUdu3vcOy5J9IRMHDZRar1OBa/GlkwUYeOC/rkG', 'dosen.c@example.com', '080012345673', NULL, NULL, '2024-07-02 07:13:49', '2024-07-02 07:13:49'),
(4, 1, '9094721505', 'Dosen D', 'poz3Ow', 'default/default-profile.jpg', NULL, NULL, 'P', 'dosen.d', '$2y$12$2Pm8lL2IRbwrzLM.6D5aPeGv9xaT5kcI67PmpDnguVhaZg8GFuxEi', 'dosen.d@example.com', '080012345674', NULL, NULL, '2024-07-02 07:13:49', '2024-07-02 07:13:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `head_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id`, `name`, `code`, `head_id`, `created_at`, `updated_at`) VALUES
(1, 'Fakultas Ilmu Komputer', 'FIK', '1', '2024-07-02 07:13:51', '2024-07-02 07:13:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `f_b_perkuliahans`
--

CREATE TABLE `f_b_perkuliahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fb_users_code` varchar(255) NOT NULL,
  `fb_jakul_code` varchar(255) NOT NULL,
  `fb_code` varchar(255) NOT NULL,
  `fb_score` enum('Tidak Puas','Cukup Puas','Sangat Puas') NOT NULL,
  `fb_reason` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedungs`
--

CREATE TABLE `gedungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gedungs`
--

INSERT INTO `gedungs` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Area Luar Kampus', 'ALK', '2024-07-02 07:13:53', '2024-07-02 07:13:53'),
(2, 'Area Sekitar Gedung', 'ASG', '2024-07-02 07:13:54', '2024-07-02 07:13:54'),
(3, 'Gedung A', 'GDA', '2024-07-02 07:13:54', '2024-07-02 07:13:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_studis`
--

CREATE TABLE `hasil_studis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `taka_id` int(11) NOT NULL,
  `score_absen` int(11) NOT NULL DEFAULT 0,
  `score_tugas` int(11) NOT NULL DEFAULT 0,
  `score_uas` int(11) NOT NULL DEFAULT 0,
  `score_uts` int(11) NOT NULL DEFAULT 0,
  `max_absen` int(11) NOT NULL DEFAULT 0,
  `max_tugas` int(11) NOT NULL DEFAULT 0,
  `smt_id` int(11) NOT NULL,
  `nilai_ips` int(11) NOT NULL DEFAULT 0,
  `nilai_ipk` int(11) NOT NULL DEFAULT 0,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_tagihans`
--

CREATE TABLE `history_tagihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `stat` int(11) NOT NULL DEFAULT 0,
  `tagihan_code` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `snap_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kuliahs`
--

CREATE TABLE `jadwal_kuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `makul_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `pert_id` int(11) NOT NULL,
  `meth_id` int(11) NOT NULL,
  `days_id` int(11) NOT NULL,
  `bsks` int(11) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `ended` time NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_kuliahs`
--

INSERT INTO `jadwal_kuliahs` (`id`, `makul_id`, `kelas_id`, `dosen_id`, `ruang_id`, `pert_id`, `meth_id`, `days_id`, `bsks`, `date`, `start`, `ended`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 3, '2024-07-02', '01:00:00', '23:00:00', 'JGQOMti4', '2024-07-02 07:13:53', '2024-07-02 07:13:53'),
(2, 1, 2, 1, 1, 1, 1, 1, 3, '2024-07-02', '01:00:00', '23:00:00', 'L26snwTa', '2024-07-02 07:13:53', '2024-07-02 07:13:53'),
(3, 1, 2, 1, 1, 2, 1, 1, 3, '2024-07-02', '01:00:00', '23:00:00', 'gcZ38b39', '2024-07-02 07:13:53', '2024-07-02 07:13:53'),
(4, 1, 1, 1, 1, 2, 1, 1, 3, '2024-07-02', '01:00:00', '23:00:00', 'Zk8HHzM9', '2024-07-02 07:13:53', '2024-07-02 07:13:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taka_id` int(11) NOT NULL,
  `pstudi_id` int(11) NOT NULL,
  `proku_id` int(11) DEFAULT NULL,
  `dosen_id` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `taka_id`, `pstudi_id`, `proku_id`, `dosen_id`, `capacity`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 32, 'TI-2023-RP-1A', 'TI-2023-RP-1A', '2024-07-02 07:13:53', '2024-07-02 07:13:53'),
(2, 1, 1, 1, 2, 32, 'TI-2023-RP-1B', 'TI-2023-RP-1B', '2024-07-02 07:13:53', '2024-07-02 07:13:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotak_sarans`
--

CREATE TABLE `kotak_sarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulums`
--

CREATE TABLE `kurikulums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `year_start` year(4) NOT NULL,
  `year_ended` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kurikulums`
--

INSERT INTO `kurikulums` (`id`, `name`, `code`, `desc`, `year_start`, `year_ended`, `created_at`, `updated_at`) VALUES
(1, 'Kurikulum 2020', 'K20', 'Kurikulum 2020 adalah kurikulum dirancang 25 Tahun', 2019, 2024, '2024-07-02 07:13:52', '2024-07-02 07:13:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taka_id` int(11) NOT NULL DEFAULT 0,
  `years_id` int(11) NOT NULL DEFAULT 0,
  `class_id` int(11) NOT NULL DEFAULT 0,
  `mhs_stat` int(11) NOT NULL DEFAULT 0,
  `mhs_nim` varchar(255) NOT NULL,
  `mhs_name` varchar(255) NOT NULL,
  `mhs_code` varchar(255) NOT NULL,
  `mhs_image` varchar(255) NOT NULL DEFAULT 'default/default-profile.jpg',
  `mhs_birthplace` varchar(255) DEFAULT NULL,
  `mhs_birthdate` date DEFAULT NULL,
  `mhs_gend` varchar(255) DEFAULT NULL,
  `mhs_reli` varchar(255) DEFAULT NULL,
  `mhs_addr_domisili` varchar(255) DEFAULT NULL,
  `mhs_addr_kelurahan` varchar(255) DEFAULT NULL,
  `mhs_addr_kecamatan` varchar(255) DEFAULT NULL,
  `mhs_addr_kota` varchar(255) DEFAULT NULL,
  `mhs_addr_provinsi` varchar(255) DEFAULT NULL,
  `mhs_parent_mother` varchar(255) DEFAULT NULL,
  `mhs_parent_father` varchar(255) DEFAULT NULL,
  `mhs_parent_mother_phone` varchar(255) DEFAULT NULL,
  `mhs_parent_father_phone` varchar(255) DEFAULT NULL,
  `mhs_wali_name` varchar(255) DEFAULT NULL,
  `mhs_wali_phone` varchar(255) DEFAULT NULL,
  `mhs_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mhs_mail` varchar(255) NOT NULL,
  `mhs_phone` varchar(255) NOT NULL,
  `verify_token` varchar(255) DEFAULT NULL,
  `token_created_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `taka_id`, `years_id`, `class_id`, `mhs_stat`, `mhs_nim`, `mhs_name`, `mhs_code`, `mhs_image`, `mhs_birthplace`, `mhs_birthdate`, `mhs_gend`, `mhs_reli`, `mhs_addr_domisili`, `mhs_addr_kelurahan`, `mhs_addr_kecamatan`, `mhs_addr_kota`, `mhs_addr_provinsi`, `mhs_parent_mother`, `mhs_parent_father`, `mhs_parent_mother_phone`, `mhs_parent_father_phone`, `mhs_wali_name`, `mhs_wali_phone`, `mhs_user`, `password`, `mhs_mail`, `mhs_phone`, `verify_token`, `token_created_at`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 1, '9923890658', 'Mahasiswa A', 'Jpoie4', 'default/default-profile.jpg', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mahasiswa.a', '$2y$12$IqWn/kMYCYh4Ffy02N3wPutlg9Udekvhl3Puc98jgRBK3unNkos4C', 'mahasiswa.a@example.com', '080012345670', NULL, NULL, '2024-07-02 07:13:50', '2024-07-02 07:13:50'),
(2, 1, 0, 1, 1, '2567952160', 'Mahasiswa B', 'bVUGgB', 'default/default-profile.jpg', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mahasiswa.b', '$2y$12$y/kMU4f9WicBPytcj0nRi.O3.WyYSe/KuBJvY4ynk4p59sQSfpXm.', 'mahasiswa.b@example.com', '080012345671', NULL, NULL, '2024-07-02 07:13:50', '2024-07-02 07:13:50'),
(3, 2, 0, 2, 1, '0871986850', 'Mahasiswa C', 'Q3ZU4r', 'default/default-profile.jpg', NULL, NULL, 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mahasiswa.c', '$2y$12$qIWlf5Zlf5dw4ERm1J3ur.jRi8UVAiL1Anzwj3WcwQ/4iZTobQoKy', 'mahasiswa.c@example.com', '080012345672', NULL, NULL, '2024-07-02 07:13:50', '2024-07-02 07:13:50'),
(4, 2, 0, 2, 1, '5124127907', 'Mahasiswa D', 'dx8QN4', 'default/default-profile.jpg', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mahasiswa.d', '$2y$12$5CyZxxc48I4Rtjm7rKzXQ.QCSJvwlUplPVNOoPYhEZ1U/gUpEqnpS', 'mahasiswa.d@example.com', '080012345673', NULL, NULL, '2024-07-02 07:13:51', '2024-07-02 07:13:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliahs`
--

CREATE TABLE `mata_kuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kuri_id` int(11) NOT NULL,
  `taka_id` int(11) NOT NULL,
  `requ_id` int(11) DEFAULT NULL,
  `pstudi_id` int(11) NOT NULL,
  `dosen_1` int(11) NOT NULL,
  `dosen_2` int(11) DEFAULT NULL,
  `dosen_3` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `bsks` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mata_kuliahs`
--

INSERT INTO `mata_kuliahs` (`id`, `kuri_id`, `taka_id`, `requ_id`, `pstudi_id`, `dosen_1`, `dosen_2`, `dosen_3`, `name`, `code`, `bsks`, `desc`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 1, 1, 2, NULL, 'Jaringan Komputer Dasar', 'JKD', '20', 'Matakuliah yang membahas mengenai jaringan komputer dasar', '2024-07-02 07:13:52', '2024-07-02 07:13:52'),
(2, 1, 2, NULL, 1, 2, NULL, NULL, 'Jaringan Komputer Expert', 'JKE', '20', 'Matakuliah yang membahas mengenai jaringan komputer dasar', '2024-07-02 07:13:53', '2024-07-02 07:13:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2024_03_09_024013_create_mahasiswas_table', 1),
(38, '2024_03_09_024021_create_dosens_table', 1),
(39, '2024_03_25_024737_create_u_attendances_table', 1),
(40, '2024_04_25_082451_create_fakultas_table', 1),
(41, '2024_04_25_082531_create_program_studis_table', 1),
(42, '2024_04_26_060533_create_tahun_akademiks_table', 1),
(43, '2024_04_26_061235_create_program_kuliahs_table', 1),
(44, '2024_04_27_041303_create_kelas_table', 1),
(45, '2024_04_28_035926_create_gedungs_table', 1),
(46, '2024_04_28_052322_create_ruangs_table', 1),
(47, '2024_04_28_063053_create_kurikulums_table', 1),
(48, '2024_04_30_032644_create_mata_kuliahs_table', 1),
(49, '2024_04_30_055648_create_jadwal_kuliahs_table', 1),
(50, '2024_04_30_102751_create_absensi_mahasiswas_table', 1),
(51, '2024_05_10_080721_create_tagihan_kuliahs_table', 1),
(52, '2024_05_10_081438_create_history_tagihans_table', 1),
(53, '2024_05_14_092028_create_balances_table', 1),
(54, '2024_05_16_095721_create_cache_table', 1),
(55, '2024_05_23_095204_create_ticket_supports_table', 1),
(56, '2024_05_30_004205_create_notifications_table', 1),
(57, '2024_06_04_220135_create_kotak_sarans_table', 1),
(58, '2024_06_09_053130_create_f_b_perkuliahans_table', 1),
(59, '2024_06_13_085258_create_student_tasks_table', 1),
(60, '2024_06_14_102445_create_student_scores_table', 1),
(61, '2024_06_16_033935_create_hasil_studis_table', 1),
(62, '2024_06_21_081112_create_news_posts_table', 1),
(63, '2024_06_21_081131_create_news_categories_table', 1),
(64, '2024_06_26_050556_create_web_settings_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `slug`, `code`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi', 'teknologi', '7ifqAo', 'Berita seputar teknologi', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(2, 'Bisnis', 'bisnis', '4QegRO', 'Berita seputar dunia bisnis', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(3, 'Kesehatan', 'kesehatan', 'DkvoWS', 'Berita seputar kesehatan', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(4, 'Sains', 'sains', 'Y2Bkk5', 'Berita seputar ilmu pengetahuan', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(5, 'Hiburan', 'hiburan', '1HfZTq', 'Berita seputar dunia hiburan', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(6, 'Olahraga', 'olahraga', 'u8NEyG', 'Berita seputar olahraga', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(7, 'Politik', 'politik', 'C1pgtj', 'Berita seputar politik', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(8, 'Mode', 'mode', 'qO7d15', 'Berita seputar dunia mode', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(9, 'Travel', 'travel', 'ndzoG6', 'Berita seputar perjalanan', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(10, 'Makanan', 'makanan', 'evbWH0', 'Berita seputar makanan', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(11, 'Pendidikan', 'pendidikan', 'SE7nOM', 'Berita seputar dunia pendidikan', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(12, 'Lingkungan', 'lingkungan', 'Zqb5vJ', 'Berita seputar lingkungan', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(13, 'Gaya Hidup', 'gaya-hidup', 'QgYyjw', 'Berita seputar gaya hidup', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(14, 'Opini', 'opini', 'lcnOmO', 'Opini dan pandangan', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(15, 'Cuaca', 'cuaca', '6r2r7v', 'Berita seputar cuaca', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(16, 'Seni', 'seni', 'IBjhBY', 'Berita seputar seni', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(17, 'Film', 'film', 'FzLbvv', 'Berita seputar dunia film', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(18, 'Musik', 'musik', 'I7YWRW', 'Berita seputar musik', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(19, 'Buku', 'buku', '8gJW5l', 'Berita seputar dunia literatur', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(20, 'Ekonomi', 'ekonomi', 'aU937G', 'Berita seputar ekonomi', '2024-07-02 07:13:56', '2024-07-02 07:13:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_posts`
--

CREATE TABLE `news_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `metadesc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news_posts`
--

INSERT INTO `news_posts` (`id`, `category_id`, `author_id`, `name`, `code`, `slug`, `image`, `content`, `keywords`, `metadesc`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Sample Post First', 'GoE9xd', 'sample-post-first', 'default/default-profile.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, omnis quibusdam aliquam at nemo repellat nam ad adipisci itaque alias eveniet consequuntur molestiae cupiditate dolores, id magni autem vero quam, suscipit nulla facere molestias ipsum? Adipisci, animi natus. Modi, veniam doloribus assumenda in dolorem exercitationem quaerat tempora non temporibus magni earum voluptatibus autem quibusdam tempore voluptas aperiam, consequuntur alias fuga laudantium sed harum distinctio repudiandae facere omnis. Sint sunt dignissimos fugit velit voluptatibus adipisci esse minima explicabo. Nisi est architecto quasi suscipit amet quaerat nulla dolore illo quis inventore, error iusto nostrum eaque nemo, atque odio quas esse aut aperiam!', 'Keywords 1, Keywords 2, Keywords 3', 'Meta Descriptsion Sample', '2024-07-02 07:13:56', '2024-07-02 07:13:56'),
(2, 2, 1, 'Sample Post Second', 'Bo8gzv', 'sample-post-second', 'default/default-profile.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, omnis quibusdam aliquam at nemo repellat nam ad adipisci itaque alias eveniet consequuntur molestiae cupiditate dolores, id magni autem vero quam, suscipit nulla facere molestias ipsum? Adipisci, animi natus. Modi, veniam doloribus assumenda in dolorem exercitationem quaerat tempora non temporibus magni earum voluptatibus autem quibusdam tempore voluptas aperiam, consequuntur alias fuga laudantium sed harum distinctio repudiandae facere omnis. Sint sunt dignissimos fugit velit voluptatibus adipisci esse minima explicabo. Nisi est architecto quasi suscipit amet quaerat nulla dolore illo quis inventore, error iusto nostrum eaque nemo, atque odio quas esse aut aperiam!', 'Keywords 1, Keywords 2, Keywords 3', 'Meta Descriptsion Sample', '2024-07-02 07:13:56', '2024-07-02 07:13:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auth_id` int(11) NOT NULL,
  `send_to` int(11) NOT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `faku_id` int(11) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL,
  `proku_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `lecture_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `code` varchar(255) NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_kuliahs`
--

CREATE TABLE `program_kuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taka_id` int(11) NOT NULL,
  `pstudi_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `wave` varchar(255) NOT NULL,
  `wave_start` date DEFAULT NULL,
  `wave_ended` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program_kuliahs`
--

INSERT INTO `program_kuliahs` (`id`, `taka_id`, `pstudi_id`, `name`, `code`, `wave`, `wave_start`, `wave_ended`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Regular Pagi', 'G1RP-2023', 'Gelombang I', NULL, NULL, '2024-07-02 07:13:52', '2024-07-02 07:13:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studis`
--

CREATE TABLE `program_studis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faku_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cnim` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `head_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program_studis`
--

INSERT INTO `program_studis` (`id`, `faku_id`, `name`, `cnim`, `code`, `slug`, `head_id`, `title`, `level`, `created_at`, `updated_at`) VALUES
(1, 1, 'Teknik Informatika', '4210', 'TI', 'teknik-informatika', 1, ', S.Kom', 'S-1', '2024-07-02 07:13:51', '2024-07-02 07:13:51'),
(2, 1, 'Sistem Informasi', '4211', 'SI', 'sistem-informasi', 1, ', S.Kom', 'S-1', '2024-07-02 07:13:51', '2024-07-02 07:13:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangs`
--

CREATE TABLE `ruangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gedu_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangs`
--

INSERT INTO `ruangs` (`id`, `gedu_id`, `type`, `floor`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 'Kelas 101', 'C-101', '2024-07-02 07:13:54', '2024-07-02 07:13:54'),
(2, 3, 1, 1, 'Kelas 102', 'C-102', '2024-07-02 07:13:54', '2024-07-02 07:13:54'),
(3, 3, 1, 1, 'Kelas 103', 'C-103', '2024-07-02 07:13:54', '2024-07-02 07:13:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_scores`
--

CREATE TABLE `student_scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stask_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `desc` longtext NOT NULL,
  `file_1` varchar(255) DEFAULT NULL,
  `file_2` varchar(255) DEFAULT NULL,
  `file_3` varchar(255) DEFAULT NULL,
  `file_4` varchar(255) DEFAULT NULL,
  `file_5` varchar(255) DEFAULT NULL,
  `file_6` varchar(255) DEFAULT NULL,
  `file_7` varchar(255) DEFAULT NULL,
  `file_8` varchar(255) DEFAULT NULL,
  `code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `student_tasks`
--

CREATE TABLE `student_tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `jadkul_id` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail_task` longtext NOT NULL,
  `exp_date` date NOT NULL,
  `exp_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `student_tasks`
--

INSERT INTO `student_tasks` (`id`, `dosen_id`, `jadkul_id`, `code`, `title`, `detail_task`, `exp_date`, `exp_time`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'FFnNu3Su', 'First Task', 'First Task Deskription', '2024-07-09', '02:13:54', '2024-07-02 07:13:54', '2024-07-02 07:13:54'),
(2, 1, '2', 'qmjk3MfG', 'First Task', 'First Task Deskription', '2024-07-09', '02:13:55', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(3, 1, '3', '9EggGqAP', 'Second Task', 'Second Task Deskription', '2024-07-09', '02:13:55', '2024-07-02 07:13:55', '2024-07-02 07:13:55'),
(4, 1, '4', 'ndt1LMoJ', 'Second Task', 'Second Task Deskription', '2024-07-09', '02:13:55', '2024-07-02 07:13:55', '2024-07-02 07:13:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan_kuliahs`
--

CREATE TABLE `tagihan_kuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` varchar(255) NOT NULL DEFAULT '0',
  `proku_id` varchar(255) NOT NULL DEFAULT '0',
  `prodi_id` varchar(255) NOT NULL DEFAULT '0',
  `users_id` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tagihan_kuliahs`
--

INSERT INTO `tagihan_kuliahs` (`id`, `author_id`, `proku_id`, `prodi_id`, `users_id`, `name`, `code`, `price`, `created_at`, `updated_at`) VALUES
(1, '0', '0', '0', '1', 'UKT Semester 1', 'UKT-JwJJeLCV', '2400000', '2024-07-02 07:13:54', '2024-07-02 07:13:54'),
(2, '0', '1', '0', '0', 'UKT Semester 2', 'UKT-L7Cu4Lot', '2200000', '2024-07-02 07:13:54', '2024-07-02 07:13:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_akademiks`
--

CREATE TABLE `tahun_akademiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `year_start` year(4) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahun_akademiks`
--

INSERT INTO `tahun_akademiks` (`id`, `name`, `code`, `semester`, `year_start`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'TA. 2023/2024', '012023', 1, 2023, 0, '2024-07-02 07:13:51', '2024-07-02 07:13:51'),
(2, 'TA. 2023/2024', '022023', 2, 2023, 0, '2024-07-02 07:13:52', '2024-07-02 07:13:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket_supports`
--

CREATE TABLE `ticket_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `codr` varchar(255) DEFAULT NULL,
  `core` varchar(255) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sent_to` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `stat_id` int(11) NOT NULL DEFAULT 0,
  `prio_id` int(11) NOT NULL DEFAULT 0,
  `subject` text NOT NULL,
  `message` longtext NOT NULL,
  `attach_1` varchar(255) DEFAULT NULL,
  `attach_2` varchar(255) DEFAULT NULL,
  `attach_3` varchar(255) DEFAULT NULL,
  `attach_4` varchar(255) DEFAULT NULL,
  `attach_5` varchar(255) DEFAULT NULL,
  `attach_6` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default/default-profile.jpg',
  `birth_place` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gend` varchar(255) DEFAULT NULL,
  `reli` varchar(255) DEFAULT NULL,
  `contact_name_1` varchar(255) DEFAULT NULL,
  `contact_name_2` varchar(255) DEFAULT NULL,
  `contact_phone_1` varchar(255) DEFAULT NULL,
  `contact_phone_2` varchar(255) DEFAULT NULL,
  `user` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `verify_token` varchar(255) DEFAULT NULL,
  `token_created_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `type`, `code`, `name`, `image`, `birth_place`, `birth_date`, `gend`, `reli`, `contact_name_1`, `contact_name_2`, `contact_phone_1`, `contact_phone_2`, `user`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `verify_token`, `token_created_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'URl6K0', 'Administrator', 'profile/profile-URl6K0-6687e28080aee.jpg', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, 'admin', '080012345660', 'admin@admin.com', NULL, '$2y$12$ZXY6dcAzHfC8i5eAjtQSAuslxvwBXBNQInQ5ZCHYvhelUEKxsr2XO', NULL, 1, NULL, NULL, '2024-07-02 07:13:46', '2024-07-05 12:09:45'),
(2, 1, 'aePHov', 'Staff Finance', 'default/default-profile.jpg', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, 'finance', '6280012345661', 'finance@example.com', NULL, '$2y$12$ZXY6dcAzHfC8i5eAjtQSAuslxvwBXBNQInQ5ZCHYvhelUEKxsr2XO', NULL, 1, NULL, NULL, '2024-07-02 07:13:46', '2024-07-05 07:45:53'),
(3, 2, 'RSE81S', 'Staff Officer', 'default/default-profile.jpg', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, 'officer', '080012345662', 'officer@example.com', NULL, '$2y$12$XIZGy2QDvbW0nWBhiy9OSucVDBcmQ4/bwgfOBnh8QtpE1js3kgChC', NULL, 1, NULL, NULL, '2024-07-02 07:13:46', '2024-07-02 07:13:46'),
(4, 3, 'Wnwqtg', 'Staff Akademik', 'default/default-profile.jpg', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, 'academic', '080012345663', 'academic@example.com', NULL, '$2y$12$Aw7RKDcBMxtSRTwT1BKkxO5DmTqQxIlypB1IkYp7nCGg0SvyEjPyW', NULL, 1, NULL, NULL, '2024-07-02 07:13:47', '2024-07-02 07:13:47'),
(5, 5, 'I1dV0K', 'Staff Support', 'default/default-profile.jpg', NULL, NULL, 'L', NULL, NULL, NULL, NULL, NULL, 'support', '080012345665', 'support@example.com', NULL, '$2y$12$w3dcZUabSgBMyo.ys/ZfNe7/FnB8vfIqcWBs090/gKULW0LGzP/zS', NULL, 1, NULL, NULL, '2024-07-02 07:13:48', '2024-07-02 07:13:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_attendances`
--

CREATE TABLE `u_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `absen_user_id` int(11) NOT NULL,
  `absen_approve` tinyint(4) NOT NULL DEFAULT 0,
  `absen_type` tinyint(4) NOT NULL,
  `absen_date` date NOT NULL,
  `absen_time_in` time NOT NULL,
  `absen_time_out` time DEFAULT NULL,
  `absen_desc` longtext DEFAULT NULL,
  `absen_proof` varchar(255) DEFAULT NULL,
  `absen_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_settings`
--

CREATE TABLE `web_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_apps` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_head` varchar(255) NOT NULL,
  `school_logo` varchar(255) NOT NULL DEFAULT 'web/site_logo.png',
  `school_link` varchar(255) NOT NULL,
  `school_desc` longtext NOT NULL,
  `school_email` varchar(255) NOT NULL,
  `school_phone` varchar(255) NOT NULL,
  `social_fb` varchar(255) NOT NULL,
  `social_ig` varchar(255) NOT NULL,
  `social_in` varchar(255) NOT NULL,
  `social_tw` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `web_settings`
--

INSERT INTO `web_settings` (`id`, `school_apps`, `school_name`, `school_head`, `school_logo`, `school_link`, `school_desc`, `school_email`, `school_phone`, `social_fb`, `social_ig`, `social_in`, `social_tw`, `created_at`, `updated_at`) VALUES
(1, 'SIAKAD Apps v8.0 ', 'PKBM Mutiara Ilmu', 'Dr. Alfaza Komarun, M.Kom', 'web/site_logo.png', 'https://instagram.com/amdev69703', '\"Selamat datang di Aplikasi Sistem Informasi Akademik dan Administrasi Kampus (SIAKAD) kami. SIAKAD adalah wujud nyata komitmen kami dalam menyediakan layanan pendidikan yang efisien dan terintegrasi. Melalui SIAKAD, kami mempermudah seluruh civitas akademika untuk mengakses informasi akademik, administrasi, dan kemahasiswaan dengan lebih cepat dan akurat. Kami berharap SIAKAD dapat menjadi mitra setia dalam perjalanan akademik dan pengembangan potensi kita bersama. Selamat menggunakan dan mari kita terus berkolaborasi untuk masa depan pendidikan yang lebih baik. Terima kasih.\"', 'jaya.kusuma@amdev-academy.id', '+6287848799145', 'https://facebook.com/kyouma052', 'https://instagram.com/mjaya69703', 'https://id.linkedin.com/in/mjaya69703', 'https://x.com/mjaya69703', '2024-07-02 07:13:57', '2024-07-02 07:13:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi_mahasiswas`
--
ALTER TABLE `absensi_mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `absensi_mahasiswas_code_unique` (`code`);

--
-- Indeks untuk tabel `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosens_dsn_nidn_unique` (`dsn_nidn`),
  ADD UNIQUE KEY `dosens_dsn_user_unique` (`dsn_user`),
  ADD UNIQUE KEY `dosens_dsn_mail_unique` (`dsn_mail`),
  ADD UNIQUE KEY `dosens_dsn_phone_unique` (`dsn_phone`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fakultas_code_unique` (`code`);

--
-- Indeks untuk tabel `f_b_perkuliahans`
--
ALTER TABLE `f_b_perkuliahans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `f_b_perkuliahans_fb_code_unique` (`fb_code`);

--
-- Indeks untuk tabel `gedungs`
--
ALTER TABLE `gedungs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gedungs_code_unique` (`code`);

--
-- Indeks untuk tabel `hasil_studis`
--
ALTER TABLE `hasil_studis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hasil_studis_student_id_smt_id_unique` (`student_id`,`smt_id`),
  ADD UNIQUE KEY `hasil_studis_code_unique` (`code`);

--
-- Indeks untuk tabel `history_tagihans`
--
ALTER TABLE `history_tagihans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `history_tagihans_code_unique` (`code`);

--
-- Indeks untuk tabel `jadwal_kuliahs`
--
ALTER TABLE `jadwal_kuliahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jadwal_kuliahs_code_unique` (`code`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelas_code_unique` (`code`);

--
-- Indeks untuk tabel `kotak_sarans`
--
ALTER TABLE `kotak_sarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kurikulums`
--
ALTER TABLE `kurikulums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kurikulums_code_unique` (`code`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswas_mhs_nim_unique` (`mhs_nim`),
  ADD UNIQUE KEY `mahasiswas_mhs_code_unique` (`mhs_code`),
  ADD UNIQUE KEY `mahasiswas_mhs_user_unique` (`mhs_user`),
  ADD UNIQUE KEY `mahasiswas_mhs_mail_unique` (`mhs_mail`),
  ADD UNIQUE KEY `mahasiswas_mhs_phone_unique` (`mhs_phone`);

--
-- Indeks untuk tabel `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mata_kuliahs_code_unique` (`code`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_slug_unique` (`slug`),
  ADD UNIQUE KEY `news_categories_code_unique` (`code`);

--
-- Indeks untuk tabel `news_posts`
--
ALTER TABLE `news_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_posts_code_unique` (`code`);

--
-- Indeks untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notifications_code_unique` (`code`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `program_kuliahs`
--
ALTER TABLE `program_kuliahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_kuliahs_code_unique` (`code`);

--
-- Indeks untuk tabel `program_studis`
--
ALTER TABLE `program_studis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_studis_cnim_unique` (`cnim`),
  ADD UNIQUE KEY `program_studis_code_unique` (`code`),
  ADD UNIQUE KEY `program_studis_slug_unique` (`slug`);

--
-- Indeks untuk tabel `ruangs`
--
ALTER TABLE `ruangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ruangs_code_unique` (`code`);

--
-- Indeks untuk tabel `student_scores`
--
ALTER TABLE `student_scores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_scores_code_unique` (`code`);

--
-- Indeks untuk tabel `student_tasks`
--
ALTER TABLE `student_tasks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_tasks_jadkul_id_unique` (`jadkul_id`);

--
-- Indeks untuk tabel `tagihan_kuliahs`
--
ALTER TABLE `tagihan_kuliahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tagihan_kuliahs_code_unique` (`code`);

--
-- Indeks untuk tabel `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tahun_akademiks_code_unique` (`code`);

--
-- Indeks untuk tabel `ticket_supports`
--
ALTER TABLE `ticket_supports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_supports_core_unique` (`core`),
  ADD UNIQUE KEY `ticket_supports_code_unique` (`code`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_code_unique` (`code`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `u_attendances`
--
ALTER TABLE `u_attendances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_attendances_absen_code_unique` (`absen_code`);

--
-- Indeks untuk tabel `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi_mahasiswas`
--
ALTER TABLE `absensi_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `balances`
--
ALTER TABLE `balances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `f_b_perkuliahans`
--
ALTER TABLE `f_b_perkuliahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gedungs`
--
ALTER TABLE `gedungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hasil_studis`
--
ALTER TABLE `hasil_studis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history_tagihans`
--
ALTER TABLE `history_tagihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_kuliahs`
--
ALTER TABLE `jadwal_kuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kotak_sarans`
--
ALTER TABLE `kotak_sarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kurikulums`
--
ALTER TABLE `kurikulums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mata_kuliahs`
--
ALTER TABLE `mata_kuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `news_posts`
--
ALTER TABLE `news_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `program_kuliahs`
--
ALTER TABLE `program_kuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `program_studis`
--
ALTER TABLE `program_studis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ruangs`
--
ALTER TABLE `ruangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `student_scores`
--
ALTER TABLE `student_scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `student_tasks`
--
ALTER TABLE `student_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tagihan_kuliahs`
--
ALTER TABLE `tagihan_kuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ticket_supports`
--
ALTER TABLE `ticket_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `u_attendances`
--
ALTER TABLE `u_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
