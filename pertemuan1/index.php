<?php 
    $ikanhias = [
        ["Jenis" => "Discus",
        "Harga" => "40000",
        "Pakan" => "Cacing",
        "Asal" => "Indonesia",
        "Gambar" => "discus.png"
    ],
        ["Jenis" => "Pbass",
        "Harga" => "100000",
        "Pakan" => "Ikan hidup",
        "Asal" => "Amerika",
        "Gambar" => "discus.png"
    ],
        ["Jenis" => "Glofish",
        "Harga" => "5000",
        "Pakan" => "pelet",
        "Asal" => "Thailand",
        "Gambar" => "discus.png"
        ]   
        
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ikan</title>
    <!-- link  -->
    <link rel="stylesheet" href="style.css"/>
    <!-- end link -->
</head>
<body>
    <h1>Daftar Ikan</h1>    

    <?php foreach ( $ikanhias as $ikan ) : ?>

    <ul>
        
        <li>Jenis : <?= $ikan ["Jenis"]; ?></li>
        <li>Harga : <?= $ikan ["Harga"]; ?></li>
        <li>Pakan : <?= $ikan ["Pakan"]; ?></li>
        <li>Asal :<?= $ikan ["Asal"]; ?></li>
        <li>
            <img src="img/<?= $ikan["Gambar"]; ?>">
        </li>
    </ul> 

    <?php endforeach; ?>
    
</body>
</html>