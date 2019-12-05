    <?php

    if (isset($_POST['submit'])) {

        // CHECK FOR EMPTY FIELDS
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
                echo 'All Fields Are Required';
            } else {
                $name = strip_tags($_POST['name']);
                $email = strip_tags($_POST['email']);
                $comment = strip_tags($_POST['comment']);
                $fp = fopen("C:/WinNMP/WWW/Projekt.ZMTMO/comments.txt","a");

                // WRITE COMMENT TO FILE
                if (@fwrite($fp, $id.'|'.$date.'|'.$name.'|'.$email.'|'.$comment."\n")) {
                    echo 'Your Comment Was Added';
                    $name = "";
                    $email = "";
                    $comment = "";
                    fclose($fp);
                } else {
                    echo 'Your Comment Was Not Added';
                    fclose($fp);
            }
        }
    }

    ?>