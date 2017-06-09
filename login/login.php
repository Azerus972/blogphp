<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" type="text/css" href="login.css">

    <title>Login My Blog</title>

</head>

<header>


<nav>
            <ul>
                <li><a href="login.php">Connexion</a></li>
                <li><a href="mailto:kevin.marous@gmail.com">CONTACT</a></li>
            </ul>
</nav>


</header>

<body>

    <style>
        body {
            background-color: grey;
            display: flex;
            flex-direction: column;
        }
    </style>


    <form action="auth.php" method="POST">

        <label>Nom d'utilisateur</label>
        <input type="text" name="username" placeholder="Nom d'utilisateur">

        <label>Mot de Passe</label>
        <input type="password" name="password" placeholder="Tapez votre mot de passe ici">

        <button> Se connecter </button>



    </form>



</body>

</html>