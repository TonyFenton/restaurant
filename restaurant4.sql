-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `description`;
CREATE TABLE `description` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6DE44026C4663E4` (`page_id`),
  CONSTRAINT `FK_6DE44026C4663E4` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `description` (`id`, `page_id`, `description`) VALUES
(14,	28,	'menu a czemu nie'),
(33,	47,	'Obiad'),
(37,	53,	'Zobacz gdzie nas się mieścimy');

DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `footer` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `footer` (`id`, `name`, `footer`) VALUES
(3,	'strony',	'<p>Nulla facilisi. Aenean auctor egestas risus non consequat. In ligula quam, faucibus at lorem vel, egestas iaculis arcu. Nulla gravida rhoncus aliquet. Fusce sem odio, scelerisque sed velit ultrices, fermentum ultricies ante.</p>'),
(4,	'główna',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque lacus a gravida volutpat. Duis vel velit in nulla cursus faucibus. Praesent eget aliquam mauris. Aenean sodales luctus turpis at pretium.</p>');

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(2,	'krzysztof',	'krzysztof',	'krzysztof@example.com',	'krzysztof@example.com',	1,	'8tlpmaj80f8kkokk88k8ows0gksk084',	'$2y$13$8tlpmaj80f8kkokk88k8ourbRV.1oUBYs8EUs66/FxS31fFCgEMfC',	'2016-08-29 16:12:27',	0,	0,	NULL,	NULL,	NULL,	'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}',	0,	NULL),
(5,	'user',	'user',	'user@example.com',	'user@example.com',	0,	'4cn8bzms8igw8gkcswoc8gws8ck0s0s',	'$2y$13$4cn8bzms8igw8gkcswoc8erVlffVgjD66nMAbR8dfMQFqI.eFDCHW',	NULL,	0,	0,	NULL,	NULL,	NULL,	'a:0:{}',	0,	NULL),
(8,	'user2',	'user2',	'user2@example.com',	'user2@example.com',	1,	'8ps9onttia4oso4ckwks4csogg0ww4g',	'$2y$13$8ps9onttia4oso4ckwks4OGapgm7N/osPpa5ujw5Xmfw4XlP.pds.',	NULL,	0,	0,	NULL,	NULL,	NULL,	'a:0:{}',	0,	NULL),
(9,	'user3',	'user3',	'user3@example.com',	'user3@example.com',	0,	'rg9oowccp0ggowskggwsco4coss8skw',	'$2y$13$rg9oowccp0ggowskggwsce5QHH4JZDel2idDwrQzglbzeD.k9vE86',	NULL,	0,	0,	NULL,	NULL,	NULL,	'a:0:{}',	0,	NULL),
(10,	'user4',	'user4',	'user4@example.com',	'user4@example.com',	1,	's18649e5ia8c480w4wokowcgccoo84w',	'$2y$13$s18649e5ia8c480w4wokoumPmUdp3xlEI8POmEyOOsa1vhkn5wW5e',	NULL,	0,	0,	NULL,	NULL,	NULL,	'a:0:{}',	0,	NULL),
(12,	'kuba',	'kuba',	'kuba@example.com',	'kuba@example.com',	1,	'5mdhgnd5k4wsg8008o4gc440go0goc8',	'$2y$13$5mdhgnd5k4wsg8008o4gculeQF/GQ2Wsq38PJXYBVpfNWT0StOYhK',	'2016-08-29 16:13:09',	0,	0,	NULL,	NULL,	NULL,	'a:0:{}',	0,	NULL);

DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `footer_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sequence` int(11) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_140AB6202412A144` (`footer_id`),
  KEY `IDX_140AB620727ACA70` (`parent_id`),
  CONSTRAINT `FK_140AB6202412A144` FOREIGN KEY (`footer_id`) REFERENCES `footer` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_140AB620727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `page` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `page` (`id`, `footer_id`, `parent_id`, `slug`, `name`, `title`, `picture`, `sequence`, `content`) VALUES
