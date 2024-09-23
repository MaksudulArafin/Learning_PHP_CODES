<!-- page 44 -->

<?php
 $string = '';
 $array = [];
 $names = ['Harry', 'Ron', 'Hermione'];
 var_dump(empty($string)); // true
 var_dump(empty($array)); // true
 var_dump(empty($names)); // false
 var_dump(isset($names[2])); // true
 var_dump(isset($names[3])); // false