<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            text-decoration: none;
            color: #333;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        .card h3 { margin-bottom: 10px; color: #007bff; }
        .card p { font-size: 0.9em; color: #666; }
        .card.dosen { border-top: 5px solid #007bff; }
        .card.mahasiswa { border-top: 5px solid #28a745; }
        .card.matakuliah { border-top: 5px solid #17a2b8; }
    </style>
</head>
<body>

<div class="container">
    <header style="text-align: center; margin-bottom: 40px;">
        <h1>Sistem Informasi Akademik</h1>
        <p>Selamat datang di panel kendali data kampus.</p>
    </header>

    <div class="dashboard">
        <a href="dosen/viewdosen.php" class="card dosen">
            <h3>Data Dosen</h3>
            <p>Kelola data tenaga pengajar, tambah, edit, dan hapus.</p>
        </a>

        <a href="mahasiswa/viewmahasiswa.php" class="card mahasiswa">
            <h3>Data Mahasiswa</h3>
            <p>Manajemen data mahasiswa aktif dan pencarian NPM.</p>
        </a>

        <a href="matakuliah/viewmatakuliah.php" class="card matakuliah">
            <h3>Data Matakuliah</h3>
            <p>Pengaturan kurikulum, SKS, dan kode matakuliah.</p>
        </a>
    </div>

    <footer style="text-align: center; margin-top: 50px; color: #aaa; font-size: 0.8em;">
        &copy; Desain Pemograman Web - Modul 11
    </footer>
</div>

</body>
</html>