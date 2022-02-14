
create table users(
    id int not null PRIMARY key IDENTITY,
    name VARCHAR(255) not null,
    email VARCHAR(255) not null,
    password NVARCHAR(255) not null,
    admin TINYINT not null default 0,
    setor varchar(100) not NULL default 'TI'
)

create table pontos(
    id int not null PRIMARY key IDENTITY,
    datas DATE not null,
    ponto1 TIME,
    ponto2 TIME,
    ponto3 TIME,
    ponto4 TIME,
    idUser int not null,
    FOREIGN KEY (idUser) REFERENCES users (id)
)

SELECT * from pontos ORDER by datas;

update users set admin = 1 where id = 1;

delete from pontos;