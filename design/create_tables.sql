create table about
(
  id      int  not null,
  `desc`  text null
  comment '平台简介',
  pro     text null
  comment '平台专家',
  example text null
  comment '应用案例',
  unit    text not null
  comment '组织机构',
  constraint about_id_uindex
  unique (id)
)
  comment '平台介绍';

create table acate
(
  id   int auto_increment,
  name varchar(20) not null,
  constraint acate_id_uindex
  unique (id)
)
  comment '文章分类';

alter table acate
  add primary key (id);

create table admin
(
  id     int auto_increment
    primary key,
  name   varchar(16)                         not null
  comment '管理员名',
  pass   varchar(32)                         not null
  comment '管理员密码',
  lltime timestamp default CURRENT_TIMESTAMP not null
  on update CURRENT_TIMESTAMP
  comment '最后一次登录时间'
);

create table article
(
  id      int auto_increment,
  ctime   timestamp default CURRENT_TIMESTAMP not null,
  authors varchar(100)                        not null,
  content text                                null,
  src     varchar(100)                        not null,
  viewer  int                                 not null,
  title   varchar(100)                        not null,
  cover   varchar(200)                        not null,
  cid     int                                 not null,
  constraint article_id_uindex
  unique (id)
)
  comment '文章表';

alter table article
  add primary key (id);

create table bdata
(
  id   int auto_increment,
  name varchar(50) not null,
  cid  int         not null
  comment 'bdcate的id',
  constraint bdata_id_uindex
  unique (id)
)
  comment '基础数据';

alter table bdata
  add primary key (id);

create table bdcate
(
  id   int auto_increment,
  name varchar(10)                                                not null,
  icon varchar(100) default '/static/index/custom/images/a50.png' not null
  comment '图标',
  constraint bdcate_id_uindex
  unique (id)
)
  comment '基础数据分类';

alter table bdcate
  add primary key (id);

create table bdsrc
(
  id      int auto_increment,
  content text        not null
  comment '数据内容',
  search  varchar(50) not null
  comment '检索值',
  bdid    int         not null
  comment 'bdata 的id',
  constraint bdate_id_uindex
  unique (id)
)
  comment '基础数据';

alter table bdsrc
  add primary key (id);

create table carousel
(
  id     int auto_increment,
  img    varchar(200) not null
  comment '图片地址',
  linkto varchar(200) not null
  comment '链接地址',
  constraint carousel_id_uindex
  unique (id)
)
  comment '首页幻灯片';

alter table carousel
  add primary key (id);

create table data
(
  id       int auto_increment,
  title    varchar(20)                         not null
  comment '标题',
  position varchar(10)                         not null
  comment '实验地址',
  cycle    int                                 not null
  comment '实验周期 月',
  cid      int                                 not null
  comment '数据分类id 关联indoordata 与wilddata',
  ctime    timestamp default CURRENT_TIMESTAMP not null
  on update CURRENT_TIMESTAMP,
  viewer   int                                 not null,
  content  text                                not null,
  type     int                                 not null
  comment '室内1 室外2 数据',
  mname    varchar(30)                         not null
  comment '材料名称',
  collect  int default '0'                     not null,
  download int default '0'                     not null,
  constraint data_id_uindex
  unique (id)
)
  comment '野外/室内数据';

alter table data
  add primary key (id);

create table dcate
(
  id     int auto_increment,
  name   varchar(20)     not null,
  parent int             null,
  level  int default '1' not null,
  type   int             not null
  comment '室内1 室外2',
  constraint cate_id_uindex
  unique (id)
)
  comment '室内/野外数据分类';

alter table dcate
  add primary key (id);

create table focus
(
  id  int auto_increment,
  aid int not null
  comment '文章id',
  constraint focus_id_uindex
  unique (id)
)
  comment '科技焦点';

alter table focus
  add primary key (id);

create table friends
(
  id     int auto_increment,
  name   varchar(20)  not null,
  linkto varchar(200) not null,
  constraint freends_id_uindex
  unique (id)
)
  comment '友情链接表';

alter table friends
  add primary key (id);

create table indoordata
(
  id   int auto_increment,
  name varchar(100) not null,
  cid  int          not null
  comment '所属分类id',
  constraint indoordata_id_uindex
  unique (id)
)
  comment '室内数据';

alter table indoordata
  add primary key (id);

create table msg
(
  id    int auto_increment,
  code  varchar(6)  not null,
  phone varchar(12) not null,
  constraint msg_id_uindex
  unique (id)
);

alter table msg
  add primary key (id);

