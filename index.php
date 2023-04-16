<?php

require_once "func.php";
$rows = query("SELECT nis, gambar, nama FROM tb_siswa");
if( isset($_GET['id']) ) {
    $id = $_GET['id'];
    $row = query("SELECT * FROM tb_siswa WHERE nis = '$id'");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i love php</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        img {
            width: 50px;
            display: block;
        }

        .none {
            display: none;
        }

        table,
        tr > * {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
        }

        tr > * {
            padding: 10px;
        }

        .detail {
            position: fixed;
            inset: 0;
            background-color: rgba(50, 50, 50, .5);
            z-index: 999;
        }

        .detail__card {
            max-width: 300px;
            background-color: white;
            margin: 100px auto 0;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 20px 50px rgba(50, 50, 50, .1);
        }
        
        .detail__card--img {
            width: 100%;
            margin: 0 auto 20px;
            border-radius: 5px;
        }

        .detail__card--list {
            list-style: none;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach( $rows as $row ) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><img src="img/<?= $row['gambar']; ?>" alt="<?= $row['gambar']; ?>"></td>
                <td><?= $row['nis']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><a href="http://localhost/belajar-git/index.php?id=<?= $row['nis']; ?>" class="detail-btn">Detail</a></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="detail none">
        <div class="detail__card">
            <img src="img/<?= $row['gambar']; ?>" alt="" class="detail__card--img">
            <ul class="detail__card--list">
                <li><?= $row['nis']; ?></li>
                <li><?= $row['nama']; ?></li>
                <li><?= $row['jurusan']; ?></li>
                <li><?= $row['kelas']; ?></li>
                <li><?= $row['alamat']; ?></li>
                <li><?= $row['ekskul']; ?></li>
                <li><?= $row['gambar']; ?></li>
            </ul>
            <a href="#">Hapus</a>
            <a href="#">Edit</a>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>