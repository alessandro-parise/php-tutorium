<?php

function findKey($array, $value) {

}

testFindKey(array(1, 2, 3, 4, 5), 2, 2);

testFindKey(array(5 => 1, 4 => 2, 3 => 3, 2=> 4, 1 => 5), 2, 4);

testFindKey(array('apfel' => 1, 'birne' => 2, 'banane' => 3), 1, 'apfel');
testFindKey(array('apfel' => 1, 'birne' => 2, 'banane' => 1), 1, 'apfel'); 

testFindKey(array('apfel' => 1, 'birne' => 2, 'banane' => '2'), '2', 'banane');


