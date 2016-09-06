

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `priceybd`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brand`
--

CREATE TABLE IF NOT EXISTS `Brand` (
  `BrandID` int(11) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(40) NOT NULL,
  `BrandImage` varchar(200) NOT NULL,
  PRIMARY KEY (`BrandID`),
  UNIQUE KEY `BrandName` (`BrandName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `Brand`
--

INSERT INTO `Brand` (`BrandID`, `BrandName`, `BrandImage`) VALUES
(1, 'Samsung', 'http://api.treebricks.com/api_res/brand_imgs/samsung.png'),
(2, 'Apple', 'http://api.treebricks.com/api_res/brand_imgs/apple.png'),
(3, 'Asus', 'http://api.treebricks.com/api_res/brand_imgs/asus.png'),
(4, 'BlackBerry', 'http://api.treebricks.com/api_res/brand_imgs/blackBerry.png'),
(5, 'Sony', 'http://api.treebricks.com/api_res/brand_imgs/sony.png'),
(6, 'Symphony', 'http://api.treebricks.com/api_res/brand_imgs/symphony.png'),
(7, 'HTC', 'http://api.treebricks.com/api_res/brand_imgs/htc.png'),
(8, 'Huawei', 'http://api.treebricks.com/api_res/brand_imgs/huawei.png'),
(9, 'Walton', 'http://api.treebricks.com/api_res/brand_imgs/walton.png'),
(10, 'Xiaomi', 'http://api.treebricks.com/api_res/brand_imgs/xiaomi.png'),
(11, 'Kingstar', 'http://api.treebricks.com/api_res/brand_imgs/kingstar.png'),
(12, 'Lava', 'http://api.treebricks.com/api_res/brand_imgs/lava.png'),
(13, 'Lenovo', 'http://api.treebricks.com/api_res/brand_imgs/lenovo.png'),
(14, 'LG', 'http://api.treebricks.com/api_res/brand_imgs/lg.png'),
(15, 'Mango', 'http://api.treebricks.com/api_res/brand_imgs/mango.png'),
(16, 'Maximus', 'http://api.treebricks.com/api_res/brand_imgs/maximus.png'),
(17, 'Micromax', 'http://api.treebricks.com/api_res/brand_imgs/micromax.png'),
(18, 'Microsoft', 'http://api.treebricks.com/api_res/brand_imgs/microsoft.png'),
(19, 'Motorola', 'http://api.treebricks.com/api_res/brand_imgs/motorola.png'),
(20, 'MyCell', 'http://api.treebricks.com/api_res/brand_imgs/mycell.png'),
(21, 'Nokia', 'http://api.treebricks.com/api_res/brand_imgs/nokia.png'),
(22, 'Octenn', 'http://api.treebricks.com/api_res/brand_imgs/Octenn.png'),
(23, 'Okapia', 'http://api.treebricks.com/api_res/brand_imgs/okapia.png'),
(24, 'OnePlus', 'http://api.treebricks.com/api_res/brand_imgs/oneplus.png'),
(25, 'oppo', 'http://api.treebricks.com/api_res/brand_imgs/oppo.png'),
(26, 'Alcatel', 'http://api.treebricks.com/api_res/brand_imgs/alcatel.png'),
(27, 'Gionee', 'http://api.treebricks.com/api_res/brand_imgs/gionee.png'),
(28, 'Helio', 'http://api.treebricks.com/api_res/brand_imgs/helio.png'),
(29, 'Intex', 'http://api.treebricks.com/api_res/brand_imgs/intex.png'),
(30, 'Karbonn', 'http://api.treebricks.com/api_res/brand_imgs/karbonn.png'),
(31, 'ZTE', 'http://api.treebricks.com/api_res/brand_imgs/zte.png');

-- --------------------------------------------------------

--
-- Table structure for table `MobileFeatures`
--

