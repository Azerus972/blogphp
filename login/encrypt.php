
<?php

if(isset($_POST['pseudo']) 
    && isset($_POST['mdp'])){
   

    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
   
    $crypt = md5($mdp);
    $crypt2 = sha1($mdp);


    if(!is_dir("utilisateur")) {
        
        mkdir("utilisateur");
    }
    
    $new_file = fopen("utilisateur/".$pseudo.".txt", "w");
    
    fwrite($new_file, $crypt);
    
    fclose($new_file);
}


?>

<?php
$msg ="Votre espace personnel est en cours de chargement la page va s'acutaliser automatiquement...";
header('Refresh: 2; URL=../create.html');
?>


<?php

echo $msg;


?>