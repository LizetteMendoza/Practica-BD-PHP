-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para prueba
CREATE DATABASE IF NOT EXISTS `prueba` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `prueba`;

-- Volcando estructura para tabla prueba.tareas
CREATE TABLE IF NOT EXISTS `tareas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarea` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `etiqueta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla prueba.tareas: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
INSERT INTO `tareas` (`id`, `tarea`, `descripcion`, `etiqueta`) VALUES
	(1, 'Reporte exposiciÃ³n', 'Reporte de la segunda exposiciÃ³n de PSPM', 'escuela'),
	(2, 'Vision IS II', 'VisiÃ³n del proyecto de ingenieria de software', 'escuela'),
	(3, 'Movimiento de cÃ¡mara', 'RevisiÃ³n del material de apoyo y resoluciÃ³n del cuestionario de evaluaciÃ³n', 'escuela'),
	(4, 'Resumen de zero tolerancia', 'Resume de modelo ZT', 'escuela'),
	(5, 'Revisar tema dialogo', 'RevisiÃ³n del tema del viernes pasado', 'escuela'),
	(6, 'DiseÃ±o de publicidad', 'Publicidad para clases', 'trabajo'),
	(7, 'Envio de refrendo', 'Llevar papeles de refrendo para beca', 'personal'),
	(8, 'Regla de los tercios', 'RevisiÃ³n del material y resoluciÃ³n de la evaluaciÃ³n del tema', 'escuela'),
	(9, 'Retiro', 'Retiro de deposito de beca', 'personal'),
	(10, 'Carta de recomendaciÃ³n', 'Enviar carta de recomendaciÃ³n por correo para el jueves', 'trabajo');
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
