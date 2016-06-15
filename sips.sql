-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2016 às 05:45
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sips`
--
CREATE DATABASE IF NOT EXISTS `sips` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sips`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dado_bancario`
--

CREATE TABLE `dado_bancario` (
  `id_dado_bancario` int(11) NOT NULL,
  `matric_usu` varchar(20) NOT NULL,
  `banco` varchar(50) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `agencia` varchar(10) NOT NULL,
  `conta` int(10) NOT NULL,
  `operacao` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dado_bancario`
--

INSERT INTO `dado_bancario` (`id_dado_bancario`, `matric_usu`, `banco`, `tipo`, `agencia`, `conta`, `operacao`) VALUES
(7, 'fpin2015', 'Banco do Brasil', 'Poupança', '4425', 44, 44),
(8, 'Fpin001', 'Caixa econômica Federal', 'Poupança', '442258', 44256, 113);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dado_estudantil`
--

CREATE TABLE `dado_estudantil` (
  `id_dado_estudantil` int(11) NOT NULL,
  `matric_usu` varchar(20) NOT NULL,
  `modalidade` varchar(50) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `periodo_ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dado_estudantil`
--

INSERT INTO `dado_estudantil` (`id_dado_estudantil`, `matric_usu`, `modalidade`, `curso`, `periodo_ano`) VALUES
(2, 'fpin2015', 'superior', 'Sistemas de informação', 4),
(3, 'Fpin001', 'superior', 'Sistemas de informação', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dado_familia`
--

