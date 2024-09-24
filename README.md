# BankAccountManagementApp🏦💳💰📱

A web application designed to allow users to manage their bank accounts remotely. This was my **first project**, developed during my **first internship** at Al Baraka Bank. While the project provides essential functionality like authentication, checkbook requests, transfers, and account balance consultation, it does have **limitations** in terms of security and technology, as it was my initial attempt at building a web application. The technologies used are not optimized for Web 3 or advanced security standards.

## Table of Contents: 📁
- [Features](#Features)
- [Technologies Used](#Technologies-Used)
- [Installation](#Installation)
- [Usage](#usage)
- [Known Issues and Limitations](#Known-issues-and-limitations)
- [Screenshots](#screenshots)

## Features: ✨
- **User Authentication**: Secure login and registration system.
- **Checkbook Request**: Allows users to request checkbooks online.
- **Account Management**: View and manage account details, including balance and transaction history.
- **Funds Transfer**: Users can transfer funds between accounts.
- **Email Notifications**: Sends users updates on transactions and account activities.
- **Responsive Design**: Works across desktops, tablets, and mobile devices.

## Technologies-Used: ⚙️
- **Frontend**:
  - HTML5
  - CSS3
  - Bootstrap
  - JavaScript
  - jQuery

- **Backend**:
  - PHP
  - MySQL (Database)
  - XAMPP (Development environment)

- **Development Tools**:
  - Visual Studio Code
  - StarUML (for modeling and diagrams)

## Installation: 🛠️
To set up the project locally, follow these steps:

1. **Clone the repository**:
    ```bash
    git clone https://github.com/YourUsername/BankAccountManagementApp.git
    ```

2. **Set up XAMPP**:
   - Install [XAMPP](https://www.apachefriends.org/index.html) and start Apache and MySQL services.

3. **Database Setup**:
   - Open phpMyAdmin (usually available at http://localhost/phpmyadmin).
   - Create a new database named `bank_management`.
   - Import the provided SQL file located in the `database` folder into the database.

4. **Configure the application**:
   - Open the project folder in your preferred editor.
   - Navigate to the `config.php` file and update the database credentials (if necessary):
     ```php
     $host = 'localhost';
     $username = 'root'; // default XAMPP username
     $password = ''; // default XAMPP password is empty
     $database = 'banque';
     ```

5. **Run the project**:
   - Place the project folder in the XAMPP `htdocs` directory.
   - Open your browser and navigate to `http://localhost/BankAccountManagementApp`.

## Usage:💻
- **Login**: Enter your credentials to access your account. If you don't have an account, you can register.
- **Checkbook Request**: Navigate to the "Request Checkbook" section to submit a new request.
- **Transfer Funds**: Enter the recipient's details and the amount to initiate a transfer.
- **Account Consultation**: View your current balance, recent transactions, and checkbook status.
  
## known-issues-and-limitations:📌⚠️
- **Security** : The project does not implement advanced security features such as encryption, proper authentication protocols, or protection against common web vulnerabilities (e.g., SQL injection)
- **Technologies**: The technologies used in this project are not modern web frameworks (e.g., React, Web 3, etc.). This project was my first attempt at building a web app during my internship.
- **Scalability**: The app is not designed to handle large-scale usage or advanced load balancing.
  
## screenshots:📸
