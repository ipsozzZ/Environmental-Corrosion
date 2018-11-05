# 用户
create table user (
  id int PRIMARY KEY not null auto_increment,
  `name` VARCHAR(16) not null unique comment '用户名',
  nickname VARCHAR(16) not null unique comment '昵称',
  pass VARCHAR(32) not null comment '密码',
  phone VARCHAR(12) DEFAULT '' comment '手机号',
  avatar VARCHAR(300) comment '头像'
);
create unique index user_id_uindex on user (id);
ALTER table user comment = '用户表';

# 孩子
create table baby (
  id int PRIMARY KEY not null auto_increment,
  `name` VARCHAR(16) not null unique comment '用户名',
  pass VARCHAR(32) not null comment '密码',
  phone VARCHAR(12) DEFAULT '' comment '手机号',
  activite int DEFAULT 0 comment '活跃度',
  getlike int DEFAULT 0 comment '获赞',
  saying text comment '一句话介绍自己',
  gender int DEFAULT 1 comment '性别 男1 女0',
  avatar VARCHAR(300) comment '头像'
);
create unique index baby_id_uindex on baby (id);
ALTER table baby comment = '孩子表';

# token
create table token (
  id int PRIMARY key not null auto_increment,
  token VARCHAR(32) not null,
  expire timestamp default current_timestamp,
  uid int NOT NULL COMMENT '用户id'
);
create unique index token_id_uindex on token (id);
alter table token comment='token表';

# 课程
create table subject (
  id int PRIMARY KEY NOT NULL auto_increment,
  cover VARCHAR(100) not NULL comment '封面'
);
create unique index subject_id_uindex on subject (id);
alter table subject comment ='课程';

# 分类
create table cate (
  id int PRIMARY KEY NOT NULL auto_increment,
  name VARCHAR(20) not NULL
);
create unique index cate_id_uindex on cate (id);
alter table cate comment='课程分类';

# 一节课
create table lesson (
  id int PRIMARY KEY NOT NULL auto_increment,
  name VARCHAR(30) not null comment '课名',
  sid int not null comment '所属课程id'
);
create unique index lesson_id_uindex on lesson (id);
alter table lesson comment='课单位';

# 学习计划
create table plan (
  id int PRIMARY KEY NOT null auto_increment,
  deadline TIMESTAMP,
  sid int comment '课程ID',
  lids VARCHAR(100) comment '该时间内计划的所有课id'
);
create UNIQUE INDEX plan_id_uindex on plan (id);

# 学习心情
create table mood (
  id int PRIMARY KEY NOT NULL auto_increment,
  ctime TIMESTAMP not NULL DEFAULT current_timestamp,
  content VARCHAR(200) not null,
  likes int DEFAULT 0
);
create unique index mood_id_uindex on mood (id);
alter table mood comment='学习心情';




/*********          分割线             ***********/



# 用户购买表
create table userbuy (
  id int PRIMARY KEY NOT NULL auto_increment,
  uid int not null comment '用户id',
  sid int not null comment '课程id',
  btime TIMESTAMP not null default current_timestamp
);
create unique index userbuy_id_uindex on userbuy (id);
alter table userbuy comment='用户购买表';

# 课程历史
create table trainhis (
  id int PRIMARY KEY not null auto_increment,
  uid int not null comment '用户id',
  sids VARCHAR(10) DEFAULT '' comment '课程id，3个，逗号分割'
);
create unique index trainhis_id_uindex on trainhis (id);
alter table trainhis comment='课程历史';

# 成绩
create table score (
  id int PRIMARY KEY not null auto_increment,
  uid int not null comment '用户id',
  iq int not null default 2 comment '智商',
  cq int not null default 2 comment '创意商',
  eq int not null default 2 comment '情商',
  sq int not null default 2 comment '快乐商',
  hq int not null default 2 comment '健康商'
);
create unique index score_id_uindex on score (id);
alter table score comment = '成绩';

#证书
create table diploma (
  id int PRIMARY KEY not null auto_increment,
  uid int not NULL comment '用户id',
  img VARCHAR(100) not null comment '证书图片地址'
);
create unique index diploma_id_uindex on diploma (id);
alter table diploma comment='证书';

# 动态
create table activity (
  id int PRIMARY key not null auto_increment,
  uid int not NULL comment '用户id',
  content VARCHAR(100),
  ctime timestamp default current_timestamp
);
create unique index activity_id_uindex on activity (id);
alter table activity comment='动态';

# 管理员
create table admin (
  id int PRIMARY key not null auto_increment,
  name VARCHAR(16) not null comment '管理员名',
  pass VARCHAR(32) not null comment '管理员密码',
  lltime timestamp comment '最后一次登录时间'
)
create unique index token_id_uindex on token (id);
alter table token comment='管理员表';

#验证码
create table disney.msg
(
  id    int auto_increment,
  code  varchar(6)  not null,
  phone varchar(12) not null,
  constraint msg_id_uindex
  unique (id)
);

alter table disney.msg
  add primary key (id);

