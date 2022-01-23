<?php
require("header1.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_profil.css">
    <title>Document</title>
</head>
<body>
<div class="profil">
        <div class="profil-image">
            <img src="./img/bou.jpeg" alt="profile">
        </div>
      </div> 
      <div class="monbtn">
        <i class="fas fa-arrow-square-left"></i>
        <input type="submit" value="Retour"> 
      </div>   
      <div class="wrapper">
          
          <div class="form">
             <div class="inputfield">
                <label>Votre nom</label>
                <input type="text" class="input">
             </div>  
              <div class="inputfield">
                <label>Votre email</label>
                <input type="text" class="input">
             </div>  

             <div class="inputfield">
                <label>Informations Additionnelles</label>
               <textarea class="input" name="" id="" cols="30" rows="10"></textarea>
             </div>  
            <div class="inputfield">
              <button class="btn">Edit</button>
            </div>
          </div>
      </div>	
</body>
</html>