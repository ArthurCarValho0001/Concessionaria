# 🚗 Sistema de Gerenciamento de Concessionária

Bem-vindo ao repositório do meu projeto acadêmico! Este é um sistema web completo para gerenciamento de uma concessionária de veículos, desenvolvido para colocar em prática conceitos fundamentais de desenvolvimento web e banco de dados relacional.

## 💻 Tecnologias Utilizadas

O projeto foi construído utilizando uma stack clássica e robusta:

* **PHP:** Utilizado de forma procedural para toda a lógica de backend (CRUDs).
* **MySQL:** Banco de dados relacional para armazenar informações de clientes, funcionários, veículos e vendas.
* **HTML5 & CSS3:** Estruturação semântica.
* **Bootstrap 5:** Framework CSS para estilização rápida, responsividade e componentes visuais (tabelas, botões, alertas).
* **XAMPP:** Ambiente de desenvolvimento local (Apache + MariaDB/MySQL).

## ⚙️ Funcionalidades do Sistema

O sistema conta com relacionamentos entre tabelas (Chaves Estrangeiras) para garantir a integridade dos dados.

### 1. Cadastros Básicos (CRUD)
* **Marcas:** Gerenciamento das fabricantes de veículos.
* **Funcionários:** Controle da equipe de vendas.
* **Clientes:** Base de dados dos compradores.

### 2. Veículos e Modelos
* Cadastro de modelos vinculados obrigatoriamente a uma **Marca** existente.
* Visualização detalhada com Cor, Ano e Tipo (Sedan, SUV, etc).

### 3. Gestão de Vendas (O Coração do Sistema)
* Registro de vendas que cruza informações de três tabelas: **Cliente**, **Funcionário** e **Modelo**.
* Formulários inteligentes que buscam dados do banco para preencher as opções de seleção (Combobox/Select).
