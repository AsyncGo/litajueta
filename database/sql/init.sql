use litajueta;

create table if not exists pusar
(
  `id` bigint(20) auto_increment comment '自动编码',
  `name` varchar(128) not null comment '假以姓名',
  `birthday` varchar(128) not null comment '生日',
  primary key(id)
)engine=innodb default charset=utf8 comment='众生';