<?php

// Example 1 - Using Iterables
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

$arr = ["a", "b", "c"];
printIterable($arr);
echo "<br><br>";


// Example 2 - Return Iterables
function getIterable():iterable {
    return ["a", "b", "c"];
  }
  
  $myIterable = getIterable();
  foreach($myIterable as $item) {
    echo $item;
  }
  echo "<br><br>";


// Example 3 - Implement the Iterator interface and use it as an iterable
// Create an Iterator
class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;
  
    public function __construct($items) {
      // array_values() makes sure that the keys are numbers
      $this->items = array_values($items);
    }
  
    public function current() {
      return $this->items[$this->pointer];
    }
  
    public function key() {
      return $this->pointer;
    }
  
    public function next() {
      $this->pointer++;
    }
  
    public function rewind() {
      $this->pointer = 0;
    }
  
    public function valid() {
      // count() indicates how many items are in the list
      return $this->pointer < count($this->items);
    }
  }
  
  // A function that uses iterables
  function printIterables(iterable $myIterable) {
    foreach($myIterable as $item) {
      echo $item;
    }
  }
  
  // Use the iterator as an iterable
  $iterator = new MyIterator(["a", "b", "c"]);
  printIterables($iterator);