/* Cria o banco de dados (se ainda não existir) */
CREATE DATABASE IF NOT EXISTS loja_bolos
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

/* Seleciona o banco de dados */
USE loja_bolos;

/* Cria a tabela de bolos */
CREATE TABLE IF NOT EXISTS bolos (
    id INT NOT NULL AUTO_INCREMENT,  /* Identificador único */
    nome VARCHAR(100) NOT NULL,      /* Nome do bolo */
    preco DECIMAL(10, 2) NOT NULL,   /* Preço (ex: 50.00) */
    descricao TEXT,                  /* Descrição opcional */
    PRIMARY KEY (id)
);

/* Opcional: Insere alguns bolos de exemplo */
INSERT INTO bolos (nome, preco, descricao) VALUES
('Bolo de Chocolate', 45.50, 'Bolo fofinho com cobertura de brigadeiro.'),
('Bolo de Cenoura', 38.00, 'Clássico bolo de cenoura com calda de chocolate.'),
('Bolo Red Velvet', 65.00, 'Bolo aveludado vermelho com recheio de cream cheese.');
SELECT * FROM bolos;
