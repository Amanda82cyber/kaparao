-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 18/02/2020 às 16h19min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `kaparao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE IF NOT EXISTS `atendimento` (
  `id_atendimento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_atendimento` varchar(300) NOT NULL,
  PRIMARY KEY (`id_atendimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `atendimento`
--

INSERT INTO `atendimento` (`id_atendimento`, `nome_atendimento`) VALUES
(1, 'CRM'),
(2, 'CRAS'),
(3, 'CAPS AD I'),
(4, 'Espaço Crescer'),
(5, 'LGBT'),
(6, 'Casa Transitória'),
(7, 'CREAS'),
(8, 'CAPS II Mental'),
(9, 'Centro Afro'),
(10, 'Políticas de Direitos Humanos'),
(11, 'Centro POP'),
(12, 'Casas de Acolhimento'),
(13, 'CRASMA'),
(14, 'Centro da Juventude'),
(15, 'Políticas P/ Pessoa com Deficiência');

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao_familiar`
--

CREATE TABLE IF NOT EXISTS `composicao_familiar` (
  `CPF` char(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `parentesco` varchar(50) NOT NULL,
  `ocupacao` varchar(50) NOT NULL,
  `renda` float NOT NULL,
  `escolaridade` varchar(50) NOT NULL,
  `cor_etnia` varchar(50) NOT NULL,
  `id_familiar` int(11) NOT NULL AUTO_INCREMENT,
  `idade` int(11) NOT NULL,
  PRIMARY KEY (`id_familiar`),
  KEY `CPF` (`CPF`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `composicao_familiar`
--

INSERT INTO `composicao_familiar` (`CPF`, `nome`, `parentesco`, `ocupacao`, `renda`, `escolaridade`, `cor_etnia`, `id_familiar`, `idade`) VALUES
('47203631800', 'Cesar LuÃ­s Moreira', 'Pai', 'Empregado Com Carteira', 2000, 'Ensino MÃ©dio Completo', 'Branca', 1, 50),
('47203631800', 'Cesar LuÃ­s Moreira Junior', 'IrmÃ£o', 'Empregado Com Carteira', 2000, 'Ensino Superior Completo', 'Branca', 2, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `CPF_pessoa` char(11) NOT NULL,
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(250) NOT NULL,
  `num_casa` int(11) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `UF_cidade` int(11) NOT NULL,
  `CEP` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_contato`),
  KEY `CPF_pessoa` (`CPF_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`CPF_pessoa`, `id_contato`, `endereco`, `num_casa`, `complemento`, `bairro`, `cidade`, `telefone`, `celular`, `UF_cidade`, `CEP`, `email`) VALUES
('36735126840', 2, 'Av. Carmen Adelaide Fraiz', 113, 'PrÃ³ximo a Escola Olga', 'Parque ResidÃªncial SÃ£o Paulo', 'Araraquara', 1634612789, 988137748, 0, 14808530, 'jadcodes@gmail.com'),
('47203631800', 3, 'Av. Luiz AntÃ´nio CorrÃªa Da Silva', 147, '', 'Parque ResidÃªncial SÃ£o Paulo', 'Araraquara', 33859746, 2147483647, 0, 14811540, 'nandamoreira945@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `CPF` char(11) NOT NULL,
  `RG` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nome_social` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL COMMENT 'M= Masculino e F = Feminino',
  `orientacao_sexual` varchar(50) NOT NULL,
  `NIS` char(11) NOT NULL,
  `cor_etnia` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `ocupacao` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `renda` float NOT NULL,
  `orgao_rg` char(3) NOT NULL,
  `expedicao_rg` date NOT NULL,
  `estado_civil` varchar(100) NOT NULL,
  `nacionalidade` varchar(100) NOT NULL,
  `naturalidade` varchar(100) NOT NULL,
  `UF_naturalidade` char(2) NOT NULL,
  `pai` varchar(100) NOT NULL,
  `mae` varchar(100) NOT NULL,
  `deficiencia` varchar(100) NOT NULL,
  `grau_instrucao` varchar(100) NOT NULL,
  `beneficios_governo` varchar(250) NOT NULL,
  `valor_bene_gov` float NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`CPF`, `RG`, `nome`, `nome_social`, `sexo`, `orientacao_sexual`, `NIS`, `cor_etnia`, `data_nascimento`, `profissao`, `ocupacao`, `empresa`, `renda`, `orgao_rg`, `expedicao_rg`, `estado_civil`, `nacionalidade`, `naturalidade`, `UF_naturalidade`, `pai`, `mae`, `deficiencia`, `grau_instrucao`, `beneficios_governo`, `valor_bene_gov`, `senha`) VALUES
