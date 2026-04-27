<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Galeri Foto - Modul PHP Lanjut</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .gallery-item {
            border: 1px solid #ccc;
            padding: 5px;
            text-align: center;
        }
        .gallery-item img {
            width: 200px; /* Mengatur lebar gambar agar seragam */
            height: auto;
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<h2>Galeri Gambar</h2>
<div class="gallery">
    <?php
    $filelist = glob('gambar/*');

    foreach ($filelist as $filename) {
        if (is_file($filename)) {
            echo '<div class="gallery-item">';
            echo '<img src="' . htmlspecialchars($filename) . '" alt="Gambar">';
            echo '<small>' . basename($filename) . '</small>';
            echo '</div>';
        }
    }
    ?>
</div>

<br>
<hr>
<a href="upload_gambar.php">Tambah Gambar Lagi</a>

</body>
</html>