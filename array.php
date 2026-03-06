<?php

echo "<h2>array and its types</h2>";

echo "<h3>indexed array</h3>";
//indexed array
$fruits = array("apple", "banana", "grapes");
//or
$fruits1 = ["apple", "banana", "grapes"];
echo $fruits[0] . "<br>";
echo $fruits1[2] . "<br>";


echo "<h3>associative array</h3>";
// associative array
// => fatcomma
$student = array("name" => "karan", "age" => 21);
//or
$student1 = ["name" => "vishal", "age" => 25];

echo $student["name"] . "<br>";
echo $student1["age"] . "<br>";

echo "<h3>multidimensional array</h3>";
//multidimensional array
echo "<pre>";

$detail = [
  ["karan", "CSA", "sarangarh"],
  [
    ["vishal", "csa", "balod"],
    [1, 2, 3, 4, 5]
  ]
];

print_r($detail) . "<br>";

echo json_encode($detail);
echo "<pre>";
//  echo implode(" ,",$detail);
//to print full array
echo $detail[1][0][0] . "<br>";
echo $detail[1][1][2] . "<br>";
echo $detail[0][0] . "<br>";


?>