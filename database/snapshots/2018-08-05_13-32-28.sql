
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
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (38,'2014_10_12_000000_create_users_table',1),(39,'2014_10_12_100000_create_password_resets_table',1),(40,'2018_07_25_120846_create_statements_table',1),(41,'2018_07_28_150742_create_reviews_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `star` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `statement_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `statements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `who` varchar(255) NOT NULL,
  `statement` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `statements` WRITE;
/*!40000 ALTER TABLE `statements` DISABLE KEYS */;
INSERT INTO `statements` VALUES (1,'NARUTO -ナルト-','うずまきナルト','オレが火影になってから　日向を変えてやるよォ!!','2018-08-04 22:30:42','2018-08-04 22:30:42'),(2,'NARUTO -ナルト-','うずまきナルト','イルカ先生に手ェ出すな…殺すぞ…','2018-08-04 22:35:17','2018-08-04 22:35:17'),(3,'NARUTO -ナルト-','うずまきナルト','運命なんて、誰かが決めるもんじゃない','2018-08-04 22:35:54','2018-08-04 22:35:54'),(4,'NARUTO -ナルト-','うずまきナルト','賢いっていうのがそういう事なら、俺は一生バカでいい。','2018-08-04 22:36:21','2018-08-04 22:36:21'),(5,'NARUTO -ナルト-','うちはイタチ','許せサスケ、これで最後だ','2018-08-04 22:37:21','2018-08-04 22:37:21'),(6,'NARUTO -ナルト-','うちはイタチ','何故弱いか…足りないからだ……憎しみが…','2018-08-04 22:38:15','2018-08-04 22:38:15'),(7,'NARUTO -ナルト-','ロック・リー','前に一度いったでしょ　死ぬまでアナタを守るって…','2018-08-04 22:39:16','2018-08-04 22:39:16'),(8,'NARUTO -ナルト-','ロック・リー','たとえ忍術や幻術は使えなくても\r\n立派な忍者になれることを証明したいです！','2018-08-04 22:39:31','2018-08-04 22:39:31'),(9,'孤独のグルメ','井之頭五郎','うーん……ぶた肉ととん汁でぶたがダブってしまった','2018-08-04 22:41:14','2018-08-04 22:41:14'),(10,'孤独のグルメ','井之頭五郎','うおォン　俺はまるで人間火力発電所だ','2018-08-04 22:41:55','2018-08-04 22:41:55'),(11,'孤独のグルメ','井之頭五郎','うわ…なんだこのホウレン草 固くて臭くて…まるで道端の草を食っているようだが マズくない！けっしてマズくないぞ!! ああ うまい！ なんだかなつかしい味だ','2018-08-04 22:42:29','2018-08-04 22:42:29'),(12,'孤独のグルメ','井之頭五郎','このワザとらしいメロン味！','2018-08-04 22:43:09','2018-08-04 22:43:09'),(13,'孤独のグルメ','井之頭五郎','まるで俺の体は製鉄所 胃はその溶鉱炉のようだ','2018-08-04 22:43:24','2018-08-04 22:43:24'),(14,'孤独のグルメ','井之頭五郎','ラストの2枚……あれが効いたな','2018-08-04 22:43:41','2018-08-04 22:43:41'),(15,'孤独のグルメ','井之頭五郎','ここでは青空がおかずだ','2018-08-04 22:43:56','2018-08-04 22:43:56'),(16,'孤独のグルメ','井之頭五郎','俺は歩きながら腹ごしらえの算段をする','2018-08-04 22:46:21','2018-08-04 22:46:21'),(17,'孤独のグルメ','井之頭五郎','食べはじめたばかりなのにごはん不足が当選確実','2018-08-04 22:48:04','2018-08-04 22:48:04'),(18,'孤独のグルメ','井之頭五郎','腹が減って死にそうなんだ','2018-08-04 22:48:48','2018-08-04 22:48:48'),(19,'孤独のグルメ','井之頭五郎','ラーメンの後の口直しの水ってラーメンの一部というくらいうまい','2018-08-04 22:49:56','2018-08-04 22:49:56'),(20,'孤独のグルメ','井之頭五郎','ほーいいじゃないか\r\nこういうのでいいんだよ\r\nこういうので','2018-08-04 22:51:00','2018-08-04 22:51:00'),(21,'孤独のグルメ','井之頭五郎','ツバが出てきた','2018-08-04 22:52:10','2018-08-04 22:52:10'),(22,'孤独のグルメ','井之頭五郎','このタマネギ　箸休めを超えた箸休めだ','2018-08-04 22:52:57','2018-08-04 22:52:57');
/*!40000 ALTER TABLE `statements` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

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

