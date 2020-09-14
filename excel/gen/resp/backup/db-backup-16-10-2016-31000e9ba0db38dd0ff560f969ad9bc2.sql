

CREATE TABLE `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO branches VALUES("1","BUEA","");
INSERT INTO branches VALUES("2","MUEA","");
INSERT INTO branches VALUES("3","LIMBE","");
INSERT INTO branches VALUES("4","YAOUNDE","");





CREATE TABLE `cake_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO cake_colors VALUES("1","BLUE");
INSERT INTO cake_colors VALUES("2","BLACK Blue");
INSERT INTO cake_colors VALUES("3","YELOW");





CREATE TABLE `category` (
  `cid` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent` int(9) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO category VALUES("1","ONE","0");
INSERT INTO category VALUES("2","TWO","0");
INSERT INTO category VALUES("3","THREE","0");
INSERT INTO category VALUES("4","FOUR","0");
INSERT INTO category VALUES("5","Facebook","1");
INSERT INTO category VALUES("6","Google+","1");
INSERT INTO category VALUES("7","Twitter","1");
INSERT INTO category VALUES("8","LinkedIn","1");
INSERT INTO category VALUES("9","PHP","2");
INSERT INTO category VALUES("10","jQuery","2");
INSERT INTO category VALUES("11","HTML5","2");
INSERT INTO category VALUES("12","CSS3","2");
INSERT INTO category VALUES("13","StartUps","3");
INSERT INTO category VALUES("14","Marketing","3");
INSERT INTO category VALUES("15","Health and Fitness","4");
INSERT INTO category VALUES("16","Travel","4");





CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yourid` int(11) NOT NULL,
  `sentby` varchar(40) NOT NULL,
  `sentto` varchar(90) NOT NULL,
  `date2` varchar(20) NOT NULL,
  `file` varchar(220) NOT NULL,
  `receiver` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO chat VALUES("1","Nishang Reception","Hello There","2016-10-16 10:59:21","3"," BUEA","2","20161016105921","","");
INSERT INTO chat VALUES("2","Nishang Reception","Hello There","2016-10-16 11:01:39","3","BAMENDA","2","20161016110139","","");
INSERT INTO chat VALUES("3","Nishang Reception","Hello There","2016-10-16 11:03:26","3"," BUEA","2","20161016110326","","");
INSERT INTO chat VALUES("4","Nishang Reception","Hello There","2016-10-16 11:06:19","3"," BUEA","2","20161016110619","","");
INSERT INTO chat VALUES("5","Nishang Reception","Hello There","2016-10-16 11:07:55","0"," BUEA","BAMENDA","20161016110755","","");
INSERT INTO chat VALUES("6","Nishang Reception","Hello","2016-10-16 11:17:31","0"," BUEA","3","20161016111731","","BAMENDA");
INSERT INTO chat VALUES("7","Nishang Reception","Hello","2016-10-16 11:17:51","2"," BUEA","3","20161016111751","","BAMENDA");
INSERT INTO chat VALUES("8","Nishang Reception","Hello","2016-10-16 11:20:27","2"," BUEA","3","20161016112027","","BAMENDA");
INSERT INTO chat VALUES("9","Nishang Reception","Hello","2016-10-16 11:21:34","2"," BUEA","3","20161016112134","","BAMENDA");
INSERT INTO chat VALUES("10","Nishang Reception","Hello","2016-10-16 11:26:52","2"," BUEA","3","20161016112652","","BAMENDA");
INSERT INTO chat VALUES("11","Nishang Reception","Hello","2016-10-16 11:27:12","2"," BUEA","3","20161016112712","","BAMENDA");
INSERT INTO chat VALUES("12","Nishang Reception","Hello","2016-10-16 11:27:24","2"," BUEA","3","20161016112724","","BAMENDA");
INSERT INTO chat VALUES("13","Nishang Reception","Hello","2016-10-16 11:28:03","2"," BUEA","3","20161016112803","","BAMENDA");
INSERT INTO chat VALUES("14","Nishang Reception","Hello There","2016-10-16 11:45:41","2"," BUEA","4","20161016114541","","YAOUNDE");
INSERT INTO chat VALUES("15","MMMMMMMMMM","Hw Far","2016-10-16 11:46:07","4"," YAOUNDE","2","20161016114607","","BUEA");
INSERT INTO chat VALUES("16","Nishang Reception","Yes Hgfgk","2016-10-16 11:47:12","2"," BUEA","4","20161016114712","","YAOUNDE");
INSERT INTO chat VALUES("17","MMMMMMMMMM","What Does That Even Mean?","2016-10-16 11:48:06","4"," YAOUNDE","2","20161016114806","","BUEA");
INSERT INTO chat VALUES("18","Nishang Reception","Ate U Yhrtechf","2016-10-16 11:48:45","2"," BUEA","4","20161016114845","","YAOUNDE");
INSERT INTO chat VALUES("19","MMMMMMMMMM","What","2016-10-16 11:49:13","4"," YAOUNDE","2","20161016114913","","BUEA");
INSERT INTO chat VALUES("20","MMMMMMMMMM","Sell That Phone And Buy A Browser","2016-10-16 11:51:03","4"," YAOUNDE","2","20161016115103","","BUEA");
INSERT INTO chat VALUES("21","Nishang Reception","YOOOOO","2016-10-16 11:53:24","2"," BUEA","4","20161016115324","","YAOUNDE");





CREATE TABLE `client` (
  `clien_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `address` text,
  `as1` varchar(60) DEFAULT NULL,
  `as2` varchar(60) DEFAULT NULL,
  `as3` varchar(60) DEFAULT NULL,
  `abs` varchar(20) NOT NULL,
  PRIMARY KEY (`clien_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("2","NJEIFOR BAKERYBI","MOKINDI-LIMBE<br>\nWebsite:www.hotelomnisport.com<br>\nEmail:booking@hotelomnisport.com","Tel:(237) 233 332 399/699 717 499/694 523 669","","V-2515","HOM");





CREATE TABLE `commands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `email` varchar(89) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `date` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `compliment` varchar(90) NOT NULL,
  `shape` varchar(90) NOT NULL,
  `design_color` varchar(90) NOT NULL,
  `body_color` varchar(90) NOT NULL,
  `occassion` varchar(80) NOT NULL,
  `occasion_date` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `discount` varchar(8) NOT NULL,
  `month` varchar(5) NOT NULL,
  `today` varchar(20) NOT NULL,
  `year` varchar(8) NOT NULL,
  `price` varchar(10) NOT NULL,
  `cake` varchar(90) NOT NULL,
  `qty` varchar(7) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `branch` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO commands VALUES("1","Aubruchet Jean Francois","Che_ptr@yahoo.com","677777778","2015/11/11","Hello Isaac","CHOCOLATE","Rectangle","BLACKS","BLACK Blue","Marraige","11/11/2016","","0","10","15-10-2016","2016","20000","CY CAKE","1","6","BUEA");
INSERT INTO commands VALUES("2","Mbah IsaaC Oliver","Che_ptr@yahoo.com","677777778","18/10/2016","Hi There","CHOCOLATE","Round","BLACKS","BLACK Blue","Birth Day","10/18/2016","","0","10","15-10-2016","2016","8000","Zang Felix","1","4","BUEA");
INSERT INTO commands VALUES("3","DR KAPOHO DJOUmESSI","Che_ptr@yahoo.com","677777778","","Hi There","ICE","Round","Yellow","BLACK Blue","Annivesary","10/19/2016","","0","10","15-10-2016","2016","20000","Birthday Cake","1","5","BUEA");
INSERT INTO commands VALUES("4","Mbah Isaac","Iishanh@yahoo.com","677789990","","Happy Birthday","ICING","Round Shape","Yellow","BLACK Blue","Annivesary","10/30/2016","Keep Fresh<br />\nNo Extra Pay","500","10","16-10-2016","2016","8000","Nishang Cke","1","3","BUEA");
INSERT INTO commands VALUES("5","Perika","Uncledro@yahoo.com","567889006","","Hbd","ICE","Rectangle","BLACKS","BLACK Blue","Birth Day","10/1/2016","","0","10","16-10-2016","2016","20000","CY CAKE","1","6","YAOUNDE");





CREATE TABLE `compliments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` varchar(14) NOT NULL,
  `staus` varchar(170) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO compliments VALUES("1","ICE","1000","");
INSERT INTO compliments VALUES("2","CHOCOLATE","5000","");
INSERT INTO compliments VALUES("3","SUGER","2000","");
INSERT INTO compliments VALUES("4","NAME","4000","");
INSERT INTO compliments VALUES("5","BUTTER","5500","");
INSERT INTO compliments VALUES("6","ICING","6000","");
INSERT INTO compliments VALUES("7","COLOR","3000","");
INSERT INTO compliments VALUES("8","NAME","2500","");
INSERT INTO compliments VALUES("9","WAHS & WASP","6000","");





CREATE TABLE `design_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO design_colors VALUES("1","BLACKS");
INSERT INTO design_colors VALUES("2","Yellow");





CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `category` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `fprice` varchar(12) NOT NULL,
  `sprice` varchar(12) NOT NULL,
  `disc` text NOT NULL,
  `bk` varchar(225) NOT NULL,
  `date` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO images VALUES("1","Crown Bread","6000","2000","","Crown Breaduploads/250x250_3.jpg","2016-10-14 11:38","uploads/250x250_3.jpg");
INSERT INTO images VALUES("2","Crown Bread","6000","2000","","Crown Breaduploads/250x250_3.jpg","2016-10-14 11:38","uploads/250x250_3.jpg");
INSERT INTO images VALUES("3","Nishang Cke","8000","5000","Thag<br />\nGsgsg<br />\nHshsh<br />\nShshsh<br />\nShshsh         <br />\n           ","Nishang Ckeuploads/250x250_3.jpg","2016-10-14 11:39","uploads/250x250_3.jpg");
INSERT INTO images VALUES("4","Zang Felix","8000","2000"," Asddd<br />\nHhh<br />\nBbb<br />\nHhhj<br />\n          <br />\n           ","Zang Felixuploads/250x250_6.jpg","2016-10-14 13:04","uploads/250x250_6.jpg");
INSERT INTO images VALUES("5","Birthday Cake","20000","12000","B<br />\nV<br />\nG<br />\nN<br />\n           <br />\n           ","Birthday Cakeuploads/250x250_8.jpg","2016-10-14 13:29","uploads/250x250_8.jpg");
INSERT INTO images VALUES("6","CY CAKE","20000","2000","GSG<br />\nGDGGD<br />\nGGDG<br />\nGSGSGH<br />\n           <br />\n           ","CY CAKEuploads/250x250_2.jpg","2016-10-14 18:42","uploads/250x250_2.jpg");





CREATE TABLE `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `levels` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO levels VALUES("1","ADMIN","20");
INSERT INTO levels VALUES("2","CASHEIR","5");





CREATE TABLE `occassions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO occassions VALUES("1","Marraige");
INSERT INTO occassions VALUES("2","Birth Day");
INSERT INTO occassions VALUES("3","Annivesary");
INSERT INTO occassions VALUES("4","Others");
INSERT INTO occassions VALUES("5","Party");





CREATE TABLE `post` (
  `pid` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cid` int(9) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO post VALUES("1","Facebook Style Location Sharing Map with Google API","http://w3lessons.info/2013/12/10/facebook-style-location-sharing-map-with-google-api/","http://w3lessons.info/wp-content/uploads/2013/12/Location-Sharing-Map-332x134.png","1");
INSERT INTO post VALUES("2","Facebook Style Hashtag System with PHP, MYSQL & jQuery","http://w3lessons.info/2013/11/18/facebook-style-hashtag-system-with-php-mysql-jquery/","http://w3lessons.info/wp-content/uploads/2013/11/Facebook-like-Hashtag-System-with-PHP-332x138.gif","1");





CREATE TABLE `shapes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO shapes VALUES("3","Rectangle");
INSERT INTO shapes VALUES("5","Round");
INSERT INTO shapes VALUES("6","Round Shape");





CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `md5_id` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `full_name` tinytext COLLATE latin1_general_ci NOT NULL,
  `user_name` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_email` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_level` tinyint(4) NOT NULL DEFAULT '1',
  `pwd` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `address` text COLLATE latin1_general_ci NOT NULL,
  `country` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tel` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fax` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `website` text COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `users_ip` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `approved` int(1) NOT NULL DEFAULT '0',
  `activation_code` int(10) NOT NULL DEFAULT '0',
  `banned` int(1) NOT NULL DEFAULT '0',
  `ckey` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ctime` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`user_email`),
  FULLTEXT KEY `idx_search` (`full_name`,`address`,`user_email`,`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO users VALUES("1","c4ca4238a0b923820dcc509a6f75849b","Chief reception","admin12","admin12@mysoftware.com","1","5dbed78feb378eb63fcea6bbbb464c5e76454bfe9f1d06e22","12345","MUEA","","","","2016-10-15","::1","2","9375","20","","");
INSERT INTO users VALUES("2","c81e728d9d4c2f636f067f89cc14862c","Nishang Reception","NISHANG","NISHANG@mysoftware.com","1","19f228a40c84c5daa567181c7678815ac7c3b4b4eb46bed3d","12345","BUEA","","","","2016-10-15","::1","2","4122","5","","");
INSERT INTO users VALUES("3","eccbc87e4b5ce2fe28308fd9f2a7baf3","Bar Man","bauca","bauca@mysoftware.com","1","ccda6ceaa5eed0fa91fb6a35615aa0d6afd71b40196a495a4","12345","BAMENDA","","2","","2016-10-15","::1","0","8346","5","","");
INSERT INTO users VALUES("4","a87ff679a2f3e71d9181a67b7542122c","MMMMMMMMMM","admitt","admitt@mysoftware.com","1","b25fabe6a8eab35331f61525069d4377786932a86790ce651","12345","YAOUNDE","","2","","2016-10-16","::1","2","6166","5","","");



