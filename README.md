# Agenda de Contatos 📇

Uma aplicação de agenda de contatos desenvolvida em PHP com autenticação de login. Uma vez logado, o usuário pode visualizar, adicionar, editar e excluir contatos, além de editar seus próprios dados de perfil.

## Funcionalidades

- **Login seguro** 🔒: Autenticação para proteger os dados dos contatos.
- **Dashboard** 🏠: Exibe uma lista dos contatos do usuário.
- **Gerenciamento de contatos**:
  - Adicionar novos contatos.
  - Editar informações existentes dos contatos.
  - Excluir contatos da lista.
- **Edição de perfil** 👤: O usuário pode atualizar seus dados pessoais, como nome, e-mail, telefone e endereço.

## Tecnologias Utilizadas

- **Linguagem**: PHP
- **Banco de dados**: MySQL
- **Arquitetura**: MVC (Model-View-Controller)

## Capturas de Tela

1. **Página de Login**:
   ![Login Screenshot](link-da-imagem)

2. **Dashboard com lista de contatos**:
   ![Dashboard Screenshot](link-da-imagem)

3. **Formulário de adicionar contato**:
   ![Create Contact Screenshot](link-da-imagem)

4. **Edição de contato**:
   ![Edit Contact Screenshot](link-da-imagem)

5. **Edição de perfil**:
   ![Edit Profile Screenshot](link-da-imagem)

## Como Rodar o Projeto 🚀

1. Clone o repositório
2. Navegue até o diretório do projeto
3. Configure seu banco de dados 
  3.1 Crie um banco de dados no MySQL.
  3.2 Crie as tabelas usando os scripts salvos em sql/
  3.3 Configure com suas informações em config/database.php
4. Rode o comando **php -S localhost:8080 -t public** no terminal
