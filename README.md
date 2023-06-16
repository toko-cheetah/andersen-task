# Andersen Task

This is a simple Laravel application that allows users to submit messages through a form and stores them in a MySQL database. It also displays a list of all the submitted messages.

## Prerequisites

Before getting started, ensure that you have the following software installed on your system:

-   PHP 7.4 or higher
-   Composer (https://getcomposer.org/)
-   MySQL
-   Node.js and NPM (optional, for asset compilation)

## Installation

1. Clone the repository to your local machine:

```
git clone https://github.com/toko-cheetah/andersen-task.git
```

2. Navigate to the project directory:

```
cd andersen-task
```

3. Install the PHP dependencies:

```
composer install
```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the file with your database credentials.

5. Generate the application key:

```
php artisan key:generate
```

6. Create a new MySQL database for the application.

7. Update the `.env` file with your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

8. Run the database migrations to create the necessary tables:

```
php artisan migrate
```

9. (Optional) If you want to compile the assets (CSS and JavaScript), make sure you have Node.js and NPM installed. Then, run:

```
npm install
npm run dev
```

10. Start the development server:

```
php artisan serve
```

11. Visit `http://localhost:8000` in your web browser to access the application.

## Usage

-   Fill out the form on the home page with your name, email, and message.
-   Click the "Submit" button to send the message, which will be stored in the database.
-   Scroll down to the bottom of the page to see all the submitted messages, including their name, email, message, and creation date.

## Validation

The application includes validation for the input values on the form. The following validation rules are applied:

-   Name: Required, minimum 3 characters, maximum 15 characters, must contain only letters, numbers, dashes, and underscores.
-   Email: Required, must be a valid email format, must be unique in the "users" table.
-   Message: Required.

If any validation errors occur, they will be displayed below the form.
