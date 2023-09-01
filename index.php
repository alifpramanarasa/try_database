<?php

// Memanggil koneksi menuju database
include_once("connection.php");

// Memanggil data dari database
$result = mysqli_query($mysqli, 'SELECT * FROM users');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>

    <a href="add.php">Tambah User</a>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
            while($user_data = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $user_data['name']; ?></td>
            <td><?php echo $user_data['mobile']; ?></td>
            <td><?php echo $user_data['email']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $user_data['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $user_data['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>

