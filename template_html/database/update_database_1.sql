ALTER TABLE `product` ADD `created_at` DATETIME NOT NULL AFTER `status`, ADD `modified_at` DATETIME NOT NULL AFTER `created_at`, ADD `deleted_at` DATETIME NOT NULL AFTER `modified_at`;

INSERT INTO `user` (`id`, `username`, `password`, `name`, `status`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad', 'TuanPham', 1, '2017-08-21 00:00:00', '2017-08-21 00:00:00', '0000-00-00 00:00:00');