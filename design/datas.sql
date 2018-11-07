# 删除原有数据 

turncate table `about`;
turncate table `acate`;
turncate table `admin`;
turncate table `article`;
turncate table `carousel`;
turncate table `data`;
turncate table `focus`;
turncate table `friends`;
turncate table `indoordata`;
turncate table `mcate`;
turncate table `msg`;
turncate table `nav`;
turncate table `scate`;
turncate table `select`;
turncate table `site`;
turncate table `slist`;
turncate table `standard`;
turncate table `token`;
turncate table `ucollect`;
turncate table `udownload`;
turncate table `user`;
turncate table `wilddata`;


#导入新数据


INSERT INTO corrosion.wilddata (id, name, cid, collect, download) VALUES (1, '33422', 11, 0, 0);

INSERT INTO corrosion.user (id, name, pass, phone, gender, avatar, realname, education, job, email, workunit, unittype, province, address, telephone) VALUES (1, 'iimt', 'e10adc3949ba59abbe56e057f20f883e', '12345678', 1, '/uploads/20181031/5aff028e502416a22cab57304c3fee7f.jpg', 'tfh', '本科', '学生', 'ttfhhh@qq.com', 'w无', '1', 'zj', 'sxwlxy', '15546-465321');
INSERT INTO corrosion.user (id, name, pass, phone, gender, avatar, realname, education, job, email, workunit, unittype, province, address, telephone) VALUES (2, 'ipso', 'e10adc3949ba59abbe56e057f20f883e', '2222', 0, '/uploads/20181031/5aff028e502416a22cab57304c3fee7f.jpg', null, null, null, null, null, null, null, null, '');

INSERT INTO corrosion.token (id, token, expire, uid, identity) VALUES (11, 'fc67f10bf5748d5b314281ef50c3f805', '2018-11-08 08:46:27', 1, 1);

INSERT INTO corrosion.standard (id, name, cid) VALUES (1, '金属材料的腐蚀试验1', 4);
INSERT INTO corrosion.standard (id, name, cid) VALUES (2, 'sahja', 2);

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
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2261, '556', '&&&%^%111', '2018-11-06 20:01:54', 'asdds', '/uploads/20181105/ff0fa033bc19b1af8850fcda761fb62c.pdf', 1);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2263, 'asdsad', 'ff', '2018-11-06 20:01:54', '233', '/uploads/20181105/02a973e58de4b09a72eeb636845c8273.pdf', 1);
INSERT INTO corrosion.slist (id, num, name, impletime, department, pdf, sid) VALUES (2265, 'ss', '22', '2018-11-06 20:01:54', 'adsad', '', 2);


INSERT INTO corrosion.site (id, title, vicetitle, description, vicedesc) VALUES (1, '国家科技基础条件平台', '国家材料环境腐蚀科学数据中心', 'National Material Environmental Corrosion Science Data Center', 'National Science & Technology Infrastructure');

INSERT INTO corrosion.`select` (id, aid) VALUES (2, 2);
INSERT INTO corrosion.`select` (id, aid) VALUES (3, 3);

