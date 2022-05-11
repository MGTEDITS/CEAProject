

--
-- Criar Base de Dados
--
CREATE DATABASE IF NOT EXISTS dbcea;



use dbcea;

-- Criar Tabela Utilizadores

create table utilizadores(id_utilizador int (11) NOT NULL AUTO_INCREMENT,
username varchar(100) not null ,
email varchar(1000) not null ,
password varchar(100), logado int(1) not null,
cargo varchar(100), pfp blob,
PRIMARY KEY (id_utilizador));

-- Inserir primeiro Admin
-- username: ceacmtv  password: ceambientetv
insert into utilizadores(username, email, password, cargo, logado)
values ('ceacmtv',
'cea@cm-tvedras.pt',
'$2y$10$33zG9dvZU.tFXsEIAkeL7.hQFOyp6z8SuPtCcI15j1zZJsxjvdWWq',
'Administrador', 0);