<pre>
    <?php
//Task 1
$str="";
for($i=1;$i<10;$i++){
    $str.=$i."-";
}
$str.=$i;
echo $str;
echo"<hr>";

//Task 2
$sum=0;
for($i=0;$i<30;$i++){
    $sum+=$i;
}
echo "total is :". $sum;
echo"<hr>";

//Task 3
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        echo "* ";
    }
    echo "<br>";
}
echo"<hr>";
//Task 4
$num=5;
$f=1;
for($i=2;$i<=$num;$i++){
$f*=$i;
}
echo "The factorial is :".$f;
echo"<hr>";

//Task 5
$first = 0;
$second = 1;
echo $first . ", " . $second . ", ";

// Generate Fibonacci sequence
for ($i = 2; $i <9; $i++) {
    $next = $first + $second;
    echo $next.",";
    $first = $second;
    $second = $next;
}
echo"<hr>";
//Task 6
$str="Orange Coding Academy";
$c=0;
for($i=0;$i<strlen($str);$i++){
    if($str[$i] == 'c' || $str[$i] == 'C'){
        $c++;
    
    }
}
echo "the count is : ".$c;
echo"<hr>";
    ?>
</pre>
<!-- Task 7 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 cellpaddingleft="3px" cellspacing="0px">
        <?php
         for($i=1;$i<=6;$i++){
            echo "<tr>";
            for($j=1;$j<=5;$j++){
                $res=$i *$j;
                echo"<td>$i * $j = $res</td>";
            }
            echo "</tr>";
         }

        ?>

    </table>
    
  
</body>
</html>
<?php
echo"<hr>";
//Task 8
for($i=1;$i<=50;$i++){
    if($i%3==0 && $i%5==0){
        echo "FizzBuzz";

    }
    elseif($i%3==0){
        echo " Fizz ";
    }elseif($i%5==0){
        echo " Buzz ";
    }
    else{
        echo " $i ";
    }
}

echo"<hr>";
//Task 9
$num=1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " "; 
            $num++; 
        }
        echo "<br>";
    }
