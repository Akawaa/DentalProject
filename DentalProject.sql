-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 25 Janvier 2016 à 21:35
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `DentalProject`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id_appointment` int(11) NOT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_hour` time DEFAULT NULL,
  `appointment_emergency` int(1) DEFAULT NULL,
  `appointment_check` int(1) DEFAULT NULL,
  `id_patient` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id_appointment`, `appointment_date`, `appointment_hour`, `appointment_emergency`, `appointment_check`, `id_patient`) VALUES
(1, '2015-09-27', '15:00:00', 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id_article` int(11) NOT NULL,
  `article_title` varchar(50) DEFAULT NULL,
  `article_content` text,
  `article_date` date DEFAULT NULL,
  `id_staff` int(11) DEFAULT NULL,
  `id_tab` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_article`
--

INSERT INTO `tbl_article` (`id_article`, `article_title`, `article_content`, `article_date`, `id_staff`, `id_tab`) VALUES
(4, 'Welcome to the Pricing page', '<p>Here at South Sea Dental, we offer competitive prices throughout our dentistries. We also offer a range of payment methods :</p>\r\n<ul>\r\n<li>Monthly (Interest Free)</li>\r\n<li>Annually (Interest Free)</li>\r\n</ul>\r\n<p>For more informations call our friendly receptionist, they are here to help you.</p>', '2015-05-18', 1, 2),
(5, 'Pricing Table', '<p>We offer you several types of treatments.</p>\r\n<h4><strong>Classic</strong></h4>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td><strong>Treatment</strong></td>\r\n<td><strong>From (&pound;)</strong></td>\r\n</tr>\r\n<tr>\r\n<td>Check-up</td>\r\n<td>50</td>\r\n</tr>\r\n<tr>\r\n<td>Scaling</td>\r\n<td>70</td>\r\n</tr>\r\n<tr>\r\n<td>Teeth Withening</td>\r\n<td>150</td>\r\n</tr>\r\n<tr>\r\n<td>Extraction</td>\r\n<td>100</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2015-05-18', 1, 2),
(6, 'What facilities can we offer you ?', '<p>Our comprehensive service means that it is rare for us to need to refer patients outside the practice to meet their needs. This allows our patients to feel comfortable and at ease for their treatment, in familiar surroundings. We are aware that a visit to the dentist can be a cause for anxiety for many patients and we can limit this as much as possible by making patients feel at home.</p>\r\n<p><strong>Equipment &amp; Technology</strong></p>\r\n<p>If you haven''t already experienced the benefits of today''s best dentaltechnology, you''re in for a pleasant surprise. Imagine a dental office where you can have a filling done and never feel a needle or a drill. Imagine getting a perfectly crafted crown in a single appointment. And we do it with a reassuring combination of technology and integrity, of uncompromising precision and gentle compassion. We use a dazzling array of first-rate technologies for diagnosis and treatment designed to make your visits easier, quicker and possibly even fun.<br /><br />Efficiency. Precision. Comfort. These are the reasons we''ve outfitted our office with the finest dental equipment science has to offer. And you can be confident that, as new technologies emerge, we will be at the forefront of any developments that will help us provide the finest dental care for you and your family.</p>\r\n<p><strong>Experienced &amp; Qualified Team</strong></p>\r\n<p>Most members of our team have been with the practice for a number of years. Many of our nursing staff are trained by us and go on to achieve not only their dental nursing qualifications, but also post graduate certificates in areas such as radiology and dental health education. This allows for the development of a strong cohesive team. Modern healthcare models show that patient care is improved by having this type of team.</p>', '2015-05-18', 1, 4),
(7, 'Contact us', '<p><strong>&nbsp;To make an appointment</strong></p><p>Please, call our secretariat and speak to one of our secretary who will be happy to make you an appointment or answer any questions you may have.</p><p><strong>Emergency policies</strong></p><p>In case of emergency, please call the emergency number before 10:00am to be receive in the day.<br />Warning, the taking-over in emergency increases 10% VAT.</p>', '2015-05-18', 1, 6),
(8, 'What''s happening at South Sea Dental', '<p>Want to keep up to date with what is happening at South Sea Dental ? Look no further, we are proud to introduce our new news feature.</p>\r\n<p>This will be updated as soon as we have any news for you, this is our way of letting you know what it going on. Its always nice to know what is going on.</p>\r\n<p><strong>-Feedback</strong>: Want to share your thoughts ? Dont know where to give feedback ? Well now you can with our new feedback questionaire. Look out for these on your next visit or alternativly download a copy using the link below.</p>\r\n<p>You are now able to tell us your thoughts on the service you recieved at your last visit. Feel free to be as bruital or as nice as you like, they are all anonymous.</p>\r\n<p><strong>-New Equipment:</strong> If you haven''t already experienced the benefits of today''s best dentaltechnology, you''re in for a pleasant surprise. Imagine a dental office where you can have a filling done and never feel a needle or a drill.</p>\r\n<p>We are now offering our patience the most up to date equipment on offer to date to make the pleasure of coming to the dentist that little bit better.</p>\r\n<p><strong>-New Website</strong>: As the first bulletin on the new website, I am proud to announce thge release of the new South Sea Dental website. We hope you will enjoy the site, if you have any queries or feedback you would like to pass on, please email us on our information email address.</p>\r\n<p>Enjoy the new site !</p>', '2015-05-18', 1, 5),
(9, 'Gallery', '<p>Here, you can see the jobs done on our patients.</p>', '2015-05-21', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_gender`
--

