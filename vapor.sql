-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2022 às 00:18
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vapor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `cpf`, `email`, `senha`) VALUES
(1, 'Admin', 'xxxxxxxxxxx', 'admin@vapor.com', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(14, 'AÇÃO'),
(18, 'AMIZADE'),
(17, 'ARCADE'),
(15, 'AVENTURA'),
(16, 'CORRIDA'),
(19, 'ESPORTES'),
(23, 'FPS'),
(24, 'MOBA'),
(20, 'PESCARIA'),
(25, 'RPG'),
(21, 'SIMULADOR'),
(22, 'SUSPENSE'),
(13, 'TERROR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `idioma`
--

CREATE TABLE `idioma` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `idioma`
--

INSERT INTO `idioma` (`id`, `nome`) VALUES
(1, 'Inglês'),
(2, 'Espanhol'),
(3, 'Italiano'),
(4, 'Chines'),
(5, 'Romeno'),
(6, 'Português'),
(7, 'romarinho'),
(8, 'alemão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `descricao` longtext DEFAULT NULL,
  `imagem_url` varchar(200) NOT NULL,
  `video_url` varchar(200) DEFAULT NULL,
  `data_lancamento` date NOT NULL,
  `desenvolvedora` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `nome`, `valor`, `descricao`, `imagem_url`, `video_url`, `data_lancamento`, `desenvolvedora`, `id_categoria`) VALUES
(1, 'MINECRAFT', 29, 'Jogo Quadrado', 'https://files.tecnoblog.net/wp-content/uploads/2019/09/minecraft-001.jpg', NULL, '2022-09-09', 'Mojang', 15),
(2, 'THE LAST OF US', 30, 'Jogo de Zumbi', 'https://upload.wikimedia.org/wikipedia/pt/b/be/The_Last_of_Us_capa.png', NULL, '2022-10-09', 'Naughty Dog', 13),
(3, 'ELDEN RING', 300, 'Jogo Maluco', 'https://files.tecnoblog.net/wp-content/uploads/2022/03/elden-ring-4-700x394.jpg', NULL, '2022-10-13', 'FromSoftware', 14),
(5, 'LEAGUE OF LEGENDS', 0, 'Jogo de Torres e Poderzinho', 'https://s2.glbimg.com/M4Df2YVeiwElmr4cqNv1J_-gVgQ=/800x0/smart/filters:strip_icc()/s.glbimg.com/po/tt2/f/original/2014/04/03/league-of-legends-10.jpg', NULL, '2015-05-03', 'Riot', 24),
(7, 'THE LEGEND OF ZELDA: BREATH OF THE WILD', 300, 'Jogo do Link', 'https://cdn.pocket-lint.com/r/s/970x/assets/images/137952-games-review-the-legend-of-zelda-breath-of-the-wild-review-image1-tbvqza2wel-jpg.webp', NULL, '2017-05-03', 'Nintendo', 15),
(9, 'BATTLEFIELD 4', 299, 'Melhor FPS que tem', 'https://uploads.jovemnerd.com.br/wp-content/uploads/2021/06/battlefield-4-esta-gratuito-para-pc-no-amazon-prime-gaming.jpg', NULL, '2016-05-03', 'DICE', 23),
(10, 'BATTLEFIELD 2048', 150, 'Trailer é lindo mas o jogo é muito ruim', 'https://uploads.jovemnerd.com.br/wp-content/uploads/2021/11/Battlefield-2042-review.jpg', NULL, '2021-09-03', 'DICE', 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_idioma`
--

CREATE TABLE `jogo_idioma` (
  `id` int(11) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo_idioma`
--

INSERT INTO `jogo_idioma` (`id`, `id_jogo`, `id_idioma`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 4),
(6, 2, 3),
(16, 10, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_plataforma`
--

CREATE TABLE `jogo_plataforma` (
  `id` int(11) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo_plataforma`
--

INSERT INTO `jogo_plataforma` (`id`, `id_jogo`, `id_plataforma`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(9, 3, 3),
(10, 1, 4),
(11, 2, 4),
(12, 3, 4),
(13, 7, 8),
(18, 7, 7),
(19, 7, 8),
(20, 7, 1),
(21, 5, 1),
(23, 10, 1),
(26, 9, 4),
(28, 9, 6),
(29, 9, 7),
(30, 9, 8),
(32, 10, 1),
(33, 10, 4),
(34, 10, 6),
(40, 9, 2),
(41, 9, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` mediumtext NOT NULL,
  `arquivado` bit(1) DEFAULT NULL,
  `visualizado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `nome`, `email`, `assunto`, `mensagem`, `arquivado`, `visualizado`) VALUES
(1, 'teste', 'teste@vapor.com', 'Sugestão', 'Mensagem de teste de funcionalidade', b'0', b'0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

CREATE TABLE `plataforma` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`id`, `nome`) VALUES
(1, 'PC'),
(2, 'Playstation 2'),
(3, 'Playstation 3'),
(4, 'Playstation 4'),
(5, 'Xbox 360'),
(6, 'Xbox One'),
(7, 'Nintendo Wii'),
(8, 'Nintendo Switch');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `imagem_url` (`imagem_url`),
  ADD UNIQUE KEY `video_url` (`video_url`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Índices para tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_idioma` (`id_idioma`);

--
-- Índices para tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_plataforma` (`id_plataforma`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

--
-- Limitadores para a tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  ADD CONSTRAINT `jogo_idioma_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `jogo_idioma_ibfk_2` FOREIGN KEY (`id_idioma`) REFERENCES `idioma` (`id`);

--
-- Limitadores para a tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  ADD CONSTRAINT `jogo_plataforma_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `jogo_plataforma_ibfk_2` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
