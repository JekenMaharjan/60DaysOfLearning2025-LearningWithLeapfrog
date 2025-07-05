<?php

// Syntax
class ClassName {
  public static function staticMethod() {
    echo "Hello World!";
  }
}


// To access a static method use the class name, double colon (::), and the method name:
ClassName::staticMethod();
echo "<br>";

// Example 1
class greetingFirst {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  // Call static method
  greetingFirst::welcome();
  echo "<br>";


// Example 2
class greetingSecond {
    public static function welcome() {
      echo "Hello World!";
    }
  
    public function __construct() {
      self::welcome();
    }
  }
  
  new greetingSecond();
  echo "<br>";


// Example 3
class A {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class B {
    public function message() {
      A::welcome();
    }
  }
  
  $obj = new B();
  echo $obj -> message();
  echo "<br>";


// Example 4
class domain {
    protected static function getWebsiteName() {
      return "Google.com";
    }
  }
  
  class domainG extends domain {
    public $websiteName;
    public function __construct() {
      $this->websiteName = parent::getWebsiteName();
    }
  }
  
  $domainG = new domainG;
  echo $domainG -> websiteName;