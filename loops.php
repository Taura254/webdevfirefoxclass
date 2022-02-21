<?php // start her or you can call these initialize counter
$num1=80;
while ($num1>=10) {
    echo "Nambari ni: $num1<br>";

    $num1-=5;
}
echo "<br>";
// do while loop
$num2=100;
do {
    echo "Nambari ni: $num2<br>";
    $num2-=10;

} while($num2>=20);
echo "<br>";
// for loop
// initialize counter, increment and decrement
for ($num3=120; $num3>=10; $num3-=10) {
    echo "Nambari ni: $num3<br>";
}

