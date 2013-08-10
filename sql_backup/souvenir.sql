/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : souvenir

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-08-09 23:09:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `portal_categoria_producto`
-- ----------------------------
DROP TABLE IF EXISTS `portal_categoria_producto`;
CREATE TABLE `portal_categoria_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  `imagen` text,
  `descripcion` text,
  `nombre_en` text,
  `descripcion_en` text,
  `orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of portal_categoria_producto
-- ----------------------------
INSERT INTO `portal_categoria_producto` VALUES ('1', 'Souvenir', 'souvenir.jpg', 'Arte local', 'Souvenir', 'Local art', '1');
INSERT INTO `portal_categoria_producto` VALUES ('2', 'Etnico', 'etnico.jpg', 'arte etnico creado por artistas regionales', 'Ethnic', 'ethnic art created by regional artists', '2');
INSERT INTO `portal_categoria_producto` VALUES ('3', 'Playa', 'playa.jpg', 'articulos de playa', 'Beach', 'if you need clothes to go to the beach or pool this is the section you need', '3');
INSERT INTO `portal_categoria_producto` VALUES ('4', 'Food Miles', 'Miles.jpg', 'Food Miles', 'Food Miles', 'Food Miles', '4');
INSERT INTO `portal_categoria_producto` VALUES ('5', 'Joyeria', 'Joyeria.jpg', 'Joyeria', 'jewelry', 'jewelry', '5');
INSERT INTO `portal_categoria_producto` VALUES ('6', 'Otra Categoria', '', 'esta es una descipcion de prueba', 'Another Category', 'This this a description text', '6');

-- ----------------------------
-- Table structure for `portal_imagen_producto`
-- ----------------------------
DROP TABLE IF EXISTS `portal_imagen_producto`;
CREATE TABLE `portal_imagen_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_producto` int(11) DEFAULT NULL,
  `imagen` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of portal_imagen_producto
-- ----------------------------
INSERT INTO `portal_imagen_producto` VALUES ('3', '2', 'ddd');
INSERT INTO `portal_imagen_producto` VALUES ('4', '2', 'ddd2');
INSERT INTO `portal_imagen_producto` VALUES ('13', '2', 'aaax');
INSERT INTO `portal_imagen_producto` VALUES ('14', '2', 'bbb3');
INSERT INTO `portal_imagen_producto` VALUES ('15', '2', 'sadfsdfasdf');
INSERT INTO `portal_imagen_producto` VALUES ('17', '3', '/articulos/Wedding-favors-six-things-to-look-for-in-your-wedding-favors.jpg');
INSERT INTO `portal_imagen_producto` VALUES ('18', '3', '/articulos/souvenir9.jpg');
INSERT INTO `portal_imagen_producto` VALUES ('19', '3', '/articulos/flip-flop-placecard-holders.jpg');
INSERT INTO `portal_imagen_producto` VALUES ('20', '1', '/slider/artesanias.jpg');
INSERT INTO `portal_imagen_producto` VALUES ('21', '1', '/slider/387442584_a2c6ba1238_z.jpg');
INSERT INTO `portal_imagen_producto` VALUES ('22', '1', '/slider/320x240 - banner 26.jpg');
INSERT INTO `portal_imagen_producto` VALUES ('23', '1', '/slider/01_129.jpg');

