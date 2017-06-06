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

if (!is_dir('posts')){
  mkdir ('posts');
}

$textzone = $_GET['contenu'];
$titre = $_GET['titre'];
$file = fopen('posts/' .$titre . ".txt", "w");
fwrite($file, "Contenu :".$textzone);
fclose($file);


?>

<script>
location.href="index.php";
       </script>

</body>
</html>