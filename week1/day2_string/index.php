<pre>
<?php
//PHP String and String Functions	  
//Task 1       	
$string="hello, my name is zaina";
echo "String in uppercase : ".strtoupper($string);
echo "<br> <br>";
echo "String in lowercase : ".strtolower($string);
echo "<br> <br>";
echo "Make the first letter of the string uppercase : ".ucfirst($string);
echo "<br> <br>";
echo "Make the first letter of each word capitalized : ".ucwords($string);
echo "<hr>";
//Task2
$str_date="085119";
$hour=substr($str_date,0,2);
$min=substr($str_date,2,2);
$sec=substr($str_date,4,2) ;

echo " Date format =>  ". $hour .":".$min.":".$sec;
echo "<hr>";

//Task 3
$word="zaina";
if(strpos($string,$word) !== false){
    echo $word." Found ! ";
}else
echo $word ."Not found";
echo "<hr>";
//Task 4
$url='www.orange.com/index.php';
$extract=explode("/",$url)[1];
echo ($extract);
echo $word ."Not found";
echo "<hr>";

//Task 5
$email="info@orange.com";
$extract=explode("@",$email)[0];
echo $extract;
echo "<hr>";

//Task 6
echo substr($email,-3);

echo "<hr>";
//Task 7
$base="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
$pas_len=23;
echo substr(str_shuffle($base),0,$pas_len);

echo "<hr>";

//Task 8
echo str_replace("hello","hi",$string);

echo "<hr>";

//Task 9
$string1= "dragonball";
$string2= "dragonboll";


for ($i = 0; $i < strlen($string1); $i++) {
    if ($string1[$i] != $string2[$i]) {
        echo "First difference between two strings at position " . $i  . ": " . $string1[$i] . " vs " . $string2[$i];
        break;
    }
}
echo "<hr>";
//Task 10
$string="Twinkle, twinkle, little star";
var_dump(explode(",",   $string));

echo "<hr>";
//Task 11
$char="z";

if($char =='z'){
    echo "a";

}else{
echo chr(ord($char) + 1);
}
echo "<hr>";

//Task 12
$original= 'The brown fox'; 
$insert ='quick '; 
$insert_pos = 4; 
$new = substr_replace($original, $insert, $insert_pos, 0); 
echo $new; 
echo "<hr>";

//Task 13
$original="0000657022.24";
echo trim($original,"0");
echo "<hr>";


//Task 14
$original= 'The quick brown fox jumps over the lazy dog' ;
$insert ='fox'; 
echo str_replace($insert,"",$original); 
echo "<hr>";

//Task 15
$original="The quick brown fox jumps over the lazy dog---";
echo trim($original,"-");
echo "<hr>";

//Task 16
$original = '\"\1+2/3*2:2-3/4*3';
echo  str_replace(array('\"', '"', '/', '-', '+', ':', '*','\\'), ' ', $original);
echo "<hr>"; 

//Task 17
$original="The quick brown fox jumps over the lazy dog";
echo implode(" " ,array_slice(explode(" ",$original),0,5)) ;

echo "<hr>"; 
//Task 18

$num_str="2,543.12";
echo str_replace(",","",$num_str);
echo "<hr>"; 

//Task 19
$str="";
for($i=97;$i<=122;$i++){
    $str.=chr($i)." ";
}
echo $str;


?>
</pre>