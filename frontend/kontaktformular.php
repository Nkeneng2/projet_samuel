<?php include "layout.php"; ?>
    <section>
        <h3>Kontaktformular</h3>
        <div class="container">
            <a>Name:</a>
            <p>AfrikaFashion</p>
            <a>Telefon</a>
            <p>017674203790</p>
            <a>E-Mail:</a>
            <p>afrikafashion@yahoo.de</p> <br>
            <p>Sie können uns hier kontaktieren</p>
            <form action="/action_page.php">
                <!--                    <label for="fname">Vorname</label>-->
                <input type="text" id="fname" name="firstname" placeholder="Vorname">

                <input type="text" id="lname" name="lastname" placeholder="Nachname">
                <!--                    <label for="lname">Email</label>-->
                <input type="text" id="lname" name="Email" placeholder="E-mail">

                <!--                    <label for="subject">Nachricht</label>-->
                <textarea id="subject" name="subject" placeholder="Ihre Nachricht"
                          style="height:200px"></textarea>

                <input type="submit" value="Absenden">
            </form>
        </div>
    </section>

<?php include "footer.php" ?>