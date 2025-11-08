# 📋 Task Manager

Sistema de gerenciamento de tarefas desenvolvido com Laravel 12 e Tailwind CSS v4, com tema escuro por padrão.

## 🚀 Sobre o Projeto

Aplicação web para gerenciar tarefas com funcionalidades de:
- ✅ Criar, editar, visualizar e excluir tarefas
- 🗑️ Sistema de lixeira com soft delete
- ♻️ Restaurar tarefas excluídas
- 🎨 Interface moderna com Tailwind CSS v4
- 🌙 Tema escuro por padrão
- 📱 Design responsivo

## 📋 Requisitos Mínimos

Antes de começar, você precisa ter instalado em sua máquina:

- **PHP 8.4+** com as extensões: `mbstring`, `xml`, `pdo`, `pdo_sqlite`
- **Composer** (gerenciador de dependências PHP)
- **Node.js 18+** e **npm** (para compilar assets)

## 🔧 Instalação e Configuração

Siga os passos abaixo para rodar o projeto localmente:

### 1. Clone o repositório

```bash
git clone <url-do-repositorio>
cd study-php
```

### 2. Instale as dependências do PHP

```bash
composer install
```

### 3. Instale as dependências do Node.js

```bash
npm install
```

### 4. Configure o ambiente

Copie o arquivo de exemplo de variáveis de ambiente:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

### 5. Configure o banco de dados

O projeto está configurado para usar **SQLite** por padrão (sem necessidade de instalar servidor de banco de dados).

Crie o arquivo do banco de dados:

```bash
touch database/database.sqlite
```

Execute as migrations para criar as tabelas:

```bash
php artisan migrate
```

### 6. (Opcional) Popular o banco com dados de exemplo

```bash
php artisan db:seed
```

## ▶️ Executando o Projeto

Você precisa rodar **dois comandos em terminais separados**:

### Terminal 1: Servidor PHP

```bash
php artisan serve
```

A aplicação estará disponível em: **http://localhost:8000**

### Terminal 2: Compilar assets (Vite)

```bash
npm run dev
```

Isso iniciará o Vite para compilar e hot-reload dos arquivos CSS/JS.

## 🎯 Comandos Úteis

### Rodar testes

```bash
php artisan test
```

### Formatar código (Laravel Pint)

```bash
vendor/bin/pint
```

### Limpar cache

```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Build para produção

```bash
npm run build
```

## 📁 Estrutura do Projeto

```
├── app/
│   ├── Http/Controllers/     # Controllers da aplicação
│   └── Models/               # Models Eloquent
├── database/
│   ├── factories/            # Factories para testes
│   ├── migrations/           # Migrations do banco de dados
│   └── seeders/              # Seeders para popular o BD
├── resources/
│   ├── css/                  # Arquivos CSS/Tailwind
│   ├── js/                   # Arquivos JavaScript
│   └── views/                # Views Blade
├── routes/
│   └── web.php               # Rotas da aplicação
└── tests/                    # Testes automatizados
```

## 🌐 Rotas Disponíveis

- `GET /` - Página inicial
- `GET /tasks` - Listagem de tarefas
- `GET /tasks/create` - Formulário de criação
- `POST /tasks` - Criar nova tarefa
- `GET /tasks/{id}` - Visualizar tarefa
- `GET /tasks/{id}/edit` - Formulário de edição
- `PUT /tasks/{id}` - Atualizar tarefa
- `DELETE /tasks/{id}` - Excluir tarefa (soft delete)
- `GET /tasks/trashed` - Tarefas na lixeira
- `POST /tasks/{id}/restore` - Restaurar tarefa

## 🛠️ Tecnologias Utilizadas

- **[Laravel 12](https://laravel.com/docs)** - Framework PHP
- **[Tailwind CSS v4](https://tailwindcss.com)** - Framework CSS
- **[Vite](https://vitejs.dev)** - Build tool
- **[SQLite](https://www.sqlite.org)** - Banco de dados
- **[Pest](https://pestphp.com)** - Framework de testes

## 📝 Licença

Este projeto é open-source e está sob a licença MIT.

## 🤝 Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests.

## 👨‍💻 Autor

Desenvolvido com ❤️ para estudos de Laravel e Tailwind CSS.
