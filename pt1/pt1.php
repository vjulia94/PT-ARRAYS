<?php


$nombres = array(0,1,2,3,4,5);
$res = FactorialArray($nombres);


			

print_r($res);


function FactorialArray($nombres)
{
	if (!is_array($nombres)){
return false;
			}
			
	$factorials = array();
	
		foreach ($nombres as &$numero){
			if (!is_int($numero)){
				return false;
			}
			
			
		$factorials[]=factorial($numero);
	}
	
	return $factorials;
}

function factorial($numero){
	
$factorial=1;
for($i=$numero; $i>=1; $i--){
		
		$factorial *= $i;
		
	}
	
	return $factorial;

}

?>