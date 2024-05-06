<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            margin: 2rem 0 0 5rem;
        }
        h2 {
            text-align: center;
            margin: 2rem 0 0 0;
            font-weight: bold;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        td a {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h2>Daftar Pesanan</h2>
    <table>
        <a href="<?php echo site_url('welcome') ?>" class="btn btn-primary" style="margin: 3rem 0 0 5rem;">Tambah Pesanan</a>
        <tr>
            <th>No</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <?php foreach ($pesanan as $key => $item) { ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $item->jenis; ?></td>
                <td><?php echo $item->harga; ?></td>
                <td><?php echo $item->jumlah; ?></td>
                <td><?php echo $item->total; ?></td>
                <td>
                <button class="btn btn-primary" onclick="location.href='<?php echo site_url('welcome/edit_pesanan/'.$item->id); ?>'">Edit</button>
                    <button class="btn btn-danger" onclick="location.href='<?php echo site_url('welcome/hapus_pesanan/'.$item->id); ?>'">Hapus</button>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
