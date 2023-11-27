<?php
/**
 * @author Elias De Hondt
 * @see https://eliasdh.com
 * @since 26/09/2023
 */

// Haal opmerkingen op uit het tekstbestand en toon ze
$comments = file_get_contents("../../data/comments-vlogs.txt");
$commentLines = explode("\n", $comments);

foreach ($commentLines as $comment) {
    if (!empty($comment)) {
        echo '<div class="comment">' . $comment . '</div>';
    }
}
?>
