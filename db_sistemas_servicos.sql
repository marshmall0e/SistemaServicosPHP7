CREATE DATABASE sistema_servicos;

USE sistema_servicos;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- ID do usuário, auto-incrementado
    nome VARCHAR(255) NOT NULL,                -- Nome do usuário, não pode ser nulo
    email VARCHAR(100) NOT NULL UNIQUE,        -- Email do usuário, não pode ser nulo e deve ser único
    senha VARCHAR(255) NOT NULL,                -- Senha do usuário, não pode ser nulo
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Data de criação do registro, padrão para o horário atual
);

DESCRIBE usuarios;
SELECT * FROM usuarios;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    documento VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    CHECK (LENGTH(nome) > 0),
    CHECK (email LIKE '%_@__%.__%')
);

DESCRIBE clientes;
SELECT * FROM clientes;

CREATE TABLE equipamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(100) NOT NULL,                       -- Modelo do equipamento não pode ser nulo
    fabricante VARCHAR(100) NOT NULL,                   -- Fabricante não pode ser nulo
    numero_serie VARCHAR(50) NOT NULL UNIQUE,           -- Número de série deve ser único e não pode ser nulo
    CHECK (LENGTH(modelo) > 0)                          -- Verifica que o modelo tem pelo menos 1 caractere
);

DESCRIBE equipamentos;
SELECT * FROM equipamentos;

CREATE TABLE ordens_servico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,                            -- Cliente ID não pode ser nulo
    equipamento_id INT NOT NULL,                        -- Equipamento ID não pode ser nulo
    status VARCHAR(20) NOT NULL CHECK (status IN ('pendente', 'concluída', 'cancelada')),  -- Status deve ser um dos valores permitidos
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_conclusao TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE,  -- Cascata de exclusão
    FOREIGN KEY (equipamento_id) REFERENCES equipamentos(id) ON DELETE CASCADE -- Cascata de exclusão
);

DESCRIBE ordens_servico;
SELECT * FROM ordens_servico;