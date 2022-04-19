CREATE DATABASE otica;

CREATE TABLE usuario (
  usuario_id INT AUTO_INCREMENT,
  usuario VARCHAR(200) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  nome VARCHAR(100) NOT NULL,
  data_cadastro DATETIME,
  tipouser INT(1) NOT NULL,
  PRIMARY KEY (usuario_id)
  );

CREATE TABLE grupo(
grupo_id INT AUTO_INCREMENT,
descricao varchar(200) NOT NULL,
PRIMARY KEY(grupo_id)
 );

CREATE TABLE subgrupo(
subgrupo_id INT AUTO_INCREMENT,
descricao varchar(200) NOT NULL,
PRIMARY KEY(subgrupo_id)
 );

CREATE TABLE marca(
marca_id INT AUTO_INCREMENT,
descricao varchar(200) NOT NULL,
PRIMARY KEY(marca_id)
 );

CREATE TABLE tipo(
tipo_id INT AUTO_INCREMENT,
descricao varchar(200) NOT NULL,
PRIMARY KEY(tipo_id)
 );

CREATE TABLE fornecedor(
fornecedor_id INT AUTO_INCREMENT,
descricao varchar(200) NOT NULL,
PRIMARY KEY(fornecedor_id)
 );

CREATE TABLE promocao(
promo_id INT AUTO_INCREMENT,
descricao varchar(200) NOT NULL,
data_inicio DATE NOT NULL,
data_final DATE NOT NULL,
PRIMARY KEY(promo_id)
 );

CREATE TABLE produto(
produto_id INT PRIMARY KEY AUTO_INCREMENT,
descricao varchar(200) NOT NULL,
grupo_desc VARCHAR(100) NOT NULL,
subgrupo_desc VARCHAR(100) NOT NULL,
marca_desc VARCHAR(100) NOT NULL,
tipo_desc VARCHAR(100) NOT NULL,
fornecedor_desc VARCHAR(100) NOT NULL,
preco decimal(10,2) NOT NULL,
promo_id integer NOT NULL,
CONSTRAINT prom FOREIGN KEY (promo_id) REFERENCES Pessoa (promo_id)
 );