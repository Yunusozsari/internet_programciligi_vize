-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Kas 2023, 07:20:10
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yazılımyolcusublog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abone`
--

CREATE TABLE `abone` (
  `abone_id` int(11) NOT NULL,
  `abone_email` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(1) NOT NULL,
  `ayar_baslik` varchar(250) NOT NULL,
  `ayar_aciklama` text NOT NULL,
  `ayar_anahtar` varchar(400) NOT NULL,
  `ayar_logo` varchar(120) NOT NULL,
  `ayar_adres` varchar(160) NOT NULL,
  `ayar_telefon` varchar(25) NOT NULL,
  `ayar_email` varchar(80) NOT NULL,
  `ayar_facebook` varchar(120) NOT NULL,
  `ayar_instagram` varchar(50) NOT NULL,
  `ayar_youtube` varchar(200) NOT NULL,
  `ayar_twitter` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_baslik`, `ayar_aciklama`, `ayar_anahtar`, `ayar_logo`, `ayar_adres`, `ayar_telefon`, `ayar_email`, `ayar_facebook`, `ayar_instagram`, `ayar_youtube`, `ayar_twitter`) VALUES
(1, 'blog ', 'İşte bizim hakkımızda', 'yunus', '', 'SMYO', '05443112786', 'yunusozsari3@gmail.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.youtube.com', 'https://www.twitter.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_baslik` varchar(240) NOT NULL,
  `blog_aciklama` text NOT NULL,
  `blog_resim` varchar(280) NOT NULL,
  `blog_sira` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `blog_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_anahtarkelime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_baslik`, `blog_aciklama`, `blog_resim`, `blog_sira`, `kullanici_id`, `blog_zaman`, `blog_anahtarkelime`) VALUES
(3, 'Yazılım yolcusu', '<p>Merhaba yazılım yolcuları</p>\r\n\r\n<p>&nbsp;</p>\r\n', '866775689646256583145about.jpg', 1, 0, '2021-01-09 19:29:52', 'yazılım yolcusu 123'),
(6, 'blog ', '<p>Yunus &Ouml;zsarı</p>\r\n', '268982456983555839429manzara-ve-doga-fotografciligi.jpg', 2, 0, '2023-11-23 03:32:33', 'yunus');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ekip`
--

CREATE TABLE `ekip` (
  `ekip_id` int(11) NOT NULL,
  `ekip_isim` varchar(240) NOT NULL,
  `ekip_resim` varchar(250) NOT NULL,
  `ekip_konum` varchar(200) NOT NULL,
  `ekip_aciklama` text NOT NULL,
  `ekip_twitter` varchar(200) NOT NULL,
  `ekip_instagram` varchar(200) NOT NULL,
  `ekip_youtube` varchar(200) NOT NULL,
  `ekip_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ekip`
--

INSERT INTO `ekip` (`ekip_id`, `ekip_isim`, `ekip_resim`, `ekip_konum`, `ekip_aciklama`, `ekip_twitter`, `ekip_instagram`, `ekip_youtube`, `ekip_sira`) VALUES
(9, 'Mert Yıldız', '747499537257805538668trainer-1.jpg', 'Grafik tasarımcı1', '<p>ASE</p>\r\n', 'https://www.twitter.com1', 'https://www.instagram.com/yazilimyolcusu1', '2222', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_resim` varchar(240) NOT NULL,
  `galeri_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_resim`, `galeri_sira`) VALUES
(3, '230570847555667916797about.jpg', 5),
(4, '97239836229465283891course-2.jpg', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_title` varchar(240) NOT NULL,
  `hakkimizda_text` text NOT NULL,
  `hakkimizda_resim` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_title`, `hakkimizda_text`, `hakkimizda_resim`) VALUES
(1, 'yunus özsarı', 'waderdtfgmljjkhgjhfngdbfdsdfgnbvsca', '6284227956628760759aea22d02-c6ae-4897-a281-48be86a42f40.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `icerik_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `icerik_baslik` varchar(250) NOT NULL,
  `icerik_resim` varchar(200) NOT NULL,
  `icerik_sira` int(11) NOT NULL,
  `icerik_aciklama` text NOT NULL,
  `icerik_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `icerik_anahtarkelime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerik_id`, `kategori_id`, `icerik_baslik`, `icerik_resim`, `icerik_sira`, `icerik_aciklama`, `icerik_zaman`, `icerik_anahtarkelime`) VALUES
(3, 1, 'Php dersleri başlıyor ve bitiyor1', '25661612103778356655course-details-tab-2.png', 21, '<p>Merhaba naıslsın1</p>\r\n', '2021-01-10 09:11:42', 'yazılım yolcusu, php dersleri'),
(7, 3, 'Html dersleri', '208739472544636816716events-1.jpg', 411, '<p>merhaba</p>\r\n', '2021-01-10 10:01:14', 'yazılım yolcusu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_baslik` varchar(240) NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adsoyad` varchar(240) NOT NULL,
  `kullanici_sifre` varchar(250) NOT NULL,
  `kullanici_email` varchar(200) NOT NULL,
  `kullanici_zaman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_sifre`, `kullanici_email`, `kullanici_zaman`) VALUES
(1, 'yunus özsarı', 'e10adc3949ba59abbe56e057f20f883e', 'yunusozsari3@gmail.com', '2023-11-23 19:44:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_baslik` varchar(240) NOT NULL,
  `slider_aciklama` text NOT NULL,
  `slider_buton` varchar(50) NOT NULL,
  `slider_link` varchar(200) NOT NULL,
  `slider_resim` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_baslik`, `slider_aciklama`, `slider_buton`, `slider_link`, `slider_resim`) VALUES
(1, 'Yunus Özsarı', '<h2 style=\"font-style:italic\"><strong>Hoşgeldiniz</strong></h2>\r\n', 'Tıkla', '', '74853169644296944604manzara-ve-doga-fotografciligi.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_kategori` varchar(240) NOT NULL,
  `icerik_id` int(11) NOT NULL,
  `yorum_adsoyad` varchar(280) NOT NULL,
  `yorum_detay` text NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `yorum_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_kategori`, `icerik_id`, `yorum_adsoyad`, `yorum_detay`, `yorum_zaman`, `yorum_onay`) VALUES
(8, '2', 3, 'Yazılım Yolcusu', '1wx', '2021-01-10 19:18:23', 1),
(9, '1', 3, 'Abdullah Yakut', 'deneme123\r\n', '2021-01-10 19:25:16', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abone`
--
ALTER TABLE `abone`
  ADD PRIMARY KEY (`abone_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `ekip`
--
ALTER TABLE `ekip`
  ADD PRIMARY KEY (`ekip_id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abone`
--
ALTER TABLE `abone`
  MODIFY `abone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `ekip`
--
ALTER TABLE `ekip`
  MODIFY `ekip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
