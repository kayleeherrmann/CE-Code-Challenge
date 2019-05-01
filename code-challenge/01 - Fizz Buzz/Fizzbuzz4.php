<?php //As many Fizzbuzz as you like, Very crude with no input error checking

$fizzBuzzNumber = array(3,5);
$fizzBuzzNames = array("Fizz", "Buzz", "FizzBuzz");

echo generate(1,100,$fizzBuzzNumber,$fizzBuzzNames);

function generate($lowerLimit, $upperLimit, $fizzBuzzNumber, $fizzBuzzNames){
	$total = 1;
	foreach($fizzBuzzNumber as $i){
		$total = $total * $i;
	}
	array_push($fizzBuzzNumber,$total);
		
	$output = "";
	
	foreach (range($lowerLimit, $upperLimit) as $i){
		$stepOut = "";
		for($num = count($fizzBuzzNumber)-1 ; $num >= 0; $num--){			
			if($i % $fizzBuzzNumber[$num] == 0){
				$stepOut .=  $fizzBuzzNames[$num]. "</br>";
				break;
			}
		}
		if(empty($stepOut)){
			$output .= $i . "</br>";
		}else{
			$output .= $stepOut;
		}
	}
	
	return $output;
}

