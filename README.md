# CRUD App — Product

A simple CRUD application for product management, built with Laravel 13 + Breeze (authentication) + MySQL. This project was created for an internship technical test.

## Tech Stack

- **Backend:** PHP 8.3, Laravel 13
- **Auth:** Laravel Breeze
- **Database:** MySQL 8.4
- **Frontend:** Blade, Tailwind CSS, Alpine.js

## Features

- Register & Login (Laravel Breeze)
- Product CRUD (name, price, description, image)
- Product Image Upload
- Profile Editing

## Prerequisites

- [PHP 8.3+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js & npm](https://nodejs.org/)
- MySQL 8.x
- [Git](https://git-scm.com/)

## Installation

```bash
# 1. Clone the repository
git clone <repository-url> crud-app
cd crud-app

# 2. Copy environment file
cp .env.example .env

# 3. Configure database in .env
#    Set DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD to match your local MySQL

# 4. Create the database
Create a MySQL database named `inventory`.

# 5. Install dependencies
composer install
npm install

# 6. Generate application key
php artisan key:generate

# 7. Run database migrations
php artisan migrate

# 8. Create storage symlink (required for product images)
php artisan storage:link

# 9. Build frontend assets
npm run build
```

## Running the App

```bash
php artisan serve
```

App URL: **http://localhost:8000**

For frontend hot reload during development, run in a separate terminal:

```bash
npm run dev
```

## Using Docker (Optional)

This project includes [Laravel Sail](https://laravel.com/docs/sail) for Docker-based development. If you prefer Docker, see [`compose.yaml`](compose.yaml) and use `./vendor/bin/sail up` to start the containers.

## Project Structure

```
app/Models/Product.php       # Product model
app/Http/Controllers/        # Controllers (ProductController, ProfileController)
database/migrations/         # Table migrations
routes/web.php               # Route definitions
resources/views/             # Blade templates
```
