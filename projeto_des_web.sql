CREATE DATABASE projeto_des_web;
USE projeto_des_web;

CREATE TABLE IF NOT EXISTS Contatos (
_id			INT 	NOT NULL	PRIMARY KEY 	AUTO_INCREMENT,
nome 		VARCHAR(200),
email		VARCHAR(200),
telefone 	VARCHAR(11),
mensagem	VARCHAR(1000) 
);

INSERT INTO Contatos (nome, email, telefone, mensagem) VALUES ("Alan Lucena de Vasconcelos", 
	"alanldv@gmail.com", "81994243992", "Olá, quero um pet para chamar de meu!");
