# Project Management Application

This project is a web-based project management application built using PHP and MySQL. It utilizes Object-Oriented Programming (OOP) concepts such as inheritance and polymorphism to manage projects, tasks, and user roles effectively.

## Features

- User authentication (login and registration)
- Role-based access control (normal users and admin users)
- Project management (create, edit, list projects)
- Task management (create, edit, list tasks)
- User management (view and edit user profiles)
- Notifications for project and task updates
- Search functionality for projects and tasks

## Directory Structure

```
project-management
├── config
│   ├── database.php
│   └── config.php
├── public
│   ├── index.php
│   ├── assets
│   │   ├── css
│   │   └── js
│   └── uploads
├── src
│   ├── Controllers
│   │   ├── AuthController.php
│   │   ├── ProjectController.php
│   │   ├── TaskController.php
│   │   └── UserController.php
│   ├── Models
│   │   ├── User.php
│   │   ├── Project.php
│   │   ├── Task.php
│   │   └── Notification.php
│   ├── Views
│   │   ├── auth
│   │   │   ├── login.php
│   │   │   └── register.php
│   │   ├── dashboard
│   │   │   ├── admin.php
│   │   │   └── user.php
│   │   ├── projects
│   │   │   ├── create.php
│   │   │   ├── edit.php
│   │   │   └── list.php
│   │   └── tasks
│   │       ├── create.php
│   │       └── list.php
│   └── Interfaces
│       └── UserInterface.php
├── vendor
├── composer.json
└── README.md
```

## Installation

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run `composer install` to install the required dependencies.
4. Configure the database settings in `config/database.php`.
5. Access the application via `public/index.php`.

## Usage

- Users can register and log in to access their dashboards.
- Admin users can manage all projects and users.
- Normal users can create and manage their own projects and tasks.

## License

This project is licensed under the MIT License.