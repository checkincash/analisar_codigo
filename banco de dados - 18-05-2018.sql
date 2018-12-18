-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 18/05/2018 às 13:13
-- Versão do servidor: 5.6.32-78.1
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `check956_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_administrador`
--

CREATE TABLE IF NOT EXISTS `ap_administrador` (
  `id` bigint(20) unsigned NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL COMMENT '0->Consultor 1->Administrador',
  `ativo` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_administrador`
--

INSERT INTO `ap_administrador` (`id`, `usuario`, `senha`, `nivel`, `ativo`) VALUES
(1, 'desenv', 'b2f1f71f326499d4838f0d50b3874701', 1, 1),
(2, 'marcelo', 'e10adc3949ba59abbe56e057f20f883e', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_classificacao`
--

CREATE TABLE IF NOT EXISTS `ap_classificacao` (
  `pk_classificacao` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COMMENT='Tabela Ramo de Atividades';

--
-- Fazendo dump de dados para tabela `ap_classificacao`
--

INSERT INTO `ap_classificacao` (`pk_classificacao`, `descricao`) VALUES
(1, 'Restaurantes'),
(2, 'Serviços Automotivos'),
(3, 'Bem estar & Beleza'),
(4, 'Casa e Decoração'),
(5, 'Combustível'),
(6, 'Cursos'),
(7, 'Eventos'),
(8, 'Eletrônicos'),
(9, 'Saúde'),
(10, 'Serviços'),
(11, 'Viagens e Turismo'),
(12, 'Vida Noturna'),
(13, 'Diversão'),
(14, 'Cafeterias'),
(15, 'Lojas'),
(16, 'Academias'),
(17, 'Açougue'),
(18, 'Alimentação Saudável'),
(19, 'Equipamentos Esportivos'),
(20, 'Cervejarias'),
(21, 'Farmácias'),
(22, 'Floricultura'),
(23, 'Hotéis'),
(24, 'Lavanderias e Costura'),
(25, 'Lazer'),
(26, 'Lojas de Conveniência'),
(27, 'Óticas'),
(28, 'Padarias e Doces'),
(29, 'Perfumarias'),
(30, 'Papelaria e Artigos de Escritório'),
(31, 'Pets e Animais'),
(32, 'Sorveterias'),
(33, 'Supermercados e Mercados'),
(34, 'Vinhos'),
(35, 'Barbearia'),
(36, 'Social');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_configuracao`
--

CREATE TABLE IF NOT EXISTS `ap_configuracao` (
  `id` bigint(20) unsigned NOT NULL,
  `valor_credenciamento` decimal(10,2) NOT NULL,
  `valor_mensalidade` decimal(10,2) NOT NULL,
  `dia_mensalidade` int(11) NOT NULL,
  `alerta_pincash1` int(11) NOT NULL DEFAULT '0',
  `alerta_pincash2` int(11) NOT NULL DEFAULT '0',
  `alerta_pincash3` int(11) NOT NULL DEFAULT '0',
  `alerta_pincash_msg` text NOT NULL,
  `limite_upload` float(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_configuracao`
--

INSERT INTO `ap_configuracao` (`id`, `valor_credenciamento`, `valor_mensalidade`, `dia_mensalidade`, `alerta_pincash1`, `alerta_pincash2`, `alerta_pincash3`, `alerta_pincash_msg`, `limite_upload`) VALUES
(1, '90.00', '99.00', 5, 600, 500, 300, 'Caro {lojista}, essa é uma mensagem automática do sistema para alertar que o seu saldo de pincash está abaixo do limite estipulado.\n\nSeu saldo é: {saldo} pincash. \n\nVocê pode adquirir pincash acessando sua conta em http://checkincash.com.br/dashboard.', 0.50);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_contrato`
--

CREATE TABLE IF NOT EXISTS `ap_contrato` (
  `pk_contrato` int(11) NOT NULL,
  `fk_classificacao` int(11) DEFAULT NULL,
  `classificacao1` varchar(70) DEFAULT NULL,
  `classificacao2` varchar(70) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `inscricao` varchar(20) DEFAULT NULL,
  `razao` varchar(80) DEFAULT NULL,
  `fantasia` varchar(80) DEFAULT NULL,
  `datacadastro` date DEFAULT NULL,
  `cidade` varchar(70) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `rua` varchar(80) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `fachada` text,
  `latitude` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `senha_usuario` varchar(45) DEFAULT NULL,
  `nome_contato` varchar(70) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT '0' COMMENT '0 -> Inativo\n1 -> Ativo',
  `rash` varchar(32) DEFAULT NULL,
  `activate_code` char(1) DEFAULT NULL,
  `activate_date` datetime DEFAULT NULL,
  `seg_m_de` time DEFAULT NULL,
  `seg_m_ate` time DEFAULT NULL,
  `seg_t_de` time DEFAULT NULL,
  `seg_t_ate` time DEFAULT NULL,
  `ter_m_de` time DEFAULT NULL,
  `ter_m_ate` time DEFAULT NULL,
  `ter_t_de` time DEFAULT NULL,
  `ter_t_ate` time DEFAULT NULL,
  `qua_m_de` time DEFAULT NULL,
  `qua_m_ate` time DEFAULT NULL,
  `qua_t_de` time DEFAULT NULL,
  `qua_t_ate` time DEFAULT NULL,
  `qui_m_de` time DEFAULT NULL,
  `qui_m_ate` time DEFAULT NULL,
  `qui_t_de` time DEFAULT NULL,
  `qui_t_ate` time DEFAULT NULL,
  `sex_m_de` time DEFAULT NULL,
  `sex_m_ate` time DEFAULT NULL,
  `sex_t_de` time DEFAULT NULL,
  `sex_t_ate` time DEFAULT NULL,
  `sab_m_de` time DEFAULT NULL,
  `sab_m_ate` time DEFAULT NULL,
  `sab_t_de` time DEFAULT NULL,
  `sab_t_ate` time DEFAULT NULL,
  `dom_m_de` time DEFAULT NULL,
  `dom_m_ate` time DEFAULT NULL,
  `dom_t_de` time DEFAULT NULL,
  `dom_t_ate` time DEFAULT NULL,
  `website` varchar(120) DEFAULT NULL,
  `credenciamento` tinyint(1) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='armazena o contrato checkin.';

--
-- Fazendo dump de dados para tabela `ap_contrato`
--

INSERT INTO `ap_contrato` (`pk_contrato`, `fk_classificacao`, `classificacao1`, `classificacao2`, `cnpj`, `inscricao`, `razao`, `fantasia`, `datacadastro`, `cidade`, `estado`, `bairro`, `rua`, `complemento`, `numero`, `cep`, `fachada`, `latitude`, `longitude`, `email`, `telefone`, `senha_usuario`, `nome_contato`, `ativo`, `rash`, `activate_code`, `activate_date`, `seg_m_de`, `seg_m_ate`, `seg_t_de`, `seg_t_ate`, `ter_m_de`, `ter_m_ate`, `ter_t_de`, `ter_t_ate`, `qua_m_de`, `qua_m_ate`, `qua_t_de`, `qua_t_ate`, `qui_m_de`, `qui_m_ate`, `qui_t_de`, `qui_t_ate`, `sex_m_de`, `sex_m_ate`, `sex_t_de`, `sex_t_ate`, `sab_m_de`, `sab_m_ate`, `sab_t_de`, `sab_t_ate`, `dom_m_de`, `dom_m_ate`, `dom_t_de`, `dom_t_ate`, `website`, `credenciamento`, `id_admin`) VALUES
(11, 7, 'SHOWS E FESTAS', '', '07050315869', 'null', 'MN Eventos e Shows', 'MN Eventos e Shows', '2017-10-05', 'Sao Jose do Rio Preto', 'Sp', 'Jardim Urano', 'Jose Caetano de Freitas', '', '592', '15084240', 'eventos.jpg', '-20.8334043', '-49.3772323', 'manoel@mmgr.com.br', '(17) 3012-1421', '7b151e2bc523a4cd1066923059258ac0', 'MANOEL', 1, 'sec_f1eJYXyHETYi$yCP.dpbFe!UNJYj', '', NULL, '00:00:00', '00:00:00', NULL, NULL, '00:00:00', '00:00:00', NULL, NULL, '00:00:00', '00:00:00', NULL, NULL, '00:00:00', '00:00:00', NULL, NULL, '00:00:00', '00:00:00', NULL, NULL, '00:00:00', '00:00:00', NULL, NULL, '00:00:00', '00:00:00', NULL, NULL, 'http://www.checkincash.com.br', 1, 0),
(12, 8, '', '', '38719497873', '', 'M31 Tecnologia', 'M31 Tecnologia', '2017-10-05', 'Sao Jose do Rio Preto', 'Sp', 'Jardim Alto Rio Preto', 'Alemanha', '', '4153', '15020250', 'm31.PNG', '-20.8217342', '-49.4030661', 'vcampos@m31tecnologia.com.br', '(17) 99617-1193', 'e10adc3949ba59abbe56e057f20f883e', 'VITOR', 1, 'sec_a9f;SoxVhHPJKx76;jvQiLZ@tjV$', '', NULL, '08:00:00', '12:00:00', '13:30:00', '18:00:00', '08:00:00', '12:00:00', '13:30:00', '18:00:00', '08:00:00', '12:00:00', '13:30:00', '18:00:00', '08:00:00', '12:00:00', '13:30:00', '18:00:00', '08:00:00', '12:30:00', '13:35:00', '18:00:00', '09:00:00', '12:00:00', '14:00:00', '22:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, 0, 0),
(13, 15, 'MODA', 'FEMININA', '45517000000100', '', 'Lorena Store', 'Lorena Store', '2017-10-19', 'Sao Jose do Rio Preto', 'Sp', 'Vila Santa Cruz', 'Marechal Deodoro', 'Sala 1', '3941', '15014060', 'lorena.jpg', '-20.8186035', '-49.3755485', 'manoelvieira@yahoo.com.br', '(17) 3013-1013', '7b151e2bc523a4cd1066923059258ac0', 'MANOEL', 1, 'sec_iI,ld@dMX!o.;Xu6x.VLT..AmRTQ', '', NULL, '08:00:00', '18:00:00', '00:00:00', '00:00:00', '08:00:00', '18:00:00', '00:00:00', '00:00:00', '08:00:00', '18:00:00', '00:00:00', '00:00:00', '08:00:00', '18:00:00', '00:00:00', '00:00:00', '08:00:00', '19:00:00', '00:00:00', '00:00:00', '09:00:00', '14:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, 0, 0),
(14, 1, 'JAPONES', '', '18455283874', '', 'Hatsuki Sushi Lounge ', 'Hatsuki Sushi Lounge', '2017-10-20', 'Sao Jose do Rio Preto', 'Sp', 'Vila Santo Antonio', 'Saldanha Marinho', 'Centro', '3980', '15014300', 'ss2(1).jpg', '-20.8228685', '-49.3755331', 'manoel@hotmail.com.br', '(17) 3121-1128', 'e10adc3949ba59abbe56e057f20f883e', 'MANOEL', 1, 'sec_F95Qs@*HJX;fqiFpbhpzqpJ9n:ea', '', NULL, '11:00:00', '16:00:00', '19:00:00', '22:00:00', '11:00:00', '16:00:00', '19:00:00', '22:00:00', '11:00:00', '16:00:00', '19:00:00', '22:00:00', '11:00:00', '16:00:00', '19:00:00', '22:00:00', '11:00:00', '16:00:00', '19:00:00', '22:00:00', '11:00:00', '16:00:00', '19:00:00', '22:00:00', '18:00:00', '22:00:00', '00:00:00', '00:00:00', 'https://www.facebook.com/hatsukiriopreto/', 0, 0),
(15, 1, 'URUGUAIO', '', '20890503000197', '', 'EL Toro RP Restaurante Ltda', 'EL Toro', '2017-11-23', 'Sao Jose do Rio Preto', 'SP', 'Vila Redentora', 'Pernambuco', '', '3229', '15015770', 'eltoro(2).JPG', '-20.8211048', '-49.3880087', 'mm@mm.com.br', '(17) 3234-4838', 'e10adc3949ba59abbe56e057f20f883e', 'Kuki Bonadio', 1, 'sec_VBAlwJfkxZ8jzyOwjF!XYT8jP:nV', '', NULL, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '12:00:00', '23:00:00', '00:00:00', '00:00:00', '12:00:00', '23:00:00', '00:00:00', '00:00:00', '12:00:00', '23:00:00', '00:00:00', '00:00:00', '12:00:00', '23:00:00', '00:00:00', '00:00:00', '12:00:00', '23:00:00', '00:00:00', '00:00:00', '12:00:00', '16:00:00', '00:00:00', '00:00:00', 'https://www.facebook.com/eltororp/', 0, 0),
(17, 35, 'CABELEIREIRO', 'BILHAR', '24595898000156', '', 'Almirante Barba Ltda Me', 'Almirante Barba - Barbearia', '2017-11-23', 'Sao Jose do Rio Preto', 'SP', 'Centro', 'Coronel Spinola Castro', '', '4030', '15015500', 'almirante(1).jpg', '-20.8166183', '-49.3891654', 'ms@ms.com.br', '(17) 3215-5655', 'f0c413d1d4719bcb155e58dc3fd137a0', 'will', 1, 'sec_;.Kti2fpF3yrePPDm;Mi,Wq30U9i', '', NULL, '09:00:00', '21:00:00', NULL, NULL, '09:00:00', '21:00:00', NULL, NULL, '09:00:00', '21:00:00', NULL, NULL, '09:00:00', '21:00:00', NULL, NULL, '09:00:00', '21:00:00', NULL, NULL, '09:00:00', '18:00:00', NULL, NULL, '00:00:00', NULL, NULL, NULL, NULL, 0, 0),
(18, 36, 'PASTEIS', '', '26642569000144', 'null', 'Casa dos Pasteis', 'Casa dos Pasteis', '2017-12-18', 'Sao Jose do Rio Preto', 'SP', 'Solo Sagrado', 'Candido Portinari', '', '42', '15044241', 'pastel(1).jpg', '-20.7863224', '-49.4134424', 'jeteralessandro@gmail.com', '(17) 3121-1128', '7b151e2bc523a4cd1066923059258ac0', 'Jeter', 1, 'sec_9SPHqWAvDC8Gq1F1XUZtYCc9Qm@B', '', NULL, '16:00:00', '18:00:00', '00:00:00', '00:00:00', '16:00:00', '18:00:00', '00:00:00', '00:00:00', '10:00:00', '20:30:00', '00:00:00', '00:00:00', '10:00:00', '21:00:00', '00:00:00', '00:00:00', '14:00:00', '22:00:00', '00:00:00', '00:00:00', '14:00:00', '22:00:00', '00:00:00', '00:00:00', '17:00:00', '23:00:00', '00:00:00', '00:00:00', 'https://www.checkincash.com.br', 0, 0),
(19, 8, 'CONSULTORIA', '', '11613608160', '123456789123', 'KNS Consultoria', 'KNS Consultoria', '2017-12-19', 'Sao Jose do Rio Preto', 'SP', 'Jardim Alto Rio Preto', 'Alemanha', 'SALA 02', '4153', '15020250', 'kns-gsuites.jpg', '-20.8217342', '-49.4030661', 'testetecnologia@m31.email', '(17) 99674-6101', '200820e3227815ed1756a6b531e7e0d2', 'Vitor C', 1, 'sec_nKV4,6tjKw5$wHS6Kz5kEna!mZ.s', '', NULL, '08:00:00', '12:00:00', '14:00:00', '18:00:00', '08:00:00', '12:00:00', '14:00:00', '18:00:00', '08:00:00', '12:00:00', '14:00:00', '18:00:00', '08:00:00', '12:00:00', '14:00:00', '18:00:00', '08:00:00', '12:00:00', '14:00:00', '18:00:00', '08:00:00', '12:00:00', '14:00:00', '18:00:00', '08:00:00', '12:00:00', '14:00:00', '18:00:00', 'http://www.checkincash.com.br', 0, 0),
(20, 10, 'Negócios Imobiliários', 'Investimentos', '13938456000149', 'null', 'H. S Rio Preto Empreendimentos Imobiliários Eireli', 'HS Business', '2018-02-23', 'São José do Rio Preto', 'SP', 'Iguatemi ', 'Presidente Juscelino Kubitschek de Oliveira', 'Torre Comercial 1 | Sala 1504, 15º Andar', '5000', '15093340', 'hsbusiness.png', '-20.8665207', '-49.4147385', 'marcelo@hsempreendimentos.com', '(17) 99266-8585', 'f61cc9068b07f27f9a5bd71c5528fd90', 'Marcelo Brazil', 1, 'sec_Q5ZtAk0h8kuf08SKZSFbk@Obb2q5', NULL, NULL, '08:00:00', '18:00:00', '00:00:00', '00:00:00', '08:00:00', '18:00:00', '00:00:00', '00:00:00', '08:00:00', '18:00:00', '00:00:00', '00:00:00', '08:00:00', '18:00:00', '00:00:00', '00:00:00', '08:00:00', '18:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'http://www.hsempreendimentos.com', 0, 2);

--
-- Gatilhos `ap_contrato`
--
DELIMITER $$
CREATE TRIGGER `pincash` AFTER INSERT ON `ap_contrato`
 FOR EACH ROW INSERT INTO ap_pincash_contrato_creditos  (fk_contrato, pincash_saldo) values (NEW.pk_contrato, 0 )
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_contrato_coletor`
--

CREATE TABLE IF NOT EXISTS `ap_contrato_coletor` (
  `pk_coletor` int(11) NOT NULL,
  `fk_publicador` int(11) DEFAULT NULL,
  `fk_usuario` int(11) DEFAULT NULL,
  `ischeckin` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 -> CHECKIN OFF1 -> CHECKIN ON',
  `contador` smallint(6) NOT NULL DEFAULT '1' COMMENT 'contador de checkin',
  `validade` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='coleta de dados dos conbtratos que exigem carga de dados.';

--
-- Fazendo dump de dados para tabela `ap_contrato_coletor`
--

INSERT INTO `ap_contrato_coletor` (`pk_coletor`, `fk_publicador`, `fk_usuario`, `ischeckin`, `contador`, `validade`, `token`) VALUES
(9, 18, 27, 0, 2, '2017-12-18 13:48:55', ''),
(11, 19, 50, 0, 29, '2018-03-21 14:44:40', '671489'),
(12, 14, 50, 0, 14, '2018-04-13 15:48:06', '534457'),
(13, 18, 50, 0, 75, '2018-05-17 10:23:38', '328127'),
(14, 23, 50, 0, 4, '2018-04-07 16:08:21', '411882'),
(15, 21, 50, 0, 10, '2018-05-04 10:04:59', '760703'),
(16, 17, 28, 0, 2, '2018-03-01 19:33:37', ''),
(18, 23, 52, 0, 12, '2018-04-13 10:38:23', '994879'),
(19, 21, 52, 0, 34, '2018-04-30 21:13:45', '754194'),
(20, 26, 28, 0, 2, '2018-03-05 10:02:00', ''),
(21, 29, 52, 0, 8, '2018-05-03 17:11:16', '559234'),
(22, 27, 50, 0, 2, '2018-04-07 16:08:31', '626616'),
(23, 29, 28, 0, 8, '2018-05-07 16:56:25', '36463'),
(24, 23, 28, 0, 4, '2018-05-15 13:47:55', '588971'),
(25, 29, 50, 0, 10, '2018-05-18 10:35:48', '732382'),
(26, 28, 50, 0, 2, '2018-05-07 09:22:03', '812131'),
(27, 19, 28, 1, 1, '2018-05-12 11:11:38', '455656');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_contrato_financeiro`
--

CREATE TABLE IF NOT EXISTS `ap_contrato_financeiro` (
  `id` bigint(20) unsigned NOT NULL,
  `contrato` int(11) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `vencimento` date NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0-Aberto 1-Baixado 2-Extornado'
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_contrato_financeiro`
--

INSERT INTO `ap_contrato_financeiro` (`id`, `contrato`, `referencia`, `vencimento`, `valor`, `status`) VALUES
(1, 11, 'Mensalidade', '2018-03-05', '99.00', 2),
(2, 11, 'Mensalidade', '2018-04-05', '99.00', 2),
(3, 11, 'Mensalidade', '2018-05-05', '99.00', 2),
(4, 11, 'Mensalidade', '2018-06-05', '99.00', 2),
(5, 11, 'Mensalidade', '2018-07-05', '99.00', 2),
(6, 11, 'Mensalidade', '2018-08-05', '99.00', 2),
(7, 11, 'Mensalidade', '2018-09-05', '99.00', 2),
(8, 11, 'Mensalidade', '2018-10-05', '99.00', 2),
(9, 11, 'Mensalidade', '2018-11-05', '99.00', 2),
(10, 11, 'Mensalidade', '2018-12-05', '99.00', 2),
(11, 11, 'Mensalidade', '2019-01-05', '99.00', 2),
(12, 11, 'Mensalidade', '2019-02-05', '99.00', 2),
(13, 11, 'Credenciamento', '2018-04-05', '360.00', 2),
(14, 12, 'Credenciamento', '2018-04-05', '360.00', 1),
(15, 13, 'Credenciamento', '2018-04-05', '360.00', 0),
(16, 14, 'Credenciamento', '2018-04-05', '360.00', 0),
(17, 15, 'Credenciamento', '2018-04-05', '360.00', 0),
(18, 17, 'Credenciamento', '2018-04-05', '360.00', 0),
(19, 18, 'Credenciamento', '2018-04-05', '360.00', 0),
(20, 19, 'Credenciamento', '2018-04-05', '360.00', 0),
(21, 20, 'Credenciamento', '2018-04-05', '360.00', 1),
(22, 12, 'Mensalidade', '2018-04-05', '99.00', 0),
(23, 12, 'Mensalidade', '2018-05-05', '99.00', 0),
(24, 12, 'Mensalidade', '2018-06-05', '99.00', 0),
(25, 12, 'Mensalidade', '2018-07-05', '99.00', 0),
(26, 12, 'Mensalidade', '2018-08-05', '99.00', 0),
(27, 12, 'Mensalidade', '2018-09-05', '99.00', 0),
(28, 12, 'Mensalidade', '2018-10-05', '99.00', 0),
(29, 12, 'Mensalidade', '2018-11-05', '99.00', 0),
(30, 12, 'Mensalidade', '2018-12-05', '99.00', 0),
(31, 12, 'Mensalidade', '2019-01-05', '99.00', 0),
(32, 12, 'Mensalidade', '2019-02-05', '99.00', 0),
(33, 12, 'Mensalidade', '2019-03-05', '99.00', 0),
(34, 11, 'Mensalidade', '2018-04-05', '99.00', 2),
(35, 11, 'Mensalidade', '2018-05-05', '99.00', 2),
(36, 11, 'Mensalidade', '2018-06-05', '99.00', 2),
(37, 11, 'Mensalidade', '2018-07-05', '99.00', 2),
(38, 11, 'Mensalidade', '2018-08-05', '99.00', 2),
(39, 11, 'Mensalidade', '2018-09-05', '99.00', 2),
(40, 11, 'Mensalidade', '2018-10-05', '99.00', 2),
(41, 11, 'Mensalidade', '2018-11-05', '99.00', 2),
(42, 11, 'Mensalidade', '2018-12-05', '99.00', 2),
(43, 11, 'Mensalidade', '2019-01-05', '99.00', 2),
(44, 11, 'Mensalidade', '2019-02-05', '99.00', 2),
(45, 11, 'Mensalidade', '2019-03-05', '99.00', 2),
(47, 11, 'pincash 1', '2018-03-16', '49.90', 1),
(48, 11, 'pincash 3', '2018-03-16', '149.90', 1),
(49, 20, 'Mensalidade', '2018-04-05', '99.00', 0),
(50, 20, 'Mensalidade', '2018-05-05', '99.00', 0),
(51, 20, 'Mensalidade', '2018-06-05', '99.00', 0),
(52, 20, 'Mensalidade', '2018-07-05', '99.00', 0),
(53, 20, 'Mensalidade', '2018-08-05', '99.00', 0),
(54, 20, 'Mensalidade', '2018-09-05', '99.00', 0),
(55, 20, 'Mensalidade', '2018-10-05', '99.00', 0),
(56, 20, 'Mensalidade', '2018-11-05', '99.00', 0),
(57, 20, 'Mensalidade', '2018-12-05', '99.00', 0),
(58, 20, 'Mensalidade', '2019-01-05', '99.00', 0),
(59, 20, 'Mensalidade', '2019-02-05', '99.00', 0),
(60, 20, 'Mensalidade', '2019-03-05', '99.00', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_contrato_publicador`
--

CREATE TABLE IF NOT EXISTS `ap_contrato_publicador` (
  `pk_publicador` int(11) NOT NULL,
  `fk_contrato` int(11) DEFAULT NULL,
  `data_criacao` date DEFAULT NULL,
  `nomenclatura` varchar(80) DEFAULT NULL,
  `foto_publicacao` text,
  `texto_publicacao` text,
  `foto_premiacao` text,
  `texto_premiacao` text,
  `gera_dados` tinyint(1) DEFAULT '0' COMMENT '0 -> não exige dados\n1 -> exige dados',
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `rua` varchar(80) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `cidade` varchar(70) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `latitude` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `destaque` tinyint(1) DEFAULT '0' COMMENT '0 -> nao esta em destaque\n1 -> esta em destaque',
  `pdesconto` decimal(6,2) DEFAULT '0.00',
  `situacao` tinyint(1) DEFAULT '0' COMMENT '0 -> Ativo\n1 -> Inativo',
  `pseg` smallint(4) DEFAULT '0',
  `pter` smallint(4) DEFAULT '0',
  `pqua` smallint(4) DEFAULT '0',
  `pqui` smallint(4) DEFAULT '0',
  `psex` smallint(4) DEFAULT '0',
  `psab` smallint(4) DEFAULT '0',
  `pdom` smallint(4) DEFAULT '0',
  `pinseg` smallint(4) NOT NULL DEFAULT '1' COMMENT 'Recebe a quantidade de pin para este dia da semana, padrão 1',
  `pinter` smallint(4) NOT NULL DEFAULT '1' COMMENT 'Recebe a quantidade de pin para este dia da semana, padrão 1',
  `pinqua` smallint(4) NOT NULL DEFAULT '1' COMMENT 'Recebe a quantidade de pin para este dia da semana, padrão 1',
  `pinqui` smallint(4) NOT NULL DEFAULT '1' COMMENT 'Recebe a quantidade de pin para este dia da semana, padrão 1',
  `pinsex` smallint(4) NOT NULL DEFAULT '1' COMMENT 'Recebe a quantidade de pin para este dia da semana, padrão 1',
  `pinsab` smallint(4) NOT NULL DEFAULT '1' COMMENT 'Recebe a quantidade de pin para este dia da semana, padrão 1',
  `pindom` smallint(4) NOT NULL DEFAULT '1' COMMENT 'Recebe a quantidade de pin para este dia da semana, padrão 1',
  `abreviatura` varchar(80) NOT NULL,
  `pincash` int(11) DEFAULT '1' COMMENT 'Quantidade de cashpin a ser creditado'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='É possível criar carga de dados para este contrato marcando o campo gera_dados com o valor ligado(1); objetivo: coleta de dados de campanha ou coleta de dados em eventos.';

--
-- Fazendo dump de dados para tabela `ap_contrato_publicador`
--

INSERT INTO `ap_contrato_publicador` (`pk_publicador`, `fk_contrato`, `data_criacao`, `nomenclatura`, `foto_publicacao`, `texto_publicacao`, `foto_premiacao`, `texto_premiacao`, `gera_dados`, `cep`, `bairro`, `rua`, `numero`, `complemento`, `cidade`, `estado`, `latitude`, `longitude`, `destaque`, `pdesconto`, `situacao`, `pseg`, `pter`, `pqua`, `pqui`, `psex`, `psab`, `pdom`, `pinseg`, `pinter`, `pinqua`, `pinqui`, `pinsex`, `pinsab`, `pindom`, `abreviatura`, `pincash`) VALUES
(14, 11, '2017-10-05', 'RIBEIRAO RODEIO MUSIC 2017', 'foto.jpg', 'Fantastico show com muitas atrações', 'cg125_cargo(1).png', 'Será sorteada uma linda moto zero quilometro para todos os participantes do evento que fizerem o checkin', 0, '15084310', 'Vila Nossa Senhora do Bonfim', 'Rua Joao Manoel Andrade', '592', '', 'Sao Jose do Rio Preto', 'Sp', '-20.8399668', '-49.3717405', 0, '10.00', 0, 20, 50, 65, 35, 60, 35, 65, 1, 2, 3, 5, 3, 5, 5, 'Vila N. S. Bonfim - Rua Joao Manoel Andrade, 592 - S.J.R. Preto SP', 1),
(17, 12, '2017-10-05', 'Internet e Redes', 'm31.PNG', 'tudo est', 'no_foto.png', '', 0, '15020280', 'Jardim Alto Rio Preto', 'Rua Pascoal Bevilacqua', '230', '', 'Sao Jose do Rio Preto', 'Sp', '-20.8215415', '-49.4063996', 0, '15.00', 0, 15, 10, 10, 10, 15, 15, 10, 1, 1, 1, 1, 1, 1, 1, 'Jardim A. R Preto - Rua Pascoal Bevilacqua, 230 - S.J.R. Preto SP', 1),
(18, 13, '2017-10-19', 'ROUPAS FINAS E IMPORTADOS', 'lorenas(1).jpg', 'Moda masculina e feminina, acesorios, perfumes nacionais e importados.', 'no_foto.png', '', 0, '15080310', 'Chacara Municipal', 'Rua Roberto Mange', '170', '', 'Sao Jose do Rio Preto', 'Sp', '-20.8293902', '-49.3957353', 0, '50.00', 0, 10, 15, 15, 10, 10, 5, 5, 2, 3, 4, 5, 6, 7, 10, 'Chacara Municipal, Rua Roberto Mange, 170 - S.J.R.Preto - SP', 5),
(19, 14, '2017-10-20', 'GANHE UM RODIZIO NO HATSUKI', 'comida(2).jpg', 'O melhor rodízio de almoço já está servido! Venha para o Hatsuki!', 'ampanha.jpg', 'Fazendo o CHECK-IN ganhe um desconto especial e pague somente R$ 48,90 em um delicioso rodízio para duas pessoas.', 0, '15014300', 'Vila Santo Antonio', 'Rua Saldanha Marinho', '3980', '', 'Sao Jose do Rio Preto', 'Sp', '-20.8228685', '-49.3755331', 1, '15.00', 0, 10, 20, 20, 25, 25, 10, 10, 1, 1, 1, 1, 1, 1, 1, 'Vila Santo Antonio - Rua Saldanha Marinho, 3980 - S.J.R. Preto SP', 1),
(21, 15, '2017-11-23', 'EL TORO RP RESTAURANTE LTDA', 'elprato2.png', 'Você Check-in em El Toro no Rio Preto Shopping.', NULL, NULL, 0, '15015770', 'Vila Redentora', 'Rua Pernambuco', '3229', '', 'Sao Jose do Rio Preto', 'SP', '-20.8211048', '-49.3880087', 1, '5.00', 0, 5, 6, 5, 5, 5, 5, 5, 2, 3, 4, 5, 6, 7, 10, 'Vila Redentora - Rua Pernambuco, 3220 - S.J.R.P - Sp', 1),
(23, 17, '2017-11-23', 'ALMIRANTE BARBA LTDA ME', 'almirante(2).jpg', 'Almirante Barba sempre às suas ordens!', NULL, NULL, 0, '15015500', 'Centro', 'Rua Coronel Spinola Castro', '4030', '', 'Sao Jose do Rio Preto', 'SP', '-20.8166183', '-49.3891654', 1, '0.00', 0, 8, 8, 8, 4, 4, 4, 0, 1, 1, 1, 1, 1, 1, 1, 'Redentora - Rua Coronel Spinola Castro 4030 - S.J.R.P - SP', 1),
(26, 12, '2017-12-14', 'TESTE', 'Hydrangeas.jpg', 'testeee', 'no_foto.png', '', 0, '15020250', 'sadsad', 'asdsa', '213', 'asdsad', 'sadad', 'SP', '', '', 0, '0.00', 0, 1, 2, 3, 4, 5, 6, 7, 1, 1, 1, 1, 1, 1, 1, 'asdsadasdasdas', 1),
(27, 18, '2017-12-18', 'PRIMEIRA IGREJA BATISTA', 'pastel-medio.jpg', 'Deliciosos Pasteis todos os dias', NULL, NULL, 0, '15044241', 'Solo Sagrado', 'Candido Portinari', '42', '', 'Sao Jose do Rio Preto', 'SP', '-20.7863224', '-49.4134424', 0, '0.00', 0, 5, 5, 5, 5, 5, 10, 10, 1, 1, 1, 1, 1, 1, 1, 'Solo Sagrado - Candido Portinari, S.J.R.Preto - SP', 1),
(28, 19, '2017-12-19', 'KNS Consultoria', 'logo-checkincash.png', 'PROMOÇÃO!!!!', NULL, NULL, 0, '15020250', 'Jardim Alto Rio Preto', 'Alemanha', '4153', 'SALA 02', 'São José do Rio Preto', 'SP', '-20.8217342', '-49.4030661', 0, '0.00', 0, 10, 20, 30, 40, 50, 60, 70, 1, 1, 1, 1, 1, 1, 1, 'Jardim Alto Rio Preto - Rua Alemanha, 4113 - S.J.R.Preto - SP', 1),
(29, 20, '2018-02-23', 'HS Business', 'iguatem.jpg', 'EMPRESA DE NEGÓCIOS IMOBILIÁRIOS', '', '', 0, '15093340', 'Iguatemi', 'Presidente Juscelino Kubitschek de Oliveira', '5000', 'Torre Comercial 1 | Sala 1504, 15º Andar', 'São José do Rio Preto', 'SP', '-20.8665207', '-49.4147385', 0, '0.00', 0, 15, 15, 5, 5, 35, 0, 0, 3, 4, 5, 6, 7, 8, 9, 'Av. Jk Oliveira, 5000, SL 1504 - Iguatemi | S.J.R.P-SP', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_pincash_contrato_creditos`
--

CREATE TABLE IF NOT EXISTS `ap_pincash_contrato_creditos` (
  `pk_pincash_credito` int(11) NOT NULL COMMENT 'Registra a quantidade acumulativa de créditos de pin cash por contrato',
  `fk_contrato` int(11) DEFAULT NULL COMMENT 'Relaciona-se com o contrato',
  `pincash_saldo` int(11) DEFAULT '0' COMMENT 'Saldo disponível em pin cash'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_pincash_contrato_creditos`
--

INSERT INTO `ap_pincash_contrato_creditos` (`pk_pincash_credito`, `fk_contrato`, `pincash_saldo`) VALUES
(1, 13, 700),
(4, 14, 746),
(5, 15, 744),
(6, 19, 0),
(7, 11, 3742),
(8, 12, 0),
(9, 20, 743),
(10, 18, 0),
(11, 17, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_pincash_contrato_creditos_mov`
--

CREATE TABLE IF NOT EXISTS `ap_pincash_contrato_creditos_mov` (
  `pk_pincash_creditomov` int(11) NOT NULL COMMENT 'Registra a quantidade de cash pin’s adquiridas pelo cliente',
  `aquisicao` date DEFAULT NULL COMMENT 'Data da aquisição de créditos de cashpin',
  `fk_pincash_contrato_creditos` int(11) DEFAULT NULL COMMENT 'Relaciona-se com a tabela de créditos do cliente que acumula o saldo de pin cash',
  `fk_pincash_moeda` int(11) DEFAULT NULL COMMENT 'Relaciona-se com a tabela moeda na compra de pacotes',
  `pacote` int(11) DEFAULT NULL COMMENT 'Pacote adquirido em pin cash, registra a quantidade de pin cash deste pacote'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_pincash_contrato_creditos_mov`
--

INSERT INTO `ap_pincash_contrato_creditos_mov` (`pk_pincash_creditomov`, `aquisicao`, `fk_pincash_contrato_creditos`, `fk_pincash_moeda`, `pacote`) VALUES
(1, '2018-02-27', 1, 1, 750),
(2, '2018-03-16', 4, 1, 750),
(4, '2018-03-16', 7, 1, 750),
(5, '2018-03-16', 7, 3, 3000),
(8, '2018-03-23', 5, 1, 750);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_pincash_cupons`
--

CREATE TABLE IF NOT EXISTS `ap_pincash_cupons` (
  `pk_pincash_cupom` int(11) NOT NULL COMMENT 'armazena os cupons dos usuarios para o sorteio',
  `fk_pincash_sorteio` int(11) DEFAULT NULL COMMENT 'Relaciona-se com o sorteio\n',
  `fk_usuario` int(11) DEFAULT NULL COMMENT 'Relaciona-se com o usuário',
  `cupom` varchar(45) DEFAULT NULL COMMENT 'Numero do cupom criado para o sorteio da campanha ativa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_pincash_moeda`
--

CREATE TABLE IF NOT EXISTS `ap_pincash_moeda` (
  `pk_pincash_moeda` int(11) NOT NULL COMMENT 'Armazena as inclusões de moedas criando um histórico \nMoedas baseadas em pacotes',
  `ativo` tinyint(1) DEFAULT '0' COMMENT '0 -> Inativo\n1 -> Ativo',
  `data_inclusao` date DEFAULT NULL COMMENT 'Data da criação do pacote',
  `pacote` int(11) DEFAULT NULL COMMENT 'Quantidade de pin cash a ser adquirido',
  `valor_pacote` decimal(6,2) DEFAULT NULL COMMENT 'valor do pacote em pin cash\n'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_pincash_moeda`
--

INSERT INTO `ap_pincash_moeda` (`pk_pincash_moeda`, `ativo`, `data_inclusao`, `pacote`, `valor_pacote`) VALUES
(1, 1, '2018-02-27', 750, '49.90'),
(2, 1, '2018-02-27', 1500, '79.90'),
(3, 1, '2018-02-27', 3000, '149.90'),
(4, 1, '2018-02-27', 6000, '199.90'),
(5, 1, '2018-02-27', 12000, '249.90');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_pincash_premiado`
--

CREATE TABLE IF NOT EXISTS `ap_pincash_premiado` (
  `pk_premiado` int(11) NOT NULL COMMENT 'armazena os usuários que foram sorteados e quais prêmios ganharam',
  `data_premiacao` date DEFAULT NULL COMMENT 'Data da premiação',
  `fk_sorteio_mov` int(11) DEFAULT NULL COMMENT 'Relaciona-se com o premio ganho',
  `fk_usuario` int(11) DEFAULT NULL COMMENT 'Usuario ganhador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_pincash_sorteio`
--

CREATE TABLE IF NOT EXISTS `ap_pincash_sorteio` (
  `pk_sorteio_cabe_pincash` int(11) NOT NULL,
  `ativo` tinyint(1) DEFAULT '1' COMMENT '0 -> Inativo\n1 -> Ativo\n\nSomente poderá haver uma campanha ativa',
  `datainicio` date DEFAULT NULL COMMENT 'data que gravou os dados do sorteio na tabela, considerado como inicio de vigência',
  `datafim` date DEFAULT NULL COMMENT 'Data que será feito o sorteio do premio.',
  `texto_campanha` text COMMENT 'Texto que explica ou da sentido ao sorteio, explica por exemplo seu objetivo; este texto será apresentado no app por exemplo:Concorra a 3 maravilhosos prêmios para a campanha do dia dos Pais, o Checkin Cash estará sorteando:Primeiro Prêmio: Um carroSegundo Prêmio: Uma Moto 150 HondaTerceiro Prêmio: Um Mac Book Air',
  `foto_campanha` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_pincash_sorteio`
--

INSERT INTO `ap_pincash_sorteio` (`pk_sorteio_cabe_pincash`, `ativo`, `datainicio`, `datafim`, `texto_campanha`, `foto_campanha`) VALUES
(1, 1, '2018-02-27', '2018-05-27', 'Explore centenas de locais que você pode usar \r\nCheck-in Cash. Ganhe Descontos e Prêmios incríveis!', 'pin_cash_I_4.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_pincash_sorteio_mov`
--

CREATE TABLE IF NOT EXISTS `ap_pincash_sorteio_mov` (
  `pk_mov_sorteio_mv` int(11) NOT NULL,
  `fk_cabe_sorteio` int(11) DEFAULT NULL COMMENT 'Referencia a tabela sorteio',
  `foto_catalogo` text NOT NULL COMMENT 'Foto apresentação do catalogo de premios',
  `foto_premiacao` text COMMENT 'foto do premio a ser sorteado',
  `titulo` varchar(30) NOT NULL,
  `chamada` varchar(90) NOT NULL COMMENT 'texto de chamada para ser apresentado na tela de sorteios',
  `texto_premiacao` varchar(70) DEFAULT NULL COMMENT 'texto para premiação',
  `pincash_premio` int(11) NOT NULL DEFAULT '0' COMMENT 'Quantidade de pin para este premio',
  `label` varchar(30) NOT NULL COMMENT 'Informe um label para identificacao do premio, exemplo: Carro'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_pincash_sorteio_mov`
--

INSERT INTO `ap_pincash_sorteio_mov` (`pk_mov_sorteio_mv`, `fk_cabe_sorteio`, `foto_catalogo`, `foto_premiacao`, `titulo`, `chamada`, `texto_premiacao`, `pincash_premio`, `label`) VALUES
(1, 1, '', 'mac_N.png', 'Incrível!', 'suas chances estão aumentando, com 80 pins você concorre ao MacBook Pro.', 'Incrível, com 80pins você concorre ao MacBook Pro!', 80, 'um Macbook Pro'),
(2, 1, '', 'pin_premios_W.png', 'Agora ficou legal!', 'suas chances estão aumentando, com 60 pins você concorre a um iPhone X + apple watch.', 'Bem melhor, com 60pins você concorre ao iPhone X + apple watch!', 60, 'um iPhone X + apple watch'),
(3, 1, '', 'XI.png', 'Quer ganhar um iPhone X?', 'agora falta pouco, com 40 pins você concorre automaticamente.', 'Que legal, com 40pins você concorre ao  iPhone X?', 40, 'um iPhone X'),
(4, 1, '', 'galax_1_3.png', 'Quer um Sansung Galaxy Note 8?', 'acumule 20 pins e você concorre automaticamente.', 'Oba, com 20pins você já concorre ao  Sansung Galaxy S9!', 20, 'um Sansung Galaxy S9'),
(22, 1, 'pin_premios_inicial_16.png', 'inicio_1.png', '', '', 'Agora você pode ganhar todos os prêmios!  Com 100 pins você concorre a', 100, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_pincash_user`
--

CREATE TABLE IF NOT EXISTS `ap_pincash_user` (
  `pk_usr_pincash` int(11) NOT NULL COMMENT 'Mantem o saldo acumulado de cash pin do usuario do APP',
  `fk_usuario` int(11) DEFAULT NULL COMMENT 'Relaciona-se com o usuario',
  `saldo_flutuante` int(11) DEFAULT '0' COMMENT 'Saldo Flutuante a ser utilizado no sistema de pin cash; é mantido enquanto não for feito o sorteio do prémio,  este saldo é trocado quando atingido a quantidade exigida para o maior premiação, se atingido será trocado por uma estrela, restando somente o saldo remanescente, cada estrela da direito a concorrer a todos os prêmios, se o saldo remanescente alcançar novamente o valor da quantidade exigida para o maior premio, então dobra as chances do usuário concorrer, indo para a segunda estrela que da 2 chances de concorrer a todos os prémios e assim sucessivamente.',
  `saldo_acumulado` int(11) DEFAULT '0' COMMENT 'Saldo acumulado; ja processado pelo checkin cash para este cliente\nAqui todos os saldos ja processados vão se acumulando durante o tempo de vida do usuário no app.'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_pincash_user`
--

INSERT INTO `ap_pincash_user` (`pk_usr_pincash`, `fk_usuario`, `saldo_flutuante`, `saldo_acumulado`) VALUES
(4, 50, 25, 156),
(5, 52, 6, 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_pincash_user_mov`
--

CREATE TABLE IF NOT EXISTS `ap_pincash_user_mov` (
  `pk_pincash_mov` int(11) NOT NULL COMMENT 'Registra os lançamentos de credito de cash pin toda vez que o usuário fizer um checkin pelo sistema',
  `data_lancamento` date DEFAULT NULL COMMENT 'Data de lançamento do credito do pin cash',
  `fk_contrato_publicador` int(11) DEFAULT NULL COMMENT 'relaciona com o contrato',
  `fk_pincash_sorteio` int(11) DEFAULT NULL COMMENT 'Relaciona ao sorteio',
  `fk_usuario` int(11) DEFAULT NULL COMMENT 'Relaciona-se com o usuario',
  `pincash_qtde` int(11) DEFAULT NULL COMMENT 'quantidade de pin cash adquirida',
  `desconto_recebido` decimal(6,2) DEFAULT NULL COMMENT 'Desconto recebido do checkin cash no ato do checkin, conforme estabelecido no contrato do lojista',
  `token` varchar(10) DEFAULT NULL COMMENT 'Recebe o token do checkin efetuado pelo cliente',
  `token_validado` smallint(6) DEFAULT '0' COMMENT 'Verifica se o token foi validado pelo estabelecimento\n\n0 -> nao validado\n1 -> validado',
  `token_data_ativacao` datetime DEFAULT NULL COMMENT 'Data em que o token foi validado'
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_pincash_user_mov`
--

INSERT INTO `ap_pincash_user_mov` (`pk_pincash_mov`, `data_lancamento`, `fk_contrato_publicador`, `fk_pincash_sorteio`, `fk_usuario`, `pincash_qtde`, `desconto_recebido`, `token`, `token_validado`, `token_data_ativacao`) VALUES
(26, '2018-03-19', 18, 1, 50, 2, '10.00', '782377', 1, '2018-03-19 16:05:34'),
(27, '2018-03-19', 19, 1, 50, 1, '10.00', '439484', 1, '2018-03-19 15:50:24'),
(28, '2018-03-19', 19, 1, 50, 1, '10.00', '693731', 1, '2018-03-19 15:58:29'),
(29, '2018-03-20', 21, 1, 50, 3, '6.00', '974837', 0, NULL),
(30, '2018-03-20', 14, 1, 50, 2, '50.00', '699211', 1, '2018-03-20 16:50:56'),
(31, '2018-03-20', 21, 1, 52, 3, '6.00', '685336', 0, NULL),
(32, '2018-03-20', 29, 1, 52, 1, '15.00', '891894', 0, NULL),
(33, '2018-03-21', 23, 1, 50, 1, '8.00', '411882', 0, NULL),
(34, '2018-03-21', 27, 1, 50, 1, '5.00', '626616', 0, NULL),
(35, '2018-03-21', 14, 1, 50, 3, '65.00', '197949', 1, '2018-03-21 16:14:07'),
(36, '2018-03-21', 19, 1, 50, 1, '20.00', '164926', 1, '2018-03-21 14:54:49'),
(37, '2018-03-21', 21, 1, 50, 4, '5.00', '256833', 0, NULL),
(39, '2018-03-21', 19, 1, 50, 1, '20.00', '671489', 1, '2018-03-21 14:56:04'),
(40, '2018-03-21', 21, 1, 52, 4, '5.00', '858526', 0, NULL),
(41, '2018-03-21', 14, 1, 50, 3, '65.00', '486468', 0, NULL),
(42, '2018-03-21', 21, 1, 52, 4, '5.00', '822657', 0, NULL),
(43, '2018-03-23', 21, 1, 52, 6, '5.00', '754194', 1, '2018-03-23 10:41:27'),
(44, '2018-03-24', 29, 1, 52, 1, '0.00', '658293', 0, NULL),
(46, '2018-04-03', 23, 1, 52, 1, '8.00', '994879', 0, NULL),
(47, '2018-04-06', 29, 1, 52, 7, '35.00', '559234', 0, NULL),
(49, '2018-04-09', 18, 1, 50, 2, '10.00', '811171', 1, '2018-04-13 15:24:15'),
(50, '2018-04-10', 18, 1, 50, 3, '15.00', '110471', 1, '2018-04-13 15:21:45'),
(52, '2018-04-13', 14, 1, 50, 2, '60.00', '534457', 1, '2018-04-13 15:54:05'),
(53, '2018-04-14', 29, 1, 50, 8, '0.00', '912541', 0, NULL),
(54, '2018-04-15', 18, 1, 50, 10, '5.00', '146031', 0, NULL),
(55, '2018-04-17', 28, 1, 50, 1, '20.00', '812131', 0, NULL),
(56, '2018-04-18', 29, 1, 50, 5, '5.00', '887075', 0, NULL),
(63, '2018-04-21', 21, 1, 50, 7, '5.00', '760703', 0, NULL),
(64, '2018-05-04', 29, 1, 50, 7, '35.00', '706923', 0, NULL),
(65, '2018-05-08', 18, 1, 50, 3, '15.00', '529614', 0, NULL),
(66, '2018-05-10', 29, 1, 50, 6, '5.00', '439983', 0, NULL),
(67, '2018-05-12', 19, 1, 28, 1, '10.00', '455656', 0, NULL),
(68, '2018-05-12', 23, 1, 28, 1, '4.00', '588971', 0, NULL),
(69, '2018-05-14', 18, 1, 50, 2, '10.00', '328127', 0, NULL),
(70, '2018-05-17', 29, 1, 50, 6, '5.00', '474628', 0, NULL),
(71, '2018-05-18', 29, 1, 50, 7, '35.00', '732382', 1, '2018-05-18 10:41:44');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_preferencia`
--

CREATE TABLE IF NOT EXISTS `ap_preferencia` (
  `pk_preferencia` int(11) NOT NULL,
  `fk_usuario` int(11) DEFAULT NULL,
  `fk_contrato` int(11) DEFAULT NULL,
  `sigame` tinyint(1) DEFAULT '0' COMMENT '0 -> nao seguir\n1 -> seguir',
  `avaliacao` tinyint(1) DEFAULT '0' COMMENT '0 -> Nenhuma\n1 -> Pessimo\n2 -> Ruim\n3 -> Bom\n4 -> Otimo\n5 ->Excelente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='contem as avaliações dos clientes do app';

-- --------------------------------------------------------

--
-- Estrutura para tabela `ap_registro_usuario`
--

CREATE TABLE IF NOT EXISTS `ap_registro_usuario` (
  `pk_usuario` int(11) NOT NULL,
  `dataregistro` datetime NOT NULL,
  `codigopais` char(3) NOT NULL DEFAULT '+55',
  `codigoarea` char(2) NOT NULL DEFAULT '00',
  `celular` varchar(30) NOT NULL DEFAULT ' ',
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(70) NOT NULL,
  `data_nascimento` date NOT NULL DEFAULT '0000-00-00',
  `cep` varchar(10) NOT NULL DEFAULT ' ',
  `rua` varchar(80) NOT NULL DEFAULT ' ',
  `numero` varchar(10) NOT NULL DEFAULT ' ',
  `complemento` varchar(45) NOT NULL DEFAULT ' ',
  `bairro` varchar(45) NOT NULL DEFAULT ' ',
  `cidade` varchar(70) NOT NULL DEFAULT ' ',
  `estado` char(2) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL,
  `senha` varchar(38) NOT NULL,
  `pin_recupera_senha` smallint(4) NOT NULL DEFAULT '0',
  `iscompleto` char(1) NOT NULL DEFAULT '0' COMMENT '0 -> nao completo   1 -> Completo'
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ap_registro_usuario`
--

INSERT INTO `ap_registro_usuario` (`pk_usuario`, `dataregistro`, `codigopais`, `codigoarea`, `celular`, `nome`, `sobrenome`, `data_nascimento`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `email`, `senha`, `pin_recupera_senha`, `iscompleto`) VALUES
(19, '2017-12-13 13:40:35', '+55', '00', ' ', 'Gabriel', 'Rodrigues', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', '', 'gabrielgame2000@hotmail.com', '7B4FE616B8A05A08548A0AF7DAF65B86', 0, '0'),
(21, '2017-12-15 08:52:38', '+55', '00', ' ', 'Marcelo', 'Brazil', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', '', 'mbcbs07@hotmail.com', '7B4FE616B8A05A08548A0AF7DAF65B86', 0, '0'),
(27, '2017-12-18 13:45:21', '+55', '00', ' ', 'Manoel', 'Vieira', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', '', 'mvsilvaneto.cel@gmail.com', '704FEB1CBFA333655A8404F9', 6223, '0'),
(28, '2017-12-18 15:26:14', '+55', '00', ' ', 'Marcelo', 'Brazil', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', '', 'marcelobrazil_@hotmail.com', 'f61cc9068b07f27f9a5bd71c5528fd90', 2366, '0'),
(50, '2018-01-29 09:43:39', '+55', '00', ' ', 'Manoel', 'De Jesus', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', '', 'manoelvieira@yahoo.com.br', 'e10adc3949ba59abbe56e057f20f883e', 2831, '0'),
(52, '2018-02-26 11:26:26', '+55', '00', ' ', 'José', 'Angelo', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', '', 'jangelojunior@uol.com.br', 'db03bf5876e388b430acbc54a00ff66e', 5585, '0'),
(53, '2018-05-17 15:55:09', '+55', '00', ' ', 'FLÁVIO', 'ROZENDO', '0000-00-00', ' ', ' ', ' ', ' ', ' ', ' ', '', 'fla_system@hotmail.com', 'cb19215645b52e05b66688a45bfec3af', 8135, '0');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vwsorteio_maxpontos`
--
CREATE TABLE IF NOT EXISTS `vwsorteio_maxpontos` (
`idsorteio` int(11)
,`minimo` int(11)
,`maximo` int(11)
);

-- --------------------------------------------------------

--
-- Estrutura para view `vwsorteio_maxpontos`
--
DROP TABLE IF EXISTS `vwsorteio_maxpontos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`check956`@`localhost` SQL SECURITY DEFINER VIEW `vwsorteio_maxpontos` AS select `ap_pincash_sorteio_mov`.`fk_cabe_sorteio` AS `idsorteio`,min(`ap_pincash_sorteio_mov`.`pincash_premio`) AS `minimo`,max(`ap_pincash_sorteio_mov`.`pincash_premio`) AS `maximo` from (`ap_pincash_sorteio_mov` join `ap_pincash_sorteio` on((`ap_pincash_sorteio_mov`.`fk_cabe_sorteio` = `ap_pincash_sorteio`.`pk_sorteio_cabe_pincash`))) where (`ap_pincash_sorteio`.`ativo` = 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `ap_administrador`
--
ALTER TABLE `ap_administrador`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `ap_classificacao`
--
ALTER TABLE `ap_classificacao`
  ADD PRIMARY KEY (`pk_classificacao`);

--
-- Índices de tabela `ap_configuracao`
--
ALTER TABLE `ap_configuracao`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `ap_contrato`
--
ALTER TABLE `ap_contrato`
  ADD PRIMARY KEY (`pk_contrato`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `cnpj` (`cnpj`), ADD UNIQUE KEY `rash` (`rash`), ADD KEY `classificacao_idx` (`fk_classificacao`);

--
-- Índices de tabela `ap_contrato_coletor`
--
ALTER TABLE `ap_contrato_coletor`
  ADD PRIMARY KEY (`pk_coletor`), ADD KEY `cliente_idx` (`fk_usuario`), ADD KEY `publicador_idx` (`fk_publicador`);

--
-- Índices de tabela `ap_contrato_financeiro`
--
ALTER TABLE `ap_contrato_financeiro`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `ap_contrato_publicador`
--
ALTER TABLE `ap_contrato_publicador`
  ADD PRIMARY KEY (`pk_publicador`), ADD KEY `contratopub_idx` (`fk_contrato`), ADD KEY `nomenclatura` (`nomenclatura`);

--
-- Índices de tabela `ap_pincash_contrato_creditos`
--
ALTER TABLE `ap_pincash_contrato_creditos`
  ADD PRIMARY KEY (`pk_pincash_credito`), ADD KEY `credito_contrato_idx` (`fk_contrato`);

--
-- Índices de tabela `ap_pincash_contrato_creditos_mov`
--
ALTER TABLE `ap_pincash_contrato_creditos_mov`
  ADD PRIMARY KEY (`pk_pincash_creditomov`), ADD KEY `credito_contrato_mov_idx` (`fk_pincash_contrato_creditos`), ADD KEY `contrato_moeda_idx` (`fk_pincash_moeda`);

--
-- Índices de tabela `ap_pincash_cupons`
--
ALTER TABLE `ap_pincash_cupons`
  ADD PRIMARY KEY (`pk_pincash_cupom`), ADD KEY `sorteio_cupom_idx` (`fk_pincash_sorteio`), ADD KEY `usuario_cupom_idx` (`fk_usuario`);

--
-- Índices de tabela `ap_pincash_moeda`
--
ALTER TABLE `ap_pincash_moeda`
  ADD PRIMARY KEY (`pk_pincash_moeda`);

--
-- Índices de tabela `ap_pincash_premiado`
--
ALTER TABLE `ap_pincash_premiado`
  ADD PRIMARY KEY (`pk_premiado`), ADD KEY `sorteio_usuario_idx` (`fk_usuario`), ADD KEY `sorteio_campanha_idx` (`fk_sorteio_mov`);

--
-- Índices de tabela `ap_pincash_sorteio`
--
ALTER TABLE `ap_pincash_sorteio`
  ADD PRIMARY KEY (`pk_sorteio_cabe_pincash`);

--
-- Índices de tabela `ap_pincash_sorteio_mov`
--
ALTER TABLE `ap_pincash_sorteio_mov`
  ADD PRIMARY KEY (`pk_mov_sorteio_mv`), ADD KEY `cabe_cashpin_idx` (`fk_cabe_sorteio`);

--
-- Índices de tabela `ap_pincash_user`
--
ALTER TABLE `ap_pincash_user`
  ADD PRIMARY KEY (`pk_usr_pincash`), ADD KEY `cash_usuario_idx` (`fk_usuario`);

--
-- Índices de tabela `ap_pincash_user_mov`
--
ALTER TABLE `ap_pincash_user_mov`
  ADD PRIMARY KEY (`pk_pincash_mov`), ADD KEY `cash_mov_usuario_idx` (`fk_usuario`), ADD KEY `cash_campanha_idx` (`fk_pincash_sorteio`), ADD KEY `cash_mov_contrato_idx` (`fk_contrato_publicador`);

--
-- Índices de tabela `ap_preferencia`
--
ALTER TABLE `ap_preferencia`
  ADD PRIMARY KEY (`pk_preferencia`), ADD KEY `pref_cliente_idx` (`fk_usuario`), ADD KEY `pref_contrato_idx` (`fk_contrato`);

--
-- Índices de tabela `ap_registro_usuario`
--
ALTER TABLE `ap_registro_usuario`
  ADD PRIMARY KEY (`pk_usuario`), ADD UNIQUE KEY `email` (`email`), ADD KEY `nome` (`nome`), ADD KEY `sobrenome` (`sobrenome`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `ap_administrador`
--
ALTER TABLE `ap_administrador`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `ap_classificacao`
--
ALTER TABLE `ap_classificacao`
  MODIFY `pk_classificacao` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de tabela `ap_configuracao`
--
ALTER TABLE `ap_configuracao`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `ap_contrato`
--
ALTER TABLE `ap_contrato`
  MODIFY `pk_contrato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de tabela `ap_contrato_coletor`
--
ALTER TABLE `ap_contrato_coletor`
  MODIFY `pk_coletor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de tabela `ap_contrato_financeiro`
--
ALTER TABLE `ap_contrato_financeiro`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT de tabela `ap_contrato_publicador`
--
ALTER TABLE `ap_contrato_publicador`
  MODIFY `pk_publicador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de tabela `ap_pincash_contrato_creditos`
--
ALTER TABLE `ap_pincash_contrato_creditos`
  MODIFY `pk_pincash_credito` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Registra a quantidade acumulativa de créditos de pin cash por contrato',AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `ap_pincash_contrato_creditos_mov`
--
ALTER TABLE `ap_pincash_contrato_creditos_mov`
  MODIFY `pk_pincash_creditomov` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Registra a quantidade de cash pin’s adquiridas pelo cliente',AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `ap_pincash_cupons`
--
ALTER TABLE `ap_pincash_cupons`
  MODIFY `pk_pincash_cupom` int(11) NOT NULL AUTO_INCREMENT COMMENT 'armazena os cupons dos usuarios para o sorteio';
--
-- AUTO_INCREMENT de tabela `ap_pincash_moeda`
--
ALTER TABLE `ap_pincash_moeda`
  MODIFY `pk_pincash_moeda` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Armazena as inclusões de moedas criando um histórico \nMoedas baseadas em pacotes',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `ap_pincash_premiado`
--
ALTER TABLE `ap_pincash_premiado`
  MODIFY `pk_premiado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'armazena os usuários que foram sorteados e quais prêmios ganharam';
--
-- AUTO_INCREMENT de tabela `ap_pincash_sorteio`
--
ALTER TABLE `ap_pincash_sorteio`
  MODIFY `pk_sorteio_cabe_pincash` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `ap_pincash_sorteio_mov`
--
ALTER TABLE `ap_pincash_sorteio_mov`
  MODIFY `pk_mov_sorteio_mv` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de tabela `ap_pincash_user`
--
ALTER TABLE `ap_pincash_user`
  MODIFY `pk_usr_pincash` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mantem o saldo acumulado de cash pin do usuario do APP',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `ap_pincash_user_mov`
--
ALTER TABLE `ap_pincash_user_mov`
  MODIFY `pk_pincash_mov` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Registra os lançamentos de credito de cash pin toda vez que o usuário fizer um checkin pelo sistema',AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT de tabela `ap_preferencia`
--
ALTER TABLE `ap_preferencia`
  MODIFY `pk_preferencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `ap_registro_usuario`
--
ALTER TABLE `ap_registro_usuario`
  MODIFY `pk_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `ap_contrato`
--
ALTER TABLE `ap_contrato`
ADD CONSTRAINT `classificacoa` FOREIGN KEY (`fk_classificacao`) REFERENCES `ap_classificacao` (`pk_classificacao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_contrato_coletor`
--
ALTER TABLE `ap_contrato_coletor`
ADD CONSTRAINT `cliente` FOREIGN KEY (`fk_usuario`) REFERENCES `ap_registro_usuario` (`pk_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `publicador` FOREIGN KEY (`fk_publicador`) REFERENCES `ap_contrato_publicador` (`pk_publicador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_contrato_publicador`
--
ALTER TABLE `ap_contrato_publicador`
ADD CONSTRAINT `contratopub` FOREIGN KEY (`fk_contrato`) REFERENCES `ap_contrato` (`pk_contrato`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_pincash_contrato_creditos`
--
ALTER TABLE `ap_pincash_contrato_creditos`
ADD CONSTRAINT `credito_contrato` FOREIGN KEY (`fk_contrato`) REFERENCES `ap_contrato` (`pk_contrato`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_pincash_contrato_creditos_mov`
--
ALTER TABLE `ap_pincash_contrato_creditos_mov`
ADD CONSTRAINT `contrato_moeda` FOREIGN KEY (`fk_pincash_moeda`) REFERENCES `ap_pincash_moeda` (`pk_pincash_moeda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `credito_contrato_mov` FOREIGN KEY (`fk_pincash_contrato_creditos`) REFERENCES `ap_pincash_contrato_creditos` (`pk_pincash_credito`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_pincash_cupons`
--
ALTER TABLE `ap_pincash_cupons`
ADD CONSTRAINT `sorteio_cupom` FOREIGN KEY (`fk_pincash_sorteio`) REFERENCES `ap_pincash_sorteio` (`pk_sorteio_cabe_pincash`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `usuario_cupom` FOREIGN KEY (`fk_usuario`) REFERENCES `ap_registro_usuario` (`pk_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_pincash_premiado`
--
ALTER TABLE `ap_pincash_premiado`
ADD CONSTRAINT `sorteio_campanha` FOREIGN KEY (`fk_sorteio_mov`) REFERENCES `ap_pincash_sorteio_mov` (`pk_mov_sorteio_mv`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `sorteio_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `ap_registro_usuario` (`pk_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_pincash_sorteio_mov`
--
ALTER TABLE `ap_pincash_sorteio_mov`
ADD CONSTRAINT `sorteio` FOREIGN KEY (`fk_cabe_sorteio`) REFERENCES `ap_pincash_sorteio` (`pk_sorteio_cabe_pincash`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_pincash_user`
--
ALTER TABLE `ap_pincash_user`
ADD CONSTRAINT `cash_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `ap_registro_usuario` (`pk_usuario`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_pincash_user_mov`
--
ALTER TABLE `ap_pincash_user_mov`
ADD CONSTRAINT `cash_mov_contrato` FOREIGN KEY (`fk_contrato_publicador`) REFERENCES `ap_contrato_publicador` (`pk_publicador`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `cash_mov_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `ap_registro_usuario` (`pk_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `cash_sorteio` FOREIGN KEY (`fk_pincash_sorteio`) REFERENCES `ap_pincash_sorteio` (`pk_sorteio_cabe_pincash`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ap_preferencia`
--
ALTER TABLE `ap_preferencia`
ADD CONSTRAINT `pref_cliente` FOREIGN KEY (`fk_usuario`) REFERENCES `ap_registro_usuario` (`pk_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `pref_contrato` FOREIGN KEY (`fk_contrato`) REFERENCES `ap_contrato` (`pk_contrato`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
