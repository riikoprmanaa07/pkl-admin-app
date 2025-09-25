/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.8.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: pkl_admin_app
-- ------------------------------------------------------
-- Server version	11.8.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `calendar`
--

DROP TABLE IF EXISTS `calendar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `calendar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendar`
--

LOCK TABLES `calendar` WRITE;
/*!40000 ALTER TABLE `calendar` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `calendar` VALUES
(1,'Diklat Kepemimpinan Tingkat IV','Diklat kepemimpinan untuk pejabat tingkat IV','2025-09-01','2025-09-15','BPSDMD Provinsi Jawa Tengah','2025-08-22 15:13:45','2025-08-22 15:13:45'),
(2,'Diklat Kepemimpinan Tingkat III','Diklat kepemimpinan untuk pejabat tingkat III','2025-10-01','2025-10-20','BPSDMD Provinsi Jawa Tengah','2025-08-22 15:13:45','2025-08-22 15:13:45'),
(3,'Diklat Kepemimpinan Tingkat II','Diklat kepemimpinan untuk pejabat tingkat II','2025-11-01','2025-11-25','BPSDMD Provinsi Jawa Tengah','2025-08-22 15:13:45','2025-08-22 15:13:45'),
(4,'Diklat Prajabatan','Diklat prajabatan untuk CPNS','2025-12-01','2025-12-20','BPSDMD Provinsi Jawa Tengah','2025-08-22 15:13:45','2025-08-22 15:13:45'),
(5,'Diklat Teknis Umum','Diklat teknis untuk umum','2025-08-15','2025-08-30','BPSDMD Provinsi Jawa Tengah','2025-08-22 15:13:45','2025-08-22 15:13:45'),
(6,'Diklat Kepemimpinan Tingkat IV','Diklat kepemimpinan untuk pejabat tingkat IV','2025-09-01','2025-09-15','BPSDMD Provinsi Jawa Tengah','2025-08-28 19:28:09','2025-08-28 19:28:09'),
(7,'Diklat Kepemimpinan Tingkat III','Diklat kepemimpinan untuk pejabat tingkat III','2025-10-01','2025-10-20','BPSDMD Provinsi Jawa Tengah','2025-08-28 19:28:09','2025-08-28 19:28:09'),
(8,'Diklat Kepemimpinan Tingkat II','Diklat kepemimpinan untuk pejabat tingkat II','2025-11-01','2025-11-25','BPSDMD Provinsi Jawa Tengah','2025-08-28 19:28:09','2025-08-28 19:28:09'),
(9,'Diklat Prajabatan','Diklat prajabatan untuk CPNS','2025-12-01','2025-12-20','BPSDMD Provinsi Jawa Tengah','2025-08-28 19:28:09','2025-08-28 19:28:09'),
(10,'Diklat Teknis Umum','Diklat teknis untuk umum','2025-08-15','2025-08-30','BPSDMD Provinsi Jawa Tengah','2025-08-28 19:28:09','2025-08-28 19:28:09'),
(11,'Diklat Kepemimpinan Tingkat IV','Diklat kepemimpinan untuk pejabat tingkat IV','2025-09-01','2025-09-15','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(12,'Diklat Kepemimpinan Tingkat III','Diklat kepemimpinan untuk pejabat tingkat III','2025-10-01','2025-10-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(13,'Diklat Kepemimpinan Tingkat II','Diklat kepemimpinan untuk pejabat tingkat II','2025-11-01','2025-11-25','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(14,'Diklat Prajabatan','Diklat prajabatan untuk CPNS','2025-12-01','2025-12-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(15,'Diklat Teknis Umum','Diklat teknis untuk umum','2025-08-15','2025-08-30','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(16,'Diklat Kepemimpinan Tingkat IV','Diklat kepemimpinan untuk pejabat tingkat IV','2025-09-01','2025-09-15','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:58:51','2025-08-31 19:58:51'),
(17,'Diklat Kepemimpinan Tingkat III','Diklat kepemimpinan untuk pejabat tingkat III','2025-10-01','2025-10-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:58:51','2025-08-31 19:58:51'),
(18,'Diklat Kepemimpinan Tingkat II','Diklat kepemimpinan untuk pejabat tingkat II','2025-11-01','2025-11-25','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:58:51','2025-08-31 19:58:51'),
(19,'Diklat Prajabatan','Diklat prajabatan untuk CPNS','2025-12-01','2025-12-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:58:51','2025-08-31 19:58:51'),
(20,'Diklat Teknis Umum','Diklat teknis untuk umum','2025-08-15','2025-08-30','BPSDMD Provinsi Jawa Tengah','2025-08-31 19:58:51','2025-08-31 19:58:51'),
(21,'Diklat Kepemimpinan Tingkat IV','Diklat kepemimpinan untuk pejabat tingkat IV','2025-09-01','2025-09-15','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:25:54','2025-08-31 20:25:54'),
(22,'Diklat Kepemimpinan Tingkat III','Diklat kepemimpinan untuk pejabat tingkat III','2025-10-01','2025-10-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:25:54','2025-08-31 20:25:54'),
(23,'Diklat Kepemimpinan Tingkat II','Diklat kepemimpinan untuk pejabat tingkat II','2025-11-01','2025-11-25','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:25:54','2025-08-31 20:25:54'),
(24,'Diklat Prajabatan','Diklat prajabatan untuk CPNS','2025-12-01','2025-12-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:25:54','2025-08-31 20:25:54'),
(25,'Diklat Teknis Umum','Diklat teknis untuk umum','2025-08-15','2025-08-30','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:25:54','2025-08-31 20:25:54'),
(26,'Diklat Kepemimpinan Tingkat IV','Diklat kepemimpinan untuk pejabat tingkat IV','2025-09-01','2025-09-15','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:36:18','2025-08-31 20:36:18'),
(27,'Diklat Kepemimpinan Tingkat III','Diklat kepemimpinan untuk pejabat tingkat III','2025-10-01','2025-10-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:36:18','2025-08-31 20:36:18'),
(28,'Diklat Kepemimpinan Tingkat II','Diklat kepemimpinan untuk pejabat tingkat II','2025-11-01','2025-11-25','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:36:18','2025-08-31 20:36:18'),
(29,'Diklat Prajabatan','Diklat prajabatan untuk CPNS','2025-12-01','2025-12-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:36:18','2025-08-31 20:36:18'),
(30,'Diklat Teknis Umum','Diklat teknis untuk umum','2025-08-15','2025-08-30','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:36:18','2025-08-31 20:36:18'),
(31,'Diklat Kepemimpinan Tingkat IV','Diklat kepemimpinan untuk pejabat tingkat IV','2025-09-01','2025-09-15','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(32,'Diklat Kepemimpinan Tingkat III','Diklat kepemimpinan untuk pejabat tingkat III','2025-10-01','2025-10-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(33,'Diklat Kepemimpinan Tingkat II','Diklat kepemimpinan untuk pejabat tingkat II','2025-11-01','2025-11-25','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(34,'Diklat Prajabatan','Diklat prajabatan untuk CPNS','2025-12-01','2025-12-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(35,'Diklat Teknis Umum','Diklat teknis untuk umum','2025-08-15','2025-08-30','BPSDMD Provinsi Jawa Tengah','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(36,'Diklat Kepemimpinan Tingkat IV','Diklat kepemimpinan untuk pejabat tingkat IV','2025-09-01','2025-09-15','BPSDMD Provinsi Jawa Tengah','2025-08-31 21:02:53','2025-08-31 21:02:53'),
(37,'Diklat Kepemimpinan Tingkat III','Diklat kepemimpinan untuk pejabat tingkat III','2025-10-01','2025-10-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 21:02:53','2025-08-31 21:02:53'),
(38,'Diklat Kepemimpinan Tingkat II','Diklat kepemimpinan untuk pejabat tingkat II','2025-11-01','2025-11-25','BPSDMD Provinsi Jawa Tengah','2025-08-31 21:02:53','2025-08-31 21:02:53'),
(39,'Diklat Prajabatan','Diklat prajabatan untuk CPNS','2025-12-01','2025-12-20','BPSDMD Provinsi Jawa Tengah','2025-08-31 21:02:53','2025-08-31 21:02:53'),
(40,'Diklat Teknis Umum','Diklat teknis untuk umum','2025-08-15','2025-08-30','BPSDMD Provinsi Jawa Tengah','2025-08-31 21:02:53','2025-08-31 21:02:53');
/*!40000 ALTER TABLE `calendar` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `jam_mengajar`
--

DROP TABLE IF EXISTS `jam_mengajar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jam_mengajar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pelatihan` bigint(20) unsigned NOT NULL,
  `nip_widyaiswara` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `jp` int(11) NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `metode` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `kabupaten_kota` varchar(255) DEFAULT NULL,
  `tugas` varchar(255) DEFAULT NULL,
  `jenis_diklat` varchar(255) DEFAULT NULL,
  `materi` text DEFAULT NULL,
  `nip_widyaiswara_2` varchar(255) DEFAULT NULL,
  `nip_widyaiswara_3` varchar(255) DEFAULT NULL,
  `nip_widyaiswara_4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jam_mengajar_id_pelatihan_foreign` (`id_pelatihan`),
  KEY `jam_mengajar_nip_widyaiswara_foreign` (`nip_widyaiswara`),
  CONSTRAINT `jam_mengajar_id_pelatihan_foreign` FOREIGN KEY (`id_pelatihan`) REFERENCES `calendar` (`id`),
  CONSTRAINT `jam_mengajar_nip_widyaiswara_foreign` FOREIGN KEY (`nip_widyaiswara`) REFERENCES `widyaiswara` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jam_mengajar`
