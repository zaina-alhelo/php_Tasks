<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="task1.php" method="GET" >
        <input type="email" name="email" placeholder="Email" require><br>
        <input type="password" name="password" placeholder="password" require><br>
        <input type="submit">
    </form>
    <br><hr><br>
    <form action="task2.php" method="POST" >
        <input type="url" name="url" placeholder="url" require><br>
        <input type="submit" value="GO">
    </form> -->
    <!-- <form action="#" method="POST">
        <h2> Basic Calculator </h2>
        <label for="number1">Number1 : </label>
        <input type="number" name="number1" require placeholder="number 1"><br>
        <label for="number2">Number2 : </label>
        <input type="number" name="number2" require placeholder="number 2"><br>
        <select name="operation" id="">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <input type="submit" value="Calculate"> -->
          <!-- <?php 
//         $result = 0;
//         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $number1 = $_POST['number1'];
//     $number2 = $_POST['number2'];
//     $operation = $_POST['operation'];
    
//     if($operation=="add"){
//         $result=$number1+$number2;
//     }elseif($operation=="subtract"){
//         $result=$number1-$number2;
//     }elseif($operation=="multiply"){
//         $result=$number1*$number2;
//     }else{
//         if($number2 !=0){
//             $result=$number1/$number2;
//         }else{
//             echo "can not divide by zero";
           
//         }
//     }
//         }
// echo "<br>The result is : $result"; 

    ?> -->


    <!-- </form> -->
     <!-- task 5  -->
         <!-- <?php

//    echo $_SERVER['SCRIPT_NAME']; ;
   
//    echo "<br>";
//    echo  basename(dirname($_SERVER['SCRIPT_NAME']));
//    echo "<br>";
//    echo $_SERVER['PHP_SELF'];
//    echo "<br>";
//    //task 6

//    echo date('Y-m-d H:i:s');
    ?> -->
    <!-- <?php
    //task 7
    // session_start();
    // if (!isset($_SESSION['counter'])) {
    //     $_SESSION['counter'] = 0;
    // }
    // $_SESSION['counter']++;

    // echo $_SESSION['counter']
?> -->
 <!-- <?php
//task 8


// session_start();

//         $_SESSION['counter'] = 0;

// if (!isset($_COOKIE['unique_visitor'])) {
//     setcookie('unique_visitor', '1', time() + (86400 * 30), '/');
//     $_SESSION['counter']++;
// }else{
//        $_SESSION['counter']++;
// }

// $counter = $_SESSION['counter'];
// echo "<h1>Visitor Counter</h1>";
// echo "Number of unique visitors: $counter";
 ?> -->



<!-- <?php
//Task 9
// setcookie("mode","dark",strtotime("1 month"),"/",false,false);
// setcookie("language","english",time()+60*60,"/",false,false);
// if(count($_COOKIE)>0){
//     echo "<h2>cookies</h2>";
//     foreach($_COOKIE as $name => $value){
//         echo "name : $name  , value : $value  <br>";
//     }
// }

//     if (isset($_GET['delete_cookie'])) {
//         setcookie("language", "english" , time()- 3600,"/");
//       header("Location: ".$_SERVER['PHP_SELF']);
//     exit();
//     }

?>
  <form method="get" action="">
        <button type="submit" name="delete_cookie" >Delete Cookie</button>
    </form> -->
</body>
</html>
