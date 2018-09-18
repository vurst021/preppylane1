-- MySQL dump 10.16  Distrib 10.1.28-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	10.1.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Dresses','Dress','2018-09-17 07:49:15','2018-09-17 07:49:15'),(2,'Pants','Pants','2018-09-17 07:49:15','2018-09-17 07:49:15'),(3,'Shorts','Shorts','2018-09-17 07:49:15','2018-09-17 07:49:15'),(4,'Tops','Tops','2018-09-17 07:49:15','2018-09-17 07:49:15');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_product_product_id_foreign` (`product_id`),
  KEY `category_product_category_id_foreign` (`category_id`),
  CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_product`
--

LOCK TABLES `category_product` WRITE;
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
INSERT INTO `category_product` VALUES (1,1,1,NULL,NULL),(2,2,1,NULL,NULL),(3,3,1,NULL,NULL),(4,4,1,NULL,NULL),(5,5,1,NULL,NULL),(6,6,1,NULL,NULL),(7,7,1,NULL,NULL),(8,8,2,NULL,NULL),(9,9,2,NULL,NULL),(10,10,2,NULL,NULL),(11,11,2,NULL,NULL),(12,12,1,NULL,NULL),(13,13,3,NULL,NULL),(14,14,3,NULL,NULL),(15,15,3,NULL,NULL),(16,16,3,NULL,NULL),(17,17,4,NULL,NULL),(18,18,4,NULL,NULL),(19,19,4,NULL,NULL),(20,20,4,NULL,NULL);
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (6,'2014_10_12_000000_create_users_table',1),(7,'2014_10_12_100000_create_password_resets_table',1),(8,'2018_09_08_194420_create_products_table',1),(9,'2018_09_11_093521_create_shoppingcart_table',1),(10,'2018_09_17_151707_create_categories_table',1),(11,'2018_09_17_153917_create_category_product_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Amanda','Dress-Amanda','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:15','2018-09-17 07:49:15'),(2,'Andrea','Dress-Andrea','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:15','2018-09-17 07:49:15'),(3,'Brooklyn','Dress-Brooklyn','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(4,'Caroline','Dress-Caroline','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(5,'Claire','Dress-Claire','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(6,'Erin','Dress-Erin','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(7,'Katelyn','Dress-Katelyn','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(8,'Bella','Pants-Bella','Available Sizes S, M, L',1,'This Pants is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(9,'Daisy','Pants-Daisy','Available Sizes S, M, L',1,'This Pants is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(10,'Eva','Pants-Lucy','Available Sizes S, M, L',1,'This Pants is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(11,'Scarlett','Pants-Scarlett','Available Sizes S, M, L',1,'This Pants is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(12,'Stephanie','Dress-Stephanie','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(13,'Abby','Shorts-Abby','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:16','2018-09-17 07:49:16'),(14,'Britney','Shorts-Britney','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:17','2018-09-17 07:49:17'),(15,'Chelsie','Shorts-Chelsie','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:17','2018-09-17 07:49:17'),(16,'Jade','Shorts-Jade','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:17','2018-09-17 07:49:17'),(17,'Abigail','Tops-Abigail','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:17','2018-09-17 07:49:17'),(18,'Alexis','Tops-Alexis','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:17','2018-09-17 07:49:17'),(19,'Brianna','Tops-Brianna','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:17','2018-09-17 07:49:17'),(20,'Emily','Tops-Emily','Available Sizes S, M, L',1,'This Dress is amazing and suits your simple but yet trendy fashion taste','2018-09-17 07:49:17','2018-09-17 07:49:17');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shoppingcart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-18  1:01:41