CREATE TABLE `tbl_gender` (
  `id_gender` int(5) NOT NULL DEFAULT '0',
  `gender` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_gender`
--

INSERT INTO `tbl_gender` (`id_gender`, `gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_img_gallery`
--

CREATE TABLE `tbl_img_gallery` (
  `id_img` int(11) NOT NULL,
  `img_title` varchar(20) DEFAULT NULL,
  `img_gallery` varchar(20) DEFAULT NULL,
  `img_caption` varchar(50) DEFAULT NULL,
  `img_date` date DEFAULT NULL,
  `id_staff` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_information`
--

CREATE TABLE `tbl_information` (
  `id_info` int(11) NOT NULL,
  `info_address` varchar(100) DEFAULT NULL,
  `info_code` varchar(10) DEFAULT NULL,
  `info_city` varchar(50) DEFAULT NULL,
  `info_country` varchar(50) DEFAULT NULL,
  `info_email` varchar(50) DEFAULT NULL,
  `info_email_emergency` varchar(50) DEFAULT NULL,
  `info_phone` varchar(20) DEFAULT NULL,
  `info_phone_emergency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_information`
--

INSERT INTO `tbl_information` (`id_info`, `info_address`, `info_code`, `info_city`, `info_country`, `info_email`, `info_email_emergency`, `info_phone`, `info_phone_emergency`) VALUES
(1, '25 South Sea', 'PO4 1EJ', 'Portsmouth', 'United Kingdom', 'info@southseadental.co.uk', 'emergency@southseadental.co.uk', '02352435687', '02352435686');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id_invoice` int(11) NOT NULL,
  `invoice_date` date DEFAULT NULL,
  `invoice_amount` float DEFAULT NULL,
  `id_patient` int(11) NOT NULL,
  `id_staff` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id_invoice`, `invoice_date`, `invoice_amount`, `id_patient`, `id_staff`) VALUES
(1, '2016-01-25', 38, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_job_done`
--

CREATE TABLE `tbl_job_done` (
  `id_job_done` int(11) NOT NULL,
  `job_complete` int(1) DEFAULT NULL,
  `job_price_incl_tax` float DEFAULT NULL,
  `job_info` varchar(100) DEFAULT NULL,
  `job_vat` float DEFAULT NULL,
  `id_treatment` int(11) NOT NULL,
  `id_invoice` int(11) DEFAULT NULL,
  `id_tooth` int(11) NOT NULL,
  `id_appointment` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_job_done`
--

INSERT INTO `tbl_job_done` (`id_job_done`, `job_complete`, `job_price_incl_tax`, `job_info`, `job_vat`, `id_treatment`, `id_invoice`, `id_tooth`, `id_appointment`) VALUES
(1, 1, 38, 'bvhvn', 20, 15, 1, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_opening_times`
--

CREATE TABLE `tbl_opening_times` (
  `id_day` int(11) NOT NULL,
  `day` varchar(15) DEFAULT NULL,
  `beginning_day` time DEFAULT NULL,
  `beginning` enum('am','pm') DEFAULT NULL,
  `end_day` time DEFAULT NULL,
  `end` enum('am','pm') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_opening_times`
--

INSERT INTO `tbl_opening_times` (`id_day`, `day`, `beginning_day`, `beginning`, `end_day`, `end`) VALUES
(1, 'Monday', '08:30:00', 'am', '05:30:00', 'pm'),
(2, 'Tuesday', '08:30:00', 'am', '05:30:00', 'pm'),
(3, 'Wednesday', '08:30:00', 'am', '05:30:00', 'pm'),
(4, 'Thursday', '08:30:00', 'am', '05:30:00', 'pm'),
(5, 'Friday', '08:30:00', 'am', '05:30:00', 'pm'),
(6, 'Saturday', NULL, 'am', NULL, 'pm'),
(7, 'Sunday', NULL, 'am', NULL, 'pm');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `id_patient` int(11) NOT NULL,
  `patient_name` varchar(50) DEFAULT NULL,
  `patient_surname` varchar(50) DEFAULT NULL,
  `patient_DofB` date DEFAULT NULL,
  `patient_address` varchar(150) DEFAULT NULL,
  `patient_code` varchar(10) DEFAULT NULL,
  `patient_city` varchar(50) DEFAULT NULL,
  `patient_country` varchar(50) DEFAULT NULL,
  `patient_phone` varchar(20) DEFAULT NULL,
  `patient_email` varchar(50) DEFAULT NULL,
  `patient_login` varchar(50) DEFAULT NULL,
  `patient_password` varchar(255) DEFAULT NULL,
  `patient_allergies` varchar(150) DEFAULT NULL,
  `old_patient` int(1) DEFAULT NULL,
  `patient_date_leave` date DEFAULT NULL,
  `patient_reason` varchar(20) DEFAULT NULL,
  `id_gender` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_patient`
--

INSERT INTO `tbl_patient` (`id_patient`, `patient_name`, `patient_surname`, `patient_DofB`, `patient_address`, `patient_code`, `patient_city`, `patient_country`, `patient_phone`, `patient_email`, `patient_login`, `patient_password`, `patient_allergies`, `old_patient`, `patient_date_leave`, `patient_reason`, `id_gender`) VALUES
(1, 'Caly', 'Berenice', '1993-03-05', '33 St Andrews Road', 'PO5 1EP', 'Portsmouth', 'United Kingdom', '0688354516', 'bcaly@gmail.com', 'bclay35', 'bcaly35', 'Milk', 0, NULL, NULL, 2),
(2, 'Gauthier', 'Raphael', '1994-11-24', '33 St Andrews Road', 'PO5 1EP', 'Portsmouth', 'United Kingdom', '0688354517', 'rgauth@gmail.com', 'rgauth93', 'rgauth93', NULL, 0, NULL, NULL, 1),
(3, 'Peslier', 'Yohan', '1994-11-16', '33 St Andrews Road', 'PO5 1EP', 'Portsmouth', 'United Kingdom', '0688354519', 'yop@gmail.com', 'ypeslie24', 'ypeslie24', NULL, 0, NULL, NULL, 1),
(4, 'Ravier', 'Clement', '1995-06-28', '15 Border Road', 'PO5 6EP', 'Portsmouth', 'United Kingdom', '0688354520', 'clem.rav@gmail.com', 'cravier92', 'cravier92', NULL, 0, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_post_staff`
--

CREATE TABLE `tbl_post_staff` (
  `id_post` int(11) NOT NULL,
  `post_name` varchar(20) DEFAULT NULL,
  `post_right` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_post_staff`
--

INSERT INTO `tbl_post_staff` (`id_post`, `post_name`, `post_right`) VALUES
(1, 'Doctor', 1),
(2, 'Nurse', 2),
(3, 'Secretaty', 3),
(4, 'Dentist intern', 4),
(5, 'Nurse intern', 4),
(6, 'Secretary intern', 4);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_radio`
--

CREATE TABLE `tbl_radio` (
  `id_radio` int(11) NOT NULL,
  `radio_name` varchar(50) DEFAULT NULL,
  `radio_img` varchar(255) DEFAULT NULL,
  `radio_caption` varchar(150) DEFAULT NULL,
  `id_patient` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_radio`
--

INSERT INTO `tbl_radio` (`id_radio`, `radio_name`, `radio_img`, `radio_caption`, `id_patient`) VALUES
(1, 'n,bfv', '02.jpg', 'dsf', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id_staff` int(11) NOT NULL,
  `staff_name` varchar(50) DEFAULT NULL,
  `staff_surname` varchar(50) DEFAULT NULL,
  `staff_phone` varchar(20) DEFAULT NULL,
  `staff_email` varchar(50) DEFAULT NULL,
  `staff_login` varchar(50) DEFAULT NULL,
  `staff_password` varchar(50) DEFAULT NULL,
  `staff_fire` int(1) DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id_staff`, `staff_name`, `staff_surname`, `staff_phone`, `staff_email`, `staff_login`, `staff_password`, `staff_fire`, `id_post`) VALUES
(1, 'Brahimi', 'Hakim', '02352435688', 'hakim.brahimi@southseadental.co.uk', 'hakim', 'hakim', 0, 1),
(2, 'Grantham', 'Isabelle', '02352435689', 'isabelle.grantham@southseadental.co.uk', 'isabelle', 'isabelle', 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_survey`
--

CREATE TABLE `tbl_survey` (
  `id_survey` int(11) NOT NULL,
  `survey_answer1` varchar(50) DEFAULT NULL,
  `survey_answer2` varchar(50) DEFAULT NULL,
  `survey_answer3` varchar(50) DEFAULT NULL,
  `survey_answer4` varchar(50) DEFAULT NULL,
  `survey_answer5` varchar(50) DEFAULT NULL,
  `survey_answer6` varchar(50) DEFAULT NULL,
  `survey_answer7` varchar(50) DEFAULT NULL,
  `survey_answer8` varchar(50) DEFAULT NULL,
  `survey_answer9` varchar(50) DEFAULT NULL,
  `survey_answer10` varchar(50) DEFAULT NULL,
  `id_patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_tab`
--

CREATE TABLE `tbl_tab` (
  `id_tab` int(11) NOT NULL,
  `tab_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_tab`
--

INSERT INTO `tbl_tab` (`id_tab`, `tab_name`) VALUES
(1, 'Home'),
(2, 'Pricing'),
(3, 'Gallery'),
(4, 'Failities'),
(5, 'News'),
(6, 'Contact');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_tooth`
--

CREATE TABLE `tbl_tooth` (
  `id_tooth` int(11) NOT NULL,
  `tooth_name` varchar(50) DEFAULT NULL,
  `tooth_area` varchar(50) DEFAULT NULL,
  `tooth_coordinates` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_tooth`
--

INSERT INTO `tbl_tooth` (`id_tooth`, `tooth_name`, `tooth_area`, `tooth_coordinates`) VALUES
(1, 'Third Molar - Right', 'Upper', '35,144,41,140,66,141,67,147,63,152,67,158,62,163,58,164,46,165,40,158,35,152'),
(2, 'Second Molar - Right', 'Upper', '66,120,69,129,69,135,63,140,41,141,37,137,36,133,38,127,40,122,42,117'),
(3, 'First Molar - Right', 'Upper', '42,106,44,99,49,97,52,94,55,94,71,98,73,99,74,102,73,108,70,115,65,119,53,120,45,117,44,115'),
(4, 'Second Premolar - Right', 'Upper', '58,77,66,73,80,81,82,81,83,90,78,94,72,99,62,95,57,95,52,92,52,89'),
(5, 'First Premolar - Right', 'Upper', '73,56,83,56,91,62,94,64,94,69,90,74,85,78,81,78,66,75,65,67,65,66'),
(6, 'Canine - Right', 'Upper', '88,39,98,43,102,46,106,52,106,59,101,59,93,60,88,59,82,54,79,51,83,51,83,44,91,39'),
(7, 'Lateral Incisor - Right', 'Upper', '112,25,120,29,123,44,122,47,117,49,112,48,105,44,97,41,99,35,105,30,118,28'),
(8, 'Central Incisor - Right', 'Upper', '121,23,133,21,140,21,148,21,150,27,149,31,148,38,142,44,132,40,127,35,123,32,121,26'),
(9, 'Central Incisor - Left', 'Upper', '152,19,164,20,172,20,174,21,177,22,180,24,183,28,168,43,160,44,155,35,153,32,149,26'),
(10, 'Lateral Incisor - Left', 'Upper', '180,44,182,26,192,28,198,31,204,35,208,38,209,39,204,44,187,50,182,48,180,45'),
(11, 'Canine - Left', 'Upper', '223,56,214,59,207,62,201,62,196,58,198,53,198,49,202,45,212,43,219,46,222,46,223,49,220,57'),
(12, 'First Premolar - Left', 'Upper', '224,57,229,60,232,63,235,66,236,75,225,79,214,80,207,75,204,70,201,66,209,63'),
(13, 'Second Premolar - Left', 'Upper', '237,72,245,80,247,84,249,87,251,91,250,96,243,96,231,100,226,99,222,94,219,87,221,81'),
(14, 'First Molar - Left', 'Upper', '252,94,258,98,260,107,259,116,251,118,235,119,230,114,228,108,228,102'),
(15, 'Second Molar - Left', 'Upper', '237,141,240,142,249,144,254,143,259,142,264,139,264,133,266,124,263,121,258,118,234,120,234,136'),
(16, 'Third Molar - Left', 'Upper', '232,160,232,150,236,144,264,145,265,154,256,166,249,167,233,163'),
(17, 'Third Molar - Left', 'Lower', '243,175,254,176,261,190,263,197,260,200,258,203,241,201,236,196,235,190,236,181'),
(18, 'Second Molar - Left', 'Lower', '243,200,256,201,262,204,265,212,261,220,257,226,246,225,238,222,237,221,236,212'),
(19, 'First Molar - Left', 'Lower', '242,223,259,228,261,236,254,247,249,251,230,245,235,231'),
(20, 'Second Premolar - Left', 'Lower', '230,245,245,251,247,256,240,269,236,272,229,273,223,273,218,266,216,263'),
(21, 'First Premolar - Left', 'Lower', '216,267,225,274,228,282,218,290,210,294,206,292,199,285,201,279,213,272'),
(22, 'Canine - Left', 'Lower', '197,286,204,291,206,292,210,294,209,302,205,303,196,306,190,306,187,301,187,293,194,290'),
(23, 'Lateral Incisor - Left', 'Lower', '178,293,191,305,192,308,187,312,178,313,173,313,173,313'),
(24, 'Central Incisor - Left', 'Lower', '161,299,169,306,172,309,172,312,170,313,165,316,160,316,153,315,153,314'),
(25, 'Central Incisor - Right', 'Lower', '143,300,151,306,150,309,151,311,152,314,143,318,136,316,133,314,131,313'),
(26, 'Lateral Incisor - Right', 'Lower', '125,293,127,298,131,299,130,309,129,314,123,314,116,311,111,307,116,302,128,296'),
(27, 'Canine - Right', 'Lower', '105,288,113,290,114,293,117,298,116,300,111,305,102,305,97,304,96,301,96,298,99,294,99,294'),
(28, 'First Premolar - Right', 'Lower', '91,269,95,272,101,276,104,284,104,290,98,292,93,295,88,293,83,290,78,284,78,279,79,275,92,269'),
(29, 'Second Premolar - Right', 'Lower', '80,250,85,259,88,266,86,270,83,274,78,276,69,276,65,270,60,263,57,257,63,253'),
(30, 'First Molar - Right', 'Lower', '71,229,75,239,75,246,72,250,57,254,54,253,52,249,48,243,46,232,50,229'),
(31, 'Second Molar - Right', 'Lower', '43,204,53,202,65,205,69,213,67,217,66,226,62,228,47,230,43,225,39,212'),
(32, 'Third Molar - Right', 'Lower', '47,177,60,178,66,181,69,186,68,195,64,201,62,204,54,202,45,204,42,199,39,196'),
(33, 'Jaw', 'Upper', '90,166,96,150,110,131,120,122,137,114,154,113,168,115,182,122,196,133,206,144,212,157,214,164,230,160,234,148,238,141,234,133,234,126,234,121,228,104,229,101,221,95,218,89,218,81,211,77,206,70,206,64,198,59,195,55,196,47,182,50,181,46,180,33,172,40,163,40'),
(34, 'Jaw', 'Lower', '215,178,211,194,208,205,201,213,190,227,174,235,155,238,136,236,119,228,105,215,96,198,92,182,68,182,69,199,62,203,68,208,68,220,65,228,74,235,77,244,74,249,81,255,86,259,87,266,86,270,99,274,104,283,105,288,116,292,115,301,124,298,129,299,131,310,141,302');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_treatment`
--

CREATE TABLE `tbl_treatment` (
  `id_treatment` int(11) NOT NULL,
  `treatment_name` varchar(50) DEFAULT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_treatment`
--

INSERT INTO `tbl_treatment` (`id_treatment`, `treatment_name`, `id_type`) VALUES
(1, 'Check-up', 1),
(2, 'Scaling', 1),
(3, 'Cast Gold', 2),
(4, 'Amalgam', 2),
(5, 'Composite Resin', 2),
(6, 'Ceramic', 2),
(7, 'Gold Foil', 2),
(8, 'Glass Ionomer', 2),
(9, 'All-metam', 3),
(10, 'All-ceramic', 3),
(11, 'Porcelain-fused-to-metal', 3),
(12, 'Traditional', 4),
(13, 'Ceramic', 4),
(14, 'Lingual Brace', 4),
(15, 'Invisalign', 4),
(16, 'Extraction', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_type_treatment`
--

CREATE TABLE `tbl_type_treatment` (
  `id_type` int(11) NOT NULL,
  `type_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_type_treatment`
--

INSERT INTO `tbl_type_treatment` (`id_type`, `type_name`) VALUES
(1, 'Classic'),
(2, 'Filling'),
(3, 'Crown'),
(4, 'Brace');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_vat`
--

CREATE TABLE `tbl_vat` (
  `id_vat` int(11) NOT NULL,
  `rate` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_vat`
--

INSERT INTO `tbl_vat` (`id_vat`, `rate`) VALUES
(1, 20);

-- --------------------------------------------------------

--
-- Structure de la table `tooth_file`
--

CREATE TABLE `tooth_file` (
  `id_tooth` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `tooth_extracted` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tooth_file`
--

INSERT INTO `tooth_file` (`id_tooth`, `id_patient`, `tooth_extracted`) VALUES
(1, 1, 0),
(1, 2, 0),
(1, 3, 0),
(1, 4, 0),
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(3, 1, 0),
(3, 2, 0),
(3, 3, 0),
(3, 4, 0),
(4, 1, 0),
(4, 2, 0),
(4, 3, 0),
(4, 4, 0),
(5, 1, 0),
(5, 2, 0),
(5, 3, 0),
(5, 4, 0),
(6, 1, 0),
(6, 2, 0),
(6, 3, 0),
(6, 4, 0),
(7, 1, 0),
(7, 2, 0),
(7, 3, 0),
(7, 4, 0),
(8, 1, 0),
(8, 2, 0),
(8, 3, 0),
(8, 4, 0),
(9, 1, 0),
(9, 2, 0),
(9, 3, 0),
(9, 4, 0),
(10, 1, 0),
(10, 2, 0),
(10, 3, 0),
(10, 4, 0),
(11, 1, 0),
(11, 2, 0),
(11, 3, 0),
(11, 4, 0),
(12, 1, 0),
(12, 2, 0),
(12, 3, 0),
(12, 4, 0),
(13, 1, 0),
(13, 2, 0),
(13, 3, 0),
(13, 4, 0),
(14, 1, 0),
(14, 2, 0),
(14, 3, 0),
(14, 4, 0),
(15, 1, 0),
(15, 2, 0),
(15, 3, 0),
(15, 4, 0),
(16, 1, 0),
(16, 2, 0),
(16, 3, 0),
(16, 4, 0),
(17, 1, 0),
(17, 2, 0),
(17, 3, 0),
(17, 4, 0),
(18, 1, 0),
(18, 2, 0),
(18, 3, 0),
(18, 4, 0),
(19, 1, 0),
(19, 2, 0),
(19, 3, 0),
(19, 4, 0),
(20, 1, 0),
(20, 2, 0),
(20, 3, 0),
(20, 4, 0),
(21, 1, 0),
(21, 2, 0),
(21, 3, 0),
(21, 4, 0),
(22, 1, 0),
(22, 2, 0),
(22, 3, 0),
(22, 4, 0),
(23, 1, 0),
(23, 2, 0),
(23, 3, 0),
(23, 4, 0),
(24, 1, 0),
(24, 2, 0),
(24, 3, 0),
(24, 4, 0),
(25, 1, 0),
(25, 2, 0),
(25, 3, 0),
(25, 4, 0),
(26, 1, 0),
(26, 2, 0),
(26, 3, 0),
(26, 4, 0),
(27, 1, 0),
(27, 2, 0),
(27, 3, 0),
(27, 4, 0),
(28, 1, 0),
(28, 2, 0),
(28, 3, 0),
(28, 4, 0),
(29, 1, 0),
(29, 2, 0),
(29, 3, 0),
(29, 4, 0),
(30, 1, 0),
(30, 2, 0),
(30, 3, 0),
(30, 4, 0),
(31, 1, 0),
(31, 2, 0),
(31, 3, 0),
(31, 4, 0),
(32, 1, 0),
(32, 2, 0),
(32, 3, 0),
(32, 4, 0),
(33, 1, 0),
(33, 2, 0),
(33, 3, 0),
(33, 4, 0),
(34, 1, 0),
(34, 2, 0),
(34, 3, 0),
(34, 4, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`id_appointment`),
  ADD KEY `FK_tbl_appointment_id_patient` (`id_patient`);

--
-- Index pour la table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `FK_tbl_article_id_tab` (`id_tab`),
  ADD KEY `FK_tbl_article_id_staff` (`id_staff`);

--
-- Index pour la table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Index pour la table `tbl_img_gallery`
--
ALTER TABLE `tbl_img_gallery`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `FK_tbl_img_gallery_id_staff` (`id_staff`);

--
-- Index pour la table `tbl_information`
--
ALTER TABLE `tbl_information`
  ADD PRIMARY KEY (`id_info`);

--
-- Index pour la table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `FK_tbl_invoice_id_patient` (`id_patient`),
  ADD KEY `FK_tbl_invoice_id_staff` (`id_staff`);

--
-- Index pour la table `tbl_job_done`
--
ALTER TABLE `tbl_job_done`
  ADD PRIMARY KEY (`id_job_done`),
  ADD KEY `FK_tbl_job_done_id_treatment` (`id_treatment`),
  ADD KEY `FK_tbl_job_done_id_invoice` (`id_invoice`),
  ADD KEY `FK_tbl_job_done_id_tooth` (`id_tooth`),
  ADD KEY `FK_tbl_job_done_id_appointment` (`id_appointment`);

--
-- Index pour la table `tbl_opening_times`
--
ALTER TABLE `tbl_opening_times`
  ADD PRIMARY KEY (`id_day`);

--
-- Index pour la table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`id_patient`),
  ADD KEY `FK_tbl_patient_id_gender` (`id_gender`);

--
-- Index pour la table `tbl_post_staff`
--
ALTER TABLE `tbl_post_staff`
  ADD PRIMARY KEY (`id_post`);

--
-- Index pour la table `tbl_radio`
--
ALTER TABLE `tbl_radio`
  ADD PRIMARY KEY (`id_radio`),
  ADD KEY `FK_tbl_radio_id_patient` (`id_patient`);

--
-- Index pour la table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD KEY `FK_tbl_staff_id_post` (`id_post`);

--
-- Index pour la table `tbl_survey`
--
ALTER TABLE `tbl_survey`
  ADD PRIMARY KEY (`id_survey`),
  ADD KEY `FK_tbl_survey_id_patient` (`id_patient`);

--
-- Index pour la table `tbl_tab`
--
ALTER TABLE `tbl_tab`
  ADD PRIMARY KEY (`id_tab`);

--
-- Index pour la table `tbl_tooth`
--
ALTER TABLE `tbl_tooth`
  ADD PRIMARY KEY (`id_tooth`);

--
-- Index pour la table `tbl_treatment`
--
ALTER TABLE `tbl_treatment`
  ADD PRIMARY KEY (`id_treatment`),
  ADD KEY `FK_tbl_treatment_id_type` (`id_type`);

--
-- Index pour la table `tbl_type_treatment`
--
ALTER TABLE `tbl_type_treatment`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `tbl_vat`
--
ALTER TABLE `tbl_vat`
  ADD PRIMARY KEY (`id_vat`);

--
-- Index pour la table `tooth_file`
--
ALTER TABLE `tooth_file`
  ADD PRIMARY KEY (`id_tooth`,`id_patient`),
  ADD KEY `FK_tooth_file_id_patient` (`id_patient`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id_appointment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `tbl_img_gallery`
--
ALTER TABLE `tbl_img_gallery`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tbl_information`
--
ALTER TABLE `tbl_information`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tbl_job_done`
--
ALTER TABLE `tbl_job_done`
  MODIFY `id_job_done` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tbl_opening_times`
--
ALTER TABLE `tbl_opening_times`
  MODIFY `id_day` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tbl_post_staff`
--
ALTER TABLE `tbl_post_staff`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `tbl_radio`
--
ALTER TABLE `tbl_radio`
  MODIFY `id_radio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tbl_survey`
--
ALTER TABLE `tbl_survey`
  MODIFY `id_survey` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tbl_tab`
--
ALTER TABLE `tbl_tab`
  MODIFY `id_tab` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `tbl_tooth`
--
ALTER TABLE `tbl_tooth`
  MODIFY `id_tooth` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `tbl_treatment`
--
ALTER TABLE `tbl_treatment`
  MODIFY `id_treatment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `tbl_type_treatment`
--
ALTER TABLE `tbl_type_treatment`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tbl_vat`
--
ALTER TABLE `tbl_vat`
  MODIFY `id_vat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tooth_file`
--
ALTER TABLE `tooth_file`
  MODIFY `id_tooth` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD CONSTRAINT `FK_tbl_appointment_id_patient` FOREIGN KEY (`id_patient`) REFERENCES `tbl_patient` (`id_patient`);

--
-- Contraintes pour la table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD CONSTRAINT `FK_tbl_article_id_staff` FOREIGN KEY (`id_staff`) REFERENCES `tbl_staff` (`id_staff`),
  ADD CONSTRAINT `FK_tbl_article_id_tab` FOREIGN KEY (`id_tab`) REFERENCES `tbl_tab` (`id_tab`);

--
-- Contraintes pour la table `tbl_img_gallery`
--
ALTER TABLE `tbl_img_gallery`
  ADD CONSTRAINT `FK_tbl_img_gallery_id_staff` FOREIGN KEY (`id_staff`) REFERENCES `tbl_staff` (`id_staff`);

--
-- Contraintes pour la table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD CONSTRAINT `FK_tbl_invoice_id_patient` FOREIGN KEY (`id_patient`) REFERENCES `tbl_patient` (`id_patient`),
  ADD CONSTRAINT `FK_tbl_invoice_id_staff` FOREIGN KEY (`id_staff`) REFERENCES `tbl_staff` (`id_staff`);

--
-- Contraintes pour la table `tbl_job_done`
--
ALTER TABLE `tbl_job_done`
  ADD CONSTRAINT `FK_tbl_job_done_id_appointment` FOREIGN KEY (`id_appointment`) REFERENCES `tbl_appointment` (`id_appointment`),
  ADD CONSTRAINT `FK_tbl_job_done_id_invoice` FOREIGN KEY (`id_invoice`) REFERENCES `tbl_invoice` (`id_invoice`),
  ADD CONSTRAINT `FK_tbl_job_done_id_tooth` FOREIGN KEY (`id_tooth`) REFERENCES `tbl_tooth` (`id_tooth`),
  ADD CONSTRAINT `FK_tbl_job_done_id_treatment` FOREIGN KEY (`id_treatment`) REFERENCES `tbl_treatment` (`id_treatment`);

--
-- Contraintes pour la table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD CONSTRAINT `FK_tbl_patient_id_gender` FOREIGN KEY (`id_gender`) REFERENCES `tbl_gender` (`id_gender`);

--
-- Contraintes pour la table `tbl_radio`
--
ALTER TABLE `tbl_radio`
  ADD CONSTRAINT `FK_tbl_radio_id_patient` FOREIGN KEY (`id_patient`) REFERENCES `tbl_patient` (`id_patient`);

--
-- Contraintes pour la table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD CONSTRAINT `FK_tbl_staff_id_post` FOREIGN KEY (`id_post`) REFERENCES `tbl_post_staff` (`id_post`);

--
-- Contraintes pour la table `tbl_survey`
--
ALTER TABLE `tbl_survey`
  ADD CONSTRAINT `FK_tbl_survey_id_patient` FOREIGN KEY (`id_patient`) REFERENCES `tbl_patient` (`id_patient`);

--
-- Contraintes pour la table `tbl_treatment`
--
ALTER TABLE `tbl_treatment`
  ADD CONSTRAINT `FK_tbl_treatment_id_type` FOREIGN KEY (`id_type`) REFERENCES `tbl_type_treatment` (`id_type`);

--
-- Contraintes pour la table `tooth_file`
--
ALTER TABLE `tooth_file`
  ADD CONSTRAINT `FK_tooth_file_id_patient` FOREIGN KEY (`id_patient`) REFERENCES `tbl_patient` (`id_patient`),
  ADD CONSTRAINT `FK_tooth_file_id_tooth` FOREIGN KEY (`id_tooth`) REFERENCES `tbl_tooth` (`id_tooth`);
