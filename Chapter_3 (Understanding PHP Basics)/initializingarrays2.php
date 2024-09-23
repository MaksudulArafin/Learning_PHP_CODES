<!-- page 42 -->

<?php
    $books = [
        '1984' => [
            'author' => 'George Orwell',
            'finished' => true,
            'rate' => 9.5
        ],
        
        'Romeo and Juliet' => [
            'author' => 'William Shakespeare',
            'finished' => false
        ]
    ];

    foreach ($books as $title => $details) {
        echo "Title: $title\n";
        echo "Author: " . $details['author'] . "\n";
        echo "Finished: " . ($details['finished'] ? 'Yes' : 'No') . "\n";
        
        // Check if rating exists and print it
        if (isset($details['rate'])) {
            echo "Rating: " . $details['rate'] . "\n";
        }
        
        // Print a blank line for better readability
        echo "\n";
    }
    ?>