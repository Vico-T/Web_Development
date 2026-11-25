<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="producten">

    <?php
    include "includes/header.php";
    $producten_array = [
        'Katana',
        'Naginata',
        'Chineese Dadao'
    ];

    
    include ('includes/db.php');
    $producten = $pdo->query("SELECT * FROM producten")->fetchAll();
    echo "Er staan " . count($producten) . " producten in de database.";

    var_dump($producten);


    foreach ($producten as $product){
        
        ?>

        <div>
            <div>naam: <?php echo $product['naam'];  ?></div>
            <div>prijs: <?php echo $product['prijs']; ?> </div>
        </div>

        <?php


    }

    ?>


</div>
</body>
</html>