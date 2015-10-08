/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : studentdb

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2015-10-06 07:20:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for studenttbl
-- ----------------------------
DROP TABLE IF EXISTS `studenttbl`;
CREATE TABLE `studenttbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) DEFAULT NULL,
  `major` varchar(20) DEFAULT NULL,
  `grade` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of studenttbl
-- ----------------------------
INSERT INTO `studenttbl` VALUES ('1', 'Moin', 'Science', 'A+');
INSERT INTO `studenttbl` VALUES ('2', 'Tanim', 'Commerce', 'B+');
INSERT INTO `studenttbl` VALUES ('3', 'Shajib', 'Arts', 'C+');
