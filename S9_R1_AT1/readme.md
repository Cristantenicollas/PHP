# S9_R1_AT1 — Formulário em PHP

Projeto desenvolvido em **PHP** como atividade prática para trabalhar com formulários HTML, envio de dados pelo método `POST` e processamento de informações no servidor.

## 📋 Sobre o projeto

A aplicação apresenta um formulário simples onde o usuário pode informar:

* Nome
* Senha
* Idade

Após o envio, o PHP verifica se os campos foram preenchidos e exibe os dados recebidos na página.

## 🛠️ Tecnologias utilizadas

* **PHP**
* **HTML5**

## 📁 Estrutura do projeto

```text
S9_R1_AT1/
└── index.php
```

O arquivo `index.php` contém tanto a estrutura HTML do formulário quanto o código PHP responsável pelo processamento dos dados.

## ⚙️ Funcionamento

1. O usuário acessa a página.
2. Preenche seu nome, senha e idade.
3. Clica em **Enviar**.
4. Os dados são enviados através do método `POST`.
5. O PHP verifica se os campos foram recebidos.
6. As informações são exibidas na própria página.

Também existe a opção **Limpar**, que permite apagar os dados preenchidos antes do envio.

## ▶️ Como executar

É necessário ter um ambiente com suporte ao PHP, como **XAMPP**, **WAMP**, **Laragon** ou o servidor embutido do PHP.

### Usando o servidor embutido do PHP

No terminal, dentro da pasta do projeto, execute:

```bash
php -S localhost:8000
```

Depois, acesse:

```text
http://localhost:8000
```

## 🎯 Objetivo

O objetivo da atividade é praticar conceitos básicos de desenvolvimento web com PHP, especialmente:

* Criação de formulários HTML;
* Utilização do método `POST`;
* Recebimento de dados através de `$_POST`;
* Estruturas condicionais com `isset()`;
* Exibição de informações utilizando `echo`.

## 👨‍💻 Autor

**Cristantenicollas**

Repositório: [PHP](https://github.com/Cristantenicollas/PHP)

## 📄 Licença

Este projeto faz parte de atividades de estudo e prática de programação em PHP.
