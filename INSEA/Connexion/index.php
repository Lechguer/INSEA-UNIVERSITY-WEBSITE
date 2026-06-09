<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connexion – INSEA</title>
<link rel="stylesheet" href="index.css">
</head>
<body>

<div class="wrapper">
    <div class="card">

        <!-- GAUCHE : LOGO + FORMULAIRE -->
        <div class="left">
            <a href="../Page_principale/home.php" class="logo-link">
                <img src="Logo.png" alt="INSEA" class="logo">
            </a>

            <h1>Connexion</h1>
            <p>Accédez à votre espace</p>

            <form action="log.php" method="POST">
                <div class="input-box">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box password-box">
                    <input type="password" name="password" id="password" required>
                    <label>Mot de passe</label>
                    <span class="toggle" onclick="togglePassword()">👁</span>
                </div>

                <button id="loginBtn" type="submit">Se connecter</button>
            </form>
        </div>

        <!-- DROITE : IMAGE SEULE, SANS TEXTE -->
        <div class="right">
            <img src="photo.png" alt="" class="illustration">
        </div>

    </div>
</div>

<script src="script.js"></script>
</body>
</html>