('', 0, '', '', 'E', '', '', 'Escolher...', '0000-00-00', '', 'Escolher...', '', 0, '', '0000-00-00', 'Escolher...', '', '', 'Es', '', '', '', 'Escolher...', '', 0, ''),
('12345678905', 120956783, 'Cesar LuÃ­s', '', 'M', '', '09876543210', 'Branca', '1979-03-07', 'Pedreiro', 'AuxÃ­lio INSS', 'DAAE', 1888, 'SSP', '2006-06-08', 'Separada(o) Judicialmente', 'Brasil', 'Araraquara', 'SP', 'Pedro', 'Lourdes', '', 'Ensino MÃ©dio Completo', '', 0, ''),
('36735126840', 475493102, 'Jadson Augusto da Silva', '', 'M', '', '12345678901', 'Branca', '1989-08-14', 'Garoto de Programa', 'Empregado Com Carteira', 'PMA', 1000, 'SSP', '2012-02-02', 'Solteira(o)', 'Brasil', 'Araraquara', 'SP', 'Joseph', 'Mary', 'Uso Ã³culos serve?', 'Ensino Superior Incompleto/Cursando', '', 0, ''),
('47203631800', 555222666, 'Amanda', '', 'F', '', '', 'Branca', '2002-05-06', 'EstagiÃ¡ria', 'EstÃ¡gio', '', 430, 'SSP', '2011-03-05', 'Solteira(o)', 'Brasil', 'Araraquara', 'SP', 'Cesar', 'Adriana', '', 'Ensino MÃ©dio Incompleto/Cursando', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_atend`
--

CREATE TABLE IF NOT EXISTS `pessoa_atend` (
  `id_juncao` int(11) NOT NULL AUTO_INCREMENT,
  `CPF_pessoa` char(11) NOT NULL,
  `atendido_por` varchar(300) NOT NULL,
  PRIMARY KEY (`id_juncao`),
  KEY `CPF_pessoa` (`CPF_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_situ`
--

CREATE TABLE IF NOT EXISTS `pessoa_situ` (
  `id_pessoa_situ` int(11) NOT NULL AUTO_INCREMENT,
  `CPF_pessoa` char(11) NOT NULL,
  `nome_situacao` varchar(300) NOT NULL,
  PRIMARY KEY (`id_pessoa_situ`),
  KEY `CPF_pessoa` (`CPF_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_social`
--

CREATE TABLE IF NOT EXISTS `situacao_social` (
  `id_situacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome_situ_soc` varchar(300) NOT NULL,
  PRIMARY KEY (`id_situacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `situacao_social`
--

INSERT INTO `situacao_social` (`id_situacao`, `nome_situ_soc`) VALUES
(1, 'Egresso (Sistema Prisional)'),
(2, 'Violência Doméstica'),
(3, 'População em Situação de Rua'),
(4, 'Jovem Arrimo De Família'),
(5, 'Situação de Acolhimento (Crianças em Programa Provisório ou Casa De Abrigo)');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `composicao_familiar`
--
ALTER TABLE `composicao_familiar`
  ADD CONSTRAINT `composicao_familiar_ibfk_1` FOREIGN KEY (`CPF`) REFERENCES `pessoas` (`CPF`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `contato_ibfk_1` FOREIGN KEY (`CPF_pessoa`) REFERENCES `pessoas` (`CPF`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `pessoa_atend`
--
ALTER TABLE `pessoa_atend`
  ADD CONSTRAINT `pessoa_atend_ibfk_1` FOREIGN KEY (`CPF_pessoa`) REFERENCES `pessoas` (`CPF`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `pessoa_situ`
--
ALTER TABLE `pessoa_situ`
  ADD CONSTRAINT `pessoa_situ_ibfk_1` FOREIGN KEY (`CPF_pessoa`) REFERENCES `pessoas` (`CPF`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
