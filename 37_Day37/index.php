<?php

// Declare a namespace called Html
// namespace Html;

// Wrong declaration of namespace (A namespace declaration must be the first thing in the PHP file)
// echo "Hello World!";
// namespace Html;
// ...


namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>


<?php
// namespace Code\Html;
?>

<!DOCTYPE html>
<html>
    <body>

    <?php
    $table->message();
    
    // Use classes from the Html namespace
    // $table = new Html\Table();
    // $row = new Html\Row();

    // Use classes from the Html namespace without the need for the Html\qualifier
    // namespace Html;
    // $table = new Table();
    // $row = new Row();

    // Give a namespace an alias
    use Html as H;
    $table = new H\Table();

    // Give a class an alias
    use Html\Table as T;
    $table = new T();
    ?>

    </body>
</html>