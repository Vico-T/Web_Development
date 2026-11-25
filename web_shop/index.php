<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swordsswap</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    include ('includes/menubalk.php');
    include ('includes/scrollbalk.php');
    include ('includes/db.php');
     $producten_deel1 = $pdo->query("SELECT * FROM producten WHERE id<7")->fetchAll();
     $producten_deel2 = $pdo->query("SELECT * FROM producten WHERE id>6")->fetchAll();

    ?>
    <h3>Welcome to Sword Swap, the place for your sword</h3>
    <!-- continent -->
    <h2>Azië</h2>
        <div class="producten">
        <!-- producten php -->
         <?php
         foreach ($producten_deel1 as $product){
        
        ?>
            <div class="card">
                <br>
                <img src="images/<?php echo $product['afbeelding'];?>">
                <div class="card-content">
                    <h4><?php echo $product['naam']; ?></h4>

                    <?php if($product['sale'] > "0.00")
                    { ?>
                        <p class="sale">SALE</p>
                        <p class="price"><s>&euro;<?php echo $product['prijs']; ?></s></p>
                        <p>&euro;<?php echo $product['sale']; ?></p>
                    <?php 
                    }else{?>
                    <p>&euro;<?php echo $product['prijs']; ?></p>
                    <?php 
                    }?>
                    <a href="detailpagina.php?id=<?php echo $product['id']?>"><button class="Details">Details</button></a>
                </div>
            </div>
        <?php
        }
        ?>   
        </div>
    
        <!-- continent -->
    <h2>Europa</h2>
        <div class="producten">
        <!-- producten php -->
         <?php
         foreach ($producten_deel2 as $product){
        
        ?>
            <div class="card">
                <br>
                <img src="images/<?php echo $product['afbeelding'];?>">
                <div class="card-content">
                    <h4><?php echo $product['naam']; ?></h4>

                    <?php if($product['sale'] > "0.00")
                    { ?>
                        <p class="sale">SALE</p>
                        <p class="price"><s>&euro;<?php echo $product['prijs']; ?></s></p>
                        <p>&euro;<?php echo $product['sale']; ?></p>
                    <?php 
                    }else{?>
                    <p>&euro;<?php echo $product['prijs']; ?></p>
                    <?php 
                    }?>
                    <a href="detailpagina.php?id=<?php echo $product['id']?>"><button class="Details">Details</button></a>
                </div>
            </div>
        <?php
        }
        ?>   
        </div>

    <lu></lu>
    <li class="bottom"><a href="#" class="bottom">About us</a></li>
    <li class="bottom"><a href="service.php" class="bottom">Terms and Services</a></li>
    </lu>
</body>

</html>