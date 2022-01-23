<?php
require("_header.php");
if(isset($_GET['Id'])){
    $produit= $DB->query('SELECT Id FROM produits WHERE Id=:Id', array('Id' => $_GET['Id']));
if(empty($produit)){
    die("Ce produit n'existe pas");
}
$panier->add($produit[0]->Id);
die('Le produit a bien ete ajoutee a votre panier <a href="javascript:history.back()"> retourner sur la catalogue</a>');
}else{
    die("Vous n'avez pas selectionner de produit");
}
?>