<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Data</title>

</head>
<body class="bg-dark">

<div class="container">
    <div class="border">
        <form action="add_data.php" method="POST">
        <div class="row p-2 bg-dark">
            <center>
                <h1 class="text-light mt-2">Add Data</h1><br>
            </center>

            <div class="mb-3">
                <label for="id_pelanggan" class="form-lable text-light">Id</label>
                <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control bg-primary-subtle">
            </div>
            <div class="mb-3">
                <label for="nama_pelanggan" class="form-lable text-light">Nama</label>
                <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control bg-primary-subtle">
            </div>
            <div class="mb-3">
                <label for="jns_kelamin" class="form-lable text-light">Jenis Kelamin</label>
                <input type="text" name="jns_kelamin" id="jns_kelamin" class="form-control bg-primary-subtle">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-lable text-light">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control bg-primary-subtle">
            </div>
            <div class="mb-3">
                <label for="no_tlp" class="form-lable text-light">No Telpon</label>
                <input type="text" name="no_tlp" id="no_tlp" class="form-control bg-primary-subtle">
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-lable text-light">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control bg-primary-subtle">
            </div>
            <div class="mt-2">
                <a href="view.php" style="color: white; "><button class="btn btn-success" type="submit"> Simpan </button></a>
            </div>
        </div>
        </form>
    </div>
</div>
   
</body>
</html>