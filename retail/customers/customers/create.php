<?php

$data_pelanggan [] = array(
                        'id_pelanggan' => 'P001',
                        'nama_pelanggan' => 'Adhitya',
                        'jns_kelamin' => 'L',
                        'alamat' => 'Bangli',
                        'no_tlp' => '087861630697',
                        'pekerjaan' => 'Mahasiswa',
);



$json_pelanggan = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers.json', $json_pelanggan);






?>