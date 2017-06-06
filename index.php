<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mon super blog</title>
</head>
<body>

  <h1>Mon super blog !</h1>

  <?php
  
  $files = scandir("posts");
  foreach($files as $file) {
      if (is_dir($file)) {
          continue;
      }
      echo '<h2>'.basename($file, ".txt").'</h2>';
      $content = file_get_contents('posts/'.$file);
      echo '<p>'.$content.'</p>';

echo '<form  method="POST" action="create.php">
     <input type="hidden" name="mod" value="'.$file.'">
<input type="submit" value="modifier">
 </form>';



     echo '<form  method="GET" action="delete.php">
     <input type="hidden" name="inp" value="'.$file.'">
<input type="submit" value="delete">
 </form>';
 
 
 
 
  }
 
 
  ?>
  </html>