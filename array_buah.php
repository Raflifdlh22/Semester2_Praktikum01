<?php
// membuat array
$arrayBuah = ["Jeruk","Mangga","Pisang","Apel"];

// menggunakan print_r
print_r($arrayBuah);
echo "<br>";

// menggunakan var_dump
var_dump($arrayBuah);
echo "<br>";

// menggunakan foreach
foreach($arrayBuah as $buah) {
    echo $buah . "<br>";
}

echo "<br>";
echo $arrayBuah[0];