INSERT INTO corrosion.scate (id, name, parent, level) VALUES (1, '基础数据标准', null, 1);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (2, '基础数据标准', 1, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (3, '耐蚀材料', 1, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (4, '电化学防护', 1, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (5, '11', null, 1);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (7, '222@', 5, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (8, '22222333', 1, 2);
INSERT INTO corrosion.scate (id, name, parent, level) VALUES (9, 'asdsadsa3333', null, 1);

INSERT INTO corrosion.nav (id, name, linkto) VALUES (1, '平台简介', '/index/about');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (2, '基础数据', '/index/basic');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (4, '室内数据', '/index/indoor');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (6, '标准规范', '/index/standard');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (7, '应用案例', '/index/example');
INSERT INTO corrosion.nav (id, name, linkto) VALUES (8, '野外数据', '/index/outdoor');

INSERT INTO corrosion.msg (id, code, phone) VALUES (4, '347029', '18857516463');

INSERT INTO corrosion.indoordata (id, name, cid, collect, download) VALUES (1, '极化测试', 2, 0, 0);
INSERT INTO corrosion.indoordata (id, name, cid, collect, download) VALUES (4, 'ttr', 11, 0, 0);

INSERT INTO corrosion.friends (id, name, linkto) VALUES (1, '111', '2');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (2, '1112233', '2');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (3, '11122331', '2');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (5, '1112233111111', '1');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (6, '111223322222', '2');
INSERT INTO corrosion.friends (id, name, linkto) VALUES (7, '1112233111111', '1');

INSERT INTO corrosion.focus (id, aid) VALUES (1, 3);
INSERT INTO corrosion.focus (id, aid) VALUES (4, 2);

INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (1, '宏观电化学', null, 1, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (2, '开路电位', 10, 2, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (5, '11', null, 0, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (10, 'asdsad', null, 1, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (11, '3333', 10, 2, 1);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (12, 'asdsad', null, 1, 2);
INSERT INTO corrosion.dcate (id, name, parent, level, type) VALUES (13, 'aaaa%%', 1, 2, 2);

INSERT INTO corrosion.data (id, title, position, cycle, cid, ctime, viewer, content, type, mname) VALUES (1, 'asdsads', '111', 4, 1, '2018-11-07 09:02:46', 3, '<table border="0" width="100%" cellpadding="0" cellspacing="0">
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
INSERT INTO corrosion.data (id, title, position, cycle, cid, ctime, viewer, content, type, mname) VALUES (2, 'asd', 'sss', 3, 4, '2018-11-07 09:02:46', 0, '<table border="0" width="100%" cellpadding="0" cellspacing="0">
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
INSERT INTO corrosion.data (id, title, position, cycle, cid, ctime, viewer, content, type, mname) VALUES (3, 'asdsa', 'aaa', 2, 1, '2018-11-07 10:57:51', 0, '<table border="0" width="100%" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <th>&nbsp;项目</th>
                  <th>数据&nbsp;</th>
                </tr>
                <tr>
                  <td>&nbsp;sdasdsa</td>
                  <td>&nbsp;assaaaaa</td>
                </tr>
                <tr>
                  <td>&nbsp;ww</td>
                  <td>&nbsp;ssa</td>
                </tr>
                <tr>
                  <td>&nbsp;sss</td>
                  <td>&nbsp;fff</td>
                </tr>
                <tr>
                  <td>23&nbsp;</td>
                  <td>&nbsp;a11</td>
                </tr>
              </tbody>
            </table><p><br></p>', 1, 'aaaaa');


INSERT INTO corrosion.carousel (id, img, linkto) VALUES (2, '/uploads/20181105/4d92c86d046a6de9b28cc310be25529a.jpg', '/');
INSERT INTO corrosion.carousel (id, img, linkto) VALUES (3, '/uploads/20181105/66f96b9a8b45c9ba8a885d8b05d55581.jpg', '/');

INSERT INTO corrosion.article (id, ctime, authors, content, src, viewer, title, cover, cid) VALUES (2, '2018-11-07 00:30:36', 'ss', '<p>asdadasdasdasd</p><p>asdasd</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>', 'sd', 0, 'asa', '/uploads/20181107/f610e4d89db853abf1acf2040f96d0cb.jpeg', 1);
INSERT INTO corrosion.article (id, ctime, authors, content, src, viewer, title, cover, cid) VALUES (3, '2018-11-07 09:48:34', 'ssss', 'asdasdsa', 'ss', 3, 'YTTTT', '/uploads/20181107/f610e4d89db853abf1acf2040f96d0cb.jpeg', 2);

INSERT INTO corrosion.admin (id, name, pass, lltime) VALUES (1, 'admin', '25d55ad283aa400af464c76d713c07ad', '2018-10-28 13:58:16');

INSERT INTO corrosion.acate (id, name) VALUES (1, '重大案例');
INSERT INTO corrosion.acate (id, name) VALUES (2, '专题服务');
INSERT INTO corrosion.acate (id, name) VALUES (3, 'aaa');
INSERT INTO corrosion.acate (id, name) VALUES (5, 'a');

INSERT INTO corrosion.about (id, `desc`, pro, example, unit) VALUES (1, '<h4 class="c-000 sc-center">腐蚀大数据在线监测系统介绍111</h4><p class="c-000">国家材料环境腐蚀科学数据中心是经科技部批准成立，由北京科技大学牵头，联合民口部门和国防部门共同建设的新时期具有大数据特色的数据中心平台体系。数据中心通过长期持续开展了黑色金属、有色金属、建筑材料、涂镀层材料及高分子材料等5大类，600余种材料，建成了最长达35年的野外试验数据；近年来依托自主研发的材料腐蚀和相关环境数据自动采集的多探头传感器，建立了基于物联网的腐蚀和环境数据的高通量采集、无线传输及入库的“腐蚀大数据”创新技术体系，该项技术为材料腐蚀基础研究在线提供了实时24小时的环境腐蚀数据。目前国家材料环境腐蚀科学数据中心总有效数据量超过1800万条，在全国同类数据资源中占比超过80%以上，已成为我国乃至世界上最大的腐蚀数据资源拥有者。
                    </p><p>
                        近年来，数据中心承担了几乎所有涉及到材料及装备自然环境腐蚀研究相关课题的野外试验及数据获取任务，持续为“三峡工程”、“西气东输”、“南水北调”等国家重大工程建设及运行维护提供重要支撑；为“大飞机”、“天宫一号、二号”、“高速铁路”、“国家电网”以及武器装备等领域关键材料选材及寿命评价作出了重大贡献；在“潜艇”、“辽宁舰”、“舰载机”以及30余座海洋大型石油平台和“201铺管船”等重大装备中获得直接应用。
                    </p><p class="c-000 m25">
                        组织架构图：
                    </p><div class="img">
                        <img src="/static/index/custom/images/a1.png" alt="">
                    </div><p class="c-000 m25">
                        技术体系介绍：
                    </p><div class="img" style="padding-left:13%">
                        <img src="/static/index/custom/images/a33.png" alt="">
                    </div><p>国家材料环境腐蚀科学数据中心应用
                        <br> 腐蚀大数据在线监测系统已陆续应用于国家材料环境腐蚀科学数据中心的30多个国家野外科学观测研究站点，监测材料涵盖桥梁钢、桥梁耐候钢等黑色金属以及锌等部分有色金属，监测环境覆盖干热、湿热、沿海、内陆等典型材料应用环 境。
                    </p><div class="img" style="padding-left:13%">
                        <img src="/static/index/custom/images/a21.png" alt="">
                    </div><p><br></p>', '<h4 class="c-000 sc-center m25">专家介绍1</h4><ul>
                    <li class="clearfix"><a href=""><img src="/static/index/custom/images/a22.png" alt=""><p>李晓刚，博士，北京科技大学新材料技术研究院教授，博士生导师，我国材料环境腐蚀与防护领域主要学术带头人之一，“海洋工程装备材料腐蚀与防护关键技术基础”973项目首席科学家。长期坚持材料环境腐蚀机理应用基础研究，获得了钢铁、高分子等材料在大气、土壤、海洋环境的腐蚀规律；领导创建了国内最大的材料环境腐蚀试验与共享的规范化平台和数据量最大的腐蚀数据库；发展了低合金钢耐蚀性能调控理论并获得产业化应用，研发耐蚀原型钢种15项，产业化生产超过260万吨；研制了环境腐蚀试验系列化新技术,为解决航天、海洋、石油等国家重大工程的材料腐蚀难题提供了技术支撑，解决了"天宫一号"重大腐蚀难题，为其按时发射提供了重要科学依据，对发展我国材料环境腐蚀学科做出了创造性贡献。</p></a></li>
                    <li class="clearfix"><a href=""><img src="/static/index/custom/images/a23.png" alt=""><p>程学群，博士，北京科技大学新材料技术研究院教授。主要从事耐蚀合金研发、材料腐蚀寿命预测及表面处理技术研究。主持了国家自然科学基金面上项目3项，参加了国家自然科学基金重点项目、科技部重点研发项目、973项目、863项目等15项国家级课题研究；主持或参加了企业项目150余项。获得国家授权发明专利18项，国际发明专利2项。参与制定了3项国家标准和46项CSTM团体标准。先后在“Corrosion Science”、 “Electrochemical Acta”等腐蚀领域顶级期刊发表学术论文50多篇（其中TOP期刊论文20多篇，单篇论文他引最高130多次），出版著作3部。近五年来，获得省部级科技进步一等奖5项，二等奖2项； 2016年度获国家科学技术进步奖二等奖1项。
目前兼任国家材料环境腐蚀科学数据中心副主任、中国腐蚀与防护学会常务副秘书长、期刊《腐蚀防护之友》执行总编。</p></a></li>
                    <li class="clearfix"><a href=""><img src="/static/index/custom/images/a24.png" alt=""><p>肖葵，博士，北京科技大学新材料技术研究院副教授，博士生导师。主要从事材料大气腐蚀与防护、研究材料环境腐蚀数据库、大气腐蚀在线监检测、电子材料环境损伤机理等方面研究工作。先后主持国家自然科学基金面上项目3项，参加“973”计划、国家重点研发计划重点专项和国家科技基础条件平台等多个重点项目。先后发表学术论文180余篇，其中第一作者和通讯作者SCI/EI论文45篇；主编《金属材料霉菌腐蚀行为与机理》和《典型电子材料户外大气环境腐蚀行为与机理》著作2部，参编《海洋大气环境腐蚀寿命》等著作5部，教材《材料腐蚀与防护》1部，获得国家授权发明专利8项。近五年来，获得省部级科技进步一等奖5项，二等奖2项； 2016年度获国家科学技术进步奖二等奖1项。</p></a></li>
                </ul><p><br></p>', '<h4 class="c-000 sc-center m25">工程应用案例1</h4><p>国家材料环境腐蚀科学数据中心通过50余年的数据积累，材料腐蚀“大数据”已在科技、经济、和社会发展的多个领域得到应用，取得了显著的成果，为经济顺利发展保驾护航。
                </p><div class="img">
                    <img src="/static/index/custom/images/a25.png" alt="" class="m-auto">
                </div><p>载人航天工程
                    <br> 大量环境试验和腐蚀数据积累为“天宫一号”空间站核心组件质量归零和寿命评估提供了数据基础。
                </p><div class="img sc-center">
                    <img src="/static/index/custom/images/a27.png" alt="">
                    <img src="/static/index/custom/images/a26.png" alt="">
                </div><p>大飞机专项
                    <br> 系统性积累了航空材料在我国典型大气环境中的长周期腐蚀数据，为设计单位提供腐蚀数据作为设计依据，为制造企业提供防护工艺的依据。
                </p><div class="img sc-center">
                    <img src="/static/index/custom/images/a28.png" alt="">
                    <img src="/static/index/custom/images/a29.png" alt="">
                </div><p><br></p>', '<h4 class="c-000 sc-center m25">组织机构1</h4><p class="sc-center">数据中心由北科大，武汉材保所，青岛海腐所，大庆油田设计院，钱浪组成。
            </p><p><br></p>');