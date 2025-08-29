# 🌐 PHP Social Media Web Application  

A **Facebook-inspired social media platform** built with **PHP** using the **MVC (Model-View-Controller)** design pattern.  
The app allows users to **register, login, manage profiles, upload photos, and interact with a news feed** — simulating core features of a modern social network.  

---

## ⚙️ Prerequisites  

- [XAMPP](https://www.apachefriends.org/) / WAMP / MAMP installed  
- MySQL database running  
- Web browser (Chrome/Firefox recommended)  

---

## 🚀 Setup & Run  

1. Start **Apache** and **MySQL** from XAMPP/WAMP/MAMP control panel  
2. Open **phpMyAdmin** and create a new database:  
   ```sql
   CREATE DATABASE facebook;


Create required tables:

registration (user accounts)

image_data (photo uploads)

Copy project folder into your web server document root:

For XAMPP: htdocs/Php Pic/

For WAMP: www/Php Pic/

Access the app in your browser:

http://localhost/Php Pic/view/login.php

🛢️ Database Configuration

The app uses PDO (PHP Data Objects) for secure database connection.

Default settings in model/database.php:

Host: localhost

Database: facebook

User: root

Password: (empty)

✨ Features

✔️ Secure user registration & login
✔️ Password hashing with password_hash()
✔️ Session-based authentication
✔️ Profile management (update & delete account)
✔️ Photo upload functionality
✔️ CRUD operations for users & posts
✔️ Responsive Bootstrap-powered design
✔️ Input validation & sanitization
✔️ Social media–style news feed

🔐 Typical User Flow
[Login] → [Registration] → [Profile Management] → [Upload Photos] → [Feed]