-- ----------------------------
-- Table structure for `portal_producto`
-- ----------------------------
DROP TABLE IF EXISTS `portal_producto`;
CREATE TABLE `portal_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` char(20) DEFAULT NULL,
  `nombre` char(255) DEFAULT NULL,
  `descripcion` text,
  `precio` char(50) DEFAULT NULL,
  `imagen` text,
  `nombre_en` char(255) DEFAULT NULL,
  `descripcion_en` text,
  `orden` int(11) DEFAULT NULL,
  `precio_en` char(50) DEFAULT NULL,
  `fk_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of portal_producto
-- ----------------------------
INSERT INTO `portal_producto` VALUES ('1', '001', 'bikini', 'especial para uso en playa y alberca', '$1.00', '/slider/artesanias.jpg', 'bikini', 'if you need clothes to go to the beach or pool this is the section you need', '0', '1', '1');
INSERT INTO `portal_producto` VALUES ('2', '002', 'p2', 'd2', '2.00', '/slider/artesanias.jpg', 'p2', 'd2', '0', '2', '1');
INSERT INTO `portal_producto` VALUES ('3', '003', 'p3', 'd3', '3.00', '/slider/artesanias.jpg', 'p3', 'd3', '0', '3', '1');
INSERT INTO `portal_producto` VALUES ('4', '004', 'p4', 'd4', '4.00', '/slider/artesanias.jpg', 'p4', 'd4', '0', '4', '1');
INSERT INTO `portal_producto` VALUES ('5', '005', 'toalla', 'toalla para playa, no se le pega el arena', '5.00', '/slider/artesanias.jpg', 'towel', 'f', '0', '5', '1');
INSERT INTO `portal_producto` VALUES ('6', '6', 'a', 'fd', '2', '/slider/artesanias.jpg', 'r', 'asd', null, '344', '1');
INSERT INTO `portal_producto` VALUES ('10', '7', 's', 'sa', '43', '/slider/artesanias.jpg', 'rweq', 'sdf', null, '4', '1');
INSERT INTO `portal_producto` VALUES ('11', '8', 'd', 'asdf', '45', '/slider/artesanias.jpg', 'wreq', 'dfa', null, '5', '1');
INSERT INTO `portal_producto` VALUES ('12', '9', 'f', 'asf', '847', '/slider/artesanias.jpg', 'wreq', 'fas', null, '2', '1');
INSERT INTO `portal_producto` VALUES ('13', '10', 'g', 'asfdas', '48', '/slider/artesanias.jpg', 'qrwe', 'd', null, '2', '2');
INSERT INTO `portal_producto` VALUES ('14', '11', 'h', 'dfa', '45', '/slider/artesanias.jpg', 'erwq', 'SD', null, '3', '2');
INSERT INTO `portal_producto` VALUES ('15', '12', 'j', 'sdf', '7', '/slider/artesanias.jpg', 'qrwe', 'DA', null, '67', '2');
INSERT INTO `portal_producto` VALUES ('16', '13', 'k', 'asf', '56', '/slider/artesanias.jpg', 're', 'FAS', null, '6', '2');
INSERT INTO `portal_producto` VALUES ('17', '14', 'l', 'sfda', '5', '/slider/artesanias.jpg', 'er', 'ASD', null, '3', '2');
INSERT INTO `portal_producto` VALUES ('18', '15', 'ñ', 'sfas', '4', '/slider/artesanias.jpg', 'qw', 'SDF', null, '34', '2');
INSERT INTO `portal_producto` VALUES ('19', '16', 'p', 'df', '43', '/slider/artesanias.jpg', 'qgw', 'WDFA', null, '6', '2');
INSERT INTO `portal_producto` VALUES ('20', '17', 'o', 'afa', '243', '/slider/artesanias.jpg', 'g', 'F', null, '67', '2');
INSERT INTO `portal_producto` VALUES ('21', '18', 'i', 'fsdas', '243', '/slider/artesanias.jpg', 'wrreq', 'SD', null, '3', '2');
INSERT INTO `portal_producto` VALUES ('22', '19', 'y', 'df', '243', '/slider/artesanias.jpg', 'qwe', 'sdf', null, '4', '3');
INSERT INTO `portal_producto` VALUES ('23', '20', 't', 'asdf', '243', '/slider/artesanias.jpg', 'fq', 'da', null, '5', '3');
INSERT INTO `portal_producto` VALUES ('24', '21', 'r', 'asd', '234', '/slider/artesanias.jpg', 'wqw', 'vs', null, '7', '3');
INSERT INTO `portal_producto` VALUES ('25', '22', 'e', 'faa', '243', '/slider/artesanias.jpg', 'fqw', 'sd', null, '635', '3');
INSERT INTO `portal_producto` VALUES ('26', '23', 'w', 'sd', '3', '/slider/artesanias.jpg', 'eqf', 'raf', null, '4', '3');
INSERT INTO `portal_producto` VALUES ('27', '24', 'q', 'afsdf', '24', '/slider/artesanias.jpg', 'qwr', 'qw', null, null, '3');
INSERT INTO `portal_producto` VALUES ('28', '25', 'z', 'a', '234', '/slider/artesanias.jpg', 'qwer', 'rweq', null, '7', '3');
INSERT INTO `portal_producto` VALUES ('29', '27', 'asdf', 'sfd', '24', '/slider/artesanias.jpg', 'wqer', 'qrwe', null, '8', '3');
INSERT INTO `portal_producto` VALUES ('30', '28', 'fd', 'asd', '324', '/slider/artesanias.jpg', 'qwer', 'qwre', null, '23', '3');

-- ----------------------------
-- Table structure for `system_catalogos`
-- ----------------------------
DROP TABLE IF EXISTS `system_catalogos`;
CREATE TABLE `system_catalogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_modulo` int(11) DEFAULT NULL,
  `nombre` char(255) DEFAULT NULL,
  `controlador` char(255) DEFAULT NULL,
  `modelo` char(255) DEFAULT NULL,
  `tabla` char(255) DEFAULT NULL,
  `pk_tabla` char(255) DEFAULT 'id',
  `icono` char(255) DEFAULT NULL,
  `titulo_nuevo` char(255) DEFAULT NULL,
  `titulo_edicion` char(255) DEFAULT NULL,
  `titulo_busqueda` char(255) DEFAULT NULL,
  `msg_creado` char(255) DEFAULT NULL,
  `msg_actualizado` char(255) DEFAULT NULL,
  `pregunta_eliminar` char(255) DEFAULT NULL,
  `msg_eliminado` char(255) DEFAULT NULL,
  `msg_cambios` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_catalogos
-- ----------------------------
INSERT INTO `system_catalogos` VALUES ('18', '1', 'Usuarios', 'usuarios', 'Usuario', 'system_users', 'id', 'http://png.findicons.com/files/icons/2332/super_mono/64/user_card.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('31', '1', 'Configuracion', 'config', 'config', 'system_config', 'id', 'http://png.findicons.com/files/icons/2645/super_mono_3d/64/super_mono_3d_part2_65.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('32', '1', 'Modulos', 'modulos', 'Modulo', 'system_modulos', 'id', 'http://png.findicons.com/files/icons/1681/siena/48/puzzle_yellow.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('33', '1', 'Catalogos', 'catalogos', 'Catalogo', 'system_catalogos', 'id', 'http://png.findicons.com/files/icons/577/refresh_cl/48/windows_view_icon.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('36', '1', 'seguridad', 'seguridad', 'Seguridad', 'system_acl', 'id', 'http://png.findicons.com/files/icons/1035/human_o2/48/keepassx.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('42', '1', 'Roles', 'roles', 'rol', 'system_rol', 'id', 'http://png.findicons.com/files/icons/2332/super_mono/48/user_card.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('68', '2', 'Clase de articulo', 'categorias_de_productos', 'categoria_producto', 'portal_categoria_producto', 'id', '', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('69', '2', 'Productos', 'productos', 'producto', 'portal_producto', 'id', '', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('70', '2', 'Imagen del producto', 'imagen_producto', 'imagen_producto', 'portal_imagen_producto', 'id', '', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `system_config`
-- ----------------------------
DROP TABLE IF EXISTS `system_config`;
CREATE TABLE `system_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) DEFAULT NULL,
  `tema` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_config
