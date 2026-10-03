/*
SQLyog Community v13.1.5  (32 bit)
MySQL - 5.7.40-log : Database - mastergames
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mastergames` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mastergames`;

/*Table structure for table `carrito` */

DROP TABLE IF EXISTS `carrito`;

CREATE TABLE `carrito` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDVid` int(11) DEFAULT NULL,
  `NombreV` varchar(40) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Empresa` varchar(40) DEFAULT NULL,
  `CorreoComp` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `carrito` */

insert  into `carrito`(`ID`,`IDVid`,`NombreV`,`Precio`,`Empresa`,`CorreoComp`) values 
(24,18,'Uncharted4',1000,'Ps4','fajardok@gmail.com');

/*Table structure for table `cuentas` */

DROP TABLE IF EXISTS `cuentas`;

CREATE TABLE `cuentas` (
  `IdCuenta` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Contrasena` varchar(45) DEFAULT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `CodigoPostal` int(10) DEFAULT NULL,
  `FechaNac` date DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdCuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `cuentas` */

insert  into `cuentas`(`IdCuenta`,`Nombre`,`Apellido`,`Correo`,`Contrasena`,`Telefono`,`Direccion`,`CodigoPostal`,`FechaNac`,`Sexo`) values 
(13,'Angel','Huerta','ahuerta@gmail.com','negro1234','6767676767','Nose',101010,'2006-07-12','Hombre'),
(14,'Kevin','Fajardo','fajardok@gmail.com','kyfs1234','6767676767','Por aya',500,'2006-12-07','Hombre'),
(15,'Juan','Perez','juanperez@gmail.com','jp12jp34','6767676767','Por aya',500,'2006-12-13','Hombre');

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `IDVid` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `NombreV` varchar(40) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Empresa` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IDVid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `productos` */

insert  into `productos`(`IDVid`,`Cantidad`,`NombreV`,`Precio`,`Empresa`) values 
(1,2885,'HaloInfinite',1200,'Xbox'),
(2,3652,'ForzaH5',1200,'Xbox'),
(3,1197,'Minecraft',750,'Xbox'),
(4,647,'Gears5',750,'Xbox'),
(5,317,'CoDMWII',1500,'Ps4'),
(6,256,'GoWRag',1500,'Ps4'),
(7,1500,'Cuphead',500,'Ps4'),
(8,1447,'DOOM',450,'Ps4'),
(9,452,'Fallout3',300,'Xbox360'),
(10,418,'FalloutNewV',300,'Xbox'),
(11,1640,'Fallout4',400,'Xbox'),
(12,2119,'SpiderMan2018',1400,'Ps4'),
(13,1453,'DbFighterZ',450,'Ps4'),
(14,2353,'DoomEternal',800,'Xbox'),
(15,464,'TheElderSS',600,'Xbox'),
(16,873,'TheWitcher3',450,'Ps4'),
(17,918,'DevilMC5',400,'Xbox'),
(18,2338,'Uncharted4',1000,'Ps4');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
