-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 21/10/2021 às 16:37
-- Versão do servidor: 5.7.35
-- Versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `oehodvge_kaiki`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `User` text NOT NULL,
  `Email` text NOT NULL,
  `Senha` text NOT NULL,
  `Scripts` text NOT NULL,
  `Licenses` text NOT NULL,
  `Valor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `accounts`
--

INSERT INTO `accounts` (`id`, `User`, `Email`, `Senha`, `Scripts`, `Licenses`, `Valor`) VALUES
(1, 'Victor Gabriel', 'victorgabrielpaulo2@gmail.com', '72262dcbe3afcd3c695e8d7429aa79b3', '1', '0', '00,00'),
(3, 'MrKaiki', 'dalvamso60@gmail.com', '15cb52e6ae6df8e09aaa3e7331732bbe', '0', '0', '00,00'),
(4, 'AndrÃ© Luis', 'andreluis110598@gmail.com', '248429ddad57f2d1745d513fbce2a65b', '0', '0', '00,00'),
(5, 'wallace tiburcio', 'wallace.riwwa@hotmail.com', 'e57041d7fb13facb3a20482166403f87', '0', '0', '00,00'),
(7, 'Caue', 'Caue.bcm@gmail.com', '621c65e165aa44ee7acf9babfa56cb11', '0', '0', '00,00'),
(8, 'GuiRR22', 'vandadez@gmail.com', '0c57ace12ff08ca60c0c04094b709796', '0', '0', '00,00'),
(9, 'Anderson', 'andersondatuf438@gmail.com', '7f9a376392f858ab66e996bed96e0875', '1', '1', '22,00'),
(10, 'Bruno', 'brunomta30@gmail.com', '0cd134aaadecde9771dbf8321b7df02d', '1', '1', '25,00'),
(11, 'Diogo Ferreira', 'brunoeduardovazteodoro@gmail.com', 'a0af8ccc701f9039e1a51777ac5156a2', '0', '0', '00,00'),
(12, 'samuel silva', 'suportecidadetropical@gmail.com', 'dd4a104a8b92f83f8fc17c15738c113b', '1', '1', '50,00'),
(13, 'Wilter JÃºnior', 'wiltercarlosjr@outlook.com', '73ecaba1839e9ecdc886143c24e4a732', '0', '0', '00,00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`id`) VALUES
(1),
(3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `idclient` text NOT NULL,
  `script` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cupom`
--

