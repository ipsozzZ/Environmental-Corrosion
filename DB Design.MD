# 数据库设计

## user 用户表

  name 用户名
  avatar 头像地址
  pass 密码 (md5)
  phone 手机号
  activite 活跃度
  getlike 获赞
  gender 性别

## train 训练

  name 训练名
  cover  封面图片地址

## traincate 训练分类

  name 分类名 如：初级/中极/高级

## learncomment 学习心情

  uid 用户id
  ctime 评论时间
  content 评论内容
  like 赞

## userbuy 用户购买训练

  uid 用户id
  tid 训练id
  btime 购买时间

## trainhis 训练历史

  tids 训练id，三个，逗号分割
  uid 用户id

## score 成绩

  uid 用户id
  iq 智商
  cq 创意商
  eq 情商
  sq 快乐商
  hq 健康商

## diploma 证书

  uid 用户id
  img 证书图片地址