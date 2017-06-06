

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php


$json_source = file_get_contents("auth.json");
$json_data = json_decode($json_source);



// echo htmlspecialchars($json_data->username);
// echo htmlspecialchars($json_data->password);


if ($_POST ['username'] == $json_data->username  && $_POST ['password'] == $json_data->password ){

echo 'logged in';
echo '<script> location.href="index.php"</script>';

}

else {

echo 'bad infos so, your are not logged try again';



}

?>


</body>
</html>