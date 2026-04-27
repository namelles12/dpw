<!DOCTYPE html>
<html>
<body>

<h2>Upload Gambar</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  Pilih Gambar:
  <input type="file" name="gambar" id="gambar">
  <input type="submit" value="Upload Gambar" name="submit">
</form>

<?php
if (isset($_POST["submit"]) && isset($_FILES["gambar"])) {
    
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check !== false) {
        echo "File adalah gambar - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.<br>";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.<br>";
        $uploadOk = 0;
    }

    if ($_FILES["gambar"]["size"] > 5000000000) {
        echo "Maaf, ukuran file terlalu besar.<br>";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diizinkan.<br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Maaf, file gagal di-upload.<br>";
    } else {
        // Jika semua validasi lolos, coba upload file
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "File <b>". htmlspecialchars(basename($_FILES["gambar"]["name"])). "</b> berhasil di-upload.";
        } else {
            echo "Maaf, terjadi error saat proses upload.";
        }
    }
}
?>

</body>
</html>