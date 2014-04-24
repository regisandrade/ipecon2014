-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 22-Nov-2013 às 14:39
-- Versão do servidor: 5.5.34-0ubuntu0.12.04.1
-- versão do PHP: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `liakurtz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id_banners` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) NOT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_banners`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id_banners`, `imagem`, `titulo`, `ordem`, `insert_data`, `update_data`) VALUES
(1, 'public/imagem/gerenciador/banner/moda-1.jpg', 'Model de todos os tipos', 1, '2013-11-08 09:36:55', '2013-11-08 09:36:55'),
(2, 'public/imagem/gerenciador/banner/moda-2.jpg', 'diversos tipo de moda', 1, '2013-11-08 09:37:13', '2013-11-08 09:37:13'),
(3, 'public/imagem/gerenciador/banner/mda-21.jpg', 'tipo de moda', 1, '2013-11-08 09:37:25', '2013-11-08 09:37:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracao`
--

CREATE TABLE IF NOT EXISTS `configuracao` (
  `id_configuracao` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(200) DEFAULT NULL,
  `slogan` varchar(200) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_configuracao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `configuracao`
--

INSERT INTO `configuracao` (`id_configuracao`, `empresa`, `slogan`, `descricao`, `email`, `facebook`, `instagram`, `ordem`, `insert_data`, `update_data`) VALUES
(1, 'Lia Kurtz', 'Aqui a moda acontece ', 'Site de moda masculina', 'teste@gmail.com', 'https://www.facebook.com/', 'http://instagram.com/', 1, '2013-11-11 15:09:46', '2013-11-11 15:09:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `titulo`, `texto`, `ordem`, `insert_data`, `update_data`) VALUES
(1, 'Lia Kurtz', '<p>\r\n	&nbsp;Nunca &eacute; demais lembrar o peso e o significado destes problemas, uma vez que o desafiador cen&aacute;rio globalizado nos obriga &agrave; an&aacute;lise da gest&atilde;o inovadora da qual fazemos parte. O empenho em analisar o acompanhamento das prefer&ecirc;ncias de consumo cumpre um papel essencial na formula&ccedil;&atilde;o do sistema de forma&ccedil;&atilde;o de quadros que corresponde &agrave;s necessidades. Ainda assim, existem d&uacute;vidas a respeito de como a expans&atilde;o dos mercados mundiais talvez venha a ressaltar a relatividade do sistema de participa&ccedil;&atilde;o geral. O incentivo ao avan&ccedil;o tecnol&oacute;gico, assim como a estrutura atual da organiza&ccedil;&atilde;o auxilia a prepara&ccedil;&atilde;o e a composi&ccedil;&atilde;o das posturas dos &oacute;rg&atilde;os dirigentes com rela&ccedil;&atilde;o &agrave;s suas atribui&ccedil;&otilde;es. Todas estas quest&otilde;es, devidamente ponderadas, levantam d&uacute;vidas sobre se o novo modelo estrutural aqui preconizado garante a contribui&ccedil;&atilde;o de um grupo importante na determina&ccedil;&atilde;o das novas proposi&ccedil;&otilde;es.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A pr&aacute;tica cotidiana prova que o desenvolvimento cont&iacute;nuo de distintas formas de atua&ccedil;&atilde;o afeta positivamente a correta previs&atilde;o das diretrizes de desenvolvimento para o futuro. Assim mesmo, a competitividade nas transa&ccedil;&otilde;es comerciais facilita a cria&ccedil;&atilde;o das dire&ccedil;&otilde;es preferenciais no sentido do progresso. As experi&ecirc;ncias acumuladas demonstram que a consolida&ccedil;&atilde;o das estruturas causa impacto indireto na reavalia&ccedil;&atilde;o de alternativas &agrave;s solu&ccedil;&otilde;es ortodoxas. Evidentemente, o comprometimento entre as equipes maximiza as possibilidades por conta das condi&ccedil;&otilde;es financeiras e administrativas exigidas.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Por outro lado, a cont&iacute;nua expans&atilde;o de nossa atividade promove a alavancagem do investimento em reciclagem t&eacute;cnica. Pensando mais a longo prazo, a consulta aos diversos militantes pode nos levar a considerar a reestrutura&ccedil;&atilde;o das formas de a&ccedil;&atilde;o. Do mesmo modo, a valoriza&ccedil;&atilde;o de fatores subjetivos aponta para a melhoria do remanejamento dos quadros funcionais. Caros amigos, a constante divulga&ccedil;&atilde;o das informa&ccedil;&otilde;es prepara-nos para enfrentar situa&ccedil;&otilde;es at&iacute;picas decorrentes dos relacionamentos verticais entre as hierarquias. O que temos que ter sempre em mente &eacute; que a hegemonia do ambiente pol&iacute;tico apresenta tend&ecirc;ncias no sentido de aprovar a manuten&ccedil;&atilde;o dos m&eacute;todos utilizados na avalia&ccedil;&atilde;o de resultados.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost/liakurtz/public/imagem/gerenciador/banner/moda-1.jpg" style="width: 591px; height: 418px; border-width: 1px; border-style: solid; margin: 10px;" /></p>\r\n<p style="text-align: center;">\r\n	A pr&aacute;tica cotidiana prova que o desenvolvimento cont&iacute;nuo de distintas formas de atua&ccedil;&atilde;o afeta positivamente a correta previs&atilde;o das diretrizes de desenvolvimento para o futuro. Assim mesmo, a competitividade nas transa&ccedil;&otilde;es comerciais facilita a cria&ccedil;&atilde;o das dire&ccedil;&otilde;es preferenciais no sentido do progresso. As experi&ecirc;ncias acumuladas demonstram que a consolida&ccedil;&atilde;o das estruturas causa impacto indireto na reavalia&ccedil;&atilde;o de alternativas &agrave;s solu&ccedil;&otilde;es ortodoxas. Evidentemente, o comprometimento entre as equipes maximiza as possibilidades por conta das condi&ccedil;&otilde;es financeiras e administrativas exigidas.</p>\r\n', 1, '2013-11-11 09:52:21', '2013-11-11 16:27:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instalacao`
--

CREATE TABLE IF NOT EXISTS `instalacao` (
  `id_instalacao` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `resumo` text NOT NULL,
  `texto` text NOT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_instalacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `instalacao`
--

INSERT INTO `instalacao` (`id_instalacao`, `titulo`, `resumo`, `texto`, `ordem`, `insert_data`, `update_data`) VALUES
(1, 'Instalação', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit,\r\nsed diam nonummy nibh euismod tincidunt ut laoreet dolore\r\nmagna aliquam erat volutpat.', '<p style="text-align: justify;">\r\n	<span style="text-align: justify;">As experiências acumuladas demonstram que o fenômeno da Internet nos obriga à análise dos índices pretendidos. A prática cotidiana prova que a complexidade dos estudos efetuados promove a alavancagem das condições financeiras e administrativas exigidas. Desta maneira, a expansão dos mercados mundiais garante a contribuição de um grupo importante na determinação dos métodos utilizados na avaliação de resultados. O cuidado em identificar pontos críticos na estrutura atual da organização facilita a criação das posturas dos órgãos dirigentes com relação às suas atribuições. Percebemos, cada vez mais, que a hegemonia do ambiente político cumpre um papel essencial na formulação do investimento em reciclagem técnica. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o surgimento do comércio virtual assume importantes posições no estabelecimento das direções preferenciais no sentido do progresso. No mundo atual, o comprometimento entre as equipes representa uma abertura para a melhoria do sistema de formação de quadros que corresponde às necessidades. Do mesmo modo, a consolidação das estruturas obstaculiza a apreciação da importância das novas proposições. Todavia, o desafiador cenário globalizado oferece uma interessante oportunidade para verificação dos relacionamentos verticais entre as hierarquias. Pensando mais a longo prazo, o aumento do diálogo entre os diferentes setores produtivos acarreta um processo de reformulação e modernização do orçamento setorial. Não obstante, a competitividade nas transações comerciais talvez venha a ressaltar a relatividade dos paradigmas corporativos. Por outro lado, a valorização de fatores subjetivos pode nos levar a considerar a reestruturação das formas de ação.</span></p>\r\n', 1, '2013-09-16 09:58:06', '2013-09-16 14:04:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE IF NOT EXISTS `modelo` (
  `id_modelo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_modelo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `titulo`, `ordem`, `insert_data`, `update_data`) VALUES
(1, 'Calça Masculina', 1, '2013-11-11 11:15:51', '2013-11-11 11:15:51'),
(2, 'Jaqueta Masculina', 1, '2013-11-11 11:16:52', '2013-11-11 11:16:52'),
(3, 'Touca Masculina', 1, '2013-11-11 11:17:03', '2013-11-11 11:17:03'),
(4, 'Suspensório Masculino', 1, '2013-11-11 11:17:15', '2013-11-11 11:17:15'),
(5, 'Bermuda Masculina', 1, '2013-11-11 11:17:27', '2013-11-11 11:17:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `texto`, `ordem`, `insert_data`, `update_data`) VALUES
(1, 'Moda', '<p>\r\n	&nbsp;Todavia, a valoriza&ccedil;&atilde;o de fatores subjetivos maximiza as possibilidades por conta do fluxo de informa&ccedil;&otilde;es. A pr&aacute;tica cotidiana prova que o acompanhamento das prefer&ecirc;ncias de consumo apresenta tend&ecirc;ncias no sentido de aprovar a manuten&ccedil;&atilde;o do sistema de participa&ccedil;&atilde;o geral. O cuidado em identificar pontos cr&iacute;ticos no in&iacute;cio da atividade geral de forma&ccedil;&atilde;o de atitudes possibilita uma melhor vis&atilde;o global da gest&atilde;o inovadora da qual fazemos parte.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Evidentemente, o aumento do di&aacute;logo entre os diferentes setores produtivos nos obriga &agrave; an&aacute;lise das formas de a&ccedil;&atilde;o. Pensando mais a longo prazo, a complexidade dos estudos efetuados promove a alavancagem das posturas dos &oacute;rg&atilde;os dirigentes com rela&ccedil;&atilde;o &agrave;s suas atribui&ccedil;&otilde;es. Desta maneira, a revolu&ccedil;&atilde;o dos costumes &eacute; uma das consequ&ecirc;ncias das regras de conduta normativas.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Por outro lado, a expans&atilde;o dos mercados mundiais aponta para a melhoria das dire&ccedil;&otilde;es preferenciais no sentido do progresso. Do mesmo modo, a mobilidade dos capitais internacionais causa impacto indireto na reavalia&ccedil;&atilde;o dos conhecimentos estrat&eacute;gicos para atingir a excel&ecirc;ncia. No mundo atual, o consenso sobre a necessidade de qualifica&ccedil;&atilde;o cumpre um papel essencial na formula&ccedil;&atilde;o dos &iacute;ndices pretendidos. A n&iacute;vel organizacional, a consolida&ccedil;&atilde;o das estruturas afeta positivamente a correta previs&atilde;o dos modos de opera&ccedil;&atilde;o convencionais.</p>\r\n<p>\r\n	&nbsp;Todavia, a valoriza&ccedil;&atilde;o de fatores subjetivos maximiza as possibilidades por conta do fluxo de informa&ccedil;&otilde;es. A pr&aacute;tica cotidiana prova que o acompanhamento das prefer&ecirc;ncias de consumo apresenta tend&ecirc;ncias no sentido de aprovar a manuten&ccedil;&atilde;o do sistema de participa&ccedil;&atilde;o geral. O cuidado em identificar pontos cr&iacute;ticos no in&iacute;cio da atividade geral de forma&ccedil;&atilde;o de atitudes possibilita uma melhor vis&atilde;o global da gest&atilde;o inovadora da qual fazemos parte.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Evidentemente, o aumento do di&aacute;logo entre os diferentes setores produtivos nos obriga &agrave; an&aacute;lise das formas de a&ccedil;&atilde;o. Pensando mais a longo prazo, a complexidade dos estudos efetuados promove a alavancagem das posturas dos &oacute;rg&atilde;os dirigentes com rela&ccedil;&atilde;o &agrave;s suas atribui&ccedil;&otilde;es. Desta maneira, a revolu&ccedil;&atilde;o dos costumes &eacute; uma das consequ&ecirc;ncias das regras de conduta normativas.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Por outro lado, a expans&atilde;o dos mercados mundiais aponta para a melhoria das dire&ccedil;&otilde;es preferenciais no sentido do progresso. Do mesmo modo, a mobilidade dos capitais internacionais causa impacto indireto na reavalia&ccedil;&atilde;o dos conhecimentos estrat&eacute;gicos para atingir a excel&ecirc;ncia. No mundo atual, o consenso sobre a necessidade de qualifica&ccedil;&atilde;o cumpre um papel essencial na formula&ccedil;&atilde;o dos &iacute;ndices pretendidos. A n&iacute;vel organizacional, a consolida&ccedil;&atilde;o das estruturas afeta positivamente a correta previs&atilde;o dos modos de opera&ccedil;&atilde;o convencionais.</p>\r\n<p>\r\n	&nbsp;Todavia, a valoriza&ccedil;&atilde;o de fatores subjetivos maximiza as possibilidades por conta do fluxo de informa&ccedil;&otilde;es. A pr&aacute;tica cotidiana prova que o acompanhamento das prefer&ecirc;ncias de consumo apresenta tend&ecirc;ncias no sentido de aprovar a manuten&ccedil;&atilde;o do sistema de participa&ccedil;&atilde;o geral. O cuidado em identificar pontos cr&iacute;ticos no in&iacute;cio da atividade geral de forma&ccedil;&atilde;o de atitudes possibilita uma melhor vis&atilde;o global da gest&atilde;o inovadora da qual fazemos parte.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Evidentemente, o aumento do di&aacute;logo entre os diferentes setores produtivos nos obriga &agrave; an&aacute;lise das formas de a&ccedil;&atilde;o. Pensando mais a longo prazo, a complexidade dos estudos efetuados promove a alavancagem das posturas dos &oacute;rg&atilde;os dirigentes com rela&ccedil;&atilde;o &agrave;s suas atribui&ccedil;&otilde;es. Desta maneira, a revolu&ccedil;&atilde;o dos costumes &eacute; uma das consequ&ecirc;ncias das regras de conduta normativas.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Por outro lado, a expans&atilde;o dos mercados mundiais aponta para a melhoria das dire&ccedil;&otilde;es preferenciais no sentido do progresso. Do mesmo modo, a mobilidade dos capitais internacionais causa impacto indireto na reavalia&ccedil;&atilde;o dos conhecimentos estrat&eacute;gicos para atingir a excel&ecirc;ncia. No mundo atual, o consenso sobre a necessidade de qualifica&ccedil;&atilde;o cumpre um papel essencial na formula&ccedil;&atilde;o dos &iacute;ndices pretendidos. A n&iacute;vel organizacional, a consolida&ccedil;&atilde;o das estruturas afeta positivamente a correta previs&atilde;o dos modos de opera&ccedil;&atilde;o convencionais.</p>\r\n', 1, '2013-11-11 13:38:22', '2013-11-11 17:13:01'),
(2, 'beleza', '<p>\r\n	&nbsp;As experi&ecirc;ncias acumuladas demonstram que a constante divulga&ccedil;&atilde;o das informa&ccedil;&otilde;es talvez venha a ressaltar a relatividade dos m&eacute;todos utilizados na avalia&ccedil;&atilde;o de resultados. O que temos que ter sempre em mente &eacute; que o entendimento das metas propostas facilita a cria&ccedil;&atilde;o do retorno esperado a longo prazo. Assim mesmo, a ado&ccedil;&atilde;o de pol&iacute;ticas descentralizadoras obstaculiza a aprecia&ccedil;&atilde;o da import&acirc;ncia do remanejamento dos quadros funcionais. Nunca &eacute; demais lembrar o peso e o significado destes problemas, uma vez que a necessidade de renova&ccedil;&atilde;o processual faz parte de um processo de gerenciamento do impacto na agilidade decis&oacute;ria.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; O incentivo ao avan&ccedil;o tecnol&oacute;gico, assim como o desafiador cen&aacute;rio globalizado desafia a capacidade de equaliza&ccedil;&atilde;o das diversas correntes de pensamento. No entanto, n&atilde;o podemos esquecer que a percep&ccedil;&atilde;o das dificuldades estimula a padroniza&ccedil;&atilde;o de todos os recursos funcionais envolvidos. Todas estas quest&otilde;es, devidamente ponderadas, levantam d&uacute;vidas sobre se o comprometimento entre as equipes estende o alcance e a import&acirc;ncia das diretrizes de desenvolvimento para o futuro.</p>\r\n', 1, '2013-11-11 13:39:00', '2013-11-11 13:39:00'),
(3, 'Unhas a moda da vez', '<p>\r\n	&nbsp; O cuidado em identificar pontos cr&iacute;ticos na revolu&ccedil;&atilde;o dos costumes obstaculiza a aprecia&ccedil;&atilde;o da import&acirc;ncia do investimento em reciclagem t&eacute;cnica. Assim mesmo, a consulta aos diversos militantes representa uma abertura para a melhoria das formas de a&ccedil;&atilde;o. A certifica&ccedil;&atilde;o de metodologias que nos auxiliam a lidar com a hegemonia do ambiente pol&iacute;tico maximiza as possibilidades por conta de alternativas &agrave;s solu&ccedil;&otilde;es ortodoxas. O que temos que ter sempre em mente &eacute; que a estrutura atual da organiza&ccedil;&atilde;o acarreta um processo de reformula&ccedil;&atilde;o e moderniza&ccedil;&atilde;o do sistema de participa&ccedil;&atilde;o geral.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Caros amigos, o consenso sobre a necessidade de qualifica&ccedil;&atilde;o promove a alavancagem dos paradigmas corporativos. Ainda assim, existem d&uacute;vidas a respeito de como a cont&iacute;nua expans&atilde;o de nossa atividade garante a contribui&ccedil;&atilde;o de um grupo importante na determina&ccedil;&atilde;o do remanejamento dos quadros funcionais. N&atilde;o obstante, a expans&atilde;o dos mercados mundiais faz parte de um processo de gerenciamento das novas proposi&ccedil;&otilde;es. Gostaria de enfatizar que a constante divulga&ccedil;&atilde;o das informa&ccedil;&otilde;es ainda n&atilde;o demonstrou convincentemente que vai participar na mudan&ccedil;a das regras de conduta normativas.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A pr&aacute;tica cotidiana prova que o in&iacute;cio da atividade geral de forma&ccedil;&atilde;o de atitudes talvez venha a ressaltar a relatividade das diretrizes de desenvolvimento para o futuro. Todas estas quest&otilde;es, devidamente ponderadas, levantam d&uacute;vidas sobre se o aumento do di&aacute;logo entre os diferentes setores produtivos facilita a cria&ccedil;&atilde;o das condi&ccedil;&otilde;es financeiras e administrativas exigidas. &Eacute; claro que o novo modelo estrutural aqui preconizado estende o alcance e a import&acirc;ncia das condi&ccedil;&otilde;es inegavelmente apropriadas. Nunca &eacute; demais lembrar o peso e o significado destes problemas, uma vez que a necessidade de renova&ccedil;&atilde;o processual &eacute; uma das consequ&ecirc;ncias do impacto na agilidade decis&oacute;ria.</p>\r\n', 1, '2013-11-11 13:39:37', '2013-11-11 13:39:37'),
(7, 'Noticia', '<p>\r\n	Todavia, o entendimento das metas propostas oferece uma interessante oportunidade para verifica&ccedil;&atilde;o de todos os recursos funcionais envolvidos. &Eacute; claro que a necessidade de renova&ccedil;&atilde;o processual ainda n&atilde;o demonstrou convincentemente que vai participar na mudan&ccedil;a dos modos de opera&ccedil;&atilde;o convencionais. Caros amigos, a competitividade nas transa&ccedil;&otilde;es comerciais &eacute; uma das consequ&ecirc;ncias das novas proposi&ccedil;&otilde;es. Do mesmo modo, o julgamento imparcial das eventualidades promove a alavancagem dos procedimentos normalmente adotados.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No mundo atual, a hegemonia do ambiente pol&iacute;tico acarreta um processo de reformula&ccedil;&atilde;o e moderniza&ccedil;&atilde;o das diversas correntes de pensamento. Por conseguinte, a crescente influ&ecirc;ncia da m&iacute;dia exige a precis&atilde;o e a defini&ccedil;&atilde;o do fluxo de informa&ccedil;&otilde;es. Podemos j&aacute; vislumbrar o modo pelo qual a ado&ccedil;&atilde;o de pol&iacute;ticas descentralizadoras n&atilde;o pode mais se dissociar do impacto na agilidade decis&oacute;ria.</p>\r\n<p>\r\n	Todavia, o entendimento das metas propostas oferece uma interessante oportunidade para verifica&ccedil;&atilde;o de todos os recursos funcionais envolvidos. &Eacute; claro que a necessidade de renova&ccedil;&atilde;o processual ainda n&atilde;o demonstrou convincentemente que vai participar na mudan&ccedil;a dos modos de opera&ccedil;&atilde;o convencionais. Caros amigos, a competitividade nas transa&ccedil;&otilde;es comerciais &eacute; uma das consequ&ecirc;ncias das novas proposi&ccedil;&otilde;es. Do mesmo modo, o julgamento imparcial das eventualidades promove a alavancagem dos procedimentos normalmente adotados.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No mundo atual, a hegemonia do ambiente pol&iacute;tico acarreta um processo de reformula&ccedil;&atilde;o e moderniza&ccedil;&atilde;o das diversas correntes de pensamento. Por conseguinte, a crescente influ&ecirc;ncia da m&iacute;dia exige a precis&atilde;o e a defini&ccedil;&atilde;o do fluxo de informa&ccedil;&otilde;es. Podemos j&aacute; vislumbrar o modo pelo qual a ado&ccedil;&atilde;o de pol&iacute;ticas descentralizadoras n&atilde;o pode mais se dissociar do impacto na agilidade decis&oacute;ria.</p>\r\n<p>\r\n	Todavia, o entendimento das metas propostas oferece uma interessante oportunidade para verifica&ccedil;&atilde;o de todos os recursos funcionais envolvidos. &Eacute; claro que a necessidade de renova&ccedil;&atilde;o processual ainda n&atilde;o demonstrou convincentemente que vai participar na mudan&ccedil;a dos modos de opera&ccedil;&atilde;o convencionais. Caros amigos, a competitividade nas transa&ccedil;&otilde;es comerciais &eacute; uma das consequ&ecirc;ncias das novas proposi&ccedil;&otilde;es. Do mesmo modo, o julgamento imparcial das eventualidades promove a alavancagem dos procedimentos normalmente adotados.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No mundo atual, a hegemonia do ambiente pol&iacute;tico acarreta um processo de reformula&ccedil;&atilde;o e moderniza&ccedil;&atilde;o das diversas correntes de pensamento. Por conseguinte, a crescente influ&ecirc;ncia da m&iacute;dia exige a precis&atilde;o e a defini&ccedil;&atilde;o do fluxo de informa&ccedil;&otilde;es. Podemos j&aacute; vislumbrar o modo pelo qual a ado&ccedil;&atilde;o de pol&iacute;ticas descentralizadoras n&atilde;o pode mais se dissociar do impacto na agilidade decis&oacute;ria.</p>\r\n<p>\r\n	Todavia, o entendimento das metas propostas oferece uma interessante oportunidade para verifica&ccedil;&atilde;o de todos os recursos funcionais envolvidos. &Eacute; claro que a necessidade de renova&ccedil;&atilde;o processual ainda n&atilde;o demonstrou convincentemente que vai participar na mudan&ccedil;a dos modos de opera&ccedil;&atilde;o convencionais. Caros amigos, a competitividade nas transa&ccedil;&otilde;es comerciais &eacute; uma das consequ&ecirc;ncias das novas proposi&ccedil;&otilde;es. Do mesmo modo, o julgamento imparcial das eventualidades promove a alavancagem dos procedimentos normalmente adotados.<br />\r\n	<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No mundo atual, a hegemonia do ambiente pol&iacute;tico acarreta um processo de reformula&ccedil;&atilde;o e moderniza&ccedil;&atilde;o das diversas correntes de pensamento. Por conseguinte, a crescente influ&ecirc;ncia da m&iacute;dia exige a precis&atilde;o e a defini&ccedil;&atilde;o do fluxo de informa&ccedil;&otilde;es. Podemos j&aacute; vislumbrar o modo pelo qual a ado&ccedil;&atilde;o de pol&iacute;ticas descentralizadoras n&atilde;o pode mais se dissociar do impacto na agilidade decis&oacute;ria.</p>\r\n', 1, '2013-11-11 17:15:27', '2013-11-11 17:15:27'),
(10, 'teste', '<p>\r\n	123</p>\r\n', 1, '2013-11-11 17:34:03', '2013-11-11 17:34:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `texto` text NOT NULL,
  `modelo_produto` int(11) DEFAULT '0',
  `ordem` int(11) DEFAULT '1',
  `insert_data` datetime DEFAULT '0000-00-00 00:00:00',
  `update_data` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `imagem`, `texto`, `modelo_produto`, `ordem`, `insert_data`, `update_data`) VALUES
(1, 'Calça Sport', 'public/imagem/gerenciador/produtos/images.jpg', '<p>\r\n	Descri&ccedil;&atilde;o do produto</p>\r\n', 1, 1, '2013-11-11 11:20:38', '2013-11-11 11:20:38'),
(2, 'Blusa', 'public/imagem/gerenciador/produtos/img-1.jpg', '<p>\r\n	Descri&ccedil;&atilde;o</p>\r\n', 4, 1, '2013-11-11 11:25:19', '2013-11-11 11:25:19'),
(3, 'Blusa Rosa', 'public/imagem/gerenciador/produtos/indice.jpg', '<p>\r\n	Descri&ccedil;&atilde;o ...</p>\r\n', 5, 1, '2013-11-11 11:29:19', '2013-11-11 11:29:19'),
(4, 'Modelo de sair', 'public/imagem/gerenciador/produtos/ima2.jpg', '<p>\r\n	Descri&ccedil;&atilde;o</p>\r\n', 2, 1, '2013-11-11 15:54:53', '2013-11-11 15:54:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `url_alias`
--

CREATE TABLE IF NOT EXISTS `url_alias` (
  `alias` text,
  `url` text,
  `insert_data` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `url_alias`
--

INSERT INTO `url_alias` (`alias`, `url`, `insert_data`) VALUES
('empresa', 'empresa/ver_empresa', '2013-09-16 12:52:55'),
('produtos', 'produtos/ver_produtos', '2013-09-16 12:52:55'),
('contato', 'contato', '2013-09-16 12:52:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `us_nome` varchar(200) DEFAULT NULL,
  `us_estado` char(2) DEFAULT NULL,
  `us_cidade` varchar(200) DEFAULT NULL,
  `us_telefone` varchar(14) DEFAULT NULL,
  `us_email` varchar(200) DEFAULT NULL,
  `us_pw` varchar(100) DEFAULT NULL,
  `us_permissao` text,
  `us_tipo` int(2) DEFAULT '1',
  `us_ativo` int(1) DEFAULT '1',
  `us_time` varchar(30) DEFAULT '',
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`us_id`, `us_nome`, `us_estado`, `us_cidade`, `us_telefone`, `us_email`, `us_pw`, `us_permissao`, `us_tipo`, `us_ativo`, `us_time`) VALUES
(12, 'Ronildo Souza', 'GO', 'Goiânia', '8978667678', 'ronyldo12@hotmail.com', '588ac6276c061a445c2d6722e742f5ee31c17477', '{"produtos":{"adicionar":"1","editar":"1","remover":"1"},"categoria_produto":{"adicionar":"1","editar":"1","remover":"1"},"empresa":{"adicionar":"1","editar":"1","remover":"1"},"noticias":{"adicionar":"1","editar":"1","remover":"1"}}', 1, 1, '1384192145'),
(13, 'Administrador do site', 'GO', 'Goiânia', '62 3088-4030', 'admin@objetocomunicacao.com.br', '588ac6276c061a445c2d6722e742f5ee31c17477', '{"banners":{"adicionar":"1","editar":"1","remover":"1"},"portifolio":{"adicionar":"1","editar":"1","remover":"1"}}', 2, 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
