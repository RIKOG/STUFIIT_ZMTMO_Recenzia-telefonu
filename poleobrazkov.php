<?php
function get_images_from_directory($dir_path, $parent_element="td", $array_of_width) { // get_images_from_directory("imagesSW")
    $obsah = preg_grep('/^([^.])/', scandir ($dir_path));

    foreach ( $obsah as $index => $name_of_image ) {
       echo "<" . $parent_element . " align=\"center\">
                <img src=\""  . $dir_path . "/" . $name_of_image . "\" width=\"" . $array_of_width[$index - 2] . "\"/>
             </" . $parent_element . ">";
    }
}
?>