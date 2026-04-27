<?php
session_start();
$pesan_error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "admin" && $password == "admin123") {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("Location: dashboard.php");
            exit;

        } else {
            throw new Exception("Kombinasi Username dan Password tidak valid!");
        }

    } catch (Exception $e) {
        $pesan_error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Modul PHP Lanjut</title>
    <style>
        .error-box { color: white; background: red; padding: 10px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h2>Halaman Login Sistem</h2>

    <?php if ($pesan_error != ""): ?>
        <div class="error-box">
            <?php echo $pesan_error; ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table border="0">
            <tr>
                <td>Username</td>
                <td>: <input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>