-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: robb0463.publiccloud.com.br:3306
-- Tempo de geração: 04/08/2023 às 09:10
-- Versão do servidor: 5.6.37-82.2-log
-- Versão do PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ctsdigital2011_senacchat`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`idCategoria`, `categoria`) VALUES
(1, 'Estética'),
(2, 'Bem-Estar'),
(3, 'Marketing '),
(4, 'Design'),
(5, 'Artes cênicas'),
(6, 'Gastronomia'),
(7, 'Gestão e Negócios'),
(8, 'Meio Ambiente'),
(9, 'Segurança e Saúde no trabalho'),
(10, 'Saúde'),
(11, 'Tecnologia da Informação'),
(12, 'Turismo'),
(13, 'Moda');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_chat`
--

CREATE TABLE `tb_chat` (
  `idChat` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dataCad` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_generos`
--

CREATE TABLE `tb_generos` (
  `idGenero` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_generos`
--

INSERT INTO `tb_generos` (`idGenero`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Feminino'),
(5, 'Não-binário'),
(6, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_imagens`
--

CREATE TABLE `tb_imagens` (
  `idImagem` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `fotoThumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_imagens`
--

INSERT INTO `tb_imagens` (`idImagem`, `foto`, `fotoThumb`) VALUES
(1, 'aula-biologia.jpg', 'aula-biologia.jpg'),
(2, 'camaleao.jpg', 'camaleao.jpg'),
(3, 'ideia.jpg', 'ideia.jpg'),
(4, 'vendingmachine.jpg', 'vendingmachine.jpg'),
(5, 'tech.jpg', 'tech.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_loginadm`
--

CREATE TABLE `tb_loginadm` (
  `idLoginAdm` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_loginadm`
--

INSERT INTO `tb_loginadm` (`idLoginAdm`, `email`, `senha`, `nome`) VALUES
(1, 'admin@senacchat.com', 'senac@brasil', 'Todes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_posts`
--

CREATE TABLE `tb_posts` (
  `idPost` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) NOT NULL,
  `dataCad` datetime NOT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `evento` tinyint(1) NOT NULL DEFAULT '0',
  `vote` int(11) DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `idCategoria` int(11) NOT NULL,
  `idImagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_posts`
--

INSERT INTO `tb_posts` (`idPost`, `idUsuario`, `titulo`, `descricao`, `dataCad`, `videos`, `evento`, `vote`, `ativo`, `idCategoria`, `idImagem`) VALUES
(1, 3, 'Técnologia em internet nas coisas', 'A tecnologia da internet nas coisas é muito importante', '2023-06-06 14:09:01', 'qDBFFZkRFDA', 0, 0, 1, 11, 2),
(2, 4, 'CSS: Sobre', 'SOU BEM DISCRETO', '2023-07-27 16:22:54', NULL, 0, 0, 1, 11, 3),
(3, 3, 'Máquinas de doces', 'SENAC apresenta máquina de doces inovadora: personalização de sabores e opções saudáveis para satisfazer todos os gostos. Delicie-se com essa nova experiência! #SENACSweetMachine', '2023-07-27 16:42:42', NULL, 1, 0, 1, 6, 4),
(4, 4, 'Techevent', 'SENAC promove evento tecnológico: palestras, workshops e demonstrações de novas tendências e inovações para impulsionar o setor. Imperdível para profissionais e entusiastas da área! #SENACTechEvent', '2023-07-27 16:51:22', NULL, 1, 0, 1, 6, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_uf`
--

CREATE TABLE `tb_uf` (
  `idUf` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_uf`
--

INSERT INTO `tb_uf` (`idUf`, `estado`) VALUES
(1, 'Rondônia'),
(2, 'Acre'),
(3, 'Amazonas'),
(4, 'Roraima'),
(5, 'Pará'),
(6, 'Amapá'),
(7, 'Tocantins'),
(8, 'Maranhão'),
(9, 'Piauí'),
(10, 'Ceará'),
(11, 'Rio Grande do Norte'),
(12, 'Paraíba'),
(13, 'Pernambuco'),
(14, 'Alagoas'),
(15, 'Sergipe'),
(16, 'Bahia'),
(17, 'Minas Gerais'),
(18, 'Espírito Santo'),
(19, 'Rio de Janeiro'),
(20, 'São Paulo'),
(21, 'Paraná'),
(22, 'Santa Catarina'),
(23, 'Rio Grande do Sul'),
(24, 'Mato Grosso do Sul'),
(25, 'Mato Grosso'),
(26, 'Goiás'),
(27, 'Distrito Federal');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `idUsuario` int(11) NOT NULL,
  `dataCad` datetime NOT NULL,
  `nome` varchar(255) NOT NULL,
  `fotoPerfil` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `posto` tinyint(1) NOT NULL DEFAULT '0',
  `idUf` int(11) NOT NULL,
  `suspenso` tinyint(1) NOT NULL DEFAULT '0',
  `telefone` varchar(255) NOT NULL,
  `nascimento` date NOT NULL,
  `idGenero` int(11) NOT NULL,
  `informacoes` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`idUsuario`, `dataCad`, `nome`, `fotoPerfil`, `email`, `senha`, `posto`, `idUf`, `suspenso`, `telefone`, `nascimento`, `idGenero`, `informacoes`, `ip`) VALUES
(3, '2023-06-06 13:35:02', 'Gustavo Rodrigues de Sousa', 'professor.png', 'gurosousa6@gmail.com', 'betoneirajaca22', 0, 20, 0, '(11) 96066-6840', '2004-10-30', 1, 'Sou uma pessoa maneira', ''),
(4, '2023-06-06 13:35:02', 'Matheus Santos Passoni', 'aluno.png', 'kcranel@outlook.com', 'Mudar#123', 0, 20, 0, '(11) 94071-8665', '2002-05-31', 1, '', '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`idChat`);

--
-- Índices de tabela `tb_generos`
--
ALTER TABLE `tb_generos`
  ADD PRIMARY KEY (`idGenero`);

--
-- Índices de tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  ADD PRIMARY KEY (`idImagem`);

--
-- Índices de tabela `tb_loginadm`
--
ALTER TABLE `tb_loginadm`
  ADD PRIMARY KEY (`idLoginAdm`);

--
-- Índices de tabela `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD PRIMARY KEY (`idPost`);

--
-- Índices de tabela `tb_uf`
--
ALTER TABLE `tb_uf`
  ADD PRIMARY KEY (`idUf`);

--
-- Índices de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `idChat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_generos`
--
ALTER TABLE `tb_generos`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  MODIFY `idImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_loginadm`
--
ALTER TABLE `tb_loginadm`
  MODIFY `idLoginAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_posts`
--
ALTER TABLE `tb_posts`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_uf`
--
ALTER TABLE `tb_uf`
  MODIFY `idUf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
