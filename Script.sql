drop database cardapio_res;
create database cardapio_res;

use cardapio_res;

create table produto (
	
	id int not null auto_increment,
		nome varchar (200) not null,
		preco decimal (12,5) not null,
		descricao varchar (250) not null,
		imagem blob not null,
			primary key (id)
			
);

create table cliente (

	id int not null auto_increment,
		nome varchar (200) not null,
		email varchar (200) not null unique,
		numero varchar (200) not null,
		endereco varchar (200) not null,
		cpf varchar (11) not null,
		telefone varchar (11) not null,
			primary key (id)
	);

 create table pedido (
 
 	id int not null auto_increment,
 		status_pedido varchar(45) not null,
 		cliente_id int not null,
 		primary key (id),
 		constraint fk_cliente_pedido
				foreign key (cliente_id)
				references cliente (id)
 		
 );

create table status (

	id int not null auto_increment,
		aberto varchar (100) not null,
		entrega varchar (100) not null,
		retirar varchar (100) not null,
		finalizado varchar (100) not null,
			primary key (id)
				constraint fk_pedido_status
				foreign key (pedido_id)
				references pedido(id),
);


create table interacao (
	
	    produto_id int not null,
	    pedido_id int not null,
		preco decimal (12,5) not null,
		quantidade varchar (45) not null,
		primary key (produto_id, pedido_id),
			constraint fk_produto_interacao
				foreign key (produto_id)
				references produto(id),
			constraint fk_pedido_interacao
				foreign key (pedido_id)
				references pedido(id)
);




 