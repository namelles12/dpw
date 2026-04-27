<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar - Modul Praktikum</title>
</head>
<body>
    <h2>Berikan Komentar Anda</h2>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nama: <input type="text" name="fnama">
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fnama'];
        if (empty($name)) {
            echo "<p style='color:red;'>Nama tidak boleh kosong!</p>";
        } else {
            echo "<h3>Hasil Input:</h3>";
            echo "Halo, <b>" . htmlspecialchars($name) . "</b>! Komentar Anda telah diterima.";
        }
    }
    ?>

</body>
</html>