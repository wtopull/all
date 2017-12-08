-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?12 �?08 �?11:34
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bg_item`
--

-- --------------------------------------------------------

--
-- 表的结构 `bg_bg`
--

CREATE TABLE IF NOT EXISTS `bg_bg` (
  `bg_id` int(11) NOT NULL AUTO_INCREMENT,
  `bg_thum` varchar(200) COLLATE utf8_bin NOT NULL,
  `bg_title` text COLLATE utf8_bin NOT NULL,
  `bg_content` text COLLATE utf8_bin NOT NULL,
  `bg_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bg_bg`
--

INSERT INTO `bg_bg` (`bg_id`, `bg_thum`, `bg_title`, `bg_content`, `bg_data`) VALUES
(1, 'uploads/15003682767.jpg', '域名对网络营销的催化作用', '<p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">与男士面试着装相比，女生的服装比较灵活，每位女生应准备一至两套较正规的套服，以备不时之需。女式套服的花样可谓层出不穷，每个人可根据自己的喜好来选择，随着女性择业的广泛多元化，职业女性的着装也成为一种艺术和学问，简单的职业套装已经不再是单一的选择，从色彩、款式的多元化，细微的饰物的搭配，鞋的选择等方面，让传统生动起来，活泼又不失庄重。尽可独树一帜，穿出自己的风格，突出各人的气质，强调个人的魅力。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal; text-align: center;"><img src="http://www.ujiuye.com/uploadfile/2017/0718/20170718044511511.jpg" style="font-size: 12px; padding: 0px; margin: 0px auto; list-style: none; border-width: initial; border-style: none;"/></p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;"><strong style="padding: 0px; margin: 0px auto; list-style: none; line-height: 32px;">女士面试着装参考的法则</strong></p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">针对不同背景的用人单位选择适合的套装，必须与准上班族的身份相符，要以内在素质取胜，先从严肃的服装入手。不管什么年龄，剪裁得体的西装套裙，色彩相宜的衬衫和半截裙使人显得稳重、自信、大方、干练，给人“信得过”的印象。裙子长度应在膝盖左右或以下，太短有失庄重。服装颜色以淡雅或同色系的搭配为宜，穿着应有职业女性的气息。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">虽然服装潮流应在首选之列，颜色鲜艳的服饰会使人显得活泼、有朝气，但T恤衫、迷你裙、牛仔裤、紧身裤、宽松服、高跟拖鞋等，虽然在街面上铺天盖地，也应列为面试的编外服装，以免给招考官留下太随便的印象。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">中高跟皮鞋使你步履坚定从容，带给你一分职业妇女的气质，很适合在求职面试时穿着。相比之下，穿高跟鞋显得步态不稳，穿平跟鞋显得步态拖拉;如穿中、高统靴子，裙摆下沿应盖住靴口，以保持形体垂直线条的流畅。同样，裙摆应盖过长统丝袜袜口;夏日最好不要穿露出脚趾的凉鞋，或光脚穿凉鞋，更不宜将脚趾甲涂抹成红色或其他颜色。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">穿裙装袜子很重要，丝袜以肉色为雅致。拉得不直和不正的丝袜缝，会给人很邋遢的感觉。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;"><strong style="padding: 0px; margin: 0px auto; list-style: none; line-height: 32px;">画龙点睛的装饰品</strong></p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">当今是一个追求和协美的时代，适当的搭配一些饰品无疑会使你的形象锦上添花，但搭配饰品也应讲求少而精，一条丝巾，一枚胸花，一条项链，就能恰到好处地体现你的气质和神韵关于面试着装礼仪常识礼仪大全。应避免佩戴过多、过于夸张或有碍工作的饰物，让饰品真正有画龙点睛之妙。否则，容易分散考官的注意力，有时也会给考官留下不成熟的印象。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">皮包大大方方背在肩上，不要过于精美，太珠光宝器，但也不要太破旧，有脏点。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;"><strong style="padding: 0px; margin: 0px auto; list-style: none; line-height: 32px;">仪表大方青春靓丽</strong></p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">女生可以适当地化点淡妆，使你更显亮丽。用薄而透明的粉底营造健康的肤色，用浅色口红增加自然美感，用棕色眉笔调整眉形，用睫毛膏让眼睛更加有神。但不能浓妆艳抹，过于妖娆，香气扑鼻，过分夸张，不符合大学生的形象与身份。越淡雅自然、不露痕迹越好，切记一定不要将清纯美掩盖掉。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">不管长发还是短发，一定洗的干净、梳的整齐，增添青春的活力。发型可根据衣服正确搭配，要善于利用视觉错觉来改变脸形，如脸型过长的人，可留较长的前刘海，并且尽量使两侧头发蓬松，这样长脸看起来不太明显;脖颈过短的人，则可选择干净利落的短发来拉长脖子的视觉长度;脸型太圆或者太方的人，一般不适合留齐耳的发型，也不适合中分头路，应该适当增加头顶的发量，使额头部分显得饱满，在视觉上减弱下半部分脸型的宽度;根据应聘的不同职业，发型也应有所差异。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">服装及饰品是求职者留给面试考官的第一印象，得体的穿着打扮能使其为你加分。自己也增加自信，在面试中发挥更好。要达到这个目的，需要研究着装风格，注意细节修饰。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">服装也要根据季节和地域来灵活掌握，比如北方的冬天要加上厚厚的外衣，而南方许多地方一年有大半时间要穿短袖，这就不一定刻意穿西装，主要就是干净整齐，庄重大方，显现出职业人的风度为好。</p><p style="font-size: 14px; font-family: SimSun; padding: 0px 0px 10px; margin-top: 0px; margin-bottom: 0px; list-style: none; color: rgb(102, 102, 102); line-height: 32px; text-indent: 28px; white-space: normal;">适当进行形象设计，朔造你的职业形象后再去面试 ，成功的概率会更大些。</p><p><br/></p>', '2017-12-08 08:01:05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
