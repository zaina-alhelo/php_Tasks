<?php
$array=array("orange","banana","mango","kiwi","Papaya");
for($i=0;$i<5;$i++){
    echo $array[$i]." ";
}
echo "<br>";
array_push($array,"any");
for($i=0;$i<6;$i++){
    echo $array[$i]." ";
}
echo "<br>";
array_pop($array);
for($i=0;$i<5;$i++){
    echo $array[$i]." ";
}
echo "<br>";
if(in_array("banana",$array)) {
    echo "exist";
}
echo "<br>";
////////////Task 2
echo "<hr>";
$people=["zaina"=>20,
"saeed"=>56,
"nada"=>25,
"anas"=>26,
"bat"=>28];
var_dump($people);  
echo "<br>";
$people+=["mal"=>20];
var_dump($people);  
echo "<br>";
unset($people["mal"]);
var_dump($people);  
echo "<br>";
$find= array_search("zaina",$people);
 echo $find. "hhh";

echo "<br>";

///////////////////////////////task3
echo "<hr>";
$students=[   ["zaina",20,100],
    ["ahmad",20,50],
    ["nada",20,80],
];


foreach($students as $student){
    echo "Name : ".$student[0]." Age : " . $student[1]. " grade :" .$student[2];
    echo "<br>";
}
//add
 echo "<br>";
array_push($students,["amal",30,75]);
foreach($students as $student){
      echo "Name : ".$student[0]." Age : " . $student[1]. " grade :" .$student[2];
    echo "<br>";
}


///update 
$students[0][2]=99;
echo "Updated student:";
print_r($students[0]);


 echo "<br>";
 echo "<br>";
 //remove 
 unset($students[1]);
foreach($students as $student){
      echo "Name : ".$student[0]." Age : " . $student[1]. " grade :" .$student[2];
    echo "<br>";
}

echo "<hr>";
///////////////////////task 4

$arr=array(1,15,6,10,5,20,10,4);

//Use array_push() 
array_push($arr,"90");
print_r($arr);
echo "<br>";
// Use array_pop() 
array_pop($arr) ;
print_r($arr);
echo "<br>";

//Use array_keys() 
$ar=["zaina"=>20,"saeed"=>40,"sas"=>30];
print_r (array_keys($ar));
echo "<br>";
//Use array_values() 
print_r(array_values($ar));
echo "<br>";

// Use count() 
print_r(count($arr));
echo "<br>";

// Use array_merge() 
$merage=array_merge($ar,$arr);
print_r($merage);   
echo "<br>";
//Use array_search() 
print_r(array_search(20,$ar));
echo "<br>";

sort($arr);
print_r($arr);
echo "<br>";
//• Use ksort() 
ksort($merage);
print_r($merage);
echo "<br>";

//Use asort() 
asort($ar);
print_r($ar);
echo "<br>";