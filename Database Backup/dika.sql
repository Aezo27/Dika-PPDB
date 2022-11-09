/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : dika

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 09/11/2022 13:09:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ayahs
-- ----------------------------
DROP TABLE IF EXISTS `ayahs`;
CREATE TABLE `ayahs`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tahun_lahir` int NULL DEFAULT NULL,
  `pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `penghasilan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kebutuhan_khusus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ayahs
-- ----------------------------
INSERT INTO `ayahs` VALUES (3, 4, 'Suhariyono', 1960, 'D4/S1', 'Pedagang Besar', 'Kurang dari 500,000', 'Tidak', '2022-10-02 23:35:44', '2022-10-06 00:20:46');
INSERT INTO `ayahs` VALUES (10, 7, 'Asdasd', NULL, NULL, NULL, NULL, 'Lainnya', '2022-10-20 16:18:26', '2022-10-20 16:18:26');

-- ----------------------------
-- Table structure for data_pesertas
-- ----------------------------
DROP TABLE IF EXISTS `data_pesertas`;
CREATE TABLE `data_pesertas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `jenis_kelamin` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '0',
  `nisn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `nik` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `tanggal_lahir` date NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `kebutuhan_khusus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat_lengkap` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `rt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `rw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dusun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `kodepos` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat_tinggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `transportasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_wa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `email_pribadi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_sktm` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `no_kks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `no_kps` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `no_kis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `warga_negara` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '0',
  `negara_asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_pesertas
-- ----------------------------
INSERT INTO `data_pesertas` VALUES (3, 4, 'Rama', '0', '345345345345', '3314170609990005', 'Sragen', '1999-09-06', 'Islam', 'Tidak', 'Sukodono', '3', '2', 'Bangunrejo', 'Baleharjo', 'Sukodono', 'Sragen', '57263', 'Bersama orang tua', 'Jalan kaki', '082134626598', 'stillhopeyou@gmail.com', '2342345235', '23423423', '2342342', '23423562462', '1', 'Jepang', '2022/4.png', '2022-10-02 23:35:44', '2022-10-06 22:28:13');
INSERT INTO `data_pesertas` VALUES (10, 7, 'Rahma', '0', '9994974913', '3314170609990005', 'Sragen', '2022-10-20', 'Islam', 'Lainnya', 'Sukodono', NULL, NULL, NULL, NULL, 'Sukodono', 'Sragen', '57263', 'Wali', NULL, '082134626598', 'admin@odama.io', NULL, NULL, NULL, NULL, '0', NULL, '2022/7.jpg', '2022-10-20 16:18:26', '2022-10-20 16:18:26');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for ibus
-- ----------------------------
DROP TABLE IF EXISTS `ibus`;
CREATE TABLE `ibus`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tahun_lahir` int NULL DEFAULT NULL,
  `pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `penghasilan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kebutuhan_khusus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ibus
-- ----------------------------
INSERT INTO `ibus` VALUES (5, 4, 'taryati', 1970, 'D3', 'Karyawan Swasta', '5 Juta - 20 Juta', 'Tidak', '2022-10-02 23:35:44', '2022-10-06 00:20:46');
INSERT INTO `ibus` VALUES (13, 7, 'Fgsdfgsdf', NULL, NULL, NULL, NULL, 'Lainnya', '2022-10-20 16:18:26', '2022-10-20 16:18:26');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for periodiks
-- ----------------------------
DROP TABLE IF EXISTS `periodiks`;
CREATE TABLE `periodiks`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `tinggi` int NULL DEFAULT NULL,
  `berat` int NULL DEFAULT NULL,
  `jarak` int NULL DEFAULT NULL,
  `waktu_tempuh` int NULL DEFAULT NULL,
  `saudara` int NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of periodiks
-- ----------------------------
INSERT INTO `periodiks` VALUES (1, 4, 160, 60, 5, 10, 2, '2022-10-02 23:35:44', '2022-10-02 23:35:44');
INSERT INTO `periodiks` VALUES (8, 7, NULL, NULL, 10, NULL, NULL, '2022-10-20 16:18:26', '2022-10-20 16:18:26');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for regists
-- ----------------------------
DROP TABLE IF EXISTS `regists`;
CREATE TABLE `regists`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `jenis_pendaftaran` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '0',
  `asal_sekolah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat_sekolah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `no_un` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `paud` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tk` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_skhu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `no_ijazah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `hobi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cita_cita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `draft` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of regists
-- ----------------------------
INSERT INTO `regists` VALUES (8, 4, '0', 'SDN Baleharjo 2', 'Sukodono', '34534534', '0', '0', '34534534', '34534534', 'gaada', 'kaya', '0', '2022-10-06 22:58:03', '2022-10-06 22:58:03');
INSERT INTO `regists` VALUES (31, 7, '0', NULL, 'Sukodono', NULL, '0', '0', NULL, NULL, NULL, NULL, '0', '2022-10-20 16:18:26', '2022-10-20 16:18:26');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int NOT NULL,
  `status_pendaftaran` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '0',
  `tanggal_pengumuman` date NULL DEFAULT NULL,
  `status_penerimaan` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '0',
  `kuota_pendaftar` int NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, '1', '2022-11-15', '0', 10, '2022-10-20 10:32:57', '2022-10-20 17:31:24');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'ramasullivan27@gmail.com', '2022-10-19 10:37:13', '$2y$10$Z/tUvRBwCHnMnah2Fpjn2ufWOI8D//NmuKWd8dcBahdbZ77Xc3Fjy', '0', 'W5GP39Gj9S8ba0rJ8KoZLO99XZdoSJ7Es4WpWWUNsSz66npwJvEZY8m2YHSx', '2022-07-18 06:52:14', '2022-07-18 06:52:14');
