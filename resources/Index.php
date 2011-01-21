<?php

class Index {
    
    public function __construct($plugins, $data) {
        
        $this->data = $data;
    }
    
    
    public function get() {
        
        require('models/Person.php');
        $person = new Person('Peter');
        return $person->greet();
    }
}
