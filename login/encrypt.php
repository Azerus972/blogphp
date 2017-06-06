<?php


$pseudo = "admin";
$mdp = "admin";
$crypt = md5($mdp);
$crypt2 = sha1($mdp);
if(!is_dir("utilisateur")){

mkdir("utilisateur", 755, true);


}

$new_file = fopen("utilisateur/".$pseudo.".txt","w");
fwrite($new_file,$crypt);
fclose($new_file);


?>