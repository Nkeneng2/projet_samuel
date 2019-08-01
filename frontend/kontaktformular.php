<?php include "layout.php"; ?>
    <section>
        <h3>Kontaktform</h3>
        <div class="container">
            <a>Name:</a>
            <p>AfrikaFashion</p>
            <a>Telefon</a>
            <p>017674203790</p>
            <a>E-Mail:</a>
            <p>afrikafashion@yahoo.de</p> <br>
            <p>Lorem ipsum dolor sit amet.</p>
            <form action="/action_page.php">
                <input type="text" id="fname" name="firstname" placeholder="Vorname">
                <input type="text" id="lname" name="lastname" placeholder="Nachname">
                <input type="text" id="lname" name="Email" placeholder="E-mail">
                <textarea id="subject" name="subject" placeholder="Ihre Nachricht"
                          style="height:200px"></textarea>
                <input type="submit" value="Absenden">
            </form>
        </div>
    </section>
<?php include "footer.php" ?>