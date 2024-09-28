# Sistema de Cadastro e Listagem de Produtos

Este é um projeto simples de cadastro e listagem de produtos desenvolvido em PHP utilizando a arquitetura MVC, com estilização em CSS.

## Funcionalidades

- **Cadastro de produtos:** Um formulário permite cadastrar novos produtos com os campos:
  - Nome do produto
  - Descrição do produto
  - Valor do produto
  - Disponibilidade (sim/não)
  
- **Listagem de produtos:** Exibe uma tabela com os produtos cadastrados, mostrando o nome e valor, ordenados do menor para o maior valor.

- **Ação automática:** Após o cadastro, o sistema redireciona automaticamente para a listagem dos produtos.

- **Estilização:** O sistema utiliza um arquivo CSS para uma interface mais amigável e moderna.

## Tecnologias Utilizadas

- **PHP**: Linguagem utilizada para a lógica de backend.
- **HTML/CSS**: Para a estrutura e estilização das páginas.
- **PDO (PHP Data Objects)**: Para conexão com o banco de dados MySQL.
- **MySQL**: Banco de dados utilizado para armazenar as informações dos produtos.

## Requisitos

- **XAMPP** ou outro servidor web local.
- **PHP 7.0+**
- **MySQL** ou outro banco de dados compatível.