# Electra – Electrical Services Website

Electra is a responsive electrical services website built with PHP and MySQL. It includes a public-facing website and an admin panel for managing blog posts and contact messages.

## Features

- Responsive design with Bootstrap
- Blog listing and detail pages
- Admin login with session-based authentication
- Create, edit, and delete blog posts
- View and delete contact messages
- Contact form connected to MySQL
- Prepared SQL statements
- Password hashing
- CSRF protection for administrative forms
- Output escaping to help prevent XSS

## Technologies

- PHP
- MySQL
- HTML5
- CSS3
- Bootstrap
- JavaScript

## Installation

### 1. Install WAMP

Install WAMP Server and start Apache and MySQL.

### 2. Copy the project

Place the project folder inside:

`C:\wamp64\www\Electra`

### 3. Create the database

1. Open `http://localhost/phpmyadmin`.
2. Create a database named `electra`.
3. Select the `electra` database.
4. Open the **Import** tab.
5. Select the `database.sql` file from the project folder.
6. Start the import.


### 4. Configure the database connection

1. Create a file named `database.local.php` in the project root directory.
2. Add the following code and update the credentials for your local MySQL setup:

```php
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "electra";

$connection = mysqli_connect(
    $host,
    $username,
    $password,
    $database
);

if (!$connection) {
    error_log("Database connection failed: " . mysqli_connect_error());
    die("A database error occurred. Please try again later.");
}

mysqli_set_charset($connection, "utf8mb4");
```

3. Make sure `database.local.php` is excluded by `.gitignore`.
4. Import `database.sql` into an empty database named `electra` before running the project.


### 5. Create an administrator account

The `admins` table is created when you import `database.sql`, but no administrator account is included.

To create an administrator account:

1. Generate a password hash using PHP's `password_hash()` function.
2. Insert the username and password hash into the `admins` table.
3. Open `http://localhost/Electra/admin/login.php` and sign in with your credentials.

Never store plain-text passwords in the database or commit real credentials to GitHub.

### 6. Run the website

Open:

`http://localhost/Electra/`

To access the admin login page, open:

`http://localhost/Electra/admin/login.php`

## Security Notes

- Do not commit real credentials or private configuration.
- Use a strong password for the administrator account.
- Review and test security before deploying to a production server.

## Project Status

Portfolio project developed with PHP and MySQL.
