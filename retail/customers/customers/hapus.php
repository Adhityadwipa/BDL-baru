<?php

$key = $_GET['key'];

$file = file_get_contents('customers.json');
$data_pelanggan = json_decode($file);

array_splice($data_pelanggan, $key, 1);

$json_pelanggan = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers.json', $json_pelanggan);

header('Location: view.php');

?>