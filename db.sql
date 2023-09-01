CREATE DATABASE IF NOT EXISTS escola;
USE escola;

-- Tabela de professores
CREATE TABLE IF NOT EXISTS professores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Tabela de turmas
CREATE TABLE IF NOT EXISTS turmas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_da_turma VARCHAR(255) NOT NULL
);

-- Tabela de alunos
CREATE TABLE IF NOT EXISTS alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_aluno INT NOT NULL,
    nome_completo VARCHAR(255) NOT NULL,
    id_turma INT NOT NULL,
    FOREIGN KEY (id_turma) REFERENCES turmas(id)
);

-- Tabela de presenças
CREATE TABLE IF NOT EXISTS presencas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT NOT NULL,
    data DATE NOT NULL,
    presente BOOLEAN NOT NULL,
    FOREIGN KEY (id_aluno) REFERENCES alunos(id)
);

-- Tabela de presenças dos alunos
CREATE TABLE IF NOT EXISTS presencas_alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT NOT NULL,
    data DATE NOT NULL,
    presente BOOLEAN NOT NULL,
    FOREIGN KEY (id_aluno) REFERENCES alunos(id)
);

