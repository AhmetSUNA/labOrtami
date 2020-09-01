-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 18 Kas 2017, 12:18:03
-- Sunucu sürümü: 5.6.13
-- PHP Sürümü: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `sqli`
--
CREATE DATABASE IF NOT EXISTS `sqli` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sqli`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesap`
--

CREATE TABLE IF NOT EXISTS `hesap` (
  `hesap_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_ad` varchar(250) NOT NULL,
  `kullanici_sifre` varchar(250) NOT NULL,
  PRIMARY KEY (`hesap_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `hesap`
--

INSERT INTO `hesap` (`hesap_id`, `kullanici_ad`, `kullanici_sifre`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

CREATE TABLE IF NOT EXISTS `kitap` (
  `kitap_id` int(11) NOT NULL AUTO_INCREMENT,
  `yazar_id` int(11) NOT NULL,
  `kitap_ad` varchar(250) NOT NULL,
  `sayfa_sayisi` int(11) NOT NULL,
  PRIMARY KEY (`kitap_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`kitap_id`, `yazar_id`, `kitap_ad`, `sayfa_sayisi`) VALUES
(1, 1, 'Web Uygulama Güvenliği', 333),
(2, 1, 'Wireless Güvenliği', 300),
(3, 2, 'Ağ Güvenliği', 200),
(4, 3, 'CEH Eğitimi', 500);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazar`
--

CREATE TABLE IF NOT EXISTS `yazar` (
  `yazar_id` int(11) NOT NULL AUTO_INCREMENT,
  `yazar_ad` varchar(250) NOT NULL,
  `yazar_soyad` varchar(250) NOT NULL,
  PRIMARY KEY (`yazar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `yazar`
--

INSERT INTO `yazar` (`yazar_id`, `yazar_ad`, `yazar_soyad`) VALUES
(1, 'Ahmet', 'SUNA'),
(2, 'Mehmet', 'SUNA'),
(3, 'Ali', 'SUNA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
