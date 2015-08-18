<?php

function array_contains($array, $value) {
	
}

testContains(array(1, 4, 5), 2, false);
testContains(array(1, 4, 5), 1, true);
testContains(array(), 1, false);
testContains(null, 1, false);
