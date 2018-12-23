create database livro;
use livro;

create table usuario (
id int not null primary key auto_increment,
nome varchar(50),
username varchar(50),
password varchar(50),
idade int,
telefone int,
bairro varchar(50),
logradouro varchar(50),
cidade varchar(50),
cep varchar(8),
authKey char(50)
);

create table livros(
id int not null primary key auto_increment,
usuario_id int,
nome varchar(50),
ano_livro int,
autor varchar(50),
estado_fisic varchar(50),
ativo_inativo boolean,
genero varchar(50),
foreign key(usuario_id) references usuario (id)
);
