<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./scss/style.css">
    <title>Gmail</title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <a class="header__logo" href="/">
                <img src="./image/mail.png" alt="gmail">
                <span>Gmail</span>
            </a>
            <ul class="header__navlinks">
                <li><a href="#">POUR LES PROS</a></li><li><a href="#">CONNEXION</a></li><li><a class="active" href="#formulaire">CRÉER UN COMPTE</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <a class="scroll" href="#formulaire">
            <img src="./image/arrow.png" alt="descendre">
        </a>
        <section class="hero">
            <div class="content">
                <h1>Retrouver la fluidité et la simplicité de Gmail sur tous vos apareil</h1>
                <a class="btn" href="#">CRÉER UN COMPTE</a>
            </div>

        </section>
        <section class="form">
            <h1>
                Une boîte de réception entièrement repensée
            </h1>
            <p>Avec les nouveaux onglets personalisables, réperez immédiatement les nouveaux messages et choississez ceux que vous souhaitez lire en priorité.</p>
            <h2 id="warning" class="warning">Tous les champs sont obligatoires</h2>
            <form id="formulaire" class="formu" action="login.php" method="POST">
                <fieldset>
                    <legend>Créer un compte</legend>
                    <label for="nom">Nom *</label>
                    <input id="nom" name="nom" type="text" placeholder="Votre Nom" aria-required="true">
                    <label for="prenom">Prénom *</label>
                    <input id="prenom" name="prenom" type="text" placeholder="Votre prenom" aria-required="true">
                    <label for="mail">Mail *</label>
                    <input id="mail" name="mail" type="text" placeholder="Votre mail" aria-required="true">
                    <label for="psw">Nom *</label>
                    <input id="psw" name="psw" type="password" placeholder="Votre mot de passe" aria-required="true">
                    <input id="submit" type="submit" value="VALIDER VOTRE COMPTE" name="valider">
                   
                </fieldset>
            </form>
        </section>
    </main>
    <script src="./js/script.js"></script>
</body>
</html>