<?php 

$data_array=[
    ["siswa","mentor"],
    ["rukan" => "GreenLake City","kota" => "Tangerang"]
];

foreach ($data_array as $key) {
    // echo gettype($key);
    if(is_scalar($key))
    {
        echo gettype($key). " Ini Bertype Scalar ";
    } else {
        echo gettype($key). " Ini tidak bertype ";
    }
}