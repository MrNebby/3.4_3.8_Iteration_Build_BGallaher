-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: BenG_13CSI_Graeme_Music_Assessment
-- ------------------------------------------------------
-- Server version 	8.0.39-0ubuntu0.22.04.1
-- Date: Mon, 19 Aug 2024 22:52:17 +0000

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `graeme_music_album`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graeme_music_album` (
  `album_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `album` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`album_id`),
  KEY `album_id` (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graeme_music_album`
--

LOCK TABLES `graeme_music_album` WRITE;
/*!40000 ALTER TABLE `graeme_music_album` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `graeme_music_album` VALUES (1,'10 Years Of Hits'),(2,'A Hundred Miles or More: A Collection'),(3,'A Momentary Lapse Of Reason'),(4,'A Place On Earth - The Greatest Hits'),(5,'All Thing Bright And Beautiful'),(6,'American Heart'),(7,'American Pie'),(8,'Aqualung'),(9,'As Good as It Gets: Folk'),(10,'Babel'),(11,'Barton Hollow'),(12,'Big Jet Plane [EP]'),(13,'Bob Dylan At Budokan'),(14,'Bright Morning Stars'),(15,'Bring Me Home'),(16,'California'),(17,'Ceremonial and War Dances'),(18,'CMT Crossroads'),(19,'Collaboration'),(20,'Continued Silence EP'),(21,'Daughters of the Celtic Moon'),(22,'Day One'),(23,'Drunken Lullabies'),(24,'Early Alchemy'),(25,'Electric Music For The Mind And The Mind'),(26,'Extended Play'),(27,'Fallen'),(28,'Fields of Fire: The Ultimate Collection'),(29,'Finally We Are No One'),(30,'Five Minutes With Arctic Monkeys'),(31,'Flying Cowboys'),(32,'Food In The Belly'),(33,'Footrot Flats: A Dog\'s Tale'),(34,'From Detroit to St Germain'),(35,'Fundamental'),(36,'Gaelforce'),(37,'Greatest Hits'),(38,'His Young Heart'),(39,'Hoboken NJ 1968 (live)'),(40,'Hoea'),(41,'I Hope You Dance'),(42,'I\'m in the Mood for Dancing'),(43,'Lights of the Pacific: The Very Best Of Herbs'),(44,'Lily'),(45,'Listen'),(46,'Listen: The Very Best of Herbs'),(47,'Live In Texas (7 June 2006)'),(48,'Live! Not Enough Shouting'),(49,'Love This Giant'),(50,'Metals'),(51,'Music for Lovers'),(52,'New on Earth'),(53,'Oceania'),(54,'One More from the Road'),(55,'Primitive Man [Bonus Tracks]'),(56,'Running on Empty'),(57,'Sarah Slean'),(58,'Say You Will'),(59,'Shamrock Diaries'),(60,'Slow Train Coming'),(61,'Smilewound'),(62,'Songs from the Front Lawn'),(63,'Soul Divas'),(64,'Spanish Train & Other Stories'),(65,'Strange Mercy'),(66,'The Best of Arlo Guthrie'),(67,'The Best of Joe Cocker [Mushroom]'),(68,'The Best of Nancy Wilson'),(69,'The Collection Vol.1'),(70,'The Collection Vol.2'),(71,'The Cross of Changes'),(72,'The Definitive Collection'),(73,'The Division Bell'),(74,'Three Decades of Males'),(75,'Til We Outnumber \'Em: Woody Guthrie'),(76,'Under The Covers: Vol. 2'),(77,'Walk Like An Egyptian: The Best Of The Bangles'),(78,'Watermark'),(79,'Wide Open Spaces'),(80,'Zombie (UK Single - Part 1)');
/*!40000 ALTER TABLE `graeme_music_album` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `graeme_music_album` with 80 row(s)
--

--
-- Table structure for table `graeme_music_artist`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graeme_music_artist` (
  `artist_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `artist` varchar(35) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`artist_id`),
  KEY `artist_id` (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graeme_music_artist`
--

LOCK TABLES `graeme_music_artist` WRITE;
/*!40000 ALTER TABLE `graeme_music_artist` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `graeme_music_artist` VALUES (1,'A Flock of Seagulls'),(2,'Acoustic Alchemy'),(3,'Alison Krauss'),(4,'Angus Stone'),(5,'Arctic Monkeys'),(6,'Arlo Guthrie'),(7,'Average White Band'),(8,'Belinda Carlisle'),(9,'Big Country '),(10,'Black Lodge Singers'),(11,'Bob Dylan'),(12,'Chris de Burgh'),(13,'Chris Rea'),(14,'Country Joe & The Fish'),(15,'Daughter'),(16,'Dave Dobbyn'),(17,'David Byrne'),(18,'Dixie Chicks'),(19,'Don McLean'),(20,'Earl Klugh'),(21,'Enigma'),(22,'Enya'),(23,'Evanescence'),(24,'Faith Hill'),(25,'Feist'),(26,'Fleetwood Mac'),(27,'Flogging Molly'),(28,'Gaelforce'),(29,'George Benson'),(30,'Gin Wigmore'),(31,'Herbs'),(32,'Icehouse'),(33,'Imagine Dragons'),(34,'Jackson Browne'),(35,'James Taylor'),(36,'Jethro Tull'),(37,'Joe Cocker'),(38,'Julia Stone'),(39,'Lee Ann Womack'),(40,'Lisa Lynne'),(41,'Lynyrd Skynyrd'),(42,'Maria Muldaur'),(43,'Matthew Sweet'),(44,'Mother Earth'),(45,'Mum'),(46,'Mumford & Sons'),(47,'Nancy Wilson'),(48,'Nina Simone'),(49,'Oceania'),(50,'Owl City'),(51,'Pet Shop Boys'),(52,'Pink Floyd'),(53,'Rickie Lee Jones'),(54,'Ronan Keating'),(55,'Sarah Slean'),(56,'Shona Laing'),(57,'Soul Divas'),(58,'St Germain'),(59,'St. Vincent'),(60,'Stevie Wonder'),(61,'Susanna Hoffs'),(62,'The Bangles'),(63,'The Civil Wars'),(64,'The Cranberries'),(65,'The Front Lawn'),(66,'The Nolans'),(67,'The Wailin\' Jennys'),(68,'The Young Tradition'),(69,'Three Decades of Males'),(70,'WAI.TAI'),(71,'Wendy Matthews'),(72,'Wilson Phillips'),(73,'Wolfstone'),(74,'Woody Guthrie'),(75,'Xavier Rudd');
/*!40000 ALTER TABLE `graeme_music_artist` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `graeme_music_artist` with 75 row(s)
--

--
-- Table structure for table `graeme_music_contact`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graeme_music_contact` (
  `contact_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graeme_music_contact`
--

LOCK TABLES `graeme_music_contact` WRITE;
/*!40000 ALTER TABLE `graeme_music_contact` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `graeme_music_contact` VALUES (1,'Ben','0bgallaher@tawacollege.school.nz','+0211245','This is a test of the contact form'),(2,'Ewan','email@address','012 345 6789','Just wanted to say hello'),(3,'Ewan','ewan@email.com','012 345 6789','Can I please have Admin?');
/*!40000 ALTER TABLE `graeme_music_contact` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `graeme_music_contact` with 3 row(s)
--

--
-- Table structure for table `graeme_music_genre`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graeme_music_genre` (
  `genre_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `genre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`genre_id`),
  KEY `genre_id` (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graeme_music_genre`
--

LOCK TABLES `graeme_music_genre` WRITE;
/*!40000 ALTER TABLE `graeme_music_genre` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `graeme_music_genre` VALUES (1,'Alternative Indie'),(2,'Alternative Rock'),(3,'Bluegrass'),(4,'Blues'),(5,'Celtic'),(6,'Country'),(7,'Country Folk'),(8,'Easy Listening'),(9,'Electronic Dance'),(10,'Electronica'),(11,'Ethnic'),(12,'Folk'),(13,'Folk Rock'),(14,'Grunge'),(15,'Hard Rock'),(16,'Indie Rock'),(17,'Jazz'),(18,'Moari'),(19,'Native American'),(20,'New Age'),(21,'New Wave'),(22,'Pop'),(23,'Post-Rock'),(24,'Progressive Rock'),(25,'Psychadelic'),(26,'Psychadelic Rock'),(27,'R&B'),(28,'Reggae'),(29,'Rock'),(30,'Seasonal'),(31,'Soul'),(32,'UK Folk');
/*!40000 ALTER TABLE `graeme_music_genre` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `graeme_music_genre` with 32 row(s)
--

--
-- Table structure for table `graeme_music_main`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graeme_music_main` (
  `song_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(90) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `title` varchar(90) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `track_number` tinyint unsigned NOT NULL,
  `duration` char(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `size` int unsigned NOT NULL,
  `album_id` smallint unsigned NOT NULL,
  PRIMARY KEY (`song_id`),
  KEY `song_id` (`song_id`),
  KEY `album_id` (`album_id`),
  CONSTRAINT `graeme_music_main_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `graeme_music_album` (`album_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graeme_music_main`
--

LOCK TABLES `graeme_music_main` WRITE;
/*!40000 ALTER TABLE `graeme_music_main` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `graeme_music_main` VALUES (1,'2-30.mp3','2:30',7,'01:00',1446,45),(2,'A Commotion.mp3','A Commotion',5,'03:53',6904,50),(3,'Alabama Blues.mp3','Alabama Blues',2,'07:19',6865,34),(4,'Alice\'s Restaurant Massacree.mp3','Alice\'s Restaurant Massacree',1,'18:31',34731,66),(5,'All The Young Dudes.mp3','All The Young Dudes',5,'03:52',9081,76),(6,'Alligator Sky.mp3','Alligator Sky',13,'03:15',6176,5),(7,'American Heart.mp3','American Heart',1,'03:50',9069,6),(8,'American Pie.mp3','American Pie',1,'08:32',20045,7),(9,'Aqualung.mp3','Aqualung',1,'06:37',11596,8),(10,'Ashes By Now.mp3','Ashes By Now',7,'04:11',9851,41),(11,'Ashes By Now.mp3','Ashes By Now',8,'04:12',9880,37),(12,'Big Jet Plane (Radio Edit).mp3','Big Jet Plane (Radio Edit)',1,'03:43',8776,12),(13,'Bird Song.mp3','Bird Song',3,'03:33',3338,14),(14,'Boogie On Reggae Woman.mp3','Boogie On Reggae Woman',35,'05:14',10894,72),(15,'Brazilian Stomp.mp3','Brazilian Stomp',3,'05:39',10605,19),(16,'Bring Me Home.mp3','Bring Me Home',5,'06:05',11428,15),(17,'C\'est La Mort.mp3','C\'est La Mort',3,'02:29',4094,11),(18,'Chicken on a Raft.mp3','Chicken on a Raft',6,'03:30',6583,9),(19,'Don\'t Think Twice, It\'s All Right.mp3','Don\'t Think Twice, It\'s All Right',5,'05:01',11766,13),(20,'Eagle Plume Dancer.mp3','Eagle Plume Dancer',7,'02:25',2269,17),(21,'Earth And Sky.mp3','Earth & Sky',3,'03:28',5984,40),(22,'Everybody\'s Fool.mp3','Everybody\'s Fool',3,'03:17',7893,27),(23,'Fake Tales Of San Francisco.mp3','Fake Tales Of San Francisco',1,'03:01',7271,30),(24,'fear.mp3','Hey',4,'04:22',4101,52),(25,'Fields of Gold.mp3','Fields of Gold',3,'03:34',8382,21),(26,'Fire.mp3','Fire',7,'03:26',6465,63),(27,'Fortune Teller.mp3','Fortune Teller',4,'03:27',4866,32),(28,'Free Bird Live [Fox Theater].mp3','Free Bird Live [Fox Theater]',14,'13:36',25506,54),(29,'French Letter.mp3','French Letter',3,'04:36',8646,43),(30,'Got The Love - 2009.mp3','Got The Love',12,'03:47',8874,69),(31,'Great Southern Land.mp3','Great Southern Land',1,'05:19',12468,55),(32,'Hallelujah.mp3','Hallelujah',3,'03:31',8263,26),(33,'Hard Travelin\' Hootenanny.mp3','Hard Travelin\' Hootenanny',1,'03:30',6588,75),(34,'He Aha Ra Te Manu.mp3','He Aha Ra Te Manu',2,'02:23',4444,40),(35,'Hineraukatauri (Goddess of Music).mp3','Hineraukatauri (Goddess of Music)',4,'04:54',9222,53),(36,'Hopeless Wanderer.mp3','Hopeless Wanderer',9,'05:07',10236,10),(37,'How do you plead.mp3','How Do You Plead',7,'06:40',6251,34),(38,'How Sweet Can You Get - 2009.mp3','How Sweet Can You Get',9,'03:58',9330,70),(39,'If I Ever Leave This World Alive.mp3','If I Ever Leave This World Alive',4,'03:21',4722,23),(40,'I\'ll Be Long Gone.mp3','I\'ll Be Long Gone',4,'05:56',11141,15),(41,'I\'m in the Mood for Dancing.mp3','I\'m in the Mood for Dancing',1,'02:59',5601,42),(42,'Leave a Light On.mp3','Leave a Light On',4,'04:16',4006,4),(43,'Like someone in love.mp3','Like Someone In Love',8,'02:22',3368,68),(44,'Little Black Book.mp3','Little Black Book',10,'04:12',3951,4),(45,'Lost for Words.mp3','Lost For Words',9,'03:48',5366,1),(46,'Maggie.mp3','Maggie',11,'03:41',6914,36),(47,'Maggie.mp3','Maggies',14,'04:47',7862,48),(48,'Marijuana.mp3','Marijuana',14,'02:32',3575,25),(49,'Marooned.mp3','Marooned',4,'05:29',10384,73),(50,'Mary.mp3','Mary',32,'03:53',9109,28),(51,'Mary.mp3','Mary',3,'04:04',3818,22),(52,'Messages.mp3','Messages',3,'04:02',5686,32),(53,'Northern Lights.mp3','Northern Lights',5,'03:33',8359,65),(54,'Now There\'s That Fear Again.mp3','Now There\'s That Fear Again',7,'03:56',5550,29),(55,'One Golden Rule.mp3','One Golden Rule',22,'04:30',10569,59),(56,'One Slip.mp3','One Slip',4,'05:08',10086,3),(57,'Parihaka.mp3','Parihaka',9,'04:16',8028,43),(58,'Radioactive.mp3','Radioactive',1,'03:08',7414,20),(59,'River.mp3','River',9,'03:12',7553,78),(60,'Sarah Victoria.mp3','Sarah Victoria',2,'01:54',3692,24),(61,'Shower the People.mp3','Shower the People',9,'02:03',2906,18),(62,'Shower the People.mp3','Shower the People',11,'04:01',9426,37),(63,'Silent Warrior.mp3','Silent Warrior',5,'06:09',11546,71),(64,'Simple Love [#].mp3','Simple Love',2,'04:44',4444,2),(65,'Slice Of Heaven.mp3','Slice of Heaven',1,'04:08',9693,74),(66,'Slice of Heaven.mp3','Slice of Heaven',13,'04:37',4347,33),(67,'Slice of Heaven.mp3','Slice of Heaven',10,'04:37',8667,46),(68,'Slow Train.mp3','Slow Train',4,'05:59',14107,60),(69,'Spanish Train.mp3','Spanish Train',1,'05:02',11841,64),(70,'Stay.mp3','Elliot',1,'02:42',2551,57),(71,'Stay.mp3','Stay',10,'03:24',7990,56),(72,'Steal Your Heart Away.mp3','Steal Your Heart Away',13,'03:33',5011,58),(73,'Sweet Baby James.mp3','Sweet Baby James',5,'03:25',4015,18),(74,'Sweet Baby James.mp3','Sweet Baby James',4,'02:54',6818,37),(75,'Tell me.mp3','Tell me',32,'02:15',2884,77),(76,'Fridays Child.mp3','Fridays Child',1,'04:03',7608,44),(77,'The Forest Awakes.mp3','The Forest Awakes',6,'04:52',11442,49),(78,'The Horses.mp3','The Horses',1,'04:52',9158,31),(79,'The Mother.mp3','The Mother',6,'03:15',4594,32),(80,'The Sodom And Gomorrah Show.mp3','The Sodom And Gomorrah Show',19,'05:19',7496,35),(81,'The Times They Are A-Changin\'.mp3','The Times They Are A-Changin\'',22,'05:28',12854,13),(82,'The Traveller.mp3','The Traveller',6,'03:26',5677,45),(83,'The Woods.mp3','The Woods',2,'03:40',8959,38),(84,'Til We Outnumber \'Em (This Land Is You Land).mp3','Til We Outnumber \'Em (This Land Is You Land)',19,'02:37',4929,75),(85,'Turn! Turn! Turn! (To Everything There Is A Season).mp3','Turn! Turn! Turn! (To Everything There Is A Season)',6,'02:40',5025,16),(86,'Turn! Turn! Turn!.mp3','Turn! Turn! Turn!',10,'03:41',3463,39),(87,'Unchain My Heart [90\'s Version].mp3','Unchain My Heart [90\'s Version]',1,'05:06',11972,67),(88,'Waiting For You.mp3','Waiting For You',11,'03:24',6488,24),(89,'We can let it happen tonight.mp3','We Can Let It Happen Tonight',6,'04:10',9784,51),(90,'When Girls Collide.mp3','When Girls Collide',3,'05:00',11870,61),(91,'When You Come Back Home.mp3','When You Come Back Home',1,'03:37',3408,62),(92,'You Probably Couldn\'t See For The Lights, But You Were Staring Straight At Me.mp3','You Probably Couldn\'t See For The Lights, But You Were Staring Straight At Me',4,'02:22',5771,47),(93,'You Were Mine.mp3','You Were Mine',5,'03:37',3409,79),(94,'You\'re Just a Country Boy [#].mp3','You\'re Just a Country Boy',1,'03:28',3258,2),(95,'Zombie.mp3','Zombie',1,'04:12',9874,80);
/*!40000 ALTER TABLE `graeme_music_main` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `graeme_music_main` with 95 row(s)
--

--
-- Table structure for table `graeme_music_main_to_artist`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graeme_music_main_to_artist` (
  `song_id` smallint unsigned NOT NULL,
  `artist_id` smallint unsigned NOT NULL,
  KEY `song_id` (`song_id`),
  KEY `artist_id` (`artist_id`),
  CONSTRAINT `graeme_music_main_to_artist_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `graeme_music_main` (`song_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `graeme_music_main_to_artist_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `graeme_music_artist` (`artist_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graeme_music_main_to_artist`
--

LOCK TABLES `graeme_music_main_to_artist` WRITE;
/*!40000 ALTER TABLE `graeme_music_main_to_artist` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `graeme_music_main_to_artist` VALUES (1,1),(2,25),(3,58),(4,6),(5,43),(5,61),(6,50),(7,24),(8,19),(9,36),(10,39),(11,39),(12,4),(12,38),(13,67),(14,60),(15,20),(15,29),(16,44),(17,63),(18,68),(19,11),(20,10),(21,70),(22,23),(23,5),(24,56),(25,40),(26,57),(27,75),(28,41),(29,31),(30,7),(31,32),(32,30),(33,74),(34,70),(35,49),(36,46),(37,58),(38,7),(39,27),(40,44),(41,66),(42,8),(43,47),(44,8),(45,54),(46,28),(47,73),(48,14),(49,52),(50,9),(51,55),(52,75),(53,59),(54,45),(55,13),(56,52),(57,31),(58,33),(59,22),(60,2),(61,18),(61,35),(62,35),(63,21),(64,3),(65,69),(66,16),(66,31),(67,31),(68,11),(69,12),(70,55),(71,34),(72,26),(73,18),(73,35),(74,35),(75,62),(76,71),(77,17),(77,59),(78,53),(79,75),(80,51),(81,11),(82,1),(83,15),(84,74),(85,72),(86,48),(87,37),(88,2),(89,42),(90,45),(91,65),(92,5),(93,18),(94,3),(95,64);
/*!40000 ALTER TABLE `graeme_music_main_to_artist` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `graeme_music_main_to_artist` with 102 row(s)
--

--
-- Table structure for table `graeme_music_main_to_genre`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graeme_music_main_to_genre` (
  `song_id` smallint unsigned NOT NULL,
  `genre_id` smallint unsigned NOT NULL,
  KEY `song_id` (`song_id`),
  KEY `genre_id` (`genre_id`),
  CONSTRAINT `graeme_music_main_to_genre_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `graeme_music_main` (`song_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `graeme_music_main_to_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `graeme_music_genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graeme_music_main_to_genre`
--

LOCK TABLES `graeme_music_main_to_genre` WRITE;
/*!40000 ALTER TABLE `graeme_music_main_to_genre` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `graeme_music_main_to_genre` VALUES (1,21),(2,1),(3,9),(4,12),(5,29),(5,22),(6,22),(6,9),(7,6),(8,13),(9,24),(9,15),(9,13),(10,6),(10,22),(11,6),(11,22),(12,12),(13,12),(14,27),(14,31),(15,17),(16,22),(16,12),(17,12),(17,1),(17,22),(18,32),(19,7),(20,19),(20,11),(21,18),(21,11),(21,20),(22,1),(22,29),(23,1),(24,5),(25,20),(26,31),(27,1),(27,12),(28,29),(29,28),(29,22),(30,31),(30,27),(31,29),(31,22),(32,22),(33,12),(34,18),(34,11),(34,20),(35,20),(36,12),(36,1),(36,29),(37,9),(38,31),(38,27),(39,29),(39,1),(39,12),(40,22),(40,12),(41,22),(41,30),(42,9),(42,22),(42,29),(43,17),(44,22),(45,22),(46,5),(47,20),(47,22),(48,25),(49,26),(50,29),(51,1),(51,12),(51,29),(52,12),(53,16),(54,23),(55,22),(55,29),(55,12),(56,24),(57,28),(58,2),(59,20),(59,30),(60,20),(60,17),(61,29),(62,29),(63,20),(63,22),(63,29),(64,3),(65,8),(66,22),(67,22),(68,29),(69,29),(69,12),(69,22),(70,29),(71,29),(72,1),(72,22),(72,6),(73,6),(73,12),(73,13),(74,13),(74,12),(74,6),(75,29),(76,22),(77,1),(78,22),(79,1),(79,12),(80,9),(80,1),(80,22),(81,12),(82,21),(83,1),(84,12),(85,22),(86,17),(87,27),(88,20),(88,17),(89,4),(90,10),(91,1),(91,12),(92,16),(92,2),(93,6),(94,22),(94,6),(94,30),(95,2),(95,14);
/*!40000 ALTER TABLE `graeme_music_main_to_genre` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `graeme_music_main_to_genre` with 150 row(s)
--

--
-- Table structure for table `graeme_music_user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graeme_music_user` (
  `user_id` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graeme_music_user`
--

LOCK TABLES `graeme_music_user` WRITE;
/*!40000 ALTER TABLE `graeme_music_user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `graeme_music_user` VALUES ('Ben','test','0BGallaher@tawacollege.school.nz'),('Graeme','dojustly','graeme@gmail.com');
/*!40000 ALTER TABLE `graeme_music_user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `graeme_music_user` with 2 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Mon, 19 Aug 2024 22:52:17 +0000
