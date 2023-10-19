<?php

// John Raymond S. Regala | 17-Oct 2023
// FileName: JRFunctions.php


include 'JRFunctionsLibrary.php';


welcomeMsg();
StudentsName('John Raymond');
echo "<hr>";

addTwoNumbers(10,10);
addTwoNumbers(6,5);
addTwoNumbers(3,2);
echo "<hr>";

echo square(5) . "<br>";
$result = square(100);
echo "$result<hr>";


echo multiply (5,4) . "<br>";
$result1 = multiply(5,4);
$result2 = multiply(b: 5, a: 4);
echo "\$result1 = $result1 <br>";
echo "\$result2 = $result2 <hr>";

myFunctionStatic(); // Output: 1
echo "<br>";
myFunctionStatic(); // Output: 2
echo "<br>";
myFunctionStatic(); // Output: 3

echo "<hr>";

$exe1 = sum(5,6,7,8,10);
$exe2 = sum(10,10,9,8,10);
$exe3 = sum(1,1,1,1);

echo "1st exe of sum = $exe1<br>";
echo "2nd exe of sum = $exe2<br>";
echo "3rd exe of sum = $exe3<hr>";


$seriesNumbers=[5,2,3,1];
$result=takeArray($seriesNumbers);
echo $result . "<br>";
echo $seriesNumbers[0] . "<br>";

?>
