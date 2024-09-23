<!-- page 49,50 -->

<?php
    $looking = isset($_GET['title']) || isset($_GET['author']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
</head>
<body>
    <p>You are <?php echo $_COOKIE['username1']; ?></p>
    <p>Are you looking for a book? <?php echo (int) $looking; ?></p>
    <p>The book you are looking for is</p>
    <ul>
        <li><b>Title</b>: <?php echo $_GET['title']; ?></li>
        <li><b>Author</b>: <?php echo $_GET['author']; ?></li>
    </ul>
 </body>
    </ul>
</body>
</html>