<?php
require 'db_connection.php';
$stmt = $pdo->query("SELECT * FROM users");
?>

<h2>قائمة جهات الاتصال</h2>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>الرمز</th>
            <th>الاسم</th>
            <th>البريد الإلكتروني</th>
            <th>الهاتف</th>
            <th>تاريخ الانشاء</th>
            <th>الإجراءات</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['phone']) ?></td>
                <td><?= htmlspecialchars($user['created_at']) ?></td>
                <td>
                    <a href="edit_contact.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm">تعديل</a>
                    <a href="delete_contact.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد أنك تريد الحذف؟')">حذف</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
