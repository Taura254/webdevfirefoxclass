<?php
$firefox=array("Benjamin", "Amos", "Linda", "23");
echo $firefox[2];
echo "<br>";
var_dump($firefox);

echo"<br>";

// indexed arrays
$fruits=array("mangoes", "watermelon", "banana");
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";

echo"<br>";

// associative arrays use named keys assigned to them
$age=array("Peter"=>"25", "Ben"=>"45", "Amos"=>"50");
echo "Peter is " . $age['Peter'] . " years old.";

echo"<br>";
// sorting arrays  sorting an array in alphabetical or numerical order, descending or ascending
$numbers=array("40", "20", "10");
sort($numbers);

$numbers2=count($numbers);
for($num=0; $num<$numbers2; $num++) {
    echo $numbers[$num];
    echo"<br>";
}
