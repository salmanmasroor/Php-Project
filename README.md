# 🌐 PHP Social Media Web Application  

A **Facebook-inspired social media platform** built with **PHP** using the **MVC (Model-View-Controller)** architecture.  
This project simulates a mini social network with features like **user registration, login, profile management, photo uploads, and a news feed**.  

---

## ⚙️ Prerequisites  

Before running the project, ensure you have:  
- [XAMPP](https://www.apachefriends.org/) / WAMP / MAMP installed  
- MySQL database running  
- A modern web browser (Chrome/Firefox recommended)  

---

## 🚀 Setup & Run  

### 1. Start Server  
- Open **XAMPP/WAMP/MAMP** control panel  
- Start **Apache** and **MySQL**  

### 2. Database Setup  
- Go to [phpMyAdmin](http://localhost/phpmyadmin)  
- Create a new database:  
  ```sql
  CREATE DATABASE facebook;
Create the following tables:

registration → Stores user account data

image_data → Stores uploaded photos

3. Project Setup
Copy project folder into your web server root:

For XAMPP: htdocs/Php Pic/

For WAMP: www/Php Pic/

4. Run the Application
Open browser and visit:

bash
Copy code
http://localhost/Php Pic/view/login.php
🛢️ Database Configuration
Located in model/database.php:

php
Copy code
Host:     localhost
Database: facebook
User:     root
Password: (empty)
Uses PDO (PHP Data Objects) for secure database connection.
