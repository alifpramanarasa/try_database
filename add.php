<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat User</title>
</head>
<body>
    <a href="index.php">Kembali</a>

    <form action="add.php" method="POST" name="addUser">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="add"></td>
            </tr>
        </table>
    </form>

    <!-- Handle permintaan POST dari form diatas -->
    <?php
        if(isset($_POST['Submit'])) {
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];

            // Memanggil koneksi menuju database
            include_once("connection.php");

            // Query untuk insert data ke database
            $result = mysqli_query($mysqli, 
            "INSERT INTO users (name,email,mobile) VALUES ('$name','$email','$mobile')");

            echo "Berhasil menambah user. <a href='index.php'>Lihat User</a>";
        }
    ?>
</body>
</html>