INSERT INTO `users` VALUES (4, 'MrPrince27', 'stillhopeyou@gmail.com', '2022-07-18 15:27:01', '$2y$10$Z/tUvRBwCHnMnah2Fpjn2ufWOI8D//NmuKWd8dcBahdbZ77Xc3Fjy', '1', 'Jel67aai8BktNiiT9CJdDSmR9ovwzEiubSziigaqgmkGZ3PTGVeYGix8Y7uE', '2022-07-18 07:16:08', '2022-07-18 15:25:49');
INSERT INTO `users` VALUES (7, 'XRhyme', 'admin@odama.io', '2022-10-20 16:06:24', '$2y$10$WAhcA/xsqfOTi7kJqT9DGOARSd.dh6VVepPbB0kdeUdWS5tRpM4da', '1', NULL, '2022-10-20 16:03:22', '2022-10-20 16:03:22');

-- ----------------------------
-- Table structure for walis
-- ----------------------------
DROP TABLE IF EXISTS `walis`;
CREATE TABLE `walis`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tahun_lahir` int NULL DEFAULT NULL,
  `pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `penghasilan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of walis
-- ----------------------------
INSERT INTO `walis` VALUES (6, 4, 'Uyeee', 1965, 'D3', 'Karyawan Swasta', 'Kurang dari 500,000', '2022-10-02 23:39:23', '2022-10-07 17:15:56');
INSERT INTO `walis` VALUES (13, 7, '', NULL, NULL, NULL, NULL, '2022-10-20 16:18:26', '2022-10-20 16:18:26');

-- ----------------------------
-- View structure for pendaftars
-- ----------------------------
DROP VIEW IF EXISTS `pendaftars`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `pendaftars` AS SELECT
	users.id, 
	users.`name`, 
	users.email, 
	regists.jenis_pendaftaran, 
	regists.asal_sekolah, 
	regists.alamat_sekolah, 
	regists.no_un, 
	regists.paud, 
	regists.tk, 
	regists.no_skhu, 
	regists.no_ijazah, 
	regists.hobi, 
	regists.cita_cita, 
	data_pesertas.nama, 
	data_pesertas.jenis_kelamin, 
	data_pesertas.nisn, 
	data_pesertas.nik, 
	data_pesertas.tempat_lahir, 
	data_pesertas.tanggal_lahir, 
	data_pesertas.agama, 
	data_pesertas.kebutuhan_khusus, 
	data_pesertas.alamat_lengkap, 
	data_pesertas.rt, 
	data_pesertas.rw, 
	data_pesertas.dusun, 
	data_pesertas.kelurahan, 
	data_pesertas.kecamatan, 
	data_pesertas.kabupaten, 
	data_pesertas.kodepos, 
	data_pesertas.tempat_tinggal, 
	data_pesertas.transportasi, 
	data_pesertas.no_wa, 
	data_pesertas.email_pribadi, 
	data_pesertas.no_sktm, 
	data_pesertas.no_kks, 
	data_pesertas.no_kps, 
	data_pesertas.no_kis, 
	data_pesertas.warga_negara, 
	data_pesertas.negara_asal, 
	data_pesertas.foto, 
	ayahs.nama AS nama_ayah, 
	ayahs.tahun_lahir AS tahun_lahir_ayah, 
	ayahs.pendidikan AS pendidikan_ayah, 
	ayahs.pekerjaan AS pekerjaan_ayah, 
	ayahs.penghasilan AS penghasilan_ayah, 
	ayahs.kebutuhan_khusus AS kebutuhan_khusus_ayah, 
	ibus.nama AS nama_ibu, 
	ibus.tahun_lahir AS tahun_lahir_ibu, 
	ibus.pendidikan AS pendidikan_ibu, 
	ibus.pekerjaan AS pekerjaan_ibu, 
	ibus.penghasilan AS penghasilan_ibu, 
	ibus.kebutuhan_khusus AS kebutuhan_khusus_ibu, 
	walis.nama AS nama_wali, 
	walis.tahun_lahir AS tahun_lahir_wali, 
	walis.pendidikan AS pendidikan_wali, 
	walis.pekerjaan AS pekerjaan_wali, 
	walis.penghasilan AS penghasilan_wali, 
	periodiks.tinggi, 
	periodiks.berat, 
	periodiks.jarak, 
	periodiks.waktu_tempuh, 
	periodiks.saudara, 
	regists.draft, 
	regists.created_at
FROM
	users
	LEFT JOIN
	regists
	ON 
		users.id = regists.user_id
	LEFT JOIN
	data_pesertas
	ON 
		users.id = data_pesertas.user_id
	LEFT JOIN
	ayahs
	ON 
		users.id = ayahs.user_id
	LEFT JOIN
	ibus
	ON 
		users.id = ibus.user_id
	LEFT JOIN
	walis
	ON 
		users.id = walis.user_id
	LEFT JOIN
	periodiks
	ON 
		users.id = periodiks.user_id
WHERE
	users.role = 1 AND
	users.email_verified_at IS NOT NULL ;

SET FOREIGN_KEY_CHECKS = 1;
