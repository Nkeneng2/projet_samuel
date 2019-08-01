<!--<div class="footer">-->
<footer>
    <nav>
        <a href="über%20uns.php">About us</a>
        <a href="kontaktformular.php">Kontakt form</a>
        <a href="impressum.php">Impressum</a>
    </nav>
</footer>
<script src="../Assets/script/jquery.min.js"></script>
<script src='../Assets/script/main.js'></script>

<script>
    function produktentfernen(key) {
        $.ajax({
            url: "../backend/supprimer_objet.php",
            method: 'POST',
            dataType: 'html',

            data: {
                key: key
            },
            success: function (response) {
                $("#page").html(response);
            }
        })
    }
</script>
</body>
</html>