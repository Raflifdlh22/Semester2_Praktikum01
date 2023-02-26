<?php
$profileArray = [
    "nama" => "Rafli", 
    "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"];

echo "<br>";

// profileMultiArray

$profileMultiArray = [
    [
        "nama" => "Rafli",
        "semester" => 2
    ], [
        "nama" => "fadilah",
        "semester" => 4
    ], [
        "nama" => "gaul",
        "semester" => 6
    ], [
        "nama" => "paul",
        "semester" => 8
    ]
    ];
    foreach($profileMultiArray as $profile){
        echo $profile ['nama'] . "<br>";
        echo $profile ['semester'] . "<br>";
    }