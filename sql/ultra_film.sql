-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Şub 2017, 16:07:38
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ultra_film`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adsoyad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`adsoyad`, `email`, `password`) VALUES
('Admin', 'admin@admin.com', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0qtu979r0m0l2n70hmgi6vvtbp9r1ep2', '::1', 1486151390, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135313136303b),
('242o79oem5fo0l48lrcc5s7hpaco53nq', '::1', 1486154042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135343033393b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('2v1rk4q8s4s4l1mqj441gahm8jg47mit', '::1', 1486157684, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135373536373b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('35fmpm1661o41ec9fhim125cuuvdpdti', '::1', 1486158423, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135383430323b),
('3o8ipmc2abem37qtlp3tufjjlk7gni2k', '::1', 1486155159, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135343837323b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('5c7m6av46kreqfg4pdeh4e4vul5l1l66', '::1', 1486157198, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135373132363b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('80sorn63pdj71atgolmttdfe905t03lb', '::1', 1486152093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135313739353b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('aikmgg8645g3pvbgvgqbdraij2q79f3f', '::1', 1486155207, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135353230373b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('bnbfo2oo7l2p379hmsc318mu0qsu5378', '::1', 1486158281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135373939303b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('g73go819knngqdodeuh0lb5da43lht9e', '::1', 1486151722, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135313438343b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('ii0243fjob7av5k5uklv3j3qktccjccm', '::1', 1486153567, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135333331393b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('k5616dgsuh07e565dfjinuvt695pqmlg', '::1', 1486153317, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135333031373b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('l73nqeo83ljide16cuhp12hct22achrb', '::1', 1486152344, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135323237323b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('n6a4kt7sooln7gftkd7p5isogit6i84t', '::1', 1486153807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135333632313b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('npio5s3qm7mbghm1tn6f1936bifoao3v', '::1', 1486156560, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135363434363b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('pcgebmketcpoj7sgd45it3hnmn7b2s3l', '::1', 1486156444, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135363134353b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('rg4eks80aqshujrlmon52gff3644k7bv', '::1', 1486219649, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363231393632303b),
('rtaj969g4lvh23jubpd1fd3hai6gkud0', '::1', 1486155700, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135353730303b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('s309pqbcfcghhrji1im2ubq3a3t262rm', '::1', 1486220021, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363232303031373b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('s4t7030p5h88p6n5sl6fc3ek0url9bj6', '::1', 1486157124, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135363832343b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('tflfprgst2eauloh2rt9kngebdujqt0k', '::1', 1486220788, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363232303439323b),
('unbvqaqu07sv9q109hg6e7bfve3329i6', '::1', 1486152730, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135323639343b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b),
('vdhgg3qrqhu7um0qhd35b163p2qaf31m', '::1', 1486154821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438363135343533363b757365726e616d657c4e3b70617373776f72647c733a363a22313233343536223b6c6f67696e7c623a313b);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

CREATE TABLE IF NOT EXISTS `filmler` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `film_baslik` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `film_seflink` varchar(130) COLLATE utf8_turkish_ci NOT NULL,
  `film_kategori` int(11) NOT NULL,
  `film_hit` int(11) NOT NULL,
  `film_tarih` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `film_hakkinda` text COLLATE utf8_turkish_ci NOT NULL,
  `film_imbd` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `film_sure` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `film_resim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `film_yili` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `film_etiket` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `film_linkler` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`film_id`, `film_baslik`, `film_seflink`, `film_kategori`, `film_hit`, `film_tarih`, `film_hakkinda`, `film_imbd`, `film_sure`, `film_resim`, `film_yili`, `film_etiket`, `film_linkler`) VALUES
