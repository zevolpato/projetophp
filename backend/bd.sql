create database projetophp;

use projetophp;

create table produtos(
id_produto int not null auto_increment,
nome varchar(50) not null,
valor float not null,
primary key(id_produto)
);

desc produtos;

insert into produtos(nome, valor) values ("coca", 3.5);
insert into produtos(nome, valor) values ("fanta", 3.5);
insert into produtos(nome, valor) values ("skol", 2.8);
insert into produtos(nome, valor) values ("amstel", 3.9);
insert into produtos(nome, valor) values ("bohemia", 4);


select * from produtos;

create table vendas(
id_venda int not null auto_increment,
data_venda date not null,
valor_total float not null,
primary key(id_venda));

desc vendas;

create table itensVendidos(
id_item_vendidos int not null auto_increment,
fk_id_venda int not null,
fk_id_produto int not null,
data_Venda date not null,
quantidade decimal(5) not null,
valor_venda float not null,
primary key (id_item_vendidos),
foreign key (fk_id_venda) references vendas(id_venda),
foreign key (fk_id_produto) references produtos(id_produto));






select * from vendas order by id_venda desc;

select * from produtos;
select * from itensVendidos where fk_id_venda = 259;

desc itensVendidos;

desc vendas;

insert into vendas (data_venda, valor_total) values (NOW(), 0);


select * from itensvendidos order by id_item_vendidos desc;

select valor from produtos where id_produto = 9;

select produtos.nome, itensVendidos.quantidade, itensVendidos.valor_venda from itensVendidos inner join produtos 
 on itensVendidos.fk_id_produto = produtos.id_produto where itensVendidos.fk_id_venda = 250;
 
 select produtos.nome, itensVendidos.quantidade, itensVendidos.valor_venda from itensVendidos inner
 join produtos on fk_id_produto=id_produto where fk_id_venda = 267;

select * from vendas order by id_venda desc;
