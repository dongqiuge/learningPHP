<?php

// 服务器配置一般指的是 Linux
// web 服务器配置一般指的是 Nginx、Apache 等

// MySQL 基础练习
// 存储引擎，InnoDB、MyISAM，区别，适用场景
// Innodb 支持事务，MyISAM 不支持事务, InnoDB 支持外键，MyISAM 不支持外键，InnoDB 支持行级锁，MyISAM 支持表级锁
// 银行转账这种场景，用 InnoDB，因为要保证事务的原子性
// A 转给 B 100 元，A 减少 100 元，B 增加 100 元，要保证这两个操作要么同时成功，要么同时失败
// 从 MySQL 5.5 开始，InnoDB 是默认的存储引擎
// 没有特殊需求，一般使用 InnoDB 就可以了
// varchar 和 char 的区别, varchar 是变长字符串，char 是定长字符串，
// 在创建表的时候 name 等字段长度不确定的时候用 varchar，长度确定的时候用 char 例如手机号码
// 创建数据表的时候，字段的长度要合理，不要太长，不要太短，命名要规范，不要用中文或者是中文的拼音不被大众所知道的简写，不要用保留字例如 order 等
// 索引，主键索引、唯一索引、普通索引，区别，适用场景
// 主键索引，唯一索引，普通索引，主键索引是唯一的，唯一索引是唯一的，普通索引不是唯一的
// 数据库可视化工具 Navicat、MySQL Workbench，在 MacOS 上可以使用 Sequel Pro、Sequel Ace
// 在写 SQL 查询的时候，如果只需要查询某几个字段，不要用 select *，要用 select 字段1, 字段2，这样可以减少数据传输的时间
// *** 在执行 UPDATE 和 DELETE 语句的时候，一定要加上 WHERE 条件，否则会把整个表的数据都更新或者删除掉
// WHERE 条件中使用 LIKE 关键字查询的时候不推荐使用 %xxx%，因为会导致索引失效，可以使用 xxx% 或者 %xxx
// 在写 SQL 语句的时候给字段起别名的时候不要使用 MySQL 的保留字，例如 order、count 等

// 在 windows 中按住 control + shift + 左键/右键 可以快速选中一段文字，向左全选或者向右全选
// 在 windows 中按住 control + 左键/右键 可以快速移动光标，到行首或者行尾
// 在 windows 中按住 shift + alt + 左键/右键 可以快速选中一行文字，按照单词选中
// 在 windows 中按住 alt + 左键/右键 可以快速移动光标，按照单词移动

// Using the subquery functionality available to the select and addSelect methods, we can select all of the destinations and the name of the flight that most recently arrived at that destination using a single query

// 了解一下 Nginx 的配置
// Nginx 是一个高性能的 HTTP 和反向代理服务器，也是一个 IMAP/POP3/SMTP 代理服务器
// Nginx 是一个开源的软件，可以免费使用
// Nginx 是一个轻量级的服务器，占用资源少，性能好，支持高并发
// Nginx 的配置文件是 nginx.conf，一般在 /etc/nginx/nginx.conf，配置文件的语法是 nginx 的配置语法，配置文件的语法是由指令和指令块构成的

// 了解 Laravel 框架
// migration 迁移