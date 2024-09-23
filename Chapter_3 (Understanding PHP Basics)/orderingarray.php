<!-- page 45 -->

<?php
 $properties = [
    'firstname' => 'Tom',
    'surname' => 'Riddle',
    'house' => 'Slytherin'
 ];
 $properties1 = $properties2 = $properties3 = $properties4 = $properties5 = $properties6 = $properties;
 sort($properties1);
 print_r($properties1);

 rsort($properties2);
 print_r($properties2);

 asort($properties3);
 print_r($properties3);


 arsort($properties4);
 print_r($properties4);

ksort($properties5);
 print_r($properties5);

krsort($properties6);
 print_r($properties6);

 
