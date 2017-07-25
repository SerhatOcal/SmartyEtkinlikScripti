-- phpMyAdmin SQL Dump
-- version 3.4.10
-- http://www.phpmyadmin.net
--
-- Anamakine: 94.73.150.230
-- Üretim Zamanı: 24 Tem 2017, 07:09:54
-- Sunucu sürümü: 5.5.45
-- PHP Sürümü: 5.2.6-1+lenny10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `corporate`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aboutus` longtext COLLATE utf8_turkish_ci,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `aboutus`
--

INSERT INTO `aboutus` (`id`, `aboutus`, `title`) VALUES
(2, '<div class="title-box-v1" style="border-radius: 0px; color: rgb(51, 51, 51); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"=""><h2 style="border-radius: 0px; font-family: " open="" sans",="" arial,="" sans-serif;="" line-height:="" 33px;="" color:="" rgb(85,="" 85,="" 85);="" margin-top:="" 5px;="" margin-bottom:="" 10px;="" font-size:="" 24px;="" text-shadow:="" none;"=""><span class="color-green text-left" style="border-radius: 0px; color:">Neden Biz?</span></h2>\r\n\r\n<p class="text-left" style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85);"></p>\r\n\r\n<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85);">Günümüzde gelişen teknolojinin ve bilimsel buluşların hızı, bilgi edinme ve beceri geliştirme gerekliliğini ve bunu sürekli hale getirme zorunluluğunu açıkça ortaya koyuyor. Çalışanların mesleki donanımlarını arttırmak ve sürekli kendini yenileyen teknolojinin getirdiği kolaylıklardan faydalanabilmek için bile eğitimin önemi büyük. Smarty bu ihtiyacın nitelikli eğitim içerikleriyle karşılanmasını sağlamak amacıyla kurulduğu ilk günden itibaren, kurumsal eğitim alanında deneyimli bir yönetim ve alanında uzman eğitmen kadrosuyla iş yaşamında en çok ihtiyaç duyulan konuları belirleyerek eğitim içerikleri üretmektedir.</p>\r\n\r\n<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85);"></p>\r\n\r\n</div>\r\n\r\n<hr style="border-radius: 0px; margin: 30px 0px; color: rgb(51, 51, 51); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"="">\r\n\r\n<div class="row text-justify" style="border-radius: 0px; color: rgb(51, 51, 51); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"=""><div class="col-md-12 md-margin-bottom-40" style="border-radius: 0px; width: 1170px;"><div class="title-box-v1" style="border-radius: 0px;"><h2 style="border-radius: 0px; font-family: " open="" sans",="" arial,="" sans-serif;="" line-height:="" 33px;="" color:="" rgb(85,="" 85,="" 85);="" margin-top:="" 5px;="" margin-bottom:="" 10px;="" font-size:="" 24px;="" text-shadow:="" none;"=""><span class="color-green text-left" style="border-radius: 0px; color:">Nasıl Yapıyoruz?</span></h2>\r\n\r\n    <p class="text-left" style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); text-align: justify;"></p>\r\n\r\n    <p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85);">Smarty çalışanlarınızın yetenek ve donanımlarını geliştirebileceği eğitim içeriklerini, kurumunuzun ihtiyacına uygun olarak yapılandıran ve bu eğitimlerin organizasyonunu üstlenen bir çözüm ortağıdır. İş yaşamında çalışanların bilgi, beceri ve yeteneklerinin geliştirilmeleri çalıştıkları kurumların başarısını belirler. Smarty kurum içi eğitim içerikleriyle iş birliği yaptığı kurumların verimliliğine katkı sunmayı hedefler. Alanında uzman eğitmenlerle iş birliği yaparak&nbsp; kapsamlı eğitim içerikleri hazırlar ve eğitim içeriklerini yeni ihtiyaçlar doğrultusunda geliştirir. Smarty kurumsal eğitimlerini kurum içi eğitimler ya da açık sınıf eğitimleri şeklinde gerçekleştirir. Kurumsal dünyanın nabzını tutan Smarty eğitimde yenilikçi ve kalıcı öğrenmeyi hedefleyen alternatif yaklaşımları yakından takip eder.</p>\r\n\r\n    <p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85);"></p>\r\n\r\n</div>\r\n\r\n</div>\r\n\r\n</div>\r\n\r\n<hr style="border-radius: 0px; margin: 30px 0px; color: rgb(51, 51, 51); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"="">\r\n\r\n<div class="title-box-v1" style="border-radius: 0px; color: rgb(51, 51, 51); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"=""><h2 style="border-radius: 0px; font-family: " open="" sans",="" arial,="" sans-serif;="" line-height:="" 33px;="" color:="" rgb(85,="" 85,="" 85);="" margin-top:="" 5px;="" margin-bottom:="" 10px;="" font-size:="" 24px;="" text-shadow:="" none;"=""><span class="color-green text-left" style="border-radius: 0px; color:">Ne Yapıyoruz?</span></h2>\r\n\r\n<p class="text-left" style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85);"></p>\r\n\r\n<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85);">Smarty eğitim içerikleri kadar eğitim organizasyonlarınızın niteliği ile ilgili de titiz bir çalışma yürütür. Eğitim süreçlerinde kalıcı bir öğrenmenin sağlanabilmesi, katılımcılar tarafından alınan eğitimin verimli olabilmesi için öğrenme ortamının koşulları büyük önem taşır. Bu yüzden Smarty üstlendiği eğitim organizasyonlarında çalışanlarınızın nitelikli ve keyifli bir eğitim süreci geçirmeleri için gereken koşulların eksiksiz olmasına büyük önem gösterir. Smarty, katılımcısı olan ve kendisinden haberdar olmak isteğini belirten gerçek ve tüzel kişilerle insani ve elektronik ilişkiler kurar. Genel iletişim kuralları gereği istenmeyen mesajlar iletmez ve bu yolla herhangi bir tanıtım yapmaz.</p>\r\n\r\n<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85);">Siz de Smarty''ın uzman eğitmenleri ile tanışmak ve iş yaşamında sınıf atlamak istiyorsanız açık sınıf eğitimlerimize bireysel olarak başvurabilir yahut kurumunuzun bu ayrıcalıktan faydalanabilmesi için kurumsal başvuruda bulunabilirsiniz.</p>\r\n\r\n</div>', 'Test Başlık');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `stop_date` datetime DEFAULT NULL,
  `activity_category_id` int(11) DEFAULT NULL,
  `training_id` int(11) DEFAULT NULL,
  `trainers_id` int(11) DEFAULT NULL,
  `maps` longtext COLLATE utf8_turkish_ci,
  `price` float(10,2) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=19 ;

--
-- Tablo döküm verisi `activity`
--

INSERT INTO `activity` (`id`, `title`, `start_date`, `stop_date`, `activity_category_id`, `training_id`, `trainers_id`, `maps`, `price`, `address`, `detail`, `isActive`, `rank`) VALUES
(15, 'CodeIgniter ve MVC Eğitim Programı', '2016-12-22 10:00:00', '2016-12-22 10:00:00', 3, 36, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.066545443125!2d29.002039314860767!3d41.06753802372592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab656c411431f%3A0xa7a5416830fc37a5!2sBiz+Cevahir+Hotel+Istanbul!5e0!3m2!1str!2str!4v1466034347336', 750.00, '<span style="border-radius: 0px; font-weight: 700; color: rgb(85, 85, 85); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;="" line-height:="" 25px;"="">Biz Cevahir Hotel - Gayrettepe</span>', '#', 1, 0),
(16, 'Telefonda Etkili Tahsilat Becerileri Eğitimi', '2016-12-23 10:00:00', '2016-12-24 10:00:00', 1, 34, 2, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.066545443125!2d29.002039314860767!3d41.06753802372592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab656c411431f%3A0xa7a5416830fc37a5!2sBiz+Cevahir+Hotel+Istanbul!5e0!3m2!1str!2str!4v1466034347336', 750.00, 'Biz Cevahir Hotel - Gayrettepe', '#', 1, 2),
(17, 'Müşteri İstihbaratı, Tahsilat ve Risk Yönetimi', '2016-12-24 10:00:00', '2016-12-25 10:00:00', 1, 35, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.066545443125!2d29.002039314860767!3d41.06753802372592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab656c411431f%3A0xa7a5416830fc37a5!2sBiz+Cevahir+Hotel+Istanbul!5e0!3m2!1str!2str!4v1466034347336', 750.00, 'Biz Cevahir Hotel - Gayrettepe', '#', 1, 3),
(18, 'Ekonomideki Değişimlerle Başa Çıkmak', '2016-12-03 10:00:00', '2016-12-03 10:00:00', 2, 37, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.066545443125!2d29.002039314860767!3d41.06753802372592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab656c411431f%3A0xa7a5416830fc37a5!2sBiz+Cevahir+Hotel+Istanbul!5e0!3m2!1str!2str!4v1466034347336', 750.00, '<span style="font-weight: bold;"><span style="border-radius: 0px;">&nbsp;</span>Biz Cevahir Hotel - Gayrettepe</span>', '', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `activity_category`
--

CREATE TABLE IF NOT EXISTS `activity_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `activity_category`
--

