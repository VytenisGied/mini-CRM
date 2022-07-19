# mini-CRM

A simple crm application for managing companies and employees. Built using laravel, vite, inertia and vue3.

## Table of contents

1. [Run locally](#RunLocally)
    1. [Setup project files](#SetupProjectFiles)
    2. [Setup database](#SetupDatabase)
    3. [Start server](#StartServer)

## Run locally <a name="RunLocally"></a>

### Setup project files <a name="SetupProjectFiles"></a>

#### Clone the project

```bash
  git clone https://github.com/VytenisGied/mini-CRM.git
```

#### Go to the project directory

```bash
  cd mini-CRM
```

#### Install dependencies

```bash
  composer install
  npm install
```

#### Copy .env file

```bash
  cp .env.example .env
```

#### Generate enryption key

```bash
  php artisan key:generate
```

### Setup database <a name="SetupDatabase"></a>

To connect your database fill these environment variables `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

#### Migrate database

```bash
  php artisan migrate
```

#### Seed database

This will create admin user admin@admin.com with password: password

```bash
  php artisan db:seed
```

### Start server <a name="StartServer"></a>

```bash
  php artisan serve
```
