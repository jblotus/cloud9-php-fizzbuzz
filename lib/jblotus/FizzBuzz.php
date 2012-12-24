<?php
namespace jblotus;

class FizzBuzz implements \Iterator, \Countable {
    
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';
    
    protected $_position = 1;
    protected $_end = 100;
    
    public function count() {        
        return $this->_end;
    }
    
    public function current() {

        $is_multiple_of_three = $this->_position % 3 === 0;
        $is_multiple_of_five = $this->_position % 5 === 0;
        
        if (!$is_multiple_of_three && !$is_multiple_of_five) {
            return $this->_position;
        }  
        
        $output = '';      
        if ($is_multiple_of_three) {
            
            $output .= self::FIZZ;    
        }
        
        if ($is_multiple_of_five) {
            $output .= self::BUZZ;
        }
            
        return $output;        
    }
    
    public function next() {
        ++$this->_position;        
    }
    
    public function rewind() {        
        $this->_position = 1;
    }    
    
    public function key() {                
        return $this->_position;
    }
    
    public function valid() {            
        return $this->_position <= $this->_end;
    }
    
}