INSERT INTO `activity_category` (`id`, `title`, `isActive`, `rank`) VALUES
(1, 'Bireysel Etkinlikler', 1, 0),
(2, 'Kurumsal Etkinlikler', 1, 1),
(3, 'Dijital Etkinlikler', 1, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` int(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `address` text COLLATE utf8_turkish_ci,
  `phone` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(17) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mission` longtext COLLATE utf8_turkish_ci,
  `vision` longtext COLLATE utf8_turkish_ci,
  `about_us` longtext COLLATE utf8_turkish_ci,
  `logo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bank_account` text COLLATE utf8_turkish_ci,
  `tax_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mersis_id` int(255) DEFAULT NULL,
  `google_analytics` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `map_att` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `google_latt` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `meta_keyword` varchar(160) COLLATE utf8_turkish_ci DEFAULT NULL,
  `meta_description` varchar(260) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `tax_circle` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `maps` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=8 ;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `title`, `address`, `phone`, `fax`, `email`, `web`, `facebook`, `twitter`, `google_plus`, `instagram`, `youtube`, `linkedin`, `mission`, `vision`, `about_us`, `logo`, `bank_account`, `tax_id`, `mersis_id`, `google_analytics`, `map_att`, `google_latt`, `meta_keyword`, `meta_description`, `isActive`, `tax_circle`, `rank`, `maps`) VALUES
(7, 'Serhat ÖCAL', 'Karlı Dere Cad Boztepe Sok. No:18 Üsküdar / İSTANBUL', '+90 (212) 333 33 33', 'asdasd', 'info@smartybilisim.com', 'www.smartuybilisim.com', 'http://www.facebook.com/smarty', 'zxczxc', 'zxczxc', 'zxczxc', 'zxczxc', 'zxczxc', 'asdasczx', 'zxczxcxz', 'Smarty Etkinlik Scripti', 'logo.png', 'zxczxc', 'zxcxz', 0, 'zxczxczxc', '', '', 'smarty,bilisim,etkinlik,html,css,jquery,php', 'Etkinlik Scripti', 1, 'zxczxczx', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.066545443125!2d29.002039314860767!3d41.06753802372592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab656c411431f%3A0xa7a5416830fc37a5!2sBiz+Cevahir+Hotel+Istanbul!5e0!3m2!1str!2str!4v146');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `email_setting`
--

CREATE TABLE IF NOT EXISTS `email_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `protocol` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `host` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `port` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `from` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT '0',
  `userName` varchar(255) COLLATE utf8_turkish_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `email_setting`
--

INSERT INTO `email_setting` (`id`, `protocol`, `host`, `port`, `user`, `pass`, `from`, `to`, `isActive`, `userName`) VALUES
(1, 'smtp', 'ssl://smtp.gmail.com', '465', 'smartybilisim@gmail.com', '15825270', 'smartybilisim@gmail.com', 'serhatocal1@gmail.com', 1, 'Smarty');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hurman_resources`
--

CREATE TABLE IF NOT EXISTS `hurman_resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` longtext COLLATE utf8_turkish_ci,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `hurman_resources`
--

INSERT INTO `hurman_resources` (`id`, `detail`, `title`) VALUES
(1, '<h2 style="border-radius: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; line-height: 33px; color: rgb(85, 85, 85); margin-top: 5px; margin-bottom: 10px; font-size: 24px; text-shadow: none;"><span class="color-green text-left" style="border-radius: 0px; color: rgb(231, 76, 60);">İnsan Kaynakları Politikamız</span></h2>\r\n<p class="text-left" style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"></p>\r\n<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Smarty insan kaynakları politikasını samimiyet, çalışkanlık, yaratıcılık ve istikrar üzerine inşa eder. Alanda kariyer yapmak isteyen yetenekli, gelişime ve yeniliğe açık kişilerle uzun soluklu bir kariyer yolculuğu yapmayı önemser. Onların farklı pozisyonlarda kendi donanımlarını arttırmalarını ve yeteneklerini geliştirmelerini sürekli destekler.</p>\r\n<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Kurumsal eğitim konusunda niteliğe, yenilikçi yaklaşımlara ve gelişime büyük önem veren öncü markalardan biri olan Smarty bünyesinde;</p>\r\n<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Motivasyonu yüksek, takım çalışmasına önem veren, marka hedeflerini benimseyen ve değer katmak konusunda istekli olan, pozitif ve çözüm odaklı bir bakış açısına sahip, sistem kurabilen ve kurduğu bu sistemi işletebilen kişiler, huzurlu ve güvenli bir çalışma ortamında kariyerlerini geliştirme şansını elde edebilirler.</p>\r\n<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Kurumsal eğitim alanında çalışmak, insanlarla doğrudan temas halinde olmak anlamına gelir. Müşteri ile kurduğu insani temasın kalitesine büyük önem veren bir kurum olan Smarty, çalışma arkadaşlarını seçerken, bu ilkeyi her zaman göz önünde bulundurur.</p>\r\n<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Smarty;</p>\r\n<ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">\r\n    <li style="border-radius: 0px; color: rgb(85, 85, 85);">Çalışanlarının kariyer hedeflerini destekler ve onların gelişimine katkı sunacak bir çalışma ortamı oluşturur.</li>\r\n    <li style="border-radius: 0px; color: rgb(85, 85, 85);">Kurum içinde görev alan tüm çalışanlarının yaptığı işe eşit oranda değer verir.</li>\r\n    <li style="border-radius: 0px; color: rgb(85, 85, 85);">Pozisyonu ve statüsü ne olursa olsun her Smarty çalışanı eşit oranda desteklenir ve takdir edilir.</li>\r\n    <li style="border-radius: 0px; color: rgb(85, 85, 85);">Çalışanlarıyla kurduğu güven ilişkisine ve şeffaflığa büyük özen gösterir.</li>\r\n    <li style="border-radius: 0px; color: rgb(85, 85, 85);">Çalışanların performanslarının adil biçimde değerlendirildiği bir çalışma ortamı yaratır, kuruma yüksek performansıyla artı değer katan personeli adil bir değerlendirmeyle takdir eder.</li>\r\n    <li style="border-radius: 0px; color: rgb(85, 85, 85);">Çalışanlarından marka değerlerini her daim göz önünde bulundurmasını ve bunları benimsemesini bekler.</li>\r\n    <li style="border-radius: 0px; color: rgb(85, 85, 85);">Çalışanların gelişimlerini desteklemeye katkı sunmak amacıyla sürekli geri bildirim verme geleneğini önemser.</li>\r\n    <li style="border-radius: 0px; color: rgb(85, 85, 85);">Çalışanların marka gelişimine katkı sunacak yenilikçi, yaratıcı fikirlerini her zaman dinler ve değerlendirir. Bu fikirlerin hayata geçmesi için destek verir.</li>\r\n    <li style="border-radius: 0px; color: rgb(85, 85, 85);">Çalışanlarının daha verimli çalışabilmeleri için gerekli olan araç, gereç, bilgi ve ekipmanları temin etmek konusunda her zaman titizlik gösterir.</li>\r\n</ul>\r\n<h3 style="border-radius: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; line-height: 27px; color: rgb(85, 85, 85); margin-top: 5px; margin-bottom: 10px; font-size: 20px; text-shadow: none;">Sizler de Smarty bünyesinde yer almak ve kurumsal eğitim alanında kariyerinizi geliştirmek istiyorsanız iş başvurusunda bulunabilirsiniz.</h3>', 'Politikamız');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `detail` longtext COLLATE utf8_turkish_ci,
  `weblink` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `detail`, `weblink`, `image`, `isActive`, `rank`) VALUES
