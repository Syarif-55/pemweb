<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama   = htmlspecialchars(trim($_POST["nama"]));
    $alamat = htmlspecialchars(trim($_POST["alamat"]));
    $jk     = htmlspecialchars(trim($_POST["jk"]));
    $agama  = htmlspecialchars(trim($_POST["agama"]));
    $asal   = htmlspecialchars(trim($_POST["asal"]));

    if (!empty($nama) && !empty($alamat) && !empty($jk) && !empty($agama) && !empty($asal)) {
        $query = "INSERT INTO data_siswa (Nama_siswa, Alamat_siswa, Jk_siswa, Agama_siswa, Asal_siswa) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $nama, $alamat, $jk, $agama, $asal);
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Data berhasil ditambahkan!'); window.location='tambah_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan data: " . mysqli_error($koneksi) . "');</script>";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Query gagal disiapkan: " . mysqli_error($koneksi) . "');</script>";
        }
    } else {
        echo "<script>alert('Semua field harus diisi!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Data Mahaiswa</h2>
        <form action="tambah_siswa.php" method="POST">
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="jk">Jenis Kelamin:</label>
            <select id="jk" name="jk" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="agama">Agama:</label>
            <input type="text" id="agama" name="agama" required>

            <label for="asal">Asal Sekolah:</label>
            <input type="text" id="asal" name="asal" required>

            <button type="submit">Tambah Data</button>
        </form>
    </div>
</body>

</html>
