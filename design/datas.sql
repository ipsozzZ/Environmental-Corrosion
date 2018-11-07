INSERT INTO corrosion.wilddata (id, name, cid) VALUES (1, '33422', 11);

INSERT INTO corrosion.admin (id, name, pass, lltime) VALUES (1, 'admin', '25d55ad283aa400af464c76d713c07ad', '2018-10-28 13:58:16');

INSERT INTO corrosion.carousel (id, img, linkto) VALUES (2, '/uploads/20181105/4d92c86d046a6de9b28cc310be25529a.jpg', '/');
INSERT INTO corrosion.carousel (id, img, linkto) VALUES (3, '/uploads/20181105/66f96b9a8b45c9ba8a885d8b05d55581.jpg', '/');

INSERT INTO corrosion.data (id, title, position, cycle, cid, ctime, viewer, content, type, mname) VALUES (1, 'asdsads', '111', 4, 11, '2018-11-06 13:33:20', 3, '<table border="0" width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <th>&nbsp;项目</th>
                        <th>数据&nbsp;</th>
                      </tr>
                      <tr>
                        <td>&nbsp; &nbsp; 123</td>
                        <td>&nbsp;456</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </tbody>
                  </table><p><br></p>', 1, 'Na');
INSERT INTO corrosion.data (id, title, position, cycle, cid, ctime, viewer, content, type, mname) VALUES (2, 'asd', 'sss', 3, 2, '2018-11-06 13:13:03', 0, '<table border="0" width="100%" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <th>&nbsp;项目</th>
                        <th>数据&nbsp;</th>
                      </tr>
                      <tr>
                        <td>&nbsp; &nbsp; 123</td>
                        <td>&nbsp;456</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </tbody>
                  </table><p><br></p>', 1, 'ss#');

INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (1, '宏观电化学', null, 1, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (2, '开路电位', 10, 2, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (5, '11', null, 0, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (10, 'asdsad', null, 1, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (11, '3333', 10, 2, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (12, 'asdsad', null, 1, 2);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (13, 'aaaa%%', 1, 2, 2);

INSERT INTO corrosion.friends (id, name, linkto) VALUES (1, '111', '2');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (2, '1112233', '2');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (3, '11122331', '2');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (5, '1112233111111', '1');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (6, '111223322222', '2');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (7, '1112233111111', '1');

INSERT INTO corrosion.indoordata (id, name, cid, collect, download) VALUES (1, '极化测试', 2, 0, 0);
INSERT INTO corrosion.indoordata (id, name, cid, collect, download) VALUES (4, 'ttr', 11, 0, 0);

INSERT INTO corrosion.nav (id, name, linkto) VALUES (1, '平台简介', '/index/about');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (2, '基础数据', '/index/basic');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (3, '野外数据', '/index/outdoor');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (4, '室内数据', '/index/indoor');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (5, '实时数据', '/index/realtime');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (6, '标准规范', '/index/standard');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (7, '应用案例', '/index/example');


INSERT INTO corrosion.scate (id, name, parent, level) VALUES (1, '基础数据标准', null, 1);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (2, '基础数据标准', 1, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (3, '耐蚀材料', 1, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (4, '电化学防护', 1, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (5, '11', null, 1);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (7, '222@', 5, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (8, '22222333', 1, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (9, 'asdsadsa3333', null, 1);

INSERT INTO corrosion.site (id, title, vicetitle, description, vicedesc) VALUES (1, '国家科技基础条件平台', '国家材料环境腐蚀科学数据中心', 'National Material Environmental Corrosion Science Data Center', 'National Science & Technology Infrastructure');

INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2047, 'GB/T 4334-2008', '金属和合金的腐蚀.不锈钢晶间腐蚀试验方法', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2048, 'GB_T 5252-2006', '锗单晶位错腐蚀坑密度测量方法', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2049, 'GB_T 5776-2005', '金属和合金的腐蚀 金属和合金 在表层海水中暴露和评定的导则', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2050, 'GB_T 6461-2002', '金属基体上金属和其他无机覆盖层 经腐蚀试验后的试样和试件的评级', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2124, 'YB_T 4396-2014', '不锈钢 多元素含量的测定 电感耦合等离子体原子发射光谱法', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2163, 'QB_T 1901.2-2006', '表壳体及其附件 金合金覆盖层 第2部分：纯度、厚度、耐腐蚀性能和附着力的测试', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2177, 'SH_T 0232-1992', '液化石油气铜片腐蚀试验法', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2203, 'GB_T 11377-2005', '金属和其它无机覆盖层 储存条件下腐蚀试验的一般规则', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2207, 'GB_T 13305-2008', '不锈钢中α-相面积含量金相测定法', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2208, 'GB_T 13448-2006', '彩色涂层钢板及钢带试验方法', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2213, 'GB_T 15970.1-1995', '金属和合金的腐蚀 应力腐蚀试验 第1部分;试验方法总则', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2214, 'GB_T 15970.2-2000', '金属和合金的腐蚀 应力腐蚀试验 第2部分;弯梁试样的制备和应用', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2215, 'GB_T 15970.6-2007', '金属和合金的腐蚀.应力腐蚀试验.第6部分:恒载荷或恒位移下的预裂纹试样的制备和应用', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2216, 'GB_T 15970.7-2000', '金属和合金的腐蚀 应力腐蚀试验 第7部分:慢应变速率试验', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2217, 'GB_T 15970.8-2005', '金属和合金的腐蚀 应力腐蚀试验 第8部分;焊接试样的制备和应用', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2218, 'GB_T 15970.9-2007', '金属和合金的腐蚀.应力腐蚀试验.第9部分:渐增式载荷或渐增式位移下的预裂纹试样的制备和应用', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2223, 'GB_T 18590-2001', '金属和合金的腐蚀 点蚀评定方法', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2227, 'GB_T 19746-2005', '金属和合金的腐蚀 盐溶液周浸试验', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2228, 'GB_T 19747-2005', '金属和合金的腐蚀 双金属室外暴露腐蚀试验', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2230, 'GB_T 20120.1-2006', '金属和合金的腐蚀.腐蚀疲劳试验.第1部分;循环失效试验', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2231, 'GB_T 20120.2-2006', '金属和合金的腐蚀.腐蚀疲劳试验.第2部分;预裂纹试验裂纹扩展试验', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2237, 'GB_T 21433-2008', '不锈钢压力容器晶间腐蚀敏感性检验', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2242, 'GB_T 22316-2008', '电镀锡钢板耐腐蚀性试验方法', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2245, 'GB_T 24195-2009', '金属和合金的腐蚀.酸性盐雾、“干燥”和“湿润”条件下的循环加速腐蚀试验', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2252, 'GB_T 30074-2013', '用电化学技术测量金属中氢渗透（吸收和迁移）的方法', '2018-11-05 19:33:15', null, '', 2);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2261, '556', '&&&%^%111', null, 'asdds', '/uploads/20181105/ff0fa033bc19b1af8850fcda761fb62c.pdf', 1);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2263, 'asdsad', 'ff', null, '233', '/uploads/20181105/02a973e58de4b09a72eeb636845c8273.pdf', 1);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2265, 'ss', '22', null, 'adsad', '', 2);


INSERT INTO corrosion.standard (id, name, cid) VALUES (1, '金属材料的腐蚀试验1', 4);
INSERT INTO corrosion.standard (id, name, cid) VALUES (2, 'sahja', 2);


INSERT INTO corrosion.user (id, name, pass, phone, gender, avatar, realname, education, job, email, workunit, unittype, province, address) VALUES (1, 'iimt', 'e10adc3949ba59abbe56e057f20f883e', '12345678', 1, '/uploads/20181031/5aff028e502416a22cab57304c3fee7f.jpg', null, null, null, null, null, null, null, null);
INSERT INTO corrosion.user (id, name, pass, phone, gender, avatar, realname, education, job, email, workunit, unittype, province, address) VALUES (2, 'ipso', 'e10adc3949ba59abbe56e057f20f883e', '2222', 0, '/uploads/20181031/5aff028e502416a22cab57304c3fee7f.jpg', null, null, null, null, null, null, null, null);