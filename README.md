# Personal Contact Management Application

This is a simple Personal Contact Management Application developed using Laravel for the backend and JavaScript for the frontend.

## Overview

The application allows users to manage their personal contacts, including adding, deleting, and viewing contacts. Each contact includes the following information: name, email, phone number, and an optional note.

## Requirements

### Laravel Backend

- Set up a new Laravel project.
- Use Laravel migrations to create a database table for contacts.
- Develop API endpoints to add, delete, and retrieve contacts from the database.
- Implement validation rules for contact data (e.g., email format, required fields).

### JavaScript Frontend

- Implement functionalities to:
  - Display a list of contacts.
  - Add a new contact through a form.
  - Delete a contact.

## Getting Started

1. Clone this repository to your local machine.
2. Set up a Laravel development environment if you haven't already.
3. Navigate to the project directory in your terminal.
4. Run `composer install` to install PHP dependencies.
5. Create a copy of the `.env.example` file and rename it to `.env`. Configure your database credentials in this file.
6. Run `php artisan key:generate` to generate an application key.
7. Run `php artisan migrate` to run migrations and create the necessary tables in the database.
8. Run `npm install` to install JavaScript dependencies.
9. Run `npm run dev` to compile assets.
10. Start the Laravel development server by running `php artisan serve`.
11. Access the application in your browser at `http://localhost:8000`.

## Project Structure

- `app/`: Contains the backend application logic.
- `database/`: Contains database migrations and seeders.
- `public/`: Contains the frontend assets and the entry point (`index.php`).
- `resources/`: Contains frontend views and assets (JavaScript, CSS, etc.).
- `routes/`: Contains route definitions.
- `tests/`: Contains test cases.
- `vendor/`: Contains PHP dependencies installed via Composer.

## Technologies Used

- **Laravel**: A PHP framework for building web applications.
- **JavaScript**: Used for frontend interactivity and communication with the backend API.



