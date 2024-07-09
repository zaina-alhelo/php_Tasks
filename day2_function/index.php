<?php

//Task 1
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <$num; $i++) {
        if ($num % $i == 0) {
            return false; 
        }
    }
    
    return true;
}
$num = 3;
if (isPrime($num)) {
    echo $num . " is a prime number";
} else {
    echo $num . " is not a prime number";
}
//Task 2
echo "<hr>";
function reverse($str){
    echo strrev($str);

}
$str="remove";
reverse($str);

//Task 3
echo "<hr>";
function is_lower($str){
    $b = ctype_lower($str);
    if($b){
        echo "Your String is Ok ";
    }else{
        echo "Your String is  not Ok ";
    }

}
is_lower($str);

//Task 4
echo "<hr>";
function swap($x,$y){
$z=$x;
$x=$y;
$y=$z;
echo $x ."   ". $y;
}
$x=12;
$y=10;
echo $x ."   ". $y;
echo "<br>";
swap($x,$y);
//Task 6
echo "<hr>";

function armstrong_number($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum += pow($num[$i], $sl);
  }
  if ((string)$sum == (string)$num) {
    return "$num  is Armstrong Number ";
  } else {
    return "$num  is not Armstrong Number";
  }
}
$num = 407;
echo armstrong_number($num);

//Task 7
echo "<hr>";
function is_palindrome($str)
{   $str = strtolower($str);
    $str=str_replace(array(',' ,' ','?'), '', $str);
    if ($str == strrev($str))
    echo "Yes, it is a palindrome";
    else
     echo "No, it is not a palindrome";
}
$str = "Eva, can I see bees in a cave?";
is_Palindrome($str);

//Task 8
echo "<hr>";
$arr = array(2, 4, 7, 4, 8, 4);
print_r(array_unique($arr)) ;