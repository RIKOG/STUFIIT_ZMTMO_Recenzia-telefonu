 <!-- PISANIE KOMENTU A FORMA -->


    <div class="clear"></div>

    <!-- COMMENT FORM -->
    <form name="input" method="post" action="skript.php">

    <input type="text" class="comment-name" name="name" id="name" placeholder="Your Name">
    <input type="text" class="comment-email" name="email" id="email" placeholder="Email Address">
    <textarea name="comment" id="comment" placeholder="What's Your Question or Comment?"><?php echo $comment ?></textarea>
    <input class="button" type="submit" name="submit" value="Ask A Question &middot; Comment">
    </form>

    <div class="clear"></div>

    <!-- DISPLAY COMMENTS -->
    <?php

    $file = fopen("C:/WinNMP/WWW/Projekt.ZMTMO/comments.txt", "r");

    // WRITE EACH COMMENT
    while (!feof($file) ) {
    $line_of_text = fgets($file);
    $parts = explode('|', $line_of_text);
        if ($parts[0] == $postid) {
        print "<div class='name-comment'>" . $parts[2] . " </div><div class='text-comment'>" . $parts[4] . "</div><div class='date-comment'>" . $parts[1] . "</div>";
        }
    }
    fclose($file);

    ?>