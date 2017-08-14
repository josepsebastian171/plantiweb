-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 11:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantillas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblplantillaalimentos`
--

CREATE TABLE `tblplantillaalimentos` (
  `idimagen` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplantillaalimentos`
--

INSERT INTO `tblplantillaalimentos` (`idimagen`, `titulo`, `imagen`) VALUES
(1, 'Plantilla_Alimen1', 'imagenes/plantillas/alimentos/Plantilla_Alimen1.png'),
(2, 'Plantilla_Alimen2', 'imagenes/plantillas/alimentos/Plantilla_Alimen2.png'),
(3, 'Plantilla_Alimen3', 'imagenes/plantillas/alimentos/Plantilla_Alimen3.png'),
(4, 'Plantilla_Alimen4', 'imagenes/plantillas/alimentos/Plantilla_Alimen4.png'),
(5, 'Plantilla_Alimen5', 'imagenes/plantillas/alimentos/Plantilla_Alimen5.png'),
(6, 'Plantilla_Alimen6', 'imagenes/plantillas/alimentos/Plantilla_Alimen6.png'),
(7, 'Plantilla_Alimen7', 'imagenes/plantillas/alimentos/plantilla_alimen7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblplantillaanimales`
--

CREATE TABLE `tblplantillaanimales` (
  `idimagen` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplantillaanimales`
--

INSERT INTO `tblplantillaanimales` (`idimagen`, `titulo`, `imagen`) VALUES
(1, 'Plantilla_Animal1', 'imagenes/plantillas/animales/plantilla_animal1.png'),
(2, 'Plantilla_Animal2', 'imagenes/plantillas/animales/plantilla_animal2.png'),
(3, 'Plantilla_Animal3', 'imagenes/plantillas/animales/plantilla_animal3.png'),
(4, 'Plantilla_Animal4', 'imagenes/plantillas/animales/plantilla_animal4.png'),
(5, 'Plantilla_Animal5', 'imagenes/plantillas/animales/plantilla_animal5.png'),
(6, 'Plantilla_Animal6', 'imagenes/plantillas/animales/plantilla_animal6.png'),
(7, 'Plantilla_Animal7', 'imagenes/plantillas/animales/plantilla_animal7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblplantillaarte`
--

CREATE TABLE `tblplantillaarte` (
  `idimagen` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplantillaarte`
--

INSERT INTO `tblplantillaarte` (`idimagen`, `titulo`, `imagen`) VALUES
(1, 'Plantilla_Arte1', 'imagenes/plantillas/arte/plantilla_Arte1.png'),
(2, 'Plantilla_Arte2', 'imagenes/plantillas/arte/plantilla_Arte2.png'),
(3, 'Plantilla_Arte3', 'imagenes/plantillas/arte/plantilla_Arte3.png'),
(4, 'Plantilla_Arte4', 'imagenes/plantillas/arte/plantilla_arte4.png'),
(5, 'Plantilla_Arte5', 'imagenes/plantillas/arte/plantilla_arte5.png'),
(6, 'Plantilla_Arte6', 'imagenes/plantillas/arte/plantilla_arte6.png'),
(7, 'Plantilla_Arte7', 'imagenes/plantillas/arte/plantilla_arte7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblplantillamusica`
--

CREATE TABLE `tblplantillamusica` (
  `idimagen` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplantillamusica`
--

INSERT INTO `tblplantillamusica` (`idimagen`, `titulo`, `imagen`) VALUES
(1, 'Plantilla_Musica1', 'imagenes/plantillas/musica/plantilla_musica1.png'),
(2, 'Plantilla_Musica2', 'imagenes/plantillas/musica/plantilla_musica2.png'),
(3, 'Plantilla_Musica3', 'imagenes/plantillas/musica/plantilla_musica3.png'),
(4, 'Plantilla_Musica4', 'imagenes/plantillas/musica/plantilla_musica4.png'),
(5, 'Plantilla_Musica5', 'imagenes/plantillas/musica/plantilla_musica5.png'),
(6, 'Plantilla_Musica6', 'imagenes/plantillas/musica/plantilla_musica6.png'),
(7, 'Plantilla_Musica7', 'imagenes/plantillas/musica/plantilla_musica7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblplantillapaisajes`
--

CREATE TABLE `tblplantillapaisajes` (
  `idimagen` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplantillapaisajes`
--

INSERT INTO `tblplantillapaisajes` (`idimagen`, `titulo`, `imagen`) VALUES
(1, 'Plantilla_paisajes1', 'imagenes/plantillas/paisajes/plantilla_paisajes1.png'),
(2, 'Plantilla_paisajes2', 'imagenes/plantillas/paisajes/plantilla_paisajes2.png'),
(3, 'Plantilla_paisajes3', 'imagenes/plantillas/paisajes/plantilla_paisajes3.png'),
(4, 'Plantilla_paisajes4', 'imagenes/plantillas/paisajes/plantilla_paisajes4.png'),
(5, 'Plantilla_paisajes5', 'imagenes/plantillas/paisajes/plantilla_paisajes5.png'),
(6, 'Plantilla_paisajes6', 'imagenes/plantillas/paisajes/plantilla_paisajes6.png'),
(7, 'Plantilla_paisajes7', 'imagenes/plantillas/paisajes/plantilla_paisajes7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblplantillatecnologia`
--

CREATE TABLE `tblplantillatecnologia` (
  `idimagen` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplantillatecnologia`
--

INSERT INTO `tblplantillatecnologia` (`idimagen`, `titulo`, `imagen`) VALUES
(1, 'Plantilla_Tec1', 'imagenes/plantillas/tecnologia/plantilla_tec1.png'),
(2, 'Plantilla_Tec2', 'imagenes/plantillas/tecnologia/plantilla_tec2.png'),
(3, 'Plantilla_Tec3', 'imagenes/plantillas/tecnologia/plantilla_tec3.png'),
(4, 'Plantilla_Tec4', 'imagenes/plantillas/tecnologia/plantilla_tec4.png'),
(5, 'Plantilla_Tec5', 'imagenes/plantillas/tecnologia/plantilla_tec5.png'),
(6, 'Plantilla_Tec6', 'imagenes/plantillas/tecnologia/plantilla_tec6.png'),
(7, 'Plantilla_Tec7', 'imagenes/plantillas/tecnologia/plantilla_tec7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblplantillaturismo`
--

CREATE TABLE `tblplantillaturismo` (
  `idimagen` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplantillaturismo`
--

INSERT INTO `tblplantillaturismo` (`idimagen`, `titulo`, `imagen`) VALUES
(1, 'Plantilla_Turismo1', 'imagenes/plantillas/turismo/plantilla_turismo1.png'),
(2, 'Plantilla_Turismo2', 'imagenes/plantillas/turismo/plantilla_turismo2.png'),
(3, 'Plantilla_Turismo3', 'imagenes/plantillas/turismo/plantilla_turismo3.png'),
(4, 'Plantilla_Turismo4', 'imagenes/plantillas/turismo/plantilla_turismo4.png'),
(5, 'Plantilla_Turismo5', 'imagenes/plantillas/turismo/plantilla_turismo5.png'),
(6, 'Plantilla_Turismo6', 'imagenes/plantillas/turismo/plantilla_turismo6.png'),
(7, 'Plantilla_Turismo7', 'imagenes/plantillas/turismo/plantilla_turismo7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `usuario` varchar(15) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `clave` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusuarios`
--

INSERT INTO `tblusuarios` (`usuario`, `nombres`, `apellidos`, `correo`, `clave`) VALUES
('', '', '', '', ''),
('usuario1', 'Jose', 'Gonzalez', 'josegon@yahoo.com', '123'),
('usuario2', 'Fernando', 'Gómez', 'fergo@gmail.com', '123'),
('usuario3', 'Oscar Andres', 'Perez', 'oscarpe@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblplantillaalimentos`
--
ALTER TABLE `tblplantillaalimentos`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indexes for table `tblplantillaanimales`
--
ALTER TABLE `tblplantillaanimales`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indexes for table `tblplantillaarte`
--
ALTER TABLE `tblplantillaarte`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indexes for table `tblplantillamusica`
--
ALTER TABLE `tblplantillamusica`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indexes for table `tblplantillapaisajes`
--
ALTER TABLE `tblplantillapaisajes`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indexes for table `tblplantillatecnologia`
--
ALTER TABLE `tblplantillatecnologia`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indexes for table `tblplantillaturismo`
--
ALTER TABLE `tblplantillaturismo`
  ADD PRIMARY KEY (`idimagen`);

--
-- Indexes for table `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblplantillaalimentos`
--
ALTER TABLE `tblplantillaalimentos`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblplantillaanimales`
--
ALTER TABLE `tblplantillaanimales`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblplantillaarte`
--
ALTER TABLE `tblplantillaarte`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblplantillamusica`
--
ALTER TABLE `tblplantillamusica`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblplantillapaisajes`
--
ALTER TABLE `tblplantillapaisajes`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblplantillatecnologia`
--
ALTER TABLE `tblplantillatecnologia`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblplantillaturismo`
--
ALTER TABLE `tblplantillaturismo`
  MODIFY `idimagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
