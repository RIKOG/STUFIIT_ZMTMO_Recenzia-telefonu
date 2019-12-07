<?php
$obsah = preg_grep('/^([^.])/', scandir ("./images"));

foreach ( $obsah as $index => $path_of_image ) {
     echo "<img src=\"/images/" . $path_of_image . "\"/>";
}
?>