--

LOCK TABLES `jam_mengajar` WRITE;
/*!40000 ALTER TABLE `jam_mengajar` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `jam_mengajar` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `kompetensi`
--

DROP TABLE IF EXISTS `kompetensi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `kompetensi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nip_widyaiswara` varchar(255) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `jenis_diklat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kompetensi_nip_widyaiswara_foreign` (`nip_widyaiswara`),
  CONSTRAINT `kompetensi_nip_widyaiswara_foreign` FOREIGN KEY (`nip_widyaiswara`) REFERENCES `widyaiswara` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kompetensi`
--

LOCK TABLES `kompetensi` WRITE;
/*!40000 ALTER TABLE `kompetensi` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `kompetensi` VALUES
(1,'196102171985032008','Advokasi Penyampaian ke Lokus','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:47','2025-08-22 15:16:47'),
(2,'196102171985032008','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(3,'196102171985032008','Agenda 2: Kepemimpinan Pelayanan','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(4,'196102171985032008','Agenda 2: Nilai-nilai Dasar PNS','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(5,'196102171985032008','Agenda 3: Kedudukan dan Peran PNS Menuju Smart Governance','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(6,'196102171985032008','Akuntabilitas Kinerja','Diklat Kepemimpinan Tingkat III','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(7,'196112261983031001','Advokasi Penyampaian ke Lokus','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(8,'196112261983031001','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(9,'196112261983031001','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(10,'196112261983031001','Agenda 2: Nilai-nilai Dasar PNS','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(11,'196112261983031001','Agenda 3: Kedudukan dan Peran PNS Menuju Smart Governance','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(12,'196112261983031001','Agenda 3: Pengendalian Pekerjaan','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(13,'196112261983031001','Aktualisasi/ Habituasi (80 Hari Kalender)','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(14,'196112261983031001','Akuntabilitas PNS','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(15,'196112261983031001','Analisis dan Evaluasi Resiko','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(16,'196112261983031001','Analisis Isu Kontemporer','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(17,'196112261983031001','Anti Korupsi','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(18,'196112261983031001','Anti Korupsi','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(19,'196112261983031001','ASN Ber-AKHLAK','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(20,'196112261983031001','Asta Cita Ketujuh (Memperkuat Pencegahan dan Pemberantasan Korupsi dan Narkoba)','Diklat Kepemimpinan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(21,'196112261983031001','Berbagi Pengalaman Hasil VKN','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(22,'196112261983031001','Bimbingan 1 Penyusun KK','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(23,'196112261983031001','Bimbingan 1 penyusunan KK','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(24,'196112261983031001','Bimbingan 2 penyusunan KK','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(25,'196112261983031001','Bimbingan Penyusunan Karya Tulis Ilmiah','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(26,'196112261983031001','Bimbingan penyusunan KK','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(27,'196112261983031001','Bimbingan Penyusunan Rencana Aksi','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(28,'196112261983031001','Bimbingan Penyusunan Tugas Akhir','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(29,'196112261983031001','BLC','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(30,'196112261983031001','Building Learning Commitment (BLC)','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(31,'196112261983031001','Ceramah Core Values dan Employee Branding ASN','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(32,'196112261983031001','Ceramah Energi Kepemimpinan','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(33,'196112261983031001','Ceramah Etika dan Integritas ASN','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(34,'196112261983031001','Ceramah Integritas Kepemimpinan','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(35,'196112261983031001','Ceramah Isu Aktual dalam Kepemimpinan Strategis','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(36,'196112261983031001','Ceramah Isu Strategis: Integritas Kepemimpinan','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(37,'196112261983031001','Ceramah Isu Strategis: Tema PKN Tingkat II','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(38,'196112261983031001','Ceramah Isu Tema: Visitasi Kepemimpinan Nasional','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(39,'196112261983031001','Ceramah Kebijakan dan Tidak Lanjut Hasil Pelatihan','Diklat Kepemimpinan Tingkat III','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(40,'196112261983031001','Ceramah Kebijakan dan tindak Lanjut Hasil Pelatihan','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(41,'196112261983031001','Ceramah Kebijakan Pengembangan SDA dan Nilai-nilai ASN','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(42,'196112261983031001','Ceramah MTSL','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(43,'196112261983031001','Ceramah Visitasi','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(44,'196112261983031001','Coaching Virtual ( Pembimbingan )','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(45,'196112261983031001','Core Value ASN','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(46,'196112261983031001','Core Value ASN BerAKHLAK','Diklat Teknis','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(47,'196112261983031001','Core Values ASN berAKHLAK','Diklat Fungsional','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(48,'196112261983031001','Desain','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(49,'196205171991031004','Advokasi Penyampaian ke Lokus','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(50,'196209161995011001','Advokasi Penyampaian ke Lokus','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(51,'196310281989111001','Advokasi Penyampaian ke Lokus','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(52,'196410101999031002','Advokasi Penyampaian ke Lokus','Diklat Kepemimpinan Tingkat II','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(53,'196512131988032004','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(54,'196607221993011001','Mengelola Perubahan','Diklat Kepemimpinan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(55,'196608181992032015','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(56,'196705041986031002','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(57,'196708221991031011','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(58,'196709251993031004','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(59,'196807041988031003','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(60,'196811091993032005','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(61,'196901091997032002','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(62,'196901121989032005','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(63,'196911021990031003','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-22 15:16:48','2025-08-22 15:16:48'),
(65,'196102171985032008','Alat Kelengkapan DPRD Provinsi dan DPRD Kab/Kota','Diklat Kepemimpinan','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(66,'196102171985032008','ASN berAKHLAK','Diklat Teknis','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(67,'196102171985032008','Berbagi Pengalaman Hasil Studi Lapangan','Diklat Kepemimpinan Tingkat III','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(68,'196102171985032008','Berbagi Pengalaman hasil Studi Lapangan','Diklat Kepemimpinan Tingkat IV','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(69,'196102171985032008','Berbagi Pengalaman Hasil VKN','Diklat Kepemimpinan Tingkat II','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(70,'196102171985032008','Ceramah Core Values dan Employee Branding ASN','Diklat Prajabatan','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(71,'196102171985032008','Ceramah Isu Aktual dalam Kepemimpinan Strategis','Diklat Kepemimpinan Tingkat II','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(72,'196102171985032008','Ceramah Isu Strategis Kebijakan Nasional','Diklat Kepemimpinan Tingkat II','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(73,'196102171985032008','Ceramah Isu Strategis Kepemimpinan Kewirausahaan','Diklat Kepemimpinan Tingkat II','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(74,'196102171985032008','Ceramah Isu Strategis: Tema PKN Tingkat II','Diklat Kepemimpinan Tingkat II','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(75,'196102171985032008','Ceramah Isu Tema: Visitasi Kepemimpinan Nasional','Diklat Kepemimpinan Tingkat II','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(76,'196102171985032008','Ceramah Kebijakan dan Tindak Lanjut Hasil Pelatihan','Diklat Kepemimpinan Tingkat II','2025-08-28 19:25:45','2025-08-28 19:25:45'),
(77,'196911091990031006','Mengelola Perubahan','Diklat Kepemimpinan','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(78,'196911091990031006','Administrasi Kependudukan','Diklat Kepemimpinan','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(79,'196911091990031006','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(80,'196911091990031006','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(81,'197003021998031009','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(82,'197003021998031009','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(83,'197003021998031009','Agenda 2: Kepemimpinan Pelayanan','Diklat Kepemimpinan Tingkat IV','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(84,'197003021998031009','Agenda 2: Nilai-nilai Dasar PNS','Diklat Prajabatan','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(85,'197003021998031009','Agenda 3: Kedudukan dan Peran PNS Menuju Smart Governance','Diklat Prajabatan','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(86,'197003021998031009','Agenda 3: Pengendalian Pekerjaan','Diklat Kepemimpinan Tingkat IV','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(87,'197003021998031009','Aktualisasi/ Habituasi (80 Hari Kalender)','Diklat Prajabatan','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(88,'197003021998031009','Akuntabilitas PNS','Diklat Prajabatan','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(89,'197003021998031009','Analisis Isu Kontemporer','Diklat Prajabatan','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(91,'	197003142005011008','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:36:18','2025-08-31 20:36:18'),
(92,'	197003142005011008','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:36:18','2025-08-31 20:36:18'),
(93,'	197003142005011008','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:36:18','2025-08-31 20:36:18'),
(94,'197008101994031004','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(95,'197008101994031004','Agenda 2: Nilai-nilai Dasar PNS','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(96,'197008101994031004','Agenda 3: Kedudukan dan Peran PNS Menuju Smart Governance','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(97,'197008101994031004','Agenda 3: Pengendalian Pekerjaan','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(98,'197008101994031004','Aktualisasi Nilai-Nilai BerAKHLAK dalam Pelaksanaan Tugas','Diklat Fungsional','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(99,'197008101994031004','Aktualisasi/ Habituasi (80 Hari Kalender)','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(100,'197008101994031004','Akuntabilitas PNS','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(101,'197008101994031004','Analisis Isu Kontemporer','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(102,'197008101994031004','Anti Korupsi','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(103,'197008101994031004','Anti Korupsi','Diklat Fungsional','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(104,'197008101994031004','ASN berAKHLAK','Diklat Teknis','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(105,'197008241995031002','Mengelola Perubahan','Diklat Kepemimpinan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(106,'197008241995031002','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(107,'197008241995031002','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(108,'197008241995031002','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(109,'197103171997032005','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(110,'197103171997032005','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(111,'197103171997032005','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(112,'197103171997032005','Agenda 2: Kepemimpinan Pelayanan','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(113,'197103171997032005','Agenda 2: Nilai-nilai Dasar PNS','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(114,'197103171997032005','Agenda 3: Kedudukan dan Peran PNS Menuju Smart Governance','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(115,'197103171997032005','Agenda 3: Pengendalian Pekerjaan','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(116,'197103171997032005','Aktualisasi/ Habituasi (80 Hari Kalender)','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(117,'197103171997032005','Akuntabilitas PNS','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(118,'197103171997032005','Akuntansi dan Pertanggungjawaban Pelaksanaan APBD','Diklat Teknis','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(119,'197103171997032005','Analisis Isu Kontemporer','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(120,'197103171997032005','Anti Korupsi','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(121,'197103171997032005','Anti Korupsi','Diklat Fungsional','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(122,'197112041999032007','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(123,'197212101992031004','Mengelola Perubahan','Diklat Kepemimpinan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(124,'197212101992031004','Afirmasi','Diklat Teknis','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(125,'197212101992031004','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(126,'197212101992031004','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(127,'197301101992031001','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(128,'197301101992031001','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(129,'197301101992031001','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(130,'197308292009012002','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(131,'197308292009012002','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(132,'	197502022005011004','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(133,'	197502022005011004','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(134,'	197502022005011004','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(135,'	197505041999031006','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(136,'	197505041999031006','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(137,'	197608171999032005','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(138,'	197608171999032005','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(139,'	197608171999032005','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(140,'	197906202009012003','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(141,'	197906202009012003','Agenda 1: Kepemimpinan Pancasila dan Bela Negara','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(142,'	197906202009012003','Agenda 1: Sikap Perilaku Bela Negara','Diklat Prajabatan','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(143,'	198008272005011010','Integritas, Anti Korupsi dan ASN Berakhlak','Diklat Kepemimpinan','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(144,'	198008272005011010','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(147,'198208162010012020','Integritas, Anti Korupsi dan ASN Berakhlak','Diklat Kepemimpinan','2025-08-31 21:02:52','2025-08-31 21:02:52'),
(148,'198208162010012020','Advokasi','Diklat Kepemimpinan Tingkat IV','2025-08-31 21:02:52','2025-08-31 21:02:52');
/*!40000 ALTER TABLE `kompetensi` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2025_07_04_044051_add_role_to_users_table',1),
(5,'2025_08_13_070557_add_nip_to_users_table',1),
(6,'2025_08_22_220546_create_widyaiswara_table',1),
(7,'2025_08_22_220548_create_calendar_table',1),
(8,'2025_08_22_220551_create_jam_mengajar_table',1),
(9,'2025_08_22_221349_create_kompetensi_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `sessions` VALUES
('8IpenTqXpT1hatUmim2IE3lNpMiyUZtB1kHE3gSH',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64; rv:142.0) Gecko/20100101 Firefox/142.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoidU5ORW1Ndldqd3hXdTRVYUdwYVByWlZoRGE0Q21KNnhhMzdZSFBDbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWwtd2lkeWFpc3dhcmEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1756280692),
('H1TauauKw0LfcWy1eeKkDQrqIC41LFnyqtCrykMz',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoibEtaZTU0MVRLNm5ock1DSE5xZHFPMXYwTEY5eGhQb2w4WU40ek5vNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWwtd2lkeWFpc3dhcmEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1756174338),
('nRLhYADqDom7Zj6sxQ3yQQVKKUVnX7oXt1Gm4e1q',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64; rv:142.0) Gecko/20100101 Firefox/142.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNk1CTDhHTXVScDRxN2l1QjRCeDZMVXFINUppMFY0WENEcHU3QTNrOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWwtd2lkeWFpc3dhcmEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1756699378),
('qcAmIGyKqOneWLuM3PGpLVBaP20ehmH2cs7Iv8e4',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64; rv:142.0) Gecko/20100101 Firefox/142.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXJKWUtjd25JSHRWTjNHQVJyZG5UM3BPQVNRTk8zbHFRR2M0R3NQbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mb3JtdWxpciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1756436369);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nip_unique` (`nip`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `users` VALUES
(1,'Administrator Sistem','199001010001','admin@pakwionline.com','admin','2025-08-22 15:12:53','$2y$12$yuRPTya3kj0pIlyBM9RTe.4VaKbPQAkgzh3kxpY4JxODeLgdZLbNe','2A4XAMNns5OsSM4y4huZUMTLGPv3ahMWhDqPABLhfDiIhalhxkHyL4wefggs','2025-08-22 15:12:53','2025-08-22 15:12:53'),
(2,'Budi Santoso','199205150002','budi@pakwionline.com','user','2025-08-22 15:12:54','$2y$12$NvOrdTdkpXm6qlT2DFCm5O11vFr0u./sLqt5qotkEQGNuG2KqHqmO',NULL,'2025-08-22 15:12:54','2025-08-22 15:12:54'),
(3,'Sari Dewi','198803220003','sari@pakwionline.com','user','2025-08-22 15:12:54','$2y$12$q5p0/R0jrVyFHJp18fu38ujCBCq00BPVz6XHAARDF0R5Q2sNmkTfu',NULL,'2025-08-22 15:12:54','2025-08-22 15:12:54'),
(4,'Agus Prakoso','199012100004',NULL,'user','2025-08-22 15:12:54','$2y$12$S7.4iGiGx4WiWrI0i0.VVOyhTKjCwq0Cdn8BKgl1BCNquzKAqhl2m',NULL,'2025-08-22 15:12:54','2025-08-22 15:12:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `widyaiswara`
--

DROP TABLE IF EXISTS `widyaiswara`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `widyaiswara` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `jabatan_singkat` varchar(255) NOT NULL,
  `jabatan_lengkap` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `penempatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `widyaiswara_nip_unique` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widyaiswara`
--

LOCK TABLES `widyaiswara` WRITE;
/*!40000 ALTER TABLE `widyaiswara` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `widyaiswara` VALUES
(1,'196102171985032008','	Dra. MUKAROMAH SYAKOER, M.M.','http://localhost:8000/images/Dra. MUKAROMAH SYAKOER, M.M.jpg','WIDYAISWARA AHLI UTAMA','WIDYAISWARA AHLI UTAMA (TMT 18-08-2020)','Pembina Utama Madya (IV/d) (TMT 01-04-2016)','BPSDMD Prov.Jateng','2025-08-22 15:13:23','2025-08-28 19:25:45'),
(2,'196112261983031001','	HENDRI SANTOSA, SE, Ak, M.Si. CA','http://localhost:8000/images/HENDRI SANTOSA, SE, Ak, M.Si. CA.jpg','WIDYAISWARA AHLI UTAMA','WIDYAISWARA AHLI UTAMA (TMT 2021-11-19)','Pembina Utama Madya (IV/d) (TMT 2015-04-01)  ','BPSDMD Prov.Jateng','2025-08-22 15:13:23','2025-08-28 19:25:45'),
(3,'196205171991031004','Dr. Ir. SUPRIYANTO, M.Si.','images/Dr. Ir. SUPRIYANTO, M.Si.jpeg','WIDYAISWARA AHLI UTAMA','WIDYAISWARA AHLI UTAMA (TMT 10-12-2021)','Pembina Utama (IV/e) (TMT 01-12-2024)','BPSDMD Prov.Jateng','2025-08-22 15:13:23','2025-08-22 15:13:23'),
(4,'196209161995011001','SUDIRMAN MUSTAFA, SH, M.Hum','images/SUDIRMAN MUSTAFA, SH, M.Hum.jpg','WIDYAISWARA AHLI UTAMA','WIDYAISWARA AHLI UTAMA (TMT 23-04-2020)','Pembina Utama Madya (IV/d) (TMT 01-10-2020)','BPSDMD Prov. Jateng','2025-08-22 15:13:23','2025-08-22 15:13:23'),
(5,'196310281989111001','Drs. SISWANTA JAKA PURNAMA, Apt., M.Kes.','images/Drs. SISWANTA JAKA PURNAMA, Apt., M.Kes.jpg','WIDYAISWARA AHLI UTAMA','WIDYAISWARA AHLI UTAMA (TMT 01-04-2017)','Pembina Utama (IV/e) (TMT 01-10-2020)','BPSDMD Prov. Jateng','2025-08-22 15:13:23','2025-08-22 15:13:23'),
(6,'196410101999031002','Ir. YATNO ISWORO,MP','images/Ir. YATNO ISWORO,MP.jpg','WIDYAISWARA AHLI UTAMA','WIDYAISWARA AHLI UTAMA (TMT 13-02-2020)','Pembina Utama (IV/e) (TMT 01-10-2023))','BPSDMD Prov. Jateng','2025-08-22 15:13:23','2025-08-22 15:13:23'),
(7,'196512131988032004','DWI TITI SUNDARI, SKM, M.Kes','images/DWI TITI SUNDARI, SKM, M.Kes.jpg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 14-03-2013)','Pembina (IV/a) (TMT 01-04-2013)','BPTK Gombong','2025-08-22 15:13:23','2025-08-22 15:13:23'),
(8,'196607221993011001','Ir. YOYON INDRAYANA, M.T','images/Ir. YOYON INDRAYANA, M.T.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 11-02-2021)','Pembina Utama Muda (IV/c) (TMT 01-04-2015)','BPSDMD Prov. Jateng','2025-08-22 15:13:23','2025-08-22 15:13:23'),
(9,'196608181992032015','Ir. WARDI ASTUTI, MPD','images/Ir. WARDI ASTUTI, MPD.jpg','WIDYAISWARA AHLI UTAMA','WIDYAISWARA AHLI UTAMA (TMT 19-03-2019)','Pembina Utama (IV/e) (TMT 01-04-2022)','BPSDM Soropadan','2025-08-22 15:13:24','2025-08-22 15:13:24'),
(10,'196705041986031002','IKBAL KHAFID, S.IP, MSi','images/IKBAL KHAFID, S.IP, MSi.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 29-03-2016)','Pembina Utama Muda (IV/c) (TMT 01-04-2022)','BPSDMD Prov. Jateng','2025-08-22 15:13:24','2025-08-22 15:13:24'),
(11,'196708221991031011','GIGUS NURYATNO, A.Pi., M.A.P.','images/GIGUS NURYATNO, A.Pi., M.A.P.jpg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 29-02-2012)','Pembina Utama Muda (IV/c) (TMT 01-10-2015)','BPSDM Peternakan','2025-08-22 15:13:24','2025-08-22 15:13:24'),
(12,'196709251993031004','Drs. EKO SUPRAYITNO, MM','images/Drs. EKO SUPRAYITNO, MM.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 04-04-2022)','Pembina Utama Muda (IV/c) (TMT 01-10-2019)','BPSDMD Prov. Jateng','2025-08-22 15:13:24','2025-08-22 15:13:24'),
(13,'196807041988031003','Drs. SUMARNO, M.Si','images/Drs. SUMARNO, M.Si.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 12-03-2018)','Pembina Utama Muda (IV/c) (TMT 01-04-2025)','BPSDMD Prov. Jateng','2025-08-22 15:13:24','2025-08-22 15:13:24'),
(14,'196811091993032005','HARINI SETIJOWATI, SKM, M.HSc.','images/HARINI SETIJOWATI, SKM, M.HSc.png','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 18-03-2019)','Pembina Utama Muda (IV/c) (TMT 01-04-2023)','BPSDMD Prov. Jateng','2025-08-22 15:13:24','2025-08-22 15:13:24'),
(15,'196901091997032002','DIYAH MUBAROKAH AKHADIYATI, S.Pi, M.Pi.','images/DIYAH MUBAROKAH AKHADIYATI, S.Pi, M.Pi.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 06-11-2020)','Pembina Utama Muda (IV/c) (TMT 01-10-2023)','BPSDMD Prov. Jateng','2025-08-22 15:13:24','2025-08-22 15:13:24'),
(16,'196901121989032005','SRIYATUN, S.Kep, MM.','images/SRIYATUN, S.Kep, MM.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 18-03-2021)','Pembina Utama Muda (IV/c) (TMT 01-04-2024)','BPSDMD Prov. Jateng','2025-08-22 15:13:24','2025-08-22 15:13:24'),
(17,'196911021990031003','ARIF EFENDY, SH, MM.','images/ARIF EFENDY, SH, MM..jpg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 18-03-2021)','Pembina Utama Muda (IV/c) (TMT 01-04-2024)','BPSDMD Prov. Jateng','2025-08-22 15:13:24','2025-08-22 15:13:24'),
(19,'196911091990031006','Drs. HERU GUNAWAN, MM.','images/Drs. HERU GUNAWAN, MM.jpg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 20-08-2021)','Pembina Tingkat I (IV/b) (TMT 01-10-2023)','	BPSDMD Prov. Jateng','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(20,'197003021998031009','Dr. SUDALMA, S.SI, M.Si','images/Dr. SUDALMA, S.SI, M.Si.jpg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 11-02-2021)','	Pembina Tingkat I (IV/b) (TMT 01-04-2023)','	BPSDMD Prov. Jateng','2025-08-31 19:52:27','2025-08-31 19:52:27'),
(22,'	197003142005011008','MUHAMMAD ALAZIZ, SE, MM.','http://localhost:8000/images/MUHAMMAD ALAZIZ, SE, MM.png','WIDYAISWARA AHLI MADYA','	WIDYAISWARA AHLI MADYA (TMT 15-01-2021)','	Pembina Tingkat I (IV/b) (TMT 01-10-2023))','BPSDMD Prov. Jateng','2025-08-31 20:36:18','2025-08-31 20:36:18'),
(23,'197008101994031004','AGUS PUJIANTO, SH, MM','http://localhost:8000/images/AGUS PUJIANTO, SH, MM.jpg','WIDYAISWARA AHLI PERTAMA','WIDYAISWARA AHLI PERTAMA (TMT 05-01-2017)','Penata Tingkat I (III/d) (TMT 01-10-2015)','BPSDMD Prov. Jateng','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(24,'197008241995031002','AGUS ANDRIYANTO, S.Sos, MM','http://localhost:8000/images/AGUS ANDRIYANTO, S.Sos, MM.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 25-10-2021)','Pembina Tingkat I (IV/b) (TMT 01-10-2023)','BPSDMD Prov. Jateng','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(25,'197103171997032005','TRI MARDIYANTI RATNASARI, SE, M.Acc','http://localhost:8000/images/TRI MARDIYANTI RATNASARI, SE, M.Acc.jpg','WIDYAISWARA AHLI MUDA','WIDYAISWARA AHLI MUDA (TMT 05-01-2017)','	Pembina (IV/a) (TMT 01-10-2023)','BPSDMD Prov. Jateng','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(26,'197112041999032007','KRISTIANA WIDIAWATI, SPi, MT','http://localhost:8000/images/KRISTIANA WIDIAWATI, SPi, MT.jpg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 04-04-2017)','Pembina Tingkat I (IV/b) (TMT 01-04-2024)','BPSDMD Prov. Jateng','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(27,'197212101992031004','SANTOSA, S.Kep, MM','http://localhost:8000/images/SANTOSA, S.Kep, MM.jpeg','WIDYAISWARA AHLI MADYA','	WIDYAISWARA AHLI MADYA (TMT 13-02-2020)','	Pembina Tingkat I (IV/b) (TMT 01-04-2022)','BPSDMD Prov. Jateng','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(28,'197301101992031001','Drs. PAMUNGKAS TUNGGUL WASANA, M.Si','http://localhost:8000/images/Drs. PAMUNGKAS TUNGGUL WASANA, M.Si.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 06-11-2020)','Pembina Utama Muda (IV/c) (TMT 01-04-2024)','BPSDMD Prov. Jateng','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(29,'197308292009012002','Dr. ERNI IRAWATI, SE, M.Pd','http://localhost:8000/images/Dr. ERNI IRAWATI, SE, M.Pd.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 01-04-2017)','Pembina Tingkat I (IV/b) (TMT 01-04-2024))','BPSDMD Prov. Jateng','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(30,'	197502022005011004','	EDI WINARNO AS, ST, M.Kom','http://localhost:8000/images/EDI WINARNO AS, ST, M.Kom.jpg','WIDYAISWARA AHLI MUDA','	WIDYAISWARA AHLI MUDA (TMT 05-01-201)','	Pembina (IV/a) (TMT 01-10-2023)','BPSDMD Prov. Jateng','2025-08-31 20:57:44','2025-08-31 20:57:44'),
(31,'	197505041999031006','	ANDIS TRIYANTO, S.KM, M.Kes','http://localhost:8000/images/ANDIS TRIYANTO, S.KM, M.Kes.jpeg','WIDYAISWARA AHLI MADYA','WIDYAISWARA AHLI MADYA (TMT 16-06-2021)','Pembina Tingkat I (IV/b) (TMT 01-04-2025)','BPSDMD Prov. Jateng','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(32,'	197608171999032005','Dra. NILA AGUSTINA, MPA.','http://localhost:8000/images/Dra. NILA AGUSTINA, MPA.jpg','WIDYAISWARA AHLI MADYA','	WIDYAISWARA AHLI MADYA (TMT 15-01-2021)','	Pembina Tingkat I (IV/b) (TMT 01-10-2023)','BPSDMD Prov. Jateng','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(33,'	197906202009012003','	YUNI INDARTI, S.SOS,MM','http://localhost:8000/images/YUNI INDARTI, S.SOS,MM.jpg','WIDYAISWARA AHLI MUDA','	WIDYAISWARA AHLI MUDA (TMT 05-01-2017)','	Pembina (IV/a) (TMT 01-10-2023)','BPSDMD Prov. Jateng','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(34,'	198008272005011010','	MUCHAMAD RIZAL, ST, M.Sc, M.Eng.','http://localhost:8000/images/MUCHAMAD RIZAL, ST, M.Sc, M.Eng.jpeg','WIDYAISWARA AHLI MUDA','	WIDYAISWARA AHLI MUDA (TMT 05-01-2017)','	Pembina (IV/a) (TMT 01-10-2023)','BPSDMD Prov. Jateng','2025-08-31 20:57:45','2025-08-31 20:57:45'),
(36,'198208162010012020','Dr. ENDANG RIAGUSTRIANINGSIH,SIP, MPd','http://localhost:8000/images/Dr. ENDANG RIAGUSTRIANINGSIH,SIP, MPd.jpg','WIDYAISWARA AHLI MUDA','WIDYAISWARA AHLI MADYA (TMT 23-09-2021)','Pembina Tingkat I (IV/b) (TMT 01-04-2025)','BPSDMD Prov. Jateng','2025-08-31 21:02:52','2025-08-31 21:02:52');
/*!40000 ALTER TABLE `widyaiswara` ENABLE KEYS */;
UNLOCK TABLES;
commit;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-09-03  9:26:00
