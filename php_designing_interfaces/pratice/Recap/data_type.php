<?php

$data_type_scalar=[
    "Magang Top",
    120,
    12.6,
    true,
    false,  
];

foreach ($data_type_scalar as $key) {
    // var_dump($key);
    if(is_scalar($key))
    {
        echo gettype($key). " Scalar Type".PHP_EOL;
    } else {
        echo gettype($key). " Ini Todak Scalar".PHP_EOL;
    }
}

echo isset($data_type_scalar)?"Ditemukan":"Tidak Ditemukan"; // Ternary

echo PHP_EOL;

// IF Logic

if(isset($data_type_scalar))
{
    echo "Ditemukan";
} else {
    echo "Tidak Ditemukan";
}

$data_type_empty=[
    "",
    null,
    0,
    0.0,
    [],
    false,
    "Tes"
];

echo PHP_EOL;

foreach ($data_type_empty as $key) {
    if(empty($key))
    {
        echo gettype($key) . " Is Empty". PHP_EOL;
    }
}