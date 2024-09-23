<!-- page 41 -->

<?php
    $empty1 = [];
    $empty2 = array();
    $names1 = ['Harry', 'Ron', 'Hermione'];
    $names2 = array('Harry', 'Ron', 'Hermione');
    $status1 = [
        'name' => 'James Potter',
        'status' => 'dead'
    ];
    $status2 = array(
        'name' => 'James Potter',
        'status' => 'dead'
    );
    
    foreach($names2 as $name){
        echo "$name <br>";
    
    }

    foreach($status2 as $stat => $s){
        echo "$stat => $s <br>";
        
    }
 ?>