<!-- page 66 -->

<?php
function loginMessage() {
    if (isset($_COOKIE['username'])) {
        return "You are " . $_COOKIE['username'];
    } else {
        return "You are not authenticated.";
    }
 }




//<!-- page 67 -->




 function printableTitle(array $book): string {
    $result = '<i>' . $book['title'] . '</i> - ' . $book['author'];
    if (!$book['available']) {
        $result .= ' <b>Not available</b>';
    }
    return $result;
 }