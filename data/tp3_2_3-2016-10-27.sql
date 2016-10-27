-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-27 16:44:09
-- 服务器版本： 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp3.2.3`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_access`
--

CREATE TABLE `tp_access` (
  `role_id` smallint(6) UNSIGNED NOT NULL,
  `node_id` smallint(6) UNSIGNED NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_access`
--

INSERT INTO `tp_access` (`role_id`, `node_id`, `level`, `module`) VALUES
(2, 9, 3, NULL),
(1, 8, 2, NULL),
(1, 14, 3, NULL),
(1, 13, 3, NULL),
(2, 8, 2, NULL),
(1, 12, 2, NULL),
(1, 1, 1, NULL),
(2, 1, 1, NULL),
(1, 9, 3, NULL),
(1, 6, 2, NULL),
(1, 11, 3, NULL),
(1, 10, 3, NULL),
(1, 4, 2, NULL),
(1, 3, 2, NULL),
(1, 5, 3, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tp_admin_user`
--

CREATE TABLE `tp_admin_user` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'UID',
  `user_type` int(11) NOT NULL DEFAULT '1' COMMENT '用户类型',
  `nickname` varchar(63) DEFAULT NULL COMMENT '昵称',
  `username` varchar(31) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(63) NOT NULL DEFAULT '' COMMENT '密码',
  `email` varchar(63) NOT NULL DEFAULT '' COMMENT '邮箱',
  `email_bind` tinyint(1) NOT NULL DEFAULT '0' COMMENT '邮箱验证',
  `mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `mobile_bind` tinyint(1) NOT NULL DEFAULT '0' COMMENT '邮箱验证',
  `avatar` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '头像',
  `score` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '积分',
  `money` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `reg_type` varchar(50) NOT NULL DEFAULT '' COMMENT '注册方式',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户账号表';

--
-- 转存表中的数据 `tp_admin_user`
--

INSERT INTO `tp_admin_user` (`id`, `user_type`, `nickname`, `username`, `password`, `email`, `email_bind`, `mobile`, `mobile_bind`, `avatar`, `score`, `money`, `reg_ip`, `reg_type`, `create_time`, `update_time`, `status`) VALUES
(3, 1, 'henry', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 0, '', 0, 0, 0, '0.00', 1270, '', '2016-10-24 13:54:16', '0000-00-00 00:00:00', 1),
(4, 1, 'henry', 'henry', '027e4180beedb29744413a7ea6b84a42', 'lin_hailing@sina.com', 1, '18721186620', 1, 0, 0, '0.00', 1270, '1', '2016-10-26 17:34:14', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_node`
--

CREATE TABLE `tp_node` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) UNSIGNED DEFAULT NULL,
  `pid` smallint(6) UNSIGNED NOT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_node`
--

INSERT INTO `tp_node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(1, 'Admin', '后台权限管理', 1, NULL, 1, 0, 1),
(2, 'Home', '前段权限管理', 1, NULL, 1, 0, 1),
(3, 'Config', '后台配置', 1, NULL, 1, 1, 2),
(4, 'Nav', '导航管理', 1, NULL, 1, 1, 2),
(5, 'group', '参数配置', 1, NULL, 1, 3, 3),
(6, 'Rbac', 'Rbac管理', 1, NULL, 1, 1, 2),
(8, 'Index', '首页管理', 1, NULL, 1, 1, 2),
(9, 'index', '显示首页', 1, NULL, 1, 8, 3),
(10, 'role', '角色管理', 1, NULL, 1, 6, 3),
(11, 'node', '节点管理', 1, NULL, 1, 6, 3),
(12, 'Access', '权限管理', 1, NULL, 1, 1, 2),
(13, 'index', '显示管理员管理', 1, NULL, 1, 12, 3),
(14, 'addAccessUser', '添加用户组管理', 1, NULL, 1, 12, 3);

-- --------------------------------------------------------

--
-- 表的结构 `tp_role`
--

CREATE TABLE `tp_role` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) UNSIGNED DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_role`
--

INSERT INTO `tp_role` (`id`, `pid`, `status`, `name`, `remark`) VALUES
(1, 0, 1, '管理员', '普通管理员'),
(2, 0, 1, '编辑', '新闻编辑者');

-- --------------------------------------------------------

--
-- 表的结构 `tp_role_user`
--

CREATE TABLE `tp_role_user` (
  `role_id` mediumint(9) UNSIGNED DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_role_user`
--

INSERT INTO `tp_role_user` (`role_id`, `user_id`) VALUES
(1, '4'),
(2, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_access`
--
ALTER TABLE `tp_access`
  ADD KEY `groupId` (`role_id`),
  ADD KEY `nodeId` (`node_id`);

--
-- Indexes for table `tp_admin_user`
--
ALTER TABLE `tp_admin_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tp_node`
--
ALTER TABLE `tp_node`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`),
  ADD KEY `pid` (`pid`),
  ADD KEY `status` (`status`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `tp_role`
--
ALTER TABLE `tp_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `tp_role_user`
--
ALTER TABLE `tp_role_user`
  ADD KEY `group_id` (`role_id`),
  ADD KEY `user_id` (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tp_admin_user`
--
ALTER TABLE `tp_admin_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'UID', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `tp_node`
--
ALTER TABLE `tp_node`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- 使用表AUTO_INCREMENT `tp_role`
--
ALTER TABLE `tp_role`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
