<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $servname = 'localhost';
   $dbname = 'sen_marche';
   $user = 'root';
   $pass = '';
   try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE TABLE Produits(
            Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Nom VARCHAR(30) NOT NULL,  
            prix INT NOT NULL,
            nomVendeur VARCHAR(50))";
    
    $dbco->exec($sql);
    echo 'Table bien créée !';
}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}
?>
</body>
</html>