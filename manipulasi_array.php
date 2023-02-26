<?php
$arrayBuah = ["Jeruk","Mangga","Pisang","Apel"];

// array sort mengurutkan nilai suatu array
// sort($arrayBuah);


// array pop menghapus nilai yang paling akhir
// array_pop($arrayBuah);

// array unset berfungsi untuk menghapus semua objek
// unset($arrayBuah[1]);

// array push menambah nilai suatu array paling belakang
// array_push($arrayBuah, "Durian");


// menghapus nilai array paling awal/depan
// array_shift($arrayBuah);

// menambah nilai array di paling depan
array_unshift($arrayBuah, "Semangka");

// mengubah spesifik nilai array tertentu
$arrayBuah[0] = "Manggis";


foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}

