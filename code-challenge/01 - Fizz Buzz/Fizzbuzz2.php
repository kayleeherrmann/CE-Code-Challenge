<?php
//Another simple implementation of the FizzBuzz problem no.2

	$output= "";
	
	for($i=1; $i<100; $i++){
		
		switch(0){
			case $i % 15 : $output .= "FizzBuzz "; break;
			case $i % 5 : $output .= "Buzz "; break;
			case $i % 3 : $output .= "Fizz "; break;
			default: $output .= $i ; break;
		}
		$output .= "</br>";
	}
		
	echo $output;	
	

	

