<?php

// Mark Anthony Celeste | 17-Oct 2023
// FileName: JRFunctionsLibrary.php


//welcomeMsg();
function welcomeMsg() {
	echo "Hello Welcome!<br>";
	echo "Welcome to PHP Functions()<br>";	
}

function StudentsName($firstname) {
	echo "$firstname<br>";
}



// Function with Parameter Multiple Arguments
function addTwoNumbers(int $a, int $b) {
	echo $a + $b;
	echo "<br>";
}

//Function with return value
function square($num) {
    return $num * $num;
}

// Function with name Arguments
function multiply($a, $b) 
{
    return $b + 4 * $a;
}


//Function with Static Variable
function myFunctionStatic() {
    static $count = 0;
	//$count = 0;
    $count++;
    echo $count;
}

//Variable-length argument lists 
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}


//Function with Array Parameters
function takeArray($arr) {
	return $arr[1] + $arr[3];
}

?>