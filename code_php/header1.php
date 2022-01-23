
<?php require("_header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./header.css">

    <title>Accueil</title>
</head>
<body>
<section id="hero">
        <header>
           <a href="marche3.php"><img  class="logo" src="./img/N.png" alt="monlogo" ></a>
            <h4>Sen Marche</h4>
            <nav>
                <ul class="nav-link">
                    <li><a href="./profil.php">Profil</a></li>
                    <li><a href="./marche3.php">Marche</a></li>
                    <li><a href="./panier.php">Mes produits <span>(<?= number_format($panier->count());?>)</span></a></li>
                    
                </ul>
            </nav>
            <button><a href="./logout.php" class="cta"></a>Deconneter</button>
        </header>
    </section>
</body>
</html>