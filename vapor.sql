-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 00:41
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

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
(1, 'Matheus de Barros Fagionato', '42381546812', 'mdbf42@gmail.com', 'teste1'),
(2, 'Roberto Arnaldo', '80583687091', 'mdbf43@gmail.com', 'teste2'),
(3, 'Arthud Dent', '73030876055', 'mdbf44@gmail.com', 'teste3'),
(4, 'Seu Cebola', '07924654070', 'mdbf45@gmail.com', 'teste4'),
(5, 'Ronaldo Fenômeno', '01547105046', 'mdbf46@gmail.com', 'teste5');

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
(10, 'teste', 'teste@testeeeee.com', 'Crítica', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultrices iaculis diam, nec blandit ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. In mollis non neque id tempor. Mauris lectus metus, condimentum at congue ut, semper a lorem. Sed feugiat est in metus sollicitudin, quis maximus nisi tincidunt. Pellentesque vitae varius augue. Quisque a vehicula mauris, at pellentesque lacus.\r\n\r\nSuspendisse turpis purus, feugiat convallis ligula ut, bibendum ultricies sapien. Ut sit amet velit tempus ante euismod dictum. Maecenas condimentum suscipit odio at viverra. Proin convallis laoreet massa. Cras efficitur pharetra lorem, id finibus quam varius ut. Sed auctor massa eget tristique volutpat. Ut posuere eu velit a luctus.\r\n\r\nCras id purus vitae ante volutpat interdum. Mauris vestibulum, nisi sed dignissim malesuada, massa lorem consequat enim, vel interdum nisl orci vitae odio. Vestibulum sed posuere ex. Proin scelerisque elit neque, eu cursus felis accumsan vitae. In luctus velit non commodo laoreet. Sed pulvinar, nulla sed feugiat lacinia, tortor libero tempor odio, in posuere leo dui vitae justo. Vestibulum consequat mauris id enim iaculis aliquet.\r\n\r\nCurabitur et semper velit. Donec vel sodales mi, quis consectetur diam. Sed ac sodales dui. Suspendisse vitae sapien non lectus dignissim pretium eu quis nisi. Maecenas tincidunt sed neque nec efficitur. Vivamus vel nulla quis lectus ultrices eleifend. Suspendisse blandit auctor risus eu blandit. Ut tortor odio, molestie sit amet magna sed, suscipit dapibus nulla. Nullam sit amet metus in ex interdum lobortis eget vitae justo. Aliquam vel arcu vel enim molestie dapibus. Integer fermentum id odio at malesuada. Aenean id viverra nulla, a semper arcu. Integer facilisis enim eget nulla varius scelerisque. In vel est et nunc tempus molestie.\r\n\r\nCurabitur mollis mattis enim, at tincidunt felis. Mauris quis dolor faucibus, vehicula lectus ac, ornare nulla. Aenean dapibus tortor at metus consequat, in placerat nibh mollis. Nulla sit amet feugiat neque, a semper elit. Nulla sodales semper elementum. Mauris vitae est lorem. In vitae mattis enim. Morbi hendrerit vel ligula sit amet eleifend.\r\n\r\nInteger id efficitur nulla. Aenean bibendum sed elit ut lobortis. Pellentesque est nunc, luctus eu sagittis ac, interdum eu lorem. Etiam rutrum aliquet lectus at euismod. Pellentesque porta dignissim efficitur. Nam eget malesuada sapien. Etiam dapibus erat ut convallis ultrices. Cras lacinia semper consectetur.\r\n\r\nVivamus varius hendrerit orci, et iaculis eros. Sed tristique sagittis felis vitae pretium. Sed vestibulum ultrices diam in ornare. Maecenas nec turpis ac nisl iaculis dignissim. Pellentesque commodo nisi ut aliquam sodales. Proin accumsan odio ut tortor posuere, non convallis urna ultrices. In facilisis velit nec odio imperdiet viverra. Sed vulputate cursus nibh eget sagittis. Nam bibendum, dolor a scelerisque convallis, ante ante aliquet odio, semper sodales odio dolor sed arcu. Mauris a orci vel metus cursus commodo quis ut mi. Maecenas pharetra leo at luctus congue. Curabitur nibh mauris, scelerisque vitae suscipit placerat, semper non dui. Sed ac lacus euismod, hendrerit purus a, semper dolor. Nullam quis nisi ut diam faucibus dapibus quis a mi. Maecenas sed molestie nisi. Integer in semper tortor.\r\n\r\nInteger id erat nec lacus varius dignissim. Nullam eget imperdiet sapien, ut finibus sem. Mauris eu faucibus urna, ut consequat eros. Proin iaculis sodales porta. Sed arcu ante, scelerisque non ante in, pharetra mollis nunc. Ut commodo magna lorem, ac viverra dolor fringilla ut. Etiam feugiat ac ante eget volutpat. Cras sed ex sed tellus gravida accumsan. Nulla facilisi. Quisque tempor vulputate diam ut laoreet. Proin nec lectus velit. Duis consectetur accumsan diam sed sagittis. Aenean imperdiet velit vitae est consequat, a tristique turpis fermentum. Ut tristique nisl quam.\r\n\r\nQuisque eleifend, dui a tristique auctor, lectus ante dictum neque, vitae sollicitudin enim ipsum vel dui. Praesent quis mi fermentum, pharetra risus vitae, rutrum elit. Praesent convallis, libero a dignissim lacinia, dolor mauris ultricies magna, vel venenatis eros diam vitae ipsum. Nunc justo nulla, blandit in augue ut, semper fermentum velit. Nam pulvinar justo vitae nulla hendrerit pulvinar. Phasellus felis sapien, lobortis a semper vel, efficitur eu ante. Curabitur dolor sem, dictum eu lorem eget, vulputate hendrerit odio. Maecenas vestibulum, leo sed euismod elementum, lectus nisi venenatis mi, sed ultrices nisi urna sit amet felis. Donec condimentum mollis ipsum eget pretium. Suspendisse potenti. Mauris tristique dapibus enim, vel dictum sem interdum at. Curabitur egestas vitae libero a faucibus.\r\n\r\nMaecenas ultrices pellentesque ante. In eu iaculis mi. Aenean ultricies nisl vel purus porta, nec mattis nulla mattis. Nullam lacinia purus vel massa fringilla, in pretium ante congue. Donec eget blandit elit, sit amet laoreet elit. Nunc nec risus vitae nunc bibendum fringilla ut non ante. Aliquam pellentesque facilisis mauris, quis efficitur leo pretium auctor. Suspendisse quis purus nec nunc pretium luctus at eget velit. Praesent eros eros, aliquam sit amet tellus at, gravida ornare sem. Nulla id feugiat nulla, tempus vehicula mi. Phasellus auctor scelerisque dolor ac vestibulum.\r\n\r\nAliquam vitae est nibh. Vestibulum enim leo, suscipit sit amet orci vel, egestas consequat neque. Maecenas augue lacus, pulvinar non pellentesque eu, sollicitudin sed mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum nibh nunc, interdum et magna ut, porttitor aliquam lacus. Phasellus laoreet nisi sed sagittis imperdiet. Phasellus mauris velit, finibus eget sem eu, tincidunt hendrerit diam. Morbi fermentum tellus in malesuada ornare. Curabitur lorem augue, convallis at ante ut, iaculis condimentum erat. Aenean sodales placerat mauris pulvinar accumsan. Mauris ullamcorper elit nulla, sit amet suscipit leo consequat quis.\r\n\r\nSuspendisse turpis urna, tincidunt malesuada semper vitae, blandit id nisl. Suspendisse potenti. Donec lobortis libero nec ex pretium venenatis. Nulla et enim sed velit varius finibus non eu lectus. Cras a pellentesque ipsum. Integer sit amet ipsum velit. Vivamus pharetra ex ac turpis porta, sit amet scelerisque massa semper. Vivamus facilisis ac felis id aliquet. Sed mattis nisi non lectus tempus aliquet. Curabitur ornare dignissim ultricies.\r\n\r\nNullam vestibulum mattis ex, sed sollicitudin sapien cursus a. Nunc rutrum mollis tortor, vel tristique mi pulvinar id. Praesent egestas pulvinar elit, in fringilla diam mattis ac. Praesent interdum erat vitae orci auctor semper. Quisque sed nibh lacinia, posuere nunc eu, auctor dolor. Vestibulum auctor dapibus laoreet. Duis placerat molestie magna, quis efficitur nulla lacinia nec. Proin nisl dolor, rhoncus varius dignissim a, lobortis ut erat. Donec quis nunc tortor. Mauris iaculis nunc eget enim rutrum, eget pharetra elit mattis.\r\n\r\nNunc non orci condimentum sapien dignissim dapibus ut sit amet ex. Proin rutrum ultricies dolor, eget consectetur ante tempor vitae. Ut id lacus ultrices, eleifend enim non, faucibus purus. Donec vehicula quam vitae lacinia fringilla. Vivamus iaculis, arcu vel fringilla ullamcorper, nisl ipsum volutpat lectus, eu eleifend lorem velit et elit. Mauris rhoncus augue nisi, nec condimentum magna semper at. Nullam ut sapien tincidunt, finibus nisi ac, gravida ligula. Etiam porta sem arcu, vel semper dolor posuere vitae. Curabitur sed tempus purus. Integer auctor est euismod accumsan pharetra. Maecenas accumsan ligula nec ante congue, ac ornare urna interdum. Nunc sem leo, pharetra congue odio porttitor, vehicula aliquam nulla. Pellentesque ornare justo metus, in faucibus lectus auctor sed. Etiam feugiat arcu est, et tincidunt lorem suscipit vel.\r\n\r\nCurabitur feugiat, sapien a sodales vehicula, mi leo vulputate nisl, eget consequat sapien est imperdiet nulla. Nullam ornare venenatis sem molestie varius. Donec facilisis bibendum dictum. Proin sollicitudin quam id diam varius convallis. Aenean molestie scelerisque justo, vitae dapibus magna fermentum at. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi ut augue rhoncus, ultricies orci eget, commodo nunc. Cras vel augue efficitur, molestie tellus a, euismod tortor. In semper sollicitudin neque ut facilisis. ', b'0', b'0');

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
  ADD UNIQUE KEY `email` (`email`);

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
