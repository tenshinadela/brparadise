<?php

   class Person {
        // first name of person
        private $fname;
        // last name of person
        private $lname;
        
        // Constructor
        public function __construct($fname, $lname) {
            echo "Initialising the object...<br/>"; 
            $this->fnames = $fname;
            $this->lnames = $lname;
        }
        
        // public method to show name
        public function showName() {
            echo "My name is: " . $this->fnames . " " . $this->lnames; 
        }
    }
    
    // creating class object
    $john = new Person("John", "Wick");
    $john->showName();

?>