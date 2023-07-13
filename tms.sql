-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 06:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '211ef5f9a14e7ce8a394b304926f9863', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`) VALUES
(7, 'Shubhanshu Nishad', 2147483647, 'shubhanshunishad24@gmail.com', 'erdgfdgfdgfg'),
(8, 'mohit Nishad', 94555932, 'shubhanshunishad24@gmail.com', 'dfdsfdfdfd'),
(9, 'Shubhanhsu Nishad', 2147483647, 'shubhanshunishad2221@gmail.com', 'Ttttt'),
(10, 'NathanIndup', 89471999783, 'no-replyLieftfamRit@gmail.com', 'Hello!  metaeducators.com \r\n \r\nWe make offer for you \r\n \r\nSending your commercial proposal through the Contact us form which can be found on the sites in the contact section. Contact form are filled in by our software and the captcha is solved. The profit of this method is that messages sent through feedback forms are whitelisted. This method increases the probability that your message will be read. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis offer is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.'),
(11, 'contactzmpyal', 123456789, 'solopinacelestina1991@rambler.ru', 'Good day! \r\n \r\nWe will send viafollow-up forms to the sites of companies via all countries and domain zones of the world.  \r\n \r\nhttps://xn----7sbb1bbndheurc1a.xn--p1ai/ \r\n \r\nWHAT IS THE MAILING OF SITES BY FEEDBACK FORMS? \r\nThis is a type of mailing using the feedback forms that are located in the contact section of the website and filled by our programme in automatic mode with a rate of a few thousand feedback forms per minute, while the alphabetic and numeric code from the pictures (CAPTCHA) is also solved. \r\nAfter that, the correspondent e-mails including your offers are sent to the mailboxes of businesses. \r\nWhen sending mailing by contact feedback forms, it turns out that each site sends an e-mail “to itself” and, therefore, all letters arrive in the inbox folder of the exact email in which the company receives the business information. \r\n \r\nUnique Trade Offer: \r\nFast 100-percent notification of firms and internet resource owners about new cooperation offers. \r\nSearch of new custo'),
(12, 'JAMES COOK', 86441491185, 'james_cook78@yahoo.com', 'Dear sir/ma \r\nWe are a finance and investment company offering loans at 3% interest rate. We will be happy to make a loan available to your organisation for your project. Our terms and conditions will apply. Our term sheet/loan agreement will be sent to you for review, when we hear from you. Please reply to this email ONLY cookj5939@gmail.com \r\n \r\nRegards. \r\nJames Cook \r\nChairman & CEO Euro Finance & Commercial Ltd'),
(13, 'Emil Wouters\r\n', 84473795971, 'no-replyLieftfamRit@gmail.com', 'Good day!  metaeducators.com \r\n \r\nWe present \r\n \r\nSending your business proposition through the feedback form which can be found on the sites in the contact section. Feedback forms are filled in by our program and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This technique raise the chances that your message will be open. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis offer is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.'),
(14, 'Mike Pearcy\r\n', 87574261479, 'no-replyawavehow@gmail.com', 'Hello \r\n \r\nI have just verified your SEO on  metaeducators.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Pearcy\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de'),
(15, 'Mike King\r\n', 81196942649, 'no-replyawavehow@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike King\r\n \r\nsupport@digital-x-press.com'),
(16, 'Mike Tracey\r\n', 86988981573, 'no-replyawavehow@gmail.com', 'Hi \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nApply this -35% code ( MEGAPROMOTER ) while getting your metaeducators.com to have a DA above 60 points in Moz with us today and reap the benefits of such a great feat at an affordable rate. \r\n \r\n \r\n \r\nSee our offers here: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\nhttps://www.strictlydigital.net/product/moz-da60-seo-plan/ \r\n \r\nNEW: ahrefs DR70 is now possible: \r\nhttps://www.strictlydigital.net/product/ahrefs-seo-plan/ \r\n \r\n \r\nThank you \r\nMike Tracey\r\n \r\nmike@strictlydigital.net'),
(17, 'Mike Farrell\r\n', 89636233641, 'no-replyawavehow@gmail.com', 'Good Day \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Farrell\r\n \r\nSpeed SEO Digital Agency'),
(18, 'NataHip', 87538713877, 'woodthighgire1988@gmail.com', ' \r\nHeus pulcher! Ego a puella parum pudici. Parati ad omnem voluntatem tuam phantasias https://localchicks3.com/?u=41nkd08&o=8dhpkzk'),
(19, 'voips', 81194978772, 'yknln6hi@icloud.com', 'Hi, this is Irina. I am sending you my intimate photos as I promised. https://tinyurl.com/y2x75qo6'),
(20, 'Shubhanshu Nishad', 9455593295, 'shubhanshunishad24@gmail.com', 'HI, I want to connect with you.'),
(21, 'Mike Crossman\r\n', 86629474311, 'no-replyawavehow@gmail.com', 'Hi there \r\n \r\nI have just took a look on your SEO for  metaeducators.com for its SEO metrics and saw that your website could use a boost. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Crossman\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de'),
(22, 'Mike Donovan\r\n', 81149412969, 'no-replyawavehow@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Donovan\r\n \r\nsupport@digital-x-press.com'),
(23, 'Mike Coleman\r\n', 85361126515, 'no-replyawavehow@gmail.com', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/'),
(24, 'Shubhanshu Nishad', 9455593295, 'shubhanshunishad2221@gmail.com', 'Hi, Everyone. '),
(25, 'Saharsh shekhar srivastava', 9170486482, 'saharsh2399@gmail.com', 'Helping people makes the happy '),
(26, 'Saharsh shekhar srivastava ', 919170486482, 'saharsh2399@gmail.com', 'I want to help poor children those who can not for there quality education '),
(27, 'Saharsh shekhar srivastava ', 919170486482, 'saharsh2399@gmail.com', 'I want to help poor children those who can not for there quality education '),
(28, 'Mike Longman\r\n', 85591841239, 'no-replyawavehow@gmail.com', 'Hi there \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Longman\r\n \r\nSpeed SEO Digital Agency'),
(29, 'Jenny', 0, 'jenny@foremedia.net', 'Do you advertise on Google / Facebook / Native? You are leaving money on the table!\r\n\r\nHey, my name is Jenny from ForeMedia.net, I saw your site and noticed that while It looks great, you could use a little bit more traffic you drive more visitors & conversions...\r\n\r\nLuckily for you, I can help you with that!\r\n\r\nI can get you tens of thousands of visitors from pretty much every country on the globe, for 10-15% of the cost you would normally pay on Google or Facebook and the traffic is of a much higher quality because your ads will be placed on high quality sites we work with directly...\r\n\r\nSounds good? You can reply to this email:  jenny.sa@foremedia.net\r\nOr visit our self-serve platform here: https://go.foremedia.net/u/v/\r\n\r\nWe also have Live chat with English speaking agents willing to help you start and optimize your ads for maximum traffic, give it a try here:\r\n\r\nhttps://go.foremedia.net/u/v/'),
(30, 'Mike Clifford\r\n', 86725649495, 'no-replyawavehow@gmail.com', 'Hi \r\n \r\nI have just analyzed  metaeducators.com for  the current search visibility and saw that your website could use a push. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Clifford\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de'),
(31, 'Mike Parson\r\n', 88749598136, 'no-replyawavehow@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Parson\r\n \r\nsupport@digital-x-press.com'),
(32, 'Hennen Robert', 88577736169, 'hnnnrobert@gmail.com', 'Hello Dear, \r\n \r\nGreetings to you and I hope this email meet at your best, I am working directly with a private family portfolio that can provide funding for credible clients with feasible projects. Currently, we have investment funds for viable projects. \r\n \r\nThey are interested in the following: Institution, Library, Hospitals, Green energy, \r\nPower projects, Agriculture and Real Estate. They can also partner with your company on other projects of value. The interest rate and tenure are fantastic. \r\n \r\nYour response is most anticipated if this is of interest to you. \r\nReach me on email: contact@hennenrobert.xyz or \r\n \r\nKind regards, \r\n \r\nHennen Robert \r\nFinancial Consultant \r\nWhatsapp: +1 209 248 1965 \r\nEuroclear Groups \r\nPersonal: hnnnrobert@gmail.com \r\nUrl: http://euroclear.com'),
(33, 'Mike Longman\r\n', 83863529131, 'no-replyawavehow@gmail.com', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/'),
(34, 'Mike Benson\r\n', 85131564798, 'no-replyawavehow@gmail.com', 'Howdy \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Benson\r\n \r\nSpeed SEO Digital Agency'),
(35, 'PhilipDus', 85332526654, 'contactcreditfinance8@gmail.com', 'Guten Morgen alle . \r\nSie brauchen einen Finanzkredit – Immobilienkredit – Investitionskredit – Autokredit – Schuldenkonsolidierung – Kreditablösung – Sie stecken fest. Kontaktieren Sie uns noch heute und teilen Sie uns den Betrag mit, den Sie benötigen, damit wir Ihnen weitere Informationen geben und Ihnen die Schritte mitteilen können, die Sie befolgen müssen, um dieses Darlehen so schnell wie möglich zu einem angemessenen, seriösen und ehrlichen Preis zu erhalten. ::: kontaktkreditfinanzen@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_nivesharth`
--

