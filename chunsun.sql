SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+08:00";


CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL,
  `label` varchar(100) DEFAULT NULL,
  `cover` varchar(500) DEFAULT NULL,
  `pname` varchar(500) DEFAULT NULL,
  `purl` varchar(500) DEFAULT NULL,
  `pinfo` varchar(500) DEFAULT NULL,
  `pv` varchar(100) DEFAULT NULL,
  `pdesc` varchar(5000) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;


INSERT INTO `cases` (`id`, `label`, `cover`, `pname`, `purl`, `pinfo`, `pv`, `pdesc`) VALUES
(44, 'tag4', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试项目9', 'http://localhost/', '-', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(42, 'tag1', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试项目7', 'http://localhost/', '测试项目', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(43, 'tag3', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试项目8', 'http://localhost/', '测试项目', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(45, 'tag5', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试项目10', 'http://localhost', '-', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(46, 'tag4', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试11', '-', '-', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(47, 'tag3', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试12', '-', '-', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(48, 'tag5', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试13', '-', '-', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(49, 'tag3', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试14', '-', '-', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(50, 'tag3', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试15', '-', '-', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(51, 'tag3', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试16', '-', '-', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(52, 'tag3', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试17', '-', '-', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>'),
(40, 'tag2', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试项目5', 'http://localhost/', '测试项目', '-', '<p>\n	文字啊文字，<span style="color:#FF9900;">这里其实就是文字</span>，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！\n</p>\n<p>\n	<br />\n</p>\n<p>\n	fgdfgsdgsdgsdfg\n</p>'),
(41, 'tag1', '/code/workbak/lt/git/anybody-post/upload/image/zt-yinji.jpg', '测试项目6', 'http://localhost/', '测试项目', '-', '<span style="font-family:simsun;font-size:16px;line-height:normal;">文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……文字啊文字，这里其实就是文字，想要更多的文字，那就开始复制……假如这里的文字内容是很长很长的话又没有标点符号的话那将会是怎么样的效果呢。结束！</span>');


CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `label` varchar(500) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO `category` (`id`, `category`, `label`) VALUES
(2, 'tag1', 'tag1'),
(9, 'tag2', 'tag2'),
(12, 'tag3', 'tag3'),
(14, 'tag4', 'tag4'),
(15, 'tag5', 'tag5');

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `passwd` varchar(500) DEFAULT NULL,
  `logtime` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO `users` (`id`, `name`, `passwd`, `logtime`) VALUES
(1, 'admin', '1', '2015-11-05 11:55:51');

ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;

ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;