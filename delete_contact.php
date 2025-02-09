<?php
require 'db_connection.php';

if (!isset($_GET['id'])) {
    die("خطأ: لم يتم تحديد معرف جهة الاتصال!");
}

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");
exit;
?>
