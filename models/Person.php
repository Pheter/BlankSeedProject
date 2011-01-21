<?php

class Person {
    
    public function __construct($name) {
        
        $this->name = $name;
    }
    
    public function greet() {
        
        return 'Hello, my name is '.$this->name.'.';
    }
}
