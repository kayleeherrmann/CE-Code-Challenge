<?php
	//Another, slightly dramatic implementation of the FizzBuzz problem 
	
	$aFizzBuzz = new FizzBuzz(3,5);
	echo $aFizzBuzz->generate(1,100);
	
	
	class FizzBuzz{
		
		private $fizzNum;
		private $buzzNum;
		private $output;
		
		function __construct($fizzNum, $buzzNum){
			if($fizzNum == 0 ||  $buzzNum == 0){
				echo ("Error: '0' may not be used as a FizzBuzz number.");
				die();
			}
			
			$this->buzzNum = $buzzNum;
			$this->fizzNum = $fizzNum;
		}
		
		function generate($lowerLimit, $upperLimit){
			
			if($lowerLimit % ($this->fizzNum * $this->buzzNum) == 0){
				$this->output.= "FizzBuzz</br>";
			}else if ($lowerLimit % $this->buzzNum  == 0){
				$this->output.="Buzz</br>";
			}else if ($lowerLimit % $this->fizzNum  == 0){
				$this->output.= "Fizz</br>";
			}else{
				$this->output.= "$lowerLimit</br>";
			}
			
			if($lowerLimit<$upperLimit){
				$this->generate(++$lowerLimit, $upperLimit);
			}
			
			return $this->output;
		}
		
	}
	
	
