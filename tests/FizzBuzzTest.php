<?php
use jblotus\FizzBuzz as FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase {    
    
    public function testFizzBuzzIsOneHundredBleepsLong() {
        
        $fizzBuzz = new FizzBuzz;        
        $this->assertCount(100, $fizzBuzz);        
    }
    
    public function testFizzBuzzOutput() {
        
        $fizzBuzz = new FizzBuzz;        
        
        $i = 0;
        
        foreach ($fizzBuzz as $bleep) {
            $i++;
            echo $bleep . "\n";
            
            $is_multiple_of_three = $i % 3 === 0;
            $is_multiple_of_five = $i % 5 === 0;
                        
            if ($is_multiple_of_three && $is_multiple_of_five) {
                $this->assertEquals('FizzBuzz', $bleep, 'Should output FizzBuzz');
            } else if ($is_multiple_of_three) {
                $this->assertEquals('Fizz', $bleep, 'Should output only Fizz');
            } else if ($is_multiple_of_five) {
                $this->assertEquals('Buzz', $bleep, 'Should output only Buzz');
            } else {
                $this->assertEquals($i, $bleep, 'Should output the number');
            }            
            
        }
        
        $this->assertEquals(100, $i, 'We should have gone through 100 iterations');
    }
    
     
}