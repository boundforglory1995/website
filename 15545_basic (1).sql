-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost:3306
-- Genereertijd: 13 okt 2015 om 16:37
-- Serverversie: 5.1.73
-- PHP-versie: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `15545_basic`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headerAbout` text NOT NULL,
  `sectionAbout` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `about`
--

INSERT INTO `about` (`id`, `headerAbout`, `sectionAbout`) VALUES
(1, 'About Us', 'Kellin Quinn  Vocals\nJack Fowler  Guitar\nNick Martin  Guitar\nJustin Hills  Bass\nGabe Barham Drums\n\nSLEEPING WITH SIRENS drive right to the core of that place inside that connects people through music. Kellin Quinns intimate vocal revelations arrive drenched in a warm vulnerability that has stitched fans around the world to the band. Even as their penultimate album, Madness, promises to crack the mainstream wide open, the band remains steadfast in their determination to keep things welcoming (and sheltering) to the people who\\''ve been there since day one and the ever-increasing number of new fans alike.\n\nMadness, frankly, is an unashamed masterpiece of melodic pop rock perfection, driven by an undercurrent of punk aggression and beautifully tempered by an overwhelming soulfulness and sensitivity. Together with Quinn, guitarists Jack Fowler and Nick Martin, the rhythm section of bassist Justin Hill and drummer Gabe Barham forge a vibrant musical collage in songs that serve the powerful audience connection SWS celebrates.\n\n\nMANAGEMENT\nMark Mercado & John Youngman\nFly South Music Group\ninfo@flysouthmusic.com\n\nBOOKING (Worldwide excluding Europe)\nDave Shapiro\nThe Agency Group\ndaveshapiro@theagencygroup.com\n\nBOOKING (Europe)\nTom Taaffe\nThe Agency Group\ntomtaaffe@theagencygroup.com\n\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `homepage`
--

CREATE TABLE IF NOT EXISTS `homepage` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `header` varchar(150) CHARACTER SET utf8 NOT NULL,
  `section` text CHARACTER SET utf8 NOT NULL,
  `searching` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `homepage`
--

INSERT INTO `homepage` (`id`, `header`, `section`, `searching`) VALUES
(1, 'Background', ' Sleeping with Sirens is an American post-hardcore band from Orlando, Florida currently residing in Grand Rapids, Michigan. The band was formed in 2009 by members of For All We Know, Broadway, and Paddock Park. They are currently unsigned and have released three full-length albums and an acoustic EP. The group is known primarily for the versatility of vocalist Kellin Quinn''s tenor leggiero vocal range.', 'background'),
(2, 'Formation and With Ears to See and Eyes to Hear (2009-2010)', 'Their first album, With Ears to See and Eyes to Hear, was released on March 23, 2010. Debuted at number 7 on Billboard''s Top Heatseekers chart, and at number 				                     36 on Top Independent Albums.', 'Formation and With Ears to See and Eyes to Hear (2009-2010)'),
(3, 'Let''s Cheers to This and If You Were a Movie, This Would Be Your Soundtrack (2011-2012)', ' On April 7, 2011, the band released the first single off their new album "Do It Now Remember It Later". Later in the month on April 28, the next single "Fire" was released. The bands second album Let''s Cheers to This was released on May 10, 2011. On June 26, 2012 the band released their first Acoustic EP, "If You Were a Movie, This Would Be Your Soundtrack" On October 21, 2012, Sleeping With Sirens released a new single called "Dead Walker Texas Ranger" as a halloween special. ', 'Let''s Cheers to This and If You Were a Movie, This Would Be Your Soundtrack (2011-2012)'),
(4, 'Feel and Departure of Jesse Lawson (2013-2014)', ' In January 2013, the band entered the studio to record their follow up to Let''s Cheers to This with an estimated release date of mid-2013.On April 23, 2013, the band released a new single called "Low" and revealed the new album''s title as Feel and release date as June 4, 2013. In support of the new album, the band will be playing Kia main stage at the Vans Warped Tour 2013. On May 21, the band released the second single from Feel, "Alone" Featuring Machine Gun Kelly.\r\n\r\nOn August 4, the band announced that they will be headlining their tour, The Feel This Tour, in support of their album Feel. Memphis May Fire, Breathe Carolina, Issues, and Our Last Night will be supporting the tour on selected dates.\r\n\r\nOn October 16 2013, guitarist Jesse Lawson announced his departure from the band, citing his desire to spend more time with his family and start a new musical venture.After Lawson''s amicable departure the band tapped Nick Martin (formerly of D.R.U.G.S. and Underminded) to fill in on guitar on the bands upcoming UK/EU Feel tour.', 'Feel and Departure of Jesse Lawson (2013-2014)'),
(5, 'New album and world tour (2014-present)', '  On July 6, 2014 the band released pictures of them in the studio recording new music with John Feldmann. On July 21, 2014 the band announced they would be headlining a world tour alongside Pierce the Veil, with supporting acts Beartooth and This Wild Life. On August 8, 2014 the band stated they were parting ways with Rise Records and working on as an independent band.', 'New album and world tour (2014-present)');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `live_search`
--

CREATE TABLE IF NOT EXISTS `live_search` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `live_search`
--

INSERT INTO `live_search` (`id`, `name`, `email`, `date`) VALUES
(1, 'Huzoor Bux', 'huzoorbux@gmail.com', '2013-08-29 09:04:36'),
(2, 'Sameer Khan', 's_khan@gmail.com', '2013-08-29 09:04:36'),
(3, 'Ravi Khana', 'r_khana@phpgang.com', '2013-08-29 09:05:31'),
(4, 'Neelam Ara', 'neelam@phpgang.com', '2013-08-29 09:05:31');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path_picas` text NOT NULL,
  `span` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Gegevens worden uitgevoerd voor tabel `pictures`
