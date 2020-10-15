--
-- Database: `projetofinal`
--


CREATE TABLE `cadastrar` (
 `id_cadastro` int(5) NOT NULL AUTO_INCREMENT,
 `tipo` varchar(12) NOT NULL,
 `processador` varchar(50) NOT NULL,
 `ram` varchar(15) NOT NULL,
 `disco` varchar(15) NOT NULL,
 `marca` varchar(15) NOT NULL,
 `modelo` varchar(20) NOT NULL,
 `fonte` varchar(10) NOT NULL,
 `tela` int(20) NOT NULL,
 PRIMARY KEY (`id_cadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4
	CREATE TABLE `venda` (
 `id_cliente` int(5) NOT NULL AUTO_INCREMENT,
 `cliente` varchar(25) NOT NULL,
 `cpf` varchar(14) NOT NULL,
 `produto` varchar(12) NOT NULL,
 `modelo` varchar(10) NOT NULL,
 `valor` decimal(6,2) NOT NULL,
 `quantidade_comprada` int(5) NOT NULL,
 `quantidade_disponivel` int(5) NOT NULL,
 PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4