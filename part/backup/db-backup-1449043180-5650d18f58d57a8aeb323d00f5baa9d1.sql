

CREATE TABLE `ac_year` (
  `acy_id` int(11) NOT NULL AUTO_INCREMENT,
  `ayear` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`acy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO ac_year VALUES("1","2015/2016","");
INSERT INTO ac_year VALUES("2","2014/2015","");
INSERT INTO ac_year VALUES("3","2012/2014","");





CREATE TABLE `admission` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(50) NOT NULL,
  `ayear` varchar(12) NOT NULL,
  `class` varchar(50) NOT NULL,
  `matric` varchar(12) NOT NULL,
  `sex` varchar(10) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO admission VALUES("1","Dyna Ekwe Enow Manga Thh","2015/2016","ACCOUNTING","ACC/01/15","Female");
INSERT INTO admission VALUES("2","Nish John Fru Nidf","2015/2016","ENGINEERING","EGN/01/15","Male");
INSERT INTO admission VALUES("3","Ngut Peter Che","2015/2016","ACCOUNTING","ACC/02/15","Male");
INSERT INTO admission VALUES("4","Guy Daneil Kamga","2015/2016","ACCOUNTING","ACC/03/15","Male");
INSERT INTO admission VALUES("5","Pa Thim Stshshs","2015/2016","ENGINEERING","EGN/02/15","Female");
INSERT INTO admission VALUES("6","Ngut Peter CheM","2015/2016","ACCOUNTING","ACC/04/15","Male");
INSERT INTO admission VALUES("7","Nish John Fru","2015/2016","ACCOUNTING","ACC/05/15","Male");
INSERT INTO admission VALUES("8","KOEL BILINGUAL","2015/2016","ENGINEERING","EGN/03/15","Female");
INSERT INTO admission VALUES("9","General Sales TODAY","2015/2016","ENGINEERING","EGN/04/15","Male");
INSERT INTO admission VALUES("10","Dyna Ekwe Enow Manna","2015/2016","ACCOUNTING","ACC/06/15","Female");
INSERT INTO admission VALUES("11","Guy Daneil Kamgas","2015/2016","ACCOUNTING","ACC/07/15","Male");
INSERT INTO admission VALUES("12","Guy Daneil Kamga Guy","2015/2016","ENGINEERING","EGN/05/15","Male");
INSERT INTO admission VALUES("13","Tyy Ggghh ","2015/2016","MAINTENANCE","MNT/01/15","Male");
INSERT INTO admission VALUES("14","Nish John Fru N","2015/2016","ENGINEERING","EGN/06/15","Male");
INSERT INTO admission VALUES("15","Ojong Shinaida Or","2015/2016","ENGINEERING","EGN/07/15","Male");
INSERT INTO admission VALUES("16","Ngut Peter Che","2015/2016","ENGINEERING","EGN/08/15","Male");
INSERT INTO admission VALUES("17","AGBOR ERIC FOMBE","2015/2016","ACCOUNTING","ACC/08/15","Female");
INSERT INTO admission VALUES("18","Agbor Eric ","2015/2016","ACCOUNTING","ACC/09/15","Female");
INSERT INTO admission VALUES("19","Tanui The","2015/2016","German","G/01/15","female");
INSERT INTO admission VALUES("20","Juliette Kendzengjjj","2015/2016","ACCOUNTING","ACC/010/15","Male");





CREATE TABLE `allowed` (
  `roll` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO allowed VALUES("1","2");





CREATE TABLE `classes` (
  `classes_id` int(11) NOT NULL AUTO_INCREMENT,
  `classes` varchar(30) DEFAULT NULL,
  `ayear` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`classes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO classes VALUES("1","ENGINEERING","EGN","");
INSERT INTO classes VALUES("2","MAINTENANCE","MNT","");
INSERT INTO classes VALUES("3","ACCOUNTING","ACC","");
INSERT INTO classes VALUES("5","English Language","","");
INSERT INTO classes VALUES("6","German","","");
INSERT INTO classes VALUES("7","Sixeime","","");





CREATE TABLE `client` (
  `clien_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `address` text,
  `as1` varchar(60) DEFAULT NULL,
  `as2` varchar(60) DEFAULT NULL,
  `as3` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`clien_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("2","KOEL BILINGUAL INSTITUTE","  Day Care, Nursery, Primary and Secondary School","Address: BP 158 Long Street Tiko","Tel: +237 679167553 / 67262639","");





CREATE TABLE `students` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `co_title` varchar(30) NOT NULL,
  `co_code` varchar(6) NOT NULL,
  `cv` int(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `status` varchar(6) NOT NULL,
  `semester` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("2","Principles Of Accounting II","ACC201","6","Accounting","","2");
INSERT INTO students VALUES("3","Principles Of Engineering","EGN210","2","Engineering","","1");
INSERT INTO students VALUES("4","ACCA Accounting","ACC100","6","ACCOUNTING","C","1");
INSERT INTO students VALUES("5","OHAD Accounting","OACC10","6","ACCOUNTING","C","2");
INSERT INTO students VALUES("6","Business Accounting","BACC10","6","ACCOUNTING","C","2");
INSERT INTO students VALUES("7","Accounts Clerk","ACCA10","2","ACCOUNTING","C","1");
INSERT INTO students VALUES("8","Knowing Yoursel","MMNT","6","MANAGEMENT","C","1");
INSERT INTO students VALUES("9","Management & Talking","MTH","2","MANAGEMENT","C","1");
INSERT INTO students VALUES("11","Softwares Installation","SWA100","6","MAINTENANCE","C","1");





CREATE TABLE `current` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO current VALUES("1","2015/2016");





CREATE TABLE `daily` (
  `daily_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `amt_paid` varchar(30) DEFAULT NULL,
  `agent` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `monthly` int(11) NOT NULL,
  PRIMARY KEY (`daily_id`),
  KEY `adm_id` (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO daily VALUES("1","1","305000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("2","2","135000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("3","3","245000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("4","4","225000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("5","5","135000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("6","6","355000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("7","7","305000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("8","8","135000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("9","9","145000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("10","10","135000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("11","11","205000","nishang","16-09-2015","9");
INSERT INTO daily VALUES("12","13","400000","nishang","27-09-2015","9");
INSERT INTO daily VALUES("13","3","205000","nishang","04-10-2015","10");
INSERT INTO daily VALUES("14","4","221000","nishang","01-09-2015","9");
INSERT INTO daily VALUES("15","4","130000","nishang","01-09-2015","9");
INSERT INTO daily VALUES("16","4","130000","nishang","01-09-2015","9");
INSERT INTO daily VALUES("17","5","180000","nishang","08-10-2015","10");
INSERT INTO daily VALUES("18","6","200000","nishang","08-10-2015","10");





CREATE TABLE `dailyspendings` (
  `day_id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(12) DEFAULT NULL,
  `reason` text,
  `amount` varchar(50) DEFAULT NULL,
  `total` varchar(13) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `spender` varchar(23) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `time` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO dailyspendings VALUES("1","10","T-shirts","1500","15000","10-09-2015","nishang","09","2015","2015/2016");
INSERT INTO dailyspendings VALUES("2","1","Chalk","200","200","10-09-2015","nishang","09","2015","2015/2016");
INSERT INTO dailyspendings VALUES("3","10","T-shirts","10","100","10-09-2015","nishang","09","2015","2015/2016");
INSERT INTO dailyspendings VALUES("4","5","T-shirts","1200","6000","10-09-2015","nishang","09","2015","2015/2016");
INSERT INTO dailyspendings VALUES("5","10","Books","1000","10000","02-09-2015","admin12","09","2015","2015/2016");
INSERT INTO dailyspendings VALUES("6","5","Books","1200","6000","05-09-2015","admin12","09","2015","2015/2016");
INSERT INTO dailyspendings VALUES("7","5","T-shirts","2500","12500","05-09-2015","nishang","09","2015","2015/2016");
INSERT INTO dailyspendings VALUES("8","1","Transportation","5000","5000","12-09-2015","nishang","09","2015","2015/2016");
INSERT INTO dailyspendings VALUES("9","1","Fuel","15000","15000","12-09-2015","admin12","09","2015","2015/2016");
INSERT INTO dailyspendings VALUES("10","30","T-shirts","1900","57000","13-09-2015","nishang","09","2015","2015/2016");





CREATE TABLE `fees` (
  `fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(20) NOT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `cate` varchar(19) NOT NULL,
  PRIMARY KEY (`fee_id`),
  KEY `class_id` (`class`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO fees VALUES("7","ENGINEERING","410000","New Student");
INSERT INTO fees VALUES("8","MAINTENANCE","400000","New Student");
INSERT INTO fees VALUES("9","ACCOUNTING","350000","New Student");
INSERT INTO fees VALUES("10","MANAGEMENT","220000","New Student");
INSERT INTO fees VALUES("11","Sixeime","90000","New Student");





CREATE TABLE `finance` (
  `fin_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `expected` varchar(14) NOT NULL,
  `paid` varchar(14) NOT NULL,
  `ayear` varchar(15) NOT NULL,
  `date` varchar(25) NOT NULL,
  `newin` varchar(15) NOT NULL,
  `newdebt` varchar(15) NOT NULL,
  PRIMARY KEY (`fin_id`),
  KEY `stu_id` (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO finance VALUES("1","1","50000","305000","2015/2016","ACCOUNTING","350000","ACC/01/15");
INSERT INTO finance VALUES("2","2","70000","135000","2015/2016","ENGINEERING","200000","EGN/01/15");
INSERT INTO finance VALUES("3","3","110000","245000","2015/2016","ACCOUNTING","350000","ACC/02/15");
INSERT INTO finance VALUES("4","4","0","225000","2015/2016","ACCOUNTING","350000","ACC/03/15");
INSERT INTO finance VALUES("5","5","70000","135000","2015/2016","ENGINEERING","200000","EGN/02/15");
INSERT INTO finance VALUES("6","6","0","355000","2015/2016","ACCOUNTING","350000","ACC/04/15");
INSERT INTO finance VALUES("7","7","50000","305000","2015/2016","ACCOUNTING","350000","ACC/05/15");
INSERT INTO finance VALUES("8","8","70000","135000","2015/2016","ENGINEERING","200000","EGN/03/15");
INSERT INTO finance VALUES("9","9","60000","145000","2015/2016","ENGINEERING","200000","EGN/04/15");
INSERT INTO finance VALUES("10","10","220000","135000","2015/2016","ACCOUNTING","350000","ACC/06/15");
INSERT INTO finance VALUES("11","11","150000","205000","2015/2016","ACCOUNTING","350000","ACC/07/15");
INSERT INTO finance VALUES("12","13","0","400000","2015/2016","ENGINEERING","400000","EGN/05/15");
INSERT INTO finance VALUES("13","3","200000","205000","2015/2016","ENGINEERING","400000","EGN/08/15");
INSERT INTO finance VALUES("14","4","0","221000","2015/2016","ACCOUNTING","350000","ACC/08/15");
INSERT INTO finance VALUES("15","5","170000","180000","2015/2016","ACCOUNTING","350000","ACC/09/15");
INSERT INTO finance VALUES("16","6","150000","200000","2015/2016","ACCOUNTING","350000","ACC/010/15");





CREATE TABLE `grades` (
  `grades_id` int(11) NOT NULL AUTO_INCREMENT,
  `grade` varchar(3) NOT NULL,
  `ranges` varchar(8) NOT NULL,
  `ranges2` varchar(11) NOT NULL,
  PRIMARY KEY (`grades_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO grades VALUES("3","A","85","100");
INSERT INTO grades VALUES("4","B","70","84");
INSERT INTO grades VALUES("5","C","50","69");





CREATE TABLE `historique` (
  `hist_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(11) NOT NULL,
  `class` varchar(35) NOT NULL,
  `ayear` varchar(15) NOT NULL,
  `paid` varchar(14) NOT NULL,
  `owed` varchar(15) NOT NULL,
  `date` varchar(25) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `newin` varchar(15) NOT NULL,
  `newdebt` varchar(15) NOT NULL,
  PRIMARY KEY (`hist_id`),
  KEY `adm_id` (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO historique VALUES("1","1","ACCOUNTING","2015/2016","305000","50000","16-09-2015","9","2015","350000","0");
INSERT INTO historique VALUES("2","2","ENGINEERING","2015/2016","135000","70000","16-09-2015","9","2015","200000","0");
INSERT INTO historique VALUES("3","3","ACCOUNTING","2015/2016","245000","110000","16-09-2015","9","2015","350000","0");
INSERT INTO historique VALUES("4","4","ACCOUNTING","2015/2016","225000","130000","16-09-2015","9","2015","350000","0");
INSERT INTO historique VALUES("5","5","ENGINEERING","2015/2016","135000","70000","16-09-2015","9","2015","200000","0");
INSERT INTO historique VALUES("6","6","ACCOUNTING","2015/2016","355000","0","16-09-2015","9","2015","350000","0");
INSERT INTO historique VALUES("7","7","ACCOUNTING","2015/2016","305000","50000","16-09-2015","9","2015","350000","0");
INSERT INTO historique VALUES("8","8","ENGINEERING","2015/2016","135000","70000","16-09-2015","9","2015","200000","0");
INSERT INTO historique VALUES("9","9","ENGINEERING","2015/2016","145000","60000","16-09-2015","9","2015","200000","0");
INSERT INTO historique VALUES("10","10","ACCOUNTING","2015/2016","135000","220000","16-09-2015","9","2015","350000","0");
INSERT INTO historique VALUES("11","11","ACCOUNTING","2015/2016","205000","150000","16-09-2015","9","2015","350000","0");
INSERT INTO historique VALUES("12","13","ENGINEERING","2015/2016","400000","0","27-09-2015","9","2015","400000","0");
INSERT INTO historique VALUES("13","3","ENGINEERING","2015/2016","205000","200000","04-10-2015","10","2015","400000","0");
INSERT INTO historique VALUES("14","4","ACCOUNTING","2015/2016","221000","130000","01-09-2015","9","2015","350000","0");
INSERT INTO historique VALUES("15","4","ACCOUNTING","2015/2016","130000","0","01-09-2015","9","2015","130000","0");
INSERT INTO historique VALUES("16","4","ACCOUNTING","2015/2016","130000","0","01-09-2015","9","2015","130000","0");
INSERT INTO historique VALUES("17","5","ACCOUNTING","2015/2016","180000","170000","08-10-2015","10","2015","350000","0");
INSERT INTO historique VALUES("18","6","ACCOUNTING","2015/2016","200000","150000","08-10-2015","10","2015","350000","0");





CREATE TABLE `installment` (
  `inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `ayear` varchar(15) NOT NULL,
  `expected` varchar(14) NOT NULL,
  `paid` varchar(14) NOT NULL,
  `date` varchar(25) NOT NULL,
  `newin` varchar(15) NOT NULL,
  `newdebt` varchar(15) NOT NULL,
  PRIMARY KEY (`inst_id`),
  KEY `adm_id` (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO installment VALUES("1","1","2015/2016","350000","305000","16-09-2015","","50000");
INSERT INTO installment VALUES("2","2","2015/2016","200000","135000","16-09-2015","","70000");
INSERT INTO installment VALUES("3","3","2015/2016","350000","245000","16-09-2015","","110000");
INSERT INTO installment VALUES("4","4","2015/2016","350000","225000","16-09-2015","","130000");
INSERT INTO installment VALUES("5","5","2015/2016","200000","135000","16-09-2015","","70000");
INSERT INTO installment VALUES("6","6","2015/2016","350000","355000","16-09-2015","","0");
INSERT INTO installment VALUES("7","7","2015/2016","350000","305000","16-09-2015","","50000");
INSERT INTO installment VALUES("8","8","2015/2016","200000","135000","16-09-2015","","70000");
INSERT INTO installment VALUES("9","9","2015/2016","200000","145000","16-09-2015","","60000");
INSERT INTO installment VALUES("10","10","2015/2016","350000","135000","16-09-2015","","220000");
INSERT INTO installment VALUES("11","11","2015/2016","350000","205000","16-09-2015","","150000");
INSERT INTO installment VALUES("12","13","2015/2016","400000","400000","27-09-2015","","0");
INSERT INTO installment VALUES("13","3","2015/2016","400000","205000","04-10-2015","","200000");
INSERT INTO installment VALUES("14","4","2015/2016","350000","221000","01-09-2015","","130000");
INSERT INTO installment VALUES("15","4","2015/2016","130000","130000","01-09-2015","","0");
INSERT INTO installment VALUES("16","4","2015/2016","130000","130000","01-09-2015","","0");
INSERT INTO installment VALUES("17","5","2015/2016","350000","180000","08-10-2015","","170000");
INSERT INTO installment VALUES("18","6","2015/2016","350000","200000","08-10-2015","","150000");





CREATE TABLE `levels` (
  `lev_id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`lev_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO levels VALUES("1","200");
INSERT INTO levels VALUES("2","300");
INSERT INTO levels VALUES("3","400");
INSERT INTO levels VALUES("4","500");





CREATE TABLE `matri` (
  `mat_id` int(11) NOT NULL AUTO_INCREMENT,
  `last` int(11) NOT NULL,
  `stat` varchar(55) NOT NULL,
  `statx` int(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  PRIMARY KEY (`mat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO matri VALUES("1","3","ENGINEERING","9","EGN");
INSERT INTO matri VALUES("2","6","ACCOUNTING","11","ACC");
INSERT INTO matri VALUES("3","16","MAINTENANCE","2","MN");
INSERT INTO matri VALUES("4","0","English Language","1","E");
INSERT INTO matri VALUES("5","2","German","2","G");





CREATE TABLE `matricules` (
  `mat_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `matric` varchar(15) NOT NULL,
  PRIMARY KEY (`mat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO matricules VALUES("1","1","ACC/01/15");
INSERT INTO matricules VALUES("2","2","EGN/01/15");
INSERT INTO matricules VALUES("3","3","ACC/02/15");
INSERT INTO matricules VALUES("4","4","ACC/03/15");
INSERT INTO matricules VALUES("5","5","EGN/02/15");
INSERT INTO matricules VALUES("6","6","ACC/04/15");
INSERT INTO matricules VALUES("7","7","ACC/05/15");
INSERT INTO matricules VALUES("8","8","EGN/03/15");
INSERT INTO matricules VALUES("9","9","EGN/04/15");
INSERT INTO matricules VALUES("10","10","ACC/06/15");
INSERT INTO matricules VALUES("11","11","ACC/07/15");
INSERT INTO matricules VALUES("12","13","EGN/05/15");
INSERT INTO matricules VALUES("13","16","MNT/01/15");
INSERT INTO matricules VALUES("14","17","EGN/06/15");
INSERT INTO matricules VALUES("15","18","EGN/07/15");
INSERT INTO matricules VALUES("16","3","EGN/08/15");
INSERT INTO matricules VALUES("17","4","ACC/08/15");
INSERT INTO matricules VALUES("18","5","ACC/09/15");
INSERT INTO matricules VALUES("19","2","G/01/15");
INSERT INTO matricules VALUES("20","6","ACC/010/15");





CREATE TABLE `otherincomes` (
  `inc_id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(12) DEFAULT NULL,
  `reason` text,
  `amount` varchar(50) DEFAULT NULL,
  `total` varchar(13) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `spender` varchar(23) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `time` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`inc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `otherspendings` (
  `day_id` int(11) NOT NULL,
  `quantity` int(12) DEFAULT NULL,
  `reason` text,
  `amount` varchar(50) DEFAULT NULL,
  `total` varchar(13) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `spender` varchar(23) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `time` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `results` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `matric` varchar(20) NOT NULL,
  `code` varchar(12) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `term` int(11) NOT NULL,
  `first` int(2) NOT NULL,
  `second` int(2) NOT NULL,
  `third` int(2) NOT NULL,
  `fourth` int(2) NOT NULL,
  `firth` int(2) NOT NULL,
  `ca` int(11) NOT NULL,
  `exams` int(2) NOT NULL,
  `ayear` varchar(12) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO results VALUES("1","","","","0","0","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO results VALUES("2","ACC/01/15","ACC100","ACCOUNTING","1","6","1","3","4","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO results VALUES("3","ACC/02/15","ACC100","ACCOUNTING","1","0","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO results VALUES("4","ACC/03/15","ACC100","ACCOUNTING","1","0","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO results VALUES("5","ACC/04/15","ACC100","ACCOUNTING","1","0","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO results VALUES("6","ACC/05/15","ACC100","ACCOUNTING","1","0","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO results VALUES("7","ACC/06/15","ACC100","ACCOUNTING","1","0","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO results VALUES("8","ACC/07/15","ACC100","ACCOUNTING","1","0","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");





CREATE TABLE `resultstwo` (
  `restwo_id` int(11) NOT NULL AUTO_INCREMENT,
  `matric` varchar(20) NOT NULL,
  `code` varchar(11) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `term` int(11) NOT NULL,
  `first` int(2) NOT NULL,
  `second` int(2) NOT NULL,
  `third` int(2) NOT NULL,
  `fourth` int(2) NOT NULL,
  `firth` int(2) NOT NULL,
  `ca` int(11) NOT NULL,
  `exams` int(2) NOT NULL,
  `ayear` varchar(12) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`restwo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO resultstwo VALUES("1","","","","0","0","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO resultstwo VALUES("2","ACC/01/15","ACC100","ACCOUNTING","6","1","1","3","4","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO resultstwo VALUES("3","ACC/02/15","ACC100","ACCOUNTING","0","1","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO resultstwo VALUES("4","ACC/03/15","ACC100","ACCOUNTING","0","1","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO resultstwo VALUES("5","ACC/04/15","ACC100","ACCOUNTING","0","1","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO resultstwo VALUES("6","ACC/05/15","ACC100","ACCOUNTING","0","1","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO resultstwo VALUES("7","ACC/06/15","ACC100","ACCOUNTING","0","1","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");
INSERT INTO resultstwo VALUES("8","ACC/07/15","ACC100","ACCOUNTING","0","1","0","0","0","0","0","0","2015/2016","2015-10-01 06:30:09");





CREATE TABLE `roll` (
  `roll_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `new` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL,
  `r12` varchar(30) NOT NULL,
  `r13` varchar(30) NOT NULL,
  PRIMARY KEY (`roll_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO roll VALUES("1","eba9f9494e3ac3639b0bd702c1182d21d997d01c","2016/ 09 /13","b89591202ec9eb6e97156aed8f953e9dfea3be1d","2","2016/ 09 /13","");





CREATE TABLE `students` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `stu_name` varchar(30) DEFAULT NULL,
  `ayear` varchar(30) DEFAULT NULL,
  `dor` varchar(30) DEFAULT NULL,
  `reg_date` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `install` varchar(15) NOT NULL,
  `status` varchar(6) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("1","male","Mbah Isaac","2015/2016","19-05-90","29-09-15","English","3 months","0","yes","1");
INSERT INTO students VALUES("2","female","Tanui The","2015/2016","19-11-96","29-09-15","German","6 months","0","yes","1");
INSERT INTO students VALUES("3","Male","Ngut Peter Che","2015/2016","19/11/2015","30-09-2015","ENGINEERING","New Student","5000","yes","1");
INSERT INTO students VALUES("4","Female","AGBOR ERIC FOMBE","2015/2016","19/10/2015","01-09-2015","ACCOUNTING","New Student","1000","yes","1");
INSERT INTO students VALUES("5","Female","Agbor Eric ","2015/2016","19/10/2015","08-10-2015","ACCOUNTING","New Student","0","yes","1");
INSERT INTO students VALUES("6","Male","Juliette Kendzengjjj","2015/2016","9/11/1990","08-10-2015","ACCOUNTING","New Student","","yes","1");





CREATE TABLE `thelast` (
  `roll` int(11) NOT NULL,
  `figu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO thelast VALUES("1","250");





CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `course` varchar(40) NOT NULL,
  `coded` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","EGN","1623c9954da61429fd841b7363526405","ENGINEERING","EGN");
INSERT INTO user VALUES("2","admin","f14029217ff5e7a50cdc7e70f686cf29","ENGINEERING","hhhhhh");





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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO users VALUES("1","c4ca4238a0b923820dcc509a6f75849b","","nishang","","1","539f84ce8596685929d4c24536bfd5eb566d5dc312b03e744","","","","","","2015-09-08","::1","2","5646","5","xji9cz3","1441682299");
INSERT INTO users VALUES("4","a87ff679a2f3e71d9181a67b7542122c","ETTA SUSAN","admin12","ETTA @yahoo.com","1","6ef51655864a156423a2e6aa6c46c9e954d7c556a5a185a8b","","","6788990990","","","2015-09-10","::1","2","2240","20","","");
INSERT INTO users VALUES("13","c51ce410c124a10e0db5e4b97fc2af39","Communication tools &amp;T Techniques","camadsupdate","iish@yahoo.com","1","e747e1871e6c59863fed40e43d7e6f99b78fb11aaa9204a83","","","88990000","","","2015-09-05","::1","0","5770","20","","");
INSERT INTO users VALUES("14","aab3238922bcc25a6f606eb525ffdc56","Functional English","MENG100","nemsamuel@yahoo.com","1","38d5ded499b2b40a8094650102afdf47ec0da67e7896a400b","","","88990000","","","2015-09-05","::1","2","7006","5","","");
INSERT INTO users VALUES("12","c20ad4d76fe97759aa27a0c99bff6710","MBINVNJO ETHELDREDA","MBINVNJO","nishang@yahoo.com","1","b407536143514f5971785b439ddcda2bc13f7fc9daed8f066","","","6788990990","","","2015-09-05","::1","0","5907","20","","");
INSERT INTO users VALUES("15","9bf31c7ff062936a96d3c8bd1f8f2ff3","biaka","biaka","admin@university.org","1","22dcfb90de906fe76aaceaf85e8b4de9cf0471b2334efc299","","","88990000","","","2015-09-15","::1","2","3260","5","","");
INSERT INTO users VALUES("16","c74d97b01eae257e44aa9d5bade97baf","MBINVNJO ETHELDREDA","records","admin12@yahoo.com","1","6de094c5f4d7a06d1a2aa14ba28fa70dc6eefec6f08641689","","","6788990990","","","2015-09-16","::1","2","1883","10","","");
INSERT INTO users VALUES("17","70efdf2ec9b086079795c442636b55fb","professionalism","bursar","admin12777@yahoo.com","1","587322617c28b9289498d49a6238168feed152304938e9302","","","88990000","","","2015-10-08","::1","2","9502","5","","");





CREATE TABLE `wiza` (
  `wiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `wiz1` varchar(30) NOT NULL,
  `wia2` varchar(20) NOT NULL,
  `wia3` varchar(20) NOT NULL,
  `wiz4` varchar(20) NOT NULL,
  `wiz5` varchar(20) NOT NULL,
  PRIMARY KEY (`wiz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO wiza VALUES("1","Cou","Course Code","CA/20","EXAM","INSGESAMT");
INSERT INTO wiza VALUES("3","Cours","","","","");



