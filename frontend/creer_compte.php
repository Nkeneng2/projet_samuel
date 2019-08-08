<?php include "layout.php" ?>
<div class="card-form-login">
    <h1>Create account</h1>
    <form action="../backend/creer_comptedb.php" class="form-login" method="post">
        <input type="text" name="nom" placeholder="username" class="form-login-input" required>
        <input type="password" name="passworde" placeholder="password" class="form-login-input" required><br>
        <input type="password" name="confirmpassword" placeholder="Confirm password" class="form-login-input" required><br>
        <button class="form-login-button" type="submit">Submit</button>
    </form>
    <p>already member ? <a href="connexion.php">Log in</a></p>
</div>
<?php include "footer.php"; ?>
