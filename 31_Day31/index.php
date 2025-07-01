<?php

// Example 1
class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
        echo "<br><br>";
    }
}

// Strawberry is inherited from Fruit
class Strawberry1 extends Fruit {
public function message() {
    echo "Am I a fruit or a berry? ";
    echo "<br>";
}
}
$strawberry1 = new Strawberry1("Strawberry", "red");
$strawberry1->message();
$strawberry1->intro();




// Example 2
class Fruit2 {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
        echo "<br><br>";
    }
}
  
class Strawberry2 extends Fruit2 {
    public function message() {
        echo "Am I a fruit or a berry? ";
        echo "<br><br>";
    }
}
  
// Try to call all three methods from outside class
$strawberry2 = new Strawberry2("Strawberry", "red");  // OK. __construct() is public
$strawberry2->message(); // OK. message() is public
// $strawberry2->intro(); // ERROR. intro() is protected




// Example 3
class Fruit3 {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
  
class Strawberry3 extends Fruit3 {
    public function message() {
        echo "Am I a fruit or a berry? ";
        // Call protected method from within derived class - OK
        $this -> intro();
        echo "<br><br>";
    }
}
  
$strawberry3 = new Strawberry3("Strawberry", "red"); // OK. __construct() is public
$strawberry3->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class




// Example 4
class Fruit4 {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
  
class Strawberry4 extends Fruit4{
    public $weight;
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro() {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
        echo "<br>";
    }
}
  
$strawberry4 = new Strawberry4("Strawberry", "red", 50);
$strawberry4->intro();


// Example 5
final class Fruit5 {
    // some code
}

// will result in error
class Strawberry4 extends Fruit5 {
    // some code
}



// Example 6
class Fruit6 {
    final public function intro() {
        // some code
    }
}
  
class Strawberry4 extends Fruit6 {
    // will result in error
    public function intro() {
        // some code
    }
}