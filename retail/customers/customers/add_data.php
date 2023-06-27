

<?php
$file = file_get_contents('customers.json');
$data_pelanggan = json_decode($file);

$data_pelanggan[] = array(
        
        "id_pelanggan" => $_POST['id_pelanggan'],
        "nama_pelanggan" => $_POST['nama_pelanggan'],
        "jns_kelamin" => $_POST['jns_kelamin'],
        "alamat" => $_POST['alamat'],
        "no_tlp" => $_POST['no_tlp'],
        "pekerjaan" => $_POST['pekerjaan'],
        );


$json_pelanggan_update = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers.json', $json_pelanggan_update);

header('Location: view.php');
?>