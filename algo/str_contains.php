<?php
function testStrContains($haystack, $needle)
{
	if(strpos ($haystack , $needle) !== false){				
		return true;
	}else{
		return false;
	}

}


function testSchaltjahr($year, $expectedResult)
{
	$actualResult = isSchaltjahr($year);
	if ($actualResult === $expectedResult)
	{
		echo 'Ok<br />';
	}
	else
	{
		echo 'Falsch: isSchaltjahr(' . $year . ') sollte ' . $expectedResult . ' zurueckgeben. (Ist: ' . $actualResult . ')<br />'; 	
	}
}





testStrContains('Hallo', 'Ha', true);
testStrContains('Hallo', 'ha', false);
testStrContains('Hallo', 'all', true);
testStrContains('Hallo', 'Hallo und noch mehr', false);

// testStrContains('Hallo', '', ???);