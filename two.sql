CREATE DATABASE mahasiswa;

USE mahasiswa;

CREATE TABLE IF NOT EXISTS `mahasiswa`.`siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(255) NOT NULL , 
  `jenis_kelamin` CHAR(2) NOT NULL , 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`) VALUES
(1, 'Agus', 'L'),
(2, 'Dinda', 'P'),
(3, 'Johan', 'L'),
(4, 'Restu', 'L'),
(5, 'Fennie', 'P'),
(6, 'Rani', 'P'),
(7, 'Lucas', 'L'),
(8, 'Budi', 'L');
