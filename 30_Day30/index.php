<?php
// Example 1
class Fruit1 {
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit1();
$mango->name = 'Mango'; // OK
echo "<br>";
echo $mango->name;
echo "<br>";
// $mango->color = 'Yellow'; // ERROR
// $mango->weight = '300'; // ERROR


// Example 2
class Fruit2 {
    public $name;
    public $color;
    public $weight;
  
    function set_name($n) {  // a public function (default)
        $this->name = $n;
    }
    protected function set_color($n) { // a protected function
        $this->color = $n;
    }
    private function set_weight($n) { // a private function
        $this->weight = $n;
    }
}

$mango = new Fruit2();
$mango->set_name('Mango'); // OK
echo "<br>";
echo $mango->name;
echo "<br>";
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR