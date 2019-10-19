CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(45) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `security` char(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `customers` (`id`, `name`, `email`, `birthday`, `security`,`user_id`) VALUES
(1, 'Erin Pate Skinner', 'dolor.vitae.dolor@mollisvitaeposuere.ca', '2013-10-07', '74426302285',1),
(2, 'Leonard Martinez Hays', 'dignissim.magna.a@dolorvitae.org', '2012-08-22', '75278965048',1),
(3, 'Aladdin Curry French', 'eu.augue@eutemporerat.org', '2012-10-28', '10376915676',1),
(4, 'Chloe Macdonald Dalton', 'parturient.montes@Mauris.ca', '2013-05-12', '64444679077',1),
(5, 'Mallory Sweet Strong', 'lorem@fringillaporttitor.ca', '2013-05-19', '15687101505',1),
(6, 'Jermaine Pierce Woodward', 'mi.pede.nonummy@molestiearcu.ca', '2013-03-22', '36712502261',1),
(7, 'Bell Raymond Pruitt', 'dignissim.tempor.arcu@nuncac.org', '2013-03-09', '64629428663',1),
(8, 'Lydia Bell Whitfield', 'Sed@semper.com', '2013-12-02', '41962749289',1),
(9, 'Tad Mason Graham', 'elit.erat@vestibulum.edu', '2012-06-08', '05642745964',1),
(10, 'Felix Bradshaw Mccray', 'dui@elitCurabitursed.edu', '2013-09-16', '82071617437',2),
(11, 'Idona Jensen Garrett', 'sem@Crasvulputate.com', '2014-01-08', '07941004794',2),
(12, 'Wayne Ray Padilla', 'luctus.felis.purus@nonjustoProin.org', '2014-04-03', '60934465323',2),
(13, 'Nelle Finch Cantu', 'placerat.eget@Donec.ca', '2012-05-29', '64704574060',2),
(14, 'Maite Emerson Best', 'dui.augue@quisdiam.com', '2014-04-01', '04531857574',2),
(15, 'Jada Holman Wilkins', 'dolor@tristiquealiquet.com', '2013-01-11', '88994190741',2),
(16, 'Beverly Lane Lindsay', 'et.euismod@ametfaucibusut.com', '2013-10-22', '40194697135',2),
(17, 'Hayden Clayton Foreman', 'enim@aliquamenimnec.edu', '2013-04-16', '72583040904',2),
(18, 'Hadassah Leonard Key', 'dui.quis@augueidante.com', '2013-04-07', '72626859924',2),
(19, 'Adrian Ballard Peters', 'enim.Curabitur@faucibus.com', '2012-07-13', '50918748283',2),
(20, 'Phyllis Richmond Wynn', 'eget.laoreet@justoeuarcu.org', '2013-07-01', '62712888794',2),
(21, 'Amelia Baird Barrera', 'id.ante@dignissim.org', '2012-06-09', '12106836368',2),
(22, 'Whitney Mack Lamb', 'quam.Curabitur.vel@PraesentluctusCurabitur.org', '2012-06-26', '52403407001',2),
(23, 'Myra Mcmahon Valentine', 'ac.mi@fringillami.edu', '2012-07-27', '42961419194',2);

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `unity` char(4) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `products` (`id`, `description`, `unity`, `date`,`user_id`) VALUES
(1, 'Sed nulla ante,', 'VCO', '2012-11-10 11:54:17',1),
(2, 'dictum. Proin eget', 'LQO', '2012-06-25 13:23:55',1),
(3, 'In nec orci.', 'OKK', '2014-05-05 14:07:16',1),
(4, 'dis parturient montes,', 'LEJ', '2012-07-21 06:32:25',1),
(5, 'cursus et, eros.', 'PXB', '2013-04-04 06:47:00',1),
(6, 'magna, malesuada vel,', 'OVG', '2013-07-15 07:06:47',1),
(7, 'id, mollis nec,', 'XUA', '2012-07-12 23:49:05',1),
(8, 'sed dictum eleifend,', 'VXZ', '2013-07-20 00:36:50',1),
(9, 'penatibus et magnis', 'ZNT', '2012-08-25 10:05:39',1),
(10, 'lectus quis massa.', 'EIN', '2013-09-23 08:13:41',1),
(11, 'egestas lacinia. Sed', 'SXB', '2014-04-13 20:00:05',1),
(12, 'Mauris quis turpis', 'CLA', '2013-04-22 11:27:40',2),
(13, 'Nunc ullamcorper, velit', 'ICO', '2013-08-21 00:56:27',2),
(14, 'tempor lorem, eget', 'XVA', '2013-08-06 09:42:24',2),
(15, 'ut ipsum ac', 'PAG', '2013-03-23 21:15:45',2),
(16, 'quis massa. Mauris', 'YFB', '2013-03-08 14:16:07',2),
(17, 'dictum mi, ac', 'TVJ', '2013-03-09 19:19:23',2),
(18, 'nec ante. Maecenas', 'EWR', '2012-07-14 11:18:32',2),
(19, 'Phasellus nulla. Integer', 'UTA', '2012-07-05 21:41:53',2),
(20, 'enim mi tempor', 'EBP', '2014-05-13 03:42:28',2),
(21, 'parturient montes, nascetur', 'DDK', '2014-05-14 15:07:39',2),
(22, 'sed orci lobortis', 'ZLW', '2013-06-17 12:00:33',2),
(23, 'et ipsum cursus', 'MDZ', '2013-09-30 12:25:46',2);
