<!-- KOMENTAROVA FORMA -->
    <center>
    <p>
    <form name="input" method="post" action="skript.php">
    <input type="text" name="name" id="name" placeholder="Vaše Meno">
    <br>
    <input type="text" name="email" id="email" placeholder="Emailová adresa">
    <br>
    <textarea name="comment" id="comment" placeholder="Tu mi môžete zanechať Váš komentár."><?php echo $comment ?></textarea>
    <br>
    <input type="submit" name="submit" value="Spýtať sa">
    </form>
    </p>
    </center>
<!-- ZOBRAZOVANIE KOMENTAROV -->
    <?php

    $file = fopen("C:/WinNMP/WWW/Projekt.ZMTMO/comments.txt", "r");

    // VPISOVANIE KOMENTAROV
    while (!feof($file) ) {
    $line_of_text = fgets($file);
    $parts = explode('|', $line_of_text);
   // <!-- TATO CAST JE NASCHVAL ALWAYS TRUE -->
    if ($parts[0] == $parts[0]) {
    print $parts[0] . $parts[2];
        }
    }
    fclose($file);
    ?>