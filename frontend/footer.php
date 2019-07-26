<!--<div class="footer">-->
    <footer>
        <nav>
              <a href="über%20uns.php">über uns</a>
                <a href="kontaktformular.php">Kontaktformular</a>
                <a href="impressum.php">Impressum</a>
        </nav>
    </footer>
    <script src="../Assets/script/jquery.min.js"></script>
<script>
    function  produktentfernen(key) {
        $.ajax({
            url: "../backend/supprimer_objet.php",
            method: 'POST',
            dataType: 'html',

            data: {
                key: key
            },
            success: function (response) {
                // history.pushState({}, "", "http://localhost:8888/projet_samuel/");
                // alert(response);
                $("#page").html(response);
            }
        })
    }
</script>
    </body>
    </html>