(2, 'Deneme Film', 'deneme-film', 1, 115, '30/01/2017', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lore m Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturm ak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri stand ardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rm ekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramış tır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınla nması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil; eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.<br />\r\n<br />\r\nYaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan ...</p>\r\n', '7.5', '100', 'deneme-film.png', '209', 'deneme,film', '["<iframe src=\\"http:\\/\\/vk.com\\/video_ext.php?oid=185620187&id=166203639&hash=bf90bf623d8dad7f&hd=1\\" width=\\"100%\\" height=\\"100%\\" frameborder=\\"0\\"><\\/iframe>","<iframe src=\\"http:\\/\\/vk.com\\/video_ext.php?oid=185620187&id=166203639&hash=bf90bf623d8dad7f&hd=1\\" width=\\"100%\\" height=\\"100%\\" frameborder=\\"0\\"><\\/iframe>"]'),
(3, 'Film 2', 'film-2', 2, 57, '30/01/2017', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lore m Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturm ak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri stand ardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rm ekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramış tır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınla nması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil; eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.<br />\r\n<br />\r\nYaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan ...</p>\r\n', '5', '160', 'film-2.jpg', '2001', 'deneme', '["<iframe src=\\"http:\\/\\/vk.com\\/video_ext.php?oid=185620187&id=166203639&hash=bf90bf623d8dad7f&hd=1\\" width=\\"100%\\" height=\\"100%\\" frameborder=\\"0\\"><\\/iframe>\\r\\n"]');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `iletisim_id` int(11) NOT NULL AUTO_INCREMENT,
  `iletisim_adsoyad` varchar(180) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_ip` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_zaman` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_konu` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_text` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`iletisim_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_baslik` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_seflink` varchar(130) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_etiket` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_baslik`, `kategori_seflink`, `kategori_etiket`) VALUES
(1, '2009 Filimleri', '2009-filimleri', '2009 filmler,film izle'),
(2, 'Bilim Kurgu', 'bilim-kurgu', 'bilim kurgu'),
(3, 'Aksiyon Filmleri', 'aksiyon-filmleri', 'aksiyon'),
(4, 'Polisiye Film', 'polisiye-film', 'polisiye');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklamlar`
--

CREATE TABLE IF NOT EXISTS `reklamlar` (
  `header` text COLLATE utf8_turkish_ci NOT NULL,
  `sol` text COLLATE utf8_turkish_ci NOT NULL,
  `sponsor` text COLLATE utf8_turkish_ci NOT NULL,
  `yukleniyor` text COLLATE utf8_turkish_ci NOT NULL,
  `sag` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `reklamlar`
--

INSERT INTO `reklamlar` (`header`, `sol`, `sponsor`, `yukleniyor`, `sag`) VALUES
('<a href="" title="Reklam Sayfası" target="_blank">\r\n<img src="http://www.gunebakisgazetesi.com/wp-content/uploads/2014/09/728x-90-reklam-alani.jpg" title="Reklam Alanı" />\r\n</a>', '<a href="" title="Reklam Sayfası" target="_blank">\r\n<img src="http://imgim.com/160x600banner_rozet.jpg" title="Reklam Alanı" />\r\n</a>', '<a href="" title="Reklam Sayfası" target="_blank">\r\n<img src="http://www.futbolklavuz.com/img/reklam.jpg" title="Reklam Alanı" />\r\n</a>', '	<a href="" title="Reklam Sayfası" target="_blank">\r\n<img src="https://i1.imgiz.com/rshots/8283/nerf-video-kapismasi-reklam-filmi_8283780-4420_640x360.jpg" title="Reklam Alanı" />\r\n</a>\r\n', '	<a href="" title="Reklam Sayfası" target="_blank">\r\n<img src="http://imgim.com/160x600banner_rozet.jpg" title="Reklam Alanı" />\r\n</a>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE IF NOT EXISTS `sayfalar` (
  `sayfa_id` int(11) NOT NULL AUTO_INCREMENT,
  `sayfa_baslik` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_seflink` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_key` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_text` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`sayfa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_baslik`, `sayfa_seflink`, `sayfa_key`, `sayfa_text`) VALUES
(1, 'Hakkımızda', 'hakkimizda', 'hakkımızda', '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n'),
(2, 'Telif Hakkı', 'telif-hakki', 'telif hakkı', '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n\r\n<p>1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayarlari`
--

CREATE TABLE IF NOT EXISTS `site_ayarlari` (
  `site_baslik` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `site_key` varchar(180) COLLATE utf8_turkish_ci NOT NULL,
  `site_desc` varchar(220) COLLATE utf8_turkish_ci NOT NULL,
  `site_logo` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `footer_yazisi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `site_yapimci` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `cache_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_ayarlari`
--

INSERT INTO `site_ayarlari` (`site_baslik`, `site_key`, `site_desc`, `site_logo`, `footer_yazisi`, `site_yapimci`, `cache_durum`) VALUES
('Site Başlığı', 'film izle,film', 'Desc', 'site_logo.png', 'Footer', 'Tolga TURAN', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `film_id`) VALUES
(3, 3),
(4, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
  `yorum_id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL,
  `yorum_yapan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_text` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_ip` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_onay` int(11) NOT NULL,
  PRIMARY KEY (`yorum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `film_id`, `yorum_yapan`, `yorum_mail`, `yorum_text`, `yorum_zaman`, `yorum_ip`, `yorum_onay`) VALUES
(2, 3, 'Tolga Turan', 'tolgaturants@gmail.com', 'Bu bir deneme yorumudur.', '01/02/2017', '::1', 0),
(3, 3, 'Deneme', 'tolgaturants@gmail.com', 'sss', '01/02/2017', '::1', 1),
(4, 2, 'Deneme', 'tolgaturants@gmail.com', 'deneme', '01/02/2017', '::1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
