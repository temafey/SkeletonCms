--
-- Table structure for table `user_users`
--

CREATE TABLE IF NOT EXISTS `user_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(72) NOT NULL,
  `name` varchar(200) NOT NULL,
  `core_acl_role_id` smallint(1) NOT NULL,
  `status` smallint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_users`
--

INSERT INTO `user_users` (`id`, `email`, `password`, `name`, `core_acl_role_id`, `status`) VALUES
(1, 'test@test.com', '$2a$08$IJIINSV1ubqkQChbISarvesC3Mo4bkfrPYKS4GUIsAZCdHuWs3jV2', 'Test', 1, 1);


INSERT INTO `core_mvc_module` (`id`, `name`, `status`) VALUES
(4, 'user', 'active');

INSERT INTO `core_mvc_controller` (`id`, `module_id`, `name`, `status`) VALUES
(12, 4, 'users', 'active');

INSERT INTO `core_menu_item` (`id`, `menu_id`, `controller_id`, `parent_id`, `alias`, `title`, `description`, `image`, `position`, `status`) VALUES
(16, 1, '', 1, '', 'User', '', '', 4, 'active'),
(17, 1, 12, 16, '', 'Users', '', '', 1, 'active');