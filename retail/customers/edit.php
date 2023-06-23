

<?php

//id pelanggan yang sudah ada di customers.json
$value_id_pelanggan = $_POST['id_pelanggan'];

//nilai baru yang ingin diubah
$value_nama_pelanggan = $_POST['nama_pelanggan'];
$value_jns_kelamin = $_POST['jns_kelamin'];
$value_alamat = $_POST['alamat'];
$value_no_tlp = $_POST['no_tlp'];
$value_pekerjaan =  $_POST['pekerjaan'];

//membaca data json
$file = file_get_contents('customers.json');
$data_pelanggan = json_decode($file);

//mencari index dari key yang kita punya
foreach($data_pelanggan as $key => $value){
        //kondisi untuk mencari index dari value id_pelanggan(target)
        if($value ->id_pelanggan == $value_id_pelanggan){
                //update data_pelanggan sesuai dengan index
                $data_pelanggan[$key] -> nama_pelanggan = $value_nama_pelanggan;
                $data_pelanggan[$key] -> jns_kelamin = $value_jns_kelamin;
                $data_pelanggan[$key] -> alamat = $value_alamat;
                $data_pelanggan[$key] -> no_tlp = $value_no_tlp;
                $data_pelanggan[$key] -> pekerjaan = $value_pekerjaan;
        }
};

$json_pelanggan_update = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers.json', $json_pelanggan_update);

?>