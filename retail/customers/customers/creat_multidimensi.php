<?php

$data_pelanggan [] = array(
                        'id_pelanggan' => 'P001',
                        'nama_pelanggan' => array('nama_depan'=>'Adhitya', 'nama_belakang'=>'Dwipayana'),
                        'jns_kelamin' => 'L',
                        'alamat' => array('Provinsi'=>'Bali', 'Kota'=>'Bangli'),
                        'no_tlp' => '087861630697',
                        'pekerjaan' => array('A'=>'Mahasiswa', 'B'=>'Dosen', 'C'=>'Siswa'),
);


$json_pelanggan = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('pelanggan.json', $json_pelanggan);

$file = file_get_contents('pelanggan.json');
$data_pelanggan_multidimensi = json_decode($file);

//cara 1
//echo($data_pelanggan_multidimensi[0]->nama_pelanggan->nama_depan);

//cara 2
foreach($data_pelanggan_multidimensi as $pelanggan){
    echo "<center><h2>", $pelanggan->nama_pelanggan->nama_depan, "</h2><br></center>",
        "<center><h2>", $pelanggan->alamat->Kota, "</h2><br></center>",
        "<center><h2>",$pelanggan->pekerjaan->B, "</h2></center>";
}
?>