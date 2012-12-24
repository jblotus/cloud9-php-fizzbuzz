<?php
use jblotus\FizzBuzz as FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    
    public function setUp() {
        
    }
    
    public function tearDown() {
        
    }
    
    /**
     * Test FizzBuzz Output
     */
    public function testFizzBuzzHas100Iterations() {
        
        $fizzBuzz = new FizzBuzz;
        
        $this->assertCount(100, $fizzBuzz);        
    }
}