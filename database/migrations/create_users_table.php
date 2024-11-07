<?php
// Example migration for creating users table
$pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'root', 'secretpassword');
$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
$pdo->exec($sql);
echo "Users table created successfully.";