CREATE TABLE IF NOT EXISTS `MobileFeatures` (
  `MobileID` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `Brand` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ModelName` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `NetTechnology` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `2GBands` varchar(70) DEFAULT NULL,
  `3GBands` varchar(100) DEFAULT NULL,
  `4GBands` varchar(300) DEFAULT NULL,
  `Speed` varchar(50) DEFAULT NULL,
  `GPRS` varchar(5) DEFAULT NULL,
  `EDGE` varchar(5) DEFAULT NULL,
  `Announced` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `BodyDimensions` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BodyWeight` varchar(20) DEFAULT NULL,
  `SimType` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BodyFeatures` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DisplayType` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DisplaySize` float DEFAULT NULL,
  `DisplayResolution` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DisplayProtection` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DisplayFeatures` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Os` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Chipset` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cpu` float DEFAULT NULL,
  `CpuType` varchar(200) DEFAULT NULL,
  `Gpu` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `MemoryRam` tinyint(4) DEFAULT NULL,
  `MemoryInternal` smallint(6) DEFAULT NULL,
  `MemoryOption` varchar(50) DEFAULT NULL,
  `MemoryExpand` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PrimaryCamera` tinyint(4) DEFAULT NULL,
  `PrimaryCameraFeatures` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Video` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SecondaryCamera` tinyint(10) DEFAULT NULL,
  `SecondaryCameraFeatures` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CameraFeatures` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoundAlertTypes` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoundLoudspeaker` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoundJack` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoundFeatures` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Wifi` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Bluetooth` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gps` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nfc` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Radio` varchar(40) DEFAULT NULL,
  `Usb` varchar(60) DEFAULT NULL,
  `Sensors` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Messaging` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Browser` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Java` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `OtherFeatures` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BatteryType` varchar(60) DEFAULT NULL,
  `BatteryCapacity` mediumint(9) DEFAULT NULL,
  `BatteryTalktime` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BatteryMusicplay` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Colors` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Performance` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Photo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MobileID`),
  UNIQUE KEY `ModelName` (`ModelName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `MobileFeatures`
--

INSERT INTO `MobileFeatures` (`MobileID`, `Brand`, `ModelName`, `NetTechnology`, `2GBands`, `3GBands`, `4GBands`, `Speed`, `GPRS`, `EDGE`, `Announced`, `Status`, `BodyDimensions`, `BodyWeight`, `SimType`, `BodyFeatures`, `DisplayType`, `DisplaySize`, `DisplayResolution`, `DisplayProtection`, `DisplayFeatures`, `Os`, `Chipset`, `Cpu`, `CpuType`, `Gpu`, `MemoryRam`, `MemoryInternal`, `MemoryOption`, `MemoryExpand`, `PrimaryCamera`, `PrimaryCameraFeatures`, `Video`, `SecondaryCamera`, `SecondaryCameraFeatures`, `CameraFeatures`, `SoundAlertTypes`, `SoundLoudspeaker`, `SoundJack`, `SoundFeatures`, `Wifi`, `Bluetooth`, `Gps`, `Nfc`, `Radio`, `Usb`, `Sensors`, `Messaging`, `Browser`, `Java`, `OtherFeatures`, `BatteryType`, `BatteryCapacity`, `BatteryTalktime`, `BatteryMusicplay`, `Colors`, `Performance`, `Photo`) VALUES
(1, 'Motorola', 'Motorola Moto Z Play', 'GSM / CDMA / HSPA / LTE', 'GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (dual-SIM model only)', 'HSDPA 850 / 900 / 1900 / 2100', 'LTE band 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 13(700) - USA', 'HSPA, LTE', 'Yes', 'Yes', '2016, August', 'Coming soon. Exp. release 2016, September', '156.4 x 76.4 x 7 mm (6.16 x 3.01 x 0.28 in)', '165 g (5.82 oz)', 'Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)', 'Water repellent nano-coating (IP52 certified)', 'Super AMOLED capacitive touchscreen, 16M colors', 5.5, '1080 x 1920', 'No', 'No', 'Android OS, v6.0.1 (Marshmallow)', 'Qualcomm MSM8953 Snapdragon 625', 2, 'Octa-core 2.0 GHz Cortex-A53', 'Adreno 506', 3, 32, '32 GB', 'microSD, up to 256 GB', 16, '16 MP, f/2.0, phase detection and laser autofocus, dual-LED (dual tone) flash', '2160p@30fps, 1080p@30fps, 720p@120fps', 5, '5 MP, f/2.2, 1.4 µm pixel size, LED flash, 1080p', '1.3 µm pixel size, geo-tagging, touch focus, face detection, panorama, HDR', 'Vibration; MP3, WAV ringtones', 'Yes', 'Yes', 'Active noise cancellation with dedicated mic', 'Wi-Fi 802.11 a/b/g/n, Wi-Fi Direct, hotspot', 'v4.0, A2DP, LE', 'Yes, with A-GPS', 'Yes', 'To be confirmed', 'Type-C 1.0 reversible connector, magnetic connector', 'Fingerprint, accelerometer, gyro, proximity, compass', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML5', 'No', 'MP3/AAC+/WAV/Flac player\r\nMP4/H.264 player\r\nPhoto/video editor\r\nDocument viewer', 'Non-removable Li-Ion 3510 mAh battery', 3510, 'No Info', 'No Info', 'Black, White', 'No Info', 'http://cdn2.gsmarena.com/vv/pics/motorola/motorola-moto-z-play-1.jpg'),
(2, 'Xiaomi', 'Xiaomi Redmi Note 3', 'GSM / HSPA / LTE', 'GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2', 'HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100', 'LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 38(2600), 39(1900), 40(2300), 41(2500)', 'HSPA, LTE', 'Yes', 'Yes', '2016, January', 'Released 2016, February', '150 x 76 x 8.7 mm (5.91 x 2.99 x 0.34 in)', '164 g (5.78 oz)', 'Dual SIM (Micro-SIM/Nano-SIM, dual stand-by)', NULL, 'IPS LCD capacitive touchscreen, 16M colors', 5.5, '1080 x 1920', 'No', 'MIUI 8.0', 'Android OS, v5.1.1 (Lollipop)', 'Qualcomm MSM8956 Snapdragon 650', 1.8, 'Hexa-core (4x1.4 GHz Cortex-A53 & 2x1.8 GHz Cortex-A72)', 'Adreno 510', 2, 16, '16 GB, 2 GB RAM / 32 GB, 3 GB RAM', 'microSD, up to 256 GB (uses SIM 2 slot)', 16, '16 MP, f/2.0, phase detection autofocus, dual-LED (dual tone) flash', '1080p@30fps', 5, '5 MP, f/2.0, 1080p', 'Geo-tagging, touch focus, face/smile detection, HDR, panorama', 'Vibration; MP3, WAV ringtones', 'Yes', 'Yes', '24-bit/192kHz audio\r\nActive noise cancellation with dedicated mic', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot', 'v4.1, A2DP, LE', 'Yes, with A-GPS, GLONASS, BDS', 'Yes', 'Stereo FM radio, recording', 'microUSB v2.0, USB On-The-Go', 'Fingerprint, accelerometer, gyro, proximity, compass', 'SMS(threaded view), MMS, Email, Push Mail, IM', 'HTML5', 'No', 'Fast battery charging\r\nXviD/MP4/H.265 player\r\nMP3/WAV/eAAC+/Flac player\r\nPhoto/video editor\r\nDocument viewer', 'Non-removable Li-Po 4000 mAh battery', 4000, 'No Inforamtion', 'No Inforamtion', 'Silver, Gray, Gold', 'No Inforamtion', 'http://cdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-3-1.jpg'),
(3, 'Samsung', 'Samsung Galaxy J7 Prime', 'GSM / HSPA / LTE', 'GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2', 'HSDPA', 'LTE', 'HSPA, LTE Cat4 150/50 Mbps', 'Yes', 'Yes', '2016, August', 'Coming soon. Exp. release 2016, September', '151.5 x 74.9 x 8.1 mm (5.96 x 2.95 x 0.32 in)', 'No Information', 'Dual SIM (Micro-SIM, dual stand-by)', 'No Additional Features', 'IPS LCD capacitive touchscreen, 16M colors', 5.5, '1080 x 1920', 'Corning Gorilla Glass 4', 'No Additional Features', 'Android OS, v6.0.1 (Marshmallow)', 'Exynos 7870 Octa', 1.6, 'Octa-core 1.6 GHz Cortex-A53', 'Mali-T830MP2', 3, 32, '32 GB', 'microSD, up to 256 GB', 13, '13 MP, f/1.9, 28mm, autofocus, LED flash', '1080p@30fps', 8, '8 MP, f/1.9, LED flash', 'Geo-tagging, touch focus, face detection, panorama, HDR', 'Vibration; MP3, WAV ringtones', 'Yes', 'Yes', 'No Additional Features', 'Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot', 'v4.1, A2DP', 'Yes, with A-GPS, GLONASS/ BDS (region dependent)', 'No', 'To be confirmed', 'microUSB v2.0, USB On-The-Go', 'Fingerprint, accelerometer, proximity, compass', 'SMS(threaded view), MMS, Email, Push Mail, IM', 'HTML5', 'No', 'ANT+ support\r\nXvid/DivX/MP4/H.265 player\r\nMP3/WAV/eAAC+/FLAC player\r\nPhoto/video editor\r\nDocument viewer', 'Li-Ion 3300 mAh battery', 3300, 'No Information', 'No Information', 'Black, Gold', 'No Information', 'http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-j7-prime-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `PriceTable`
--

CREATE TABLE IF NOT EXISTS `PriceTable` (
  `PriceID` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `MobileID` int(4) unsigned NOT NULL,
  `ShopID` int(5) unsigned NOT NULL,
  `Price` double DEFAULT NULL,
  PRIMARY KEY (`PriceID`),
  KEY `price_ibfk_1` (`ShopID`),
  KEY `price_ibfk_2` (`MobileID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `PriceTable`
--

INSERT INTO `PriceTable` (`PriceID`, `MobileID`, `ShopID`, `Price`) VALUES
(1, 1, 1, 45800),
(2, 1, 2, 45600),
(3, 2, 1, 18400),
(4, 2, 2, 18500),
(5, 3, 1, 25300),
(6, 3, 2, 25400);

-- --------------------------------------------------------

--
-- Table structure for table `ShopTable`
--

CREATE TABLE IF NOT EXISTS `ShopTable` (
  `ShopID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `ShopName` varchar(100) NOT NULL,
  `ShopAddress` text,
  `ShopEmail` varchar(40) DEFAULT NULL,
  `ShopMobileNumber` varchar(15) DEFAULT NULL,
  `Latitude` varchar(30) DEFAULT NULL,
  `Longitude` varchar(30) NOT NULL,
  PRIMARY KEY (`ShopID`),
  UNIQUE KEY `ShopEmail` (`ShopEmail`),
  UNIQUE KEY `ShopMobileNumber` (`ShopMobileNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ShopTable`
--

INSERT INTO `ShopTable` (`ShopID`, `ShopName`, `ShopAddress`, `ShopEmail`, `ShopMobileNumber`, `Latitude`, `Longitude`) VALUES
(1, 'Fahim & Brothers Electronics', 'Ta-214, Middle Badda, Dhaka-1212', 'fahimshahrier2@gmail.com', '01554070646', '23.780082', '90.425435'),
(2, 'Rifat & Brothers Mobiles', 'Gulshan DCC Market, Gulshan, Dhaka-1212', 'rabiulawal@gmail.com', '01521216288', '23.779468', '90.415699');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `PriceTable`
--
ALTER TABLE `PriceTable`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`ShopID`) REFERENCES `ShopTable` (`ShopID`),
  ADD CONSTRAINT `price_ibfk_2` FOREIGN KEY (`MobileID`) REFERENCES `MobileFeatures` (`MobileID`);

