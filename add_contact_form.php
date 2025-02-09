<?php
require 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $stmt = $pdo->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $phone]);
    header("Location: index.php");
}
?>

<h2>إضافة جهة اتصال جديدة</h2>
<form method="POST" class="form-group">
    <label>الاسم:</label>
    <input type="text" name="name" class="form-control" required>
    
    <label>البريد الإلكتروني:</label>
    <input type="email" name="email" class="form-control" required>
    
    <label>الهاتف:</label>
    <input type="text" name="phone" class="form-control" required>
    
    <button type="submit" class="btn btn-success mt-2">إضافة</button>
</form>
