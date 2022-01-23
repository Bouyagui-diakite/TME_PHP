

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

$servername = 'localhost';
$username = 'root';
$dbname = "sen_marche";
$password = '';

$dbco = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $dbco->prepare("SELECT * FROM clients WHERE Mail = ?");
$query->execute([$_POST['_email']]);

$user = $query->fetch();
if($user){
    header("Location: marche3.php");
}
else{
    header("Location: loggedError.php");
}

?>
</body>
</html>