# Notes App with Laravel and MySQL

A simple notes application built with Laravel and MySQL. This app allows users to create, update, delete, and search for notes. Notes are stored according to the currently logged-in user.

## Features

* **User Authentication**: Secure login system to ensure notes are stored and accessed by the correct user.
* **CRUD Operations**:

  * **Create**: Add new notes.
  * **Update**: Edit existing notes.
  * **Delete**: Remove notes.
* **Search Functionality**: Search for notes using a search bar, filtering by title or content.
* **MySQL Database**: Notes are stored in a MySQL database, linked to each individual user.

## Installation

### Clone the Repository

```bash
git clone https://github.com/your-username/notes-app-laravel-mysql.git
cd notes-app-laravel-mysql
```

### Install Dependencies

```bash
composer install
npm install
```

### Set up the Environment

Copy the `.env.example` file to `.env` and set up your database credentials:

```bash
cp .env.example .env
```

Edit the `.env` file with your database credentials:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Migrate the Database

Run the migrations to set up the necessary tables:

```bash
php artisan migrate
```

### Serve the Application

Run the application using the built-in Laravel server:

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Usage

* **Login**: Use the authentication system to log in or register a new account.
* **Create Notes**: Once logged in, you can create new notes by clicking the "Create Note" button.
* **Edit Notes**: You can update an existing note by clicking on the "Edit" button next to the note.
* **Delete Notes**: You can delete a note by clicking the "Delete" button.
* **Search Notes**: Use the search bar at the top of the notes list to search for notes by title or content.

## Contributing

Feel free to fork the repository, create a branch, and submit pull requests. Contributions are welcome!

