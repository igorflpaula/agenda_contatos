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
- **Estilização**: Bootstrap
_Não foram utilizados framework (Ex.: Laravel)_

## Capturas de Tela

1. **Página de Login**:
   ![Login Screenshot](https://private-user-images.githubusercontent.com/80724715/374641135-63fa0d89-ba22-4c46-8007-f3d7416c2275.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mjg0MDQ0NjUsIm5iZiI6MTcyODQwNDE2NSwicGF0aCI6Ii84MDcyNDcxNS8zNzQ2NDExMzUtNjNmYTBkODktYmEyMi00YzQ2LTgwMDctZjNkNzQxNmMyMjc1LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDEwMDglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQxMDA4VDE2MTYwNVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPWJjZDBiNTY5MTNlOTE4YmE2ZWYwMGM4YWE3ZDcwMzk5MzMxMTU0M2QzNTVkOGVhZjE1NmJkY2E5ZjY2NGYwNmImWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0In0.UV_I7JBxWTC28kzYUu4iPfTZVhWuOqniBFDJ6LXpX2U)

2. **Dashboard com lista de contatos**:
   ![Dashboard Screenshot](https://private-user-images.githubusercontent.com/80724715/374641116-270a1981-a8d0-4707-8cae-bdb4662c8af2.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mjg0MDQ0NjUsIm5iZiI6MTcyODQwNDE2NSwicGF0aCI6Ii84MDcyNDcxNS8zNzQ2NDExMTYtMjcwYTE5ODEtYThkMC00NzA3LThjYWUtYmRiNDY2MmM4YWYyLnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDEwMDglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQxMDA4VDE2MTYwNVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTFhY2QxMGZmMDRkODVjYzA1YTVjOWZlOTE4ZDQ3YWM2NTkwMTg5NjVlMDA3ODQwYmUwY2Y4ZjVjZDhlNzc5NjcmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0In0.LWmjqAmVhSUcUH2QggHRDnOEXcJH3ZFxfeShA4HfNe4)

3. **Formulário de adicionar contato**:
   ![Create Contact Screenshot](https://private-user-images.githubusercontent.com/80724715/374641126-7e222268-97f5-4000-b94f-5e232a1db337.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mjg0MDQ0NjUsIm5iZiI6MTcyODQwNDE2NSwicGF0aCI6Ii84MDcyNDcxNS8zNzQ2NDExMjYtN2UyMjIyNjgtOTdmNS00MDAwLWI5NGYtNWUyMzJhMWRiMzM3LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDEwMDglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQxMDA4VDE2MTYwNVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTYwYzE0Njc3ZjgzNjhkOTE1NzJjZDAxMjk0Zjc1ZDg1NTEwYmFmMjYwYWE0YzkzODQxNGQ0MWNiMjU0YWJhZjkmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0In0.4bI-cDf4_5pLvE8d8UK-25SSki5T1-mPlNWkbfRZtzo)

4. **Edição de perfil**:
   ![Edit Profile Screenshot](https://private-user-images.githubusercontent.com/80724715/374641125-7befcbba-8abe-49da-bc12-882e2dc25f87.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3Mjg0MDQ0NjUsIm5iZiI6MTcyODQwNDE2NSwicGF0aCI6Ii84MDcyNDcxNS8zNzQ2NDExMjUtN2JlZmNiYmEtOGFiZS00OWRhLWJjMTItODgyZTJkYzI1Zjg3LnBuZz9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDEwMDglMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQxMDA4VDE2MTYwNVomWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPTgwOTA5ZTFmZDFiZDUxMGFhYjcwYzhmOWY2NjQ0NTJhOGQzZjYxNjI4MDY2ZGQyNTI5OWU0NTU4NDRkNTAzZWMmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0In0.B17VxHAnhqUecTOHECOdubSuJbUJjPSET03CtdBiVDk)

## Como Rodar o Projeto 🚀

1. Clone o repositório
2. Navegue até o diretório do projeto
3. Configure seu banco de dados 
  3.1 Crie um banco de dados no MySQL.
  3.2 Crie as tabelas usando os scripts salvos em sql/
  3.3 Configure com suas informações em config/database.php
4. Rode o comando **php -S localhost:8080 -t public** no terminal
