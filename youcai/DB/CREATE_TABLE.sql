-- 1.管理员表
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `username` varchar(32) NOT NULL COMMENT '用户名',
    `password` char(32) NOT NULL COMMENT '密码',
    `nickname` varchar(32) NOT NULL DEFAULT '' COMMENT '昵称',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
    `is_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除 0-否 1-是',
    PRIMARY KEY (`id`),
    UNIQUE KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT '管理员表';

-- 2.系统设置表
DROP TABLE IF EXISTS `tb_setting`;
CREATE TABLE `tb_setting` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `meta_key` varchar(32) NOT NULL COMMENT '键名',
    `meta_value` text COMMENT '键值',
    `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
    `is_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除 0-否 1-是',
    PRIMARY KEY (`id`),
    UNIQUE KEY (`meta_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT '系统设置表';

-- 3.产品加工流程表
DROP TABLE IF EXISTS `tb_product_process`;
CREATE TABLE `tb_product_process` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
    `is_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除 0-否 1-是',
    PRIMARY KEY (`id`),
    UNIQUE KEY (`meta_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT '产品加工流程表';

-- 4.团队成员
DROP TABLE IF EXISTS `tb_team`;
CREATE TABLE `tb_team` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(64) NOT NULL DEFAULT '' COMMENT '姓名',
    `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
    `position` varchar(64) NOT NULL DEFAULT '' COMMENT '职位',
    `profile` varchar(255) NOT NULL DEFAULT '' COMMENT '个人简介',
    `display` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否展示 0-否 1-是',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
    `is_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除 0-否 1-是',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT '团队成员';