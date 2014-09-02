-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 09 月 02 日 06:01
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `reply_to` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `title`, `content`, `reply_to`) VALUES
(1, 7, 'Test', 'test', 0),
(2, 7, 'reply functin test', 'this is some content,for the test.', 1),
(3, 6, 'the 1st comment', 'this is the 1st comment.', 0),
(4, 6, 'this is comment reply test', 'and some word, yeah ,yeah, yeah, yeah...', 3);

-- --------------------------------------------------------

--
-- 表的结构 `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `entries`
--

INSERT INTO `entries` (`id`, `title`, `body`, `author_id`) VALUES
(6, 'ewfiaej waege wegaoi', '<p>come on ,change, damn it.test for redirect...test for the ckeditor...</p>\r\n', 2),
(7, 'fgfgva', 'gaerg earger erag er erhe er ', 2),
(8, 'Some title goes here', 'so that is the content.', 2),
(9, 'this is title', 'this is the content of the post.', 2);

-- --------------------------------------------------------

--
-- 表的结构 `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `passwd` varchar(32) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `members`
--

INSERT INTO `members` (`id`, `name`, `passwd`) VALUES
(1, 'admin', '123456'),
(2, 'user1', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
