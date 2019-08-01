<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' media='screen' href='../Assets/css/login.css'>
</head>
<body>
<div id="resultat">
</div>
<div class="all">
    <form action="../backend/connexiondb.php" method="post">
        <h2>login</h2>
        <div class="container">
            <br>
            <p>
                <?php
                include "../backend/bd.php";
                if (isset($_GET['type']) && isset($_GET['message'])) {
                    Notification($_GET['message'], $_GET['type']);
                } ?>
            </p>
            <label for="uname"><b>user</b></label>
            <input type="text" placeholder="pseudo" name="nom" id="nom" required>
            <br/>
            <label for="psw"><b>Passwort</b></label>
            <input type="password" placeholder="mots de passe" name="passworde" id="pass" required>
            <br/>
            <button type="submit" name="submit">Login</button>
        </div>
        <span class="psw">kein konto ? <a href="creer_compte.php">register</a></span>
        <br/><br/>
    </form>
</div>
</body>
</html>


