<?php

// Syntax
trait TraitName {
  // some code...
}

// Syntax
class MyClass {
    use TraitName;
  }

// Example 1
trait message1 {
    public function msg1() {
        echo "OOP is fun! ";
      }
    }
    
    class Welcome {
      use message1;
    }
    
    $obj = new Welcome();
    $obj->msg1();

// Example 2
trait message2 {
    public function msg1() {
        echo "OOP is fun! ";
    }
    }
    
    trait message3 {
    public function msg2() {
        echo "OOP reduces code duplication!";
    }
    }
    
    class Welcome1 {
    use message2;
    }
    
    class Welcome2 {
    use message2, message3;
    }
    
    $obj = new Welcome1();
    $obj->msg1();
    echo "<br>";
    
    $obj2 = new Welcome2();
    $obj2->msg1();
    $obj2->msg2();