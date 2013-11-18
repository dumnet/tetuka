# SQL Manager 2005 for MySQL 3.6.5.8
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : jatayu


SET FOREIGN_KEY_CHECKS=0;

#
# Structure for the `app_assoc` table : 
#

DROP TABLE IF EXISTS `bitauth_assoc`;
DROP TABLE IF EXISTS `bitauth_groups`;
DROP TABLE IF EXISTS `bitauth_logins`;
DROP TABLE IF EXISTS `bitauth_userdata`;
DROP TABLE IF EXISTS `bitauth_users`;

DROP TABLE IF EXISTS `app_assoc`;

CREATE TABLE `app_assoc` (
  `assoc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`assoc_id`),
  KEY `user_id` (`user_id`,`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Structure for the `app_groups` table : 
#

DROP TABLE IF EXISTS `app_groups`;

CREATE TABLE `app_groups` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(48) NOT NULL,
  `description` text NOT NULL,
  `roles` text NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Structure for the `app_logins` table : 
#

DROP TABLE IF EXISTS `app_logins`;

CREATE TABLE `app_logins` (
  `login_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  `success` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`login_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Structure for the `app_menus` table : 
#

DROP TABLE IF EXISTS `app_menus`;

CREATE TABLE `app_menus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_parent` int(11) DEFAULT NULL,
  `menu_type` varchar(20) DEFAULT 'FRONT',
  `menu_caption` varchar(50) DEFAULT NULL,
  `menu_class` varchar(50) DEFAULT NULL,
  `menu_module_id` int(11) DEFAULT NULL,
  `menu_active` int(1) DEFAULT '1',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for the `app_modules` table : 
#

DROP TABLE IF EXISTS `app_modules`;

CREATE TABLE `app_modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_type` varchar(20) DEFAULT 'FRONT',
  `module_name` varchar(50) DEFAULT NULL,
  `module_version` varchar(20) DEFAULT NULL,
  `module_author` varchar(50) DEFAULT NULL,
  `module_path` varchar(50) DEFAULT NULL,
  `module_repo` varchar(200) DEFAULT NULL,
  `module_active` int(1) DEFAULT '1',
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Structure for the `app_themes` table : 
#

DROP TABLE IF EXISTS `app_themes`;

CREATE TABLE `app_themes` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_type` varchar(20) DEFAULT 'FRONT',
  `theme_name` varchar(50) DEFAULT NULL,
  `theme_version` varchar(20) NOT NULL,
  `theme_author` varchar(50) DEFAULT NULL,
  `theme_path` varchar(100) DEFAULT NULL,
  `theme_repo` varchar(200) DEFAULT NULL,
  `theme_active` int(1) DEFAULT '1',
  PRIMARY KEY (`theme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Structure for the `app_userdata` table : 
#

DROP TABLE IF EXISTS `app_userdata`;

CREATE TABLE `app_userdata` (
  `userdata_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `email` varchar(254) NOT NULL,
  PRIMARY KEY (`userdata_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Structure for the `app_users` table : 
#

DROP TABLE IF EXISTS `app_users`;

CREATE TABLE `app_users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(60) NOT NULL,
  `password_last_set` datetime NOT NULL,
  `password_never_expires` tinyint(1) NOT NULL DEFAULT '0',
  `remember_me` varchar(40) NOT NULL,
  `activation_code` varchar(40) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `forgot_code` varchar(40) NOT NULL,
  `forgot_generated` datetime NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `last_login` datetime NOT NULL,
  `last_login_ip` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for the `app_assoc` table  (LIMIT 0,500)
#

INSERT INTO `app_assoc` (`assoc_id`, `user_id`, `group_id`) VALUES 
  (1,1,1);

COMMIT;

#
# Data for the `app_groups` table  (LIMIT 0,500)
#

INSERT INTO `app_groups` (`group_id`, `name`, `description`, `roles`) VALUES 
  (1,'Administrators','Administrators (Full Access)','1'),
  (2,'Users','Default User Group','0');

COMMIT;

#
# Data for the `app_logins` table  (LIMIT 0,500)
#

INSERT INTO `app_logins` (`login_id`, `ip_address`, `user_id`, `time`, `success`) VALUES 
  (1,2130706433,1,'2013-11-15 23:39:21',0),
  (2,2130706433,1,'2013-11-15 23:39:23',1),
  (3,2130706433,1,'2013-11-17 19:30:17',0),
  (4,2130706433,1,'2013-11-17 19:30:22',1);

COMMIT;

#
# Data for the `app_modules` table  (LIMIT 0,500)
#

INSERT INTO `app_modules` (`module_id`, `module_type`, `module_name`, `module_version`, `module_author`, `module_path`, `module_repo`, `module_active`) VALUES 
  (1,'FRONT','Home','1.0.0','Devel Team','modules_front/home',NULL,1);

COMMIT;

#
# Data for the `app_themes` table  (LIMIT 0,500)
#

INSERT INTO `app_themes` (`theme_id`, `theme_type`, `theme_name`, `theme_version`, `theme_author`, `theme_path`, `theme_repo`, `theme_active`) VALUES 
  (1,'FRONT','Default Theme','1.0.0','Devel Team','default',NULL,1),
  (2,'FRONT','Skeleton Theme','1.0.0','Devel Team','skeleton',NULL,1),
  (3,'ADMIN','SBAdmin Theme','1.0.0','Devel Team','sb-admin',NULL,1),
  (4,'FRONT','Tetuka Theme','1.0.0','Devel Team','tetuka',NULL,1),
  (5,'FRONT','Bootplus','1.0.0','Devel Team','bootplus',NULL,1);

COMMIT;

#
# Data for the `app_userdata` table  (LIMIT 0,500)
#

INSERT INTO `app_userdata` (`userdata_id`, `user_id`, `fullname`, `email`) VALUES 
  (1,1,'Administrator','admin@admin.com');

COMMIT;

#
# Data for the `app_users` table  (LIMIT 0,500)
#

INSERT INTO `app_users` (`user_id`, `username`, `password`, `password_last_set`, `password_never_expires`, `remember_me`, `activation_code`, `active`, `forgot_code`, `forgot_generated`, `enabled`, `last_login`, `last_login_ip`) VALUES 
  (1,'admin','$2a$08$560JEYl2Np/7/6RLc/mq/ecnumuBXig3e.pHh1lnH1pgpk94sTZhu','2013-11-15 23:39:10',0,'','',1,'','0000-00-00',1,'2013-11-17 19:30:22',2130706433);

COMMIT;