CREATE TABLE `cupom` (
  `id` int(11) NOT NULL,
  `porcentagem` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cupom`
--

INSERT INTO `cupom` (`id`, `porcentagem`, `name`) VALUES
(2, '20', 'Vips20'),
(3, '12', 'halloween');

-- --------------------------------------------------------

--
-- Estrutura para tabela `faturas`
--

CREATE TABLE `faturas` (
  `id` int(11) NOT NULL,
  `cliente` text NOT NULL,
  `produto` text NOT NULL,
  `referencia` text NOT NULL,
  `forma` text NOT NULL,
  `status` text NOT NULL,
  `valor` text NOT NULL,
  `setado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `faturas`
--

INSERT INTO `faturas` (`id`, `cliente`, `produto`, `referencia`, `forma`, `status`, `valor`, `setado`) VALUES
(14, 'victorgabrielpaulo2@gmail.com', 'teste', '5126', 'Mercado Pago', 'Aprovado', '1.00', 'sim'),
(15, 'dalvamso60@gmail.com', 'teste', '24', 'Mercado Pago', 'Pendente', '1.00', 'nao'),
(16, 'victorgabrielpaulo2@gmail.com', 'Sistema de Grupos', '8052', 'Mercado Pago', 'Pendente', '60.00', 'nao'),
(17, 'dalvamso60@gmail.com', 'Sistema de Grupos', '2929', 'Mercado Pago', 'Pendente', '60.00', 'nao'),
(18, 'vandadez@gmail.com', 'Sistema de Grupos', '9374', 'Mercado Pago', 'Pendente', '60.00', 'nao'),
(19, 'dalvamso60@gmail.com', 'Scoreboard', '3155', 'Mercado Pago', 'Pendente', '25.00', 'nao'),
(20, 'andersondatuf438@gmail.com', 'Scoreboard', '2916', 'bank_transfer', 'Aprovado', '25.00', 'sim'),
(21, 'andersondatuf438@gmail.com', 'Scoreboard', '4226', 'Mercado Pago', 'Aprovado', '25.00', 'sim'),
(22, 'brunomta30@gmail.com', 'Scoreboard', '282', 'Mercado Pago', 'Aprovado', '25.00', 'sim'),
(23, 'victorgabrielpaulo2@gmail.com', 'Scoreboard', '1057', 'Mercado Pago', 'Pendente', '25.00', 'nao'),
(24, 'dalvamso60@gmail.com', 'InventÃ¡rio Completo ', '3346', 'Mercado Pago', 'Pendente', '49.00', 'nao'),
(25, 'victorgabrielpaulo2@gmail.com', 'Sistema de Grupos', '3891', 'Mercado Pago', 'Pendente', '60.00', 'nao'),
(26, 'brunoeduardovazteodoro@gmail.com', 'Scoreboard', '5429', 'Mercado Pago', 'Pendente', '25.00', 'nao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `licenses`
--

CREATE TABLE `licenses` (
  `id` int(11) NOT NULL,
  `idclient` text NOT NULL,
  `idscript` text NOT NULL,
  `script` text NOT NULL,
  `license` text NOT NULL,
  `ip` text NOT NULL,
  `porta` text NOT NULL,
  `cliente` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `licenses`
--

INSERT INTO `licenses` (`id`, `idclient`, `idscript`, `script`, `license`, `ip`, `porta`, `cliente`, `status`) VALUES
(14, '1', '7', 'Sistema de Grupos', 'KaikiLicense2021_977f6f5f8bd5054b7ec5f72374d5e68d', '0.0.0.0', '00000', 'Victor Gabriel', 'Validated'),
(15, '9', '8', 'Scoreboard', 'KaikiLicense2021_668f33215f65faf17f6f7f1d7f4b5fc8', '0.0.0.0', '00000', 'Anderson', 'Validated'),
(16, '10', '8', 'Scoreboard', 'KaikiLicense2021_8a1e808b55fde9455cb3d8857ed88389', '0.0.0.0', '00000', 'Bruno', 'Validated'),
(17, '12', '9', 'InventÃ¡rio Completo', 'KaikiLicense2021_74306eef5860833e2e47ff169a73b45b', '0.0.0.0', '00000', 'samuel silva', 'Validated'),
(18, '3', '7', 'Sistema de Grupos', 'KaikiLicense2021_3f68928ec5b6fae14708854b8fd0cf08', '0.0.0.0', '00000', 'MrKaiki', 'Validated'),
(19, '3', '8', 'Scoreboard', 'KaikiLicense2021_3e016029eeb9a92852a656f33fbf1dc6', '0.0.0.0', '00000', 'MrKaiki', 'Validated'),
(20, '3', '9', 'InventÃ¡rio Completo', 'KaikiLicense2021_1ef03ed0cd5863c550128836b28ec3e9', '0.0.0.0', '00000', 'MrKaiki', 'Validated');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `description` text NOT NULL,
  `version` text NOT NULL,
  `valor` text NOT NULL,
  `vendas` text NOT NULL,
  `video` text NOT NULL,
  `arquivo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `description`, `version`, `valor`, `vendas`, `video`, `arquivo`) VALUES
(7, 'Sistema de Grupos', 'â—† Sistema de Grupos v.1 â—†<br /><br /><br /><br /><br />\r\nâž” CÃ³digo 100% brasileiro;<br /><br /><br /><br /><br />\r\nâž” FÃ¡cil configuraÃ§Ã£o;<br /><br /><br /><br /><br />\r\nâž” ProteÃ§Ã£o Nova;<br /><br /><br /><br /><br />\r\nâž” Design Diferente;<br /><br /><br /><br /><br />\r\nâž” Debugscript 3 Limpo!!<br /><br /><br /><br /><br />\r\nâž” Nosso Whatsapp : 54 98116-2494', '1.0', '60.00', '0', 'E9VqLuolXgo', 'https://www.mediafire.com/file/xby2sm2obfkv5bg/Grupos.zip/file'),
(8, 'Scoreboard', 'âž” Sistema De Avatars<br />\r\nâž” Sistema De Cards<br />\r\nâž”  É¢ÉªÊ€á´‡ á´ êœ±á´„Ê€á´ÊŸÊŸ á´…á´ á´á´á´œêœ±á´‡ á´˜á´€Ê€á´€ á´˜á´€êœ±êœ±á´€Ê€ á´êœ± á´„á´€Ê€á´…êœ±<br />\r\nâž” êœ°á´€á´„ÉªÊŸ á´„á´É´êœ°ÉªÉ¢á´œÊ€á´€á´„á´€á´', '1.0', '25.00', '2', 'IYi9C0f7iA8', 'https://www.mediafire.com/file/5gc8h8wa9jjxm3v/[scoreboard].zip/file'),
(9, 'InventÃ¡rio Completo ', 'EspecificaÃ§Ãµes:<br /><br /><br />\r\nâ€¢ âœª Sistema de InventÃ¡rio Completo - ( FIVEM ). â—†<br /><br /><br />\r\nâ€¢ âž” CÃ³digo 100% brasileiro;<br /><br /><br />\r\nâ€¢ âž” FÃ¡cil configuraÃ§Ã£o;<br /><br /><br />\r\nâ€¢ âž” ProteÃ§Ã£o Nova;<br /><br /><br />\r\nâ€¢ âž” Inspirado no fivem;<br /><br /><br />\r\nâ€¢ âž” Design Diferente;<br /><br /><br />\r\nâ€¢ âž” Debugscript 3 Limpo!!<br /><br /><br />\r\nâ€¢ âž” Nosso Whatsapp : 54 98116-2494 â€¢ InventÃ¡rio<br /><br /><br />\r\nâ€¢ Give Item (Para Admin)<br /><br /><br />\r\nâ€¢ Take Item (Para Admin)<br /><br /><br />\r\nâ€¢ Loja de ConvÃªnios<br /><br /><br />\r\nâ€¢ Sistema de Enviar para Jogador PrÃ³ximo<br /><br /><br />\r\nâ€¢ Sistema de Equipar Armas & Colete & MuniÃ§Ã£o<br /><br /><br />\r\nâ€¢ Sistema de Desequipar Armas & Colete & MuniÃ§Ã£o<br /><br /><br />\r\nâ€¢ Sistema De Usar Item<br /><br /><br />\r\nâ€¢ Sistema Fome/Sede ja incluso<br /><br /><br />\r\nâ€¢ Esse Sistema Traz um Novo Roleplay ao MTA.<br /><br /><br />\r\nâž” Debugscript 3 Limpo!!', '1.0', '49.00', '1', 'jYi1YR7hbrc', 'https://www.mediafire.com/file/zrcu81zk5oxrx9q/[kscr+Inventario_].zip/file');

-- --------------------------------------------------------

--
-- Estrutura para tabela `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `script` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `vendas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cupom`
--
ALTER TABLE `cupom`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `faturas`
--
ALTER TABLE `faturas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cupom`
--
ALTER TABLE `cupom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `faturas`
--
ALTER TABLE `faturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
