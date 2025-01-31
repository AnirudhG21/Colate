# Task Manager

## Overview

This is a simple **Task Manager** web application built using **HTML, CSS, JavaScript**, and **PHP with MySQL** as the backend, running on **XAMPP**. The application allows users to create, update, delete, and manage tasks efficiently.

## Features

- User authentication (Login & Signup)
- Add new tasks with title, description, and due date
- Mark tasks as complete or incomplete
- Edit task details
- Delete tasks
- Responsive UI for both desktop and mobile
- Tasks stored in a MySQL database

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP, MySQL
- **Database Management:** phpMyAdmin (via XAMPP)
- **Server:** Apache (via XAMPP)

## Installation Guide

### 1. Prerequisites

- Install **XAMPP** ([Download XAMPP](https://www.apachefriends.org/index.html))
- A web browser (Chrome, Firefox, Edge, etc.)

### 2. Setup XAMPP and Database

1. Start **Apache** and **MySQL** from the XAMPP Control Panel.
2. Open `phpMyAdmin` by visiting `http://localhost/phpmyadmin/`.
3. Create a new database called **task\_manager**.
4. Import the provided SQL file (`task_manager.sql`) into phpMyAdmin.
5. Update the `config.php` file with the correct database credentials.

### 3. Run the Project

1. Place the project folder inside `htdocs` (XAMPP directory).
2. Open your browser and visit: `http://localhost/task_manager/`

## File Structure

```
/task_manager
│── index.html        # Landing page
│── login.html        # Login page
│── register.html     # Signup page
│── dashboard.html    # Task manager dashboard
│── style.css         # CSS file
│── script.js         # JavaScript file
│── config.php        # Database connection
│── tasks.php         # Backend logic for CRUD operations
│── database.sql      # Database schema file
```

## Usage

1. Register a new account.
2. Log in to access the dashboard.
3. Add tasks, mark them as completed, edit, or delete them.
4. Log out when done.

## Future Enhancements

- Implement user roles and permissions
- Add task categories or labels
- Integrate email notifications for due tasks
- Improve UI with animations and modern design

## License

This project is open-source and free to use.

## Author

**Anirudh G Bharadwaj**

