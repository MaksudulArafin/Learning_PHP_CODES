<!-- page 43 -->

<?php
    $status = [
        'name' => 'James Potter',
        'status' => 'dead'
    ];
    print_r($status);
    echo "<br \>";
    unset($status['status']);
    print_r ($status);
 ?>