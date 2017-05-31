<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    
<?php

var_dump ($_POST);

$textzone = $_POST['textzone'];
$titre = $_POST['titre'];
$file = fopen($titre . ".txt", "w");
fwrite($file, "Titre :".$titre. "/n". "Contenu :".$textzone);
fclose($file);




?>


</body>
</html>