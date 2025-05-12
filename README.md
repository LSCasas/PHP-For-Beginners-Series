# PHP for Beginners Series

This repository is part of the **PHP for Beginners** educational series originally created by [Laracasts](https://laracasts.com). It serves as a practical and modern introduction to PHP development, aimed at beginners who want to build web applications using clean, structured code and professional tools.

## Key Features

-  **Organized structure** using a simple MVC-inspired architecture
-  **Modern tooling**:
  - Composer for dependency management
  - PestPHP for testing
-  **Hands-on examples**:
  - Form validation and old input flashing
  - Routing and redirection
  - Dependency injection and service containers
-  **Real-world practices** for learning foundational PHP concepts

## Repository Structure

```
Core/             → Framework core (service container, helpers, etc.)
Http/             → Controllers and HTTP logic
public/           → Public directory (entry point)
tests/            → Automated tests using PestPHP
views/            → Blade-like templates for rendering UI
routes.php        → Route definitions
config.php        → Application configuration
composer.json     → Dependency definitions
```

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/LSCasas/PHP-For-Beginners-Series.git
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Start the development server:
   ```bash
   php -S localhost:8000 -t public
   ```

## Credits

This educational resource was originally created by [Laracasts](https://laracasts.com) as part of their PHP beginner series.

---

