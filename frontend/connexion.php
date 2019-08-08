<?php include "layout.php"?>
<div class="card-form-login">
    <h1>login</h1>
    <form action="../backend/connexiondb.php" class="form-login" method="post">
        <input type="text" name="nom" placeholder="username" class="form-login-input"><br>
        <input type="password" name="passworde" placeholder="password" class="form-login-input"><br>
        <button class="form-login-button" type="submit">Submit</button>
    </form>
    <p> not member ? <a href="creer_compte.php">Sign in</a></p>
</div>