--

INSERT INTO `pictures` (`id`, `path_picas`, `span`) VALUES
(1, 'img1.jpg', 'test'),
(2, 'img2.jpg', ''),
(3, 'img3.jpg', ''),
(4, 'img4.gif', ''),
(5, 'img5.gif', ''),
(6, 'img6.gif', ''),
(10, 'img7.gif', ''),
(11, 'img8.gif', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `slider`
--

INSERT INTO `slider` (`id`, `path`) VALUES
(3, '3.png'),
(4, 'img4.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tour`
--

CREATE TABLE IF NOT EXISTS `tour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `section` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Gegevens worden uitgevoerd voor tabel `tour`
--

INSERT INTO `tour` (`id`, `header`, `section`) VALUES
(1, 'Januari', 'Sat Jul 26 2014<br/>Melkweg The Max\n'),
(3, 'March', 'Sat 21 Mar 2015<br/>Melkweg The Max'),
(5, 'December', 'Sat 08 Dec 2013 <br/>Big Ticket Festival\n\n\n \n\n'),
(6, 'December', 'Sat 08 Dec 2013 <br/>Big Ticket Festival\r\n\r\n\r\n \r\n\r\n'),
(7, 'December', 'Sat 08 Dec 2013 <br/>Big Ticket Festival\r\n\r\n\r\n \r\n\r\n'),
(8, 'March', 'Sat 21 Mar 2015<br/>Melkweg The Max'),
(9, 'Januari', 'Sat Jul 26 2014<br/>Melkweg The Max\r\n'),
(10, 'December', 'Sat 08 Dec 2013 <br/>Big Ticket Festival\r\n\r\n\r\n \r\n\r\n'),
(11, 'March', 'Sat 21 Mar 2015<br/>Melkweg The Max'),
(12, 'December', 'Sat 08 Dec 2013 <br/>Big Ticket Festival\r\n\r\n\r\n \r\n\r\n'),
(13, 'March', 'Sat 21 Mar 2015<br/>Melkweg The Max');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `video`
--

INSERT INTO `video` (`id`, `video`) VALUES
(1, 'https://www.youtube.com/watch?v=2UJH9dCtp7w');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_path` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `videos`
--

INSERT INTO `videos` (`id`, `video_path`) VALUES
(1, 'https://www.youtube.com/embed/_eHPC2QmR10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
