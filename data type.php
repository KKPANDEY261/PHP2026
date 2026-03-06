<?php
//for string
$a="karan";
echo $a."<br>";
//for integer
$a=10;
echo $a."<br>";
//for float
$a=3.99;
echo $a."<br>";
//for boolean
$a=true;
echo $a."<br>";
$a=false;
echo $a."<br>";
//for array
//for indexed array
$a=array(11,22,33,44,55,66,77,"hello");
//for print array
print_r($a);
echo "<br>";
print_r($a[3]);
echo "<br>";
$a=[5,6,7,8,9,10];
//print_r($a);
//for associative array
$a=["name"=>"karan","address"=>"howrah"];
print_r($a);
echo "<br>";
print_r($a["name"].$a["address"]);
echo "<br>";
//for multidaimentional array
$a=[
    [1,2,3,4,5,6,[22,33,44,55,66]],
    [44,55,66],
    [33,22,11]
];
print_r($a[0][6][4]);

?>