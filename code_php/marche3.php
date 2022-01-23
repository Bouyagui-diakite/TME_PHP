<?php
require("header1.php");?>
<?php

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_Marche.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
<div class="parent">
         <?php $products = $DB->query('SELECT * FROM produits');?>
         <?php foreach ( $products as $produit ): ?>
             <div class="div">
                 <div class="items">
                     <img src="./img/<?= $produit->Id; ?>.PNG">
                 </div>
                 <div class="items-button">
                    
                 <a type="button" href="addpanier.php?Id=<?= $produit->Id; ?>"> <i class="fas fa-cart-plus"></i></a>
                         <a class="navbar-brand " aria-current="page" data-bs-target="#modal2<?=$produit->Id;?>" data-bs-toggle="modal" href="addpanier.php?Id=<?= $produit->Id;?>">
                         <i class="fas fa-exclamation-circle"></i></a>
     
                     <!-- Modal -->
                     <div class="modal fade" id="modal2<?=$produit->Id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title text-uppercase text-center" id="exampleModalLabel">
                                         Infromation Produit
                                     </h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                     <div class="col-4 mx-auto text-center">
                                     <img src="./img/<?= $produit->Id; ?>.PNG" width="200px" height="200px">
                                     </div class = "modal-description">
                                     <p>Le MacBook Air à 1 399 € est une proposition intéressante. Ce modèle a connu quelques baisses de prix au cours des dernières années.</p>
                                     
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                         Fermer
                                     </button>
                                 </div>
                             </div>
     
                         </div>
                     </div>
                    <!--end modal1-->
                </div>
                <div class="description">
                    <strong><?=  $produit->Nom."<br>"?></strong>
                    <a href="" class="price"><strong>prix: <?= $produit->prix?>$</strong></a>
                </div>
            </div>         
            <?php endforeach ?>
</body>
</html>