CREATE TABLE `dado_familia` (
  `id_dado_familia` int(11) NOT NULL,
  `matric_usu` varchar(20) NOT NULL,
  `qtd_familia` int(11) NOT NULL,
  `renda_familia` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dado_familia`
--

INSERT INTO `dado_familia` (`id_dado_familia`, `matric_usu`, `qtd_familia`, `renda_familia`) VALUES
(7, 'fpin2015', 6, '12345.00'),
(8, 'Fpin001', 5, '2500.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informativo`
--

CREATE TABLE `informativo` (
  `id` int(11) NOT NULL,
  `matricula_usu` varchar(20) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `texto` varchar(300) NOT NULL,
  `arquivo` varchar(50) DEFAULT NULL,
  `tipo` varchar(12) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `informativo`
--

INSERT INTO `informativo` (`id`, `matricula_usu`, `titulo`, `texto`, `arquivo`, `tipo`, `data`) VALUES
(26, '20161IFAL', 'Resultado Alimentação', 'Segue anexo dos resultados', 'ba4070ed67ceed7fcd6011168adadb5d.pdf', 'resultado', '2016-06-08 20:08:47'),
(27, '2016IFAL', 'Pagamento Moradia', 'será dia 23/03/2016', '', 'informativo', '2016-06-08 20:09:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programa`
--

CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `valor` decimal(18,2) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `imagem` varchar(150) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `programa`
--

INSERT INTO `programa` (`id_programa`, `nome`, `valor`, `descricao`, `imagem`) VALUES
(3, 'Auxílio Transporte', '80.00', 'O Auxílio Transporte visa assegurar aos estudantes recursos financeiros para custear despesas com transporte, que possibilitem condições de permanência no IFAL.', 'cc0466ace7ec53cb96c0ed1fd9fb7501.png'),
(4, 'Auxílio Alimentação', '0.00', 'O Auxílio Alimentação visa assegurar aos estudantes recursos financeiros para custear despesas com alimentação, que possibilitem condições de permanência no IFAL.\r\nO aluno receberá Almoço ou Jantar, depende de sua necessidade.', '00b1808c84d91d1098267128abb2c277.png'),
(5, 'Auxílio Moradia', '400.00', 'O Auxílio Moradia visa assegurar aos estudantes recursos financeiros para custear despesas com moradia, que possibilitem condições de permanência no IFAL.', '6a2e7a360c17a07cfacbcd085110b992.png'),
(6, 'Auxílio Apoio às Atividades Estudantis', '0.00', 'O Programa de Apoio às Atividades Estudantis engloba concessões de óculos corretivos, fardamento escolar e  material didático visando proporcionar condições igualitárias de participação nas atividades escolares.', 'dd8d7b87a84f4c5e84826d19fafd09c7.png'),
(7, 'Bolsa de Estudo', '150.00', 'O Programa Bolsa de Estudo assiste financeiramente aos alunos que participem de atividades educacionais no horário contrário das aulas regulares, incluindo a participação do aluno em programas e projetos de pesquisa ou extensão na condição de colaborador, tendo como objetivo contribuir para a diminu', 'f5c8a5528b257844434670e6cb608642.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `selecao`
--

CREATE TABLE `selecao` (
  `id_selecao` int(11) NOT NULL,
  `id_programa` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_termino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `selecao`
--

INSERT INTO `selecao` (`id_selecao`, `id_programa`, `nome`, `descricao`, `dt_inicio`, `dt_termino`) VALUES
(3, 3, 'Transporte 2016.2', 'Voltado apenas para alunos do interior', '2016-06-01', '2016-06-30'),
(4, 3, 'Transporte 2016.2.1', 'Voltado para todos os alunos', '2016-05-03', '2016-06-06'),
(5, 3, 'Transporte 2016.0', '', '2016-01-01', '2016-01-30'),
(6, 3, 'Transporte 2015', '', '2015-01-01', '2015-01-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `selecao_usuario`
--

CREATE TABLE `selecao_usuario` (
  `id_selecao_usuario` int(11) NOT NULL,
  `id_selecao` int(11) NOT NULL,
  `matric_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `selecao_usuario`
--

INSERT INTO `selecao_usuario` (`id_selecao_usuario`, `id_selecao`, `matric_usuario`) VALUES
(18, 3, 'fpin2015'),
(19, 3, 'Fpin001');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `matricula` varchar(20) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(80) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `estado_civil` varchar(8) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`matricula`, `nome`, `rg`, `cpf`, `email`, `data_nascimento`, `sexo`, `estado_civil`, `tipo_usuario`, `senha`) VALUES
('20161IFAL', 'Assistente Administrativo', '3425689-2', '000.000.000-00', 'assistenteifal@gmail.com', '2016-06-01', 'Feminino', 'Solteiro', 2, 'a4d8ce488de59d05d5cb6b8b966e9bec'),
('Fpin001', 'Admin', '0000000-0', '100.000.000-00', 'admin@gmail.com', '1992-05-17', 'Masculino', 'Solteiro', 1, 'a4d8ce488de59d05d5cb6b8b966e9bec'),
('fpin123', 'Clevison Teste', '3369565-8', '000.000.000-02', 'teste@teste.com', '1994-05-20', 'Masculino', 'Solteiro', 1, 'f40532f558aa866885483b64a19115d5'),
('fpin2015', 'Maria joaquina', '3256988-9', '123.456.789-10', 'maria@gmail.com', '1994-09-20', 'Feminino', 'Viuvo', 1, 'a4d8ce488de59d05d5cb6b8b966e9bec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dado_bancario`
--
ALTER TABLE `dado_bancario`
  ADD PRIMARY KEY (`id_dado_bancario`);

--
-- Indexes for table `dado_estudantil`
--
ALTER TABLE `dado_estudantil`
  ADD PRIMARY KEY (`id_dado_estudantil`);

--
-- Indexes for table `dado_familia`
--
ALTER TABLE `dado_familia`
  ADD PRIMARY KEY (`id_dado_familia`);

--
-- Indexes for table `informativo`
--
ALTER TABLE `informativo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_programa`);

--
-- Indexes for table `selecao`
--
ALTER TABLE `selecao`
  ADD PRIMARY KEY (`id_selecao`);

--
-- Indexes for table `selecao_usuario`
--
ALTER TABLE `selecao_usuario`
  ADD PRIMARY KEY (`id_selecao_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `un_rg` (`rg`),
  ADD UNIQUE KEY `un_cpf` (`cpf`),
  ADD UNIQUE KEY `un_email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dado_bancario`
--
ALTER TABLE `dado_bancario`
  MODIFY `id_dado_bancario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dado_estudantil`
--
ALTER TABLE `dado_estudantil`
  MODIFY `id_dado_estudantil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dado_familia`
--
ALTER TABLE `dado_familia`
  MODIFY `id_dado_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `informativo`
--
ALTER TABLE `informativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `programa`
--
ALTER TABLE `programa`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `selecao`
--
ALTER TABLE `selecao`
  MODIFY `id_selecao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `selecao_usuario`
--
ALTER TABLE `selecao_usuario`
  MODIFY `id_selecao_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
