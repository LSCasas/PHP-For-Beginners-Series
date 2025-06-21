# Demo PHP

This repository is part of the **PHP for Beginners** educational series originally created by [Laracasts](https://laracasts.com). It serves as a practical and modern introduction to PHP development, aimed at beginners who want to build web applications using clean, structured code and professional tools.

---

## Table of Contents

- [Project Structure](#project-structure)
- [Features](#features)
- [Installation](#installation)
- [Usage](#how-to-use-this-project)
- [Requirements](#requirements)
- [Contribution](#contribution)
- [Learn More](#learn-more)

---

## Project Structure

```
PHP-For-Beginners-Series/
├── README.md                 # Project documentation
├── bootstrap.php             # Application bootstrap
├── config.php                # Configuration file (e.g., database)
├── composer.json             # Project dependencies
├── composer.lock             # Dependency lock file
├── phpunit.xml               # PHPUnit configuration
├── Core/                     # Core application logic (Request, Router, etc.)
├── Http/                     # HTTP-specific classes (Controllers, Middleware)
├── public/                   # Public web root (index.php)
├── routes.php                # Application route definitions
├── src/                      # Application-specific classes
├── tests/                    # Unit tests
├── vendor/                   # Composer-managed dependencies
├── views/                    # Application views (HTML templates)
```

---

## Features

- Full **CRUD functionality** using native PHP
- **Form handling**, **validation**, and **old input flashing**
- **Routing** and **redirection** using a custom router
- **MVC-inspired structure** for maintainable code
- **Composer** for dependency management
- **PestPHP** and PHPUnit for testing
- Examples of **dependency injection** and **service containers**

---

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/LSCasas/demo_php.git
   cd demo_php
   ```

2. **Install dependencies via Composer:**

   ```bash
   composer install
   ```

---

## How to Use This Project

1. **Configure the database**:

   - Copy `.env.example` to `.env` if applicable or edit `config.php`.
   - Set database credentials and parameters.

2. **Run the application** locally with a server:

   ```bash
   php -S localhost:8000 -t public
   ```

3. **Access the app**:

   - Open your browser and visit: `http://localhost:8000`

---

## Requirements

- PHP >= 8.0
- Composer
- Web server or PHP's built-in server
- MySQL or compatible relational database

---

## Contribution

If you want to contribute to this project:

1. Fork the repository.

2. Create a new branch:

   ```bash
   git checkout -b feature/your-feature-name
   ```

3. Make your changes and commit:

   ```bash
   git commit -m "Add your description here"
   ```

4. Push your changes:

   ```bash
   git push origin feature/your-feature-name
   ```

5. Open a Pull Request to the main branch for review.

Contributions of all levels are welcome—whether fixing bugs, improving documentation, or adding new examples.

---

## 📚 Learn More

- [PHP Manual](https://www.php.net/manual/en/)
- [Composer Documentation](https://getcomposer.org/doc/)
- [PestPHP](https://pestphp.com/)
- [Laracasts - PHP for Beginners](https://laracasts.com/series/php-for-beginners)
- [PSR Standards (PHP-FIG)](https://www.php-fig.org/psr/)
