<?php
$nama = "Putri";
echo "hello nama saya $nama";
echo "<br>";

str_replace("Putri", "Putri", $nama, );
echo "<br><br>";

// Integer
$umur = 17;

var_dump($umur) - 3 . "<br";
var_dump($umur);
echo "<br><br>";

// float
$nilai = - 3.70;

var_dump ($nilai);
echo "<br><br>";

// Boolean
$is_student = true;
var_dump($is_student);
echo "<br><br>";

// Array biasa
$mahasiswa1 = ["Putri", 17, 3.70, false];
var_dump($mahasiswa1);

echo "<br><br";

echo "umur saya $mahasiswa1[1]";

echo "<br><br>";

// Array Asosiatif
$mahasiswa2 = [
    "nama" => "Putri",
    "umur" => 17,
    "nilai" => 3.70,
    "is_active" => true
];

var_dump($mahasiswa2);

echo "<br>";

echo "Hallo, saya" . $mahasiswa2['nama'];