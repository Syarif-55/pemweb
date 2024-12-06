<?php
include'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #02305e;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        .container {
            padding: 20px;
            max-width: 1000px;
            margin: auto;
            background-color: #ffffff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            flex: 1;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #007bff;
            color: #ffffff;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #e9ecef;
        }

        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            background-color: #343a40;
            color: #ffffff;
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
<header>
        <h1>Data Siswa</h1>
    </header>

    <div class="container">
        <h2>Daftar Siswa</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Alamat</th>
                <th>Jenis kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Aksi</th>
            </tr>
        <?php
        $no =1;
        $query = mysqli_query($koneksi,"SELECT * FROM data_siswa");
        while ($data =mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data ['Nama_siswa']?></td>
                <td><?php echo $data ['Alamat_siswa']?></td>
                <td><?php echo $data ['Jk_siswa']?></td>
                <td><?php echo $data ['Agama_siswa']?></td>
                <td><?php echo $data ['Asal_siswa']?></td>
                <td><a href="">edit</a> <a href="">hapus</a></td>
                    
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>