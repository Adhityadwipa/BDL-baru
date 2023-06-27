<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dashboard</title>
</head>
<body class="bg-dark text-light">
    <div class="container">
        <h1 class="display-5 text-center mt-3">Data Pelanggan</h1><br>
        <?php

        $file = file_get_contents('customers.json');
        $data_pelanggan = json_decode($file);
        $count = 1;
        ?>
        
        <div class="row">
            <a href="add_data_view.php" class="btn btn-success">Tambah Data</a>
        </div> <br>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="bg-secondary text-light">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Pekerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        <?php
                        foreach ($data_pelanggan as $key => $pelanggan) { ?>
                            <tr class="text-center">
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $pelanggan->id_pelanggan ?></td>
                                <td><?php echo $pelanggan->nama_pelanggan ?></td>
                                <td><?php echo $pelanggan->jns_kelamin ?></td>
                                <td><?php echo $pelanggan->alamat ?></td>
                                <td><?php echo $pelanggan->no_tlp ?></td>
                                <td><?php echo $pelanggan->pekerjaan ?></td>
                                <td>
                                    <a href="edit_data_view.php?key=<?php echo $key ?>" class="btn btn-warning ">Edit</a>
                                    <a href="hapus.php?key=<?php echo $key ?>" class="btn btn-danger ">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>