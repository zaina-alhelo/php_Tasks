<?php
$cities = ["New York", "London", "Paris", "Tokyo", "Sydney", "Berlin", "Moscow", "Dubai", "Rome", "Toronto"];

echo "cities :";
foreach($cities as $city){
    echo $city . " , ";
}
echo "<br>";


$reverse=array_reverse($cities);
echo "reverse cities :";
foreach($reverse as $city){
    echo $city . " , ";
}


echo "<br>";
echo "index of Sydney :".array_search("Sydney",$cities);
echo "<br>";
echo "remove sydney: ";
if($find=array_search("Sydney",$cities) !==false ){
    unset($cities[$find]);
}
foreach($cities as $city){
    echo $city . " , ";
}
echo "<br>";
echo " Slice the first three cities : ";
$slice=array_slice($cities,0,3);
foreach($slice as $city){
    echo $city." , ";
}
echo "<br>";
echo "<hr>";
////////////////////////task2
$products = array(
    "Apple" => 2.99,
    "Banana" => 1.49,
    "Orange" => 3.25,
    "Mango" => 6.00,
    "Pineapple" => 5.99
);
ksort($products);
foreach($products as $product=>$price ){
    echo $product." , ";
}
echo "<br>";
asort($products);
foreach($products as $product=>$price){
    echo "price : ".$price." , ";
}

echo "<br>";

$avg=(array_sum($products))/(count($products));
echo "average price : ".$avg;

echo "<br>";
$max=0;
$expensive_product="";
foreach($products as $product=>$price ){
   if($price>$max){
    $max = $price;
    $expensive_product=$product;
   }
}
echo " most expensive product :".$expensive_product;
echo "<br>";
echo "<hr>";
/////////////////////task 3

$books = array(
    array(
        "title" => "1984",
        "author" => "George Orwell",
        "year" => 1949
    ),
    array(
        "title" => "To Kill a Mockingbird",
        "author" => "Harper Lee",
        "year" => 2015
    ),
    array(
        "title" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "year" => 2020
    ),
    array(
        "title" => "The Catcher in the Rye",
        "author" => "J.D. Salinger",
        "year" =>2222
    )
);
foreach($books as $book){
    if($book["year"]>2010){
        foreach($book as $b){
            echo $b.",";
           

        } echo"<br>";
    }
}

echo "<br>";
array_push($books,["title"=>"book2",
"author"=>"Harper Lee",
"year"=>2003
]);
print_r($books);
echo "<br>";
echo "<br>";

$books[1]["author"]="author3";
print_r($books);
echo "<br>";
echo "<br>";


echo "<hr>";
echo "<hr>";
$title=(array_column($books,"title"));
sort($title);
print_r($title);
echo "<hr>";
echo "<hr>";








//•  Use array_map() 
print_r(array_map('strtoupper', $cities)) ;

echo "<br><br>";
//Use array_filter() 

print_r(array_filter($cities, function($city) {
    return strlen($city) > 5;
}));
echo "<br><br>";
///  Use array_reduce() 
$numbers = array(1, 2, 3, 4, 5);
$sum = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
}, 0);

echo "The sum of the array is: $sum";

echo "<br><br>";
///Use array_walk() 
function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");
print_r($a);


echo "<br><br>";
///Use array_diff() 

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);


echo "<br><br>";
///Use array_diff() 
print_r(array_intersect($a1,$a2));

echo "<br><br>";
//Use array_combine() 
$a1 = array("a", "b", "c", "d");
$a2 = array(1, 2, 3, 4);
print_r(array_combine($a1,$a2));

echo "<br><br>";
//Use array_column() 
print_r(array_column($books,"year"));
echo "<br><br>";
//Use array_slice() 
print_r(array_slice($a1,1,3));

echo "<br><br>";
//Use in_array() 

if (in_array("a", $a1)) {
    echo "a: exists ";}