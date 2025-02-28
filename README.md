# Task Manager Laravel App

A simple Task Manager application built with Laravel that allows users to create, manage, and track tasks efficiently.

## Features
- User authentication (login/register)
- Create, update, delete tasks
- Task status management (e.g., pending, in progress, completed)
- Deadline tracking

## Installation and Setup

### Prerequisites
Ensure you have the following installed:
- PHP (>=8.1)
- Composer
- Laravel (latest version)
- MySQL or SQLite database

### Steps to Run the Application

1. **Clone the repository:**
   ```sh
   git clone https://github.com/arborin/task_manager_app.git
   cd task-manager
   ```

2. **Install dependencies:**
   ```sh
   composer install
   ```

3. **Set up environment variables:**
   ```sh
   cp .env.example .env
   ```
   Update `.env` file with your database credentials.

4. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

5. **Run database migrations:**
   ```sh
   php artisan migrate --seed
   ```

6. **Create a symbolic link to the storage folder:**
   ```sh
   php artisan storage:link
   ```

7. **Start the development server:**
   ```sh
   php artisan serve
   ```
   The app should now be accessible at `http://127.0.0.1:8000`.

## Usage
- Register or log in to access task management features.
- Create, edit, delete, and update task statuses.

## License
This project is open-source.

