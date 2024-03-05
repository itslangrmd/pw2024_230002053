<?php
//1. Membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["SGilang",3.3,false];


//2. Mencetak isi array
// Mencetak 1 nilai pada array, menggunakan index
// Index dimulai 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo"<hr>";

// var_dump() atau print_r()
//digunakan saat debugging
var_dump($hari);
echo "<br>";

print_r($bulan);
echo "<br>";

var_dump($mahasiswa);
echo "<hr>";

//3. manupulasi isi array
// menambah isi array
// di akhir: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jumat";

print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// diawal: array_unshift()
array_unshift($mahasiswa, "230002053");
print_r($mahasiswa);
echo "<hr>";

// Menghapus isi array
// dibelakang: array_pop()
// di depan: array_shift()
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);

