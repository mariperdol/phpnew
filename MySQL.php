<?php
$host = 'localhost';
$db = 'test_db';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $stmt = $pdo->query("SELECT * FROM users");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: {$row['id']}, Name: {$row['name']}\n";
    }
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
?>