CREATE TABLE `contact_nivesharth` (
  `id_na` int(3) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_nivesharth`
--

INSERT INTO `contact_nivesharth` (`id_na`, `name`, `phone`, `email`, `message`) VALUES
(1, 'Shubhanshu Nishad', 9455593295, 'shubhanshunishad24@gmail.com', 'hi ji jijiji'),
(13, 'Shubhanshu Nishad', 9455593295, 'shubhanshunishad24@gmail.com', 'hi '),
(14, 'Shubhanshu Nishad', 9455593295, 'shubhanshunishad24@gmail.com', 'hi '),
(15, 'Thomas Kraynik', 89695281627, 'autoreply@ddmmarketing.hu', 'Üdvözlöm, \r\n \r\nVállalkozása online jelenlétének elemzése után azonosítottunk néhány kulcsfontosságú növekedési lehetőséget. \r\n \r\nAz Ön közreműködésével fejleszthetjük ezeket a pontokat, és rendelkezésre bocsátjuk adat - és piaci intelligencia - elemzésünket az Ön konkrét réséről. \r\n \r\nA legjobb az egészben, hogy minden szóban forgó informatikai és marketing megoldást mi kezelünk, ezáltal is megkönnyítve az Ön munkáját. \r\n \r\nAmennyiben, tehát többet szeretne megtudni arról, hogyan segíthetünk Önn'),
(16, 'Richarddek', 83385255314, 'no-replyheltsoola@gmail.com', 'Good day!  nivesharth.com \r\n \r\nWe offer \r\n \r\nSending your business proposition through the Contact us form which can be found on the sites in the contact section. Feedback forms are filled in by our application and the captcha is solved. The profit of this method is that messages sent through feedback forms are whitelisted. This technique improve the probability that your message will be open. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your messag');

-- --------------------------------------------------------

--
-- Table structure for table `contact_shubhfoundation`
--

CREATE TABLE `contact_shubhfoundation` (
  `id_sf` int(3) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_shubhfoundation`
--

INSERT INTO `contact_shubhfoundation` (`id_sf`, `name`, `phone`, `email`, `message`) VALUES
(1, 'Shubhanshu Nishad', 9455593295, 'shubhanshunishad24@gmail.com', 'Hi , I am shubhanshu Nishad ji.'),
(2, 'Alok  Garg', 7800004401, 'alokbarneal91@gmail.com', 'Can I help us ');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `ToDate` varchar(100) DEFAULT NULL,
  `Comment` mediumtext DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`) VALUES
(24, 2, 'metaeducator@gmail.com', '2021-08-28', '2021-08-27', 'we are group of 5 person . ', '2021-08-07 12:02:41', 0, NULL, NULL),
(25, 2, 'shubhanshunishad2221@gmail.com', '2021-08-27', '2021-09-02', 'This is testing booking . Don\'t look it serious .', '2021-08-11 16:05:30', 2, 'a', '2021-10-13 15:25:09'),
(26, 2, 'shubhanshunishad2221@gmail.com', '2021-08-12', '2021-08-14', 'This is testing booking . Don\'t look it serious .', '2021-08-11 16:08:56', 1, NULL, '2021-10-13 15:24:47'),
(27, 2, 'shubhanshunishad2221@gmail.com', '2021-08-12', '2021-08-20', 'This is testing booking . Don\'t look it serious .', '2021-08-11 16:12:19', 2, 'a', '2021-10-13 15:24:43'),
(28, 7, 'mayankraw21@gmail.com', '2022-01-21', '2022-01-25', '4', '2022-01-17 16:09:45', 0, NULL, NULL),
(29, 3, 'mayankraw21@gmail.com', '2022-01-21', '2022-01-25', '4', '2022-01-17 16:10:51', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(24, 'Shubhanshu Nishad', 'shubhanshunishad24@gmail.com', '945559', 'shimla trip', ' I want to go shimla .', '2021-08-07 12:12:29', 1),
(25, 'Shubhanshu Nishad', 'shubhanshunishad2221@gmail.com', '+449455593', 'Tour', 'I am glad to host your website.  It\'s test msg. Ignore it. ', '2021-08-11 15:34:43', NULL),
(26, 'ThomasInalo', 'hrhmbambi@gmail.com', '3013', 'Bulk Supply to Cameroon', 'Dear Director, \r\nWe are interested in your products. If your company can handle a bulk supply of your products to Cameroon, please contact us. \r\nPlease forward copy of your reply to hrhbahmbi3@oepd.org    Regards HRM Bah Mbi', '2021-08-13 04:09:24', 1),
(27, 'Michael Rajiv', 'michaelrajiv44@gmail.com', '3160', 'Need funding?', 'Hello Dear, \r\n \r\nGreetings to you and I hope this email meet at your best, I am working directly with a private family portfolio that can provide funding for credible clients with feasible projects. Currently, we have investment funds for viable projects. \r\n \r\nThey are interested in the following: Institution, Library, Hospitals, Green energy, \r\nPower projects, Agriculture and Real Estate. They can also partner with your company on other projects of value. The interest rate and tenure are fantastic. \r\n \r\nYour response is most anticipated if this is of interest to you. \r\nReach me on email: funding@euroclearpayments.com or michaelrajiv44@gmail.com \r\n \r\n \r\nKind regards, \r\n \r\nMichael Rajiv \r\nFinancial Consultant \r\nCall: +44 7452 111119 \r\nEuroclear Groups \r\nfunding@euroclearpayments.com \r\nUrl: http://euroclear.com', '2021-08-18 14:31:48', NULL),
(28, 'Attahiru Bafarawa', 'bafarattahiru@gmail.com', '6828', 'Dear Partner', 'Dear Partner; \r\n \r\nI came across your email contact on Database; Where i was searching for a competent Partner who can handle a lucrative business for me as trustee and manager. I anticipate to read from you soon so I can provide you with more details. \r\n \r\nAttahiru Bafarawa \r\nbafarattahiru@gmail.com', '2021-08-18 17:21:57', NULL),
(29, 'Donald Cole', 'kendrickbells@donaldocole.com', '857', 'Partnership', 'Good day \r\n \r\n \r\n \r\nI`m seeking a reputable company/individual to partner with in a manner that would benefit both parties. The project is worth $24 Million so \r\nIf interested, kindly contact me through this email donaldcole@donaldocole.com for clarification. \r\n \r\n \r\nI await your response. \r\n \r\n \r\nThanks, \r\n \r\n \r\nDonald Cole', '2021-08-23 01:38:55', NULL),
(30, 'Mike Creighton\r\n', 'abelsolis7162@gmail.com\r\n', '7095', 'Local SEO for more business', 'Howdy \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Creighton\r\n \r\nSpeed SEO Digital Agency', '2021-08-27 14:20:36', NULL),
(31, 'Mike Day\r\n', 'no-replyHorelaTa@gmail.com', '3542', 'quality monthly SEO plans', 'Hello \r\n \r\nI have just checked  tourintown.com for  the current search visibility and saw that your website could use a push. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Day\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-09-03 20:41:57', NULL),
(32, 'Mike Wood\r\n', 'no-replyHorelaTa@gmail.com', '44', 'Get more dofollow backlinks for tourintown.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Wood\r\n \r\nsupport@digital-x-press.com', '2021-09-15 22:36:57', NULL),
(33, 'Donald Cole', 'lanj7962@gmail.com', '9054', 'Partnership', 'Good day \r\n \r\nI`m seeking a reputable company/individual to partner with in a \r\nmanner that would benefit both parties. The project is worth \r\n$24 Million so If interested, kindly contact me through this \r\nemail coledd11@clocdcolela.com for clarification. \r\n \r\nI await your response. \r\n \r\nThanks, \r\n \r\nDonald Cole', '2021-09-22 14:25:23', NULL),
(34, 'Mike Parson\r\n', 'no-replyHorelaTa@gmail.com', '3894', 'Local SEO for more business', 'Greetings \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Parson\r\n \r\nSpeed SEO Digital Agency', '2021-09-22 19:27:30', NULL),
(35, 'Mike Parkinson\r\n', 'no-replyHorelaTa@gmail.com', '2123', 'affordable monthly SEO plans', 'Howdy \r\n \r\nI have just verified your SEO on  tourintown.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Parkinson\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-10-02 11:43:45', NULL),
(36, 'Donald Cole', 'lanj7962@gmail.com', '1170', 'Partnership', 'Good day \r\n \r\nI contacted you some days back seeking your cooperation in a matter regarding funds worth $24 Million, I urge you to  get back to me through this email coledd11@cloedcolela.com if you\'re still interested. \r\n \r\nI await your response. \r\n \r\nThanks, \r\n \r\nDonald Cole', '2021-10-05 09:30:45', NULL),
(37, 'Mike Oldridge\r\n', 'no-replyHorelaTa@gmail.com', '4283', 'Get more dofollow backlinks for tourintown.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Oldridge\r\n \r\nsupport@digital-x-press.com', '2021-10-13 16:17:07', NULL),
(38, 'Hans Jones', 'kerenthelma@gmail.com', '7877', 'Express Documents Services ---Express-Dokumentendienste', 'We are a Team of IT Experts specialized in the production of Real and Novelty Documents such as Passport, Driving License , IELTS Certificate, ID Cards, Diplomas, SS Cards, University Certificates, Green Cards, Death Certificate, Working Permits, Visa\'s etc. Contact us on WhatsApp for more information +49 1590 2969018. or Email us at... authenticdvlalicense@gmail.com \r\n \r\n \r\nWir sind ein Team von IT-Experten, das auf die Erstellung von echten und neuartigen Dokumenten wie Reisepass, Fuhrerschein, IELTS-Zertifikat, Personalausweisen, Diplomen, SS-Karten, Universitatszertifikaten, Green Cards, Sterbeurkunden, Arbeitserlaubnissen, Visa usw. spezialisiert ist uns auf WhatsApp fur weitere Informationen +49 1590 2969018.  oder senden Sie uns eine E-Mail an... authenticdvlalicense@gmail.com', '2021-10-17 06:44:33', NULL),
(39, 'Mike Donovan\r\n', 'no-replyHorelaTa@gmail.com', '5305', 'Local SEO for more business', 'Greetings \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Donovan\r\n \r\nSpeed SEO Digital Agency', '2021-10-18 12:59:19', NULL),
(40, 'Express Documents', 'davidholman200@gmail.com', '4063', 'Express Documents Services', 'We are a Team of IT Experts specialized in the production of Real and Novelty Documents such as Passport, Driving License , IELTS Certificate,  NCLEX Certificate, ID Cards, Diplomas, SS Cards, University Certificates, Green Cards, Death Certificate, Working Permits, Visa\'s etc. Contact us on WhatsApp for more information +49 1590 2969018. or Email us at... documentsservicesexperts@gmail.com', '2021-10-25 04:02:03', NULL),
(41, 'Matthew Leroy', 'writingfeedback@writingbybenjamin.com', '5438', 'SEO & Content Specials', 'Hi! \r\n \r\nDo you struggle to find time to write content? \r\n \r\nAre you in need of quality SEO services? \r\n \r\nHire the best team of writers & SEO professoinals online today! \r\n \r\nWe do all the research and provide well-written, unique SEO content perfect for higher search engine ranking and better visitor engagement. \r\n \r\nOur SEO packages offer the best mix of high-quality backlinks you will find \r\n \r\nIf you need fresh blog posts, location specific pages, or excellent SEO, check out our one-time specials here: \r\n \r\nhttps://writingbybenjamin.com/one-time-specials/', '2021-10-28 09:48:04', NULL),
(42, 'Mike Enderson\r\n', 'no-replyHorelaTa@gmail.com', '2547', 'cheap monthly SEO plans', 'Hi \r\n \r\nI have just checked  tourintown.com for its SEO Trend and saw that your website could use a boost. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Enderson\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-10-29 18:21:41', NULL),
(43, 'Simpson Middleton', 'simpsonmiddleton1111@gmail.com', '8064', 'WE OFFER LOANS AND JV PARTNERSHIP', 'Hello \r\n \r\nDo you need funds to finance a project? Do you want to raise capital for a business transaction?- Or maybe you require a line of credit? We can help! \r\n \r\nWe are agents working directly with private investors who are able to provide yearly renewable loans to get your project funded. \r\n \r\nMy investors are looking to invest into various businesses like real estate, hotel, oil and gas, farming, mining, construction, trade, telecommunications, etc. If you have any viable project, we are ready to open a window for further discussion. \r\n \r\nYours faithfully \r\nSimpson Middleton \r\nWhatsApp: 447452180661 \r\nE-mail: info@wealthfunders.org', '2021-11-05 03:49:55', NULL),
(44, 'Mike Mathews\r\n', 'no-replyHorelaTa@gmail.com', '244', 'Get more dofollow backlinks for tourintown.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Mathews\r\n \r\nsupport@digital-x-press.com', '2021-11-05 13:14:47', NULL),
(45, 'Jameseagex', 'no-replyscelpcevy@gmail.com', '6948', 'Mailing via the feedback form.', 'Good day!  tourintown.com \r\n \r\nWe make offer for you \r\n \r\nSending your commercial offer through the Contact us form which can be found on the sites in the contact partition. Contact form are filled in by our program and the captcha is solved. The profit of this method is that messages sent through feedback forms are whitelisted. This method raise the odds that your message will be read. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis message is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', '2021-11-08 05:11:55', NULL),
(46, 'Gerardusada', 'dimafokin199506780tx+92f2@inbox.ru', '3187', 'Good site', 'tourintown.com tyrueoswkdhfbjksdhbdvsddnajkmkxdbfsdjdfadladabfhghgdhsjkd', '2021-11-09 06:48:16', NULL),
(47, 'Mike Sheldon\r\n', 'no-replyHorelaTa@gmail.com', '5752', 'Strengthen your Domain Authority', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your tourintown.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.strictlydigital.net/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Sheldon\r\n', '2021-11-11 02:22:09', NULL),
(48, 'Mike Hawkins\r\n', 'no-replyHorelaTa@gmail.com', '5523', 'Local SEO for more business', 'Hello \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Hawkins\r\n \r\nSpeed SEO Digital Agency', '2021-11-16 03:33:39', NULL),
(49, 'Pierre Semengue', 'centermolyko@gmail.com', '9939', 'Product and business cooperation', 'Attn. Director, \r\nI am interested in your products and line of business. \r\nPlease do not hesitate to contact me if you will need a financial partner and investor. \r\nKindly send reply to \r\npierresemengue3@adminoiedc.org \r\nRegards, \r\nPierre Semengue', '2021-11-18 08:44:22', NULL),
(50, 'Alister Batt', 'no-reply@nomail.com', '7123', 'I am waiting for you reply', 'Good   day \r\nDid you receive my last email I sent to you? Please reply me back For more details \r\nReply me on this Email, alisterbattaa@gmail.com \r\nBest Regards, \r\nMr Roland Alister Batt', '2021-11-20 00:20:08', NULL),
(51, 'Mike Conors\r\n', 'no-replyHorelaTa@gmail.com', '811', 'affordable monthly SEO plans', 'Hi there \r\n \r\nI have just analyzed  tourintown.com for the ranking keywords and saw that your website could use a push. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Conors\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-11-27 17:30:41', NULL),
(52, 'Mike Page\r\n', 'no-replyHorelaTa@gmail.com', '2222', 'Get more dofollow backlinks for tourintown.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Page\r\n \r\nsupport@digital-x-press.com', '2021-12-01 14:39:52', NULL),
(53, 'JAMES COOK', 'james_cook78@yahoo.com', '561', 'Loan @ 3%', 'Dear sir/ma \r\nWe are a finance and investment company offering loans at 3% interest rate. We will be happy to make a loan available to your organisation for your project. Our terms and conditions will apply. Our term sheet/loan agreement will be sent to you for review, when we hear from you. Please reply to this email ONLY cookj5939@gmail.com \r\n \r\nRegards. \r\nJames Cook \r\nChairman & CEO Euro Finance & Commercial Ltd', '2021-12-07 00:14:48', NULL),
(54, 'Eddiefleno', 'daniel-hahn1@t-online.de', '2519', 'Deine Freunde verdienen bereits Vor 198000 EUR pro Tag', 'Schnelles Geld Vor 127000 EUR in der Woche >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nihawiwa.com%2F0bnl&sa=D&43=10&usg=AFQjCNEUPijOi1LFtA_rg0rU0qfVGTKd6A <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-08 07:05:56', NULL),
(55, 'Mike Evans\r\n', 'no-replyHorelaTa@gmail.com', '8067', 'Strengthen your Domain Authority', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your tourintown.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.strictlydigital.net/product/ahrefs-dr60/ \r\n \r\nThank you \r\nMike Evans\r\n', '2021-12-09 16:00:22', NULL),
(56, 'Oskar Weber', 'tbformleads@gmail.com', '4544', 'Here you go', 'Hello \r\n \r\nMy main objective here, is to help increase revenue for you by producing an animated video that will generate leads and sales for your business 24/7, for just $97. \r\n \r\nBut this offer is only good this week, so get your video before the deadline. \r\n \r\nWatch Our Video Now! https://bit.ly/Xpress97offer \r\n \r\nFor less than you spend on coffee each month you get an American Owned Video company that can write your script, create your story board, lay-in a good soundtrack and produce an awesome video that brings home the bacon. \r\n \r\nAgain, this $97 promotion is for this week only. Don’t miss out!!! \r\n \r\nWatch Our Video Now! https://bit.ly/Xpress97offer', '2021-12-13 16:43:23', NULL),
(57, 'Mike Saunder\r\n', 'no-replyHorelaTa@gmail.com', '7798', 'Local SEO for more business', 'Howdy \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Saunder\r\n \r\nSpeed SEO Digital Agency', '2021-12-13 22:25:20', NULL),
(58, 'Eddiefleno', 'osterloh.melissa@web.de', '6253', 'Passive income more $ 8775 per day', 'A ready-made system for generating passive income from $ 9977 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&52=32&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-17 18:44:54', NULL),
(59, 'Eddiefleno', 'zelisabetta@email.it', '6728', 'Register, press one button and get passive income from $ 8886 per day', 'Income from one investment more $ 7559 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&18=39&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-18 18:29:40', NULL),
(60, 'Eddiefleno', 'claudia.deb@fncd.it', '1131', 'Passive income from $ 6756 in a day', 'Register, press one button and get passive income more $ 5899 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&90=78&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-19 17:37:46', NULL),
(61, 'Kirilltpf', 'r.ob.e.r.t.s.t.ol.te.n.b.e.r.g.big@gmail.com\r\n', '1', '????? ??????? ???????', '??? ?? ????????????? ??????? \r\n????? ? ?????? ??????? ?? ?????, ?? ???? ?????? ?? ????, ????? ??? ?? ???? https://www.gismeteo.ua/ ? ??? ??????? ???? ?????????????. ? ???? ????????? ??? ????? ???? ??? ?? ????. \r\n??? ??? ??????, ?? ????????.', '2021-12-21 04:12:23', NULL),
(62, 'Mike Mathews\r\n', 'no-replyHorelaTa@gmail.com', '2350', 'cheap monthly SEO plans', 'Howdy \r\n \r\nI have just took a look on your SEO for  tourintown.com for its SEO Trend and saw that your website could use a push. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Mathews\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-12-24 21:14:37', NULL),
(63, 'Marty Tierney', 'livestaffinghub@gmail.com', '4019', 'Here you go', 'Hello \r\n \r\nHello, My name is Marty and I’m a video marketing expert.  My main objective here, is to help increase revenue for you by producing 2D Animated Videos to generate leads and sales for your business 24/7, for just $499. \r\n \r\nThe offer is only good for this week, so get your video before the deadline. \r\n \r\nWatch Our Video Now!      https://bit.ly/499VideoOffer \r\n \r\nImagine, for 1 Low Affordable rate you get 2 CUSTOM VIDEOS that will bring home the bacon for the New Year! \r\n \r\nI know this is crazy, so Don’t Miss Out!!! \r\n \r\nI’m in, show me THE DETAILS!    https://bit.ly/499VideoOffer \r\n \r\nBest, \r\n \r\nMarty Tierney \r\nDigital Expert & Video Producer', '2021-12-30 07:45:10', NULL),
(64, 'Mike Baldwin\r\n', 'no-replyHorelaTa@gmail.com', '5040', 'Get more dofollow backlinks for tourintown.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Baldwin\r\n \r\nsupport@digital-x-press.com', '2021-12-31 19:49:18', NULL),
(65, 'Mike Parkinson\r\n', 'no-replyHorelaTa@gmail.com', '290', 'Increase sales for tourintown.com', 'Howdy \r\n \r\nIf you\'ll ever need a permanent increase in your website\'s Domain Authority score, We can help. \r\n \r\nMore info: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\n \r\nThank you \r\nMike Parkinson\r\n \r\nmike@strictlydigital.net', '2022-01-03 13:35:48', NULL),
(66, 'Express Documents', 'perismogarn471@gmail.com', '8560', 'Authentic Express Documents Services.', 'We are a Team of IT Experts specialized in the production of Real and authentic Documents such as Passport, Driving License, Covid19 Vaccine Cards, CSCS Cards, Diploma Certificates, PhD\'s, IELTS Certificate, Bachelor  degrees, NCLEX Certificate, MBA, ID Cards, SS Cards, Associate Certificate, University Certificates, Green Cards, Death Certificate, Master Degree, PMP Certificate, Working Permits, Visa\'s etc. Contact us on WhatsApp for more information +49 1590 2969018. or Email us at documentsservicesexperts@gmail.com', '2022-01-13 14:59:28', NULL),
(67, 'Kevin Johnson', 'tbformleads@gmail.com', '6797', 'Here you go', 'Hello \r\n \r\nMy main objective here, is to help increase revenue for you by producing an animated video that will generate leads and sales for your business 24/7, for just $97. \r\n \r\nBut this offer is only good this week, so get your video before the deadline. \r\n \r\nWatch Our Video Now! https://bit.ly/Xpress97offer \r\n \r\nFor less than you spend on coffee each month you get an American Owned Video company that can write your script, create your story board, lay-in a good soundtrack and produce an awesome video that brings home the bacon. \r\n \r\nAgain, this $97 promotion is for this week only. Don’t miss out!!! \r\n \r\nI’m in, show me what you got. https://bit.ly/Xpress97offer \r\n \r\nBest, \r\n \r\nKevin Johnson \r\nBusiness Development Manager', '2022-01-14 22:57:00', NULL),
(68, 'Mike Walker\r\n', 'no-replyHorelaTa@gmail.com', '3399', 'Local SEO for more business', 'Hello \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Walker\r\n \r\nSpeed SEO Digital Agency', '2022-01-15 21:13:34', NULL),
(69, 'NataNoled', 'woodthighgire1988@gmail.com', '1751', 'Hello Admin!', ' \r\nIf you Want Private Videos, Look this https://localchicks3.com/?u=41nkd08&o=8dhpkzk', '2022-01-16 11:34:54', NULL),
(70, 'Bib', '69gu67m8@gmail.com', '2553', 'I promised.', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/yajvf32m', '2022-01-16 18:42:54', NULL),
(71, 'Mike Douglas\r\n', 'no-replyHorelaTa@gmail.com', '9080', 'whitehat monthly SEO plans', 'Howdy \r\n \r\nI have just verified your SEO on  tourintown.com for the ranking keywords and saw that your website could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Douglas\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2022-01-22 20:57:15', NULL),
(72, 'Zhao Wenhe', 'zhaowenhe@yahoo.com', '3015', 'FINANCE EQUITY STRATEGY Business Investment & Agro Funding.', 'FINANCE EQUITY STRATEGY Business Investment & Agro Funding. \r\n \r\nDo you have any Business Investment or project that need to be funded \r\nbecause my investor is interested to investing with you. If you have a \r\ngood project that need to be funded, i  will be able to broker the \r\ndeal and secure funding for you either equity or debt financing \r\nContact me at: wenhezhao5@gmail.com for more information. \r\nRegards as I look forward to hearing from you urgently, \r\n \r\n \r\nZhao Wenhe \r\nLoan Consultant \r\n2007-2022 Finance Equity Strategy Management.', '2022-01-25 00:00:51', NULL),
(73, 'Mike Andrews\r\n', 'no-replyHorelaTa@gmail.com', '4311', 'Competitors not playing the SEO game fair?', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-02-02 04:23:58', NULL),
(74, 'Mike Benson\r\n', 'no-replyHorelaTa@gmail.com', '6421', 'Get more dofollow backlinks for tourintown.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Benson\r\n \r\nsupport@digital-x-press.com', '2022-02-04 00:16:05', NULL),
(75, 'Mike Longman\r\n', 'no-replyHorelaTa@gmail.com', '3522', 'Increase sales for tourintown.com', 'Greetings \r\n \r\nIf you\'ll ever need a permanent increase in your website\'s Domain Authority score, We can help. \r\n \r\nMore info: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\nNEW: Ahrefs DR70 plan: \r\nhttps://www.strictlydigital.net/product/ahrefs-seo-plan/ \r\n \r\n \r\nThank you \r\nMike Longman\r\n \r\nmike@strictlydigital.net', '2022-02-06 11:28:17', NULL),
(76, 'Mike Reynolds\r\n', 'no-replyHorelaTa@gmail.com', '2079', 'Local SEO for more business', 'Hello \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Reynolds\r\n \r\nSpeed SEO Digital Agency', '2022-02-12 21:07:58', NULL),
(77, 'Mike Lewis\r\n', 'no-replyHorelaTa@gmail.com', '8589', 'whitehat monthly SEO plans', 'Good Day \r\n \r\nI have just took a look on your SEO for  tourintown.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Lewis\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2022-02-16 20:45:02', NULL),
(78, 'Hennen Robert', 'hnnnrobert@gmail.com', '3110', 'Looking for you', 'Hello Dear, \r\n \r\nGreetings to you and I hope this email meet at your best, I am working directly with a private family portfolio that can provide funding for credible clients with feasible projects. Currently, we have investment funds for viable projects. \r\n \r\nThey are interested in the following: Institution, Library, Hospitals, Green energy, \r\nPower projects, Agriculture and Real Estate. They can also partner with your company on other projects of value. The interest rate and tenure are fantastic. \r\n \r\nYour response is most anticipated if this is of interest to you. \r\nReach me on email: contact@hennenrobert.xyz or \r\n \r\nKind regards, \r\n \r\nHennen Robert \r\nFinancial Consultant \r\nWhatsapp: +1 209 248 1965 \r\nEuroclear Groups \r\nPersonal: hnnnrobert@gmail.com \r\nUrl: http://euroclear.com', '2022-02-17 12:37:34', NULL),
(79, 'Mike MacDonald\r\n', 'no-replyHorelaTa@gmail.com', '3584', 'Get more dofollow backlinks for tourintown.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike MacDonald\r\n \r\nsupport@digital-x-press.com', '2022-02-23 05:57:43', NULL),
(80, 'Carlos P Sano', 'sanocarlos96@gmail.com', '5294', 'Open Your Business In The New MetaVerse!', 'Dear Business Owner \r\n \r\nBusiness is NOT as usual anymore. We live in a new world \r\neither we want to recognize it or not. \r\n \r\nMy name is Carlos and we’re building the largest community of MetaVerse entrepreneurs on the planet and we’d like to invite you to join us! We’re 1,200,000 million members right now and growing. \r\n \r\nWhat’s in it for you? \r\n \r\n- Open your business in a new MetaVerse launching in March \r\n \r\n- A MetaVerse/Crypto University that rewards you with crypto daily \r\n \r\n- Access to a Visa or Mastercard Crypto debit card you can use anywhere \r\n \r\n- Access to discounted projects and coins before they get to the public \r\n \r\n- And more… \r\n \r\nLet’s connect I’d like to invite you to one of our conversations to see if this is for you! \r\n \r\nHope to see you there! \r\n \r\nSincerely, \r\n \r\nCarlos \r\n \r\nDIRECT OR WHATSAPP: 91seven – 650 – 792five \r\n \r\nPlease don\'t email me. The phone is the best way to reach me.', '2022-02-26 22:20:15', NULL),
(81, 'Mike Kendal\r\n', 'no-replyHorelaTa@gmail.com', '1368', 'Competitors not playing the SEO game fair?', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-02-28 15:56:22', NULL),
(82, 'Diane Angelori', 'g.a.76.5.2.71.9@gmail.com', '6510', 'Crypto Trading', 'Hello \r\n \r\nI\'m Diane Angelori, online trading expert. I want you to know that online trading (Crypto, Forex and Binary option) is a good thing if you have a good trading strategy, I use to lose a lot of funds in online trading before I got to where I am today. If you need assistance on how to trade and recover back all the money you have lost to your broker and want to be a successful online trader like me, write to me via email below to get an amazing strategy. \r\n \r\nIf you are having problems withdrawing your profit from your Crypt, Forex or Binary option trading account even when you were given a bonus, just contact me, I have worked with some Trade, Regulatory Agencies for 9years, and I have helped a lot of people get back their lost funds from their stubborn brokers successfully and I won\'t stop until I have helped as many as possible. For more info you can contact me via my email address: angeloridiane40@gmail.com', '2022-03-01 07:49:01', NULL),
(83, 'Mike Mathews\r\n', 'no-replyHorelaTa@gmail.com', '211', 'NEW: Semrush Backlinks', 'Hi \r\n \r\nThis is Mike Mathews\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your tourintown.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Mathews\r\n \r\nmike@strictlydigital.net', '2022-03-04 00:26:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissues`
--

INSERT INTO `tblissues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(86, NULL, NULL, NULL, '2021-08-07 12:01:07', NULL, NULL),
(87, NULL, NULL, NULL, '2021-08-11 15:36:48', NULL, NULL),
(88, NULL, NULL, NULL, '2021-09-28 16:44:49', NULL, NULL),
(89, NULL, NULL, NULL, '2021-12-16 08:12:15', NULL, NULL),
(90, NULL, NULL, NULL, '2021-12-27 08:45:58', NULL, NULL),
(91, NULL, NULL, NULL, '2022-01-17 15:59:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <A href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</A>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>'),
(2, 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'aboutus', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Test test</span>'),
(11, 'contact', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address------Test</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Manali ', 'General', 'Kullu Manali India', 12345, 'Air Conditioning ,Balcony / Terrace,Cable / Satellite / Pay TV available,Ceiling Fan,Hairdryer', '\"Lorem ipsu', '14287acc-b5cb-46db-b8b4-e3ffe652fc0d.png', '2017-05-13 14:23:44', '2021-11-07 07:09:12'),
(2, 'Test ', 'Test', 'Delhi India', 5433, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 'demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test ', 'phpgurukul-1.png', '2017-05-13 15:24:26', '2017-05-13 17:51:57'),
(3, 'Demo Demo  Demo Demo test', 'Demo Demo Demo Demo Demo Demo  test', 'Demo Demo Demo Demo Demo Demo  test', 1000, 'Demo Demo  test', 'Sample Text for testing.', 'complaints.jpg', '2017-05-13 16:00:58', '2019-07-20 20:12:41'),
(4, 'Kerla', 'Familty and Couple', 'Kerlal', 2000, ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'WhatsApp-Image-2021-05-24-at-01.23.13-1.jpeg', '2017-05-13 22:39:37', '2021-07-31 10:22:10'),
(5, 'Coorg : Tour Packages', 'General', 'Coorg', 3000, ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', ' velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\" velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'coorg-hill-station1.jpg', '2017-05-13 22:42:10', '0000-00-00 00:00:00'),
(6, 'Indonesia', 'Family', 'Indonesia', 5000, 'Frree wifi, pickup and drop etc', 'Test Test Test Test Test Test Test T', 'mamp-pro-logo-big.png', '2017-05-14 08:01:08', '2021-07-28 10:28:16'),
(7, 'Manali ', 'sfd', 'Kullu Manali I', 10000, 'dsf', 'rtygrtrtrt', 'shank-removebg-preview.png', '2021-10-13 15:45:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `verification_id` bigint(20) NOT NULL,
  `verification_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`, `verification_id`, `verification_status`) VALUES
(63, 'Shubhanshu Nishad', '0945559329', 'shubhanshunishad24@gmail.com', '211ef5f9a14e7ce8a394b304926f9863', '2021-08-06 04:53:38', '2023-01-28 10:33:31', 461623723, 1),
(67, 'Shubhanshu Nishad', '9455593295', 'shubhanshunishad2221@gmail.com', '211ef5f9a14e7ce8a394b304926f9863', '2021-09-28 16:44:48', '2021-09-28 16:45:49', 144176883, 1),
(68, 'Shreya Gupta', '8630137466', 'shreya86301@gmail.com', '0e3cec8261f59ece65a187b050e97b73', '2021-12-16 08:12:15', '2021-12-16 08:12:50', 238198834, 1),
(69, 'Naresh Sangwan', '8433423228', 'nareshsangwan3770@gmail.com', '2b416e81a727078f3eb70640689a21fd', '2021-12-27 08:45:57', '2021-12-27 08:48:41', 803751024, 1),
(70, 'Mayank Rawat', '8449748082', 'mayankraw21@gmail.com', '7f0fc51b60604293bb48f2de3a245ef2', '2022-01-17 15:59:42', '2022-01-17 16:07:50', 682489779, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact_nivesharth`
--
ALTER TABLE `contact_nivesharth`
  ADD PRIMARY KEY (`id_na`),
  ADD UNIQUE KEY `id_na` (`id_na`);

--
-- Indexes for table `contact_shubhfoundation`
--
ALTER TABLE `contact_shubhfoundation`
  ADD PRIMARY KEY (`id_sf`),
  ADD UNIQUE KEY `id_sf` (`id_sf`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contact_nivesharth`
--
ALTER TABLE `contact_nivesharth`
  MODIFY `id_na` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_shubhfoundation`
--
ALTER TABLE `contact_shubhfoundation`
  MODIFY `id_sf` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
