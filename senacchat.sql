-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2023 às 16:53
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senacchat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_categoria`
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
-- Estrutura da tabela `tb_chat`
--

CREATE TABLE `tb_chat` (
  `idChat` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dataCad` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_generos`
--

CREATE TABLE `tb_generos` (
  `idGenero` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_generos`
--

INSERT INTO `tb_generos` (`idGenero`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Feminino'),
(5, 'Não-binário'),
(6, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagens`
--

CREATE TABLE `tb_imagens` (
  `idImagem` int(11) NOT NULL,
  `idPost` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `fotoThumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_imagens`
--

INSERT INTO `tb_imagens` (`idImagem`, `idPost`, `foto`, `fotoThumb`) VALUES
(1, 0, 'foto-g.jpg', 'foto-p.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_loginadm`
--

CREATE TABLE `tb_loginadm` (
  `idLoginAdm` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_loginadm`
--

INSERT INTO `tb_loginadm` (`idLoginAdm`, `email`, `senha`, `nome`) VALUES
(1, 'admin@senacchat.com', 'senac@brasil', 'Todes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_posts`
--

CREATE TABLE `tb_posts` (
  `idPost` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `dataCad` datetime NOT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `evento` tinyint(1) NOT NULL DEFAULT 0,
  `vote` int(11) DEFAULT NULL,
  `idCategoria` int(11) NOT NULL,
  `idImagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_posts`
--

INSERT INTO `tb_posts` (`idPost`, `idUsuario`, `titulo`, `dataCad`, `videos`, `evento`, `vote`, `idCategoria`, `idImagem`) VALUES
(1, 3, 'Técnologia em internet nas coisas', '2023-06-06 14:09:01', 'qDBFFZkRFDA', 0, NULL, 11, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_uf`
--

CREATE TABLE `tb_uf` (
  `idUf` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_uf`
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
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `idUsuario` int(11) NOT NULL,
  `dataCad` datetime NOT NULL,
  `nome` varchar(255) NOT NULL,
  `fotoPerfil` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `idUf` int(11) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `nascimento` date NOT NULL,
  `idGenero` int(11) NOT NULL,
  `informacoes` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`idUsuario`, `dataCad`, `nome`, `fotoPerfil`, `email`, `senha`, `idUf`, `telefone`, `nascimento`, `idGenero`, `informacoes`, `ip`) VALUES
(3, '2023-06-06 13:35:02', 'Gustavo Rodrigues de Sousa', 'Gustavo.jpg', 'gurosousa6@gmail.com', 'betoneirajaca22', 20, '(11) 96066-6840', '2004-10-30', 1, 'Sou uma pessoa maneira', ''),
(4, '2023-06-06 13:35:02', 'Matheus Santos Passoni', 'Matheus.jpg', 'kcranel@outlook.com', 'Mudar#123', 20, '(11)94071-8665', '2002-05-31', 1, '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`idChat`);

--
-- Índices para tabela `tb_generos`
--
ALTER TABLE `tb_generos`
  ADD PRIMARY KEY (`idGenero`);

--
-- Índices para tabela `tb_imagens`
--
ALTER TABLE `tb_imagens`
  ADD PRIMARY KEY (`idImagem`);

--
-- Índices para tabela `tb_loginadm`
--
ALTER TABLE `tb_loginadm`
  ADD PRIMARY KEY (`idLoginAdm`);

--
-- Índices para tabela `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD PRIMARY KEY (`idPost`);

--
-- Índices para tabela `tb_uf`
--
ALTER TABLE `tb_uf`
  ADD PRIMARY KEY (`idUf`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
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
  MODIFY `idImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_loginadm`
--
ALTER TABLE `tb_loginadm`
  MODIFY `idLoginAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_posts`
--
ALTER TABLE `tb_posts`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
