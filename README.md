<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Workshop Repository

Welcome to the **Laravel Workshop Repository**! This repository demonstrates the development of a feature-rich Laravel application, including authentication, CRUD operations, user profile management, image uploads, dynamic views, and email configuration.

## Features

### Authentication
- User registration and login using Laravel Breeze.
- Auth middleware to protect routes.

### User Profile
- View and update user profiles.
- Profile routing and error handling.

### CRUD Operations
- Full CRUD functionality for managing notes:
  - Create: Add new notes.
  - Read: Display a list of notes.
  - Update: Edit note information.
  - Delete: Remove notes.

### Image Management
- Upload multiple images.
- Image validation.
- Display images in a slider.

### Dynamic Views
- Blade templates with `@foreach` loops.
- Multiple layouts for improved design.

### Email Functionality
- "Contact Us" form with email sending capabilities.

### Dashboard
- Created a user-friendly dashboard with dedicated views and controllers.

## Getting Started

Follow these steps to set up the project on your local environment.

### Prerequisites
- PHP >= 8.1
- Composer
- Laravel CLI
- A web server (e.g., Apache, Nginx) or Laravel's built-in server
- MySQL or any supported database

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/laravel-workshop.git
   ```
2. Navigate to the project directory:
   ```bash
   cd laravel-workshop
   ```
3. Install dependencies:
   ```bash
   composer install
   ```
4. Set up your `.env` file:
   ```bash
   cp .env.example .env
   ```
   Configure your database and other environment settings.

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```
6. Run migrations:
   ```bash
   php artisan migrate
   ```

### Usage
1. Start the development server:
   ```bash
   php artisan serve
   ```
2. Access the application in your browser:
   ```
   http://localhost:8000
   ```

## Project Structure

- **Routes**: Web routes defined in `routes/web.php`.
- **Controllers**: Located in `app/Http/Controllers`.
- **Views**: Blade templates in `resources/views`.
- **Migrations**: Database migrations in `database/migrations`.
- **Middleware**: Auth and custom middleware in `app/Http/Middleware`.

## Contributing

Contributions are welcome! Please follow these steps:
1. Fork the repository.
2. Create a new branch for your feature or bugfix:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Description of your changes"
   ```
4. Push to your fork:
   ```bash
   git push origin feature-name
   ```
5. Open a pull request.

---

Happy coding! 🚀
