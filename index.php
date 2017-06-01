<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Mon BLog</h1>





<?php


$directory = 'posts';

$results_array = array();

if (is_dir($directory))
{
        if ($handle = opendir($directory))
        {
                
                while(($file = readdir($handle)) !== FALSE)
                {
                        $results_array[] = $file;
                        
                }
                closedir($handle);
        }
}


foreach(glob("$directory/*") as $file) {
    foreach(file($file) as $line) {
        echo $line . "<br />";
    }
}


?>



</body>
</html>