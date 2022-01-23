<?php
    $serveur = "localhost";
    $dbname = "sen_marche";
    $user = "root";
    $pass = "";
    
    $nom = valid_donne($_POST["nom"]);
    $prenom = valid_donne($_POST["prenom"]);
    $mail = valid_donne($_POST["mail"]);
    $motdepass = valid_donne($_POST["motdepass"]);
    

    function valid_donne($donne){
        $donne = trim($donne);
        $donne = stripslashes($donne);
        $donne = htmlspecialchars($donne);
        return $donne;
    }
    if(!empty($nom)
     && strlen($nom)<=20
     && !empty($prenom)
     && strlen($prenom)<=20
     && preg_match("^[A-Za-z '-]+$^", $prenom)
     && !empty($mail)
     && filter_var($mail, FILTER_VALIDATE_EMAIL)
     && !empty($motdepass))
     {
        try{
            //On se connecte à la BDD
            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            //On insère les données reçues
            $sth = $dbco->prepare("
                INSERT INTO clients(Nom, Prenom, Mail, motdepass)
                VALUES(:Nom, :Prenom, :Mail, :motdepass)");
            $sth->bindParam(':Nom',$nom);
            $sth->bindParam(':Prenom',$prenom);
            $sth->bindParam(':Mail',$mail);
            $sth->bindParam(':motdepass',$motdepass);
            $sth->execute();
            
            //On renvoie l'utilisateur vers la page de remerciement
            header("Location:Remerciement.inscrit.html");
         }
        catch(PDOException $e){
            echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
        }
        

     }else{
         echo " Les donnees saisies sont invalides <a href = 'inscription.html'>reessayez</a>";
        
     }

?>