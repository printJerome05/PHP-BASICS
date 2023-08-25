<!DOCTYPE html>
<html>
<body>

<h1>
<?php

// variables
//br inside the '' to next line 
$name = 'jerome<br>';
$age = 12;
$gender = 'male<br>';

//echo to print
echo $name;
echo $age;
echo $gender;

// "" double quote can contain string variable
echo "Name: $name";
echo "Gender: $gender";
// int can do it also in double qoute
echo "age: $age<br>";

echo "MyawdawdawdawwddAWD<br>";

// Data type tells what variable is inside nthe ()
var_dump("qwe<br>");
var_dump(99);
var_dump(99.99);
var_dump('wadawdaw', '12312<br>');
var_dump(false);

// Constant data cant be change
define ('TEST', 'qwewdqwd');
echo "<br>";
echo TEST;

//to print constant echo then the 'text inside here' in the first define
define ('numtest', 123);
echo "<br>";
echo numtest;
echo "<br>";

// operators +  - * / % **
echo 1 + 9;
$num1 = 2;
$num2 = 5;
echo "<br>";
echo $num1 + $num2;

echo "<br>";
//Functions 
function gREET($hello) {
    // return means returning the value
    return "GOODDAY: $hello";
}
// calling the function greet example
// need the value (inside this) to fucntion the hello
echo gREET("Jerome");
echo "<br>";

//add function getting number to the echo then doing it 
// to fucntion in the return
function NUMBERS($Number){
    return 1 + $Number;
}

echo NUMBERS(12);

//ARRRAY
$arrayTest = ['JEROME', 'MARCO'];
$arrayTestnumber = [12, 15];
echo "<br>";
// this code bellow we defined an index of qwe to a means it cant 
// be called by 0 calling it state a at the [];
$arrayTestarray = array('a' => 'qwe', 'rty');
//need the '' [inside this when calling a string index]
echo $arrayTestarray['a'];
echo "<br>";
//print the array
echo $arrayTest[1];
echo "<br>";
echo $arrayTestnumber[1];

// conditions
echo "<br>";
$jerome = 7;


if($jerome == 6)
{
    echo "EQUALS";
}else{
    echo "NOT EQUALS";
}

// example of 3 equals 
// the 3 equals means it need to be exact not a string to int 
// in need to be exact of what variable type is compared
// for example int to int . string to string
echo "<br>";
$jerome = 7;

// notice i put '' on the 7 it resulted to not equals
if($jerome === '7')
{
    echo "EQUALS";
}else{
    echo "NOT EQUALS";
}
echo "<br>";


// shortcut to if else statement is ? at the end of the condtion
//example
$testnum = 2;
// the correct after the ? is the if and the else is after the :
echo $testnum == 2 ? 'correct' : 'Inncorrect';


// case condition 
echo "<br>";
switch($testnum){
    //the case number iexample case 1 the number 1 represent of
    // what the value should hold then if it matches it
    //the case that match it will function
    case 1:
        echo 'NUMBER 1<br>'; break;
    case 2:
         echo 'NUMBER 2 <br>'; break;
    default:
         echo 'None< br>';
}
?>
</h1>  

<

</body>
</html>