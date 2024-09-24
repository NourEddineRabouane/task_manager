# Task Manager Application

###### This project is a basic Task Manager application built with PHP, MySQL, HTML, CSS, and JavaScript. It allows users to add, view, and delete tasks. The app follows an organized folder structure for easier maintenance and scalability.
## Table of Contents

### Project Structure
####  Folders and Files
######    /app
######    /public
######    /config
######    .gitignore
######    README.md

### Project Structure

###### The folder structure is designed to separate concerns between logic, presentation, and configuration files, ensuring a modular and maintainable application. Below is a breakdown of each folder and its purpose.

##### /project-root
##### │
##### ├── /app
##### │ ├── /controllers # Handles request logic and actions
##### │ ├── /models # Contains the logic to interact with the database
##### │ └── /views # HTML and UI templates for rendering data
##### │
##### ├── /public # Publicly accessible files (e.g., CSS, JS, index.php)
##### │ ├── /css # Stylesheets for the app
##### │ ├── /js # Client-side JavaScript logic
##### │ └── index.php # Application entry point
##### │
##### ├── /config # Configuration files, including database and environment
##### │
##### │
##### ├── .gitignore # Files and directories to ignore in version control
##### └── README.md # Documentation for the project

### Folders and Files
#### /app

###### The /app directory contains the core application logic, including controllers, models, and views.
###### 
######     /controllers: This directory holds PHP controllers that manage HTTP requests and handle user actions.
######         TaskController.php: Controls the flow of task-related actions like adding and deleting tasks.
###### 
######     /models: Contains models that interact with the database.
######         Task.php: A model representing the Task entity, including methods for fetching, adding, and deleting tasks from the database.
###### 
######     /views: Contains the HTML templates for rendering the UI.
######         tasks.php: A template that displays the list of tasks.
######         add_task.php: A form for adding new tasks.

#### /public

###### The /public directory contains files that are accessible to the web, such as stylesheets, JavaScript, and the index.php entry point.
###### 
######     /css:
######         style.css: Contains the CSS rules for styling the app, including the task list and form elements.
###### 
######     /js:
######         app.js: Contains the client-side JavaScript logic, including AJAX handling for adding and deleting tasks asynchronously without reloading the page.
######
######    index.php:
######    The main entry point of the application. It loads the necessary controllers and renders the task management interface. This file handles requests to display tasks, add new tasks, or delete tasks by interacting with the backend PHP logic.

### /config

###### The /config directory holds configuration files for the app.
######
######    Database.php:
######    Contains the database connection
######    config.php:
######    Contains the database configuration (host, username, password, and database name). This is where the application connects to the MySQL database.
######
######    env.php:
######    Instead of using a .env file, env.php holds environment variables such as database credentials, environment mode (production or development), and other sensitive configurations. This file returns an associative array with configuration values.

### .gitignore

###### The .gitignore file specifies which files and folders should be excluded from version control (e.g., Git). This is important for keeping sensitive data (like environment variables) and unnecessary files (like logs and vendor libraries) out of the version control system.

### README.md

###### This README.md file provides documentation for the project. It explains the project structure, key files, and their purposes.
