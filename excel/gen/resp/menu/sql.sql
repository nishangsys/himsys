
-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent` int(9) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `name`, `parent`) VALUES
(1, 'Social Media', 0),
(2, 'Tech', 0),
(3, 'Business', 0),
(4, 'Lifestyle', 0),
(5, 'Facebook', 1),
(6, 'Google+', 1),
(7, 'Twitter', 1),
(8, 'LinkedIn', 1),
(9, 'PHP', 2),
(10, 'jQuery', 2),
(11, 'HTML5', 2),
(12, 'CSS3', 2),
(13, 'StartUps', 3),
(14, 'Marketing', 3),
(15, 'Health and Fitness', 4),
(16, 'Travel', 4);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `pid` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cid` int(9) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `title`, `link`, `image`, `cid`) VALUES
(1, 'Facebook Style Location Sharing Map with Google API', 'http://w3lessons.info/2013/12/10/facebook-style-location-sharing-map-with-google-api/', 'http://w3lessons.info/wp-content/uploads/2013/12/Location-Sharing-Map-332x134.png', 1),
(2, 'Facebook Style Hashtag System with PHP, MYSQL & jQuery', 'http://w3lessons.info/2013/11/18/facebook-style-hashtag-system-with-php-mysql-jquery/', 'http://w3lessons.info/wp-content/uploads/2013/11/Facebook-like-Hashtag-System-with-PHP-332x138.gif', 1);