-- ----------------------------
INSERT INTO `system_config` VALUES ('1', '1', 'artic');
INSERT INTO `system_config` VALUES ('2', '20', 'artic');

-- ----------------------------
-- Table structure for `system_modulos`
-- ----------------------------
DROP TABLE IF EXISTS `system_modulos`;
CREATE TABLE `system_modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  `icono` char(255) DEFAULT NULL,
  `nombre_interno` char(255) DEFAULT NULL,
  `ruta_base` char(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_modulos
-- ----------------------------
INSERT INTO `system_modulos` VALUES ('1', 'Sistema', 'http://png.findicons.com/files/icons/1681/siena/48/puzzle_yellow.png', 'backend', '/modulos/', '0');
INSERT INTO `system_modulos` VALUES ('2', 'Mazatlan Souvenir', null, 'portal', '/', '0');

-- ----------------------------
-- Table structure for `system_rol`
-- ----------------------------
DROP TABLE IF EXISTS `system_rol`;
CREATE TABLE `system_rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_rol
-- ----------------------------
INSERT INTO `system_rol` VALUES ('1', 'Programador');
INSERT INTO `system_rol` VALUES ('2', 'Encargado');
INSERT INTO `system_rol` VALUES ('3', 'Trabajador');

-- ----------------------------
-- Table structure for `system_users`
-- ----------------------------
DROP TABLE IF EXISTS `system_users`;
CREATE TABLE `system_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` char(255) NOT NULL,
  `pass` blob,
  `email` char(255) NOT NULL,
  `rol` int(11) DEFAULT '1',
  `fbid` int(11) DEFAULT NULL,
  `name` char(255) NOT NULL DEFAULT '0',
  `picture` varchar(255) DEFAULT NULL,
  `originalName` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nick` (`nick`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_users
-- ----------------------------
INSERT INTO `system_users` VALUES ('1', 'zesar1', 0xED445FC17D09CFCCC1112F79C3E63E64, 'cbibriesca@hotmail.com', '1', '0', 'Zesar Octavio', 'pic_1.jpg', 'retro_blue_background.jpg');
