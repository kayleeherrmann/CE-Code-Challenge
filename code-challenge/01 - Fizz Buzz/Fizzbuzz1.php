<?php
//A simple implementation of the FizzBuzz problem

	foreach (range(1, 100) as $i){
		if(!($i%15)){
			echo "FizzBuzz</br>";
		}else if (!($i%5)){
			echo "Buzz</br>";
		}else if (!($i%3)){
			echo "Fizz</br>";
		}else{
			echo "$i</br>";
		}	
	}

