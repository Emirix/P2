-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Haz 2021, 02:33:59
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
-- Veritabanı: `periwonen`
--

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
  `fiyat` int(11) NOT NULL,
  `yildiz` int(11) NOT NULL DEFAULT 5,
  `matras` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `topper` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `bekleme` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bekleme_suresi` varchar(399) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `marka`, `urun_kodu`, `aciklama`, `stok`, `fotograflar`, `ad`, `stoknp`, `tarih`, `fiyat`, `yildiz`, `matras`, `topper`, `bekleme`, `bekleme_suresi`) VALUES
(16, 'Sx', '21', 'fena', 23123, 'assets/urun/urun_26471196Panaroma-Koltuk-Takimi-resim3-2416.jpg', '', 'false', '2021-06-19 13:47:26', 23, 5, 'Polyether Matras', 'Polyether Topper', '0', '1 hafta'),
(17, 'sad', '213213', '123213', 0, 'assets/urun/urun_25586350Panaroma-Koltuk-Takimi-resim3-2416.jpg', 'SÜPER YATAK', 'false', '2021-06-19 13:47:05', 900, 5, 'Polyether Matras', 'Polyether Topper', '0', '4 hafta'),
(20, 'asds', '21', 'sadsadsa', 213123, 'assets/urun/urun_66494927Upload-Multiple-Files-in-CodeIgniter-min.png', 'ÇALIŞŞ', 'true', '2021-06-19 13:48:28', 213, 5, 'Polyether Matras', 'Polyether Topper', 'true', '5 hafta'),
(26, '', '', '', 0, 'assets/urun/urun_3029861Upload-Multiple-Files-in-CodeIgniter-min.png', '', 'false', '2021-06-19 20:54:53', 0, 5, 'Polyether Matras', 'Polyether Topper', 'false', '1 hafta');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
