<?php
require 'db_connection.php';

if (!isset($_GET['id'])) {
    die("خطأ: لم يتم تحديد معرف جهة الاتصال!");
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if (!$user) {
    die("خطأ: جهة الاتصال غير موجودة!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?");
    $stmt->execute([$name, $email, $phone, $id]);
    
    header("Location: index.php");
    exit;
}
?>

<h2>تعديل جهة الاتصال</h2>
<form method="POST" class="form-group">
    <label>الاسم:</label>
    <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($user['name']) ?>" required>
    
    <label>البريد الإلكتروني:</label>
    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
    
    <label>الهاتف:</label>
    <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($user['phone']) ?>" required>
    
    <button type="submit" class="btn btn-warning mt-2">تحديث</button>
    <a href="index.php" class="btn btn-secondary mt-2">إلغاء</a>
</form>
