-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Haz 2021, 16:35:41
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `p2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `eposta` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `fotograf` varchar(300) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'https://www.magazintube.com.tr/wp-content/uploads/2017/10/hacker-1-3.jpg',
  `isim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `okundu` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `borclar`
--

CREATE TABLE `borclar` (
  `id` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `ad_soyad` varchar(160) COLLATE utf8_turkish_ci NOT NULL,
  `tutar` int(11) NOT NULL,
  `fatura` int(11) NOT NULL,
  `alan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `matras`
--

CREATE TABLE `matras` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `matras` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reseller_hesap`
--

CREATE TABLE `reseller_hesap` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon1` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon2` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fotograf` varchar(500) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'default.jpg',
  `eposta` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `erisim` text COLLATE utf8_turkish_ci NOT NULL,
  `rank` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'reseller',
  `kayit_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `okundu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(11) NOT NULL,
  `alan` int(11) NOT NULL,
  `aldigi_urun` int(11) NOT NULL,
  `durum` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `renk` text COLLATE utf8_turkish_ci NOT NULL,
  `adet` int(11) NOT NULL,
  `matras` text COLLATE utf8_turkish_ci NOT NULL,
  `teslimat` timestamp NOT NULL DEFAULT '1999-09-08 21:00:00',
  `iptal` timestamp NULL DEFAULT NULL,
  `orj_fiyat` float NOT NULL,
  `topper` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kumastitle` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kumasli_mi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `vods` text COLLATE utf8_turkish_ci NOT NULL,
  `marka` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `odenen` int(11) NOT NULL,
  `kdvsiz_fiyat` int(11) NOT NULL,
  `yatak_boyutu` varchar(100) COLLATE utf8_turkish_ci DEFAULT 'undefined',
  `parca` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `matras_boyut` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `topper_boyut` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sm_bildirim`
--

CREATE TABLE `sm_bildirim` (
  `id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `type` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `talep_id` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `okundu` int(11) NOT NULL DEFAULT 0,
  `mesaj` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `siparisId` int(11) NOT NULL,
  `urun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sm_hesap`
--

CREATE TABLE `sm_hesap` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `magaza_adi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `telefon1` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon2` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `website` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `kvk` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `borc` int(11) NOT NULL,
  `para_limit` int(11) NOT NULL,
  `foto` varchar(150) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'default.jpg',
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `kayit_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `rank` varchar(2) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'sm',
  `okundu` int(11) NOT NULL DEFAULT 0,
  `aldiklari` text COLLATE utf8_turkish_ci NOT NULL,
  `kdv` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `staff_bildirim`
--

CREATE TABLE `staff_bildirim` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `magaza_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `hangi_talep` int(11) NOT NULL,
  `talep_id` int(11) NOT NULL,
  `siparisId` int(11) NOT NULL,
  `urun` int(11) NOT NULL,
  `magazaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `staff_hesap`
--

CREATE TABLE `staff_hesap` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon1` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon2` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `fotograf` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kayit_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `rank` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'staff',
  `okundu` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `baslik` varchar(780) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `oncelik` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `dosyalar` text COLLATE utf8_turkish_ci NOT NULL,
  `kim` int(11) NOT NULL,
  `durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Açık',
  `olusturma` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme` timestamp NOT NULL DEFAULT current_timestamp(),
  `ad_soyad` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ticket_yanit`
--

CREATE TABLE `ticket_yanit` (
  `id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `ad_soyad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dosyalar` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `sahip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `topper`
--

CREATE TABLE `topper` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `topper` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `marka` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `urun_kodu` varchar(160) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `fotograflar` text COLLATE utf8_turkish_ci NOT NULL,
  `ad` text COLLATE utf8_turkish_ci NOT NULL,
  `stoknp` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `fiyat` float NOT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 5,
  `matras` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `topper` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `bekleme` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bekleme_suresi` varchar(399) COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_value` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `yildiz` int(11) NOT NULL DEFAULT 5,
  `ad_soyad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` text COLLATE utf8_turkish_ci NOT NULL,
  `fotograf` text COLLATE utf8_turkish_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `borclar`
--
ALTER TABLE `borclar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `matras`
--
ALTER TABLE `matras`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `reseller_hesap`
--
ALTER TABLE `reseller_hesap`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sm_bildirim`
--
ALTER TABLE `sm_bildirim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sm_hesap`
--
ALTER TABLE `sm_hesap`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `staff_bildirim`
--
ALTER TABLE `staff_bildirim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `staff_hesap`
--
ALTER TABLE `staff_hesap`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ticket_yanit`
--
ALTER TABLE `ticket_yanit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `topper`
--
ALTER TABLE `topper`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `borclar`
--
ALTER TABLE `borclar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `matras`
--
ALTER TABLE `matras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `reseller_hesap`
--
ALTER TABLE `reseller_hesap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sm_bildirim`
--
ALTER TABLE `sm_bildirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sm_hesap`
--
ALTER TABLE `sm_hesap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `staff_bildirim`
--
ALTER TABLE `staff_bildirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `staff_hesap`
--
ALTER TABLE `staff_hesap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ticket_yanit`
--
ALTER TABLE `ticket_yanit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `topper`
--
ALTER TABLE `topper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;