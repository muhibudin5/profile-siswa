<?php
// profile.php

// Contoh data siswa
$siswa = [
    'nama' => 'Muhibbudin',
    'nis' => '123456',
    'kelas' => 'IF23G',
    'alamat' => 'Jl. Contoh No. 1',
    'email' => 'Muhibbudin@example.com',
    'foto' => 'foto.jpg'
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        /* Gaya Umum */
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        h1 {
            color: #343a40;
            font-weight: 700;
            text-align: center;
            margin-bottom: 25px;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            border: 3px solid #17a2b8;
        }

        /* Gaya Tabel */
        table {
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            padding: 5px 10px; /* Jarak lebih rapat */
            text-align: left;
        }
        th {
            color: #17a2b8;
            font-weight: 600;
            width: 35%; /* Lebar kolom label */
        }
        td {
            color: #343a40;
            font-weight: 500;
        }

        /* Gaya Tombol */
        .btn-back {
            background-color: #17a2b8;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            padding: 8px 18px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            display: inline-block;
            margin-top: 25px;
        }
        .btn-back:hover {
            background-color: #138496;
        }

        /* Gaya Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 12px 0;
            text-align: center;
            margin-top: 40px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
    </style>
</head>
<body>

    <!-- Kontainer Profil Siswa -->
    <div class="container text-center">
        <h1>Profil Siswa</h1>

        <!-- Foto Profil -->
        <img src="<?php echo $siswa['foto']; ?>" alt="Foto Siswa" class="profile-img">

        <!-- Tabel Informasi Siswa -->
        <table class="table table-borderless">
            <tr>
                <th>Nama</th>
                <td><?php echo $siswa['nama']; ?></td>
            </tr>
            <tr>
                <th>NIS</th>
                <td><?php echo $siswa['nis']; ?></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td><?php echo $siswa['kelas']; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $siswa['alamat']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $siswa['email']; ?></td>
            </tr>
        </table>

        <!-- Tombol Kembali -->
        <a href="index.php" class="btn btn-back">Kembali</a>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Profil Siswa. All Rights Reserved.
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
