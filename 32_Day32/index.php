<?php

// PHP Constants Lesson
class NewGoodbye {
  const LEAVING_MESSAGE = "Thank you for visiting my 60DayOfLearning2025 Github!!";
}

echo NewGoodbye::LEAVING_MESSAGE;
echo "<br>";

class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting my 60DayOfLearning2025 Github!!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
      echo "<br>";
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();
  echo "<br>";



// PHP Abstract Classes Lesson
abstract class ParentClass1 {
    abstract public function someMethod1();
    abstract public function someMethod2($name, $color);
    abstract public function someMethod3() : string;
  }

// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
  }
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";
  
  $citroen = new citroen("Citroen");
  echo $citroen->intro();
  echo "<br><br>";
 


  abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass extends ParentClass {
    public function prefixName($name) {
      if ($name == "John Doe") {
        $prefix = "Mr.";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "{$prefix} {$name}";
    }
  }
  
  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");
  echo "<br><br>";




  abstract class ParentClass2 {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass1 extends ParentClass2 {
    // The child class may define optional arguments that are not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear") {
      if ($name == "John Doe") {
        $prefix = "Mr";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs";
      } else {
        $prefix = "";
      }
      return "{$greet} {$prefix}{$separator} {$name}";
    }
  }
  
  $class = new ChildClass1;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");