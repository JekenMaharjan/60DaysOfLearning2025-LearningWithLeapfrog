<?php

// PHP Constructor
// Example 1
class Fruit {
    public $name;
    public $color;
  
    function __construct($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
echo "<br><br>";


// Example 2
class Fruit1 {
    public $name;
    public $color;
  
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name() {
        return $this->name;
    }
    function get_color() {
        return $this->color;
    }
}
  
$apple = new Fruit1("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br><br>";


// PHP Destructor
// Example 1
class Fruit3 {
    public $name;
    public $color;
  
    function __construct($name) {
        $this->name = $name;
    }
    function __destruct() {
        echo "The fruit is {$this->name}.";
    }
}
  
$apple = new Fruit3("Apple");
echo "<br><br>";

// Example 2
class Fruit4 {
    public $name;
    public $color;
  
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
  
$apple = new Fruit4("Apple", "red");
echo "<br><br>";