# Sistema completo de login e cadastro de usuários utilizando PHP e banco de dados MySQL

/projeto-login
│
├── db_conn.php
├── index.php
├── login.php
├── home.php
├── logout.php
├── signup.php
├── signup-check.php
├── style.css
└── README.md

# Sistema de Login em PHP

Este é um sistema simples de login e cadastro desenvolvido em PHP e MySQL.

## Funcionalidades

- Cadastro de usuários
- Login com autenticação
- Sessão de usuário
- Logout

## Tecnologias usadas

- PHP
- MySQL
- HTML
- CSS

## Banco de Dados

Crie um banco chamado:

test_db

Tabela users:

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL
);