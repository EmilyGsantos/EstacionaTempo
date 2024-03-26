create database EstacionaTempo;

use  EstacionaTempo;

-- cntrl enter
create table Usuario(
id int not null primary key auto_increment,
nome varchar(100) not null,
telefone varchar(13) not null, 
cpf bigint(13) not null,
idade int not null,
cor varchar(20) not null,
placa varchar(9) not null,
prioridades varchar(100) not null,
email varchar(100) not null,
senha varchar(13) not null,
veiculo varchar(20) not null,
deseja boolean not null,
Admin_cod int not null,
Equipe_cod int not null
)engine=InnoDB;

create table Funcao_has_Usuario(
funcoes int not null primary key,
Usuario_cod int not null,
Admin_cod int not null
)engine=InnoDB;


create table Admin(
cod int not null primary key auto_increment,
nome_equipe varchar(100) not null,
possuir_vaga boolean not null,
qntvaga int not null
)engine=InnoDB;

create table Equipe(
cod int not null primary key auto_increment,
nvaga int not null,
listaespera varchar(120) not null,
Equipe_cod int not null
)engine=InnoDB;

create table ReservarDispo(
cod int not null primary key auto_increment,
reservarVaga datetime not null,
disponibilizarVaga date not null
)engine=InnoDB;

create table VagasDisponiveis(
cod int not null  primary key auto_increment,
ReservarDispo_cod int not null
)engine=InnoDB;


SELECT * from Usuario;

drop database EstacionaTempo;

