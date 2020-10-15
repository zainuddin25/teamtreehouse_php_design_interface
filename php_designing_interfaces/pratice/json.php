<?php 

$data=[1,2,3,4,5,6,7,86,5];

// echo json_encode($data); 

$dataCode="[1,2,3,4,5,6,7,86,5]";

echo PHP_EOL;

foreach(json_decode($dataCode) as $key)
{
    // echo $key.PHP_EOL;
}

$getjson=json_decode(file_get_contents(__DIR__."/data.json"));

echo $getjson;