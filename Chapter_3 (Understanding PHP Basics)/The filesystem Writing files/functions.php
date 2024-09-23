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


//  page 71



function bookingBook(array &$books, string $title): bool {
    foreach ($books as $key => $book) {
        if ($book['title'] == $title) {
            if ($book['available']) {
                $books[$key]['available'] = false;
                return true;
            } else {
                return false;
            }
        }
    }
    return false;
 }

//  page 72


function updateBooks(array $books) {
    $booksJson = json_encode($books);
    file_put_contents(__DIR__ . '/books.json', $booksJson);
 }