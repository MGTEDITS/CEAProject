


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

-- Criar tabela rios

create table rios(id_rio int(11) NOT NULL AUTO_INCREMENT, 
nome varchar(100) not null, 
imagem varchar(1000) not null,
titulos varchar(22) not null,
descricao text not null, PRIMARY KEY(id_rio));

-- Criar tabela comentarios para os rios

create table comentarios(id_comentario int not null, 
idutilizador int(100) not null,
mensagem text not null,
reply int (100), idrio int(100) not null , PRIMARY KEY(id_comentario),
Foreign KEY (idutilizador) references utilizadores(id_utilizador),
FOREIGN KEY (reply) references utilizadores(id_utilizador),
FOREIGN KEY (idrio) references rios(id_rio));

-- Inserir primeiro Admin
-- username: ceacmtv  password: ceambientetv
insert into utilizadores(username, email, password, cargo, logado)
values ('ceacmtv',
'cea@cm-tvedras.pt',
'$2y$10$masU7xYes3vUYwWNld9vIOo6UixtEuLzu4p4Oh91AaSQ5vj.Y7VOy',
'Administrador', 0);

create table grupos (idg integer primary key auto_increment not null, nomeEntidade text not null,
tipoEntidade varchar(1000) not null , nomeResponsavel_ent text not null,
id_grupo integer not null, nomeGrupo text not null,
anoInscricao int(255) not null, respGrupo text not null, nomeApoiosMecenas text not null, nomeMonitores text not null,
latitude text not null ,
longitude text not null , nomeRioRibeira varchar(1000) not null,
nomeBaciaHidro varchar(1000) not null,
localidadeMostragem varchar(1000) not null,
freguesia varchar(1000) not null, conselho varchar(1000) not null,
distrito varchar(1000) not null);

insert into grupos(nomeEntidade,tipoEntidade,
                   nomeResponsavel_ent,id_grupo,nomeGrupo,
                   anoInscricao, respGrupo,
                   nomeApoiosMecenas, nomeMonitores,latitude,longitude,
                   nomeRioRibeira,nomeBaciaHidro,
                       localidadeMostragem,freguesia, conselho, distrito)
values ('Escola Profissional Agrícola Fernando Barros Leal','Escola',' ',17,
        'Abraçar o Rio Sizandro',2007,
        'Tânia Sofia Paiva da Silva César', 'Câmara Municipal de Torres Vedras
        Junta de Freguesia de Ponte de Rol', '', '' , '' ,'Rio Sizandro','Rio Tejo',
        'Ponte de Rol', 'Ponte de Rol','Torres Vedras', 'Lisboa'),
       ('Agrupamento de Escuteiros 379 de A dos Cunhados (Corpo Nacional de Escutas)',
        'Escuteiros', '', 18, 'Desafios do Ambiente', 2007, 'Emanuel Garcia','Agrupamento de Escuteiros 379 de A dos Cunhados (Corpo Nacional de Escutas)
Junta de Freguesia de A dos Cunhados', '', 39.1559550,
        -9.3033170,'Rio Alcabrichel','Rio Alcabrichel',
        'A dos Cunhados','A dos Cunhados','Torres Vedras','Lisboa'),
       ('Escola Profissional Agrícola Fernando Barros Leal',
        'Escola', '', 103,
        'Projeto Rios - Conhecer os rios',
        2009,'Tânia César', '', '', '', '', 'Rio Sizandro', '', '', '', '', ''),
       ('Escola Básica Integrada Padre Vítor Melícias','Escola','',116,
        'O Rio É Vida', 2009,
        'Nuno Miguel Bettencourt', 'Escola Básica Integrada Pe. V. Melícias
        Câmara Municipal de Torres Vedras
        Junta de Freguesia de S. Pedro e Santiago
        Centro de Educação Ambiental de Torres Vedras
        Águas do Oeste
        Associação de Pais e Encarregados de Educação
        Controlvet', '', '', '', 'Rio Sizandro', 'Rio Tejo', 'Torres Vedras', 'S. Pedro e Santiago', 'Torres Vedras', 'Lisboa'),
       ('Escola Básica 2,3 de Freiria', 'Escola', '', 117, 'Vida na Ribeira de Freiria', 2009,
        'Maria de Jesus Reis','Câmara Municipal de Torres Vedras
        Águas do Oeste', '', '', '', 'Ribeira da Freiria',
        'Rio Sizandro', 'Freiria', 'Freiria', 'Torres Vedras', 'Lisboa'),
       ('Escola Básica 2.3 de Maxial (Agrupamento de Escolas Henriques Nogueira)', 'Escola','', 223, 'Rio Alcabrichel', 2011,'João Filipe
       Almeida Batalha', 'Agrupamento de Escolas Henriques Nogueira
Centro de Educação Ambiental de Torres Vedras
Juntas de Freguesia
Trilhos e Carreiros - Clube de Caminhadas
Associação de Pais e Encarregados de Educação
Clube de Fotografia' , '', 39.145494,-9.172428,
        'Rio Alcabrichel', 'Ribeiras do Oeste','Maxial e monte redodndo',
        'Maxial','Torres Vedras','Lisboa'),
       ('Jardim Escola João de Deus', 'Escola', '', 461, '', 2012, 'Filomena Silva
Vasco Batista', 'Apoio logístico:
Câmara Municipal de Torres Vedras (CMTV)
Águas do Oeste, S.A
Apoio ciêntífico:
ICNB
Aquário Vasco da Gama
QUERCUS
CMTV
Águas do Oeste, S.A.', 'Filomena Silva', '30º 05´ 44.05" N 39.095519', ' 9º 16´ 07.33" O
-9.268272 (out18)', 'Rio Sizandro', '', '', 'Santa Maria do Castelo','Torres vedras','Lisboa'),
       ('Sporting Clube de Torres','Associação/Clube',
        'Francisco José da Silva Cândido', 589,
        'Sporting Clube de Torres', 2020,'Ana Sofia Lucas Vieira','não','não', 39.089752, 9.263892,
        'Ribeira do Alpilhão','', 'Torres Vedras',
        'Freguesia Santa Maria, S. Pedro e Matacães', 'Torres Vedras','Lisboa');