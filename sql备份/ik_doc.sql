/*
Navicat MySQL Data Transfer

Source Server         : ikcharm_ikphp
Source Server Version : 50051
Source Host           : mysqldb2.ehost-services.com:3306
Source Database       : ikcharm_mgdatabase

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2013-05-20 13:25:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ik_doc`
-- ----------------------------
DROP TABLE IF EXISTS `ik_doc`;
CREATE TABLE `ik_doc` (
  `id` int(11) NOT NULL auto_increment COMMENT '消息ID',
  `userid` int(11) NOT NULL default '0' COMMENT '发送用户ID',
  `title` char(64) NOT NULL default '' COMMENT '期刊名',
  `volume` char(64) NOT NULL default '',
  `datetime` char(64) NOT NULL default '' COMMENT '年份',
  `pagestart` char(64) NOT NULL default '',
  `author` char(64) NOT NULL default '',
  `doctitle` char(64) NOT NULL default '' COMMENT '文献名',
  `downcount` int(11) NOT NULL default '0',
  `exfile` char(255) NOT NULL default '' COMMENT '附件',
  `isaudit` tinyint(1) NOT NULL default '0' COMMENT '是否已读',
  `addtime` int(11) NOT NULL default '0' COMMENT '添加时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8 COMMENT='文献';

-- ----------------------------
-- Records of ik_doc
-- ----------------------------
INSERT INTO `ik_doc` VALUES ('1', '1', '百度新闻', '12', '0', '22', '网络联盟', '山东聊城直升机坠毁致大面积停电', '7', 'data/upload/docment/2013/05/x38778yQ8vYo8X6G.jpg', '0', '1367824695');
INSERT INTO `ik_doc` VALUES ('2', '1', '12', '12', '0', '12', '12', 'ceddddd', '1', 'data/upload/docment/2013/05/oH2SxX8O82WnJ1RO.jpg', '0', '1367826909');
INSERT INTO `ik_doc` VALUES ('3', '1', '121', '1212', '0', '12', '12', '12', '0', '', '0', '1367919442');
INSERT INTO `ik_doc` VALUES ('4', '1', '121', '121', '0', '121', '12', '12212', '0', '', '0', '1367919569');
INSERT INTO `ik_doc` VALUES ('5', '1', '2323', '2323', '0', '232', '323', '32323', '0', '', '0', '1367919661');
INSERT INTO `ik_doc` VALUES ('6', '2', 'Appl. Phys. Lett', '28', '0', '245', 'H. S. Chen, E. Coleman', 'Structure relaxation spectrum of metallic glasses', '0', 'data/upload/docment/2013/05/dQOwbdNz5QoWYCdD.doc', '0', '1368059207');
INSERT INTO `ik_doc` VALUES ('7', '3', 'Ann. Chim. Sci. Mat.', '27', '0', '125', 'Ferenc Szekely', 'EFFECTS OF CRYSTALS ON THE MECHANICAL PROPERTIES OF Zrsz.sTisCUl', '0', 'data/upload/docment/2013/05/1dPPVZ4EpnPb1MvN.pdf', '0', '1368149308');
INSERT INTO `ik_doc` VALUES ('8', '3', 'Adv Funct Mater', '22', '0', '2567', 'Jun-Qiang Wang', 'Rapid Degradation of Azo Dye by Fe-Based Metallic Glass Powder', '0', 'data/upload/docment/2013/05/7RzD95yQBdYDDrQh.pdf', '0', '1368149518');
INSERT INTO `ik_doc` VALUES ('9', '3', 'Adv Mater', 'xx', '0', '1', 'Lothar Wondraczek', 'Towards Ultrastrong Glasses', '0', 'data/upload/docment/2013/05/HUGC6AJcfjwc04GC.pdf', '0', '1368149706');
INSERT INTO `ik_doc` VALUES ('10', '3', 'Adv Mater', '19', '0', '1957', 'Marios D. Demetriou', 'Yielding of Metallic Glass Foam by Percolation', '0', 'data/upload/docment/2013/05/IPS0Apf86f6j8nEk.pdf', '0', '1368149772');
INSERT INTO `ik_doc` VALUES ('11', '3', 'Adv Mater', '19', '0', '4272', 'Gang Duan', 'Bulk Metallic Glass with Benchmark Thermoplastic Processability', '0', 'data/upload/docment/2013/05/kRyTRuAU6CYRAYUu.pdf', '0', '1368149833');
INSERT INTO `ik_doc` VALUES ('12', '3', 'Adv Mater', '22', '0', '2770', 'Yuan Wu', 'Bulk Metallic Glass Composites with Transformation- Mediated Wor', '0', 'data/upload/docment/2013/05/0mTkyTTnMTKohT3P.pdf', '0', '1368149881');
INSERT INTO `ik_doc` VALUES ('13', '3', 'Acta Mater', '44', '0', '367', 'V. A. KHONIK', 'On the Nature of Low Temperature Internal Friction Peaks in Meta', '0', 'data/upload/docment/2013/05/ness9Ug9ypKp99EH.pdf', '0', '1368150013');
INSERT INTO `ik_doc` VALUES ('14', '3', 'Acta Mater', '44', '0', '2345', 'P. HAHNER', 'A Theory of Dislocation Cell Formation Based on Stochastic Dislo', '0', 'data/upload/docment/2013/05/JTz6kDl6at3vvppA.pdf', '0', '1368150117');
INSERT INTO `ik_doc` VALUES ('15', '3', 'Acta Mater', '46', '0', '3399', 'V. A. KHONIK', 'Isothermal Creep of Metallic Glasses a New Approach and its Expe', '0', 'data/upload/docment/2013/05/cp8yZDZY3cxeOr8c.PDF', '0', '1368150329');
INSERT INTO `ik_doc` VALUES ('16', '3', 'Acta Mater', '46', '0', '4725', 'R. BUSCH{', 'Viscosity of the Supercooled Liquid and Relaxation at the Glass', '0', 'data/upload/docment/2013/05/UI27ZmS04l7MO4Os.PDF', '0', '1368150401');
INSERT INTO `ik_doc` VALUES ('17', '3', 'Acta Mater', '46', '0', '5873', 'P. DEHEY', 'Structural Disordering in Amorphous Pd40Ni40P20 Induced by High', '0', 'data/upload/docment/2013/05/4Z4lO430ZDOK04GW.pdf', '0', '1368150468');
INSERT INTO `ik_doc` VALUES ('18', '3', 'Acta Mater', '47', '0', '2961', 'M. LEONHARDT', 'Solidification Kinetics and Phase Formation of Undercooled Eutec', '0', 'data/upload/docment/2013/05/FD2434nW4d4w824R.pdf', '0', '1368150528');
INSERT INTO `ik_doc` VALUES ('19', '3', 'Acta Mater', '48', '0', '1395', 'A. INOUE', 'Bulk Amorphous FC20 (Fe±C±Si) Alloys With Small Anounts of B and', '0', 'data/upload/docment/2013/05/Uxi4Mf0z0MjLUmLh.pdf', '0', '1368150895');
INSERT INTO `ik_doc` VALUES ('20', '3', 'Acta Mater', '48', '0', '2603', 'N. NAGENDRA', 'Effect of Crystallinity on the Impacy Touginess Of a La-Based Bu', '0', 'data/upload/docment/2013/05/iBC62zZW8rW8N85p.pdf', '0', '1368150978');
INSERT INTO `ik_doc` VALUES ('21', '3', 'Acta Mater', '49', '0', '1507', 'F. SZUECS', 'Mechanical Properties of Zr56.2Ti13.8Nb5.0Cu6.9Ni5.6Be12.5 Ducti', '0', 'data/upload/docment/2013/05/1ppNQL6PqQZQpgQ6.pdf', '0', '1368151037');
INSERT INTO `ik_doc` VALUES ('22', '3', 'Acta Mater', '49', '0', '2527', 'K. M. FLORES', 'Mean Stress Effects on Flow Localization and Failure in a Bulk M', '0', 'data/upload/docment/2013/05/JEXZVwvb7UWWOzTm.PDF', '0', '1368151125');
INSERT INTO `ik_doc` VALUES ('23', '3', 'Acta Mater', '49', '0', '2645', 'A. INOUE', 'High-Strength Cu-Based Bulk Glassy Alloys in Cu–Zr–Ti and Cu–Hf–', '0', 'data/upload/docment/2013/05/jZk47mDzw7BKWI77.pdf', '0', '1368151219');
INSERT INTO `ik_doc` VALUES ('24', '3', 'Acta Mater', '49', '0', '2887', 'T. G. NIEH', 'Plasticity and Structural Instability in a Bulk Metallic Glass D', '0', 'data/upload/docment/2013/05/9YyxjHoMJO2IyyTx.PDF', '0', '1368151302');
INSERT INTO `ik_doc` VALUES ('25', '3', '49', '49', '0', '3781', 'R. VAIDYANATHAN', 'Study of Mechanical Deformation in Bulk Metallic Glass Through I', '0', 'data/upload/docment/2013/05/5XSssBxgws8SkX15.PDF', '0', '1368151366');
INSERT INTO `ik_doc` VALUES ('26', '3', 'Acta Mater', '50', '0', '4603', 'N.R. Tao', 'An Investigation of Surface Nanocrystallization Mechanism in Fe', '0', 'data/upload/docment/2013/05/d53t3NT33F2gNu28.pdf', '0', '1368151423');
INSERT INTO `ik_doc` VALUES ('27', '3', 'Acta Mater', '51', '0', '87', 'C.A. Schuh', 'A Nanoindentation Study of Serrated Flow in Bulk Metallic Glasse', '0', 'data/upload/docment/2013/05/eNqkNhawHEEs97Wn.PDF', '0', '1368151482');
INSERT INTO `ik_doc` VALUES ('28', '3', 'Acta Mater', '51', '0', '1167', 'Z.F. Zhang', 'Difference in Compressive and Tensile Fracture Mechanisms of Zr5', '0', 'data/upload/docment/2013/05/YW99fPjbRZUpn988.pdf', '0', '1368151540');
INSERT INTO `ik_doc` VALUES ('29', '3', 'Acta Mater', '51', '0', '1899', 'W. Chen', 'Bulk Metallic Glasses in the Zr-Al-Ni-Cu System', '0', 'data/upload/docment/2013/05/045yu5JjZOV4ypA5.pdf', '0', '1368151584');
INSERT INTO `ik_doc` VALUES ('30', '3', 'Acta Mater', '51', '0', '3429', 'J. Lu', 'Deformation Behavior of the Zr41.2Ti13.8Cu12.5Ni10Be22.5 Bulk Me', '0', 'data/upload/docment/2013/05/ccC3KEvzGB3bcBaW.pdf', '0', '1368151633');
INSERT INTO `ik_doc` VALUES ('31', '3', 'Acta Mater', '51', '0', '3495', 'D. Jia', 'Effects of Nanocrystalline and Ultrafine Grain Sizes on Constitu', '0', 'data/upload/docment/2013/05/EsePsfze9S9Li69M.pdf', '0', '1368151721');
INSERT INTO `ik_doc` VALUES ('32', '3', 'Acta Mater', '51', '0', '4095', 'W.H. Jiang', 'The Effect of Compression and Tension on Shear Band Structure an', '0', 'data/upload/docment/2013/05/ix1DEaF8QxQqqbCD.pdf', '0', '1368151787');
INSERT INTO `ik_doc` VALUES ('33', '3', 'Acta Mater', '51', '0', '4551', 'H. Tan', 'Optimum Glass Formation at Off-Eutectic Composition and its Rela', '0', 'data/upload/docment/2013/05/v3Z5g4G5a8z5oG34.PDF', '0', '1368151843');
INSERT INTO `ik_doc` VALUES ('34', '3', 'Acta Mater', '51', '0', '5399', 'Alan C. Lund', 'Yield Surface of a Simulated Metallic Glass', '0', 'data/upload/docment/2013/05/avzv9naRWW95PpwV.pdf', '0', '1368151886');
INSERT INTO `ik_doc` VALUES ('35', '3', 'Acta Mater', '52', '0', '667', 'G.J. Fan', 'Thermodynamics, Enthalpy Relaxation and Fragility of the Bulk Me', '0', 'data/upload/docment/2013/05/DZ2EL2hSri0ZZHZ5.PDF', '0', '1368196215');
INSERT INTO `ik_doc` VALUES ('36', '3', 'Acta Mater', '52', '0', '2429', 'R.D. Conner', 'Shear Band Spacing Under Bending of Zr-Based Metallic Glass Plat', '0', 'data/upload/docment/2013/05/GmA644Gezx6fGgfG.pdf', '0', '1368196286');
INSERT INTO `ik_doc` VALUES ('37', '3', 'Acta Mater', '52', '0', '2441', 'A.A. K€undig', 'In Situ Formed Two-Phase Metallic Glass with Surface Fracture Mi', '0', '', '0', '1368196346');
INSERT INTO `ik_doc` VALUES ('38', '3', 'Acta Mater', '52', '0', '2621', 'Donghua Xu', 'Bulk Metallic Glass Formation in Binary Cu-rich Alloy Series', '0', '', '0', '1368196397');
INSERT INTO `ik_doc` VALUES ('39', '3', 'Acta Mater', '52', '0', '3689', 'S. Mukherjee', 'Volume of Bulk Metallic Glass-Forming Alloys and Their Correlati', '0', 'data/upload/docment/2013/05/BDpRhVi4uBDNBPNL.pdf', '0', '1368196698');
INSERT INTO `ik_doc` VALUES ('40', '3', 'Acta Mater', '52', '0', '4093', 'A. Inoue', 'Super-High Strength of Over 4000 MPa for Fe-Based Bulk Glassy Al', '0', 'data/upload/docment/2013/05/qeGt3ExJxG8NqqZr.pdf', '0', '1368196806');
INSERT INTO `ik_doc` VALUES ('41', '3', 'Acta Mater', '52', '0', '5879', 'Christopher A. Schuh', 'New Regime of Homogeneous Flow in the Deformation Map of Metalli', '0', 'data/upload/docment/2013/05/d95i5hRHh19b51Bh.pdf', '0', '1368197355');
INSERT INTO `ik_doc` VALUES ('42', '3', 'Acta Mater', '52', '0', '5879', 'Christopher A. Schuh', 'New Regime of Homogeneous Flow in the Deformation Map of Metalli', '0', 'data/upload/docment/2013/05/4Cqxb4PxDj4bHPDt.pdf', '0', '1368197403');
INSERT INTO `ik_doc` VALUES ('43', '3', 'Acta Mater', '53', '0', '1467', 'P. Murali', 'Embrittlement of a Bulk Metallic Glass due to Sub-Tg Annealing', '0', 'data/upload/docment/2013/05/p6nzP4pAon64FdcF.PDF', '0', '1368235638');
INSERT INTO `ik_doc` VALUES ('44', '3', 'Acta Mater', '53', '0', '1611', 'Alain Reza Yavari', 'Excess Free Volume in Metallic Glasses Measured by X-ray Diffrac', '0', 'data/upload/docment/2013/05/7HkCt1SVCVt6muvm.PDF', '0', '1368235713');
INSERT INTO `ik_doc` VALUES ('45', '3', 'Acta Mater', '53', '0', '1821', 'Julia R. Greer', 'Size Dependence of Mechanical Properties of Gold at the Micron S', '0', 'data/upload/docment/2013/05/SE39cqEJRX6XCE3J.pdf', '0', '1368235783');
INSERT INTO `ik_doc` VALUES ('46', '3', 'Acta Mater', '53', '0', '2193', 'D.J. Safarik', 'Shear Processes in Bulk Metallic Glass', '0', 'data/upload/docment/2013/05/SAsSADSq6SswqaQw.PDF', '0', '1368235835');
INSERT INTO `ik_doc` VALUES ('47', '3', 'Acta Mater', '53', '0', '2607', 'Y. Zhang', 'Microstructure Control and Ductility Improvement of La–Al–(Cu, N', '0', 'data/upload/docment/2013/05/zC08u3c32Y03s3FK.pdf', '0', '1368235954');
INSERT INTO `ik_doc` VALUES ('48', '3', 'Acta Mater', '53', '0', '3849', 'Hongwen Zhang', 'Investigation of Shear Band Evolution in Amorphous Alloys Beneat', '0', 'data/upload/docment/2013/05/CdTxLtxcjWdznxzw.PDF', '0', '1368236126');
INSERT INTO `ik_doc` VALUES ('49', '3', 'Acta Mater', '53', '0', '3469', 'W.H. Jiang', 'Mechanical Behavior of Shear Bands and the Effect of Their Relax', '0', 'data/upload/docment/2013/05/7mTJ8a5srJJFn78s.pdf', '0', '1368236193');
INSERT INTO `ik_doc` VALUES ('50', '3', 'Acta Mater', '53', '0', '4087', 'Guruswami Ravichandran', 'Analysis of Shear Banding In Metallic Glasses under Bending', '0', 'data/upload/docment/2013/05/zhuhh7ka7tu9hLUC.pdf', '0', '1368236236');
INSERT INTO `ik_doc` VALUES ('51', '3', 'Acta Mater', '53', '0', '2463', 'R.T. Ott', 'High-Energy X-Ray Measurements Of Structural Anisotropy And Exce', '0', 'data/upload/docment/2013/05/YreeIh1810biqrB8.pdf', '0', '1368236304');
INSERT INTO `ik_doc` VALUES ('52', '3', 'Acta Mater', '53', '0', '2597', 'E.S. Park', 'Phase Separation and Enhancement of Plasticity in Cu–Zr–Al–Y Bul', '0', 'data/upload/docment/2013/05/uRGGloR0z3q60Q4r.pdf', '0', '1368236379');
INSERT INTO `ik_doc` VALUES ('53', '3', 'Acta Mater', '54', '0', '3177', 'Yujie Wei', 'A Computational Study of the Mechanical Behavior of Nanocrystall', '0', 'data/upload/docment/2013/05/ReleJp4EJw1UKgkI.pdf', '0', '1368236465');
INSERT INTO `ik_doc` VALUES ('54', '3', 'Acta Mater', '54', '0', '4221', 'R. Bhowmick', 'Plastic Flow Softening in a Bulk Metallic Glass', '0', 'data/upload/docment/2013/05/l58g8L528ZGQNPHR.pdf', '0', '1368236535');
INSERT INTO `ik_doc` VALUES ('55', '3', 'Acta Mater', '54', '0', '4293', 'Futoshi Shimizu', 'Yielding-Point of Metallic Glass', '0', 'data/upload/docment/2013/05/ty5UVg2SQs2l86tl.pdf', '0', '1368236598');
INSERT INTO `ik_doc` VALUES ('56', '3', 'Acta Mater', '54', '0', '4317', 'D.B. Miracle', 'The Efficient Cluster Packing Model - An Atomic Structural Model', '0', 'data/upload/docment/2013/05/1t8p3G4LPV743Mv4.PDF', '0', '1368236904');
INSERT INTO `ik_doc` VALUES ('57', '3', 'Acta Mater', '54', '0', '4373', 'Q.P. Cao', 'Effect of Rolling Deformation on the Microstructure of Bulk Cu60', '0', 'data/upload/docment/2013/05/O5acg2FjI2PHginN.pdf', '0', '1368236980');
INSERT INTO `ik_doc` VALUES ('58', '3', 'Acta Mater', '54', '0', '4533', 'K. Sieradzki', 'Length Scales in Crystal Plasticity', '0', 'data/upload/docment/2013/05/JcP30k0Jpc6z8pOa.pdf', '0', '1368237021');
INSERT INTO `ik_doc` VALUES ('59', '3', 'Acta Mater', '54', '0', '4565', 'S. Mahesh', 'Deformation Banding and Shear Banding in Single Crystals', '0', 'data/upload/docment/2013/05/dvdKTo2D8RDhe8kv.pdf', '0', '1368237068');
INSERT INTO `ik_doc` VALUES ('60', '3', 'Acta Mater', '54', '0', '4745', 'R. Bermejo', 'Sdarticleresidual Stresses, Strength and Toughness of Laminates', '0', 'data/upload/docment/2013/05/rRSsalJAaUGwUOaW.pdf', '0', '1368237131');
INSERT INTO `ik_doc` VALUES ('61', '3', 'Acta Mater', '54', '0', '4781', 'G.J. Fan', 'Uniaxial Tensile Plastic Deformation and Grain Growth of Bulk Na', '0', 'data/upload/docment/2013/05/abAXzIIUHiNl4nu8.pdf', '0', '1368237253');
INSERT INTO `ik_doc` VALUES ('62', '3', 'Acta Mater', '55', '0', '295', 'B. Yang', 'Effect of the Nanoindentation Rate on the Shear Band Formation i', '0', 'data/upload/docment/2013/05/b8R228xpDDdRC862.pdf', '0', '1368237361');
INSERT INTO `ik_doc` VALUES ('63', '3', 'Acta Mater', '55', '0', '321', 'Fuqian Yang', 'Deformation in a Zr57Ti5Cu20Ni8Al10 Bulk Metallic Glass During N', '0', 'data/upload/docment/2013/05/Xjj2E2f7z7JohrJR.pdf', '0', '1368237420');
INSERT INTO `ik_doc` VALUES ('64', '3', 'Acta Mater', '55', '0', '4409', 'Q.K. Jiang', 'La-Based Bulk Metallic Glasses with Critical Diameter up to 30 m', '0', 'data/upload/docment/2013/05/vuspr4u86jR3r1fg.PDF', '0', '1368237730');
INSERT INTO `ik_doc` VALUES ('65', '3', 'Acta Mater', '55', '0', '5348', 'C.E. Packard', 'Initiation of Shear Bands near A Stress Concentration in Metalli', '0', 'data/upload/docment/2013/05/8MjOWj2twn82ezyW.pdf', '0', '1368237839');
INSERT INTO `ik_doc` VALUES ('66', '3', 'Acta Mater', '56', '0', '471', 'Jan Schroers', 'On the Formability of Bulk Metallic Glass In Its Supercooled Liq', '0', 'data/upload/docment/2013/05/B7xNl263xZJfLJLJ.PDF', '0', '1368237924');
INSERT INTO `ik_doc` VALUES ('67', '3', 'Acta Mater', '56', '0', '2625', 'Aaron Wiest', 'ZrTi-Based Be-Bearing Glasses Optimized For High Thermal Stabili', '0', 'data/upload/docment/2013/05/ysoBIySwW7BNynvn.pdf', '0', '1368237978');
INSERT INTO `ik_doc` VALUES ('68', '3', 'Acta Mater', '56', '0', '3777', 'A. Castellero', 'Room-Temperature Creep And Structural Relaxation of Mgcuy Metall', '0', 'data/upload/docment/2013/05/8O3mqh06OP0O3Mm6.pdf', '0', '1368238060');
INSERT INTO `ik_doc` VALUES ('69', '3', 'Acta Mater', '57', '0', '1367', 'Z. Han', 'An Instability Index of Shear Band for Plasticity in Metallic Gl', '0', 'data/upload/docment/2013/05/Czb4mXDzdD8Zc84Q.pdf', '0', '1368238126');
INSERT INTO `ik_doc` VALUES ('70', '3', 'Acta Mater', '59', '0', '4404', 'Zach Evenson', 'Equilibrium Viscosity, Enthalpy Recovery and Free Volume Relaxat', '0', 'data/upload/docment/2013/05/6XLRl1K6x1xY1QXx.pdf', '0', '1368238324');
INSERT INTO `ik_doc` VALUES ('71', '3', 'Acta Mater', '59', '0', '4303', 'Y. Zhang', 'Effect of Uniaxial Loading on the Structural Anisotropy and the', '1', 'data/upload/docment/2013/05/5ozggyWOZNtpsZMy.pdf', '0', '1368238429');
INSERT INTO `ik_doc` VALUES ('72', '3', 'Acta Mater', '59', '0', '4525', 'M.Q. Jiang,', 'Shear-Band Toughness of Bulk Metallic Glasses', '0', 'data/upload/docment/2013/05/HB129lft29Teg22o.pdf', '0', '1368368456');
INSERT INTO `ik_doc` VALUES ('73', '3', 'Acta Mater', '60', '0', '4160', 'B.A. Sun', 'Serrated Flow and Stick-Slip', '0', 'data/upload/docment/2013/05/Ll1Br88QzQUs1lS4.pdf', '0', '1368368536');
INSERT INTO `ik_doc` VALUES ('74', '3', 'Acta Mater', 'XXX', '0', '', 'S.L. Gao', 'Nanostructured Coatings of Glass Fibers Improvement of Alkali Re', '0', 'data/upload/docment/2013/05/RetX3WXWlsRvxiv6.pdf', '0', '1368368657');
INSERT INTO `ik_doc` VALUES ('75', '3', 'Acta Mater', 'XXX', '0', '', 'K. Werniewicz', 'New Fe-Cr-Mo-Ga-C Composite with High Compressive Strength and L', '0', 'data/upload/docment/2013/05/P4X188rWx8W4WhX7.pdf', '0', '1368368781');
INSERT INTO `ik_doc` VALUES ('76', '3', 'Acta Mater', 'XXX', '0', '', 'Z. Han', 'An Instability Index of Shear Band for Plasticity in Metallic Gl', '0', 'data/upload/docment/2013/05/b4MG2MgmO2mMgHOm.pdf', '0', '1368368842');
INSERT INTO `ik_doc` VALUES ('77', '3', 'Acta Mater', 'XXX', '0', '', 'Bulk Metallic Glasses with Large Plasticity Composition Design F', 'Bulk Metallic Glasses with Large Plasticity Composition Design F', '0', 'data/upload/docment/2013/05/rRR8r8K4UQWmutKK.PDF', '0', '1368368944');
INSERT INTO `ik_doc` VALUES ('78', '3', 'Acta Mater', 'XXX', '0', '', 'X.J. Gu', 'Compressive Plasticity and Toughness of A Ti-Based Bulk Metallic', '0', 'data/upload/docment/2013/05/AxEyXRI7W5wjArZ8.PDF', '0', '1368369052');
INSERT INTO `ik_doc` VALUES ('79', '3', 'Acta Mater', 'xxx', '0', '', 'Eric R. Homer', 'Mesoscale Modeling of Amorphous Metals by Shear Transformation Z', '0', 'data/upload/docment/2013/05/1Z3Cym2X1n0YB6Bc.PDF', '0', '1368369126');
INSERT INTO `ik_doc` VALUES ('80', '3', 'Acta Mater', 'XXX', '0', '', 'Q.P. Cao', 'Effect of Pre-Existing Shear Bands On the Tensile Mechanical Pro', '0', 'data/upload/docment/2013/05/l9zH3WC03x9QxTQX.PDF', '0', '1368369209');
INSERT INTO `ik_doc` VALUES ('81', '3', 'Acta Mater', 'XXX', '0', '', 'S. Pauly', 'Criteria for Tensile Plasticity in Cu–Zr–Al Bulk Metallic Glasse', '0', 'data/upload/docment/2013/05/msAQ6h6VvQYvAPYq.pdf', '0', '1368369287');
INSERT INTO `ik_doc` VALUES ('82', '3', 'Acta Mater', 'XXX', '0', '', 'Jinn P. Chu', 'Bendable Bulk Metallic Glasseffects of a Thin, Adhesive, Strong,', '1', 'data/upload/docment/2013/05/axO10uE0eEBYM71S.pdf', '0', '1368369411');
INSERT INTO `ik_doc` VALUES ('83', '3', 'ASCE', '109', '0', '1114', 'Masayoshi Nakashima', 'Post Buckling Instability of Steel Beam-Columns', '1', 'data/upload/docment/2013/05/Ay88qzmHlYYRvyaN.pdf', '0', '1368370221');
INSERT INTO `ik_doc` VALUES ('84', '3', 'International Journal of Impact Engineering', '34', '0', '232', 'Anwen Wang', 'Mechanism of Buckling Development in Elastic Bars Subjected To A', '0', 'data/upload/docment/2013/05/S9RM1GUuuZIJ5U59.pdf', '0', '1368370411');
INSERT INTO `ik_doc` VALUES ('85', '3', 'JMM', '4', '0', '116', 'W Fang', 'Post Buckling of Micromachined Beams', '0', 'data/upload/docment/2013/05/cZLRazAnnR2c5GN5.pdf', '0', '1368370479');
INSERT INTO `ik_doc` VALUES ('86', '3', 'JAM', '75', '0', '041020', 'Jian Zhao', 'Post-buckling and Snap-Through Behavior of Inclined Slender Beam', '0', 'data/upload/docment/2013/05/W2Mm0W559wpoCuM2.pdf', '0', '1368370542');
INSERT INTO `ik_doc` VALUES ('87', '3', '结构设计与分析', '34', '0', '18', '杨俊炜', '浅谈超高玻璃肋幕墙的稳定计算', '0', 'data/upload/docment/2013/05/n0900TbtEiElc2ev.pdf', '0', '1368370586');
INSERT INTO `ik_doc` VALUES ('88', '3', '西安建筑科技大学学报', '42', '0', '480', '韩志军', '基于Hamilton原理分析柱脚铰接弹性刚架的静力屈曲', '1', 'data/upload/docment/2013/05/1JiK1J4iWg2MiMWV.pdf', '0', '1368370646');
INSERT INTO `ik_doc` VALUES ('91', '3', 'Appl.Phys.Lett.', '29', '1976', '328', 'H.S.Chen', 'Stored Energy in A Cold-Rolled Metallic Glass', '0', 'data/upload/docment/2013/05/71gZ0YaMm4eOgGLS.PDF', '0', '1368760127');
INSERT INTO `ik_doc` VALUES ('92', '3', 'Appl.Phys.Lett.', '45', '1984', '615', 'H.W.Kui', 'Formation of Bulk Metallic Glass By Fluxing', '0', 'data/upload/docment/2013/05/ZyqQuD6QtTv7nNnT.pdf', '0', '1368760201');
INSERT INTO `ik_doc` VALUES ('93', '3', 'Appl.Phys.Lett.', '47', '1985', '796', 'H.W.Kui', 'Melting Of Ni40Pd40P20 Glass', '0', 'data/upload/docment/2013/05/b381ovU7RN7I9z31.pdf', '0', '1368760253');
INSERT INTO `ik_doc` VALUES ('94', '3', 'Appl.Phys.Lett.', '63', '1993', '2342', 'A. Peker', 'A Highly Processable Metallic Glass Zr412Ti138Cu125Ni100Be225', '0', 'data/upload/docment/2013/05/pK9BO96969pP2T2K.pdf', '0', '1368760331');
INSERT INTO `ik_doc` VALUES ('95', '3', 'Appl.Phys.Lett.', '67', '1995', '1544', 'R. Busch', 'Decomposition and Primary Crystallization In Undercooled Vit1 Me', '0', 'data/upload/docment/2013/05/iR4vkh4I77RHHhRv.pdf', '0', '1368760427');
INSERT INTO `ik_doc` VALUES ('96', '3', 'Appl.Phys.Lett.', '67', '1995', '2008', 'Yoshihito Kawamura', 'Full Strength Compacts By Extrusion of Glassy Metal Powder at th', '0', 'data/upload/docment/2013/05/HvA5gH5V8ue55C50.pdf', '0', '1368760498');
INSERT INTO `ik_doc` VALUES ('97', '3', 'Appl.Phys.Lett.', '67', '1995', '3260', 'E. Bakke', 'The Viscosity of the Zr46.75Ti8.25Cu7.5Ni10Be27.5 Bulk Metallic', '0', 'data/upload/docment/2013/05/4cf38CLq38NCXL8F.pdf', '0', '1368760566');
INSERT INTO `ik_doc` VALUES ('98', '3', 'Appl.Phys.Lett.', '69', '1996', '1208', 'Yoshihito Kawamura', 'Deformation Behavior of Zr65Al10Ni10Cu15 Glassy Alloy with Wide', '0', 'data/upload/docment/2013/05/p8l5KVO7Wp8eap7a.pdf', '0', '1368760624');
INSERT INTO `ik_doc` VALUES ('99', '3', 'Appl.Phys.Lett.', '69', '1996', '3200', 'M. Weiss', 'Kohlrausch Exponent of Amorphous Zr65Al75Cu275 Determined By Ane', '0', 'data/upload/docment/2013/05/GYfDuUF1YUiMFg05.PDF', '0', '1368760691');
INSERT INTO `ik_doc` VALUES ('100', '3', 'Appl.Phys.Lett.', '71', '1997', '779', 'Yoshihito Kawamura', 'Stress Overshoot in Stress-Strain Curves of Zr65Al10Ni10Cu15 Met', '0', 'data/upload/docment/2013/05/44Zf4B0hbhb84Lc0.pdf', '0', '1368784212');
INSERT INTO `ik_doc` VALUES ('101', '3', 'Appl.Phys.Lett.', '71', '1997', '1652', 'H. Van Swygenhoven', 'Plastic Behavior of Nanophase Ni A Molecular Dynamics Computer S', '0', 'data/upload/docment/2013/05/JzPTCVd4oVDFvjfj.pdf', '0', '1368784267');
INSERT INTO `ik_doc` VALUES ('102', '3', 'Appl.Phys.Lett.', '71', '1997', '3808', 'H. Choi-Yima', 'Bulk Metallic Glass Matrix Composites', '0', 'data/upload/docment/2013/05/0x23XYYpXihSn1Kh.pdf', '0', '1368784319');
INSERT INTO `ik_doc` VALUES ('103', '3', 'Appl.Phys.Lett.', '71', '1998', '2695', 'R. Busch', 'The Kinetic Glass Transition of the Zr46.75Ti8.25Cu7.5Ni10Be27.5', '0', 'data/upload/docment/2013/05/TETgCJgq9V9gpQ3C.PDF', '0', '1368784377');
INSERT INTO `ik_doc` VALUES ('104', '3', 'Appl.Phys.Lett.', '74', '1999', '1803', 'Wei-Hua Wang', 'Elastic Constants and Their Pressure Dependence of Zr41Ti14Cu12.', '0', 'data/upload/docment/2013/05/tEKj81KK5G41zt1h.pdf', '0', '1368784435');
INSERT INTO `ik_doc` VALUES ('105', '3', 'Appl.Phys.Lett.', '74', '1999', '3809', 'C. J. Gilbert', 'Light Emission During Fracture of A Zr–Ti–Ni–Cu–Be Bulk Metallic', '0', 'data/upload/docment/2013/05/L8Qb3qgsL3lq8BQ8.PDF', '0', '1368784520');
INSERT INTO `ik_doc` VALUES ('106', '3', 'Appl.Phys.Lett.', '77', '2000', '46', '2000', 'Ductility of Bulk Nanocrystalline Composites and Metallic Glasse', '0', 'data/upload/docment/2013/05/66B32Omd2ZHRJKMg.pdf', '0', '1368784560');
INSERT INTO `ik_doc` VALUES ('107', '3', 'Appl.Phys.Lett.', '77', '2000', '3734', 'Li Min Wang', 'Elastic Constants of Pd39Ni10Cu30P21 Bulk Metallic Glass Under H', '0', 'data/upload/docment/2013/05/lISdaIsi7bLR9Gs7.pdf', '0', '1368784615');
INSERT INTO `ik_doc` VALUES ('108', '3', 'Appl.Phys.Lett.', '78', '2001', '1985', 'N. Nishiyama', 'Elastic Properties of Pd40Cu30Ni10P20 Bulk Glass In Supercooled', '0', 'data/upload/docment/2013/05/o1V9PoxUmXUotd2V.pdf', '0', '1368795231');
INSERT INTO `ik_doc` VALUES ('109', '3', 'Appl.Phys.Lett.', '79', '2000', '611', 'D. Jia', 'Deformation Behavior and Plastic Instabilities of Ultrafine-Grai', '0', 'data/upload/docment/2013/05/vm9vL95Lf5lD97hm.pdf', '0', '1368795290');
INSERT INTO `ik_doc` VALUES ('110', '3', 'Appl.Phys.Lett.', '80', '2002', '2395', 'Y. M. Wang', 'Enhanced Tensile Ductility and Toughness in Nanostructured Cu', '0', 'data/upload/docment/2013/05/0jUyU099v90jxJ0B.pdf', '0', '1368795358');
INSERT INTO `ik_doc` VALUES ('111', '3', 'Appl.Phys.Lett.', '80', '2002', '2478', 'U. Ku¨hn', 'Zrnbcunial Bulk Metallic Glass Matrix Composites Containing Dend', '0', 'data/upload/docment/2013/05/848B48lq8Lc4e5dY.pdf', '0', '1368923132');
