    <?php
    if (isset($_POST['submit'])) {
        // NEZNASAMPHP
        $required = array('name', 'email', 'comment');
        $error = false;
        foreach($required as $field) {
            if (empty($_POST[$field])) {
            $error = true;
            }
        }
        if ($error) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $comment = $_POST['comment'];
                echo 'Je potreba vyplnit vsetko';
            } else {
                $name = strip_tags($_POST['name']);
                $email = strip_tags($_POST['email']);
                $comment = strip_tags($_POST['comment']);
                $fp = fopen("C:/WinNMP/WWW/Projekt.ZMTMO/comments.txt","a");

                if (@fwrite($fp, $name. ' ' . '|' . ' '.$email. ' ' . '|' . ' ' .'- napísal - '.$comment. '<br>' . "\n")) {
                    echo 'Koment bol pridany';
                    $name = "";
                    $email = "";
                    $comment = "";
                    fclose($fp);
                } else {
                    echo 'Komment nebol pridany';
                    fclose($fp);
            }
        }
    }
    ?>