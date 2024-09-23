<!-- page 66&69 -->

<?php require 'functions_for_logging.php' ?>
<?php require 'functions.php' ?>
<!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bookstore</title>
    </head>
    <body>
        
        <p><?php
            
            echo loginMessage(); ?></p>
        <?php
            if (isset($_GET['title']) && isset($_GET['author'])) {
        ?>
            <p>The book you are looking for is</p>
            <ul>
                <li><b>Title</b>: <?php echo $_GET['title']; ?></li>
                <li><b>Author</b>: <?php echo $_GET['author']; ?></li>
            </ul>
        <?php
        } else {
        ?>
            <p>You are not looking for a book?</p>
            <?php 
        }
        $booksJson = file_get_contents(__DIR__ . '/books.json');
        $books = json_decode($booksJson, true);
        ?>
        <ul>
            <?php foreach ($books as $book): ?>
            <li><?php echo printableTitle($book); ?> </li>
            <?php endforeach; ?>
        </ul>
    </body>
 </html>