create table nav
(
  id       int auto_increment,
  name     varchar(12)     not null
  comment '名字',
  linkto   varchar(100)    not null
  comment '链接到',
  priority int default '1' not null
  comment '排序优先级',
  constraint nav_id_uindex
  unique (id)
)
  comment '导航栏项目';

alter table nav
  add primary key (id);

create table scate
(
  id     int auto_increment,
  name   varchar(20)        not null,
  parent int                null
  comment '父id',
  level  int(1) default '1' not null
  comment '分类级别 1 2 3',
  constraint scate_id_uindex
  unique (id)
)
  comment '标准分类';

alter table scate
  add primary key (id);

create table `select`
(
  id  int auto_increment,
  aid int not null,
  constraint selected_id_uindex
  unique (id)
)
  comment '每周精选';

alter table `select`
  add primary key (id);

create table site
(
  id          int auto_increment,
  title       varchar(20)  not null
  comment '标题',
  vicetitle   varchar(100) not null
  comment '副标题',
  description varchar(100) not null
  comment '描述',
  vicedesc    varchar(200) not null
  comment '副描述',
  constraint site_id_uindex
  unique (id)
)
  comment '站点设置';

alter table site
  add primary key (id);

create table slist
(
  id         int auto_increment
  comment '序号',
  num        varchar(50)                         not null
  comment '标准编号',
  name       varchar(100)                        not null
  comment '标准名称',
  impletime  timestamp default CURRENT_TIMESTAMP not null
  on update CURRENT_TIMESTAMP,
  department varchar(100) default ''             null
  comment '发布单位',
  pdf        varchar(200) default ''             not null
  comment 'pdf地址',
  sid        int default '1'                     not null
  comment '所属标准id',
  constraint standard_id_uindex
  unique (id)
)
  comment '标准规范条目';

alter table slist
  add primary key (id);

create table standard
(
  id   int auto_increment,
  name varchar(100) not null,
  cid  int          not null
  comment '分类id',
  constraint standard_id_uindex
  unique (id)
)
  comment '标准表';

alter table standard
  add primary key (id);

create table token
(
  id       int auto_increment,
  token    varchar(32)                         not null,
  expire   timestamp default CURRENT_TIMESTAMP not null,
  uid      int                                 not null
  comment '用户id',
  identity int                                 not null
  comment '1 孩子
2 家长
3 管理员',
  constraint token_id_uindex
  unique (id)
)
  comment 'token表';

alter table token
  add primary key (id);

create table ucollect
(
  id   int auto_increment,
  uid  int    not null
  comment '用户id',
  did  int    not null
  comment '数据id',
  type int(1) not null
  comment '数据类型 1室内 2野外',
  constraint usecollect_id_uindex
  unique (id)
)
  comment '用户收藏表';

alter table ucollect
  add primary key (id);

create table udownload
(
  id   int auto_increment,
  uid  int    not null
  comment '用户id',
  did  int    not null
  comment '数据id',
  type int(1) not null
  comment '数据类型 1室内 2野外',
  constraint udownload_id_uindex
  unique (id)
)
  comment '用户下载表';

alter table udownload
  add primary key (id);

create table user
(
  id        int auto_increment,
  name      varchar(16)                                                                   not null
  comment '用户名',
  pass      varchar(32)                                                                   not null
  comment '密码',
  phone     varchar(12) default ''                                                        null
  comment '手机号',
  gender    int default '1'                                                               null
  comment '性别 男1 女0',
  avatar    varchar(300) default '/uploads/20181031/5aff028e502416a22cab57304c3fee7f.jpg' not null
  comment '头像地址',
  realname  varchar(10)                                                                   null
  comment '姓名',
  education varchar(20)                                                                   null
  comment '学历',
  job       varchar(20)                                                                   null
  comment '职务',
  email     varchar(20)                                                                   null
  comment '邮箱',
  workunit  varchar(50)                                                                   null
  comment '工作单位',
  unittype  varchar(10)                                                                   null
  comment '单位性质',
  province  varchar(20)                                                                   null
  comment '省份',
  address   varchar(100)                                                                  null
  comment '通信地址',
  telephone varchar(15)                                                                   not null
  comment '座机电话',
  constraint name
  unique (name),
  constraint user_id_uindex
  unique (id),
  constraint user_phone_uindex
  unique (phone)
)
  comment '用户表';

alter table user
  add primary key (id);

create table wilddata
(
  id       int auto_increment,
  name     varchar(100)    not null,
  cid      int             not null
  comment '所属分类id',
  collect  int default '0' not null,
  download int default '0' not null,
  constraint wilddata_id_uindex
  unique (id)
)
  comment '野外数据';

alter table wilddata
  add primary key (id);

