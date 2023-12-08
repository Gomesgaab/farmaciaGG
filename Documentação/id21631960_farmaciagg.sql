create database farmaciagg;
use farmaciagg;

CREATE TABLE administrator (
  cpf bigint(20) NOT NULL,
  nome varchar(30) NOT NULL,
  telefone varchar(13) NOT NULL,
  endereco varchar(50) NOT NULL,
  email varchar(30) NOT NULL,
  senha_adm varchar(20) NOT NULL
) ENGINE=InnoDB;

--
-- Despejando dados para a tabela `administrator`
--

INSERT INTO `administrator` (`cpf`, `nome`, `telefone`, `endereco`, `email`, `senha_adm`) VALUES
(12945678941, 'Alan', '1195684712', 'pieres', 'alan.g', 'Sena123'),
(1111, '1111', '1111', '1111', '11111', '11111');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE usuario (
  cpf bigint(20) NOT NULL primary key,
  nome varchar(30) NOT NULL,
  telefone varchar(13) NOT NULL,
  endereco varchar(50) NOT NULL,
  email varchar(30) NOT NULL,
  produtos_farmacia_popular varchar(20) NOT NULL
) ENGINE=InnoDB;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`cpf`, `nome`, `telefone`, `endereco`, `email`, `produtos_farmacia_popular`) VALUES
(11111, '11111', '11111', '11111', '11111', '1111'),
(16651, 'sdvsv', 'sdadf', 'sadasdf', 'ffsdfasf', 'gggg'),
(12687915863, 'Gabriel Gomes Da Silva', '11998754866', 'Pereira Timao', 'gabriel.gsilva.com', 'omega3'),
(12978945810, 'Gabriel Gomes Da Silva', '11995687411', 'Pereira Barreto', 'gabriel.gsilva', 'dipirona');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
