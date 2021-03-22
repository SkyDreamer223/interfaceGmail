<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./scss/style.css">
    <title>Login</title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <a class="header__logo" href="/">
                <img src="./image/mail.png" alt="gmail">
                <span>Gmail</span>
            </a>
            <ul class="header__navlinks">
                <li><a href="#">POUR LES PROS</a></li><li><a class="active" href="#">CONNEXION</a></li><li><a href="index.html">CRÉER UN COMPTE</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="form">
            <h1 id="h1"><?php  echo 'Bienvenue dans votre espace '.$_POST['prenom']; ?></h1>

            <h2 class="warningb" id="warningH2">
                <?php
                    include_once("./src/inscription.inc.php");
                ?>
            </h2>
            
            <form class="formu" action="#" method="GET">
                <fieldset>
                    <legend>Connectez à votre compte</legend>
                    <label for="login">Mail ou login *</label>
                    <input type="text" name="login" id="login">
                    <label for="mdp">Mot de passe *</label>
                    <input type="password" name="mdp" id="mdp">
                    <p><?php ?></p>
                </fieldset>
                
            </form>
        </section>
        
    </main>
    <script src="./js/login.js"></script>
</body>
</html>