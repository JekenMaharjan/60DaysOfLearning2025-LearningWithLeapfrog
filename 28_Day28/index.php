<?php
    // Syntax
    class Fruit {
    // code goes here...
    }


    // Example 1
    class Fruit1 {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
    }


    // Example 2
    class Fruit2 {
        // Properties
        public $name;
        public $color;
    
        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        }
        
        $apple = new Fruit2();
        $banana = new Fruit2();
        $apple->set_name('Apple');
        $banana->set_name('Banana');
        
        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();
        echo "<br><br>";

    
    // Example 3
    class Fruit3 {
        // Properties
        public $name;
        public $color;
      
        // Methods
        function set_name($name) {
          $this->name = $name;
        }
        function get_name() {
          return $this->name;
        }
        function set_color($color) {
          $this->color = $color;
        }
        function get_color() {
          return $this->color;
        }
        }
        
        $apple = new Fruit3();
        $apple->set_name('Apple');
        $apple->set_color('Red');
        echo "Name: " . $apple->get_name();
        echo "<br>";
        echo "Color: " . $apple->get_color();
        echo "<br><br>";


    // Example 4
    class Fruit4 {
        public $name;
    }
    $apple = new Fruit4();

    
    // Example 5
    class Fruit5 {
        public $name;
        function set_name($name) {
          $this->name = $name;
        }
        }
        $apple = new Fruit5();
        $apple->set_name("Apple");
        
        echo $apple->name;
        echo "<br><br>";


    // Example 6
    class Fruit6 {
        public $name;
    }
    $apple = new Fruit6();
    $apple->name = "Apple";
    
    echo $apple->name;
    echo "<br><br>";


    // Example 7
    $apple = new Fruit6();
    var_dump($apple instanceof Fruit6);