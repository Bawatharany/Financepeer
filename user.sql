--  
 -- Table structure for table `user`  
 --  
 CREATE TABLE IF NOT EXISTS `tbl_user` (  
  `userId` int(11) NOT NULL AUTO_INCREMENT,  
  `id` varchar(50) NOT NULL,  
  `title` varchar(10) NOT NULL,  
  `body` varchar(30) NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;  
 --  
 -- Dumping data for table `tbl_user`  
 --