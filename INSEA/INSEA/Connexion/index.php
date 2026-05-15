<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Login UI</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">

    <!-- 🔥 MAIN CARD -->
    <div class="card">

        <!-- LEFT LOGIN -->
        <div class="left">
            <h1>Connexion</h1>
            
            <p></p>
            <form action="log.php" method="POST">

            <div class="input-box">
            <input type="text" name="email" required>
            <label>Email</label>
            </div>

            <div class="input-box password-box">
            <input type="password" name="password" id="password" required>
            <label>Mot de passe</label>
            <span onclick="togglePassword()">👁</span>
    </div>

    <button id="loginBtn" type="submit">Login</button>

</form>
          
        </div>
        <!-- RIGHT SIDE -->
        <div class="right">
            <div class="right-content">
                <h1>Bienvenue dans votre<br>espace</h1>
                <p>Connectez vous !</p>
            </div>

            <img src="photo.png" class="illustration">
          
        </div>


    </div>
   
   

</div>
<a href="/INSEA/Page_principale/home.html">
    <img src="Logo.png" class="logo">
</a>
<script src="script.js"></script>
</body>
</html>
   

   
   

