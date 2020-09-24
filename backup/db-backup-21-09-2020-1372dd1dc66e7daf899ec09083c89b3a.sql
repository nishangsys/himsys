

CREATE TABLE `bank_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `num` varchar(19) NOT NULL,
  `formals` varchar(15) NOT NULL,
  `currents` varchar(15) NOT NULL,
  `newtot` varchar(15) NOT NULL,
  `date` varchar(19) NOT NULL,
  `year` varchar(10) NOT NULL,
  `withdrawn` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `client` (
  `clien_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `as1` text DEFAULT NULL,
  `as2` varchar(60) DEFAULT NULL,
  `as3` varchar(60) DEFAULT NULL,
  `abs` varchar(20) NOT NULL,
  PRIMARY KEY (`clien_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("2","Higher Institute of Management Studies(HIMS)","PO Box 77, Bokoko Buea,",":(+237)3332 2558<BR>E-mail: info@biakahc.org<br>Website:biakahc.org","","V-2515","HOM");





CREATE TABLE `daily` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(20) NOT NULL,
  `room` varchar(90) NOT NULL,
  `date` varchar(17) NOT NULL,
  `rec` varchar(17) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `area` int(11) NOT NULL,
  `time` text NOT NULL,
  `reason` varchar(40) NOT NULL,
  `qty` varchar(11) NOT NULL,
  `price` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `owed` varchar(20) NOT NULL,
  `paidto` varchar(90) NOT NULL,
  `paidtou` varchar(60) NOT NULL,
  `amt` varchar(20) NOT NULL,
  `idds` int(11) NOT NULL,
  `staffname` varchar(50) NOT NULL,
  `day` varchar(11) NOT NULL,
  `purpose` varchar(120) NOT NULL,
  `discount` varchar(11) NOT NULL,
  `company` varchar(90) NOT NULL,
  `printed` varchar(18) NOT NULL,
  `status` int(11) NOT NULL,
  `thatyear` varchar(15) NOT NULL,
  `bank` varchar(12) NOT NULL,
  `sects` varchar(90) NOT NULL,
  `tshirt` varchar(12) NOT NULL,
  `adminp` varchar(12) NOT NULL,
  `sunion` varchar(12) NOT NULL,
  `levels` varchar(10) NOT NULL,
  `session` varchar(50) NOT NULL,
  `waver` varchar(15) NOT NULL,
  `receiver` varchar(80) NOT NULL,
  `scholar` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1813 DEFAULT CHARSET=latin1;

INSERT INTO daily VALUES("73","CAROLINE KOFFI","","03-01-2019","","60000","01","2018/2019","0",""," ENTERTAINMENT AFTER STAFF MEETING","1","","60000","","CAROLINE KOFFI","","","0","RECEPTION","","RECEPTION","","","","0","","","","","","","","","","CAROLINE KOFFI","");
INSERT INTO daily VALUES("74","CAROLINE KOFFI","","03-01-2019","","13000","01","2018/2019","0",""," CARTON A4 PAPERS","1","","13000","","CAROLINE KOFFI","","","0","DOCUMENTATION","","DOCUMENTATION","","","","0","","","","","","","","","","CAROLINE KOFFI","");
INSERT INTO daily VALUES("75","CAROLINE KOFFI","","03-01-2019","","250","01","2018/2019","0",""," TRANSPORT TO PURCHASE A4 PAPERS","","","250","","CAROLINE KOFFI","","","0","TRANSPORTATION","","TRANSPORTATION","","","","0","","","","","","","","","","CAROLINE KOFFI","");
INSERT INTO daily VALUES("76","CAROLINE KOFFI","","04-01-2019","","14200","01","2018/2019","0",""," REFILL INK","2","","14200","","CAROLINE KOFFI","","","0","STATIONERIES","","STATIONERIES","","","","0","","","","","","","","","","MOKUBE DIALE","");
INSERT INTO daily VALUES("77","CAROLINE KOFFI","","04-01-2019","","1500","01","2018/2019","0",""," SPIRAL BINDING","1","","1500","","CAROLINE KOFFI","","","0","DOCUMENTATION","","DOCUMENTATION","","","","0","","","","","","","","","","SYLVIE YEMBI","");
INSERT INTO daily VALUES("100","CAROLINE KOFFI","","04-01-2019","","50000","01","2018/2019","0",""," FUNERAL SUPPORT","","","50000","","CAROLINE KOFFI","","","0","OUTREACH","","OUTREACH","","","","0","","","","","","","","","","SHADRACK LYONGA","");
INSERT INTO daily VALUES("101","CAROLINE KOFFI","","04-01-2019","","7500","01","2018/2019","0",""," COST OF NAILS AND CEMENT","","","7500","","CAROLINE KOFFI","","","0","GENERAL REPAIRS","","GENERAL REPAIRS","","","","0","","","","","","","","","","BILA BESS","");
INSERT INTO daily VALUES("103","HIMS/07/18/001","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 9:06:32","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Abigail Lem Njofor  ","24","EXECUTIVE SECRETARIAL STUDIES"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("107","HIMS/01/18/0002","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:00:55","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Andong Anabela Anwei  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("108","HIMS/05/18/0003","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:02:31","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Sharon Kemayou Minkong  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("109","HIMS/05/18/0004","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:03:03","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Eyole Lydienne Njie Mojoko  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("110","HIMS/02/18/0005","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:03:40","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ato Tabi Collins  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("111","HIMS/04/18/0006","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:04:22","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Tchoumke Noel Tchoumke  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("112","HIMS/04/18/0007","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:04:53","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Mbongo Dimalla Jean Le Pretre  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("113","HIMS/02/18/0008","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:05:25","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Etombi Martha Likenya Matofe  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("114","HIMS/01/18/0009","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:05:55","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Alem Asongandem Victory Nganganu  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("115","HIMS/06/18/0010","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:06:23","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Lemmah Nwana Stephanie  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("116","HIMS/06/18/0011","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:06:55","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nwana Hellen Noel Nyianya  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("117","HIMS/02/18/0012","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:07:56","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Njoke Emilia Efeti  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("118","HIMS/06/18/0013","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:08:34","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Kouam Gilles Loique  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("119","HIMS/02/18/0014","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:09:02","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Valery Mudikey Akuma  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("120","HIMS/06/18/0015","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:09:32","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ngomba Elizabeth Likowo  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("121","HIMS/05/18/0016","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:10:11","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Chu Boris Kaw  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("122","HIMS/03/18/0017","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:10:48","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nvenakeng Grace Nzemfeh  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("123","HIMS/04/18/0018","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:11:24","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Eposi Sylvie Luma  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("124","HIMS/05/18/0019","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:11:57","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Siekouewoue Tchamgoue Woksi  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("125","HIMS/02/18/0020","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:12:26","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nkoukep Euphemia Nana  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("126","HIMS/04/18/0021","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:12:57","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Vanessia Kunki Anno  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("127","HIMS/05/18/0022","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:13:29","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Olive Onyinyechi Onuoha  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("128","HIMS/05/18/0023","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:14:29","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Anyah Desmond Memba  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("129","HIMS/02/18/0024","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:15:03","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ngashu Junior Tiku  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("130","HIMS/03/18/0025","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:15:32","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Rex Mbua Nangoh Jr  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("131","HIMS/03/18/0026","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:16:01","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nemoh Don-elliot Nkongho  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("132","HIMS/01/18/0027","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:16:23","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Manga Maurinett Tengu  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("133","HIMS/04/18/0028","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:16:48","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Anyah Jarvis Esaka-anyah  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("134","HIMS/07/18/0029","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:17:30","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Dorachael Nkenganyi  ","24","EXECUTIVE SECRETARIAL STUDIES"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("135","HIMS/09/18/0030","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:17:57","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ngomba Steve Nyadjroh  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("136","HIMS/02/18/0031","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:18:25","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Bih Bridget Tilong  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("137","HIMS/04/18/0032","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:18:59","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Glory Esimo Mukete  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("138","HIMS/02/18/0033","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:19:37","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Elizabeth Saele Lyonga  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("139","HIMS/04/18/0034","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:20:02","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Andin Therese Moila  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("140","HIMS/06/18/0035","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:20:29","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Lauretta Mbel Chia  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("141","HIMS/01/18/0036","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:21:03","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nchang Chiesea Mbom  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("142","HIMS/01/18/0037","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:21:31","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Naoussi Nkamko Juste Philip  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("143","HIMS/06/18/0038","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:21:58","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Clive Watany Ewunkem  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("144","HIMS/06/18/0039","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:22:22","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Joana Joffi Ngalle  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("145","HIMS/02/18/0040","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:23:17","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Tabi Laurabeth Kate Nchenge  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("146","HIMS/02/18/0041","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:23:44","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nolinga Shellbavine Saile  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("147","HIMS/01/18/0042","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:24:12","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Yimpi Doline De Ndiounh  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("148","HIMS/05/18/0043","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:24:38","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Atitia Esima Adams  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("149","HIMS/07/18/0044","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:25:02","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Rose Nwache Juru  ","24","EXECUTIVE SECRETARIAL STUDIES"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("150","HIMS/01/18/0045","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:25:30","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Atemkeng Forbin Jean  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("151","HIMS/04/18/0046","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:25:56","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Funwie Haress Tanwie  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("152","HIMS/06/18/0047","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:26:18","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Etah Oneke Ako Ayuk  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("153","HIMS/02/18/0048","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:26:41","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Donal Tembu Chi  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("154","HIMS/07/18/0049","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:27:10","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Enow Francisca Orock  ","24","EXECUTIVE SECRETARIAL STUDIES"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("155","HIMS/06/18/0050","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:27:36","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Arrey Marius Manyor  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("156","HIMS/06/18/0051","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:27:59","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Sandra Nabila Tita Scott  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("157","HIMS/05/18/0052","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:28:25","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nouyadjam Walleu Mimi Fabiola  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("158","HIMS/09/18/0053","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:28:44","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Kaka Martin Mbongo  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("159","HIMS/05/18/0054","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:29:12","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Melene Meangu Ngia  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("160","HIMS/02/18/0055","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:29:45","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Cynthia Epeti  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("161","HIMS/09/18/0056","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:30:11","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ngu Edwin Efenjeli  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("162","HIMS/05/18/0057","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:30:45","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Sharon Ngonui Mabought  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("163","HIMS/06/18/0058","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:31:05","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ikome Fedy Ngomba  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("164","HIMS/03/18/0059","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:31:31","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Olga Marie-noel Yalue  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("165","HIMS/06/18/0060","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:32:30","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ashu Collins Itah  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("166","HIMS/01/18/0061","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:33:21","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ndangoh Beltine Azock  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("167","HIMS/04/18/0062","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:56:57","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Finjap Mbia Jacobson Junior  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("168","HIMS/06/18/0063","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:57:53","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Pembe Stephanie Orume  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("169","HIMS/01/18/0064","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:58:15","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Mbu Husberto Mbu  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("170","HIMS/06/18/0065","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:59:15","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ngwelavanessa Manken  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("171","HIMS/02/18/0066","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 11:59:44","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Enanga Nanyongo Akwanga  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("172","HIMS/02/18/0067","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:00:12","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Munyah Paul  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("173","HIMS/04/18/0068","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:03:20","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Teto Ntahi Michelle Joseyard  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("174","HIMS/06/18/0069","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:03:48","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Tembu Rita Bih  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("175","HIMS/02/18/0070","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:04:32","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ndalegh Quinette Bih  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("176","HIMS/02/18/0071","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:05:23","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Yufenyuy Nancy Nanueh  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("177","HIMS/02/18/0072","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:06:11","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Bebongchou Robert Brighten Ajeuko  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("178","HIMS/06/18/0073","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:06:54","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Tchuimegni Christel Sandry  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("179","HIMS/01/18/0074","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:07:30","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Tabenteh Hilris Benem  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("180","HIMS/09/18/0075","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:08:33","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Luma Wuma Junior  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("181","HIMS/03/18/0076","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:09:00","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Saningong Yanick Ngang  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("182","HIMS/05/18/0077","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:09:28","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Touomkam Stephanie Taffor  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("183","HIMS/06/18/0078","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:09:51","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Makolo Sarah Ebenye  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("184","HIMS/02/18/0079","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:10:28","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ngomende Agnes Monjhu  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("185","HIMS/01/18/0080","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:10:51","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Bobga Wilfred Doh  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("186","HIMS/01/18/0170","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:11:10","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","TAMBE DOVIS ARREY-NJOCK  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("187","HIMS/05/18/0082","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:11:34","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Mbahchan Sonita  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("188","HIMS/05/18/0083","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:11:56","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Kelly Piefondia Wansi  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("189","HIMS/02/18/0084","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:12:29","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nchonganyi Nerisah Nkemnji  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("190","HIMS/01/18/0085","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:12:55","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Tebid Dora Aneng  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("191","HIMS/05/18/0086","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:13:43","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ofor Klein Ofor  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("192","HIMS/01/18/0087","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:15:02","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ralitsa Mukete Elomba  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("193","HIMS/04/18/0088","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:16:00","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Zirimba Noella Yafeh  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("194","HIMS/04/18/0089","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:17:12","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nahbang Ida Ndansi  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("195","HIMS/06/18/0090","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:17:58","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Alfred Mbonde Mokake Affy  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("196","HIMS/06/18/0091","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:18:38","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Mbengu Prisca -desthelle Nkehmbeng  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("197","HIMS/03/18/0092","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:19:00","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Mbengu Lea-violet Njukang  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("198","HIMS/04/18/0093","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:19:36","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Jato Bennett Nganji  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("199","HIMS/02/18/0094","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:20:44","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Acha Marlyse Negu  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("200","HIMS/04/18/0095","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:21:44","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Fuli Fubong Jean Jacques  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("201","HIMS/01/18/0096","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:22:51","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Arrey Brunhilda Bessem  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("202","HIMS/05/18/0097","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:23:11","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Taku Eugene Etongke  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("203","HIMS/09/18/0098","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:23:33","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Sabila Rojer Sama  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("204","HIMS/05/18/0099","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:24:00","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Oscar Ngale Njie  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("205","HIMS/06/18/0100","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:24:29","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ajong Ako Laura Forjia  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("206","HIMS/02/18/0101","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:24:51","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Janice Chiwendo Modestus  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("207","HIMS/11/18/0102","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:25:13","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Abanga Elizabeth Forbin  ","24","TRAVEL AGENCY, TOURISM AND OPERATION MANAGEMENT "," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("208","HIMS/06/18/0103","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:25:35","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Kolle Sylvie Ndipakem  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("209","HIMS/06/18/0104","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:25:57","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Shadrack Lyonga Nganje  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("210","HIMS/04/18/0105","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:26:18","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Enoh Cecilia Nso  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("211","HIMS/01/18/0106","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:26:41","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Kiki Dwell Nfor  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("212","HIMS/06/18/0107","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:27:16","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ngu Merriam Emenkeng  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("213","HIMS/04/18/0108","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:27:42","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Brandon Ndonga Agbori  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("214","HIMS/04/18/0109","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:28:08","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Nang Nadeen Bih  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("215","HIMS/04/18/0110","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:28:27","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ekuke Charles Chaiye  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("216","HIMS/04/18/0111","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:28:57","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ndedi Benga Salem Joelle  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("217","HIMS/06/18/0112","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:29:17","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Iye Christina Etongwe  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("218","HIMS/02/18/0113","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:29:41","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Yedkuna Sandrine Foncham  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("219","HIMS/06/18/0114","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:30:06","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Ngongho Divine Gwanyetula  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("220","HIMS/03/18/0115","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:30:51","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Seyrione Njele Mandou  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("221","HIMS/01/18/0116","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:31:11","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Bih Ruth Ndanga  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("222","HIMS/04/18/0117","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:31:39","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","Wesley Wolfgang Miller Beckley  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("223","HIMS/05/18/0118","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:32:17","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","ACHAH EMMANUELLA AKURI  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("224","HIMS/06/18/0119","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:32:49","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","ASONGAFAC JULIUS  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("225","HIMS/04/18/0120","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:33:15","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","IBRAHIM MOHAMAN  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("226","HIMS/09/18/0121","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:33:57","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","EMILE NDIP-ARRAH TAKU ABE JUNIOR  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("227","HIMS/06/18/0122","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:34:18","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","NNAM TALOM ANGEL  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("228","HIMS/04/18/0123","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:34:38","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","DANIEL ELONGO MOMBA  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("229","HIMS/06/18/0124","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:35:01","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","NDIP JACKSON BESONG  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("230","HIMS/09/18/0125","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:35:29","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","GANG DERICK  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("231","HIMS/03/18/0126","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:35:53","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","FUAMBU JEFFREYS TOMBU  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("232","HIMS/04/18/0127","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:36:13","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MOKOM LOUIS NDOH  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("233","HIMS/01/18/0128","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:36:42","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","GEH JUDITH AKE  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("234","HIMS/06/18/0129","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:37:04","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","ENYOE GENNIEVE MAISAH  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("235","HIMS/09/18/0130","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:37:25","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","EPOLLE HILDA LAURA NJIKANG  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("236","HIMS/06/18/0131","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:37:56","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","EKOUMBO EKITE BLAIRIO  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("237","HIMS/04/18/0132","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:38:27","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MARY FRANCIS OLABINJO  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("238","HIMS/09/18/0133","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:38:53","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","CHO DILAN AZINWI CHE  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("239","HIMS/01/18/0134","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:39:20","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","EWULEN BRANDON-VIC MONGOH  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("240","HIMS/02/18/0135","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:39:43","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","NEBA NDONUI JUNIOR  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("241","HIMS/06/18/0136","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:40:15","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","AWANTOH NEVILLE MOLINGA  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("242","HIMS/06/18/0137","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:40:33","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","KUTA NJINDA DANIEL  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("243","HIMS/09/18/0138","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:40:56","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","BRADLEY DAVID NGEHSONG  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("244","HIMS/04/18/0139","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:41:16","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MALLE VIVIAN BOTI  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("245","HIMS/02/18/0140","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:41:38","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","JOHN ADEYEMI PRAISE  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("246","HIMS/01/18/0141","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:41:58","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","AMEI FAITH MBANGWI  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("247","HIMS/07/18/0142","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:42:19","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MOIWO DORIS TANYI  ","24","EXECUTIVE SECRETARIAL STUDIES"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("248","HIMS/09/18/0143","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:42:40","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","GHANDE DESMOND  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("249","HIMS/01/18/0144","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:43:10","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","AKONGNWI LESLEY TUH  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("250","HIMS/06/18/0145","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:43:32","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","EWANG PRINCESS MALIAKA MOROMBI  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("251","HIMS/04/18/0146","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:43:54","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","OTTIA VERON OFON  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("252","HIMS/03/18/0147","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:44:24","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MARIE ANNE MBI ASONGWE  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("253","HIMS/01/18/0148","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:44:55","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","TANGWO DELPHINE NEME  ","24","ACCOUNTANCY"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("254","HIMS/05/18/0149","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:45:18","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","ORO MICHAEL MESEMBE  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("255","HIMS/02/18/0150","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:45:39","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","NCHINDA CHELSEY KETSEM  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("256","HIMS/02/18/0151","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:45:58","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MEMU COLLINS SALACK  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("257","HIMS/05/18/0152","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:46:28","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","FORSUH FAITHFUL NGELOH  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("258","HIMS/06/18/0153","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:46:47","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","LUKONG KAREEN JAIKA  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("259","HIMS/04/18/0154","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:47:08","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","ETAH BILLY-JOEL AWANIDANG  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("260","HIMS/02/18/0155","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:47:35","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","NTSI PROMISE ABOH  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("261","HIMS/04/18/0156","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:47:56","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","AKEN JACKSON INDOHEQUWE  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("262","HIMS/04/18/0157","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:48:19","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","NGATCHA LEUTOU BRICE ANICET  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("263","HIMS/03/18/0158","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:48:37","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","SONGO WILLIAM AKUH  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("264","HIMS/02/18/0159","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:48:57","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","FUH BRUNO KENAH  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("265","HIMS/03/18/0160","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:49:19","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","AYUKBANGHA SHARON AGBORNA  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("266","HIMS/05/18/0161","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:49:46","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","AJIAKU ASONGU JUSTICE  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("267","HIMS/04/18/0162","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:50:13","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","YEGNONG CEDRIC GAETANG  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("268","HIMS/03/18/0163","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:50:35","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MATUKE ULRICH NDEME  ","24","INSURANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("269","HIMS/09/18/0164","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:50:56","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MBANGAH ERIC NJEI  ","24","SOFTWARE ENGINEERING AND COMPUTING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("270","HIMS/02/18/0165","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:51:38","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","KEVIN BERTRAND VERYEH  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("271","HIMS/02/18/0166","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:52:10","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","AGBOR AGNES EBANYUO  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("272","HIMS/02/18/0167","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:52:34","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","AKEBE GISELE ECHE  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("273","HIMS/04/18/0168","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:52:56","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","TEZOCK KELSOMN FOSOH  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("274","HIMS/06/18/0169","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:53:17","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","EHBEH BRANDON EJABI  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("275","HIMS/05/18/0171","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:54:26","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","TAMBU BRANDON EJABI  ","24","MARKETING"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("276","HIMS/02/18/0172","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:54:54","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","LORD BERNARD-STANLAKE LIKEVE MBONDE  ","24","BANKING AND FINANCE"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("277","HIMS/06/18/0173","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:55:20","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MARY LUCKY EDET  ","24","TRANSPORT AND LOGISTICS"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("278","HIMS/04/18/0174","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:55:41","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","FOSSUNG ELVIRA TATA  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("279","HIMS/04/18/0175","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:56:00","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","SIKOD MILTON CHEH  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("280","HIMS/04/16/0597","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:56:27","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","MOSAH GILLIAN NGWE  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("281","HIMS/O4/15/0401","","24-04-2019","30000","","04","2018/2019","1","24-04-2019 12:56:49","registration","1","30000","30000","","Super Admmin","24-04-2019","30000","0","LIWONJO ROSE EWOKOLE  ","24","MANAGEMENT"," 20000","CASH","","0","","0","","2500","5000","2500","200","HND","","","");
INSERT INTO daily VALUES("661","UBa/HIMS/01/18/0001","","10-07-2015","345000","","07","2018/2019","1","10-07-2015 6:17:06","fees","1","345000","345000","30000","Super Admmin","10-07-2015","345000","0","ASICK LOVETTE TAKANG  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("662","UBa/HIMS/01/18/0002","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:17:50","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","OFOR BELYSE NNAJA  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("663","UBa/HIMS/04/18/0003","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:18:16","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","SENYUY LWANGA KUVINYU  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("664","UBa/HIMS/02/18/0004","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:18:55","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","OJONG CYNTHIA NKONGHO  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("665","UBa/HIMS/01/18/0005","","10-07-2015","300000","","07","2018/2019","1","10-07-2015 6:19:31","fees","1","300000","300000","75000","Super Admmin","10-07-2015","300000","0","Ngome Berline Munge  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("666","UBa/HIMS/01/18/0006","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:20:42","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","Mulango Isanga Synthia  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("667","UBa/HIMS/04/18/0007","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:21:12","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","Mercesdes Tako Dorothy  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("668","UBa/HIMS/01/18/0008","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:21:49","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","MENDI BLANCH EKAN  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("669","UBa/HIMS/02/18/0009","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:22:27","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","ANABEL TUNG KANG  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("670","UBa/HIMS/01/18/0010","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:23:06","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","EKONJE YANICK EKELENGUE  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("671","UBa/HIMS/01/18/0011","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:23:33","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","FINJAP BERNICE  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("672","UBa/HIMS/01/18/0012","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:24:04","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","NGUNWI JESSE ASOBO  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("673","UBa/HIMS/05/18/0013","","10-07-2015","375000","","07","2018/2019","1","10-07-2015 6:24:51","fees","1","375000","375000","0","Super Admmin","10-07-2015","375000","0","MATTO TOUOYEM MAKUETE HARMELLE BLONDE  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("674","UBa/HIMS/02/18/0014","","10-07-2015","350000","","07","2018/2019","1","10-07-2015 6:25:19","fees","1","350000","350000","25000","Super Admmin","10-07-2015","350000","0","MOLLE HELLEN LOTTIN  ","10","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("675","HIMS/07/18/001","","10-07-2015","0","","07","2018/2019","1","10-07-2015 6:27:08","fees","1","0","0","30000","Super Admmin","10-07-2015","0","0","Abigail Lem Njofor  ","10","CASH"," ","CASH","","0","","0","","","","","200","HND","","","285000");
INSERT INTO daily VALUES("676","HIMS/01/18/0002","","10-07-2015","280000","","07","2018/2019","1","10-07-2015 6:27:43","fees","1","280000","280000","20000","Super Admmin","10-07-2015","280000","0","Andong Anabela Anwei  ","10","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("677","HIMS/05/18/0003","","10-07-2015","300000","","07","2018/2019","1","10-07-2015 6:28:46","fees","1","300000","300000","0","Super Admmin","10-07-2015","300000","0","Sharon Kemayou Minkong  ","10","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("678","HIMS/02/16/0002","","10-07-2015","300000","","07","2018/2019","1","10-07-2015 6:40:54","fees","1","300000","300000","0","Super Admmin","10-07-2015","300000","0","ESTHER EFFETI MOTULU      ","10","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("679","HIMS/04/16/0003","","21-08-2019","300000","","08","2018/2019","1","21-08-2019 9:53:40","fees","1","300000","300000","0","Super Admmin","21-08-2019","300000","0","BAH ETHEL NYOH      ","21","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("680","HIMS/02/16/0006","","21-08-2019","300000","","08","2018/2019","1","21-08-2019 9:54:18","fees","1","300000","300000","0","Super Admmin","21-08-2019","300000","0","KIVEN WINIFRED SENYUY      ","21","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("681","HIMS/05/18/0004","","05-09-2019","300000","","09","2018/2019","1","05-09-2019 21:54:50","fees","1","300000","300000","0","Super Admmin","05-09-2019","300000","0","Eyole Lydienne Njie Mojoko  ","05","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("682","HIMS/02/18/0005","","05-09-2019","280000","","09","2018/2019","1","05-09-2019 21:57:14","fees","1","280000","280000","20000","Super Admmin","05-09-2019","280000","0","Ato Tabi Collins  ","05","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("683","HIMS/04/18/0006","","05-09-2019","300000","","09","2018/2019","1","05-09-2019 21:59:50","fees","1","300000","300000","0","Super Admmin","05-09-2019","300000","0","Tchoumke Noel Tchoumke  ","05","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("684","HIMS/04/18/0007","","05-09-2019","300000","","09","2018/2019","1","05-09-2019 22:02:40","fees","1","300000","300000","0","Super Admmin","05-09-2019","300000","0","Mbongo Dimalla Jean Le Pretre  ","05","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("685","HIMS/02/18/0008","","05-09-2019","300000","","09","2018/2019","1","05-09-2019 22:04:10","fees","1","300000","300000","0","Super Admmin","05-09-2019","300000","0","Etombi Martha Likenya Matofe  ","05","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("686","HIMS/05/16/0009","","06-09-2019","310000","","09","2018/2019","1","06-09-2019 10:01:53","fees","1","310000","310000","-10000","Super Admmin","06-09-2019","310000","0","MBOCK ONGBOHINE ANNETTE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("687","HIMS/05/16/0015","","06-09-2019","277500","","09","2018/2019","1","06-09-2019 10:04:19","fees","1","277500","277500","22500","Super Admmin","06-09-2019","277500","0","ZAKARI MOHAMMED SALISU      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("688","HIMS/01/16/0016","","06-09-2019","272500","","09","2018/2019","1","06-09-2019 10:05:52","fees","1","272500","272500","27500","Super Admmin","06-09-2019","272500","0","BESONG-AYUK JNR DARRY MACMILLANO      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("689","HIMS/02/16/0018","","06-09-2019","129500","","09","2018/2019","1","06-09-2019 10:08:20","fees","1","129500","129500","20500","Super Admmin","06-09-2019","129500","0","NGEN SHERYL-KESH YUO      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","175000");
INSERT INTO daily VALUES("690","HIMS/02/16/0020","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:09:35","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","DIENGU CENTEGE ESAMBE  ","06","CASH"," ","CASH","","0","","0","","","","","300","HND","","","25000");
INSERT INTO daily VALUES("691","HIMS/04/16/0023","","06-09-2019","100000","","09","2018/2019","1","06-09-2019 10:14:51","fees","1","100000","100000","200000","Super Admmin","06-09-2019","100000","0","SYNORITA NDIGAP NGWELACK  ","06","CASH"," ","CASH","","0","","0","","","","","300","HND","","","15000");
INSERT INTO daily VALUES("692","HIMS/02/16/0027","","06-09-2019","290000","","09","2018/2019","1","06-09-2019 10:17:09","fees","1","290000","290000","10000","Super Admmin","06-09-2019","290000","0","NABAKWA VANESSA BEYOUNGE  ","06","CASH"," ","CASH","","0","","0","","","","","300","HND","","","25000");
INSERT INTO daily VALUES("693","HIMS/04/16/0028","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:18:10","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","CHUMU NCHA VERA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("694","HIMS/01/16/0034","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:19:01","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","INNAMDI JOHNSON NNAJI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("695","HIMS/04/16/0038","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:20:20","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","LAURA AYONG MANDE HANNAH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("696","HIMS/02/16/0042  ","","06-09-2019","225000","","09","2018/2019","1","06-09-2019 10:22:06","fees","1","225000","225000","75000","Super Admmin","06-09-2019","225000","0","NGWEFUNJI EILEAN HANGWE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("697","HIMS/03/16/0043","","06-09-2019","257500","","09","2018/2019","1","06-09-2019 10:24:45","fees","1","257500","257500","42500","Super Admmin","06-09-2019","257500","0","INONI GISSELE IYA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("698","HIMS/01/16/0044","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:25:31","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NJI THIERRY LEONEL EVAKISE LUMA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("699","HIMS/01/18/0009","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:26:36","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Alem Asongandem Victory Nganganu  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("700","HIMS/04/16/0047","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:26:54","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","GLORY NGWAH EGBAH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("701","HIMS/04/16/0048","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:28:33","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","CHE NELVISE NGONG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("702","HIMS/06/18/0010","","06-09-2019","150000","","09","2018/2019","1","06-09-2019 10:29:39","fees","1","150000","150000","25000","Super Admmin","06-09-2019","150000","0","Lemmah Nwana Stephanie  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","150000");
INSERT INTO daily VALUES("703","HIMS/02/16/0049","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:29:40","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NAYO MEYEMBI SHARON      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("704","HIMS/01/16/0052","","06-09-2019","177500","","09","2018/2019","1","06-09-2019 10:31:06","fees","1","177500","177500","122500","Super Admmin","06-09-2019","177500","0","NJI NAZEL NSAHLAR      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("705","HIMS/06/18/0011","","06-09-2019","150000","","09","2018/2019","1","06-09-2019 10:31:45","fees","1","150000","150000","25000","Super Admmin","06-09-2019","150000","0","Nwana Hellen Noel Nyianya  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","150000");
INSERT INTO daily VALUES("706","HIMS/02/18/0012","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 10:33:15","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","Njoke Emilia Efeti  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("707","HIMS/04/16/0053","","06-09-2019","282500","","09","2018/2019","1","06-09-2019 10:34:16","fees","1","282500","282500","17500","Super Admmin","06-09-2019","282500","0","MUABE NADESH NYUNGE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("708","HIMS/06/18/0013","","06-09-2019","0","","09","2018/2019","1","06-09-2019 10:35:02","fees","1","240000","240000","60000","Super Admmin","06-09-2019","240000","0","Kouam Gilles Loique  ","06","BANK"," ","BANK","","0","","240000","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("709","HIMS/04/16/0054","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:35:45","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","BOWIN CHARLOTTE YAMSE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("710","HIMS/02/18/0014","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:36:02","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Valery Mudikey Akuma  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("711","HIMS/01/16/0058","","06-09-2019","315000","","09","2018/2019","1","06-09-2019 10:37:17","fees","1","315000","315000","-15000","Super Admmin","06-09-2019","315000","0","CHIMBO ABIGAIL EKIE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("712","HIMS/06/18/0015","","06-09-2019","225000","","09","2018/2019","1","06-09-2019 10:38:00","fees","1","225000","225000","0","Super Admmin","06-09-2019","225000","0","Ngomba Elizabeth Likowo  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("713","HIMS/04/16/0063","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:38:59","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","SIKOUE NOUMBISSIE DAHINA VANELLE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("714","HIMS/05/18/0016","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:39:19","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Chu Boris Kaw  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("715","HIMS/04/16/0065","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:40:03","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","LINDA CHIGAEMEZU NWAOKEKE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("716","HIMS/03/18/0017","","06-09-2019","150000","","09","2018/2019","1","06-09-2019 10:40:40","fees","1","150000","150000","150000","Super Admmin","06-09-2019","150000","0","Nvenakeng Grace Nzemfeh  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("717","HIMS/05/16/0066","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:41:13","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NAHLELA LYDIA NUWELA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("718","HIMS/04/18/0018","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:43:25","fees","1","300000","300000","-25000","Super Admmin","06-09-2019","300000","0","Eposi Sylvie Luma  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("719","HIMS/04/16/0071","","06-09-2019","285000","","09","2018/2019","1","06-09-2019 10:43:31","fees","1","285000","285000","15000","Super Admmin","06-09-2019","285000","0","MANI KENYO DORIANE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("720","HIMS/05/18/0019","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 10:46:12","fees","1","250000","250000","40000","Super Admmin","06-09-2019","250000","0","Siekouewoue Tchamgoue Woksi  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("721","HIMS/01/16/0074","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 10:46:57","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","NKEPTCHEP ZANDA BRIAN JUNIOR      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("722","HIMS/02/18/0020","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:47:52","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Nkoukep Euphemia Nana  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("723","HIMS/03/16/0076","","06-09-2019","240000","","09","2018/2019","1","06-09-2019 10:48:48","fees","1","240000","240000","60000","Super Admmin","06-09-2019","240000","0","FRIDELLE EBENYE LUMA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("724","HIMS/04/18/0021","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:49:00","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Vanessia Kunki Anno  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("725","HIMS/01/16/0081","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:50:17","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ELIZ-STEPHANIE AGBOR ELAH    ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("726","HIMS/05/18/0022","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:50:19","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Olive Onyinyechi Onuoha  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("727","HIMS/05/18/0023","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:51:08","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Anyah Desmond Memba  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("728","HIMS/01/16/0082","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:52:12","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","KIENG GILDAS TABUFOR      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("729","HIMS/02/18/0024","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:52:19","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ngashu Junior Tiku  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("730","HIMS/02/16/0085","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 10:53:30","fees","1","250000","250000","25000","Super Admmin","06-09-2019","250000","0","AGBOR MERCY FAKONYUI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","50000");
INSERT INTO daily VALUES("731","HIMS/03/18/0025","","06-09-2019","100000","","09","2018/2019","1","06-09-2019 10:54:18","fees","1","100000","100000","200000","Super Admmin","06-09-2019","100000","0","Rex Mbua Nangoh Jr  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("732","HIMS/03/18/0026","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 10:55:44","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","Nemoh Don-elliot Nkongho  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("733","HIMS/05/16/0090","","06-09-2019","240000","","09","2018/2019","1","06-09-2019 10:55:54","fees","1","240000","240000","0","Super Admmin","06-09-2019","240000","0","OKAFOR CHUKA CHINEMELUM FRANK      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","75000");
INSERT INTO daily VALUES("734","HIMS/01/16/0091","","06-09-2019","227500","","09","2018/2019","1","06-09-2019 10:57:49","fees","1","227500","227500","72500","Super Admmin","06-09-2019","227500","0","PENTEWAH SIRRI MELANGE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("735","HIMS/04/18/0028","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 10:58:40","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","Anyah Jarvis Esaka-anyah  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("736","HIMS/05/16/0095","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:59:03","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ETUBE STECY NSALI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("737","HIMS/01/18/0027","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 10:59:51","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Manga Maurinett Tengu  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("738","HIMS/02/16/0100","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:00:28","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","TATASON SHANICE MAYAH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("739","HIMS/07/18/0029","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:03:09","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Dorachael Nkenganyi  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("740","HIMS/09/18/0030","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:03:57","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ngomba Steve Nyadjroh  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("741","HIMS/02/18/0031","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:04:36","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Bih Bridget Tilong  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("742","HIMS/04/18/0032","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 11:06:01","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","Glory Esimo Mukete  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("743","HIMS/02/18/0033","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:09:50","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Elizabeth Saele Lyonga  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("744","HIMS/04/18/0034","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:11:09","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Andin Therese Moila  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("745","HIMS/06/18/0035","","06-09-2019","270000","","09","2018/2019","1","06-09-2019 11:12:43","fees","1","270000","270000","30000","Super Admmin","06-09-2019","270000","0","Lauretta Mbel Chia  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("746","HIMS/01/18/0036","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:13:36","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Nchang Chiesea Mbom  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("747","HIMS/01/18/0037","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:14:39","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Naoussi Nkamko Juste Philip  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("748","HIMS/06/18/0038","","06-09-2019","100000","","09","2018/2019","1","06-09-2019 11:15:35","fees","1","100000","100000","125000","Super Admmin","06-09-2019","100000","0","Clive Watany Ewunkem  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("749","HIMS/06/18/0039","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 11:16:30","fees","1","250000","250000","-25000","Super Admmin","06-09-2019","250000","0","Joana Joffi Ngalle  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("750","HIMS/02/18/0040","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:17:45","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Tabi Laurabeth Kate Nchenge  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("751","HIMS/02/18/0041","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:18:26","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Nolinga Shellbavine Saile  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("752","HIMS/01/18/0042","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:19:43","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Yimpi Doline De Ndiounh  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("753","HIMS/05/18/0043","","06-09-2019","195000","","09","2018/2019","1","06-09-2019 11:21:27","fees","1","195000","195000","105000","Super Admmin","06-09-2019","195000","0","Atitia Esima Adams  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("754","HIMS/07/18/0044","","06-09-2019","215000","","09","2018/2019","1","06-09-2019 11:25:10","fees","1","215000","215000","0","Super Admmin","06-09-2019","215000","0","Rose Nwache Juru  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("755","HIMS/04/16/0106","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 11:25:18","fees","1","200000","200000","-1035000","Super Admmin","06-09-2019","200000","0","NFOR ISABELLA MANKE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","1150000");
INSERT INTO daily VALUES("756","HIMS/01/18/0045","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:25:59","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Atemkeng Forbin Jean  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("757","HIMS/03/16/0109","","06-09-2019","290000","","09","2018/2019","1","06-09-2019 11:26:24","fees","1","290000","290000","10000","Super Admmin","06-09-2019","290000","0","NGALE ROSE MARY EFETI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("758","HIMS/03/16/0118","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:31:17","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","CECILIA MOJOKO LIWUNJO      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("759","HIMS/04/18/0046","","06-09-2019","185000","","09","2018/2019","1","06-09-2019 11:32:53","fees","1","185000","185000","115000","Super Admmin","06-09-2019","185000","0","Funwie Haress Tanwie  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("760","HIMS/06/18/0047","","06-09-2019","260000","","09","2018/2019","1","06-09-2019 11:34:58","fees","1","260000","260000","40000","Super Admmin","06-09-2019","260000","0","Etah Oneke Ako Ayuk  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("761","HIMS/01/16/0120","","06-09-2019","10000","","09","2018/2019","1","06-09-2019 11:35:23","fees","1","10000","10000","15000","Super Admmin","06-09-2019","10000","0","ANDONG MARJORIE AKAGI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","300000");
INSERT INTO daily VALUES("762","HIMS/02/18/0048","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:36:35","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Donal Tembu Chi  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("763","HIMS/07/18/0049","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:37:50","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Enow Francisca Orock  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("764","HIMS/01/16/0121","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 11:38:15","fees","1","200000","200000","25000","Super Admmin","06-09-2019","200000","0","TAMBA FRITZ LEKUKA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("765","HIMS/06/18/0050","","06-09-2019","280000","","09","2018/2019","1","06-09-2019 11:39:25","fees","1","280000","280000","20000","Super Admmin","06-09-2019","280000","0","Arrey Marius Manyor  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("766","HIMS/04/16/0122","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:39:37","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MOSIMA KEVIN FOBIA FONKA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("767","HIMS/04/16/0127","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 11:41:10","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","NGUBA WALVISE SONA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("768","HIMS/06/18/0051","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:41:26","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Sandra Nabila Tita Scott  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("769","HIMS/05/16/0132","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:42:10","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","TANGWE STEPHANI MIYANG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("770","HIMS/01/16/0135","","06-09-2019","285000","","09","2018/2019","1","06-09-2019 11:43:16","fees","1","285000","285000","15000","Super Admmin","06-09-2019","285000","0","LEKUNGA BRONHILDA YEBILA  ","06","CASH"," ","CASH","","0","","0","","","","","300","HND","","","25000");
INSERT INTO daily VALUES("771","HIMS/09/18/0053","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:44:04","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Kaka Martin Mbongo  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("772","HIMS/05/18/0052","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:44:54","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Nouyadjam Walleu Mimi Fabiola  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("773","HIMS/04/16/0138","","06-09-2019","299500","","09","2018/2019","1","06-09-2019 11:45:10","fees","1","299500","299500","500","Super Admmin","06-09-2019","299500","0","ANDO MACZIAN ANGYIE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("774","HIMS/05/18/0054","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:46:16","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Melene Meangu Ngia  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("775","HIMS/02/18/0055","","06-09-2019","150000","","09","2018/2019","1","06-09-2019 11:47:36","fees","1","150000","150000","150000","Super Admmin","06-09-2019","150000","0","Cynthia Epeti  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("776","HIMS/01/16/0144","","06-09-2019","201000","","09","2018/2019","1","06-09-2019 11:48:20","fees","1","201000","201000","99000","Super Admmin","06-09-2019","201000","0","ENGEMISE STEPHEN NGEKE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("777","HIMS/09/18/0056","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:48:35","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ngu Edwin Efenjeli  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("778","HIMS/04/16/0145","","06-09-2019","217500","","09","2018/2019","1","06-09-2019 11:49:34","fees","1","217500","217500","82500","Super Admmin","06-09-2019","217500","0","NGUMYI SYLVIE NCHANWOH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("779","HIMS/05/18/0057","","06-09-2019","230000","","09","2018/2019","1","06-09-2019 11:50:12","fees","1","230000","230000","70000","Super Admmin","06-09-2019","230000","0","Sharon Ngonui Mabought  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("780","HIMS/06/18/0058","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 11:51:07","fees","1","250000","250000","-25000","Super Admmin","06-09-2019","250000","0","Ikome Fedy Ngomba  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("781","HIMS/01/16/0147","","06-09-2019","286500","","09","2018/2019","1","06-09-2019 11:51:26","fees","1","286500","286500","-11500","Super Admmin","06-09-2019","286500","0","ENOW CECILIA NCHUNG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","50000");
INSERT INTO daily VALUES("782","HIMS/03/18/0059","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:51:54","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Olga Marie-noel Yalue  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("783","HIMS/05/16/0151","","06-09-2019","100000","","09","2018/2019","1","06-09-2019 11:52:41","fees","1","100000","100000","200000","Super Admmin","06-09-2019","100000","0","METUGE POPINA NKONGE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("784","HIMS/06/18/0060","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:52:42","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ashu Collins Itah  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("785","HIMS/01/18/0061","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 11:53:38","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","Ndangoh Beltine Azock  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("786","HIMS/04/16/0155","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:53:51","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ETA OBI OKOK      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("787","HIMS/05/16/0159","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 11:54:51","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","KENFACK DJOUFACK DORANTINE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("788","HIMS/02/16/0165","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:56:20","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MUNJI MATILDA AKWI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("789","HIMS/04/18/0062","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 11:57:10","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Finjap Mbia Jacobson Junior  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("790","HIMS/06/18/0063","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 11:58:42","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","Pembe Stephanie Orume  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("791","HIMS/01/18/0064","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:00:33","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Mbu Husberto Mbu  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("792","HIMS/01/16/0175","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 12:02:36","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","ANDY WOSE MBOME NYOKI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("793","HIMS/06/18/0065","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:02:40","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ngwelavanessa Manken  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("794","HIMS/02/18/0066","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 12:03:30","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","Enanga Nanyongo Akwanga  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("795","HIMS/04/16/0176","","06-09-2019","280000","","09","2018/2019","1","06-09-2019 12:03:49","fees","1","280000","280000","20000","Super Admmin","06-09-2019","280000","0","NGWA SABASTIN NGWA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("796","HIMS/02/18/0067","","06-09-2019","185000","","09","2018/2019","1","06-09-2019 12:04:33","fees","1","185000","185000","115000","Super Admmin","06-09-2019","185000","0","Munyah Paul  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("797","HIMS/04/18/0068","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:05:09","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Teto Ntahi Michelle Joseyard  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("798","HIMS/03/16/0178","","06-09-2019","305000","","09","2018/2019","1","06-09-2019 12:05:42","fees","1","305000","305000","-5000","Super Admmin","06-09-2019","305000","0","AKOTARH MBUMANYOH GEORGE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("799","HIMS/05/16/0179","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:07:11","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","FETEH BRIGHT PECHU LEH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("800","HIMS/06/18/0069","","06-09-2019","0","","09","2018/2019","1","06-09-2019 12:07:27","fees","1","0","0","165000","Super Admmin","06-09-2019","0","0","Tembu Rita Bih  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","160000");
INSERT INTO daily VALUES("801","HIMS/05/16/0181","","06-09-2019","202500","","09","2018/2019","1","06-09-2019 12:08:40","fees","1","202500","202500","-2500","Super Admmin","06-09-2019","202500","0","KUM CHANTAL NSEN      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","115000");
INSERT INTO daily VALUES("802","HIMS/02/18/0070","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 12:09:02","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","Ndalegh Quinette Bih  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("803","HIMS/02/16/0186","","06-09-2019","175000","","09","2018/2019","1","06-09-2019 12:10:25","fees","1","175000","175000","125000","Super Admmin","06-09-2019","175000","0","VALENTINE CHIDI OSUJI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("804","HIMS/02/18/0071","","06-09-2019","135000","","09","2018/2019","1","06-09-2019 12:10:28","fees","1","135000","135000","165000","Super Admmin","06-09-2019","135000","0","Yufenyuy Nancy Nanueh  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("805","HIMS/01/16/0189","","06-09-2019","310000","","09","2018/2019","1","06-09-2019 12:11:36","fees","1","310000","310000","-10000","Super Admmin","06-09-2019","310000","0","JONGTAKUM LUDRICK JONG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("806","HIMS/02/18/0072","","06-09-2019","245000","","09","2018/2019","1","06-09-2019 12:12:13","fees","1","245000","245000","55000","Super Admmin","06-09-2019","245000","0","Bebongchou Robert Brighten Ajeuko  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("807","HIMS/02/16/0190","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:13:00","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MAKIA NABOLA NKWANYONG BETOUA NGO      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("808","HIMS/06/18/0073","","06-09-2019","0","","09","2018/2019","1","06-09-2019 12:13:43","fees","1","0","0","100000","Super Admmin","06-09-2019","0","0","Tchuimegni Christel Sandry  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","225000");
INSERT INTO daily VALUES("809","HIMS/01/18/0074","","06-09-2019","230000","","09","2018/2019","1","06-09-2019 12:14:45","fees","1","230000","230000","70000","Super Admmin","06-09-2019","230000","0","Tabenteh Hilris Benem  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("810","HIMS/04/16/0193","","06-09-2019","142500","","09","2018/2019","1","06-09-2019 12:14:53","fees","1","142500","142500","157500","Super Admmin","06-09-2019","142500","0","EMAMBU REACHEL      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("811","HIMS/01/16/0199","","06-09-2019","275000","","09","2018/2019","1","06-09-2019 12:16:35","fees","1","275000","275000","25000","Super Admmin","06-09-2019","275000","0","NJIE NADESH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("812","HIMS/03/16/0200","","06-09-2019","240000","","09","2018/2019","1","06-09-2019 12:17:34","fees","1","240000","240000","60000","Super Admmin","06-09-2019","240000","0","ATANGA BONIFACE TILONG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("813","HIMS/09/18/0075","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:17:45","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Luma Wuma Junior  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("814","HIMS/03/18/0076","","06-09-2019","100000","","09","2018/2019","1","06-09-2019 12:19:08","fees","1","100000","100000","0","Super Admmin","06-09-2019","100000","0","Saningong Yanick Ngang  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","240000");
INSERT INTO daily VALUES("815","HIMS/05/18/0077","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 12:20:33","fees","1","200000","200000","0","Super Admmin","06-09-2019","200000","0","Touomkam Stephanie Taffor  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","115000");
INSERT INTO daily VALUES("816","HIMS/06/18/0078","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:21:15","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Makolo Sarah Ebenye  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("817","HIMS/02/18/0079","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:22:38","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ngomende Agnes Monjhu  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("818","HIMS/01/18/0080","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:23:45","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Bobga Wilfred Doh  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("819","HIMS/04/18/0081","","06-09-2019","165000","","09","2018/2019","1","06-09-2019 12:25:00","fees","1","165000","165000","0","Super Admmin","06-09-2019","165000","0","Azeh Solange Ndikpa  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","150000");
INSERT INTO daily VALUES("820","HIMS/05/18/0082","","06-09-2019","165000","","09","2018/2019","1","06-09-2019 12:26:29","fees","1","165000","165000","0","Super Admmin","06-09-2019","165000","0","Mbahchan Sonita  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","150000");
INSERT INTO daily VALUES("821","HIMS/05/18/0083","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:27:29","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Kelly Piefondia Wansi  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("822","HIMS/02/18/0084","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:28:52","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Nchonganyi Nerisah Nkemnji  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("823","HIMS/01/18/0085","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 12:29:47","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","Tebid Dora Aneng  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("824","HIMS/05/18/0086","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:31:24","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ofor Klein Ofor  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("825","HIMS/01/18/0087","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:32:01","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ralitsa Mukete Elomba  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("826","HIMS/04/18/0088","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:32:58","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Zirimba Noella Yafeh  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("827","HIMS/04/18/0089","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 12:34:00","fees","1","200000","200000","0","Super Admmin","06-09-2019","200000","0","Nahbang Ida Ndansi  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","115000");
INSERT INTO daily VALUES("828","HIMS/06/18/0090","","06-09-2019","150000","","09","2018/2019","1","06-09-2019 12:35:13","fees","1","150000","150000","150000","Super Admmin","06-09-2019","150000","0","Alfred Mbonde Mokake Affy  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("829","HIMS/06/18/0091","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:38:34","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Mbengu Prisca -desthelle Nkehmbeng  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("830","HIMS/03/18/0092","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:39:52","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Mbengu Lea-violet Njukang  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("831","HIMS/04/18/0093","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:40:41","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Jato Bennett Nganji  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("832","HIMS/02/18/0094","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:41:16","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Acha Marlyse Negu  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("833","HIMS/04/18/0095","","06-09-2019","0","","09","2018/2019","1","06-09-2019 12:43:10","fees","1","0","0","0","Super Admmin","06-09-2019","0","0","Fuli Fubong Jean Jacques  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","315000");
INSERT INTO daily VALUES("834","HIMS/01/18/0096","","06-09-2019","0","","09","2018/2019","1","06-09-2019 12:44:34","fees","1","0","0","0","Super Admmin","06-09-2019","0","0","Arrey Brunhilda Bessem  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","325000");
INSERT INTO daily VALUES("835","HIMS/05/18/0097","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:45:24","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Taku Eugene Etongke  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("836","HIMS/09/18/0098","","06-09-2019","20000","","09","2018/2019","1","06-09-2019 12:46:14","fees","1","20000","20000","280000","Super Admmin","06-09-2019","20000","0","Sabila Rojer Sama  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("837","HIMS/05/18/0099","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:47:45","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Oscar Ngale Njie  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("838","HIMS/02/18/0101","","06-09-2019","217000","","09","2018/2019","1","06-09-2019 12:52:33","fees","1","217000","217000","83000","Super Admmin","06-09-2019","217000","0","Janice Chiwendo Modestus  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("839","HIMS/06/18/0100","","06-09-2019","150000","","09","2018/2019","1","06-09-2019 12:53:13","fees","1","150000","150000","150000","Super Admmin","06-09-2019","150000","0","Ajong Ako Laura Forjia  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("840","HIMS/11/18/0102","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 12:54:25","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","Abanga Elizabeth Forbin  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("841","HIMS/06/18/0103","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:55:02","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Kolle Sylvie Ndipakem  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("842","HIMS/06/18/0104","","06-09-2019","0","","09","2018/2019","1","06-09-2019 12:55:45","fees","1","0","0","300000","Super Admmin","06-09-2019","0","0","Shadrack Lyonga Nganje  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("843","HIMS/04/18/0105","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:56:31","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Enoh Cecilia Nso  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("844","HIMS/01/18/0106","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:57:11","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Kiki Dwell Nfor  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("845","HIMS/06/18/0107","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:58:39","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ngu Merriam Emenkeng  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("846","HIMS/04/18/0108","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 12:59:19","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Brandon Ndonga Agbori  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("847","HIMS/04/18/0109","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:00:15","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Nang Nadeen Bih  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("848","HIMS/04/18/0110","","06-09-2019","65000","","09","2018/2019","1","06-09-2019 13:01:42","fees","1","65000","65000","100000","Super Admmin","06-09-2019","65000","0","Ekuke Charles Chaiye  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","150000");
INSERT INTO daily VALUES("849","HIMS/02/16/0202","","06-09-2019","267500","","09","2018/2019","1","06-09-2019 13:04:31","fees","1","267500","267500","32500","Super Admmin","06-09-2019","267500","0","STEPHANIE KINDE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("850","HIMS/05/16/0210","","06-09-2019","290000","","09","2018/2019","1","06-09-2019 13:05:31","fees","1","290000","290000","10000","Super Admmin","06-09-2019","290000","0","NGUIHI TCHINDA ARNAUD      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("851","HIMS/04/18/0111","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:06:29","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ndedi Benga Salem Joelle  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("852","HIMS/04/16/0214","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 13:06:37","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","BRENDA MEJANE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("853","HIMS/06/18/0112","","06-09-2019","260000","","09","2018/2019","1","06-09-2019 13:07:23","fees","1","260000","260000","40000","Super Admmin","06-09-2019","260000","0","Iye Christina Etongwe  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("854","HIMS/01/16/0215","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:07:38","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NGOMELEU RYMA CLAUDIA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("855","HIMS/02/18/0113","","06-09-2019","270000","","09","2018/2019","1","06-09-2019 13:08:10","fees","1","270000","270000","30000","Super Admmin","06-09-2019","270000","0","Yedkuna Sandrine Foncham  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("856","HIMS/04/16/0216  ","","06-09-2019","215000","","09","2018/2019","1","06-09-2019 13:08:51","fees","1","215000","215000","85000","Super Admmin","06-09-2019","215000","0","NZELLE GENEVIVE EDONG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("857","HIMS/06/18/0114","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:09:01","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","Ngongho Divine Gwanyetula  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("858","HIMS/03/18/0115","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:09:49","fees","1","300000","300000","15000","Super Admmin","06-09-2019","300000","0","Seyrione Njele Mandou  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("859","HIMS/02/16/0218","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 13:09:59","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","ENOW EBOT JACKY ARRAH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("860","HIMS/04/16/0219","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:11:03","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NDINGI MBENG ATEM MARIAM      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("861","HIMS/01/18/0116","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:11:48","fees","1","300000","300000","-15000","Super Admmin","06-09-2019","300000","0","Bih Ruth Ndanga  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("862","HIMS/01/16/0221","","06-09-2019","320000","","09","2018/2019","1","06-09-2019 13:12:05","fees","1","320000","320000","-20000","Super Admmin","06-09-2019","320000","0","TAMANJONG VERONIQUE NGELA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("863","HIMS/04/18/0117","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 13:13:00","fees","1","200000","200000","15000","Super Admmin","06-09-2019","200000","0","Wesley Wolfgang Miller Beckley  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("864","HIMS/02/16/0225","","06-09-2019","110000","","09","2018/2019","1","06-09-2019 13:13:15","fees","1","110000","110000","190000","Super Admmin","06-09-2019","110000","0","MBU PETER MBU-BESSEM      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("865","HIMS/05/18/0118","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:13:50","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ACHAH EMMANUELLA AKURI  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("866","HIMS/05/16/0231","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:14:30","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ESAPA LINDA FESE YOWEH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("867","HIMS/04/18/0120","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:15:20","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","IBRAHIM MOHAMAN  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("868","HIMS/01/16/0234","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:15:41","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","TAMBONGBEYANG KELLY EYONG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("869","HIMS/06/18/0119","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 13:16:02","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","ASONGAFAC JULIUS  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("870","HIMS/04/16/0235","","06-09-2019","180000","","09","2018/2019","1","06-09-2019 13:16:58","fees","1","180000","180000","120000","Super Admmin","06-09-2019","180000","0","KEMTA PEKAHEU SONIA DIANE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("871","HIMS/09/18/0121","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:18:00","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","EMILE NDIP-ARRAH TAKU ABE JUNIOR  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("872","HIMS/01/16/0238","","06-09-2019","302500","","09","2018/2019","1","06-09-2019 13:18:19","fees","1","302500","302500","-2500","Super Admmin","06-09-2019","302500","0","BENG JOSEPH ZOH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("873","HIMS/02/16/0239","","06-09-2019","115000","","09","2018/2019","1","06-09-2019 13:19:36","fees","1","115000","115000","185000","Super Admmin","06-09-2019","115000","0","ASOBOTAMBA RUTH NGUM      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("874","HIMS/04/16/0241","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:20:34","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","KUM LALITA EKEI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("875","HIMS/06/18/0122","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 13:20:43","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","NNAM TALOM ANGEL  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("876","HIMS/02/16/0244","","06-09-2019","235000","","09","2018/2019","1","06-09-2019 13:21:51","fees","1","235000","235000","65000","Super Admmin","06-09-2019","235000","0","TAKOH CARINE EDOH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("877","HIMS/04/18/0123","","06-09-2019","70000","","09","2018/2019","1","06-09-2019 13:24:21","fees","1","70000","70000","145000","Super Admmin","06-09-2019","70000","0","DANIEL ELONGO MOMBA  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("878","HIMS/02/16/0246","","06-09-2019","287500","","09","2018/2019","1","06-09-2019 13:24:38","fees","1","287500","287500","12500","Super Admmin","06-09-2019","287500","0","NDENGOUE THERESIA MBAH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("879","HIMS/06/18/0124","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:25:23","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NDIP JACKSON BESONG  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("880","HIMS/02/16/0252","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:25:57","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ENOWMANYO ABEY      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("881","HIMS/09/18/0125","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:26:36","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","GANG DERICK  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("882","HIMS/04/16/0257","","06-09-2019","302500","","09","2018/2019","1","06-09-2019 13:27:03","fees","1","302500","302500","-2500","Super Admmin","06-09-2019","302500","0","TIMBU DESMOND AKWAYI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("883","HIMS/03/18/0126","","06-09-2019","240000","","09","2018/2019","1","06-09-2019 13:28:38","fees","1","240000","240000","0","Super Admmin","06-09-2019","240000","0","FUAMBU JEFFREYS TOMBU  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("884","HIMS/05/16/0260","","06-09-2019","299500","","09","2018/2019","1","06-09-2019 13:28:49","fees","1","299500","299500","500","Super Admmin","06-09-2019","299500","0","BONIFACE ELAD FONKA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("885","HIMS/04/18/0127","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:29:22","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MOKOM LOUIS NDOH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("886","HIMS/02/16/0262","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:29:38","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NKONGHO MONICA TABOT      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("887","HIMS/04/16/0264","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:30:37","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NGOSONG LOUIS ATECHONG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("888","HIMS/01/16/0267","","06-09-2019","257500","","09","2018/2019","1","06-09-2019 13:32:05","fees","1","257500","257500","42500","Super Admmin","06-09-2019","257500","0","ENANGA WHITNEY MWAKA LYONGA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("889","HIMS/02/16/0268","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:33:14","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","BAH RAISSA BIH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("890","HIMS/05/16/0270","","06-09-2019","270000","","09","2018/2019","1","06-09-2019 13:34:57","fees","1","270000","270000","30000","Super Admmin","06-09-2019","270000","0","ANKO GWENDOLINE OGAH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("891","HIMS/01/18/0128","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 13:36:10","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","GEH JUDITH AKE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("892","HIMS/06/18/0129","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:36:49","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ENYOE GENNIEVE MAISAH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("893","HIMS/02/16/0272","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:36:53","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MBANGWEI CHARLOTTE TEGWI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("894","HIMS/09/18/0130","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:37:32","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","EPOLLE HILDA LAURA NJIKANG  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("895","HIMS/03/16/0277","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:38:22","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NGNOYUMKAPTUE ORNELLA LAURE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("896","HIMS/06/18/0131","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:39:20","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","EKOUMBO EKITE BLAIRIO  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("897","HIMS/02/16/0281","","06-09-2019","320000","","09","2018/2019","1","06-09-2019 13:39:36","fees","1","320000","320000","-20000","Super Admmin","06-09-2019","320000","0","PERRY NDANDO NTUI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("898","HIMS/04/18/0132","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:40:17","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MARY FRANCIS OLABINJO  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("899","HIMS/04/16/0282","","06-09-2019","297500","","09","2018/2019","1","06-09-2019 13:40:53","fees","1","297500","297500","2500","Super Admmin","06-09-2019","297500","0","KIMO KIDUNGRI VERYEH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("900","HIMS/09/18/0133","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:41:11","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","CHO DILAN AZINWI CHE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("901","HIMS/01/18/0134","","06-09-2019","030000","","09","2018/2019","1","06-09-2019 13:41:42","fees","1","030000","030000","270000","Super Admmin","06-09-2019","030000","0","EWULEN BRANDON-VIC MONGOH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("902","HIMS/01/16/0284","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:41:55","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","JUNIOR NELSON LUMA TEGHA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("903","HIMS/02/18/0135","","06-09-2019","290000","","09","2018/2019","1","06-09-2019 13:43:00","fees","1","290000","290000","10000","Super Admmin","06-09-2019","290000","0","NEBA NDONUI JUNIOR  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("904","HIMS/05/16/0289","","06-09-2019","260000","","09","2018/2019","1","06-09-2019 13:43:06","fees","1","260000","260000","40000","Super Admmin","06-09-2019","260000","0","NDIEFI AROLE FOKOUE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("905","HIMS/06/18/0136","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:43:58","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","AWANTOH NEVILLE MOLINGA  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("906","HIMS/01/16/0290","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:44:05","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","BUA MANDO MABEA CHARITY      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("907","HIMS/01/16/0292","","06-09-2019","237500","","09","2018/2019","1","06-09-2019 13:45:02","fees","1","237500","237500","62500","Super Admmin","06-09-2019","237500","0","WENONG NELSON TIKU      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("908","HIMS/04/16/0293","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 13:45:59","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","YVONNE MUGHA YUYOP      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("909","HIMS/06/18/0137","","06-09-2019","275000","","09","2018/2019","1","06-09-2019 13:46:44","fees","1","275000","275000","25000","Super Admmin","06-09-2019","275000","0","KUTA NJINDA DANIEL  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("910","HIMS/01/16/0294","","06-09-2019","320000","","09","2018/2019","1","06-09-2019 13:46:57","fees","1","320000","320000","-20000","Super Admmin","06-09-2019","320000","0","SEN ROTA EKWEN      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("911","HIMS/09/18/0138","","06-09-2019","150000","","09","2018/2019","1","06-09-2019 13:49:21","fees","1","150000","150000","150000","Super Admmin","06-09-2019","150000","0","BRADLEY DAVID NGEHSONG  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("912","HIMS/04/18/0139","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 13:50:19","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","MALLE VIVIAN BOTI  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("913","HIMS/02/18/0140","","06-09-2019","295000","","09","2018/2019","1","06-09-2019 13:51:22","fees","1","295000","295000","5000","Super Admmin","06-09-2019","295000","0","JOHN ADEYEMI PRAISE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("914","HIMS/01/18/0141","","06-09-2019","243000","","09","2018/2019","1","06-09-2019 13:55:27","fees","1","243000","243000","57000","Super Admmin","06-09-2019","243000","0","AMEI FAITH MBANGWI  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("915","HIMS/07/18/0142","","06-09-2019","0","","09","2018/2019","1","06-09-2019 13:56:38","fees","1","0","0","15000","Super Admmin","06-09-2019","0","0","MOIWO DORIS TANYI  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","300000");
INSERT INTO daily VALUES("916","HIMS/01/18/0144","","06-09-2019","290000","","09","2018/2019","1","06-09-2019 14:06:54","fees","1","290000","290000","10000","Super Admmin","06-09-2019","290000","0","AKONGNWI LESLEY TUH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("917","HIMS/09/18/0143","","06-09-2019","0","","09","2018/2019","1","06-09-2019 14:07:41","fees","1","0","0","340000","Super Admmin","06-09-2019","0","0","GHANDE DESMOND  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","0");
INSERT INTO daily VALUES("918","HIMS/06/18/0145","","06-09-2019","50000","","09","2018/2019","1","06-09-2019 14:08:38","fees","1","50000","50000","250000","Super Admmin","06-09-2019","50000","0","EWANG PRINCESS MALIAKA MOROMBI  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("919","HIMS/04/18/0146","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 14:10:42","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","OTTIA VERON OFON  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("920","HIMS/03/18/0147","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 14:12:17","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","MARIE ANNE MBI ASONGWE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("921","HIMS/01/18/0148","","06-09-2019","280000","","09","2018/2019","1","06-09-2019 14:13:30","fees","1","280000","280000","20000","Super Admmin","06-09-2019","280000","0","TANGWO DELPHINE NEME  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("922","HIMS/05/18/0149","","06-09-2019","285000","","09","2018/2019","1","06-09-2019 14:14:38","fees","1","285000","285000","15000","Super Admmin","06-09-2019","285000","0","ORO MICHAEL MESEMBE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("923","HIMS/02/18/0151","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 14:18:22","fees","1","300000","300000","-15000","Super Admmin","06-09-2019","300000","0","MEMU COLLINS SALACK  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("924","HIMS/02/18/0150","","06-09-2019","270000","","09","2018/2019","1","06-09-2019 14:19:18","fees","1","270000","270000","30000","Super Admmin","06-09-2019","270000","0","NCHINDA CHELSEY KETSEM  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("925","HIMS/05/18/0152","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 14:21:28","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","FORSUH FAITHFUL NGELOH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("926","HIMS/06/18/0153","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 14:22:55","fees","1","200000","200000","0","Super Admmin","06-09-2019","200000","0","LUKONG KAREEN JAIKA  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","125000");
INSERT INTO daily VALUES("927","HIMS/04/18/0154","","06-09-2019","14500","","09","2018/2019","1","06-09-2019 14:24:06","fees","1","14500","14500","285500","Super Admmin","06-09-2019","14500","0","ETAH BILLY-JOEL AWANIDANG  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("928","HIMS/02/18/0155","","06-09-2019","160000","","09","2018/2019","1","06-09-2019 14:25:03","fees","1","160000","160000","140000","Super Admmin","06-09-2019","160000","0","NTSI PROMISE ABOH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("929","HIMS/04/18/0156","","06-09-2019","40000","","09","2018/2019","1","06-09-2019 14:26:10","fees","1","40000","40000","260000","Super Admmin","06-09-2019","40000","0","AKEN JACKSON INDOHEQUWE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("930","HIMS/04/18/0157","","06-09-2019","40000","","09","2018/2019","1","06-09-2019 14:27:05","fees","1","40000","40000","260000","Super Admmin","06-09-2019","40000","0","NGATCHA LEUTOU BRICE ANICET  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("931","HIMS/03/18/0158","","06-09-2019","250000","","09","2018/2019","1","06-09-2019 14:28:03","fees","1","250000","250000","50000","Super Admmin","06-09-2019","250000","0","SONGO WILLIAM AKUH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("932","HIMS/02/18/0159","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 14:28:39","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","FUH BRUNO KENAH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("933","HIMS/03/18/0160","","06-09-2019","70000","","09","2018/2019","1","06-09-2019 14:29:53","fees","1","70000","70000","230000","Super Admmin","06-09-2019","70000","0","AYUKBANGHA SHARON AGBORNA  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("934","HIMS/05/18/0161","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 14:53:51","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","AJIAKU ASONGU JUSTICE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("935","HIMS/04/18/0162","","06-09-2019","100000","","09","2018/2019","1","06-09-2019 14:55:00","fees","1","100000","100000","200000","Super Admmin","06-09-2019","100000","0","YEGNONG CEDRIC GAETANG  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("936","HIMS/03/18/0163","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 14:55:44","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MATUKE ULRICH NDEME  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("937","HIMS/09/18/0164","","06-09-2019","80000","","09","2018/2019","1","06-09-2019 14:56:43","fees","1","80000","80000","220000","Super Admmin","06-09-2019","80000","0","MBANGAH ERIC NJEI  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("938","HIMS/02/18/0165","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 14:58:23","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","KEVIN BERTRAND VERYEH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("939","HIMS/02/18/0166","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:00:59","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","AGBOR AGNES EBANYUO  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("940","HIMS/02/18/0167","","06-09-2019","140000","","09","2018/2019","1","06-09-2019 15:04:12","fees","1","140000","140000","160000","Super Admmin","06-09-2019","140000","0","AKEBE GISELE ECHE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("941","HIMS/04/18/0168","","06-09-2019","100000","","09","2018/2019","1","06-09-2019 15:04:58","fees","1","100000","100000","213500","Super Admmin","06-09-2019","100000","0","TEZOCK KELSOMN FOSOH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","1500");
INSERT INTO daily VALUES("942","HIMS/06/18/0169","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:06:53","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","EHBEH BRANDON EJABI  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("943","HIMS/01/18/0170","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:07:46","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","TAMBE DOVIS ARREY-NJOCK  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("944","HIMS/04/16/0298","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:09:36","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","FALE NJEH BRUNHILDA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("945","HIMS/05/16/0299","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:10:32","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","EWI LOVELINE MBI      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("946","HIMS/03/16/0300","","06-09-2019","275000","","09","2018/2019","1","06-09-2019 15:12:33","fees","1","275000","275000","25000","Super Admmin","06-09-2019","275000","0","DORA MEANGU MONYONGO EWOKE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("947","HIMS/02/18/0172","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:12:48","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","LORD BERNARD-STANLAKE LIKEVE MBONDE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","25000");
INSERT INTO daily VALUES("948","HIMS/06/18/0173","","06-09-2019","155000","","09","2018/2019","1","06-09-2019 15:13:25","fees","1","155000","155000","70000","Super Admmin","06-09-2019","155000","0","MARY LUCKY EDET  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("949","HIMS/03/16/0301","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:13:30","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MARRIVONNE ESIBA NGOSSO      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("950","HIMS/02/16/0302","","06-09-2019","0","","09","2018/2019","1","06-09-2019 15:14:52","fees","1","0","0","81250","Super Admmin","06-09-2019","0","0","SAM NDIVE MOLUA MOTUTU      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","243750");
INSERT INTO daily VALUES("951","HIMS/04/18/0174","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 15:14:59","fees","1","200000","200000","75000","Super Admmin","06-09-2019","200000","0","FOSSUNG ELVIRA TATA  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","40000");
INSERT INTO daily VALUES("952","HIMS/04/18/0175","","06-09-2019","215000","","09","2018/2019","1","06-09-2019 15:15:47","fees","1","215000","215000","0","Super Admmin","06-09-2019","215000","0","SIKOD MILTON CHEH  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","100000");
INSERT INTO daily VALUES("953","HIMS/02/16/0306","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:15:54","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NGALE HELEN EWOKOLO      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("954","HIMS/05/16/0318","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:17:03","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NKAFU CHRISTENCIA NJIKA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("955","HIMS/O4/15/0401","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:17:59","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","LIWONJO ROSE EWOKOLE  ","06","CASH"," ","CASH","","0","","0","","","","","200","HND","","","15000");
INSERT INTO daily VALUES("956","HIMS/02/16/0327","","06-09-2019","282500","","09","2018/2019","1","06-09-2019 15:18:29","fees","1","282500","282500","17500","Super Admmin","06-09-2019","282500","0","CHIZOBA MIRIAM OKAFOR      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("957","HIMS/02/16/0333","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:19:41","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","OBIE GERALDINE EKOKO      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("958","HIMS/01/16/0339","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:20:47","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MMETI SUBI AKWO      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("959","HIMS/01/16/0341","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 15:21:55","fees","1","200000","200000","25000","Super Admmin","06-09-2019","200000","0","TAWUNGAZEM BEZANKENG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("960","HIMS/05/16/0348","","06-09-2019","150000","","09","2018/2019","1","06-09-2019 15:22:52","fees","1","150000","150000","150000","Super Admmin","06-09-2019","150000","0","ENONGENE FREDERICK EWANG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("961","HIMS/01/16/0349","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:24:15","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ASABE NEOLLA LEMNWIE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("962","HIMS/02/16/0357","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:25:29","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NWACHAN RONALDO GANG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("963","HIMS/03/16/0367","","06-09-2019","2500","","09","2018/2019","1","06-09-2019 15:27:51","fees","1","2500","2500","167500","Super Admmin","06-09-2019","2500","0","ENGWO BEREPHINE MANTOH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","170000");
INSERT INTO daily VALUES("964","HIMS/04/16/0373","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:29:41","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","EMILIENE WASE NJEMO MOFA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("965","HIMS/04/16/0380","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:32:17","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","LABAM GETRUDE BONGTIN      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("966","HIMS/04/16/0381","","06-09-2019","70000","","09","2018/2019","1","06-09-2019 15:34:07","fees","1","70000","70000","230000","Super Admmin","06-09-2019","70000","0","NGANJE ABDOU DESMOND      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("967","HIMS/03/16/0393","","06-09-2019","30000","","09","2018/2019","1","06-09-2019 15:36:03","fees","1","30000","30000","140000","Super Admmin","06-09-2019","30000","0","FORBIH CYRILL CHEH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","170000");
INSERT INTO daily VALUES("968","HIMS/01/16/0395","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 15:37:14","fees","1","200000","200000","100000","Super Admmin","06-09-2019","200000","0","BIDJILI ETOH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("969","HIMS/04/16/0399","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:38:22","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NGALE KELVIN TATU      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("970","HIMS/04/16/0400","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:39:31","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MBITED JEAN CALVEN TONG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("971","HIMS/05/16/0401","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:41:33","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","AKONWIE GASTON ATIGE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("972","HIMS/04/16/0403","","06-09-2019","212500","","09","2018/2019","1","06-09-2019 15:42:56","fees","1","212500","212500","87500","Super Admmin","06-09-2019","212500","0","EYONG-TANO ANKUWAN NICOLE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("973","HIMS/03/16/0404","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:44:20","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ALVIN ATOCK EYAMBE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("974","HIMS/01/16/0405","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:45:08","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ODILIA NKWENJO KAYE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("975","HIMS/04/16/0408","","06-09-2019","215000","","09","2018/2019","1","06-09-2019 15:46:37","fees","1","215000","215000","0","Super Admmin","06-09-2019","215000","0","IKONA VINAPORTIA ASAAKA    ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("976","HIMS/01/16/0409","","06-09-2019","302500","","09","2018/2019","1","06-09-2019 15:47:51","fees","1","302500","302500","-2500","Super Admmin","06-09-2019","302500","0","GEOGETE NKECHINYERE NWOKO      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("977","HIMS/02/16/0412","","06-09-2019","292500","","09","2018/2019","1","06-09-2019 15:49:06","fees","1","292500","292500","7500","Super Admmin","06-09-2019","292500","0","ESOW DELIX EKUME      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("978","HIMS/01/16/0416","","06-09-2019","285000","","09","2018/2019","1","06-09-2019 15:50:20","fees","1","285000","285000","15000","Super Admmin","06-09-2019","285000","0","ELONE SONITA DIONE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("979","HIMS/02/16/0419","","06-09-2019","240000","","09","2018/2019","1","06-09-2019 15:51:23","fees","1","240000","240000","60000","Super Admmin","06-09-2019","240000","0","MOKA ARNOLD GOBINA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("980","HIMS/01/16/0421","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:55:25","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","ATAGWO BERNICE TIFUH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("981","HIMS/02/16/0422","","06-09-2019","295000","","09","2018/2019","1","06-09-2019 15:56:35","fees","1","295000","295000","5000","Super Admmin","06-09-2019","295000","0","LOLA EBELLE NJAWE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("982","HIMS/01/16/0423","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 15:59:03","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NYUYKI PAMELA SEVIDZEM      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("983","HIMS/01/16/0425","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:00:08","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","CATHERINE ETAH ASHU      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("984","HIMS/01/16/0432","","06-09-2019","165000","","09","2018/2019","1","06-09-2019 16:01:20","fees","1","165000","165000","0","Super Admmin","06-09-2019","165000","0","NKEDE DERICK EDUNGE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","160000");
INSERT INTO daily VALUES("985","HIMS/02/16/0436","","06-09-2019","310000","","09","2018/2019","1","06-09-2019 16:02:21","fees","1","310000","310000","-10000","Super Admmin","06-09-2019","310000","0","MAFOUO NJIFOR MARIE RACHEL      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("986","HIMS/02/16/0452","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:03:31","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","EGBE PRETTY ENOW      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("987","HIMS/04/16/0453","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:05:25","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","EJOLLE ANNABEL EBUDE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("988","HIMS/04/16/0454","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:06:28","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","TCHONANG KOM COLETTE SUELAMIE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("989","HIMS/04/16/0458","","06-09-2019","310000","","09","2018/2019","1","06-09-2019 16:07:41","fees","1","310000","310000","-45000","Super Admmin","06-09-2019","310000","0","EBENKI ETOH FELICITAS      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","50000");
INSERT INTO daily VALUES("990","HIMS/01/16/0463","","06-09-2019","115000","","09","2018/2019","1","06-09-2019 16:09:02","fees","1","115000","115000","185000","Super Admmin","06-09-2019","115000","0","CHUKWUNONSO DIVINE NWOYE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("991","HIMS/05/16/0472","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:10:49","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","AJANG NEVES MBINZE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("992","HIMS/05/16/0475","","06-09-2019","267500","","09","2018/2019","1","06-09-2019 16:12:18","fees","1","267500","267500","-2500","Super Admmin","06-09-2019","267500","0","EUNICE EBENYE NJIE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","50000");
INSERT INTO daily VALUES("993","HIMS/02/16/0480","","06-09-2019","32500","","09","2018/2019","1","06-09-2019 16:13:31","fees","1","32500","32500","-7500","Super Admmin","06-09-2019","32500","0","BAFOR MARTHA NGWADEN      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","300000");
INSERT INTO daily VALUES("994","HIMS/02/16/0483","","06-09-2019","150000","","09","2018/2019","1","06-09-2019 16:18:03","fees","1","150000","150000","75000","Super Admmin","06-09-2019","150000","0","CHRISTINA ENANGA MATUTE      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("995","HIMS/01/16/0485","","06-09-2019","100000","","09","2018/2019","1","06-09-2019 16:20:06","fees","1","100000","100000","200000","Super Admmin","06-09-2019","100000","0","SHEHNWI STEPHANIE NCHIOW      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("996","HIMS/04/16/0487","","06-09-2019","97500","","09","2018/2019","1","06-09-2019 16:22:47","fees","1","97500","97500","202500","Super Admmin","06-09-2019","97500","0","SOJA WESLEY VOMA    ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("997","HIMS/04/16/0488","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:23:42","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","BAH DESMOND ACHE BOU      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("998","HIMS/04/16/0493","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:26:41","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","TAFAH PELAGIE ANIH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("999","HIMS/02/16/0504","","06-09-2019","190000","","09","2018/2019","1","06-09-2019 16:28:44","fees","1","190000","190000","110000","Super Admmin","06-09-2019","190000","0","NABILA BARBARA BABILA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1000","HIMS/02/16/0505","","06-09-2019","207500","","09","2018/2019","1","06-09-2019 16:30:50","fees","1","207500","207500","92500","Super Admmin","06-09-2019","207500","0","NASAKO JULLIETTE NARANGA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1001","HIMS/04/16/0510","","06-09-2019","175000","","09","2018/2019","1","06-09-2019 16:32:50","fees","1","175000","175000","125000","Super Admmin","06-09-2019","175000","0","MBEBANG SONITA KENG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1002","HIMS/04/16/0515","","06-09-2019","245000","","09","2018/2019","1","06-09-2019 16:34:50","fees","1","245000","245000","55000","Super Admmin","06-09-2019","245000","0","NKAMSAO NNAM LARISSA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1003","HIMS/04/16/0516","","06-09-2019","290000","","09","2018/2019","1","06-09-2019 16:36:08","fees","1","290000","290000","10000","Super Admmin","06-09-2019","290000","0","NDUFONG MALODIA ANGUM      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1004","HIMS/05/16/0521","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:37:42","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MONZUNGUITY RAIZA IJANG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1005","HIMS/03/16/0531","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:39:42","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","MUNASARA SIDELLA ENJOH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1006","HIMS/03/16/0532","","06-09-2019","290000","","09","2018/2019","1","06-09-2019 16:40:50","fees","1","290000","290000","0","Super Admmin","06-09-2019","290000","0","YABEH VANESSA      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","50000");
INSERT INTO daily VALUES("1007","HIMS/02/16/0533","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:43:15","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","EMENOGU AMARACHI DORAH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1008","HIMS/04/16/0534","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:44:41","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","LENGA RUDOLF MUKEM      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1009","HIMS/02/16/0539","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:45:21","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","VAINKWI LILIAN      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1010","HIMS/02/16/0544","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:46:36","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","TENDOH BAZI-TENYONG      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1011","HIMS/02/16/0550","","06-09-2019","302500","","09","2018/2019","1","06-09-2019 16:47:44","fees","1","302500","302500","-2500","Super Admmin","06-09-2019","302500","0","TEMJEM TAJOAH      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1012","HIMS/03/16/0551","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 16:49:10","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NGWEJEI SYLVAIN KACHU      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1013","HIMS/02/16/0552","","06-09-2019","205000","","09","2018/2019","1","06-09-2019 16:50:00","fees","1","205000","205000","95000","Super Admmin","06-09-2019","205000","0","AYUK ETA MELADINE AMIN      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1014","HIMS/05/16/0554","","06-09-2019","25000","","09","2018/2019","1","06-09-2019 16:50:41","fees","1","25000","25000","275000","Super Admmin","06-09-2019","25000","0","AWATIM ABONG CHANTAL      ","06","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1015","UBa/HIMS/03/18/0015","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 20:06:35","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","ACHU CYNTHIA MUNGEN  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1016","UBa/HIMS/03/18/0016","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 20:07:15","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","SAIGAI ERIC  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1017","UBa/HIMS/04/18/0017","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 20:09:04","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","AKUMBE CELINE ENJECK  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1018","UBa/HIMS/04/18/0018","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 20:09:45","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","SOFI SANDRINE KEHYUI  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1019","UBa/HIMS/04/18/0019","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 20:11:00","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","UGONNA ALPHONSIUS OKAFOR  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1020","UBa/HIMS/02/18/0020","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 20:11:52","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","ENANGA SYNTHIA MOJEMBA  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1021","UBa/HIMS/03/18/0021","","06-09-2019","373000","","09","2018/2019","1","06-09-2019 20:12:51","fees","1","373000","373000","2000","Super Admmin","06-09-2019","373000","0","FUANGUME SONITA YASOH  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1022","UBa/HIMS/01/18/0022","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 20:13:42","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","ANGUH CLOUTILDE NKUMEH  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1023","UBa/HIMS/01/18/0023","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 20:14:51","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","AKWEN VINITA NGU  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1024","UBa/HIMS/10/18/0024","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 20:15:43","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","CLOVIS NNAMDI OGADIMA  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1025","UBa/HIMS/02/18/0026","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 22:26:50","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","JULIE MOFOR  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1026","UBa/HIMS/02/18/0025","","06-09-2019","35000","","09","2018/2019","1","06-09-2019 22:27:55","fees","1","35000","35000","340000","Super Admmin","06-09-2019","35000","0","MARY LIMUNGA MOKOKO  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1027","UBa/HIMS/05/18/0027","","06-09-2019","275000","","09","2018/2019","1","06-09-2019 22:28:57","fees","1","275000","275000","100000","Super Admmin","06-09-2019","275000","0","ELANGE ALBERTA NYUYSOHNI  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1028","UBa/HIMS/02/18/0028","","06-09-2019","200000","","09","2018/2019","1","06-09-2019 22:29:54","fees","1","200000","200000","0","Super Admmin","06-09-2019","200000","0","WUNG KWE ALEXI  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","250000");
INSERT INTO daily VALUES("1029","UBa/HIMS/02/18/0029","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 22:30:42","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","NGWANI SALLY JAENOUT  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1030","UBa/HIMS/05/18/0030","","06-09-2019","300000","","09","2018/2019","1","06-09-2019 22:31:23","fees","1","300000","300000","0","Super Admmin","06-09-2019","300000","0","NGOU KUMBI URSLA NYUIZOBING  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","150000");
INSERT INTO daily VALUES("1031","UBa/HIMS/01/18/0031","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 22:32:17","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","TASI CLINTON ANYAM  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1032","UBa/HIMS/03/18/0032","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 22:34:38","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","NGONGE TERENCE AKE  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1033","UBa/HIMS/01/18/0033","","06-09-2019","375000","","09","2018/2019","1","06-09-2019 22:36:09","fees","1","375000","375000","0","Super Admmin","06-09-2019","375000","0","AYANCHA AGBOR FAITH  ","06","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1034","UBa/HIMS/05/18/0034","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 15:48:09","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","AZOMBU MIREILLE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1035","UBa/HIMS/01/18/0035","","07-09-2019","75000","","09","2018/2019","1","07-09-2019 15:50:16","fees","1","75000","75000","300000","Super Admmin","07-09-2019","75000","0","ACHU TERENCE MBUH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1036","UBa/HIMS/04/18/0036","","07-09-2019","135000","","09","2018/2019","1","07-09-2019 15:51:01","fees","1","135000","135000","65000","Super Admmin","07-09-2019","135000","0","SERGIO MOLONGO GWANKOBE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","250000");
INSERT INTO daily VALUES("1037","UBa/HIMS/02/18/0037","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 15:52:17","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ABWA VICTOR  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1038","UBa/HIMS/01/18/0038","","07-09-2019","310000","","09","2018/2019","1","07-09-2019 15:53:11","fees","1","310000","310000","65000","Super Admmin","07-09-2019","310000","0","ASALLE BORDWIN APUHWA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1039","UBa/HIMS/04/18/0039","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 15:54:58","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MARSHAL KEKE NDIVE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1040","UBa/HIMS/05/18/0040","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 15:55:40","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ODELIGBO SUSAN INKERUKA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1041","UBa/HIMS/01/18/0041","","07-09-2019","125000","","09","2018/2019","1","07-09-2019 15:56:41","fees","1","125000","125000","125000","Super Admmin","07-09-2019","125000","0","TANTOH BRIAN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","200000");
INSERT INTO daily VALUES("1042","UBa/HIMS/01/18/0042","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 15:57:31","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ANKIAMBOM RAWLINGS CHIA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1043","UBa/HIMS/01/18/0043","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 15:58:12","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","AYUK MA-NDIP SHERON NGONG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1044","UBa/HIMS/01/18/0044","","07-09-2019","320000","","09","2018/2019","1","07-09-2019 15:58:59","fees","1","320000","320000","55000","Super Admmin","07-09-2019","320000","0","SHEY NADINE NYE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1045","UBa/HIMS/03/18/0045","","07-09-2019","325000","","09","2018/2019","1","07-09-2019 16:00:02","fees","1","325000","325000","50000","Super Admmin","07-09-2019","325000","0","NYONKA SNELDA LIWA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1046","UBa/HIMS/03/18/0046","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 16:03:10","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","OTANG MARION OKOK  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1047","UBa/HIMS/04/18/0047","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 16:03:59","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","KHAREEN MYRRHIS ONGOUM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1048","HIMS/02/16/0555","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:04:47","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","ENOW NKONGHO PIUS      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1049","HIMS/05/16/0561","","07-09-2019","190000","","09","2018/2019","1","07-09-2019 16:05:53","fees","1","190000","190000","110000","Super Admmin","07-09-2019","190000","0","ALEM FLORENCE FOLEFAC      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1050","UBa/HIMS/04/18/0048","","07-09-2019","250000","","09","2018/2019","1","07-09-2019 16:06:11","fees","1","250000","250000","75000","Super Admmin","07-09-2019","250000","0","TENGEN RENE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","125000");
INSERT INTO daily VALUES("1051","HIMS/01/16/0563","","07-09-2019","245000","","09","2018/2019","1","07-09-2019 16:07:03","fees","1","245000","245000","55000","Super Admmin","07-09-2019","245000","0","YOTAGI MBIA JEAN CLOUDE      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1052","HIMS/04/16/0572","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:10:25","fees","1","300000","300000","-100000","Super Admmin","07-09-2019","300000","0","SOBZE FOUEBOU HAVELANGE      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","115000");
INSERT INTO daily VALUES("1053","HIMS/05/16/0579","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:11:14","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","MBANWEI COMFORT ACHA      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1054","HIMS/02/16/0580","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:12:07","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","ENOW STEPHANIE LANU      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1055","HIMS/01/16/0583","","07-09-2019","240000","","09","2018/2019","1","07-09-2019 16:13:59","fees","1","240000","240000","10000","Super Admmin","07-09-2019","240000","0","KEDIA SHARON NJUAMBOH      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","75000");
INSERT INTO daily VALUES("1056","HIMS/04/16/0584","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:17:34","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","EFOFA ISAAC VEFONGE      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1057","HIMS/02/16/0585","","07-09-2019","280000","","09","2018/2019","1","07-09-2019 16:19:13","fees","1","280000","280000","20000","Super Admmin","07-09-2019","280000","0","TANGUNYI RANSUM NJECH      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1058","HIMS/01/16/0592","","07-09-2019","302500","","09","2018/2019","1","07-09-2019 16:20:58","fees","1","302500","302500","-2500","Super Admmin","07-09-2019","302500","0","ENEKE RENNA BRIGHT NCHEMAWU      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1059","HIMS/05/16/0594","","07-09-2019","225000","","09","2018/2019","1","07-09-2019 16:23:27","fees","1","225000","225000","75000","Super Admmin","07-09-2019","225000","0","NKPOT OJONG ENOW OBEN      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1060","HIMS/01/16/0596","","07-09-2019","270000","","09","2018/2019","1","07-09-2019 16:25:06","fees","1","270000","270000","30000","Super Admmin","07-09-2019","270000","0","PRINCESS VIRGINIE NYUIKENNE      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1061","HIMS/01/16/0600","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:31:15","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","ABEGE IVO NJANG      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1062","HIMS/04/16/0602","","07-09-2019","0","","09","2018/2019","1","07-09-2019 16:34:34","fees","1","0","0","0","Super Admmin","07-09-2019","0","0","BABILA ELVIS FOFUNG      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","315000");
INSERT INTO daily VALUES("1063","HIMS/04/16/0605","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:35:59","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","NJOMI FOLEFACK ERNEST      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1064","HIMS/05/16/0614","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:37:51","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","ENIH RITA NGALA    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1065","HIMS/03/16/0618","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:39:02","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","NEYEH BERINYS KANGMIA      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1066","HIMS/04/16/0636","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:40:17","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","BERNICE ENOW OBASE E.    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1067","HIMS/04/16/0637","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:41:16","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","MAYUK SALLY-KATE DIFFANG    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1068","HIMS/05/16/0643","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:47:36","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","BEGHEUH NERIS BOYONG    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1069","UBa/HIMS/02/18/0049","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 16:48:45","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ABROW ZITALINE ENJECK  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1070","HIMS/03/16/0644","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:49:17","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","EKEI POLIVATE AZONGHO    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1071","UBa/HIMS/04/18/0050","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 16:49:19","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ATUH CYNTHIA RITA MBAH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1072","UBa/HIMS/02/18/0051","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 16:50:03","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","BATE NOELLA ENOW  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1073","HIMS/04/16/0645","","07-09-2019","0","","09","2018/2019","1","07-09-2019 16:50:28","fees","1","0","0","300000","Super Admmin","07-09-2019","0","0","KINFER EMILY-EDEN    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1074","UBa/HIMS/02/18/0052","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 16:52:28","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NWACHAN LARISA MOWUM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1075","HIMS/02/16/0646","","07-09-2019","237500","","09","2018/2019","1","07-09-2019 16:53:31","fees","1","237500","237500","62500","Super Admmin","07-09-2019","237500","0","ASHU VANESSA MBI    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1076","UBa/HIMS/02/18/0053","","07-09-2019","250000","","09","2018/2019","1","07-09-2019 16:53:35","fees","1","250000","250000","125000","Super Admmin","07-09-2019","250000","0","EWANG DIONE NATHALIE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1077","UBa/HIMS/02/18/0054","","07-09-2019","270000","","09","2018/2019","1","07-09-2019 16:54:36","fees","1","270000","270000","105000","Super Admmin","07-09-2019","270000","0","FRI KAREEN TONI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1078","HIMS/05/16/0650  ","","07-09-2019","305000","","09","2018/2019","1","07-09-2019 16:55:02","fees","1","305000","305000","-5000","Super Admmin","07-09-2019","305000","0","AKWIMI TCHAPNDA ROSETTE      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1079","UBa/HIMS/05/18/0055","","07-09-2019","290000","","09","2018/2019","1","07-09-2019 16:55:42","fees","1","290000","290000","85000","Super Admmin","07-09-2019","290000","0","BESONGNDIEP CLAUDETTE EYONG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1080","UBa/HIMS/04/18/0056","","07-09-2019","325000","","09","2018/2019","1","07-09-2019 16:56:18","fees","1","325000","325000","50000","Super Admmin","07-09-2019","325000","0","ABEH ROSE EGOASA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1081","HIMS/02/16/0651","","07-09-2019","217500","","09","2018/2019","1","07-09-2019 16:56:24","fees","1","217500","217500","82500","Super Admmin","07-09-2019","217500","0","PROSPER MBELLA IKE MASOMA    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1082","UBa/HIMS/04/18/0057","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 16:57:05","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","DIALE AUBLECH MOFA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1083","HIMS/01/16/0652","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:57:29","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","LEMNYUY BLAVIN KONGNYUY    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1084","UBa/HIMS/01/18/0058","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 16:57:56","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","TSAMOH SYLVIAN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1085","HIM/01/16/0653","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:58:12","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","BAUSU CYNTHIA MASUMBE    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1086","UBa/HIMS/05/18/0059","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 16:58:40","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","AGHAM SPORA DEGOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1087","HIMS/05/16/0654","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:58:55","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","MBOLLE CAMILLA ENJEMA    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1088","UBa/HIMS/01/18/0060","","07-09-2019","175000","","09","2018/2019","1","07-09-2019 16:59:44","fees","1","175000","175000","200000","Super Admmin","07-09-2019","175000","0","GUENTO NINYIN WILLIAM GABREL  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1089","HIMS/04/16/0655","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 16:59:55","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","AWUNGHA CHA MARIBELL    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1090","UBa/HIMS/04/18/0061","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:00:32","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NCHONG MALU VIOLET  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1091","HIMS/01/16/0656","","07-09-2019","294500","","09","2018/2019","1","07-09-2019 17:01:08","fees","1","294500","294500","5500","Super Admmin","07-09-2019","294500","0","LOBE DIMENI EYABE    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1092","UBa/HIMS/01/18/0062","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:01:15","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","FORSUH DIVINE AYAFOR  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1093","UBa/HIMS/01/18/0063","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:01:54","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","TAKOR DARIUS NKONGHO  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1094","HIMS/02/16/0657","","07-09-2019","305000","","09","2018/2019","1","07-09-2019 17:02:11","fees","1","305000","305000","-5000","Super Admmin","07-09-2019","305000","0","ANDRILYN EMENGE EPOSI N    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1095","UBa/HIMS/01/18/0064","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:02:40","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NDUM ENONWEI API  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1096","HIMS/02/16/0662","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:02:54","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","SUTAN EMILIE DIANE N    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1097","UBa/HIMS/01/18/0065","","07-09-2019","225000","","09","2018/2019","1","07-09-2019 17:03:52","fees","1","225000","225000","0","Super Admmin","07-09-2019","225000","0","YONTA NORBERTA KOYILA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","225000");
INSERT INTO daily VALUES("1098","HIMS/04/16/0664","","07-09-2019","90000","","09","2018/2019","1","07-09-2019 17:04:39","fees","1","90000","90000","210000","Super Admmin","07-09-2019","90000","0","MODESTA NYEMKUNA F    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1099","HIMS/05/16/0665","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:05:35","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","TAH QUEENZELA AKE    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1100","UBa/HIMS/01/18/0066","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:06:27","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","WASANG FUENCISLA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1101","HIMS/04/16/0668","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:07:25","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","AGBOR BECKY ENOW MENYANG    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1102","HIMS/02/16/0669","","07-09-2019","75000","","09","2018/2019","1","07-09-2019 17:08:39","fees","1","75000","75000","225000","Super Admmin","07-09-2019","75000","0","NJAPDZE MARK BONSELAK    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1103","UBa/HIMS/05/18/0067","","07-09-2019","350000","","09","2018/2019","1","07-09-2019 17:08:59","fees","1","350000","350000","25000","Super Admmin","07-09-2019","350000","0","SIKE BANDO OBIE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1104","HIMS/05/16/0674","","07-09-2019","314500","","09","2018/2019","1","07-09-2019 17:09:38","fees","1","314500","314500","-14500","Super Admmin","07-09-2019","314500","0","ANDREW BIKINNI DIONGO    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1105","UBa/HIMS/02/18/0068","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:09:40","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NTUI OBEN NKPOT OJONG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1106","UBa/HIMS/03/18/0069","","07-09-2019","370000","","09","2018/2019","1","07-09-2019 17:10:27","fees","1","370000","370000","5000","Super Admmin","07-09-2019","370000","0","MUH SYLVIA NJANG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1107","UBa/HIMS/01/18/0070","","07-09-2019","350000","","09","2018/2019","1","07-09-2019 17:11:12","fees","1","350000","350000","25000","Super Admmin","07-09-2019","350000","0","TABOH AFOH PAGE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1108","HIMS/03/16/0676","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:11:20","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","SENGELA MAWE SUH    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1109","UBa/HIMS/04/18/0071","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:11:49","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","EPIE BLANDINE EPOLE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1110","UBa/HIMS/01/18/0072","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:12:28","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NEHSI REGINA NFONSANG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1111","HIMS/03/16/0677","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:13:09","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","HELEN MASSAM LIENGU MOKY    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1112","UBa/HIMS/01/18/0073","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:14:09","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","AZOTSA IDRISSA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1113","HIMS/04/16/0681","","07-09-2019","200000","","09","2018/2019","1","07-09-2019 17:14:13","fees","1","200000","200000","100000","Super Admmin","07-09-2019","200000","0","EGBE MIRIAM OBEN    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1114","UBa/HIMS/01/18/0074","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:14:51","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","AYUK ALICE ENOW  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1115","HIMS/02/16/0683","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:15:26","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","DJUITCHOU NKUEKAM JULIA    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1116","UBa/HIMS/01/18/0075","","07-09-2019","340000","","09","2018/2019","1","07-09-2019 17:15:35","fees","1","340000","340000","35000","Super Admmin","07-09-2019","340000","0","NJAH WATSON TEM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1117","HIMS/02/16/0684  ","","07-09-2019","250000","","09","2018/2019","1","07-09-2019 17:16:25","fees","1","250000","250000","50000","Super Admmin","07-09-2019","250000","0","WAI KUM GILLIAN       ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1118","UBa/HIMS/05/18/0076","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:16:35","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ELAW FANNY BECHEM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1119","UBa/HIMS/05/18/0077","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:17:12","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","TIANG EMMA MBONG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1120","HIMS/01/16/0689","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:17:18","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","ENOW AWU EMELDINE LESLY  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","25000");
INSERT INTO daily VALUES("1121","UBa/HIMS/01/18/0078","","07-09-2019","225000","","09","2018/2019","1","07-09-2019 17:17:54","fees","1","225000","225000","0","Super Admmin","07-09-2019","225000","0","THOMAS NDIMA NGALLE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","225000");
INSERT INTO daily VALUES("1122","UBa/HIMS/04/18/0079","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:18:31","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","EPIE LUCIA TUA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1123","UBa/HIMS/04/18/0080","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:19:40","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","JATOR NOEL NWAKA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","150000");
INSERT INTO daily VALUES("1124","UBa/HIMS/04/18/0081","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:20:17","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ASSASSU DAISY MONYUY  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1125","UBa/HIMS/05/18/0082","","07-09-2019","150000","","09","2018/2019","1","07-09-2019 17:21:10","fees","1","150000","150000","75000","Super Admmin","07-09-2019","150000","0","JUDITH KEGWALA DOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","225000");
INSERT INTO daily VALUES("1126","HIMS/04/16/0692","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:21:20","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","TENJONCHA BLANDINE MBUNA    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1127","HIMS/03/16/0694","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:22:22","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","DEGHA DESMOND    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1128","UBa/HIMS/04/18/0083","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:22:49","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","SINKAM SONITA SIANJOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1129","UBa/HIMS/04/18/0084","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:23:35","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NTUBE JENEBEL  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1130","HIMS/05/16/0695","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:23:46","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","NDIMUH EMMANUELA NSERBU    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1131","UBa/HIMS/04/18/0085","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:24:21","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NDIEFI LINDA TONJOCK  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1132","HIMS/04/16/0700","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:25:20","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","NKONGHO YAMAKAM A.T.    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1133","UBa/HIMS/04/18/0086","","07-09-2019","200000","","09","2018/2019","1","07-09-2019 17:25:38","fees","1","200000","200000","0","Super Admmin","07-09-2019","200000","0","KUM PEARL YAJE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","250000");
INSERT INTO daily VALUES("1134","UBa/HIMS/04/18/0087","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:26:19","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NKEANGMETIA NOUALA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1135","HIMS/04/15/0631","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:26:20","fees","1","300000","300000","-25000","Super Admmin","07-09-2019","300000","0","NENGEH ELIZABETH CHUWOH    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1136","UBa/HIMS/04/18/0088","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:28:14","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","TANG TABE COLLINS  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1137","HIMS/04/16/0703","","07-09-2019","200000","","09","2018/2019","1","07-09-2019 17:28:15","fees","1","200000","200000","100000","Super Admmin","07-09-2019","200000","0","TAMANGWA WASHI LARISA    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1138","UBa/HIMS/03/18/0089","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:28:59","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ASUMBO EMMANUEL  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1139","HIMS/05/16/0705","","07-09-2019","157500","","09","2018/2019","1","07-09-2019 17:29:29","fees","1","157500","157500","0","Super Admmin","07-09-2019","157500","0","EWOKOLO PEACE    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","157500");
INSERT INTO daily VALUES("1140","UBa/HIMS/03/18/0090","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:30:08","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","JOY ANYIEANDOCK ATEMBE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1141","HIMS/04/16/0705","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:30:34","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","ATSAFAC SOREL E. A.    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1142","UBa/HIMS/02/18/0091","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:30:44","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MEH IRENE NDUM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1143","UBa/HIMS/04/18/0092","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:31:26","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NJUME ISABELLA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1144","HIMS/04/16/0707  ","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:31:37","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","NGETI HANS NGETI      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1145","UBa/HIMS/02/18/0093","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:32:07","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NAHSIMA NANCY NJI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1146","HIMS/04/16/0708","","07-09-2019","247500","","09","2018/2019","1","07-09-2019 17:32:37","fees","1","247500","247500","52500","Super Admmin","07-09-2019","247500","0","VIVIAN NTUBE ALOBWEDE KOGGE      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1147","UBa/HIMS/02/18/0094","","07-09-2019","310000","","09","2018/2019","1","07-09-2019 17:36:44","fees","1","310000","310000","65000","Super Admmin","07-09-2019","310000","0","SHERON NYONLEMUGA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1148","HIMS/04/16/0710","","07-09-2019","155500","","09","2018/2019","1","07-09-2019 17:37:06","fees","1","155500","155500","144500","Super Admmin","07-09-2019","155500","0","FOBANG GRACIOUS ANGAWAH    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1149","UBa/HIMS/02/18/0095","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:37:23","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NABUE FALONE ESONA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1150","UBa/HIMS/01/18/0096","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:38:07","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NGOBILE PHILOMINA NJIE ENJEMA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1151","HIMS/01/16/0711","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:38:14","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","MONJOA MIYEMECK LOUISE ROSETTE  ","07","CASH"," ","CASH","","0","","0","","","","","300","0","","","25000");
INSERT INTO daily VALUES("1152","UBa/HIMS/02/18/0097","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:38:57","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NJUKWING RACHAEL MBINANYUI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1153","HIMS/04/16/0712","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:39:23","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","ANYI ATEM NADINE NGUASONG  ","07","CASH"," ","CASH","","0","","0","","","","","300","0","","","15000");
INSERT INTO daily VALUES("1154","UBa/HIMS/03/18/0098","","07-09-2019","100000","","09","2018/2019","1","07-09-2019 17:39:43","fees","1","100000","100000","275000","Super Admmin","07-09-2019","100000","0","NGOH NEVILLE NGOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1155","HIMS/04/16/0713","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:40:41","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","BRIDGET IMBOLE LYONGA  ","07","CASH"," ","CASH","","0","","0","","","","","300","0","","","15000");
INSERT INTO daily VALUES("1156","HIMS/03/16/0714","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:41:35","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","FOLONG LEKOBOU JOY STELLA  ","07","CASH"," ","CASH","","0","","0","","","","","300","0","","","40000");
INSERT INTO daily VALUES("1157","UBa/HIMS/03/18/0099","","07-09-2019","180000","","09","2018/2019","1","07-09-2019 17:41:41","fees","1","180000","180000","195000","Super Admmin","07-09-2019","180000","0","CHRISTINA ENANGA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1158","UBa/HIMS/01/18/0100","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:43:24","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NDIP DELIDELMA EYERRE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1159","HIMS/01/16/0717","","07-09-2019","50000","","09","2018/2019","1","07-09-2019 17:43:34","fees","1","50000","50000","250000","Super Admmin","07-09-2019","50000","0","MOTEH CLAUDIA BIE  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","25000");
INSERT INTO daily VALUES("1160","UBa/HIMS/02/18/0101","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:44:17","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","GANA MERCY AJOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1161","HIMS/02/16/0719","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:44:51","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","ACHU CLINTON NDI  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","25000");
INSERT INTO daily VALUES("1162","UBa/HIMS/02/18/0102","","07-09-2019","335000","","09","2018/2019","1","07-09-2019 17:45:05","fees","1","335000","335000","40000","Super Admmin","07-09-2019","335000","0","EGBE CATHERINE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1163","UBa/HIMS/05/18/0103","","07-09-2019","330000","","09","2018/2019","1","07-09-2019 17:45:46","fees","1","330000","330000","45000","Super Admmin","07-09-2019","330000","0","ASONGANYI AGNES  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1164","HIMS/01/16/0720","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:45:49","fees","1","300000","300000","0","Super Admmin","07-09-2019","300000","0","AYUK SERAPHINE  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","25000");
INSERT INTO daily VALUES("1165","UBa/HIMS/05/18/0104","","07-09-2019","365000","","09","2018/2019","1","07-09-2019 17:46:25","fees","1","365000","365000","10000","Super Admmin","07-09-2019","365000","0","FOKA MARIE CLEAR KUVSINLA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1166","HIMS/04/16/0721","","07-09-2019","165000","","09","2018/2019","1","07-09-2019 17:46:50","fees","1","165000","165000","0","Super Admmin","07-09-2019","165000","0","ERNESTINE ENJEMA  NJIE  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","150000");
INSERT INTO daily VALUES("1167","UBa/HIMS/04/18/0105","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:47:07","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","IFREKE MIRIAM EDET  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1168","UBa/HIMS/02/18/0106","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:47:57","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ELIZABETH NALOVA TEKE ELAD  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1169","HIMS/04/16/0722","","07-09-2019","170000","","09","2018/2019","1","07-09-2019 17:48:07","fees","1","170000","170000","30000","Super Admmin","07-09-2019","170000","0","FONDIKUM LINUS CHE  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","115000");
INSERT INTO daily VALUES("1170","UBa/HIMS/05/18/0107","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:48:43","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","TAMBI ANNA TAKO  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1171","HIMS/04/16/0723","","07-09-2019","247000","","09","2018/2019","1","07-09-2019 17:49:01","fees","1","247000","247000","53000","Super Admmin","07-09-2019","247000","0","EFFOE SAMUEL MBENGU  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","15000");
INSERT INTO daily VALUES("1172","UBa/HIMS/04/18/0108","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:49:38","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","EBAI MARIE NICOL  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1173","UBa/HIMS/03/18/0109","","07-09-2019","130000","","09","2018/2019","1","07-09-2019 17:50:36","fees","1","130000","130000","245000","Super Admmin","07-09-2019","130000","0","NYANGWE NGANDA GERESSE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1174","HIMS/01/16/0724","","07-09-2019","170000","","09","2018/2019","1","07-09-2019 17:50:45","fees","1","170000","170000","30000","Super Admmin","07-09-2019","170000","0","ARREY EBOT BEN COLLINS  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","125000");
INSERT INTO daily VALUES("1175","UBa/HIMS/02/18/0110","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:51:32","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","SAKWE MARIE FEMBE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1176","HIMS/01/16/0727","","07-09-2019","0","","09","2018/2019","1","07-09-2019 17:51:49","fees","1","0","0","50000","Super Admmin","07-09-2019","0","0","TATA R0SE MARY MANYI  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","");
INSERT INTO daily VALUES("1177","UBa/HIMS/04/18/0111","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:52:29","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","DIKONGUE EYERRE MARRIE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1178","HIMS/05/16/0050","","07-09-2019","100000","","09","2018/2019","1","07-09-2019 17:52:49","fees","1","100000","100000","215000","Super Admmin","07-09-2019","100000","0","ANENG DEBIE-ARTZI NJIE      ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1179","UBa/HIMS/01/18/0112","","07-09-2019","355000","","09","2018/2019","1","07-09-2019 17:53:16","fees","1","355000","355000","20000","Super Admmin","07-09-2019","355000","0","AGWARAITSANI ESENE NELSON  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1180","HIMS/05/16/0729","","07-09-2019","0","","09","2018/2019","1","07-09-2019 17:53:49","fees","1","0","0","100000","Super Admmin","07-09-2019","0","0","TIBUH SYLVIA AKOM  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","");
INSERT INTO daily VALUES("1181","HIMS/04/16/0730","","07-09-2019","0","","09","2018/2019","1","07-09-2019 17:54:31","fees","1","0","0","315000","Super Admmin","07-09-2019","0","0","NOKWE NKWELLE BERTRAND  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","0");
INSERT INTO daily VALUES("1182","UBa/HIMS/01/18/0113","","07-09-2019","200000","","09","2018/2019","1","07-09-2019 17:54:50","fees","1","200000","200000","175000","Super Admmin","07-09-2019","200000","0","FONCHAM BORIS BABILA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1183","HIMS/01/15/0082  ","","07-09-2019","0","","09","2018/2019","1","07-09-2019 17:55:41","fees","1","0","0","325000","Super Admmin","07-09-2019","0","0","AMIH EUGENE ZEH    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1184","UBa/HIMS/04/18/0114","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:55:47","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","OJONG TAMBE EBAI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1185","UBa/HIMS/02/18/0115","","07-09-2019","260000","","09","2018/2019","1","07-09-2019 17:56:48","fees","1","260000","260000","115000","Super Admmin","07-09-2019","260000","0","SHU NGWA BLAISE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1186","HIMS/01/15/0082  ","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:57:05","fees","1","300000","300000","25000","Super Admmin","07-09-2019","300000","0","AMIH EUGENE ZEH    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1187","UBa/HIMS/05/18/0116","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 17:57:50","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MERCY MAH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1188","HIMS/04/15/0101","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 17:57:56","fees","1","300000","300000","15000","Super Admmin","07-09-2019","300000","0","NDUKONG GERALD EKONGENYO    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1189","UBa/HIMS/05/18/0117","","07-09-2019","380000","","09","2018/2019","1","07-09-2019 18:00:05","fees","1","380000","380000","-5000","Super Admmin","07-09-2019","380000","0","NDOBEGANG BERTRAND DEFANG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1190","UBa/HIMS/03/18/0118","","07-09-2019","82500","","09","2018/2019","1","07-09-2019 18:01:35","fees","1","82500","82500","292500","Super Admmin","07-09-2019","82500","0","NCHITA LENNIN NGOWE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1191","UBa/HIMS/05/18/0119","","07-09-2019","350000","","09","2018/2019","1","07-09-2019 18:04:48","fees","1","350000","350000","25000","Super Admmin","07-09-2019","350000","0","SIANGU CLINTON MBAKU  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1192","HIMS/04/15/0236","","07-09-2019","299000","","09","2018/2019","1","07-09-2019 18:05:36","fees","1","299000","299000","16000","Super Admmin","07-09-2019","299000","0","ICHU NELLY-DEISY BEI    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1193","UBa/HIMS/03/18/0120","","07-09-2019","350000","","09","2018/2019","1","07-09-2019 18:05:46","fees","1","350000","350000","25000","Super Admmin","07-09-2019","350000","0","SIANGU MELDINE ENDAH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1194","HIMS/04/15/241","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 18:06:32","fees","1","300000","300000","15000","Super Admmin","07-09-2019","300000","0","HONORINE DISOH ABANDA  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","0");
INSERT INTO daily VALUES("1195","UBa/HIMS/04/18/0121","","07-09-2019","140000","","09","2018/2019","1","07-09-2019 18:07:13","fees","1","140000","140000","235000","Super Admmin","07-09-2019","140000","0","JANET DODO IRETY  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1196","UBa/HIMS/02/18/0122","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 18:08:44","fees","1","300000","300000","75000","Super Admmin","07-09-2019","300000","0","EPOSI KELLY MBUA-NJIE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1197","UBa/HIMS/02/18/0123","","07-09-2019","295000","","09","2018/2019","1","07-09-2019 18:09:58","fees","1","295000","295000","80000","Super Admmin","07-09-2019","295000","0","TAMBI PINKY MAKUMU  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1198","UBa/HIMS/02/18/0124","","07-09-2019","0","","09","2018/2019","1","07-09-2019 18:10:50","fees","1","0","0","56250","Super Admmin","07-09-2019","0","0","BEATRICE NGUMELI GUMUH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","393750");
INSERT INTO daily VALUES("1199","UBa/HIMS/04/18/0125","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:11:46","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MOKOM MELVIS NGWI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1200","HIMS/04/15/0436","","07-09-2019","100000","","09","2018/2019","1","07-09-2019 18:12:06","fees","1","100000","100000","100000","Super Admmin","07-09-2019","100000","0","JERRY ESUKISE MONYENGA BURNLEY    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","115000");
INSERT INTO daily VALUES("1201","UBa/HIMS/01/18/0126","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:13:35","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ELIZABETH KILA SHIYGHAN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1202","UBa/HIMS/02/18/0127","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:14:29","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","BABILA MELVIS CHIJOHFOM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1203","UBa/HIMS/02/18/0128","","07-09-2019","360000","","09","2018/2019","1","07-09-2019 18:15:16","fees","1","360000","360000","15000","Super Admmin","07-09-2019","360000","0","KAMDJONG LARISSA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1204","HIMS/01/15/0659","","07-09-2019","325000","","09","2018/2019","1","07-09-2019 18:15:32","fees","1","325000","325000","0","Super Admmin","07-09-2019","325000","0","NGO BILLONG ANNE MARIE  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","0");
INSERT INTO daily VALUES("1205","UBa/HIMS/03/18/0129","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:15:55","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","EBONG EMMANUELLA EDUKE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1206","UBa/HIMS/05/18/0130","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:16:31","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","BETONDI FRANCISCA MALIKE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1207","HIMS/02/15/0753","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 18:16:35","fees","1","300000","300000","25000","Super Admmin","07-09-2019","300000","0","PETRA NAHGWA NDAGHU    ","07","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1208","UBa/HIMS/01/18/0131","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:17:09","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ANDUSA MILDRED AWAWING  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1209","HIMS/02/15/0776","","07-09-2019","325000","","09","2018/2019","1","07-09-2019 18:17:27","fees","1","325000","325000","0","Super Admmin","07-09-2019","325000","0","NUELAR GIRMAR CHANGU  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","0");
INSERT INTO daily VALUES("1210","UBa/HIMS/03/18/0132","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:18:14","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MBANGO LYDIA NWAHA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1211","HIMS/02/14/0531","","07-09-2019","325000","","09","2018/2019","1","07-09-2019 18:18:18","fees","1","325000","325000","0","Super Admmin","07-09-2019","325000","0","TUKA HARRIETTE THEH  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","0");
INSERT INTO daily VALUES("1212","UBa/HIMS/02/18/0133","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 18:18:53","fees","1","300000","300000","75000","Super Admmin","07-09-2019","300000","0","BAMA BILDAH NNSEN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1213","HIMS/04/14/0852","","07-09-2019","90000","","09","2018/2019","1","07-09-2019 18:20:03","fees","1","90000","90000","225000","Super Admmin","07-09-2019","90000","0","	MBIATEM ASHU SHARON  ","07","CASH"," ","CASH","","0","","0","","","","","300","HND","","","0");
INSERT INTO daily VALUES("1214","UBa/HIMS/01/18/0134","","07-09-2019","360000","","09","2018/2019","1","07-09-2019 18:23:31","fees","1","360000","360000","15000","Super Admmin","07-09-2019","360000","0","NDZE RAZIEL MUA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1215","UBa/HIMS/04/18/0135","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:24:44","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","STEPHANIE MBINANYUI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1216","UBa/HIMS/02/18/0136","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:26:28","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","JUNIOR TATA FOMBAD  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1217","UBa/HIMS/01/18/0137","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:27:53","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","KAMADJA TCHEUFFA ROMAIN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1218","UBa/HIMS/04/18/0138","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:28:40","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MABEL BERI CHE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1219","UBa/HIMS/01/18/0139","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:29:54","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ANYAM LORITTA NGUM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1220","UBa/HIMS/01/18/0140","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:30:43","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","GHEFEH CHARLENE NJUAMBOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1221","UBa/HIMS/01/18/0141","","07-09-2019","165000","","09","2018/2019","1","07-09-2019 18:31:36","fees","1","165000","165000","210000","Super Admmin","07-09-2019","165000","0","NGAH CELINE PASCALINE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1222","UBa/HIMS/01/18/0142","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:32:34","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","SANDRIA AGBORANYOR OBEN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1223","UBA/HIMS/04/16/0060","","07-09-2019","450000","","09","2018/2019","1","07-09-2019 18:34:22","fees","1","450000","450000","","Super Admmin","07-09-2019","450000","0","NKEMATEM JULIUS ALENTANU  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","");
INSERT INTO daily VALUES("1224","UBa/HIMS/04/18/0144","","07-09-2019","75000","","09","2018/2019","1","07-09-2019 18:35:52","fees","1","75000","75000","125000","Super Admmin","07-09-2019","75000","0","NDIBABONGA SOLANGE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","250000");
INSERT INTO daily VALUES("1225","UBa/HIMS/04/18/0145","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:37:36","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","TEMBEI CELINE ENI MAH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1226","UBa/HIMS/05/18/0146","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 18:38:45","fees","1","300000","300000","75000","Super Admmin","07-09-2019","300000","0","JOSEPHINE IJANG NGWANAH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1227","UBa/HIMS/05/18/0147","","07-09-2019","150000","","09","2018/2019","1","07-09-2019 18:39:48","fees","1","150000","150000","225000","Super Admmin","07-09-2019","150000","0","LUMA PETER AJONGAKOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1228","UBa/HIMS/01/18/0148","","07-09-2019","200000","","09","2018/2019","1","07-09-2019 18:40:52","fees","1","200000","200000","175000","Super Admmin","07-09-2019","200000","0","NDZE HANIEL NDUNG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1229","UBa/HIMS/01/18/0149","","07-09-2019","150000","","09","2018/2019","1","07-09-2019 18:44:45","fees","1","150000","150000","225000","Super Admmin","07-09-2019","150000","0","KENNE LONGTSIE II GOEDAN LEBIEN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1230","UBa/HIMS/04/18/0150","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 18:45:53","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MESHACK OKON ABANG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1231","UBa/HIMS/05/18/0151","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:15:50","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ESTEL AZAH CHI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1232","UBa/HIMS/04/18/0152","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:16:38","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","AGBOR  JOAN ONEKE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1233","UBa/HIMS/01/18/0153","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:17:27","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","HAMZA MOUBAARAK DAIROU  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1234","UBa/HIMS/01/18/0154","","07-09-2019","200000","","09","2018/2019","1","07-09-2019 21:18:03","fees","1","200000","200000","175000","Super Admmin","07-09-2019","200000","0","BUMA FAITH PENIN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1235","UBa/HIMS/02/18/0155","","07-09-2019","250000","","09","2018/2019","1","07-09-2019 21:21:38","fees","1","250000","250000","125000","Super Admmin","07-09-2019","250000","0","ECHEROU KASARACHI MIRIAM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1236","UBa/HIMS/04/18/0156","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:22:19","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MAMFI SYVILLE NJEBU  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1237","UBa/HIMS/01/18/0157","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:23:03","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","AGBOR SYLVIE SIRRI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1238","UBa/HIMS/04/18/0158","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:23:43","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","DISERE MOTALE FRANCISCA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1239","UBa/HIMS/04/18/0159","","07-09-2019","320000","","09","2018/2019","1","07-09-2019 21:25:37","fees","1","320000","320000","55000","Super Admmin","07-09-2019","320000","0","MANYAKA ELVIRA MOJOKO  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1240","UBa/HIMS/03/18/0160","","07-09-2019","50000","","09","2018/2019","1","07-09-2019 21:26:24","fees","1","50000","50000","325000","Super Admmin","07-09-2019","50000","0","LYONGA FRANCISCA ENDALE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1241","UBa/HIMS/01/18/0161","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:27:06","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NCHANJI MILDRED MUNKAH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1242","UBa/HIMS/03/18/0162","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:27:58","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","AYUKETA  LAURANTINE EYONG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1243","UBa/HIMS/04/18/0163","","07-09-2019","160000","","09","2018/2019","1","07-09-2019 21:28:55","fees","1","160000","160000","215000","Super Admmin","07-09-2019","160000","0","EMIL MBELLA MOSENGE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1244","UBa/HIMS/04/18/0164","","07-09-2019","80000","","09","2018/2019","1","07-09-2019 21:29:43","fees","1","80000","80000","195000","Super Admmin","07-09-2019","80000","0","ASEH STANLEY TIFUH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","175000");
INSERT INTO daily VALUES("1245","UBa/HIMS/04/18/0166","","07-09-2019","200000","","09","2018/2019","1","07-09-2019 21:31:37","fees","1","200000","200000","0","Super Admmin","07-09-2019","200000","0","OJONG GIDEON OJONG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","250000");
INSERT INTO daily VALUES("1246","UBa/HIMS/02/18/0167","","07-09-2019","285000","","09","2018/2019","1","07-09-2019 21:32:20","fees","1","285000","285000","90000","Super Admmin","07-09-2019","285000","0","EPUPU JENNIFER NSHUME  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1247","UBa/HIMS/02/18/0168","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:33:24","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ENENUE SUSAN NGIA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1248","UBa/HIMS/01/18/0169","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:34:02","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MONFRE MBOZEKO TATIANA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1249","UBa/HIMS/03/18/0171","","07-09-2019","340000","","09","2018/2019","1","07-09-2019 21:43:55","fees","1","340000","340000","35000","Super Admmin","07-09-2019","340000","0","ASONGWE AZONGWA SIMON  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1250","UBa/HIMS/02/18/0172","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:44:34","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MAMA FADIMATOU  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1251","UBa/HIMS/04/18/0173","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:45:09","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NDUNDAT ASIATOU  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1252","UBa/HIMS/05/18/0174","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:45:53","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","BAH MALAIKA EJANG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1253","UBa/HIMS/05/18/0175","","07-09-2019","150000","","09","2018/2019","1","07-09-2019 21:46:47","fees","1","150000","150000","0","Super Admmin","07-09-2019","150000","0","ARREY CATHERINE BESSEM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","300000");
INSERT INTO daily VALUES("1254","UBa/HIMS/01/18/0176","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:47:38","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NTUMNWI NANCY NDOFEH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1255","UBa/HIMS/05/18/0177","","07-09-2019","245000","","09","2018/2019","1","07-09-2019 21:48:34","fees","1","245000","245000","70000","Super Admmin","07-09-2019","245000","0","ANJOH QUINTA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","135000");
INSERT INTO daily VALUES("1256","UBa/HIMS/01/18/0178","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 21:50:23","fees","1","300000","300000","75000","Super Admmin","07-09-2019","300000","0","NKWAWIR THIEVILLE VERNYUY  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1257","UBa/HIMS/04/18/0179","","07-09-2019","170000","","09","2018/2019","1","07-09-2019 21:51:50","fees","1","170000","170000","80000","Super Admmin","07-09-2019","170000","0","FEBNCHAK NGWE EMELDA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","200000");
INSERT INTO daily VALUES("1258","UBa/HIMS/04/18/0180","","07-09-2019","100000","","09","2018/2019","1","07-09-2019 21:52:24","fees","1","100000","100000","0","Super Admmin","07-09-2019","100000","0","MINA MOSIMA EMELDA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","350000");
INSERT INTO daily VALUES("1259","UBa/HIMS/04/18/0181","","07-09-2019","300000","","09","2018/2019","1","07-09-2019 21:53:13","fees","1","300000","300000","25000","Super Admmin","07-09-2019","300000","0","NJIE HANNAH SARLE MOTOME  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","125000");
INSERT INTO daily VALUES("1260","UBa/HIMS/02/18/0182","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:54:47","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","TOUYAH REGINE LAURENCE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1261","UBa/HIMS/04/18/0183","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:55:25","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NJOBEN STEPHANY DUBILAH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1262","UBa/HIMS/02/18/0184","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:56:05","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","YEMDJI TEKEM ABEL URICH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1263","UBa/HIMS/04/18/0185","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:58:12","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MUANDZEVARA AHMED SOBSE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1264","UBa/HIMS/01/18/0186","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:58:55","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","RUTH AYENI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1265","UBa/HIMS/02/18/0187","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 21:59:39","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ALLAH NDAENGUE BRIAN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1266","UBa/HIMS/04/18/0188","","07-09-2019","345000","","09","2018/2019","1","07-09-2019 22:00:36","fees","1","345000","345000","30000","Super Admmin","07-09-2019","345000","0","MALANFEH NCHOKWIAWO STALIN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1267","UBa/HIMS/02/18/0189","","07-09-2019","75000","","09","2018/2019","1","07-09-2019 22:01:24","fees","1","75000","75000","0","Super Admmin","07-09-2019","75000","0","NDUNGAFAC ROSAVIN NDEMBO  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","375000");
INSERT INTO daily VALUES("1268","UBa/HIMS/02/18/0190","","07-09-2019","245000","","09","2018/2019","1","07-09-2019 22:02:08","fees","1","245000","245000","130000","Super Admmin","07-09-2019","245000","0","TARH PATRICK NKANGHA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1269","UBa/HIMS/05/18/0191","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:02:47","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","KENGNE TENEKAM CAROLE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1270","UBa/HIMS/04/18/0192","","07-09-2019","0","","09","2018/2019","1","07-09-2019 22:03:37","fees","1","0","0","375000","Super Admmin","07-09-2019","0","0","NDZEMBOPUH REHANATU MEFEREH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1271","UBa/HIMS/04/18/0194","","07-09-2019","0","","09","2018/2019","1","07-09-2019 22:05:11","fees","1","0","0","0","Super Admmin","07-09-2019","0","0","MBANWEI YANICK FON  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","450000");
INSERT INTO daily VALUES("1272","UBa/HIMS/02/18/0195","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:12:02","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NKENG KELLY ASONG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1273","UBa/HIMS/01/18/0196","","07-09-2019","325000","","09","2018/2019","1","07-09-2019 22:12:52","fees","1","325000","325000","0","Super Admmin","07-09-2019","325000","0","KERENSKY  EFITE EWOUNGUA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","125000");
INSERT INTO daily VALUES("1274","UBa/HIMS/01/18/0197","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:13:32","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ASHU TAKOR EBANGHA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1275","UBa/HIMS/04/18/0198","","07-09-2019","200000","","09","2018/2019","1","07-09-2019 22:14:23","fees","1","200000","200000","0","Super Admmin","07-09-2019","200000","0","NVONDOU NFONGA JUSTINE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","250000");
INSERT INTO daily VALUES("1276","UBa/HIMS/01/18/0200","","07-09-2019","290000","","09","2018/2019","1","07-09-2019 22:16:10","fees","1","290000","290000","85000","Super Admmin","07-09-2019","290000","0","NKONGMIC BILL TENDONGAFAC  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1277","UBa/HIMS/01/18/0201","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:17:06","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","FLOUR A. KELLLY NGOZIE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1278","UBa/HIMS/02/18/0202","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:18:10","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NGANG MAGDALENE ANGWI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1279","UBa/HIMS/02/18/0203","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:18:48","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","LUM SANDRINE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1280","UBa/HIMS/02/18/0204","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:19:22","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MEJUTO ALAIN  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1281","UBa/HIMS/04/18/0205","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:19:58","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","BITYELLA CLINTON NUVAGA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1282","UBa/HIMS/03/18/0206","","07-09-2019","270000","","09","2018/2019","1","07-09-2019 22:20:43","fees","1","270000","270000","105000","Super Admmin","07-09-2019","270000","0","ASANA DELPHINE NGUM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1283","UBa/HIMS/01/18/0207","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:21:19","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NGOH ETAMBI QUINTA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1284","UBa/HIMS/05/18/0208","","07-09-2019","0","","09","2018/2019","1","07-09-2019 22:22:00","fees","1","0","0","75000","Super Admmin","07-09-2019","0","0","NALOVA CHRISTABE L  OTTE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","375000");
INSERT INTO daily VALUES("1285","UBa/HIMS/01/18/0209","","07-09-2019","105000","","09","2018/2019","1","07-09-2019 22:22:46","fees","1","105000","105000","120000","Super Admmin","07-09-2019","105000","0","ETONGWE DIALE PEFOUHO JOSEE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","225000");
INSERT INTO daily VALUES("1286","UBa/HIMS/04/18/0210","","07-09-2019","340000","","09","2018/2019","1","07-09-2019 22:23:47","fees","1","340000","340000","35000","Super Admmin","07-09-2019","340000","0","NKENFACKFAITH ETIENDEM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1287","UBa/HIMS/02/18/0211","","07-09-2019","100000","","09","2018/2019","1","07-09-2019 22:24:24","fees","1","100000","100000","275000","Super Admmin","07-09-2019","100000","0","CHUMBON JOY NAAH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1288","UBa/HIMS/01/18/0212","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:25:02","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","MALOBA MARIE LOUISE SEPPOU  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1289","UBa/HIMS/05/18/0213","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:25:35","fees","1","375000","375000","75000","Super Admmin","07-09-2019","375000","0","DJENE NJOH JOSYLINA GOMEZ  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","0");
INSERT INTO daily VALUES("1290","UBa/HIMS/02/18/0214","","07-09-2019","200000","","09","2018/2019","1","07-09-2019 22:26:20","fees","1","200000","200000","175000","Super Admmin","07-09-2019","200000","0","TABI GWENDOLINE AJOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1291","UBa/HIMS/03/18/0215","","07-09-2019","280000","","09","2018/2019","1","07-09-2019 22:26:58","fees","1","280000","280000","95000","Super Admmin","07-09-2019","280000","0","MUCHONG EMMANUEL TIM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1292","UBa/HIMS/05/18/0216","","07-09-2019","0","","09","2018/2019","1","07-09-2019 22:27:34","fees","1","0","0","75000","Super Admmin","07-09-2019","0","0","NGUM AIMEE TAMAMBANG  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","375000");
INSERT INTO daily VALUES("1293","UBa/HIMS/04/18/0217","","07-09-2019","100000","","09","2018/2019","1","07-09-2019 22:28:10","fees","1","100000","100000","275000","Super Admmin","07-09-2019","100000","0","TANDU BECKY AMA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1294","UBa/HIMS/04/18/0218","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:28:59","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","BESONGAPANG DESMOND  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1295","UBa/HIMS/01/18/0219","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:29:58","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ENOH ROY TABE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1296","UBa/HIMS/02/18/0220","","07-09-2019","330000","","09","2018/2019","1","07-09-2019 22:30:40","fees","1","330000","330000","45000","Super Admmin","07-09-2019","330000","0","JANIEVE NGELLE MUFOR  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1297","UBa/HIMS/02/18/0221","","07-09-2019","250000","","09","2018/2019","1","07-09-2019 22:31:16","fees","1","250000","250000","0","Super Admmin","07-09-2019","250000","0","NDEH AMUNDAM SHALOTTE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","200000");
INSERT INTO daily VALUES("1298","UBa/HIMS/04/18/0222","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:31:57","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","NDONKOU CINDY NANGCAP  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1299","UBa/HIMS/04/18/0223","","07-09-2019","0","","09","2018/2019","1","07-09-2019 22:32:27","fees","1","0","0","0","Super Admmin","07-09-2019","0","0","MUTIA QUINYVETTE SEMNYONYA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","450000");
INSERT INTO daily VALUES("1300","UBa/HIMS/04/18/0224","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:33:13","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","ENOW GRACE ESUA  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1301","UBa/HIMS/04/18/0225","","07-09-2019","103000","","09","2018/2019","1","07-09-2019 22:34:04","fees","1","103000","103000","272000","Super Admmin","07-09-2019","103000","0","LEONG MIRANDA MADIEGFEH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1302","UBa/HIMS/04/18/0226","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:34:41","fees","1","375000","375000","0","Super Admmin","07-09-2019","375000","0","EKINDE GINABELL MUNGE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1303","UBa/HIMS/04/18/0227","","07-09-2019","225000","","09","2018/2019","1","07-09-2019 22:36:24","fees","1","225000","225000","0","Super Admmin","07-09-2019","225000","0","EBANJA JANET NDOBOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","225000");
INSERT INTO daily VALUES("1304","UBa/HIMS/05/18/0228","","07-09-2019","225000","","09","2018/2019","1","07-09-2019 22:38:40","fees","1","225000","225000","0","Super Admmin","07-09-2019","225000","0","TUKOV CARINE   NYUYSINI  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","225000");
INSERT INTO daily VALUES("1305","UBA/HIMS/01/16/0408","","07-09-2019","325000","","09","2018/2019","1","07-09-2019 22:42:33","fees","1","325000","325000","-75000","Super Admmin","07-09-2019","325000","0","EGBE STEPHEN TABOKO  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","200000");
INSERT INTO daily VALUES("1306","UBA/HIMS/02/16/0329","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:44:45","fees","1","375000","375000","75000","Super Admmin","07-09-2019","375000","0","NKWATI MARYLINE NGWINAMBE  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","0");
INSERT INTO daily VALUES("1307","UBA/HIMS/04/16/0359","","07-09-2019","375000","","09","2018/2019","1","07-09-2019 22:45:19","fees","1","375000","375000","75000","Super Admmin","07-09-2019","375000","0","SHADRACK AYONG-TIGOH ABOH  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","0");
INSERT INTO daily VALUES("1308","UBA/HIMS/04/16/0389","","07-09-2019","450000","","09","2018/2019","1","07-09-2019 22:45:55","fees","1","450000","450000","0","Super Admmin","07-09-2019","450000","0","NCHUPA CHARLOTTE LUM  ","07","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","0");
INSERT INTO daily VALUES("1309","UBa/HIMS/01/18/0229","","16-09-2019","0","","09","2018/2019","1","16-09-2019 20:26:16","fees","1","0","0","0","Super Admmin","16-09-2019","0","0","MBWAYE EPOSI FLORA  ","16","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","450000");
INSERT INTO daily VALUES("1310","UBa/HIMS/05/18/0229","","16-09-2019","275000","","09","2018/2019","1","16-09-2019 20:31:30","fees","1","275000","275000","332500","Super Admmin","16-09-2019","275000","0","CHEFUH CELESTINE  ","16","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1311","UBa/HIMS/02/18/0124","","17-09-2019","0","","09","2018/2019","1","17-09-2019 21:48:17","fees","1","0","0","375000","Super Admmin","17-09-2019","0","0","BEATRICE NGUMELI GUMUH  ","17","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1312","UBa/HIMS/04/18/0165","","17-09-2019","100000","","09","2018/2019","1","17-09-2019 21:50:18","fees","1","100000","100000","275000","Super Admmin","17-09-2019","100000","0","JOEL PATRICK ADEME  ","17","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1313","UBa/HIMS/04/18/0192","","17-09-2019","0","","09","2018/2019","1","17-09-2019 21:52:46","fees","1","0","0","375000","Super Admmin","17-09-2019","0","0","NDZEMBOPUH REHANATU MEFEREH  ","17","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1314","UBa/HIMS/01/18/0229","","17-09-2019","0","","09","2018/2019","1","17-09-2019 21:55:54","fees","1","0","0","375000","Super Admmin","17-09-2019","0","0","MBWAYE EPOSI FLORA  ","17","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1315","UBA/HIMS/04/16/0163","","17-09-2019","0","","09","2018/2019","1","17-09-2019 21:57:45","fees","1","0","0","630000","Super Admmin","17-09-2019","0","0","BAKOMA SONITA SHONGWA  ","17","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","0");
INSERT INTO daily VALUES("1321","HIMS/05/19/0001","","15-03-2020","145000","","03","2019/2020","1","15-03-2020 13:23:19","fees","1","145000","145000","155000","Super Admmin","15-03-2020","145000","0","ASHU THIERRY TIPPAH  ","15","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1322","HIMS/06/19/0002","","15-03-2020","80000","","03","2019/2020","1","15-03-2020 13:24:56","fees","1","80000","80000","220000","Super Admmin","15-03-2020","80000","0","NYAMBOD VICRAM TEGUM  ","15","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1323","HIMS/06/19/0003","","15-03-2020","200000","","03","2019/2020","1","15-03-2020 13:25:23","fees","1","200000","200000","100000","Super Admmin","15-03-2020","200000","0","NANJI AGNES ATEH  ","15","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1324","HIMS/06/19/0004","","15-03-2020","100000","","03","2019/2020","1","15-03-2020 13:25:48","fees","1","100000","100000","200000","Super Admmin","15-03-2020","100000","0","PRACIOUS UCHECHUKU OSUIWU  ","15","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1325","HIMS/08/19/0005","","15-03-2020","0","","03","2019/2020","1","15-03-2020 13:28:35","fees","1","0","0","300000","Super Admmin","15-03-2020","0","0","PRISO MARCEL MOKASE  ","15","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1326","HIMS/06/19/0006","","15-03-2020","290000","","03","2019/2020","1","15-03-2020 13:29:10","fees","1","290000","290000","10000","Super Admmin","15-03-2020","290000","0","TCHAKOUTE BATCHOU TATIANA BELVIANE  ","15","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1327","HIMS/05/19/0007","","15-03-2020","200000","","03","2019/2020","1","15-03-2020 13:29:50","fees","1","200000","200000","100000","Super Admmin","15-03-2020","200000","0","TATAW COMFORT AGBOR  ","15","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1328","HIMS/03/19/0008","","15-03-2020","200000","","03","2019/2020","1","15-03-2020 19:05:34","fees","1","200000","200000","100000","Super Admmin","15-03-2020","200000","0","FON ESIKE CLAUDIA  ","15","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1329","HIMS/02/19/0010","","15-03-2020","100000","","03","2019/2020","1","15-03-2020 19:11:01","fees","1","100000","100000","200000","Super Admmin","15-03-2020","100000","0","NOUBISSIE CLINTON  ","15","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1330","UBa/HIMS/05/18/0081","","15-03-2020","225000","","03","2019/2020","1","15-03-2020 19:13:46","fees","1","225000","225000","0","Super Admmin","15-03-2020","225000","0","KUM CHANTAL NSEN  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","225000");
INSERT INTO daily VALUES("1331","UBa/HIMS/03/18/0002","","15-03-2020","250000","","03","2019/2020","1","15-03-2020 19:14:27","fees","1","250000","250000","125000","Super Admmin","15-03-2020","250000","0","STEPHANIE NGOWO MANGA  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1332","UBa/HIMS/03/18/0003","","15-03-2020","270000","","03","2019/2020","1","15-03-2020 19:16:16","fees","1","270000","270000","105000","Super Admmin","15-03-2020","270000","0","HELLEN MASSAM LIENGU MOKY  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1333","UBa/HIMS/04/18/0004","","15-03-2020","0","","03","2019/2020","1","15-03-2020 19:17:29","fees","1","0","0","375000","Super Admmin","15-03-2020","0","0","TAKOW MARIE ESUA  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1334","UBa/HIMS/04/18/0005","","15-03-2020","100000","","03","2019/2020","1","15-03-2020 19:17:57","fees","1","100000","100000","275000","Super Admmin","15-03-2020","100000","0","AGBOR BECKY ENOW MENYANG  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1335","UBa/HIMS/04/18/0006","","15-03-2020","200000","","03","2019/2020","1","15-03-2020 19:18:38","fees","1","200000","200000","175000","Super Admmin","15-03-2020","200000","0","EYINMEKA THOMAS TOMISIN  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1336","UBa/HIMS/05/18/0007","","15-03-2020","200000","","03","2019/2020","1","15-03-2020 19:20:17","fees","1","200000","200000","175000","Super Admmin","15-03-2020","200000","0","MBOLLE CAMILLA  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1337","UBa/HIMS/01/18/0008","","15-03-2020","290000","","03","2019/2020","1","15-03-2020 19:21:23","fees","1","290000","290000","85000","Super Admmin","15-03-2020","290000","0","KANG RUTH NGWNDIBE  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1338","UBa/HIMS/02/18/0009","","15-03-2020","375000","","03","2019/2020","1","15-03-2020 19:22:17","fees","1","375000","375000","0","Super Admmin","15-03-2020","375000","0","AGBOR MERCY FAKONYUI  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1339","UBa/HIMS/01/18/0010","","15-03-2020","275000","","03","2019/2020","1","15-03-2020 19:23:13","fees","1","275000","275000","100000","Super Admmin","15-03-2020","275000","0","DURU LARISA BENUI  ","15","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1340","HIMS/07/18/0001","","15-03-2020","40000","","03","2019/2020","1","15-03-2020 19:28:17","fees","1","40000","40000","0","Super Admmin","15-03-2020","40000","0","ABIGAIL LEM NJOFOR  ","15","CASH"," ","CASH","","0","","0","","","","","300","","","","285000");
INSERT INTO daily VALUES("1341","HIMS/01/19/0011","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 11:40:15","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","NGAM BEATRICE LEKE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1342","HIMS/08/19/0012","","16-03-2020","0","","03","2019/2020","1","16-03-2020 11:42:31","fees","1","0","0","300000","Super Admmin","16-03-2020","0","0","EKOMBE IMMACULATE NGOTA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1343","HIMS/08/19/0013","","16-03-2020","250000","","03","2019/2020","1","16-03-2020 11:43:30","fees","1","250000","250000","50000","Super Admmin","16-03-2020","250000","0","CHIGOZIE CHIDI COLLINS MUMA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1344","HIMS/02/19/0014","","16-03-2020","120000","","03","2019/2020","1","16-03-2020 11:44:22","fees","1","120000","120000","180000","Super Admmin","16-03-2020","120000","0","NDIFOR SHARON ATAM  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1345","HIMS/06/19/0015","","16-03-2020","0","","03","2019/2020","1","16-03-2020 11:44:57","fees","1","0","0","300000","Super Admmin","16-03-2020","0","0","MOIWO IVY FONGANG  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1346","HIMS/01/19/0016","","16-03-2020","150000","","03","2019/2020","1","16-03-2020 11:45:49","fees","1","150000","150000","150000","Super Admmin","16-03-2020","150000","0","KEMONGNE SIMO JENNIFER FRANCISCA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1347","HIMS/08/19/0017","","16-03-2020","","","03","2019/2020","1","16-03-2020 11:46:58","fees","1","","","300000","Super Admmin","16-03-2020","","0","NJODEU NJABOUG WONGCHEU  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1348","HIMS/02/19/0018","","16-03-2020","","","03","2019/2020","1","16-03-2020 11:47:57","fees","1","","","300000","Super Admmin","16-03-2020","","0","PALAYE MIRIAM  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1349","HIMS/03/19/0019","","16-03-2020","290000","","03","2019/2020","1","16-03-2020 11:48:53","fees","1","290000","290000","10000","Super Admmin","16-03-2020","290000","0","CHRISTINA EBENYE MOLENDE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1350","HIMS/06/19/0020","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 11:49:34","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","MBAH ENOW BORIS  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1351","HIMS/09/19/0021","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 11:50:30","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","TIKU IRENE ANGIE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1352","HIMS/06/19/0022","","16-03-2020","190000","","03","2019/2020","1","16-03-2020 11:51:40","fees","1","190000","190000","110000","Super Admmin","16-03-2020","190000","0","ETAH AGBORBISONG AYUK  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1353","HIMS/08/19/0023","","16-03-2020","220000","","03","2019/2020","1","16-03-2020 11:52:37","fees","1","220000","220000","80000","Super Admmin","16-03-2020","220000","0","OTANG STEPHEN EBAIPAY  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1354","HIMS/08/19/0024","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 11:53:22","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","CATHERINE ENANGA NGE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1355","HIMS/08/19/0025","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 11:54:06","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","NKWELLE MUKE ANITA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1356","HIMS/05/19/0026","","16-03-2020","","","03","2019/2020","1","16-03-2020 11:54:59","fees","1","","","","Super Admmin","16-03-2020","","0","MBOTIJI MCCOIST YELA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1357","HIMS/05/19/0026","","16-03-2020","0","","03","2019/2020","1","16-03-2020 11:55:44","fees","1","0","0","300000","Super Admmin","16-03-2020","0","0","MBOTIJI MCCOIST YELA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1358","HIMS/01/19/0027","","16-03-2020","210000","","03","2019/2020","1","16-03-2020 11:56:27","fees","1","210000","210000","90000","Super Admmin","16-03-2020","210000","0","MEME QUEENSOLINE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1359","HIMS/01/19/0028","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 11:57:14","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","AYICHAP TANYI AYI  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1360","HIMS/01/19/0029","","16-03-2020","300000","","03","2019/2020","1","16-03-2020 11:59:18","fees","1","300000","300000","10000","Super Admmin","16-03-2020","300000","0","ADAPOE MOLINDO ENDALE EVELYN  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1361","HIMS/01/19/0030","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 12:00:54","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","ESTHER SENGELE JASSA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1362","HIMS/09/19/0031","","16-03-2020","","","03","2019/2020","1","16-03-2020 12:01:45","fees","1","","","300000","Super Admmin","16-03-2020","","0","FAI PEACE NTUMBI  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1363","HIMS/02/19/0032","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 12:02:22","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","ITIE REMMY MISORI  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1364","HIMS/08/19/0033","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 12:03:17","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","MAC NDIP ELVIS BISONG Jr  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1365","HIMS/05/19/0034","","16-03-2020","0","","03","2019/2020","1","16-03-2020 12:03:47","fees","1","0","0","300000","Super Admmin","16-03-2020","0","0","BOGNI DAHOLINE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1366","HIMS/08/19/0036","","16-03-2020","300000","","03","2019/2020","1","16-03-2020 12:04:58","fees","1","300000","300000","0","Super Admmin","16-03-2020","300000","0","NANJE ELVIS NAMBO  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1367","HIMS/05/19/0034","","16-03-2020","0","","03","2019/2020","1","16-03-2020 12:05:35","fees","1","0","0","300000","Super Admmin","16-03-2020","0","0","BOGNI DAHOLINE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1368","HIMS/06/19/0035","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 12:06:20","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","ETOKWE EMELINE FONKA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1369","HIMS/06/19/0037","","16-03-2020","15000","","03","2019/2020","1","16-03-2020 12:07:35","fees","1","15000","15000","220000","Super Admmin","16-03-2020","15000","0","BENEDID LIFANJE BILLE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","90000");
INSERT INTO daily VALUES("1370","HIMS/08/19/0038","","16-03-2020","125000","","03","2019/2020","1","16-03-2020 12:09:35","fees","1","125000","125000","175000","Super Admmin","16-03-2020","125000","0","NYANDA VIANIES  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1371","HIMS/02/19/0039","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 12:10:20","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","MOLENDE BRIYAN TONI  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1372","HIMS/03/19/0040","","16-03-2020","40000","","03","2019/2020","1","16-03-2020 12:11:17","fees","1","40000","40000","260000","Super Admmin","16-03-2020","40000","0","EBENYE CHRISTINA MOLENDE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1373","HIMS/01/19/0041","","16-03-2020","260000","","03","2019/2020","1","16-03-2020 12:12:27","fees","1","260000","260000","40000","Super Admmin","16-03-2020","260000","0","SONE CLINTON MEBUNE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1374","HIMS/01/19/0042","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 12:13:33","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","EDITH EPOSI JOSO NGUM  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1375","HIMS/01/19/0043","","16-03-2020","","","03","2019/2020","1","16-03-2020 12:14:12","fees","1","","","300000","Super Admmin","16-03-2020","","0","MAYONG MICHELE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1376","HIMS/08/19/0044","","16-03-2020","150000","","03","2019/2020","1","16-03-2020 12:15:02","fees","1","150000","150000","150000","Super Admmin","16-03-2020","150000","0","NJINUWOH ANTHIONE TASSAH  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1377","HIMS/06/19/0045","","16-03-2020","","","03","2019/2020","1","16-03-2020 12:15:48","fees","1","","","300000","Super Admmin","16-03-2020","","0","AKE HELEN ASAAH  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1378","HIMS/08/19/0045","","16-03-2020","70000","","03","2019/2020","1","16-03-2020 12:16:57","fees","1","70000","70000","230000","Super Admmin","16-03-2020","70000","0","AJIEH LUCIEN EMAH  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1379","HIMS/05/19/0048","","16-03-2020","50000","","03","2019/2020","1","16-03-2020 12:20:24","fees","1","50000","50000","250000","Super Admmin","16-03-2020","50000","0","RHEMA HARRY NWAHA YEMBA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1380","HIMS/09/19/0049","","16-03-2020","50000","","03","2019/2020","1","16-03-2020 12:21:07","fees","1","50000","50000","250000","Super Admmin","16-03-2020","50000","0","HALLE ANTHONY NGONDE Jr  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1381","HIMS/08/19/0050","","16-03-2020","170000","","03","2019/2020","1","16-03-2020 12:22:05","fees","1","170000","170000","130000","Super Admmin","16-03-2020","170000","0","NELOUMTA FLORA   ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1382","HIMS/06/19/0051","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 12:23:18","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","NSANGTUM QUINTA AKEMBOM  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1383","HIMS/05/19/0052","","16-03-2020","150000","","03","2019/2020","1","16-03-2020 12:24:20","fees","1","150000","150000","150000","Super Admmin","16-03-2020","150000","0","YUNIWO JOCELYN KONGLA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1384","HIMS/02/19/0053","","16-03-2020","0","","03","2019/2020","1","16-03-2020 12:25:02","fees","1","0","0","300000","Super Admmin","16-03-2020","0","0","TAKOW NELSON ASHU  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1385","HIMS/03/19/0054","","16-03-2020","160000","","03","2019/2020","1","16-03-2020 12:25:48","fees","1","160000","160000","140000","Super Admmin","16-03-2020","160000","0","EGBE KENNETH EGBE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1386","HIMS/06/19/0055","","16-03-2020","","","03","2019/2020","1","16-03-2020 12:26:41","fees","1","","","300000","Super Admmin","16-03-2020","","0","LUM MABEL NDE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1387","HIMS/06/19/0056","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 12:27:30","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","SERAPHINE EJEMA EWANGE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1388","HIMS/06/19/0057","","16-03-2020","230000","","03","2019/2020","1","16-03-2020 12:28:17","fees","1","230000","230000","70000","Super Admmin","16-03-2020","230000","0","NJUA BRIAN NGONGMUSOH  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1389","HIMS/02/19/0058","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 12:29:09","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","WUBNYOMGA MANUELLA EKANJE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1390","HIMS/01/19/0059","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 12:30:01","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","ANYIBEZAH IRINE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1391","UBa/HIMS/03/19/0128","","16-03-2020","250000","","03","2019/2020","1","16-03-2020 12:31:05","fees","1","250000","250000","175000","Super Admmin","16-03-2020","250000","0","FORKA LUCIA MAKONGOH  ","16","CASH"," ","CASH","","0","","0","","","","","400","","","","25000");
INSERT INTO daily VALUES("1392","HIMS/09/19/0061","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 12:32:05","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","KELVIN JOBI EKEMA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1393","HIMS/05/19/0062","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 12:35:00","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","DINGA HENADENSE TAKWA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1394","HIMS/08/19/0063","","16-03-2020","40000","","03","2019/2020","1","16-03-2020 12:35:52","fees","1","40000","40000","260000","Super Admmin","16-03-2020","40000","0","ENOW ROSE LAURA NGO-PALA  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1395","HIMS/01/19/0064","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 12:36:44","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","NGWA PRIESTLY  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1396","HIMS/01/19/0065","","16-03-2020","200000","","03","2019/2020","1","16-03-2020 12:37:24","fees","1","200000","200000","100000","Super Admmin","16-03-2020","200000","0","AZAH NENGO GERMAINE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1397","HIMS/08/19/0066","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 12:38:23","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","BISCHE TRACEY NJAH  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1398","HIMS/06/19/0067","","16-03-2020","140000","","03","2019/2020","1","16-03-2020 12:39:23","fees","1","140000","140000","160000","Super Admmin","16-03-2020","140000","0","POBDINGA NOEL TITANJU  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1399","HIMS/09/19/0068","","16-03-2020","100000","","03","2019/2020","1","16-03-2020 12:40:17","fees","1","100000","100000","200000","Super Admmin","16-03-2020","100000","0","MUTA JERRY AGWO  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1400","HIMS/02/19/0069","","16-03-2020","25000","","03","2019/2020","1","16-03-2020 12:41:13","fees","1","25000","25000","75000","Super Admmin","16-03-2020","25000","0","NJETI EMILIA MANKIE  ","16","CASH"," ","CASH","","0","","0","","","","","200","","","","225000");
INSERT INTO daily VALUES("1402","HIMS/02/19/0071","","17-03-2020","50000","","03","2019/2020","1","17-03-2020 8:04:08","fees","1","50000","50000","250000","Super Admmin","17-03-2020","50000","0","ANCHI VENERIA TAMBE  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1403","HIMS/02/19/0070","","17-03-2020","180000","","03","2019/2020","1","17-03-2020 8:05:34","fees","1","180000","180000","120000","Super Admmin","17-03-2020","180000","0","NGOMEBONG EUGENE SONE JUNIOR  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1404","HIMS/06/19/0072","","17-03-2020","160000","","03","2019/2020","1","17-03-2020 8:09:47","fees","1","160000","160000","140000","Super Admmin","17-03-2020","160000","0","ANKUNGHA NAOMI TIMTI  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1405","HIMS/06/19/0073","","17-03-2020","190000","","03","2019/2020","1","17-03-2020 13:05:03","fees","1","190000","190000","110000","Super Admmin","17-03-2020","190000","0","LYOMBE BORIS LUMA  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1406","HIMS/06/19/0074","","17-03-2020","60000","","03","2019/2020","1","17-03-2020 13:06:00","fees","1","60000","60000","240000","Super Admmin","17-03-2020","60000","0","TABE LESLY LUCKLER ENOWMPEY  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1407","HIMS/08/19/0075","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:06:47","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","NYENIPOK FLOBERT KEMBUYA  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1408","HIMS/08/19/0076","","17-03-2020","80000","","03","2019/2020","1","17-03-2020 13:07:36","fees","1","80000","80000","220000","Super Admmin","17-03-2020","80000","0","ENANG ISABEL MESODE  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1409","HIMS/02/19/0077","","17-03-2020","70000","","03","2019/2020","1","17-03-2020 13:08:28","fees","1","70000","70000","230000","Super Admmin","17-03-2020","70000","0","MALOWA NGIMBIS LIMUNGA  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1410","HIMS/06/19/0078","","17-03-2020","135000","","03","2019/2020","1","17-03-2020 13:09:14","fees","1","135000","135000","165000","Super Admmin","17-03-2020","135000","0","TAKU RUTH MEYEN  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1411","HIMS/05/19/0079","","17-03-2020","230000","","03","2019/2020","1","17-03-2020 13:10:04","fees","1","230000","230000","70000","Super Admmin","17-03-2020","230000","0","JITAH KAILUIKEDZEE QOUALA  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1412","HIMS/05/19/0080","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:10:58","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","EMILIA BESSEM OTANG  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1413","HIMS/06/19/0081","","17-03-2020","150000","","03","2019/2020","1","17-03-2020 13:11:47","fees","1","150000","150000","150000","Super Admmin","17-03-2020","150000","0","NFON BARBARA DIOW  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1414","HIMS/05/19/0082","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:12:36","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","TAMANGWA ASHLEY NGACOU  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1415","HIMS/01/19/0083","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:13:22","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","NGIMAZI JEVIS TAJOAH  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1416","HIMS/05/19/0084","","17-03-2020","150000","","03","2019/2020","1","17-03-2020 13:14:14","fees","1","150000","150000","150000","Super Admmin","17-03-2020","150000","0","SEMA TAFON NUBILA  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1417","HIMS/09/19/0085","","17-03-2020","250000","","03","2019/2020","1","17-03-2020 13:15:49","fees","1","250000","250000","75000","Super Admmin","17-03-2020","250000","0","SAKWE BETRANDCLIF BEKANGERI  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1418","HIMS/06/19/0086","","17-03-2020","","","03","2019/2020","1","17-03-2020 13:16:45","fees","1","","","155000","Super Admmin","17-03-2020","","0","SIRI ROSITAR FRU  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","170000");
INSERT INTO daily VALUES("1419","HIMS/01/19/0087","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:17:45","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","FONYUY ANICET NYUYKI  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1420","HIMS/05/19/0088","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:19:31","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","NTALLA TERRY FONCHAM  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1421","HIMS/06/19/0089","","17-03-2020","70000","","03","2019/2020","1","17-03-2020 13:20:30","fees","1","70000","70000","230000","Super Admmin","17-03-2020","70000","0","EKOH MARIE-CLAIRE ABAH NWEJIA  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1422","HIMS/06/19/0090","","17-03-2020","","","03","2019/2020","1","17-03-2020 13:22:03","fees","1","","","155000","Super Admmin","17-03-2020","","0","LEOGA MERCY  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","170000");
INSERT INTO daily VALUES("1423","HIMS/02/19/0091","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:23:39","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","BIH QUINIVA NJI  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1424","HIMS/02/19/0092","","17-03-2020","210000","","03","2019/2020","1","17-03-2020 13:24:52","fees","1","210000","210000","90000","Super Admmin","17-03-2020","210000","0","SHALAM BERILINE ASILI AFOR  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1425","HIMS/01/19/0093","","17-03-2020","","","03","2019/2020","1","17-03-2020 13:25:42","fees","1","","","300000","Super Admmin","17-03-2020","","0","NTUBE BLANDINE ETONE  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1426","HIMS/06/19/0094","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:26:22","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","IHIMS REINE YONOMO  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1427","HIMS/01/19/0095","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:28:51","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","ANGUH PELAGY VIBAIN  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1428","HIMS/06/19/0096","","17-03-2020","","","03","2019/2020","1","17-03-2020 13:29:41","fees","1","","","300000","Super Admmin","17-03-2020","","0","AMBO CYNTHIA MUNA  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1429","HIMS/01/19/0098","","17-03-2020","225000","","03","2019/2020","1","17-03-2020 13:34:27","fees","1","225000","225000","75000","Super Admmin","17-03-2020","225000","0","SHEI KELLY NKEH  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1430","HIMS/06/19/0099","","17-03-2020","125000","","03","2019/2020","1","17-03-2020 13:35:07","fees","1","125000","125000","175000","Super Admmin","17-03-2020","125000","0","NEBA ALLEN NGWA  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1431","HIMS/05/19/0100","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:36:05","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","KOME MINNETTE MOSEDE  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1432","HIMS/06/19/0101","","17-03-2020","80000","","03","2019/2020","1","17-03-2020 13:37:06","fees","1","80000","80000","220000","Super Admmin","17-03-2020","80000","0","NUBIDGA KELLY SANGALEM  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1433","HIMS/06/19/0102","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:37:53","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","NGWESE MARIE JEANNE LOMBE  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1434","HIMS/06/19/0103","","17-03-2020","265000","","03","2019/2020","1","17-03-2020 13:38:39","fees","1","265000","265000","35000","Super Admmin","17-03-2020","265000","0","EKOKO MANUELA   ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1435","HIMS/06/19/0104","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 13:39:26","fees","1","100000","100000","200000","Super Admmin","17-03-2020","100000","0","NDANGOH BORIS FON  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1436","HIMS/08/19/0106","","17-03-2020","130000","","03","2019/2020","1","17-03-2020 13:41:57","fees","1","130000","130000","170000","Super Admmin","17-03-2020","130000","0","ANYI PELAGIE  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1437","HIMS/01/19/0107","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:42:54","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","DANAH FAVOUR WANJI  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1438","HIMS/06/19/0108","","17-03-2020","90000","","03","2019/2020","1","17-03-2020 13:43:55","fees","1","90000","90000","210000","Super Admmin","17-03-2020","90000","0","MBU DERICK SHEAVOUABO  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1439","HIMS/02/19/0109","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 13:45:05","fees","1","200000","200000","100000","Super Admmin","17-03-2020","200000","0","OBEN IVO AYUK  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1440","HIMS/01/19/0111","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 13:47:42","fees","1","100000","100000","200000","Super Admmin","17-03-2020","100000","0","EJOH DESMOND ECHAKO  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1441","HIMS/05/19/0112","","17-03-2020","","","03","2019/2020","1","17-03-2020 13:48:57","fees","1","","","300000","Super Admmin","17-03-2020","","0","MPIKI NGWESSE FIDELINE  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1442","HIMS/08/19/0117","","17-03-2020","0","","03","2019/2020","1","17-03-2020 13:56:34","fees","1","0","0","0","Super Admmin","17-03-2020","0","0","KEN BLANDINE  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","315000");
INSERT INTO daily VALUES("1443","HIMS/09/19/0118","","17-03-2020","300000","","03","2019/2020","1","17-03-2020 13:57:29","fees","1","300000","300000","0","Super Admmin","17-03-2020","300000","0","ANGAFOR MOMBOOH NWELANUI EMMANUEL  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1444","HIMS/08/19/0120","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 13:58:13","fees","1","100000","100000","200000","Super Admmin","17-03-2020","100000","0","TABI DIEUDONNE NTISOH  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1445","HIMS/03/19/0121","","17-03-2020","","","03","2019/2020","1","17-03-2020 14:00:28","fees","1","","","300000","Super Admmin","17-03-2020","","0","DIONE NZEGGE ODILIA  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","40000");
INSERT INTO daily VALUES("1446","HIMS/05/19/0122","","17-03-2020","","","03","2019/2020","1","17-03-2020 14:01:27","fees","1","","","300000","Super Admmin","17-03-2020","","0","JONG BRASE KENDU  ","17","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1447","UBa/HIMS/04/18/0004","","17-03-2020","","","03","2019/2020","1","17-03-2020 14:06:00","fees","1","","","375000","Super Admmin","17-03-2020","","0","TAKOW MARIE ESUA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1448","UBa/HIMS/01/18/0011","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 14:09:02","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","TANGWA MAJOLIE NKINI NGI  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1449","UBa/HIMS/02/18/0012","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 14:09:47","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","ESOW DELIX EKUME  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1450","UBa/HIMS/05/18/0013","","17-03-2020","","","03","2019/2020","1","17-03-2020 14:10:47","fees","1","","","375000","Super Admmin","17-03-2020","","0","EWOKOLO PEACE ETENGENE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1451","UBa/HIMS/03/18/0015","","17-03-2020","375000","","03","2019/2020","1","17-03-2020 14:14:42","fees","1","375000","375000","0","Super Admmin","17-03-2020","375000","0","ABOH ORENTIA TIKUM  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1452","UBa/HIMS/05/18/0016","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 14:15:40","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","BOBGA LAURA BINSEH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1453","UBa/HIMS/02/18/0017","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 14:16:55","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","CHIZOBA MIRIAM OKAFOR  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1454","UBa/HIMS/04/18/0018","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 14:17:47","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","AKURO STEPHANIE ABECK  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1455","UBa/HIMS/02/18/0019","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 14:18:46","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","MBEMA EMELDA KAKUNTAN  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1456","UBa/HIMS/04/18/0020","","17-03-2020","375000","","03","2019/2020","1","17-03-2020 14:19:35","fees","1","375000","375000","0","Super Admmin","17-03-2020","375000","0","MUNGE ANSGAR MBONGWE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1457","UBa/HIMS/04/18/0021","","17-03-2020","120000","","03","2019/2020","1","17-03-2020 14:20:32","fees","1","120000","120000","255000","Super Admmin","17-03-2020","120000","0","BRIDGET IMBOLE LYONGA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1458","UBa/HIMS/02/18/0022","","17-03-2020","75000","","03","2019/2020","1","17-03-2020 14:21:37","fees","1","75000","75000","300000","Super Admmin","17-03-2020","75000","0","MUNJI MATILDA AKWI  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1459","UBa/HIMS/01/18/0024","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 14:24:10","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","KINGE MALCOLM MOLUA MAKOLO  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1460","UBa/HIMS/05/19/0025","","17-03-2020","325000","","03","2019/2020","1","17-03-2020 14:25:34","fees","1","325000","325000","50000","Super Admmin","17-03-2020","325000","0","AKWIMI TCHAPNDA ROSETTE SANDRINE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1461","UBa/HIMS/01/19/0026","","17-03-2020","180000","","03","2019/2020","1","17-03-2020 14:26:19","fees","1","180000","180000","195000","Super Admmin","17-03-2020","180000","0","ELONE SONITA DIONE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1462","UBa/HIMS/01/19/0027","","17-03-2020","285000","","03","2019/2020","1","17-03-2020 14:27:10","fees","1","285000","285000","90000","Super Admmin","17-03-2020","285000","0","GEOGETE NKECHINYERE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1463","UBa/HIMS/02/19/0030","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 14:30:52","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","NDENGOUE THERESIA MBAH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1464","UBa/HIMS/03/19/0031","","17-03-2020","75000","","03","2019/2020","1","17-03-2020 14:31:35","fees","1","75000","75000","175000","Super Admmin","17-03-2020","75000","0","MARRIVONNE ESIBA NGOSSO  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","200000");
INSERT INTO daily VALUES("1465","UBa/HIMS/04/19/0032","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 14:32:36","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","JAM PATRICE AFUMA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1466","UBa/HIMS/05/19/0033","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 14:33:31","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","NDIMUH EMMANUELA NSERBU  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1467","UBa/HIMS/03/19/0037","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 14:37:33","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","EKEI POLIVATE AZONGHO  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1468","UBa/HIMS/05/19/0038","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 14:38:34","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","OKAFOR CHUKA CHINEMELUM FRANK  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1469","UBa/HIMS/01/19/0039","","17-03-2020","375000","","03","2019/2020","1","17-03-2020 14:39:16","fees","1","375000","375000","0","Super Admmin","17-03-2020","375000","0","ELIZ STEPHANIE AGBOR ELAD  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1470","UBa/HIMS/01/19/0040","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 14:40:02","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","YOTAGI MBIA JEAN CLOUDE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1471","UBa/HIMS/03/19/0041","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 14:40:47","fees","1","100000","100000","125000","Super Admmin","17-03-2020","100000","0","DEGHA DESMOND TEM  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","225000");
INSERT INTO daily VALUES("1472","UBa/HIMS/05/19/0043","","17-03-2020","300000","","03","2019/2020","1","17-03-2020 14:42:30","fees","1","300000","300000","75000","Super Admmin","17-03-2020","300000","0","MBAMWEI COMFORT ACHA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1473","UBa/HIMS/01/19/0044","","17-03-2020","260000","","03","2019/2020","1","17-03-2020 14:43:45","fees","1","260000","260000","115000","Super Admmin","17-03-2020","260000","0","LEMNYUY BLAVIN KONGNYUY  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1474","UBa/HIMS/02/19/0045","","17-03-2020","55000","","03","2019/2020","1","17-03-2020 14:45:07","fees","1","55000","55000","320000","Super Admmin","17-03-2020","55000","0","NKENG KELLY ASONG  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1475","UBa/HIMS/03/18/0046","","17-03-2020","250000","","03","2019/2020","1","17-03-2020 14:46:04","fees","1","250000","250000","125000","Super Admmin","17-03-2020","250000","0","AKOTARH MBUMANYOH GEORGE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1476","UBa/HIMS/04/18/0047","","17-03-2020","225000","","03","2019/2020","1","17-03-2020 14:46:48","fees","1","225000","225000","0","Super Admmin","17-03-2020","225000","0","NFOR ISABELLA MANKE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","225000");
INSERT INTO daily VALUES("1477","UBa/HIMS/01/19/0062","","17-03-2020","375000","","03","2019/2020","1","17-03-2020 14:51:00","fees","1","375000","375000","0","Super Admmin","17-03-2020","375000","0","ASABE NOELLA LEMNIE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1478","UBa/HIMS/03/19/0061","","17-03-2020","350000","","03","2019/2020","1","17-03-2020 14:51:57","fees","1","350000","350000","25000","Super Admmin","17-03-2020","350000","0","NGNOYUM KAPTUE ORNELLA LAURE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1479","UBa/HIMS/05/19/0060","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 14:52:50","fees","1","100000","100000","275000","Super Admmin","17-03-2020","100000","0","TAH QUEENZELA AKE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1480","UBa/HIMS/01/19/0057","","17-03-2020","","","03","2019/2020","1","17-03-2020 14:55:14","fees","1","","","375000","Super Admmin","17-03-2020","","0","NJUH JAME-ANDY EBUA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1481","UBa/HIMS/04/19/0056","","17-03-2020","","","03","2019/2020","1","17-03-2020 14:56:13","fees","1","","","375000","Super Admmin","17-03-2020","","0","GWISHO NORRIS KWIFUEAN  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1482","UBa/HIMS/04/19/0055","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 14:57:36","fees","1","100000","100000","275000","Super Admmin","17-03-2020","100000","0","NGETI HANS NGETI  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1483","UBa/HIMS/04/18/0054","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 14:58:17","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","GLORY NGWAH EGBAH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1484","UBa/HIMS/04/18/0053","","17-03-2020","150000","","03","2019/2020","1","17-03-2020 14:59:06","fees","1","150000","150000","225000","Super Admmin","17-03-2020","150000","0","WOMEI GODFRIDA NAINMBONG  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1485","UBa/HIMS/02/18/0052","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 15:00:08","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","ENOW EBOT JACKY ARRAH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1486","UBa/HIMS/02/18/0051","","17-03-2020","50000","","03","2019/2020","1","17-03-2020 15:00:50","fees","1","50000","50000","325000","Super Admmin","17-03-2020","50000","0","MMETI SUBI AKWO  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1487","UBa/HIMS/04/18/0050","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 15:01:41","fees","1","100000","100000","275000","Super Admmin","17-03-2020","100000","0","NGUMYI SYLVIE NCHANWOH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1488","UBa/HIMS/01/18/0049","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 15:02:41","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","NCHIJIA BRIESTLY  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1489","UBa/HIMS/02/19/0066","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 15:03:31","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","ENOWMANYO ABEY  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1490","UBa/HIMS/02/19/0067","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 15:04:04","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","TEMJEM TAJOAH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1491","UBa/HIMS/02/19/0068","","17-03-2020","325000","","03","2019/2020","1","17-03-2020 15:04:45","fees","1","325000","325000","50000","Super Admmin","17-03-2020","325000","0","MBANGWEI CHARLOTTE TEGWI  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1492","UBa/HIMS/05/19/0071","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 15:07:57","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","ESAPA LINDA FESE YOWEH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1493","UBa/HIMS/01/19/0072","","17-03-2020","175000","","03","2019/2020","1","17-03-2020 15:08:50","fees","1","175000","175000","200000","Super Admmin","17-03-2020","175000","0","NKWANCHUNG JECHOLIA TABOKO  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1494","UBa/HIMS/01/19/0073","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 15:09:53","fees","1","100000","100000","275000","Super Admmin","17-03-2020","100000","0","AMIH EUGENE ZEH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1495","UBa/HIMS/03/19/0074","","17-03-2020","270000","","03","2019/2020","1","17-03-2020 15:10:51","fees","1","270000","270000","105000","Super Admmin","17-03-2020","270000","0","MUNASARA SIDELLA ENJOH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1496","UBa/HIMS/03/19/0075","","17-03-2020","0","","03","2019/2020","1","17-03-2020 15:11:25","fees","1","0","0","375000","Super Admmin","17-03-2020","0","0","FORBIH CYRILL CHEH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1497","UBa/HIMS/01/19/0076","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 15:12:13","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","ASUE ROSE EBIA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1498","UBa/HIMS/01/19/0077","","17-03-2020","154000","","03","2019/2020","1","17-03-2020 15:13:09","fees","1","154000","154000","221000","Super Admmin","17-03-2020","154000","0","LOBE DIMENI EYABE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1499","UBa/HIMS/02/19/0082","","17-03-2020","","","03","2019/2020","1","17-03-2020 15:16:55","fees","1","","","375000","Super Admmin","17-03-2020","","0","STEPHANIE MALOR AKAM  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1500","UBa/HIMS/02/19/0083","","17-03-2020","265000","","03","2019/2020","1","17-03-2020 15:18:27","fees","1","265000","265000","110000","Super Admmin","17-03-2020","265000","0","TATASON SHANICE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1501","UBa/HIMS/02/19/0084","","17-03-2020","175000","","03","2019/2020","1","17-03-2020 15:19:52","fees","1","175000","175000","175000","Super Admmin","17-03-2020","175000","0","ALEMAZUNG SONITA KELLY  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","100000");
INSERT INTO daily VALUES("1502","UBa/HIMS/05/19/0085","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 15:20:57","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","ZAKARI MOHAMMED SALISU  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1503","UBa/HIMS/01/19/0086","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 15:21:53","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","ENOW ARREY ENOW  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1504","UBa/HIMS/02/19/0087","","17-03-2020","150000","","03","2019/2020","1","17-03-2020 15:22:54","fees","1","150000","150000","225000","Super Admmin","17-03-2020","150000","0","BATE OBEN SIMON EKPO  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1505","UBa/HIMS/05/19/0088","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 15:23:45","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","ANDREW BIKINNI DIONGO  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1506","UBa/HIMS/01/19/0089","","17-03-2020","105000","","03","2019/2020","1","17-03-2020 15:24:48","fees","1","105000","105000","270000","Super Admmin","17-03-2020","105000","0","ATAGWO BERNICE TIFUH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1507","UBa/HIMS/01/19/0090","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 15:28:40","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","NGOMELEU RYMA CLAUDIA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1508","UBa/HIMS/02/19/0091","","17-03-2020","190000","","03","2019/2020","1","17-03-2020 15:29:47","fees","1","190000","190000","185000","Super Admmin","17-03-2020","190000","0","TENDOH BAZIL TENYONG  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1509","UBa/HIMS/02/19/0092","","17-03-2020","190000","","03","2019/2020","1","17-03-2020 15:30:47","fees","1","190000","190000","185000","Super Admmin","17-03-2020","190000","0","SUTAN EMILIE-DIANE NTALAH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1510","UBa/HIMS/05/19/0093","","17-03-2020","250000","","03","2019/2020","1","17-03-2020 15:31:58","fees","1","250000","250000","50000","Super Admmin","17-03-2020","250000","0","EBENYE EUNICE NJIE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","150000");
INSERT INTO daily VALUES("1511","UBa/HIMS/02/19/0095","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 15:33:32","fees","1","100000","100000","275000","Super Admmin","17-03-2020","100000","0","ATABE CAMERICA EGUT  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1512","UBa/HIMS/01/19/0097","","17-03-2020","375000","","03","2019/2020","1","17-03-2020 15:35:39","fees","1","375000","375000","0","Super Admmin","17-03-2020","375000","0","LYONGA DIAN ENANGA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1513","UBa/HIMS/01/19/0098","","17-03-2020","","","03","2019/2020","1","17-03-2020 15:36:20","fees","1","","","375000","Super Admmin","17-03-2020","","0","TABE ALEXANDER  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1514","UBa/HIMS/02/19/0099","","17-03-2020","300000","","03","2019/2020","1","17-03-2020 15:37:13","fees","1","300000","300000","75000","Super Admmin","17-03-2020","300000","0","JUNIOR MBAME  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1515","UBa/HIMS/01/19/0115","","17-03-2020","","","03","2019/2020","1","17-03-2020 15:40:37","fees","1","","","375000","Super Admmin","17-03-2020","","0","ENGEMISE STEPHEN NGEKE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1516","UBa/HIMS/01/19/0115","","17-03-2020","","","03","2019/2020","1","17-03-2020 15:42:10","fees","1","","","375000","Super Admmin","17-03-2020","","0","ENGEMISE STEPHEN NGEKE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1517","UBa/HIMS/01/19/0114","","17-03-2020","190000","","03","2019/2020","1","17-03-2020 15:43:10","fees","1","190000","190000","185000","Super Admmin","17-03-2020","190000","0","NNAMDI JOHNSON NNAJI  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1518","UBa/HIMS/05/19/0113","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 15:44:34","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","KENFACK DJOUFACK DORANTINE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1519","UBa/HIMS/01/19/0111","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 15:47:26","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","CHIMBO ABIGAIL EKIE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1520","UBa/HIMS/02/19/0109","","17-03-2020","275000","","03","2019/2020","1","17-03-2020 15:49:27","fees","1","275000","275000","100000","Super Admmin","17-03-2020","275000","0","NAYO MEYEMBI SHARON  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1521","UBa/HIMS/01/19/0108","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 15:50:29","fees","1","100000","100000","275000","Super Admmin","17-03-2020","100000","0","FON MARIA -GORETTIINSURANCEDAH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1522","UBa/HIMS/02/19/0107","","17-03-2020","","","03","2019/2020","1","17-03-2020 15:51:33","fees","1","","","375000","Super Admmin","17-03-2020","","0","RIM MEKANG EHABE AZIZ  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1523","UBa/HIMS/02/19/0106","","17-03-2020","210000","","03","2019/2020","1","17-03-2020 15:52:30","fees","1","210000","210000","165000","Super Admmin","17-03-2020","210000","0","MAFOUO NJIFOR MARIE RACHEL  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1524","UBa/HIMS/01/19/0104","","17-03-2020","300000","","03","2019/2020","1","17-03-2020 15:53:56","fees","1","300000","300000","75000","Super Admmin","17-03-2020","300000","0","NKEDE DERICK EDUNGE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1525","UBa/HIMS/01/19/0103","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 15:54:55","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","NGOMEBONG GHISLAIN EBARGE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1526","UBa/HIMS/05/19/0102","","17-03-2020","240000","","03","2019/2020","1","17-03-2020 15:55:37","fees","1","240000","240000","135000","Super Admmin","17-03-2020","240000","0","NAHLELA LYDIA NUWELA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1527","UBa/HIMS/03/19/0101","","17-03-2020","130000","","03","2019/2020","1","17-03-2020 15:56:35","fees","1","130000","130000","245000","Super Admmin","17-03-2020","130000","0","NENGEH ELIZABETH CHUWOH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1528","UBa/HIMS/02/19/0100","","17-03-2020","190000","","03","2019/2020","1","17-03-2020 15:57:19","fees","1","190000","190000","185000","Super Admmin","17-03-2020","190000","0","MBU PETER MBU-BESSEM  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1529","UBa/HIMS/05/19/0133","","17-03-2020","180000","","03","2019/2020","1","17-03-2020 16:02:44","fees","1","180000","180000","195000","Super Admmin","17-03-2020","180000","0","ETUBE STECY NSALI  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1530","UBa/HIMS/01/19/0126","","17-03-2020","375000","","03","2019/2020","1","17-03-2020 16:08:18","fees","1","375000","375000","0","Super Admmin","17-03-2020","375000","0","AYUK SERAPHINE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1531","UBa/HIMS/02/19/0125","","17-03-2020","","","03","2019/2020","1","17-03-2020 16:09:36","fees","1","","","195500","Super Admmin","17-03-2020","","0","NGEN SHERYL-KESH YOU  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","350000");
INSERT INTO daily VALUES("1532","UBa/HIMS/02/19/0124","","17-03-2020","40000","","03","2019/2020","1","17-03-2020 16:10:29","fees","1","40000","40000","335000","Super Admmin","17-03-2020","40000","0","CHRISTINA ENANGA MATUTE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1533","UBa/HIMS/01/19/0122","","17-03-2020","120000","","03","2019/2020","1","17-03-2020 16:12:15","fees","1","120000","120000","255000","Super Admmin","17-03-2020","120000","0","TAMANJONG VERONIQUE NGELA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1534","UBa/HIMS/01/19/0121","","17-03-2020","300000","","03","2019/2020","1","17-03-2020 16:13:09","fees","1","300000","300000","75000","Super Admmin","17-03-2020","300000","0","TAMBONGBEYANG KELLY EYONG  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1535","UBa/HIMS/02/19/0120","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 16:14:02","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","BESONG SOLANGE TAKU  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1536","UBa/HIMS/01/19/0119","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 16:14:54","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","BESONG-AYUK JNR DARRY MACMILLANO  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1537","UBa/HIMS/03/19/0117","","17-03-2020","140000","","03","2019/2020","1","17-03-2020 16:16:31","fees","1","140000","140000","235000","Super Admmin","17-03-2020","140000","0","SENGELA MAWE SUH  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1538","UBa/HIMS/01/19/0148","","17-03-2020","200000","","03","2019/2020","1","17-03-2020 16:19:53","fees","1","200000","200000","175000","Super Admmin","17-03-2020","200000","0","TAMBE MAKIA JUNIOR NDIKE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1539","UBa/HIMS/05/19/0147","","17-03-2020","130000","","03","2019/2020","1","17-03-2020 16:21:08","fees","1","130000","130000","70000","Super Admmin","17-03-2020","130000","0","LABAM GETRUDE BONGTIN  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","250000");
INSERT INTO daily VALUES("1540","UBa/HIMS/05/19/0146","","17-03-2020","375000","","03","2019/2020","1","17-03-2020 16:21:45","fees","1","375000","375000","0","Super Admmin","17-03-2020","375000","0","NKPOT OJONG ENOW  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1541","UBa/HIMS/05/19/0145","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 16:22:37","fees","1","100000","100000","275000","Super Admmin","17-03-2020","100000","0","TITI NSAKSE RELINDIS  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1542","UBa/HIMS/03/19/0144","","17-03-2020","","","03","2019/2020","1","17-03-2020 16:23:32","fees","1","","","375000","Super Admmin","17-03-2020","","0","FOLONG LEKOBOU JOYSTELLA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1543","UBa/HIMS/05/19/0141","","17-03-2020","125000","","03","2019/2020","1","17-03-2020 16:25:29","fees","1","125000","125000","200000","Super Admmin","17-03-2020","125000","0","DANG PAMELA OWEI  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","125000");
INSERT INTO daily VALUES("1544","UBa/HIMS/05/19/0140","","17-03-2020","250000","","03","2019/2020","1","17-03-2020 16:26:29","fees","1","250000","250000","125000","Super Admmin","17-03-2020","250000","0","MONZUNGUITY RAIZA IJANG  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1545","UBa/HIMS/02/19/0137","","17-03-2020","","","03","2019/2020","1","17-03-2020 16:28:23","fees","1","","","375000","Super Admmin","17-03-2020","","0","SAM NDIVE MOLUA MOTUTU  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1546","UBa/HIMS/02/19/0134","","17-03-2020","375000","","03","2019/2020","1","17-03-2020 16:30:22","fees","1","375000","375000","0","Super Admmin","17-03-2020","375000","0","EBANGE GILBERT   ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1547","UBa/HIMS/02/19/0153","","17-03-2020","185000","","03","2019/2020","1","17-03-2020 16:33:34","fees","1","185000","185000","190000","Super Admmin","17-03-2020","185000","0","VALENTINE CHIDI  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1548","UBa/HIMS/02/19/0154","","17-03-2020","160000","","03","2019/2020","1","17-03-2020 16:34:37","fees","1","160000","160000","215000","Super Admmin","17-03-2020","160000","0","NASAKO JULLIETTE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1549","UBa/HIMS/02/19/0157","","17-03-2020","195000","","03","2019/2020","1","17-03-2020 16:36:41","fees","1","195000","195000","180000","Super Admmin","17-03-2020","195000","0","WIRBA CLAUDETTE BERINYUY  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1550","UBa/HIMS/02/19/0158","","17-03-2020","210000","","03","2019/2020","1","17-03-2020 16:37:39","fees","1","210000","210000","165000","Super Admmin","17-03-2020","210000","0","MARIE RUTH KUMBONG  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1551","UBa/HIMS/03/19/0159","","17-03-2020","375000","","03","2019/2020","1","17-03-2020 16:38:17","fees","1","375000","375000","0","Super Admmin","17-03-2020","375000","0","INONI GISSELE IYA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1552","UBa/HIMS/03/19/0161","","17-03-2020","","","03","2019/2020","1","17-03-2020 16:39:48","fees","1","","","375000","Super Admmin","17-03-2020","","0","ATANGA BONIFACE TILONG  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1553","UBa/HIMS/01/19/0164","","17-03-2020","100000","","03","2019/2020","1","17-03-2020 16:41:56","fees","1","100000","100000","200000","Super Admmin","17-03-2020","100000","0","DAMIETE SAMPSON BUMA  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","150000");
INSERT INTO daily VALUES("1554","UBa/HIMS/05/19/0166","","17-03-2020","170000","","03","2019/2020","1","17-03-2020 16:43:22","fees","1","170000","170000","205000","Super Admmin","17-03-2020","170000","0","ANGEL SOPHIE ENANGA MEKAKO  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1555","UBa/HIMS/02/19/0167","","17-03-2020","75000","","03","2019/2020","1","17-03-2020 16:44:16","fees","1","75000","75000","300000","Super Admmin","17-03-2020","75000","0","ENOW STEPHANIE LANU  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1556","UBa/HIMS/05/19/0169","","17-03-2020","135000","","03","2019/2020","1","17-03-2020 16:46:08","fees","1","135000","135000","240000","Super Admmin","17-03-2020","135000","0","ETAPE COLLINS ITOE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1557","UBa/HIMS/02/19/0170","","17-03-2020","85000","","03","2019/2020","1","17-03-2020 16:46:58","fees","1","85000","85000","290000","Super Admmin","17-03-2020","85000","0","NABAKWA VANESSA BEYOUNGE  ","17","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1558","HIMS/01/18/0002","","26-03-2020","172500","","03","2019/2020","1","26-03-2020 13:20:00","fees","1","172500","172500","150000","Super Admmin","26-03-2020","172500","0","ANDONG ANABELA ANWEI  ","26","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1559","HIMS/06/18/0011","","26-03-2020","25000","","03","2019/2020","1","26-03-2020 13:56:18","fees","1","25000","25000","27500","Super Admmin","26-03-2020","25000","0","NWANA HELLEN NOEL NYIANYA  ","26","CASH"," ","CASH","","0","","0","","","","","300","","","","300000");
INSERT INTO daily VALUES("1560","HIMS/06/18/0010","","26-03-2020","25000","","03","2019/2020","1","26-03-2020 14:01:08","fees","1","25000","25000","27500","Super Admmin","26-03-2020","25000","0","LEMMAH NWANA STEPHANIE  ","26","CASH"," ","CASH","","0","","0","","","","","300","","","","300000");
INSERT INTO daily VALUES("1561","HIMS/02/18/0014","","26-03-2020","250000","","03","2019/2020","1","26-03-2020 14:08:54","fees","1","250000","250000","52500","Super Admmin","26-03-2020","250000","0","VALERY MUDIKEY AKUMA  ","26","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1562","HIMS/05/18/0023","","26-03-2020","290000","","03","2019/2020","1","26-03-2020 14:36:16","fees","1","290000","290000","12500","Super Admmin","26-03-2020","290000","0","ANYAH DESMOND MEMBA  ","26","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1563","HIMS/01/18/0031","","26-03-2020","302500","","03","2019/2020","1","26-03-2020 14:57:10","fees","1","302500","302500","0","Super Admmin","26-03-2020","302500","0","BIH BRIDGET TILONG  ","26","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1564","HIMS/02/18/0033","","26-03-2020","280000","","03","2019/2020","1","26-03-2020 15:00:43","fees","1","280000","280000","22500","Super Admmin","26-03-2020","280000","0","ELIZABETH SAELE LYONGA  ","26","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1565","HIMS/01/18/0036","","26-03-2020","5000","","03","2019/2020","1","26-03-2020 15:05:18","fees","1","5000","5000","297500","Super Admmin","26-03-2020","5000","0","NCHANG CHIESEA MBOM  ","26","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1566","HIMS/02/18/0041","","27-03-2020","250000","","03","2019/2020","1","27-03-2020 12:25:30","fees","1","250000","250000","52500","Super Admmin","27-03-2020","250000","0","NOLINGA SHELLBAVINE SAILE  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1567","HIMS/05/18/0043","","27-03-2020","","","03","2019/2020","1","27-03-2020 12:30:54","fees","1","","","105000","Super Admmin","27-03-2020","","0","ATITIA ESIMA ADAMS  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1568","HIMS/05/18/0052","","27-03-2020","100000","","03","2019/2020","1","27-03-2020 12:48:33","fees","1","100000","100000","202500","Super Admmin","27-03-2020","100000","0","NOUYADJAM WALLEU MIMI FABIOLA  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1569","HIMS/05/18/0054","","27-03-2020","275000","","03","2019/2020","1","27-03-2020 12:51:13","fees","1","275000","275000","27500","Super Admmin","27-03-2020","275000","0","MELENE MEANGU NGIA  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1570","HIMS/01/18/0064","","27-03-2020","150000","","03","2019/2020","1","27-03-2020 13:05:42","fees","1","150000","150000","152500","Super Admmin","27-03-2020","150000","0","MBU HUSBERTO MBU  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1571","HIMS/03/18/0076","","27-03-2020","50000","","03","2019/2020","1","27-03-2020 13:29:21","fees","1","50000","50000","2500","Super Admmin","27-03-2020","50000","0","SANINGONG YANICK NGANG  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","290000");
INSERT INTO daily VALUES("1572","HIMS/01/18/0080","","27-03-2020","200000","","03","2019/2020","1","27-03-2020 13:35:52","fees","1","200000","200000","102500","Super Admmin","27-03-2020","200000","0","BOBGA WILFRED DOH  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1573","HIMS/05/18/0082","","27-03-2020","100000","","03","2019/2020","1","27-03-2020 13:38:15","fees","1","100000","100000","67500","Super Admmin","27-03-2020","100000","0","MBAHCHAN SONITA  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","150000");
INSERT INTO daily VALUES("1574","HIMS/05/18/0083","","27-03-2020","302500","","03","2019/2020","1","27-03-2020 13:39:28","fees","1","302500","302500","0","Super Admmin","27-03-2020","302500","0","KELLY PIEFONDIA WANSI  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1575","HIMS/02/18/0084","","27-03-2020","300000","","03","2019/2020","1","27-03-2020 13:40:29","fees","1","300000","300000","2500","Super Admmin","27-03-2020","300000","0","NCHONGANYI NERISAH NKEMNJI  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1576","HIMS/01/18/0087","","27-03-2020","190000","","03","2019/2020","1","27-03-2020 13:45:45","fees","1","190000","190000","112500","Super Admmin","27-03-2020","190000","0","RALITSA MUKETE ELOMBA  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1577","HIMS/02/18/0094","","27-03-2020","300000","","03","2019/2020","1","27-03-2020 13:51:43","fees","1","300000","300000","2500","Super Admmin","27-03-2020","300000","0","ACHA MARLYSE NEGU  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1578","HIMS/05/18/0097","","27-03-2020","302500","","03","2019/2020","1","27-03-2020 13:54:33","fees","1","302500","302500","0","Super Admmin","27-03-2020","302500","0","TAKU EUGENE ETONGKE  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1579","HIMS/11/18/0102","","27-03-2020","0","","03","2019/2020","1","27-03-2020 13:59:30","fees","1","0","0","100000","Super Admmin","27-03-2020","0","0","ABANGA ELIZABETH FORBIN  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1580","HIMS/01/18/0106","","27-03-2020","300000","","03","2019/2020","1","27-03-2020 14:02:11","fees","1","300000","300000","2500","Super Admmin","27-03-2020","300000","0","KIKI DWELL NFOR  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1581","HIMS/07/18/0142","","27-03-2020","300000","","03","2019/2020","1","27-03-2020 14:11:40","fees","1","300000","300000","30000","Super Admmin","27-03-2020","300000","0","MOIWO DORIS TANYI  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1582","HIMS/03/18/0126","","27-03-2020","200000","","03","2019/2020","1","27-03-2020 14:21:09","fees","1","200000","200000","42500","Super Admmin","27-03-2020","200000","0","FUAMBU JEFFREYS TOMBU  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1583","HIMS/05/18/0118","","27-03-2020","150000","","03","2019/2020","1","27-03-2020 14:27:35","fees","1","150000","150000","152500","Super Admmin","27-03-2020","150000","0","ACHAH EMMANUELLA AKURI  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1584","HIMS/04/18/0117","","27-03-2020","115000","","03","2019/2020","1","27-03-2020 14:29:59","fees","1","115000","115000","117500","Super Admmin","27-03-2020","115000","0","WESLEY WOLFGANG MILLER BECKLEY  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1585","HIMS/01/18/0116","","27-03-2020","250000","","03","2019/2020","1","27-03-2020 14:31:10","fees","1","250000","250000","52500","Super Admmin","27-03-2020","250000","0","BIH RUTH NDANGA  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1586","HIMS/05/18/0152","","27-03-2020","100000","","03","2019/2020","1","27-03-2020 14:45:18","fees","1","100000","100000","202500","Super Admmin","27-03-2020","100000","0","FORSUH FAITHFUL NGELOH  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1587","HIMS/03/18/0163","","27-03-2020","100000","","03","2019/2020","1","27-03-2020 14:52:39","fees","1","100000","100000","202500","Super Admmin","27-03-2020","100000","0","MATUKE ULRICH NDEME  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1588","HIMS/02/18/0165","","27-03-2020","250000","","03","2019/2020","1","27-03-2020 14:54:57","fees","1","250000","250000","52500","Super Admmin","27-03-2020","250000","0","KEVIN BERTRAND VERYEH  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1589","HIMS/05/18/0171","","27-03-2020","300000","","03","2019/2020","1","27-03-2020 15:00:12","fees","1","300000","300000","162500","Super Admmin","27-03-2020","300000","0","TUMBU BRANDON NJOCK  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1590","HIMS/06/18/0187","","27-03-2020","50000","","03","2019/2020","1","27-03-2020 15:10:36","fees","1","50000","50000","","Super Admmin","27-03-2020","50000","0","DIVINE AYODELE OSHIJIRIN  ","27","CASH"," ","CASH","","0","","0","","","","","300","","","","240000");
INSERT INTO daily VALUES("1591","HIMS/05/18/0003","","01-04-2020","302500","","04","2019/2020","1","01-04-2020 14:42:41","fees","1","302500","302500","0","Super Admmin","01-04-2020","302500","0","SHARON KEMAYOU MINKONG  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1592","HIMS/05/18/0004","","01-04-2020","0","","04","2019/2020","1","01-04-2020 14:45:08","fees","1","0","0","","Super Admmin","01-04-2020","0","0","EYOLE LYDIENNE NJIE MOJOKO  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1593","HIMS/02/18/0005","","01-04-2020","100000","","04","2019/2020","1","01-04-2020 14:47:07","fees","1","100000","100000","222500","Super Admmin","01-04-2020","100000","0","ATO TABI COLLINS  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1594","HIMS/05/18/0006","","01-04-2020","300000","","04","2019/2020","1","01-04-2020 14:48:51","fees","1","300000","300000","2500","Super Admmin","01-04-2020","300000","0","TCHOUMKE NOEL TCHOUMKE  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1595","HIMS/04/18/0007","","01-04-2020","0","","04","2019/2020","1","01-04-2020 14:49:37","fees","1","0","0","300000","Super Admmin","01-04-2020","0","0","MBONGO DIMALLA JEAN Le PRETRE  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1596","HIMS/02/18/0008","","01-04-2020","0","","04","2019/2020","1","01-04-2020 14:50:02","fees","1","0","0","","Super Admmin","01-04-2020","0","0","ETOMBI MARTHA LIKENYA MATOFE  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1597","HIMS/01/18/0009","","01-04-2020","302500","","04","2019/2020","1","01-04-2020 14:51:22","fees","1","302500","302500","0","Super Admmin","01-04-2020","302500","0","ALEM ASONGANDEM VICTORY NGANGANU  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1598","HIMS/02/18/0012","","01-04-2020","300000","","04","2019/2020","1","01-04-2020 14:53:30","fees","1","300000","300000","52500","Super Admmin","01-04-2020","300000","0","NJOKE EMILIA EFETI  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1599","HIMS/06/18/0015","","01-04-2020","255000","","04","2019/2020","1","01-04-2020 14:56:26","fees","1","255000","255000","-27500","Super Admmin","01-04-2020","255000","0","NGOMBA ELIZABETH LIKOWO  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1600","HIMS/03/18/0017","","01-04-2020","200000","","04","2019/2020","1","01-04-2020 14:58:08","fees","1","200000","200000","252500","Super Admmin","01-04-2020","200000","0","NVENAKENG GRACE NZEMFEH  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1601","HIMS/04/18/0018","","01-04-2020","210000","","04","2019/2020","1","01-04-2020 14:59:34","fees","1","210000","210000","92500","Super Admmin","01-04-2020","210000","0","EPOSI SYLVIE LUMA  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1602","HIMS/05/18/0019","","01-04-2020","270000","","04","2019/2020","1","01-04-2020 15:02:31","fees","1","270000","270000","82500","Super Admmin","01-04-2020","270000","0","SIEKOUEWOUE TCHAMGOUE WOKSI  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1603","HIMS/03/18/0025","","01-04-2020","0","","04","2019/2020","1","01-04-2020 15:08:20","fees","1","0","0","400000","Super Admmin","01-04-2020","0","0","REX MBUA NANGOH Jr  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1604","HIMS/03/18/0026","","01-04-2020","0","","04","2019/2020","1","01-04-2020 15:09:41","fees","1","0","0","200000","Super Admmin","01-04-2020","0","0","NEMOH DON-ELLIOT NKONGHO  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1605","HIMS/01/18/0027","","01-04-2020","0","","04","2019/2020","1","01-04-2020 15:10:46","fees","1","0","0","","Super Admmin","01-04-2020","0","0","MANGA MAURINETT TENGU  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1606","HIMS/04/18/0028","","01-04-2020","402500","","04","2019/2020","1","01-04-2020 15:13:02","fees","1","402500","402500","0","Super Admmin","01-04-2020","402500","0","ANYAH JARVIS ESAKA-ANYAH  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1607","HIMS/07/18/0029","","01-04-2020","225000","","04","2019/2020","1","01-04-2020 15:14:41","fees","1","225000","225000","77500","Super Admmin","01-04-2020","225000","0","DORACHAEL NKENGANYI  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1608","HIMS/09/18/0030","","01-04-2020","302500","","04","2019/2020","1","01-04-2020 15:16:21","fees","1","302500","302500","0","Super Admmin","01-04-2020","302500","0","NGOMBA STEVE NYADJROH  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1609","HIMS/05/18/0032","","01-04-2020","352500","","04","2019/2020","1","01-04-2020 15:18:40","fees","1","352500","352500","0","Super Admmin","01-04-2020","352500","0","GLORY ESIMO MUKETE  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1610","HIMS/04/18/0034","","01-04-2020","250000","","04","2019/2020","1","01-04-2020 15:20:23","fees","1","250000","250000","52500","Super Admmin","01-04-2020","250000","0","ANDIN THERESE MOILA  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1611","HIMS/06/18/0035","","01-04-2020","200000","","04","2019/2020","1","01-04-2020 15:22:12","fees","1","200000","200000","102500","Super Admmin","01-04-2020","200000","0","LAURETTA MBEL CHIA  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1612","HIMS/01/18/0037","","01-04-2020","302500","","04","2019/2020","1","01-04-2020 15:23:47","fees","1","302500","302500","0","Super Admmin","01-04-2020","302500","0","NAOUSSI NKAMKO JUSTE PHILIP  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1613","HIMS/06/18/0038","","01-04-2020","225000","","04","2019/2020","1","01-04-2020 15:25:47","fees","1","225000","225000","127500","Super Admmin","01-04-2020","225000","0","CLIVE WATANY EWUNKEM  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1614","HIMS/02/18/0040","","01-04-2020","302500","","04","2019/2020","1","01-04-2020 15:27:22","fees","1","302500","302500","0","Super Admmin","01-04-2020","302500","0","TABI LAURABETH KATE NCHENGE  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1615","HIMS/06/18/0039","","01-04-2020","202500","","04","2019/2020","1","01-04-2020 15:29:13","fees","1","202500","202500","0","Super Admmin","01-04-2020","202500","0","JOANA JOFFI NGALLE  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1616","HIMS/01/18/0042","","01-04-2020","302500","","04","2019/2020","1","01-04-2020 15:30:41","fees","1","302500","302500","0","Super Admmin","01-04-2020","302500","0","YIMPI DOLINE De NDIOUNH  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1617","HIMS/05/18/0043","","01-04-2020","0","","04","2019/2020","1","01-04-2020 15:31:56","fees","1","0","0","105000","Super Admmin","01-04-2020","0","0","ATITIA ESIMA ADAMS  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1618","HIMS/07/18/0044","","01-04-2020","217500","","04","2019/2020","1","01-04-2020 15:35:43","fees","1","217500","217500","0","Super Admmin","01-04-2020","217500","0","ROSE NWADE  JURU  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1619","HIMS/04/18/0046","","01-04-2020","340000","","04","2019/2020","1","01-04-2020 15:38:56","fees","1","340000","340000","77500","Super Admmin","01-04-2020","340000","0","FUNWIE HAREES TANWIE  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1620","HIMS/06/18/0047","","01-04-2020","250000","","04","2019/2020","1","01-04-2020 15:40:30","fees","1","250000","250000","92500","Super Admmin","01-04-2020","250000","0","ETAH ONEKE AKO AYUK  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1621","HIMS/02/18/0048","","01-04-2020","0","","04","2019/2020","1","01-04-2020 15:41:11","fees","1","0","0","0","Super Admmin","01-04-2020","0","0","DONAL TEMBU CHI  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1622","HIMS/07/18/0049","","01-04-2020","302500","","04","2019/2020","1","01-04-2020 15:43:11","fees","1","302500","302500","0","Super Admmin","01-04-2020","302500","0","ENOW FRANCISCA OROCK  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1623","HIMS/06/18/0050","","01-04-2020","150000","","04","2019/2020","1","01-04-2020 15:44:45","fees","1","150000","150000","172500","Super Admmin","01-04-2020","150000","0","ARREY MARIUS MANYOR  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1624","HIMS/06/18/0051","","01-04-2020","0","","04","2019/2020","1","01-04-2020 15:45:29","fees","1","0","0","0","Super Admmin","01-04-2020","0","0","SANDRA NABILA TITA SCOTT  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1625","HIMS/09/18/0053","","01-04-2020","300000","","04","2019/2020","1","01-04-2020 15:46:51","fees","1","300000","300000","2500","Super Admmin","01-04-2020","300000","0","KAKA MARTIN MBONGO  ","01","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1626","HIMS/10/19/0047","","01-04-2020","200000","","04","2019/2020","1","01-04-2020 15:58:48","fees","1","200000","200000","100000","Super Admmin","01-04-2020","200000","0","NGRINGEH LOVERAGE NGUFOR  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1627","HIMS/06/19/0060","","01-04-2020","250000","","04","2019/2020","1","01-04-2020 15:59:56","fees","1","250000","250000","50000","Super Admmin","01-04-2020","250000","0","FORKENGYA TEOPHYL KONIKUNALANG  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","25000");
INSERT INTO daily VALUES("1628","HIMS/10/19/0097","","01-04-2020","200000","","04","2019/2020","1","01-04-2020 16:01:17","fees","1","200000","200000","100000","Super Admmin","01-04-2020","200000","0","DONGMO NANFACK LIONEL DUNANT  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1629","HIMS/10/19/0105","","01-04-2020","15000","","04","2019/2020","1","01-04-2020 16:02:09","fees","1","15000","15000","300000","Super Admmin","01-04-2020","15000","0","DOH DEREK GANA  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","0");
INSERT INTO daily VALUES("1630","HIMS/04/19/0110","","01-04-2020","0","","04","2019/2020","1","01-04-2020 16:03:17","fees","1","0","0","300000","Super Admmin","01-04-2020","0","0","EKOSSE PATRICK MALANGE  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1631","HIMS/10/19/0113","","01-04-2020","140000","","04","2019/2020","1","01-04-2020 16:04:04","fees","1","140000","140000","160000","Super Admmin","01-04-2020","140000","0","BIH SONITA  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1632","HIMS/04/16/0686","","01-04-2020","100000","","04","2019/2020","1","01-04-2020 16:05:06","fees","1","100000","100000","200000","Super Admmin","01-04-2020","100000","0","NDENGWE LAZARE  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1633","HIMS/08/19/0115","","01-04-2020","100000","","04","2019/2020","1","01-04-2020 16:05:56","fees","1","100000","100000","225000","Super Admmin","01-04-2020","100000","0","NANYONGO ANNLYNN ESOWE  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","0");
INSERT INTO daily VALUES("1634","HIMS/08/19/0116","","01-04-2020","300000","","04","2019/2020","1","01-04-2020 16:06:47","fees","1","300000","300000","25000","Super Admmin","01-04-2020","300000","0","LYONGA MATILDA  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","0");
INSERT INTO daily VALUES("1635","HIMS/10/19/0119","","01-04-2020","","","04","2019/2020","1","01-04-2020 16:08:05","fees","1","","","300000","Super Admmin","01-04-2020","","0","BUHVEN ALEXIS VERLA  ","01","CASH"," ","CASH","","0","","0","","","","","200","","","","15000");
INSERT INTO daily VALUES("1636","UBa/HIMS/02/18/0014","","01-04-2020","240000","","04","2019/2020","1","01-04-2020 16:11:46","fees","1","240000","240000","135000","Super Admmin","01-04-2020","240000","0","ETA OBI OKOK  ","01","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1637","UBa/HIMS/04/18/0023","","02-04-2020","325000","","04","2019/2020","1","02-04-2020 9:35:20","fees","1","325000","325000","50000","Super Admmin","02-04-2020","325000","0","LENGA RUDOLF MUKEM  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1638","UBa/HIMS/04/19/0028","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 9:36:05","fees","1","200000","200000","175000","Super Admmin","02-04-2020","200000","0","ANDO MACZIAN ANGYIE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1639","UBa/HIMS/04/19/0029","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 9:42:22","fees","1","200000","200000","205000","Super Admmin","02-04-2020","200000","0","ASHU MONOFIA BORIS  ","02","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1640","UBa/HIMS/04/19/0034","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 9:43:43","fees","1","250000","250000","125000","Super Admmin","02-04-2020","250000","0","NJOMI FOLEFACK   ERNEST  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1641","UBa/HIMS/04/19/0035","","02-04-2020","300000","","04","2019/2020","1","02-04-2020 9:44:56","fees","1","300000","300000","75000","Super Admmin","02-04-2020","300000","0","SIKOUE NOUMBISSIE DAHINA VANELLE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1642","UBa/HIMS/04/19/0036","","02-04-2020","150000","","04","2019/2020","1","02-04-2020 9:45:44","fees","1","150000","150000","225000","Super Admmin","02-04-2020","150000","0","MBITED JEAN CALVEN  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1643","UBa/HIMS/04/19/0042","","02-04-2020","240000","","04","2019/2020","1","02-04-2020 9:46:31","fees","1","240000","240000","135000","Super Admmin","02-04-2020","240000","0","MANI KENYO DORIANE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1644","UBa/HIMS/04/18/0048","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 9:48:03","fees","1","200000","200000","175000","Super Admmin","02-04-2020","200000","0","EKWOMPI FRANK TANWIE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1645","UBa/HIMS/04/19/0058","","02-04-2020","270000","","04","2019/2020","1","02-04-2020 9:49:36","fees","1","270000","270000","105000","Super Admmin","02-04-2020","270000","0","YVONNE MUGHA YUYOP  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1646","UBa/HIMS/04/19/0059","","02-04-2020","300000","","04","2019/2020","1","02-04-2020 9:51:26","fees","1","300000","300000","75000","Super Admmin","02-04-2020","300000","0","EMILIENE WASE NJEMO MOFA  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1647","UBa/HIMS/04/19/0063","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 9:52:28","fees","1","200000","200000","175000","Super Admmin","02-04-2020","200000","0","EBAH GIFTY LOMBE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1648","UBa/HIMS/04/19/0064","","02-04-2020","375000","","04","2019/2020","1","02-04-2020 9:53:31","fees","1","375000","375000","0","Super Admmin","02-04-2020","375000","0","MUABE NADESH NYUNGE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1649","UBa/HIMS/04/19/0065","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 9:54:25","fees","1","250000","250000","125000","Super Admmin","02-04-2020","250000","0","EJOLLE ANNABEL EBUDE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1650","UBa/HIMS/02/19/0069","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 9:56:28","fees","1","100000","100000","290000","Super Admmin","02-04-2020","100000","0","ASOBOTAMBA RUTH NGUM  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","300000");
INSERT INTO daily VALUES("1651","UBa/HIMS/04/19/0070","","02-04-2020","275000","","04","2019/2020","1","02-04-2020 9:57:29","fees","1","275000","275000","100000","Super Admmin","02-04-2020","275000","0","EFOFA ISAAC VEFONGE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1652","UBa/HIMS/04/19/0078","","02-04-2020","375000","","04","2019/2020","1","02-04-2020 9:58:35","fees","1","375000","375000","0","Super Admmin","02-04-2020","375000","0","BERNICE ENOW OBASE EGBE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1653","UBa/HIMS/04/19/0079","","02-04-2020","270000","","04","2019/2020","1","02-04-2020 9:59:45","fees","1","270000","270000","105000","Super Admmin","02-04-2020","270000","0","TCHONANG KOM COLETTE SUELAMIE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1654","UBa/HIMS/04|19/0080","","02-04-2020","275000","","04","2019/2020","1","02-04-2020 10:01:01","fees","1","275000","275000","100000","Super Admmin","02-04-2020","275000","0","TENJONCHA BLANDINE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1655","UBa/HIMS/04/19/0081","","02-04-2020","230000","","04","2019/2020","1","02-04-2020 10:02:10","fees","1","230000","230000","145000","Super Admmin","02-04-2020","230000","0","YOMBO IRIS BENDELI  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1656","UBa/HIMS/04/19/0094","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 10:03:21","fees","1","200000","200000","125000","Super Admmin","02-04-2020","200000","0","CASANDRA NORNSO FA-ANJI  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","125000");
INSERT INTO daily VALUES("1657","UBa/HIMS/04/19/0096","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 10:04:20","fees","1","250000","250000","125000","Super Admmin","02-04-2020","250000","0","NKONGHO YAMAKAM ARMAND THIERRY  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1658","UBa/HIMS/04/19/0105","","02-04-2020","350000","","04","2019/2020","1","02-04-2020 10:05:37","fees","1","350000","350000","25000","Super Admmin","02-04-2020","350000","0","MOSIMA KEVIN FOBIA FONKA  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1659","UBa/HIMS/04/19/0110","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 10:06:42","fees","1","100000","100000","125000","Super Admmin","02-04-2020","100000","0","IKONA VINAPORTIA ASAAKA  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","225000");
INSERT INTO daily VALUES("1660","UBa/HIMS/04/19/0112","","02-04-2020","340000","","04","2019/2020","1","02-04-2020 10:09:54","fees","1","340000","340000","35000","Super Admmin","02-04-2020","340000","0","NGOSONG LOUIS ATENCHONG  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1661","UBa/HIMS/04/19/0116","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 10:11:45","fees","1","200000","200000","175000","Super Admmin","02-04-2020","200000","0","LAURA AYONG MANDE HANNAH  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1662","UBa/HIMS/04/19/0118","","02-04-2020","330000","","04","2019/2020","1","02-04-2020 10:14:03","fees","1","330000","330000","45000","Super Admmin","02-04-2020","330000","0","ATSAFAC SOREL ETITU AMAH  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1663","UBa/HIMS/04/19/0123","","02-04-2020","110000","","04","2019/2020","1","02-04-2020 10:16:29","fees","1","110000","110000","265000","Super Admmin","02-04-2020","110000","0","CHRISTIANA EKONGOLO YOTI  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1664","UBa/HIMS/04/19/0127","","02-04-2020","0","","04","2019/2020","1","02-04-2020 10:17:42","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","BABILA ELVIS FOFUNG  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","450000");
INSERT INTO daily VALUES("1665","UBa/HIMS/04/19/0129","","02-04-2020","275000","","04","2019/2020","1","02-04-2020 10:19:28","fees","1","275000","275000","100000","Super Admmin","02-04-2020","275000","0","KIMO KIDUNGRI VERYEH  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1666","UBa/HIMS/04/19/0130","","02-04-2020","0","","04","2019/2020","1","02-04-2020 10:21:05","fees","1","0","0","375000","Super Admmin","02-04-2020","0","0","EYONG-TANO ANKUWAN NICOLE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1667","UBa/HIMS/04/19/0131","","02-04-2020","0","","04","2019/2020","1","02-04-2020 10:22:07","fees","1","0","0","557500","Super Admmin","02-04-2020","0","0","NGUBA WALVISE SONA  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1668","UBa/HIMS/05/19/0132","","02-04-2020","175000","","04","2019/2020","1","02-04-2020 10:23:37","fees","1","175000","175000","222500","Super Admmin","02-04-2020","175000","0","AJANG NEVES MBINZE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1669","UBa/HIMS/05/19/0135","","02-04-2020","215000","","04","2019/2020","1","02-04-2020 10:24:54","fees","1","215000","215000","160000","Super Admmin","02-04-2020","215000","0","ENOW EMMANUEL TABE-YANG  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1670","UBa/HIMS/04/19/0136","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 10:25:53","fees","1","200000","200000","175000","Super Admmin","02-04-2020","200000","0","NGALLA EUNICE MECHANE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1671","UBa/HIMS/05/19/0138","","02-04-2020","146000","","04","2019/2020","1","02-04-2020 10:27:13","fees","1","146000","146000","229000","Super Admmin","02-04-2020","146000","0","AKONWIE GASTON ATIGE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1672","UBa/HIMS/04/19/0139","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 10:28:01","fees","1","100000","100000","275000","Super Admmin","02-04-2020","100000","0","NDUKONG GERALD EKONGENGO  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1673","UBa/HIMS/04/19/0142","","02-04-2020","190000","","04","2019/2020","1","02-04-2020 10:28:59","fees","1","190000","190000","185000","Super Admmin","02-04-2020","190000","0","HONORINE DISOH ABANDA  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1674","UBa/HIMS/04/19/0143","","02-04-2020","375000","","04","2019/2020","1","02-04-2020 10:30:25","fees","1","375000","375000","0","Super Admmin","02-04-2020","375000","0","NDUFONG MALODIA ANGUM  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1675","UBa/HIMS/04/19/0149","","02-04-2020","60000","","04","2019/2020","1","02-04-2020 10:31:11","fees","1","60000","60000","315000","Super Admmin","02-04-2020","60000","0","NGANJE ABDOU  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1676","UBa/HIMS/04/19/0150","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 10:31:58","fees","1","100000","100000","275000","Super Admmin","02-04-2020","100000","0","ELISABETH ISAICHO ENENYEUT  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1677","UBa/HIMS/04/19/0151","","02-04-2020","50000","","04","2019/2020","1","02-04-2020 10:33:00","fees","1","50000","50000","325000","Super Admmin","02-04-2020","50000","0","FONDIKUM LINUS CHE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1678","UBa/HIMS/01/19/0152","","02-04-2020","50000","","04","2019/2020","1","02-04-2020 10:36:03","fees","1","50000","50000","325000","Super Admmin","02-04-2020","50000","0","ENOH ROY TABE  ","02","CASH"," ","CASH","","0","","0","","","","","400","B-TECH","","","75000");
INSERT INTO daily VALUES("1679","UBa/HIMS/04/19/0155","","02-04-2020","270000","","04","2019/2020","1","02-04-2020 10:36:53","fees","1","270000","270000","105000","Super Admmin","02-04-2020","270000","0","UGONNA ALPHONSIUS OKAFOR  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1680","UBa/HIMS/04/19/0156","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 10:37:29","fees","1","200000","200000","175000","Super Admmin","02-04-2020","200000","0","EKEBE IDA  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1681","UBa/HIMS/04/19/0160","","02-04-2020","120000","","04","2019/2020","1","02-04-2020 10:38:32","fees","1","120000","120000","255000","Super Admmin","02-04-2020","120000","0","KUM LALITA EKEI  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1682","UBa/HIMS/04/19/0162","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 10:39:31","fees","1","100000","100000","225000","Super Admmin","02-04-2020","100000","0","LINDA CHIGAEMEZU NWAOKEKE  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","125000");
INSERT INTO daily VALUES("1683","UBa/HIMS/04/19/0163","","02-04-2020","0","","04","2019/2020","1","02-04-2020 10:40:35","fees","1","0","0","375000","Super Admmin","02-04-2020","0","0","EGBE MIRIAM OBEN  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1684","UBa/HIMS/04/19/0165","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 10:41:31","fees","1","200000","200000","175000","Super Admmin","02-04-2020","200000","0","TAWUNGAZEM BEZANKENG  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1685","UBa/HIMS/04/19/0168","","02-04-2020","0","","04","2019/2020","1","02-04-2020 10:42:20","fees","1","0","0","375000","Super Admmin","02-04-2020","0","0","PENDA EMMANUEL BATAPO  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","75000");
INSERT INTO daily VALUES("1686","HIMS/02/18/0055","","02-04-2020","0","","04","2019/2020","1","02-04-2020 10:44:21","fees","1","0","0","150000","Super Admmin","02-04-2020","0","0","CYNTHIA EPETI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1687","HIMS/09/18/0056","","02-04-2020","170000","","04","2019/2020","1","02-04-2020 10:45:58","fees","1","170000","170000","135000","Super Admmin","02-04-2020","170000","0","NGU EDWIN EFENJELI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1688","HIMS/05/18/0057","","02-04-2020","372500","","04","2019/2020","1","02-04-2020 10:48:46","fees","1","372500","372500","0","Super Admmin","02-04-2020","372500","0","SHARON NGONUI MABOUGHT  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1689","HIMS/06/18/0058","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 10:50:30","fees","1","200000","200000","2500","Super Admmin","02-04-2020","200000","0","IKOME FEDY NGOMBA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1690","HIMS/03/18/0059","","02-04-2020","0","","04","2019/2020","1","02-04-2020 10:51:07","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","OLGA MARIE-NOEL YALUE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1691","HIMS/06/18/0060","","02-04-2020","300000","","04","2019/2020","1","02-04-2020 10:52:07","fees","1","300000","300000","2500","Super Admmin","02-04-2020","300000","0","ASHU COLLINS ETAH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1692","HIMS/01/18/0061","","02-04-2020","50000","","04","2019/2020","1","02-04-2020 10:53:30","fees","1","50000","50000","302500","Super Admmin","02-04-2020","50000","0","NDANGOH BELTINE AZOCK  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1693","HIMS/04/18/0062","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 10:54:40","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","FINJAP MBIA JACOBSON JUNIOR  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1694","HIMS/06/18/0063","","02-04-2020","352500","","04","2019/2020","1","02-04-2020 10:56:05","fees","1","352500","352500","0","Super Admmin","02-04-2020","352500","0","PEMBE STEPHANIE ORUME  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1695","HIMS/06/18/0065","","02-04-2020","315500","","04","2019/2020","1","02-04-2020 10:59:11","fees","1","315500","315500","0","Super Admmin","02-04-2020","315500","0","NGWELA VANESSA MANKEN  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1696","HIMS/02/18/0066","","02-04-2020","300000","","04","2019/2020","1","02-04-2020 11:00:42","fees","1","300000","300000","52500","Super Admmin","02-04-2020","300000","0","ENANGA NANYONGO AKWANGA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1697","HIMS/03/18/0067","","02-04-2020","300000","","04","2019/2020","1","02-04-2020 11:02:44","fees","1","300000","300000","17500","Super Admmin","02-04-2020","300000","0","MUNYAH PAUL  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","10000");
INSERT INTO daily VALUES("1698","HIMS/04/18/0068","","02-04-2020","0","","04","2019/2020","1","02-04-2020 11:03:06","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","TETO NTAHI MICHELLE JOSEYARD  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1699","HIMS/06/18/0069","","02-04-2020","0","","04","2019/2020","1","02-04-2020 11:04:29","fees","1","0","0","332500","Super Admmin","02-04-2020","0","0","TEMBU RITA BIH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","160000");
INSERT INTO daily VALUES("1700","HIMS/02/18/0070","","02-04-2020","225000","","04","2019/2020","1","02-04-2020 11:06:22","fees","1","225000","225000","197500","Super Admmin","02-04-2020","225000","0","NDALEGH QUINETTE BIH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1701","HIMS/02/18/0071","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 11:07:57","fees","1","200000","200000","267500","Super Admmin","02-04-2020","200000","0","YUFENYUY NANCY NANUEH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1702","HIMS/02/18/0072","","02-04-2020","120000","","04","2019/2020","1","02-04-2020 11:09:40","fees","1","120000","120000","182500","Super Admmin","02-04-2020","120000","0","BEBONGCHOU ROBERT BRIGHTEN AJEUKO  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1703","HIMS/06/18/0073","","02-04-2020","0","","04","2019/2020","1","02-04-2020 11:11:02","fees","1","0","0","202500","Super Admmin","02-04-2020","0","0","TCHUIMEGNI CHRISTEL SANDRY  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","225000");
INSERT INTO daily VALUES("1704","HIMS/01/18/0074","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 11:12:26","fees","1","100000","100000","272500","Super Admmin","02-04-2020","100000","0","TABENTEH HILRIS BENEM  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1705","HIMS/09/18/0075","","02-04-2020","120000","","04","2019/2020","1","02-04-2020 11:14:14","fees","1","120000","120000","182500","Super Admmin","02-04-2020","120000","0","LUMA WUMA JUNIOR  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1706","HIMS/05/18/0077","","02-04-2020","202500","","04","2019/2020","1","02-04-2020 11:15:46","fees","1","202500","202500","0","Super Admmin","02-04-2020","202500","0","TOUOMKAM STEPHANIE TAFFOR  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","115000");
INSERT INTO daily VALUES("1707","HIMS/06/18/0078","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 11:17:10","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","MAKOLO SARAH EBENYE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1708","HIMS/02/18/0079","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 11:18:27","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","NGOMENDE AGNES MONJHU  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1709","HIMS/04/18/0081","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 11:20:36","fees","1","100000","100000","67500","Super Admmin","02-04-2020","100000","0","AZEH SOLANGE NDIKPA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","150000");
INSERT INTO daily VALUES("1710","HIMS/01/18/0085","","02-04-2020","402500","","04","2019/2020","1","02-04-2020 11:23:02","fees","1","402500","402500","0","Super Admmin","02-04-2020","402500","0","TEBID DORA ANENG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1711","HIMS/05/18/0086","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 11:25:35","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","OFOR KLEIN OFOR  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1712","HIMS/04/18/0089","","02-04-2020","0","","04","2019/2020","1","02-04-2020 11:27:14","fees","1","0","0","2500","Super Admmin","02-04-2020","0","0","NAHBANG IDA NDANSI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","115000");
INSERT INTO daily VALUES("1713","HIMS/06/18/0090","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 11:28:55","fees","1","100000","100000","52500","Super Admmin","02-04-2020","100000","0","ALFRED MBONDE MOKAKE AFFY  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1714","HIMS/06/18/0091","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 11:30:23","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","MBENGU PRISCA-DESTHELLE NKEHMBENG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1715","HIMS/03/18/0092","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 11:31:05","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","MBENGU LEA-VIOLET NJUKANG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1716","HIMS/04/18/0093","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 11:32:07","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","JATO BENNETT NGANJI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1717","HIMS/04/18/0095","","02-04-2020","0","","04","2019/2020","1","02-04-2020 11:33:34","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","FULI FUBONG JEAN JACQUES  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","315000");
INSERT INTO daily VALUES("1718","HIMS/01/18/0096","","02-04-2020","2500","","04","2019/2020","1","02-04-2020 11:34:50","fees","1","2500","2500","0","Super Admmin","02-04-2020","2500","0","ARREY BRUNHILDA BESSEM  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","325000");
INSERT INTO daily VALUES("1719","HIMS/09/18/0098","","02-04-2020","0","","04","2019/2020","1","02-04-2020 11:36:58","fees","1","0","0","292500","Super Admmin","02-04-2020","0","0","SABILA ROJER SAMA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","175000");
INSERT INTO daily VALUES("1720","HIMS/05/18/0099","","02-04-2020","202500","","04","2019/2020","1","02-04-2020 11:37:56","fees","1","202500","202500","100000","Super Admmin","02-04-2020","202500","0","OSCAR NGALE NJIE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1721","HIMS/06/18/0100","","02-04-2020","195000","","04","2019/2020","1","02-04-2020 11:40:22","fees","1","195000","195000","257500","Super Admmin","02-04-2020","195000","0","AJONG AKO LAURA FORJIA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1722","HIMS/02/18/0101","","02-04-2020","283000","","04","2019/2020","1","02-04-2020 11:41:59","fees","1","283000","283000","102500","Super Admmin","02-04-2020","283000","0","JANICE CHIWENDO MODESTUS  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1723","HIMS/06/18/0103","","02-04-2020","190000","","04","2019/2020","1","02-04-2020 11:43:18","fees","1","190000","190000","112500","Super Admmin","02-04-2020","190000","0","KOLLE SYLVIE NDIPAKEM  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1724","HIMS/06/18/0104","","02-04-2020","0","","04","2019/2020","1","02-04-2020 11:45:16","fees","1","0","0","27500","Super Admmin","02-04-2020","0","0","SHADRACK LYONGA NGANJE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","300000");
INSERT INTO daily VALUES("1725","HIMS/04/18/0105","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 11:47:05","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","ENOH CECILIA NSO  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1726","HIMS/06/18/0107","","02-04-2020","240000","","04","2019/2020","1","02-04-2020 11:57:12","fees","1","240000","240000","62500","Super Admmin","02-04-2020","240000","0","NGU MERRIAM EMENKENG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1727","HIMS/04/18/0108","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 12:04:09","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","BRANDON NDONGA AGBORI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1728","HIMS/04/18/0109","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:05:52","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","NANG NADEEN BIH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1729","HIMS/04/18/0110","","02-04-2020","50000","","04","2019/2020","1","02-04-2020 12:08:48","fees","1","50000","50000","237500","Super Admmin","02-04-2020","50000","0","EKUKE CHARLES CHAIYE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","150000");
INSERT INTO daily VALUES("1730","HIMS/04/18/0111","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 12:10:48","fees","1","250000","250000","52500","Super Admmin","02-04-2020","250000","0","NDEDI BENGA SALEM JOELLE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1731","HIMS/06/18/0112","","02-04-2020","240000","","04","2019/2020","1","02-04-2020 12:12:57","fees","1","240000","240000","102500","Super Admmin","02-04-2020","240000","0","IYE CHRISTINA ETONGWE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1732","HIMS/02/18/0113","","02-04-2020","175000","","04","2019/2020","1","02-04-2020 12:14:24","fees","1","175000","175000","157500","Super Admmin","02-04-2020","175000","0","YEDKUNA SANDRINE FONCHAM  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1733","HIMS/06/18/0114","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 12:17:03","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","NGONGHO DIVINE GWANYETULA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1734","HIMS/03/18/0115","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 12:22:25","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","SEYRIONE NJELE MANDOU  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1735","HIMS/06/18/0119","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:25:34","fees","1","0","0","50000","Super Admmin","02-04-2020","0","0","ASONGAFAC JULIUS  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1736","HIMS/04/18/0120","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:26:11","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","IBRAHIM MOHAMAN  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1737","HIMS/09/18/0121","","02-04-2020","135000","","04","2019/2020","1","02-04-2020 12:27:24","fees","1","135000","135000","167500","Super Admmin","02-04-2020","135000","0","EMILE NDIP-ARRAH TAKU ABE JUNIOR  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1738","HIMS/06/18/0122","","02-04-2020","300000","","04","2019/2020","1","02-04-2020 12:29:08","fees","1","300000","300000","2500","Super Admmin","02-04-2020","300000","0","NNAM TALOM ANGEL  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1739","HIMS/04/18/0123","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:31:06","fees","1","0","0","590000","Super Admmin","02-04-2020","0","0","DANIEL ELONGO MOMBA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1740","HIMS/06/18/0124","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 12:32:16","fees","1","100000","100000","202500","Super Admmin","02-04-2020","100000","0","NDIP JACKSON BESONG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1741","HIMS/09/18/0125","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:32:44","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","GANG DERICK  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1742","HIMS/04/18/0127","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 12:34:42","fees","1","250000","250000","102500","Super Admmin","02-04-2020","250000","0","MOKOM LOUIS NDOH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1743","HIMS/01/18/0128","","02-04-2020","390000","","04","2019/2020","1","02-04-2020 12:36:37","fees","1","390000","390000","62500","Super Admmin","02-04-2020","390000","0","GEH JUDITH AKE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1744","HIMS/06/18/0129","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 12:37:59","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","ENYOE GENNIEVE MAISAH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1745","HIMS/09/18/0130","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:38:22","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","EPOLLE HILDA LAURA NJIKANG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1746","HIMS/06/18/0131","","02-04-2020","110000","","04","2019/2020","1","02-04-2020 12:39:45","fees","1","110000","110000","192500","Super Admmin","02-04-2020","110000","0","EKOUMBO EKITE BLAIRIO  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1747","HIMS/04/18/0132","","02-04-2020","150000","","04","2019/2020","1","02-04-2020 12:42:33","fees","1","150000","150000","27500","Super Admmin","02-04-2020","150000","0","MARY FRANCIS OLABINJO  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","150000");
INSERT INTO daily VALUES("1748","HIMS/02/18/0135","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 12:44:59","fees","1","200000","200000","112500","Super Admmin","02-04-2020","200000","0","NEBA NDONUI JUNIOR  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1749","HIMS/06/18/0136","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 12:46:51","fees","1","200000","200000","102500","Super Admmin","02-04-2020","200000","0","AWANTOH NEVILLE MOLINGA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1750","HIMS/06/18/0137","","02-04-2020","290000","","04","2019/2020","1","02-04-2020 12:48:35","fees","1","290000","290000","37500","Super Admmin","02-04-2020","290000","0","KUTA NJINDA DANIEL  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1751","HIMS/09/18/0138","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 12:50:12","fees","1","100000","100000","352500","Super Admmin","02-04-2020","100000","0","BRADLEY DAVID NGEHSONG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1752","HIMS/04/18/0139","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:51:14","fees","1","0","0","100000","Super Admmin","02-04-2020","0","0","MALLE VIVIAN BOTI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1753","HIMS/04/18/0139","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:52:39","fees","1","0","0","100000","Super Admmin","02-04-2020","0","0","MALLE VIVIAN BOTI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1754","HIMS/02/18/0140","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 12:54:38","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","JOHN ADEYEMI PRAISE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1755","HIMS/01/18/0141","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:55:32","fees","1","0","0","57000","Super Admmin","02-04-2020","0","0","AMEI FAITH MBANGWI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1756","HIMS/01/18/0144","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 12:57:15","fees","1","250000","250000","122500","Super Admmin","02-04-2020","250000","0","AKONGNWI LESLEY TUH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1757","HIMS/06/18/0145","","02-04-2020","0","","04","2019/2020","1","02-04-2020 12:59:06","fees","1","0","0","250000","Super Admmin","02-04-2020","0","0","EWANG PRINCESS MALIAKA MOROMBI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1758","HIMS/04/18/0146","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 13:00:00","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","OTTIA VERON OFON  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1759","HIMS/03/18/0147","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 13:01:47","fees","1","100000","100000","302500","Super Admmin","02-04-2020","100000","0","MARIE ANNE MBI ASONGWE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1760","HIMS/03/18/0174","","02-04-2020","0","","04","2019/2020","1","02-04-2020 13:04:10","fees","1","0","0","100000","Super Admmin","02-04-2020","0","0","FOSSUNG ELVIRA TATA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1761","HIMS/06/18/0173","","02-04-2020","170000","","04","2019/2020","1","02-04-2020 13:05:47","fees","1","170000","170000","127500","Super Admmin","02-04-2020","170000","0","MARY LUCKY EDET  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1762","HIMS/02/18/0172","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 13:09:09","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","LORD BERNARD-STANLAKE LIKEVE MBONDE MUAMBO JUNIOR ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1763","HIMS/06/18/0169","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 13:10:31","fees","1","250000","250000","52500","Super Admmin","02-04-2020","250000","0","EHBEH BRANDON EJABI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1764","HIMS/04/18/0168","","02-04-2020","0","","04","2019/2020","1","02-04-2020 13:12:05","fees","1","0","0","102500","Super Admmin","02-04-2020","0","0","TEZOCK KELSON FOSOH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1765","HIMS/02/18/0167","","02-04-2020","50000","","04","2019/2020","1","02-04-2020 13:13:40","fees","1","50000","50000","412500","Super Admmin","02-04-2020","50000","0","AKEBE GISELE ECHE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1766","HIMS/02/18/0166","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 13:17:00","fees","1","250000","250000","52500","Super Admmin","02-04-2020","250000","0","AGBOR AGNESS EBANYUO  ","02","CASH"," ","CASH","","0","","0","","","","","300","HND","","","25000");
INSERT INTO daily VALUES("1767","HIMS/09/18/0164","","02-04-2020","0","","04","2019/2020","1","02-04-2020 13:18:48","fees","1","0","0","220000","Super Admmin","02-04-2020","0","0","MBANGAH ERIC NJEI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1768","HIMS/04/18/0162","","02-04-2020","0","","04","2019/2020","1","02-04-2020 13:19:49","fees","1","0","0","200000","Super Admmin","02-04-2020","0","0","YEGNONG CEDRIC GAETANG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1769","HIMS/05/18/0161","","02-04-2020","0","","04","2019/2020","1","02-04-2020 13:20:18","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","AJIAKU ASONGU JUSTICE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1770","HIMS/03/18/0160","","02-04-2020","50000","","04","2019/2020","1","02-04-2020 13:21:56","fees","1","50000","50000","282500","Super Admmin","02-04-2020","50000","0","AYUKBANGHA SHARON AGBORNA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","10000");
INSERT INTO daily VALUES("1771","HIMS/02/18/0159","","02-04-2020","402500","","04","2019/2020","1","02-04-2020 13:23:25","fees","1","402500","402500","0","Super Admmin","02-04-2020","402500","0","FUH BRUNO KENAH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1772","HIMS/03/18/0158","","02-04-2020","352500","","04","2019/2020","1","02-04-2020 13:25:37","fees","1","352500","352500","0","Super Admmin","02-04-2020","352500","0","SONGO WILLIAM AKUH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1773","HIMS/04/18/0157","","02-04-2020","0","","04","2019/2020","1","02-04-2020 13:26:09","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","NGATCHA LEUTOU BRICE ANICET  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1774","HIMS/04/18/0156","","02-04-2020","0","","04","2019/2020","1","02-04-2020 13:26:38","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","AKEN JACKSON INDOHEQUWE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1775","HIMS/02/18/0155","","02-04-2020","300000","","04","2019/2020","1","02-04-2020 13:28:08","fees","1","300000","300000","142500","Super Admmin","02-04-2020","300000","0","NTSI PROMISE ABOH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1776","HIMS/04/18/0154","","02-04-2020","100000","","04","2019/2020","1","02-04-2020 13:29:46","fees","1","100000","100000","357500","Super Admmin","02-04-2020","100000","0","ETAH BILLY-JOEL AWANIDANG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1777","HIMS/06/18/0153","","02-04-2020","150000","","04","2019/2020","1","02-04-2020 13:31:18","fees","1","150000","150000","52500","Super Admmin","02-04-2020","150000","0","LUKONG KAREEN JAIKA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","125000");
INSERT INTO daily VALUES("1778","HIMS/02/18/0151","","02-04-2020","302500","","04","2019/2020","1","02-04-2020 13:32:47","fees","1","302500","302500","0","Super Admmin","02-04-2020","302500","0","MEMU COLLINS SALACK  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","40000");
INSERT INTO daily VALUES("1779","HIMS/02/18/0150","","02-04-2020","332500","","04","2019/2020","1","02-04-2020 13:34:59","fees","1","332500","332500","0","Super Admmin","02-04-2020","332500","0","NCHINDA CHELSEY KETSEM  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1780","HIMS/05/18/0149","","02-04-2020","230000","","04","2019/2020","1","02-04-2020 13:36:00","fees","1","230000","230000","87500","Super Admmin","02-04-2020","230000","0","ORO MICHAEL MESEMBE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1781","HIMS/01/18/0148","","02-04-2020","150000","","04","2019/2020","1","02-04-2020 13:37:23","fees","1","150000","150000","152500","Super Admmin","02-04-2020","150000","0","TANGWO DELPHINE NEME  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","25000");
INSERT INTO daily VALUES("1782","HIMS/04/16/0196","","02-04-2020","30000","","04","2019/2020","1","02-04-2020 13:39:53","fees","1","30000","30000","300000","Super Admmin","02-04-2020","30000","0","MAIKANO MAYAH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1783","HIMS/04/16/0298","","02-04-2020","30000","","04","2019/2020","1","02-04-2020 13:41:08","fees","1","30000","30000","270000","Super Admmin","02-04-2020","30000","0","FALE NJEH BRUNHILDA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1784","UBa/HIMS/04/19/0163","","02-04-2020","200000","","04","2019/2020","1","02-04-2020 13:42:18","fees","1","200000","200000","102500","Super Admmin","02-04-2020","200000","0","EGBE MIRIAM OBEN  ","02","CASH"," ","CASH","","0","","0","","","","","400","","","","0");
INSERT INTO daily VALUES("1785","HIMS/02/18/0195","","02-04-2020","180000","","04","2019/2020","1","02-04-2020 13:44:17","fees","1","180000","180000","150000","Super Admmin","02-04-2020","180000","0","GEORGES MBUA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1786","HIMS/03/16/0010","","02-04-2020","210000","","04","2019/2020","1","02-04-2020 13:50:02","fees","1","210000","210000","142500","Super Admmin","02-04-2020","210000","0","BESEME AGBOR FRANCA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1787","HIMS/02/18/0194","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 13:51:25","fees","1","250000","250000","80000","Super Admmin","02-04-2020","250000","0","NJITA BORIS DOBGIMA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1788","HIMS/05/18/0193","","02-04-2020","30000","","04","2019/2020","1","02-04-2020 13:52:23","fees","1","30000","30000","300000","Super Admmin","02-04-2020","30000","0","ALAIN MEIKETEH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1789","HIMS/02/18/0192","","02-04-2020","280000","","04","2019/2020","1","02-04-2020 13:53:28","fees","1","280000","280000","50000","Super Admmin","02-04-2020","280000","0","ADANG FON MANSFIELD  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1790","HIMS/02/15/0031","","02-04-2020","147500","","04","2019/2020","1","02-04-2020 13:55:19","fees","1","147500","147500","0","Super Admmin","02-04-2020","147500","0","EGEH JOEL FOSSONG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1791","HIMS/08/18/0191","","02-04-2020","330000","","04","2019/2020","1","02-04-2020 13:56:41","fees","1","330000","330000","0","Super Admmin","02-04-2020","330000","0","MBELLE VANITA SENJA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1792","HIMS/04/18/0175","","02-04-2020","130000","","04","2019/2020","1","02-04-2020 13:58:14","fees","1","130000","130000","87500","Super Admmin","02-04-2020","130000","0","SIKOD MILTON CHEH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1793","HIMS/04/16/0597","","02-04-2020","250000","","04","2019/2020","1","02-04-2020 13:59:16","fees","1","250000","250000","52500","Super Admmin","02-04-2020","250000","0","MOSAH GILLIAN NGWE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1794","HIMS/04/15/0401","","02-04-2020","302000","","04","2019/2020","1","02-04-2020 14:00:55","fees","1","302000","302000","-29500","Super Admmin","02-04-2020","302000","0","LIWONJO ROSE EWOKOLE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","15000");
INSERT INTO daily VALUES("1795","HIMS/10/18/0177","","02-04-2020","330000","","04","2019/2020","1","02-04-2020 14:02:10","fees","1","330000","330000","0","Super Admmin","02-04-2020","330000","0","NKEFUET NKENGASONG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1796","HIMS/05/15/0488","","02-04-2020","0","","04","2019/2020","1","02-04-2020 14:02:36","fees","1","0","0","0","Super Admmin","02-04-2020","0","0","AKO MINETTE EBOT  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1797","HIMS/10/18/0178","","02-04-2020","150000","","04","2019/2020","1","02-04-2020 14:03:56","fees","1","150000","150000","180000","Super Admmin","02-04-2020","150000","0","BWELE ELISABETH EHANG  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1798","HIMS/03/18/0179","","02-04-2020","330000","","04","2019/2020","1","02-04-2020 14:05:02","fees","1","330000","330000","0","Super Admmin","02-04-2020","330000","0","YVONNE BIHNWIE AKUMA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1799","HIMS/03/18/0180","","02-04-2020","150000","","04","2019/2020","1","02-04-2020 14:05:59","fees","1","150000","150000","180000","Super Admmin","02-04-2020","150000","0","AFANGWI NORBERT  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1800","HIMS/07/18/0181","","02-04-2020","130000","","04","2019/2020","1","02-04-2020 14:06:57","fees","1","130000","130000","100000","Super Admmin","02-04-2020","130000","0","NABI LOVELINE ANWI  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","100000");
INSERT INTO daily VALUES("1801","HIMS/07/18/0182","","02-04-2020","130000","","04","2019/2020","1","02-04-2020 14:07:54","fees","1","130000","130000","200000","Super Admmin","02-04-2020","130000","0","SANDRA AZI FOMBO  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1802","HIMS/06/18/0183","","02-04-2020","280000","","04","2019/2020","1","02-04-2020 14:08:51","fees","1","280000","280000","50000","Super Admmin","02-04-2020","280000","0","SHANICE TEKUMU NGANDON  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1803","HIMS/08/18/0184","","02-04-2020","280000","","04","2019/2020","1","02-04-2020 14:10:05","fees","1","280000","280000","50000","Super Admmin","02-04-2020","280000","0","BAMOBE MOSELE ANGELA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1804","HIMS/08/18/0185","","02-04-2020","330000","","04","2019/2020","1","02-04-2020 14:10:52","fees","1","330000","330000","0","Super Admmin","02-04-2020","330000","0","NGUNTI IGNATIUS EBWE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1805","HIMS/01/18/0186","","02-04-2020","30000","","04","2019/2020","1","02-04-2020 14:12:20","fees","1","30000","30000","125000","Super Admmin","02-04-2020","30000","0","BETHEL ECHAN ETAVE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","175000");
INSERT INTO daily VALUES("1806","HIMS/01/14/0567","","02-04-2020","300000","","04","2019/2020","1","02-04-2020 14:13:50","fees","1","300000","300000","0","Super Admmin","02-04-2020","300000","0","BAH STEPHANI NGWE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1807","HIMS/05/16/0163","","02-04-2020","30000","","04","2019/2020","1","02-04-2020 14:14:43","fees","1","30000","30000","270000","Super Admmin","02-04-2020","30000","0","JABEYA RUTH LIMUNGA  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1808","HIMS/01/15/0621","","02-04-2020","180000","","04","2019/2020","1","02-04-2020 14:15:44","fees","1","180000","180000","120000","Super Admmin","02-04-2020","180000","0","NDULA CLAUDIA FENTAH  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1809","HIMS/04/16/0595","","02-04-2020","140000","","04","2019/2020","1","02-04-2020 14:18:50","fees","1","140000","140000","192500","Super Admmin","02-04-2020","140000","0","DOHASANG ELIZABETH ANDINE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1810","HIMS/01/18/0188","","02-04-2020","230000","","04","2019/2020","1","02-04-2020 14:19:49","fees","1","230000","230000","100000","Super Admmin","02-04-2020","230000","0","CHAFACK URSHERICK TENDONGMO  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1811","HIMS/08/18/0189","","02-04-2020","330000","","04","2019/2020","1","02-04-2020 14:20:44","fees","1","330000","330000","0","Super Admmin","02-04-2020","330000","0","NGASI BERNICE WELISANE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");
INSERT INTO daily VALUES("1812","HIMS/08/18/0190","","02-04-2020","300000","","04","2019/2020","1","02-04-2020 14:21:43","fees","1","300000","300000","30000","Super Admmin","02-04-2020","300000","0","DIPITA NDOKO AIMEE  ","02","CASH"," ","CASH","","0","","0","","","","","300","","","","0");





CREATE TABLE `debtors` (
  `roll` int(50) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL DEFAULT '0000-00-00',
  `time` varchar(250) NOT NULL,
  `matricule` varchar(400) DEFAULT NULL,
  `student_name` varchar(400) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `expected_amount` int(50) DEFAULT NULL,
  `amount_paid` int(50) DEFAULT NULL,
  `balance` int(50) DEFAULT NULL,
  `month` varchar(50) DEFAULT NULL,
  `year` varchar(250) DEFAULT NULL,
  `olddebt` int(50) DEFAULT NULL,
  `amountpaid` varchar(400) DEFAULT NULL,
  `xxx` varchar(400) DEFAULT NULL,
  `photo` varchar(400) DEFAULT NULL,
  `oldb` varchar(50) DEFAULT NULL,
  `ids` varchar(400) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

INSERT INTO debtors VALUES("1","09-03-2017","200","","Emuke Relindis Ajawoh  ","BSC NURSING","0","0","250000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("2","09-03-2017","200","","Eyong Besong Ngom  ","HND MEDICAL LABORATORY","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("4","09-03-2017","200","","Ikio Emilia O","BSC NURSING","0","0","250000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("82","09-03-2017","200","","Njang Melvis Nchanyu  ","PHARMACY ASSISTANT","0","0","50000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("6","09-03-2017","200","","Matoh Eveline J","BSC NURSING","0","0","250000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("91","09-03-2017","200","","Enow Nkah Bruno  ","MEDICAL LABORATORY SCIENCE","0","0","140000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("9","09-03-2017","200","","Tanwie B. Fundoh  ","BSC NURSING","0","0","100000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("11","09-03-2017","200","","Vobe Princewill A","HEALTH CARE MANAGEMENT","0","0","250000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("85","09-03-2017","200","","Mandi Blanche Njuli Mbone  ","MEDICAL SALES REPRESENTATIVE","0","0","100000","","","","","","","2013/2014","16");
INSERT INTO debtors VALUES("13","09-03-2017","200","","Shale Faith  ","GERIATRIC/HND  NURSING","0","0","270000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("14","09-03-2017","200","","Bobga Carine Layin  ","HND NURSING","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("16","09-03-2017","200","","Acha Celestine Njinkeng  ","STATE REGISTERED NURSE","0","0","150000","","","","","","","2013/2014","16");
INSERT INTO debtors VALUES("17","09-03-2017","200","","Ituka Dieudonne  ","HND NURSING","0","0","30000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("18","09-03-2017","200","","Agnes Abessolo  ","STATE REGISTERED NURSE","0","0","100000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("19","09-03-2017","200","","Akame Gladis  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("20","09-03-2017","200","","Maku Kadjo Hermine L","HND NURSING","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("21","09-03-2017","200","","Akeh Josephine Atud  ","STATE REGISTERED NURSE","0","0","25000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("22","09-03-2017","200","","Ambain Rose Tesh  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("25","09-03-2017","200","","Neh Doreen S ","BANKING AND FINANCE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("86","09-03-2017","200","","Azangu Robavine Nyambot  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("29","09-03-2017","200","","Diana Eposi Eko  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("30","09-03-2017","200","","Elizabeth Angwie T  ","STATE REGISTERED NURSE","0","0","25000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("31","09-03-2017","200","","Fon Fri Afor  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("33","09-03-2017","200","","Gemuya Bangsi C  ","STATE REGISTERED NURSE","0","0","25000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("35","09-03-2017","200","","Mata Maximine Merly  ","STATE REGISTERED NURSE","0","0","25000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("87","09-03-2017","200","","Betrand Njonjo Muambo  ","STATE REGISTERED NURSE","0","0","25000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("37","09-03-2017","200","","Ndobe Mengang Ngwese Bebeto  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("38","09-03-2017","200","","Ngoyanga Sophis Mbock  ","STATE REGISTERED NURSE","0","0","25000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("39","09-03-2017","200","","Ngozi Sandag Rosaline  ","STATE REGISTERED NURSE","0","0","190000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("40","09-03-2017","200","","Stephanie Tekeh Nanyongo  ","HND MEDICAL LABORATORY","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("41","09-03-2017","200","","Nkongmi Sophina Emffou  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("42","09-03-2017","200","","Afor Palvin J E   ","HEALTH CARE MANAGEMENT","0","0","180000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("43","09-03-2017","200","","Salamatou Hamadou  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("44","09-03-2017","200","","Siwe Ngengwe Richard  ","STATE REGISTERED NURSE","0","0","270000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("46","09-03-2017","200","","Tongwa Gillette Anyiamin  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("47","09-03-2017","200","","Aminkeng Melvis M  ","HND NURSING","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("83","09-03-2017","200","","Enobo Josiane  ","GERIATRIC NURSING","0","0","140000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("84","09-03-2017","200","","Diony Enanga Doris  ","MEDICAL SALES REPRESENTATIVE","0","0","100000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("69","09-03-2017","200","","Babi Hilda A  ","PHARMACY ASSISTANT","0","0","25000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("52","09-03-2017","200","","Epie Elmina Lombe  ","HND NURSING","0","0","350000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("53","09-03-2017","200","","Mbang Elvis  ","MEDICAL LABORATORY SCIENCE","0","0","260000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("59","09-03-2017","200","","Ndang Harriet Y  ","HND NURSING","0","0","150000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("61","09-03-2017","200","","Neh Doreen S  ","HND NURSING","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("62","09-03-2017","200","","Arreu Akum Tanyi  ","STATE REGISTERED NURSE","0","0","150000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("63","09-03-2017","200","","Ngonge Kelly M N  ","HND NURSING","0","0","250000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("64","09-03-2017","200","","Omega B Marienette  ","HND NURSING","0","0","350000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("66","09-03-2017","200","","Tachang A Bisangha  ","HND NURSING","0","0","90000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("88","09-03-2017","200","","Salamatou Ibrahim T  ","STATE REGISTERED NURSE","0","0","25000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("72","09-03-2017","200","","Bamobe Beltha Bokwe  ","PHARMACY ASSISTANT","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("89","09-03-2017","200","","Tchenke Njanke Ngodo C  ","STATE REGISTERED NURSE","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("75","09-03-2017","200","","Enih Clarisse   ","PHARMACY ASSISTANT","0","0","25000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("90","09-03-2017","200","","Johana Kinge Ngoisah  ","PHARMACY ASSISTANT","0","0","80000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("79","09-03-2017","200","","Kponqwih Njibonko Adeline  ","PHARMACY ASSISTANT","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("80","09-03-2017","200","","Manka Cythia Che Awambeng  ","PHARMACY ASSISTANT","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("81","09-03-2017","200","","Tabe Willington Tambe  ","PHARMACY ASSISTANT","0","0","200000","","","","","","","2015/2016","16");
INSERT INTO debtors VALUES("94","29-01-2018","400","HND 1115","OBIE CLINTON BEA  ","HND Nursing","0","0","0","","","","","","","2016/2017","16");
INSERT INTO debtors VALUES("96","29-01-2018","400","HND 1189","BILLA TAMBE TONY  ","HND Nursing","0","0","100000","","","","","","","2016/2017","16");
INSERT INTO debtors VALUES("97","29-01-2018","300","HCM 037","MESUMBE KOME CLAUDE  ","HMD Health Care Management","0","0","70000","","","","","","","2016/2017","16");
INSERT INTO debtors VALUES("98","21-05-2018","200","HIMS/2/17/005","Kum Peter Kum  ","MARKETING","315000","0","40000","","","","","","","2017/2018","16");
INSERT INTO debtors VALUES("99","21-05-2018","200","HIMS/2/17/005","Kum Peter Kum  ","MARKETING","315000","0","45000","","","","","","","2016/2017","16");
INSERT INTO debtors VALUES("100","14-07-2018","200","HIMS/2/17/005900","Kum Peter Kum  ","","250000","0","250000","","","","","","","2015/2016","16");





CREATE TABLE `dept_stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(90) NOT NULL,
  `discribe` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `receive` varchar(10) NOT NULL,
  `lefts` varchar(10) NOT NULL,
  `senttby` varchar(50) NOT NULL,
  `sentto` varchar(50) NOT NULL,
  `date` varchar(18) NOT NULL,
  `month` varchar(5) NOT NULL,
  `year` varchar(7) NOT NULL,
  `name` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO dept_stocks VALUES("1","A4 Papers","REAMS","","4","126.00","procure","EXAMS OFFICE","23-06-2017","06","2017","MUNGUSI LEONARD TOHNJI");
INSERT INTO dept_stocks VALUES("2","A4 Papers","REAMS","","1","125.00","procure","Marketing","28-06-2017","06","2017","----Select One Name----");
INSERT INTO dept_stocks VALUES("3","A4 Papers","REAMS","","11","114.00","procure","VICE PROVOST ACADEMIC","03-07-2017","07","2017","Frida Monjowa Fobia");
INSERT INTO dept_stocks VALUES("4","A4 Papers","REAMS","","10","104.00","procure","VICE PROVOST RESEARCH AND COOPERATION","03-07-2017","07","2017","----Select One Name----");
INSERT INTO dept_stocks VALUES("5","A4 Papers","REAMS","","5","99.00","procure","SECRETARIAT SHS","03-07-2017","07","2017","Glory Ngowo Luma");
INSERT INTO dept_stocks VALUES("6","A4 Papers","REAMS","","5","94.00","procure","DIRECTOR SMS","03-07-2017","07","2017","Ashu Esther Taku");
INSERT INTO dept_stocks VALUES("7","A4 Papers","REAMS","","4","90.00","procure","EXAMS OFFICE","05-07-2017","07","2017","MUNGUSI LEONARD TOHNJI");
INSERT INTO dept_stocks VALUES("8","","","","","","procure","HOSPITAL","16-08-2017","08","2017","");
INSERT INTO dept_stocks VALUES("9","","","","","","procure","HOSPITAL","16-08-2017","08","2017","");
INSERT INTO dept_stocks VALUES("10","","","","","","procure","HOSPITAL","16-08-2017","08","2017","");
INSERT INTO dept_stocks VALUES("11","","","","","","procure","HOSPITAL","16-08-2017","08","2017","");
INSERT INTO dept_stocks VALUES("12","","","","","","","HOSPITAL","16-08-2017","08","2017","");
INSERT INTO dept_stocks VALUES("13","A4 Papers","REAMS","","10","80.00","procure","HOSPITAL","16-08-2017","08","2017","James Vusas Vukwusu");
INSERT INTO dept_stocks VALUES("14","A4 Papers","REAMS","","5","75.00","procure","SECRETARIAT SHS","18-08-2017","08","2017","Glory Ngowo Luma");
INSERT INTO dept_stocks VALUES("15","A4 Papers","REAMS","","1","74.00","procure","ADMINISTRATION","31-08-2017","08","2017","Singe Ikome Otto");





CREATE TABLE `direct_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `code` varchar(30) NOT NULL,
  `last` varchar(11) DEFAULT NULL,
  `ayear` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO direct_entry VALUES("3","B-TECH","UBa/HIMS","11","2018/2019");
INSERT INTO direct_entry VALUES("4","MBA","UBa/HIMS/PG","","");
INSERT INTO direct_entry VALUES("5","HND","HIMS","714","2018/2019");
INSERT INTO direct_entry VALUES("10","PART TIME","HIMS/PT","","");





CREATE TABLE `disburse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sentby` varchar(30) NOT NULL,
  `sentto` varchar(40) NOT NULL,
  `item` varchar(80) NOT NULL,
  `stock` varchar(7) NOT NULL,
  `taken` varchar(15) NOT NULL,
  `current` varchar(15) NOT NULL,
  `discribe` varchar(50) NOT NULL,
  `date` varchar(17) NOT NULL,
  `month` varchar(5) NOT NULL,
  `year` text NOT NULL,
  `status` int(11) NOT NULL,
  `receiver` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO disburse VALUES("1","admin12","HND","TOWELS","20","1","18.00","LARGE","04-04-2017","04","2017","2","Abe Darlis");
INSERT INTO disburse VALUES("2","admin12","HND","Pasta","22","2","20.00","LARGE","04-04-2017","04","2017","2","Abe Darlis");
INSERT INTO disburse VALUES("3","","HND","TOWELS","1","1","2","bad goods","16-04-2017","04","2017","2","Aminkeng Leke Zawuo");
INSERT INTO disburse VALUES("4","procure","HND","TOWELS","18.00","3","15.00","LARGE","17-04-2017","04","2017","2","Aminkeng Leke Zawuo");
INSERT INTO disburse VALUES("5","procure","HND","Pasta","20.00","1","19.00","LARGE","17-04-2017","04","2017","2","Aminkeng Leke Zawuo");
INSERT INTO disburse VALUES("6","procure","HND","Thernal Printer H400","8","1","7.00","2000","17-04-2017","04","2017","2","Aminkeng Leke Zawuo");
INSERT INTO disburse VALUES("7","procure","HND","TOWELS","18.00","3","15.00","LARGE","17-04-2017","04","2017","0","");
INSERT INTO disburse VALUES("8","procure","HND","Pasta","20.00","1","19.00","LARGE","17-04-2017","04","2017","0","");
INSERT INTO disburse VALUES("9","procure","HND","Thernal Printer H400","8","1","7.00","2000","17-04-2017","04","2017","0","");
INSERT INTO disburse VALUES("10","procure","Finance","Wall Clock","4","1","3.00","Wall Clock","17-04-2017","04","2017","2","CHIA RICHARD AFUMBOM");
INSERT INTO disburse VALUES("11","procure","EXAMS OFFICE","A4 Papers","130","4","126.00","REAMS","23-06-2017","06","2017","2","MUNGUSI LEONARD TOHNJI");
INSERT INTO disburse VALUES("12","procure","Marketing","A4 Papers","126.00","1","125.00","REAMS","28-06-2017","06","2017","2","----Select One Name----");
INSERT INTO disburse VALUES("13","procure","VICE PROVOST ACADEMIC","A4 Papers","125.00","11","114.00","REAMS","03-07-2017","07","2017","2","Frida Monjowa Fobia");
INSERT INTO disburse VALUES("14","procure","VICE PROVOST RESEARCH AND COOPERATION","A4 Papers","114.00","0","104.00","REAMS","03-07-2017","07","2017","2","----Select One Name----");
INSERT INTO disburse VALUES("15","","VICE PROVOST RESEARCH AND COOPERATION","A4 Papers","0","10","10","MISTAKE","03-07-2017","07","2017","0","");
INSERT INTO disburse VALUES("16","procure","SECRETARIAT SHS","A4 Papers","104.00","5","99.00","REAMS","03-07-2017","07","2017","2","Glory Ngowo Luma");
INSERT INTO disburse VALUES("17","procure","DIRECTOR SMS","A4 Papers","99.00","5","94.00","REAMS","03-07-2017","07","2017","2","Ashu Esther Taku");
INSERT INTO disburse VALUES("18","procure","EXAMS OFFICE","A4 Papers","94.00","4","90.00","REAMS","05-07-2017","07","2017","2","MUNGUSI LEONARD TOHNJI");
INSERT INTO disburse VALUES("19","procure","HOSPITAL","A4 Papers","90.00","10","80.00","REAMS","16-08-2017","08","2017","2","James Vusas Vukwusu");
INSERT INTO disburse VALUES("20","procure","SECRETARIAT SHS","A4 Papers","80.00","5","75.00","REAMS","18-08-2017","08","2017","2","Glory Ngowo Luma");
INSERT INTO disburse VALUES("21","procure","ADMINISTRATION","A4 Papers","75.00","1","74.00","REAMS","31-08-2017","08","2017","2","Singe Ikome Otto");





CREATE TABLE `exp_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) NOT NULL,
  `name` varchar(90) NOT NULL,
  `budget` varchar(12) NOT NULL,
  `ayear` varchar(9) NOT NULL,
  `status` int(11) NOT NULL,
  `heads` varchar(14) NOT NULL,
  `excode` varchar(14) NOT NULL,
  `budget1` varchar(13) NOT NULL,
  `used` varchar(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

INSERT INTO exp_classes VALUES("1","","HIRED SERVICES","23978921","2016/2017","0","GENERAL","","23978921","3432000");
INSERT INTO exp_classes VALUES("2","","CNPS CONTRIBUTION","25342734","2016/2017","0","GENERAL","","25342734","9730596");
INSERT INTO exp_classes VALUES("3","","STUDENTS INSURANCE","6200000","2016/2017","0","GENERAL","","6200000","");
INSERT INTO exp_classes VALUES("4","","Inverstments(Equipments)","61000000","2016/2017","0","GENERAL","","61000000","67313500");
INSERT INTO exp_classes VALUES("5","","Buildings","44000000","2016/2017","0","GENERAL","","44000000","8050000");
INSERT INTO exp_classes VALUES("6","","Entrance Exams","5500000","2016/2017","0","GENERAL","","5500000","5400000");
INSERT INTO exp_classes VALUES("7","","Graduation/Matriculation","3650000","2016/2017","0","GENERAL","","3650000","5818000");
INSERT INTO exp_classes VALUES("8","","Telecom Services ","11000000","2016/2017","0","GENERAL","","11000000","3089900");
INSERT INTO exp_classes VALUES("9","","Electricity Bills","2000000","2016/2017","0","GENERAL","","2000000","767704");
INSERT INTO exp_classes VALUES("10","","Water Bills","500000","2016/2017","0","GENERAL","","500000","83756");
INSERT INTO exp_classes VALUES("11","","Staff Travl By Air","6000000","2016/2017","0","GENERAL","","6000000","2015658");
INSERT INTO exp_classes VALUES("12","","Electrical Repairs","2000000","2016/2017","0","GENERAL","","2000000","1993900");
INSERT INTO exp_classes VALUES("14","","Building Repairs","2000000","2016/2017","0","GENERAL","","2000000","2559000");
INSERT INTO exp_classes VALUES("15","","Repairs Of Cars","5400000","2016/2017","0","GENERAL","","5400000","4902100");
INSERT INTO exp_classes VALUES("16","","Transport By Land","500000","2016/2017","0","GENERAL","","500000","43000");
INSERT INTO exp_classes VALUES("17","","IT Department Maintenance","5000000","2016/2017","0","GENERAL","","5000000","1267000");
INSERT INTO exp_classes VALUES("18","","Meetings","1000000","2016/2017","0","GENERAL","","1000000","288600");
INSERT INTO exp_classes VALUES("19","","Medical Assistance","3000000","2016/2017","0","GENERAL","","3000000","300000");
INSERT INTO exp_classes VALUES("21","","Computer Accesories","500000","2016/2017","0","GENERAL","","500000","405000");
INSERT INTO exp_classes VALUES("22","","Stationaries","2400000","2016/2017","0","GENERAL","","2400000","2857750");
INSERT INTO exp_classes VALUES("23","","Office Ink","2000000","2016/2017","0","GENERAL","","2000000","440500");
INSERT INTO exp_classes VALUES("24","","Cleaning Services","200000","2016/2017","0","GENERAL","","200000","459525");
INSERT INTO exp_classes VALUES("25","","Departmental Movement","2500000","2016/2017","0","GENERAL","","2500000","1191500");
INSERT INTO exp_classes VALUES("26","","Secretariat Expenses ","1500000","2016/2017","0","GENERAL","","1500000","1046800");
INSERT INTO exp_classes VALUES("27","","Allowances Paid","5000000","2016/2017","0","GENERAL","","5000000","1100000");
INSERT INTO exp_classes VALUES("28","","Student Forum","1500000","2016/2017","0","GENERAL","","1500000","706000");
INSERT INTO exp_classes VALUES("29","","Student Robes","2000000","2016/2017","0","GENERAL","","2000000","2000000");
INSERT INTO exp_classes VALUES("31","","Training And Development","7000000","2016/2017","0","GENERAL","","7000000","1682000");
INSERT INTO exp_classes VALUES("32","","Insurance Services","2000000","2016/2017","0","GENERAL","","2000000","733065");
INSERT INTO exp_classes VALUES("33","","Foreign Collaboration ","3000000","2016/2017","0","GENERAL","","3000000","261500");
INSERT INTO exp_classes VALUES("34","","Plumbing Repairs","1000000","2016/2017","0","GENERAL","","1000000","724700");
INSERT INTO exp_classes VALUES("35","","Royalties","11584000","2016/2017","0","GENERAL","","11584000","1111800");
INSERT INTO exp_classes VALUES("36","","Communication Credits","2000000","2016/2017","0","GENERAL","","2000000","472700");
INSERT INTO exp_classes VALUES("37","","Cooperate Gifts","3500000","2016/2017","0","GENERAL","","3500000","5765000");
INSERT INTO exp_classes VALUES("38","","Board Expenses ","3000000","2016/2017","0","GENERAL","","3000000","2255000");
INSERT INTO exp_classes VALUES("39","","Dividend","3000000","2016/2017","0","GENERAL","","3000000","500000");
INSERT INTO exp_classes VALUES("40","","Administrative Assistance","6600000","2016/2017","0","GENERAL","","6600000","2250000");
INSERT INTO exp_classes VALUES("41","","Professional Fees","3000000","2016/2017","0","GENERAL","","3000000","800000");
INSERT INTO exp_classes VALUES("42","","Supervision/Placement","7000000","2016/2017","0","GENERAL","","7000000","769500");
INSERT INTO exp_classes VALUES("43","","Monument(Dr. BIAKA)","0","2016/2017","0","GENERAL","","1036000","1036000");
INSERT INTO exp_classes VALUES("44","","Public Relations","8000000","2016/2017","0","GENERAL","","8000000","1650000");
INSERT INTO exp_classes VALUES("45","","Fin Division","3000000","2016/2017","0","GENERAL","","3000000","1166130");
INSERT INTO exp_classes VALUES("46","","Sport And Recreation","3500000","2016/2017","0","GENERAL","","3500000","1058000");
INSERT INTO exp_classes VALUES("47","","Fuel And Lubricant","7500000","2016/2017","0","GENERAL","","7500000","2480325");
INSERT INTO exp_classes VALUES("48","","Debt Settlement","0","2016/2017","0","GENERAL","","3597300","3597300");
INSERT INTO exp_classes VALUES("49","","Marketing/Publicity","7150000","2016/2017","0","GENERAL","","7150000","1182700");
INSERT INTO exp_classes VALUES("50","","Funeral Assistance","1500000","2016/2017","0","GENERAL","","1500000","820475");
INSERT INTO exp_classes VALUES("51","","Mailing Services ","500000","2016/2017","0","GENERAL","","500000","100000");
INSERT INTO exp_classes VALUES("52","","Other Taxes","4520000","2016/2017","0","GENERAL","","4520000","778000");
INSERT INTO exp_classes VALUES("53","","Reimbursements ","0","2016/2017","0","GENERAL","","1337294","1337294");
INSERT INTO exp_classes VALUES("54","","Reg Exp","0","2016/2017","0","GENERAL","","261000","261000");
INSERT INTO exp_classes VALUES("55","","Withdrawal Account","0","2016/2017","0","GENERAL","","3147985","3147985");
INSERT INTO exp_classes VALUES("56","","Liturgical Services ","0","2016/2017","0","GENERAL","","40000","40000");
INSERT INTO exp_classes VALUES("57","","Leave Allowance","0","2016/2017","0","GENERAL","","35600","35600");
INSERT INTO exp_classes VALUES("58","","Notification ","0","2016/2017","0","GENERAL","","55000","55000");
INSERT INTO exp_classes VALUES("60","","Students IDs","6000000","2016/2017","0","GENERAL","","6000000","");
INSERT INTO exp_classes VALUES("61","","Student Guides","1800000","2016/2017","0","GENERAL","","1800000","");
INSERT INTO exp_classes VALUES("62","","Student Badges ","2700000","2016/2017","0","GENERAL","","2700000","");
INSERT INTO exp_classes VALUES("63","","Exam Materials","11000000","2016/2017","0","GENERAL","","11000000","");
INSERT INTO exp_classes VALUES("64","","Project Defense ","9000000","2016/2017","0","GENERAL","","9000000","");
INSERT INTO exp_classes VALUES("65","","Module Validation","3000000","2016/2017","0","GENERAL","","3000000","");
INSERT INTO exp_classes VALUES("66","","Lab Supplies","4600000","2016/2017","0","GENERAL","","4600000","");
INSERT INTO exp_classes VALUES("67","","Centre Fabrics ","6600000","2016/2017","0","GENERAL","","6600000","");
INSERT INTO exp_classes VALUES("68","","Labour Day Expenses ","1500000","2016/2017","0","GENERAL","","1500000","");
INSERT INTO exp_classes VALUES("69","","Lease And Rental Payments","300000","2016/2017","0","GENERAL","","300000","");
INSERT INTO exp_classes VALUES("70","","Land Titles Documents","3000000","2016/2017","0","GENERAL","","3000000","");
INSERT INTO exp_classes VALUES("71","","Support To Hospital","20000000","2016/2017","0","GENERAL","","20000000","");
INSERT INTO exp_classes VALUES("72","","Other Creditors","17100000","2016/2017","0","GENERAL","","17100000","17100000");
INSERT INTO exp_classes VALUES("73","","Settlement Of Overdraft ","61058700","2016/2017","0","GENERAL","","61058700","61058700");
INSERT INTO exp_classes VALUES("74","","Interest On Loan","6000000","2016/2017","0","GENERAL","","6000000","");
INSERT INTO exp_classes VALUES("75","","Loan Settlement","35000000","2016/2017","0","GENERAL","","35000000","16000000");
INSERT INTO exp_classes VALUES("76","","Conferences","5000000","2016/2017","0","GENERAL","","5000000","555689");





CREATE TABLE `fitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `levels` varchar(15) NOT NULL,
  `prog` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO fitems VALUES("7","Buckets","","BSc. Banking ");
INSERT INTO fitems VALUES("8","Toilet Roll","","BSc. Banking ");
INSERT INTO fitems VALUES("10","1 Rim A4 Papers","","BSc. Banking ");





CREATE TABLE `fixed_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(200) NOT NULL,
  `discribe` varchar(255) NOT NULL,
  `qty` varchar(15) NOT NULL,
  `date` varchar(20) NOT NULL,
  `month` varchar(7) NOT NULL,
  `year` varchar(7) NOT NULL,
  `model` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

INSERT INTO fixed_products VALUES("1","Ledgers For Record Work(400 PG)","400 PGS","0","23-06-2017","04","2017","400 PGS");
INSERT INTO fixed_products VALUES("2","BEBERCOLOR WHITE CHALK","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("3","COLOR + (COLORED CHALK)","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("4","DIDI OFFICE STAPLING MACHINE 26/6 AND 24/6","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("5","BEBE  STAPLING MACHINE","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("6","180 G PAPER FOLDERS","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("7","KINNER BUSINSS CALCULATOR","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("8","WHITE GUM 1 LIT","LIT","0","23-06-2017","04","2017","LIT");
INSERT INTO fixed_products VALUES("9","RETYPE CORRECTING FLUID","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("10","OFFICE PINS ","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("11","STAPLING PINS(BIG) 24/6","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("12","BEBE  STAPLING PIN(SMALL) PACK OF 10","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("13","STAPLING PINS(LARGE) 23/10","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("14","THUMB TAGS","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("15","PAPER CLIPS(PINS) (CARTON OF 10 PKS) 33MM","CARTONS","0","23-06-2017","04","2017","CARTONS");
INSERT INTO fixed_products VALUES("16","CLASS ATTENDANCE REGISTER ","DOZENS","0","23-06-2017","04","2017","DOZENS");
INSERT INTO fixed_products VALUES("17","WATER BOILER","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("18","A3 PAPERS(COPIER)","REALMS","0","23-06-2017","04","2017","REALMS");
INSERT INTO fixed_products VALUES("19","HORSE STAMP PAD","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("20","EXTERNAL HARD DRIVE (500 GB)","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("21","ROTRIN PENCIL ERASER","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("22","SELF INKING (NAME STAMP FOR DIRECTOR OF SHS)","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("23","DATE STAMPS","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("24","BUIB STAMPS ","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("25","HORSE STAM PAD INK","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("26","SCHNEIDER RED PENS","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("27","SCHNEIDER BLUE PENS","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("28","PENCILS (GRAPHITE) HB","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("29","WOODEN DUSTER","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("30","FLASH MEMORY STICK (4GB)","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("31","CDS","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("32","A 6 SKYLINE ENVELOPES(SMALL WHITE ENVELOPERS) LONG 50","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("33","ENVELOPE A3","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("34","ENVELOPE A4","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("35","ENVELOPE A5","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("36","MASKING TAPE (LARGE)","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("37","SCOTCH(","","0","23-06-2017","04","2017","");
INSERT INTO fixed_products VALUES("43","SCOTCH(CELO TAPE) MEDIUUM SIZE 100M","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("44","BIC BOLD MARKERS (PKS OF 12)","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("45","SIGMA HIGH LIGHTER","PKS ","0","23-06-2017","04","2017","PKS ");
INSERT INTO fixed_products VALUES("46","PETER PAND MEDIUM SCISSORS","PKS","0","23-06-2017","04","2017","PKS");
INSERT INTO fixed_products VALUES("47","WHITE BOARD CLEANERS","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("48","BLUE BIC WHITE BOARD  MARKER","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("49","RED BIC WHITE BOARD  MARKER","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("50","BLACK BIC WHITE BOARD  MARKER","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("51","PLASTIC HARD FILES","UNITS","0","23-06-2017","04","2017","UNITS");
INSERT INTO fixed_products VALUES("52","A4 Papers","REAM","0","23-06-2017","06","2017","REAMS");





CREATE TABLE `forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(30) NOT NULL,
  `years` int(11) NOT NULL,
  `matt` int(11) NOT NULL,
  `abb` varchar(3) NOT NULL,
  `ids` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `depf` varchar(11) DEFAULT NULL,
  `area` bit(1) NOT NULL,
  `code` varchar(2) NOT NULL,
  `dep` varchar(220) NOT NULL,
  PRIMARY KEY (`class`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO forms VALUES("1","BSC NURSING","2014","119","BN","16","500000","1000000","1","HS","bn.php");
INSERT INTO forms VALUES("2","BSC MEDICAL LABORATORY","2014","1","BL","16","500000","1000000","1","HS","");
INSERT INTO forms VALUES("3","BSC HEALTH CARE MANAGEMENT","2014","2","BHC","16","500000","1000000","1","HS","");
INSERT INTO forms VALUES("4","BSC NUTRITION AND DIETETICS","2014","3","BND","16","500000","1000000","1","HS","");
INSERT INTO forms VALUES("5","HND NURSING","2014","424","HN","16","400000","700000","1","HS","");
INSERT INTO forms VALUES("6","HND MEDICAL LABORATORY","2014","109","HL","16","400000","","1","HS","");
INSERT INTO forms VALUES("7","HND MIDWIFERY","2014","32","HM","16","400000","700000","1","HS","");
INSERT INTO forms VALUES("8","NUTRITION AND DIETETICS","2014","6","ND","16","400000","70000","1","HS","");
INSERT INTO forms VALUES("9","ENROLLED NURSING","2014","1","EN","16","300000","590000","1","HS","Nursing");
INSERT INTO forms VALUES("10","PHARMACY ASSISTANT","2014","44","PA","16","300000","590000","1","HS"," Pharmacy");
INSERT INTO forms VALUES("11","PHARMACY TECHNOLOGY","2014","27","PT","16","400000","700000","1","HS","");
INSERT INTO forms VALUES("12","HEALTH CARE MANAGEMENT","2014","10","HCM","16","400000","700000","1","HS","");
INSERT INTO forms VALUES("13","GERIATRIC/HND  NURSING","2014","1","GN","16","450000","800000","1","HS","");
INSERT INTO forms VALUES("14","GERIATRIC NURSING","2014","43","GN","16","350000","650000","1","HS"," Nursing");
INSERT INTO forms VALUES("15","OCCUPATIONAL HEALTH AND SAFETY","2014","2","OHS","16","300000","600000","1","HS","");
INSERT INTO forms VALUES("16","MEDICAL SALES REPRESENTATIVE","2014","9","MSR","16","300000","600000","1","HS","Medical Sales Representation");
INSERT INTO forms VALUES("17","MANAGEMENT","2014","1","MG","16","300000","600000","1","MS","");
INSERT INTO forms VALUES("18","ACCOUNTING","2014","1","AC","16","300000","600000","1","MS","");
INSERT INTO forms VALUES("19","SUPPLY CHAIN MANAGEMENT","2014","1","SC","16","300000","600000","1","MS","");
INSERT INTO forms VALUES("20","TAXATION","2014","2","T","16","300000","600000","1","MS","");
INSERT INTO forms VALUES("21","BANKING AND FINANCE","2014","1","BF","16","300000","600000","1","MS","");
INSERT INTO forms VALUES("22","STATE REGISTERED NURSE","0","0","0","0","300000","","1","MS","");
INSERT INTO forms VALUES("23","STATE REGISTERED MIDWIFERY","0","0","0","0","390000","","1","MS","");
INSERT INTO forms VALUES("24","EMERGENCY HEALTH","0","0","0","0","300000","600000","1","MS","");
INSERT INTO forms VALUES("25","ENVIROMENTAL HEALTH TECHNOLOGY","0","0","0","0","300000","600000","1","MS","");
INSERT INTO forms VALUES("26","MEDICAL LABORATORY SCIENCE","0","0","0","0","400000","700000","1","MS","");
INSERT INTO forms VALUES("27","MEDICAL IMAGERY STUDIES","0","0","0","0","300000","600000","1","MS","");
INSERT INTO forms VALUES("28","COMMUNITY HEALTH WORK","0","0","0","0","300000","600000","1","MS","");
INSERT INTO forms VALUES("29","FOOD AND HYGIENE SAFETY","0","0","0","0","300000","600000","1","MS","");
INSERT INTO forms VALUES("30","MEDICAL SECRETARY","0","0","","0","0","","1","","Medical Sales Representation");
INSERT INTO forms VALUES("31","RADIOLOGY ASSISTANT","0","0","","0","0","","1","","Medical Imaging Studies");
INSERT INTO forms VALUES("32","BSC NURSING f","0","0","HSF","0","0","","1","HS","");





CREATE TABLE `gen_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(80) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `pob` varchar(20) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `choiceone` varchar(80) NOT NULL,
  `choicetwo` varchar(80) NOT NULL,
  `background` varchar(30) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `email` varchar(55) NOT NULL,
  `status` int(11) NOT NULL,
  `year` varchar(7) NOT NULL,
  `school` varchar(200) NOT NULL,
  `matric` varchar(10) NOT NULL,
  `fax` varchar(40) NOT NULL,
  `other1` varchar(255) NOT NULL,
  `other1_tittle` varchar(255) NOT NULL,
  `quali1` varchar(100) NOT NULL,
  `other2` varchar(100) NOT NULL,
  `other2_tittle` varchar(255) NOT NULL,
  `other2_quali` varchar(255) NOT NULL,
  `gnameadd` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `saddress` varchar(255) NOT NULL,
  `disability` varchar(15) NOT NULL,
  `adisability` varchar(2500) NOT NULL,
  `criminal` varchar(15) NOT NULL,
  `acriminal` varchar(200) NOT NULL,
  `date` varchar(19) NOT NULL,
  `rec` varchar(11) NOT NULL,
  `day` varchar(6) NOT NULL,
  `month` varchar(6) NOT NULL,
  `school2` varchar(80) NOT NULL,
  `sponsor` varchar(13) NOT NULL,
  `abouts` varchar(80) NOT NULL,
  `photo` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;

INSERT INTO gen_info VALUES("5","MIZERO JUSTINE","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("6","NGHOFEZIE JULIENNE MBITUWOH ","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("7","MBOUYA FOKOU FREEDY WILFRIED","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("8","NANGA BLANDINE STEPHANIE M.","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("9","AWUNG LATEH NICOLINE","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("10","FONGE QUEEN EPOH","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("11","MORFAW RUTH AWUNGLEFEH","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("12","CHEPNDA LETTISE FAYI","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("13","BERTHA NALOVA MOLUA MOTUTU","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("14","WAYI MIRANDA AFUNGMIA","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("15","LUMA BECKLEY EWANE","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("16","OBASE GRACE SINA","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("17","TUMENTA GHANYUI CHANTALE","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("18","BAXLEY TAMBI NWACHUKWU","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("19","ETTAH AGNES ASONGANYI","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("20","MAKIA DELPHINE NJULIE","","","","","","","DIRECT BSC NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("21","","","","","","","","","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("22","AGBOR LAURA AGBOR","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("23","SONE NANGE SANDRINE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("24","IMMANUEL BRYAN AKO ASHU","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("25","FONKEM RODERICK JOMIA N.","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("26","NKWATETIA MBONGHO GLARISSA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("27","DORIS NANYONGO NDIVE NJIE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("28","BEECHING NADINE OJONG","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("29","NKEM JOICELYNE NJINDONG","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("30","NANJE JASPA NANGOSAKA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("31","AYUK PEOLAGIE MA-OJONG","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("32","VANESSA ONYINYECHI IBE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("33","TANDU CILIA NAMA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("34","ROSE MARY MAFOR NFOR","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("35","RITA NALOVA MATUTE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("36","NFONCHO YVONNE BI","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("37","AMARACHI CLAUDINE AMEACHI","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("38","ATABONGAWUNG HOSTENCIA E.","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("39","TAKU ADAMA CHUINUI","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("40","TANYI CLARA OJU","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("41","ATEGHA YVETTE MBONG","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("42","MISPAH LENGNUI MBOJIKOH","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("43","NKAPINE MILORINE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("44","KERRY BESSEM MBUAYANG","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("45","RUTH ESTELLE NAHBILA AVOM","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("46","NGASSA PRINCEWILL TCHIA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("47","BILLA SYNTHIA O.","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("48","MBIANKE LAWZILE FESSE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("49","ABANG MARRIANCH NABILLA AMAR","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("50","FORTIOH NACHI DOROTHY","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("51","NGAMI CHELSEA-GREAT MBOH","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("52","ESUA JULLIETTE NKIE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("53","EBAN AYA FLORENCE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("54","JINGWI ODETTE BONGSE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("55","NGAHA NKAMGWA PHILIPPE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("56","MBIGHE ROMEO ANGUH","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("57","AGBOR ELIZABETH AYUK-FAY","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("58","NGOMSEU NOUBISSIE SERGE BRICE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("59","TEMBAN FERAND ACHA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("60","WANKWE SERAPHINE FRININI","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("61","ANNETTE NAMONDO NDUMBE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("62","NGOLE SANDRA NDONE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("63","CHRISTY NJONG MBAH MESOWEH","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("64","HANNAH LIMUNGA MOTOMBY ITUE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("65","ENANGA NGALE GRACE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("66","NJIKANG VANELSSA NZONG","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("67","SYNTHIA CHINWUEMMERI IYASI","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("68","LESPIA CATHERINE BABILAH ","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("69","FRAMBO ROSEITE OROCK","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("70","NANYONGO ETONGE MONGOMBE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("71","BURO SOLANGE TIFUH","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("72","EWANE MPAH","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("73","MARY YATAH","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("74","KAATTE HAPPI RAISSA FABIOLA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("75","TAKAW GODLOVE AGBOR","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("76","NYANCHI ALBRIGHT YAYABONGSEH","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("77","BEKOUTOU VALERINE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("78","BABIAKA LISSETTE ISANGE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("79","OTTTE ELIZABETH MESUE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("80","MANCHO JOCELYN NGIEH","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("81","TSINGDJOU DEFO STEPHANIE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("82","OBASIAMA SOLANGE ANKIE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("83","BECKY OBI EKOLOK","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("84","MARGARATE SUIKA KANGKOLO","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("85","NKEMTABANG ATEHNJIA DEBORA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("86","MBIKA NICOLINE AMPI","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("87","NORA ANDIN FONCHAM","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("88","ENOW KATTY TAMBE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("89","ATEHNKENG DEFANG VICKY","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("90","MEFFO FOUTE TATIANA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("91","ABEGE MERYLYN ARREY","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("92","NKWA ROBINSON MBONGAYA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("93","EPOSI JOCELYN NTUI","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("94","ATABONG RAMESETTE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("95","ANAKOR THERELINE CHIZOBA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("96","NJI PATIENCE BLONDIE AFOR","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("97","NGNINPIEYE KENFOU ARMEL","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("98","MBELLA KELLY SATCHE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("99","YAWUNG VILLIAN MAIYEN","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("100","NGOUNOUE MERIVA INGRID","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("101","TANGWA HENRIETTA ABUE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("102","NANA NDOWOU MICHELLE NAELLA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("103","MAGUI MBATCHO CHRISTELLE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("104","NDALE SYLVANUS AKONWIE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("105","NKENGAFAC PRISCA","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("106","PERIELA EMEKWO ECHONDONG","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("107","EBEN QUEENERINE","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("108","ATAGABO SHANTA ANKOBO","","","","","","","HND NURSING","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("109","","","","","","","","","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("110","NTANG ADISSE PAUL","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("111","TCHEUTCHOUA FOTSO HORNELA","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("112","BESONG YVONNE TEKU","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("113","YANGO NGUEUDOP MARIETTER","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("114","BUKWI LAISSIN CYNTHIA","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("115","MESANG EWANG JEMIMA","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("116","NDEMATELE JULIUS","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("117","CHE NATY NGWA SALAH","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("118","NCHITU BORIS ASAH","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("119","CYRIL OBEN NAMME","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("120","ENOH LOVETH KAH","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("121","FESE EVELYN MBONGO","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("122","ANN SANDRA ATUM FON","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("123","FDEFANG BECHEM ONELLA","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("124","MAKOUNJOU KENGNE GAELLE LAURE","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("125","EBONG DIEUDONNE NDELLE","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("126","CABINDA PRAODA NOGHA","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("127","JUDE NKENG FOMBELE","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("128","SOH CYNTHIA POKWEFA","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("129","KUNCHAMBI THERESIA WAKUNA","","","","","","","HND MEDICAL LABORATORY SCIENCES","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("130","","","","","","","","","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("131","DIANE EPOSI NGUTE","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("132","JOAN ARIT ETONDE NJOH","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("133","NIBA LESLEY NGWEMETA","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("134","WANDJI TOUNOUTCHOU STEPHANE","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("135","MENDE PAMELA ATATI ELEDI","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("136","NDIBONG MILLENA NKWENWI","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("137","OJONG CYNTHIA OJONG","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("138","IRENE TCHUMBOU NGAMI","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("139","IDA MOJOKO MANGA ROOHM","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("140","NSENG CYNTHIA KEDZE","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("141","MKONG NGOUNJANG FRANCISCA YOH","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("142","MEDJEYE GABRIEL","","","","","","","PHARMACY ASSISTANT","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("143","","","","","","","","","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("144","TABE MELVIS ENYIBEH","","","","","","","HND PHARMACY TECHNOLOGY","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("145","NGANDEU FLORENCE BATENYOH NJIEMENI","","","","","","","HND PHARMACY TECHNOLOGY","","","","","0","2017","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO gen_info VALUES("146","Mbah Isaac Ishang","","","","","","","Bsc Nursing Top Up","","","","","0","2018","","","man","","","","","","","","","","","","","","","","","","","","","");





CREATE TABLE `gpa` (
  `roll` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(400) NOT NULL,
  `matricule` varchar(400) NOT NULL,
  `departmet` varchar(400) NOT NULL,
  `levels` varchar(400) NOT NULL,
  `sex` varchar(400) NOT NULL,
  `db1` varchar(400) NOT NULL,
  `c101` varchar(400) NOT NULL,
  `c102` varchar(400) NOT NULL,
  `c103` int(255) NOT NULL DEFAULT 0,
  `c104` int(11) NOT NULL,
  `c105` varchar(400) NOT NULL,
  `c106` varchar(400) NOT NULL,
  `c107` varchar(400) NOT NULL,
  `c108` varchar(400) NOT NULL,
  `c109` varchar(400) NOT NULL,
  `c110` varchar(400) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=MyISAM AUTO_INCREMENT=3272 DEFAULT CHARSET=latin1;

INSERT INTO gpa VALUES("3010","CON 102","SFI 1295","ENROLLED NURSING","200","1","2012/2013","27","41","3","0","","","","","","");
INSERT INTO gpa VALUES("3011","ENG 101","SFI 1295","ENROLLED NURSING","200","1","2012/2013","24","31","3","1","","","","","","");
INSERT INTO gpa VALUES("3012","NUR 101","SFI 1295","ENROLLED NURSING","200","1","2012/2013","17","39","3","2","","","","","","");
INSERT INTO gpa VALUES("3013","NUR 103","SFI 1295","ENROLLED NURSING","200","1","2012/2013","16","28","2","2","","","","","","");
INSERT INTO gpa VALUES("3014","NUR 105","SFI 1295","ENROLLED NURSING","200","1","2012/2013","12","33","2","2","","","","","","");
INSERT INTO gpa VALUES("3015","NUR 107","SFI 1295","ENROLLED NURSING","200","1","2012/2013","10","22","1","3","","","","","","");
INSERT INTO gpa VALUES("3016","NUR 109","SFI 1295","ENROLLED NURSING","200","1","2012/2013","17","31","2","2","","","","","","");
INSERT INTO gpa VALUES("3017","NUR 111","SFI 1295","ENROLLED NURSING","200","1","2012/2013","16","35","2","2","","","","","","");
INSERT INTO gpa VALUES("3018","NUR 113","SFI 1295","ENROLLED NURSING","200","1","2012/2013","10","26","0","2","","","","","","");
INSERT INTO gpa VALUES("3019","NUR 115","SFI 1295","ENROLLED NURSING","200","1","2012/2013","20","26","2","4","","","","","","");
INSERT INTO gpa VALUES("3020","NUR 117","SFI 1295","ENROLLED NURSING","200","1","2012/2013","14","31","2","2","","","","","","");
INSERT INTO gpa VALUES("3021","NUR 119","SFI 1295","ENROLLED NURSING","200","1","2012/2013","22","41","3","10","","","","","","");
INSERT INTO gpa VALUES("3022","ENG 102","SFI 1295","ENROLLED NURSING","200","2","2012/2013","19","27","2","1","","","","","","");
INSERT INTO gpa VALUES("3023","FRE 101","SFI 1295","ENROLLED NURSING","200","2","2012/2013","26","40","2","1","","","","","","");
INSERT INTO gpa VALUES("3024","NUR 102","SFI 1295","ENROLLED NURSING","200","2","2012/2013","15","24","2","4","","","","","","");
INSERT INTO gpa VALUES("3025","NUR 104","SFI 1295","ENROLLED NURSING","200","2","2012/2013","21","22","2","3","","","","","","");
INSERT INTO gpa VALUES("3026","NUR 106","SFI 1295","ENROLLED NURSING","200","2","2012/2013","20","30","2","4","","","","","","");
INSERT INTO gpa VALUES("3027","NUR 108","SFI 1295","ENROLLED NURSING","200","2","2012/2013","19","22","2","3","","","","","","");
INSERT INTO gpa VALUES("3028","NUR 110","SFI 1295","ENROLLED NURSING","200","2","2012/2013","28","24","2","2","","","","","","");
INSERT INTO gpa VALUES("3029","NUR 112","SFI 1295","ENROLLED NURSING","200","2","2012/2013","21","30","2","2","","","","","","");
INSERT INTO gpa VALUES("3030","NUR 114","SFI 1295","ENROLLED NURSING","200","2","2012/2013","23","34","2","10","","","","","","");
INSERT INTO gpa VALUES("3031","NUR 201","SFI 1295","ENROLLED NURSING","200","1","2013/2014","26","33","2","2","","","","","","");
INSERT INTO gpa VALUES("3032","NUR 203","SFI 1295","ENROLLED NURSING","200","1","2013/2014","27","25","2","2","","","","","","");
INSERT INTO gpa VALUES("3033","NUR 205","SFI 1295","ENROLLED NURSING","200","1","2013/2014","17","34","2","4","","","","","","");
INSERT INTO gpa VALUES("3034","NUR 207","SFI 1295","ENROLLED NURSING","200","1","2013/2014","24","30","2","3","","","","","","");
INSERT INTO gpa VALUES("3035","NUR 209","SFI 1295","ENROLLED NURSING","200","1","2013/2014","20","35","3","2","","","","","","");
INSERT INTO gpa VALUES("3036","NUR 211","SFI 1295","ENROLLED NURSING","200","1","2013/2014","24","29","2","3","","","","","","");
INSERT INTO gpa VALUES("3037","NUR 213","SFI 1295","ENROLLED NURSING","200","1","2013/2014","25","26","2","2","","","","","","");
INSERT INTO gpa VALUES("3038","NUR 215","SFI 1295","ENROLLED NURSING","200","1","2013/2014","22","29","2","2","","","","","","");
INSERT INTO gpa VALUES("3039","NUR 217","SFI 1295","ENROLLED NURSING","200","1","2013/2014","21","39","2","16","","","","","","");
INSERT INTO gpa VALUES("3040","CON 202","SFI 1295","ENROLLED NURSING","200","2","2013/2014","28","43","4","0","","","","","","");
INSERT INTO gpa VALUES("3041","NUR 202","SFI 1295","ENROLLED NURSING","200","2","2013/2014","20","28","2","2","","","","","","");
INSERT INTO gpa VALUES("3042","NUR 204","SFI 1295","ENROLLED NURSING","200","2","2013/2014","12","20","0","2","","","","","","");
INSERT INTO gpa VALUES("3043","NUR 206","SFI 1295","ENROLLED NURSING","200","2","2013/2014","28","40","3","2","","","","","","");
INSERT INTO gpa VALUES("3044","NUR 208","SFI 1295","ENROLLED NURSING","200","2","2013/2014","24","43","3","2","","","","","","");
INSERT INTO gpa VALUES("3045","NUR 210","SFI 1295","ENROLLED NURSING","200","2","2013/2014","15","34","2","2","","","","","","");
INSERT INTO gpa VALUES("3046","NUR 212","SFI 1295","ENROLLED NURSING","200","2","2013/2014","12","26","0","2","","","","","","");
INSERT INTO gpa VALUES("3047","NUR 214","SFI 1295","ENROLLED NURSING","200","2","2013/2014","16","40","3","2","","","","","","");
INSERT INTO gpa VALUES("3048","NUR 216","SFI 1295","ENROLLED NURSING","200","2","2013/2014","22","37","3","16","","","","","","");
INSERT INTO gpa VALUES("3049","ENG 101","SFI 141532","ENROLLED NURSING","200","1","2014/2015","19","37","3","1","","","","","","");
INSERT INTO gpa VALUES("3050","NUR 101","SFI 141532","ENROLLED NURSING","200","1","2014/2015","10","40","2","2","","","","","","");
INSERT INTO gpa VALUES("3051","NUR 103","SFI 141532","ENROLLED NURSING","200","1","2014/2015","30","34","3","2","","","","","","");
INSERT INTO gpa VALUES("3052","NUR 105","SFI 141532","ENROLLED NURSING","200","1","2014/2015","16","34","2","2","","","","","","");
INSERT INTO gpa VALUES("3053","NUR 107","SFI 141532","ENROLLED NURSING","200","1","2014/2015","27","35","3","3","","","","","","");
INSERT INTO gpa VALUES("3054","NUR 109","SFI 141532","ENROLLED NURSING","200","1","2014/2015","16","35","2","2","","","","","","");
INSERT INTO gpa VALUES("3055","NUR 111","SFI 141532","ENROLLED NURSING","200","1","2014/2015","15","37","2","2","","","","","","");
INSERT INTO gpa VALUES("3056","NUR 113","SFI 141532","ENROLLED NURSING","200","1","2014/2015","21","32","2","2","","","","","","");
INSERT INTO gpa VALUES("3057","NUR 115","SFI 141532","ENROLLED NURSING","200","1","2014/2015","16","34","2","4","","","","","","");
INSERT INTO gpa VALUES("3058","NUR 117","SFI 141532","ENROLLED NURSING","200","1","2014/2015","16","38","2","2","","","","","","");
INSERT INTO gpa VALUES("3059","NUR 119","SFI 141532","ENROLLED NURSING","200","1","2014/2015","25","38","3","10","","","","","","");
INSERT INTO gpa VALUES("3060","SPT 100","SFI 141532","ENROLLED NURSING","200","1","2014/2015","20","53","4","0","","","","","","");
INSERT INTO gpa VALUES("3148","NUR 201","SFI 141532","ENROLLED NURSING","200","1","2014/2015","32","26","3","2","","","","","","");
INSERT INTO gpa VALUES("3061","CON 102","SFI 141532","ENROLLED NURSING","200","2","2014/2015","36","34","4","0","","","","","","");
INSERT INTO gpa VALUES("3062","ENG 102","SFI 141532","ENROLLED NURSING","200","2","2014/2015","28","29","2","1","","","","","","");
INSERT INTO gpa VALUES("3063","FRE 101","SFI 141532","ENROLLED NURSING","200","2","2014/2015","15","24","2","1","","","","","","");
INSERT INTO gpa VALUES("3064","NUR 102","SFI 141532","ENROLLED NURSING","200","2","2014/2015","30","32","2","4","","","","","","");
INSERT INTO gpa VALUES("3065","NUR 104","SFI 141532","ENROLLED NURSING","200","2","2014/2015","29","29","2","3","","","","","","");
INSERT INTO gpa VALUES("3066","NUR 106","SFI 141532","ENROLLED NURSING","200","2","2014/2015","20","32","2","4","","","","","","");
INSERT INTO gpa VALUES("3067","NUR 108","SFI 141532","ENROLLED NURSING","200","2","2014/2015","26","23","2","3","","","","","","");
INSERT INTO gpa VALUES("3068","NUR 110","SFI 141532","ENROLLED NURSING","200","2","2014/2015","23","21","2","2","","","","","","");
INSERT INTO gpa VALUES("3069","NUR 112","SFI 141532","ENROLLED NURSING","200","2","2014/2015","24","36","2","2","","","","","","");
INSERT INTO gpa VALUES("3070","NUR 114","SFI 141532","ENROLLED NURSING","200","2","2014/2015","28","36","2","10","","","","","","");
INSERT INTO gpa VALUES("3071","ENG 101","SFI 1163","ENROLLED NURSING","200","1","2011/2012","27","35","2","1","","","","","","");
INSERT INTO gpa VALUES("3072","NUR 101","SFI 1163","ENROLLED NURSING","200","1","2011/2012","27","38","3","2","","","","","","");
INSERT INTO gpa VALUES("3073","NUR 103","SFI 1163","ENROLLED NURSING","200","1","2011/2012","28","39","3","2","","","","","","");
INSERT INTO gpa VALUES("3074","NUR 105","SFI 1163","ENROLLED NURSING","200","1","2011/2012","28","43","4","2","","","","","","");
INSERT INTO gpa VALUES("3075","NUR 107","SFI 1163","ENROLLED NURSING","200","1","2011/2012","28","38","3","3","","","","","","");
INSERT INTO gpa VALUES("3076","NUR 109","SFI 1163","ENROLLED NURSING","200","1","2011/2012","15","45","3","2","","","","","","");
INSERT INTO gpa VALUES("3077","NUR 111","SFI 1163","ENROLLED NURSING","200","1","2011/2012","28","43","4","2","","","","","","");
INSERT INTO gpa VALUES("3078","NUR 113","SFI 1163","ENROLLED NURSING","200","1","2011/2012","15","37","2","2","","","","","","");
INSERT INTO gpa VALUES("3079","NUR 115","SFI 1163","ENROLLED NURSING","200","1","2011/2012","23","30","2","4","","","","","","");
INSERT INTO gpa VALUES("3080","NUR 117","SFI 1163","ENROLLED NURSING","200","1","2011/2012","21","43","3","2","","","","","","");
INSERT INTO gpa VALUES("3081","NUR 119","SFI 1163","ENROLLED NURSING","200","1","2011/2012","23","34","3","10","","","","","","");
INSERT INTO gpa VALUES("3082","CON 102","SFI 1163","ENROLLED NURSING","200","2","2011/2012","30","45","4","0","","","","","","");
INSERT INTO gpa VALUES("3083","FRE 101","SFI 1163","ENROLLED NURSING","200","2","2011/2012","23","35","2","1","","","","","","");
INSERT INTO gpa VALUES("3084","NUR 102","SFI 1163","ENROLLED NURSING","200","2","2011/2012","34","39","2","4","","","","","","");
INSERT INTO gpa VALUES("3085","NUR 104","SFI 1163","ENROLLED NURSING","200","2","2011/2012","34","47","2","3","","","","","","");
INSERT INTO gpa VALUES("3086","NUR 106","SFI 1163","ENROLLED NURSING","200","2","2011/2012","26","36","2","4","","","","","","");
INSERT INTO gpa VALUES("3087","NUR 108","SFI 1163","ENROLLED NURSING","200","2","2011/2012","32","48","2","3","","","","","","");
INSERT INTO gpa VALUES("3088","NUR 110","SFI 1163","ENROLLED NURSING","200","2","2011/2012","26","46","2","2","","","","","","");
INSERT INTO gpa VALUES("3089","NUR 112","SFI 1163","ENROLLED NURSING","200","2","2011/2012","28","44","2","2","","","","","","");
INSERT INTO gpa VALUES("3090","NUR 114","SFI 1163","ENROLLED NURSING","200","2","2011/2012","30","42","2","10","","","","","","");
INSERT INTO gpa VALUES("3091","SPT100","SFI 1163","ENROLLED NURSING","200","2","2011/2012","38","50","2","0","","","","","","");
INSERT INTO gpa VALUES("3092","NUR 201","SFI 1163","ENROLLED NURSING","200","1","2012/2013","29","39","3","2","","","","","","");
INSERT INTO gpa VALUES("3093","NUR 203","SFI 1163","ENROLLED NURSING","200","1","2012/2013","12","39","2","2","","","","","","");
INSERT INTO gpa VALUES("3094","NUR 205","SFI 1163","ENROLLED NURSING","200","1","2012/2013","23","44","3","4","","","","","","");
INSERT INTO gpa VALUES("3095","NUR 207","SFI 1163","ENROLLED NURSING","200","1","2012/2013","29","26","3","3","","","","","","");
INSERT INTO gpa VALUES("3096","NUR 209","SFI 1163","ENROLLED NURSING","200","1","2012/2013","27","46","4","2","","","","","","");
INSERT INTO gpa VALUES("3097","NUR 211","SFI 1163","ENROLLED NURSING","200","1","2012/2013","29","35","3","3","","","","","","");
INSERT INTO gpa VALUES("3098","NUR 213","SFI 1163","ENROLLED NURSING","200","1","2012/2013","22","30","2","2","","","","","","");
INSERT INTO gpa VALUES("3099","NUR 215","SFI 1163","ENROLLED NURSING","200","1","2012/2013","25","37","3","2","","","","","","");
INSERT INTO gpa VALUES("3100","NUR 217","SFI 1163","ENROLLED NURSING","200","1","2012/2013","25","44","3","16","","","","","","");
INSERT INTO gpa VALUES("3101","NUR 202","SFI 1163","ENROLLED NURSING","200","2","2012/2013","25","36","3","2","","","","","","");
INSERT INTO gpa VALUES("3102","NUR 204","SFI 1163","ENROLLED NURSING","200","2","2012/2013","22","34","3","2","","","","","","");
INSERT INTO gpa VALUES("3103","NUR 206","SFI 1163","ENROLLED NURSING","200","2","2012/2013","31","47","4","2","","","","","","");
INSERT INTO gpa VALUES("3104","NUR 208","SFI 1163","ENROLLED NURSING","200","2","2012/2013","27","38","3","2","","","","","","");
INSERT INTO gpa VALUES("3105","NUR 210","SFI 1163","ENROLLED NURSING","200","2","2012/2013","30","43","4","2","","","","","","");
INSERT INTO gpa VALUES("3106","NUR 212","SFI 1163","ENROLLED NURSING","200","2","2012/2013","26","47","4","2","","","","","","");
INSERT INTO gpa VALUES("3107","NUR 214","SFI 1163","ENROLLED NURSING","200","2","2012/2013","32","35","3","2","","","","","","");
INSERT INTO gpa VALUES("3108","NUR 216","SFI 1163","ENROLLED NURSING","200","2","2012/2013","33","44","4","16","","","","","","");
INSERT INTO gpa VALUES("3109","ENG 101","SFI 141562","ENROLLED NURSING","200","1","2014/2015","20","37","3","1","","","","","","");
INSERT INTO gpa VALUES("3110","NUR 101","SFI 141562","ENROLLED NURSING","200","1","2014/2015","19","42","3","2","","","","","","");
INSERT INTO gpa VALUES("3111","NUR 103","SFI 141562","ENROLLED NURSING","200","1","2014/2015","28","34","3","2","","","","","","");
INSERT INTO gpa VALUES("3112","NUR 105","SFI 141562","ENROLLED NURSING","200","1","2014/2015","21","36","3","2","","","","","","");
INSERT INTO gpa VALUES("3113","NUR 107","SFI 141562","ENROLLED NURSING","200","1","2014/2015","21","35","3","3","","","","","","");
INSERT INTO gpa VALUES("3114","NUR 109","SFI 141562","ENROLLED NURSING","200","1","2014/2015","31","37","3","2","","","","","","");
INSERT INTO gpa VALUES("3115","NUR 111","SFI 141562","ENROLLED NURSING","200","1","2014/2015","24","30","2","2","","","","","","");
INSERT INTO gpa VALUES("3116","NUR 113","SFI 141562","ENROLLED NURSING","200","1","2014/2015","25","28","2","2","","","","","","");
INSERT INTO gpa VALUES("3117","NUR 115","SFI 141562","ENROLLED NURSING","200","1","2014/2015","20","36","3","4","","","","","","");
INSERT INTO gpa VALUES("3118","NUR 117","SFI 141562","ENROLLED NURSING","200","1","2014/2015","19","36","3","2","","","","","","");
INSERT INTO gpa VALUES("3119","NUR 119","SFI 141562","ENROLLED NURSING","200","1","2014/2015","30","45","4","10","","","","","","");
INSERT INTO gpa VALUES("3120","SPT 100","SFI 141562","ENROLLED NURSING","200","1","2014/2015","28","22","2","0","","","","","","");
INSERT INTO gpa VALUES("3121","CON 102","SFI 141562","ENROLLED NURSING","200","2","2014/2015","35","41","4","0","","","","","","");
INSERT INTO gpa VALUES("3122","ENG 102","SFI 141562","ENROLLED NURSING","200","2","2014/2015","30","31","3","1","","","","","","");
INSERT INTO gpa VALUES("3123","FRE 101","SFI 141562","ENROLLED NURSING","200","2","2014/2015","20","37","3","1","","","","","","");
INSERT INTO gpa VALUES("3124","NUR 102","SFI 141562","ENROLLED NURSING","200","2","2014/2015","29","32","3","4","","","","","","");
INSERT INTO gpa VALUES("3125","NUR 104","SFI 141562","ENROLLED NURSING","200","2","2014/2015","22","39","3","3","","","","","","");
INSERT INTO gpa VALUES("3126","NUR 106","SFI 141562","ENROLLED NURSING","200","2","2014/2015","30","33","3","4","","","","","","");
INSERT INTO gpa VALUES("3127","NUR 108","SFI 141562","ENROLLED NURSING","200","2","2014/2015","25","37","3","3","","","","","","");
INSERT INTO gpa VALUES("3128","NUR 110","SFI 141562","ENROLLED NURSING","200","2","2014/2015","23","39","3","2","","","","","","");
INSERT INTO gpa VALUES("3129","NUR 112","SFI 141562","ENROLLED NURSING","200","2","2014/2015","23","37","3","2","","","","","","");
INSERT INTO gpa VALUES("3130","NUR 114","SFI 141562","ENROLLED NURSING","200","2","2014/2015","28","32","3","10","","","","","","");
INSERT INTO gpa VALUES("3131","NUR 201","SFI 141562","ENROLLED NURSING","200","1","2015/2016","18","44","3","2","","","","","","");
INSERT INTO gpa VALUES("3132","NUR 203","SFI 141562","ENROLLED NURSING","200","1","2015/2016","19","42","3","2","","","","","","");
INSERT INTO gpa VALUES("3133","NUR 205","SFI 141562","ENROLLED NURSING","200","1","2015/2016","30","40","4","4","","","","","","");
INSERT INTO gpa VALUES("3134","NUR 207","SFI 141562","ENROLLED NURSING","200","1","2015/2016","22","30","2","3","","","","","","");
INSERT INTO gpa VALUES("3135","NUR 209","SFI 141562","ENROLLED NURSING","200","1","2015/2016","23","32","3","2","","","","","","");
INSERT INTO gpa VALUES("3136","NUR 211","SFI 141562","ENROLLED NURSING","200","1","2015/2016","31","30","3","3","","","","","","");
INSERT INTO gpa VALUES("3137","NUR 213","SFI 141562","ENROLLED NURSING","200","1","2015/2016","30","34","3","2","","","","","","");
INSERT INTO gpa VALUES("3138","NUR 215","SFI 141562","ENROLLED NURSING","200","1","2015/2016","31","36","3","2","","","","","","");
INSERT INTO gpa VALUES("3139","NUR 217","SFI 141562","ENROLLED NURSING","200","1","2015/2016","28","42","4","16","","","","","","");
INSERT INTO gpa VALUES("3140","NUR 202","SFI 141562","ENROLLED NURSING","200","2","2015/2016","21","31","2","2","","","","","","");
INSERT INTO gpa VALUES("3141","NUR 204","SFI 141562","ENROLLED NURSING","200","2","2015/2016","27","33","3","2","","","","","","");
INSERT INTO gpa VALUES("3142","NUR 206","SFI 141562","ENROLLED NURSING","200","2","2015/2016","29","44","4","2","","","","","","");
INSERT INTO gpa VALUES("3143","NUR 208","SFI 141562","ENROLLED NURSING","200","2","2015/2016","32","41","4","2","","","","","","");
INSERT INTO gpa VALUES("3144","NUR 210","SFI 141562","ENROLLED NURSING","200","2","2015/2016","32","31","3","2","","","","","","");
INSERT INTO gpa VALUES("3145","NUR 212","SFI 141562","ENROLLED NURSING","200","2","2015/2016","20","26","2","2","","","","","","");
INSERT INTO gpa VALUES("3146","NUR 214","SFI 141562","ENROLLED NURSING","200","2","2015/2016","26","32","3","2","","","","","","");
INSERT INTO gpa VALUES("3147","NUR 216","SFI 141562","ENROLLED NURSING","200","2","2015/2016","30","45","4","16","","","","","","");
INSERT INTO gpa VALUES("3149","NUR 203","SFI 141532","ENROLLED NURSING","200","1","2015/2016","28","34","3","2","","","","","","");
INSERT INTO gpa VALUES("3150","NUR 205","SFI 141532","ENROLLED NURSING","200","1","2015/2016","32","21","2","4","","","","","","");
INSERT INTO gpa VALUES("3151","NUR 207","SFI 141532","ENROLLED NURSING","200","1","2015/2016","24","34","3","3","","","","","","");
INSERT INTO gpa VALUES("3152","NUR 209","SFI 141532","ENROLLED NURSING","200","1","2015/2016","24","29","2","2","","","","","","");
INSERT INTO gpa VALUES("3153","NUR 211","SFI 141532","ENROLLED NURSING","200","1","2015/2016","24","32","3","3","","","","","","");
INSERT INTO gpa VALUES("3154","NUR 213","SFI 141532","ENROLLED NURSING","200","1","2015/2016","25","34","3","2","","","","","","");
INSERT INTO gpa VALUES("3155","NUR 215","SFI 141532","ENROLLED NURSING","200","1","2015/2016","31","34","3","2","","","","","","");
INSERT INTO gpa VALUES("3156","NUR 217","SFI 141532","ENROLLED NURSING","200","1","2015/2016","38","36","4","16","","","","","","");
INSERT INTO gpa VALUES("3157","NUR 202","SFI 141532","ENROLLED NURSING","200","2","2015/2016","23","36","3","2","","","","","","");
INSERT INTO gpa VALUES("3158","NUR 204","SFI 141532","ENROLLED NURSING","200","2","2015/2016","26","20","2","2","","","","","","");
INSERT INTO gpa VALUES("3159","NUR 206","SFI 141532","ENROLLED NURSING","200","2","2015/2016","26","31","3","2","","","","","","");
INSERT INTO gpa VALUES("3160","NUR 208","SFI 141532","ENROLLED NURSING","200","2","2015/2016","21","35","3","2","","","","","","");
INSERT INTO gpa VALUES("3161","NUR 210","SFI 141532","ENROLLED NURSING","200","2","2015/2016","23","33","3","2","","","","","","");
INSERT INTO gpa VALUES("3162","NUR 212","SFI 141532","ENROLLED NURSING","200","2","2015/2016","25","32","3","2","","","","","","");
INSERT INTO gpa VALUES("3163","NUR 214","SFI 141532","ENROLLED NURSING","200","2","2015/2016","28","13","0","2","","","","","","");
INSERT INTO gpa VALUES("3164","NUR 216","SFI 141532","ENROLLED NURSING","200","2","2015/2016","35","40","4","16","","","","","","");
INSERT INTO gpa VALUES("3165","ENG 101","SFI 141617","ENROLLED NURSING","200","1","2014/2015","11","38","2","1","","","","","","");
INSERT INTO gpa VALUES("3166","NUR 101","SFI 141617","ENROLLED NURSING","200","1","2014/2015","0","28","0","2","","","","","","");
INSERT INTO gpa VALUES("3167","NUR 103","SFI 141617","ENROLLED NURSING","200","1","2014/2015","21","29","2","2","","","","","","");
INSERT INTO gpa VALUES("3168","NUR 105","SFI 141617","ENROLLED NURSING","200","1","2014/2015","15","30","2","2","","","","","","");
INSERT INTO gpa VALUES("3169","NUR 107","SFI 141617","ENROLLED NURSING","200","1","2014/2015","13","30","1","3","","","","","","");
INSERT INTO gpa VALUES("3170","NUR 109","SFI 141617","ENROLLED NURSING","200","1","2014/2015","15","35","2","2","","","","","","");
INSERT INTO gpa VALUES("3171","NUR 111","SFI 141617","ENROLLED NURSING","200","1","2014/2015","15","30","2","2","","","","","","");
INSERT INTO gpa VALUES("3172","NUR 113","SFI 141617","ENROLLED NURSING","200","1","2014/2015","11","35","2","2","","","","","","");
INSERT INTO gpa VALUES("3173","NUR 115","SFI 141617","ENROLLED NURSING","200","1","2014/2015","19","29","2","4","","","","","","");
INSERT INTO gpa VALUES("3174","NUR 117","SFI 141617","ENROLLED NURSING","200","1","2014/2015","17","22","0","2","","","","","","");
INSERT INTO gpa VALUES("3175","NUR 119","SFI 141617","ENROLLED NURSING","200","1","2014/2015","23","34","3","10","","","","","","");
INSERT INTO gpa VALUES("3176","CON 102","SFI 141617","ENROLLED NURSING","200","2","2014/2015","36","37","4","0","","","","","","");
INSERT INTO gpa VALUES("3177","ENG 102","SFI 141617","ENROLLED NURSING","200","2","2014/2015","22","31","2","1","","","","","","");
INSERT INTO gpa VALUES("3178","FRE 101","SFI 141617","ENROLLED NURSING","200","2","2014/2015","11","19","0","1","","","","","","");
INSERT INTO gpa VALUES("3179","NUR 102","SFI 141617","ENROLLED NURSING","200","2","2014/2015","22","30","2","4","","","","","","");
INSERT INTO gpa VALUES("3180","NUR 104","SFI 141617","ENROLLED NURSING","200","2","2014/2015","19","29","2","3","","","","","","");
INSERT INTO gpa VALUES("3181","NUR 106","SFI 141617","ENROLLED NURSING","200","2","2014/2015","21","31","2","4","","","","","","");
INSERT INTO gpa VALUES("3182","NUR 108","SFI 141617","ENROLLED NURSING","200","2","2014/2015","28","16","0","3","","","","","","");
INSERT INTO gpa VALUES("3183","NUR 110","SFI 141617","ENROLLED NURSING","200","2","2014/2015","17","34","2","2","","","","","","");
INSERT INTO gpa VALUES("3184","NUR 112","SFI 141617","ENROLLED NURSING","200","2","2014/2015","17","31","2","2","","","","","","");
INSERT INTO gpa VALUES("3185","NUR 114","SFI 141617","ENROLLED NURSING","200","2","2014/2015","25","24","2","10","","","","","","");
INSERT INTO gpa VALUES("3186","NUR 201","SFI 141617","ENROLLED NURSING","200","1","2015/2016","15","35","2","2","","","","","","");
INSERT INTO gpa VALUES("3187","NUR 203","SFI 141617","ENROLLED NURSING","200","1","2015/2016","19","31","2","2","","","","","","");
INSERT INTO gpa VALUES("3188","NUR 205","SFI 141617","ENROLLED NURSING","200","1","2015/2016","15","36","2","4","","","","","","");
INSERT INTO gpa VALUES("3189","NUR 207","SFI 141617","ENROLLED NURSING","200","1","2015/2016","20","22","2","3","","","","","","");
INSERT INTO gpa VALUES("3190","NUR 209","SFI 141617","ENROLLED NURSING","200","1","2015/2016","17","36","2","2","","","","","","");
INSERT INTO gpa VALUES("3191","NUR 211","SFI 141617","ENROLLED NURSING","200","1","2015/2016","13","30","1","3","","","","","","");
INSERT INTO gpa VALUES("3192","NUR 213","SFI 141617","ENROLLED NURSING","200","1","2015/2016","21","31","2","2","","","","","","");
INSERT INTO gpa VALUES("3193","NUR 215","SFI 141617","ENROLLED NURSING","200","1","2015/2016","22","21","2","2","","","","","","");
INSERT INTO gpa VALUES("3194","NUR 217","SFI 141617","ENROLLED NURSING","200","1","2015/2016","16","41","3","16","","","","","","");
INSERT INTO gpa VALUES("3195","NUR 202","SFI 141617","ENROLLED NURSING","200","2","2015/2016","14","25","0","2","","","","","","");
INSERT INTO gpa VALUES("3196","NUR 204","SFI 141617","ENROLLED NURSING","200","2","2015/2016","12","23","0","2","","","","","","");
INSERT INTO gpa VALUES("3197","NUR 206","SFI 141617","ENROLLED NURSING","200","2","2015/2016","28","42","4","2","","","","","","");
INSERT INTO gpa VALUES("3198","NUR 208","SFI 141617","ENROLLED NURSING","200","2","2015/2016","15","35","2","2","","","","","","");
INSERT INTO gpa VALUES("3199","NUR 210","SFI 141617","ENROLLED NURSING","200","2","2015/2016","23","28","2","2","","","","","","");
INSERT INTO gpa VALUES("3200","NUR 212","SFI 141617","ENROLLED NURSING","200","2","2015/2016","8","24","0","2","","","","","","");
INSERT INTO gpa VALUES("3201","NUR 214","SFI 141617","ENROLLED NURSING","200","2","2015/2016","14","25","0","2","","","","","","");
INSERT INTO gpa VALUES("3202","NUR 216","SFI 141617","ENROLLED NURSING","200","2","2015/2016","18","37","3","16","","","","","","");
INSERT INTO gpa VALUES("3203","ENG 101","SFI 151570","ENROLLED NURSING","200","1","2015/2016","31","37","3","1","","","","","","");
INSERT INTO gpa VALUES("3204","NUR 101","SFI 151570","ENROLLED NURSING","200","1","2015/2016","40","40","4","2","","","","","","");
INSERT INTO gpa VALUES("3205","NUR 103","SFI 151570","ENROLLED NURSING","200","1","2015/2016","37","39","4","2","","","","","","");
INSERT INTO gpa VALUES("3206","NUR 105","SFI 151570","ENROLLED NURSING","200","1","2015/2016","30","36","3","2","","","","","","");
INSERT INTO gpa VALUES("3207","NUR 107","SFI 151570","ENROLLED NURSING","200","1","2015/2016","27","37","3","3","","","","","","");
INSERT INTO gpa VALUES("3208","NUR 109","SFI 151570","ENROLLED NURSING","200","1","2015/2016","30","37","3","2","","","","","","");
INSERT INTO gpa VALUES("3209","NUR 111","SFI 151570","ENROLLED NURSING","200","1","2015/2016","28","40","3","2","","","","","","");
INSERT INTO gpa VALUES("3210","NUR 113","SFI 151570","ENROLLED NURSING","200","1","2015/2016","30","44","4","2","","","","","","");
INSERT INTO gpa VALUES("3211","NUR 115","SFI 151570","ENROLLED NURSING","200","1","2015/2016","34","43","4","4","","","","","","");
INSERT INTO gpa VALUES("3212","NUR 117","SFI 151570","ENROLLED NURSING","200","1","2015/2016","26","39","3","2","","","","","","");
INSERT INTO gpa VALUES("3213","NUR 119","SFI 151570","ENROLLED NURSING","200","1","2015/2016","28","48","4","10","","","","","","");
INSERT INTO gpa VALUES("3214","SPT 100","SFI 151570","ENROLLED NURSING","200","1","2015/2016","16","44","3","0","","","","","","");
INSERT INTO gpa VALUES("3215","CON 102","SFI 151570","ENROLLED NURSING","200","2","2015/2016","34","51","4","0","","","","","","");
INSERT INTO gpa VALUES("3216","ENG 102","SFI 151570","ENROLLED NURSING","200","2","2015/2016","27","48","4","1","","","","","","");
INSERT INTO gpa VALUES("3217","FRE 101","SFI 151570","ENROLLED NURSING","200","2","2015/2016","34","48","4","1","","","","","","");
INSERT INTO gpa VALUES("3218","NUR 102","SFI 151570","ENROLLED NURSING","200","2","2015/2016","36","55","4","4","","","","","","");
INSERT INTO gpa VALUES("3219","NUR 104","SFI 151570","ENROLLED NURSING","200","2","2015/2016","28","43","4","3","","","","","","");
INSERT INTO gpa VALUES("3220","NUR 106","SFI 151570","ENROLLED NURSING","200","2","2015/2016","29","38","3","4","","","","","","");
INSERT INTO gpa VALUES("3221","NUR 108","SFI 151570","ENROLLED NURSING","200","2","2015/2016","31","44","4","3","","","","","","");
INSERT INTO gpa VALUES("3222","NUR 110","SFI 151570","ENROLLED NURSING","200","2","2015/2016","25","37","3","2","","","","","","");
INSERT INTO gpa VALUES("3223","NUR 112","SFI 151570","ENROLLED NURSING","200","2","2015/2016","19","37","3","2","","","","","","");
INSERT INTO gpa VALUES("3224","NUR 114","SFI 151570","ENROLLED NURSING","200","2","2015/2016","31","51","4","10","","","","","","");
INSERT INTO gpa VALUES("3225","ENG 101","SFPA 1568","PHARMACY ASSISTANT","200","1","2015/2016","38","41","4","1","","","","","","");
INSERT INTO gpa VALUES("3226","PHA 101","SFPA 1568","PHARMACY ASSISTANT","200","1","2015/2016","16","37","2","9","","","","","","");
INSERT INTO gpa VALUES("3227","PHA 103","SFPA 1568","PHARMACY ASSISTANT","200","1","2015/2016","14","28","1","5","","","","","","");
INSERT INTO gpa VALUES("3228","PHA 105","SFPA 1568","PHARMACY ASSISTANT","200","1","2015/2016","23","38","3","6","","","","","","");
INSERT INTO gpa VALUES("3229","PHA 107","SFPA 1568","PHARMACY ASSISTANT","200","1","2015/2016","22","36","3","4","","","","","","");
INSERT INTO gpa VALUES("3230","PHA 109","SFPA 1568","PHARMACY ASSISTANT","200","1","2015/2016","14","37","2","10","","","","","","");
INSERT INTO gpa VALUES("3231","PHA 111","SFPA 1568","PHARMACY ASSISTANT","200","1","2015/2016","20","32","2","3","","","","","","");
INSERT INTO gpa VALUES("3232","PHA 113","SFPA 1568","PHARMACY ASSISTANT","200","1","2015/2016","21","29","2","16","","","","","","");
INSERT INTO gpa VALUES("3233","CON 102","SFPA 1568","PHARMACY ASSISTANT","200","2","2015/2016","37","47","2","0","","","","","","");
INSERT INTO gpa VALUES("3234","FRE 101","SFPA 1568","PHARMACY ASSISTANT","200","2","2015/2016","26","34","2","1","","","","","","");
INSERT INTO gpa VALUES("3235","PHA 102","SFPA 1568","PHARMACY ASSISTANT","200","2","2015/2016","28","44","2","9","","","","","","");
INSERT INTO gpa VALUES("3236","PHA 104","SFPA 1568","PHARMACY ASSISTANT","200","2","2015/2016","22","30","2","5","","","","","","");
INSERT INTO gpa VALUES("3237","PHA 106","SFPA 1568","PHARMACY ASSISTANT","200","2","2015/2016","10","43","2","7","","","","","","");
INSERT INTO gpa VALUES("3238","PHA 108","SFPA 1568","PHARMACY ASSISTANT","200","2","2015/2016","29","26","2","6","","","","","","");
INSERT INTO gpa VALUES("3239","PHA 110","SFPA 1568","PHARMACY ASSISTANT","200","2","2015/2016","26","42","2","3","","","","","","");
INSERT INTO gpa VALUES("3240","PHA 112","SFPA 1568","PHARMACY ASSISTANT","200","2","2015/2016","18","22","2","7","","","","","","");
INSERT INTO gpa VALUES("3241","PHA 114","SFPA 1568","PHARMACY ASSISTANT","200","2","2015/2016","26","34","2","3","","","","","","");
INSERT INTO gpa VALUES("3242","ENG 101","SFI 151661","ENROLLED NURSING","200","1","2015/2016","32","40","3","1","","","","","","");
INSERT INTO gpa VALUES("3243","NUR 101","SFI 151661","ENROLLED NURSING","200","1","2015/2016","23","43","3","2","","","","","","");
INSERT INTO gpa VALUES("3244","NUR 103","SFI 151661","ENROLLED NURSING","200","1","2015/2016","14","39","2","2","","","","","","");
INSERT INTO gpa VALUES("3245","NUR 105","SFI 151661","ENROLLED NURSING","200","1","2015/2016","23","31","3","2","","","","","","");
INSERT INTO gpa VALUES("3246","NUR 107","SFI 151661","ENROLLED NURSING","200","1","2015/2016","31","35","3","3","","","","","","");
INSERT INTO gpa VALUES("3247","NUR 109","SFI 151661","ENROLLED NURSING","200","1","2015/2016","20","32","3","2","","","","","","");
INSERT INTO gpa VALUES("3248","NUR 111","SFI 151661","ENROLLED NURSING","200","1","2015/2016","12","45","3","2","","","","","","");
INSERT INTO gpa VALUES("3249","NUR 113","SFI 151661","ENROLLED NURSING","200","1","2015/2016","31","44","3","2","","","","","","");
INSERT INTO gpa VALUES("3250","NUR 115","SFI 151661","ENROLLED NURSING","200","1","2015/2016","21","37","3","4","","","","","","");
INSERT INTO gpa VALUES("3251","NUR 117","SFI 151661","ENROLLED NURSING","200","1","2015/2016","30","36","3","2","","","","","","");
INSERT INTO gpa VALUES("3252","NUR 119","SFI 151661","ENROLLED NURSING","200","1","2015/2016","25","48","3","10","","","","","","");
INSERT INTO gpa VALUES("3253","SPT 100","SFI 151661","ENROLLED NURSING","200","1","2015/2016","37","55","3","0","","","","","","");
INSERT INTO gpa VALUES("3254","CON 102","SFI 151661","ENROLLED NURSING","200","2","2015/2016","30","45","3","0","","","","","","");
INSERT INTO gpa VALUES("3255","ENG 102","SFI 151661","ENROLLED NURSING","200","2","2015/2016","29","41","3","1","","","","","","");
INSERT INTO gpa VALUES("3256","FRE 101","SFI 151661","ENROLLED NURSING","200","2","2015/2016","22","37","3","1","","","","","","");
INSERT INTO gpa VALUES("3257","NUR 102","SFI 151661","ENROLLED NURSING","200","2","2015/2016","22","35","3","4","","","","","","");
INSERT INTO gpa VALUES("3258","NUR 104","SFI 151661","ENROLLED NURSING","200","2","2015/2016","12","30","3","3","","","","","","");
INSERT INTO gpa VALUES("3259","NUR 106","SFI 151661","ENROLLED NURSING","200","2","2015/2016","29","39","3","4","","","","","","");
INSERT INTO gpa VALUES("3260","NUR 108","SFI 151661","ENROLLED NURSING","200","2","2015/2016","32","41","3","3","","","","","","");
INSERT INTO gpa VALUES("3261","NUR 110","SFI 151661","ENROLLED NURSING","200","2","2015/2016","26","37","3","2","","","","","","");
INSERT INTO gpa VALUES("3262","NUR 112","SFI 151661","ENROLLED NURSING","200","2","2015/2016","28","36","3","2","","","","","","");
INSERT INTO gpa VALUES("3263","NUR 114","SFI 151661","ENROLLED NURSING","200","2","2015/2016","29","45","3","10","","","","","","");
INSERT INTO gpa VALUES("3264","NUR 201","SFI 151661","ENROLLED NURSING","200","1","2016/2017","22","41","3","2","","","","","","");
INSERT INTO gpa VALUES("3265","NUR 203","SFI 151661","ENROLLED NURSING","200","1","2016/2017","32","31","3","2","","","","","","");
INSERT INTO gpa VALUES("3266","NUR 205","SFI 151661","ENROLLED NURSING","200","1","2016/2017","29","29","3","4","","","","","","");
INSERT INTO gpa VALUES("3267","NUR 207","SFI 151661","ENROLLED NURSING","200","1","2016/2017","14","48","3","3","","","","","","");
INSERT INTO gpa VALUES("3268","NUR 209","SFI 151661","ENROLLED NURSING","200","1","2016/2017","31","45","4","2","","","","","","");
INSERT INTO gpa VALUES("3269","NUR 211","SFI 151661","ENROLLED NURSING","200","1","2016/2017","24","43","3","3","","","","","","");
INSERT INTO gpa VALUES("3270","NUR 213","SFI 151661","ENROLLED NURSING","200","1","2016/2017","26","32","3","2","","","","","","");
INSERT INTO gpa VALUES("3271","NUR 215","SFI 151661","ENROLLED NURSING","200","1","2016/2017","17","41","3","2","","","","","","");





CREATE TABLE `income_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(90) NOT NULL,
  `cost` varchar(9) NOT NULL,
  `initials` varchar(12) NOT NULL,
  `current` varchar(12) NOT NULL,
  `ayear` varchar(12) NOT NULL,
  `levels` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO income_classes VALUES("5","","HND SLIPS","","","","2017/2018","");
INSERT INTO income_classes VALUES("6","","GRADUATION","","","","2017/2018","");
INSERT INTO income_classes VALUES("7","","ENGLISH PROFICIENCY","","","","2017/2018","");
INSERT INTO income_classes VALUES("8","","TRANSCRIPT","","","","2018/2019","");
INSERT INTO income_classes VALUES("9","","HND SLIP","","","","2018/2019","");
INSERT INTO income_classes VALUES("10","","SUPERVISION","","","","2018/2019","");
INSERT INTO income_classes VALUES("11","","BOOKS","","","","2018/2019","");
INSERT INTO income_classes VALUES("12","","RESIT","","","","2018/2019","");
INSERT INTO income_classes VALUES("13","","GRADUATION","","","","2018/2019","");
INSERT INTO income_classes VALUES("14","","INTERNSHIP","","","","2018/2019","");
INSERT INTO income_classes VALUES("15","","RENT OF ROBES","","","","2018/2019","");
INSERT INTO income_classes VALUES("16","","RENT OF HALLS","","","","2018/2019","");
INSERT INTO income_classes VALUES("17","","HND REGISTRATION","","","","2018/2019","");





CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `items` varchar(70) NOT NULL,
  `name` varchar(90) NOT NULL,
  `matric` varchar(19) NOT NULL,
  `ayear` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO items VALUES("1","","","","");
INSERT INTO items VALUES("2","","","","");
INSERT INTO items VALUES("3","","","","");
INSERT INTO items VALUES("4","","","","");
INSERT INTO items VALUES("5","","","","");
INSERT INTO items VALUES("6","","","","");





CREATE TABLE `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `levels` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO levels VALUES("1","200");
INSERT INTO levels VALUES("2","300");
INSERT INTO levels VALUES("3","400");





CREATE TABLE `lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(120) NOT NULL,
  `prog` varchar(90) NOT NULL,
  `matric` varchar(20) NOT NULL,
  `ayear` varchar(13) NOT NULL,
  `year` varchar(13) NOT NULL,
  `mats` varchar(22) NOT NULL,
  `admit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `main_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(90) NOT NULL,
  `initials` varchar(12) NOT NULL,
  `current` varchar(12) NOT NULL,
  `ayear` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO main_classes VALUES("4","","GENERAL","","","");





CREATE TABLE `main_sects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `code` varchar(30) NOT NULL,
  `last` varchar(11) DEFAULT NULL,
  `ayear` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO main_sects VALUES("3","B-TECH","UBa/HIMS","229","2018/2019");
INSERT INTO main_sects VALUES("4","MBA","UBa/HIMS/PG","","");
INSERT INTO main_sects VALUES("5","HND","HIMS","175","2018/2019");
INSERT INTO main_sects VALUES("10","PART TIME","HIMS/PT","","");





CREATE TABLE `marks_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(122) NOT NULL,
  `prog` varchar(100) NOT NULL,
  `tot` varchar(8) NOT NULL,
  `year` varchar(8) NOT NULL,
  `status` varchar(22) NOT NULL,
  `matric` varchar(21) NOT NULL,
  `printed` int(11) NOT NULL,
  `admitted` int(11) NOT NULL,
  `mat` varchar(30) NOT NULL,
  `writ` varchar(14) NOT NULL,
  `orals` varchar(14) NOT NULL,
  `yid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `mats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO mats VALUES("1","841");





CREATE TABLE `modes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO modes VALUES("1","CASH");
INSERT INTO modes VALUES("2","BANK");





CREATE TABLE `names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `date` varchar(20) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `dept` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;






CREATE TABLE `our_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `acc_num` varchar(30) NOT NULL,
  `amt` varchar(15) NOT NULL,
  `bal` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO our_accounts VALUES("5","NTARINKON","359","0","","0");
INSERT INTO our_accounts VALUES("6","MITANYEN","0000002","","","0");
INSERT INTO our_accounts VALUES("7","BAPCULL","5939","0","","0");
INSERT INTO our_accounts VALUES("8","NFC","0431640103752297","","","0");
INSERT INTO our_accounts VALUES("9","CCC","37112338601-93","","","0");
INSERT INTO our_accounts VALUES("10","ECOBANK","01317127601-01","","","0");





CREATE TABLE `our_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(60) NOT NULL,
  `smat` varchar(22) NOT NULL,
  `ayear` varchar(12) NOT NULL,
  `fca` varchar(4) NOT NULL,
  `cca` varchar(4) NOT NULL,
  `edited` varchar(60) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `comp` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `course` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prog` varchar(122) NOT NULL,
  `mark` varchar(8) NOT NULL,
  `year` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO ratings VALUES("1","HND Nursing","1","2017");
INSERT INTO ratings VALUES("2","HND Medical Laboratory Sciences","1","2017");
INSERT INTO ratings VALUES("3","Pharmacy Assistant","1","2017");
INSERT INTO ratings VALUES("4","HND Pharmacy Technology","1","2017");
INSERT INTO ratings VALUES("5","DIRECT BSC NURSING","1","2017");





CREATE TABLE `requisition_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `date` date NOT NULL,
  `dept` varchar(50) NOT NULL,
  `req_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO requisition_name VALUES("2","CHIA ricHARD AFUMBOM","0000-00-00","ADMINISTRATION","116","116");
INSERT INTO requisition_name VALUES("3","CHIA richARD AFUMBOM","0000-00-00","ADMINISTRATION","116","116");





CREATE TABLE `requisitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(51) NOT NULL,
  `category` varchar(60) NOT NULL,
  `price` varchar(20) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `total` varchar(20) NOT NULL,
  `ids` varchar(20) NOT NULL,
  `tab` varchar(50) NOT NULL,
  `area` varchar(90) NOT NULL,
  `printed` int(11) NOT NULL,
  `section` varchar(40) NOT NULL,
  `opening_stocks` text NOT NULL,
  `closing_stocks` varchar(8) NOT NULL,
  `exp` varchar(11) NOT NULL,
  `codes` varchar(20) NOT NULL,
  `bal` varchar(15) NOT NULL,
  `date` varchar(19) NOT NULL,
  `day` varchar(6) NOT NULL,
  `month` varchar(6) NOT NULL,
  `year` varchar(16) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `time` varchar(18) NOT NULL,
  `froms` varchar(60) NOT NULL,
  `agent` varchar(150) NOT NULL,
  `pdate` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

INSERT INTO requisitions VALUES("1","Inverstments(Equipments)","","67313500","1","2","","","3","1","0","pharmacy","Inverstments(Equipments)","61000000","67313500","","-6313500","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("2","Buildings","","8050000","1","2","","","3","1","0","pharmacy","Buildings","61000000","67313500","","35950000","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("3","Entrance Exams","","5400000","1","2","","","3","1","0","pharmacy","Entrance Exams","61000000","67313500","","100000","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("4","Graduation/Matriculation","","5818000","1","2","","","3","1","0","pharmacy","Graduation/Matriculation","61000000","67313500","","-2168000","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("5","Telecom Services ","","3089900","1","2","","","3","1","0","pharmacy","Telecom Services ","61000000","67313500","","7910100","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("6","Electricity Bills","","767704","1","2","","","3","1","0","pharmacy","Electricity Bills","61000000","67313500","","1232296","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("7","Water Bills","","83756","1","2","","","3","1","0","pharmacy","Water Bills","61000000","67313500","","416244","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("8","Staff Travl By Air","","2015658","1","2","","","3","1","0","pharmacy","Staff Travl By Air","61000000","67313500","","3984342","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("9","Electrical Repairs","","1993900","1","2","","","3","1","0","pharmacy","Electrical Repairs","61000000","67313500","","6100","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("10","Building Repairs","","2559000","1","2","","","3","1","0","pharmacy","Building Repairs","61000000","67313500","","-559000","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("11","Repairs Of Cars","","4902100","1","2","","","3","1","0","pharmacy","Repairs Of Cars","61000000","67313500","","497900","21-03-2017","","03","2016/2017","","02:53:30","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("12","HIRED SERVICES","","3432000","1","2","","","3","1","0","pharmacy","HIRED SERVICES","61000000","67313500","","20546921","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("13","CNPS CONTRIBUTION","","9730596","1","2","","","3","1","0","pharmacy","CNPS CONTRIBUTION","61000000","67313500","","15612138","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("14","Transport By Land","","43000","1","2","","","3","1","0","pharmacy","Transport By Land","61000000","67313500","","457000","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("15","IT Department Maintenance","","1267000","1","2","","","3","1","0","pharmacy","IT Department Maintenance","61000000","67313500","","3733000","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("16","Meetings","","288600","1","2","","","3","1","0","pharmacy","Meetings","61000000","67313500","","711400","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("17","Medical Assistance","","300000","1","2","","","3","1","0","pharmacy","Medical Assistance","61000000","67313500","","2700000","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("18","Conferences","","555689","1","2","","","3","1","0","pharmacy","Conferences","61000000","67313500","","4444311","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("19","Computer Accesories","","405000","1","2","","","3","1","0","pharmacy","Computer Accesories","61000000","67313500","","95000","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("20","Stationaries","","2857750","1","2","","","3","1","0","pharmacy","Stationaries","61000000","67313500","","-457750","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("21","Office Ink","","440500","1","2","","","3","1","0","pharmacy","Office Ink","61000000","67313500","","1559500","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("22","Cleaning Services","","459525","1","2","","","3","1","0","pharmacy","Cleaning Services","61000000","67313500","","-259525","21-03-2017","","03","2016/2017","","03:04:30","","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("23","Departmental Movement","","1191500","1","2","","","3","1","0","pharmacy","Departmental Movement","61000000","67313500","","1308500","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("24","Secretariat Expenses","","1046800","1","2","","","3","1","0","pharmacy","Secretariat Expenses ","61000000","67313500","","453200","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("25","Allowances Paid","","1100000","1","2","","","3","1","0","pharmacy","Allowances Paid","61000000","67313500","","3900000","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("26","Student Forum","","706000","1","2","","","3","1","0","pharmacy","Student Forum","61000000","67313500","","794000","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("27","Student Robes","","2000000","1","2","","","3","1","0","pharmacy","Student Robes","61000000","67313500","","0","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("28","Training And Development","","1682000","1","2","","","3","1","0","pharmacy","Training And Development","61000000","67313500","","5318000","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("29","Insurance Services","","733065","1","2","","","3","1","0","pharmacy","Insurance Services","61000000","67313500","","1266935","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("30","Foreign Collaboration ","","261500","1","2","","","3","1","0","pharmacy","Foreign Collaboration ","61000000","67313500","","2738500","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("31","Plumbing Repairs","","724700","1","2","","","3","1","0","pharmacy","Plumbing Repairs","61000000","67313500","","275300","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("32","Royalties","","1111800","1","2","","","3","1","0","pharmacy","Royalties","61000000","67313500","","10472200","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("33","Communication Credits","","472700","1","2","","","3","1","0","pharmacy","Communication Credits","61000000","67313500","","1527300","21-03-2017","","03","2016/2017","","03:14:39","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("34","Cooperate Gifts","","5765000","1","2","","","3","1","0","pharmacy","Cooperate Gifts","61000000","67313500","","-2265000","22-03-2017","","03","2016/2017","","10:57:58","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("35","Board Expenses ","","2255000","1","2","","","3","1","0","pharmacy","Board Expenses ","61000000","67313500","","745000","22-03-2017","","03","2016/2017","","10:57:58","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("36","Dividend","","500000","1","2","","","3","1","0","pharmacy","Dividend","61000000","67313500","","2500000","22-03-2017","","03","2016/2017","","10:57:58","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("37","Administrative Assistance","","2250000","1","2","","","3","1","0","pharmacy","Administrative Assistance","61000000","67313500","","4350000","22-03-2017","","03","2016/2017","","10:57:58","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("38","Professional Fees","","800000","1","2","","","3","1","0","pharmacy","Professional Fees","61000000","67313500","","2200000","22-03-2017","","03","2016/2017","","10:57:58","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("39","Supervision/Placement","","769500","1","2","","","3","1","0","pharmacy","Supervision/Placement","61000000","67313500","","6230500","22-03-2017","","03","2016/2017","","10:57:58","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("40","Monument(Dr. BIAKA)","","1036000","1","2","","","3","1","0","pharmacy","Monument(Dr. BIAKA)","61000000","67313500","","-1036000","22-03-2017","","03","2016/2017","","11:01:43","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("41","Public Relations","","1650000","1","2","","","3","1","0","pharmacy","Public Relations","61000000","67313500","","6350000","22-03-2017","","03","2016/2017","","11:01:43","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("42","Fin Division","","1166130","1","2","","","3","1","0","pharmacy","Fin Division","61000000","67313500","","1833870","22-03-2017","","03","2016/2017","","11:01:43","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("43","Sport And Recreation","","1058000","1","2","","","3","1","0","pharmacy","Sport And Recreation","61000000","67313500","","2442000","22-03-2017","","03","2016/2017","","11:01:43","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("44","Fuel And Lubricant","","2480325","1","2","","","3","1","0","pharmacy","Fuel And Lubricant","61000000","67313500","","5019675","22-03-2017","","03","2016/2017","","11:01:43","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("45","Debt Settlement","","3597300","1","2","","","3","1","0","pharmacy","Debt Settlement","61000000","67313500","","-3597300","22-03-2017","","03","2016/2017","","11:05:02","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("46","Marketing/Publicity","","1182700","1","2","","","3","1","0","pharmacy","Marketing/Publicity","61000000","67313500","","5967300","22-03-2017","","03","2016/2017","","11:05:02","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("47","Funeral Assistance","","820475","1","2","","","3","1","0","pharmacy","Funeral Assistance","61000000","67313500","","679525","22-03-2017","","03","2016/2017","","11:05:02","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("48","Mailing Services ","","100000","1","2","","","3","1","0","pharmacy","Mailing Services ","61000000","67313500","","400000","22-03-2017","","03","2016/2017","","11:05:02","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("49","Other Taxes","","778000","1","2","","","3","1","0","pharmacy","Other Taxes","61000000","67313500","","3742000","22-03-2017","","03","2016/2017","","11:05:02","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("50","Reimbursements","","1337294","1","2","","","3","1","0","pharmacy","Reimbursements","61000000","67313500","","-1337294","22-03-2017","","03","2016/2017","","11:06:10","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("51","Reg Exp","","261000","1","2","","","3","1","0","pharmacy","Reg Exp","61000000","67313500","","-261000","22-03-2017","","03","2016/2017","","11:07:09","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("52","Withdrawal Account","","3147985","1","2","","","3","1","0","pharmacy","Withdrawal Account","61000000","67313500","","-3147985","22-03-2017","","03","2016/2017","","11:07:59","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("53","Liturgical Services","","40000","1","2","","","3","1","0","pharmacy","Liturgical Services","61000000","67313500","","-40000","22-03-2017","","03","2016/2017","","11:08:49","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("54","Leave Allowance","","35600","1","2","","","3","1","0","pharmacy","Leave Allowance","61000000","67313500","","-35600","22-03-2017","","03","2016/2017","","11:10:07","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("55","Notification","","55000","1","2","","","3","1","0","pharmacy","Notification","61000000","67313500","","-55000","22-03-2017","","03","2016/2017","","11:13:23","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("56","Other Creditors","","17100000","1","2","","","3","1","0","pharmacy","Other Creditors","61000000","67313500","","0","22-03-2017","","03","2016/2017","","11:13:23","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("57","Settlement Of Overdraft ","","61058700","1","2","","","3","1","0","pharmacy","Settlement Of Overdraft ","61000000","67313500","","0","22-03-2017","","03","2016/2017","","11:13:23","116","CHIA RichARD AFUMBOM","");
INSERT INTO requisitions VALUES("58","Loan Settlement","","16000000","1","2","","","3","1","0","pharmacy","Loan Settlement","61000000","67313500","","19000000","22-03-2017","","03","2016/2017","","11:13:23","116","CHIA RichARD AFUMBOM","");





CREATE TABLE `resits` (
  `roll` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(400) NOT NULL,
  `matricule` varchar(400) NOT NULL,
  `departmet` varchar(400) NOT NULL,
  `levels` varchar(400) NOT NULL,
  `sex` varchar(400) NOT NULL,
  `db1` varchar(400) NOT NULL,
  `c101` varchar(400) NOT NULL,
  `c102` varchar(400) NOT NULL,
  `c103` varchar(400) NOT NULL,
  `c104` varchar(400) NOT NULL,
  `c105` varchar(400) NOT NULL,
  `c106` varchar(400) NOT NULL,
  `c107` varchar(400) NOT NULL,
  `c108` varchar(400) NOT NULL,
  `c109` varchar(400) NOT NULL,
  `c110` varchar(400) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;






CREATE TABLE `rush` (
  `roll` int(50) NOT NULL AUTO_INCREMENT,
  `year` varchar(250) NOT NULL,
  `extra` varchar(250) NOT NULL,
  `extra2` varchar(250) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO rush VALUES("1","2020/2021","2020","2021");
INSERT INTO rush VALUES("2","1","1","1");





CREATE TABLE `scholars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO scholars VALUES("11","HIMS","");
INSERT INTO scholars VALUES("12","PRESIDENT","");





CREATE TABLE `school` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `school` varchar(250) NOT NULL,
  `twon` text NOT NULL,
  `ids` varchar(400) NOT NULL,
  `roll` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO school VALUES("1","BIAKA UNIVERSITY INSTITUTE OF BUEA(BUIB) ","(SFSHS BUEA)","16","1");
INSERT INTO school VALUES("2","<div style=\"float:left; width:600px;font-size:14px;margin-top:2px;\">P.O. BOX 77, BUEA CAMEROON</div> <div style=\"float:left; width:600px;font-size:12px;\">TEL: (237) 233322558 /fax: (237) 33322326<br>Email: info@biakahc.org</div>","TEL: (237) 233322558 /fax: (237) 33322326","16","2");
INSERT INTO school VALUES("3","SFSHS BUEA","SFSHS BUEA","16","3");
INSERT INTO school VALUES("4","ST. FRANCIS ADVANACE SCHOOL OF HEALTH SCIENCES","SFSHS","16","4\n");
INSERT INTO school VALUES("5","Maboh","","16","0");
INSERT INTO school VALUES("6","<b>ST. FRANCIS ADVANCED SCHOOL OF HEALTH SCIENCES</b><br>","P.O BOX 77 BUEA SWR CAMEROON<BR>\n\nTEL: +237 233 32 25 58 E-mail:sfshs@biakahc.org<br>\n\nWesite: www.biakahc.org\n\n","16","0");
INSERT INTO school VALUES("7","ST. FRANCIS HIGHER INSTIUTE OF NURSING AND MIDWIFERY","(SFHINW BUEA)","15","7");
INSERT INTO school VALUES("8","<div style=\"float:left; width:600px;font-size:14px;margin-top:2px;\">P.O. BOX 77, BUEA CAMEROON</div> <div style=\"float:left; width:600px;font-size:12px;\">TEL: (237) 23332 2478 /fax: (237) 3332 2566<br>Email: info@biakahc.org</div>","TEL: (237) 23332 2458 /fax: (237) 3332 2566","15","8");
INSERT INTO school VALUES("9","SFHINW BUEA","SFHINW BUEA","16","0");
INSERT INTO school VALUES("10","ST. FRANCIS HIGHER INSTIUTE OF NURSING AND MIDWIFERY","(SFHINW BUEA)","15","0");
INSERT INTO school VALUES("11","","","15","0");
INSERT INTO school VALUES("12","<b>ST. FRANCIS HIGHER INSTIUTE OF NURSING AND MIDWIFERY</b><br>","P.O BOX 77 BUEA SWR CAMEROON","16","0");





CREATE TABLE `sector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `area` int(11) NOT NULL,
  `link` varchar(98) NOT NULL,
  `does` int(11) NOT NULL,
  `sarea` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO sector VALUES("18","Boss Office","20","superadmin/index.php","0","0");
INSERT INTO sector VALUES("19","Admission Office","1","Admission/index.php","0","7");
INSERT INTO sector VALUES("21","Students Affairs","2","Records/index.php","2","7");
INSERT INTO sector VALUES("22","BURSAR","11","Fees/first.php","2","12");
INSERT INTO sector VALUES("23","Other Income / Exp","4","Cash/index.php","2","12");
INSERT INTO sector VALUES("24","Exams Officer","5","Exams/index.php","0","7");
INSERT INTO sector VALUES("25","Students Affairs","6","Affairs/index.php","2","0");
INSERT INTO sector VALUES("26","Registry","7","Registrar/index.php","2","0");
INSERT INTO sector VALUES("27","Chair Man","8","Provost/index.php?dashb","0","0");
INSERT INTO sector VALUES("28","Human Resource","9","humanr/index.php","0","0");
INSERT INTO sector VALUES("29","ACCOUNTANT","12","Acc/index.php","0","0");
INSERT INTO sector VALUES("30","HIMS Staff Controler","13","staffs/staffs/staffpage.php","0","12");
INSERT INTO sector VALUES("31","Procurement Office","14","store/stockpage.php","0","0");
INSERT INTO sector VALUES("33","Human Resource Secretariate","16","Staffs/admin/adminpage.php","0","9");





CREATE TABLE `sectors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `area` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO sectors VALUES("17","SHAREHOLDERS","0");
INSERT INTO sectors VALUES("18","BOARD OF DIRECTORS","0");
INSERT INTO sectors VALUES("19","ADMINISTRATION","0");
INSERT INTO sectors VALUES("20","DEPUTY ADMINISTRATOR","0");
INSERT INTO sectors VALUES("21","SECRETARIAT","0");
INSERT INTO sectors VALUES("22","ADVISER","0");
INSERT INTO sectors VALUES("23","ACCOUNTING OFFICER","0");
INSERT INTO sectors VALUES("24","REGISTRAR SFASHS","0");
INSERT INTO sectors VALUES("25","DIRECTOR SFSNM","0");
INSERT INTO sectors VALUES("26","DEPUTY REGISTRAR","0");
INSERT INTO sectors VALUES("27","DEPUTY DIRECTOR","0");
INSERT INTO sectors VALUES("28","BOOK KEEPER","0");
INSERT INTO sectors VALUES("29","CASHEIR","0");
INSERT INTO sectors VALUES("30","HOD SFASHS","0");
INSERT INTO sectors VALUES("31","HOD SFSNM","0");
INSERT INTO sectors VALUES("32","LECTURER","0");
INSERT INTO sectors VALUES("33","HUMAN  RESOURCE OFFICER/ADMIN","0");
INSERT INTO sectors VALUES("34","MEDICAL DIRECTOR","0");
INSERT INTO sectors VALUES("35","COORDINATOR SFHINM","0");
INSERT INTO sectors VALUES("36","PUBLIC RELATION OFFICER","0");
INSERT INTO sectors VALUES("37","DEPUTY COORDINATOR","0");
INSERT INTO sectors VALUES("38","GEN SUPERVISOR","0");
INSERT INTO sectors VALUES("39","ASS, GEN SUPERVISOR","0");
INSERT INTO sectors VALUES("40","NURSES","0");
INSERT INTO sectors VALUES("41","DRIVER","0");
INSERT INTO sectors VALUES("42","SCURITY","0");
INSERT INTO sectors VALUES("43","YARD MEN ","0");
INSERT INTO sectors VALUES("44","CLEANERS","0");
INSERT INTO sectors VALUES("45","EXAMS OFFICE","0");
INSERT INTO sectors VALUES("46","Marketing","0");
INSERT INTO sectors VALUES("47","","0");
INSERT INTO sectors VALUES("48","Marketing","0");
INSERT INTO sectors VALUES("49","","0");
INSERT INTO sectors VALUES("50","VICE PROVOST ACADEMIC","0");
INSERT INTO sectors VALUES("51","VICE PROVOST RESEARCH AND COOPERATION","0");
INSERT INTO sectors VALUES("52","SECRETARIAT SHS ","0");
INSERT INTO sectors VALUES("53","SECRETARIAT SMS","0");
INSERT INTO sectors VALUES("54","DIRECTOR SHS","0");
INSERT INTO sectors VALUES("55","DIRECTOR SMS","0");
INSERT INTO sectors VALUES("56","SECRETARIAT VICE PROVOST ACADEMICS","0");
INSERT INTO sectors VALUES("57","HOSPITAL","0");
INSERT INTO sectors VALUES("58","HOSPITAL","0");
INSERT INTO sectors VALUES("59","HOSPITAL","0");
INSERT INTO sectors VALUES("60","","0");





CREATE TABLE `sets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `levels` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO sets VALUES("1","HND","200");
INSERT INTO sets VALUES("2","HND","300");
INSERT INTO sets VALUES("3","B-TECH","400");
INSERT INTO sets VALUES("6","MBA","600");
INSERT INTO sets VALUES("7","PART TIME","200");
INSERT INTO sets VALUES("8","PART TIME","300");





CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prog` varchar(90) NOT NULL,
  `levels` varchar(10) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `fees` varchar(12) NOT NULL,
  `reg` varchar(12) NOT NULL,
  `others` varchar(55) NOT NULL,
  `tshirt` varchar(12) NOT NULL,
  `adminp` varchar(12) NOT NULL,
  `sunion` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO settings VALUES("1","ACCOUNTANCY","200","","325000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("3","ACCOUNTANCY","400","","450000","25000","B-TECH","0","5000","0");
INSERT INTO settings VALUES("4","ACCOUNTANCY","450","","450000","0","B-TECH","0","0","0");
INSERT INTO settings VALUES("5","BANKING AND FINANCE","200","","325000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("7","ACCOUNTANCY","300","","325000","0","HND","0","0","2500");
INSERT INTO settings VALUES("8","I.C.E.L.P","100","","400000","20000","Others","2500","5000","2500");
INSERT INTO settings VALUES("9","BANKING AND FINANCE","300","","325000","0","HND","0","0","2500");
INSERT INTO settings VALUES("10","BANKING AND FINANCE","400","","450000","25000","B-TECH","0","5000","0");
INSERT INTO settings VALUES("11","INSURANCE","200","","340000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("12","INSURANCE","300","","340000","0","HND","0","0","2500");
INSERT INTO settings VALUES("13","INSURANCE","400","","450000","25000","B-TECH","0","5000","0");
INSERT INTO settings VALUES("14","MANAGEMENT","200","","315000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("15","MANAGEMENT","300","","315000","0","HND","0","0","2500");
INSERT INTO settings VALUES("16","MANAGEMENT","400","","450000","25000","B-TECH","0","5000","0");
INSERT INTO settings VALUES("17","MARKETING","200","","315000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("18","MARKETING","300","","315000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("19","MARKETING","400","","450000","25000","B-TECH","0","5000","0");
INSERT INTO settings VALUES("20","EXECUTIVE SECRETARIAL STUDIES","200","","315000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("21","EXECUTIVE SECRETARIAL STUDIES","300","","300000","0","HND","0","0","2500");
INSERT INTO settings VALUES("22","TRANSPORT AND LOGISTICS","200","","325000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("23","TRANSPORT AND LOGISTICS","300","","300000","0","HND","0","0","2500");
INSERT INTO settings VALUES("24","SOFTWARE ENGINEERING AND COMPUTING","200","","340000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("25","SOFTWARE ENGINEERING AND COMPUTING","300","","300000","0","HND","0","0","2500");
INSERT INTO settings VALUES("26","TRAVEL AGENCY, TOURISM AND OPERATION MANAGEMENT ","200","","325000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("27","TRAVEL AGENCY, TOURISM AND OPERATION MANAGEMENT ","300","","300000","0","HND","0","0","2500");
INSERT INTO settings VALUES("28","HOSPITALITY MANAGEMENT","200","","315000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("29","HOSPITALITY MANAGEMENT","300","","300000","0","HND","0","0","2500");
INSERT INTO settings VALUES("30","HOSPITALITY MANAGEMENT","400","","450000","","","","","");
INSERT INTO settings VALUES("31","HUMAN RESOURCE MANAGEMENT","200","","315000","20000","HND","2500","5000","2500");
INSERT INTO settings VALUES("32","PROJECT MANAGEMENT","200","","315000","20000","HND","2500","5000","2500");





CREATE TABLE `sitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `ayear` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO sitems VALUES("2","Id Cards","2017/2018");
INSERT INTO sitems VALUES("9","T Shirts","2017/2018");





CREATE TABLE `special` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school` varchar(200) DEFAULT NULL,
  `certi` varchar(200) DEFAULT NULL,
  `gh` varchar(200) DEFAULT NULL,
  `stat` int(11) NOT NULL,
  `sch` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO special VALUES("3","","INSURANCE","03","118","2018/2019");
INSERT INTO special VALUES("4","","MANAGEMENT","04","118","2018/2019");
INSERT INTO special VALUES("10","","ACCOUNTANCY","01","118","2018/2019");
INSERT INTO special VALUES("11","","BANKING AND FINANCE","02","118","2018/2019");
INSERT INTO special VALUES("5","","MARKETING","05","118","2018/2019");
INSERT INTO special VALUES("7","","Project  Management","PM","118","2018/2019");
INSERT INTO special VALUES("8","","Human Resource Management","HRM","118","2018/2019");
INSERT INTO special VALUES("16","","TRANSPORT AND LOGISTICS","06","118","2018/2019");
INSERT INTO special VALUES("12","","ICAN","ICAN","118","2018/2019");
INSERT INTO special VALUES("15","","I.C.E.L.P","I.C.E.L.P","118","2018/2019");
INSERT INTO special VALUES("17","","EXECUTIVE SECRETARIAL STUDIES","07","118","2018/2019");
INSERT INTO special VALUES("18","","INFORMATION AND COMMUNICATION TECHNOLOGY","08","118","2018/2019");
INSERT INTO special VALUES("19","","SOFTWARE ENGINEERING AND COMPUTING","09","118","2018/2019");
INSERT INTO special VALUES("20","","HOSPITALITY MANAGEMENT","10","118","2018/2019");
INSERT INTO special VALUES("21","","TRAVEL AGENCY, TOURISM AND OPERATION MANAGEMENT ","11","118","2018/2019");
INSERT INTO special VALUES("22","","ACCOUTING AND FINANCE","ACF","118","2018/2019");





CREATE TABLE `specials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school` varchar(200) DEFAULT NULL,
  `certi` varchar(200) DEFAULT NULL,
  `gh` varchar(200) DEFAULT NULL,
  `stat` int(11) NOT NULL,
  `sch` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO specials VALUES("3","","INSURANCE","03","118","2018/2019");
INSERT INTO specials VALUES("4","","MANAGEMENT","04","118","2018/2019");
INSERT INTO specials VALUES("10","","ACCOUNTANCY","01","118","2018/2019");
INSERT INTO specials VALUES("11","","BANKING AND FINANCE","02","118","2018/2019");
INSERT INTO specials VALUES("5","","MARKETING","05","118","2018/2019");
INSERT INTO specials VALUES("7","","Project  Management","PM","118","2018/2019");
INSERT INTO specials VALUES("8","","Human Resource Management","HRM","118","2018/2019");
INSERT INTO specials VALUES("16","","TRANSPORT AND LOGISTICS","06","118","2018/2019");
INSERT INTO specials VALUES("12","","ICAN","ICAN","118","2018/2019");
INSERT INTO specials VALUES("15","","I.C.E.L.P","I.C.E.L.P","118","2018/2019");
INSERT INTO specials VALUES("17","","EXECUTIVE SECRETARIAL STUDIES","07","118","2018/2019");
INSERT INTO specials VALUES("18","","INFORMATION AND COMMUNICATION TECHNOLOGY","08","118","2018/2019");
INSERT INTO specials VALUES("19","","SOFTWARE ENGINEERING AND COMPUTING","09","118","2018/2019");
INSERT INTO specials VALUES("20","","HOSPITALITY MANAGEMENT","10","118","2018/2019");
INSERT INTO specials VALUES("21","","TRAVEL AGENCY, TOURISM AND OPERATION MANAGEMENT ","11","118","2018/2019");
INSERT INTO specials VALUES("22","","ACCOUTING AND FINANCE","ACF","118","2018/2019");





CREATE TABLE `spendingcats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(90) NOT NULL,
  `ids` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO spendingcats VALUES("4","RENTS","0");
INSERT INTO spendingcats VALUES("5","REPAIRS OF VEHICLE","0");
INSERT INTO spendingcats VALUES("6","RECEPTION","0");
INSERT INTO spendingcats VALUES("7","MISSIONS","0");
INSERT INTO spendingcats VALUES("9","STATIONERIES","0");
INSERT INTO spendingcats VALUES("10","DOCUMENTATION","0");
INSERT INTO spendingcats VALUES("11","TRANSPORTATION","0");
INSERT INTO spendingcats VALUES("12","OUTREACH","0");
INSERT INTO spendingcats VALUES("13","GENERAL REPAIRS","0");





CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `one` varchar(255) NOT NULL,
  `two` varchar(255) NOT NULL,
  `three` varchar(255) NOT NULL,
  `four` varchar(255) NOT NULL,
  `five` varchar(255) NOT NULL,
  `six` varchar(255) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO teacher VALUES("3","lerrydibo@yahoo.com","679149800","Lerry","N","Dibo","Lerry Dibo  N ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("2","ettagborolive@gmail.com","678762581","Ettagbor","L","Olive","Ettagbor Olive L ","0","bavarian-alps-1280-960-432.jpg","","","","","","");
INSERT INTO teacher VALUES("4","nemsamuel@yahoo.com","675405498","Nemkul","Samuel","Lackbuin","Nemkul Lackbuin Samuel ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("5","omarionelson@yahoo.com","674558859","Balingwe","","Nelson","Balingwe Nelson  ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("6","ibomanne@gmail.com","676820135","IBOM","","CECILE","IBOM  CECILE  ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("7","mbivnjo@biakahc.org","679686123","Mbivnjo","Leinyuy","Etheldreda","Mbivnjo Etheldreda Leinyuy ","0","Penguins.jpg","","","","","","");
INSERT INTO teacher VALUES("19","figamba207@gmail.com","joycee","Mbah","Gawum","Finley","Mbah Finley Gawum ","0","Penguins.jpg","","","","","","");
INSERT INTO teacher VALUES("9","ekbetrand@yahoo.com","teacher","Betrand","Ekenja","g","Betrand g Ekenja ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("10","zawuol@gmail.com","675817024","Aminkeng","Leke","Zawuo","Aminkeng Zawuo Leke ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("11","blessedeliane@yahoo.com","thanks",".","Eliane","Peguessang",". Peguessang Eliane ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("12","obale_armstrong@yahoo.com","696457452","Obale","Mbi","Armstrong","Obale Armstrong  Mbi ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("13","susanmaeya@yahoo.com","76067501","Etta","Maeya","Susan","Etta Susan Maeya ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("14","lekiss4u@gmail.com","675098206","Leke","Asiambeh","Elvis","Leke Elvis Asiambeh ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("15","malvisachoh@ebiaka.com","malvis","Ms","Achoh","Malvis","Ms Malvis  Achoh ","0","1.jpg","","","","","","");
INSERT INTO teacher VALUES("16","divineab@ebika.com","teacher","Divine",".","Abanke","Divine  Abanke . ","0","6511396_p.jpg","","","","","","");
INSERT INTO teacher VALUES("18","maboh@biakahc.org","maboh","maboh","Nkwati","Michel","maboh Michel Nkwati ","0","6511396_p.jpg","677439328","maboh@biakahc.org","FAIMER Fellow (PA-USA); MNE","2005","Director/Registrar","Full time");
INSERT INTO teacher VALUES("20","poungouelie@yahoo.fr","17071964pe","poungoue","elie","ngambou","poungoue ngambou elie ","0","Tulips.jpg","","","","","","");
INSERT INTO teacher VALUES("36","NISHANG0","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("34","NISHANG0","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("35","NISHANG0","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("33","NISHANG0","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("32","records","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("31","records","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("30","records","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("37","NISHANG0","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("40","kizita","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("39","records","12345","","","","Midwifery","0","","","","","","","");
INSERT INTO teacher VALUES("41","record12","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("44","NISHANG","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("45","johns","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("46","johns","12345","","","","Nursing","0","","","","","","","");
INSERT INTO teacher VALUES("47","NISHANG0","12345","","","","IT Department","0","","","","","","","");
INSERT INTO teacher VALUES("48","procure","12345","","","","Construction","0","","","","","","","");
INSERT INTO teacher VALUES("49","aunty","12345","","","","Construction","0","","","","","","","");





CREATE TABLE `track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(60) NOT NULL,
  `smat` varchar(22) NOT NULL,
  `ayear` varchar(12) NOT NULL,
  `fca` varchar(4) NOT NULL,
  `cca` varchar(4) NOT NULL,
  `edited` varchar(60) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `comp` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `course` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `md5_id` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `full_name` tinytext COLLATE latin1_general_ci NOT NULL,
  `user_name` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_email` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_level` tinyint(4) NOT NULL DEFAULT 1,
  `pwd` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `address` text COLLATE latin1_general_ci NOT NULL,
  `country` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tel` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fax` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `website` text COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `users_ip` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `approved` int(1) NOT NULL DEFAULT 0,
  `activation_code` int(10) NOT NULL DEFAULT 0,
  `banned` int(1) NOT NULL DEFAULT 0,
  `ckey` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ctime` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`user_email`),
  FULLTEXT KEY `idx_search` (`full_name`,`address`,`user_email`,`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO users VALUES("63","","Super Admmin","superadmin","superadmin@mysoftware.com","20","169374aabd2a21767b17e1ede08b044336e241d785e30442e","","","","","","2017-10-20","::1","2","7208","20","","");
INSERT INTO users VALUES("72","","CAROLINE KOFFI","MACARO","MACARO@mysoftware.com","11","cae6cbebe77efc6cd06fb1688e204d24cebac0e50608526c8","","","","","","2018-10-25","192.168.1.99","2","4837","11","","");
INSERT INTO users VALUES("71","","Ndifongong Ferdinand","Ferdinand","Ferdinand@mysoftware.com","12","e2d4236de77b95cf8a3124c23eddd212a198ad5509efa7883","","","","","","2018-10-25","192.168.1.99","2","6501","12","","");
INSERT INTO users VALUES("73","","Students Affairs","saffairs","saffairs@mysoftware.com","2","4cd5c21dfabeace05a10829b371749b7a0fbb5f15b5501ef4","","","","","","2018-11-22","fe80::7cde:b9e4:df2c:9b6d","2","8873","2","","");



