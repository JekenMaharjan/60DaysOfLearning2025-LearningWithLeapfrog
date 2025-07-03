<?php

// Example 1
interface InterfaceName {
  public function someMethod1();
  public function someMethod2($name, $color);
  public function someMethod3() : string;
}


// Example 2
interface Animals {
    public function makeSound();
  }
  
  class Cats implements Animals {
    public function makeSound() {
      echo "Meow";
    }
  }
  
  $animal = new Cats();
  $animal->makeSound();
  echo "<br>";


  // Example 3
  // Interface definition
  interface Animal {
      public function makeSound();
      public function getName(); // Added method to get the animal's name
  }
  
  // Class definitions
  class Cat implements Animal {
      public function makeSound() {
          echo "Meow";
      }
      public function getName() {
          return "Cat";
      }
  }
  
  class Dog implements Animal {
      public function makeSound() {
          echo "Bark";
      }
      public function getName() {
          return "Dog";
      }
  }
  
  class Mouse implements Animal {
      public function makeSound() {
          echo "Squeak";
      }
      public function getName() {
          return "Mouse";
      }
  }
  
  // Create a list of animals
  $cat = new Cat();
  $dog = new Dog();
  $mouse = new Mouse();
  $animals = array($cat, $dog, $mouse);
  
  // Tell the animals to make a sound
  foreach($animals as $animal) {
      echo "Sound made by " . $animal->getName() . " is ";
      $animal->makeSound();
      echo "<br>";
  }
  