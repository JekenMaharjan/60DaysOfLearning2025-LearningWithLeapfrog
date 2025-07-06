<?php

// Syntax
class ClassName {
  public static $staticProp = "Google";
}

// To access a static property use the class name, double colon (::), and the property name:
ClassName::$staticProp;


// Example 1
class pi {
    public static $value = 3.14159;
  }
  
  // Get static property
  echo pi::$value;
  echo "<br>";


// Example 2
class piNew {
    public static $value=3.14159;
    public function staticValue() {
      return self::$value;
    }
  }
  
  $piNew = new piNew();
  echo $piNew->staticValue();
  echo "<br>";


// Example 3
class piOld {
    public static $value=3.14159;
  }
  
  class x extends piOld {
    public function xStatic() {
      return parent::$value;
    }
  }
  
  // Get value of static property directly via child class
  echo x::$value;
  
  // or get value of static property via xStatic() method
  $x = new x();
  echo $x->xStatic();
  echo "<br>";