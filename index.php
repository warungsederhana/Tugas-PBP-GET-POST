<?php

    // database
    $semua_soal = [
        [
            "id" => "1",
            "soal" => "Siapakah Presiden pertama indonesia ? ",
            "pilihan" => ["Jokowi","Soekarno","Trump","Megawati"] 
        ],
        [
            "id" => "2",
            "soal" => "Siapakah Orang Terkaya di dunia ?",
            "pilihan" => ["Jokowi","Soekarno","Trump","Megawati"] 
        ],
        [
            "id" => "3",
            "soal" => "Berapa Banyak Jumlah Planet di Tata Surya ?",
            "pilihan" => ["Jokowi","Soekarno","Trump","Megawati"] 
        ],
        [
            "id" => "4",
            "soal" => "Jurusan manakah yang tidak terdapat di FSM ?",
            "pilihan" => ["Biotek","Fisika","Elektro","Informatika"] 
        ],
        [
            "id" => "5",
            "soal" => "Siapakah Presiden pertama indonesia ? ",
            "pilihan" => ["Jokowi","Soekarno","Trump","Megawati"] 
        ],
        [
            "id" => "6",
            "soal" => "Siapakah Presiden pertama indonesia ? ",
            "pilihan" => ["Jokowi","Soekarno","Trump","Megawati"] 
        ],
        [
            "id" => "7",
            "soal" => "Siapakah Orang Terkaya di dunia ?",
            "pilihan" => ["Jokowi","Soekarno","Trump","Megawati"] 
        ],
        [
            "id" => "8",
            "soal" => "Berapa Banyak Jumlah Planet di Tata Surya ?",
            "pilihan" => ["Jokowi","Soekarno","Trump","Megawati"] 
        ],
        [
            "id" => "9",
            "soal" => "Siapakah Presiden pertama indonesia ? ",
            "pilihan" => ["Jokowi","Soekarno","Trump","Megawati"] 
        ],
        [
            "id" => "10",
            "soal" => "Siapakah Presiden pertama indonesia ? ",
            "pilihan" => ["Jokowi","Soekarno","Trump","Megawati"] 
        ]

    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas GET</title>
    <!-- nnt dibuat khusus aja lagi buat file ini  -->
    <!-- <link rel="stylesheet" href="style/style.css"> -->
</head>
<body>
    <section id="container">
        <h1>Kumpulan Soal</h1>
        <ul>
            <?php foreach($semua_soal as $sool) : ?>
            <li>
                <a href="TemplateSoal.php?id=<?= $sool['id']?>&soal=<?= $sool['soal']?>&pilihan1=<?= $sool['pilihan'][0] ?>&pilihan2=<?= $sool['pilihan'][1] ?>&pilihan3=<?= $sool['pilihan'][2] ?>&pilihan4=<?= $sool['pilihan'][3] ?>">
                    nomer soal <?= $sool["id"]; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    
</html>