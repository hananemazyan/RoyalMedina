CREATE DATABASE IF NOT EXISTS royalmedinah_db;
use royalmedinah_db;

CREATE TABLE IF NOT EXISTS products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    description TEXT,
    price DECIMAL(10,2),
    category VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    email VARCHAR(100),
    role VARCHAR(20) DEFAULT 'customer'
);


CREATE TABLE IF NOT EXISTS orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_amount DECIMAL(10,2),
    status VARCHAR(20) DEFAULT 'pending',
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) UNIQUE
);

INSERT INTO products (name, description, price, category)
VALUES

    ('Blue-White Caftan', ' Blue-White Caftan', 2500, 'Caftan'),
    ('Blue-Pink Caftan', 'Blue-Pink Caftan', 2500, 'Caftan'),
    ('Medama Blue', 'Medama Blue GOLD', 1900, 'Jewelry'),
    ('Blue Ciel', 'Description of Blue Ciel GOLD', 1900, 'Jewelry'),
    ('Babouche blue ', 'Babouche blue ', 400, 'shoes'),
    ('Babouche classique', ' Babouche classique', 400, 'shoes');
    
    
    
    