# Alexandre_TESTE

create database db_web;

use db_web;

create table tb_motorista (
	
	id_motorista int not null auto_increment,
	nm_motorista varchar(50) not null,
	dt_nascimento_motorista date not null,
	cpf_motorista varchar(50) not null,
	ds_carro varchar(50) not null,
	is_status_motorista boolean not null,
	nm_sexo_motorista varchar(45) not null,

	primary key (id_motorista)
);

describe tb_motorista;
-- inserido dado teste na tb_motorista todos os campos são obrigatórios
insert into tb_motorista (nm_motorista, dt_nascimento_motorista, cpf_motorista, ds_carro, is_status_motorista, nm_sexo_motorista) values ('Alexandre', '1995-02-13', '38969158863', 'Ferrari V30', true, 'Masculino');

select*from tb_motorista;


create table tb_passageiro (

	id_passageiro int not null auto_increment,
	nm_passageiro varchar(45),
	dt_nascimento_passageiro date not null,
	cpf_passageiro varchar(45) not null,
	nm_sexo_passageiro varchar(45) not null,
    
    primary key (id_passageiro)

);

describe tb_passageiro;

-- inserido dado teste na tb_passageiro todos os campos são obrigatórios
insert into tb_passageiro (nm_passageiro, dt_nascimento_passageiro, cpf_passageiro, nm_sexo_passageiro) values ('Joana','1983-04-22', '13402514758','Feminino'); 

select*from tb_passageiro;

create table tb_corrida (

	id_corrida int not null auto_increment,
	id_mot  int not null,
	id_pas  int not null,
	vl_corrida float not null,

	primary key (id_corrida),
		foreign key (id_mot) references tb_motorista(id_motorista),
        foreign key (id_pas) references tb_passageiro(id_passageiro)
);

describe tb_corrida;
-- inserido dado teste na tb_corrida todos os campos são obrigatórios
insert into tb_corrida (id_mot, id_pas, vl_corrida) values (1, 1, 15);
select*from tb_corrida;

-- alterar ativo para inativo ou vice versa.
update tb_motorista set is_status_motorista = false where id_motorista = 1;
update tb_motorista set is_status_motorista = true where id_motorista = 1;

-- selecionando os motoristas cadastrados
select id_motorista, nm_motorista, cpf_motorista, is_status_motorista from tb_motorista;

-- selecionando os passageiros cadastrados
select id_passageiro, nm_passageiro, cpf_passageiro from tb_passageiro;
