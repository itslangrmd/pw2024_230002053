<?php

$mahasiswa=[
    [
        "nama" => "NAbila sahriska ",
        "nrp" => "230002001",
        "email" => "sahriska@gmail.com",
        "jurusan" => "Teknik industri",
        "gambar" => "nabila.jpg"
    ],
    [
        "nama" => "desi reni",
        "nrp" => "230002002",
        "email" => "desimenn@gmail.com",
        "jurusan" => "agribisnis",
        "gambar" => "desi.jpg"
    ],
    [
        "nama" => "serina",
        "nrp" => "230002003",
        "email" => "serinkok03@gmail.com",
        "jurusan" => "pendidikan agama islam",
        "gambar" => "serina.jpg"
    ],
    [
        "nama" => "refaldo tod fere",
        "nrp" => "230002004",
        "email" => "faldosatir@gmail.com",
        "jurusan" => "teknik kimia ",
        "gambar" => "refaldo.jpg"
    ],
    [
        "nama" => "aa adimas putra ",
        "nrp" => "230002005",
        "email" => "aadimas03@gmail.com",
        "jurusan" => "Teknik industri",
        "gambar" => "adimas.jpg"
    ],
    [
        "nama" => "apri aja ",
        "nrp" => "230002052",
        "email" => "apriaja123@gmail.com",
        "jurusan" => "teknik informatika ",
        "gambar" => "apri.jpg"
    ],
    [
        "nama" => "suci dian ",
        "nrp" => "230002007",
        "email" => "dean901@gmail.com",
        "jurusan" => "agroteknologi",
        "gambar" => "dian.jpg"
    ],
    [
        "nama" => "riski amanda ",
        "nrp" => "230002008",
        "email" => "riskikcp@gmail.com",
        "jurusan" => "Teknik sipil ",
        "gambar" => "riski.jpg"
    ],
    [
        "nama" => "uciana ",
        "nrp" => "230002009",
        "email" => "ucijaaa@gmail.com",
        "jurusan" => "pgsd",
        "gambar" => "uci.jpg"
    ],
    [
        "nama" => "yeni utami ",
        "nrp" => "230002010",
        "email" => "yeni_jj_001@gmail.com",
        "jurusan" => "Teknik lingkungan",
        "gambar" => "yeni.jpg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>NAMA    : <?= $mhs["nama"]; ?></li>
            <li>NRP     : <?= $mhs["nrp"]; ?></li>
            <li>EMAIL   : <?= $mhs["email"]; ?></li>
            <li>JURUSAN : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>