(1, 'Test1', '2016-11-11', 'Eğitmen Sn. Deniz Beyaz''ın eğlenceli ve efektif anlatımıyla geride bıraktığımız Telefonda Etkili Tahsilat Becerileri Eğitimi''ne katılmak isteyen ziyaretçilerimiz buraya tıklayarak 16 Temmuz 2016 tarihinde gerçekleşecek olan program için online kayıt gerçekleştirebilirler.', '#', '1437646373482.jpg', 1, 2),
(2, 'Teşekkür Ederiz!', '2016-11-10', 'Tam 2 farklı lokasyon, 5 farklı eğitim ve 44 katılımcımızla harika bir Cumartesi''yi geride bıraktık. Bizi yalnız bırakmayan katılımcılarımıza teşekkür ederiz.', '#', '1437646373482.jpg', 1, 1),
(3, 'Şehirdışından gelen katılımcılarımızın dikkatine..', '2016-10-20', 'Eğitim programlarımızdan birine kayıt yaptırdıysanız ve şehirdışında ikamet ediyorsanız, müşteri temsilcilerimizle iletişime geçerek programın gerçekleşeceği otelde konaklama imkanlarıyla alakalı bilgi alabilirsiniz.<br>', '#', '1437646373482.jpg', 1, 0),
(4, 'Telefonda Etkili Tahsilat Becerileri Eğitimi sona erdi.', '2016-11-29', 'Eğitmen Sn. Deniz Beyaz''ın eğlenceli ve efektif anlatımıyla geride bıraktığımız Telefonda Etkili Tahsilat Becerileri Eğitimi''ne katılmak isteyen ziyaretçilerimiz buraya tıklayarak 16 Temmuz 2016 tarihinde gerçekleşecek olan program için online kayıt gerçekleştirebilirler.', '#', '1437646373482.jpg', 1, 0),
(5, 'zxczxc', '0000-00-00', '', 'zxczxcz', '194686_10150367201664429_976797008_o.jpg', NULL, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `isActive`) VALUES
(1, 'serhatocal1@gmail.com', 1),
(2, 'asdasda@asdas.com', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referans`
--

CREATE TABLE IF NOT EXISTS `referans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `weblink` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `referans`
--

INSERT INTO `referans` (`id`, `name`, `weblink`, `detail`, `isActive`, `rank`, `image`) VALUES
(1, 'Bim', 'http://www.bim.com.tr', '', '0', 11, 'bim-logo.jpg'),
(3, 'Allianz', 'www.allianz.com', '', '1', 3, 'allianz_logo.jpg'),
(4, 'Akbank', 'www.akbank.com.tr', '', '1', 1, 'akbank-logo.gif'),
(5, 'Amerikan Kültür', 'www.amerikankultur.com', '', '1', 4, 'amerikankultur-logo.jpg'),
(6, 'Anadolu Sigorta', 'www.anadolusigorta.com', '', '1', 5, 'anadolu-sigorta-logo-.jpg'),
(7, 'Aras Kargo', 'www.araskargo.com', '', '1', 6, 'aras-kargo-logo.jpg'),
(8, 'Arçelik', 'www.arcelik.com', '', '1', 7, 'arcelik-logo.jpg'),
(9, 'Acıbadem', 'www.acibadem.com', '', '1', 0, 'acibadem-logo.jpg'),
(10, 'AT Bank', 'www.atbank.com', '', '1', 8, 'atbank-logo.jpg'),
(11, 'Avivasa', 'www.avivasa.com', '', '1', 9, 'avivasa-logo.png'),
(12, 'Boyner', 'www.boyner.com', '', '1', 10, 'boyner-logo.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `button` tinyint(255) DEFAULT NULL,
  `button_title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL COMMENT '1',
  `rank` int(11) DEFAULT '0',
  `bride_detail` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `title`, `detail`, `url`, `image`, `button`, `button_title`, `isActive`, `rank`, `bride_detail`) VALUES
(4, '', 'Görev Verme Sanatı ve Delegasyon', '#', 'slider-delegasyon-sag.png', 1, 'Detaylı Bilgi', 1, 0, 'İş paylaşımı, işlerin daha hızlı ve sorunsuz olarak bitmesini sağlar.'),
(5, '', 'Telefonda Etkili Tahsilat Becerileri Eğitimi<br><br>', '#', 'slider-telefonda-tahsilat-sol.png', 1, 'Detaylı Bilgi', 1, 5, 'Bu eğitim; telefonda tahsilat sürecinde borçlu psikolojisini profesyonel olarak...<br>'),
(7, '', 'Small Talk&nbsp;', '', 'slider-smalltalk.png', 1, 'Detaylı Bilgi', 1, 3, ''),
(10, '', '', 'zxczxcz', '194686_10150367201664429_976797008_o.jpg', 0, 'zxczxczx', 0, 4, ''),
(8, '', 'Müşteri İstihbaratı, Tahsilat ve Risk Yönetimi', '#', 'slider-musteri-istihbarati.png', 1, 'Detaylı Bilgi', 1, 1, 'Görev yaptığınız ya da sahibi olduğunuz işyerinde doğru tahsilat...'),
(9, '', '2016 biterken % 10 indirim fırsatını kaçırmayın!', '#', 'toplanti-salonu.png', 1, 'Detaylı Bilgi', 1, 2, 'Aralık &nbsp;ayında yapacağınız kurum içi eğitim siparişlerinize anında &nbsp;indirim fırsatı.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `trainers`
--

CREATE TABLE IF NOT EXISTS `trainers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainersName` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8_turkish_ci,
  `isActive` tinyint(4) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `trainers`
--

INSERT INTO `trainers` (`id`, `trainersName`, `detail`, `isActive`, `image`, `rank`) VALUES
(1, 'Gökhan Kandemir', '<p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">29 yaşında olan Gökhan Kandemir&nbsp;lisans eğitimini Çukurova Üniversitesi’nde yaptıktan sonra Yazılım Mühendisliği üzerine yüksek lisansını&nbsp;Yıldız Teknik Üniversitesi’nde tamamlamıştır. Yazılım hayatına 13 yaşında başlamış olan Kandemir üniversiteden mezun olduktan sonra&nbsp;<span style="border: 0px; padding: 0px; margin: 0px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">İsviçre’de</span>&nbsp;bulunan&nbsp;<span style="border: 0px; padding: 0px; margin: 0px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Avrupa Nükleer Araştırma Merkezi’nde&nbsp;</span>(<span style="border: 0px; padding: 0px; margin: 0px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">CERN</span>) yazılım mühendisi olarak çalışmaya başlamıştır. Buradaki çalışmalarından sonra Türkiye’ye dönen Kandemir&nbsp;E-ticaret üzerine yazılım ekibiyle beraber çalışmalar yapmış ve ekip liderliği yaparak E-ticaret alanında tecrübesini arttırmıştır. Daha sonra sırasıyla&nbsp;<span style="border: 0px; padding: 0px; margin: 0px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">BiTaksi</span>&nbsp;ve&nbsp;<span style="border: 0px; padding: 0px; margin: 0px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Turkcell</span>&nbsp;firmalarında görev aldıktan sonra,&nbsp;şimdiki adıyla&nbsp;<span style="border: 0px; padding: 0px; margin: 0px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Türk Telekom</span>&nbsp;olan&nbsp;<span style="border: 0px; padding: 0px; margin: 0px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Avea</span>&nbsp;firmasında yazılım mühendisi kimliği ile 1.5 yıldır çalışmalarına devam etmektedir.</p><p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Şu ana kadar çeşitli platformlarda yazılım yapmış olan Kandemir,&nbsp;Gömülü (embedded) sistemler, Masaüstü uygulamaları, Web teknolojileri, Mobil Platformlar, Sistem programcılığı gibi birçok platformda kodlamalar yapmış ve&nbsp;<span style="border: 0px; padding: 0px; margin: 0px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">CERN</span>’de veri madenciliği ile tecrübe kazanmıştır. &nbsp;</p><p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Web teknolojileri üzerine yaklaşık 10 yıldır çalışmalar yapmış, yurtiçi ve yurtdışı olmak üzere birçok web projesinde görev almıştır. Turkcell firmasında turkcell.com.tr ve&nbsp;superonline.net projelerinde çalışmıştır. Halen Web üzerine çeşitli sistemler geliştirmekte ve aktif olarak danışmanlık yapmaktadır.</p><p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Mobil platformlarda iOS ve Android ile yurtdışında ve yurtiçinde çeşitli uygulamalar yapmış olup halen hybrid ve native sistemler üzerine çalışmalar yapmaktadır.</p><p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Eğitmenlik kariyerine 2010-2011 yılları içerisinde Adana Emniyet Müdürlüğünde giriş yapan Gökhan Kandemir aktif olarak bir eğitim kurumunda web teknolojileri adına eğitimler ve özel dersler vermektedir.</p>', 1, '12bf0db3ab038e2b04c5e1ca36266f0c.jpg', 0),
(2, 'Bülent Kıral', '<p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">İstanbul’da doğan Kıral, Yıldız Teknik Üniversitesi Bilgisayar Mühendisliği Bölümü''nden mezun oldu. İş hayatı boyunca&nbsp;sistem kurma, iş süreçlerini iyileştirme ve geliştirme amacıyla şirketlerde çalışmalarda bulundu.</p><p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Çetin Triko, İstanbul Yün, Fark Ahşap, İdeal Kabin gibi firmalarda finans, muhasebe ve süreç geliştirme bölümlerinde çeşitli kademelerde yöneticilik yaptı.</p><p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Doğru ve detaylı kayıt ile şirketlerin gerçek durumlarını görmelerini sağlamak ve müşteri hakkında yapılan araştırmalara farklı bir bakış açısı getirerek doğru araştırma yapmak koşulu ile yapılan tahsilatın şirket kasasına girmesini sağlamak amacıyla şirketlerde istihbarat birimleri kurdu. Bu sayede finansal ve nakit akım yönetimi gibi konularda uzmanlaştı.</p><p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Şirketlerin yönetim stratejilerine sıra dışı bakış açıları getirdi.</p><p style="border: 0px; padding: 0px; margin-top: 25px; margin-bottom: 25px; background-image: initial; background-position: 50% 50%; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial;">Aktif olarak uzman olduğu konular üzerine eğitim ve seminerler vermektedir.</p>', 1, 'a537b2d9fc0d291e969e4b8429aa1269.jpg', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `feature` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `information` longtext COLLATE utf8_turkish_ci,
  `detail` longtext COLLATE utf8_turkish_ci,
  `bride_detail` longtext COLLATE utf8_turkish_ci,
  `keyword` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=38 ;

--
-- Tablo döküm verisi `training`
--

INSERT INTO `training` (`id`, `title`, `feature`, `information`, `detail`, `bride_detail`, `keyword`, `image`) VALUES
(32, 'Görev Verme Sanatı, Delegasyon', 'İş performansını ve iş kalitesini artıracak,Rutin olmayan kritik işlere daha çok zaman ayıracak,Başarılı bir delegasyon sistemi kuracak,En önemlisi yetki devri ve görev verme konusunda hemen hayata geçirebilecekleri bir hareket planına sahip olacaklardır.', '• Eğitime katılım bedeli kişi başı 725 TL+KDV olup iki kişi ve üzeri katılımlarda %5, dört kişi ve üzeri katılımlarda indirim uygulanmaktadır. • Eğitim programı, yayınlanan otelde saat 09:30 ile 17:00 saatleri arasında gerçekleşecektir. • Katılım için online başvuru formunun doldurulması ve ödeme dekontunun e-posta ile iletilmesi gerekmektedir. • Eğitim bedelinin eğitim tarihinden 3 iş günü önce Smarty banka hesabına yatırılması gerekmektedir. • Eğitim bedeline tüm dökümantasyon, ikramlar ve öğle yemekleri dahildir. • Eğitim sonunda katılımcılara eğitim notu ve katılım sertifikası verilecektir. • Smarty gerekli hallerde programı iptal etme, erteleme, mekanı veya konuşmacıyı değiştirme hakkını saklı tutar.', '<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"="">İş paylaşımı ve yöneticinin bir işi takım arkadaşına ya da çalışanına aktarması, işlerin daha hızlı ve sorunsuz olarak bitmesini sağlar. İyi bir delegasyon bunun en önemli faktörüdür. Bu program; delegasyonu etkili yapabilme yöntemlerine ilişkin plan, harita, ipuçları ve başarılı örneklerle birlikte özellikle başarısızlıkların üzerinde durulduğu bir tecrübe aktarımı içermektedir.</p><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"=""><span style="border-radius: 0px; font-weight: 700;">Bu Program Size Neler Katacak?</span></p><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"="">Bu eğitimin sonunda katılımcılar;</p>', '<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"=""><span style="border-radius: 0px; font-weight: 700;">İçerik</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: " helvetica="" neue",="" helvetica,="" arial,="" sans-serif;="" font-size:="" 13px;"=""><li style="border-radius: 0px; color: rgb(85, 85, 85);">Nedir, ne değildir, faydaları nelerdir?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Neden yapamıyoruz?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Ne zaman yapılmalı?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Kime görev verilmeli?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Görevlendirmenin 6 seviyesi,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Kendi stilinizi seçin,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">İyi delegasyonun IDEAL adımları,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Belirle, Açıkla, Yetkilendir, Bırak, Destekle ve Ölç,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">İletişimde ‘emir tekrarı’,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Kontrol hissinin kaybı ve başa çıkma,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Destek almak,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Mikro Yönetim ve belirtileri,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Sakınmak için yapılacaklar,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Çok çalışmak mı çok iş yapmak mı,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Çalışanı yüceltmek ve takdir.</li></ul>', 'Görev Verme Sanatı, Delegasyon', '2818bbba3d1e3b65e9aacf4c788aef72_thumb.jpg'),
(33, 'Small Talk - Profesyoneller İçin Kısa Konuşma Sanatı', 'Konuşmayı yöneten tavır,Konuşmayı sabote eden kelimelerden kurtulmak,Dinleme ve anlamaya engel faktörler', '• Eğitime katılım bedeli kişi başı 725 TL+KDV olup iki kişi ve üzeri katılımlarda %5, dört kişi ve üzeri katılımlarda indirim uygulanmaktadır. • Eğitim programı, yayınlanan otelde saat 09:30 ile 17:00 saatleri arasında gerçekleşecektir. • Katılım için online başvuru formunun doldurulması ve ödeme dekontunun e-posta ile iletilmesi gerekmektedir. • Eğitim bedelinin eğitim tarihinden 3 iş günü önce Smarty banka hesabına yatırılması gerekmektedir. • Eğitim bedeline tüm dökümantasyon, ikramlar ve öğle yemekleri dahildir. • Eğitim sonunda katılımcılara eğitim notu ve katılım sertifikası verilecektir. • Smarty gerekli hallerde programı iptal etme, erteleme, mekanı veya konuşmacıyı değiştirme hakkını saklı tutar.', '<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Amaç:</span></p><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Bu programda katılımcılarımızın sosyal ve profesyonel yaşamda kurdukları sözlü diyalogları istedikleri sonuçları üretebilecek hale getirmeleri, etkili kelimeler ve subliminal mesajlar kullanarak yalın bir şekilde ve hedef odaklı konuşmaları, muhatabını sıkmadan fikir ve görüşlerini karşı tarafa iletebilmeleri amaçlanmaktadır.</p>', '<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">İçerik:</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">Ben kimim? Nasıl Konuşuyorum?<br style="border-radius: 0px;">- Kişinin mevcut durum analizi<br style="border-radius: 0px;">- Kendimizi algılayış biçimimiz</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Konuşmayı sabote eden kelimelerden kurtulmak<br style="border-radius: 0px;">- Kelimelerdeki tekrar sayısı ve gizli mesajlar<br style="border-radius: 0px;">- Gereksiz sözcükleri ayıklama</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Konuşma arasında açılan parantezler, zihni odakta tutmak</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Muğlak ifadelerle vedalaşmak ve netleşme<br style="border-radius: 0px;">- Anlaşılabilir olmak<br style="border-radius: 0px;">- Az sözcükle çok şey anlatmak</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Psikolojik etkenlerimiz<br style="border-radius: 0px;">- Neden kelimelerle çok oynarız?<br style="border-radius: 0px;">- Tetikleyici alt nedenlerimiz neler?<br style="border-radius: 0px;">- Kişilik profillerini tanıma ve yönetme</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Konuşmayı yöneten tavır<br style="border-radius: 0px;">- Söz ve sözcük ötesi</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Amaçtan uzaklaşma ve ikincil kazanç güdüleyicileri<br style="border-radius: 0px;">- Üretmek istediğim sonuç ne?<br style="border-radius: 0px;">- Konuşmadaki yön duygusu</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Duyguyu seçmek ve yönetmek<br style="border-radius: 0px;">- Kelime dizini akışı<br style="border-radius: 0px;">- Düşünce, duygu ve konuşma eylemi arasındaki bağ</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Muhatapla senkronizasyon oluşturmak<br style="border-radius: 0px;">- Aynalama tekniği<br style="border-radius: 0px;">- Konuşmayı yöneten kişi olmak</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Özgüven, saygı ve sosyal statü unsurlarına uygunluk</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Dinleme, anlama ve dinlemeye engel faktörler</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Ses tonu, nefes kontrolü, vurgu ve kelime hazinesi</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Eylem söylem birliği, güvenilirlik ve beden dili mesajları</li></ul><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Bu eğitimde çözüm bulacağınız sorunlar:</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">Konuşurken amacıma yönelik etki yaratamıyorum.</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Bir parantez açıp asıl amaçtan sapıyorum ve geri dönemiyorum.</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Muhatabımın algılayamama potansiyeli beni etkiliyor.</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Uzun örneklemelere ihtiyaç duyarak zaman kaybediyorum.</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Zihnimi odakta tutmakta zorlanıyorum.</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Çok şey anlatıp muhatabımın konsantrasyonunu dağıtıyorum.</li></ul>', 'Small Talk - Profesyoneller İçin Kısa Konuşma Sanatı', '134fc7db69049c79794c420f057390fa_thumb.jpg'),
(34, 'Telefonda Etkili Tahsilat Becerileri Eğitimi', 'Borçlu psikolojisini anlama,Uygun ses tonu ve doğru bilgi paylaşımı,Tahsilatta olumlu iletişimi tetikleyen terminoloji kullanımı', '• Eğitime katılım bedeli kişi başı 725 TL+KDV olup iki kişi ve üzeri katılımlarda %5, dört kişi ve üzeri katılımlarda indirim uygulanmaktadır. • Eğitim programı, yayınlanan otelde saat 09:30 ile 17:00 saatleri arasında gerçekleşecektir. • Katılım için online başvuru formunun doldurulması ve ödeme dekontunun e-posta ile iletilmesi gerekmektedir. • Eğitim bedelinin eğitim tarihinden 3 iş günü önce Smarty banka hesabına yatırılması gerekmektedir. • Eğitim bedeline tüm dökümantasyon, ikramlar ve öğle yemekleri dahildir. • Eğitim sonunda katılımcılara eğitim notu ve katılım sertifikası verilecektir. • Smarty gerekli hallerde programı iptal etme, erteleme, mekanı veya konuşmacıyı değiştirme hakkını saklı tutar.', '<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Amaç:</span></p><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Bu eğitim; telefonda tahsilat sürecinde borçlu psikolojisini profesyonel olarak yöneterek uygun iletişim tarzı ve teknikleri ile uzlaşı oluşturmayı ve tahsilat odaklı platform yaratma becerisinin kazanılmasını amaçlamaktadır.</p>', '<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">İçerik:</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">Borçlu psikolojisini anlama ve yönetme</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Borçluyu uzlaşı platformuna taşıma</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Tahsilatçının kendi içsel sürecini yönetmesi</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Görüşme sürecinde şirket itibarını korumak</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Güven oluşturmak, ikna süreci ve inisiyatif kullanımı</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Dokunulabilir ve dokunulamaz alanlar</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Konunun kişisel platforma taşınmaması</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Öfke ve stres kontrolünün sağlanması</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Uygun ses tonu ve doğru bilgi paylaşımı</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Yaptırım gücünün servis ediliş biçimi</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Tahsilatı etkileyen püf noktaları</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Borçluya erişim kanalları</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Tahsilatta olumlu iletişimi tetikleyen terminoloji kullanımı</li></ul>', ' Telefonda Etkili Tahsilat Becerileri Eğitimi', '4a8c6a215d9c628a133fdcaf8532a391_thumb.jpg'),
(35, 'Müşteri İstihbaratı, Tahsilat ve Risk Yönetimi', 'Müşteri Riskleri,Doğru Tahsilat,Risk Analizi Nasıl Yapılır?,Riskleri Kontrol Altına Almak', '• Eğitime katılım bedeli kişi başı 725 TL+KDV olup iki kişi ve üzeri katılımlarda %5, dört kişi ve üzeri katılımlarda indirim uygulanmaktadır. • Eğitim programı, yayınlanan otelde saat 09:30 ile 17:00 saatleri arasında gerçekleşecektir. • Katılım için online başvuru formunun doldurulması ve ödeme dekontunun e-posta ile iletilmesi gerekmektedir. • Eğitim bedelinin eğitim tarihinden 3 iş günü önce Smarty banka hesabına yatırılması gerekmektedir. • Eğitim bedeline tüm dökümantasyon, ikramlar ve öğle yemekleri dahildir. • Eğitim sonunda katılımcılara eğitim notu ve katılım sertifikası verilecektir. • Smarty gerekli hallerde programı iptal etme, erteleme, mekanı veya konuşmacıyı değiştirme hakkını saklı tutar.', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Bu eğitimin amacı, görev yaptığınız ya da sahibi olduğunuz işyerinde doğru tahsilat yapmanızı, riskleri doğru analiz etmenizi, almış olduğunuz evrakların (çek, senet vb.) ve cari bakiyelerin dönüşünün zamanında olmasını sağlamak, sorumlu personelin finansal bilgilerini güçlendirerek güçlü müşteri ile finansal gücü zayıf olan müşterileri ayırmak ve ilerde oluşabilecek riskleri zamanında fark ederek tedbir almak, müşteri riskini en aza indirmek, müşterinin gücüne göre bilinçli satış yapmak ve müşterinin finansal durumunu doğru analiz etmek, mevcut bilgileri değerlendirerek sıfır şüpheli hedefine ulaşmaktır.</span>', '<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">İçerik:</span></p><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Müşteri Riski</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">Müşterinin kimlik kartı,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Müşteri bilgileri neler olmalı,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Satıştan önce müşteriyi tanıma,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Doğru satış doğru tahsilat,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Riskli müşteri tanımı,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Riskli müşteriler kimlerdir?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Müşterinin risk limiti,</li></ul><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Risk Analizi Nedir?</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">Müşterinin teminatlı riski,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Açık hesabın riski,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Çeki riskli müşteri,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Risk keşidenin mi cironun mu?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Çekte keşideci mi önemli yoksa ciro mu?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Senet veren müşteri riski,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Senet hangi müşteriden alınmalı,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Risk ticaretin ana unsuru mudur?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Girişimci risk alan kişi midir?</li></ul><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Risk Analizi Nasıl Yapılmalı?</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">Frene bastığınız zaman riski kontrol etmiş değil, hareket etmeyi durdurmuşsunuz demektir,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Araştırma teknikleri nelerdir,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Bankanın verdiği bilgiler doğru mudur?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Banka yanlış bilgi verebilir mi?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Banka müşterisini korurken sizin riskinizi arttırabilir mi?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Banka bilgileri nasıl teyit edilmelidir?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Başka nerelerden bilgiler alınmalı?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Alınan bilgilerin doğrululuk oranı nedir?</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Doğru analiz nasıl yapılmalı?</li></ul><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Riski kontrol altına alma</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">Şüpheli riskini ortadan kaldırma,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Doğru satış, zamanında tahsilat,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Analiz sonucu siparişe onay verme,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Riski kabul edilebilir sınırlara çekme,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Şartlı onay verme,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Limitli onay verme,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Teminatlı onay verme,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Risk analizine dayanarak işlemi durdurma,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Riskli satışı engelleme.&nbsp;</li></ul><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Süre: 1 Gün</p>', ' Müşteri İstihbaratı, Tahsilat ve Risk Yönetimi', 'bcfc47e808978e51290d0b315950fa7a_thumb.jpg'),
(36, 'CodeIgniter ve MVC Eğitim Programı', 'CodeIgniter,MVC,HTML,CSS,PHP', '• Eğitime katılım bedeli kişi başı 725 TL+KDV olup iki kişi ve üzeri katılımlarda %5, dört kişi ve üzeri katılımlarda indirim uygulanmaktadır. • Eğitim programı, yayınlanan otelde saat 09:30 ile 17:00 saatleri arasında gerçekleşecektir. • Katılım için online başvuru formunun doldurulması ve ödeme dekontunun e-posta ile iletilmesi gerekmektedir. • Eğitim bedelinin eğitim tarihinden 3 iş günü önce Smarty banka hesabına yatırılması gerekmektedir. • Eğitim bedeline tüm dökümantasyon, ikramlar ve öğle yemekleri dahildir. • Eğitim sonunda katılımcılara eğitim notu ve katılım sertifikası verilecektir. • Smarty gerekli hallerde programı iptal etme, erteleme, mekanı veya konuşmacıyı değiştirme hakkını saklı tutar.', '<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">CodeIgniter ve MVC Nedir?</span></p><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Dünyanın en popüler PHP frameworklerinden bir olan&nbsp;<span style="border-radius: 0px; font-weight: 700;">CodeIgniter</span>&nbsp;ile&nbsp;<span style="border-radius: 0px; font-weight: 700;">MVC</span>&nbsp;yapısına giriş yapıp uygulama yapmak için bu eğitim ideal bir başlangıç sunar sizlere. Bu eğitimle beraber aslında sadece bir framework öğrenmekle kalmayıp diğer frameworkler (<span style="border-radius: 0px; font-weight: 700;">Laravel, Yii, Zend, Spring, Microsoft MVC</span>&nbsp;vb..) hakkında bilgi sahip olmuş oluyorsunuz. Çünkü frameworkler içlerinde&nbsp;<span style="border-radius: 0px; font-weight: 700;">MVC</span>&nbsp;denilen bir şablonu kullanmaktadır. Bu kurs içerisinde&nbsp;<span style="border-radius: 0px; font-weight: 700;">MVC</span>&nbsp;ile sürekli işlemler yapacağımızdan dolayı bu yapıyı anladıktan sonra diğer frameworkler ile çalışmak için sadece o frameworkün basitçe yapısını öğrenmeniz yetecektir.</p>', '<p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Neden Framework ve avantajları?</span></p><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Herhangi bir web programlama dili ile yapılacak bir web uygulamasında&nbsp;<span style="border-radius: 0px; font-weight: 700;">MVC</span>&nbsp;gibi bir yapı kullanılmadığı takdirde kodlar sayfalarca uzunluğunda olacak&nbsp;<span style="border-radius: 0px; font-weight: 700;">HTML</span>&nbsp;kodları&nbsp;<span style="border-radius: 0px; font-weight: 700;">PHP</span>&nbsp;kodları&nbsp;<span style="border-radius: 0px; font-weight: 700;">JS</span>&nbsp;kodları&nbsp;<span style="border-radius: 0px; font-weight: 700;">SQL</span>kodları iç içe olacaktır ve basit sayfalar bile bazen binlerce satıra ulaşmaktadır. Bu tarz programlamada ileriye dönük hata ayıklama ve düzeltme işlemlerinde sorunlar ile karşılaşılmaktadır.&nbsp;<span style="border-radius: 0px; font-weight: 700;">MVC</span>&nbsp;bu karmaşanın önüne geçer. Çünkü&nbsp;<span style="border-radius: 0px; font-weight: 700;">MVC</span>&nbsp;yapısında&nbsp;<span style="border-radius: 0px; font-weight: 700;">HTML</span>&nbsp;kodları ayrı sayfalarda&nbsp;<span style="border-radius: 0px; font-weight: 700;">PHP</span>&nbsp;kodları ayrı sayfalarda&nbsp;<span style="border-radius: 0px; font-weight: 700;">SQL</span>&nbsp;kodları ayrı sayfalarda yazılmaktadır. Böylece hatanın yeri çok çabuk tespit edilip sonuca daha kolay ulaşılabilmektedir.&nbsp; Bunun harici bir framework bize üzerinde yıllarca geliştirilme yapılmış olan kendiliğinden&nbsp;<span style="border-radius: 0px; font-weight: 700;">Database</span>&nbsp;sınıfları,&nbsp;<span style="border-radius: 0px; font-weight: 700;">Cache</span>&nbsp;Sistemi,&nbsp;<span style="border-radius: 0px; font-weight: 700;">Güvenlik</span>&nbsp;Kontrolleri,&nbsp;<span style="border-radius: 0px; font-weight: 700;">Form</span>İşlemleri,&nbsp;<span style="border-radius: 0px; font-weight: 700;">Upload</span>&nbsp;Sınıfları,&nbsp;<span style="border-radius: 0px; font-weight: 700;">Şifreleme</span>&nbsp;Sınıfları gibi daha&nbsp;<span style="border-radius: 0px; font-weight: 700;">binlercesini</span>&nbsp;sağlamaktadır. Framework kullanarak bu tarz zaman alan kodlamaların&nbsp;<span style="border-radius: 0px; font-weight: 700;">hepsinden sıyrılmış olacağız</span>.</p><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Bu Eğitimin Size katacakları</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);"><span style="border-radius: 0px; font-weight: 700;">Codeigniter</span>&nbsp;ile&nbsp;<span style="border-radius: 0px; font-weight: 700;">MVC</span>&nbsp;projeler geliştirebilir bir durumda olacaksınız</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Sadece&nbsp;<span style="border-radius: 0px; font-weight: 700;">PHP</span>&nbsp;ile uzun zamanda yapılan projeleri&nbsp;<span style="border-radius: 0px; font-weight: 700;">Codeigniter</span>&nbsp;yapısını kullanarak kısa bir sürede bitiyor olacaksınız.</li><li style="border-radius: 0px; color: rgb(85, 85, 85);"><span style="border-radius: 0px; font-weight: 700;">Codeigniter</span>&nbsp;alt yapısında&nbsp;<span style="border-radius: 0px; font-weight: 700;">PHP</span>&nbsp;kullanan&nbsp;<span style="border-radius: 0px; font-weight: 700;">MVC</span>&nbsp;tasarım şablonunu kullanan&nbsp;<span style="border-radius: 0px; font-weight: 700;">çok popüler</span>&nbsp;bir&nbsp;<span style="border-radius: 0px; font-weight: 700;">Framework</span>. Genel olarak mevcut&nbsp;<span style="border-radius: 0px; font-weight: 700;">MVC</span>&nbsp;Frameworkler aynı mantıkta çalıştığı için&nbsp;<span style="border-radius: 0px; font-weight: 700;">programlama dili farketmeksizin</span>&nbsp;<span style="border-radius: 0px; font-weight: 700;">Codeigniter</span>&nbsp;öğrenildiğinde diğer Frameworkler hakkında fikir sahibi olacaksınız. Başka bir framework&nbsp;<span style="border-radius: 0px; font-weight: 700;">(Laravel, Zend, Spring, Microsoft MVC&nbsp;vb..</span>) gereksinimi duyulduğunda bunu öğrenmek artık daha kolay haline gelecektir.</li></ul><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Katılım Koşulları</span></p><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Katılımcıların bu eğitimden maksimum şekilde verim alabilmeleri için aşağıdaki teknolojilerle ilgili bilgi sahibi olması beklenir;</p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">HTML</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">CSS</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">JS (Opsiyonel : Katılımcıların JS bilme durumuna göre çalışmalarda JS kullanılacaktır)</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">PHP<ul style="border-radius: 0px;"><li style="border-radius: 0px;"><span style="border-radius: 0px; font-weight: 700;">Katılımcıların temel seviyede PHP bilmesi gerekmektedir</span></li><li style="border-radius: 0px;"><span style="border-radius: 0px; font-weight: 700;">PHP</span>&nbsp;ile&nbsp;<span style="border-radius: 0px; font-weight: 700;">POST</span>&nbsp;<span style="border-radius: 0px; font-weight: 700;">GET</span>&nbsp;işlemleri hakkında bilgi sahibi</li><li style="border-radius: 0px;"><span style="border-radius: 0px; font-weight: 700;">PHP</span>&nbsp;ile&nbsp;<span style="border-radius: 0px; font-weight: 700;">SESSION</span>&nbsp;konusunda bilgi sahibi</li><li style="border-radius: 0px;"><span style="border-radius: 0px; font-weight: 700;">PHP</span>&nbsp;ile fonksiyon işlemleri ile ilgili bilgi sahibi</li><li style="border-radius: 0px;"><span style="border-radius: 0px; font-weight: 700;">Object Oriented Programming&nbsp;</span>hakkında fikir sahibi olması beklemektedir.</li></ul></li></ul><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">SQL (<span style="border-radius: 0px; font-weight: 700;">MySQL</span>)<ul style="border-radius: 0px;"><li style="border-radius: 0px;">Katılımcıların temel seviyede&nbsp;<span style="border-radius: 0px; font-weight: 700;">SQL</span>&nbsp;bilmesi gerekmektedir.</li></ul></li></ul><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Eğitim Başlamadan Önce;</span></p><ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">Katılımcıların sürekli faydalanabilmesi ve daha sonraki aşamalarda irtibatın kesilmemesi açısından;<ul style="border-radius: 0px;"><li style="border-radius: 0px;"><span style="border-radius: 0px; font-weight: 700;">Google groups</span>&nbsp;üzerinden bir grup açılır, belge ve dokümanlar orada paylaşılır,</li><li style="border-radius: 0px;"><span style="border-radius: 0px; font-weight: 700;">Whatsapp</span>&nbsp;grubu kurulur, ödev ve proje zamanlarında sıkıntı yaşanmaması için&nbsp;eğitmen ve katılımcılar arasında irtibatı sağlaması hedeflenir,</li><li style="border-radius: 0px;">Yapılan tüm işlemler için&nbsp;<span style="border-radius: 0px; font-weight: 700;">GitHub</span>&nbsp;üzerinde Repository oluşturulur ve kodlara istendiği zaman erişim&nbsp;sağlanır.</li></ul></li></ul><p style="border-radius: 0px; margin-bottom: 10px; color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><span style="border-radius: 0px; font-weight: 700;">Eğitim süresi 2 gündür.</span></p>', 'CodeIgniter ve MVC Eğitim Programı', '3f80034805f2c070c72ebdc7e898a906_thumb.jpg'),
(37, 'Ekonomideki Değişimlerle Başa Çıkmak', 'Ödemeler dengesi,Riskten kaçınma,Ticarete yeni bir bakış', '• Eğitime katılım bedeli kişi başı 725 TL+KDV olup iki kişi ve üzeri katılımlarda %5, dört kişi ve üzeri katılımlarda indirim uygulanmaktadır. • Eğitim programı, yayınlanan otelde saat 09:30 ile 17:00 saatleri arasında gerçekleşecektir. • Katılım için online başvuru formunun doldurulması ve ödeme dekontunun e-posta ile iletilmesi gerekmektedir. • Eğitim bedelinin eğitim tarihinden 3 iş günü önce Smarty banka hesabına yatırılması gerekmektedir. • Eğitim bedeline tüm dökümantasyon, ikramlar ve öğle yemekleri dahildir. • Eğitim sonunda katılımcılara eğitim notu ve katılım sertifikası verilecektir. • Smarty gerekli hallerde programı iptal etme, erteleme, mekanı veya konuşmacıyı değiştirme hakkını saklı tutar.', '<span style="color: rgb(85, 85, 85); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;">Dalgalı ekonomik sistemlerin iç ve dış ticaret hacmi üzerinde, özellikle de ödemeler dengesi üzerinde ciddi ve kesin etkileri vardır. Yapılan araştırmalara göre ekonomik değişkenlik, riskten kaçınan firmalar üzerinde yüksek maliyetlere, daha az ticaret hacminin oluşmasına ve elde edilecek kar ile ilgili belirsizliklere yol açar. Eğitim programı, bu kısır döngüden kurtularak piyasalara ve ticarete yeni bir bakış açısı kazandırmayı amaçlamaktadır.</span>', '<ul style="border-radius: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px;"><li style="border-radius: 0px; color: rgb(85, 85, 85);">Tecrübelerin ışığında ekonomik değişimleri anlamak,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Piyasa değişkenlerine dirençli kurumlar,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Değişen piyasa şartlarına seri uyum sağlama,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Yeni nesil rekabetin dinamikleri,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Farklılaşan rekabetin gizli tuzakları,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Eski stratejik planlardan yeni başarılara geçiş,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Yöneticilere biçilen yeni görevler,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Çalışanların hazır bulunuşluk seviyelerini yönetmek,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Beklenmeyen durumlarda gerçekçi öngörüler,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Zor dönemlerde karlılığı yönetmek,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Ekonomik değişimlerin müşterilere etkisini yönetmek,</li><li style="border-radius: 0px; color: rgb(85, 85, 85);">Dibe vurmadan önce sinyalleri yakalamak</li></ul>', 'Ekonomideki Değişimlerle Başa Çıkmak', '4c4eb7bc3d614cf80b482b72e7672d6b_thumb.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `userss`
--

CREATE TABLE IF NOT EXISTS `userss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `reset_password_key` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `userss`
--

INSERT INTO `userss` (`id`, `username`, `lastname`, `firstname`, `email`, `password`, `isActive`, `reset_password_key`) VALUES
(1, 'admin', 'serhat', 'öcal', 'serhatocal1@gmail.com', '875f26fdb1cecf20ceb4ca028263dec6', 1, '1dd302e4e015c1daba57158ae1f40e44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
