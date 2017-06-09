<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" type="text/css" href="index.css">
    <title>Document</title>
</head>

<header>


<?php
$msg ="Votre espace personnel est en cours de chargement la page va s'acutaliser automatiquement...";
header('Refresh: 4; URL=../create.html');
?>



</header>

<body>





    <h1><strong> Félicitation Vous êtes connecté!</strong></h1>




<?php

echo $msg;


?>
</body>


</html>