<?php
// Example 1
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age);
echo "<br><br>";

// Example 2
$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
echo "<br><br>";

// Example 3
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
echo "<br><br>";

// Example 4
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true));
echo "<br><br>";

// Example 5
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
echo "<br><br>";

// Example 6
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
echo "<br><br>";

// Example 7
$obj = json_decode($jsonobj);
foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
echo "<br><br>";

// Example 8
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
echo "<br><br>";