(1,	3,	NULL,	'homepage',	'Strona główna',	'start',	'p1.jpg',	1,	'<div class=\"row\">\r\n<div class=\"col-xs-12\">\r\n<p>Mauris suscipit justo non varius v<em> velit arcu, vestibulum nec semp </em>ehicula. Etiam velit arcu, vestibulum nec semper vitae, porta ac nibh. Donec egestas pulvinar tempus. Quisque semper est non orci molestie, sed ullamcorper metus viverra. Etiam a euismod libero. Praesent al<strong>iquet consectetur quam at acc</strong>umsan. Curabitur est orci, scelerisque ut sollicitudin et, porta non nibh. Duis et tortor diam. Duis accumsan lorem eu accumsan sollicitudin.</p>\r\n<p>uis posuere scelerisque condimentum. Ut eu eros quam. Nullam sodales justo vitae<strong> est dapibu</strong>s vehicula. Aliquam quis rhoncus ligula, efficitur congue nunc. Nam vestibulum tortor at varius consectetur. Nunc vestibulum, leo vitae pretium vehicul</p>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-xs-12 col-sm-6\">\r\n<h2><a href=\"../../../../menu/obiad\">Nasze obiady</a></h2>\r\n<img class=\"img-responsive\" style=\"margin-bottom: 10px;\" src=\"images/p2.jpg\" alt=\"\" />\r\n<p>Morbi et tellus ut dolor sollicitudin mollis. Nunc ac tellus iaculis, interdum dolor vitae, faucibus nibh. Sed ultrices metus ac diam feugiat, ac mollis justo pretium. Curabitur purus dui, ullamcorper in risus sit amet, imperdiet faucibus est. Nullam congue, nisi id rhoncus viverra, turpis eros commodo mauris, in pulvinar lorem nibh</p>\r\n</div>\r\n<div class=\"col-xs-12 col-sm-6\">\r\n<h2><a href=\"../../../../menu/kolacja\">Nasze kolacje</a></h2>\r\n<img class=\"img-responsive\" style=\"margin-bottom: 10px;\" src=\"images/p4.jpg\" alt=\"\" />\r\n<p>Morbi et tellus ut dolor sollicitudin mollis. Nunc ac tellus iaculis, interdum dolor vitae, faucibus nibh. Sed ultrices metus ac diam feugiat, ac mollis justo pretium. Curabitur purus dui, ullamcorper in risus sit amet, imperdiet faucibus est. Nullam congue, nisi id rhoncus viverra, turpis eros commodo mauris, in pulvinar lorem nibh</p>\r\n</div>\r\n</div>'),
(28,	3,	NULL,	'menu',	'Menu',	'Nasze menu',	'p2.jpg',	98,	'<p>nsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases. Justified navbar nav links are currently not supported. Overflowing content Since Boots<strong>trap doesn\'t know how</strong> much space the content in your navba</p>\r\n<p>r needs, you might run into issues with content wrapping into a second row. To resolve this, you can: Reduce the amunt or width of navbar items. Hide certain navbar items at certai<strong>n scre</strong>en sizes using responsive utility classes. Change th<em>e point at whic</em>h your navbar switches between collapsed and horizontal mode. Customize the @grid-float-breakpoint variable or add your own media query.</p>'),
(47,	3,	28,	'obiad',	'Obiad',	'Obiaddffekd',	'p2.jpg',	99,	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante tristique, rhoncus purus eget, bibendum sem. Donec eu arcu velit. Vestibulum pellentesque, nisl ut ullamcorper elementum, nulla sapien pellentesque tellus, sed sodales elit nisl ac nulla. Sed sagittis eget libero et convallis. Etiam s<strong>uscip</strong>it ante aliquet, dictum enim non, sagittis tortor. Curabitur maximus vitae augue ut vestibulum. Nullam sit amet malesuada risus. Quisque ut leo auctor, viverra sem non, semper massa. Proin non dictum li<strong>gula, sit amet ornare est. Vivamus venenatis dolor eu sem venenatis condimentum. Aliquam placerat tempor fermentum. Phasellus justo enim, ele</strong>ifend at nibh at, blandit fermentum tellus. Mauris a lectus id elit rutrum porta in id neque.</p>\r\n<p>Mauris suscipit justo non varius vehicula. Etiam velit arcu, vestibulum nec semper vitae, porta ac nibh. Donec egestas pulvinar tempus. Quisque sempe<strong>r est non or</strong>ci molestie, sed ullamcorper metus viverra. Etiam a euismod libero. Praesent aliquet consectetur quam at accumsan. Curabitur est orci, scelerisque ut sollicitudin et, porta non nibh. Duis et tortor diam. Duis accumsan lorem eu accumsan sollicitudin.</p>'),
(50,	3,	28,	'kolacja',	'Kolacja',	'Kolacja',	'p4.jpg',	99,	'<p>Duis posuere scelerisque condimentum. Ut eu eros quam. Nullam sodales justo vitae est dapibus vehicula. Aliquam quis rhoncus ligula, efficitur congue nunc. Nam vestibulum tortor at varius consectetur. Nunc vestibulum, leo vitae pretium vehicula, felis elit sollicitudin augue, vitae euismod dui nisl non felis.</p>'),
(53,	3,	NULL,	'lokalizacja',	'Lokalizacja',	'Nasza lokalizacja',	'p2.jpg',	99,	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus luctus elementum. Ut volutpat pretium arcu at vehicula. Morbi congue facilisis elementum. Morbi dapibus maximus est, at interdnsectetur lacus. Pellentesque blandit, massa eget dapibus placerat, sem libero venenatis nunc, at luctus nisl justo quis mi. Curabitur libero sem, rutrum in interdum id, efficitur ut felis. Ut sed sodales velit.</p>\r\n<p>Donec bibendum dolor a nibh mollis, non bibendum lorem commodo. Nulla facilisi. Nulla imperdiet, enim eu sollicitudin vulputate, lectus ipsum sagittis nulla, quis aliquet mauris ante ac risus. Phasellus nec odio a nisi iaculis commodo eget non felis. Proin fringilla tortor non quam eleifend volutpat. Nunc convallis ac lectus ac vestibulum. Nullam est est, volutpat sit amet gravida at, malesuada ut est. Quisque magna arcu, aliquet at sodales ac, fringilla ut metus. Sed id quam eget leo maximus pulvinar.</p>\r\n<ul>\r\n<li>ac risus</li>\r\n<li>a egplac</li>\r\n<li>t. Nunc convallis a</li>\r\n</ul>\r\n<p>Praesent vel ex odio. Quisque eu volutpat neque, hendrerit placerat justo. Etiam vehicula dignissim mauris. Sed non mi porta, varius nibh ut, commodo leo. Aenean sit aed ex non ornare. Phasellus vehicula mauris vel sollicitudin bibendum. Integer arcu massa, rutrum a nunc eget,</p>\r\n<div class=\"text-center\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201880.51115438552!2d-122.57768437848272!3d37.75761709727139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+Kalifornia%2C+Stany+Zjednoczone!5e0!3m2!1spl!2spl!4v1472243899042\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"\"></iframe></div>');

-- 2016-08-29 15:04:55
