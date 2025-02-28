<?php
// Kết nối đến database
$pdo = new PDO("mysql:host=localhost;dbname=php2", "root", "");

// Mã hóa mật khẩu
$password = password_hash('admin123', PASSWORD_BCRYPT);

// Câu lệnh SQL
$query = "INSERT INTO users (name, email, password, role_id) VALUES (?, ?, ?, ?)";

// Chuẩn bị và thực thi
$stmt = $pdo->prepare($query);
$stmt->execute(['Admin', 'admin@example.com', $password, 1]);

echo "User created successfully!";
